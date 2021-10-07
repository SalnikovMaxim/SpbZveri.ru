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

/* default/template/information/information.twig */
class __TwigTemplate_e1f07d529bf380878271779a01be4de10b406c8dd2146e60930ff7bc7aef363a extends \Twig\Template
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
        echo "
<div id=\"information-information\" class=\"container\">
  <div itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\" class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t<span itemscope=\"\" itemprop=\"itemListElement\" itemtype=\"http://schema.org/ListItem\" class=\"breadcrumb-item\">
\t\t\t";
            // line 6
            if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 7
                echo "\t\t\t<a itemprop=\"item\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
                echo "\">
\t\t\t\t<span itemprop=\"name\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                echo "</span>
\t\t\t\t<meta itemprop=\"position\" content=\"";
                // line 9
                echo ($context["key"] + 1);
                echo "\">
\t\t\t</a>
\t\t\t";
            } else {
                // line 12
                echo "\t\t\t<a rel=\"nofollow\" itemprop=\"item\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
                echo "\">
\t\t\t\t<span itemprop=\"name\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "</span>
\t\t\t\t<meta itemprop=\"position\" content=\"";
                // line 14
                echo ($context["key"] + 1);
                echo "\">
\t\t\t</a>
\t\t\t";
            }
            // line 17
            echo "\t\t</span>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</div>
  <div class=\"row\">";
        // line 20
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 21
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 23
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
       <h1 class=\"page-title\">";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 30
        echo ($context["description"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 31
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 33
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 33,  136 => 31,  131 => 30,  127 => 29,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  96 => 20,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/information.twig", "");
    }
}
