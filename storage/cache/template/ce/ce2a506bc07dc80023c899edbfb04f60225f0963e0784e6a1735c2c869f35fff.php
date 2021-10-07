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

/* default/template/extension/quickcheckout/confirm.twig */
class __TwigTemplate_10bcf4443d570cb877fed406603379355fe1986ebfb0ae41f6cc6bc7458ff5f3 extends \Twig\Template
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
        if ( !($context["redirect"] ?? null)) {
            echo " 
  ";
            // line 2
            if (($context["confirmation_page"] ?? null)) {
                echo " 
\t<div class=\"table-responsive\">
\t  <table class=\"table table-bordered table-hover\">
\t\t<thead>
\t\t  <tr>
\t\t\t<td class=\"text-left\">";
                // line 7
                echo ($context["column_name"] ?? null);
                echo "</td>
\t\t\t<td class=\"text-left\">";
                // line 8
                echo ($context["column_model"] ?? null);
                echo "</td>
\t\t\t<td class=\"text-right\">";
                // line 9
                echo ($context["column_quantity"] ?? null);
                echo "</td>
\t\t\t<td class=\"text-right\">";
                // line 10
                echo ($context["column_price"] ?? null);
                echo "</td>
\t\t\t<td class=\"text-right\">";
                // line 11
                echo ($context["column_total"] ?? null);
                echo "</td>
\t\t  </tr>
\t\t</thead>
\t\t<tbody>
\t\t  ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo " 
\t\t  <tr>
\t\t\t<td class=\"text-left\"><a href=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                    echo "</a>
\t\t\t  ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 18));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " 
\t\t\t  <br />
\t\t\t  &nbsp;<small>- ";
                        // line 20
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 20);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 20);
                        echo "</small>
\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo " 
\t\t\t  ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 22)) {
                        echo " 
\t\t\t  <br />
\t\t\t  <span class=\"label label-info\">";
                        // line 24
                        echo ($context["text_recurring"] ?? null);
                        echo "</span> <small>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 24);
                        echo "</small>
\t\t\t  ";
                    }
                    // line 25
                    echo "</td>
\t\t\t<td class=\"text-left\">";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 26);
                    echo "</td>
\t\t\t<td class=\"text-right\">";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 27);
                    echo "</td>
\t\t\t<td class=\"text-right\">";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28);
                    echo "</td>
\t\t\t<td class=\"text-right\">";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 29);
                    echo "</td>
\t\t  </tr>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "\t\t  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    echo " 
\t\t  <tr>
\t\t\t<td class=\"text-left\">";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 34);
                    echo "</td>
\t\t\t<td class=\"text-left\"></td>
\t\t\t<td class=\"text-right\">1</td>
\t\t\t<td class=\"text-right\">";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 37);
                    echo "</td>
\t\t\t<td class=\"text-right\">";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 38);
                    echo "</td>
\t\t  </tr>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo " 
\t\t</tbody>
\t\t<tfoot>
\t\t  ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    echo " 
\t\t  <tr>
\t\t\t<td colspan=\"4\" class=\"text-right\"><strong>";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 45);
                    echo ":</strong></td>
\t\t\t<td class=\"text-right\">";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 46);
                    echo "</td>
\t\t  </tr>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo " 
\t\t</tfoot>
\t  </table>
\t</div>
  ";
            }
            // line 53
            echo "  <div class=\"payment\">";
            echo ($context["payment"] ?? null);
            echo "</div>
  <a class=\"btn btn-danger pull-left\" href=\"";
            // line 54
            echo ($context["back"] ?? null);
            echo "\">";
            echo ($context["button_back"] ?? null);
            echo "</a>
  
  <script type=\"text/javascript\"><!--
  ";
            // line 57
            if ((($context["payment_target"] ?? null) && ($context["auto_submit"] ?? null))) {
                echo " 
  \$('.payment').find('";
                // line 58
                echo ($context["payment_target"] ?? null);
                echo "').trigger('click');
  
  setTimeout(function() {
\t  \$('#quickcheckoutconfirm').show();
\t  \$('#payment').show();
\t  \$('.fa-spinner').remove();
  }, 4000);
  ";
            }
            // line 65
            echo " 
  //--></script> 
";
        } else {
            // line 67
            echo "   
<script type=\"text/javascript\"><!--
location = '";
            // line 69
            echo ($context["redirect"] ?? null);
            echo "';
//--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 69,  233 => 67,  228 => 65,  217 => 58,  213 => 57,  205 => 54,  200 => 53,  193 => 48,  184 => 46,  180 => 45,  173 => 43,  168 => 40,  159 => 38,  155 => 37,  149 => 34,  141 => 32,  132 => 29,  128 => 28,  124 => 27,  120 => 26,  117 => 25,  110 => 24,  105 => 22,  102 => 21,  92 => 20,  85 => 18,  79 => 17,  72 => 15,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/confirm.twig", "");
    }
}
