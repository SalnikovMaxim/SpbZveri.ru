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

/* extension/module/membership_gifts_list.twig */
class __TwigTemplate_7193880d1f2a64d2e77d4fcae8a1a356094322b183894e39893a1dcdb5ee0f27 extends \Twig\Template
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
\t\t\t<label class=\"control-label\" for=\"gifts-list-filter_name\">";
        // line 14
        echo ($context["entry_name"] ?? null);
        echo "</label>
\t\t\t<input type=\"text\" name=\"filter_name\" value=\"";
        // line 15
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"gifts-list-filter_name\" class=\"form-control\" />
\t\t</div>
\t</div>
\t<div class=\"row\" style=\"padding-top: 15px;\">
\t\t<div class=\"col-sm-4 col-sm-offset-8\">
\t\t\t<button type=\"button\" id=\"button-gifts-list-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 20
        echo ($context["button_filter"] ?? null);
        echo "</button>
\t\t</div>
\t</div>
</div>
<div class=\"panel panel-default\">
\t<div class=\"panel-heading clearfix\">
\t\t<h3 class=\"panel-title pull-left\" style=\"padding-top: 9px;\"><i class=\"fa fa-list\"></i> ";
        // line 26
        echo ($context["text_gifts_list"] ?? null);
        echo "</h3>
\t\t<div class=\"pull-right\">
\t\t\t<a href=\"";
        // line 28
        echo ($context["add"] ?? null);
        echo "\" id=\"button-gift-add\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
\t\t\t<button type=\"button\" title=\"";
        // line 29
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" data-toggle=\"tooltip\" id=\"button-delete-gifts-list\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? deleteData(this, 'gift') : false;\" disabled=\"disabled\"><i class=\"fa fa-trash-o\"></i></button>
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
        // line 39
        if ((($context["sort"] ?? null) == "name")) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 41
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 43
        echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t";
        // line 46
        if ((($context["sort"] ?? null) == "threshold")) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo ($context["sort_threshold"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_threshold"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 48
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo ($context["sort_threshold"] ?? null);
            echo "\">";
            echo ($context["column_threshold"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 50
        echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<!--
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t";
        // line 54
        if ((($context["sort"] ?? null) == "maximum_cost")) {
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo ($context["sort_maximum_cost"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_maximum_cost_gift"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 56
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo ($context["sort_maximum_cost"] ?? null);
            echo "\">";
            echo ($context["column_maximum_cost_gift"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 58
        echo " 
\t\t\t\t\t\t</td>
\t\t\t\t\t\t-->
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
            echo ($context["column_giving_quantity"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 64
            echo " 
\t\t\t\t\t\t\t<a href=\"";
            // line 65
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_giving_quantity"] ?? null);
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
        if (($context["gifts"] ?? null)) {
            echo " 
\t\t\t\t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gifts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["gift"]) {
                echo " 
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 97
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["gift"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["gift_id"] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
                // line 99
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["gift"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["name"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 100
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["gift"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["threshold"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<!--<td class=\"text-center\">";
                // line 101
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["gift"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["maximum_cost"] ?? null) : null);
                echo "</td>-->
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 102
                echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["gift"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["giving_quantity"] ?? null) : null)) ? ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["gift"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["giving_quantity"] ?? null) : null)) : ("∞"));
                echo " / ";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["gift"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["total"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 103
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["gift"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["date_start"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">";
                // line 104
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["gift"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["date_expiry"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-center\">\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 106
                if (((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["gift"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["status"] ?? null) : null) == 1)) {
                    echo "\t
\t\t\t\t\t\t\t<span class=\"label label-success\" style=\"cursor: pointer;\" onclick=\"changeStatus(this, 'gift');\">
\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo " 
\t\t\t\t\t\t\t<span class=\"label label-danger\" style=\"cursor: pointer;\" onclick=\"changeStatus(this, 'gift');\">
\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t
\t\t\t\t\t\t\t";
                // line 111
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["gift"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["status_text"] ?? null) : null);
                echo " 
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
                // line 115
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["gift"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["edit"] ?? null) : null);
                echo "\" id=\"button-gift-edit-";
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["gift"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["gift_id"] ?? null) : null);
                echo "\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"confirm('";
                // line 116
                echo ($context["text_confirm"] ?? null);
                echo "') ? deleteData(this, 'gift') : false;\" data-toggle=\"tooltip\" data-value=\"\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gift'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo " 
\t\t\t\t";
        } else {
            // line 120
            echo " 
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"9\">";
            // line 122
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 124
        echo " 
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 129
        echo ($context["pagination"] ?? null);
        echo "</div>
\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 130
        echo ($context["results"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$(function() {
\t\$('#gifts-list-filter_name').autocomplete( {
\t\t'source': function(request, response) {
\t\t\t\$.ajax( {
\t\t\t\turl: 'index.php?route=extension/module/membership/autocomplete&user_token=";
        // line 139
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\tdataType: 'json',
\t\t\t\ttype: 'POST',
\t\t\t\tdata: 'filter_gift_name=' +  encodeURIComponent(request),
\t\t\t\tbeforeSend: function () {},
\t\t\t\tcomplete: function () {},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['name']
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
\t\$('#button-gifts-list-filter').on('click', function() {
\t\tvar 
\t\t\turl = 'index.php?route=extension/module/membership/getGiftsList&user_token=";
        // line 162
        echo ($context["user_token"] ?? null);
        echo "'
\t\t\tfilter_name = \$('#gifts-list-filter_name').val();

\t\tif (filter_name) {
\t\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t\t}

\t\t\$('#gifts-list').load(url);
\t} );
} );\t
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/module/membership_gifts_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 162,  443 => 139,  431 => 130,  427 => 129,  420 => 124,  414 => 122,  410 => 120,  406 => 119,  394 => 116,  386 => 115,  379 => 111,  376 => 110,  371 => 108,  365 => 106,  360 => 104,  356 => 103,  350 => 102,  346 => 101,  342 => 100,  338 => 99,  333 => 97,  325 => 94,  321 => 93,  314 => 89,  310 => 87,  303 => 86,  300 => 85,  291 => 84,  287 => 83,  282 => 80,  275 => 79,  272 => 78,  263 => 77,  259 => 76,  254 => 73,  247 => 72,  244 => 71,  235 => 70,  231 => 69,  226 => 66,  219 => 65,  216 => 64,  207 => 63,  203 => 62,  197 => 58,  190 => 57,  187 => 56,  178 => 55,  174 => 54,  168 => 50,  161 => 49,  158 => 48,  149 => 47,  145 => 46,  140 => 43,  133 => 42,  130 => 41,  121 => 40,  117 => 39,  102 => 29,  96 => 28,  91 => 26,  82 => 20,  72 => 15,  68 => 14,  62 => 10,  55 => 7,  51 => 6,  48 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/membership_gifts_list.twig", "");
    }
}
