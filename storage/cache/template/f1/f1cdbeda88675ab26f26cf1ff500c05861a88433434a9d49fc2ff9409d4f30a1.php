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

/* extension/module/membership_cards_list.twig */
class __TwigTemplate_1705d0b7e8165e5b450753c4dc62e0bf498dcfc3c9c1b4f93c629070033fe431 extends \Twig\Template
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
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
 </div>
";
        }
        // line 5
        echo " 
";
        // line 6
        if (($context["success"] ?? null)) {
            echo " 
<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 7
            echo ($context["success"] ?? null);
            echo " 
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
</div>
";
        }
        // line 10
        echo " 
<div class=\"well\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-4\">
\t\t\t<label class=\"control-label\" for=\"cards-list-filter_cardowner\">";
        // line 14
        echo ($context["entry_cardowner"] ?? null);
        echo "</label>
\t\t\t<input type=\"text\" name=\"filter_cardowner\" value=\"";
        // line 15
        echo ($context["filter_cardowner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cardowner"] ?? null);
        echo "\" id=\"cards-list-filter_cardowner\" class=\"form-control\" />
\t\t</div>
\t\t<div class=\"col-sm-4\">
\t\t\t<label class=\"control-label\" for=\"cards-list-filter_telephone\">";
        // line 18
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
\t\t\t<input type=\"text\" name=\"filter_telephone\" value=\"";
        // line 19
        echo ($context["filter_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"cards-list-filter_telephone\" class=\"form-control\" />
\t\t</div>
\t\t<div class=\"col-sm-4\">
\t\t\t<label class=\"control-label\" for=\"cards-list-filter_code\">";
        // line 22
        echo ($context["entry_code"] ?? null);
        echo "</label>
\t\t\t<input type=\"text\" name=\"filter_code\" value=\"";
        // line 23
        echo ($context["filter_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"cards-list-filter_code\" class=\"form-control\" />
\t\t</div>
\t</div>
\t<div class=\"row\" style=\"padding-top: 15px;\">
\t\t<div class=\"col-sm-4 col-sm-offset-8\">
\t\t\t<button type=\"button\" id=\"button-cards-list-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 28
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t</div>
\t</div>
</div>
<div class=\"panel panel-default\">
\t<div class=\"panel-heading clearfix\">
\t\t<h3 class=\"panel-title pull-left\" style=\"padding-top: 9px;\"><i class=\"fa fa-list\"></i> ";
        // line 34
        echo ($context["text_discount_cards_list"] ?? null);
        echo "</h3>
\t\t<div class=\"pull-right\">
\t\t\t<a href=\"";
        // line 36
        echo ($context["add"] ?? null);
        echo "\" id=\"button-card-add\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
\t\t\t<button type=\"button\" title=\"";
        // line 37
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" data-toggle=\"tooltip\" id=\"button-delete-cards-list\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? deleteData(this, 'card') : false;\" disabled=\"disabled\"><i class=\"fa fa-trash-o\"></i></button>
\t\t</div>
\t</div>
\t<div class=\"panel-body\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked).trigger('change');\" /></td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t";
        // line 47
        if ((($context["sort"] ?? null) == "cardowner")) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo ($context["sort_cardowner"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_cardowner"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 49
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo ($context["sort_cardowner"] ?? null);
            echo "\">";
            echo ($context["column_cardowner"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 51
        echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t";
        // line 54
        if ((($context["sort"] ?? null) == "code")) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 56
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 58
        echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">";
        // line 60
        echo ($context["column_discount"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t";
        // line 62
        if ((($context["sort"] ?? null) == "total")) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_balance"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 64
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_balance"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 66
        echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t";
        // line 69
        if ((($context["sort"] ?? null) == "date_start")) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo ($context["sort_date_start"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_start"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 71
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 72
            echo ($context["sort_date_start"] ?? null);
            echo "\">";
            echo ($context["column_date_start"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 73
        echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t";
        // line 76
        if ((($context["sort"] ?? null) == "date_expiry")) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 77
            echo ($context["sort_date_expiry"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_expiry"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 78
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 79
            echo ($context["sort_date_expiry"] ?? null);
            echo "\">";
            echo ($context["column_date_expiry"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 80
        echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t";
        // line 83
        if ((($context["sort"] ?? null) == "status")) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 84
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 85
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 87
        echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">";
        // line 89
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 93
        if (($context["cards"] ?? null)) {
            echo " 
\t\t\t\t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                echo " 
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 97
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["card"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["card_id"] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 100
                if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["card"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["cardowner"] ?? null) : null)) {
                    echo " 
\t\t\t\t\t\t\t<a href=\"index.php?route=customer/customer/edit&user_token=";
                    // line 101
                    echo ($context["user_token"] ?? null);
                    echo "&customer_id=";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["card"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["customer_id"] ?? null) : null);
                    echo "\" target=\"_blank\">";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["card"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["cardowner"] ?? null) : null);
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 102
                echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 104
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["card"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["code"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 105
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["card"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["discount"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
                // line 106
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["card"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["total"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 107
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["card"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["date_start"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 108
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["card"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["date_expiry"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t";
                // line 110
                if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["card"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["status"] ?? null) : null) == 2)) {
                    echo " 
\t\t\t\t\t\t\t<span class=\"label label-warning\" style=\"cursor: pointer;\" onclick=\"changeStatus(this, 'card');\" oncontextmenu=\"changeStatus(this, 'card', 'all'); return false;\">\t
\t\t\t\t\t\t";
                } elseif (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 =                 // line 112
$context["card"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["status"] ?? null) : null) == 1)) {
                    echo "\t
\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"cursor: pointer;\" onclick=\"changeStatus(this, 'card');\" oncontextmenu=\"changeStatus(this, 'card', 'all'); return false;\">
\t\t\t\t\t\t";
                } else {
                    // line 114
                    echo " 
\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"cursor: pointer;\" onclick=\"changeStatus(this, 'card');\" oncontextmenu=\"changeStatus(this, 'card', 'all'); return false;\">
\t\t\t\t\t\t";
                }
                // line 116
                echo "\t\t
\t\t\t\t\t\t\t";
                // line 117
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["card"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["status_text"] ?? null) : null);
                echo " 
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
                // line 121
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["card"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["edit"] ?? null) : null);
                echo "\" id=\"button-card-edit-";
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["card"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["card_id"] ?? null) : null);
                echo "\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"confirm('";
                // line 122
                echo ($context["text_confirm"] ?? null);
                echo "') ? deleteData(this, 'card') : false;\" data-toggle=\"tooltip\" data-value=\"\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo " 
\t\t\t\t";
        } else {
            // line 126
            echo " 
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"9\">";
            // line 128
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 130
        echo " 
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 135
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 136
        echo ($context["results"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$(function() {
\t\$('#cards-list-filter_cardowner').autocomplete( {
\t\t'source': function(request, response) {
\t\t\t\$.ajax( {
\t\t\t\turl: 'index.php?route=extension/module/membership/autocomplete&user_token=";
        // line 145
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'POST',
\t\t\t\tdata: 'filter_cardowner=' +  encodeURIComponent(request),
\t\t\t\tbeforeSend: function () {},
\t\t\t\tcomplete: function () {},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: '<i class=\"fa fa-user\" aria-hidden=\"true\"></i> ' + item['cardowner'] + ' <i class=\"fa fa-phone\" aria-hidden=\"true\"></i> ' + item['telephone'],
\t\t\t\t\t\t\tvalue: item['cardowner']
\t\t\t\t\t\t}
\t\t\t\t\t} ));
\t\t\t\t}
\t\t\t} );
\t\t},
\t\t'select': function(item) {
\t\t\t\$(this).val(item['value']);
\t\t}
\t} );
\t
\t\$('#cards-list-filter_telephone').autocomplete( {
\t\t'source': function(request, response) {
\t\t\t\$.ajax( {
\t\t\t\turl: 'index.php?route=extension/module/membership/autocomplete&user_token=";
        // line 169
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'POST',
\t\t\t\tdata: 'filter_telephone=' +  encodeURIComponent(request),
\t\t\t\tbeforeSend: function () {},
\t\t\t\tcomplete: function () {},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: '<i class=\"fa fa-phone\" aria-hidden=\"true\"></i> ' + item['telephone'] + ' <i class=\"fa fa-user\" aria-hidden=\"true\"></i> ' + item['cardowner'],
\t\t\t\t\t\t\tvalue: item['telephone']
\t\t\t\t\t\t}
\t\t\t\t\t} ));
\t\t\t\t}
\t\t\t} );
\t\t},
\t\t'select': function(item) {
\t\t\t\$(this).val(item['value']);
\t\t}
\t} );
\t
\t\$('#cards-list-filter_code').autocomplete( {
\t\t'source': function(request, response) {
\t\t\t\$.ajax( {
\t\t\t\turl: 'index.php?route=extension/module/membership/autocomplete&user_token=";
        // line 193
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'POST',
\t\t\t\tdata: 'filter_code=' +  encodeURIComponent(request),
\t\t\t\tbeforeSend: function () {},
\t\t\t\tcomplete: function () {},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: '<i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i> ' + item['code'],
\t\t\t\t\t\t\tvalue: item['code']
\t\t\t\t\t\t}
\t\t\t\t\t} ));
\t\t\t\t}
\t\t\t} );
\t\t},
\t\t'select': function(item) {
\t\t\t\$(this).val(item['value']);
\t\t}
\t} );\t
\t
\t\$('#button-cards-list-filter').on('click', function() {
\t\tvar 
\t\t\turl = 'index.php?route=extension/module/membership/getCardsList&user_token=";
        // line 216
        echo ($context["user_token"] ?? null);
        echo "'
\t\t\tfilter_cardowner = \$('#cards-list-filter_cardowner').val(),
\t\t\tfilter_telephone = \$('#cards-list-filter_telephone').val(),
\t\t\tfilter_code = \$('#cards-list-filter_code').val();

\t\tif (filter_cardowner) {
\t\t\turl += '&filter_cardowner=' + encodeURIComponent(filter_cardowner);
\t\t}

\t\tif (filter_telephone) {
\t\t\turl += '&filter_telephone=' + encodeURIComponent(filter_telephone);
\t\t}

\t\tif (filter_code) {
\t\t\turl += '&filter_code=' + encodeURIComponent(filter_code);
\t\t}

\t\t\$('#cards-list').load(url);
\t} );
} );\t
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/module/membership_cards_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 216,  512 => 193,  485 => 169,  458 => 145,  446 => 136,  442 => 135,  435 => 130,  429 => 128,  425 => 126,  421 => 125,  409 => 122,  401 => 121,  394 => 117,  391 => 116,  386 => 114,  380 => 112,  375 => 110,  370 => 108,  366 => 107,  362 => 106,  358 => 105,  354 => 104,  350 => 102,  341 => 101,  337 => 100,  331 => 97,  323 => 94,  319 => 93,  312 => 89,  308 => 87,  301 => 86,  298 => 85,  289 => 84,  285 => 83,  280 => 80,  273 => 79,  270 => 78,  261 => 77,  257 => 76,  252 => 73,  245 => 72,  242 => 71,  233 => 70,  229 => 69,  224 => 66,  217 => 65,  214 => 64,  205 => 63,  201 => 62,  196 => 60,  192 => 58,  185 => 57,  182 => 56,  173 => 55,  169 => 54,  164 => 51,  157 => 50,  154 => 49,  145 => 48,  141 => 47,  126 => 37,  120 => 36,  115 => 34,  106 => 28,  96 => 23,  92 => 22,  84 => 19,  80 => 18,  72 => 15,  68 => 14,  62 => 10,  55 => 7,  51 => 6,  48 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/membership_cards_list.twig", "");
    }
}
