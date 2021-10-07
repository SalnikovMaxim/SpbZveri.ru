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

/* default/template/extension/module/categorywall.twig */
class __TwigTemplate_d9a7f685860bec014a8a354684ad5b8b861ea8c18bf3d01280b505a12f329c1e extends \Twig\Template
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
        echo "<div class=\"tabs\">
\t<div class=\"container\">
\t\t<ul class=\"tabs__caption\">
\t\t\t";
        // line 4
        $context["cat"] = 0;
        // line 5
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 6)) {
                // line 7
                echo "\t\t\t<li class=\"";
                if ((($context["cat"] ?? null) == 0)) {
                    echo "active";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 7);
                echo "</li>
\t\t\t";
            } else {
                // line 9
                echo "\t\t\t<li>";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                echo "</li>
\t\t\t";
            }
            // line 11
            echo "\t\t\t";
            $context["cat"] = (($context["cat"] ?? null) + 1);
            // line 12
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</ul>
\t\t<div class=\"tabs-category\">
\t\t\t";
        // line 15
        $context["cats"] = 0;
        // line 16
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) {
                // line 18
                echo "\t\t\t<div class=\"tabs__content ";
                if ((($context["cats"] ?? null) == 0)) {
                    echo "active";
                }
                echo "\">
\t\t\t\t";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 19), 1, "ceil"))));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 20
                    echo "\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["children"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 22
                        echo "\t\t\t\t<li class=\"list-unstyled-li\">
\t\t\t\t\t<div class=\"list-unstyled-li-item\">
\t\t\t\t\t<div class=\"category-item-image\"><img src=\"";
                        // line 24
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "image", [], "any", false, false, false, 24);
                        echo "\" alt=\"\"></div>
\t\t\t 
\t\t\t\t\t";
                        // line 26
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 26)) {
                            // line 27
                            echo "\t\t\t\t\t<ul class=\"category-items\">
\t\t\t\t\t\t";
                            // line 28
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "gchildren", [], "any", false, false, false, 28));
                            foreach ($context['_seq'] as $context["_key"] => $context["gchild"]) {
                                // line 29
                                echo "\t\t\t\t\t\t<li><a class=\"gchild\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["gchild"], "href", [], "any", false, false, false, 29);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["gchild"], "name", [], "any", false, false, false, 29);
                                echo "</a></li>
\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gchild'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 31
                            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
                        } else {
                            // line 33
                            echo "\t\t\t\t\t<ul class=\"category-items\">
\t\t\t\t\t\t<li><a class=\"gchild\" href=\"";
                            // line 34
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 34);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 34);
                            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t";
                        }
                        // line 37
                        echo "\t\t\t\t\t<div class=\"caegory-item-names\">
\t\t\t\t\t\t<a href=\"";
                        // line 38
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 38);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 38);
                        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "\t\t\t\t</ul>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "\t\t\t</div>
\t\t\t";
                // line 47
                $context["cats"] = (($context["cats"] ?? null) + 1);
                // line 48
                echo "\t\t\t";
            } else {
                // line 49
                echo "\t\t\t<div class=\"tabs__content\">
\t\t\t\tПодкатегорий нет
\t\t\t</div>
\t\t\t";
            }
            // line 53
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t</div>
\t</div>
</div>
 
<script>
\$('ul.tabs__caption').on('click', 'li:not(.active)', function() {
    \$(this)
      .addClass('active').siblings().removeClass('active')
      .closest('div.tabs').find('div.tabs__content').removeClass('active').eq(\$(this).index()).addClass('active');
  });
  </script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/categorywall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 54,  191 => 53,  185 => 49,  182 => 48,  180 => 47,  177 => 46,  170 => 44,  156 => 38,  153 => 37,  145 => 34,  142 => 33,  138 => 31,  127 => 29,  123 => 28,  120 => 27,  118 => 26,  113 => 24,  109 => 22,  105 => 21,  102 => 20,  98 => 19,  91 => 18,  88 => 17,  83 => 16,  81 => 15,  77 => 13,  71 => 12,  68 => 11,  62 => 9,  52 => 7,  49 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/categorywall.twig", "");
    }
}
