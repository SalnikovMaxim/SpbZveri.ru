<?php
class ControllerExtensionModuleManufacturer extends Controller {
	public function index() {
		$this->load->language('extension/module/manufacturer');

		$data['heading_title'] = $this->language->get('heading_title');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['manufacturer_id'] = $parts[0];
		} else {
			$data['manufacturer_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('catalog/manufacturer');

		$this->load->model('catalog/product');
		
		$this->load->model('tool/image');

		$data['manufacturers'] = array();

		$manufacturers = $this->model_catalog_manufacturer->getManufacturers(0);

		foreach ($manufacturers as $manufacturer) {

			$filter_data = array(
				'filter_manufacturer_id'  => $manufacturer['manufacturer_id'],
				'filter_sub_manufacturer' => true
			);
			
			if ($manufacturer['image']) {
				$image = $this->model_tool_image->resize($manufacturer['image'], 100, 100);
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', 100, 100);
			}

			$data['manufacturers'][] = array(
				'manufacturer_id' => $manufacturer['manufacturer_id'],
				'image' 	  => $image,
				'name'        => $manufacturer['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
				'href'        => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id'])
			);
		}

		return $this->load->view('extension/module/manufacturer', $data);
	}
}