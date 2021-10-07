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

/* default/template/extension/quickcheckout/guest_shipping.twig */
class __TwigTemplate_3849859c5289492993310673ffc47be0d92537b553c24e4181ff601e489725b5 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 
  ";
            // line 2
            if (($context["field"] == "country")) {
                echo " 
    ";
                // line 3
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 3), "display", [], "any", false, false, false, 3)) {
                    echo "  
\t<div class=\"col-sm-6";
                    // line 4
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 4), "required", [], "any", false, false, false, 4)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 5
                    echo ($context["entry_country"] ?? null);
                    echo "</label>
\t  <select name=\"country_id\" class=\"form-control\" id=\"input-shipping-country\">
\t  ";
                    // line 7
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t\t";
                        // line 8
                        if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 8) == ($context["country_id"] ?? null))) {
                            echo " 
\t\t<option value=\"";
                            // line 9
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 9);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 9);
                            echo "</option>
\t\t";
                        } else {
                            // line 10
                            echo "   
\t\t<option value=\"";
                            // line 11
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 11);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 11);
                            echo "</option>
\t\t";
                        }
                        // line 13
                        echo "\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 14
                    echo "\t  </select>
\t</div>
\t";
                } else {
                    // line 16
                    echo "   
\t<select name=\"country_id\" class=\"hide\">
\t";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t  ";
                        // line 19
                        if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 19) == ($context["country_id"] ?? null))) {
                            echo " 
\t  <option value=\"";
                            // line 20
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 20);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 20);
                            echo "</option>
\t  ";
                        } else {
                            // line 21
                            echo "   
\t  <option value=\"";
                            // line 22
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 22);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 22);
                            echo "</option>
\t  ";
                        }
                        // line 24
                        echo "\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t</select>
\t";
                }
                // line 27
                echo "  ";
            } elseif (($context["field"] == "zone")) {
                echo " 
    ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 28), "display", [], "any", false, false, false, 28)) {
                    echo "  
\t<div class=\"col-sm-6";
                    // line 29
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 29), "required", [], "any", false, false, false, 29)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 30
                    echo ($context["entry_zone"] ?? null);
                    echo "</label>
\t  <select name=\"zone_id\" class=\"form-control\" id=\"input-shipping-zone\"></select>
\t</div>
\t";
                } else {
                    // line 33
                    echo "   
\t  <select name=\"zone_id\" class=\"hide\"></select>
\t";
                }
                // line 35
                echo " 
  ";
            } else {
                // line 36
                echo "   
    ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 37), "display", [], "any", false, false, false, 37)) {
                    echo "  
\t<div";
                    // line 38
                    echo ((($context["field"] == "postcode")) ? (" id=\"shipping-postcode-required\"") : (""));
                    echo " class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 38), "required", [], "any", false, false, false, 38)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\" for=\"input-shipping-";
                    // line 39
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, ("entry_" . $context["field"]), [], "any", false, false, false, 39);
                    echo "</label>
\t  <input type=\"text\" name=\"";
                    // line 40
                    echo $context["field"];
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 40), "placeholder", [], "any", false, false, false, 40);
                    echo "\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 40)) ? (twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 40)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 40), "default", [], "any", false, false, false, 40)));
                    echo "\" class=\"form-control\"  id=\"input-shipping-";
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\" />
\t</div>
\t";
                } else {
                    // line 42
                    echo "   
\t<input type=\"text\" name=\"";
                    // line 43
                    echo $context["field"];
                    echo "\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 43)) ? (twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 43)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 43), "default", [], "any", false, false, false, 43)));
                    echo "\" class=\"hide\" />
\t";
                }
                // line 45
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "<!-- CUSTOM FIELDS -->
<div id=\"custom-field-shipping\">
  ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            echo " 
  ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 50) == "address")) {
                echo " 
\t<div class=\"col-sm-6 custom-field\" data-sort=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 51);
                echo "\" id=\"shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 51);
                echo "\">
\t  <label class=\"control-label\" for=\"input-shipping-custom-field";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 52);
                echo "</label>
\t  ";
                // line 53
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 53) == "select")) {
                    echo " 
\t\t<select name=\"custom_field[";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 54);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    echo "]\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 54);
                    echo "\" class=\"form-control\">
\t\t  <option value=\"\">";
                    // line 55
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t  ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 56));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  ";
                        // line 57
                        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 57) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57)] ?? null) : null)))) {
                            echo " 
\t\t  <option value=\"";
                            // line 58
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 58);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 58);
                            echo "</option>
\t\t  ";
                        } else {
                            // line 59
                            echo "   
\t\t  <option value=\"";
                            // line 60
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 60);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 60);
                            echo "</option>
\t\t  ";
                        }
                        // line 62
                        echo "\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "\t\t</select>
\t  ";
                }
                // line 65
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 65) == "radio")) {
                    echo " 
\t\t";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 66));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"radio\">
\t\t\t";
                        // line 68
                        if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["guest_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 68)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 68) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 68)] ?? null) : null)))) {
                            echo " 
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 70
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 70);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 70);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 70);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 71
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 71);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 72
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 74
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 74);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 74);
                            echo "\" />
\t\t\t  ";
                            // line 75
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 75);
                            echo "</label>
\t\t\t";
                        }
                        // line 77
                        echo "\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    echo "\t  ";
                }
                // line 80
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 80) == "checkbox")) {
                    echo " 
\t\t";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 81));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"checkbox\">
\t\t\t";
                        // line 83
                        if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 83), (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83)] ?? null) : null)))) {
                            // line 84
                            echo "\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 85
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 85);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 86
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 87
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 89
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 89);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 89);
                            echo "\" />
\t\t\t  ";
                            // line 90
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 90);
                            echo "</label>
\t\t\t";
                        }
                        // line 91
                        echo " 
\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    echo "\t  ";
                }
                // line 95
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 95) == "text")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 96);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    echo "]\" value=\"";
                    echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null)) ? ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 96)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 96);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    echo "\" class=\"form-control\" />
\t  ";
                }
                // line 97
                echo " 
\t  ";
                // line 98
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 98) == "textarea")) {
                    echo " 
\t\t<textarea name=\"custom_field[";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 99);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 99);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99)] ?? null) : null)) ? ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 99)));
                    echo "</textarea>
\t  ";
                }
                // line 100
                echo " 
\t  ";
                // line 101
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 101) == "file")) {
                    echo " 
\t\t<br />
\t\t<button type=\"button\" id=\"button-shipping-custom-field";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 104);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    echo "]\" value=\"";
                    echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null)) ? ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null)) : (""));
                    echo "\" />
\t  ";
                }
                // line 105
                echo " 
\t  ";
                // line 106
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 106) == "date")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 107);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    echo "]\" value=\"";
                    echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["guest_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null)) ? ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 107)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 107);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    echo "\" class=\"form-control date\" />
\t  ";
                }
                // line 108
                echo " 
\t  ";
                // line 109
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "time")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 110);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    echo "]\" value=\"";
                    echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["guest_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110)] ?? null) : null)) ? ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 110)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 110);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    echo "\" class=\"form-control time\" />
\t  ";
                }
                // line 111
                echo " 
\t  ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 112) == "datetime")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "]\" value=\"";
                    echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["guest_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null)) ? ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["guest_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 113)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 113);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "\" class=\"form-control datetime\" />
\t  ";
                }
                // line 114
                echo " 
    </div>
  ";
            }
            // line 117
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "</div>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#custom-field-shipping .custom-field[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#shipping-address .col-sm-6').length) {
\t\t\$('#shipping-address .col-sm-6').eq(\$(this).attr('data-sort')).before(this);
\t} 
\t
\tif (\$(this).attr('data-sort') > \$('#shipping-address .col-sm-6').length) {
\t\t\$('#shipping-address .col-sm-6:last').after(this);
\t}
\t\t
\tif (\$(this).attr('data-sort') < -\$('#shipping-address .col-sm-6').length) {
\t\t\$('#shipping-address .col-sm-6:first').before(this);
\t}
});

\$('#shipping-address button[id^=\\'button-shipping-custom-field\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);
\t\t\t
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}
\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t
\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').attr('value', json['file']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('#shipping-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/quickcheckout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#shipping-address select[name=\\'country_id\\']').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('.fa-spinner').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#shipping-postcode-required').addClass('required');
\t\t\t} else {
\t\t\t\t\$('#shipping-postcode-required').removeClass('required');
\t\t\t}

\t\t\thtml = '';

\t\t\tif (json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
        \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 207
        echo ($context["zone_id"] ?? null);
        echo " ') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t    \t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 214
        echo ($context["text_none"] ?? null);
        echo " </option>';
\t\t\t}

\t\t\t\$('#shipping-address select[name=\\'zone_id\\']').html(html).trigger('change');
\t\t},
\t\t";
        // line 219
        if (($context["debug"] ?? null)) {
            echo " 
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t\t";
        }
        // line 223
        echo " 
\t});
});

\$('#shipping-address select[name=\\'country_id\\']').trigger('change');

\$('#shipping-address select[name=\\'zone_id\\']').on('change', function() {
\treloadShippingMethod('shipping');
});

\$('.date').datetimepicker({
\tformat: 'DD.MM.YYYY',
\tlocale: 'ru'
});

\$('.time').datetimepicker({
\tformat: 'HH:mm',
\tlocale: 'ru'
});

\$('.datetime').datetimepicker({
\tlocale: 'ru'
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/guest_shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  661 => 223,  653 => 219,  645 => 214,  635 => 207,  544 => 118,  538 => 117,  533 => 114,  520 => 113,  516 => 112,  513 => 111,  500 => 110,  496 => 109,  493 => 108,  480 => 107,  476 => 106,  473 => 105,  464 => 104,  456 => 103,  451 => 101,  448 => 100,  435 => 99,  431 => 98,  428 => 97,  415 => 96,  410 => 95,  407 => 94,  399 => 91,  394 => 90,  386 => 89,  382 => 87,  377 => 86,  369 => 85,  366 => 84,  364 => 83,  357 => 81,  352 => 80,  349 => 79,  342 => 77,  337 => 75,  329 => 74,  325 => 72,  320 => 71,  312 => 70,  307 => 68,  300 => 66,  295 => 65,  291 => 63,  285 => 62,  278 => 60,  275 => 59,  268 => 58,  264 => 57,  258 => 56,  254 => 55,  246 => 54,  242 => 53,  236 => 52,  230 => 51,  226 => 50,  220 => 49,  216 => 47,  209 => 45,  202 => 43,  199 => 42,  187 => 40,  181 => 39,  175 => 38,  171 => 37,  168 => 36,  164 => 35,  159 => 33,  152 => 30,  148 => 29,  144 => 28,  139 => 27,  135 => 25,  129 => 24,  122 => 22,  119 => 21,  112 => 20,  108 => 19,  102 => 18,  98 => 16,  93 => 14,  87 => 13,  80 => 11,  77 => 10,  70 => 9,  66 => 8,  60 => 7,  55 => 5,  51 => 4,  47 => 3,  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/guest_shipping.twig", "");
    }
}
