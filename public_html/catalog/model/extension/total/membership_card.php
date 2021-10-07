<?php
class ModelExtensionTotalMembershipCard extends Model {
	private $default_code = '-';
	private $settings;
	private $card_settings;
	private $default_card_settings;
	
	public function __construct($registry) {
		$this->registry = $registry;

		$this->card_settings = $this->config->get('module_membership_card');
		$this->default_card_settings = $this->config->get('module_membership_default_card');
    }
	
	public function getCard($code, $total = 0) {
		$status = true;
		
		$card_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "membership_card` WHERE `code` = '" . $this->db->escape($code) . "' AND ((`date_start` = '0000-00-00' OR `date_start` < NOW()) AND (`date_expiry` = '0000-00-00' OR `date_expiry` > NOW())) AND (`status` = '1' OR `status` = '2')");

		if ($card_query->num_rows) {
			$this->load->model('account/membership');
			
			$card = $card_query->row;
			
			if (is_array($total)) {
				$sub_total = $total['total'];
			} else {
				$sub_total = $total;
			}

			if ($sub_total && (($card['maximum_order_amount'] && $card['maximum_order_amount'] < $sub_total) || ($card['minimum_order_amount'] && $card['minimum_order_amount'] > $sub_total))) {
				$status = false;
			}

			$card_history_query = $this->db->query("SELECT COUNT(*) AS `uses_total` FROM `" . DB_PREFIX . "membership_card_history` WHERE `card_id` = '" . (int)$card['card_id'] . "'");
			
			if ($card['uses_total'] && $card_history_query->row['uses_total'] >= $card['uses_total']) {
				$status = false;
			}
			
			if ($card['logged'] && !$this->customer->getId() && !isset($this->session->data['api_id'])) {
				$status = false;
			}

			if ($this->customer->getId()) {
				$card_history_query = $this->db->query("SELECT COUNT(*) AS `uses_customer` FROM `" . DB_PREFIX . "membership_card_history` WHERE `card_id` = '" . (int)$card['card_id'] . "' AND customer_id = '" . (int)$this->customer->getId() . "'");

				if ($card['uses_customer'] && $card_history_query->row['uses_customer'] >= $card['uses_customer']) {
					$status = false;
				}
			}

			if ($this->card_settings['order_expiry']['value']) {
				$this->db->query("UPDATE `" . DB_PREFIX . "membership_card_history` SET `status` = 0 WHERE `card_id`  = '" . (int)$card['card_id'] . "' AND DATE_ADD(`datetime_added`, INTERVAL " . $this->card_settings['order_expiry']['value'] . " " . $this->card_settings['order_expiry']['type'] . ") <= NOW() AND `status` = 1");
			}

			$card['total'] = $this->model_account_membership->getCardBalance($card['card_id']);

			if (isset($this->card_settings['accounted_orders_balance'], $this->card_settings['accounted_orders_request']) && (($card['status'] == 2 && in_array('current_order', $this->card_settings['accounted_orders_request'])) || ($card['status'] != 2 && in_array('current_order', $this->card_settings['accounted_orders_balance'])))) {
				$card['total'] += $sub_total;
			}

			if ($card['status'] != 2 || $this->card_settings['request_discount']){
				$card['discount'] = $this->calcDiscount($card);
			} else {
				$card['discount'] = $this->calcDiscount();
			}

			$card['products']	= $card['products']	  ? explode(',', $card['products'])   : array();
			$card['categories'] = $card['categories'] ? explode(',', $card['categories']) : array();
		} else {
			$status = false;
		}

		if ($status) {
			return $card;
		}
	}
	
	public function getDefaultCard($total = 0) {
		if (is_array($total)) {
			$sub_total = $total['total'];
		} else {
			$sub_total = $total;
		}

        $this->default_card_settings['uses_total'] = 0;

        $categories = array();
		$products = array();
		
		if ($this->card_settings['request_discount']) {
		    if (!empty($this->default_card_settings['categories'])) {
                $categories =  $this->default_card_settings['categories'];
            }

            if (!empty($this->default_card_settings['products'])) {
                $products =  $this->default_card_settings['products'];
            }

			if ($this->customer->getId() && in_array('completed_orders', $this->card_settings['accounted_orders_request'])) {
				$this->load->model('account/membership');
				
				$this->default_card_settings['uses_total'] += $this->model_account_membership->getCustomerBalance();
			}

			if (in_array('current_order', $this->card_settings['accounted_orders_request'])) {
				$this->default_card_settings['uses_total'] += $sub_total;
			}

			$discount = $this->calcDiscount($this->default_card_settings);
		} else {
			$discount = $this->calcDiscount();
		}

		return array(
			'code'			=> $this->default_code,
			'total'			=> $this->default_card_settings['uses_total'],
			'discount'		=> $discount,
			'categories'	=> $categories,
            'products'		=> $products,
			'free_shipping'	=> $this->card_settings['request_discount'] ? $this->default_card_settings['free_shipping'] : 0,
			'status'		=> 2
		);
	}

	public function getTotal($total) {
		if (empty($this->session->data['membership_card']) && $total['total'] && $this->validateStatus()) {
			if ($this->customer->isLogged()) {
				$this->load->model('account/membership');
		
				$card_code = $this->model_account_membership->getCardCode();
						
				if ($card_code && $this->card_settings['logged_auto_discount']) {
					$this->session->data['membership_card'] = $card_code;
				}
			}
			
			if (empty($card_code) && $this->card_settings['auto_issuance_card'] == 'without_request' && $this->validateRequest()) {
				$card_info = $this->getFreeCard();
					
				if ($card_info) {
					$this->reserveCard($card_info['card_id']);
						
					$this->session->data['membership_card'] = $card_info['code'];
				} else {
					$this->session->data['membership_card'] = $this->default_code;
				}
			}
		}
		
		if (isset($this->session->data['membership_card'])) {
			$this->load->language('extension/total/membership_card');
			
			if ($this->session->data['membership_card'] == $this->default_code) {
				$card_info = $this->getDefaultCard($total);
			} else {
				$card_info = $this->getCard($this->session->data['membership_card'], $total);
			}
			
			if ($this->card_settings['first_discount_value'] && $card_info['status'] == 2) {
				$card_info['discount']['current']['value'] = $this->card_settings['first_discount_value'];
				$card_info['discount']['current']['type'] = $this->card_settings['first_discount_type'];
			}
			
			$this->load->model('catalog/product');
			
			$products = $this->cart->getProducts();

			if ($card_info && count($products)) {
				$discount_total = 0;
				
				foreach ($products as $product) {
					if ($this->card_settings['minimum_cost_goods'] > $product['price']) {
						$status = false;
					} elseif (!$card_info['products'] && !$card_info['categories']) {
						$status = true;
					} elseif ($card_info['products'] && in_array($product['product_id'], $card_info['products'])) {
						$status = true;
					} else {
						$status = false;
						
						$categories = $this->db->query("SELECT `category_id` FROM `" . DB_PREFIX . "product_to_category` WHERE `product_id` = '" . (int)$product['product_id'] . "'")->rows;
						
						foreach ($categories as $category) {
							if (in_array($category['category_id'], $card_info['categories'])) {
								$status = true;
								
								break;
							}
						}
					}
									
					if ($status) {
						$product_data=$this->model_catalog_product->getProduct($product['product_id']);
						$product_discount=$this->model_catalog_product->getProductDiscounts($product['product_id']);
						
						$discount = 0;
						$discount_status = true;
						
						if ($card_info['discount']['current']['base'] == 'without_discount') {
							foreach ($product_discount as $d) {
								if ($d['quantity'] == $product['quantity'] && $d['price'] == $product['price'] && !$product_data['special']) {
									$discount_status = false;
									break;
								}
							}
						} elseif ($card_info['discount']['current']['base'] == 'without_special' ) {
							if ($product_data['special'] && $product_data['special'] == $product['price']) {
								$discount_status = false;
							}
						} elseif ($card_info['discount']['current']['base'] == 'without_special_and_discount') {
							foreach ($product_discount as $d) {
								if ($d['quantity'] == $product['quantity'] && $d['price'] == $product['price'] && !$product_data['special']) {
									$discount_status = false;
									break;
								}
							}
							
							if (isset($product_data['special']) && $product_data['special'] == $product['price']) {
								$discount_status = false;
							}
						}
						
						if ($discount_status) {
							if ($card_info['discount']['current']['type'] == 'F' || $card_info['discount']['current']['type'] == 'S') {
								if ($this->card_settings['maximum_card_discount']) {
									$product['total'] = $product['total'] / 100 * $this->card_settings['maximum_card_discount'];
								}
								
								$discount = min($product['total'], $card_info['discount']['current']['value']);
								$card_info['discount']['current']['value'] -= $discount;
							} else {
								$discount = $product['total'] / 100 * $card_info['discount']['current']['value'];
							}
						}
						
						if ($product['tax_class_id']) {
							$tax_rates = $this->tax->getRates($discount, $product['tax_class_id']);

							foreach ($tax_rates as $tax_rate) {
								if ($tax_rate['type'] == 'P') {
									$total['taxes'][$tax_rate['tax_rate_id']] -= $tax_rate['amount'];
								}
							}
						}
					
						$discount_total += $discount;
					}
				}
				
				if ($card_info['free_shipping'] && !empty($this->session->data['shipping_method']) && !empty($this->session->data['shipping_method']['cost'])) {
					if (!empty($this->session->data['shipping_method']['tax_class_id'])) {
						$tax_rates = $this->tax->getRates($this->session->data['shipping_method']['cost'], $this->session->data['shipping_method']['tax_class_id']);

						foreach ($tax_rates as $tax_rate) {
							if ($tax_rate['type'] == 'P') {
								$total['taxes'][$tax_rate['tax_rate_id']] -= $tax_rate['amount'];
							}
						}
					}

					$discount_total += $this->session->data['shipping_method']['cost'];
				}

				if ($discount_total > $total['total']) {
					$discount_total = $total['total'];
				}
				
				if ($card_info['discount']['current']['type'] == 'S' && $discount_total > 0) {
					$this->session->data['membership_card_savings'] = $discount_total;
				}
				
				if (!empty($this->card_settings['name'][$this->config->get('config_language_id')])) {
					$title = $this->card_settings['name'][$this->config->get('config_language_id')] . ' (%s)';
				} else {
					$title = $this->language->get('text_card');
				}

				$total['totals'][] = array(
					'code'       => 'membership_card',
					'title'      => sprintf($title, $this->session->data['membership_card']),
					'value'      => -$discount_total,
					'sort_order' => $this->config->get('total_membership_card_sort_order')
				);

				$total['total'] -= $discount_total;
				
				
			} else {
				unset($this->session->data['membership_card']);
			}
		}
	}
	
	public function getFreeCard() {
		$result = $this->db->query("SELECT * FROM `" . DB_PREFIX . "membership_card` WHERE `customer_id` = '0' AND ((`date_start` = '0000-00-00' OR `date_start` < NOW()) AND (`date_expiry` = '0000-00-00' OR `date_expiry` > NOW())) AND `status` = '1' LIMIT 1");

		return $result->row;
	}
	
	public function reserveCard($card_id) {
		if ($this->customer->isLogged()) {
			$customer_id = $this->customer->getId();
		} else {
			$customer_id = 0;
		}
		
		$this->db->query("UPDATE `" . DB_PREFIX . "membership_card` SET `customer_id` = '" . (int)$customer_id . "', `status` = '2' WHERE `card_id` = '" . (int)$card_id . "'");
	}
 
	public function confirm($order_info, $order_total) {
		$code = '';

		$start = strpos($order_total['title'], '(') + 1;
		$end = strrpos($order_total['title'], ')');

		if ($start && $end) {
			$code = substr($order_total['title'], $start, $end - $start);
		}
		
		if ($code) {
			$card_info = $this->getCard($code, $order_info['total']);

			if ($card_info) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "membership_card_history` SET `card_id` = '" . (int)$card_info['card_id'] . "', `order_id` = '" . (int)$order_info['order_id'] . "', `customer_id` = '" . (int)$card_info['customer_id'] . "', `total` = '" . (float)$order_info['total'] . "', `discount` = '" . -(float)$order_total['value'] . "', `total_without_discount` = '" . (float)($order_info['total'] - $order_total['value']) . "', `datetime_added` = NOW()");
				
				$notification_settings = $this->config->get('module_membership_notification');
				
				if ($notification_settings['card_balance_change']) {
					$this->sendMail('card_balance_change', $code, array_merge($order_info, $order_total));
				}
			} else {
				return $this->config->get('config_fraud_status_id');
			}
		}
	}
	
	public function reduceSavings($card_id, $order_id, $savings) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "membership_card_history` SET `card_id` = '" . (int)$card_id . "', `order_id` = '" . (int)$order_id . "', `discount` = '" . -(float)$savings . "', `datetime_added` = NOW()");
	}

	public function unconfirm($order_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "membership_card_history` WHERE `order_id` = '" . (int)$order_id . "'");
	}
	
	public function addOrderTotal($order_id, $total) {
		if ($total['code'] == 'membership_card') {
			$this->db->query("UPDATE `" . DB_PREFIX . "order` SET `total` = `total` + '" . (float)$total['value'] . "' WHERE `order_id` = '" . (int)$order_id . "'");
	
			$this->db->query("UPDATE `" . DB_PREFIX . "order_total` SET `value` = `value` + '" . (float)$total['value'] . "' WHERE `code` = 'total' AND `order_id` = '" . (int)$order_id . "'");
		
			$this->db->query("INSERT INTO `" . DB_PREFIX . "order_total` SET `order_id` = '" . (int)$order_id . "', `code` = '" . $this->db->escape($total['code']) . "', `title` = '" . $this->db->escape($total['title']) . "', `value` = '" . (float)$total['value'] . "', `sort_order` = '" . (int)$total['sort_order'] . "'");
		}
	}
	
	public function removeOrderTotal($order_id, $card_code) {
		$result = $this->db->query("SELECT `value` FROM `" . DB_PREFIX . "order_total` WHERE `code` = 'membership_card' AND `order_id` = '" . (int)$order_id . "'")->row;
		
		if (!empty($result['value'])) {
			$this->db->query("UPDATE `" . DB_PREFIX . "order` SET `total` = `total` - '" . $result['value'] . "' WHERE `order_id` = '" . (int)$order_id . "'");
			
			$this->db->query("UPDATE `" . DB_PREFIX . "order_total` SET `value` = `value` - '" . $result['value'] . "' WHERE `code` = 'total' AND `order_id` = '" . (int)$order_id . "'");
			
			$this->db->query("DELETE FROM `" . DB_PREFIX . "order_total` WHERE `code` = 'membership_card' AND `order_id` = '" . (int)$order_id . "'");
		}
		
		$this->db->query("UPDATE `" . DB_PREFIX . "membership_card` SET `customer_id` = 0, `status` = 1 WHERE `code` = '" . $this->db->escape($card_code) . "' AND `status` = 2");
	}
	
	public function validateStatus($data = array('error' => '')) {		
		if (!$this->config->get('module_membership_status') || !$this->config->get('module_membership_card_status')) {
			$data['error'] = $this->language->get('error_membership');
		} else {
			if (!$this->config->get('total_membership_card_use_with_coupon') && !empty($this->session->data['coupon'])) {
				$data['error'] = $this->language->get('error_membership');
			} elseif (!$this->config->get('total_membership_card_use_with_voucher') && !empty($this->session->data['voucher'])) {
				$data['error'] = $this->language->get('error_membership');
			}
		}

		return !$data['error'];
	}
	
	public function validateRequest($data = array('total' => 0, 'error' => '')) {
		if (!isset($this->session->data['membership_card'])) {
			if (!$data['total'] && in_array('current_order', $this->card_settings['accounted_orders_request'])) {
				$data['total'] += $this->cart->getSubTotal();
			}
			
			if ($this->customer->getId() && in_array('completed_orders', $this->card_settings['accounted_orders_request'])) {
				$data['total'] += $this->model_account_membership->getCustomerBalance();
			}
		}	
		
		if (!$this->config->get('module_membership_status') || !$this->config->get('module_membership_card_status')) {
			$data['error'] = $this->language->get('error_card_request');
		} elseif (isset($this->session->data['membership_card'])) {
			$data['error'] = $this->language->get('error_card_request');
		} elseif ($this->card_settings['logged_card_request'] && !$this->customer->isLogged()) {
			$data['error'] = $this->language->get('error_card_request');
		} elseif ($this->customer->isLogged() && $this->model_account_membership->getCardCode()) {
			$data['error'] = $this->language->get('error_card_request');
		} elseif ($this->card_settings['request_threshold'] > $data['total']) {
			$data['error'] = $this->language->get('error_card_request');
		}

		return !$data['error'];
	}
	
	private function calcDiscount($data = array()) {
		$current_discount = array('base' => 'without_special_and_discount', 'limit' => 0, 'value' => 0, 'type' => 'P');
		$nearest_discount = array();
		
		if (!empty($data['discount'])) {
			if (!is_array($data['discount'])) {
				$data['discount'] = unserialize($data['discount']);
			}
			
			uasort($data['discount'], $this->sorter('limit'));

			foreach($data['discount'] as $d) {
				if ($d['type'] == 'S') {
					$result = $this->db->query("SELECT SUM(`discount`) AS `discount` FROM `" . DB_PREFIX . "membership_card_history` WHERE `card_id` = '" . (int)$data['card_id'] . "'")->row;
						
					$d['value'] = $result['discount'];	
				}
 
				if ((int)$data['uses_total'] >= (int)$d['limit']) {
					$current_discount = $d;

					break;
				} else {
					$nearest_discount = $d;
				}
			}
		}

		return array(
			'current' => $current_discount,
			'nearest' => $nearest_discount
		);
	}
	
	private function sorter($key) {
	    return function ($a, $b) use ($key) {
	    	if ($a[$key] == 0) {
				return 1;
			} elseif ($b[$key] == 0) {
				return -1;
			}
			
			return strnatcmp($b[$key], $a[$key]);
	    };
	}
	
	private function sendMail($type, $card_code, $data) {
		if ($type == 'card_balance_change') {
			$card = $this->getCard($card_code);
			
			$this->load->model('account/customer');

			$customer_data = $this->model_account_customer->getCustomer($card['customer_id']);
		}
		
		if (filter_var($customer_data['email'], FILTER_VALIDATE_EMAIL)) {
			$notification_settings = $this->config->get('module_membership_notification');

			$this->load->model('localisation/language');

			$language_info = $this->model_localisation_language->getLanguage($data['language_id']);
			
			$language_directory = (version_compare(VERSION, '2.2', '>=')) ? 'code' : 'directory';

			$language = new Language($language_info[$language_directory]);
			$language->load($language_info[$language_directory]);			
			$language->load('extension/total/membership_card');
			
			$store_name = $data['store_name'];

			if ($type == 'card_balance_change') {
				$this->load->model('account/membership');
				
				$card_totals = $this->model_account_membership->getCardHistoryTotals($card['card_id']);
				
				$find_card = array(
					'{card_owner}',
					'{card_code}',
					'{card_discount}',
					'{card_total_without_discount}',
					'{card_total}',
					'{card_savings}'
				);
					
				$replace_card = array(
					'owner' => $customer_data['firstname'] . ' ' . $customer_data['lastname'],
					'code' => $card['code'],
					'discount' => '',
					'total_without_discount' => $this->currency->format($card_totals['total_without_discount'], $this->config->get('config_currency')),
					'total' => $this->currency->format($card_totals['total'], $this->config->get('config_currency')),
					'savings' => $this->currency->format($card_totals['discount'], $this->config->get('config_currency'))
				);
				
				$card['total'] = $this->model_account_membership->getCardBalance($card['card_id']);
				
				$discount = $this->calcDiscount($card);

				if ($discount['current']['type'] == 'P') {
					$replace_card['discount'] = $discount['current']['value'] . ' %';
				} else {
					$replace_card['discount'] = $this->currency->format($discount['current']['value'], $this->config->get('config_currency'));
				}
			
				$find_card_history = array(
					'{card_history_order_id}',
					'{card_history_customer}',
					'{card_history_total}',
					'{card_history_discount}',
					'{card_history_total_without_discount}',
					'{card_history_datetime_added}'
				);
					
				$replace_card_history = array(
					'order_id'					   => $data['order_id'],
					'customer'					   => $data['firstname'] . ' ' . $data['lastname'],
					'order_total'				   => $this->currency->format($data['total'], $this->config->get('config_currency')),
					'order_discount'			   => $this->currency->format(-$data['value'], $this->config->get('config_currency')),
					'order_total_without_discount' => $this->currency->format($data['total'] - $data['value'], $this->config->get('config_currency')),
					'order_datetime_added'		   => date($this->language->get('datetime_format'))
				);

				$message_template = $notification_settings['card_balance_change_template'][$data['language_id']];
				
				$find    = array_merge($find_card, $find_card_history);
				$replace = array_merge($replace_card, $replace_card_history);
			}

			$message = str_replace($find, $replace, $message_template);

			$mail = new Mail();
			$mail->protocol = $this->config->get('config_mail_protocol');
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
			$mail->setTo($customer_data['email']);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode(sprintf($language->get('text_mail_subject'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8'));
			$mail->setHtml(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
			$mail->send();
		}
	}
}