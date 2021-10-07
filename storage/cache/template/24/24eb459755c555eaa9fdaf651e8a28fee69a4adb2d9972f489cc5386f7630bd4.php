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

/* default/template/extension/quickcheckout/guest.twig */
class __TwigTemplate_ec18f91c5766e5df1d63d4c6ff011007382d4b4d96518bfac88ead0e96d9df1b extends \Twig\Template
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
                // line 3
                echo "    ";
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
\t  <select name=\"country_id\" class=\"form-control\" id=\"input-payment-country\">
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
\t  <select name=\"zone_id\" class=\"form-control\" id=\"input-payment-zone\"></select>
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
            } elseif ((            // line 36
$context["field"] == "customer_group")) {
                echo " 
    ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 37), "display", [], "any", false, false, false, 37)) {
                    echo "  
\t<div class=\"col-sm-6 required\"";
                    // line 38
                    echo (((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) <= 1)) ? (" style=\"display:none !important\"") : (""));
                    echo ">
\t  <label class=\"control-label\">";
                    // line 39
                    echo ($context["entry_customer_group"] ?? null);
                    echo "</label>
\t  <select name=\"customer_group_id\" class=\"form-control\" id=\"input-payment-customer-group\">
\t\t";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                        echo " 
\t\t<option value=\"";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 42);
                        echo "\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 42) == ($context["customer_group_id"] ?? null))) ? (" selected=\"selected\"") : (""));
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 42);
                        echo "</option>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo " 
\t  </select>
\t</div>
\t";
                } else {
                    // line 46
                    echo "   
\t  <select name=\"customer_group_id\" class=\"hide\">
\t\t";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                        echo " 
\t\t<option value=\"";
                        // line 49
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 49);
                        echo "\"";
                        echo (((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 49) == ($context["customer_group_id"] ?? null))) ? (" selected=\"selected\"") : (""));
                        echo ">";
                        echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 49);
                        echo "</option>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo " 
\t  </select>
\t";
                }
                // line 53
                echo "  ";
            } else {
                echo "   
    ";
                // line 54
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 54), "display", [], "any", false, false, false, 54)) {
                    echo "  
\t<div";
                    // line 55
                    echo ((($context["field"] == "postcode")) ? (" id=\"payment-postcode-required\"") : (""));
                    echo " class=\"col-sm-6";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 55), "required", [], "any", false, false, false, 55)) ? (" required") : (""));
                    echo "\">
\t  <label class=\"control-label\" for=\"input-payment-";
                    // line 56
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, ("entry_" . $context["field"]), [], "any", false, false, false, 56);
                    echo "</label>
\t  <input type=\"text\" name=\"";
                    // line 57
                    echo $context["field"];
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 57), "placeholder", [], "any", false, false, false, 57);
                    echo "\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 57)) ? (twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 57)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 57), "default", [], "any", false, false, false, 57)));
                    echo "\" class=\"form-control\"  id=\"input-payment-";
                    echo twig_replace_filter($context["field"], ["_" => "-"]);
                    echo "\" />
\t</div>
\t";
                } else {
                    // line 59
                    echo "   
\t<input type=\"text\" name=\"";
                    // line 60
                    echo $context["field"];
                    echo "\" value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 60)) ? (twig_get_attribute($this->env, $this->source, $context, $context["field"], [], "any", false, false, false, 60)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context, ("field_" . $context["field"]), [], "any", false, false, false, 60), "default", [], "any", false, false, false, 60)));
                    echo "\" class=\"hide\" />
\t";
                }
                // line 62
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "<!-- CUSTOM FIELDS -->
<div id=\"custom-field-payment\">
  ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            echo " 
  ";
            // line 67
            if (((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 67) == "account") || (twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 67) == "address"))) {
                echo " 
\t<div class=\"col-sm-6 custom-field\" data-sort=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 68);
                echo "\" id=\"payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 68);
                echo "\">
\t  <label class=\"control-label\" for=\"input-payment-custom-field";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 69);
                echo "</label>
\t  ";
                // line 70
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 70) == "select")) {
                    echo " 
\t\t<select name=\"custom_field[";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 71);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 71);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 71);
                    echo "\" class=\"form-control\">
\t\t  <option value=\"\">";
                    // line 72
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t  ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 73));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  ";
                        // line 74
                        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 74) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74)] ?? null) : null)))) {
                            echo " 
\t\t  <option value=\"";
                            // line 75
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 75);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 75);
                            echo "</option>
\t\t  ";
                        } else {
                            // line 76
                            echo "   
\t\t  <option value=\"";
                            // line 77
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 77);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 77);
                            echo "</option>
\t\t  ";
                        }
                        // line 79
                        echo "\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "\t\t</select>
\t  ";
                }
                // line 82
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 82) == "radio")) {
                    echo " 
\t\t";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 83));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"radio\">
\t\t\t";
                        // line 85
                        if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["guest_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null)))) {
                            echo " 
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 87
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 87);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 87);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 88
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 88);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 89
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"radio\" name=\"custom_field[";
                            // line 91
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 91);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 91);
                            echo "\" />
\t\t\t  ";
                            // line 92
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 92);
                            echo "</label>
\t\t\t";
                        }
                        // line 94
                        echo "\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "\t  ";
                }
                // line 97
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 97) == "checkbox")) {
                    echo " 
\t\t";
                    // line 98
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 98));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        echo " 
\t\t  <div class=\"checkbox\">
\t\t\t";
                        // line 100
                        if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100), (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100)] ?? null) : null)))) {
                            // line 101
                            echo "\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 102
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 102);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 102);
                            echo "\" checked=\"checked\" />
\t\t\t  ";
                            // line 103
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 103);
                            echo "</label>
\t\t\t";
                        } else {
                            // line 104
                            echo "   
\t\t\t<label>
\t\t\t  <input type=\"checkbox\" name=\"custom_field[";
                            // line 106
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 106);
                            echo "][";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 106);
                            echo "\" />
\t\t\t  ";
                            // line 107
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 107);
                            echo "</label>
\t\t\t";
                        }
                        // line 108
                        echo " 
\t\t  </div>
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "\t  ";
                }
                // line 112
                echo "\t  ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 112) == "text")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "]\" value=\"";
                    echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["guest_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null)) ? ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 113)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 113);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "\" class=\"form-control\" />
\t  ";
                }
                // line 114
                echo " 
\t  ";
                // line 115
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 115) == "textarea")) {
                    echo " 
\t\t<textarea name=\"custom_field[";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 116);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 116);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null)) ? ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 116)));
                    echo "</textarea>
\t  ";
                }
                // line 117
                echo " 
\t  ";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 118) == "file")) {
                    echo " 
\t\t<br />
\t\t<button type=\"button\" id=\"button-payment-custom-field";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i>";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t<input type=\"hidden\" name=\"custom_field[";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 121);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    echo "]\" value=\"";
                    echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121)] ?? null) : null)) ? ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121)] ?? null) : null)) : (""));
                    echo "\" />
\t  ";
                }
                // line 122
                echo " 
\t  ";
                // line 123
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 123) == "date")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 124);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "]\" value=\"";
                    echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["guest_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null)) ? ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 124)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 124);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "\" class=\"form-control date\" />
\t  ";
                }
                // line 125
                echo " 
\t  ";
                // line 126
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 126) == "time")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 127);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "]\" value=\"";
                    echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["guest_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)) ? ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["guest_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 127)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 127);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "\" class=\"form-control time\" />
\t  ";
                }
                // line 128
                echo " 
\t  ";
                // line 129
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 129) == "datetime")) {
                    echo " 
\t\t<input type=\"text\" name=\"custom_field[";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 130);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    echo "]\" value=\"";
                    echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["guest_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130)] ?? null) : null)) ? ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["guest_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 130)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    echo "\" class=\"form-control datetime\" />
\t  ";
                }
                // line 131
                echo " 
    </div>
  ";
            }
            // line 134
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "</div>
<div id=\"captcha-checkout\">
";
        // line 137
        echo ($context["captcha"] ?? null);
        echo "
</div>
<div style=\"clear:both; ";
        // line 139
        if (( !twig_get_attribute($this->env, $this->source, ($context["shipping_checkbox"] ?? null), "display", [], "any", false, false, false, 139) &&  !twig_get_attribute($this->env, $this->source, ($context["field_register"] ?? null), "display", [], "any", false, false, false, 139))) {
            echo "margin-bottom:15px;";
        }
        echo "\"></div>
<div ";
        // line 140
        if ((twig_get_attribute($this->env, $this->source, ($context["shipping_checkbox"] ?? null), "display", [], "any", false, false, false, 140) || twig_get_attribute($this->env, $this->source, ($context["field_register"] ?? null), "display", [], "any", false, false, false, 140))) {
            echo " style=\"clear:both;margin-top:20px;padding-top:15px;border-top:1px solid #DDDDDD;\" ";
        }
        echo ">
  ";
        // line 141
        if (twig_get_attribute($this->env, $this->source, ($context["field_register"] ?? null), "display", [], "any", false, false, false, 141)) {
            echo " 
\t";
            // line 142
            if (( !($context["guest_checkout"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["field_register"] ?? null), "required", [], "any", false, false, false, 142))) {
                echo " 
\t  <input type=\"checkbox\" name=\"create_account\" value=\"1\" id=\"create\" class=\"hide\" checked=\"checked\" />
\t";
            } else {
                // line 145
                echo "\t  <input type=\"checkbox\" name=\"create_account\" value=\"1\" id=\"create\"";
                echo ((($context["create_account"] ?? null)) ? (" checked=\"checked\"") : (""));
                echo " />
\t  <label for=\"create\">";
                // line 146
                echo ($context["text_create_account"] ?? null);
                echo "</label><br />
\t";
            }
            // line 147
            echo " 
\t<div id=\"create_account\">";
            // line 148
            echo ($context["register"] ?? null);
            echo "</div>
  ";
        } else {
            // line 150
            echo "    <input type=\"checkbox\" name=\"create_account\" value=\"1\" id=\"create\" class=\"hide\" />
  ";
        }
        // line 152
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["shipping_checkbox"] ?? null), "display", [], "any", false, false, false, 152)) {
            echo " 
    <label for=\"shipping\"><input type=\"checkbox\" name=\"shipping_address\" value=\"1\" id=\"shipping\"";
            // line 153
            echo ((($context["shipping_address"] ?? null)) ? (" checked=\"checked\"") : (""));
            echo " /> ";
            echo ($context["entry_shipping"] ?? null);
            echo "</label>
  ";
        } else {
            // line 154
            echo "   
    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" id=\"shipping\" checked=\"checked\" class=\"hide\" />
  ";
        }
        // line 157
        echo "</div>

<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t// Sort the custom fields
\t\$('#custom-field-payment .custom-field[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#payment-address .col-sm-6').length) {
\t\t\t\$('#payment-address .col-sm-6').eq(\$(this).attr('data-sort')).before(this);
\t\t} 
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#payment-address .col-sm-6').length) {
\t\t\t\$('#payment-address .col-sm-6:last').after(this);
\t\t}
\t\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#payment-address .col-sm-6').length) {
\t\t\t\$('#payment-address .col-sm-6:first').before(this);
\t\t}
\t});

\t\$('#payment-address select[name=\\'customer_group_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#payment-address .custom-field').hide();
\t\t\t\t\$('#payment-address .custom-field').removeClass('required');

\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tcustom_field = json[i];

\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).removeClass('required');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
        // line 196
        if (($context["shipping_required"] ?? null)) {
            echo " 
\t\t\t\t\$('#shipping-address .custom-field').hide();
\t\t\t\t\$('#shipping-address .custom-field').removeClass('required');

\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tcustom_field = json[i];

\t\t\t\t\t\$('#shipping-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\$('#shipping-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#shipping-custom-field' + custom_field['custom_field_id']).removeClass('required');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t";
        }
        // line 211
        echo " 
\t\t\t},
\t\t\t";
        // line 213
        if (($context["debug"] ?? null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 217
        echo " 
\t\t});
\t});

\t\$('#payment-address select[name=\\'customer_group_id\\']').trigger('change');

\t\$('#payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);
\t\t\t
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

\t\$('#payment-address select[name=\\'country_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/quickcheckout/checkout/country&country_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tcache: false,
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#payment-address select[name=\\'country_id\\']').after('<i class=\"fa fa-spinner fa-spin\"></i>');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('.fa-spinner').remove();
\t\t\t},\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\$('#payment-postcode-required').addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#payment-postcode-required').removeClass('required');
\t\t\t\t}
\t\t\t\t
\t\t\t\tvar html = '';
\t\t\t\t
\t\t\t\tif (json['zone'] != '') {
\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t\t\t\t\t\t
\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 295
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t}
\t\t
\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 302
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$('#payment-address select[name=\\'zone_id\\']').html(html).trigger('change');
\t\t\t},
\t\t\t";
        // line 307
        if (($context["debug"] ?? null)) {
            echo " 
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t\t";
        }
        // line 311
        echo " 
\t\t});
\t});

\t\$('#payment-address select[name=\\'country_id\\']').trigger('change');

\t";
        // line 317
        if (($context["shipping_required"] ?? null)) {
            echo " 
\t\t// Guest Shipping Form
\t\t\$('#payment-address input[name=\\'shipping_address\\']').on('change', function() {
\t\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\t\t\$('#shipping-address').slideUp('slow');

\t\t\t\t";
            // line 323
            if (($context["shipping_required"] ?? null)) {
                echo " 
\t\t\t\treloadShippingMethod('payment');
\t\t\t\t";
            }
            // line 325
            echo " 
\t\t\t} else {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/quickcheckout/guest_shipping&customer_group_id=' + \$('#payment-address select[name=\\'customer_group_id\\']').val(),
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tcache: false,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t// Nothing at the moment
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#shipping-address .quickcheckout-content').html(html);
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#shipping-address').slideDown('slow');
\t\t\t\t\t},
\t\t\t\t\t";
            // line 339
            if (($context["debug"] ?? null)) {
                echo " 
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t\t";
            }
            // line 343
            echo " 
\t\t\t\t});
\t\t\t}
\t\t});
\t\t
\t\t";
            // line 348
            if (($context["shipping_address"] ?? null)) {
                echo " 
\t\t\$('#shipping-address').hide();
\t\t";
            } else {
                // line 350
                echo "   
\t\t\$('#payment-address input[name=\\'shipping_address\\']').trigger('change');
\t\t";
            }
            // line 352
            echo " 
\t";
        }
        // line 354
        echo "
\t\$('#payment-address select[name=\\'zone_id\\']').on('change', function() {
\t\treloadPaymentMethod();
\t\t
\t\t";
        // line 358
        if (($context["shipping_required"] ?? null)) {
            echo " 
\t\tif (\$('#payment-address input[name=\\'shipping_address\\']:checked').val()) {
\t\t\treloadShippingMethod('payment');
\t\t}
\t\t";
        }
        // line 362
        echo " 
\t});

\t// Create account
\t\$('#payment-address input[name=\\'create_account\\']').on('change', function() {
\t\tif (\$('#payment-address input[name=\\'create_account\\']:checked').val()) {
\t\t\t\$('#create_account').slideDown('slow');
\t\t} else {
\t\t\t\$('#create_account').slideUp('slow');
\t\t}
\t});

\t";
        // line 374
        if (((($context["create_account"] ?? null) ||  !($context["guest_checkout"] ?? null)) || twig_get_attribute($this->env, $this->source, ($context["field_register"] ?? null), "required", [], "any", false, false, false, 374))) {
            echo " 
\t\$('#create_account').show();
\t";
        } else {
            // line 376
            echo "   
\t\$('#create_account').hide();
\t";
        }
        // line 379
        echo "});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  968 => 379,  963 => 376,  957 => 374,  943 => 362,  935 => 358,  929 => 354,  925 => 352,  920 => 350,  914 => 348,  907 => 343,  899 => 339,  883 => 325,  877 => 323,  868 => 317,  860 => 311,  852 => 307,  844 => 302,  834 => 295,  754 => 217,  746 => 213,  742 => 211,  723 => 196,  682 => 157,  677 => 154,  670 => 153,  665 => 152,  661 => 150,  656 => 148,  653 => 147,  648 => 146,  643 => 145,  637 => 142,  633 => 141,  627 => 140,  621 => 139,  616 => 137,  612 => 135,  606 => 134,  601 => 131,  588 => 130,  584 => 129,  581 => 128,  568 => 127,  564 => 126,  561 => 125,  548 => 124,  544 => 123,  541 => 122,  532 => 121,  524 => 120,  519 => 118,  516 => 117,  503 => 116,  499 => 115,  496 => 114,  483 => 113,  478 => 112,  475 => 111,  467 => 108,  462 => 107,  454 => 106,  450 => 104,  445 => 103,  437 => 102,  434 => 101,  432 => 100,  425 => 98,  420 => 97,  417 => 96,  410 => 94,  405 => 92,  397 => 91,  393 => 89,  388 => 88,  380 => 87,  375 => 85,  368 => 83,  363 => 82,  359 => 80,  353 => 79,  346 => 77,  343 => 76,  336 => 75,  332 => 74,  326 => 73,  322 => 72,  314 => 71,  310 => 70,  304 => 69,  298 => 68,  294 => 67,  288 => 66,  284 => 64,  277 => 62,  270 => 60,  267 => 59,  255 => 57,  249 => 56,  243 => 55,  239 => 54,  234 => 53,  229 => 50,  217 => 49,  211 => 48,  207 => 46,  201 => 43,  189 => 42,  183 => 41,  178 => 39,  174 => 38,  170 => 37,  166 => 36,  163 => 35,  158 => 33,  151 => 30,  147 => 29,  143 => 28,  138 => 27,  134 => 25,  128 => 24,  121 => 22,  118 => 21,  111 => 20,  107 => 19,  101 => 18,  97 => 16,  92 => 14,  86 => 13,  79 => 11,  76 => 10,  69 => 9,  65 => 8,  59 => 7,  54 => 5,  50 => 4,  45 => 3,  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/guest.twig", "");
    }
}
