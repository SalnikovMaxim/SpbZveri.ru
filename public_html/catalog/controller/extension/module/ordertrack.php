<?php  
class ControllerExtensionModuleOrdertrack extends Controller {
	private $error = array(); 

	public function index() {
		
		$this->load->language('extension/module/ordertrack');
		
    	$data['heading_title'] = $this->language->get('heading_title');
    
	   $this->load->model('account/order');
	   $this->load->model('catalog/product');
			$this->load->model('tool/upload');
		$order_id = 16;
		$email = $this->model_account_order->getOrder($order_id);
		 
		 
		$order_info = $this->model_account_order->getOrder($order_id);
		// Products
		
		 
			$data['products'] = array();

			$products = $this->model_account_order->getOrderProducts($order_id);
print_r('<pre>');
		print_r($products);
		print_r('</pre>');
		
			foreach ($products as $product) {
				$option_data = array();

				$options = $this->model_account_order->getOrderOptions($order_id, $product['order_product_id']);

				foreach ($options as $option) {
					if ($option['type'] != 'file') {
						$value = $option['value'];
					} else {
						$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

						if ($upload_info) {
							$value = $upload_info['name'];
						} else {
							$value = '';
						}
					}

					$option_data[] = array(
						'name'  => $option['name'],
						'value' => (utf8_strlen($value) > 60 ? utf8_substr($value, 0, 60) . '..' : $value)
					);
				}

				$product_info = $this->model_catalog_product->getProduct($product['product_id']);
 

				$data['products'][] = array(
					'name'     => $product['name'],
					'model'    => $product['model'],
					'option'   => $option_data
				);
			}
			
			return $this->load->view('extension/module/ordertrack', $data);
		 
		//$this->render();
		//$this->response->setOutput($this->render());
	}

	public function trackorder() {
		$this->load->language('extension/module/ordertrack');
				
		$json[] = array();
	 
			//$redirect = $this->url->link('information/contact&order_id=' . $this->request->post['order_id']);
		//	$json['success'] = $this->language->get('text_success');
			
			
			 $this->load->model('account/order');
	   $this->load->model('catalog/product');
			$this->load->model('tool/upload');
		$order_id = 16;
		$email = $this->model_account_order->getOrder($order_id);
		  
		$order_info = $this->model_account_order->getOrder($order_id);
		// Products
		
		  
			$products = $this->model_account_order->getOrderProducts($order_id);
 
			foreach ($products as $product) {
				$option_data = array();

				$options = $this->model_account_order->getOrderOptions($order_id, $product['order_product_id']);

				foreach ($options as $option) {
					if ($option['type'] != 'file') {
						$value = $option['value'];
					} else {
						$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

						if ($upload_info) {
							$value = $upload_info['name'];
						} else {
							$value = '';
						}
					}

					$option_data[] = array(
						'name'  => $option['name'],
						'value' => (utf8_strlen($value) > 60 ? utf8_substr($value, 0, 60) . '..' : $value)
					);
				}

				$product_info = $this->model_catalog_product->getProduct($product['product_id']);
 
				$json[] = array(
					'name'     => $product['name'],
					'product_id'     => $product['product_id'],
					'quantity'     => $product['quantity'],
					'model'    => $product['model'],
					'option'   => $option_data
				);
			}
 $json['success'] = $json;
 
 $json['redirect'] = $this->url->link('checkout/cart');
	 
	 $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
	}
 
  	private function validate() {

		if (empty($this->request->post['order_id']) || !is_numeric($this->request->post['order_id'])) {
      		$this->error['message'] = $this->language->get('error_order_id');
    	}

		$this->load->model('account/order');
		$email = $this->model_account_order->trackingOrder($this->request->post['order_id'], $this->request->post['email']);
		if($email){
			$this->session->data['tracking_email'] = $email;
			if(isset($this->session->data['tracking_order'])){ 
				unset($this->session->data['tracking_order']); 
			}
		}else{
			if(isset($this->session->data['tracking_order'])) {
				$this->session->data['tracking_order'] = $this->session->data['tracking_order'] + 1;
			}else{
				$this->session->data['tracking_order'] = 1;
			}
			$this->error['message'] = $this->language->get('error_order_msg');
		}

		if (isset($this->session->data['tracking_order']) && $this->session->data['tracking_order'] >= 3) {
      		$this->error['message'] = $this->language->get('error_tracking_order');
    	}
 
    	if (!preg_match('/^[^\@]+@.*\.[a-z]{2,6}$/i', $this->request->post['email'])) {
      		$this->error['message'] = $this->language->get('error_email');
    	}
 	
 
		if (!$this->error) {
	  		return TRUE;
		} else {
	  		return FALSE;
		}  	  
  	}

}
