<?php 
class ControllerExtensionModuleApProductUpdate extends Controller 
{
	private $error = array();
	private $_fileTypes = array (
		'application/vnd.ms-excel',
		'application/msexcel',
		'application/x-msexcel',
		'application/x-ms-excel',
		'application/x-excel',
		'application/x-dos_ms_excel',
		'application/xls',
		'application/x-xls',
		'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
		'text/xml'
	);

	public function index () 
	{
		$data = $this->load->language('extension/module/ap_product_update');
		$this->document->setTitle($this->language->get('heading_title_tow'));

		if ( ($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate() ) {
			$this->load->model('setting/setting');

			$this->model_setting_setting->editSetting('module_ap_product_update', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module/ap_product_update', 'user_token=' . $this->session->data['user_token'], true));
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
		} else {
			$data['success'] = '';
		}

		if ( isset($this->error['warning']) ) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
 
		if ( isset($this->error['error_sku']) ) {
			$data['error_sku'] = $this->error['error_sku'];
		} else {
			$data['error_sku'] = '';
		}

		if ( isset($this->error['error_upc']) ) {
			$data['error_upc'] = $this->error['error_upc'];
		} else {
			$data['error_upc'] = '';
		}
 
		if ( isset($this->error['error_price']) ) {
			$data['error_price'] = $this->error['error_price'];
		} else {
			$data['error_price'] = '';
		}

		if ( isset($this->error['error_quantity']) ) {
			$data['error_quantity'] = $this->error['error_quantity'];
		} else {
			$data['error_quantity'] = '';
		}

		if ( isset($this->error['error_start_column']) ) {
			$data['error_start_column'] = $this->error['error_start_column'];
		} else {
			$data['error_start_column'] = '';
		}

		if ( isset($this->error['error_stop_column']) ) {
			$data['error_stop_column'] = $this->error['error_stop_column'];
		} else {
			$data['error_stop_column'] = '';
		}	

		if ( isset($this->error['error_upc_sku']) ) {
			$data['error_upc_sku'] = $this->error['error_upc_sku'];
		} else {
			$data['error_upc_sku'] = '';
		}	

		if ( isset($this->error['error_quantity_price']) ) {
			$data['error_quantity_price'] = $this->error['error_quantity_price'];
		} else {
			$data['error_quantity_price'] = '';
		}							
									

		$data['error_warning'] = array();

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'] = array (
			array (
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
			),
		
			array (
				'text' => $this->language->get('text_module'),
				'href' => $this->url->link('extension/module', 'user_token=' . $this->session->data['user_token'], true)
			),

			array (
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('extension/module/ap_product_update', 'user_token=' . $this->session->data['user_token'], true)
			)
		);

		$data['action_settings'] = $this->url->link('extension/module/ap_product_update/index',    'user_token=' . $this->session->data['user_token'], true);
		$data['action_update']   = $this->url->link('extension/module/ap_product_update/update&user_token=' . $this->session->data['user_token'], true); // AJAX
		$data['action_upload']   = $this->url->link('extension/module/ap_product_update/upload',   'user_token=' . $this->session->data['user_token'], true);
		$data['action_download'] = $this->url->link('extension/module/ap_product_update/download', 'user_token=' . $this->session->data['user_token'], true);
		$data['cancel']          = $this->url->link('extension/module', 'user_token=' . $this->session->data['user_token'], true); 

		$config =  $this->config->get('module_ap_product_update');

		if (!empty($config['sku'])) {
			$data['sku'] = $config['sku'];
		} elseif (isset($this->request->post['module_ap_product_update']['sku'])) {
			$data['sku']  = $this->request->post['module_ap_product_update']['sku'];
		} else {
			$data['sku']  = '';
		}
 
		if (!empty($config['upc'])) {
			$data['upc'] = $config['upc'];
		} elseif (isset($this->request->post['module_ap_product_update']['upc'])) {
			$data['upc']  = $this->request->post['module_ap_product_update']['upc'];
		} else {
			$data['upc']  = '';
		}
 
		if (!empty($config['price'])) {
			$data['price'] = $config['price'];
		} elseif (isset($this->request->post['module_ap_product_update']['price'])) {
			$data['price']  = $this->request->post['module_ap_product_update']['price'];
		} else {
			$data['price']  = '';
		}
		
		if (!empty($config['quantity'])) {
			$data['quantity'] = $config['quantity'];
		} elseif (isset($this->request->post['module_ap_product_update']['quantity'])) {
			$data['quantity']  = $this->request->post['module_ap_product_update']['quantity'];
		} else {
			$data['quantity']  = '';
		}


		if (!empty($config['start_column'])) {
			$data['start_column'] = $config['start_column'];
		} elseif (isset($this->request->post['module_ap_product_update']['start_column'])) {
			$data['start_column']  = $this->request->post['module_ap_product_update']['start_column'];
		} else {
			$data['start_column']  = '';
		}

		if (!empty($config['stop_column'])) {
			$data['stop_column'] = $config['stop_column'];
		} elseif (isset($this->request->post['stop_column'])) {
			$data['stop_column']  = $this->request->post['module_ap_product_update']['stop_column'];
		} else {
			$data['stop_column']  = '';
		}									

		
		$this->load->model('catalog/manufacturer');
		$this->load->model('catalog/category');

		$data['manufacturer']   = $this->model_catalog_manufacturer->getManufacturers( array('sort' => 'name', 'order' => 'ASC') );
		$data['categories']     = $this->model_catalog_category->getCategories( array('sort' => 'name', 'order' => 'ASC') );		

		// DELATE EXPORT SESSION SETTING 
		unset($this->session->data['start_export_row'], $this->session->data['export_step']);


		$data['header'] = $this->load->controller('common/header');
		$data['footer'] = $this->load->controller('common/footer');
		$data['column_left'] = $this->load->controller('common/column_left'); 

		$this->response->setOutput($this->load->view('extension/module/ap_product_update', $data));
	}
 
	public function upload () 
	{
		$this->load->language('extension/module/ap_product_update');
$json = array();
		if (empty($this->request->files['file']['name']) && !is_file($this->request->files['file']['tmp_name']))
			$json['error'] = $this->language->get('error_upload');
		elseif (!in_array($this->request->files['file']['type'], $this->_fileTypes))
			$json['error'] = $this->language->get('error_filetype');
		elseif ($this->request->files['file']['error'] != UPLOAD_ERR_OK) 
			$json['error'] = 'ERROR #' . $this->request->files['file']['error'];
		else {
			$file = 'ap_update_file' . strrchr($this->request->files['file']['name'], '.');
			$json['file_status'] = move_uploaded_file($this->request->files['file']['tmp_name'], DIR_UPLOAD . $file);

			$this->session->data['export_file_path'] = DIR_UPLOAD . $file;
		} 

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput( json_encode($json) );
	}

	public function update () 
	{
		$json = array();
		$data = $this->config->get('module_ap_product_update');
		if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validateUpdate() ) {
			$this->load->model('extension/module/ap_product_update');
			 $json = $this->model_extension_module_ap_product_update->update($this->session->data['export_file_path'], $data );
		}

 
		//$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json, JSON_NUMERIC_CHECK));
	}	

	public function download () 
	{$json = array();
		if ( $this->request->server['REQUEST_METHOD'] != 'POST' && !$this->validateDownload() )
			$this->response->redirect($this->url->link('extension/module/ap_product_update/index', 'user_token=' . $this->session->data['user_token'], true));

		$this->load->model('extension/module/ap_product_update');

		$this->model_extension_module_ap_product_update->download($this->request->post);
		
		$this->response->setOutput( json_encode($json) );
	}
 
	private function validateDownload() 
	{
		if (!$this->user->hasPermission('modify', 'extension/module/ap_product_update')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	private function validate () 
	{
		if (!$this->user->hasPermission('modify', 'extension/module/ap_product_update')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
	 
		if ( !is_numeric($this->request->post['module_ap_product_update']['sku']) || $this->request->post['module_ap_product_update']['sku'] < 0 ) {
			$this->error['error_sku'] = $this->language->get('error_sku');
		}

		if ( !is_numeric($this->request->post['module_ap_product_update']['upc']) || $this->request->post['module_ap_product_update']['upc'] < 0 ) {
			$this->error['error_upc'] = $this->language->get('error_upc');
		}
 
		if ( !is_numeric($this->request->post['module_ap_product_update']['price']) || $this->request->post['module_ap_product_update']['price'] < 0 ) {
			$this->error['error_price'] = $this->language->get('error_price');
		}

		if ( !is_numeric($this->request->post['module_ap_product_update']['quantity']) || $this->request->post['module_ap_product_update']['quantity'] < 0 ) {
			$this->error['error_quantity'] = $this->language->get('error_quantity');
		}

		if ( !is_numeric($this->request->post['module_ap_product_update']['start_column']) || empty( $this->request->post['module_ap_product_update']['start_column'] ) ) {
			$this->error['error_start_column'] = $this->language->get('error_start_column');
		}

		if ( !is_numeric($this->request->post['module_ap_product_update']['stop_column']) || empty( $this->request->post['module_ap_product_update']['stop_column'] ) ) {
			$this->error['error_stop_column'] = $this->language->get('error_stop_column');
		}	

		if ($this->request->post['module_ap_product_update']['sku'] <= 0 && $this->request->post['module_ap_product_update']['upc'] <= 0) {
			$this->error['error_upc_sku'] = $this->language->get('error_upc_sku');
		}	

		if ($this->request->post['module_ap_product_update']['price'] <= 0 && $this->request->post['module_ap_product_update']['quantity'] <= 0) {
			$this->error['error_quantity_price'] = $this->language->get('error_quantity_price');
		}												
 
		return !$this->error;
	}

	private function validateUpdate () 
	{
 
		$this->load->language('extension/module/ap_product_update');

		$config = $this->config->get('module_ap_product_update');

		if (!$this->user->hasPermission('modify', 'extension/module/ap_product_update')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
 
		if ( !is_numeric($config['sku']) || $config['sku'] < 0 ) {
			$this->error['sku'] = $this->language->get('error_sku');
		}

		if ( !is_numeric($config['upc']) || $config['upc'] < 0 ) {
			$this->error['upc'] = $this->language->get('error_upc');
		}
 
		if ( !is_numeric($config['price']) || $config['price'] < 0 ) {
			$this->error['price'] = $this->language->get('error_price');
		}

		if ( !is_numeric($config['quantity']) || $config['quantity'] < 0 ) {
			$this->error['quantity'] = $this->language->get('error_quantity');
		}

		if ( !is_numeric($config['start_column']) || empty( $config['start_column'] ) ) {
			$this->error['start_column'] = $this->language->get('error_start_column');
		}

		if ( !is_numeric($config['stop_column']) || empty( $config['stop_column'] ) ) {
			$this->error['stop_column'] = $this->language->get('error_stop_column');
		}	

		if ($config['sku'] <= 0 && $config['upc'] <= 0) {
			$this->error['upc_sku'] = $this->language->get('error_upc_sku');
		}	

		if ($config['price'] <= 0 && $config['quantity'] <= 0) {
			$this->error['quantity_price'] = $this->language->get('error_quantity_price');
		}														
  
		return !$this->error;
	}
}