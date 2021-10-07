<?php
namespace Template;
final class Template {
	private $data = array();
		
	public function set($key, $value) {
		$this->data[$key] = $value;
	}
	
	public function render($template) {
		$file = DIR_TEMPLATE . $template . '.tpl';
		if (strpos($template, "extension/module/admin_quick_edit") !== FALSE || strpos($template, "extension/module/aqe") !== FALSE) {
				$this->twig->addFilter(new \Twig_SimpleFilter('addslashes', 'addslashes'));
			}
		if (is_file($file)) {
			extract($this->data);

			ob_start();

			require(modification($file));

			return ob_get_clean();
		}

		throw new \Exception('Error: Could not load template ' . $file . '!');
		exit();
	}	
}
