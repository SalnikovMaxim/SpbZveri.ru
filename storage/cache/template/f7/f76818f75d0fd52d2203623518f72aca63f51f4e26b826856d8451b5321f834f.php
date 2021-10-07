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

/* default/template/account/register.twig */
class __TwigTemplate_f329a05df2b41534fee6883f96fe54ada17d3c0f4944f4b7ba2a9fe3355916da extends \Twig\Template
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
<div id=\"account-register\" class=\"container\">
  <div itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\" class=\"breadcrumb hidden\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t<span itemscope=\"\" itemprop=\"itemListElement\" itemtype=\"http://schema.org/ListItem\" class=\"breadcrumb-item\">
\t\t\t";
            // line 6
            if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 7
                echo "\t\t\t<a itemprop=\"item\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
                echo "\">
\t\t\t\t<span itemprop=\"name\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                echo "</span>
\t\t\t\t<meta itemprop=\"position\" content=\"";
                // line 9
                echo ($context["key"] + 1);
                echo "\">
\t\t\t</a>
\t\t\t";
            } else {
                // line 12
                echo "\t\t\t<a rel=\"nofollow\" itemprop=\"item\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
                echo "\">
\t\t\t\t<span itemprop=\"name\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "</span>
\t\t\t\t<meta itemprop=\"position\" content=\"";
                // line 14
                echo ($context["key"] + 1);
                echo "\">
\t\t\t</a>
\t\t\t";
            }
            // line 17
            echo "\t\t</span>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</div>
  ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 23
        echo "  
\t<h1 class=\"page-title hidden\">";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t<div class=\"account-register\">
\t\t<h2>Регистрация личного кабинета</h2>
\t\t<form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset id=\"account\">
          <div class=\"form-group required\" style=\"display: ";
        // line 29
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <div class=\"col-sm-10\">";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 31
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 31) == ($context["customer_group_id"] ?? null))) {
                // line 32
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 34);
                echo "\" checked=\"checked\" class=\"input2\" />
                  ";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 35);
                echo "</label>
              </div>
              ";
            } else {
                // line 38
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 40);
                echo "\" class=\"input2\"  />
                  ";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 41);
                echo "</label>
              </div>
              ";
            }
            // line 44
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"form-group required\">
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 48
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"input2\" />
              ";
        // line 49
        if (($context["error_firstname"] ?? null)) {
            // line 50
            echo "              <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 51
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 55
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"input2\" />
              ";
        // line 56
        if (($context["error_lastname"] ?? null)) {
            // line 57
            echo "              <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 58
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 62
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"input2\" />
              ";
        // line 63
        if (($context["error_email"] ?? null)) {
            // line 64
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 65
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <div class=\"col-sm-10\">
              <input type=\"tel\" name=\"telephone\" value=\"";
        // line 69
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"input2\" />
              ";
        // line 70
        if (($context["error_telephone"] ?? null)) {
            // line 71
            echo "              <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 72
        echo " </div>
          </div>
          ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 75
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 75) == "select")) {
                // line 76
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 76);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 77);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 77);
                echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 79);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79);
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 80
                echo ($context["text_select"] ?? null);
                echo "</option>
                
                
                
                
                
                ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 86));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 87
                    echo "                ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 87)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 87) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87)] ?? null) : null)))) {
                        // line 88
                        echo "                
                
                
                
                <option value=\"";
                        // line 92
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 92);
                        echo "</option>
                
                
                
                
                
                ";
                    } else {
                        // line 99
                        echo "                
                
                
                
                
                <option value=\"";
                        // line 104
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 104);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 104);
                        echo "</option>
                
                
                
                
                
                ";
                    }
                    // line 111
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "              
              
              
              
              
              </select>
              ";
                // line 118
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118)] ?? null) : null)) {
                    // line 119
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 120
                echo "</div>
          </div>
          ";
            }
            // line 123
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 123) == "radio")) {
                // line 124
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 124);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 125);
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 127));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 128
                    echo "                <div class=\"radio\">";
                    if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["register_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 128) == (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)))) {
                        // line 129
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 130
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 130);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 130);
                        echo "\" checked=\"checked\" class=\"input2\" />
                    ";
                        // line 131
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 131);
                        echo "</label>
                  ";
                    } else {
                        // line 133
                        echo "                  <label>
                    <input type=\"radio\" name=\"custom_field[";
                        // line 134
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 134);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 134);
                        echo "\" class=\"input2\" />
                    ";
                        // line 135
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 135);
                        echo "</label>
                  ";
                    }
                    // line 136
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "</div>
              ";
                // line 138
                if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)) {
                    // line 139
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 140
                echo "</div>
          </div>
          ";
            }
            // line 143
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 143) == "checkbox")) {
                // line 144
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 144);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 148
                    echo "                <div class=\"checkbox\">";
                    if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["register_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 148), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null)))) {
                        // line 149
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 150);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 150);
                        echo "\" checked=\"checked\" class=\"input2\" />
                    ";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 151);
                        echo "</label>
                  ";
                    } else {
                        // line 153
                        echo "                  <label>
                    <input type=\"checkbox\" name=\"custom_field[";
                        // line 154
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 154);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 154);
                        echo "\" class=\"input2\" />
                    ";
                        // line 155
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 155);
                        echo "</label>
                  ";
                    }
                    // line 156
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo " </div>
              ";
                // line 158
                if ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158)] ?? null) : null)) {
                    // line 159
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 160
                echo " </div>
          </div>
          ";
            }
            // line 163
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 163) == "text")) {
                // line 164
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 164);
                echo "\">
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 166);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                echo "]\" value=\"";
                if ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["register_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null)) {
                    echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 166);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 166);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                echo "\" class=\"input2\" />
              ";
                // line 167
                if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) {
                    // line 168
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 169
                echo " </div>
          </div>
          ";
            }
            // line 172
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 172) == "textarea")) {
                // line 173
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 173);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 174);
                echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field[";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 176);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 176);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                echo "\" class=\"form-control\">";
                if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["register_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null)) {
                    echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 176);
                }
                echo "</textarea>
              ";
                // line 177
                if ((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) {
                    // line 178
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 179
                echo " </div>
          </div>
          ";
            }
            // line 182
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 182) == "file")) {
                // line 183
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 183);
                echo "\">
            <label class=\"col-sm-2 control-label\">";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 184);
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 186
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 187);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                echo "]\" value=\"";
                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["register_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["register_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null);
                    echo " ";
                }
                echo "\" class=\"input2\" />
              ";
                // line 188
                if ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) {
                    // line 189
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 190
                echo "</div>
          </div>
          ";
            }
            // line 193
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 193) == "date")) {
                // line 194
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 194);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"custom_field[";
                // line 198
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 198);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                echo "]\" value=\"";
                if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) {
                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["register_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 198);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 198);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                echo "\" class=\"input2\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 202
                if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202)] ?? null) : null)) {
                    // line 203
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 204
                echo " </div>
          </div>
          ";
            }
            // line 207
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 207) == "time")) {
                // line 208
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 208);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 209);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group time\">
                <input type=\"text\" name=\"custom_field[";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 212);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                echo "]\" value=\"";
                if ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["register_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null)) {
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["register_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 212);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 212);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                echo "\" class=\"input2\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 216
                if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216)] ?? null) : null)) {
                    // line 217
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 218
                echo " </div>
          </div>
          ";
            }
            // line 221
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 221) == "datetime")) {
                // line 222
                echo "          <div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 222);
                echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 223);
                echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"custom_field[";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 226);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                echo "]\" value=\"";
                if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["register_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null)) {
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["register_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 226);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 226);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                echo "\" class=\"input2\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 230
                if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230)] ?? null) : null)) {
                    // line 231
                    echo "              <div class=\"text-danger\">";
                    echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231)] ?? null) : null);
                    echo "</div>
              ";
                }
                // line 232
                echo " </div>
          </div>
          ";
            }
            // line 235
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "        </fieldset>
        <fieldset>
          <div class=\"form-group required\">
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 240
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"input2\" />
              ";
        // line 241
        if (($context["error_password"] ?? null)) {
            // line 242
            echo "              <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 243
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 247
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"input2\" />
              ";
        // line 248
        if (($context["error_confirm"] ?? null)) {
            // line 249
            echo "              <div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 250
        echo " </div>
          </div>
        </fieldset>
        <fieldset class=\"newsletdestitl\">
\t\t\t<div class=\"newsletdestitlone\"> 
\t\t\t\t<p><strong class=\"col-sm-2 control-label\">";
        // line 255
        echo ($context["entry_newsletter"] ?? null);
        echo "</strong></p>
\t\t\t\t<p>";
        // line 256
        echo ($context["entry_newsletdes"] ?? null);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"form_toggle\">
\t\t\t\t";
        // line 259
        if (($context["newsletter"] ?? null)) {
            // line 260
            echo "\t\t\t\t<div class=\"form_toggle-item item-1\">
\t\t\t\t\t<input id=\"fid-1\" type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t<label for=\"fid-1\">";
            // line 262
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_toggle-item item-2\">
\t\t\t\t\t<input id=\"fid-2\" type=\"radio\" name=\"newsletter\" value=\"1\" />
\t\t\t\t\t<label for=\"fid-2\">";
            // line 266
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 269
            echo "\t\t\t\t<div class=\"form_toggle-item item-1\">
\t\t\t\t\t<input id=\"fid-1\" type=\"radio\" name=\"newsletter\" value=\"0\" />
\t\t\t\t\t<label for=\"fid-1\">";
            // line 271
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form_toggle-item item-2\">
\t\t\t\t\t<input id=\"fid-2\" type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t<label for=\"fid-2\">";
            // line 275
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 278
        echo "\t\t\t</div>
       
        </fieldset>
        ";
        // line 281
        echo ($context["captcha"] ?? null);
        echo "
        ";
        // line 282
        if (($context["text_agree"] ?? null)) {
            // line 283
            echo "        <fieldset class=\"buttons\">
\t\t\t<p class=\"agree\">";
            // line 284
            echo ($context["text_agree"] ?? null);
            echo "
\t\t\t\t<input type=\"checkbox\" name=\"agree\" checked=\"checked\" class=\"hidden\" />
\t\t\t</p>
\t\t\t<input type=\"submit\" value=\"Зарегистрироваться\" class=\"btn-submit\" />
        </fieldset>
        ";
        } else {
            // line 290
            echo "        <fieldset class=\"buttons\">
            <input type=\"submit\" value=\"Зарегистрироваться\" class=\"btn-submit\" />
        </fieldset>
        ";
        }
        // line 294
        echo "      </form>
\t</div>
  
\t";
        // line 297
        echo ($context["column_left"] ?? null);
        echo "
\t";
        // line 298
        echo ($context["column_right"] ?? null);
        echo "
\t";
        // line 299
        echo ($context["content_top"] ?? null);
        echo "
\t";
        // line 300
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 403
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 408
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 413
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
";
        // line 418
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1072 => 418,  1064 => 413,  1056 => 408,  1048 => 403,  942 => 300,  938 => 299,  934 => 298,  930 => 297,  925 => 294,  919 => 290,  910 => 284,  907 => 283,  905 => 282,  901 => 281,  896 => 278,  890 => 275,  883 => 271,  879 => 269,  873 => 266,  866 => 262,  862 => 260,  860 => 259,  854 => 256,  850 => 255,  843 => 250,  837 => 249,  835 => 248,  829 => 247,  823 => 243,  817 => 242,  815 => 241,  809 => 240,  803 => 236,  797 => 235,  792 => 232,  786 => 231,  784 => 230,  765 => 226,  757 => 223,  750 => 222,  747 => 221,  742 => 218,  736 => 217,  734 => 216,  715 => 212,  707 => 209,  700 => 208,  697 => 207,  692 => 204,  686 => 203,  684 => 202,  665 => 198,  657 => 195,  650 => 194,  647 => 193,  642 => 190,  636 => 189,  634 => 188,  622 => 187,  614 => 186,  609 => 184,  602 => 183,  599 => 182,  594 => 179,  588 => 178,  586 => 177,  570 => 176,  563 => 174,  556 => 173,  553 => 172,  548 => 169,  542 => 168,  540 => 167,  524 => 166,  516 => 164,  513 => 163,  508 => 160,  502 => 159,  500 => 158,  497 => 157,  490 => 156,  485 => 155,  477 => 154,  474 => 153,  469 => 151,  461 => 150,  458 => 149,  455 => 148,  451 => 147,  446 => 145,  439 => 144,  436 => 143,  431 => 140,  425 => 139,  423 => 138,  420 => 137,  413 => 136,  408 => 135,  400 => 134,  397 => 133,  392 => 131,  384 => 130,  381 => 129,  378 => 128,  374 => 127,  369 => 125,  362 => 124,  359 => 123,  354 => 120,  348 => 119,  346 => 118,  338 => 112,  332 => 111,  320 => 104,  313 => 99,  301 => 92,  295 => 88,  292 => 87,  288 => 86,  279 => 80,  271 => 79,  264 => 77,  257 => 76,  254 => 75,  250 => 74,  246 => 72,  240 => 71,  238 => 70,  232 => 69,  226 => 65,  220 => 64,  218 => 63,  212 => 62,  206 => 58,  200 => 57,  198 => 56,  192 => 55,  186 => 51,  180 => 50,  178 => 49,  172 => 48,  161 => 44,  155 => 41,  151 => 40,  147 => 38,  141 => 35,  137 => 34,  133 => 32,  130 => 31,  126 => 30,  118 => 29,  113 => 27,  107 => 24,  104 => 23,  98 => 21,  96 => 20,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/register.twig", "");
    }
}
