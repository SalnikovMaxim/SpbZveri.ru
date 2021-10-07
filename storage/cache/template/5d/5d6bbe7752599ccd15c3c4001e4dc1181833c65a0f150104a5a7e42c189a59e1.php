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

/* extension/module/ocfilter_page_list.twig */
class __TwigTemplate_7a2bf34e0fd4b864742792957c41320f4a94cb5d00806036ceac26f9df827c5a extends \Twig\Template
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
        echo "') ? \$('#form-page').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        <form action=\"";
        // line 30
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-page\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t              <td class=\"left\">";
        // line 36
        echo ($context["column_title"] ?? null);
        echo "</td>
\t\t              <td class=\"left\">";
        // line 37
        echo ($context["column_category"] ?? null);
        echo "</td>
\t\t              <td class=\"left\">";
        // line 38
        echo ($context["column_status"] ?? null);
        echo "</td>
\t\t              <td class=\"right\">";
        // line 39
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 43
        if (($context["pages"] ?? null)) {
            // line 44
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                echo "                <tr>
                  <td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["page"], "selected", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "ocfilter_page_id", [], "any", false, false, false, 48);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 50
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["page"], "ocfilter_page_id", [], "any", false, false, false, 50);
                    echo "\" />
                    ";
                }
                // line 52
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t              <td class=\"left\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 53);
                echo "</td>
\t\t              <td class=\"left\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["page"], "category", [], "any", false, false, false, 54);
                echo "</td>
\t\t              <td class=\"right\">
\t\t\t\t\t\t\t\t\t\t";
                // line 56
                echo ((twig_get_attribute($this->env, $this->source, $context["page"], "status", [], "any", false, false, false, 56)) ? (($context["text_enabled"] ?? null)) : (($context["text_disabled"] ?? null)));
                echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t              <td class=\"right\">
                    <a href=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["page"], "edit", [], "any", false, false, false, 59);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t              </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                ";
        } else {
            // line 64
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 65
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 68
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 73
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 74
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 80
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocfilter_page_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 80,  216 => 74,  212 => 73,  205 => 68,  199 => 65,  196 => 64,  193 => 63,  181 => 59,  175 => 56,  170 => 54,  166 => 53,  163 => 52,  157 => 50,  151 => 48,  149 => 47,  145 => 45,  140 => 44,  138 => 43,  131 => 39,  127 => 38,  123 => 37,  119 => 36,  110 => 30,  106 => 28,  98 => 24,  95 => 23,  87 => 19,  85 => 18,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter_page_list.twig", "");
    }
}
