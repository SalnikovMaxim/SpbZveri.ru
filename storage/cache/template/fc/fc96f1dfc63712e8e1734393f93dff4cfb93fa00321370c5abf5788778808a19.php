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

/* default/template/product/review.twig */
class __TwigTemplate_b1b9e0530077081120115ddc7b853fd9e42b59785e318130cdb10567757587c1 extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "<hr>
<h4>Все отзывы о товаре</h4>
";
            // line 4
            $context["itemrew"] = 1;
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 6
                echo "<div class=\"review-item\">
\t<p class=\"review-autor\">";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 7);
                echo "</p>
\t<p class=\"review-rating\">";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 8) < $context["i"])) {
                        echo "<span class=\"not-activer\">&#9734;</span>";
                    } else {
                        echo "<span class=\"activer\">&#9733;</span>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</p>
\t<p class=\"review-text\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 9);
                echo "</p>
\t<p class=\"review-date-added\">";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 10);
                echo "</p>
\t<span class=\"number-rew\">";
                // line 11
                echo ($context["itemrew"] ?? null);
                echo "</span>
</div>
";
                // line 13
                $context["itemrew"] = (($context["itemrew"] ?? null) + 1);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
            // line 16
            echo ($context["pagination"] ?? null);
            echo "</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 16,  90 => 15,  84 => 13,  79 => 11,  75 => 10,  71 => 9,  56 => 8,  52 => 7,  49 => 6,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/review.twig", "");
    }
}
