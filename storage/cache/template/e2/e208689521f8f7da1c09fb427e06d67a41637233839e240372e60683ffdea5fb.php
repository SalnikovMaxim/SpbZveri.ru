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

/* default/template/product/category.twig */
class __TwigTemplate_68799d80e3c96744f6a8ce5ccc85aa578d0f1a26a0d34c993d93df0dd6882717 extends \Twig\Template
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
<div id=\"product-category\" class=\"container\">
\t<div itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\" class=\"breadcrumb\">
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
\t\t\t\t
  <div class=\"row\">
\t";
        // line 22
        echo ($context["column_left"] ?? null);
        echo "
  
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "    ";
            $context["class"] = "category-column-6";
            // line 26
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "    ";
            $context["class"] = "category-column-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "    ";
            $context["class"] = "category-column-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1 class=\"page-title\">";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "</h1>
     
      ";
        // line 34
        if (($context["categories"] ?? null)) {
            // line 35
            echo "\t\t<div class=\"categorie-list\">
\t\t\t<ul class=\"categorie-ul-list\">
\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 38
                echo "\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 38);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t</ul>
\t\t</div>
      ";
        }
        // line 43
        echo "\t  
      ";
        // line 44
        if (($context["products"] ?? null)) {
            // line 45
            echo "      <div class=\"sort\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 46
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 52
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 52) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 53
                    echo "              
              
              
              <option value=\"";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 56);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 56);
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 61
                    echo "              
              
              
              <option value=\"";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 64);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 64);
                    echo "</option>
              
              
              
              ";
                }
                // line 69
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "            
            
            
            </select>
          </div>
 
\t<div class=\"row row-product-category\">
\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                echo "\t\t\t<div class=\"product-thumb-category\">
\t\t\t  <div class=\"image\"><a href=\"";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 79);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 79);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 79);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 79);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t  ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 80)) {
                    echo "<span class=\"sale\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 80);
                    echo "%</span>";
                }
                // line 81
                echo "\t\t\t  </div>
\t\t\t\t 
\t\t\t  <div class=\"caption\">
\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 84);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 84);
                echo "</a></h4>
\t\t\t\t";
                // line 85
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "\t\t\t\t<div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 87
                        echo "\t\t\t\t  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 87) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 88
                        echo "\t\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t  </div> 
\t\t\t  <div class=\"button-group\">
\t\t\t\t";
                // line 92
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "\t\t\t\t<div class=\"price\"> 
\t\t\t\t\t";
                    // line 94
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 94)) {
                        // line 95
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95);
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 96
                        echo " 
\t\t\t\t\t<div class=\"price-old\">";
                        // line 97
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 97);
                        echo "</div> 
\t\t\t\t\t<div class=\"price-new\">";
                        // line 98
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 98);
                        echo "</div> 
\t\t\t\t\t";
                    }
                    // line 100
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t 
\t\t\t\t <div class=\"wishliscompare\">
\t\t\t\t\t<button type=\"button\" title=\"";
                // line 104
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 104);
                echo "');\"><i class=\"icon icon-heart-empty\"></i></button>
\t\t\t\t\t<button type=\"button\"  title=\"";
                // line 105
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 105);
                echo "');\"><i class=\"icon icon-exchange\"></i></button>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 107);
                echo "');\" class=\"product-button\"><i class=\"icon icon-basket\"></i></button>
\t\t\t   
\t\t\t  </div>
\t\t\t</div>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "\t</div>
 
    <div class=\"pagination-block\">";
            // line 114
            echo ($context["pagination"] ?? null);
            echo "</div>
\t
      ";
        }
        // line 117
        echo "\t  
\t";
        // line 118
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 119
            echo "\t<hr>
\t<div class=\"row\"> ";
            // line 120
            if (($context["thumb"] ?? null)) {
                // line 121
                echo "\t\t<div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
\t\t";
            }
            // line 123
            echo "\t\t";
            if (($context["description"] ?? null)) {
                // line 124
                echo "\t\t<div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
\t\t";
            }
            // line 126
            echo "\t</div>
\t";
        }
        // line 128
        echo "\t  
      ";
        // line 129
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 130
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 132
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 135
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 136
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 138
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 138,  414 => 136,  409 => 135,  401 => 132,  395 => 130,  393 => 129,  390 => 128,  386 => 126,  380 => 124,  377 => 123,  367 => 121,  365 => 120,  362 => 119,  360 => 118,  357 => 117,  351 => 114,  347 => 112,  336 => 107,  329 => 105,  323 => 104,  319 => 102,  315 => 100,  310 => 98,  306 => 97,  303 => 96,  297 => 95,  295 => 94,  292 => 93,  290 => 92,  286 => 90,  277 => 88,  270 => 87,  265 => 86,  263 => 85,  257 => 84,  252 => 81,  246 => 80,  236 => 79,  233 => 78,  229 => 77,  220 => 70,  214 => 69,  204 => 64,  199 => 61,  189 => 56,  184 => 53,  181 => 52,  177 => 51,  169 => 46,  166 => 45,  164 => 44,  161 => 43,  156 => 40,  145 => 38,  141 => 37,  137 => 35,  135 => 34,  130 => 32,  123 => 31,  120 => 30,  117 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  103 => 24,  98 => 22,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
