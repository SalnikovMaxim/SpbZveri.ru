<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/extension/quickcheckout/checkout.twig */
class __TwigTemplate_70ba7c351fc26a32484d7e86e128c93d83d7c9f836ee4e13fd7abae4ccf59803 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "

<div class=\"container\">
  <div itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\" class=\"breadcrumb\">
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 6
            echo "\t\t<span itemscope=\"\" itemprop=\"itemListElement\" itemtype=\"http://schema.org/ListItem\" class=\"breadcrumb-item\">
\t\t\t";
            // line 7
            if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 8
                echo "\t\t\t<a itemprop=\"item\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
                echo "\">
\t\t\t\t<span itemprop=\"name\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                echo "</span>
\t\t\t\t<meta itemprop=\"position\" content=\"";
                // line 10
                echo ($context["key"] + 1);
                echo "\">
\t\t\t</a>
\t\t\t";
            } else {
                // line 13
                echo "\t\t\t<a rel=\"nofollow\" itemprop=\"item\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
                echo "\">
\t\t\t\t<span itemprop=\"name\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
                echo "</span>
\t\t\t\t<meta itemprop=\"position\" content=\"";
                // line 15
                echo ($context["key"] + 1);
                echo "\">
\t\t\t</a>
\t\t\t";
            }
            // line 18
            echo "\t\t</span>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</div>
\t <h1 class=\"page-title\">";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t  
  <div class=\"row\" style=\"margin-left: -15px; margin-right: -15px;\">";
        // line 23
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            echo "   
    ";
            // line 29
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\" \">";
        echo ($context["content_top"] ?? null);
        echo "
     
\t  ";
        // line 33
        if (false) {
            // line 34
            echo "\t  <!-- FontAwesome for themes that require it -->
\t  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
\t  ";
        }
        // line 37
        echo "\t  <div id=\"warning-messages\">
\t  \t";
        // line 38
        if (($context["error_warning"] ?? null)) {
            // line 39
            echo "\t\t  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t  </div>
\t\t";
        }
        // line 43
        echo "\t  </div>
\t  <div id=\"success-messages\"></div>
\t  ";
        // line 45
        if (($context["mobile_stylesheet"] ?? null)) {
            // line 46
            echo "\t  <link rel=\"stylesheet\" media=\"screen and (min-width: 701px) and (max-width: 99999px)\" href=\"";
            echo ($context["stylesheet"] ?? null);
            echo "\" />
\t  <link rel=\"stylesheet\" media=\"screen and (min-width: 1px) and (max-width: 700px)\" href=\"";
            // line 47
            echo ($context["mobile_stylesheet"] ?? null);
            echo "\" />
\t  ";
        } else {
            // line 48
            echo "   
\t  <link rel=\"stylesheet\" href=\"";
            // line 49
            echo ($context["stylesheet"] ?? null);
            echo "\" />
\t  ";
        }
        // line 51
        echo "
\t  ";
        // line 52
        if (($context["html_header"] ?? null)) {
            echo " 
\t  ";
            // line 53
            echo ($context["html_header"] ?? null);
            echo " 
\t  ";
        }
        // line 54
        echo " 

\t  <div id=\"quickcheckoutconfirm\">
\t  \t";
        // line 57
        if ((($context["quickcheckout_layout"] ?? null) == "4")) {
            echo " 
\t\t\t<div class=\"qc-col-0\">
\t\t\t\t";
            // line 59
            if (( !($context["logged"] ?? null) && ($context["login_module"] ?? null))) {
                echo " 
\t\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 60
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["step"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["login"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["column"] ?? null) : null);
                echo "\" data-row=\"";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["step"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["login"] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["row"] ?? null) : null);
                echo "\">
\t\t\t\t\t  <div id=\"login-box\">
\t\t\t\t\t\t<div id=\"checkout\">
\t\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-sign-in\"></i> ";
                // line 63
                echo ($context["text_checkout_option"] ?? null);
                echo "</div>
\t\t\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 64
                echo ($context["login"] ?? null);
                echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"or\">";
                // line 66
                echo ($context["text_or"] ?? null);
                echo "</div>
\t\t\t\t\t </div>
\t\t\t\t\t </div>
\t\t\t\t";
            }
            // line 69
            echo " 
\t\t\t\t
\t\t\t\t<div class=\"qc-step\" data-col=\"";
            // line 71
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["step"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["payment_address"] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["column"] ?? null) : null);
            echo "\" data-row=\"";
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["step"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["payment_address"] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["row"] ?? null) : null);
            echo "\">
\t\t\t\t\t<div id=\"payment-address\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
            // line 73
            echo (( !($context["logged"] ?? null)) ? (($context["text_checkout_account"] ?? null)) : (($context["text_checkout_payment_address"] ?? null)));
            echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\">";
            // line 74
            echo ((($context["guest"] ?? null)) ? (($context["guest"] ?? null)) : (($context["payment_address"] ?? null)));
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 78
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\t<div class=\"qc-step ";
                // line 79
                if ( !($context["show_shipping_address"] ?? null)) {
                    echo "hidden";
                }
                echo "\" data-col=\"";
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["step"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["shipping_address"] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["column"] ?? null) : null);
                echo "\" data-row=\"";
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["step"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["shipping_address"] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["row"] ?? null) : null);
                echo "\">
\t\t\t\t\t<div id=\"shipping-address\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
                // line 81
                echo ($context["text_checkout_shipping_address"] ?? null);
                echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 82
                echo ((($context["shipping_address"] ?? null)) ? (($context["shipping_address"] ?? null)) : (""));
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 85
            echo " 

\t\t\t\t";
            // line 87
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\t<div class=\"qc-step ";
                // line 88
                if ( !($context["shipping_module"] ?? null)) {
                    echo "hidden";
                }
                echo "\" data-col=\"";
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["step"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["shipping_method"] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["column"] ?? null) : null);
                echo "\" data-row=\"";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["step"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["shipping_method"] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["row"] ?? null) : null);
                echo "\">
\t\t\t\t\t<div id=\"shipping-method\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-truck\"></i> ";
                // line 90
                echo ($context["text_checkout_shipping_method"] ?? null);
                echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 95
            echo "
\t\t\t\t<div class=\"qc-step ";
            // line 96
            if ( !($context["payment_module"] ?? null)) {
                echo "hidden";
            }
            echo "\" data-col=\"";
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["step"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["payment_method"] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["column"] ?? null) : null);
            echo "\" data-row=\"";
            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["step"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["payment_method"] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["row"] ?? null) : null);
            echo "\">
\t\t\t\t\t<div id=\"payment-method\">
\t\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-credit-card\"></i> ";
            // line 98
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "</div>
\t\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 103
            if (($context["cart_module"] ?? null)) {
                echo " 
\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 104
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["step"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["cart"] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["column"] ?? null) : null);
                echo "\" data-row=\"";
                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["step"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["cart"] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["row"] ?? null) : null);
                echo "\">
\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t</div> 
\t\t\t\t";
            }
            // line 110
            echo "
\t\t\t\t";
            // line 111
            if (((($context["voucher_module"] ?? null) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
                echo " 
\t\t\t\t<div class=\"qc-step\" data-col=\"";
                // line 112
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["step"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["coupons"] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["column"] ?? null) : null);
                echo "\" data-row=\"";
                echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["step"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["coupons"] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["row"] ?? null) : null);
                echo "\">
\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                // line 114
                echo ($context["voucher"] ?? null);
                echo "</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t
\t\t\t\t<div class=\"qc-step\" data-col=\"";
            // line 119
            echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["step"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["confirm"] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["column"] ?? null) : null);
            echo "\" data-row=\"";
            echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["step"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["confirm"] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["row"] ?? null) : null);
            echo "\">
\t\t\t\t\t<div id=\"terms\">
\t\t\t\t\t\t<div class=\"quickcheckout-content text-right\">";
            // line 121
            echo ($context["terms"] ?? null);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"qc-col-1 col-md-";
            // line 126
            echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["column"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[1] ?? null) : null);
            echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-";
            // line 128
            echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["column"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[4] ?? null) : null);
            echo "\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"qc-col-2 col-md-";
            // line 130
            if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["column"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[4] ?? null) : null)) {
                echo twig_round((((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["column"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[2] ?? null) : null) / (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["column"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[4] ?? null) : null)) * 12), 0, "floor");
            } else {
                echo "0";
            }
            echo "\">
\t\t    \t\t\t</div>
\t\t    \t\t\t<div class=\"qc-col-3 col-md-";
            // line 132
            if ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["column"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[4] ?? null) : null)) {
                echo (12 - twig_round((((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["column"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[2] ?? null) : null) / (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["column"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[4] ?? null) : null)) * 12), 0, "floor"));
            } else {
                echo "0";
            }
            echo "\">
\t\t    \t\t\t</div>
\t\t\t\t\t\t<div class=\"qc-col-4 col-md-12\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<script>
\t\t\t\$(function() {
\t\t\t\t\$('.qc-step').each(function(){
\t\t\t\t\t\$(this).appendTo('.qc-col-' + \$(this).attr('data-col'));\t
\t\t\t\t})
\t\t\t\t\$('.qc-step').tsort({attr:'data-row'});
\t\t\t})
\t\t\t</script>

\t\t";
        } else {
            // line 150
            echo "
\t\t\t<div id=\"quickcheckout-disable\">
\t\t\t  ";
            // line 152
            if (( !($context["logged"] ?? null) && ($context["login_module"] ?? null))) {
                echo " 
\t\t\t  <div class=\"quickcheckoutmid\" id=\"login-box\">
\t\t\t\t<div id=\"checkout\">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-sign-in\"></i> ";
                // line 155
                echo ($context["text_checkout_option"] ?? null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 156
                echo ($context["login"] ?? null);
                echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"or\">";
                // line 158
                echo ($context["text_or"] ?? null);
                echo "</div>
\t\t\t  </div>
\t\t\t  ";
            }
            // line 160
            echo " 
\t\t\t  <div class=\"quickcheckoutleft\">
\t\t\t\t<div id=\"payment-address\">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
            // line 163
            echo (( !($context["logged"] ?? null)) ? (($context["text_checkout_account"] ?? null)) : (($context["text_checkout_payment_address"] ?? null)));
            echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
            // line 164
            echo ((($context["guest"] ?? null)) ? (($context["guest"] ?? null)) : (($context["payment_address"] ?? null)));
            echo "</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 166
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\t<div id=\"shipping-address\" ";
                // line 167
                if ( !($context["show_shipping_address"] ?? null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-user\"></i> ";
                // line 168
                echo ($context["text_checkout_shipping_address"] ?? null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\">";
                // line 169
                echo ((($context["shipping_address"] ?? null)) ? (($context["shipping_address"] ?? null)) : (""));
                echo "</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 171
            echo " 
\t\t\t  </div>
\t\t\t  <div class=\"quickcheckoutright\">
\t\t\t\t";
            // line 174
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\t<div id=\"shipping-method\" ";
                // line 175
                if ( !($context["shipping_module"] ?? null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-truck\"></i> ";
                // line 176
                echo ($context["text_checkout_shipping_method"] ?? null);
                echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t<div id=\"payment-method\" ";
            if ( !($context["payment_module"] ?? null)) {
                echo "class=\"hidden\"";
            }
            echo ">
\t\t\t\t  <div class=\"quickcheckout-heading\"><i class=\"fa fa-credit-card\"></i> ";
            // line 181
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "</div>
\t\t\t\t  <div class=\"quickcheckout-content\"></div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  ";
            // line 185
            if ((($context["quickcheckout_layout"] ?? null) == "2")) {
                echo " 
\t\t\t\t<div class=\"quickcheckoutleft\">
\t\t\t\t  ";
                // line 187
                if (($context["cart_module"] ?? null)) {
                    echo " 
\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t  ";
                }
                // line 192
                echo "\t\t\t\t</div>
\t\t\t\t<div style=\"clear:right;\"></div>
\t\t\t\t<div class=\"quickcheckoutright\">
\t\t\t\t  ";
                // line 195
                if (((($context["voucher_module"] ?? null) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
                    echo " 
\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                    // line 197
                    echo ($context["voucher"] ?? null);
                    echo "</div>
\t\t\t\t  </div>
\t\t\t\t  ";
                }
                // line 200
                echo "\t\t\t\t</div>
\t\t\t  ";
            } elseif (((            // line 201
($context["quickcheckout_layout"] ?? null) == "1") || (($context["quickcheckout_layout"] ?? null) == "3"))) {
                // line 202
                echo "\t\t\t\t";
                if ((((($context["cart_module"] ?? null) || ($context["voucher_module"] ?? null)) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
                    // line 203
                    echo "\t\t\t\t<div class=\"quickcheckoutleft extra-width\">
\t\t\t\t  ";
                    // line 204
                    if (($context["cart_module"] ?? null)) {
                        // line 205
                        echo "\t\t\t\t  <div id=\"cart1\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;\"></div>
\t\t\t\t  </div>
\t\t\t\t  ";
                    }
                    // line 209
                    echo "\t\t\t\t  ";
                    if (((($context["voucher_module"] ?? null) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
                        // line 210
                        echo "\t\t\t\t  <div id=\"voucher\">
\t\t\t\t\t<div class=\"quickcheckout-content\" style=\"border:none; padding: 0px;overflow: hidden;\">";
                        // line 211
                        echo ($context["voucher"] ?? null);
                        echo "</div>
\t\t\t\t  </div>
\t\t\t\t  ";
                    }
                    // line 214
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 215
                echo " 
\t\t\t  ";
            }
            // line 217
            echo "\t\t\t  <div style=\"clear: both;\"></div>
\t\t\t</div>

\t\t\t<div class=\"quickcheckoutmid\">
\t\t\t  <div id=\"terms\">
\t\t\t\t<div class=\"quickcheckout-content text-right\">";
            // line 222
            echo ($context["terms"] ?? null);
            echo "</div>
\t\t\t  </div>
\t\t\t</div>

\t\t";
        }
        // line 227
        echo "
\t  </div>

\t  ";
        // line 230
        if (($context["html_footer"] ?? null)) {
            // line 231
            echo "\t  ";
            echo ($context["html_footer"] ?? null);
            echo "
\t  ";
        }
        // line 233
        echo "
\t";
        // line 234
        echo ($context["content_bottom"] ?? null);
        echo "</div>
  ";
        // line 235
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

";
        // line 238
        if (($context["custom_css"] ?? null)) {
            // line 239
            echo "<style type=\"text/css\">
";
            // line 240
            echo ($context["custom_css"] ?? null);
            echo "
</style>
";
        }
        // line 242
        echo " 
<script type=\"text/javascript\"><!--
";
        // line 244
        if (($context["load_screen"] ?? null)) {
            echo " 
\$(window).load(function() {
    \$.blockUI({
\t\tmessage: '<h1 style=\"color:#ffffff;\">";
            // line 247
            echo ($context["text_please_wait"] ?? null);
            echo "</h1>',
\t\tcss: {
\t\t\tborder: 'none',
\t\t\tpadding: '15px',
\t\t\tbackgroundColor: '#000000',
\t\t\t'-webkit-border-radius': '10px',
\t\t\t'-moz-border-radius': '10px',
\t\t\t'-khtml-border-radius': '10px',
\t\t\t'border-radius': '10px',
\t\t\topacity: .8,
\t\t\tcolor: '#ffffff'
\t\t}
\t});
\t
\tsetTimeout(function() {
\t\t\$.unblockUI();
\t}, 2000);
});
";
        }
        // line 265
        echo " 

";
        // line 267
        if ( !($context["logged"] ?? null)) {
            // line 268
            echo "\t";
            if (($context["save_data"] ?? null)) {
                // line 269
                echo "\t// Save form data
\t\$(document).on('change', '#payment-address input[type=\\'text\\'], #payment-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=payment',
\t\t\ttype: 'post',
\t\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 280
                if (($context["debug"] ?? null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 284
                echo " 
\t\t});
\t});

\t\$(document).on('change', '#shipping-address input[type=\\'text\\'], #shipping-address select', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/save&type=shipping',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'password\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t// No action needed
\t\t\t},
\t\t\t";
                // line 298
                if (($context["debug"] ?? null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 302
                echo " 
\t\t});
\t});
\t";
            }
            // line 305
            echo " 
\t
\t";
            // line 307
            if (($context["login_module"] ?? null)) {
                echo " 
\t// Login Form Clicked
\t\$(document).on('click', '#button-login', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/login/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#checkout #login :input'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-login').prop('disabled', true);
\t\t\t\t\$('#button-login').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-login').prop('disabled', false);
\t\t\t\t\$('#button-login').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t},
\t\t\t";
                // line 337
                if (($context["debug"] ?? null)) {
                    echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
                }
                // line 341
                echo " 
\t\t});
\t});
\t";
            }
            // line 344
            echo " 

// Validate Register
function validateRegister() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/register/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 374
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').after('<div class=\"text-danger\">' + json['error']['password'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').after('<div class=\"text-danger\">' + json['error']['confirm'] + '</div>');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 382
            echo " 
\t\t\t\t";
            // line 383
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tif (json['error']['password']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'password\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['confirm']) {
\t\t\t\t\t\t\$('#payment-address input[name=\\'confirm\\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 391
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 393
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (shipping_address) {
\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t} else {
\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 401
                echo "  
\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 403
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 406
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 410
            echo " 
\t});
}

// Validate Guest Payment Address
function validateGuestAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {\t\t
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 442
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 452
            echo " 
\t\t\t\t";
            // line 453
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 459
            echo " 
\t\t\t} else {
\t\t\t\tvar create_account = \$('#payment-address input[name=\\'create_account\\']:checked').val();

\t\t\t\t";
            // line 463
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').val();

\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tif (shipping_address) {
\t\t\t\t\t\tvalidateShippingMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\tvalidateGuestShippingAddress();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t";
            } else {
                // line 475
                echo "   
\t\t\t\tif (create_account) {
\t\t\t\t\tvalidateRegister();
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t\t";
            }
            // line 482
            echo "\t\t\t}
\t\t},
\t\t";
            // line 484
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 488
            echo " 
\t});
}

// Validate Guest Shipping Address
function validateGuestShippingAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/guest_shipping/validate',
\t\ttype: 'post',
\t\tdata: \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address select, #shipping-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 520
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 530
            echo " 
\t\t\t\t";
            // line 531
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 537
            echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
            // line 542
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 546
            echo " 
\t});
}

// Confirm Payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidateGuestAddress();
});
";
        } else {
            // line 559
            echo "   
// Validate Payment Address
function validatePaymentAddress() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_address/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'password\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
            // line 588
            if (($context["text_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 598
            echo " 
\t\t\t\t";
            // line 599
            if (($context["highlight_error"] ?? null)) {
                echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
            }
            // line 605
            echo " 
\t\t\t} else {
\t\t\t\t";
            // line 607
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\t\tvalidateShippingAddress();
\t\t\t\t";
            } else {
                // line 609
                echo "   
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t";
            }
            // line 612
            echo "\t\t\t}
\t\t},
\t\t";
            // line 614
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 618
            echo " 
\t});
}

";
            // line 622
            if (($context["shipping_required"] ?? null)) {
                echo " 
// Validate Shipping Address
function validateShippingAddress() {
\tvar payment_mode = \$('input[name=\"payment_address\"]:checked').val();
\tif (payment_mode == 'new') {
\t\t";
                // line 627
                if ((($context["logged"] ?? null) &&  !($context["show_shipping_address"] ?? null))) {
                    // line 628
                    echo "\t\t\tvar addressType = '#payment-address';
\t\t\tvar shipping_mode = 'input[name=\"shipping_address\"]:checked, ';
\t\t";
                } else {
                    // line 631
                    echo "\t\t\tvar addressType = '#shipping-address';
\t\t\tvar shipping_mode = '';
\t\t";
                }
                // line 634
                echo "\t} else {
\t\tvar addressType = '#shipping-address';
\t\tvar shipping_mode = '';
\t}
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/shipping_address/validate',
\t\ttype: 'post',
\t\tdata: \$(shipping_mode + addressType +' input[type=\\'text\\'], '+addressType +' input[type=\\'password\\'], '+addressType +' input[type=\\'checkbox\\']:checked, '+addressType +' input[type=\\'radio\\']:checked, '+addressType +' select, '+addressType +' textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}

\t\t\t\t";
                // line 664
                if (($context["text_error"] ?? null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));
\t\t\t\t\t\t
\t\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 674
                echo " 
\t\t\t\t";
                // line 675
                if (($context["highlight_error"] ?? null)) {
                    echo " 
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\t\t\$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 681
                echo " 
\t\t\t} else {
\t\t\t\tvalidateShippingMethod();
\t\t\t}
\t\t},
\t\t";
                // line 686
                if (($context["debug"] ?? null)) {
                    echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
                }
                // line 690
                echo " 
\t});
}
";
            }
            // line 693
            echo " 

// Confirm payment
\$(document).on('click', '#button-payment-method', function() {
\t\$('#button-payment-method').prop('disabled', true);
\t\$('#button-payment-method').button('loading');
\t
\t\$('#button-payment-method').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t
\tvalidatePaymentAddress();
});
";
        }
        // line 704
        echo "// Close if logged php

// Payment Method
function reloadPaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method',
\t\ttype: 'post',
\t\tdata: \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #payment-method input[type=\\'text\\'], #payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 715
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 718
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 722
        if (($context["load_screen"] ?? null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 724
        echo " 
\t\t},
\t\t";
        // line 726
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 730
        echo " 
\t});
}

function reloadPaymentMethodById(address_id) {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method&address_id=' + address_id,
\t\ttype: 'post',
\t\tdata: \$('#payment-method input[type=\\'checkbox\\']:checked, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'hidden\\'], #payment-method select, #payment-method textarea'),
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\tmoduleLoad(\$('#payment-method'), ";
        // line 742
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#payment-method'), ";
        // line 745
        echo ($context["loading_display"] ?? null);
        echo " );
\t\t\t
\t\t\t\$('#payment-method .quickcheckout-content').html(html);
\t\t\t
\t\t\t";
        // line 749
        if (($context["load_screen"] ?? null)) {
            echo " 
\t\t\t\$.unblockUI();
\t\t\t";
        }
        // line 751
        echo " 
\t\t},
\t\t";
        // line 753
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 757
        echo " 
\t});
}

// Validate Payment Method
function validatePaymentMethod() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/payment_method/validate',
\t\ttype: 'post',
\t\tdata: \$('#payment-method select, #payment-method input[type=\\'radio\\']:checked, #payment-method input[type=\\'checkbox\\']:checked, #payment-method textarea'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tvalidateTerms();
\t\t\t}
\t\t},
\t\t";
        // line 792
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 796
        echo " 
\t});
}

// Shipping Method
";
        // line 801
        if (($context["shipping_required"] ?? null)) {
            echo " 
\tfunction reloadShippingMethod(type) {
\t\tif (type == 'payment') {
\t\t\tvar post_data = \$('#payment-address input[type=\\'text\\'], #payment-address input[type=\\'checkbox\\']:checked, #payment-address input[type=\\'radio\\']:checked, #payment-address input[type=\\'hidden\\'], #payment-address select, #payment-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t} else {
\t\t\tvar post_data = \$('#shipping-address input[type=\\'text\\'], #shipping-address input[type=\\'checkbox\\']:checked, #shipping-address input[type=\\'radio\\']:checked, #shipping-address input[type=\\'hidden\\'], #shipping-address select, #shipping-address textarea, #shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea');
\t\t}
\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method',
\t\t\ttype: 'post',
\t\t\tdata: post_data,
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 816
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 819
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 823
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 827
            echo " 
\t\t});
\t}

\tfunction reloadShippingMethodById(address_id) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method&address_id=' + address_id,
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method input[type=\\'text\\'], #shipping-method input[type=\\'checkbox\\']:checked, #shipping-method input[type=\\'radio\\']:checked, #shipping-method input[type=\\'hidden\\'], #shipping-method select, #shipping-method textarea'),
\t\t\tdataType: 'html',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\tmoduleLoad(\$('#shipping-method'), ";
            // line 839
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\tmoduleLoaded(\$('#shipping-method'), ";
            // line 842
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t\t
\t\t\t\t\$('#shipping-method .quickcheckout-content').html(html);
\t\t\t},
\t\t\t";
            // line 846
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 850
            echo " 
\t\t});
\t}

\t// Validate Shipping Method
\tfunction validateShippingMethod() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/shipping_method/validate',
\t\t\ttype: 'post',
\t\t\tdata: \$('#shipping-method select, #shipping-method input[type=\\'radio\\']:checked, #shipping-method textarea, #shipping-method input[type=\\'text\\']'),
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert, .text-danger').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t} else if (json['error']) {
\t\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t\t
\t\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t\t
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tvalidatePaymentMethod();
\t\t\t\t}
\t\t\t},
\t\t\t";
            // line 885
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
            }
            // line 889
            echo " 
\t\t});
\t}
";
        }
        // line 892
        echo " 

// Validate confirm button
function validateTerms() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/terms/validate',
\t\ttype: 'post',
\t\tdata: \$('#terms input[type=\\'checkbox\\']:checked'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#button-payment-method').prop('disabled', false);
\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\$('#terms input[type=\\'checkbox\\']').prop('checked', false);
\t\t\t\t
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t}
\t\t\t} else {
\t\t\t\tloadConfirm();
\t\t\t}
\t\t},
\t\t";
        // line 925
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 929
        echo " 
\t});
}

// Load confirm
function loadConfirm() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/confirm',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t";
        // line 940
        if (($context["confirmation_page"] ?? null)) {
            echo " 
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t
\t\t\t\t";
            // line 943
            if (($context["slide_effect"] ?? null)) {
                echo " 
\t\t\t\t\$('#quickcheckoutconfirm').slideUp('slow');
\t\t\t\t";
            } else {
                // line 945
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').html('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 947
            echo " 
\t\t\t
\t\t\t\t";
            // line 949
            if (($context["load_screen"] ?? null)) {
                echo " 
\t\t\t\t\$.blockUI({
\t\t\t\t\tmessage: '<h1 style=\"color:#ffffff;\">";
                // line 951
                echo ($context["text_please_wait"] ?? null);
                echo "</h1>',
\t\t\t\t\tcss: {
\t\t\t\t\t\tborder: 'none',
\t\t\t\t\t\tpadding: '15px',
\t\t\t\t\t\tbackgroundColor: '#000000',
\t\t\t\t\t\t'-webkit-border-radius': '10px',
\t\t\t\t\t\t'-moz-border-radius': '10px',
\t\t\t\t\t\t'-khtml-border-radius': '10px',
\t\t\t\t\t\t'border-radius': '10px',
\t\t\t\t\t\topacity: .8,
\t\t\t\t\t\tcolor: '#ffffff'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t";
            }
            // line 964
            echo " 
\t\t\t";
        }
        // line 966
        echo "\t\t},
\t\tsuccess: function(html) {
\t\t\t";
        // line 968
        if (($context["confirmation_page"] ?? null)) {
            echo " 
\t\t\t\t";
            // line 969
            if (($context["load_screen"] ?? null)) {
                echo " 
\t\t\t\t\$.unblockUI();
\t\t\t\t";
            }
            // line 971
            echo " 
\t\t\t\t
\t\t\t\t\$('#quickcheckoutconfirm').hide().html(html);
\t\t\t\t
\t\t\t\t";
            // line 975
            if ( !($context["auto_submit"] ?? null)) {
                echo " 
\t\t\t\t\t";
                // line 976
                if (($context["slide_effect"] ?? null)) {
                    echo " 
\t\t\t\t\t\$('#quickcheckoutconfirm').slideDown('slow');
\t\t\t\t\t";
                } else {
                    // line 978
                    echo "   
\t\t\t\t\t\$('#quickcheckoutconfirm').show();
\t\t\t\t\t";
                }
                // line 980
                echo " 
\t\t\t\t";
            } else {
                // line 981
                echo "   
\t\t\t\t\$('#quickcheckoutconfirm').after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 984
            echo "\t\t\t";
        } else {
            echo "   
\t\t\t\t\$('#terms .terms').hide();
\t\t\t\t\$('#payment').html(html).slideDown('fast');
\t\t\t\t
\t\t\t\t";
            // line 988
            if (($context["auto_submit"] ?? null)) {
                echo " 
\t\t\t\t\$('#payment').hide().after('<div class=\"text-center\"><i class=\"fa fa-spinner fa-spin fa-5x\"></i></div>');
\t\t\t\t";
            }
            // line 990
            echo " 
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: \$('#terms').offset().top }, 'slow');
\t\t\t\t
\t\t\t\tdisableCheckout();
\t\t\t";
        }
        // line 996
        echo "\t\t},
\t\t";
        // line 997
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 1001
        echo " 
\t});
}

// Load cart
";
        // line 1006
        if (($context["cart_module"] ?? null)) {
            echo " 
function loadCart() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart',
\t\tdataType: 'html',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('.tooltip').remove();
\t\t\t
\t\t\tmoduleLoad(\$('#cart1'), ";
            // line 1015
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t},
\t\tsuccess: function(html) {
\t\t\tmoduleLoaded(\$('#cart1'), ";
            // line 1018
            echo ($context["loading_display"] ?? null);
            echo " );
\t\t\t
\t\t\t\$('#cart1 .quickcheckout-content').html(html);
\t\t},
\t\t";
            // line 1022
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1026
            echo " 
\t});
}

\t";
            // line 1030
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\$(document).ready(function(){
\t\tloadCart();
\t});
\t";
            }
            // line 1034
            echo " 
";
        }
        // line 1035
        echo " 

";
        // line 1037
        if (((($context["voucher_module"] ?? null) || ($context["coupon_module"] ?? null)) || ($context["reward_module"] ?? null))) {
            echo " 
// Validate Coupon
\$(document).on('click', '#button-coupon', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateCoupon',
\t\ttype: 'post',
\t\tdata: \$('#coupon-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').prop('disabled', true);
\t\t\t\$('#button-coupon').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').prop('disabled', false);
\t\t\t\$('#coupon-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1069
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1073
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1075
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1079
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1081
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1083
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1090
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1096
                echo " 
\t\t\t";
            }
            // line 1097
            echo " 
\t\t\t
\t\t\t";
            // line 1099
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1101
            echo " 
\t\t},
\t\t";
            // line 1103
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1107
            echo " 
\t});
});

\$(document).on('click', '#button-voucher', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateVoucher',
\t\ttype: 'post',
\t\tdata: \$('#voucher-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').prop('disabled', true);
\t\t\t\$('#button-voucher').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').prop('disabled', false);
\t\t\t\$('#voucher-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1141
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1145
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1147
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1151
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1153
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1155
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1162
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1168
                echo " 
\t\t\t";
            }
            // line 1170
            echo "\t\t\t
\t\t\t";
            // line 1171
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1173
            echo " 
\t\t},
\t\t";
            // line 1175
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1179
            echo " 
\t});
});

\$(document).on('click', '#button-reward', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/voucher/validateReward',
\t\ttype: 'post',
\t\tdata: \$('#reward-content :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').prop('disabled', true);
\t\t\t\$('#button-reward').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').prop('disabled', false);
\t\t\t\$('#reward-content .fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\t
\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\tif (json['success']) {
\t\t\t\t\$('#success-messages').prepend('<div class=\"alert alert-success\" style=\"display:none;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t
\t\t\t\t\$('.alert-success').fadeIn('slow');
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#warning-messages').prepend('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');

\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t}

\t\t\t";
            // line 1213
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1217
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t";
                }
                // line 1219
                echo " 
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t
\t\t\t\t\t";
                // line 1223
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t";
                }
                // line 1225
                echo " 
\t\t\t\t}
\t\t\t";
            } else {
                // line 1227
                echo "   
\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadPaymentMethod();
\t\t\t\t} else {
\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
                // line 1234
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t} else {
\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t}
\t\t\t\t";
                }
                // line 1240
                echo " 
\t\t\t";
            }
            // line 1242
            echo "\t\t\t
\t\t\t";
            // line 1243
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\tloadCart();
\t\t\t";
            }
            // line 1245
            echo " 
\t\t},
\t\t";
            // line 1247
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1251
            echo " 
\t});
});
";
        }
        // line 1255
        echo "
";
        // line 1256
        if (($context["shipping_required"] ?? null)) {
            echo " 
\$(document).on('focusout', 'input[name=\\'postcode\\']', function() {
\t";
            // line 1258
            if ( !($context["logged"] ?? null)) {
                echo " 
\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\treloadShippingMethod('payment');
\t} else {
\t\treloadShippingMethod('shipping');
\t}
\t";
            } else {
                // line 1264
                echo "   
\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\treloadShippingMethod('shipping');
\t} else {
\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t}
\t";
            }
            // line 1270
            echo " 
});
";
        }
        // line 1273
        echo "
";
        // line 1274
        if (($context["highlight_error"] ?? null)) {
            echo " 
\t\$(document).on('keydown', 'input', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
\t\$(document).on('change', 'select', function() {
\t\t\$(this).css('background', '').css('border', '');
\t\t
\t\t\$(this).siblings('.text-danger').remove();
\t});
";
        }
        // line 1285
        echo " 

";
        // line 1287
        if (($context["edit_cart"] ?? null)) {
            echo " 
\$(document).on('click', '.button-update', function() {

\tvar quantity = \$(this).parents('.quantity').find('input.qc-product-qantity');
\tif (quantity.length){
\t\tif (\$(this).data('type')=='increase') {
\t\t\tquantity.val(parseInt(quantity.val())+1);
\t\t} else if (\$(this).data('type')=='decrease') {
\t\t\tquantity.val(parseInt(quantity.val())-1);
\t\t}
\t}
\t
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update',
\t\ttype: 'post',
\t\tdata: \$('#cart1 :input'),
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t//\$('#cart1 .button-update').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\tif (json['error']['stock']) {
\t\t\t\t\t\$('#button-payment-method').attr(\"disabled\", true);
\t\t\t\t} else if (json['error']['warning']) {
\t\t\t\t\t\t\$('#warning-messages').html('<div class=\"alert alert-danger\" style=\"display: none;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '</div>');
\t\t\t\t\t\t\$('.alert-danger').fadeIn('slow');
\t\t\t\t\t\t\$('#button-payment-method').attr(\"disabled\", true);
\t\t\t\t} else {
\t\t\t\t\t\$('#warning-messages').html('');
\t\t\t\t\t\$('#button-payment-method').removeAttr(\"disabled\");
\t\t\t\t}

\t\t\t\t";
            // line 1323
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1327
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1329
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1333
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1335
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1337
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1344
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1350
                echo " 
\t\t\t\t";
            }
            // line 1351
            echo " 
\t\t\t\t
\t\t\t\t";
            // line 1353
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1355
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1358
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1362
            echo " 
\t});
});

\$(document).on('click', '.button-remove', function() {
\tvar remove_id = \$(this).attr('data-remove');

\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/cart/update&remove=' + remove_id,
\t\ttype: 'get',
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#cart1 .button-remove').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else {
\t\t\t\t";
            // line 1381
            if ( !($context["logged"] ?? null)) {
                echo " 
\t\t\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1385
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('payment');
\t\t\t\t\t\t";
                }
                // line 1387
                echo " 
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 1391
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t\t";
                }
                // line 1393
                echo " 
\t\t\t\t\t}
\t\t\t\t";
            } else {
                // line 1395
                echo "   
\t\t\t\t\tif (\$('#payment-address input[name=\\'payment_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadPaymentMethod();
\t\t\t\t\t} else {
\t\t\t\t\t\treloadPaymentMethodById(\$('#payment-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t";
                // line 1402
                if (($context["shipping_required"] ?? null)) {
                    echo " 
\t\t\t\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\t\t\t\treloadShippingMethod('shipping');
\t\t\t\t\t} else {
\t\t\t\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t\t\t\t}
\t\t\t\t\t";
                }
                // line 1408
                echo " 
\t\t\t\t";
            }
            // line 1410
            echo "\t\t\t\t
\t\t\t\t";
            // line 1411
            if ( !($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\tloadCart();
\t\t\t\t";
            }
            // line 1413
            echo " 
\t\t\t}
\t\t},
\t\t";
            // line 1416
            if (($context["debug"] ?? null)) {
                echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
            }
            // line 1420
            echo " 
\t});

\treturn false;
});
";
        }
        // line 1426
        echo "
\$('.date').datetimepicker({
\tformat: 'YYYY-MM-DD',
\tlocale: 'ru'
});

\$('.time').datetimepicker({
\tformat: 'HH:mm',
\tlocale: 'ru'
});

\$('.datetime').datetimepicker({
\tlocale: 'ru'
});
//--></script>
";
        // line 1441
        if (($context["error_warning"] ?? null)) {
            // line 1442
            echo "\t<script type=\"text/javascript\"><!--
\t\t  \t\$('#button-payment-method').attr(\"disabled\", true);
\t//--></script>
";
        }
        // line 1446
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2416 => 1446,  2410 => 1442,  2408 => 1441,  2391 => 1426,  2383 => 1420,  2375 => 1416,  2370 => 1413,  2364 => 1411,  2361 => 1410,  2357 => 1408,  2347 => 1402,  2338 => 1395,  2333 => 1393,  2327 => 1391,  2321 => 1387,  2315 => 1385,  2308 => 1381,  2287 => 1362,  2279 => 1358,  2274 => 1355,  2268 => 1353,  2264 => 1351,  2260 => 1350,  2250 => 1344,  2241 => 1337,  2236 => 1335,  2230 => 1333,  2224 => 1329,  2218 => 1327,  2211 => 1323,  2172 => 1287,  2168 => 1285,  2153 => 1274,  2150 => 1273,  2145 => 1270,  2136 => 1264,  2126 => 1258,  2121 => 1256,  2118 => 1255,  2112 => 1251,  2104 => 1247,  2100 => 1245,  2094 => 1243,  2091 => 1242,  2087 => 1240,  2077 => 1234,  2068 => 1227,  2063 => 1225,  2057 => 1223,  2051 => 1219,  2045 => 1217,  2038 => 1213,  2002 => 1179,  1994 => 1175,  1990 => 1173,  1984 => 1171,  1981 => 1170,  1977 => 1168,  1967 => 1162,  1958 => 1155,  1953 => 1153,  1947 => 1151,  1941 => 1147,  1935 => 1145,  1928 => 1141,  1892 => 1107,  1884 => 1103,  1880 => 1101,  1874 => 1099,  1870 => 1097,  1866 => 1096,  1856 => 1090,  1847 => 1083,  1842 => 1081,  1836 => 1079,  1830 => 1075,  1824 => 1073,  1817 => 1069,  1782 => 1037,  1778 => 1035,  1774 => 1034,  1766 => 1030,  1760 => 1026,  1752 => 1022,  1745 => 1018,  1739 => 1015,  1727 => 1006,  1720 => 1001,  1712 => 997,  1709 => 996,  1701 => 990,  1695 => 988,  1687 => 984,  1682 => 981,  1678 => 980,  1673 => 978,  1667 => 976,  1663 => 975,  1657 => 971,  1651 => 969,  1647 => 968,  1643 => 966,  1639 => 964,  1622 => 951,  1617 => 949,  1613 => 947,  1608 => 945,  1602 => 943,  1596 => 940,  1583 => 929,  1575 => 925,  1540 => 892,  1534 => 889,  1526 => 885,  1489 => 850,  1481 => 846,  1474 => 842,  1468 => 839,  1454 => 827,  1446 => 823,  1439 => 819,  1433 => 816,  1415 => 801,  1408 => 796,  1400 => 792,  1363 => 757,  1355 => 753,  1351 => 751,  1345 => 749,  1338 => 745,  1332 => 742,  1318 => 730,  1310 => 726,  1306 => 724,  1300 => 722,  1293 => 718,  1287 => 715,  1274 => 704,  1260 => 693,  1254 => 690,  1246 => 686,  1239 => 681,  1229 => 675,  1226 => 674,  1212 => 664,  1180 => 634,  1175 => 631,  1170 => 628,  1168 => 627,  1160 => 622,  1154 => 618,  1146 => 614,  1142 => 612,  1137 => 609,  1131 => 607,  1127 => 605,  1117 => 599,  1114 => 598,  1100 => 588,  1069 => 559,  1053 => 546,  1045 => 542,  1038 => 537,  1028 => 531,  1025 => 530,  1011 => 520,  977 => 488,  969 => 484,  965 => 482,  956 => 475,  940 => 463,  934 => 459,  924 => 453,  921 => 452,  907 => 442,  873 => 410,  865 => 406,  860 => 403,  855 => 401,  843 => 393,  839 => 391,  827 => 383,  824 => 382,  812 => 374,  780 => 344,  774 => 341,  766 => 337,  733 => 307,  729 => 305,  723 => 302,  715 => 298,  699 => 284,  691 => 280,  678 => 269,  675 => 268,  673 => 267,  669 => 265,  647 => 247,  641 => 244,  637 => 242,  631 => 240,  628 => 239,  626 => 238,  620 => 235,  616 => 234,  613 => 233,  607 => 231,  605 => 230,  600 => 227,  592 => 222,  585 => 217,  581 => 215,  577 => 214,  571 => 211,  568 => 210,  565 => 209,  559 => 205,  557 => 204,  554 => 203,  551 => 202,  549 => 201,  546 => 200,  540 => 197,  535 => 195,  530 => 192,  522 => 187,  517 => 185,  510 => 181,  503 => 180,  496 => 176,  490 => 175,  486 => 174,  481 => 171,  475 => 169,  471 => 168,  465 => 167,  461 => 166,  456 => 164,  452 => 163,  447 => 160,  441 => 158,  436 => 156,  432 => 155,  426 => 152,  422 => 150,  397 => 132,  388 => 130,  383 => 128,  378 => 126,  370 => 121,  363 => 119,  360 => 118,  353 => 114,  346 => 112,  342 => 111,  339 => 110,  328 => 104,  324 => 103,  316 => 98,  305 => 96,  302 => 95,  294 => 90,  283 => 88,  279 => 87,  275 => 85,  268 => 82,  264 => 81,  253 => 79,  249 => 78,  242 => 74,  238 => 73,  231 => 71,  227 => 69,  220 => 66,  215 => 64,  211 => 63,  203 => 60,  199 => 59,  194 => 57,  189 => 54,  184 => 53,  180 => 52,  177 => 51,  172 => 49,  169 => 48,  164 => 47,  159 => 46,  157 => 45,  153 => 43,  145 => 39,  143 => 38,  140 => 37,  135 => 34,  133 => 33,  127 => 31,  124 => 30,  122 => 29,  117 => 28,  114 => 27,  111 => 26,  108 => 25,  106 => 24,  102 => 23,  97 => 21,  94 => 20,  87 => 18,  81 => 15,  77 => 14,  70 => 13,  64 => 10,  60 => 9,  53 => 8,  51 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/checkout.twig", "");
    }
}
