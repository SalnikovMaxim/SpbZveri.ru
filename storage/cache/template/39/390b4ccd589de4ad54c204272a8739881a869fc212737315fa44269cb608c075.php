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

/* default/template/extension/module/filter/value_item.twig */
class __TwigTemplate_b49d754ac621e7c6e3fd05f24a5f3ca813de573b45222d27713a60eb17722c52 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "color", [], "any", false, false, false, 1)) {
            // line 2
            echo "<div class=\"ocf-color\" style=\"background-color: #";
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "color", [], "any", false, false, false, 2);
            echo ";\"></div>
";
        }
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "image", [], "any", false, false, false, 5)) {
            // line 6
            echo "<div class=\"ocf-image\" style=\"background-image: url(";
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "image", [], "any", false, false, false, 6);
            echo ");\"></div>
";
        }
        // line 8
        echo "
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "selected", [], "any", false, false, false, 9)) {
            // line 10
            echo "<label id=\"v-";
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 10);
            echo "\" class=\"ocf-selected\" data-option-id=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 10);
            echo "\">
  <input type=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 11);
            echo "\" name=\"ocf[";
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 11);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "params", [], "any", false, false, false, 11);
            echo "\" checked=\"checked\" class=\"ocf-target\" autocomplete=\"off\" />
  ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "name", [], "any", false, false, false, 12);
            echo "
  ";
            // line 13
            if (($context["show_counter"] ?? null)) {
                // line 14
                echo "  <small class=\"badge\"></small>
  ";
            }
            // line 16
            echo "</label>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 17
($context["value"] ?? null), "count", [], "any", false, false, false, 17)) {
            // line 18
            echo "<label id=\"v-";
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 18);
            echo "\" data-option-id=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 18);
            echo "\">
  <input type=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 19);
            echo "\" name=\"ocf[";
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 19);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "params", [], "any", false, false, false, 19);
            echo "\" class=\"ocf-target\" autocomplete=\"off\" />
  ";
            // line 20
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "name", [], "any", false, false, false, 20);
            echo "
  ";
            // line 21
            if (($context["show_counter"] ?? null)) {
                // line 22
                echo "  <small class=\"badge\">";
                echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "count", [], "any", false, false, false, 22);
                echo "</small>
  ";
            }
            // line 24
            echo "</label>
";
        } else {
            // line 26
            echo "<label id=\"v-";
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "id", [], "any", false, false, false, 26);
            echo "\" class=\"disabled\" data-option-id=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 26);
            echo "\">
  <input type=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 27);
            echo "\" name=\"ocf[";
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 27);
            echo "]\" value=\"\" disabled=\"disabled\" class=\"ocf-target\" autocomplete=\"off\" />
  ";
            // line 28
            echo twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "name", [], "any", false, false, false, 28);
            echo "
  ";
            // line 29
            if (($context["show_counter"] ?? null)) {
                // line 30
                echo "  <small class=\"badge\">0</small>
  ";
            }
            // line 32
            echo "</label>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter/value_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 32,  141 => 30,  139 => 29,  135 => 28,  129 => 27,  122 => 26,  118 => 24,  112 => 22,  110 => 21,  106 => 20,  98 => 19,  91 => 18,  89 => 17,  86 => 16,  82 => 14,  80 => 13,  76 => 12,  68 => 11,  61 => 10,  59 => 9,  56 => 8,  50 => 6,  48 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter/value_item.twig", "/home/r/reactxxx/spbzveri.ru/public_html/catalog/view/theme/default/template/extension/module/filter/value_item.twig");
    }
}
