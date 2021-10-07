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

/* default/template/extension/quickcheckout/terms.twig */
class __TwigTemplate_05af6eaf27852fd2708c7227b721fb7194a9411f22a2480b53ceef5e3252e3fe extends \Twig\Template
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
        echo "<div id=\"payment\" class=\"text-left\" style=\"display:none;\"></div>
<div class=\"terms\">
  <label ";
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, ($context["rules"] ?? null), "display", [], "any", false, false, false, 3)) {
            echo " style=\"display:none;\" ";
        }
        echo ">";
        if (($context["text_agree"] ?? null)) {
            // line 4
            echo "    <input type=\"checkbox\" name=\"agree\" value=\"1\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["rules"] ?? null), "default", [], "any", false, false, false, 4) ||  !twig_get_attribute($this->env, $this->source, ($context["rules"] ?? null), "display", [], "any", false, false, false, 4))) {
                echo " checked=\"checked\" ";
            }
            echo "/>  ";
            echo ($context["text_agree"] ?? null);
            echo "
  ";
        }
        // line 5
        echo "</label> &nbsp;
  <button type=\"button\" id=\"button-payment-method\" class=\"btn btn-primary\" data-loading-text=\"";
        // line 6
        echo ($context["text_loading"] ?? null);
        echo "\" ";
        if (($context["disable_button"] ?? null)) {
            echo "disabled";
        }
        echo ">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/terms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  57 => 5,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/terms.twig", "");
    }
}
