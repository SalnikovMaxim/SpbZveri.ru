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

/* default/template/product/manufacturer_info.twig */
class __TwigTemplate_7d3b4f6736e2a0095c042069e37a547e530c1596f15547093e00be8e33e32f51 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-manufacturer\" class=\"container\">
   <div itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\" class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t<span itemscope=\"\" itemprop=\"itemListElement\" itemtype=\"http://schema.org/ListItem\" class=\"breadcrumb-item\">
\t\t\t";
            // line 6
            if ((($context["key"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                // line 7
                echo "\t\t\t<a itemprop=\"item\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
                echo "\">
\t\t\t\t<span itemprop=\"name\">";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                echo "</span>
\t\t\t\t<meta itemprop=\"position\" content=\"";
                // line 9
                echo ($context["key"] + 1);
                echo "\">
\t\t\t</a>
\t\t\t";
            } else {
                // line 12
                echo "\t\t\t<a rel=\"nofollow\" itemprop=\"item\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
                echo "\">
\t\t\t\t<span itemprop=\"name\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                echo "</span>
\t\t\t\t<meta itemprop=\"position\" content=\"";
                // line 14
                echo ($context["key"] + 1);
                echo "\">
\t\t\t</a>
\t\t\t";
            }
            // line 17
            echo "\t\t</span>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</div>
  <div class=\"row\">";
        // line 20
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 21
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 23
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 24
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1 class=\"page-title\">Товары производителя - ";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      
       ";
        // line 31
        if (($context["products"] ?? null)) {
            // line 32
            echo "       <div class=\"sort\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 33
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 39
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 39) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 40
                    echo "              
              
              
              <option value=\"";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 43);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 43);
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 48
                    echo "              
              
              
              <option value=\"";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 51);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 51);
                    echo "</option>
              
              
              
              ";
                }
                // line 56
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            
            
            
            </select>
          </div>
 
\t<div class=\"row row-product-category\">
\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 65
                echo "\t\t\t<div class=\"product-thumb-category\">
\t\t\t  <div class=\"image\"><a href=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 66);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 66);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t  ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 67)) {
                    echo "<span class=\"sale\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 67);
                    echo "%</span>";
                }
                // line 68
                echo "\t\t\t  </div>
\t\t\t\t 
\t\t\t  <div class=\"caption\">
\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 71);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
                echo "</a></h4>
\t\t\t\t";
                // line 72
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "\t\t\t\t<div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 74
                        echo "\t\t\t\t  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 74) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 75
                        echo "\t\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t  </div> 
\t\t\t  <div class=\"button-group\">
\t\t\t\t";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "\t\t\t\t<div class=\"price\"> 
\t\t\t\t\t";
                    // line 81
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81)) {
                        // line 82
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 83
                        echo " 
\t\t\t\t\t<div class=\"price-old\">";
                        // line 84
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84);
                        echo "</div> 
\t\t\t\t\t<div class=\"price-new\">";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 85);
                        echo "</div> 
\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t 
\t\t\t\t <div class=\"wishliscompare\">
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 91
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 91);
                echo "');\"><i class=\"icon icon-heart-empty\"></i></button>
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 92
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 92);
                echo "');\"><i class=\"icon icon-exchange\"></i></button>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 94);
                echo "');\" class=\"product-button\"><i class=\"icon icon-basket\"></i></button>
\t\t\t   
\t\t\t  </div>
\t\t\t</div>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t   
\t</div>
 
    <div class=\"pagination-block\">";
            // line 102
            echo ($context["pagination"] ?? null);
            echo "</div>
\t
      ";
        } else {
            // line 105
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 107
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 110
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 111
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 113
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 113,  345 => 111,  340 => 110,  332 => 107,  326 => 105,  320 => 102,  315 => 99,  304 => 94,  297 => 92,  291 => 91,  287 => 89,  283 => 87,  278 => 85,  274 => 84,  271 => 83,  265 => 82,  263 => 81,  260 => 80,  258 => 79,  254 => 77,  245 => 75,  238 => 74,  233 => 73,  231 => 72,  225 => 71,  220 => 68,  214 => 67,  204 => 66,  201 => 65,  197 => 64,  188 => 57,  182 => 56,  172 => 51,  167 => 48,  157 => 43,  152 => 40,  149 => 39,  145 => 38,  137 => 33,  134 => 32,  132 => 31,  127 => 29,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  96 => 20,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/manufacturer_info.twig", "");
    }
}
