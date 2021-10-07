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

/* extension/module/membership_cards_history.twig */
class __TwigTemplate_e7a5d85603b850211b4b2898dbcba558b7272d75aeb3819c825b000a045988ad extends \Twig\Template
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
        echo "<div class=\"table-responsive\">
<div class=\"pull-right\" style=\"padding-bottom: 7px;\">
\t<button type=\"button\" title=\"";
        // line 3
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" data-toggle=\"tooltip\" id=\"button-delete-card-histories\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? deleteData(this, 'cardHistory') : false;\" disabled=\"disabled\"><i class=\"fa fa-trash-o\"></i></button>
</div>
\t<table class=\"table table-bordered table-hover\" id=\"table-history\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked).trigger('change');\" /></td>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t";
        // line 10
        if ((($context["sort"] ?? null) == "order_id")) {
            echo " 
\t\t\t\t\t<a href=\"";
            // line 11
            echo ($context["sort_order_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>
\t\t\t\t";
        } else {
            // line 12
            echo " 
\t\t\t\t\t<a href=\"";
            // line 13
            echo ($context["sort_order_id"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a>
\t\t\t\t";
        }
        // line 14
        echo "\t
\t\t\t\t</td>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t";
        // line 17
        if ((($context["sort"] ?? null) == "customer")) {
            echo " 
\t\t\t\t\t<a href=\"";
            // line 18
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
\t\t\t\t";
        } else {
            // line 19
            echo " 
\t\t\t\t\t<a href=\"";
            // line 20
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a>
\t\t\t\t";
        }
        // line 21
        echo " 
\t\t\t\t</td>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t";
        // line 24
        if ((($context["sort"] ?? null) == "total_without_discount")) {
            echo " 
\t\t\t\t\t<a href=\"";
            // line 25
            echo ($context["sort_total_without_discount"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total_without_discount"] ?? null);
            echo "</a>
\t\t\t\t";
        } else {
            // line 26
            echo " 
\t\t\t\t\t<a href=\"";
            // line 27
            echo ($context["sort_total_without_discount"] ?? null);
            echo "\">";
            echo ($context["column_total_without_discount"] ?? null);
            echo "</a>
\t\t\t\t";
        }
        // line 28
        echo " 
\t\t\t\t</td>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t";
        // line 31
        if ((($context["sort"] ?? null) == "discount")) {
            echo " 
\t\t\t\t\t<a href=\"";
            // line 32
            echo ($context["sort_discount"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_discount"] ?? null);
            echo "</a>
\t\t\t\t";
        } else {
            // line 33
            echo " 
\t\t\t\t\t<a href=\"";
            // line 34
            echo ($context["sort_discount"] ?? null);
            echo "\">";
            echo ($context["column_discount"] ?? null);
            echo "</a>
\t\t\t\t";
        }
        // line 35
        echo " 
\t\t\t\t</td>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t";
        // line 38
        if ((($context["sort"] ?? null) == "total")) {
            echo " 
\t\t\t\t\t<a href=\"";
            // line 39
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a>
\t\t\t\t";
        } else {
            // line 40
            echo " 
\t\t\t\t\t<a href=\"";
            // line 41
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a>
\t\t\t\t";
        }
        // line 42
        echo " 
\t\t\t\t</td>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t";
        // line 45
        if ((($context["sort"] ?? null) == "datetime_added")) {
            echo " 
\t\t\t\t\t<a href=\"";
            // line 46
            echo ($context["sort_datetime_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_datetime_added"] ?? null);
            echo "</a>
\t\t\t\t";
        } else {
            // line 47
            echo " 
\t\t\t\t\t<a href=\"";
            // line 48
            echo ($context["sort_datetime_added"] ?? null);
            echo "\">";
            echo ($context["column_datetime_added"] ?? null);
            echo "</a>
\t\t\t\t";
        }
        // line 49
        echo " 
\t\t\t\t</td>
\t\t\t\t<td class=\"text-center\">";
        // line 51
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t</tr>
    \t</thead>
    \t<tbody>
    \t";
        // line 55
        if (($context["histories"] ?? null)) {
            echo " 
    \t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                echo " 
    \t\t";
                // line 57
                if ( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["history"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["status"] ?? null) : null)) {
                    // line 58
                    echo "\t\t\t";
                    $context["history_total"] = (($context["history_total"] ?? null) - 1);
                    echo " 
    \t\t<tr class=\"danger\">
    \t\t";
                } else {
                    // line 60
                    echo " 
    \t\t<tr>
    \t\t";
                }
                // line 62
                echo " 
    \t\t\t<td class=\"text-center\">
\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 64
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["history"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["card_history_id"] ?? null) : null);
                echo "\" />
\t\t\t\t</td>
    \t\t\t<td class=\"text-center\">
    \t\t\t";
                // line 67
                if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["history"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["order_id"] ?? null) : null)) {
                    echo " 
\t\t\t\t\t<a href=\"index.php?route=sale/order/info&user_token=";
                    // line 68
                    echo ($context["user_token"] ?? null);
                    echo "&order_id=";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["history"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["order_id"] ?? null) : null);
                    echo "\" target=\"_blank\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["history"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["order_id"] ?? null) : null);
                    echo "</a>
\t\t\t\t";
                }
                // line 69
                echo " 
    \t\t\t</td>
    \t\t\t<td class=\"text-center\">";
                // line 71
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["history"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["customer"] ?? null) : null);
                echo "</td>
    \t\t\t<td class=\"text-center\">";
                // line 72
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["history"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["total_without_discount"] ?? null) : null);
                echo "</td>
    \t\t\t<td class=\"text-center\">";
                // line 73
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["history"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["discount"] ?? null) : null);
                echo "</td>
    \t\t\t<td class=\"text-center\">";
                // line 74
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["history"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["total"] ?? null) : null);
                echo "</td>
    \t\t\t<td class=\"text-center\">";
                // line 75
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["history"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["datetime_added"] ?? null) : null);
                echo "</td>
    \t\t\t<td class=\"text-center\"><button type=\"button\" onclick=\"confirm('";
                // line 76
                echo ($context["text_confirm"] ?? null);
                echo "') ? deleteData(this, 'cardHistory') : false;\" class=\"btn btn-danger\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></button></td>
    \t\t</tr>\t
    \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo " 
    \t";
        } else {
            // line 79
            echo " 
    \t\t<tr>
        \t\t<td class=\"text-center\" colspan=\"8\">";
            // line 81
            echo ($context["text_no_results"] ?? null);
            echo "</td>
        \t</tr>
      \t";
        }
        // line 83
        echo " 
    \t</tbody>
    \t<tfoot style=\"font-weight: bold;\">
    \t\t<tr>
    \t\t\t<td colspan=\"8\"><strong>";
        // line 87
        echo ($context["text_total"] ?? null);
        echo ":</strong></td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td></td>
    \t\t\t<td class=\"text-center\" style=\"vertical-align: middle;\">";
        // line 91
        echo ($context["history_total"] ?? null);
        echo "</td>
    \t\t\t<td></td>
    \t\t\t<td id=\"history-total_without_discount\" class=\"text-center\" style=\"vertical-align: middle;\">";
        // line 93
        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["card_totals"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["total_without_discount"] ?? null) : null);
        echo "</td>
    \t\t\t<td id=\"history-discount\" class=\"text-center\" style=\"vertical-align: middle;\">";
        // line 94
        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["card_totals"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["discount"] ?? null) : null);
        echo "</td>
    \t\t\t<td id=\"history-total\" class=\"text-center\" style=\"vertical-align: middle;\">";
        // line 95
        echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["card_totals"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["total"] ?? null) : null);
        echo "</td>
    \t\t\t<td></td>
    \t\t\t<td class=\"text-center\"><button type=\"button\" id=\"button-edit-totals\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 97
        echo ($context["button_edit"] ?? null);
        echo "\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></button></td>
    \t\t</tr>
\t\t</tfoot>
    </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 103
        echo ($context["pagination"] ?? null);
        echo "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 104
        echo ($context["results"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$(function() {
\t\$('#table-history').on('click', '#button-edit-totals', function() {
\t\tvar 
\t\t\t\$td_total_without_discount = \$('#history-total_without_discount'),
\t\t\t\$td_discount = \$('#history-discount'),
\t\t\t\$td_total = \$('#history-total'),
\t\t\t\$input_total_without_discount = \$('<input type=\"text\" name=\"history_total_without_discount\" value=\"' + \$td_total_without_discount.text() + '\" id=\"input-history-total_without_discount\" class=\"form-control\">'),
\t\t\t\$input_discount = \$('<input type=\"text\" name=\"history_discount\" value=\"' + \$td_discount.text() + '\" id=\"input-history-discount\" class=\"form-control\">'),
\t\t\t\$input_total = \$('<input type=\"text\" name=\"history_total\" value=\"' + \$td_total.text() + '\" id=\"input-history-total\" class=\"form-control\">');
\t\t
\t\t\$td_total_without_discount.html(\$input_total_without_discount);
\t\t\$td_discount.html(\$input_discount);
\t\t\$td_total.html(\$input_total);
\t\t
\t\t\$(this).replaceWith('<button type=\"button\" id=\"button-save-totals\" class=\"btn btn-success\" data-toggle=\"tooltip\" title=\"";
        // line 121
        echo ($context["button_save"] ?? null);
        echo "\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></button>');
\t} );

\t\$('#table-history').on('click', '#button-save-totals', function() {
\t\tvar 
\t\t\t\$input_total_without_discount = \$('#input-history-total_without_discount'),
\t\t\t\$input_discount = \$('#input-history-discount'),
\t\t\t\$input_total = \$('#input-history-total');
\t\t
\t\t\$.ajax( {
\t\t\turl: 'index.php?route=extension/module/membership/changeCardTotals&user_token=";
        // line 131
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\ttype: 'POST',
\t\t\tdata: '&card_id=";
        // line 133
        echo ($context["card_id"] ?? null);
        echo "&total_without_discount=' +  parseFloat(\$input_total_without_discount.val()) + '&discount=' +  parseFloat(\$input_discount.val()) + '&total=' +  parseFloat(\$input_total.val()),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tif (typeof json['card_history_id'] != 'undefined') {
\t\t\t\t\tvar row = '<tr style=\"display: none;\">';
\t\t\t
\t\t\t\t\trow += '<td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"' + json['card_history_id'] + '\" /></td>';
\t\t\t\t\trow += '<td class=\"text-center\">0</td>';
\t\t\t\t\trow += '<td></td>';
\t\t\t\t\trow += '<td class=\"text-center\">' + json['total_without_discount'] + '</td>';
\t\t\t\t\trow += '<td class=\"text-center\">' + json['discount'] + '</td>';
\t\t\t\t\trow += '<td class=\"text-center\">' + json['total'] + '</td>';
\t\t\t\t\trow += '<td></td>';
\t\t\t\t\trow += '<td class=\"text-center\"><button type=\"button\" onclick=\"deleteData(this, \\'deleteCardHistory\\');\" data-toggle=\"tooltip\" title=\"";
        // line 146
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></button></td>';
\t\t\t\t\trow += '</tr>';
\t\t\t\t\t\t
\t\t\t\t\t\$('#table-history tbody').append(row).find('tr:last').show('slow');
\t\t\t\t}
\t\t\t}
\t\t});

\t\t\$input_total_without_discount.parent().html(\$input_total_without_discount.val());
\t\t\$input_discount.parent().html(\$input_discount.val());
\t\t\$input_total.parent().html(\$input_total.val());
\t\t
\t\t\$(this).replaceWith('<button type=\"button\" id=\"button-edit-totals\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 158
        echo ($context["button_edit"] ?? null);
        echo "\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></button>');
\t} );
} );
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/module/membership_cards_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 158,  421 => 146,  405 => 133,  400 => 131,  387 => 121,  367 => 104,  363 => 103,  354 => 97,  349 => 95,  345 => 94,  341 => 93,  336 => 91,  329 => 87,  323 => 83,  317 => 81,  313 => 79,  309 => 78,  298 => 76,  294 => 75,  290 => 74,  286 => 73,  282 => 72,  278 => 71,  274 => 69,  265 => 68,  261 => 67,  255 => 64,  251 => 62,  246 => 60,  239 => 58,  237 => 57,  231 => 56,  227 => 55,  220 => 51,  216 => 49,  209 => 48,  206 => 47,  197 => 46,  193 => 45,  188 => 42,  181 => 41,  178 => 40,  169 => 39,  165 => 38,  160 => 35,  153 => 34,  150 => 33,  141 => 32,  137 => 31,  132 => 28,  125 => 27,  122 => 26,  113 => 25,  109 => 24,  104 => 21,  97 => 20,  94 => 19,  85 => 18,  81 => 17,  76 => 14,  69 => 13,  66 => 12,  57 => 11,  53 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/membership_cards_history.twig", "");
    }
}
