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

/* extension/module/ocfilter_list.twig */
class __TwigTemplate_6548c4da69445bed4d50c4a56ce14c4ae8e931f999b849c7f6ec01537747398b extends \Twig\Template
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
\t\t\t\t<a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 34
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 35
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-category-id\">";
        // line 38
        echo ($context["entry_category"] ?? null);
        echo "</label>
                <select name=\"filter_category_id\" id=\"input-category-id\" class=\"form-control ocfilter-categories\" autocomplete=\"off\">
                  <option value=\"\"></option>
                  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 42
            echo "                  ";
            if (( !(null === ($context["filter_category_id"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 42) == ($context["filter_category_id"] ?? null)))) {
                // line 43
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 43);
                echo "\" class=\"level-";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 43);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                echo "</option>
                  ";
            } else {
                // line 45
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 45);
                echo "\" class=\"level-";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "level", [], "any", false, false, false, 45);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45);
                echo "</option>
                  ";
            }
            // line 47
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </select>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-type\">";
        // line 53
        echo ($context["entry_type"] ?? null);
        echo "</label>
                <select name=\"filter_type\" id=\"input-type\" class=\"form-control\" autocomplete=\"off\">
                  <option value=\"\"></option>
                  ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["type"]) {
            // line 57
            echo "                  ";
            if (( !(null === ($context["filter_type"] ?? null)) && ($context["key"] == ($context["filter_type"] ?? null)))) {
                // line 58
                echo "                  <option value=\"";
                echo $context["key"];
                echo "\" selected=\"selected\">";
                echo $context["type"];
                echo "</option>
                  ";
            } else {
                // line 60
                echo "                  <option value=\"";
                echo $context["key"];
                echo "\">";
                echo $context["type"];
                echo "</option>
                  ";
            }
            // line 62
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </select>
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 66
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\" autocomplete=\"off\">
                  <option value=\"\"></option>
                  ";
        // line 69
        if ((null === ($context["filter_status"] ?? null))) {
            // line 70
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 71
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } elseif (        // line 72
($context["filter_status"] ?? null)) {
            // line 73
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 74
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 76
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 77
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 79
        echo "                </select>
              </div>
              <button type=\"button\" onclick=\"ocfilter.list.filter(); return false;\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 81
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div><!-- /.well -->

        <form action=\"";
        // line 86
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t              <td class=\"left\"><a href=\"";
        // line 92
        echo ($context["sort_name"] ?? null);
        echo "\" ";
        echo (((($context["sort"] ?? null) == "ood.name")) ? ((("class=\"" . twig_lower_filter($this->env, ($context["order"] ?? null))) . "\"")) : (""));
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
\t\t              <td class=\"left\">";
        // line 93
        echo ($context["column_values"] ?? null);
        echo "</td>
\t\t              <td class=\"left\">";
        // line 94
        echo ($context["column_categories"] ?? null);
        echo "</td>
\t\t              <td class=\"left\">";
        // line 95
        echo ($context["column_type"] ?? null);
        echo "</td>
\t\t              <td class=\"right\"><a href=\"";
        // line 96
        echo ($context["sort_order"] ?? null);
        echo "\" ";
        echo (((($context["sort"] ?? null) == "oo.sort_order")) ? ((("class=\"" . twig_lower_filter($this->env, ($context["order"] ?? null))) . "\"")) : (""));
        echo ">";
        echo ($context["column_sort_order"] ?? null);
        echo "</a></td>
\t\t              <td class=\"right\">";
        // line 97
        echo ($context["column_status"] ?? null);
        echo "</td>
\t\t              <td class=\"right\">";
        // line 98
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 102
        if (($context["options"] ?? null)) {
            // line 103
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 104
                echo "                <tr>
                  <td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 106
                if (twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, false, 106)) {
                    // line 107
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 107);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 109
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 109);
                    echo "\" />
                    ";
                }
                // line 111
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t              <td class=\"left\">
                    <input type=\"text\" name=\"name\" value=\"";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 113);
                echo "\" size=\"40\" class=\"edit\" for=\"";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 113);
                echo "\" />
                  </td>
\t\t              <td class=\"left\">";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["option"], "values", [], "any", false, false, false, 115);
                echo "</td>
\t\t              <td class=\"left\">";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["option"], "categories", [], "any", false, false, false, 116);
                echo "</td>
\t\t              <td class=\"left\">
\t\t                <select class=\"edit\" name=\"type\" for=\"";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 118);
                echo "\">
\t\t                  <option value=\"\">";
                // line 119
                echo ($context["text_none"] ?? null);
                echo "</option>
                      ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["type"]) {
                    // line 121
                    echo "                      ";
                    if (($context["key"] == twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 121))) {
                        // line 122
                        echo "                      <option value=\"";
                        echo $context["key"];
                        echo "\" selected=\"selected\">";
                        echo $context["type"];
                        echo "</option>
                      ";
                    } else {
                        // line 124
                        echo "                      <option value=\"";
                        echo $context["key"];
                        echo "\">";
                        echo $context["type"];
                        echo "</option>
                      ";
                    }
                    // line 126
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "\t\t                </select>
\t\t\t\t\t\t\t\t\t</td>
\t\t              <td class=\"right\"><input type=\"text\" name=\"sort_order\" value=\"";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["option"], "sort_order", [], "any", false, false, false, 129);
                echo "\" size=\"6\" class=\"edit\" for=\"";
                echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 129);
                echo "\" style=\"text-align: right;\" /></td>
\t\t              <td class=\"right\">
\t\t\t\t\t\t\t\t\t\t";
                // line 131
                if (twig_get_attribute($this->env, $this->source, $context["option"], "status", [], "any", false, false, false, 131)) {
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" class=\"edit\" name=\"status\" value=\"1\" for=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 132);
                    echo "\" checked=\"checked\" /> <span>";
                    echo ($context["text_enabled"] ?? null);
                    echo "</span></label>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" class=\"edit\" name=\"status\" value=\"1\" for=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 134);
                    echo "\" /> <span>";
                    echo ($context["text_disabled"] ?? null);
                    echo "</span></label>
                    ";
                }
                // line 136
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t              <td class=\"right\">
                    <a href=\"";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["option"], "edit", [], "any", false, false, false, 138);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t              </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                ";
        } else {
            // line 143
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 144
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 147
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 152
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 153
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
\t<script type=\"text/javascript\"><!--

  ocfilter.php.filter_get = [
    'filter_name',
    'filter_category_id',
    'filter_type',
    'filter_status'
  ];

\tocfilter.php.text_enabled = '";
        // line 167
        echo ($context["text_enabled"] ?? null);
        echo "';
\tocfilter.php.text_disabled = '";
        // line 168
        echo ($context["text_disabled"] ?? null);
        echo "';

\t//--></script>
</div>
";
        // line 172
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocfilter_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 172,  482 => 168,  478 => 167,  461 => 153,  457 => 152,  450 => 147,  444 => 144,  441 => 143,  438 => 142,  426 => 138,  422 => 136,  414 => 134,  406 => 132,  404 => 131,  397 => 129,  393 => 127,  387 => 126,  379 => 124,  371 => 122,  368 => 121,  364 => 120,  360 => 119,  356 => 118,  351 => 116,  347 => 115,  340 => 113,  336 => 111,  330 => 109,  324 => 107,  322 => 106,  318 => 104,  313 => 103,  311 => 102,  304 => 98,  300 => 97,  292 => 96,  288 => 95,  284 => 94,  280 => 93,  272 => 92,  263 => 86,  255 => 81,  251 => 79,  246 => 77,  241 => 76,  236 => 74,  231 => 73,  229 => 72,  225 => 71,  220 => 70,  218 => 69,  212 => 66,  207 => 63,  201 => 62,  193 => 60,  185 => 58,  182 => 57,  178 => 56,  172 => 53,  165 => 48,  159 => 47,  149 => 45,  139 => 43,  136 => 42,  132 => 41,  126 => 38,  118 => 35,  114 => 34,  106 => 28,  98 => 24,  95 => 23,  87 => 19,  85 => 18,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter_list.twig", "");
    }
}
