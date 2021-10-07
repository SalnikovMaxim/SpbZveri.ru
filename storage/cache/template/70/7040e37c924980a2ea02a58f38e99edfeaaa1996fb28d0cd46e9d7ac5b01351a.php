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

/* default/template/information/articles_list.twig */
class __TwigTemplate_5f976dc1da83afec968cdc09f884b978f6dfe5e6d0bf8c43e94c9c858206072b extends \Twig\Template
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
\t
\t<h1 class=\"page-title\">";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t
\t<div class=\"articles\">
\t\t<div class=\"row\">
\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["articles"]) {
            // line 26
            echo "\t\t\t<div class=\"articles-item\">
\t\t\t\t<div class=\"articles-item-image\">
\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["articles"], "image", [], "any", false, false, false, 28);
            echo "\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"articles-item-block\">
\t\t\t\t\t<div class=\"articles-item-block-name\"><a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["articles"], "view", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["articles"], "title", [], "any", false, false, false, 31);
            echo "</a></div>
\t\t\t\t\t<p class=\"articles-item-block-desc\">";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["articles"], "description", [], "any", false, false, false, 32);
            echo "<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["articles"], "view", [], "any", false, false, false, 32);
            echo "\">";
            echo ($context["text_view"] ?? null);
            echo "</a></p>
\t\t\t\t\t<div class=\"articles-item-block-data\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["articles"], "date_added", [], "any", false, false, false, 33);
            echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t</div>
\t</div>
 
</div>
";
        // line 41
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/articles_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 41,  142 => 37,  132 => 33,  124 => 32,  118 => 31,  112 => 28,  108 => 26,  104 => 25,  97 => 21,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/articles_list.twig", "");
    }
}
