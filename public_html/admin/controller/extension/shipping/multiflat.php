<?php
class ControllerExtensionShippingMultiflat extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/shipping/multiflat');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));

		$this->load->model('setting/setting');
 
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('shipping_multiflat', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true));
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
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/shipping/multiflat', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/shipping/multiflat', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true);
  
		$data['shipping_multiflat'] = array();
		
		if (isset($this->request->post['shipping_multiflat'])) {
			$data['shipping_multiflat'] = $this->request->post['shipping_multiflat'];
		} elseif ($this->config->get('shipping_multiflat')) {
			$data['shipping_multiflat'] = $this->config->get('shipping_multiflat');
		}
		
		if (isset($this->request->post['shipping_multiflat_status'])) {
			$data['shipping_multiflat_status'] = $this->request->post['shipping_multiflat_status'];
		} else {
			$data['shipping_multiflat_status'] = $this->config->get('shipping_multiflat_status');
		}
 
		if (isset($this->request->post['shipping_multiflat_sort_order'])) {
			$data['shipping_multiflat_sort_order'] = $this->request->post['shipping_multiflat_sort_order'];
		} elseif ($this->config->get('shipping_multiflat_sort_order')) {
			$data['shipping_multiflat_sort_order'] = $this->config->get('shipping_multiflat_sort_order');
		}
 
		if (isset($this->request->post['shipping_multiflat_name'])) {
			$data['shipping_multiflat_name'] = $this->request->post['shipping_multiflat_name'];
		} elseif ($this->config->get('shipping_multiflat_name')) {
			$data['shipping_multiflat_name'] = $this->config->get('shipping_multiflat_name');
		}

		$this->load->model('localisation/tax_class');

		$data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/shipping/multiflat', $data));
	}
	
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/shipping/multiflat')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}