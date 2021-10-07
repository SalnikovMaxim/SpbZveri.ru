<?php
class ControllerExtensionTotalMembershipCard extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/total/membership_card');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->document->addStyle('view/stylesheet/ocmax/membership.css');
		
		$this->load->model('setting/setting');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('total_membership_card', $this->request->post);
		 
			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true));
		}
 
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/total/membership_card', 'user_token=' . $this->session->data['user_token'], true)
		);
  
		$data['action'] = $this->url->link('extension/total/membership_card', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total', true);
 
		if (isset($this->request->post['total_membership_card_status'])) {
			$data['total_membership_card_status'] = $this->request->post['total_membership_card_status'];
		} else {
			$data['total_membership_card_status'] = $this->config->get('total_membership_card_status');
		}

		if (isset($this->request->post['total_membership_card_sort_order'])) {
			$data['total_membership_card_sort_order'] = $this->request->post['total_membership_card_sort_order'];
		} else {
			$data['total_membership_card_sort_order'] = $this->config->get('total_membership_card_sort_order');
		}
		
		if (isset($this->request->post['total_membership_card_use_with_coupon'])) {
			$data['total_membership_card_use_with_coupon'] = $this->request->post['total_membership_card_use_with_coupon'];
		} else {
			$data['total_membership_card_use_with_coupon'] = $this->config->get('total_membership_card_use_with_coupon');
		}
		
		if (isset($this->request->post['total_membership_card_use_with_voucher'])) {
			$data['total_membership_card_use_with_voucher'] = $this->request->post['total_membership_card_use_with_voucher'];
		} else {
			$data['total_membership_card_use_with_voucher'] = $this->config->get('total_membership_card_use_with_voucher');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/total/membership_card', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/total/membership_card')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}