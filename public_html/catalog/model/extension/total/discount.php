<?php
class ModelExtensionTotalDiscount extends Model {
	public function getTotal($total) {
		$this->load->model('account/customer');
	 
		$sub_total = $this->cart->getSubTotal();
		
		if ($this->customer->isLogged() and $sub_total) {
			
			$q = "select count(*) as total from ". DB_PREFIX . "order where customer_id='".$this->customer->getId()."' and order_status_id > 0";
			
			$query=$this->db->query($q);
			
			if(!$query->row['total']){

				$this->load->language('extension/total/discount');
				

				$discount_total = 0;
						
				if((int)$sub_total > 1000 && (int)$sub_total <= 2999) {
					$discount = 100;
				} elseif ((int)$sub_total > 3000) {
					$discount = 200;
				}
				
				$discount_total += $discount;

					
				
				if($discount_total > 0) {
					
					$total['totals'][] = array(
						'code'       => 'total_discount',
						'title'      => $this->language->get('text_discount'),
						'value'      => -$discount_total,
						'sort_order' => $this->config->get('total_discount_sort_order')
					);
					
					$total['total'] -= $discount_total;

				}
				
			}
		}
	}
}
