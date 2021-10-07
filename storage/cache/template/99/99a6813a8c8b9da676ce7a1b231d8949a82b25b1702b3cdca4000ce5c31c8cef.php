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

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_f2a4f34e68364a34c12b7c51a36c65aa92cb1a617fbaf7f13f201d0132c7da48 extends \Twig\Template
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
        echo "<div class=\"container\">
\t<div class=\"slider\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "\t\t\t<div class=\"slider-item\">
\t\t\t";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6);
                echo "\">
\t\t\t\t<img src=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" />
\t\t\t</a>
\t\t\t";
            } else {
                // line 10
                echo "\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive\" />
\t\t\t";
            }
            // line 12
            echo "\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</div>
</div>

<script>
\t\$(document).ready(function(){
\t\t\$('.slider').bxSlider({
\t\tpager: true,
\t\tcontrols: false,
\t\tauto: true,
\t\tpause: 10000,
\t\tslideWidth: 1100
\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  71 => 12,  63 => 10,  55 => 7,  50 => 6,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "");
    }
}
