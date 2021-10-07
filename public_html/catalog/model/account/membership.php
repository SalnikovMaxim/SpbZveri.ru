<?php
class ModelAccountMembership extends Model {
	public function getCardCode($customer_id = 0) {
		if (!$customer_id) {
			$customer_id = $this->customer->getId();
		}
		
		$result = $this->db->query("SELECT `code` FROM `" . DB_PREFIX . "membership_card` WHERE `customer_id` = '" . (int)$customer_id . "'")->row;

		return !empty($result['code']) ? $result['code'] : false;
	}
	
	public function getCustomerGroupId($customer_id = 0) {
		if (!$customer_id) {
			$customer_id = $this->customer->getId();
		}
		
		$result = $this->db->query("SELECT `customer_group_id` FROM `" . DB_PREFIX . "customer` WHERE `customer_id` = '" . (int)$customer_id . "'")->row;

		return !empty($result['customer_group_id']) ? $result['customer_group_id'] : false;
	}
	
	public function getCardBalance($card_id) {
		$card_settings = $this->config->get('membership_card');
			
		if (isset($card_settings['accounted_orders_balance']) && in_array('membership_card_orders_total', $card_settings['accounted_orders_balance']) && in_array('membership_card_orders_discount', $card_settings['accounted_orders_balance'])) {
			$sql = "SELECT `ct`.`card_id`, (COALESCE(SUM(`ht`.`total`), 0) + COALESCE(SUM(`ht`.`discount`), 0)) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1  WHERE `ct`.`card_id` = '" . (int)$card_id . "' GROUP BY `ct`.`card_id`";
		} elseif (isset($card_settings['accounted_orders_balance']) && in_array('membership_card_orders_discount', $card_settings['accounted_orders_balance'])) {
            $sql = "SELECT `ct`.`card_id`, SUM(`ht`.`discount`) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1  WHERE `ct`.`card_id` = '" . (int)$card_id . "'GROUP BY `ct`.`card_id`";
        } else {
			$sql = "SELECT `ct`.`card_id`, SUM(`ht`.`total`) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1  WHERE `ct`.`card_id` = '" . (int)$card_id . "'GROUP BY `ct`.`card_id`";
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}
	
	public function getCustomerBalance($customer_id = 0) {
		if (!$customer_id) {
			$customer_id = $this->customer->getId();
		}
		
		$card_settings = $this->config->get('membership_card');
		
		if ($card_settings['order_expiry']['value']) {
			$o_exp = " AND DATE_ADD(`date_modified`, INTERVAL " . (int)$card_settings['order_expiry']['value'] . " " . $card_settings['order_expiry']['type'] . ") > NOW() ";
		} else {
			$o_exp = '';
		}
			
		$query = $this->db->query("SELECT COALESCE(SUM(`total`), 0) AS `total` FROM `" . DB_PREFIX . "order` WHERE `customer_id` = '" . (int)$customer_id . "' AND `order_status_id` IN (" . implode (',', $this->config->get('config_complete_status')) . ")" . $o_exp) ;

		return $query->row['total'];
	}
	
	public function getCardHistoryTotals($card_id) {
		$query = $this->db->query("SELECT  SUM(`total_without_discount`) as `total_without_discount`,  SUM(`discount`) AS `discount`, SUM(`total`) AS `total` 
								FROM `" . DB_PREFIX . "membership_card_history` 
								WHERE `card_id` = '" . (int)$card_id . "' AND `status` = 1");

		return $query->row;
	}
}