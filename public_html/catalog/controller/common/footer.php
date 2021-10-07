<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');
		
		if(!$this->customer->isLogged()) {
			$data['subscribers'] = 1;
		}

		$this->load->model('catalog/information');

		$data['informationstop'] = array();
		
		$data['informationsbottom'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['top']) {
				$data['informationstop'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
			
			if ($result['bottom']) {
				$data['informationsbottom'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}
		
		// Меню 2
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);

		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		$data['email'] = $this->config->get('config_email');
		$data['comment'] = $this->config->get('config_comment');
		$data['address'] = $this->config->get('config_address');
		$data['names'] = $this->config->get('config_name');
		$data['abouts'] = $this->config->get('config_about');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		
		$data['articles'] = $this->url->link('information/articles');
	 
		if ($this->config->get('module_progroman_citymanager_status') && $this->progroman_citymanager->setting('cities_in_source')) {
            $data['prmn_cmngr_cities'] = $this->load->controller('extension/module/progroman/citymanager/cities');
        } else {
            $data['prmn_cmngr_cities'] = '';
        }

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		$data['styles'] = $this->document->getStyles('footer');

		return $this->load->view('common/footer', $data);
	}
	
	public function newSubscribe(){
		
		$json = array();
	  
		$this->load->model('account/customer');
 
		$json['message'] = $this->model_account_customer->Subscribe($this->request->post);

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function trackorder() {
		
		$json[] = array();
 
		$this->load->model('account/order');
		
		if (isset($this->request->post['order_id'])) {
			$order_id = $this->request->post['order_id'];
		} else {
			$order_id = '';
		}
	 
		$emaisdsdl = $this->model_account_order->trackingOrder($order_id);
	 
		if ($emaisdsdl) {
		 
			$products = $this->model_account_order->getOrderProducts($order_id);

			foreach ($products as $product) {
				$option_data = array();

				$options = $this->model_account_order->getOrderOptions($order_id, $product['order_product_id']);

				foreach ($options as $option) {
					$option_data[] = array(
						'name'  => $option['name'],
						'value' => (utf8_strlen($value) > 60 ? utf8_substr($value, 0, 60) . '..' : $value)
					);
				}
 
				$json[] = array(
					'product_id'	=> $product['product_id'],
					'quantity'		=> $product['quantity'],
					'option'		=> $option_data
				);
			}
			
			$json['success'] = $json;

			$json['redirect'] = $this->url->link('checkout/cart');
			
		} else {
			
			$json['error'] = 'Номер заказа не найден';
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function searchidProduct() {
        $json = array();
 
		$this->load->model('catalog/product');

		if (isset($this->request->post['product_ids'])) {
			$product_id = $this->request->post['product_ids'];
		} else {
			$product_id = '';
		}
		
		$product_ids = $this->model_catalog_product->getTotalProductIds($product_id);
 
		if ($product_ids) {
			$results = $this->model_catalog_product->getProducts($product_id);

			foreach ($results as $result) {
				if($product_id == $result['product_id']) {
					$option_data = array();

					$json[] = array(
						'product_id' => $result['product_id'],
						'href'       => $this->url->link('product/product', '&product_id=' . $result['product_id'])
					);
				}
			}
			
			$json['success'] = $json;
		} else {
			
			$json['error'] = 'ID товара не найден';
		}
 

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
