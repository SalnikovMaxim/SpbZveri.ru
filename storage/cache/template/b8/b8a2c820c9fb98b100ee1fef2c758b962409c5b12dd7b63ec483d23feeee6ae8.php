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

/* default/template/product/special.twig */
class __TwigTemplate_a1de4056052550dd9c895794f7f1569ce887bd686b6b604d10e1902b29492b34 extends \Twig\Template
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
<div id=\"product-search\" class=\"container\">
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
        echo "\t";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"";
        // line 29
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
       <h1 class=\"page-title\">";
        // line 30
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 31
        if (($context["products"] ?? null)) {
            // line 32
            echo "   
\t\t";
            // line 33
            if (($context["products"] ?? null)) {
                // line 34
                echo "\t\t  <div class=\"sort\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
                // line 35
                echo ($context["text_sort"] ?? null);
                echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 41
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 41) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 42
                        echo "              
              
              
              <option value=\"";
                        // line 45
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 45);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 45);
                        echo "</option>
              
              
              
              ";
                    } else {
                        // line 50
                        echo "              
              
              
              <option value=\"";
                        // line 53
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 53);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 53);
                        echo "</option>
              
              
              
              ";
                    }
                    // line 58
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            
            
            
            </select>
          </div>
\t 
\t\t<div class=\"row row-product-category\">
\t\t\t";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 67
                    echo "\t\t\t\t<div class=\"product-thumb-category cols-5\">
\t\t\t\t  <div class=\"image\"><a href=\"";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 68);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
                    echo "\" class=\"img-responsive\" /></a>
\t\t\t\t  <span class=\"sale\">-";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 69);
                    echo "%</span>
\t\t\t\t  </div>
\t\t\t\t\t 
\t\t\t\t  <div class=\"caption\">
\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 73);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                    echo "</a></h4>
\t\t\t\t\t";
                    // line 74
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 74)) {
                        // line 75
                        echo "\t\t\t\t\t<div class=\"rating\">";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 76
                            echo "\t\t\t\t\t  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 76) < $context["i"])) {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                            } else {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                            }
                            // line 77
                            echo "\t\t\t\t\t  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</div>
\t\t\t\t\t";
                    }
                    // line 79
                    echo "\t\t\t\t\t  </div> 
\t\t\t\t  <div class=\"button-group\">
\t\t\t\t\t";
                    // line 81
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 81)) {
                        // line 82
                        echo "\t\t\t\t\t<div class=\"price\"> 
\t\t\t\t\t\t";
                        // line 83
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 83)) {
                            // line 84
                            echo "\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84);
                            echo "
\t\t\t\t\t\t";
                        } else {
                            // line 85
                            echo " 
\t\t\t\t\t\t<div class=\"price-old\">";
                            // line 86
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 86);
                            echo "</div> 
\t\t\t\t\t\t<div class=\"price-new\">";
                            // line 87
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 87);
                            echo "</div> 
\t\t\t\t\t\t";
                        }
                        // line 89
                        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t 
\t\t\t\t\t <div class=\"wishliscompare\">
\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 93
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" onclick=\"wishlist.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 93);
                    echo "');\"><i class=\"icon icon-heart-empty\"></i></button>
\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 94
                    echo ($context["button_compare"] ?? null);
                    echo "\" onclick=\"compare.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 94);
                    echo "');\"><i class=\"icon icon-exchange\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 96);
                    echo "');\" class=\"product-button\"><i class=\"icon icon-basket\"></i></button>
\t\t\t\t   
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "\t\t\t   
\t\t</div>
\t";
            }
            // line 104
            echo "\t\t
      <div class=\"pagination-block\">";
            // line 105
            echo ($context["pagination"] ?? null);
            echo "</div>
      ";
        } else {
            // line 107
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 109
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 112
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 113
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 115
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 115,  351 => 113,  346 => 112,  338 => 109,  332 => 107,  327 => 105,  324 => 104,  319 => 101,  308 => 96,  301 => 94,  295 => 93,  291 => 91,  287 => 89,  282 => 87,  278 => 86,  275 => 85,  269 => 84,  267 => 83,  264 => 82,  262 => 81,  258 => 79,  249 => 77,  242 => 76,  237 => 75,  235 => 74,  229 => 73,  222 => 69,  212 => 68,  209 => 67,  205 => 66,  196 => 59,  190 => 58,  180 => 53,  175 => 50,  165 => 45,  160 => 42,  157 => 41,  153 => 40,  145 => 35,  142 => 34,  140 => 33,  137 => 32,  135 => 31,  131 => 30,  125 => 29,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  96 => 20,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/special.twig", "");
    }
}
