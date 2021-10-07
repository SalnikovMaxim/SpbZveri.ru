<?php
class ControllerAccountMembership extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('account/membership', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/membership');		
		$this->load->model('extension/total/membership_card');
		$this->load->model('catalog/information');
		$this->load->model('account/membership');
		
		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('account/membership', '', true)
		);

		$data['heading_title'] = $this->language->get('heading_title');

		$data['button_continue'] = $this->language->get('button_continue');

		$card_code = $this->model_account_membership->getCardCode();
		$card_info = $this->model_extension_total_membership_card->getCard($card_code);
		
		$settings = $this->config->get('membership');
		
		if ($card_info) {
            $card_settings = $this->config->get('membership_card');

			$data['text_card_code'] = $this->language->get('text_card_code');
			$data['text_discount']  = $this->language->get('text_discount');
			$data['text_total']     = $this->language->get('text_total');		
			$data['text_savings']   = $this->language->get('text_savings');
			
			$card_totals = $this->model_account_membership->getCardHistoryTotals($card_info['card_id']);

            if (isset($card_settings['accounted_orders_balance']) && in_array('completed_orders', $card_settings['accounted_orders_balance'])) {
                $card_total = $this->model_account_membership->getCustomerBalance();
            } else {
                $card_total = $this->model_account_membership->getCardBalance($card_info['card_id']);
            }

			$data['card_code']     = $card_info['code'];
			$data['card_discount'] = ($card_info['discount']['current']['type'] == 'P') ? $card_info['discount']['current']['value'] . ' %' : $this->currency->format($card_info['discount']['current']['value'], $this->config->get('config_currency'));
            $data['card_total']	   = $this->currency->format($card_total, $this->config->get('config_currency'));
			$data['card_savings']  = $this->currency->format($card_totals['discount'], $this->config->get('config_currency'));

			$text_condition = $this->language->get('text_agree');
		} else {
			$data['text_not_membership'] = $this->language->get('text_not_membership');

            $text_condition = $this->language->get('text_condition');
		}

        if ($settings['condition']) {
            $information = $this->model_catalog_information->getInformation($settings['condition']);

            $data['text_condition'] = sprintf($text_condition, $this->url->link('information/information', 'information_id=' . $settings['condition'], true), $information['title'], $information['title']);
        }

		$data['continue'] = $this->url->link('account/account', '', true);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		if (version_compare(VERSION, '2.2', '>=')) {
			$this->response->setOutput($this->load->view('account/membership', $data));
		} else {
			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/account/membership')) {
				$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/account/membership', $data));
			} else {
				$this->response->setOutput($this->load->view('default/template/account/membership', $data));
			}
		}
	}
}