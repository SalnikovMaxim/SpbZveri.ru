<?php
class ControllerApiMembership extends Controller {
	public function applyCard() {
		$this->load->language('api/membership');

		unset($this->session->data['membership_card']);

		$json = array();

		if (!isset($this->session->data['api_id'])) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->post['card_code'])) {
				$card_code = $this->request->post['card_code'];
			} else {
				$card_code = '';
			}
			
			$this->load->model('extension/total/membership_card');
				
			$card_info = $this->model_extension_total_membership_card->getCard($card_code);
			
			if ($card_info) {
				$this->session->data['membership_card'] = $card_code;
				
				$json['success'] = $this->language->get('text_success_card_apply');
			} else {
				$json['error'] = $this->language->get('error_card_apply');
			}
		}

		if (isset($this->request->server['HTTP_ORIGIN'])) {
			$this->response->addHeader('Access-Control-Allow-Origin: ' . $this->request->server['HTTP_ORIGIN']);
			$this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			$this->response->addHeader('Access-Control-Max-Age: 1000');
			$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function applyCardTotal() {
		$this->load->language('api/membership');

		unset($this->session->data['membership_card']);

		$json = array();

		if (!isset($this->session->data['api_id'])) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->post['card_code'])) {
				$card_code = $this->request->post['card_code'];
			} else {
				$card_code = '';
			}
			
			if (isset($this->request->post['order_id'])) {
				$order_id = $this->request->post['order_id'];
			} else {
				$order_id = '';
			}

			$this->load->model('extension/total/membership_card');
			
			$card_info = $this->model_extension_total_membership_card->getCard($card_code);
			
			if ($card_info) {
				$this->session->data['membership_card'] = $card_code;
				
				$this->load->model('account/order');
			
				$products = $this->model_account_order->getOrderProducts($order_id);
				
				$this->cart->clear();
				
				foreach ($products as $product) {
					if (isset($product['option'])) {
						$option = $product['option'];
					} else {
						$option = array();
					}

					$this->cart->add($product['product_id'], $product['quantity'], $option);
				}

				$totals = $this->model_account_order->getOrderTotals($order_id);
				$taxes = $this->cart->getTaxes();
				$total = 0;
								
				foreach ($totals as $t) {
					if ($t['code'] == 'total') {
						$total = $t['value'];
						
						break;
					}
				}
				
				if (version_compare(VERSION, '2.2', '>=')) {
					$total_data = array(
						'totals' => &$totals,
						'taxes'  => &$taxes,
						'total'  => &$total
					);
					
					$this->model_extension_total_membership_card->getTotal($total_data);
				} else {
					$this->model_extension_total_membership_card->getTotal($totals, $total, $taxes);
				}

				$c = count($totals) - 1;
				
				if ($totals[$c]['code'] == 'membership_card') {
					$this->model_extension_total_membership_card->addOrderTotal($order_id, $totals[$c]);
				}

				$this->cart->clear();
				
				unset($this->session->data['membership_card']);
								
				$json['success'] = $this->language->get('text_success_card_apply');
				$json['redirect'] = true;
			} else {
				$json['error'] = $this->language->get('error_card_apply');
			}
		}

		if (isset($this->request->server['HTTP_ORIGIN'])) {
			$this->response->addHeader('Access-Control-Allow-Origin: ' . $this->request->server['HTTP_ORIGIN']);
			$this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			$this->response->addHeader('Access-Control-Max-Age: 1000');
			$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function removeCardTotal() {
		$this->load->language('api/membership');

		$json = array();
		
		unset($this->session->data['membership_card']);

		if (empty($this->session->data['api_id'])) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->post['order_id'])) {
				$order_id = $this->request->post['order_id'];
			} else {
				$order_id = '';
			}
			
			if (isset($this->request->post['card_code'])) {
				$card_code = $this->request->post['card_code'];
			} else {
				$card_code = '';
			}
			
			if ($order_id) {
				$this->load->model('extension/total/membership_card');
				
				$this->model_extension_total_membership_card->unconfirm($order_id);
				$this->model_extension_total_membership_card->removeOrderTotal($order_id, $card_code);
				
				$json['success'] = $this->language->get('text_success_card_remove');
				$json['redirect'] = true;
			} else {
				$json['error'] = $this->language->get('error_card_remove');
			}
		}

		if (isset($this->request->server['HTTP_ORIGIN'])) {
			$this->response->addHeader('Access-Control-Allow-Origin: ' . $this->request->server['HTTP_ORIGIN']);
			$this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			$this->response->addHeader('Access-Control-Max-Age: 1000');
			$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function addGift() {
		$this->load->language('api/membership');

		unset($this->session->data['membership_gift']);

		$json = array();

		if (!isset($this->session->data['api_id'])) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->post['gift_id'])) {
				$gift_id = $this->request->post['gift_id'];
			} else {
				$gift_id = '';
			}
			
			$this->load->model('extension/total/membership_gift');
				
			$gift_info = $this->model_extension_total_membership_gift->getGiftById($gift_id);
			
			if ($gift_info) {
				$this->session->data['membership_gift'] = $gift_id;
				
				$json['success'] = $this->language->get('text_success_gift_add');
			} else {
				$json['error'] = $this->language->get('error_gift_add');
			}
		}

		if (isset($this->request->server['HTTP_ORIGIN'])) {
			$this->response->addHeader('Access-Control-Allow-Origin: ' . $this->request->server['HTTP_ORIGIN']);
			$this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			$this->response->addHeader('Access-Control-Max-Age: 1000');
			$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function addGiftTotal() {
		$this->load->language('api/membership');

		unset($this->session->data['membership_gift']);

		$json = array();

		if (!isset($this->session->data['api_id'])) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->post['order_id'])) {
				$order_id = $this->request->post['order_id'];
			} else {
				$order_id = '';
			}
			
			if (isset($this->request->post['gift_id'])) {
				$gift_id = $this->request->post['gift_id'];
			} else {
				$gift_id = '';
			}

			$this->load->model('extension/total/membership_gift');
			
			$gift_info = $this->model_extension_total_membership_gift->getGiftById($gift_id);
			
			if ($gift_info && $order_id) {
				$this->session->data['membership_gift'] = $gift_id;
				
				$this->load->model('account/order');
			
				$products = $this->model_account_order->getOrderProducts($order_id);
				
				$this->cart->clear();
				
				foreach ($products as $product) {
					if (isset($product['option'])) {
						$option = $product['option'];
					} else {
						$option = array();
					}

					$this->cart->add($product['product_id'], $product['quantity'], $option);
				}

				$totals = $this->model_account_order->getOrderTotals($order_id);
				$taxes = $this->cart->getTaxes();
				$total = 0;
								
				foreach ($totals as $t) {
					if ($t['code'] == 'total') {
						$total = $t['value'];
						
						break;
					}
				}
				
				if (version_compare(VERSION, '2.2', '>=')) {
					$total_data = array(
						'totals' => &$totals,
						'taxes'  => &$taxes,
						'total'  => &$total
					);
					
					$this->model_extension_total_membership_gift->getTotal($total_data);
				} else {
					$this->model_extension_total_membership_gift->getTotal($totals, $total, $taxes);
				}
				
				$gift_product = array();
				
				$cart_products = $this->cart->getProducts();
				
				foreach ($cart_products as $product) {
					if (isset($product['option']['membership_gift'])) {
						$gift_product = $product;
						
						break;
					}
				}

				$c = count($totals) - 1;
				
				if ($totals[$c]['code'] == 'membership_gift' || !empty($gift_product)) {
					$this->model_extension_total_membership_gift->confirm($gift_id, $order_id);
					$this->model_extension_total_membership_gift->addOrderTotal($order_id, $totals[$c], $gift_product);
				}

				$this->cart->clear();
				
				unset($this->session->data['membership_gift']);
								
				$json['success'] = $this->language->get('text_success_gift_add');
				$json['redirect'] = true;
			} else {
				$json['error'] = $this->language->get('error_gift_add');
			}
		}
 
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function removeGiftTotal() {
		$this->load->language('api/membership');

		$json = array();
		
		unset($this->session->data['membership_gift']);

		if (empty($this->session->data['api_id'])) {
			$json['error'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->post['order_id'])) {
				$order_id = $this->request->post['order_id'];
			} else {
				$order_id = '';
			}
			
			if ($order_id) {
				$this->load->model('extension/total/membership_gift');
				
				$this->model_extension_total_membership_gift->unconfirm($order_id);
				$this->model_extension_total_membership_gift->removeOrderTotal($order_id);
				
				$json['success'] = $this->language->get('text_success_gift_remove');
				$json['redirect'] = true;
			} else {
				$json['error'] = $this->language->get('error_gift_remove');
			}
		}

		if (isset($this->request->server['HTTP_ORIGIN'])) {
			$this->response->addHeader('Access-Control-Allow-Origin: ' . $this->request->server['HTTP_ORIGIN']);
			$this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			$this->response->addHeader('Access-Control-Max-Age: 1000');
			$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}