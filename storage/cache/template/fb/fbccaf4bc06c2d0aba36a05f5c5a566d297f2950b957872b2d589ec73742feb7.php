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

/* default/template/extension/module/filter/value_list.twig */
class __TwigTemplate_44b4b340f27575d4f947962a219bff2de885741c3aeab4da5880898106fd5932 extends \Twig\Template
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
        if (((($context["show_values_limit"] ?? null) > 0) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "values", [], "any", false, false, false, 1)) > ($context["show_values_limit"] ?? null)))) {
            // line 2
            $context["hidden_values"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "values", [], "any", false, false, false, 2), ($context["show_values_limit"] ?? null), null);
            // line 3
            $context["values"] = twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "values", [], "any", false, false, false, 3), 0, ($context["show_values_limit"] ?? null));
        } else {
            // line 5
            $context["hidden_values"] = [];
            // line 6
            $context["values"] = twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "values", [], "any", false, false, false, 6);
        }
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["values"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 10
            $this->loadTemplate("default/template/extension/module/filter/value_item.twig", "default/template/extension/module/filter/value_list.twig", 10)->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        if ((twig_length_filter($this->env, ($context["hidden_values"] ?? null)) > 0)) {
            // line 14
            echo "<div class=\"collapse\" id=\"filter-hidden-values-";
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 14);
            echo "\">
  <hr style=\"margin:0 0 10px;border: none;\" />
  ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hidden_values"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 17
                echo "  ";
                $this->loadTemplate("default/template/extension/module/filter/value_item.twig", "default/template/extension/module/filter/value_list.twig", 17)->display($context);
                // line 18
                echo "  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</div>
<div class=\"collapse-value\">
  <button type=\"button\" data-target=\"#filter-hidden-values-";
            // line 21
            echo twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "option_id", [], "any", false, false, false, 21);
            echo "\" data-toggle=\"collapse\" class=\"btn btn-block\">";
            echo ($context["text_show_all"] ?? null);
            echo " <i class=\"fa fa-fw\"></i></button>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter/value_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 21,  128 => 19,  114 => 18,  111 => 17,  94 => 16,  88 => 14,  86 => 13,  83 => 12,  69 => 10,  52 => 9,  49 => 8,  46 => 6,  44 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter/value_list.twig", "/home/r/reactxxx/spbzveri.ru/public_html/catalog/view/theme/default/template/extension/module/filter/value_list.twig");
    }
}
