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

/* default/template/extension/quickcheckout/register.twig */
class __TwigTemplate_b421f1497ff2f970da578f87c61ec4146a832070df2ed46777db2d0d7cd8adc1 extends \Twig\Template
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
        echo "<div style=\"overflow:auto;\">
  <div class=\"col-sm-6 required\">
\t<label class=\"control-label\">";
        // line 3
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t<input type=\"password\" name=\"password\" value=\"\" class=\"form-control\" />
  </div>
  <div class=\"col-sm-6 required\">
\t<label class=\"control-label\">";
        // line 7
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
\t<input type=\"password\" name=\"confirm\" value=\"\" class=\"form-control\" />
  </div>
  <div class=\"col-xs-12\" style=\"clear:both;border-bottom:1px solid #dddddd;margin:10px 0px;\">

\t";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["field_newsletter"] ?? null), "required", [], "any", false, false, false, 12) &&  !twig_get_attribute($this->env, $this->source, ($context["field_newsletter"] ?? null), "display", [], "any", false, false, false, 12))) {
            // line 13
            echo "\t\t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" class=\"hide\" checked=\"checked\" />
\t";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 14
($context["field_newsletter"] ?? null), "display", [], "any", false, false, false, 14)) {
            // line 15
            echo "\t  <label for=\"newsletter\">
\t  ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["field_newsletter"] ?? null), "default", [], "any", false, false, false, 16)) {
                echo " 
\t  \t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" checked=\"checked\" />
\t  ";
            } else {
                // line 18
                echo "   
\t  \t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" />
\t  ";
            }
            // line 21
            echo "\t    ";
            echo ($context["entry_newsletter"] ?? null);
            echo "</label><br />
\t";
        } else {
            // line 22
            echo "   
    \t<input type=\"checkbox name=\"newsletter\" value=\"1\" id=\"newsletter\" class=\"hide\" />
\t";
        }
        // line 25
        echo "
\t";
        // line 26
        if (($context["text_agree"] ?? null)) {
            // line 27
            echo "    \t<label for=\"agree-reg\"><input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"agree-reg\" />\t";
            echo ($context["text_agree"] ?? null);
            echo "</label>
\t";
        }
        // line 28
        echo " 

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  93 => 27,  91 => 26,  88 => 25,  83 => 22,  77 => 21,  72 => 18,  66 => 16,  63 => 15,  61 => 14,  58 => 13,  56 => 12,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/register.twig", "");
    }
}
