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

/* default/template/extension/module/manufacturer.twig */
class __TwigTemplate_a7841061313e56e1e22346e388d9031cc5b7b0edec5caf300ac4500d390b06eb extends \Twig\Template
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
        echo "<div class=\"header-module header-module-two\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"header-module-left\">
\t\t\t ";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"container\">
\t<div class=\"manufacturer\">
\t\t<ul>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 15
            echo "\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 15);
            echo "\" title=\"Все товары производителя ";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 15);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "image", [], "any", false, false, false, 15);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 15);
            echo "\"></a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t</ul>
\t</div>
</div>

<script>
\$(document).ready(function(){
\t\$('.manufacturer ul').bxSlider({
\t\tpager: true,
\t\tcontrols: false,
\t\tauto: true,
\t\tpause: 10000,
\t\tmaxSlides: 10,
\t\tslideMargin: 30,        
\t\tslideWidth: 95
\t});
});
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/manufacturer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  59 => 15,  55 => 14,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/manufacturer.twig", "");
    }
}
