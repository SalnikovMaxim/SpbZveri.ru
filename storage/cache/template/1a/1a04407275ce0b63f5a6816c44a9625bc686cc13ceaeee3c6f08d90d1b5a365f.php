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

/* default/template/extension/quickcheckout/shipping_address.twig */
class __TwigTemplate_97d5f371538557bc09938973553dd15ee762b46122c4a77ee634c3c9d273e2ab extends \Twig\Template
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
        if (($context["addresses"] ?? null)) {
            // line 2
            echo "<div class=\"radio\">
  <label><input type=\"radio\" name=\"shipping_address\" value=\"existing\" id=\"shipping-address-existing\" checked=\"checked\" />
  ";
            // line 4
            echo ($context["text_address_existing"] ?? null);
            echo "</label>
</div>
<div id=\"shipping-existing\">
  <select name=\"address_id\" class=\"form-control\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                echo " 
    ";
                // line 9
                if ((twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 9) == ($context["address_id"] ?? null))) {
                    echo " 
    <option value=\"";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 10);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 10);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 10);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 10);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 10);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 10);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 10);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 10);
                    echo "</option>
    ";
                } else {
                    // line 11
                    echo "   
    <option value=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 12);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 12);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 12);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 12);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 12);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 12);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 12);
                    echo " , ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 12);
                    echo "</option>
    ";
                }
                // line 13
                echo " 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  </select>
</div>
<div class=\"radio\">
  <label><input type=\"radio\" name=\"shipping_address\" value=\"new\" id=\"shipping-address-new\" />
  ";
            // line 19
            echo ($context["text_address_new"] ?? null);
            echo "</label>
</div>
";
        } else {
            // line 21
            echo "   
<input type=\"radio\" name=\"shipping_address\" value=\"new\" id=\"shipping-address-new\" class=\"hide\" checked=\"checked\" />
";
        }
        // line 24
        echo "<div id=\"shipping-new\" style=\"display: ";
        echo ((($context["addresses"] ?? null)) ? ("none") : ("block"));
        echo ";\">
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            echo " 
  ";
            // line 26
            if (($context["field"] == "country")) {
                echo " 
    ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 27), "display", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "\t<div class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 28), "required", [], "any", false, false, false, 28)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 29
                    echo ($context["entry_country"] ?? null);
                    echo "</label>
\t  <select name=\"country_id\" class=\"form-control\" id=\"input-shipping-country\">
\t  ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t\t";
                        // line 32
                        if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 32) == ($context["country_id"] ?? null))) {
                            echo " 
\t\t<option value=\"";
                            // line 33
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 33);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 33);
                            echo "</option>
\t\t";
                        } else {
                            // line 34
                            echo "   
\t\t<option value=\"";
                            // line 35
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 35);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 35);
                            echo "</option>
\t\t";
                        }
                        // line 37
                        echo "\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "\t  </select>
\t</div>
\t";
                } else {
                    // line 40
                    echo "   
\t<select name=\"country_id\" class=\"hide\">
\t";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        echo " 
\t  ";
                        // line 43
                        if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 43) == ($context["country_id"] ?? null))) {
                            echo " 
\t  <option value=\"";
                            // line 44
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 44);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 44);
                            echo "</option>
\t  ";
                        } else {
                            // line 45
                            echo "   
\t  <option value=\"";
                            // line 46
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 46);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 46);
                            echo "</option>
\t  ";
                        }
                        // line 48
                        echo "\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "\t</select>
\t";
                }
                // line 51
                echo "  ";
            } elseif (($context["field"] == "zone")) {
                // line 52
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 52), "display", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "\t<div class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 53), "required", [], "any", false, false, false, 53)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\">";
                    // line 54
                    echo ($context["entry_zone"] ?? null);
                    echo "</label>
\t  <select name=\"zone_id\" class=\"form-control\" id=\"input-shipping-zone\"></select>
\t</div>
\t";
                } else {
                    // line 57
                    echo "   
\t  <select name=\"zone_id\" class=\"hide\"></select>
\t";
                }
                // line 60
                echo "  ";
            } else {
                echo "   
    ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 61), "display", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "\t<div";
                    echo ((($context["field"] == "postcode")) ? (" id=\"shipping-postcode-required\"") : (""));
                    echo " class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 62), "required", [], "any", false, false, false, 62)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\" for=\"input-shipping-";
                    // line 63
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, ("entry_" . $context["field"]), [], "any", false, false, false, 63);
                    echo "</label>
\t  <input type=\"text\" name=\"";
                    // line 64
                    echo $context["field"];
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 64), "placeholder", [], "any", false, false, false, 64);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 64), "default", [], "any", false, false, false, 64);
                    echo "\" class=\"form-control\"  id=\"input-shipping-";
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\" />
\t</div>
\t";
                } else {
                    // line 66
                    echo "   
\t<input type=\"text\" name=\"";
                    // line 67
                    echo $context["field"];
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 67), "default", [], "any", false, false, false, 67);
                    echo "\" class=\"hide\" />
\t";
                }
                // line 68
                echo " 
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "<!-- CUSTOM FIELDS -->
<div id=\"custom-field-shipping\">
  ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            echo " 
  ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 74) == "address")) {
                echo " 
\t<div class=\"col-sm-6 custom-field\" data-sort=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 75);
                echo "\" id=\"shipping-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                echo "\">
\t  <label class=\"control-label\" for=\"input-shipping-custom-field";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 76);
                echo "</label>
\t  ";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 77) == "select")) {
                    echo " 
\t\t<select name=\"custom_field[";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 78);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                    echo "]\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                    echo "\" class=\"form-control\">
\t\t  <option value=\"\">";
                    // line 79
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t  ";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 80));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  ";
                        // line 81
                        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 81) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81)] ?? null) : null)))) {
                            echo " 
\t\t  <option value=\"";
                            // line 82
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 82);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 82);
                            echo "</option>
\t\t  ";
                        } else {
                            // line 83
                            echo "   
\t\t  <option value=\"";
                            // line 84
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 84);
                            echo "</option>
\t\t  ";
                        }
                        // line 86
                        echo "\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 87
                    echo "\t\t</select>
\t  ";
                }
                // line 89
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 89) == "radio")) {
                    echo " 
\t\t";
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 90));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"radio\">
\t\t\t";
                        // line 92
                        if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["guest_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 92) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92)] ?? null) : null)))) {
                            echo " 
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 94
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 94);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 94);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 95
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 95);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 96
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 98
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 98);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 98);
                            echo "\" />
\t\t\t  ";
                            // line 99
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 99);
                            echo "</label>
\t\t\t";
                        }
                        // line 101
                        echo "\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    echo "\t  ";
                }
                // line 104
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 104) == "checkbox")) {
                    echo " 
\t\t";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 105));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"checkbox\">
\t\t\t";
                        // line 107
                        if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 107), (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107)] ?? null) : null)))) {
                            // line 108
                            echo "\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 109
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 109);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 110
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 110);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 111
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 113
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113);
                            echo "\" />
\t\t\t  ";
                            // line 114
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                            echo "</label>
\t\t\t";
                        }
                        // line 115
                        echo " 
\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "\t  ";
                }
                // line 119
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 119) == "text")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 120);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                    echo "]\" value=\"";
                    echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120)] ?? null) : null)) ? ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 120)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 120);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                    echo "\" class=\"form-control\" />
\t  ";
                }
                // line 121
                echo " 
\t  ";
                // line 122
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 122) == "textarea")) {
                    echo " 
\t\t<textarea name=\"custom_field[";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 123);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null)) ? ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 123)));
                    echo "</textarea>
\t  ";
                }
                // line 124
                echo " 
\t  ";
                // line 125
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 125) == "file")) {
                    echo " 
\t\t<br />
\t\t<button type=\"button\" id=\"button-shipping-custom-field";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 128);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    echo "]\" value=\"";
                    echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)) ? ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128)] ?? null) : null)) : (""));
                    echo "\" />
\t  ";
                }
                // line 129
                echo " 
\t  ";
                // line 130
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "date")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 131
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 131);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    echo "]\" value=\"";
                    echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["guest_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null)) ? ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 131)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    echo "\" class=\"form-control date\" />
\t  ";
                }
                // line 132
                echo " 
\t  ";
                // line 133
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "time")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 134);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                    echo "]\" value=\"";
                    echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["guest_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134)] ?? null) : null)) ? ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 134)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                    echo "\" class=\"form-control time\" />
\t  ";
                }
                // line 135
                echo " 
\t  ";
                // line 136
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 136) == "datetime")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 137);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    echo "]\" value=\"";
                    echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["guest_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null)) ? ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["guest_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 137)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 137);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    echo "\" class=\"form-control datetime\" />
\t  ";
                }
                // line 138
                echo " 
    </div>
  ";
            }
            // line 141
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "</div>
</div><!-- CLOSE WRAPPING BOX -->
<script type=\"text/javascript\"><!--
// Shipping address form functions
\$(document).ready(function() {
\t\$('#shipping-address input[name=\\'shipping_address\\']').on('change', function() {
\t\tif (this.value == 'new') {
\t\t\t\$('#shipping-existing').slideUp();
\t\t\t\$('#shipping-new').slideDown();
\t\t\t
\t\t\tsetTimeout(function() {
\t\t\t\t\$('#shipping-address select[name=\\'country_id\\']').trigger('change');
\t\t\t}, 200);
\t\t} else {
\t\t\t\$('#shipping-existing').slideDown();
\t\t\t\$('#shipping-new').slideUp();

\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t}
\t});
\t
\t\$('#shipping-address input[name=\\'shipping_address\\']:checked').trigger('change');

\t// Sort the custom fields
\t\$('#custom-field-shipping .custom-field[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#shipping-new .col-sm-6').length) {
\t\t\t\$('#shipping-new .col-sm-6').eq(\$(this).attr('data-sort')).before(this);
\t\t} 
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#shipping-new .col-sm-6').length) {
\t\t\t\$('#shipping-new .col-sm-6:last').after(this);
\t\t}
\t\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#shipping-new .col-sm-6').length) {
\t\t\t\$('#shipping-new .col-sm-6:first').before(this);
\t\t}
\t});

\t\$('#shipping-address button[id^=\\'button-shipping-custom-field\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);
\t\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\t\t
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}
\t\t
\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);
\t\t
\t\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').attr('value', json['file']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});

\t\$('#shipping-address select[name=\\'zone_id\\']').on('change', function() {
\t\treloadShippingMethod('shipping');
\t});

\t\$('#shipping-address select[name=\\'country_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/country&country_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#shipping-address select[name=\\'country_id\\']').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('#shipping-postcode-required').addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#shipping-postcode-required').removeClass('required');
\t\t\t\t}

\t\t\t\thtml = '';

\t\t\t\tif (json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 256
        echo ($context["zone_id"] ?? null);
        echo " ') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 263
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t\t}

\t\t\t\t\$('#shipping-address select[name=\\'zone_id\\']').html(html).trigger('change');
\t\t\t},
\t\t\t";
        // line 268
        if (($context["debug"] ?? null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 272
        echo " 
\t\t});
\t});

\t\$('#shipping-address select[name=\\'address_id\\']').on('change', function() {
\t\tif (\$('#shipping-address input[name=\\'shipping_address\\']:checked').val() == 'new') {
\t\t\treloadShippingMethod('shipping');
\t\t} else {
\t\t\treloadShippingMethodById(\$('#shipping-address select[name=\\'address_id\\']').val());
\t\t}
\t});
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  774 => 272,  766 => 268,  758 => 263,  748 => 256,  632 => 142,  626 => 141,  621 => 138,  608 => 137,  604 => 136,  601 => 135,  588 => 134,  584 => 133,  581 => 132,  568 => 131,  564 => 130,  561 => 129,  552 => 128,  544 => 127,  539 => 125,  536 => 124,  523 => 123,  519 => 122,  516 => 121,  503 => 120,  498 => 119,  495 => 118,  487 => 115,  482 => 114,  474 => 113,  470 => 111,  465 => 110,  457 => 109,  454 => 108,  452 => 107,  445 => 105,  440 => 104,  437 => 103,  430 => 101,  425 => 99,  417 => 98,  413 => 96,  408 => 95,  400 => 94,  395 => 92,  388 => 90,  383 => 89,  379 => 87,  373 => 86,  366 => 84,  363 => 83,  356 => 82,  352 => 81,  346 => 80,  342 => 79,  334 => 78,  330 => 77,  324 => 76,  318 => 75,  314 => 74,  308 => 73,  304 => 71,  296 => 68,  289 => 67,  286 => 66,  274 => 64,  268 => 63,  261 => 62,  259 => 61,  254 => 60,  249 => 57,  242 => 54,  237 => 53,  234 => 52,  231 => 51,  227 => 49,  221 => 48,  214 => 46,  211 => 45,  204 => 44,  200 => 43,  194 => 42,  190 => 40,  185 => 38,  179 => 37,  172 => 35,  169 => 34,  162 => 33,  158 => 32,  152 => 31,  147 => 29,  142 => 28,  140 => 27,  136 => 26,  130 => 25,  125 => 24,  120 => 21,  114 => 19,  108 => 15,  101 => 13,  82 => 12,  79 => 11,  60 => 10,  56 => 9,  50 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/shipping_address.twig", "");
    }
}
