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

/* default/template/extension/module/filter/filter_item.twig */
class __TwigTemplate_9e0d6e6f37338003827e033509697defe54052ce823f61d459a77f4e935d763b extends \Twig\Template
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
        echo "<div class=\"filter-item-ul filter-option\" id=\"option-";
        echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 1);
        echo "\">
  <div class=\"ocf-option-name\">
    ";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "name", [], "any", false, false, false, 3);
        echo "

\t\t";
        // line 5
        if (((twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 5) == "slide") || (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 5) == "slide_dual"))) {
            // line 6
            echo "    <span id=\"left-value-";
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "slide_value_min_get", [], "any", false, false, false, 6);
            echo "</span>
\t\t";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 7) == "slide_dual")) {
                // line 8
                echo "\t\t-&nbsp;<span id=\"right-value-";
                echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "slide_value_max_get", [], "any", false, false, false, 8);
                echo "</span>
\t\t";
            }
            // line 10
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "postfix", [], "any", false, false, false, 10);
            echo "
    ";
        }
        // line 12
        echo "  </div>

  <div class=\"ocf-option-values\">
    ";
        // line 15
        if (((twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 15) == "slide") || (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 15) == "slide_dual"))) {
            // line 16
            echo "    ";
            $this->loadTemplate("default/template/extension/module/filter/filter_slider_item.twig", "default/template/extension/module/filter/filter_item.twig", 16)->display($context);
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "
    ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "selectbox", [], "any", false, false, false, 19)) {
                // line 20
                echo "    <div class=\"dropdown\">
      <button class=\"btn btn-block btn-";
                // line 21
                echo ((twig_get_attribute($this->env, $this->source, ($context["selecteds"] ?? null), twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 21), [], "array", true, true, false, 21)) ? ("warning") : ("default"));
                echo " dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\">
        <i class=\"pull-right fa fa-angle-down\"></i>
        <span class=\"pull-left text-left\">
        \t";
                // line 24
                if (twig_get_attribute($this->env, $this->source, ($context["selecteds"] ?? null), twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 24), [], "array", true, true, false, 24)) {
                    // line 25
                    echo "
          ";
                    // line 26
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["selecteds"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 26)] ?? null) : null), "values", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 27
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 27);
                        echo "<br />
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "
        \t";
                } else {
                    // line 31
                    echo "        \t";
                    echo ($context["text_any"] ?? null);
                    echo "
          ";
                }
                // line 33
                echo "        </span>
      </button>
      <div class=\"dropdown-menu\">
        ";
                // line 36
                $this->loadTemplate("default/template/extension/module/filter/value_list.twig", "default/template/extension/module/filter/filter_item.twig", 36)->display($context);
                // line 37
                echo "      </div>
    </div>
    ";
            } else {
                // line 40
                echo "    ";
                $this->loadTemplate("default/template/extension/module/filter/value_list.twig", "default/template/extension/module/filter/filter_item.twig", 40)->display($context);
                // line 41
                echo "    ";
            }
            // line 42
            echo "
    ";
        }
        // line 44
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter/filter_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 44,  146 => 42,  143 => 41,  140 => 40,  135 => 37,  133 => 36,  128 => 33,  122 => 31,  118 => 29,  109 => 27,  105 => 26,  102 => 25,  100 => 24,  94 => 21,  91 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  78 => 15,  73 => 12,  67 => 10,  59 => 8,  57 => 7,  50 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter/filter_item.twig", "/home/r/reactxxx/spbzveri.ru/public_html/catalog/view/theme/default/template/extension/module/filter/filter_item.twig");
    }
}
