<?php
class ModelCatalogArticles extends Model {
	public function addArticles($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "articles SET image = '" . $this->db->escape($data['image']) . "', date_added = NOW(), status = '" . (int)$data['status'] . "'");
		
		$articles_id = $this->db->getLastId();
		
		foreach ($data['articles'] as $key => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX ."articles_description SET articles_id = '" . (int)$articles_id . "', language_id = '" . (int)$key . "', title = '" . $this->db->escape($value['title']) . "', description = '" . $this->db->escape($value['description']) . "', short_description = '" . $this->db->escape($value['short_description']) . "'");
		}
		
		if ($data['keyword']) {
			foreach ($data['keyword'] as $language_id => $keyword) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET language_id = '" . (int)$language_id . "', query = 'articles_id=" . (int)$articles_id . "', keyword = '" . $this->db->escape($keyword) . "'");
			}
		}
	}
	
	public function editArticles($articles_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "articles SET image = '" . $this->db->escape($data['image']) . "', status = '" . (int)$data['status'] . "' WHERE articles_id = '" . (int)$articles_id . "'");
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "articles_description WHERE articles_id = '" . (int)$articles_id. "'");
		
		foreach ($data['articles'] as $key => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX ."articles_description SET articles_id = '" . (int)$articles_id . "', language_id = '" . (int)$key . "', title = '" . $this->db->escape($value['title']) . "', description = '" . $this->db->escape($value['description']) . "', short_description = '" . $this->db->escape($value['short_description']) . "'");
		}
		
		$this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'articles_id=" . (int)$articles_id. "'");
		
		if ($data['keyword']) {
			foreach ($data['keyword'] as $language_id => $keyword) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET language_id = '" . (int)$language_id . "', query = 'articles_id=" . (int)$articles_id . "', keyword = '" . $this->db->escape($keyword) . "'");
			}
		}
	}
	
	public function getArticles($articles_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "articles WHERE articles_id = '" . (int)$articles_id . "'"); 
 
		if ($query->num_rows) {
			return $query->row;
		} else {
			return false;
		}
	}
	
	public function getArticlesKeywords($articles_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'articles_id=" . (int)$articles_id . "'");
		
		$keywords = array();
		
		foreach ($query->rows as $result) {
			$keywords[$result['language_id']] = $result['keyword'];
		}
		
		return $keywords;
	}
   
	public function getArticlesDescription($articles_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "articles_description WHERE articles_id = '" . (int)$articles_id . "'"); 
		
		foreach ($query->rows as $result) {
			$articles_description[$result['language_id']] = array(
				'title'       			=> $result['title'],
				'short_description'		=> $result['short_description'],
				'description' 			=> $result['description']
			);
		}
		
		return $articles_description;
	}
 
	public function getAllArticles($data) {
		$sql = "SELECT * FROM " . DB_PREFIX . "articles n LEFT JOIN " . DB_PREFIX . "articles_description nd ON n.articles_id = nd.articles_id WHERE nd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY date_added DESC";
		
		if (isset($data['start']) && isset($data['limit'])) {
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
   
	public function deleteArticles($articles_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "articles WHERE articles_id = '" . (int)$articles_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "articles_description WHERE articles_id = '" . (int)$articles_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'articles_id=" . (int)$articles_id. "'");
	}
   
	public function getTotalArticles() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "articles");
	
		return $query->row['total'];
	}
}