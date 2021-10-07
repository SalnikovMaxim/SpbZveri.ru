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

/* sale/order_list.twig */
class __TwigTemplate_0ec992093eae94234d209577f26e020cb02bd054445914365fb26d2f8843ca6e extends \Twig\Template
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
\t
\t<button id=\"export-orders\" formaction=\"";
        // line 7
        echo ($context["export"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"Экспорт\" class=\"btn btn-warning\"><i class=\"fa fa-upload\" aria-hidden=\"true\"></i></button>
\t  
\t";
        // line 9
        if (($context["module_admin_quick_edit_enabled"] ?? null)) {
            echo "<label for=\"batch_edit\" class=\"hidden\" id=\"batch-edit-container\"><input type=\"checkbox\" id=\"batch-edit\"";
            echo ((($context["batch_edit"] ?? null)) ? (" checked") : (""));
            echo "> ";
            echo ($context["text_batch_edit"] ?? null);
            echo "</label>";
        }
        // line 10
        echo "
\t\t";
        // line 11
        if (($context["module_admin_quick_edit_enabled"] ?? null)) {
            echo "<label for=\"batch_edit\" class=\"hidden\" id=\"batch-edit-container\"><input type=\"checkbox\" id=\"batch-edit\"";
            echo ((($context["batch_edit"] ?? null)) ? (" checked") : (""));
            echo "> ";
            echo ($context["text_batch_edit"] ?? null);
            echo "</label>";
        }
        // line 12
        echo "\t\t\t
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 13
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 14
        echo ($context["shipping"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_shipping_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
  
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 16
        echo ($context["invoice"] ?? null);
        echo "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_invoice_print"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <a href=\"";
        // line 17
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> 
\t  
\t  <button id=\"button-delete-orders\" formaction=\"";
        // line 19
        echo ($context["delete_orders"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
\t  
\t  </div>
    <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 25
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 25);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">";
        // line 30
        if (($context["error_warning"] ?? null)) {
            // line 31
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 35
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 36
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 40
        echo "  <div class=\"row\">
\t";
        // line 41
        if (($context["module_admin_quick_edit_enabled"] ?? null)) {
            // line 42
            echo "\t<div class=\"alerts\">
\t\t<div class=\"container-fluid\" id=\"alerts\">
\t\t</div>
\t</div>
\t";
        }
        // line 47
        echo "
\t\t";
        // line 48
        if (($context["module_admin_quick_edit_enabled"] ?? null)) {
            // line 49
            echo "\t\t<div class=\"alerts\">
\t\t\t<div class=\"container-fluid\" id=\"alerts\">
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 54
        echo "\t\t\t
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 58
        echo ($context["text_filter"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 62
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 63
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 66
        echo ($context["entry_customer"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 67
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 70
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              
              ";
        // line 74
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 75
            echo "              
              <option value=\"0\" selected=\"selected\">";
            // line 76
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        } else {
            // line 79
            echo "              
              <option value=\"0\">";
            // line 80
            echo ($context["text_missing"] ?? null);
            echo "</option>
              
              ";
        }
        // line 83
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 84
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 84) == ($context["filter_order_status_id"] ?? null))) {
                // line 85
                echo "              
              <option value=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 86);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 86);
                echo "</option>
              
              ";
            } else {
                // line 89
                echo "              
              <option value=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 90);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 90);
                echo "</option>
              
              ";
            }
            // line 93
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            
            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 98
        echo ($context["entry_total"] ?? null);
        echo "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 99
        echo ($context["filter_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 102
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 104
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 110
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 112
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 118
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
        // line 126
        echo ($context["text_list"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked).trigger('change');\" /></td>
                    <td class=\"text-right\">";
        // line 135
        if ((($context["sort"] ?? null) == "o.order_id")) {
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
        // line 136
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
        // line 137
        if ((($context["sort"] ?? null) == "order_status")) {
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
                    <td class=\"text-right\">";
        // line 138
        if ((($context["sort"] ?? null) == "o.total")) {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_total"] ?? null);
            echo "\">";
            echo ($context["column_total"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                    <td class=\"text-left\">";
        // line 139
        if ((($context["sort"] ?? null) == "o.date_added")) {
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
                   ";
        // line 141
        echo "                    <td class=\"text-center\">";
        if ((($context["sort"] ?? null) == "o.delivery_datetime")) {
            echo " <a href=\"";
            echo ($context["sort_delivery_datetime"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["text_delivery_datetime"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_delivery_datetime"] ?? null);
            echo "\">";
            echo ($context["text_delivery_datetime"] ?? null);
            echo "</a> ";
        }
        echo "</td>
\t\t\t\t\t<td class=\"text-right\">";
        // line 142
        echo ($context["column_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 147
        if (($context["orders"] ?? null)) {
            // line 148
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 149
                echo "                <tr>
                  <td class=\"text-center\"> ";
                // line 150
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 150), ($context["selected"] ?? null))) {
                    // line 151
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 151);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 153
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 153);
                    echo "\" />
                    ";
                }
                // line 155
                echo "                    <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 155);
                echo "\" /></td>
                  <td class=\"text-right\">";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 156);
                echo "</td>
                  <td class=\"text-left\">";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 157);
                echo "</td>
                 ";
                // line 163
                echo "\t\t\t\t ";
                if (($context["module_admin_quick_edit_enabled"] ?? null)) {
                    // line 164
                    echo "\t\t\t\t<td class=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column_info"] ?? null), "status", [], "any", false, false, false, 164), "align", [], "any", false, false, false, 164);
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column_info"] ?? null), "status", [], "any", false, false, false, 164), "qe_status", [], "any", false, false, false, 164)) ? ((" " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column_info"] ?? null), "status", [], "any", false, false, false, 164), "type", [], "any", false, false, false, 164))) : (""));
                    echo "\" id=\"status-";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 164);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 164);
                    echo "</td>
\t\t\t\t";
                } else {
                    // line 166
                    echo "\t\t\t\t";
                    if (($context["module_admin_quick_edit_enabled"] ?? null)) {
                        // line 167
                        echo "\t\t<td class=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column_info"] ?? null), "status", [], "any", false, false, false, 167), "align", [], "any", false, false, false, 167);
                        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column_info"] ?? null), "status", [], "any", false, false, false, 167), "qe_status", [], "any", false, false, false, 167)) ? ((" " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column_info"] ?? null), "status", [], "any", false, false, false, 167), "type", [], "any", false, false, false, 167))) : (""));
                        echo "\" id=\"status-";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 167);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 167);
                        echo "</td>
\t\t";
                    } else {
                        // line 169
                        echo "\t\t<td class=\"text-left\">";
                        echo twig_get_attribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 169);
                        echo "</td>
\t\t";
                    }
                    // line 171
                    echo "\t\t\t\t";
                }
                // line 172
                echo "                  <td class=\"text-right\">";
                echo twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 172);
                echo "</td>
                  <td class=\"text-left\">";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 173);
                echo "</td>
                  ";
                // line 175
                echo "\t\t\t\t  
\t\t\t\t  <td class=\"text-center delivery_datetime\">
\t\t\t\t\t<a href=\"#\" class=\"edit\" data-order_id=\"";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 177);
                echo "\">";
                if ( !twig_get_attribute($this->env, $this->source, $context["order"], "delivery_datetime", [], "any", false, false, false, 177)) {
                    echo "Установить";
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["order"], "delivery_datetime", [], "any", false, false, false, 177);
                }
                echo "</a>
\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t <input type=\"text\" name=\"delivery_datetime\" id=\"delivery_datetime\" class=\"form-control\" value=\"";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["order"], "delivery_datetime", [], "any", false, false, false, 179);
                echo "\" data-date-format=\"DD-MM-YYYY HH:mm\" class=\"form-control\" />
\t\t\t\t\t <button name=\"set\" class=\"btn btn-primary\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t <button name=\"cancel\" class=\"btn btn-primary\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t\t  
                  <td class=\"text-right\"><div style=\"min-width: 120px;\">
                      <div class=\"btn-group\"> <a href=\"";
                // line 186
                echo twig_get_attribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 186);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_view"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li><a href=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 189);
                echo "\"><i class=\"fa fa-pencil\"></i> ";
                echo ($context["button_edit"] ?? null);
                echo "</a></li>
                          <li><a href=\"";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 190);
                echo "\"><i class=\"fa fa-trash-o\"></i> ";
                echo ($context["button_delete"] ?? null);
                echo "</a></li>
                        </ul>
                      </div>
                    </div></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "                ";
        } else {
            // line 197
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 198
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 201
        echo "                  </tbody>
                
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 207
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 208
        echo ($context["results"] ?? null);
        echo "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = '';

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

\tif (filter_order_status_id !== '') {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}

\tvar filter_total = \$('input[name=\\'filter_total\\']').val();

\tif (filter_total) {
\t\turl += '&filter_total=' + encodeURIComponent(filter_total);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}

\tlocation = 'index.php?route=sale/order&user_token=";
        // line 254
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 261
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
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name^=\\'selected\\']').on('change', function() {
\t\$('#button-shipping, #button-invoice').prop('disabled', true);

\tvar selected = \$('input[name^=\\'selected\\']:checked');

\tif (selected.length) {
\t\t\$('#button-invoice').prop('disabled', false);
\t}

\tfor (i = 0; i < selected.length; i++) {
\t\tif (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
\t\t\t\$('#button-shipping').prop('disabled', false);

\t\t\tbreak;
\t\t}
\t}
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice').on('click', function(e) {
\t\$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$('#form-order li:last-child a').on('click', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\tif (confirm('";
        // line 311
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 313
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/delete&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "&order_id=' + \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();
\t
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t
\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 329
        echo ($context["delete"] ?? null);
        echo "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script> 
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 343
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script></div>

<style>
  .delivery_datetime a.edit {
  text-decoration: none;
  border-bottom:1px dotted;
  }
  .delivery_datetime .inner {
    display: none;
  }
  </style>
  <script>
\$('.delivery_datetime a.edit').click(function() {
        var parent = \$(this).parent(),
            inner = parent.find('.inner'),
            self = \$(this),
            order_id = self.data('order_id'),
            datetime = parent.find('input[name=delivery_datetime]'),
            set = parent.find('button[name=set]'),
            cancel = parent.find('button[name=cancel]');
        self.hide();
        inner.show();
        
        \$(datetime).datetimepicker();
        
        \$(set).click(function() {
                \$.ajax({
                        url: 'index.php?route=sale/order/updateDeliveryDatetime&user_token=";
        // line 373
        echo ($context["user_token"] ?? null);
        echo "',
                        dataType: 'json',
                        method: 'POST',
                        data: {
                                'order_id': order_id,
                                'datetime': \$(datetime).val()
                        },
                        success: function(json) {
                        if (json.success == true) {
                            
                            if (json.datetime != '')
                            self.text(json.datetime);
                            else
                            self.text('---');
                            }
                            
                                self.show();
                                inner.hide();
                        }
                });
                return false;
        });
        \$(cancel).click(function() {
                self.show();
                inner.hide();
                return false;
        });
        return false;
});
  </script>
  
<script>
\t\$('#button-delete-orders').on('click', function(e) {
\t\t\$('#form-order').attr('action', this.getAttribute('formAction'));

\t\tif (confirm('";
        // line 408
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\t\$('#form-order').submit();
\t\t} else {
\t\t\treturn false;
\t\t}
\t});

\t\$('#export-orders').on('click', function(e) {
\t\t\$('#form-order').attr('action', this.getAttribute('formAction'));

\t\tif (confirm('";
        // line 418
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\t\$('#form-order').submit();
\t\t} else {
\t\t\treturn false;
\t\t}
\t});
</script>

";
        // line 426
        if (($context["module_admin_quick_edit_enabled"] ?? null)) {
            // line 427
            echo "<script type=\"text/javascript\"><!--
!function(t,e){t.batch_edit=parseInt(\"";
            // line 428
            echo (($context["batch_edit"] ?? null) * 1);
            echo "\"),t.texts=e.extend({},t.texts,{error_ajax_request:\"";
            echo ($context["error_ajax_request"] ?? null);
            echo "\"}),e(function(){e(\".status_qe\").editable(function(i,o){var a=e(\"#notify\",this).is(\":checked\")?1:0,n={notify:a};return t.quick_update(this,i,o,\"";
            echo ($context["update_url"] ?? null);
            echo "\",n).done(e.proxy(t.update_finished,{column:e(this).attr(\"id\").split(\"-\")[0]})).fail(e.proxy(t.update_failed,this)),o.indicator},{type:\"status_edit\",data:\"";
            echo twig_trim_filter(($context["status_select"] ?? null));
            echo "\",indicator:\"";
            echo ($context["text_saving"] ?? null);
            echo "\",tooltip:\"";
            echo ($context["module_admin_quick_edit_tooltip"] ?? null);
            echo "\",event:\"";
            echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
            echo "\",onblur:\"cancel\",notify_customer_text:\"";
            echo ($context["text_notify_customer"] ?? null);
            echo "\",notify_customer:parseInt(\"";
            echo (($context["notify_customer"] ?? null) * 1);
            echo "\")})})}(window.bull5i=window.bull5i||{},jQuery);
//--></script>
";
        }
        // line 431
        echo "
\t\t";
        // line 432
        if (($context["module_admin_quick_edit_enabled"] ?? null)) {
            // line 433
            echo "\t\t<script type=\"text/javascript\"><!--
\t\t!function(t,e){t.batch_edit=parseInt(\"";
            // line 434
            echo (($context["batch_edit"] ?? null) * 1);
            echo "\"),t.texts=e.extend({},t.texts,{error_ajax_request:\"";
            echo ($context["error_ajax_request"] ?? null);
            echo "\"}),e(function(){e(\".status_qe\").editable(function(i,o){var a=e(\"#notify\",this).is(\":checked\")?1:0,n={notify:a};return t.quick_update(this,i,o,\"";
            echo ($context["update_url"] ?? null);
            echo "\",n).done(e.proxy(t.update_finished,{column:e(this).attr(\"id\").split(\"-\")[0]})).fail(e.proxy(t.update_failed,this)),o.indicator},{type:\"status_edit\",data:\"";
            echo twig_trim_filter(($context["status_select"] ?? null));
            echo "\",indicator:\"";
            echo ($context["text_saving"] ?? null);
            echo "\",tooltip:\"";
            echo ($context["module_admin_quick_edit_tooltip"] ?? null);
            echo "\",event:\"";
            echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
            echo "\",onblur:\"cancel\",notify_customer_text:\"";
            echo ($context["text_notify_customer"] ?? null);
            echo "\",notify_customer:parseInt(\"";
            echo (($context["notify_customer"] ?? null) * 1);
            echo "\")})})}(window.bull5i=window.bull5i||{},jQuery);
\t\t//--></script>
\t\t";
        }
        // line 437
        echo "\t\t\t
";
        // line 438
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  938 => 438,  935 => 437,  913 => 434,  910 => 433,  908 => 432,  905 => 431,  883 => 428,  880 => 427,  878 => 426,  867 => 418,  854 => 408,  816 => 373,  783 => 343,  766 => 329,  743 => 313,  738 => 311,  685 => 261,  675 => 254,  626 => 208,  622 => 207,  614 => 201,  608 => 198,  605 => 197,  602 => 196,  588 => 190,  582 => 189,  574 => 186,  564 => 179,  553 => 177,  549 => 175,  545 => 173,  540 => 172,  537 => 171,  531 => 169,  520 => 167,  517 => 166,  506 => 164,  503 => 163,  499 => 157,  495 => 156,  490 => 155,  484 => 153,  478 => 151,  476 => 150,  473 => 149,  468 => 148,  466 => 147,  458 => 142,  439 => 141,  421 => 139,  403 => 138,  385 => 137,  367 => 136,  349 => 135,  337 => 126,  326 => 118,  315 => 112,  310 => 110,  299 => 104,  294 => 102,  286 => 99,  282 => 98,  276 => 94,  270 => 93,  262 => 90,  259 => 89,  251 => 86,  248 => 85,  245 => 84,  240 => 83,  234 => 80,  231 => 79,  225 => 76,  222 => 75,  220 => 74,  213 => 70,  205 => 67,  201 => 66,  193 => 63,  189 => 62,  182 => 58,  176 => 54,  169 => 49,  167 => 48,  164 => 47,  157 => 42,  155 => 41,  152 => 40,  144 => 36,  141 => 35,  133 => 31,  131 => 30,  126 => 27,  115 => 25,  111 => 24,  106 => 22,  98 => 19,  91 => 17,  85 => 16,  78 => 14,  74 => 13,  71 => 12,  63 => 11,  60 => 10,  52 => 9,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
