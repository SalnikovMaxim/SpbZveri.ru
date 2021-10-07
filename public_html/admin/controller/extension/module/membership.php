<?php 
define("MATH_BIGINTEGER_MONTGOMERY", 0);
define("MATH_BIGINTEGER_BARRETT", 1);
define("MATH_BIGINTEGER_POWEROF2", 2);
define("MATH_BIGINTEGER_CLASSIC", 3);
define("MATH_BIGINTEGER_NONE", 4);
define("MATH_BIGINTEGER_VALUE", 0);
define("MATH_BIGINTEGER_SIGN", 1);
define("MATH_BIGINTEGER_VARIABLE", 0);
define("MATH_BIGINTEGER_DATA", 1);
define("MATH_BIGINTEGER_MODE_INTERNAL", 1);
define("MATH_BIGINTEGER_MODE_BCMATH", 2);
define("MATH_BIGINTEGER_MODE_GMP", 3);
define("MATH_BIGINTEGER_MAX_DIGIT52", pow(2, 52));
define("MATH_BIGINTEGER_KARATSUBA_CUTOFF", 25);
define("CRYPT_DES_MODE_CFB", 3);
define("CRYPT_RSA_ENCRYPTION_OAEP", 1);
define("CRYPT_RSA_SIGNATURE_PSS", 1);
define("CRYPT_RSA_SIGNATURE_PKCS1", 2);
define("CRYPT_RSA_ASN1_INTEGER", 2);
define("CRYPT_RSA_ASN1_BITSTRING", 3);
define("CRYPT_RSA_ASN1_SEQUENCE", 48);
define("CRYPT_RSA_MODE_INTERNAL", 1);
define("CRYPT_RSA_MODE_OPENSSL", 2);
define("CRYPT_RSA_PRIVATE_FORMAT_PKCS1", 0);
define("CRYPT_RSA_PRIVATE_FORMAT_PUTTY", 1);
define("CRYPT_RSA_PRIVATE_FORMAT_XML", 2);
define("CRYPT_RSA_PUBLIC_FORMAT_RAW", 3);
define("CRYPT_RSA_PUBLIC_FORMAT_XML", 5);
define("CRYPT_RSA_PUBLIC_FORMAT_OPENSSH", 6);
define("CRYPT_RSA_PUBLIC_FORMAT_PKCS1", 7);
define("CRYPT_HASH_MODE_INTERNAL", 1);
define("CRYPT_HASH_MODE_MHASH", 2);
define("CRYPT_HASH_MODE_HASH", 3);

class ControllerExtensionModuleMembership extends Controller
{
    protected $extension = "membership";
    protected $extensionId = "464851";
    //protected $version = "1.0.2";
    protected static $license = NULL;
    private $error = array(  );

    public function __construct($registry)
    {
        $this->registry = $registry;
        $registry->set("pr", new Pr($registry));
    }

    public function install()
    {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "membership_card` (\r\n\t\t\t`card_id` int(11) NOT NULL AUTO_INCREMENT,\r\n\t\t\t`customer_id` int(11) NOT NULL,\r\n\t\t\t`code` varchar(100) NOT NULL,\r\n\t\t\t`date_start` date NOT NULL DEFAULT '0000-00-00',\r\n\t\t\t`date_expiry` date NOT NULL DEFAULT '0000-00-00',\r\n\t\t\t`discount` mediumtext NOT NULL,\r\n\t\t\t`categories` mediumtext NOT NULL,\r\n\t\t\t`products` mediumtext NOT NULL,\r\n\t\t\t`logged` tinyint(1) NOT NULL,\r\n\t\t\t`free_shipping` tinyint(1) NOT NULL,\r\n\t\t\t`minimum_order_amount` int(11) NOT NULL,\r\n\t\t\t`maximum_order_amount` int(11) NOT NULL,\r\n\t\t\t`uses_total` int(11) NOT NULL,\r\n\t\t\t`uses_customer` int(11) NOT NULL,\r\n\t\t\t`status` tinyint(1) NOT NULL,\r\n\t\t\t`datetime_added` datetime NOT NULL,\r\n\t\t\tINDEX (`customer_id`),\r\n\t\t\tUNIQUE(`code`),\r\n\t\t\tPRIMARY KEY (`card_id`)\r\n\t\t\t) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;");
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "membership_card_history` (\r\n\t\t\t`card_history_id` int(11) NOT NULL AUTO_INCREMENT,\r\n\t\t\t`card_id` int(11) NOT NULL,\r\n\t\t\t`order_id` int(11) NOT NULL,\r\n\t\t\t`customer_id` int(11) NOT NULL,\r\n\t\t\t`total` decimal(15,4) NOT NULL,\r\n\t\t\t`discount` decimal(15,4) NOT NULL,\r\n\t\t\t`total_without_discount` decimal(15,4) NOT NULL,\r\n\t\t\t`status` tinyint(1) NOT NULL DEFAULT 1,\r\n\t\t\t`datetime_added` datetime NOT NULL,\r\n\t\t\tINDEX (`card_id`),\r\n\t\t\tINDEX (`order_id`),\r\n\t\t\tINDEX (`customer_id`),\r\n\t\t\tPRIMARY KEY (`card_history_id`)\r\n\t\t\t) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;");
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "membership_gift` (\r\n\t\t\t`gift_id` int(11) NOT NULL AUTO_INCREMENT,\r\n\t\t\t`name` mediumtext NOT NULL,\r\n\t\t\t`threshold` int(11) NOT NULL,\r\n\t\t\t`maximum_cost` int(11) NOT NULL,\r\n\t\t\t`giving_quantity` int(11) NOT NULL,\r\n\t\t\t`date_start` date NOT NULL DEFAULT '0000-00-00',\r\n\t\t\t`date_expiry` date NOT NULL DEFAULT '0000-00-00',\r\n\t\t\t`categories` mediumtext NOT NULL,\r\n\t\t\t`products` mediumtext NOT NULL,\r\n\t\t\t`status` tinyint(1) NOT NULL,\r\n\t\t\t`datetime_added` datetime NOT NULL,\r\n\t\t\tPRIMARY KEY (`gift_id`)\r\n\t\t\t) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;");
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "membership_gift_history` (\r\n\t\t\t`gift_history_id` int(11) NOT NULL AUTO_INCREMENT,\r\n\t\t\t`gift_id` int(11) NOT NULL,\r\n\t\t\t`order_id` int(11) NOT NULL,\r\n\t\t\t`customer_id` int(11) NOT NULL,\r\n\t\t\t`total` decimal(15,4) NOT NULL,\r\n\t\t\t`status` tinyint(1) NOT NULL DEFAULT 1,\r\n\t\t\t`datetime_added` datetime NOT NULL,\r\n\t\t\tINDEX (`gift_id`),\r\n\t\t\tINDEX (`order_id`),\r\n\t\t\tINDEX (`customer_id`),\r\n\t\t\tPRIMARY KEY (`gift_history_id`)\r\n\t\t\t) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1;");
    }

    public function uninstall()
    {
        $this->db->query("DROP TABLE `" . DB_PREFIX . "membership_card`,  `" . DB_PREFIX . "membership_card_history`, `" . DB_PREFIX . "membership_gift`, `" . DB_PREFIX . "membership_gift_history`");
    }

    public function index() {
        $this->load->language("extension/module/membership");
		
		$this->load->model('setting/setting');
	   
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_membership', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

        $this->document->setTitle($this->language->get("heading_title"));
        $this->document->addStyle("view/stylesheet/ocmax/membership.css");
        if( isset($this->session->data["success"]) ) 
        {
            $data["success"] = $this->session->data["success"];
            unset($this->session->data["success"]);
        }
        else
        {
            $data["success"] = "";
        }

        if( isset($this->error["warning"]) ) 
        {
            $data["error_warning"] = $this->error["warning"];
        }
        else
        {
            $data["error_warning"] = "";
        }

        $data["heading_title"] = $this->language->get("heading_title");
        $data["save_and_exit"] = $this->url->link("extension/module/membership", "user_token=" . $this->session->data["user_token"] . "&exit", true);
        $data["cancel"] = $this->url->link("extension/extension", "user_token=" . $this->session->data["user_token"] . "&exit", true);
        $data["cards_list"] = $this->url->link("extension/module/membership/getCardsList", "user_token=" . $this->session->data["user_token"], true);
        $data["card_add"] = $this->url->link("extension/module/membership/addCard", "user_token=" . $this->session->data["user_token"], true);
        $data["cards_generator"] = $this->url->link("extension/module/membership/getCardsGeneratorForm", "user_token=" . $this->session->data["user_token"], true);
        $data["cards_history"] = $this->url->link("extension/module/membership/getCardsHistory", "user_token=" . $this->session->data["user_token"], true);
        $data["gifts_list"] = $this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"], true);
        $data["gift_add"] = $this->url->link("extension/module/membership/addGift", "user_token=" . $this->session->data["user_token"], true);
        $data["gifts_history"] = $this->url->link("extension/module/membership/getGiftsHistory", "user_token=" . $this->session->data["user_token"], true);
        
		$data["breadcrumbs"] = array();
       
		$data["breadcrumbs"][] = array( 
			"text" => $this->language->get("text_home"), 
			"href" => $this->url->link("common/dashboard", 
			"user_token=" . $this->session->data["user_token"], true) 
		);
		
        $data["breadcrumbs"][] = array( 
			"text" => $this->language->get("text_module"), 
			"href" => $this->url->link("extension/extension", 
			"user_token=" . $this->session->data["user_token"], true) 
		);
		
        $data["breadcrumbs"][] = array( 
			"text" => $this->language->get("heading_title"), 
			"href" => $this->url->link("extension/module/membership", 
			"user_token=" . $this->session->data["user_token"], true) 
		);
		
        $data["user_token"] = $this->session->data["user_token"];
    
		// Статус карт клиентов
		if (isset($this->request->post['module_membership_status'])) {
			$data['module_membership_status'] = $this->request->post['module_membership_status'];
		} else {
			$data['module_membership_status'] = $this->config->get('module_membership_status');
		}
		
		// Основные настройки
		if (isset($this->request->post['module_membership'])) {
			$data['module_membership'] = $this->request->post['module_membership'];
		} else {
			$data['module_membership'] = $this->config->get('module_membership');
		}
		
		// Уведомления на почту 
		if( isset($this->request->post["module_membership_notification"]))  {
            $data["module_membership_notification"] = $this->request->post["module_membership_notification"];
        } else {
            $data["module_membership_notification"] = $this->config->get("module_membership_notification");
        }
		
		// Статус карт
		if (isset($this->request->post['module_membership_card_status'])) {
			$data['module_membership_card_status'] = $this->request->post['module_membership_card_status'];
		} else {
			$data['module_membership_card_status'] = $this->config->get('module_membership_card_status');
		}

		// Настройки карты
		 if(isset($this->request->post["module_membership_card"])) {
            $data["module_membership_card"] = $this->request->post["module_membership_card"];
        } else {
            $data["module_membership_card"] = $this->config->get("module_membership_card");
        }
		 
		// Настройки карт по умолчанию
		if(isset($this->request->post["module_membership_default_card"])) {
            $data["module_membership_default_card"] = $this->request->post["module_membership_default_card"];
        } else {
            $data["module_membership_default_card"] = $this->config->get("module_membership_default_card");
        }
		
		// Настройки подарков
        if(isset($this->request->post["module_membership_gift"])) {
            $data["module_membership_gift"] = $this->request->post["module_membership_gift"];
        } else {
            $data["module_membership_gift"] = $this->config->get("module_membership_gift");
        }
 
 
 
        $this->load->model("localisation/language");
		
        $data["languages"] = $this->model_localisation_language->getLanguages();
		
        $data["language_id"] = "";
		
        foreach($data["languages"] as $language) {
            if( $language["code"] != $this->config->get("config_admin_language")) {
            } else {
                $data["language_id"] = $language["language_id"];
            }

            $data["language_flag"][$language["language_id"]] = (version_compare(VERSION, "2.2", ">=") ? "language/" . $language["code"] . "/" . $language["code"] . ".png" : "view/image/flags/" . $language["image"]);
        }
		
        $this->load->model("catalog/information");
		
        $data["informations"] = $this->model_catalog_information->getInformations();
		
        $this->load->model("customer/customer_group");
		
        $data["customer_groups"] = $this->model_customer_customer_group->getCustomerGroups();
		
        $data["categories"] = array();
        if(!(isset($data["module_membership_default_card"]["categories"]) && is_array($data["module_membership_default_card"]["categories"]))) {
        } else {
            $this->load->model("catalog/category");
			
            foreach($data["module_membership_default_card"]["categories"] as $category_id) {
                $category_info = $this->model_catalog_category->getCategory($category_id);
            
				if( !$category_info ) {
                } else {
                    $data["categories"][] = array( "category_id" => $category_info["category_id"], "name" => (($category_info["path"] ? $category_info["path"] . " &gt; " : "")) . $category_info["name"] );
                }

            }
        }

        $data["products"] = array(  );
        if( !(isset($data["module_membership_default_card"]["products"]) && is_array($data["module_membership_default_card"]["products"])) ) 
        {
        }
        else
        {
            $this->load->model("catalog/product");
            foreach( $data["module_membership_default_card"]["products"] as $product_id ) 
            {
                $product_info = $this->model_catalog_product->getProduct($product_id);
                if( !$product_info ) 
                {
                }
                else
                {
                    $data["products"][] = array( "product_id" => $product_info["product_id"], "name" => $product_info["name"] );
                }

            }
        }

        if( $this->currency->getSymbolRight($this->config->get("config_currency")) ) 
        {
            $data["currency_symbol"] = $this->currency->getSymbolRight($this->config->get("config_currency"));
        }
        else
        {
            $data["currency_symbol"] = $this->currency->getSymbolLeft($this->config->get("config_currency"));
        }

        $data["code_characters"] = array( "digits" => $this->language->get("text_digits"), "digits_luhn" => $this->language->get("text_digits_luhn"), "upper_case" => $this->language->get("text_upper_case"), "lower_case" => $this->language->get("text_lower_case") );
        $data["first_discount_type"] = array( "P" => $this->language->get("text_percent"), "F" => $this->language->get("text_fixed") );
        $data["time"] = array( "day" => $this->language->get("text_day"), "month" => $this->language->get("text_month"), "year" => $this->language->get("text_year") );
        $data["order_types_b"] = array( "membership_card_orders_total" => $this->language->get("text_membership_card_orders_total"), "membership_card_orders_discount" => $this->language->get("text_membership_card_orders_discount"), "completed_orders" => $this->language->get("text_completed_orders"), "current_order" => $this->language->get("text_current_order") );
        $data["order_types_r"] = array( "completed_orders" => $this->language->get("text_completed_orders"), "current_order" => $this->language->get("text_current_order") );
        $data["auto_issuance_types"] = array( $this->language->get("text_no"), "upon_request" => $this->language->get("text_upon_request"), "without_request" => $this->language->get("text_without_request") );
        $data["discount_base"] = array( "all_products" => $this->language->get("text_all_products"), "without_discount" => $this->language->get("text_products_without_discount"), "without_special" => $this->language->get("text_products_without_special"), "without_special_and_discount" => $this->language->get("text_products_without_special_and_discount") );
        $data["discount_type"] = array( "P" => $this->language->get("text_percent"), "F" => $this->language->get("text_fixed"), "S" => $this->language->get("text_savings") );
        $data["gift_name_actions"] = array( 1 => $this->language->get("text_show"), 0 => $this->language->get("text_hide") );
        $data["places_of_display"] = array( "cart" => $this->language->get("text_cart"), "cart_total" => $this->language->get("text_cart_total") );
        $data["gift_giving_modes"] = array( "club_card_owners" => $this->language->get("text_club_card_owners"), "customer_group_cards" => $this->language->get("text_customer_group_cards"), "logged_customers" => $this->language->get("text_logged_customers"), "guests" => $this->language->get("text_guests") );
      //  $data["instruction_href"] = "https://oc-max.com/docs/membership/instruction.html";
     //   $data["v"] = $this->version;
        $data["license"] = $this->license;
        $data["header"] = $this->load->controller("common/header");
        $data["column_left"] = $this->load->controller("common/column_left");
        $data["footer"] = $this->load->controller("common/footer");

        $this->response->setOutput($this->load->view("extension/module/membership", $data));
        return NULL;
    }

    protected function getCardForm() {
        $url = "";
        if( !isset($this->request->get["page"]) ) 
        {
        }
        else
        {
            $url .= "&page=" . $this->request->get["page"];
        }

        if( !isset($this->request->get["sort"]) ) 
        {
        }
        else
        {
            $url .= "&sort=" . $this->request->get["sort"];
        }

        if( !isset($this->request->get["order"]) ) 
        {
        }
        else
        {
            $url .= "&order=" . $this->request->get["order"];
        }

        if( !isset($this->request->get["card_id"]) ) 
        {
            $data["action"] = $this->url->link("extension/module/membership/addCard", "user_token=" . $this->session->data["user_token"] . $url, true);
        }
        else
        {
            $data["action"] = $this->url->link("extension/module/membership/editCard", "user_token=" . $this->session->data["user_token"] . "&card_id=" . $this->request->get["card_id"] . $url, true);
        }

        if( isset($this->error["warning"]) ) 
        {
            $data["error_warning"] = $this->error["warning"];
        }
        else
        {
            $data["error_warning"] = "";
        }

        if( isset($this->error["error_cardowner"]) ) 
        {
            $data["error_cardowner"] = $this->error["error_cardowner"];
        }
        else
        {
            $data["error_cardowner"] = "";
        }

        if( isset($this->error["error_email"]) ) 
        {
            $data["error_email"] = $this->error["error_email"];
        }
        else
        {
            $data["error_email"] = "";
        }

        if( isset($this->error["error_code"]) ) 
        {
            $data["error_code"] = $this->error["error_code"];
        }
        else
        {
            $data["error_code"] = "";
        }
		
		$data["user_token"] = $this->session->data["user_token"];
 
        $data["text_history"] = $this->language->get("text_history");
        $default_card = $this->config->get("module_membership_default_card");
        if( isset($this->request->get["card_id"]) && !$this->request->server["REQUEST_METHOD"] != "POST" ) 
        {
            $card_info = $this->model_extension_module_membership->getCard($this->request->get["card_id"]);
        }
        else
        {
            $card_info = false;
        }

        if( isset($this->request->get["card_id"]) ) 
        {
            $data["card_id"] = $this->request->get["card_id"];
        }
        else
        {
            $data["card_id"] = 0;
        }

        if( isset($this->request->post["status"]) ) 
        {
            $data["status"] = $this->request->post["status"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["status"] = $card_info["status"];
            }
            else
            {
                $data["status"] = $default_card["status"];
            }

        }

        if( !empty($card_info) ) 
        {
            $this->load->model("customer/customer");
            $customer = $this->model_customer_customer->getCustomer($card_info["customer_id"]);
        }
        else
        {
            $customer = false;
        }

        if( isset($this->request->post["cardowner"]) ) 
        {
            $data["cardowner"]["name"] = $this->request->post["cardowner"];
            $data["cardowner"]["customer_id"] = $this->request->post["customer_id"];
        }
        else
        {
            if( $customer ) 
            {
                $data["cardowner"]["name"] = $customer["firstname"] . " " . $customer["lastname"];
                $data["cardowner"]["customer_id"] = $card_info["customer_id"];
            }
            else
            {
                $data["cardowner"]["name"] = "";
                $data["cardowner"]["customer_id"] = "";
            }

        }

        if( isset($this->request->post["telephone"]) ) 
        {
            $data["telephone"] = $this->request->post["telephone"];
        }
        else
        {
            if( $customer ) 
            {
                $data["telephone"] = $customer["telephone"];
            }
            else
            {
                $data["telephone"] = "";
            }

        }

        if( isset($this->request->post["email"]) ) 
        {
            $data["email"] = $this->request->post["email"];
        }
        else
        {
            if( $customer ) 
            {
                $data["email"] = $customer["email"];
            }
            else
            {
                $data["email"] = "";
            }

        }

        if( isset($this->request->post["code"]) ) 
        {
            $data["code"] = $this->request->post["code"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["code"] = $card_info["code"];
            }
            else
            {
                $data["code"] = "";
            }

        }

        if( isset($this->request->post["date_start"]) ) 
        {
            $data["date_start"] = $this->request->post["date_start"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["date_start"] = ($card_info["date_start"] != "0000-00-00" ? $card_info["date_start"] : "");
            }
            else
            {
                $data["date_start"] = $this->intervalToDate($default_card["date_start"]);
            }

        }

        if( isset($this->request->post["date_expiry"]) ) 
        {
            $data["date_expiry"] = $this->request->post["date_expiry"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["date_expiry"] = ($card_info["date_expiry"] != "0000-00-00" ? $card_info["date_expiry"] : "");
            }
            else
            {
                $data["date_expiry"] = $this->intervalToDate($default_card["date_expiry"]);
            }

        }

        if( isset($this->request->post["discount"]) ) 
        {
            $data["discount"] = $this->request->post["discount"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["discount"] = unserialize($card_info["discount"]);
            }
            else
            {
                if( isset($default_card["discount"]) ) 
                {
                    $data["discount"] = $default_card["discount"];
                }
                else
                {
                    $data["discount"] = array(  );
                }

            }

        }

        if( isset($this->request->post["categories"]) ) 
        {
            $categories = $this->request->post["categories"];
        }
        else
        {
            if( isset($this->request->get["card_id"]) ) 
            {
                $categories = explode(",", $card_info["categories"]);
            }
            else
            {
                if( isset($default_card["categories"]) ) 
                {
                    $categories = $default_card["categories"];
                }
                else
                {
                    $categories = array(  );
                }

            }

        }

        if( isset($this->request->post["products"]) ) 
        {
            $products = $this->request->post["products"];
        }
        else
        {
            if( isset($this->request->get["card_id"]) ) 
            {
                $products = explode(",", $card_info["products"]);
            }
            else
            {
                if( isset($default_card["products"]) ) 
                {
                    $products = $default_card["products"];
                }
                else
                {
                    $products = array(  );
                }

            }

        }

        if( isset($this->request->post["logged"]) ) 
        {
            $data["logged"] = $this->request->post["logged"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["logged"] = $card_info["logged"];
            }
            else
            {
                $data["logged"] = $default_card["logged"];
            }

        }

        if( isset($this->request->post["free_shipping"]) ) 
        {
            $data["free_shipping"] = $this->request->post["free_shipping"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["free_shipping"] = $card_info["free_shipping"];
            }
            else
            {
                $data["free_shipping"] = $default_card["free_shipping"];
            }

        }

        if( isset($this->request->post["minimum_order_amount"]) ) 
        {
            $data["minimum_order_amount"] = $this->request->post["minimum_order_amount"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["minimum_order_amount"] = ($card_info["minimum_order_amount"] ? $card_info["minimum_order_amount"] : "");
            }
            else
            {
                $data["minimum_order_amount"] = $default_card["minimum_order_amount"];
            }

        }

        if( isset($this->request->post["maximum_order_amount"]) ) 
        {
            $data["maximum_order_amount"] = $this->request->post["maximum_order_amount"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["maximum_order_amount"] = ($card_info["maximum_order_amount"] ? $card_info["maximum_order_amount"] : "");
            }
            else
            {
                $data["maximum_order_amount"] = $default_card["maximum_order_amount"];
            }

        }

        if( isset($this->request->post["uses_total"]) ) 
        {
            $data["uses_total"] = $this->request->post["uses_total"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["uses_total"] = ($card_info["uses_total"] ? $card_info["uses_total"] : "");
            }
            else
            {
                $data["uses_total"] = $default_card["uses_total"];
            }

        }

        if( isset($this->request->post["uses_customer"]) ) 
        {
            $data["uses_customer"] = $this->request->post["uses_customer"];
        }
        else
        {
            if( !empty($card_info) ) 
            {
                $data["uses_customer"] = ($card_info["uses_customer"] ? $card_info["uses_customer"] : "");
            }
            else
            {
                $data["uses_customer"] = $default_card["uses_customer"];
            }

        }

        if( $this->currency->getSymbolRight($this->config->get("config_currency")) ) 
        {
            $data["currency_symbol"] = $this->currency->getSymbolRight($this->config->get("config_currency"));
        }
        else
        {
            $data["currency_symbol"] = $this->currency->getSymbolLeft($this->config->get("config_currency"));
        }

        $data["categories"] = array(  );
        if( !is_array($categories) ) 
        {
        }
        else
        {
            $this->load->model("catalog/category");
            foreach( $categories as $category_id ) 
            {
                $category_info = $this->model_catalog_category->getCategory($category_id);
                if( !$category_info ) 
                {
                }
                else
                {
                    $data["categories"][] = array( "category_id" => $category_info["category_id"], "name" => (($category_info["path"] ? $category_info["path"] . " &gt; " : "")) . $category_info["name"] );
                }

            }
        }

        $data["products"] = array(  );
        if( !is_array($products) ) 
        {
        }
        else
        {
            $this->load->model("catalog/product");
            foreach( $products as $product_id ) 
            {
                $product_info = $this->model_catalog_product->getProduct($product_id);
                if( !$product_info ) 
                {
                }
                else
                {
                    $data["products"][] = array( "product_id" => $product_info["product_id"], "name" => $product_info["name"] );
                }

            }
        }

        $data["discount_base"] = array( "all_products" => $this->language->get("text_all_products"), "without_discount" => $this->language->get("text_products_without_discount"), "without_special" => $this->language->get("text_products_without_special"), "without_special_and_discount" => $this->language->get("text_products_without_special_and_discount") );
        $data["discount_type"] = array( "P" => $this->language->get("text_percent"), "F" => $this->language->get("text_fixed"), "S" => $this->language->get("text_savings") );
        $this->response->setOutput($this->load->view("extension/module/membership_card_form", $data));
    }

    public function addCard()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        $this->load->model("customer/customer");
        if( !($this->validate() && $this->request->server["REQUEST_METHOD"] == "POST" && $this->validateCardForm()) ) 
        {
        }
        else
        {
            $settings = $this->config->get("module_membership");
            $notification_settings = $this->config->get("module_membership_notification");
            $customer = $this->model_customer_customer->getCustomer($this->request->post["customer_id"]);
            if( empty($customer) ) 
            {
                $this->load->model("localisation/language");
                $language = $this->model_localisation_language->getLanguageByCode($this->config->get("config_language"));
                $cardowner = preg_split("/[\\s]+/", $this->request->post["cardowner"]);
                if( $this->config->get("module_membership_auto_transfer_to_group") && $this->config->get("module_membership_customer_group_id") && $this->config->get("module_membership_customer_group_id") != $this->config->get("config_customer_group_id") ) 
                {
                    $module_membership_customer_group_id = $this->config->get("customer_group_id");
                }
                else
                {
                    $module_membership_customer_group_id = $this->config->get("config_customer_group_id");
                }

                $new_customer = array( "membership_customer_group_id" => $module_membership_customer_group_id, "store_id" => 0, "language_id" => $language["language_id"], "firstname" => (isset($cardowner[2]) ? $cardowner[1] . " " . $cardowner[2] : $cardowner[1]), "lastname" => $cardowner[0], "email" => ($this->request->post["email"] ? trim($this->request->post["email"]) : trim($this->request->post["telephone"])), "telephone" => trim($this->request->post["telephone"]), "fax" => "", "password" => $this->model_extension_module_membership->generateCardCode(), "newsletter" => "", "status" => 1, "approved" => 1, "safe" => 1 );
                $this->request->post["customer_id"] = $this->model_customer_customer->addCustomer($new_customer);
                if( !$notification_settings["customer_creation"] ) 
                {
                }
                else
                {
                    $this->model_extension_module_membership->sendMail("customer_creation", $new_customer);
                }

            }
            else
            {
                if( !($this->config->get("module_membership_auto_transfer_to_group") && $this->config->get("module_membership_customer_group_id") && $this->config->get("module_membership_customer_group_id") != $customer["customer_group_id"]) ) 
                {
                }
                else
                {
                    $this->model_extension_module_membership->setCustomerGroup($this->request->post["customer_id"], $this->config->get("module_membership_customer_group_id"));
                }

            }

            $card_id = $this->model_extension_module_membership->addCard($this->request->post);
            if( !$notification_settings["card_issuance"] ) 
            {
            }
            else
            {
                $this->model_extension_module_membership->sendMail("card_issuance", $card_id);
            }

            $this->session->data["success"] = $this->language->get("text_success_card_added");
            $url = "";
            if( !isset($this->request->get["sort"]) ) 
            {
            }
            else
            {
                $url .= "&sort=" . $this->request->get["sort"];
            }

            if( !isset($this->request->get["order"]) ) 
            {
            }
            else
            {
                $url .= "&order=" . $this->request->get["order"];
            }

            if( !isset($this->request->get["page"]) ) 
            {
            }
            else
            {
                $url .= "&page=" . $this->request->get["page"];
            }

            $this->response->redirect($this->url->link("extension/module/membership/getCardsList", "user_token=" . $this->session->data["user_token"] . $url, true));
        }

        $this->getCardForm();
    }

    public function editCard()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        $this->load->model("customer/customer");
        if( !($this->validate() && $this->request->server["REQUEST_METHOD"] == "POST" && $this->validateCardForm()) ) 
        {
        }
        else
        {
            $settings = $this->config->get("module_membership");
            $notification_settings = $this->config->get("module_membership_notification");
            $customer = $this->model_customer_customer->getCustomer($this->request->post["customer_id"]);
            if( empty($customer) ) 
            {
                $this->load->model("localisation/language");
                $language = $this->model_localisation_language->getLanguageByCode($this->config->get("config_language"));
                $cardowner = preg_split("/[\\s]+/", $this->request->post["cardowner"]);
                if( $this->config->get("module_membership_auto_transfer_to_group") && $this->config->get("module_membership_customer_group_id") && $this->config->get("module_membership_customer_group_id") != $this->config->get("config_customer_group_id") ) 
                {
                    $module_membership_customer_group_id = $this->config->get("module_membership_customer_group_id");
                }
                else
                {
                    $module_membership_customer_group_id = $this->config->get("config_customer_group_id");
                }

                $new_customer = array( "membership_customer_group_id" => $module_membership_customer_group_id, "store_id" => 0, "language_id" => $language["language_id"], "firstname" => (isset($cardowner[2]) ? $cardowner[1] . " " . $cardowner[2] : $cardowner[1]), "lastname" => $cardowner[0], "email" => ($this->request->post["email"] ? trim($this->request->post["email"]) : trim($this->request->post["telephone"])), "telephone" => trim($this->request->post["telephone"]), "fax" => "", "password" => $this->model_extension_module_membership->generateCardCode(), "newsletter" => "", "status" => 1, "approved" => 1, "safe" => 1 );
                $this->request->post["customer_id"] = $this->model_customer_customer->addCustomer($new_customer);
                if( !$notification_settings["customer_creation"] ) 
                {
                }
                else
                {
                    $this->model_extension_module_membership->sendMail("customer_creation", $new_customer);
                }

            }
            else
            {
                if( !($this->config->get("module_membership_auto_transfer_to_group") && $this->config->get("module_membership_customer_group_id") && $this->config->get("module_membership_customer_group_id") != $customer["customer_group_id"]) ) 
                {
                }
                else
                {
                    $customer["customer_group_id"] = $this->config->get("module_membership_customer_group_id");
                }

            }

            $old_customer = $this->model_extension_module_membership->getCardByCustomer($this->request->post["customer_id"]);
            $this->model_extension_module_membership->editCard($this->request->get["card_id"], $this->request->post);
            if( $old_customer || !$notification_settings["card_issuance"] ) 
            {
            }
            else
            {
                $this->model_extension_module_membership->sendMail("card_issuance", $this->request->get["card_id"]);
            }

            $this->session->data["success"] = $this->language->get("text_success_card_edited");
            $url = "";
            if( !isset($this->request->get["sort"]) ) 
            {
            }
            else
            {
                $url .= "&sort=" . $this->request->get["sort"];
            }

            if( !isset($this->request->get["order"]) ) 
            {
            }
            else
            {
                $url .= "&order=" . $this->request->get["order"];
            }

            if( !isset($this->request->get["page"]) ) 
            {
            }
            else
            {
                $url .= "&page=" . $this->request->get["page"];
            }

            $this->response->redirect($this->url->link("extension/module/membership/getCardsList", "user_token=" . $this->session->data["user_token"] . $url, true));
        }

        $this->getCardForm();
    }

    public function getCardsList()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        $url = "";
        if( isset($this->request->get["filter_cardowner"]) ) 
        {
            $filter_cardowner = $this->request->get["filter_cardowner"];
            $url .= "&filter_cardowner=" . urlencode(html_entity_decode($this->request->get["filter_cardowner"], ENT_QUOTES, "UTF-8"));
        }
        else
        {
            $filter_cardowner = NULL;
        }

        if( isset($this->request->get["filter_telephone"]) ) 
        {
            $filter_telephone = $this->request->get["filter_telephone"];
            $url .= "&filter_telephone=" . $this->request->get["filter_telephone"];
        }
        else
        {
            $filter_telephone = NULL;
        }

        if( isset($this->request->get["filter_code"]) ) 
        {
            $filter_code = $this->request->get["filter_code"];
            $url .= "&filter_code=" . $this->request->get["filter_code"];
        }
        else
        {
            $filter_code = NULL;
        }

        if( isset($this->request->get["sort"]) ) 
        {
            $sort = $this->request->get["sort"];
            $url .= "&sort=" . $this->request->get["sort"];
        }
        else
        {
            $sort = "card_id";
        }

        if( isset($this->request->get["order"]) ) 
        {
            $order = $this->request->get["order"];
            $url .= "&order=" . $this->request->get["order"];
        }
        else
        {
            $order = "ASC";
        }

        if( isset($this->request->get["page"]) ) 
        {
            $page = $this->request->get["page"];
            $url .= "&page=" . $this->request->get["page"];
        }
        else
        {
            $page = 1;
        }

        $data["add"] = $this->url->link("extension/module/membership/addCard", "user_token=" . $this->session->data["user_token"] . $url, true);
        $filter_data = array( "filter_cardowner" => $filter_cardowner, "filter_telephone" => $filter_telephone, "filter_code" => $filter_code, "sort" => $sort, "order" => $order, "start" => ($page - 1) * $this->config->get("config_limit_admin"), "limit" => $this->config->get("config_limit_admin") );
        $data["cards"] = $this->model_extension_module_membership->getCards($filter_data);
        foreach( $data["cards"] as $k => $card ) 
        {
            if( !($card["cardowner"] && $card["telephone"]) ) 
            {
            }
            else
            {
                $data["cards"][$k]["cardowner"] .= ", " . $card["telephone"];
            }

            $discount = $this->model_extension_module_membership->calcDiscount($card);
            switch( $discount["type"] ) 
            {
                case "F":
                case "S":
                    $data["cards"][$k]["discount"] = $this->currency->format($discount["value"], $this->config->get("config_currency"));
                    break;
                case "P":
                    $data["cards"][$k]["discount"] = $discount["value"] . " %";
                    break;
            }
            switch( $card["status"] ) 
            {
                case 1:
                    $data["cards"][$k]["status_text"] = $this->language->get("text_enabled");
                    break;
                case 2:
                    $data["cards"][$k]["status_text"] = $this->language->get("text_reserved");
                    break;
                default:
                    $data["cards"][$k]["status_text"] = $this->language->get("text_disabled");
            }
            $data["cards"][$k]["total"] = $this->currency->format($card["total"], $this->config->get("config_currency"));
            $data["cards"][$k]["date_start"] = ($card["date_start"] == "0000-00-00" ? "" : date($this->language->get("date_format_short"), strtotime($card["date_start"])));
            $data["cards"][$k]["date_expiry"] = ($card["date_expiry"] == "0000-00-00" ? "" : date($this->language->get("date_format_short"), strtotime($card["date_expiry"])));
            $data["cards"][$k]["edit"] = $this->url->link("extension/module/membership/editCard", "user_token=" . $this->session->data["user_token"] . "&card_id=" . $card["card_id"] . $url, true);
        }
        $data["user_token"] = $this->session->data["user_token"];
        $data["column_cardowner"] = $this->language->get("column_cardowner");
        $data["column_code"] = $this->language->get("column_code");
        $data["column_discount"] = $this->language->get("column_discount");
        $data["column_balance"] = $this->language->get("column_balance");
        $data["column_date_start"] = $this->language->get("column_date_start");
        $data["column_date_expiry"] = $this->language->get("column_date_expiry");
        $data["column_status"] = $this->language->get("column_status");
        $data["column_action"] = $this->language->get("column_action");
        $data["entry_cardowner"] = $this->language->get("entry_cardowner");
        $data["entry_code"] = $this->language->get("entry_code");
        $data["entry_telephone"] = $this->language->get("entry_telephone");
        $data["button_add"] = $this->language->get("button_add");
        $data["button_edit"] = $this->language->get("button_edit");
        $data["button_delete"] = $this->language->get("button_delete");
        $data["button_filter"] = $this->language->get("button_filter");
        $data["text_discount_cards_list"] = $this->language->get("text_discount_cards_list");
        $data["text_no_results"] = $this->language->get("text_no_results");
        $data["text_confirm"] = $this->language->get("text_confirm");
        if( isset($this->error["warning"]) ) 
        {
            $data["error_warning"] = $this->error["warning"];
        }
        else
        {
            $data["error_warning"] = "";
        }

        if( isset($this->session->data["success"]) ) 
        {
            $data["success"] = $this->session->data["success"];
            unset($this->session->data["success"]);
        }
        else
        {
            $data["success"] = "";
        }

        $url = "";
        if( !isset($this->request->get["filter_cardowner"]) ) 
        {
        }
        else
        {
            $url .= "&filter_cardowner=" . urlencode(html_entity_decode($this->request->get["filter_cardowner"], ENT_QUOTES, "UTF-8"));
        }

        if( !isset($this->request->get["filter_telephone"]) ) 
        {
        }
        else
        {
            $url .= "&filter_telephone=" . $this->request->get["filter_telephone"];
        }

        if( !isset($this->request->get["filter_code"]) ) 
        {
        }
        else
        {
            $url .= "&filter_code=" . $this->request->get["filter_code"];
        }

        if( $order == "ASC" ) 
        {
            $url .= "&order=DESC";
        }
        else
        {
            $url .= "&order=ASC";
        }

        if( !isset($this->request->get["page"]) ) 
        {
        }
        else
        {
            $url .= "&page=" . $this->request->get["page"];
        }

        $data["sort_cardowner"] = $this->url->link("extension/module/membership/getCardsList", "user_token=" . $this->session->data["user_token"] . "&sort=cardowner" . $url, true);
        $data["sort_code"] = $this->url->link("extension/module/membership/getCardsList", "user_token=" . $this->session->data["user_token"] . "&sort=code" . $url, true);
        $data["sort_total"] = $this->url->link("extension/module/membership/getCardsList", "user_token=" . $this->session->data["user_token"] . "&sort=total" . $url, true);
        $data["sort_date_start"] = $this->url->link("extension/module/membership/getCardsList", "user_token=" . $this->session->data["user_token"] . "&sort=date_start" . $url, true);
        $data["sort_date_expiry"] = $this->url->link("extension/module/membership/getCardsList", "user_token=" . $this->session->data["user_token"] . "&sort=date_expiry" . $url, true);
        $data["sort_status"] = $this->url->link("extension/module/membership/getCardsList", "user_token=" . $this->session->data["user_token"] . "&sort=status" . $url, true);
        $url = "";
        if( !isset($this->request->get["filter_cardowner"]) ) 
        {
        }
        else
        {
            $url .= "&filter_cardowner=" . urlencode(html_entity_decode($this->request->get["filter_cardowner"], ENT_QUOTES, "UTF-8"));
        }

        if( !isset($this->request->get["filter_telephone"]) ) 
        {
        }
        else
        {
            $url .= "&filter_telephone=" . $this->request->get["filter_telephone"];
        }

        if( !isset($this->request->get["filter_code"]) ) 
        {
        }
        else
        {
            $url .= "&filter_code=" . $this->request->get["filter_code"];
        }

        if( !isset($this->request->get["sort"]) ) 
        {
        }
        else
        {
            $url .= "&sort=" . $this->request->get["sort"];
        }

        if( !isset($this->request->get["order"]) ) 
        {
        }
        else
        {
            $url .= "&order=" . $this->request->get["order"];
        }

        $cards_total = $this->model_extension_module_membership->getTotalCards();
        $pagination = new Pagination();
        $pagination->total = $cards_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get("config_limit_admin");
        $pagination->url = $this->url->link("extension/module/membership/getCardsList", "user_token=" . $this->session->data["user_token"] . $url . "&page={page}", true);
        $data["pagination"] = $pagination->render();
        $data["results"] = sprintf($this->language->get("text_pagination"), ($cards_total ? ($page - 1) * $this->config->get("config_limit_admin") + 1 : 0), ($cards_total - $this->config->get("config_limit_admin") < ($page - 1) * $this->config->get("config_limit_admin") ? $cards_total : ($page - 1) * $this->config->get("config_limit_admin") + $this->config->get("config_limit_admin")), $cards_total, ceil($cards_total / $this->config->get("config_limit_admin")));
        $data["filter_cardowner"] = $filter_cardowner;
        $data["filter_telephone"] = $filter_telephone;
        $data["filter_code"] = $filter_code;
        $data["sort"] = $sort;
        $data["order"] = $order;
        $this->response->setOutput($this->load->view("extension/module/membership_cards_list", $data));
        return NULL;
    }

    public function getCardHistory()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        if( isset($this->request->get["card_id"]) ) 
        {
            $card_id = $this->request->get["card_id"];
        }
        else
        {
            $card_id = "";
        }

        if( isset($this->request->get["sort"]) ) 
        {
            $sort = $this->request->get["sort"];
        }
        else
        {
            $sort = "card_id";
        }

        if( isset($this->request->get["order"]) ) 
        {
            $order = $this->request->get["order"];
        }
        else
        {
            $order = "ASC";
        }

        if( isset($this->request->get["page"]) ) 
        {
            $page = $this->request->get["page"];
        }
        else
        {
            $page = 1;
        }

       
        $filter_data = array( "sort" => $sort, "order" => $order, "start" => ($page - 1) * $this->config->get("config_limit_admin"), "limit" => $this->config->get("config_limit_admin") );
        $results = $this->model_extension_module_membership->getCardHistories($filter_data, $card_id);
        $data["histories"] = array(  );
        foreach( $results as $result ) 
        {
            if( $result["card_history_id"] ) 
            {
                $data["histories"][] = array( "card_history_id" => $result["card_history_id"], "order_id" => $result["order_id"], "customer" => $result["customer"], "total_without_discount" => $this->currency->format($result["total_without_discount"], $this->config->get("config_currency")), "discount" => $this->currency->format($result["discount"], $this->config->get("config_currency")), "total" => $this->currency->format($result["total"], $this->config->get("config_currency")), "status" => $result["status"], "datetime_added" => date($this->language->get("datetime_format"), strtotime($result["datetime_added"])) );
            }

        }
        $results = $this->model_extension_module_membership->getCardHistoryTotals($card_id);
        foreach( $results as $k => $total ) 
        {
            $data["card_totals"][$k] = $this->currency->format($total, $this->config->get("config_currency"));
        }
        $url = "";
        if( $order == "ASC" ) 
        {
            $url .= "&order=DESC";
        }
        else
        {
            $url .= "&order=ASC";
        }

        if( !isset($this->request->get["page"]) ) 
        {
        }
        else
        {
            $url .= "&page=" . $this->request->get["page"];
        }

        $data["sort_order_id"] = $this->url->link("extension/module/membership/getCardHistory", "user_token=" . $this->session->data["user_token"] . "&sort=order_id" . "&card_id=" . $card_id . $url, true);
        $data["sort_customer"] = $this->url->link("extension/module/membership/getCardHistory", "user_token=" . $this->session->data["user_token"] . "&sort=customer" . "&card_id=" . $card_id . $url, true);
        $data["sort_total_without_discount"] = $this->url->link("extension/module/membership/getCardHistory", "user_token=" . $this->session->data["user_token"] . "&sort=total_without_discount" . "&card_id=" . $card_id . $url, true);
        $data["sort_discount"] = $this->url->link("extension/module/membership/getCardHistory", "user_token=" . $this->session->data["user_token"] . "&sort=discount" . "&card_id=" . $card_id . $url, true);
        $data["sort_total"] = $this->url->link("extension/module/membership/getCardHistory", "user_token=" . $this->session->data["user_token"] . "&sort=total" . "&card_id=" . $card_id . $url, true);
        $data["sort_datetime_added"] = $this->url->link("extension/module/membership/getCardHistory", "user_token=" . $this->session->data["user_token"] . "&sort=datetime_added" . "&card_id=" . $card_id . $url, true);
        $url = "";
        if( !isset($this->request->get["sort"]) ) 
        {
        }
        else
        {
            $url .= "&sort=" . $this->request->get["sort"];
        }

        if( !isset($this->request->get["order"]) ) 
        {
        }
        else
        {
            $url .= "&order=" . $this->request->get["order"];
        }

        $data["history_total"] = $this->model_extension_module_membership->getTotalCardHistories($card_id);
        $pagination = new Pagination();
        $pagination->total = $data["history_total"];
        $pagination->page = $page;
        $pagination->limit = $this->config->get("config_limit_admin");
        $pagination->url = $this->url->link("extension/module/membership/getCardHistory", "user_token=" . $this->session->data["user_token"] . "&card_id=" . $card_id . $url . "&page={page}", true);
        $data["pagination"] = $pagination->render();
        $data["results"] = sprintf($this->language->get("text_pagination"), ($data["history_total"] ? ($page - 1) * $this->config->get("config_limit_admin") + 1 : 0), ($data["history_total"] - $this->config->get("config_limit_admin") < ($page - 1) * $this->config->get("config_limit_admin") ? $data["history_total"] : ($page - 1) * $this->config->get("config_limit_admin") + $this->config->get("config_limit_admin")), $data["history_total"], ceil($data["history_total"] / $this->config->get("config_limit_admin")));
        $data["user_token"] = $this->session->data["user_token"];
        $data["card_id"] = $card_id;
        $data["sort"] = $sort;
        $data["order"] = $order;
        $this->response->setOutput($this->load->view("extension/module/membership_card_history", $data));
        return NULL;
    }

    public function changeCardTotals()
    {
        $json = array(  );
        if( !(isset($this->request->post["card_id"]) && isset($this->request->post["total"]) && isset($this->request->post["discount"]) && isset($this->request->post["total_without_discount"]) && $this->validate()) ) 
        {
        }
        else
        {
            $this->load->model("extension/module/membership");
            $totals = $this->model_extension_module_membership->getCardHistoryTotals($this->request->post["card_id"]);
            $total = $this->request->post["total"] - $totals["total"];
            $discount = $this->request->post["discount"] - $totals["discount"];
            $total_without_discount = $this->request->post["total_without_discount"] - $totals["total_without_discount"];
            $card_history_id = $this->model_extension_module_membership->addCardHistory($this->request->post["card_id"], $total, $discount, $total_without_discount);
            if( !$card_history_id ) 
            {
            }
            else
            {
                $json["card_history_id"] = $card_history_id;
                $json["total"] = $this->currency->format($total, $this->config->get("config_currency"));
                $json["discount"] = $this->currency->format($discount, $this->config->get("config_currency"));
                $json["total_without_discount"] = $this->currency->format($total_without_discount, $this->config->get("config_currency"));
            }

        }

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }

    public function getCardsHistory()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        $url = "";
        if( isset($this->request->get["filter_order_id"]) ) 
        {
            $filter_order_id = $this->request->get["filter_order_id"];
            $url .= "&filter_order_id=" . (int) $this->request->get["filter_order_id"];
        }
        else
        {
            $filter_order_id = NULL;
        }

        if( isset($this->request->get["filter_code"]) ) 
        {
            $filter_code = $this->request->get["filter_code"];
            $url .= "&filter_code=" . $this->request->get["filter_code"];
        }
        else
        {
            $filter_code = NULL;
        }

        if( isset($this->request->get["filter_cardowner"]) ) 
        {
            $filter_cardowner = $this->request->get["filter_cardowner"];
            $url .= "&filter_cardowner=" . urlencode(html_entity_decode($this->request->get["filter_cardowner"], ENT_QUOTES, "UTF-8"));
        }
        else
        {
            $filter_cardowner = NULL;
        }

        if( isset($this->request->get["filter_customer"]) ) 
        {
            $filter_customer = $this->request->get["filter_customer"];
            $url .= "&filter_customer=" . urlencode(html_entity_decode($this->request->get["filter_customer"], ENT_QUOTES, "UTF-8"));
        }
        else
        {
            $filter_customer = NULL;
        }

        if( isset($this->request->get["sort"]) ) 
        {
            $sort = $this->request->get["sort"];
            $url .= "&sort=" . $this->request->get["sort"];
        }
        else
        {
            $sort = "card_id";
        }

        if( isset($this->request->get["order"]) ) 
        {
            $order = $this->request->get["order"];
            $url .= "&order=" . $this->request->get["order"];
        }
        else
        {
            $order = "ASC";
        }

        if( isset($this->request->get["page"]) ) 
        {
            $page = $this->request->get["page"];
            $url .= "&page=" . $this->request->get["page"];
        }
        else
        {
            $page = 1;
        }

        $filter_data = array( "filter_order_id" => $filter_order_id, "filter_code" => $filter_code, "filter_cardowner" => $filter_cardowner, "filter_customer" => $filter_customer, "sort" => $sort, "order" => $order, "start" => ($page - 1) * $this->config->get("config_limit_admin"), "limit" => $this->config->get("config_limit_admin") );
        $results = $this->model_extension_module_membership->getCardHistories($filter_data);
        $data["histories"] = array(  );
        foreach( $results as $result ) 
        {
            if( $result["card_history_id"] ) 
            {
                $data["histories"][] = array( "card_history_id" => $result["card_history_id"], "card_id" => $result["card_id"], "order_id" => $result["order_id"], "code" => $result["code"], "cardowner" => $result["cardowner"], "cardowner_id" => $result["cardowner_id"], "customer" => $result["customer"], "total_without_discount" => $this->currency->format($result["total_without_discount"], $this->config->get("config_currency")), "discount" => $this->currency->format($result["discount"], $this->config->get("config_currency")), "total" => $this->currency->format($result["total"], $this->config->get("config_currency")), "status" => $result["status"], "datetime_added" => date($this->language->get("datetime_format"), strtotime($result["datetime_added"])) );
            }

        }
        $data["card_edit"] = $this->url->link("extension/module/membership/editCard", "user_token=" . $this->session->data["user_token"] . $url, true);
        $data["user_token"] = $this->session->data["user_token"];
        $data["column_order_id"] = $this->language->get("column_order_id");
        $data["column_code"] = $this->language->get("column_code");
        $data["column_cardowner"] = $this->language->get("column_cardowner");
        $data["column_customer"] = $this->language->get("column_customer");
        $data["column_total_without_discount"] = $this->language->get("column_total_without_discount");
        $data["column_discount"] = $this->language->get("column_discount");
        $data["column_total"] = $this->language->get("column_total");
        $data["column_datetime_added"] = $this->language->get("column_datetime_added");
        $data["column_action"] = $this->language->get("column_action");
        $data["entry_order_number"] = $this->language->get("entry_order_number");
        $data["entry_code"] = $this->language->get("entry_code");
        $data["entry_cardowner"] = $this->language->get("entry_cardowner");
        $data["entry_customer"] = $this->language->get("entry_customer");
        $data["button_delete"] = $this->language->get("button_delete");
        $data["button_filter"] = $this->language->get("button_filter");
        $data["text_cards_history"] = $this->language->get("text_cards_history");
        $data["text_no_results"] = $this->language->get("text_no_results");
        $data["text_confirm"] = $this->language->get("text_confirm");
        $url = "";
        if( !isset($this->request->get["filter_order_id"]) ) 
        {
        }
        else
        {
            $url .= "&filter_order_id=" . (int) $this->request->get["filter_order_id"];
        }

        if( !isset($this->request->get["filter_code"]) ) 
        {
        }
        else
        {
            $url .= "&filter_code=" . $this->request->get["filter_code"];
        }

        if( !isset($this->request->get["filter_cardowner"]) ) 
        {
        }
        else
        {
            $url .= "&filter_cardowner=" . urlencode(html_entity_decode($this->request->get["filter_cardowner"], ENT_QUOTES, "UTF-8"));
        }

        if( !isset($this->request->get["filter_customer"]) ) 
        {
        }
        else
        {
            $url .= "&filter_customer=" . urlencode(html_entity_decode($this->request->get["filter_customer"], ENT_QUOTES, "UTF-8"));
        }

        if( $order == "ASC" ) 
        {
            $url .= "&order=DESC";
        }
        else
        {
            $url .= "&order=ASC";
        }

        if( !isset($this->request->get["page"]) ) 
        {
        }
        else
        {
            $url .= "&page=" . $this->request->get["page"];
        }

        $data["sort_order_id"] = $this->url->link("extension/module/membership/getCardsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=order_id" . $url, true);
        $data["sort_code"] = $this->url->link("extension/module/membership/getCardsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=code" . $url, true);
        $data["sort_cardowner"] = $this->url->link("extension/module/membership/getCardsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=cardowner" . $url, true);
        $data["sort_customer"] = $this->url->link("extension/module/membership/getCardsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=customer" . $url, true);
        $data["sort_total_without_discount"] = $this->url->link("extension/module/membership/getCardsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=total_without_discount" . $url, true);
        $data["sort_discount"] = $this->url->link("extension/module/membership/getCardsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=discount" . $url, true);
        $data["sort_total"] = $this->url->link("extension/module/membership/getCardsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=total" . $url, true);
        $data["sort_datetime_added"] = $this->url->link("extension/module/membership/getCardsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=datetime_added" . $url, true);
        $url = "";
        if( !isset($this->request->get["filter_cardowner"]) ) 
        {
        }
        else
        {
            $url .= "&filter_cardowner=" . urlencode(html_entity_decode($this->request->get["filter_cardowner"], ENT_QUOTES, "UTF-8"));
        }

        if( !isset($this->request->get["filter_telephone"]) ) 
        {
        }
        else
        {
            $url .= "&filter_telephone=" . $this->request->get["filter_telephone"];
        }

        if( !isset($this->request->get["filter_code"]) ) 
        {
        }
        else
        {
            $url .= "&filter_code=" . $this->request->get["filter_code"];
        }

        if( !isset($this->request->get["sort"]) ) 
        {
        }
        else
        {
            $url .= "&sort=" . $this->request->get["sort"];
        }

        if( !isset($this->request->get["order"]) ) 
        {
        }
        else
        {
            $url .= "&order=" . $this->request->get["order"];
        }

        $data["history_total"] = $this->model_extension_module_membership->getTotalCardHistories();
        $pagination = new Pagination();
        $pagination->total = $data["history_total"];
        $pagination->page = $page;
        $pagination->limit = $this->config->get("config_limit_admin");
        $pagination->url = $this->url->link("extension/module/membership/getCardsHistory", "user_token=" . $this->session->data["user_token"] . $url . "&page={page}", true);
        $data["pagination"] = $pagination->render();
        $data["results"] = sprintf($this->language->get("text_pagination"), ($data["history_total"] ? ($page - 1) * $this->config->get("config_limit_admin") + 1 : 0), ($data["history_total"] - $this->config->get("config_limit_admin") < ($page - 1) * $this->config->get("config_limit_admin") ? $data["history_total"] : ($page - 1) * $this->config->get("config_limit_admin") + $this->config->get("config_limit_admin")), $data["history_total"], ceil($data["history_total"] / $this->config->get("config_limit_admin")));
        $data["filter_order_id"] = $filter_order_id;
        $data["filter_code"] = $filter_code;
        $data["filter_cardowner"] = $filter_cardowner;
        $data["filter_customer"] = $filter_customer;
        $data["sort"] = $sort;
        $data["order"] = $order;
        $this->response->setOutput($this->load->view("extension/module/membership_cards_history", $data));
        return NULL;
    }

    public function getCardsGeneratorForm() {
        $this->load->language("extension/module/membership");
		
        $data["user_token"] = $this->session->data["user_token"];

        $data["generation_mode"] = array( 
			"free_cards" => $this->language->get("text_free_cards"), 
			"customer_group_cards" => $this->language->get("text_customer_group_cards"), 
			"appropriate_balance_customers_cards" => $this->language->get("text_appropriate_balance_customers_cards"), 
			"all_customers_cards" => $this->language->get("text_all_customers_cards") 
		);
       
	   $this->response->setOutput($this->load->view("extension/module/membership_cards_generator", $data));
    }

    public function saveCardsFromGenerator() {
        $start = microtime(true);
        $max_execution_time = ini_get("max_execution_time") - 3;
        $json = array(  );
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        if( isset($this->request->post["code_list"]) && !empty($this->request->post["code_list"]) ) 
        {
            $code_list = explode(PHP_EOL, $this->request->post["code_list"]);
        }
        else
        {
            $code_list = array(  );
        }

        if( isset($this->request->post["quantity"]) ) 
        {
            $quantity = $this->request->post["quantity"];
        }
        else
        {
            $quantity = 0;
        }

        if( isset($this->request->post["generation_mode"]) ) 
        {
            $generation_mode = $this->request->post["generation_mode"];
        }
        else
        {
            $generation_mode = "";
        }

        $settings = $this->config->get("module_membership");
        $notification_settings = $this->config->get("module_membership_notification");
        if( $generation_mode == "customer_group_cards" ) 
        {
            $customers = $this->model_extension_module_membership->getCustomersWithoutCardsByCustomerGroupId($this->config->get("module_membership_customer_group_id"));
        }
        else
        {
            if( $generation_mode == "appropriate_balance_customers_cards" ) 
            {
                $default_card = $this->config->get("module_membership_default_card");
                if( isset($default_card["discount"][0]["limit"]) ) 
                {
                    $appropriate_balance = $default_card["discount"][0]["limit"];
                }
                else
                {
                    $appropriate_balance = 0;
                }

                $customers = $this->model_extension_module_membership->getCustomersWithoutCardsByBalance($appropriate_balance);
            }
            else
            {
                if( $generation_mode == "all_customers_cards" ) 
                {
                    $customers = $this->model_extension_module_membership->getCustomersWithoutCards();
                }
                else
                {
                    $customers = array(  );
                }

            }

        }

        if( empty($code_list) || !$quantity ) 
        {
        }
        else
        {
            $data = $this->config->get("module_membership_default_card");
            $data["date_start"] = $this->intervalToDate($data["date_start"]);
            $data["date_expiry"] = $this->intervalToDate($data["date_expiry"]);
            $i = 0;
            $c = count($code_list);
            while( !($quantity && $i < $c && microtime(true) - $start < $max_execution_time) ) 
            {
                if( count($code_list) != count($json["used_code"]) ) 
                {
                }
                else
                {
                    $json["success"] = $this->language->get("text_success_cards_saving");
                }

            }
            $data["code"] = trim($code_list[$i]);
            $json["used_code"][] = trim($code_list[$i]);
            if( isset($customers[$i]) ) 
            {
                $data["customer_id"] = $customers[$i]["customer_id"];
            }
            else
            {
                $data["customer_id"] = "";
            }

            try
            {
                $card_id = $this->model_extension_module_membership->addCard($data);
            }
            catch( Exception $e ) 
            {
                $card_id = NULL;
                $json["error_code"][] = $code_list[$i];
            }
            if( !($card_id && isset($customers[$i])) ) 
            {
            }
            else
            {
                if( !($this->config->get("module_membership_auto_transfer_to_group") && $this->config->get("module_membership_customer_group_id")) ) 
                {
                }
                else
                {
                    $this->model_extension_module_membership->setCustomerGroup($customers[$i]["customer_id"], $this->config->get("module_membership_customer_group_id"));
                }

                if( !$notification_settings["card_issuance"] ) 
                {
                }
                else
                {
                    $this->model_extension_module_membership->sendMail("card_issuance", $card_id);
                }

            }

            $i++;
            $quantity--;
        }

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }

    protected function getGiftForm()
    {
        $url = "";
        if( !isset($this->request->get["page"]) ) 
        {
        }
        else
        {
            $url .= "&page=" . $this->request->get["page"];
        }

        if( !isset($this->request->get["sort"]) ) 
        {
        }
        else
        {
            $url .= "&sort=" . $this->request->get["sort"];
        }

        if( !isset($this->request->get["order"]) ) 
        {
        }
        else
        {
            $url .= "&order=" . $this->request->get["order"];
        }

        if( !isset($this->request->get["gift_id"]) ) 
        {
            $data["action"] = $this->url->link("extension/module/membership/addGift", "user_token=" . $this->session->data["user_token"] . $url, true);
        }
        else
        {
            $data["action"] = $this->url->link("extension/module/membership/editGift", "user_token=" . $this->session->data["user_token"] . "&gift_id=" . $this->request->get["gift_id"] . $url, true);
        }

        if( isset($this->error["warning"]) ) 
        {
            $data["error_warning"] = $this->error["warning"];
        }
        else
        {
            $data["error_warning"] = "";
        }

        $data["user_token"] = $this->session->data["user_token"];
       
        $data["text_form"] = (!isset($this->request->get["gift_id"]) ? $this->language->get("text_gift_adding") : $this->language->get("text_gift_editing"));

        if( isset($this->request->get["gift_id"]) && !$this->request->server["REQUEST_METHOD"] != "POST" ) 
        {
            $gift_info = $this->model_extension_module_membership->getGift($this->request->get["gift_id"]);
        }
        else
        {
            $gift_info = false;
        }

        if( isset($this->request->get["gift_id"]) ) 
        {
            $data["gift_id"] = $this->request->get["gift_id"];
        }
        else
        {
            $data["gift_id"] = 0;
        }

        if( isset($this->request->post["status"]) ) 
        {
            $data["status"] = $this->request->post["status"];
        }
        else
        {
            if( !empty($gift_info) ) 
            {
                $data["status"] = $gift_info["status"];
            }
            else
            {
                $data["status"] = "";
            }

        }

        if( isset($this->request->post["name"]) ) 
        {
            $data["name"] = $this->request->post["name"];
        }
        else
        {
            if( !empty($gift_info) ) 
            {
                $data["name"] = unserialize($gift_info["name"]);
            }
            else
            {
                $data["name"] = array(  );
            }

        }

        if( isset($this->request->post["threshold"]) ) 
        {
            $data["threshold"] = $this->request->post["threshold"];
        }
        else
        {
            if( !empty($gift_info["threshold"]) ) 
            {
                $data["threshold"] = $gift_info["threshold"];
            }
            else
            {
                $data["threshold"] = "";
            }

        }

        if( isset($this->request->post["maximum_cost"]) ) 
        {
            $data["maximum_cost"] = $this->request->post["maximum_cost"];
        }
        else
        {
            if( !empty($gift_info["maximum_cost"]) ) 
            {
                $data["maximum_cost"] = $gift_info["maximum_cost"];
            }
            else
            {
                $data["maximum_cost"] = "";
            }

        }

        if( isset($this->request->post["giving_quantity"]) ) 
        {
            $data["giving_quantity"] = $this->request->post["giving_quantity"];
        }
        else
        {
            if( !empty($gift_info["maximum_cost"]) ) 
            {
                $data["giving_quantity"] = $gift_info["giving_quantity"];
            }
            else
            {
                $data["giving_quantity"] = "";
            }

        }

        if( isset($this->request->post["date_start"]) ) 
        {
            $data["date_start"] = $this->request->post["date_start"];
        }
        else
        {
            if( !empty($gift_info) ) 
            {
                $data["date_start"] = ($gift_info["date_start"] != "0000-00-00" ? $gift_info["date_start"] : "");
            }
            else
            {
                $data["date_start"] = "";
            }

        }

        if( isset($this->request->post["date_expiry"]) ) 
        {
            $data["date_expiry"] = $this->request->post["date_expiry"];
        }
        else
        {
            if( !empty($gift_info) ) 
            {
                $data["date_expiry"] = ($gift_info["date_expiry"] != "0000-00-00" ? $gift_info["date_expiry"] : "");
            }
            else
            {
                $data["date_expiry"] = "";
            }

        }

        if( isset($this->request->post["categories"]) ) 
        {
            $categories = $this->request->post["categories"];
        }
        else
        {
            if( !empty($gift_info) ) 
            {
                $categories = explode(",", $gift_info["categories"]);
            }
            else
            {
                $categories = array(  );
            }

        }

        if( isset($this->request->post["products"]) ) 
        {
            $products = $this->request->post["products"];
        }
        else
        {
            if( !empty($gift_info) ) 
            {
                $products = explode(",", $gift_info["products"]);
            }
            else
            {
                $products = array(  );
            }

        }

        $this->load->model("localisation/language");
        $data["languages"] = $this->model_localisation_language->getLanguages();
        $data["language_id"] = "";
        foreach( $data["languages"] as $language ) 
        {
            if( $language["code"] != $this->config->get("config_admin_language") ) 
            {
            }
            else
            {
                $data["language_id"] = $language["language_id"];
            }

            $data["language_flag"][$language["language_id"]] = (version_compare(VERSION, "2.2", ">=") ? "language/" . $language["code"] . "/" . $language["code"] . ".png" : "view/image/flags/" . $language["image"]);
        }
        if( $this->currency->getSymbolRight($this->config->get("config_currency")) ) 
        {
            $data["currency_symbol"] = $this->currency->getSymbolRight($this->config->get("config_currency"));
        }
        else
        {
            $data["currency_symbol"] = $this->currency->getSymbolLeft($this->config->get("config_currency"));
        }

        $data["categories"] = array(  );
        if( !is_array($categories) ) 
        {
        }
        else
        {
            $this->load->model("catalog/category");
            foreach( $categories as $category_id ) 
            {
                $category_info = $this->model_catalog_category->getCategory($category_id);
                if( !$category_info ) 
                {
                }
                else
                {
                    $data["categories"][] = array( "category_id" => $category_info["category_id"], "name" => (($category_info["path"] ? $category_info["path"] . " &gt; " : "")) . $category_info["name"] );
                }

            }
        }

        $data["products"] = array(  );
        if( !is_array($products) ) 
        {
        }
        else
        {
            $this->load->model("catalog/product");
            foreach( $products as $product_id ) 
            {
                $product_info = $this->model_catalog_product->getProduct($product_id);
                if( !$product_info ) 
                {
                }
                else
                {
                    $data["products"][] = array( "product_id" => $product_info["product_id"], "name" => $product_info["name"] );
                }

            }
        }

        $this->response->setOutput($this->load->view("extension/module/membership_gift_form", $data));
        return NULL;
    }

    public function addGift()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        if( !($this->validate() && $this->request->server["REQUEST_METHOD"] == "POST") ) 
        {
        }
        else
        {
            $gift_id = $this->model_extension_module_membership->addGift($this->request->post);
            if( $gift_id ) 
            {
                $this->session->data["success"] = $this->language->get("text_success_gift_added");
                $url = "";
                if( !isset($this->request->get["sort"]) ) 
                {
                }
                else
                {
                    $url .= "&sort=" . $this->request->get["sort"];
                }

                if( !isset($this->request->get["order"]) ) 
                {
                }
                else
                {
                    $url .= "&order=" . $this->request->get["order"];
                }

                if( !isset($this->request->get["page"]) ) 
                {
                }
                else
                {
                    $url .= "&page=" . $this->request->get["page"];
                }

                $this->response->redirect($this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"] . $url, true));
            }
            else
            {
                $this->error["warning"] = $this->language->get("error_gift_saving");
            }

        }

        $this->getGiftForm();
    }

    public function editGift()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        if( !($this->validate() && $this->request->server["REQUEST_METHOD"] == "POST") ) 
        {
        }
        else
        {
            $this->model_extension_module_membership->editGift($this->request->get["gift_id"], $this->request->post);
            $this->session->data["success"] = $this->language->get("text_success_gift_edited");
            $url = "";
            if( !isset($this->request->get["sort"]) ) 
            {
            }
            else
            {
                $url .= "&sort=" . $this->request->get["sort"];
            }

            if( !isset($this->request->get["order"]) ) 
            {
            }
            else
            {
                $url .= "&order=" . $this->request->get["order"];
            }

            if( !isset($this->request->get["page"]) ) 
            {
            }
            else
            {
                $url .= "&page=" . $this->request->get["page"];
            }

            $this->response->redirect($this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"] . $url, true));
        }

        $this->getGiftForm();
    }

    public function getGiftsList()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        $this->load->model("localisation/language");
        $url = "";
        if( isset($this->request->get["filter_name"]) ) 
        {
            $filter_name = $this->request->get["filter_name"];
            $url .= "&filter_name=" . urlencode(html_entity_decode($this->request->get["filter_name"], ENT_QUOTES, "UTF-8"));
        }
        else
        {
            $filter_name = NULL;
        }

        if( isset($this->request->get["sort"]) ) 
        {
            $sort = $this->request->get["sort"];
            $url .= "&sort=" . $this->request->get["sort"];
        }
        else
        {
            $sort = "gift_id";
        }

        if( isset($this->request->get["order"]) ) 
        {
            $order = $this->request->get["order"];
            $url .= "&order=" . $this->request->get["order"];
        }
        else
        {
            $order = "ASC";
        }

        if( isset($this->request->get["page"]) ) 
        {
            $page = $this->request->get["page"];
            $url .= "&page=" . $this->request->get["page"];
        }
        else
        {
            $page = 1;
        }

        $data["add"] = $this->url->link("extension/module/membership/addGift", "user_token=" . $this->session->data["user_token"] . $url, true);
        $language = $this->model_localisation_language->getLanguageByCode($this->config->get("config_admin_language"));
        $filter_data = array( "filter_name" => $filter_name, "sort" => $sort, "order" => $order, "start" => ($page - 1) * $this->config->get("config_limit_admin"), "limit" => $this->config->get("config_limit_admin") );
        $data["gifts"] = $this->model_extension_module_membership->getGifts($filter_data);
        foreach( $data["gifts"] as $k => $v ) 
        {
            $name = unserialize($v["name"]);
            switch( $v["status"] ) 
            {
                case 1:
                    $data["gifts"][$k]["status_text"] = $this->language->get("text_enabled");
                    break;
                default:
                    $data["gifts"][$k]["status_text"] = $this->language->get("text_disabled");
            }
            $data["gifts"][$k]["name"] = $name[$language["language_id"]];
            $data["gifts"][$k]["threshold"] = $this->currency->format($v["threshold"], $this->config->get("config_currency"));
            $data["gifts"][$k]["maximum_cost"] = $this->currency->format($v["maximum_cost"], $this->config->get("config_currency"));
            $data["gifts"][$k]["date_start"] = ($v["date_start"] == "0000-00-00" ? "" : date($this->language->get("date_format_short"), strtotime($v["date_start"])));
            $data["gifts"][$k]["date_expiry"] = ($v["date_expiry"] == "0000-00-00" ? "" : date($this->language->get("date_format_short"), strtotime($v["date_expiry"])));
            $data["gifts"][$k]["edit"] = $this->url->link("extension/module/membership/editGift", "user_token=" . $this->session->data["user_token"] . "&gift_id=" . $v["gift_id"] . $url, true);
        }
        $data["user_token"] = $this->session->data["user_token"];
        $data["column_name"] = $this->language->get("column_name");
        $data["column_threshold"] = $this->language->get("column_threshold");
        $data["column_maximum_cost_gift"] = $this->language->get("column_maximum_cost_gift");
        $data["column_giving_quantity"] = $this->language->get("column_giving_quantity");
        $data["column_date_start"] = $this->language->get("column_date_start");
        $data["column_date_expiry"] = $this->language->get("column_date_expiry");
        $data["column_status"] = $this->language->get("column_status");
        $data["column_action"] = $this->language->get("column_action");
        $data["entry_name"] = $this->language->get("entry_name");
        $data["button_add"] = $this->language->get("button_add");
        $data["button_edit"] = $this->language->get("button_edit");
        $data["button_delete"] = $this->language->get("button_delete");
        $data["button_filter"] = $this->language->get("button_filter");
        $data["text_gifts_list"] = $this->language->get("text_gifts_list");
        $data["text_no_results"] = $this->language->get("text_no_results");
        $data["text_confirm"] = $this->language->get("text_confirm");
        if( isset($this->error["warning"]) ) 
        {
            $data["error_warning"] = $this->error["warning"];
        }
        else
        {
            $data["error_warning"] = "";
        }

        if( isset($this->session->data["success"]) ) 
        {
            $data["success"] = $this->session->data["success"];
            unset($this->session->data["success"]);
        }
        else
        {
            $data["success"] = "";
        }

        $url = "";
        if( !isset($this->request->get["filter_name"]) ) 
        {
        }
        else
        {
            $url .= "&filter_name=" . urlencode(html_entity_decode($this->request->get["filter_name"], ENT_QUOTES, "UTF-8"));
        }

        if( $order == "ASC" ) 
        {
            $url .= "&order=DESC";
        }
        else
        {
            $url .= "&order=ASC";
        }

        if( !isset($this->request->get["page"]) ) 
        {
        }
        else
        {
            $url .= "&page=" . $this->request->get["page"];
        }

        $data["sort_name"] = $this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"] . "&sort=name" . $url, true);
        $data["sort_threshold"] = $this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"] . "&sort=threshold" . $url, true);
        $data["sort_maximum_cost"] = $this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"] . "&sort=maximum_cost" . $url, true);
        $data["sort_total"] = $this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"] . "&sort=total" . $url, true);
        $data["sort_date_start"] = $this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"] . "&sort=date_start" . $url, true);
        $data["sort_date_expiry"] = $this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"] . "&sort=date_expiry" . $url, true);
        $data["sort_status"] = $this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"] . "&sort=status" . $url, true);
        $url = "";
        if( !isset($this->request->get["filter_name"]) ) 
        {
        }
        else
        {
            $url .= "&filter_name=" . urlencode(html_entity_decode($this->request->get["filter_name"], ENT_QUOTES, "UTF-8"));
        }

        if( !isset($this->request->get["sort"]) ) 
        {
        }
        else
        {
            $url .= "&sort=" . $this->request->get["sort"];
        }

        if( !isset($this->request->get["order"]) ) 
        {
        }
        else
        {
            $url .= "&order=" . $this->request->get["order"];
        }

        $gifts_total = $this->model_extension_module_membership->getTotalGifts();
        $pagination = new Pagination();
        $pagination->total = $gifts_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get("config_limit_admin");
        $pagination->url = $this->url->link("extension/module/membership/getGiftsList", "user_token=" . $this->session->data["user_token"] . $url . "&page={page}", true);
        $data["pagination"] = $pagination->render();
        $data["results"] = sprintf($this->language->get("text_pagination"), ($gifts_total ? ($page - 1) * $this->config->get("config_limit_admin") + 1 : 0), ($gifts_total - $this->config->get("config_limit_admin") < ($page - 1) * $this->config->get("config_limit_admin") ? $gifts_total : ($page - 1) * $this->config->get("config_limit_admin") + $this->config->get("config_limit_admin")), $gifts_total, ceil($gifts_total / $this->config->get("config_limit_admin")));
        $data["filter_name"] = $filter_name;
        $data["sort"] = $sort;
        $data["order"] = $order;
        $this->response->setOutput($this->load->view("extension/module/membership_gifts_list", $data));
        return NULL;
    }

    public function getGiftsHistory()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        $this->load->model("localisation/language");
        $url = "";
        if( isset($this->request->get["filter_order_id"]) ) 
        {
            $filter_order_id = $this->request->get["filter_order_id"];
            $url .= "&filter_order_id=" . (int) $this->request->get["filter_order_id"];
        }
        else
        {
            $filter_order_id = NULL;
        }

        if( isset($this->request->get["filter_name"]) ) 
        {
            $filter_name = $this->request->get["filter_name"];
            $url .= "&filter_name=" . $this->request->get["filter_name"];
        }
        else
        {
            $filter_name = NULL;
        }

        if( isset($this->request->get["filter_customer"]) ) 
        {
            $filter_customer = $this->request->get["filter_customer"];
            $url .= "&filter_customer=" . urlencode(html_entity_decode($this->request->get["filter_customer"], ENT_QUOTES, "UTF-8"));
        }
        else
        {
            $filter_customer = NULL;
        }

        if( isset($this->request->get["sort"]) ) 
        {
            $sort = $this->request->get["sort"];
            $url .= "&sort=" . $this->request->get["sort"];
        }
        else
        {
            $sort = "gift_id";
        }

        if( isset($this->request->get["order"]) ) 
        {
            $order = $this->request->get["order"];
            $url .= "&order=" . $this->request->get["order"];
        }
        else
        {
            $order = "ASC";
        }

        if( isset($this->request->get["page"]) ) 
        {
            $page = $this->request->get["page"];
            $url .= "&page=" . $this->request->get["page"];
        }
        else
        {
            $page = 1;
        }

        $language = $this->model_localisation_language->getLanguageByCode($this->config->get("config_admin_language"));
        $filter_data = array( "filter_order_id" => $filter_order_id, "filter_name" => $filter_name, "filter_customer" => $filter_customer, "sort" => $sort, "order" => $order, "start" => ($page - 1) * $this->config->get("config_limit_admin"), "limit" => $this->config->get("config_limit_admin") );
        $results = $this->model_extension_module_membership->getGiftHistories($filter_data);
        $data["histories"] = array(  );
        foreach( $results as $result ) 
        {
            $name = unserialize($result["name"]);
            $data["histories"][] = array( "gift_history_id" => $result["gift_history_id"], "gift_id" => $result["gift_id"], "order_id" => $result["order_id"], "name" => $name[$language["language_id"]], "customer" => $result["customer"], "customer_id" => $result["customer_id"], "total" => $this->currency->format($result["total"], $this->config->get("config_currency")), "status" => $result["status"], "datetime_added" => date($this->language->get("datetime_format"), strtotime($result["datetime_added"])) );
        }
        $data["gift_edit"] = $this->url->link("extension/module/membership/editGift", "user_token=" . $this->session->data["user_token"] . $url, true);
        $data["user_token"] = $this->session->data["user_token"];
        $data["column_order_id"] = $this->language->get("column_order_id");
        $data["column_name"] = $this->language->get("column_name");
        $data["column_customer"] = $this->language->get("column_customer");
        $data["column_total"] = $this->language->get("column_total");
        $data["column_datetime_added"] = $this->language->get("column_datetime_added");
        $data["column_action"] = $this->language->get("column_action");
        $data["entry_order_number"] = $this->language->get("entry_order_number");
        $data["entry_name"] = $this->language->get("entry_name");
        $data["entry_customer"] = $this->language->get("entry_customer");
        $data["button_delete"] = $this->language->get("button_delete");
        $data["button_filter"] = $this->language->get("button_filter");
        $data["text_gifts_history"] = $this->language->get("text_gifts_history");
        $data["text_no_results"] = $this->language->get("text_no_results");
        $data["text_confirm"] = $this->language->get("text_confirm");
        $url = "";
        if( !isset($this->request->get["filter_order_id"]) ) 
        {
        }
        else
        {
            $url .= "&filter_order_id=" . (int) $this->request->get["filter_order_id"];
        }

        if( !isset($this->request->get["filter_name"]) ) 
        {
        }
        else
        {
            $url .= "&filter_name=" . $this->request->get["filter_name"];
        }

        if( !isset($this->request->get["filter_customer"]) ) 
        {
        }
        else
        {
            $url .= "&filter_customer=" . urlencode(html_entity_decode($this->request->get["filter_customer"], ENT_QUOTES, "UTF-8"));
        }

        if( $order == "ASC" ) 
        {
            $url .= "&order=DESC";
        }
        else
        {
            $url .= "&order=ASC";
        }

        if( !isset($this->request->get["page"]) ) 
        {
        }
        else
        {
            $url .= "&page=" . $this->request->get["page"];
        }

        $data["sort_order_id"] = $this->url->link("extension/module/membership/getGiftsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=order_id" . $url, true);
        $data["sort_name"] = $this->url->link("extension/module/membership/getGiftsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=name" . $url, true);
        $data["sort_customer"] = $this->url->link("extension/module/membership/getGiftsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=customer" . $url, true);
        $data["sort_total"] = $this->url->link("extension/module/membership/getGiftsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=total" . $url, true);
        $data["sort_datetime_added"] = $this->url->link("extension/module/membership/getGiftsHistory", "user_token=" . $this->session->data["user_token"] . "&sort=datetime_added" . $url, true);
        $url = "";
        if( !isset($this->request->get["filter_order_id"]) ) 
        {
        }
        else
        {
            $url .= "&filter_order_id=" . (int) $this->request->get["filter_order_id"];
        }

        if( !isset($this->request->get["filter_name"]) ) 
        {
        }
        else
        {
            $url .= "&filter_name=" . $this->request->get["filter_name"];
        }

        if( !isset($this->request->get["filter_customer"]) ) 
        {
        }
        else
        {
            $url .= "&filter_customer=" . urlencode(html_entity_decode($this->request->get["filter_customer"], ENT_QUOTES, "UTF-8"));
        }

        if( !isset($this->request->get["sort"]) ) 
        {
        }
        else
        {
            $url .= "&sort=" . $this->request->get["sort"];
        }

        if( !isset($this->request->get["order"]) ) 
        {
        }
        else
        {
            $url .= "&order=" . $this->request->get["order"];
        }

        $data["history_total"] = $this->model_extension_module_membership->getTotalGiftHistories();
        $pagination = new Pagination();
        $pagination->total = $data["history_total"];
        $pagination->page = $page;
        $pagination->limit = $this->config->get("config_limit_admin");
        $pagination->url = $this->url->link("extension/module/membership/getGiftsHistory", "user_token=" . $this->session->data["user_token"] . $url . "&page={page}", true);
        $data["pagination"] = $pagination->render();
        $data["results"] = sprintf($this->language->get("text_pagination"), ($data["history_total"] ? ($page - 1) * $this->config->get("config_limit_admin") + 1 : 0), ($data["history_total"] - $this->config->get("config_limit_admin") < ($page - 1) * $this->config->get("config_limit_admin") ? $data["history_total"] : ($page - 1) * $this->config->get("config_limit_admin") + $this->config->get("config_limit_admin")), $data["history_total"], ceil($data["history_total"] / $this->config->get("config_limit_admin")));
        $data["filter_order_id"] = $filter_order_id;
        $data["filter_name"] = $filter_name;
        $data["filter_customer"] = $filter_customer;
        $data["sort"] = $sort;
        $data["order"] = $order;
        $this->response->setOutput($this->load->view("extension/module/membership_gifts_history", $data));
        return NULL;
    }

    public function getCardCode()
    {
        $json = array();
		 $this->load->model("extension/module/membership");
	 
		$json['code'][] = $this->model_extension_module_membership->generateCardCode();
 
        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }

	 
    public function getTotalCustomers()
    {
		
        $this->load->model("extension/module/membership");
        $json = array(  );
        if( isset($this->request->post["generation_mode"]) ) 
        {
            $generation_mode = $this->request->post["generation_mode"];
        }
        else
        {
            $generation_mode = "";
        }

        $settings = $this->config->get("module_membership");
        if( $generation_mode == "customer_group_cards" ) 
        {
            $json["total"] = count($this->model_extension_module_membership->getCustomersWithoutCardsByCustomerGroupId($this->config->get("module_membership_customer_group_id")));
        }
        else
        {
            if( $generation_mode == "appropriate_balance_customers_cards" ) 
            {
                $default_card = $this->config->get("module_membership_default_card");
                if( isset($default_card["discount"][0]["limit"]) ) 
                {
                    $appropriate_balance = $default_card["discount"][0]["limit"];
                }
                else
                {
                    $appropriate_balance = 0;
                }

                $json["total"] = count($this->model_extension_module_membership->getCustomersWithoutCardsByBalance($appropriate_balance));
            }
            else
            {
                if( $generation_mode == "all_customers_cards" ) 
                {
                    $json["total"] = count($this->model_extension_module_membership->getCustomersWithoutCards());
                }

            }

        }

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }

    public function getCardByCustomer()
    {
        $this->load->model("extension/module/membership");
        $json = array(  );
        if( isset($this->request->post["customer_id"]) ) 
        {
            $customer_id = $this->request->post["customer_id"];
        }
        else
        {
            $customer_id = "";
        }

        if( !$customer_id ) 
        {
        }
        else
        {
            $card_info = $this->model_extension_module_membership->getCardByCustomer($customer_id);
            $json["code"] = $card_info["code"];
        }

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }

    public function deleteData()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        $json = array(  );
        if( !(isset($this->request->post["selected"]) && isset($this->request->get["data_type"]) && $this->validate()) ) 
        {
        }
        else
        {
            foreach( $this->request->post["selected"] as $id ) 
            {
                if( $this->request->get["data_type"] == "card" ) 
                {
                    $this->model_extension_module_membership->deleteCard($id);
                }
                else
                {
                    if( $this->request->get["data_type"] == "cardHistory" ) 
                    {
                        $this->model_extension_module_membership->deleteCardHistory($id);
                    }
                    else
                    {
                        if( $this->request->get["data_type"] == "gift" ) 
                        {
                            $this->model_extension_module_membership->deleteGift($id);
                        }
                        else
                        {
                            if( $this->request->get["data_type"] == "giftHistory" ) 
                            {
                                $this->model_extension_module_membership->deleteGiftHistory($id);
                            }

                        }

                    }

                }

                $json["deleted"][] = $id;
            }
            $json["success"] = $this->language->get("text_success_delete");
        }

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }

    public function changeStatus()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        $json = array(  );
        if( !(isset($this->request->post["id"]) && isset($this->request->get["data_type"]) && $this->validate()) ) 
        {
        }
        else
        {
            if( $this->request->get["data_type"] == "card" ) 
            {
                $card = $this->model_extension_module_membership->getCard($this->request->post["id"]);
                if( $this->request->post["change_type"] == "all" ) 
                {
                    $max_status_id = 2;
                }
                else
                {
                    $max_status_id = 1;
                }

                if( $max_status_id <= $card["status"] ) 
                {
                    $new_status_id = 0;
                }
                else
                {
                    $new_status_id = $card["status"] + 1;
                }

                $this->model_extension_module_membership->changeCardStatus($this->request->post["id"], $new_status_id);
            }
            else
            {
                if( $this->request->get["data_type"] == "gift" ) 
                {
                    $gift = $this->model_extension_module_membership->getGift($this->request->post["id"]);
                    $max_status_id = 1;
                    if( $max_status_id <= $gift["status"] ) 
                    {
                        $new_status_id = 0;
                    }
                    else
                    {
                        $new_status_id = $gift["status"] + 1;
                    }

                    $this->model_extension_module_membership->changeGiftStatus($this->request->post["id"], $new_status_id);
                }

            }

            if( $new_status_id == 1 ) 
            {
                $json["new_status_text"] = $this->language->get("text_enabled");
            }
            else
            {
                if( $new_status_id == 2 ) 
                {
                    $json["new_status_text"] = $this->language->get("text_reserved");
                }
                else
                {
                    $json["new_status_text"] = $this->language->get("text_disabled");
                }

            }

            $json["new_status_id"] = $new_status_id;
        }

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }

    public function addCardFromOrder()
    {
        $this->load->language("extension/module/membership");
        $this->load->model("extension/module/membership");
        $json = array(  );
        $settings = $this->config->get("module_membership");
        $card_settings = $this->config->get("module_membership_card");
        $notification_settings = $this->config->get("module_membership_notification");
        if( isset($this->request->post["card"]) ) 
        {
            $code = $this->request->post["code"];
        }
        else
        {
            $code = "";
        }

        if( isset($this->request->post["order_id"]) ) 
        {
            $order_id = $this->request->post["order_id"];
        }
        else
        {
            $order_id = "";
        }

        $card_info = $this->model_extension_module_membership->getCardByCode($code);
        if( !$this->validate() ) 
        {
            $json["error"] = $this->error;
        }
        else
        {
            if( utf8_strlen($code) < (int) $card_settings["code_length"] ) 
            {
                $json["error"] = sprintf($this->language->get("error_code"), $card_settings["code_length"]);
            }
            else
            {
                if( isset($card_info["code"]) && $code == $card_info["code"] && ($card_info["status"] == 2 || $card_info["customer_id"]) ) 
                {
                    $json["error"] = $this->language->get("error_code_exist");
                }
                else
                {
                    $this->load->model("sale/order");
                    $order_info = $this->model_sale_order->getOrder($order_id);
                    if( !$order_info["customer_id"] ) 
                    {
                        $this->load->model("customer/customer");
                        if( !($this->config->get("module_membership_auto_transfer_to_group") && $this->config->get("module_membership_customer_group_id") && $this->config->get("module_membership_customer_group_id") != $order_info["membership_customer_group_id"]) ) 
                        {
                        }
                        else
                        {
                            $order_info["membership_customer_group_id"] = $this->config->get("module_membership_customer_group_id");
                        }

                        $new_customer = array( "membership_customer_group_id" => $order_info["membership_customer_group_id"], "store_id" => $order_info["store_id"], "language_id" => $order_info["language_id"], "firstname" => $order_info["firstname"], "lastname" => $order_info["lastname"], "email" => ($order_info["email"] ? $order_info["email"] : $order_info["telephone"]), "telephone" => $order_info["telephone"], "fax" => "", "password" => $this->model_extension_module_membership->generateCardCode(), "newsletter" => "", "status" => 1, "approved" => 1, "safe" => 1 );
                        $order_info["customer_id"] = $this->model_customer_customer->addCustomer($new_customer);
                        $this->model_extension_module_membership->setCustomerToOrder($order_id, $order_info["customer_id"]);
                        if( !$notification_settings["customer_creation"] ) 
                        {
                        }
                        else
                        {
                            $this->model_extension_module_membership->sendMail("customer_creation", $new_customer);
                        }

                    }
                    else
                    {
                        if( !($this->config->get("module_membership_auto_transfer_to_group") && $this->config->get("module_membership_customer_group_id")) ) 
                        {
                        }
                        else
                        {
                            $this->model_extension_module_membership->setCustomerGroup($order_info["customer_id"], $this->config->get("module_membership_customer_group_id"));
                        }

                    }

                    if( !$card_info ) 
                    {
                        $new_card = $this->config->get("module_membership_default_card");
                        $new_card["code"] = $code;
                        $new_card["customer_id"] = $order_info["customer_id"];
                        $new_card["date_start"] = $this->intervalToDate($new_card["date_start"]);
                        $new_card["date_expiry"] = $this->intervalToDate($new_card["date_expiry"]);
                        $card_info["card_id"] = $this->model_extension_module_membership->addCard($new_card);
                        $this->model_extension_module_membership->editTotalCardCode($order_id, $code);
                        $json["success"] = $this->language->get("text_success_card_added");
                    }
                    else
                    {
                        if( !empty($this->request->post["approve"]) ) 
                        {
                            $this->model_extension_module_membership->setCustomerToCard($card_info["card_id"], $order_info["customer_id"]);
                            $this->model_extension_module_membership->changeCardStatus($card_info["card_id"], 1);
                            $json["success"] = $this->language->get("text_success_card_approve");
                        }
                        else
                        {
                            $this->model_extension_module_membership->setCustomerToCard($card_info["card_id"], $order_info["customer_id"]);
                            $this->model_extension_module_membership->editTotalCardCode($order_id, $code);
                            $json["success"] = $this->language->get("text_success_card_added");
                        }

                    }

                    if( !$notification_settings["card_issuance"] ) 
                    {
                    }
                    else
                    {
                        $this->model_extension_module_membership->sendMail("card_issuance", $card_info["card_id"]);
                    }

                    $json["redirect"] = true;
                }

            }

        }

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }

    public function autocomplete() {
		
        $json = array();
 
        if (isset($this->request->post["cardowner"])) {
			
            $this->load->model("extension/module/membership");
			
			if (isset($this->request->post['cardowner'])) {
				$cardowner = $this->request->post['cardowner'];
			} else {
				$cardowner = '';
			}
		
            $filter_data = array (
				"cardowner" => $cardowner,
				"start" => 0, 
				"limit" => 10
			);
			 
            if (!empty($this->request->post["cardHistory"])) {
                $filter_data["group_by"] = "card_id";
				
                $results = $this->model_extension_module_membership->getCardHistories($filter_data);
            } else {
                $results = $this->model_extension_module_membership->getCustomersWithoutCards($filter_data);
            }

            foreach ($results as $result) {
                if (!$result["cardowner"]) {
 
                } else {
                    $json[] = $result;
                }
            }
			
        } else {
            if(isset($this->request->post["filter_telephone"])) {
                $this->load->model("extension/module/membership");
                $filter_data = array( "filter_telephone" => $this->request->post["filter_telephone"], "start" => 0, "limit" => 10 );
                $results = $this->model_extension_module_membership->getCards($filter_data);
                foreach( $results as $result ) 
                {
                    if( !$result["telephone"] ) 
                    {
                    }
                    else
                    {
                        $json[] = $result;
                    }

                }
            }
            else
            {
                if( isset($this->request->post["filter_code"]) ) 
                {
                    $this->load->model("extension/module/membership");
                    $filter_data = array( "filter_code" => $this->request->post["filter_code"], "start" => 0, "limit" => 10 );
                    if( !empty($this->request->post["cardHistory"]) ) 
                    {
                        $filter_data["group_by"] = "card_id";
                        $json = $this->model_extension_module_membership->getCardHistories($filter_data);
                    }
                    else
                    {
                        if( !empty($this->request->post["freeCard"]) ) 
                        {
                            $filter_data["filter_customer_id"] = 0;
                            $filter_data["group_by"] = "card_id";
                            $json = $this->model_extension_module_membership->getCards($filter_data);
                        }
                        else
                        {
                            $json = $this->model_extension_module_membership->getCards($filter_data);
                        }

                    }

                }
                else
                {
                    if( isset($this->request->post["filter_order_id"]) ) 
                    {
                        $this->load->model("extension/module/membership");
                        $filter_data = array( "filter_order_id" => $this->request->post["filter_order_id"], "group_by" => "order_id", "start" => 0, "limit" => 10 );
                        if( !empty($this->request->post["giftHistory"]) ) 
                        {
                            $json = $this->model_extension_module_membership->getGiftHistories($filter_data);
                        }
                        else
                        {
                            $json = $this->model_extension_module_membership->getCardHistories($filter_data);
                        }

                    }
                    else
                    {
                        if( isset($this->request->post["filter_customer"]) ) 
                        {
                            $this->load->model("extension/module/membership");
                            $filter_data = array( "filter_customer" => $this->request->post["filter_customer"], "group_by" => "customer", "start" => 0, "limit" => 10 );
                            if( !empty($this->request->post["giftHistory"]) ) 
                            {
                                $json = $this->model_extension_module_membership->getGiftHistories($filter_data);
                            }
                            else
                            {
                                $json = $this->model_extension_module_membership->getCardHistories($filter_data);
                            }

                        }
                        else
                        {
                            if( isset($this->request->post["cardowner"]) ) 
                            {
                                $this->load->model("extension/module/membership");
                                $filter_data = array( "filter_cardowner" => $this->request->post["cardowner"], "start" => 0, "limit" => 10 );
                                $json = $this->model_extension_module_membership->getCustomersWithoutCards($filter_data);
                            }
                            else
                            {
                                if( isset($this->request->post["filter_gift_name"]) ) 
                                {
                                    $this->load->model("extension/module/membership");
                                    $this->load->model("localisation/language");
                                    $language = $this->model_localisation_language->getLanguageByCode($this->config->get("config_admin_language"));
                                    $filter_data = array( "filter_name" => $this->request->post["filter_gift_name"], "start" => 0, "limit" => 10 );
                                    if( empty($this->request->post["giftHistory"]) ) 
                                    {
                                        $results = $this->model_extension_module_membership->getGifts($filter_data);
                                    }
                                    else
                                    {
                                        $filter_data["group_by"] = "gift_id";
                                        $results = $this->model_extension_module_membership->getGiftHistories($filter_data);
                                    }

                                    foreach( $results as $result ) 
                                    {
                                        $name = unserialize($result["name"]);
                                        $result["name"] = $name[$language["language_id"]];
                                        $json[] = $result;
                                    }
                                }
                                else
                                {
                                    if( isset($this->request->post["membership_card"]) ) 
                                    {
                                        $this->load->model("extension/module/membership");
                                        $cards = $this->model_extension_module_membership->getCards(array( "filter_code" => $this->request->post["membership_card"] ));
                                        if( !$cards ) 
                                        {
                                        }
                                        else
                                        {
                                            foreach( $cards as $card ) 
                                            {
                                                $discount = $this->model_extension_module_membership->calcDiscount($card);
                                                $json[] = array( "code" => $card["code"], "discount" => ($discount["type"] == "P" ? $discount["value"] . " %" : $this->currency->format($discount["value"], $this->config->get("config_currency"))), "cardowner" => $card["cardowner"], "telephone" => $card["telephone"] );
                                            }
                                        }

                                    }

                                }

                            }

                        }

                    }

                }

            }

        }

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
        return NULL;
    }


    private function intervalToDate($data)
    {
        if( !(isset($data["value"]) && $data["value"]) ) 
        {
            return NULL;
        }

        return date("Y-m-d", strtotime("+" . $data["value"] . " " . $data["type"]));
    }

    private function validate()
    {
        $this->load->language("extension/module/ocmax");
        if( $this->user->hasPermission("modify", "extension/module/membership") ) 
        {
        }
        else
        {
            $this->error["warning"] = $this->language->get("error_permission");
        }

        if( $this->license ) 
        {
        }
        else
        {
            $this->error["warning"] = $this->language->get("error_activate");
        }

        return !$this->error;
    }

    private function validateCardForm()
    {
        $card_settings = $this->config->get("module_membership_card");
        if( !(isset($this->request->post["cardowner"]) && (utf8_strlen($this->request->post["cardowner"]) < 3 || 200 < utf8_strlen($this->request->post["cardowner"]))) ) 
        {
        }
        else
        {
            $this->error["error_cardowner"] = $this->language->get("error_cardowner");
        }

        if( utf8_strlen($this->request->post["code"]) == (int) $card_settings["code_length"] ) 
        {
        }
        else
        {
            $this->error["error_code"] = sprintf($this->language->get("error_code"), $card_settings["code_length"]);
        }

        if( empty($this->request->post["customer_id"]) ) 
        {
        }
        else
        {
            if( !$this->model_customer_customer->getCustomer($this->request->post["customer_id"]) ) 
            {
                $this->error["error_cardowner"] = $this->language->get("error_customer_id_not_exist");
            }
            else
            {
                if( $this->model_extension_module_membership->getCardByCustomer($this->request->post["customer_id"]) && !isset($this->request->get["card_id"]) ) 
                {
                    $this->error["error_cardowner"] = $this->language->get("error_customer_id_card_exist");
                }

            }

        }

        $customer = $this->model_customer_customer->getCustomerByEmail(0);
        if( !(isset($this->request->post["email"]) && isset($this->request->post["customer_id"]) && isset($customer["customer_id"]) && $this->request->post["email"] && $customer["customer_id"] != $this->request->post["customer_id"]) ) 
        {
        }
        else
        {
            $this->error["error_email"] = $this->language->get("error_email");
        }

        $card = $this->model_extension_module_membership->getCardByCode($this->request->post["code"]);
        if( !$card ) 
        {
        }
        else
        {
            if( isset($this->request->get["card_id"]) && !(isset($this->request->get["card_id"]) && $card["card_id"] != $this->request->get["card_id"]) ) 
            {
            }
            else
            {
                $this->error["error_code"] = $this->language->get("error_code_exist");
            }

        }

        return !$this->error;
    }

    public function p()
    {
        $this->pr->purchase();
    }

}


class Pr extends ControllerExtensionModuleMembership
{
    private $apiKey = "0vxkHYTToEpYSLcc";
    private $userId = 6205087;
    private $status = NULL;
    public $errors = array(  );

    public function __construct($registry)
    {
        $this->registry = $registry;
        $this->license = $this->config->get($this->extension . "_license");
        $this->licenseVerification();
    }

    protected function support()
    {
        $this->load->language("extension/module/ocmax");
        $data["action"] = $this->url->link("extension/module/membership/p", "", true);
        $data["user_token"] = $this->session->data["user_token"];
        $data["text_license_request"] = $this->language->get("text_license_request");
        $data["text_license"] = $this->language->get("text_license");
        $data["text_contacts"] = $this->language->get("text_contacts");
        $data["text_about_license"] = $this->language->get("text_about_license");
        $data["text_about_support"] = $this->language->get("text_about_support");
        $data["text_support_skype"] = $this->language->get("text_support_skype");
        $data["text_support_icq"] = $this->language->get("text_support_icq");
        $data["text_support_email"] = $this->language->get("text_support_email");
        $data["text_support_site"] = $this->language->get("text_support_site");
        $data["text_select"] = $this->language->get("text_select");
        $data["entry_email"] = $this->language->get("entry_email");
        $data["entry_domain"] = $this->language->get("entry_domain");
        $data["entry_market"] = $this->language->get("entry_market");
        $data["entry_payment_id"] = $this->language->get("entry_payment_id");
        $data["entry_license"] = $this->language->get("entry_license");
        $data["help_activate"] = $this->language->get("help_activate");
        $data["help_email"] = $this->language->get("help_email");
        $data["help_domain"] = $this->language->get("help_domain");
        $data["help_market"] = $this->language->get("help_market");
        $data["help_payment_id"] = $this->language->get("help_payment_id");
        $data["help_license"] = $this->language->get("help_license");
        $data["help_send"] = $this->language->get("help_send");
        $data["extension"] = $this->extension;
        if( isset($this->request->post[$this->extension . "[license]"]) ) 
        {
            $data["license"] = $this->request->post[$this->extension . "_license"];
        }
        else
        {
            $data["license"] = $this->config->get($this->extension . "_license");
        }

        $data["check_license"] = $this->license;
        $data["status"] = $this->status;
        $data["email"] = $this->config->get("config_email");
        $data["domain"] = str_replace("www.", "", $_SERVER["SERVER_NAME"]);
        return $this->load->view("extension/module/ocmax", $data);
    }

    public function purchase()
    {
        $json = array(  );
        $this->load->language("extension/module/ocmax");
        if( $this->request->get["action"] == "send" ) 
        {
            $json["success"] = $this->language->get("text_success_sent");
            $json["redirect"] = true;
        }
        else
        {
            if( $this->request->get["action"] == "activate" ) 
            {
                $this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `code` = '" . $this->extension . "' AND `key` = '" . $this->extension . "_license'");
                $this->db->query("INSERT INTO `" . DB_PREFIX . "setting` (`code`, `key`, `value`) VALUES ('" . $this->extension . "', '" . $this->extension . "_license', '" . $license . "')");
                $json["success"] = $this->language->get("text_success_activate");
                $json["redirect"] = true;
            }
        }

        $this->response->addHeader("Content-Type: application/json");
        $this->response->setOutput(json_encode($json));
    }

    public function licenseVerification()
    {
        $verification = 'nulled';

        $this->registry->set("license", $verification);
    }

    private function pRequest($data = array(  ))
    {
        return array('status' => 200);
    }

    private function strippadding($string)
    {
        $slast = ord(substr($string, -1));
        $slastc = chr($slast);
        $pcheck = substr($string, 0 - $slast);
        if( preg_match("47" . $slastc . "123" . $slast . "}/", $string) ) 
        {
            $string = substr($string, 0, strlen($string) - $slast);
            return $string;
        }

        return false;
    }

    private function getDomain()
    {
        if( HTTP_SERVER ) 
        {
            $url = parse_url(HTTP_SERVER);
            $d_1 = str_replace("www.", "", $url["host"]);
        }
        else
        {
            if( HTTPS_SERVER ) 
            {
                $url = parse_url(HTTPS_SERVER);
                $d_1 = str_replace("www.", "", $url["host"]);
            }
            else
            {
                $d_1 = "";
            }

        }

        $d_2 = str_replace("www.", "", getenv("SERVER_NAME"));
        $d_3 = str_replace("www.", "", getenv("HTTP_HOST"));
        return ($d_1 == $d_2 && $d_2 == $d_3 ? $d_1 : $d_1 . "-" . $d_2 . "-" . $d_3);
    }

}
