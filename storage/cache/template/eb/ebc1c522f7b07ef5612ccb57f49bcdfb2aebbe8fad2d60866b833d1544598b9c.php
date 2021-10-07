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

/* default/template/product/manufacturer_list.twig */
class __TwigTemplate_daf7344bffbebf4fa79ad2629bff6bf8b59c2f85079ad2761c10536c7b1ff17c extends \Twig\Template
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
<div id=\"product-manufacturer\" class=\"container\">
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
";
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
        echo "\t ";
        echo ($context["content_top"] ?? null);
        echo "
\t 
\t 
\t<div id=\"content\" class=\"brand-list\">
\t\t<h1 class=\"page-title\">";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "<span class=\"totalman\">";
        echo ($context["totalm"] ?? null);
        echo "</span></h1>
\t\t";
        // line 33
        if (($context["categories"] ?? null)) {
            // line 34
            echo "\t\t<div class=\"brend-sort-list\">
\t\t\t<strong>Все бренды: </strong> 
\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 37
                echo "\t\t\t<a href=\"index.php?route=product/manufacturer#";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37);
                echo "</a> 
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo " 
\t\t</div>
\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 41
                echo "\t\t<div id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                echo "\" class=\"brend-sort-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                echo "</div>
\t\t";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "\t\t<div class=\"row marginbmanuf\"> 
 
\t\t\t";
                    // line 45
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 45));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                        // line 46
                        echo "\t\t\t<div class=\"col-brend\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 46);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 46);
                        echo "</a></div>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo " 
 
\t\t</div>
\t\t";
                }
                // line 51
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t";
        } else {
            // line 53
            echo "\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t<div class=\"buttons clearfix\">
\t\t<div class=\"pull-right\"><a href=\"";
            // line 55
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t</div>
\t\t";
        }
        // line 58
        echo "\t</div>
\t
\t
   ";
        // line 61
        echo ($context["content_bottom"] ?? null);
        echo "
    ";
        // line 62
        echo ($context["column_right"] ?? null);
        echo " 
</div>
";
        // line 64
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 64,  229 => 62,  225 => 61,  220 => 58,  212 => 55,  206 => 53,  203 => 52,  197 => 51,  191 => 47,  180 => 46,  176 => 45,  172 => 43,  170 => 42,  163 => 41,  159 => 40,  155 => 38,  144 => 37,  140 => 36,  136 => 34,  134 => 33,  128 => 32,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  96 => 20,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/manufacturer_list.twig", "");
    }
}
