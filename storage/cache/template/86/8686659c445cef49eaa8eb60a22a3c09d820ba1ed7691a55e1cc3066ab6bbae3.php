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

/* sale/recurring_list.twig */
class __TwigTemplate_2d406f2cee5f4d3c15e4fcdbc1b19c6c50ae8051358a5f67a12895011be09bf5 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-recurring').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"row\">
      <div id=\"filter-recurring\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 30
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-recurring-id\">";
        // line 34
        echo ($context["entry_order_recurring_id"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_order_recurring_id\" value=\"";
        // line 35
        echo ($context["filter_order_recurring_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_recurring_id"] ?? null);
        echo "\" id=\"input-order-recurring-id\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer\">";
        // line 38
        echo ($context["entry_customer"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 39
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-id\">";
        // line 42
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 43
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 46
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurring_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring_status"]) {
            // line 50
            echo "                  ";
            if ((($context["filter_status"] ?? null) == twig_get_attribute($this->env, $this->source, $context["recurring_status"], "value", [], "any", false, false, false, 50))) {
                // line 51
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "value", [], "any", false, false, false, 51);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "text", [], "any", false, false, false, 51);
                echo "</option>
                  ";
            } else {
                // line 53
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "value", [], "any", false, false, false, 53);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring_status"], "text", [], "any", false, false, false, 53);
                echo "</option>
                  ";
            }
            // line 55
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-reference\">";
        // line 59
        echo ($context["entry_reference"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_reference\" value=\"";
        // line 60
        echo ($context["filter_reference"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reference"] ?? null);
        echo "\" id=\"input-reference\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-date_added\">";
        // line 63
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 65
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-date_added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span> </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 71
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 79
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-right\">";
        // line 87
        if ((($context["sort"] ?? null) == "or.order_recurring_id")) {
            echo " <a href=\"";
            echo ($context["sort_order_recurring"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_recurring_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order_recurring"] ?? null);
            echo "\">";
            echo ($context["column_order_recurring_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 88
        if ((($context["sort"] ?? null) == "or.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 89
        if ((($context["sort"] ?? null) == "or.reference")) {
            echo " <a href=\"";
            echo ($context["sort_reference"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_reference"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_reference"] ?? null);
            echo "\">";
            echo ($context["column_reference"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 90
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 91
        if ((($context["sort"] ?? null) == "or.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 92
        if ((($context["sort"] ?? null) == "or.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 93
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 98
        if (($context["recurrings"] ?? null)) {
            // line 99
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 100
                echo "                  <tr>
                    <td class=\"text-right\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order_recurring_id", [], "any", false, false, false, 101);
                echo "</td>
                    <td class=\"text-right\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order_id", [], "any", false, false, false, 102);
                echo "</td>
                    <td class=\"text-left\">";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "reference", [], "any", false, false, false, 103);
                echo "</td>
                    <td class=\"text-left\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "customer", [], "any", false, false, false, 104);
                echo "</td>
                    <td class=\"text-left\">";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "status", [], "any", false, false, false, 105);
                echo "</td>
                    <td class=\"text-left\">";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "date_added", [], "any", false, false, false, 106);
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "view", [], "any", false, false, false, 107);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_order_recurring"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "order", [], "any", false, false, false, 107);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_order"] ?? null);
                echo "\" class=\"btn btn-info\"><i class=\"fa fa-shopping-cart\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                  ";
        } else {
            // line 111
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"7\">";
            // line 112
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 115
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 121
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 122
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=sale/recurring&user_token=";
        // line 131
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_order_recurring_id = \$('input[name=\\'filter_order_recurring_id\\']').val();

\tif (filter_order_recurring_id) {
\t\turl += '&filter_order_recurring_id=' + encodeURIComponent(filter_order_recurring_id);
\t}

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_reference = \$('input[name=\\'filter_reference\\']').val();
\t
\tif (filter_reference) {
\t\turl += '&filter_reference=' + encodeURIComponent(filter_reference);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();
\t
\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status != 0) {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}
\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added != '') {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}
\t\t
\tlocation = url;
});

\$('#form input').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\tfilter();
\t}
});

\$('.date').datetimepicker({ 
\tlanguage: '";
        // line 179
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false 
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 187
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 204
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/recurring_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 204,  499 => 187,  488 => 179,  437 => 131,  425 => 122,  421 => 121,  413 => 115,  407 => 112,  404 => 111,  401 => 110,  386 => 107,  382 => 106,  378 => 105,  374 => 104,  370 => 103,  366 => 102,  362 => 101,  359 => 100,  354 => 99,  352 => 98,  344 => 93,  326 => 92,  308 => 91,  290 => 90,  272 => 89,  254 => 88,  236 => 87,  225 => 79,  214 => 71,  203 => 65,  198 => 63,  190 => 60,  186 => 59,  175 => 55,  167 => 53,  159 => 51,  156 => 50,  152 => 49,  146 => 46,  138 => 43,  134 => 42,  126 => 39,  122 => 38,  114 => 35,  110 => 34,  103 => 30,  97 => 26,  89 => 22,  86 => 21,  78 => 17,  76 => 16,  71 => 13,  60 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/recurring_list.twig", "");
    }
}
