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

/* default/template/extension/module/filter/module.twig */
class __TwigTemplate_40c4dd990198482f8126fdeccaca741f7016d2466b03451cb731242ac51fd0ea extends \Twig\Template
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
        if ((($context["options"] ?? null) || ($context["show_price"] ?? null))) {
            // line 2
            echo "<div class=\"filter\">
\t<div class=\"filter-header\">
\t\t<div class=\"filter-header-button\"><i class=\"icon icon-filter\"></i><span>Фильтр товаров</span></div>
\t\t";
            // line 5
            if (($context["selecteds"] ?? null)) {
                // line 6
                echo "\t\t<div class=\"filter-cleaner-items\">
\t\t\t";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["selecteds"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 8
                    echo "\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "values", [], "any", false, false, false, 8));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 9
                        echo "\t\t\t<button type=\"button\" onclick=\"location = '";
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "href", [], "any", false, false, false, 9);
                        echo "';\" class=\"filter-cleaner-item\" title=\"Нажмите, чтобы удалить\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 9);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, false, 9);
                        echo "</button>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 11
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "\t\t\t";
                if (((twig_length_filter($this->env, ($context["selecteds"] ?? null)) > 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["selecteds"] ?? null)), "values", [], "any", false, false, false, 12)) > 1))) {
                    // line 13
                    echo "\t\t\t<button type=\"button\" onclick=\"location = '";
                    echo ($context["link"] ?? null);
                    echo "';\" class=\"filter-cleaner\"><i class=\"icon icon-cancel-circled-outline\"></i><span>";
                    echo ($context["text_cancel_all"] ?? null);
                    echo "</span></button>
\t\t\t";
                }
                // line 15
                echo "\t\t</div>
\t\t";
            }
            // line 17
            echo "\t</div>
\t<div id=\"filter-button\" class=\"filter-button\">
\t\t<button class=\"filter-action disabled\" data-loading-text=\"<i class='fa fa-refresh fa-spin'></i> Загрузка..\"></button>
\t</div>

\t<div class=\"ocf-offcanvas\">
\t<div class=\"filter-mobile-handle\">
\t<button type=\"button\" class\"\" data-toggle=\"offcanvas\"><i class=\"fa fa-filter\"></i></button>
\t</div>
\t<div class=\"ocf-offcanvas-body\"></div>
\t</div>

\t<div class=\"panel filter panel-default\" id=\"filter\">

\t 
\t<div class=\"list-filter\">
\t\t";
            // line 33
            if (($context["show_price"] ?? null)) {
                // line 34
                echo "\t\t<div class=\"list-filter-price\">
\t\t\t<div class=\"list-group-item filter-option\" data-toggle=\"popover-price\">
\t\t\t\t<div class=\"ocf-option-name\">
\t\t\t\t\t";
                // line 37
                echo ($context["text_price"] ?? null);
                echo "&nbsp;";
                echo ($context["symbol_left"] ?? null);
                echo "
\t\t\t\t\t<span id=\"price-from\">";
                // line 38
                echo ($context["min_price_get"] ?? null);
                echo "</span>&nbsp;-&nbsp;<span id=\"price-to\">";
                echo ($context["max_price_get"] ?? null);
                echo "</span>";
                echo ($context["symbol_right"] ?? null);
                echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"ocf-option-values-price\">
\t\t\t\t\t<div id=\"scale-price\" class=\"scale ocf-target\" data-option-id=\"p\"
\t\t\t\t\t\t data-start-min=\"";
                // line 42
                echo ($context["min_price_get"] ?? null);
                echo "\"
\t\t\t\t\t\t data-start-max=\"";
                // line 43
                echo ($context["max_price_get"] ?? null);
                echo "\"
\t\t\t\t\t\t data-range-min=\"";
                // line 44
                echo ($context["min_price"] ?? null);
                echo "\"
\t\t\t\t\t\t data-range-max=\"";
                // line 45
                echo ($context["max_price"] ?? null);
                echo "\"
\t\t\t\t\t\t data-element-min=\"#price-from\"
\t\t\t\t\t\t data-element-max=\"#price-to\"
\t\t\t\t\t\t data-control-min=\"#min-price-value\"
\t\t\t\t\t\t data-control-max=\"#max-price-value\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            // line 55
            echo "\t\t<div class=\"list-filter-items\">
\t\t\t";
            // line 56
            $this->loadTemplate("default/template/extension/module/filter/filter_list.twig", "default/template/extension/module/filter/module.twig", 56)->display($context);
            // line 57
            echo "\t\t</div>
\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$(function() {
 
\tvar options = {
 
    php: {
      searchButton : ";
            // line 67
            echo ((($context["search_button"] ?? null)) ? ("true") : ("false"));
            echo ",
      showPrice    : ";
            // line 68
            echo ((($context["show_price"] ?? null)) ? ("true") : ("false"));
            echo ",
\t    showCounter  : ";
            // line 69
            echo ((($context["show_counter"] ?? null)) ? ("true") : ("false"));
            echo ",
      link         : '";
            // line 70
            echo ($context["link"] ?? null);
            echo "',
\t    path         : '";
            // line 71
            echo ($context["path"] ?? null);
            echo "',
\t    params       : '";
            // line 72
            echo ($context["params"] ?? null);
            echo "',
\t    index        : '";
            // line 73
            echo ($context["index"] ?? null);
            echo "'
\t  },
    text: {
\t    show_all: '";
            // line 76
            echo ($context["text_show_all"] ?? null);
            echo "',
\t    hide    : '";
            // line 77
            echo ($context["text_hide"] ?? null);
            echo "',
\t    load    : '";
            // line 78
            echo ($context["text_load"] ?? null);
            echo "',
\t\t\tany     : '";
            // line 79
            echo ($context["text_any"] ?? null);
            echo "',
\t    select  : '";
            // line 80
            echo ($context["button_select"] ?? null);
            echo "'
\t  }
\t};
 
  \$('[data-toggle=\"offcanvas\"]').on('click', function(e) {
    \$(this).toggleClass('active');
    \$('body').toggleClass('modal-open');
 
  });

  setTimeout(function() {
    \$('#filter').filter(options);
  }, 1);
});
//--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter/module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 80,  218 => 79,  214 => 78,  210 => 77,  206 => 76,  200 => 73,  196 => 72,  192 => 71,  188 => 70,  184 => 69,  180 => 68,  176 => 67,  164 => 57,  162 => 56,  159 => 55,  146 => 45,  142 => 44,  138 => 43,  134 => 42,  123 => 38,  117 => 37,  112 => 34,  110 => 33,  92 => 17,  88 => 15,  80 => 13,  77 => 12,  71 => 11,  58 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter/module.twig", "");
    }
}
