<?php
class ModelExtensionTotalMembershipGift extends Model {
	private $settings;
	private $gift_settings;
	 
	public function __construct($registry) {
		$this->registry = $registry;
		 
		$this->settings = $this->config->get('module_membership');
		$this->gift_settings = $this->config->get('module_membership_gift');
    }
   
	public function getGift($total = 0) {
 
		$status = true;
		
		if (is_array($total)) {
			$sub_total = $total['total'];
		} else {
			$sub_total = $total;
		}
		
		$gift_query = $this->db->query("SELECT `mg`.*, IFNULL(`t`.`total`, 0) AS `total`
										FROM `" . DB_PREFIX . "membership_gift` AS `mg`
										LEFT JOIN (SELECT `gt`.`gift_id`, `gt`.`threshold`, COUNT(`ht`.`gift_id`) AS `total`
											FROM `" . DB_PREFIX . "membership_gift` AS `gt` 
     										LEFT JOIN `" . DB_PREFIX . "membership_gift_history` AS `ht`
     											ON `gt`.`gift_id` = `ht`.`gift_id` GROUP BY `gt`.`gift_id`) as `t` ON `mg`.`gift_id` = `t`.`gift_id`
										WHERE ((`mg`.`date_start` = '0000-00-00' OR `mg`.`date_start` < NOW()) AND (`mg`.`date_expiry` = '0000-00-00' OR `mg`.`date_expiry` > NOW()))
											AND `mg`.`threshold` <= '" . (int)($sub_total) . "'
											AND `mg`.`status` = 1 
											AND (`mg`.`giving_quantity` > `total` OR `mg`.`giving_quantity` = 0)
										ORDER BY `mg`.`threshold` DESC
										LIMIT 1");

		if ($gift_query->num_rows && $sub_total) {
			$gift = $gift_query->row;
			
			$name = unserialize($gift['name']);
			
			$gift['name'] = $name[$this->config->get('config_language_id')];

			$gift['products'] = $gift['products'] ? explode(',', $gift['products']) : array();
			
			if ($gift['categories']) {
				$product_categories = $this->db->query("SELECT `product_id` FROM `" . DB_PREFIX . "product_to_category` WHERE `category_id` IN (" . $this->db->escape($gift['categories']) . ") GROUP BY `category_id`")->rows;

				foreach ((array)$product_categories as $product) {
					if (!in_array($product['product_id'], $gift['products'])) {
						$gift['products'][] = $product['product_id'];
					}
				}
			}
		} else {
			$status = false;
		}

		if ($status) {
			return $gift;
		}
	}

	public function getTotal($total) {
		if ($this->customer->isLogged()) {
			$this->load->model('account/membership');
			
			if (in_array('logged_customers', $this->gift_settings['giving_mode'])
				|| (in_array('club_card_owners', $this->gift_settings['giving_mode']) && $this->model_account_membership->getCardCode())
				|| (in_array('customer_group_cards', $this->gift_settings['giving_mode']) && $this->settings['customer_group_id'] && $this->settings['customer_group_id'] == $this->model_account_membership->getCustomerGroupId())
			) {
				$this->session->data['membership_gift'] = '';
			}
		} else {
			if (in_array('guests', $this->gift_settings['giving_mode'])) {
				$this->session->data['membership_gift'] = '';
			}
		}
			
		if (isset($this->session->data['membership_gift'])) {
			if ($this->session->data['membership_gift'] && !$total['total']) {
				$gift_info = $this->getGiftById($this->session->data['membership_gift']);
			} else {
				$gift_info = $this->getGift($total);
			}

			if ($gift_info && $total['total']) {
				$this->load->language('extension/total/membership_gift');
				
				$this->session->data['membership_gift'] = $gift_info['gift_id'];

				if (isset($this->gift_settings['place_of_display']) && in_array('cart', $this->gift_settings['place_of_display'])) {
					$p_c = 0;
					$g_c = 0;
					
					foreach ($this->cart->getProducts() as $cart_product) {
						$p_c++;
 
						if (isset($cart_product['option']['membership_gift'])) {
							$g_c++;
							
							if ($cart_product['option']['membership_gift']['gift_id'] != $gift_info['gift_id']) {
								$this->cart->remove($cart_product['cart_id']);
							}
						}
					}
					
					if ($p_c === $g_c) {
						$this->cart->clear();
					}
					
					if (!$g_c) {
						$product_id = (count($gift_info['products'])) ? $gift_info['products'][array_rand($gift_info['products'])] : 0;
						
						$option = array('membership_gift' => $gift_info);
						
						$option['membership_gift']['product_option_id'] 	  = 0;
						$option['membership_gift']['product_option_value_id'] = 0;
						$option['membership_gift']['option_id']				  = 0;
						$option['membership_gift']['option_value_id']		  = 0;
						$option['membership_gift']['type']					  = 'membership_gift';
						$option['membership_gift']['value']					  = '';
						
						$this->cart->add($product_id, 1, $option);
					}
				}

				if (isset($this->gift_settings['place_of_display']) && in_array('cart_total', $this->gift_settings['place_of_display'])) {
					if (!empty($this->gift_settings['name'][$this->config->get('config_language_id')])) {
						$title = $this->gift_settings['name'][$this->config->get('config_language_id')] . ' (%s)';
					} else {
						$title = $this->language->get('text_gift') . ' (%s)';
					}

					$total['totals'][] = array(
						'code'       => 'membership_gift',
						'title'      => sprintf($title, $gift_info['name']),
						'value'      => 0,
						'sort_order' => $this->config->get('module_membership_gift_sort_order')
					);
				}
			} else {
				unset($this->session->data['membership_gift']);
			}
		}
	}
	
	public function getNearestGift($sub_total) {
		$gift_query = $this->db->query("SELECT `mg`.*, IFNULL(`t`.`total`, 0) AS `total`
										FROM `" . DB_PREFIX . "membership_gift` AS `mg`
										LEFT JOIN (SELECT `gt`.`gift_id`, `gt`.`threshold`, COUNT(`ht`.`gift_id`) AS `total`
											FROM `" . DB_PREFIX . "membership_gift` AS `gt` 
     										LEFT JOIN `" . DB_PREFIX . "membership_gift_history` AS `ht`
     											ON `gt`.`gift_id` = `ht`.`gift_id` GROUP BY `gt`.`gift_id`) as `t` ON `mg`.`gift_id` = `t`.`gift_id`
										WHERE ((`mg`.`date_start` = '0000-00-00' OR `mg`.`date_start` < NOW()) AND (`mg`.`date_expiry` = '0000-00-00' OR `mg`.`date_expiry` > NOW()))
											AND `mg`.`threshold` > '" . (int)($sub_total) . "'
											AND `mg`.`status` = 1 
											AND (`mg`.`giving_quantity` > `total` OR `mg`.`giving_quantity` = 0)
										ORDER BY `mg`.`threshold`
										LIMIT 1");
		
		if ($gift_query->num_rows) {
			$gift = $gift_query->row;
			
			$name = unserialize($gift['name']);
			
			$gift['name'] = $name[$this->config->get('config_language_id')];								

			return $gift;
		}
	}
	
	public function getGiftById($gift_id) {
		$gift_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "membership_gift` WHERE ((`date_start` = '0000-00-00' OR `date_start` < NOW()) AND (`date_expiry` = '0000-00-00' OR `date_expiry` > NOW())) AND `gift_id` = '" . (int)($gift_id) . "' AND `status` = 1");
		
		if ($gift_query->num_rows) {
			$gift = $gift_query->row;
			
			$name = unserialize($gift['name']);
			
			$gift['name'] = $name[$this->config->get('config_language_id')];

			$gift['products'] = $gift['products'] ? explode(',', $gift['products']) : array();
			
			if ($gift['categories']) {
				$product_categories = $this->db->query("SELECT `product_id` FROM `" . DB_PREFIX . "product_to_category` WHERE `category_id` IN (" . $this->db->escape($gift['categories']) . ") GROUP BY `category_id`")->rows;

				foreach ((array)$product_categories as $product) {
					if (!in_array($product['product_id'], $gift['products'])) {
						$gift['products'][] = $product['product_id'];
					}
				}
			}

			return $gift;
		}
	}
 
	public function confirm($gift_id, $order_id) {
		$this->load->model('checkout/order');
		
		$gift_info = $this->getGiftById($gift_id);
		$order_info = $this->model_checkout_order->getOrder($order_id);

		if ($gift_info && $order_info) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "membership_gift_history` SET `gift_id` = '" . (int)$gift_info['gift_id'] . "', `order_id` = '" . (int)$order_id . "', `customer_id` = '" . (int)$order_info['customer_id'] . "', `total` = '" . (float)$order_info['total'] . "', `datetime_added` = NOW()");
				
			$notification_settings = $this->config->get('module_membership_notification');
				
			if ($notification_settings['gift_confirm']) {
				$this->sendMail('gift_confirm', array_merge($gift_info, $order_info));
			}
		}
	}

	public function unconfirm($order_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "membership_gift_history` WHERE `order_id` = '" . (int)$order_id . "'");

		$this->db->query("DELETE FROM `" . DB_PREFIX . "order_product` WHERE `order_id` = '" . (int)$order_id . "' AND `order_product_id` IN (SELECT `order_product_id` FROM `" . DB_PREFIX . "order_option` WHERE `order_id` = '" . (int)$order_id . "' AND `type` = 'membership_gift')");
		
		$this->db->query("DELETE FROM `" . DB_PREFIX . "order_option` WHERE `order_id` = '" . (int)$order_id . "' AND `type` = 'membership_gift'");	
	}
	
	public function addOrderTotal($order_id, $total, $gift_product) {
		if ($total['code'] == 'membership_gift') {
			$this->db->query("UPDATE `" . DB_PREFIX . "order` SET `total` = `total` + '" . (float)$total['value'] . "' WHERE `order_id` = '" . (int)$order_id . "'");
	
			$this->db->query("UPDATE `" . DB_PREFIX . "order_total` SET `value` = `value` + '" . (float)$total['value'] . "' WHERE `code` = 'total' AND `order_id` = '" . (int)$order_id . "'");
		
			$this->db->query("INSERT INTO `" . DB_PREFIX . "order_total` SET `order_id` = '" . (int)$order_id . "', `code` = '" . $this->db->escape($total['code']) . "', `title` = '" . $this->db->escape($total['title']) . "', `value` = '" . (float)$total['value'] . "', `sort_order` = '" . (int)$total['sort_order'] . "'");
		}
		
		if (!empty($gift_product)) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "order_product` SET `order_id` = '" . (int)$order_id . "', `product_id` = '" . (int)$gift_product['product_id'] . "', `name` = '" . $this->db->escape($gift_product['name']) . "', `model` = '" . $this->db->escape($gift_product['model']) . "', `quantity` = '" . (int)$gift_product['quantity'] . "', `price` = '" . (float)$gift_product['price'] . "', `total` = '" . (float)$gift_product['total'] . "', `tax` = '" . (float)$gift_product['tax_class_id'] . "', `reward` = '" . (int)$gift_product['reward'] . "'");

			$order_product_id = $this->db->getLastId();

			$this->db->query("INSERT INTO `" . DB_PREFIX . "order_option` SET `order_id` = '" . (int)$order_id . "', `order_product_id` = '" . (int)$order_product_id . "', `product_option_id` = '" . (int)$gift_product['option']['membership_gift']['product_option_id'] . "', `product_option_value_id` = '" . (int)$gift_product['option']['membership_gift']['product_option_value_id'] . "', `name` = '" . $this->db->escape($gift_product['option']['membership_gift']['name']) . "', `value` = '" . $this->db->escape($gift_product['option']['membership_gift']['value']) . "', `type` = '" . $this->db->escape($gift_product['option']['membership_gift']['type']) . "'");
		}
	}
	
	public function removeOrderTotal($order_id) {
		$result = $this->db->query("SELECT `value` FROM `" . DB_PREFIX . "order_total` WHERE `code` = 'membership_gift' AND `order_id` = '" . (int)$order_id . "'")->row;
		
		if (!empty($result['value'])) {
			$this->db->query("UPDATE `" . DB_PREFIX . "order` SET `total` = `total` - '" . $result['value'] . "' WHERE `order_id` = '" . (int)$order_id . "'");
			
			$this->db->query("UPDATE `" . DB_PREFIX . "order_total` SET `value` = `value` - '" . $result['value'] . "' WHERE `code` = 'total' AND `order_id` = '" . (int)$order_id . "'");
			
			$this->db->query("DELETE FROM `" . DB_PREFIX . "order_total` WHERE `code` = 'membership_gift' AND `order_id` = '" . (int)$order_id . "'");
		}
	}
	
	public function validateStatus($data = array('error' => '')) {		
		if (!$this->config->get('module_membership_status') || !$this->config->get('module_membership_gift_status')) {
			$data['error'] = $this->language->get('error_membership');
		}

		return !$data['error'];
	}
	
	private function sendMail($type, $data) {
		if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$notification_settings = $this->config->get('module_membership_notification');
			
			$this->load->language('extension/total/membership_gift');

			if ($type == 'gift_confirm') {
				$find_gift = array(
					'{gift_recipient}',
					'{gift_threshold}',
					'{gift_name}',
					'{gift_product_name}',
					'{gift_product_model}'
				);
					
				$replace_gift = array(
					'gift_recipient'	 => $data['firstname'] . ' ' . $data['lastname'],
					'gift_threshold'	 => $data['threshold'],
					'gift_name'			 => $data['name'],
					'gift_product_name'  => '',
					'gift_product_model' => ''
				);
				
				$this->load->model('account/order');
				
				$products = $this->model_account_order->getOrderProducts($data['order_id']);
				
				foreach ($products as $product) {
					if ($product['price'] == 0) {
						$replace_gift['gift_product_name']	= $product['name'];
						$replace_gift['gift_product_model'] = $product['model'];
						
						break;
					}
				}

				$message_template = $notification_settings['gift_confirm_template'][$this->config->get('config_language_id')];
				
				$find    = $find_gift;
				$replace = $replace_gift;
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
			$mail->setTo($data['email']);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($data['store_name'], ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode(sprintf($this->language->get('text_mail_subject'), html_entity_decode($data['store_name'], ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8'));
			$mail->setHtml(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
			$mail->send();
		}
	}
}