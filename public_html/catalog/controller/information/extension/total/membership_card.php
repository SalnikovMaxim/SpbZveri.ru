<?php
class ControllerExtensionTotalMembershipCard extends Controller {
	private $error;
	private $default_code = '-';
	
	public function index() {
		$this->load->model('extension/total/membership_card');
		
		$this->load->language('extension/total/membership_card');
		
		if ($this->model_extension_total_membership_card->validateStatus(array('error' => &$this->error))) {
			$this->load->model('account/membership');
			
			$data['heading_title'] = $this->language->get('heading_title');

			$data['text_loading'] = $this->language->get('text_loading');

			$data['entry_card'] = $this->language->get('entry_card');
			$data['entry_card_request'] = $this->language->get('entry_card_request');
			
			$data['button_card_applying'] = $this->language->get('button_card_applying');
			$data['button_card_request'] = $this->language->get('button_card_request');

			$data['card_request'] = $this->model_extension_total_membership_card->validateRequest(array('total' => 0, 'error' => &$this->error));
			
			if (isset($this->session->data['membership_card'])) {
				$data['membership_card'] = $this->session->data['membership_card'];
			} else {
				$data['membership_card'] = '';
			}
			
			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/total/membership_card')) {
				return $this->load->view($this->config->get('config_template') . '/template/total/membership_card', $data);
			} else {
				return $this->load->view('default/template/total/membership_card', $data);
			}
		}
	}

	public function card() {
		$this->load->model('extension/total/membership_card');
		
		$this->load->language('extension/total/membership_card');
		
		$json = array();

		if (isset($this->request->post['membership_card'])) {
			$card = $this->request->post['membership_card'];
		} else {
			$card = '';
		}

		$card_info = $this->model_extension_total_membership_card->getCard($card);
		
		if (!$this->model_extension_total_membership_card->validateStatus(array('error' => &$this->error))) {
			$json['error'] = $this->error;

			unset($this->session->data['membership_card']);
		} elseif (!$card) {
			$json['error'] = $this->language->get('error_card_empty');

			unset($this->session->data['membership_card']);
		} elseif ($card_info) {
			$this->session->data['membership_card'] = $this->request->post['membership_card'];
			
			$json['reload']  = true;
			$json['success'] = $this->language->get('text_success_applied');
		} else {
			$json['error'] = $this->language->get('error_card');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function cardRequest() {
		$this->load->model('extension/total/membership_card');
		$this->load->model('account/membership');
		
		$this->load->language('extension/total/membership_card');
		
		$json = array();
		
		$card_settings = $this->config->get('membership_card');

		if ($this->model_extension_total_membership_card->validateStatus(array('error' => &$this->error)) && $this->model_extension_total_membership_card->validateRequest(array('total' => 0, 'error' => &$this->error))) {
			if ($card_settings['auto_issuance_card'] == 'upon_request') {
				$card_info = $this->model_extension_total_membership_card->getFreeCard();
					
				if ($card_info) {
					$this->model_extension_total_membership_card->reserveCard($card_info['card_id']);
						
					$this->session->data['membership_card'] = $card_info['code'];
				}
			} 
			
			if (empty($this->session->data['membership_card'])) {
				$this->session->data['membership_card'] = $this->default_code;
			}
			
			$json['reload']				  = true;
			$json['success']			  = $this->language->get('text_success_card_request');
			$json['membership_card_code'] = $this->session->data['membership_card'];
		} else {
			$json['error'] = $this->error;
			
			unset($this->session->data['membership_card']);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function nearestDiscount() {
		$this->load->model('extension/total/membership_card');
		
		$this->load->language('extension/total/membership_card');

		$json		   = array();	
		$sub_total	   = $this->cart->getSubTotal();	
		$card_settings = $this->config->get('membership_card');

		if (empty($this->session->data['membership_card'])) {
			if (!$card_settings['logged_card_request'] || ($card_settings['logged_card_request'] && $this->customer->isLogged())) {
				if ($this->customer->isLogged()) {
					$this->load->model('account/membership');
			
					$card_code = $this->model_account_membership->getCardCode();
							
					if ($card_code) {
						$card_info = $this->model_extension_total_membership_card->getCard($card_code, $sub_total);
					}
				}
				
				if (empty($card_info) && $card_settings['auto_issuance_card']) {
					$card = $this->model_extension_total_membership_card->getFreeCard();
					
					if ($card) {
						$card_info = $this->model_extension_total_membership_card->getCard($card['code'], $sub_total);
						
						if ($card_info) {
							$card_info['status'] = 2;
						}
					}
				}
				
				if (empty($card_info)) {
					$card_info = $this->model_extension_total_membership_card->getDefaultCard(array('total' => $sub_total));
				}
			}
		} elseif ($this->session->data['membership_card'] == $this->default_code) {
			$card_info = $this->model_extension_total_membership_card->getDefaultCard(array('total' => $sub_total));
		} else {
			$card_info = $this->model_extension_total_membership_card->getCard($this->session->data['membership_card'], $sub_total);
		}

		if (!empty($card_info)) {
			if ($card_settings['first_discount_value'] && $card_info['status'] == 2) {
				if ($card_settings['request_threshold'] > $sub_total) {
					$discount_type = 'nearest';
				} else {
					$discount_type = 'current';
				}
				
				$card_info['discount'][$discount_type]['limit'] = $card_settings['request_threshold'];
				$card_info['discount'][$discount_type]['value'] = $card_settings['first_discount_value'];
				$card_info['discount'][$discount_type]['type'] = $card_settings['first_discount_type'];
			}
			
			$current_discount = '0 %';
			$nearest_discount = 0;
			$required_amount  = 0;
			
			foreach ($card_info['discount'] as $k => $d) {
				if (!$d) {
					continue;
				}
				
				switch ($d['type']) {
					case 'F':
					case 'S':
						$discount = $this->currency->format($d['value'], $this->config->get('config_currency'));
						
						break;				
					case 'P':
						$discount = $d['value'] . ' %';
						
						break;
				}
				
				if ($k == 'current') {
					$current_discount = $discount;
				} else {
					$nearest_discount = $discount;
					$required_amount = $d['limit'] - $card_info['total'];
					
					if (($card_info['status'] == 2 && !in_array('current_order', $card_settings['accounted_orders_request'])) || ($card_info['status'] != 2 && !in_array('current_order', $card_settings['accounted_orders_balance']))) {
						$required_amount -= $sub_total;
					}
				}
			}

			$json['current_discount']	   = $current_discount;
			$json['current_discount_text'] = sprintf($this->language->get('text_current_discount'), $current_discount);

			if ($required_amount > 0 && (int)$nearest_discount > (int)$current_discount) {
				$find = array(
					'{nearest_discount}',
					'{required_amount}'
				);
				
				$replace = array(
					'nearest_discount' => $nearest_discount,
					'required_amount'  => $this->currency->format($required_amount, $this->session->data['currency'])
				);
				
				$json['nearest_discount_text'] = html_entity_decode(str_replace($find, $replace, $card_settings['nearest_discount_description'][$this->config->get('config_language_id')]));
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}