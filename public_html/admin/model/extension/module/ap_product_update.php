<?php 

$cwd = getcwd();
chdir( DIR_SYSTEM . 'PHPExcel' );
require_once( 'Classes/PHPExcel.php' );
chdir( $cwd );

class chunkReadFilter implements PHPExcel_Reader_IReadFilter 
{
    private $_startRow = 0; 
    private $_endRow   = 0; 
    
    //  Set the list of rows that we want to read  
    public function setRows($startRow, $chunkSize) 
    { 
        $this->_startRow    = $startRow; 
        $this->_endRow      = $startRow + $chunkSize; 
    } 

	public function readCell($column, $row, $worksheetName = '') 
	{ 
        
        if (($row == 1) || ($row >= $this->_startRow && $row < $this->_endRow)) { 
            return true; 
        } 
        return false; 
    } 
}
 
class ModelExtensionModuleApProductUpdate extends Model
{
	
	private $_UPC;
	private $_SKU;
	private $_NAME;
	private $_PRICE;
	private $_QUANTITY;

	public function readFile ($filePath, $columnStart, $columnStop, $startRow, $chunkSize = 2000) 
	{
		set_time_limit(1800);
		//ini_set('memory_liit', '128M');

		$cacheMethod   = PHPExcel_CachedObjectStorageFactory:: cache_to_phpTemp;
		$cacheSettings = array( 'memoryCacheSize' => '25MB' );
		PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);

		$objReader = PHPExcel_IOFactory::createReader(PHPExcel_IOFactory::identify($filePath));

		$chunkFilter = new ChunkReadFilter();

		$objReader->setReadFilter($chunkFilter);
	    $objReader->setReadDataOnly(true);

	    $spreadsheetInfo = $objReader->listWorksheetInfo($filePath);
	    $totalRows       = $spreadsheetInfo[0]['totalRows'];

	    if ( ($totalRows - $startRow) <= $chunkSize) {
	    	$chunkSize = $max = $totalRows;
	    	$export_status = true;
	    } else {
	    	$max = $startRow + $chunkSize - 1;
	    	$export_status = false;
	    }

		$chunkFilter->setRows($startRow, $chunkSize);

	    $objPHPExcel = $objReader->load($filePath);

	    $startCoordinate =  PHPExcel_Cell::stringFromColumnIndex($columnStart) . $startRow;
	    
	    $stopCoordinate  =  PHPExcel_Cell::stringFromColumnIndex($columnStop)  . $max;
	    $coordinate = $startCoordinate . ':' . $stopCoordinate;

        $sheetData = $objPHPExcel->getActiveSheet()->rangeToArray( $coordinate, '', false, false, false );

        $report = $this->updateProduct($startRow, $sheetData);
        
        $objPHPExcel->disconnectWorksheets();
        unset($objPHPExcel, $chunkFilter, $sheetData);

        return array (
        		'coordinate' => $coordinate,
        		'status'     => $export_status,
        		'report'     => $report,
        		'total_rows' => $totalRows, 
        		'start_row'  => $startRow, 
        		'chunk_size' => $chunkSize,
        		'next_step'  => $startRow + $chunkSize + 1 
        	);
	}

	public function update ($filePath, $data) {
 	 
	$this->_UPC	=  --$data['upc'];
	$this->_SKU	=  --$data['sku'];
	$this->_PRICE	=  --$data['price'];
	$this->_QUANTITY	=  --$data['quantity'];
 
		$exportInfo = $this->readFile(
										$filePath, 
										--$data['start_column'], 
										--$data['stop_column'], 
										isset( $this->session->data['start_export_row'] ) ? $this->session->data['start_export_row'] : 2, 
										1000
									);

		if ($exportInfo['status']) {
			unset($this->session->data['start_export_row'], $this->session->data['export_file_path']);
			$this->clearCache();
		}
		else 	
			$this->session->data['start_export_row'] = $exportInfo['next_step'];

		return $exportInfo;			
	} 

	private function updateProduct($startRow, $data) 
	{
		$this->load->language('extension/module/ap_product_update');
		
		$i = $startRow;
		
		$report = array ();

		foreach ($data as $item) 
		{

			if ($this->_SKU >= 0 && $this->_UPC >= 0)
				$index = $item[$this->_SKU] . $item[$this->_UPC];
			elseif ($this->_SKU >= 0)
				$index = $item[$this->_SKU];
			elseif ($this->_UPC >= 0)
				$index = $item[$this->_UPC];
			
			if(!empty($item[$this->_NAME])) {
				$product_name = $item[$this->_NAME];
			} else {
				$product_name = false;
			}

			if ( array_key_exists( md5($index), $report) ){
			 	$report[md5($index . time())] = array (
			 		'class'    => 'duble',
			 		'row'      => $i,
			 		'price'    => ($this->_PRICE >= 0)    ? $item[$this->_PRICE]    : '',
			 		'quantity' => ($this->_QUANTITY >= 0) ? $item[$this->_QUANTITY] : '',
			 		'sku'      => ($this->_SKU >= 0) ? $item[$this->_SKU] : '',
			 		'upc'      => ($this->_UPC >= 0) ? $item[$this->_UPC] : '',
			 		'status'   => $this->language->get('duble_item')
			 	); 
			 	
			 	$i++;
			 	continue;
			}
			
			elseif ( 
				( $this->_SKU >= 0 && $this->_UPC >= 0 && empty($item[$this->_UPC]) && empty($item[$this->_SKU]) ) ||
				( $this->_SKU < 0  && $this->_UPC >= 0 && empty($item[$this->_UPC]) ) ||
				( $this->_SKU >= 0 && $this->_UPC < 0  && empty($item[$this->_SKU]) )
			) {

			 	$report[md5($i . time())] = array (
			 		'class'    => 'not-found-sku-upc',
 			 		'row'      => $i,
			 		'price'    => ($this->_PRICE >= 0)    ? $item[$this->_PRICE]    : '',
			 		'quantity' => ($this->_QUANTITY >= 0) ? $item[$this->_QUANTITY] : '',
			 		'sku'      => ($this->_SKU >= 0) ? $item[$this->_SKU] : '',
			 		'upc'      => ($this->_UPC >= 0) ? $item[$this->_UPC] : '',
			 		'status'   => $this->language->get('no_sku_and_upc')
			 	); 
			 	
			 	$i++;
			 	continue;
			} 

			elseif ( 
				( $this->_PRICE >= 0 && $this->_QUANTITY >= 0 && empty($item[$this->_PRICE]) && empty($item[$this->_QUANTITY]) ) ||
				( $this->_PRICE < 0  && $this->_QUANTITY >= 0 && empty($item[$this->_QUANTITY]) ) ||
				( $this->_PRICE >= 0 && $this->_QUANTITY < 0  && empty($item[$this->_PRICE]) )
			) {
			 	$report[md5($index)] = array (
			 		'class'    => 'not-found-price-quantity',
			 		'row'      => $i,
			 		'price'    => ($this->_PRICE >= 0)    ? $item[$this->_PRICE]    : '',
			 		'quantity' => ($this->_QUANTITY >= 0) ? $item[$this->_QUANTITY] : '',
			 		'sku'      => ($this->_SKU >= 0) ? $item[$this->_SKU] : '',
			 		'upc'      => ($this->_UPC >= 0) ? $item[$this->_UPC] : '',
			 		'status'   => $this->language->get('no_price_quantity')
			 	); 
			 	
			 	$i++;		
			 	continue;
			}


			$sql = 	"UPDATE  `". DB_PREFIX ."product` SET ";
					
			if ($this->_QUANTITY >= 0)
				$sql .=  "quantity = '". (int) $item[$this->_QUANTITY] ."', ";
					
			if ($this->_PRICE >= 0)
				$sql .=	 "price = '". (int) $item[$this->_PRICE] ."', ";

			$sql .=	 'date_modified = NOW() WHERE';
			
			$filter = '';

			if ( ($this->_SKU >= 0 ) && ($this->_UPC >= 0) && !empty( $item[$this->_SKU] ) && !empty( $item[$this->_UPC] ) ) 
				$filter .= " sku = '{$this->db->escape($item[$this->_SKU])}' OR upc = '{$this->db->escape($item[$this->_UPC])}'";

			elseif ( ($this->_SKU >= 0) && !empty( $item[$this->_SKU] ) )
				$filter .= " sku = '{$this->db->escape($item[$this->_SKU])}'";

			elseif ( ($this->_UPC >= 0) && !empty( $item[$this->_UPC] ) )
				$filter .= " upc = '{$this->db->escape($item[$this->_UPC])}'";

			$sql .= $filter;

			$this->db->query($sql);

			if ( $this->db->countAffected() ) { 

				$query = $this->db->query("  
											SELECT (SELECT name FROM `". DB_PREFIX ."product_description` pd WHERE pd.product_id = p.product_id AND language_id = '". (int) $this->config->get('config_language_id') ."' LIMIT 1) as name FROM `". DB_PREFIX ."product` p WHERE ". $filter ." LIMIT 1
										 ");

				$report[md5($index)] = array (
					'class'    => 'alert alert-success',
			 		'row'      => $i,
			 		'name'     => $this->language->get('in_store') . $query->row['name'],
			 		'price'    => ($this->_PRICE >= 0)    ? $item[$this->_PRICE]    : '',
			 		'quantity' => ($this->_QUANTITY >= 0) ? $item[$this->_QUANTITY] : '',
			 		'sku'      => ($this->_SKU >= 0) ? $item[$this->_SKU] : '',
			 		'upc'      => ($this->_UPC >= 0) ? $item[$this->_UPC] : '',
			 		'status'   => $this->language->get('good')
			 	); 
			} 

			else {
				$report[md5($index)] = array (
					'class'    => 'not-found',
 			 		'row'      => $i,
					'name'     =>  'Товар не найден!',
			 		'price'    => ($this->_PRICE >= 0)    ? $item[$this->_PRICE]    : '',
			 		'quantity' => ($this->_QUANTITY >= 0) ? $item[$this->_QUANTITY] : '',
			 		'sku'      => ($this->_SKU >= 0) ? $item[$this->_SKU] : '',
			 		'upc'      => ($this->_UPC >= 0) ? $item[$this->_UPC] : '',
			 		'status'   => $this->language->get('not_found')
			 	);
			}

			unset($sql, $filter);

			$i++;
		}

			 
		return $report;
	}	


	public function download ( array $settings ) 
	{

		set_time_limit( 1800 );

		$this->createExcel( 
			$this->getProducts(		
				array (
					'filter_category_id'     => ($settings['category_id']     != 'all') ? $settings['category_id']     : '',
					'filter_manufacturer_id' => ($settings['manufacturer_id'] != 'all') ? $settings['manufacturer_id'] : '',
					'sort'  			     => $settings['sort'],
					'order' 			     => $settings['order']
				)
			) 
		);
	} 


	private function getProducts ($data = array() ) 
	{
		$sql = "SELECT p.product_id, p2c.category_id";
	
		

		if ( !empty($data['filter_sub_category']) )
			 $sql .= " FROM " . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX . "product_to_category p2c ON (cp.category_id = p2c.category_id)";

		else {
			$sql .= " FROM " . DB_PREFIX . "product_to_category p2c";
		}

		$sql .= " LEFT JOIN " . DB_PREFIX . "product p ON (p2c.product_id = p.product_id)";

		
		$sql .= " LEFT JOIN " . DB_PREFIX . "product_description pd 
					ON (p.product_id = pd.product_id) 

				  LEFT JOIN " . DB_PREFIX . "product_to_store p2s 
				  	ON (p.product_id = p2s.product_id) 

				  WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' 
				  	AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' 
				";


		if ( !empty($data['filter_category_id']) ) {

			if ( !empty($data['filter_sub_category']) ) $sql .= " AND cp.path_id = '" . (int)$data['filter_category_id'] . "'";
			else  $sql .= " AND p2c.category_id = '" . (int)$data['filter_category_id'] . "'";
		}

		if ( !empty($data['filter_manufacturer_id']) ) $sql .= " AND p.manufacturer_id = '" . (int)$data['filter_manufacturer_id'] . "'";
		
		$sql .= " GROUP BY p.product_id";

		$sort_data = array(
			'pd.name',
			'p.model',
			'p.quantity',
			'p.price',
			'p.sku',
			'p.upc',
			'p.manufacturer_id'
		);

		if ( isset($data['sort']) && in_array($data['sort'], $sort_data) ) {

			if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model' || $data['sort'] == 'p.sku' || $data['sort'] == 'p.upc')
				$sql .= " ORDER BY LCASE({$this->db->escape($data['sort'])})";
			else
				$sql .= " ORDER BY " . $this->db->escape($data['sort']);
			
		} else {
			$sql .= " ORDER BY p.sort_order";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC, LCASE(pd.name) DESC";
		} else {
			$sql .= " ASC, LCASE(pd.name) ASC";
		}


		$results = $this->db->query($sql)->rows;
		
		$products = array();

		foreach ($results as $result) {
			$products[$result['product_id']] = $this->getProduct($result);
		}

		return $products;

	}	

	private function getProduct ( $data ) 
	{
		$sql = 	"  
					SELECT DISTINCT p.product_id, p.model, p.sku, p.upc, p.price, p.status, p.quantity,
						
						(SELECT ss.name FROM `" . DB_PREFIX . "stock_status` ss 
							WHERE ss.stock_status_id = p.stock_status_id 
								AND ss.language_id = '" . (int)$this->config->get('config_language_id') . "'
						) as stock_status,

						( SELECT m.name FROM `" . DB_PREFIX . "manufacturer` m
							WHERE p.manufacturer_id = m.manufacturer_id
						) as manufacturer,

						( SELECT pd.name FROM `" . DB_PREFIX . "product_description` pd
							WHERE p.product_id = pd.product_id
								AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "'
						) as name,

						( SELECT cd.name FROM `" . DB_PREFIX . "category_description` cd
							WHERE cd.category_id = '". (int) $data['category_id'] ."'
								AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "'
						) as category

						FROM " . DB_PREFIX . "product p 

							LEFT JOIN `" . DB_PREFIX . "product_to_store` p2s 
								ON (p.product_id = p2s.product_id) 
	
							WHERE p.product_id = '" . (int) $data['product_id'] . "'   
								AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  
				";

			$query = $this->db->query($sql);

			if ($query->num_rows)
				return $query->row;

			return false;

	}	


	private function createExcel (array $items = array() ) 
	{

		$this->load->language('extension/module/ap_product_update');

		$cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp;
    	$cacheSettings = array( 'memoryCacheSize ' => '16MB');
    	
    	PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);


		$objPHPExcel = new PHPExcel();

		$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
		$objPHPExcel->getDefaultStyle()->getFont()->setSize(10);

		$objPHPExcel->getActiveSheet()->setCellValue('A1', $this->language->get('column_sku')          );
		$objPHPExcel->getActiveSheet()->setCellValue('B1', $this->language->get('column_upc')          );
		$objPHPExcel->getActiveSheet()->setCellValue('C1', $this->language->get('column_name')         );
		$objPHPExcel->getActiveSheet()->setCellValue('D1', $this->language->get('column_quantity')     );
		$objPHPExcel->getActiveSheet()->setCellValue('E1', $this->language->get('column_price')        );
		$objPHPExcel->getActiveSheet()->setCellValue('F1', $this->language->get('column_stock_status') );
		$objPHPExcel->getActiveSheet()->setCellValue('G1', $this->language->get('column_show_store')   );
		$objPHPExcel->getActiveSheet()->setCellValue('H1', $this->language->get('column_category')     );
		$objPHPExcel->getActiveSheet()->setCellValue('I1', $this->language->get('column_manufacturer') );
		$objPHPExcel->getActiveSheet()->setCellValue('J1', $this->language->get('column_model')        );


		$objPHPExcel->getActiveSheet()->getStyle("A1:J1")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('F4F4F4');	

		$objPHPExcel->getActiveSheet()->getRowDimension('1')->setRowHeight(30);

		$objPHPExcel->getActiveSheet()->getStyle("A1:J1")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		$objPHPExcel->getActiveSheet()->getStyle("A1:J1")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
				

		$i = 2;

		foreach ($items as $item) 
		{
			$objPHPExcel->getActiveSheet()->setCellValueExplicit( "A{$i}" , $item['sku'] , PHPExcel_Cell_DataType::TYPE_STRING );
			$objPHPExcel->getActiveSheet()->setCellValueExplicit( "B{$i}" , $item['upc'] , PHPExcel_Cell_DataType::TYPE_STRING );
			$objPHPExcel->getActiveSheet()->setCellValue( "C{$i}" , html_entity_decode($item['name'], ENT_COMPAT, 'UTF-8'));
			$objPHPExcel->getActiveSheet()->setCellValueExplicit( "D{$i}" , $item['quantity'], PHPExcel_Cell_DataType::TYPE_NUMERIC);
			$objPHPExcel->getActiveSheet()->setCellValueExplicit( "E{$i}" , $item['price'] ,   PHPExcel_Cell_DataType::TYPE_NUMERIC);
			$objPHPExcel->getActiveSheet()->setCellValue( "F{$i}" , $item['stock_status'] );
			$objPHPExcel->getActiveSheet()->setCellValue( "G{$i}" , $item['status'] ? $this->language->get('text_show')  : $this->language->get('text_hide')  );
			$objPHPExcel->getActiveSheet()->setCellValue( "H{$i}" , $item['category'] );
			$objPHPExcel->getActiveSheet()->setCellValue( "I{$i}" , html_entity_decode($item['manufacturer'], ENT_COMPAT, 'UTF-8'));
			$objPHPExcel->getActiveSheet()->setCellValue( "J{$i}" , html_entity_decode($item['model'], ENT_COMPAT, 'UTF-8'));

			$objPHPExcel->getActiveSheet()->getRowDimension($i)->setRowHeight(20);
			

			if (!$item['status'] || !$item['quantity'])
				$objPHPExcel ->getActiveSheet() ->getStyle("A{$i}:J{$i}") ->getFill() ->setFillType(PHPExcel_Style_Fill::FILL_SOLID) ->getStartColor() ->setRGB('F4DEDD');
			
			$i++; 
		}

		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
		
		$objPHPExcel->getActiveSheet()->getStyle("A2:J{$i}")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
		$objPHPExcel->getActiveSheet()->getStyle("A2:J{$i}")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		
		--$i;

		$objPHPExcel->getActiveSheet()->getStyle("A1:J{$i}")
		
		->applyFromArray (
			array (
				'borders' => array(
					'allborders' => array(
						'style' => PHPExcel_Style_Border::BORDER_THIN,
						'color' => array('rgb' => 'A8A8A8')
					)
				)
			)
		);

											
		
		$objPHPExcel->getActiveSheet()->setTitle($this->language->get('text_sheet'));
		$monthes = array(
			1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
			5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
			9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
		);
 
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'. $this->language->get('text_price_name') . date('d ') . $monthes[(date('n'))] . date(' Y') .'".xlsx"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$objWriter->save('php://output');

		die;
	}

	private function clearCache() {
		$this->cache->delete('*');
	}

	private function deBag(array $arr, $end = false) 
	{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";

		if ($end)
			die;
	}

}