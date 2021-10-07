<?php
class ModelExtensionShippingMultiFlat extends Model {
	function getQuote($address) {
		$status = false;
		$multiflats = $this->config->get('shipping_multiflat');

		foreach ($multiflats as $i => $flat) {
			if (!$flat['status']) {
				continue;
			}

			if (!$flat['geo_zone_id']) {
				$status = true;
			} else {
				$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$flat['geo_zone_id'] . "'" . " AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");
				if ($query->num_rows) {
					$status = true;
				} else {
					$multiflats[$i]['status'] = false;
				}
			}
		}

		$method_data = array();
		
		//$cart_weight = $this->cart->getWeight();
		$cart_total = $this->cart->getTotal();

		if ($status) {
			$quote_data = array();
			$sort_order = array();

			foreach ($multiflats as $i => $flat) {
				if (!$flat['status']) {
					continue;
				}
				
				//if ($cart_weight == 0 && $flat['sort_order'] != 0) continue;
                //if ($cart_weight > 0 && $flat['sort_order'] == 0) continue;
                
                if (!empty($flat['min']) && $cart_total <= $flat['min']) continue;
                if (!empty($flat['max']) && $cart_total > $flat['max']) continue;

				$quote_data['multiflat' . $i] = array(
					'code'         => 'multiflat.multiflat' . $i,
					'title'        => $flat['name'],
					'cost'         => $flat['cost'],
					'tax_class_id' => $flat['tax_class_id'],
					'text'         => $this->currency->format($this->tax->calculate($flat['cost'], $flat['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
				);


				$sort_order[$i] = $flat['sort_order'];
			}

			array_multisort($sort_order, SORT_ASC, $quote_data);
 
			$method_data = array(
				'code'       => 'multiflat',
				'title'      => $this->config->get('shipping_multiflat_name'),
				'quote'      => $quote_data,
				'sort_order' => $this->config->get('shipping_multiflat_sort_order'),
				'error'      => false
			);
			
 
		}

		return $method_data;
	}
}