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

/* default/template/common/cart.twig */
class __TwigTemplate_74c046e32189438b9f53d0cf95e55575f56edb3e39edfa4b89e76a206bef782d extends \Twig\Template
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
        echo "<button type=\"button\" class=\"cart-popup-button ";
        if ((($context["text_items"] ?? null) > 0)) {
            echo "active";
        }
        echo "\" title=\"Товары в корзине\"><i class=\"icon icon-basket\"></i><span id=\"cart-total\" class=\"cart-total\">";
        echo ($context["text_items"] ?? null);
        echo "</span></button>

<div id=\"cart\" class=\"cart-block\">
\t<span class=\"cart-border-top\"></span>
\t<div class=\"cart-block-product\">
\t\t<div class=\"cart-block-product-item\">
\t\t<div  class=\"allcleanercart\">Закрыть</div>
\t\t\t";
        // line 8
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 9
            echo "\t\t\t<div class=\"items\">
\t\t\t<a  class=\"allcleaner\" onclick=\"cart.clearcart()\" title=\"";
            // line 10
            echo ($context["button_clearcart"] ?? null);
            echo "\">";
            echo ($context["button_clearcart"] ?? null);
            echo "</a>
\t\t\t<div class=\"item item-products\">
\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 13
                echo "\t\t\t\t\t<div class=\"item-product\">
\t\t\t\t\t\t<div class=\"item-product-image\">
\t\t\t\t\t\t\t";
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15)) {
                    echo " 
\t\t\t\t\t\t\t<a href=\"";
                    // line 16
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 16);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    echo "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item-product-name\">
\t\t\t\t\t\t\t<a href=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
\t\t\t\t\t\t\t- <small>";
                        // line 24
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 24);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 26)) {
                    echo " <br />
\t\t\t\t\t\t\t- <small>";
                    // line 27
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 27);
                    echo "</small> ";
                }
                // line 28
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item-product-quantity\">
\t\t\t\t\t\t\t";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantitymax", [], "any", false, false, false, 30) != 1)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t<div class=\"plus-minus-product\">
\t\t\t\t\t\t\t\t<button class=\"btn-minus\" type=\"button\" onclick=\"cart.updatecart(";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 32);
                    echo ", ";
                    echo (twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 32) - 1);
                    echo ")\" ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 32) == 1)) {
                        echo " disabled ";
                    }
                    echo ">-</button>
\t\t\t\t\t\t\t\t<input type=\"text\" oninput=\"cart.change(";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 33);
                    echo ", event)\" name=\"quantity[";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 33);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 33);
                    echo "\" size=\"1\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<button class=\"btn-plus\" type=\"button\" onclick=\"cart.updatecart(";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 34);
                    echo ", ";
                    echo (twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 34) + 1);
                    echo ")\">+</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t\t\t\t\t<span>1 шт.</span>
\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"item-product-price\">
\t\t\t\t\t\t\t";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 41);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t 
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t</div>
\t\t\t<div class=\"item\">
\t\t\t\t<ul class=\"item-totals\">
\t\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 50
                echo "\t\t\t\t\t<li>";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 50);
                echo "<span>";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 50);
                echo "</span></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"item-button\"><a href=\"";
            // line 54
            echo ($context["checkout"] ?? null);
            echo "\"><i class=\"icon icon-basket\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</a></div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
        } else {
            // line 58
            echo "\t\t\t<div class=\"item\">
\t\t\t\t<p class=\"text-center\">";
            // line 59
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t</div>
\t\t\t";
        }
        // line 62
        echo "\t\t</div>
\t</div>
</div>
\t 

";
    }

    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 62,  220 => 59,  217 => 58,  208 => 54,  204 => 52,  193 => 50,  189 => 49,  184 => 46,  173 => 41,  169 => 39,  165 => 37,  157 => 34,  149 => 33,  139 => 32,  136 => 31,  134 => 30,  130 => 28,  124 => 27,  119 => 26,  116 => 25,  107 => 24,  100 => 23,  94 => 22,  90 => 20,  80 => 17,  76 => 16,  72 => 15,  68 => 13,  64 => 12,  57 => 10,  54 => 9,  52 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/cart.twig", "");
    }
}
