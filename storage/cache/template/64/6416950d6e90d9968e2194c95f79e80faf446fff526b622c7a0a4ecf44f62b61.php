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

/* extension/module/membership_gift_form.twig */
class __TwigTemplate_7117c2e75b08332898ad87bb62661683338f6603a8a91b8ab10c67a55436c971 extends \Twig\Template
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
        if (($context["error_warning"] ?? null)) {
            echo " 
<div class=\"alert alert-danger\">
  \t<i class=\"fa fa-exclamation-circle\"></i> ";
            // line 3
            echo ($context["error_warning"] ?? null);
            echo " 
  \t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 6
        echo " 
<div class=\"pull-right\">
\t<button type=\"button\" onclick=\"saveGift();\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        // line 8
        echo ($context["button_save"] ?? null);
        echo "</button>
</div>
<legend>";
        // line 10
        echo ($context["text_form"] ?? null);
        echo "</legend>
<div class=\"tab-content\">
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-2 control-label\" for=\"gift-status-enabled\">";
        // line 13
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t<div class=\"col-sm-4\">
\t\t    <div class=\"radio-switch\">
\t\t    ";
        // line 16
        if (($context["status"] ?? null)) {
            echo " 
\t\t\t\t<input type=\"radio\" name=\"status\" value=\"0\" id=\"gift-status-disabled\">
\t            <label class=\"col-sm-4\" for=\"gift-status-enabled\">";
            // line 18
            echo ($context["text_disabled"] ?? null);
            echo "</label>
\t\t      \t<input type=\"radio\" name=\"status\" value=\"1\" id=\"gift-status-enabled\" checked>
\t            <label class=\"col-sm-4\" for=\"gift-status-disabled\">";
            // line 20
            echo ($context["text_enabled"] ?? null);
            echo "</label>
\t\t\t";
        } else {
            // line 21
            echo " 
\t            <input type=\"radio\" name=\"status\" value=\"0\" id=\"gift-status-disabled\" checked>
\t            <label class=\"col-sm-4\" for=\"gift-status-enabled\">";
            // line 23
            echo ($context["text_disabled"] ?? null);
            echo "</label>
\t            <input type=\"radio\" name=\"status\" value=\"1\" id=\"gift-status-enabled\">
\t            <label class=\"col-sm-4\" for=\"gift-status-disabled\">";
            // line 25
            echo ($context["text_enabled"] ?? null);
            echo "</label>  
\t\t\t";
        }
        // line 26
        echo " 
\t\t    </div>
\t\t</div>
\t</div>
\t<hr />
\t<div class=\"row\">
\t\t<div class=\"col-sm-10 col-sm-offset-2\">
\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t<li ";
            // line 35
            echo (((($context["language_id"] ?? null) == (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["language"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["language_id"] ?? null) : null))) ? (" class=\"active\"") : (""));
            echo "><a href=\"#gift-";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["language"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["language_id"] ?? null) : null);
            echo "\" aria-controls=\"gift-";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["language"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["language_id"] ?? null) : null);
            echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["language_flag"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[(($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["language"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["language"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["language"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t
\t\t\t</ul>\t\t
\t\t</div>
\t</div>
\t<div class=\"tab-content\">
\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t<div role=\"tabpanel\" class=\"tab-pane";
            // line 42
            echo (((($context["language_id"] ?? null) == (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["language"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["language_id"] ?? null) : null))) ? (" active") : (""));
            echo "\" id=\"gift-";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["language"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["language_id"] ?? null) : null);
            echo "\">\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"gift-name_";
            // line 44
            echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["language"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["language_id"] ?? null) : null);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_gift_name"] ?? null);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<input type=\"text\" name=\"name[";
            // line 46
            echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["language"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["language_id"] ?? null) : null);
            echo "]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["name"] ?? null), (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["language"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["language_id"] ?? null) : null), [], "array", true, true, false, 46)) ? ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["name"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[(($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["language"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["language_id"] ?? null) : null)] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"gift-name_";
            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["language"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["language_id"] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo " 
\t</div>
\t<hr />
\t<div class=\"form-group\">
\t    <label class=\"col-sm-2 control-label\" for=\"gift-threshold\"><span data-toggle=\"tooltip\" title=\"";
        // line 54
        echo ($context["help_gift_threshold"] ?? null);
        echo "\">";
        echo ($context["entry_threshold"] ?? null);
        echo "</span></label>
\t    <div class=\"col-sm-10\">
\t    \t<div class=\"input-group\">
\t    \t\t<input type=\"text\" name=\"threshold\" value=\"";
        // line 57
        echo ($context["threshold"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_threshold"] ?? null);
        echo "\" id=\"gift-threshold\" class=\"form-control\" />
\t    \t\t<span class=\"input-group-addon\">";
        // line 58
        echo ($context["currency_symbol"] ?? null);
        echo "</span>
\t    \t</div>
\t    </div>
\t</div>
 
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-2 control-label\" for=\"gift-maximum_cost_gift\"><span data-toggle=\"tooltip\" title=\"";
        // line 64
        echo ($context["help_maximum_cost_gift"] ?? null);
        echo "\">";
        echo ($context["entry_maximum_cost_gift"] ?? null);
        echo "</span></label>
\t\t<div class=\"col-sm-10\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input type=\"text\" name=\"maximum_cost\" value=\"";
        // line 67
        echo ($context["maximum_cost"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_maximum_cost_gift"] ?? null);
        echo "\" id=\"gift-maximum_cost_gift\" class=\"form-control\" />
\t\t\t\t<span class=\"input-group-addon\">";
        // line 68
        echo ($context["currency_symbol"] ?? null);
        echo "</span>
\t\t\t</div>\t
\t\t</div>
    </div>
 
    <div class=\"form-group\">
\t\t<label class=\"col-sm-2 control-label\" for=\"gift-giving_quantity\"><span data-toggle=\"tooltip\" title=\"";
        // line 74
        echo ($context["help_giving_quantity"] ?? null);
        echo "\">";
        echo ($context["entry_giving_quantity"] ?? null);
        echo "</span></label>
\t\t<div class=\"col-sm-10\">
\t\t\t<input type=\"text\" name=\"giving_quantity\" value=\"";
        // line 76
        echo ($context["giving_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_giving_quantity"] ?? null);
        echo "\" id=\"gift-giving_quantity\" class=\"form-control\" />
\t\t</div>
    </div>
\t<div class=\"form-group\">
\t    <label class=\"col-sm-2 control-label\" for=\"gift-date_start\">";
        // line 80
        echo ($context["entry_start"] ?? null);
        echo "</label>
\t    <div class=\"col-sm-4\">
\t    \t<div class=\"input-group date\">
\t    \t\t<input type=\"text\" name=\"date_start\" value=\"";
        // line 83
        echo ($context["date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"gift-date_start\" class=\"form-control\" />
\t    \t\t<span class=\"input-group-btn\">
\t    \t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t    \t\t</span>
\t    \t</div>
\t    </div>
\t    <label class=\"col-sm-2 control-label\" for=\"gift-date_expiry\">";
        // line 89
        echo ($context["entry_expiry"] ?? null);
        echo "</label>
\t    <div class=\"col-sm-4\">
\t    \t<div class=\"input-group date\">
\t    \t\t<input type=\"text\" name=\"date_expiry\" value=\"";
        // line 92
        echo ($context["date_expiry"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_expiry"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"gift-date_expiry\" class=\"form-control\" />
\t    \t\t<span class=\"input-group-btn\">
\t    \t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t    \t\t</span>
\t    \t</div>
\t    </div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-2 control-label\" for=\"gift-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 100
        echo ($context["help_gift_categories"] ?? null);
        echo "\">";
        echo ($context["entry_categories"] ?? null);
        echo "</span></label>
\t\t<div class=\"col-sm-10\">
\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 102
        echo ($context["entry_categories"] ?? null);
        echo "\" id=\"gift-category\" class=\"form-control\" />
\t\t\t<div id=\"gift-categories\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t";
        // line 104
        if (($context["categories"] ?? null)) {
            echo " 
\t\t\t\t";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " 
\t\t\t\t<div id=\"gift-categories-";
                // line 106
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["category"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["category_id"] ?? null) : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["category"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["name"] ?? null) : null);
                echo " 
\t\t\t\t\t<input type=\"hidden\" name=\"categories[]\" value=\"";
                // line 107
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["category"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["category_id"] ?? null) : null);
                echo "\" />
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo " 
\t\t\t";
        }
        // line 110
        echo " 
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label class=\"col-sm-2 control-label\" for=\"gift-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 115
        echo ($context["help_gift_products"] ?? null);
        echo "\">";
        echo ($context["entry_products"] ?? null);
        echo "</span></label>
\t\t<div class=\"col-sm-10\">
\t\t\t<input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 117
        echo ($context["entry_products"] ?? null);
        echo "\" id=\"gift-product\" class=\"form-control\" />
\t\t\t<div id=\"gift-products\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t";
        // line 119
        if (($context["products"] ?? null)) {
            echo " 
\t\t\t\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
\t\t\t\t<div id=\"gift-products-";
                // line 121
                echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["product"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["product_id"] ?? null) : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["product"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["name"] ?? null) : null);
                echo " 
\t\t\t\t\t<input type=\"hidden\" name=\"products[]\" value=\"";
                // line 122
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["product"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["product_id"] ?? null) : null);
                echo "\" />
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo " 
\t\t\t";
        }
        // line 125
        echo " 
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
function saveGift() {
\tvar 
\t\t\$container = \$('#gift-form'),
\t\tpost_data = \$container.find('input, select, textarea').serialize();
\t
\t\$.ajax( {
\t\turl: '";
        // line 137
        echo ($context["action"] ?? null);
        echo "'.replace(/&amp;/g, '&'),
\t\ttype: 'POST',
\t\tdata: post_data,
\t\tdataType: 'html',
\t\tsuccess: function (data, textStatus, jqXHR) {
\t\t\tif (data.match(/button\\-gifts\\-list\\-filter/i)) {
\t\t\t\t\$('#menu-gifts-list').tab('show');
\t\t\t\t\$('#gifts-list').html(data);
\t\t\t} else {
\t\t\t\t\$container.html(data);
\t\t\t}
\t\t}
\t} );
}

\$(function() {
\t\$('.date').datetimepicker( {pickTime: false} );
\t
\t// Categories
\t\$('#gift-category').autocomplete( {
\t\t'source': function(request, response) {
\t\t\t\$.ajax( {
\t\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 159
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function () {},
\t\t\t\tcomplete: function () {},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t\t}
\t\t\t\t\t} ) );
\t\t\t\t}
\t\t\t} );
\t\t},
\t\t'select': function(item) {
\t\t\tthis.value = '';
\t\t\t
\t\t\t\$('#gift-categories-' + item['value']).remove();
\t\t\t
\t\t\t\$('#gift-categories').append('<div id=\"gift-categories-' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"categories[]\" value=\"' + item['value'] + '\" /></div>');
\t\t}\t
\t} );

\t\$('#gift-categories').delegate('.fa-minus-circle', 'click', function() {
\t\t\$(this).parent().remove();
\t} );
\t
\t// Products
\t\$('#gift-product').autocomplete( {
\t\t'source': function(request, response) {
\t\t\t\$.ajax( {
\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 190
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function () {},
\t\t\t\tcomplete: function () {},\t\t\t
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t}
\t\t\t\t\t} ) );
\t\t\t\t}
\t\t\t} );
\t\t},
\t\t'select': function(item) {
\t\t\tthis.value = '';
\t\t\t
\t\t\t\$('#gift-products-' + item['value']).remove();
\t\t\t
\t\t\t\$('#gift-products').append('<div id=\"gift-products-' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"products[]\" value=\"' + item['value'] + '\" /></div>');\t
\t\t}
\t} );

\t\$('#gift-products').delegate('.fa-minus-circle', 'click', function() {
\t\t\$(this).parent().remove();
\t} );
} );

//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/module/membership_gift_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 190,  411 => 159,  386 => 137,  372 => 125,  368 => 124,  359 => 122,  353 => 121,  347 => 120,  343 => 119,  338 => 117,  331 => 115,  324 => 110,  320 => 109,  311 => 107,  305 => 106,  299 => 105,  295 => 104,  290 => 102,  283 => 100,  270 => 92,  264 => 89,  253 => 83,  247 => 80,  238 => 76,  231 => 74,  222 => 68,  216 => 67,  208 => 64,  199 => 58,  193 => 57,  185 => 54,  179 => 50,  162 => 46,  153 => 44,  146 => 42,  140 => 41,  133 => 36,  115 => 35,  109 => 34,  99 => 26,  94 => 25,  89 => 23,  85 => 21,  80 => 20,  75 => 18,  70 => 16,  64 => 13,  58 => 10,  53 => 8,  49 => 6,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/membership_gift_form.twig", "");
    }
}
