<?php
namespace Cart;
class Weight {
	private $weights = array();

	public function __construct($registry) {
		$this->db = $registry->get('db');
		$this->config = $registry->get('config');

		$weight_class_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "weight_class wc LEFT JOIN " . DB_PREFIX . "weight_class_description wcd ON (wc.weight_class_id = wcd.weight_class_id) WHERE wcd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		foreach ($weight_class_query->rows as $result) {
			$this->weights[$result['weight_class_id']] = array(
				'weight_class_id' => $result['weight_class_id'],
				'title'           => $result['title'],
				'unit'            => $result['unit'],
				'cols'            => $result['cols'],
				'value'           => $result['value']
			);
		}
	}

	public function convert($value, $from, $to) {
		if ($from == $to) {
			return $value;
		}

		if (isset($this->weights[$from])) {
			$from = $this->weights[$from]['value'];
		} else {
			$from = 1;
		}

		if (isset($this->weights[$to])) {
			$to = $this->weights[$to]['value'];
		} else {
			$to = 1;
		}

		return $value * ($to / $from);
	}

	public function format($value, $weight_class_id, $decimal_point = '.', $thousand_point = ',') {
 
		if (isset($this->weights[$weight_class_id])) {
			$dtagdfgf = preg_replace("/\.00/", "", number_format((float)$value, $this->weights[$weight_class_id]['cols'], $decimal_point, $thousand_point) . ' ' . $this->weights[$weight_class_id]['unit'] );
			$dtagdfgf = preg_replace("/\.0/", "", number_format((float)$value, $this->weights[$weight_class_id]['cols'], $decimal_point, $thousand_point) . ' ' . $this->weights[$weight_class_id]['unit'] );
			return  $dtagdfgf;
			//return number_format($value, isset($this->weights[$weight_class_id]['cols']) ? $this->weights[$weight_class_id]['cols'] : 3, $decimal_point, $thousand_point) . ' ' . $this->weights[$weight_class_id]['unit'];
		} else {
			return preg_replace("/\.00/", "", number_format($value, isset($this->weights[$weight_class_id]['cols']), $decimal_point, $thousand_point) );
			//return number_format($value, isset($this->weights[$weight_class_id]['cols']) ? $this->weights[$weight_class_id]['cols'] : 3, $decimal_point, $thousand_point);
		}
	}

	public function getUnit($weight_class_id) {
		if (isset($this->weights[$weight_class_id])) {
			return $this->weights[$weight_class_id]['unit'];
		} else {
			return '';
		}
	}
}