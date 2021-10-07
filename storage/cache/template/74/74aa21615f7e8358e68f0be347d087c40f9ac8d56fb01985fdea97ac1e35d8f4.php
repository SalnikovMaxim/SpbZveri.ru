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

/* default/template/common/menu.twig */
class __TwigTemplate_b3cea288470524badf4281d879121ed0a6d6ee393fbbc037197290dd07315480 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "
<div class=\"mobile_menu_container\">
    <nav class=\"mobile_menu_content\">
        <ul>
\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 7
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "            <li>
                <a href=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
                    echo "\" class=\"parent\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                    echo " <i class=\"icon icon-angle-down\"></i></a>
\t\t\t\t";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 10), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 11
                        echo "                <ul class=\"drown\">
\t\t\t\t\t<li class=\"backli\"><a href=\"#\" class=\"back\"><i class=\"icon icon-angle-down\"></i> Вернуться</a></li>
\t\t\t\t\t";
                        // line 13
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 14
                            echo "\t\t\t\t\t<li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 14);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 14);
                            echo "</a></li>
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 16
                        echo "                </ul>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "            </li>
\t\t\t
\t\t\t";
                } else {
                    // line 21
                    echo "\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                    echo "</a></li>
\t\t\t";
                }
                // line 23
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            <li><a href=\"";
            echo ($context["special"] ?? null);
            echo "\">Распродажа</a></li>
            <li><a href=\"";
            // line 25
            echo ($context["manufacturer"] ?? null);
            echo "\">Бренды</a></li>
            <li><a href=\"#\">Скидки / Бонусы</a></li>
        </ul>
    </nav>
</div>
<div class=\"mobile_menu_overlay\"></div>
";
        }
        // line 31
        echo " 




<script>
if(document.documentElement.clientWidth < 768) {
\$(function() {
    \$(document).on(\"click\", \".mobile_menu_container .parent\", function(e) {
        e.preventDefault();
        \$(\".mobile_menu_container .activity\").removeClass(\"activity\");
        \$(this).siblings(\"ul\").addClass(\"loaded\").addClass(\"activity\");
    });
    \$(document).on(\"click\", \".mobile_menu_container .back\", function(e) {
        e.preventDefault();
        \$(\".mobile_menu_container .activity\").removeClass(\"activity\");
        \$(this).parent().parent().removeClass(\"loaded\");
        \$(this).parent().parent().parent().parent().addClass(\"activity\");
    });
    \$(document).on(\"click\", \".mobile_menu\", function(e) {
        e.preventDefault();
        \$(\".mobile_menu_container\").addClass(\"loaded\");
        \$(\".mobile_menu_overlay\").fadeIn();
    });
    \$(document).on(\"click\", \".mobile_menu_overlay\", function(e) {
        \$(\".mobile_menu_container\").removeClass(\"loaded\");
        \$(this).fadeOut(function() {
            \$(\".mobile_menu_container .loaded\").removeClass(\"loaded\");
            \$(\".mobile_menu_container .activity\").removeClass(\"activity\");
        });
    });
})
}
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 31,  115 => 25,  110 => 24,  104 => 23,  96 => 21,  91 => 18,  84 => 16,  73 => 14,  69 => 13,  65 => 11,  61 => 10,  55 => 9,  52 => 8,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
