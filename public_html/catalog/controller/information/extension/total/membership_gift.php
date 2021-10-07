<?php
class ControllerExtensionTotalMembershipGift extends Controller {
	private $error;
	
	public function nearestGift() {
		$this->load->model('extension/total/membership_gift');
		
		$this->load->language('extension/total/membership_gift');

		$json		   = array();
		$status		   = false;
		$sub_total	   = $this->cart->getSubTotal();
		$settings 	   = $this->config->get('membership');	
		$gift_settings = $this->config->get('membership_gift');

		if (!isset($this->session->data['membership_gift']) && $this->model_extension_total_membership_gift->validateStatus() && isset($gift_settings['giving_mode'])) {
			if ($this->customer->isLogged()) {
				$this->load->model('account/membership');
				
				if (in_array('logged_customers', $gift_settings['giving_mode'])
					|| (in_array('club_card_owners', $gift_settings['giving_mode']) && $this->model_account_membership->getCardCode())
					|| (in_array('customer_group_cards', $gift_settings['giving_mode']) && $settings['customer_group_id'] &&$settings['customer_group_id'] == $this->model_account_membership->getCustomerGroupId())
				) {
					$status = true;
				}
			} else {
				if (in_array('guests', $gift_settings['giving_mode'])) {
					$status = true;
				}
			}
		} else {
			$status = true;
		}
		
		if ($status) {
			$current_gift	 = $this->model_extension_total_membership_gift->getGift($sub_total);
			$nearest_gift	 = $this->model_extension_total_membership_gift->getNearestGift($sub_total);
			$required_amount = 0;

			if ($current_gift) {
				$json['current_gift_text'] = sprintf($this->language->get('text_current_gift'), $current_gift['name']);
			}

			if ($nearest_gift) {
				$required_amount = $this->currency->format($nearest_gift['threshold'] - $sub_total, $this->session->data['currency']);
				
				$find = array(
					'{gift_name}',
					'{required_amount}'
				);
				
				$replace = array(
					'gift_name'		  => $nearest_gift['name'],
					'required_amount' => $required_amount
				);
				
				$json['nearest_gift_text'] = html_entity_decode(str_replace($find, $replace, $gift_settings['nearest_gift_description'][$this->config->get('config_language_id')]));
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}