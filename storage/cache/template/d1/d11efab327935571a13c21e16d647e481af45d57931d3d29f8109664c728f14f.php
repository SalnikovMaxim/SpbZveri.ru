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

/* default/template/extension/quickcheckout/cart.twig */
class __TwigTemplate_1cf85512b4d28e441a76846ea545be0dacae53df727cbe4f03846e94bec88d31 extends \Twig\Template
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
        echo "<div id=\"stock_warning\">
";
        // line 2
        if (($context["error_warning_stock"] ?? null)) {
            // line 3
            echo "\t<div class=\"alert alert-danger\" style=\"\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_stock"] ?? null);
            echo "</div>
";
        }
        // line 5
        echo "</div>
<table class=\"table quickcheckout-cart\">
  <thead>
\t<tr>
\t  <td class=\"image\">";
        // line 9
        echo ($context["column_image"] ?? null);
        echo "</td>
\t  <td class=\"name\">";
        // line 10
        echo ($context["column_name"] ?? null);
        echo "</td>
\t  <td class=\"quantity\">";
        // line 11
        echo ($context["column_quantity"] ?? null);
        echo "</td>
\t  <td class=\"price1 hidden-xs\">";
        // line 12
        echo ($context["column_price"] ?? null);
        echo "</td>
\t  <td class=\"total hidden-xs\">";
        // line 13
        echo ($context["column_total"] ?? null);
        echo "</td>
\t</tr>
  </thead>
  ";
        // line 16
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 17
            echo "\t<tbody>
      ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "        <tr ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 19)) {
                    echo " class=\"warning\" ";
                }
                echo ">
          <td class=\"image\">";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20)) {
                    echo " 
            <a href=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                    echo "\" /></a>
            ";
                }
                // line 22
                echo "</td>
          <td class=\"name\"><a href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "</a> ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 23)) {
                    echo " <span class=\"text-danger\">***</span> ";
                }
                // line 24
                echo "            <div>
              ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
              <small>";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 26);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 26);
                    echo "</small><br />
\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 28)) {
                    echo " 
\t\t\t  <br />
\t\t\t  <small>";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 30);
                    echo "</small>
\t\t\t  ";
                }
                // line 32
                echo "\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 32)) {
                    echo " 
\t\t\t  <br />
\t\t\t  <span class=\"label label-info\">";
                    // line 34
                    echo ($context["text_recurring_item"] ?? null);
                    echo "</span> <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 34);
                    echo "</small>
\t\t\t  ";
                }
                // line 36
                echo "            </div>
\t\t\t
\t\t\t";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "discountss", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["discounts"]) {
                    echo " 
\t\t";
                    // line 39
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39) < twig_get_attribute($this->env, $this->source, $context["discounts"], "quantitys", [], "any", false, false, false, 39))) {
                        // line 40
                        echo "\t\t<p class=\"dandi\"><span>Скидка - <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["discounts"], "price", [], "any", false, false, false, 40);
                        echo "%</strong> за ";
                        echo twig_get_attribute($this->env, $this->source, $context["discounts"], "quantitys", [], "any", false, false, false, 40);
                        echo " товар</span></p>
\t\t";
                    }
                    // line 41
                    echo " 
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discounts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "\t\t</td>
          <td class=\"quantity\">";
                // line 44
                if (($context["edit_cart"] ?? null)) {
                    echo " 
\t\t    
\t\t\t<div class=\"block-quantity\">
\t\t\t\t<button class=\"btn faminus button-update\" data-type=\"decrease\" data-product=\"";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 47);
                    echo "\">-</button>     
\t\t\t\t<input type=\"text\" data-mask=\"9?999999999999999\" value=\"";
                    // line 48
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 48);
                    echo "\" class=\"qc-product-qantity form-control text-center\" name=\"quantity[";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 48);
                    echo "]\">
\t\t\t\t<button class=\"btn faminus button-update\" data-type=\"increase\" data-product=\"";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "key", [], "any", false, false, false, 49);
                    echo "\">+</button>
\t\t\t</div>
\t\t\t\t
\t\t\t";
                } else {
                    // line 53
                    echo "\t\t\tx&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 53);
                    echo " 
\t\t\t";
                }
                // line 54
                echo "</td>
\t\t  <td class=\"price1 hidden-xs\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 55);
                echo "
  
\t\t  </td>
          <td class=\"total hidden-xs\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 58);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                echo " 
        <tr>
          <td class=\"image\"></td>
          <td class=\"name\">";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 64);
                echo "</td>
          <td class=\"quantity\">x&nbsp;1</td>
\t\t  <td class=\"price1\">";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 66);
                echo "</td>
          <td class=\"total\">";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 67);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo " 
\t</tbody>
  ";
        }
        // line 72
        echo "</table>
<div id=\"totals-wrap\">
\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            echo " 
\t<div class=\"total-wrap\">
\t  <div class=\"text-right\"><b>";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 76);
            echo ":</b> <span>";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 76);
            echo "</span></div>
\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "</div> ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 79,  281 => 76,  274 => 74,  270 => 72,  265 => 69,  256 => 67,  252 => 66,  247 => 64,  238 => 61,  229 => 58,  223 => 55,  220 => 54,  214 => 53,  207 => 49,  201 => 48,  197 => 47,  191 => 44,  188 => 43,  181 => 41,  173 => 40,  171 => 39,  165 => 38,  161 => 36,  154 => 34,  148 => 32,  143 => 30,  137 => 28,  127 => 26,  121 => 25,  118 => 24,  110 => 23,  107 => 22,  96 => 21,  92 => 20,  85 => 19,  81 => 18,  78 => 17,  76 => 16,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/cart.twig", "");
    }
}
