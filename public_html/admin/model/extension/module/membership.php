<?php
class ModelExtensionModuleMembership extends Model {
	public function addCard($data) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "membership_card` 
						SET `customer_id` = '" . (int)$data['customer_id'] . "', 
						  	`code` = '" . $this->db->escape($data['code']) . "', 
						  	`date_start` = '" . $this->db->escape($data['date_start']) . "', 
						  	`date_expiry` = '" . $this->db->escape($data['date_expiry']) . "', 
						  	`discount` = '" . (!empty($data['discount']) ? $this->db->escape(serialize($data['discount'])) : '') . "', 
						  	`categories` = '" . (!empty($data['categories']) ? $this->db->escape(implode(',', $data['categories'])) : '') . "', 
						  	`products` = '" . (!empty($data['products']) ? $this->db->escape(implode(',', $data['products'])) : '') . "', 
						  	`logged` = '" . (int)$data['logged'] . "', 
						  	`free_shipping` = '" . (int)$data['free_shipping'] . "', 
						  	`minimum_order_amount` = '" . (int)$data['minimum_order_amount'] . "',
						  	`maximum_order_amount` = '" . (int)$data['maximum_order_amount'] . "',
						  	`uses_total` = '" . (int)$data['uses_total'] . "',
						  	`uses_customer` = '" . (int)$data['uses_customer'] . "',
						  	`status` = '" . (int)$data['status'] . "',
						  	`datetime_added` = NOW()");

		$card_id = $this->db->getLastId();

		return $card_id;
	}

	public function editCard($card_id, $data) {
		$this->db->query("UPDATE `" . DB_PREFIX . "membership_card`
						SET `customer_id` = '" . (int)$data['customer_id'] . "',
						  	`code` = '" . $this->db->escape($data['code']) . "',
						  	`date_start` = '" . $this->db->escape($data['date_start']) . "',
						  	`date_expiry` = '" . $this->db->escape($data['date_expiry']) . "',
						  	`discount` = '" . (!empty($data['discount']) ? $this->db->escape(serialize($data['discount'])) : '') . "',
						  	`categories` = '" . (!empty($data['categories']) ? $this->db->escape(implode(',', $data['categories'])) : '') . "', 
						  	`products` = '" . (!empty($data['products']) ? $this->db->escape(implode(',', $data['products'])) : '') . "', 	
						  	`logged` = '" . (int)$data['logged'] . "',
						  	`free_shipping` = '" . (int)$data['free_shipping'] . "',
						  	`minimum_order_amount` = '" . (int)$data['minimum_order_amount'] . "',
						  	`maximum_order_amount` = '" . (int)$data['maximum_order_amount'] . "',
						  	`uses_total` = '" . (int)$data['uses_total'] . "',
						  	`uses_customer` = '" . (int)$data['uses_customer'] . "',
						  	`status` = '" . (int)$data['status'] . "'
						WHERE `card_id` = '" . (int)$card_id . "'");
	}

	public function deleteCard($card_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "membership_card` WHERE `card_id` = '" . (int)$card_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "membership_card_history` WHERE `card_id` = '" . (int)$card_id . "'");
	}

	public function getCard($card_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "membership_card` WHERE `card_id` = '" . (int)$card_id . "'");

		return $query->row;
	}

	public function getCardByCode($code) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "membership_card` WHERE `code` = '" . $this->db->escape($code) . "'");

		return $query->row;
	}
	
	public function getCardByCustomer($customer_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "membership_card` WHERE `customer_id` = '" . $this->db->escape($customer_id) . "'");

		return $query->row;
	}

	public function getCards($data = array()) {
		$card_settings = $this->config->get('module_membership_card');
		
		if ($card_settings['order_expiry']['value']) {
			$o_exp = " AND DATE_ADD(`ot`.`date_modified`, INTERVAL " . (int)$card_settings['order_expiry']['value'] . " " . $card_settings['order_expiry']['type'] . ") > NOW() ";
		} else {
			$o_exp = ' ';
		}
		
		/* START Balance type */
		if (!isset($card_settings['accounted_orders_balance'])) {
			$card_settings['accounted_orders_balance'] = array();
		}
		
		if (in_array('membership_card_orders_total', $card_settings['accounted_orders_balance']) && in_array('membership_card_orders_discount', $card_settings['accounted_orders_balance'])) {
			$sql_total = " LEFT JOIN (SELECT `ct`.`card_id`, (COALESCE(SUM(`ht`.`total`), 0) + COALESCE(SUM(`ht`.`discount`), 0)) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1 GROUP BY `ct`.`card_id`) AS `t` ON `mc`.`card_id` = `t`.`card_id` ";
		} elseif (in_array('membership_card_orders_discount', $card_settings['accounted_orders_balance'])) {
            $sql_total = " LEFT JOIN (SELECT `ct`.`card_id`, SUM(`ht`.`discount`) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1 GROUP BY `ct`.`card_id`) AS `t` ON `mc`.`card_id` = `t`.`card_id` ";
        } elseif (in_array('completed_orders', $card_settings['accounted_orders_balance'])) {
			$sql_total = " LEFT JOIN (SELECT `ct`.`card_id`, COALESCE(SUM(`ot`.`total`), 0) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "order` AS `ot` ON `ot`.`customer_id` <> 0 AND `ct`.`customer_id` = `ot`.`customer_id` AND `ot`.`order_status_id` IN (" . implode (',', $this->config->get('config_complete_status')) . ")" . $o_exp . "GROUP BY `ct`.`card_id`) AS `t` ON `mc`.`card_id` = `t`.`card_id` ";
		} else {
			$sql_total = " LEFT JOIN (SELECT `ct`.`card_id`, SUM(`ht`.`total`) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1 GROUP BY `ct`.`card_id`) AS `t` ON `mc`.`card_id` = `t`.`card_id` ";
		}
		/* END Balance type */

		$sql = "SELECT `mc`.*, IFNULL(`t`.`total`, 0) AS `total`, CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) AS `cardowner`, `c`.`telephone`, `c`.`email` 
				FROM `" . DB_PREFIX . "membership_card` AS `mc`
				" . $sql_total . "
				LEFT JOIN `" . DB_PREFIX . "customer` AS `c` 
					ON `mc`.`customer_id` = `c`.`customer_id`
				WHERE 1";
		
		if (isset($data['filter_cardowner'])) {
			$sql .= " AND CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) LIKE '%" . $this->db->escape($data['filter_cardowner']) . "%'";
		}
		
		if (isset($data['filter_telephone'])) {
			$sql .= " AND `c`.`telephone` LIKE '%" . $this->db->escape($data['filter_telephone']) . "%'";
		}
		
		if (isset($data['filter_email'])) {
			$sql .= " AND `c`.`email` LIKE '%" . $this->db->escape($data['filter_email']) . "%'";
		}
		
		if (isset($data['filter_code'])) {
			$sql .= " AND `mc`.`code` LIKE '" . $this->db->escape($data['filter_code']) . "%'";
		}
		
		if (isset($data['filter_customer_id'])) {
			$sql .= " AND `mc`.`customer_id` LIKE '" . (int)$data['filter_customer_id'] . "'";
		}

		$sort_data = array(
			'cardowner',
			'code',
			'discount',
			'total',
			'date_start',
			'date_expiry',
			'status'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `card_id`";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		
		$this->checkCardsOrderExpiry();

		$query = $this->db->query($sql);

		return $query->rows;
	}
	
	public function changeCardStatus($card_id, $new_status_id) {
		$this->db->query("UPDATE `" . DB_PREFIX . "membership_card` SET `status` = '" . (int)$new_status_id . "' WHERE `card_id` ='" . (int)$card_id . "'");
	}
	
	public function addCardHistory($card_id, $total, $discount, $total_without_discount) {
		$query = $this->db->query("INSERT INTO `" . DB_PREFIX . "membership_card_history` SET `card_id` = '" . (int)$card_id . "', `total` = '" . (float)$total . "', `discount` = '" . (float)$discount . "', `total_without_discount` = '" . (float)$total_without_discount . "', `datetime_added` = NOW()");

		return $this->db->getLastId();
	}
	
	public function deleteCardHistory($card_history_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "membership_card_history` WHERE `card_history_id` = '" . (int)$card_history_id . "'");
	}
	
	public function getCardHistories($data = array(), $card_id = false) {
		$sql = "SELECT `mch`.*, CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) AS `cardowner`, CONCAT(`o`.`firstname`, ' ', `o`.`lastname`) AS `customer`, `mc`.`code`, `mc`.`customer_id` as `cardowner_id`
				FROM `" . DB_PREFIX . "membership_card_history` as `mch`
				LEFT JOIN `" . DB_PREFIX . "membership_card` as `mc` 
					ON `mch`.`card_id` = `mc`.`card_id`
				LEFT JOIN `" . DB_PREFIX . "customer` as `c` 
					ON `mc`.`customer_id` = `c`.`customer_id`
				LEFT JOIN `" . DB_PREFIX . "order` as `o`
					ON `mch`.`order_id` = `o`.`order_id`
				WHERE 1";
				
		if ($card_id) {
			$sql .= " AND `mch`.`card_id` = '" . (int)$card_id . "'";
		}
		
		if (isset($data['filter_order_id'])) {
			$sql .= " AND `mch`.`order_id` LIKE '" . $this->db->escape($data['filter_order_id']) . "%'";
		}		
		
		if (isset($data['filter_code'])) {
			$sql .= " AND `mc`.`code` LIKE '" . $this->db->escape($data['filter_code']) . "%'";
		}
				
		if (isset($data['filter_cardowner'])) {
			$sql .= " AND CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) LIKE '%" . $this->db->escape($data['filter_cardowner']) . "%'";
		}
		
		if (isset($data['filter_customer'])) {
			$sql .= " AND CONCAT(`o`.`firstname`, ' ', `o`.`lastname`) LIKE '%" . $this->db->escape($data['filter_customer']) . "%'";
		}
		
		if (isset($data['group_by'])) {
			$sql .= " GROUP BY `" . $this->db->escape($data['group_by']) . "`";
		}
		

		$sort_data = array(
			'order_id',
			'code',
			'cardowner',
			'customer',			
			'total_without_discount',
			'discount',
			'total',
			'datetime_added'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `mch`.`datetime_added`";
		}

		if (isset($data['order']) && $data['order'] == 'DESC') {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;		
	}
	
	public function getCardBalance($card_id) {
		$card_settings = $this->config->get('module_membership_card');
		
		if ($card_settings['order_expiry']['value']) {
			$o_exp = " AND DATE_ADD(`ot`.`date_modified`, INTERVAL " . (int)$card_settings['order_expiry']['value'] . " " . $card_settings['order_expiry']['type'] . ") > NOW() ";
		} else {
			$o_exp = ' ';
		}

		if (isset($card_settings['accounted_orders_balance']) && in_array('membership_card_orders_total', $card_settings['accounted_orders_balance']) && in_array('membership_card_orders_discount', $card_settings['accounted_orders_balance']) && in_array('completed_orders', $card_settings['accounted_orders_balance'])) {
			$sql = "SELECT `ct`.`card_id`, (COALESCE(SUM(`ht`.`total`), 0) + COALESCE(SUM(`ht`.`discount`), 0) + COALESCE(SUM(`ot`.`total`), 0)) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1 LEFT JOIN `" . DB_PREFIX . "order` AS `ot` ON `ct`.`customer_id` = `ot`.`customer_id` AND `ot`.`order_status_id` IN (" . implode (',', $this->config->get('config_complete_status')) . ")" . $o_exp . "WHERE `ct`.`card_id` = '" . (int)$card_id . "' GROUP BY `ct`.`card_id`";
		} elseif (isset($card_settings['accounted_orders_balance']) && in_array('membership_card_orders_total', $card_settings['accounted_orders_balance']) && in_array('completed_orders', $card_settings['accounted_orders_balance'])) {
			$sql = "SELECT `ct`.`card_id`, (COALESCE(SUM(`ht`.`total`), 0) + COALESCE(SUM(`ot`.`total`), 0)) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1 LEFT JOIN `" . DB_PREFIX . "order` AS `ot` ON `ct`.`customer_id` = `ot`.`customer_id` AND `ot`.`order_status_id` IN (" . implode (',', $this->config->get('config_complete_status')) . ")" . $o_exp . "WHERE `ct`.`card_id` = '" . (int)$card_id . "' GROUP BY `ct`.`card_id`";
		} elseif (isset($card_settings['accounted_orders_balance']) && in_array('membership_card_orders_discount', $card_settings['accounted_orders_balance']) && in_array('completed_orders', $card_settings['accounted_orders_balance'])) {
			$sql = "SELECT `ct`.`card_id`, (COALESCE(SUM(`ht`.`discount`), 0) + COALESCE(SUM(`ot`.`total`), 0)) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1 LEFT JOIN `" . DB_PREFIX . "order` AS `ot` ON `ct`.`customer_id` = `ot`.`customer_id` AND `ot`.`order_status_id` IN (" . implode (',', $this->config->get('config_complete_status')) . ")" . $o_exp . "WHERE `ct`.`card_id` = '" . (int)$card_id . "' GROUP BY `ct`.`card_id`";
		} elseif (isset($card_settings['accounted_orders_balance']) && in_array('membership_card_orders_total', $card_settings['accounted_orders_balance']) && in_array('membership_card_orders_discount', $card_settings['accounted_orders_balance'])) {
			$sql = "SELECT `ct`.`card_id`, (COALESCE(SUM(`ht`.`total`), 0) + COALESCE(SUM(`ht`.`discount`), 0)) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1 WHERE `ct`.`card_id` = '" . (int)$card_id . "' GROUP BY `ct`.`card_id`";
		} elseif (isset($card_settings['accounted_orders_balance']) && in_array('completed_orders', $card_settings['accounted_orders_balance'])) {
			$sql = "SELECT `ct`.`card_id`, COALESCE(SUM(`ot`.`total`), 0) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1 LEFT JOIN `" . DB_PREFIX . "order` AS `ot` ON `ct`.`customer_id` = `ot`.`customer_id` AND `ot`.`order_status_id` IN (" . implode (',', $this->config->get('config_complete_status')) . ")" . $o_exp . "WHERE `ct`.`card_id` = '" . (int)$card_id . "' GROUP BY `ct`.`card_id`";
		}  elseif (isset($card_settings['accounted_orders_balance']) && in_array('membership_card_orders_discount', $card_settings['accounted_orders_balance'])) {
			$sql = "SELECT `ct`.`card_id`, SUM(`ht`.`discount`) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1 WHERE `ct`.`card_id` = '" . (int)$card_id . "' GROUP BY `ct`.`card_id`";
		} else {
			$sql = "SELECT `ct`.`card_id`, SUM(`ht`.`total`) AS `total` FROM `" . DB_PREFIX . "membership_card` AS `ct` LEFT JOIN `" . DB_PREFIX . "membership_card_history` AS `ht` ON `ht`.`card_id` = `ct`.`card_id` AND `ht`.`status` = 1 WHERE `ct`.`card_id` = '" . (int)$card_id . "' GROUP BY `ct`.`card_id`";
		}
		
		$this->checkCardsOrderExpiry();

		$query = $this->db->query($sql);

		return isset($query->row['total']) ? $query->row['total'] : 0;
	}
	
	public function getCardHistoryTotals($card_id) {
		$query = $this->db->query("SELECT SUM(`total`) AS `total`, SUM(`discount`) AS `discount`, SUM(`total_without_discount`) as `total_without_discount` 
								FROM `" . DB_PREFIX . "membership_card_history` 
								WHERE `card_id` = '" . (int)$card_id . "' AND `status` = 1");

		return $query->row;
	}
	
	public function getTotalCards() {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "membership_card`");

		return $query->row['total'];
	}

	public function getTotalCardHistories($card_id = null) {
		$sql = "SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "membership_card_history`";
		
		if ($card_id) {
			$sql .= " WHERE `card_id` = '" . (int)$card_id . "'";
		}
		
		$query = $this->db->query($sql);

		return $query->row['total'];
	}
	
	public function getCustomersWithoutCardsByCustomerGroupId($customer_group_id) {
		$query = $this->db->query("SELECT `c`.`customer_id`
									FROM `" . DB_PREFIX . "customer` AS `c`
									LEFT JOIN `" . DB_PREFIX . "membership_card` AS `mc`
										ON `c`.`customer_id` = `mc`.`customer_id`
									WHERE `c`.`customer_group_id` = '" . (int)$customer_group_id . "' AND `mc`.`customer_id` IS NULL");

		return $query->rows;
	}
	
	public function getCustomersWithoutCardsByBalance($balance) {
		$query = $this->db->query("SELECT `o`.`customer_id`
									FROM `" . DB_PREFIX . "order` AS `o`
    								LEFT JOIN `" . DB_PREFIX . "membership_card` AS `mc`
    									ON `o`.`customer_id` = `mc`.`customer_id`
    								LEFT JOIN `" . DB_PREFIX . "customer` AS `c`
    									ON `o`.`customer_id` = `c`.`customer_id`	
									WHERE `o`.`order_status_id` IN (" . implode (',', $this->config->get('config_complete_status')) . ") AND `mc`.`customer_id` IS NULL AND `c`.`customer_id` IS NOT NULL
									GROUP BY `o`.`customer_id` HAVING SUM(`o`.`total`) >= '" . (int)$balance . "'");

		return $query->rows;
	}
	
	public function getCustomersWithoutCards($data = array()) {
		$sql = "SELECT `c`.*, CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) AS `cardowner` FROM `" . DB_PREFIX . "customer` AS `c` LEFT JOIN `" . DB_PREFIX . "membership_card` AS `mc` ON `c`.`customer_id` = `mc`.`customer_id` WHERE `c`.`status` = '1' AND `mc`.`customer_id` IS NULL";

		if (isset($data['filter_cardowner'])) {
			$sql .= " AND CONCAT(`c`.`firstname`, ' ', `c`.`lastname`) LIKE '%" . $this->db->escape($data['filter_cardowner']) . "%'";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		
		$query = $this->db->query($sql);

		return $query->rows;
	}
	
	public function addGift($data) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "membership_gift` 
						SET `name` = '" . $this->db->escape(serialize($data['name'])) . "', 
						  	`threshold` = '" . (float)$data['threshold'] . "',
						  	`maximum_cost` = '',
						  	`giving_quantity` = '" . (int)$data['giving_quantity'] . "', 
						  	`date_start` = '" . $this->db->escape($data['date_start']) . "', 
						  	`date_expiry` = '" . $this->db->escape($data['date_expiry']) . "', 
						  	`categories` = '" . (!empty($data['categories']) ? $this->db->escape(implode(',', $data['categories'])) : '') . "', 
						  	`products` = '" . (!empty($data['products']) ? $this->db->escape(implode(',', $data['products'])) : '') . "', 
						  	`status` = '" . (int)$data['status'] . "',
						  	`datetime_added` = NOW()");

		$gift_id = $this->db->getLastId();

		return $gift_id;
	}

	public function editGift($gift_id, $data) {
		$this->db->query("UPDATE `" . DB_PREFIX . "membership_gift`
						SET `name` = '" . $this->db->escape(serialize($data['name'])) . "', 
						  	`threshold` = '" . (int)$data['threshold'] . "',
						  	`maximum_cost` = '', 
						  	`giving_quantity` = '" . (int)$data['giving_quantity'] . "',
						  	`date_start` = '" . $this->db->escape($data['date_start']) . "', 
						  	`date_expiry` = '" . $this->db->escape($data['date_expiry']) . "', 
						  	`categories` = '" . (!empty($data['categories']) ? $this->db->escape(implode(',', $data['categories'])) : '') . "', 
						  	`products` = '" . (!empty($data['products']) ? $this->db->escape(implode(',', $data['products'])) : '') . "', 
						  	`status` = '" . (int)$data['status'] . "'
						WHERE `gift_id` = '" . (int)$gift_id . "'");
	}

	public function deleteGift($gift_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "membership_gift` WHERE `gift_id` = '" . (int)$gift_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "membership_gift_history` WHERE `gift_id` = '" . (int)$gift_id . "'");
	}
	
	public function getGift($gift_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM `" . DB_PREFIX . "membership_gift` WHERE `gift_id` = '" . (int)$gift_id . "'");

		return $query->row;
	}
	
	public function getGifts($data = array()) {
		$sql = "SELECT `mg`.*, IFNULL(`mgh`.`total`, 0) AS `total`
				FROM `" . DB_PREFIX . "membership_gift` AS `mg` 
				LEFT JOIN (SELECT `gift_id`, COUNT(*) AS `total` FROM `" . DB_PREFIX . "membership_gift_history` WHERE `status` = 1 GROUP BY `gift_id`) AS `mgh` 
					ON `mg`.`gift_id` = `mgh`.`gift_id` 
				WHERE 1";
		
		if (isset($data['filter_name'])) {
			$sql .= " AND `mg`.`name` LIKE '%\"" . $this->db->escape($data['filter_name']) . "%'";
		}

		$sort_data = array(
			'name',
			'threshold',
			'maximum_cost',
			'total',
			'date_start',
			'date_expiry',
			'status'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `gift_id`";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}
	
	public function changeGiftStatus($gift_id, $new_status_id) {
		$this->db->query("UPDATE `" . DB_PREFIX . "membership_gift` SET `status` = '" . (int)$new_status_id . "' WHERE `gift_id` ='" . (int)$gift_id . "'");
	}
	
	public function deleteGiftHistory($gift_history_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "membership_gift_history` WHERE `gift_history_id` = '" . (int)$gift_history_id . "'");
	}
	
	public function getGiftHistories($data = array(), $gift_id = false) {
		$sql = "SELECT `mgh`.*, CONCAT(`o`.`firstname`, ' ', `o`.`lastname`) AS `customer`, `mg`.`name`
				FROM `" . DB_PREFIX . "membership_gift_history` as `mgh`
				LEFT JOIN `" . DB_PREFIX . "membership_gift` as `mg` 
					ON `mgh`.`gift_id` = `mg`.`gift_id`
				LEFT JOIN `" . DB_PREFIX . "order` as `o`
					ON `mgh`.`order_id` = `o`.`order_id`
				WHERE 1";
				
		if ($gift_id) {
			$sql .= " AND `mgh`.`gift_id` = '" . (int)$gift_id . "'";
		}
		
		if (isset($data['filter_order_id'])) {
			$sql .= " AND `mgh`.`order_id` LIKE '" . $this->db->escape($data['filter_order_id']) . "%'";
		}		
		
		if (isset($data['filter_name'])) {
			$sql .= " AND `mg`.`name` LIKE '%\"" . $this->db->escape($data['filter_name']) . "%'";
		}
		
		if (isset($data['filter_customer'])) {
			$sql .= " AND CONCAT(`o`.`firstname`, ' ', `o`.`lastname`) LIKE '%" . $this->db->escape($data['filter_customer']) . "%'";
		}
		
		if (isset($data['group_by'])) {
			$sql .= " GROUP BY `" . $this->db->escape($data['group_by']) . "`";
		}
		

		$sort_data = array(
			'order_id',
			'name',
			'customer',			
			'total',
			'datetime_added'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY `mgh`.`datetime_added`";
		}

		if (isset($data['order']) && $data['order'] == 'DESC') {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;		
	}
	
	public function getTotalGifts() {
		$query = $this->db->query("SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "membership_gift`");

		return $query->row['total'];
	}
	
	public function getTotalGiftHistories($gift_id = null) {
		$sql = "SELECT COUNT(*) AS `total` FROM `" . DB_PREFIX . "membership_gift_history`";
		
		if ($gift_id) {
			$sql .= " WHERE `gift_id` = '" . (int)$gift_id . "'";
		}
		
		$query = $this->db->query($sql);

		return $query->row['total'];
	}
	
	public function setCustomerToCard($card_id, $customer_id) {
		$this->db->query("UPDATE `" . DB_PREFIX . "membership_card` SET `customer_id` = '" . (int)$customer_id . "' WHERE `card_id` = '" . (int)$card_id . "'");
	}

	public function setCustomerToOrder($order_id, $customer_id) {
		$this->db->query("UPDATE `" . DB_PREFIX . "order` SET `customer_id` = '" . (int)$customer_id . "' WHERE `order_id` = '" . (int)$order_id . "'");
	}
	
	public function setCustomerGroup($customer_id, $customer_group_id) {
		$this->db->query("UPDATE `" . DB_PREFIX . "customer` 
						SET `customer_group_id` = '" . (int)$customer_group_id . "' 
						WHERE `customer_id` = '" . (int)$customer_id . "' AND `customer_group_id` <> '" . (int)$customer_group_id . "'");
	}
	
	public function editTotalCardCode($order_id, $card_code) {
		$result = $this->db->query("SELECT `title` FROM `" . DB_PREFIX . "order_total` WHERE `order_id` = '" . (int)$order_id . "' AND `code` = 'membership_card'")->row;
		
		if ($result) {
			$new_title = str_replace('-', $card_code, $result['title']);
		
			$this->db->query("UPDATE `" . DB_PREFIX . "order_total` SET `title` = '" . $new_title . "' WHERE `order_id` = '" . (int)$order_id . "' AND `code` = 'membership_card'");
		}
	}
	
	private function checkCardsOrderExpiry() {
		$card_settings = $this->config->get('module_membership_card');
		
		if ($card_settings['order_expiry']['value']) {
			$this->db->query("UPDATE `" . DB_PREFIX . "membership_card_history` SET `status` = 0 WHERE DATE_ADD(`datetime_added`, INTERVAL " . (int)$card_settings['order_expiry']['value'] . " " . $card_settings['order_expiry']['type'] . ") <= NOW() AND `status` = 1");
		}
	}

	public function generateCardCode() {
		$card_settings = $this->config->get('module_membership_card');
		
		$code_characters = $card_settings['code_characters'];

		$characters = array (
			'digits'      => '1234567890',
            'digits_luhn' => '1234567890',
			'upper_case'  => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
			'lower_case'  => 'abcdefghijklmnopqrstuvwxyz'
		);
		
		do {
			$code_prefix = (int)$card_settings['code_prefix'];
			$code = $code_prefix;
			$length = (int)$card_settings['code_length'];
			
            if (count($code_characters) == 1 && $code_characters[0] == 'digits_luhn') {
                while (strlen($code) < ($length - 1)) {
                    $code .= rand(0,9);
                }

                $sum = 0;
                $pos = 0;

                $reversed_code = strrev($code);

                while ($pos < $length - 1) {
                    $odd = $reversed_code[$pos] * 2;
                    
                    if ($odd > 9) {
                        $odd -= 9;
                    }

                    $sum += $odd;

                    if ($pos != ($length - 2)) {
                        $sum += $reversed_code[$pos + 1];
                    }
                    
                    $pos += 2;
                }

                $checkdigit = ((floor($sum / 10) + 1) * 10 - $sum) % 10;
                
                $code .= $checkdigit;
            } else {
                $length -= strlen($code);
                while ($length--) {
    				$characters_type = $code_characters[mt_rand(0, count($code_characters) - 1)];
    				$code .= $characters[$characters_type][mt_rand(0, strlen($characters[$characters_type]) - 1)];
    			}
            }
		} while ($this->getCardByCode($code));

		return $code;
	}

	public function calcDiscount($data = array()) {
		$discount = array('base' => 'without_special_and_discount', 'limit' => 0, 'value' => 0, 'type' => 'P');

		if (!empty($data['discount'])) {
			if (!is_array($data['discount'])) {
				$data['discount'] = unserialize($data['discount']);
			}

			uasort($data['discount'], $this->sorter('limit'));

			foreach($data['discount'] as $d) {
				if ((int)$data['total'] >= (int)$d['limit']) {
					if ($d['type'] == 'S') {
						$result = $this->getCardHistoryTotals($data['card_id']);
						
						$d['value'] = $result['discount'];	
					}
						
					$discount = $d;
					
					break;
				}
			}
		}
		
		return $discount;
	}
	
	protected function sorter($key) {
	    return function ($a, $b) use ($key) {
	    	if ($a[$key] == 0) {
				return 1;
			} elseif ($b[$key] == 0) {
				return -1;
			}
			
			return strnatcmp($b[$key], $a[$key]);
	    };
	}
	
	public function sendMail($type, $data) {
		if ($type == 'card_issuance') {
			$card = $this->getCard($data);
			
			$this->load->model('customer/customer');
			
			$customer_data = $this->model_customer_customer->getCustomer($card['customer_id']);
		} elseif ($type == 'customer_creation') {
			$customer_data = $data;
		}
		
		if (filter_var($customer_data['email'], FILTER_VALIDATE_EMAIL)) {
			$notification_settings = $this->config->get('module_membership_notification');
			
			$this->load->model('localisation/language');
			
			if (!empty($customer_data['language_id'])) {
				$language_info = $this->model_localisation_language->getLanguage($customer_data['language_id']);
			} else {
				$language_info = $this->model_localisation_language->getLanguageByCode($this->config->get('config_language'));
				
				$customer_data['language_id'] = $language_info['language_id'];
			}
			
			$language_directory = (version_compare(VERSION, '2.2', '>=')) ? 'code' : 'directory';

			$language = new Language($language_info[$language_directory]);
			$language->load($language_info[$language_directory]);			
			$language->load('extension/module/membership');
			
			$this->load->model('setting/store');

			$store_info = $this->model_setting_store->getStore($customer_data['store_id']);
									
			$store_name = $store_info ? $store_info['name'] : $this->config->get('config_name');

			if ($type == 'card_issuance') {
				$card_totals = $this->getCardHistoryTotals($data);
				
				$find_card = array(
					'{card_owner}',
					'{card_code}',
					'{card_discount}',
					'{card_total_without_discount}',
					'{card_total}',
					'{card_savings}',
					'{card_date_start}',
					'{card_date_expiry}',
					'{card_categories}',
					'{card_products}',					
					'{card_logged}',
					'{card_free_shipping}',
					'{card_minimum_order_amount}',
					'{card_maximum_order_amount}',
					'{card_uses_total}',
					'{card_uses_customer}',
					'{card_status}',
					'{card_datetime_added}'
				);
					
				$replace_card = array(
					'owner' => $customer_data['firstname'] . ' ' . $customer_data['lastname'],
					'code' => $card['code'],
					'discount' => '',
					'total_without_discount' => $this->currency->format($card_totals['total_without_discount'], $this->config->get('config_currency')),
					'total' => $this->currency->format($card_totals['total'], $this->config->get('config_currency')),
					'savings' => $this->currency->format($card_totals['discount'], $this->config->get('config_currency')),
					'date_start' => $card['date_start'] == '0000-00-00' ? '' : date($language->get('date_format_short'), strtotime($card['date_start'])),
					'date_expiry' => $card['date_expiry'] == '0000-00-00' ? '' : date($language->get('date_format_short'), strtotime($card['date_expiry'])),
					'categories' => '',
					'products' => '',				
					'logged' => $card['logged'] ? $language->get('text_yes') : $language->get('text_no'),
					'free_shipping' => $card['free_shipping'] ? $language->get('text_yes') : $language->get('text_no'),
					'minimum_order_amount' => $card['minimum_order_amount'] ? $card['minimum_order_amount'] : $language->get('text_no_limits'),
					'maximum_order_amount' => $card['maximum_order_amount'] ? $card['maximum_order_amount'] : $language->get('text_no_limits'),
					'uses_total' => $card['uses_total'] ? $card['uses_total'] : $language->get('text_no_limits'),
					'uses_customer' => $card['uses_customer'] ? $card['uses_customer'] : $language->get('text_no_limits'),
					'status' => $card['status'] ? $language->get('text_enabled') : $language->get('text_disabled'),
					'datetime_added' => date($this->language->get('datetime_format'), strtotime($card['datetime_added']))
				);
				
				$card['total'] = $this->getCardBalance($card['card_id']);
				
				$discount = $this->calcDiscount($card);

				if ($discount['type'] == 'P') {
					$replace_card['discount'] = $discount['value'] . ' %';
				} else {
					$replace_card['discount'] = $this->currency->format($discount['value'], $this->config->get('config_currency'));
				}

				$categories = explode(',', $card['categories']);

				if (!empty($categories)) {
					$replace_card['categories'] = '<table style="border: 1px solid #ddd;"><tbody>';
									
					$this->load->model('catalog/category');
									
					foreach ($categories as $category_id) {
						$category_info = $this->model_catalog_category->getCategory($category_id);

						if ($category_info) {
							$replace_card['categories'] .= '<tr><td style="font-size: 12px;	border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">' . ($category_info['path'] ? $category_info['path'] . ' &gt; ' : '') . $category_info['name'] . '</td></tr>';
						}
					}
									
					$replace_card['categories'] .= '</tbody></table>';
				} else {
					$replace_card['categories'] = $language->get('text_no_limits');
				}
				
				$products = explode(',', $card['products']);
				
				if (!empty($products)) {
					$replace_card['products'] = '<table style="border: 1px solid #ddd;"><tbody>';
									
					$this->load->model('catalog/product');
					
					foreach ($products as $product_id) {
						$product_info = $this->model_catalog_product->getProduct($product_id);

						if ($product_info) {
							$replace_card['products'] .= '<tr><td style="font-size: 12px;	border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">' . $product_info['name'] . '</td></tr>';
						}
					}
									
					$replace_card['products'] .= '</tbody></table>';
				} else {
					$replace_card['products'] = $language->get('text_no_limits');
				}
				
				$message_template = $notification_settings['card_issuance_template'][$customer_data['language_id']];
				
				$find = $find_card;
				$replace = $replace_card;
			}
			
			if ($type == 'customer_creation') {
				$find_customer = array(
					'{customer_name}',
					'{customer_login}',
					'{customer_password}'
				);
					
				$replace_customer = array(
					'customer_name' => $customer_data['lastname'] . ' ' . $customer_data['firstname'],
					'customer_login' => $customer_data['email'],
					'customer_password' => $customer_data['password']
				);
				
				$message_template = $notification_settings['customer_creation_template'][$customer_data['language_id']];
				
				$find = $find_customer;
				$replace = $replace_customer;
			}

			$message = str_replace($find, $replace, $message_template);

			$mail = new Mail();
			$mail->protocol = $this->config->get('config_mail_protocol');
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');
			$mail->setTo($customer_data['email']);
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($store_name, ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode(sprintf($language->get('text_mail_subject'), html_entity_decode($store_name, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8'));
			$mail->setHtml(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
			$mail->send();
		}
	}
}