<?php
class ControllerExtensionModuleCategorywall extends Controller {
	public function index() {
		$this->load->language('extension/module/categorywall');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');
		
		$this->load->model('tool/image');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);
				
				shuffle($children);
				
				$children = array_slice($children, 0, 8);

				foreach ($children as $child) {
					if (!empty($child)) {
					$gchildren_data = array();
					
				    $gchildren = $this->model_catalog_category->getCategories($child['category_id']);
					 
						shuffle($gchildren);

						$gchildren = array_slice($gchildren, 0, 3);
				 
						foreach ($gchildren as $gchild) {
 
							$gchildren_filter_data = array(
								'filter_category_id'  => $gchild['category_id'],
								'filter_sub_category' => true
							);
							
							$gchildren_data[] = array(
								'name'  => $gchild['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($gchildren_filter_data) . ')' : ''),
								'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $gchild['category_id'])
							);
						}
					
					}
					
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);
					
					if ($child['image']) {
						$image = $this->model_tool_image->resize($child['image'], 366, 250);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
					}

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'gchildren' => $gchildren_data,
					    'column'   => $child['column'] ? $child['column'] : 1,
						'image'	=> $image,
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

				if ($category['image']) {
                    $image = $this->model_tool_image->resize($category['image'], 366, 250);
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
                }
				
				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'image'	=> $image,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}
		

		return $this->load->view('extension/module/categorywall', $data);
	}
}