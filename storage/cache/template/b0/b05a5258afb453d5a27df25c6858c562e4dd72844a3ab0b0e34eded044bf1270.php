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

/* extension/module/membership_card_form.twig */
class __TwigTemplate_2de5e9c5b1356e7efea304edf0bec665a77db4f40ed49ded02ef01eb2004979e extends \Twig\Template
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
        echo "<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"pull-right\">
\t\t\t<button type=\"button\" onclick=\"saveCard();\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> ";
        // line 4
        echo ($context["button_save"] ?? null);
        echo "</button>
\t\t</div>
\t\t<div class=\"pull-left\">
\t\t\t<h3>";
        // line 7
        echo ($context["text_form"] ?? null);
        echo "</h3>
\t\t</div>
\t</div>
</div>
<br>
<ul class=\"nav nav-tabs\">
\t<li class=\"active\"><a href=\"#card-main-settings\" data-toggle=\"tab\">";
        // line 13
        echo ($context["text_main"] ?? null);
        echo "</a></li>
\t";
        // line 14
        if (($context["card_id"] ?? null)) {
            echo " 
\t<li><a href=\"#card-history\" data-toggle=\"tab\">";
            // line 15
            echo ($context["text_history"] ?? null);
            echo "</a></li>
\t";
        }
        // line 16
        echo " 
</ul>
<div class=\"tab-content\">
\t<div class=\"tab-pane active\" id=\"card-main-settings\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"card-owner_status-enabled\">";
        // line 21
        echo ($context["entry_card_status"] ?? null);
        echo "</label>
\t\t    <div class=\"col-sm-4\">
\t\t      \t<div class=\"radio-switch\">
\t\t      \t";
        // line 24
        if (($context["status"] ?? null)) {
            echo " 
\t\t\t\t\t<input type=\"radio\" name=\"status\" value=\"0\" id=\"card-owner_status-disabled\">
\t                <label class=\"col-sm-4\" for=\"card-owner_status-enabled\">";
            // line 26
            echo ($context["text_disabled"] ?? null);
            echo "</label>
\t\t      \t\t<input type=\"radio\" name=\"status\" value=\"1\" id=\"card-owner_status-enabled\" checked>
\t                <label class=\"col-sm-4\" for=\"card-owner_status-disabled\">";
            // line 28
            echo ($context["text_enabled"] ?? null);
            echo "</label>
\t\t\t\t";
        } else {
            // line 29
            echo " 
\t                <input type=\"radio\" name=\"status\" value=\"0\" id=\"card-owner_status-disabled\" checked>
\t                <label class=\"col-sm-4\" for=\"card-owner_status-enabled\">";
            // line 31
            echo ($context["text_disabled"] ?? null);
            echo "</label>
\t                <input type=\"radio\" name=\"status\" value=\"1\" id=\"card-owner_status-enabled\">
\t                <label class=\"col-sm-4\" for=\"card-owner_status-disabled\">";
            // line 33
            echo ($context["text_enabled"] ?? null);
            echo "</label>  
\t\t\t\t";
        }
        // line 34
        echo " 
\t\t      \t</div>
\t\t    </div>
\t\t</div>
\t    <div class=\"form-group required\">
\t    \t<label class=\"col-sm-2 control-label\" for=\"cardowner\"><span data-toggle=\"tooltip\" title=\"";
        // line 39
        echo ($context["help_cardowner"] ?? null);
        echo "\">";
        echo ($context["entry_cardowner"] ?? null);
        echo "</span></label>
\t    \t<div class=\"col-sm-10\">
\t    \t\t<input type=\"text\" name=\"cardowner\" value=\"";
        // line 41
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["cardowner"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_cardowner"] ?? null);
        echo "\" id=\"cardowner\" class=\"form-control\" />
\t    \t\t<input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 42
        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["cardowner"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["customer_id"] ?? null) : null);
        echo "\" id=\"customer_id\" />
\t    \t\t";
        // line 43
        if (($context["error_cardowner"] ?? null)) {
            echo " 
\t    \t\t<div class=\"text-danger\">";
            // line 44
            echo ($context["error_cardowner"] ?? null);
            echo "</div>
\t    \t\t";
        }
        // line 45
        echo " 
\t    \t</div>
\t    </div>
\t    <div class=\"form-group\">
\t    \t<label class=\"col-sm-2 control-label\" for=\"telephone\"><span data-toggle=\"tooltip\" title=\"";
        // line 49
        echo ($context["help_telephone"] ?? null);
        echo "\">";
        echo ($context["entry_telephone"] ?? null);
        echo "</span></label>
\t    \t<div class=\"col-sm-10\">
\t    \t\t<input type=\"text\" name=\"telephone\" value=\"";
        // line 51
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"telephone\" class=\"form-control\" disabled />
\t    \t</div>
\t    </div>
\t    <div class=\"form-group\">
\t    \t<label class=\"col-sm-2 control-label\" for=\"email\"><span data-toggle=\"tooltip\" title=\"";
        // line 55
        echo ($context["help_email"] ?? null);
        echo "\">";
        echo ($context["entry_email"] ?? null);
        echo "</span></label>
\t    \t<div class=\"col-sm-10\">
\t    \t\t<input type=\"text\" name=\"email\" value=\"";
        // line 57
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"email\" class=\"form-control\" disabled />
\t    \t\t";
        // line 58
        if (($context["error_email"] ?? null)) {
            echo " 
\t\t    \t<div class=\"text-danger\">";
            // line 59
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t    \t";
        }
        // line 60
        echo " 
\t    \t</div>
\t    </div>
\t    <div class=\"form-group required\">
\t    \t<label class=\"col-sm-2 control-label\" for=\"card-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 64
        echo ($context["help_code"] ?? null);
        echo "\">";
        echo ($context["entry_code"] ?? null);
        echo "</span></label>
\t    \t<div class=\"col-sm-10\">
\t    \t\t<div class=\"input-group\">
\t    \t\t\t<input type=\"text\" name=\"code\" value=\"";
        // line 67
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"card-code\" class=\"form-control\" />
\t    \t\t\t<span class=\"input-group-btn\">
\t    \t\t\t\t<button id=\"generate-code\" onclick=\"generateCardCode();\" type=\"button\" class=\"btn btn-info\" data-toggle=\"tooltip\" title=\"";
        // line 69
        echo ($context["button_generate"] ?? null);
        echo "\"><i class=\"fa fa-cog\"></i></button>
\t    \t\t\t</span>
\t    \t\t</div>
\t    \t\t";
        // line 72
        if (($context["error_code"] ?? null)) {
            echo " 
\t    \t\t<div class=\"text-danger\">";
            // line 73
            echo ($context["error_code"] ?? null);
            echo "</div>
\t    \t\t";
        }
        // line 74
        echo "\t
\t    \t</div>
\t    </div>
\t    <div class=\"form-group\">
\t    \t<label class=\"col-sm-2 control-label\" for=\"card-date_start\">";
        // line 78
        echo ($context["entry_start"] ?? null);
        echo "</label>
\t    \t<div class=\"col-sm-4\">
\t    \t\t<div class=\"input-group date\">
\t    \t\t\t<input type=\"text\" name=\"date_start\" value=\"";
        // line 81
        echo ($context["date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"card-date_start\" class=\"form-control\" />
\t    \t\t\t<span class=\"input-group-btn\">
\t    \t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t    \t\t\t</span>
\t    \t\t</div>
\t    \t</div>
\t    \t<label class=\"col-sm-2 control-label\" for=\"card-date_expiry\">";
        // line 87
        echo ($context["entry_expiry"] ?? null);
        echo "</label>
\t    \t<div class=\"col-sm-4\">
\t    \t\t<div class=\"input-group date\">
\t    \t\t\t<input type=\"text\" name=\"date_expiry\" value=\"";
        // line 90
        echo ($context["date_expiry"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_expiry"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"card-date_expiry\" class=\"form-control\" />
\t    \t\t\t<span class=\"input-group-btn\">
\t    \t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t    \t\t\t</span>
\t    \t\t</div>
\t    \t</div>
\t    </div>
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-table\"></i> ";
        // line 99
        echo ($context["text_discount_table"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-bordered table-hover\" id=\"table-card-discounts\">
\t\t\t\t\t    <thead>
\t\t\t\t\t        <tr>
\t\t\t\t\t            <td class=\"text-center\">";
        // line 106
        echo ($context["column_discount_base"] ?? null);
        echo "</td>
\t\t\t\t\t            <td class=\"text-center\">";
        // line 107
        echo ($context["column_discount_limit"] ?? null);
        echo "</td>
\t\t\t\t\t            <td class=\"text-center\">";
        // line 108
        echo ($context["column_discount_value"] ?? null);
        echo "</td>
\t\t\t\t\t            <td class=\"text-center\">";
        // line 109
        echo ($context["column_discount_type"] ?? null);
        echo "</td>
\t\t\t\t\t            <td class=\"text-center\">";
        // line 110
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t        </tr>
\t\t\t\t\t    </thead>
\t\t\t\t\t    <tbody>
\t\t\t\t\t    ";
        // line 114
        if (($context["discount"] ?? null)) {
            echo " 
\t\t\t\t\t\t";
            // line 115
            $context["count"] = 0;
            echo " 
\t\t\t\t\t\t\t";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["discount"]);
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                echo " 
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t    <select name=\"discount[";
                // line 119
                echo ($context["count"] ?? null);
                echo "][base]\" id=\"discount-base\" class=\"form-control\">
\t\t\t\t\t\t\t\t    ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discount_base"] ?? null));
                foreach ($context['_seq'] as $context["v"] => $context["n"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t    ";
                    // line 121
                    if (($context["v"] == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["discount"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["base"] ?? null) : null))) {
                        echo " 
\t\t\t\t\t\t\t\t\t    <option value=\"";
                        // line 122
                        echo $context["v"];
                        echo "\" selected=\"selected\">";
                        echo $context["n"];
                        echo "</option>
\t\t\t\t\t\t\t\t\t    ";
                    } else {
                        // line 123
                        echo " 
\t\t\t\t\t\t\t\t\t    <option value=\"";
                        // line 124
                        echo $context["v"];
                        echo "\">";
                        echo $context["n"];
                        echo "</option>
\t\t\t\t\t\t\t\t\t    ";
                    }
                    // line 125
                    echo " 
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['v'], $context['n'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo " 
\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t    <input type=\"text\" name=\"discount[";
                // line 130
                echo ($context["count"] ?? null);
                echo "][limit]\" value=\"";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["discount"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["limit"] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["column_discount_limit"] ?? null);
                echo "\" id=\"discount-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t    <input type=\"text\" name=\"discount[";
                // line 133
                echo ($context["count"] ?? null);
                echo "][value]\" value=\"";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["discount"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["value"] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["column_discount_value"] ?? null);
                echo "\" id=\"discount-value\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t    <select name=\"discount[";
                // line 136
                echo ($context["count"] ?? null);
                echo "][type]\" id=\"discount-type\" class=\"form-control\">
\t\t\t\t\t\t\t\t    ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discount_type"] ?? null));
                foreach ($context['_seq'] as $context["v"] => $context["n"]) {
                    echo " 
\t\t\t\t\t\t\t\t        ";
                    // line 138
                    if (($context["v"] == twig_get_attribute($this->env, $this->source, $context["discount"], "type", [], "any", false, false, false, 138))) {
                        echo " 
\t\t\t\t\t\t\t\t        <option value=\"";
                        // line 139
                        echo $context["v"];
                        echo "\" selected=\"selected\">";
                        echo $context["n"];
                        echo "</option>
\t\t\t\t\t\t\t\t        ";
                    } else {
                        // line 140
                        echo " 
\t\t\t\t\t\t\t\t        <option value=\"";
                        // line 141
                        echo $context["v"];
                        echo "\">";
                        echo $context["n"];
                        echo "</option>
\t\t\t\t\t\t\t\t        ";
                    }
                    // line 142
                    echo " 
\t\t\t\t\t\t\t\t    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['v'], $context['n'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo " 
\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t    <button type=\"button\" onclick=\"\$(this).parents('tr').remove()\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                // line 150
                $context["count"] = (($context["count"] ?? null) + 1);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t\t\t\t\t";
        }
        // line 151
        echo " 
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\"></td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t    <button type=\"button\" onclick=\"addDiscount('table-card-discounts', 'discount');\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tfoot>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"card-category\">";
        // line 166
        echo ($context["entry_categories"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 168
        echo ($context["entry_categories"] ?? null);
        echo "\" id=\"card-category\" class=\"form-control\" />
\t\t\t\t<div id=\"card-categories\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t";
        // line 170
        if (($context["categories"] ?? null)) {
            echo " 
\t\t\t\t\t";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " 
\t\t\t\t\t<div id=\"card-categories-";
                // line 172
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["category"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["category_id"] ?? null) : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["category"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                echo " 
\t\t\t\t\t\t<input type=\"hidden\" name=\"categories[]\" value=\"";
                // line 173
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["category"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["category_id"] ?? null) : null);
                echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo " 
\t\t\t\t";
        }
        // line 176
        echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"card-product\">";
        // line 181
        echo ($context["entry_products"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 183
        echo ($context["entry_products"] ?? null);
        echo "\" id=\"card-product\" class=\"form-control\" />
\t\t\t\t<div id=\"card-products\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t";
        // line 185
        if (($context["products"] ?? null)) {
            echo " 
\t\t\t\t\t";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
\t\t\t\t\t<div id=\"card-products-";
                // line 187
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["product"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["product_id"] ?? null) : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["product"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["name"] ?? null) : null);
                echo " 
\t\t\t\t\t\t<input type=\"hidden\" name=\"products[]\" value=\"";
                // line 188
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["product"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["product_id"] ?? null) : null);
                echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo " 
\t\t\t\t";
        }
        // line 191
        echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"card-logged-enabled\">";
        // line 196
        echo ($context["entry_logged"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-2\">
\t\t      \t<div class=\"radio-switch\">
\t\t      \t";
        // line 199
        if ( !($context["logged"] ?? null)) {
            echo " 
\t\t\t\t\t<input type=\"radio\" name=\"logged\" value=\"0\" id=\"card-logged-disabled\">
\t                <label class=\"col-sm-4\" for=\"card-logged-enabled\">";
            // line 201
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t      \t\t<input type=\"radio\" name=\"logged\" value=\"1\" id=\"card-logged-enabled\" checked>
\t                <label class=\"col-sm-4\" for=\"card-logged-disabled\">";
            // line 203
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t";
        } else {
            // line 204
            echo " 
\t                <input type=\"radio\" name=\"logged\" value=\"0\" id=\"card-logged-disabled\" checked>
\t                <label class=\"col-sm-4\" for=\"card-logged-enabled\">";
            // line 206
            echo ($context["text_no"] ?? null);
            echo "</label>
\t                <input type=\"radio\" name=\"logged\" value=\"1\" id=\"card-logged-enabled\">
\t                <label class=\"col-sm-4\" for=\"card-logged-disabled\">";
            // line 208
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t";
        }
        // line 209
        echo " 
\t\t      \t</div>
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">    
\t\t\t<label class=\"col-sm-2 control-label\" for=\"card-free_shipping-enabled\">";
        // line 214
        echo ($context["entry_free_shipping"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-2\">
\t\t      \t<div class=\"radio-switch\">
\t\t      \t";
        // line 217
        if ( !($context["free_shipping"] ?? null)) {
            echo " 
\t\t\t\t\t<input type=\"radio\" name=\"free_shipping\" value=\"0\" id=\"card-free_shipping-disabled\">
\t                <label class=\"col-sm-4\" for=\"card-free_shipping-enabled\">";
            // line 219
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t      \t\t<input type=\"radio\" name=\"free_shipping\" value=\"1\" id=\"card-free_shipping-enabled\" checked>
\t                <label class=\"col-sm-4\" for=\"card-free_shipping-disabled\">";
            // line 221
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t";
        } else {
            // line 222
            echo " 
\t                <input type=\"radio\" name=\"free_shipping\" value=\"0\" id=\"card-free_shipping-disabled\" checked>
\t                <label class=\"col-sm-4\" for=\"card-free_shipping-enabled\">";
            // line 224
            echo ($context["text_no"] ?? null);
            echo "</label>
\t                <input type=\"radio\" name=\"free_shipping\" value=\"1\" id=\"card-free_shipping-enabled\">
\t                <label class=\"col-sm-4\" for=\"card-free_shipping-disabled\">";
            // line 226
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t";
        }
        // line 227
        echo " 
\t\t      \t</div>
\t\t    </div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"card-minimum_order_amount\">";
        // line 232
        echo ($context["entry_minimum_order_amount"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" name=\"minimum_order_amount\" value=\"";
        // line 235
        echo ($context["minimum_order_amount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum_order_amount"] ?? null);
        echo "\" id=\"card-minimum_order_amount\" class=\"form-control\" />
\t\t\t\t\t<span class=\"input-group-addon\">";
        // line 236
        echo ($context["currency_symbol"] ?? null);
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"card-maximum_order_amount\">";
        // line 241
        echo ($context["entry_maximum_order_amount"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" name=\"maximum_order_amount\" value=\"";
        // line 244
        echo ($context["maximum_order_amount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_maximum_order_amount"] ?? null);
        echo "\" id=\"card-maximum_order_amount\" class=\"form-control\" />
\t\t\t\t\t<span class=\"input-group-addon\">";
        // line 245
        echo ($context["currency_symbol"] ?? null);
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"card-uses_total\">";
        // line 250
        echo ($context["entry_uses_total"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"uses_total\" value=\"";
        // line 252
        echo ($context["uses_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"card-uses_total\" class=\"form-control\" />
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"card-uses_customer\">";
        // line 256
        echo ($context["entry_uses_customer"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"uses_customer\" value=\"";
        // line 258
        echo ($context["uses_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"card-uses_customer\" class=\"form-control\" />
\t\t\t</div>
\t\t</div>
\t</div>
    ";
        // line 262
        if (($context["card_id"] ?? null)) {
            echo " 
    <div class=\"tab-pane\" id=\"card-history\"></div>
    ";
        }
        // line 264
        echo " 
</div>

<script type=\"text/javascript\"><!--
function saveCard() {
\tvar 
\t\t\$container = \$('#card-form'),
\t\tpost_data = \$container.find('input, select, textarea').serialize();
\t
\t\$.ajax( {
\t\turl: '";
        // line 274
        echo ($context["action"] ?? null);
        echo "'.replace(/&amp;/g, '&'),
\t\ttype: 'POST',
\t\tdata: post_data,
\t\tdataType: 'html',
\t\tsuccess: function (data, textStatus, jqXHR) {
\t\t\tif (data.match(/button\\-cards\\-list\\-filter/i)) {
\t\t\t\t\$('#menu-cards-list').tab('show');
\t\t\t\t\$('#cards-list').html(data);
\t\t\t} else {
\t\t\t\t\$container.html(data);
\t\t\t}
\t\t}
\t} );
}

function generateCardCode() {
\t\$.ajax( {
\t\turl: 'index.php?route=extension/module/membership/getCardCode&user_token=";
        // line 291
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'POST',
\t\tdataType: 'json',
\t\tbeforeSend: function () {
\t\t\t\$('#generate-code > i').addClass('fa-spin');
\t\t},
\t\tcomplete: function () {
\t\t\t\$('#generate-code > i').removeClass('fa-spin');
\t\t},
\t\tsuccess: function (json) {
\t\t\tif (json['code']) {
\t\t\t\t\$('#card-code').val(json['code'][0]);
\t\t\t}
 
\t\t}
\t} );
}

\$(function() {
\t\$('.date').datetimepicker( {pickTime: false} );
\t
\t// Cardowner
\t\$('#cardowner').autocomplete( {
\t\t'source': function(request, response) {
\t\t\t\$.ajax( {
\t\t\t\turl: 'index.php?route=extension/module/membership/autocomplete&user_token=";
        // line 316
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'POST',
\t\t\t\tdata: 'cardowner=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function () {},
\t\t\t\tcomplete: function () {},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: '<i class=\"fa fa-user\" aria-hidden=\"true\"></i> ' + item['cardowner'] + ' <i class=\"fa fa-phone\" aria-hidden=\"true\"></i> ' + item['telephone'] + ' <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> ' + item['email'],
\t\t\t\t\t\t\tvalue: item['customer_id'],
\t\t\t\t\t\t\tcardowner: item['cardowner'],
\t\t\t\t\t\t\ttelephone: item['telephone'],
\t\t\t\t\t\t\temail: item['email']
\t\t\t\t\t\t}
\t\t\t\t\t} ) );
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\t\$(this).val(item['cardowner']);
\t\t\t\$('#customer_id').val(item['value']);
\t\t\t\$('#telephone').val(item['telephone']);
\t\t\t\$('#email').val(item['email']);
\t\t}
\t});
\t
\t\$('#cardowner').on('change', function() {
\t\t\$('#customer_id').val('');
\t} );

    // Categories
    \$('#card-category').autocomplete( {
        'source': function(request, response) {
            \$.ajax( {
                url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 351
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
                dataType: 'json',
                beforeSend: function () {},
                complete: function () {},
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            label: item['name'],
                            value: item['category_id']
                        }
                    } ) );
                }
            } );
        },
        'select': function(item) {
            this.value = '';

            \$('#card-categories-' + item['value']).remove();

            \$('#card-categories').append('<div id=\"card-categories-' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"categories[]\" value=\"' + item['value'] + '\" /></div>');
        }
    } );

    \$('#card-categories').delegate('.fa-minus-circle', 'click', function() {
        \$(this).parent().remove();
    } );
\t
\t// Products
\t\$('#card-product').autocomplete( {
\t\t'source': function(request, response) {
\t\t\t\$.ajax( {
\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 382
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
\t\t\t\$('#card-products-' + item['value']).remove();
\t\t\t
\t\t\t\$('#card-products').append('<div id=\"card-products-' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"products[]\" value=\"' + item['value'] + '\" /></div>');\t
\t\t}
\t} );

\t\$('#card-products').delegate('.fa-minus-circle', 'click', function() {
\t\t\$(this).parent().remove();
\t} );
} );

//--></script>
";
        // line 411
        if (($context["card_id"] ?? null)) {
            // line 412
            echo "<script type=\"text/javascript\"><!--\t\t\t
\$('#card-history').load('index.php?route=extension/module/membership/getCardHistory&user_token=";
            // line 413
            echo ($context["user_token"] ?? null);
            echo "&card_id=";
            echo ($context["card_id"] ?? null);
            echo "');
//--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "extension/module/membership_card_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  874 => 413,  871 => 412,  869 => 411,  837 => 382,  803 => 351,  765 => 316,  737 => 291,  717 => 274,  705 => 264,  699 => 262,  690 => 258,  685 => 256,  676 => 252,  671 => 250,  663 => 245,  657 => 244,  651 => 241,  643 => 236,  637 => 235,  631 => 232,  624 => 227,  619 => 226,  614 => 224,  610 => 222,  605 => 221,  600 => 219,  595 => 217,  589 => 214,  582 => 209,  577 => 208,  572 => 206,  568 => 204,  563 => 203,  558 => 201,  553 => 199,  547 => 196,  540 => 191,  536 => 190,  527 => 188,  521 => 187,  515 => 186,  511 => 185,  506 => 183,  501 => 181,  494 => 176,  490 => 175,  481 => 173,  475 => 172,  469 => 171,  465 => 170,  460 => 168,  455 => 166,  438 => 151,  428 => 150,  419 => 143,  412 => 142,  405 => 141,  402 => 140,  395 => 139,  391 => 138,  385 => 137,  381 => 136,  371 => 133,  361 => 130,  355 => 126,  348 => 125,  341 => 124,  338 => 123,  331 => 122,  327 => 121,  321 => 120,  317 => 119,  309 => 116,  305 => 115,  301 => 114,  294 => 110,  290 => 109,  286 => 108,  282 => 107,  278 => 106,  268 => 99,  254 => 90,  248 => 87,  237 => 81,  231 => 78,  225 => 74,  220 => 73,  216 => 72,  210 => 69,  203 => 67,  195 => 64,  189 => 60,  184 => 59,  180 => 58,  174 => 57,  167 => 55,  158 => 51,  151 => 49,  145 => 45,  140 => 44,  136 => 43,  132 => 42,  126 => 41,  119 => 39,  112 => 34,  107 => 33,  102 => 31,  98 => 29,  93 => 28,  88 => 26,  83 => 24,  77 => 21,  70 => 16,  65 => 15,  61 => 14,  57 => 13,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/membership_card_form.twig", "");
    }
}
