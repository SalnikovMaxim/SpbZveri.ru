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

/* default/template/extension/module/filter/filter_list.twig */
class __TwigTemplate_75ca1ed6ef548a2d3f8eaefd8bbb429804879765b079ce74aa64f4ff4fd17f2e extends \Twig\Template
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
        if (((($context["show_options_limit"] ?? null) > 0) && (twig_length_filter($this->env, ($context["options"] ?? null)) > ($context["show_options_limit"] ?? null)))) {
            // line 2
            $context["hidden_options"] = twig_slice($this->env, ($context["options"] ?? null), ($context["show_options_limit"] ?? null), null);
            // line 3
            $context["visibled_options"] = twig_slice($this->env, ($context["options"] ?? null), 0, ($context["show_options_limit"] ?? null));
        } else {
            // line 5
            $context["hidden_options"] = [];
            // line 6
            $context["visibled_options"] = ($context["options"] ?? null);
        }
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visibled_options"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 10
            $this->loadTemplate("default/template/extension/module/filter/filter_item.twig", "default/template/extension/module/filter/filter_list.twig", 10)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        if ((twig_length_filter($this->env, ($context["hidden_options"] ?? null)) > 0)) {
            // line 14
            echo "
";
            // line 15
            if (($context["show_options"] ?? null)) {
                // line 16
                $context["class"] = "collapse in";
            } else {
                // line 18
                $context["class"] = "collapse";
            }
            // line 20
            echo "
<div class=\"";
            // line 21
            echo ($context["class"] ?? null);
            echo "\" id=\"filter-hidden-options\">
  ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hidden_options"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 23
                echo "  ";
                $this->loadTemplate("default/template/extension/module/filter/filter_item.twig", "default/template/extension/module/filter/filter_list.twig", 23)->display($context);
                // line 24
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</div>
<button type=\"button\" class=\"btn btn-default btn-block\" data-toggle=\"collapse\" data-target=\"#filter-hidden-options\" aria-expanded=\"false\"><i class=\"fa\"></i></button>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter/filter_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 25,  126 => 24,  123 => 23,  106 => 22,  102 => 21,  99 => 20,  96 => 18,  93 => 16,  91 => 15,  88 => 14,  86 => 13,  83 => 12,  69 => 10,  52 => 9,  49 => 8,  46 => 6,  44 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter/filter_list.twig", "/home/r/reactxxx/spbzveri.ru/public_html/catalog/view/theme/default/template/extension/module/filter/filter_list.twig");
    }
}
