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

/* default/template/product/search.twig */
class __TwigTemplate_6bb3efaf4159172cabf6d4cabe8a837412d5aad68857340510750a7fdc841d51 extends \Twig\Template
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
 ";
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
       <h1 class=\"page-title\">";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h1>
 
 
        <div class=\"row\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 33
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"input2\" /> <input type=\"button\" value=\"";
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-searchy\" />
        </div>
 
        <div class=\"col-sm-3 hidden\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 38
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 40
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 40) == ($context["category_id"] ?? null))) {
                // line 41
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 41);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 41);
                echo "</option>
            ";
            } else {
                // line 43
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 43);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 43);
                echo "</option>
            ";
            }
            // line 45
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 46
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 46) == ($context["category_id"] ?? null))) {
                    // line 47
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 47);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 47);
                    echo "</option>
            ";
                } else {
                    // line 49
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 49);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 49);
                    echo "</option>
            ";
                }
                // line 51
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 52
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 52) == ($context["category_id"] ?? null))) {
                        // line 53
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 53);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 53);
                        echo "</option>
            ";
                    } else {
                        // line 55
                        echo "            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 55);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 55);
                        echo "</option>
            ";
                    }
                    // line 57
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "          </select>
        </div>
 
        <div class=\"col-sm-3 hidden\">
          <label class=\"checkbox-inline\">
            ";
        // line 65
        if (($context["sub_category"] ?? null)) {
            // line 66
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 68
            echo "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        }
        // line 70
        echo "            ";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
        </div>
  
      <p class=\"hidden\">
        <label class=\"checkbox-inline\">
          ";
        // line 75
        if (($context["description"] ?? null)) {
            // line 76
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        } else {
            // line 78
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
          ";
        }
        // line 80
        echo "          ";
        echo ($context["entry_description"] ?? null);
        echo "</label>
      </p>
      
      <h2 class=\"resautlsearch\">";
        // line 83
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 84
        if (($context["products"] ?? null)) {
            // line 85
            echo "      <div class=\"sort\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 86
            echo ($context["text_sort"] ?? null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              
              
              
              ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 92
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 92) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 93
                    echo "              
              
              
              <option value=\"";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 96);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 96);
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 101
                    echo "              
              
              
              <option value=\"";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 104);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 104);
                    echo "</option>
              
              
              
              ";
                }
                // line 109
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "            
            
            
            </select>
          </div>
\t  
    <div class=\"row row-product-category\">
\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 118
                echo "\t\t\t<div class=\"product-thumb-category\">
\t\t\t  <div class=\"image\"><a href=\"";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 119);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 119);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 119);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 119);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t  ";
                // line 120
                if (twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 120)) {
                    echo "<span class=\"sale\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "skidka", [], "any", false, false, false, 120);
                    echo "%</span>";
                }
                // line 121
                echo "\t\t\t  </div>
\t\t\t\t 
\t\t\t  <div class=\"caption\">
\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 124);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 124);
                echo "</a></h4>
\t\t\t\t";
                // line 125
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 125)) {
                    // line 126
                    echo "\t\t\t\t<div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 127
                        echo "\t\t\t\t  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 127) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 128
                        echo "\t\t\t\t  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
\t\t\t\t";
                }
                // line 130
                echo "\t\t\t\t  </div> 
\t\t\t  <div class=\"button-group\">
\t\t\t\t";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 132)) {
                    // line 133
                    echo "\t\t\t\t<div class=\"price\"> 
\t\t\t\t\t";
                    // line 134
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 134)) {
                        // line 135
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 135);
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 136
                        echo " 
\t\t\t\t\t<div class=\"price-old\">";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 137);
                        echo "</div> 
\t\t\t\t\t<div class=\"price-new\">";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 138);
                        echo "</div> 
\t\t\t\t\t";
                    }
                    // line 140
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 142
                echo "\t\t\t\t 
\t\t\t\t <div class=\"wishliscompare\">
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 144
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 144);
                echo "');\"><i class=\"icon icon-heart-empty\"></i></button>
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 145
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 145);
                echo "');\"><i class=\"icon icon-exchange\"></i></button>
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 147);
                echo "');\" class=\"product-button\"><i class=\"icon icon-basket\"></i></button>
\t\t\t   
\t\t\t  </div>
\t\t\t</div>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "\t</div>
 
    <div class=\"pagination-block\">";
            // line 154
            echo ($context["pagination"] ?? null);
            echo "</div>
      ";
        } else {
            // line 156
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 158
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 159
        echo ($context["column_right"] ?? null);
        echo "
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 208
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 208,  489 => 159,  484 => 158,  478 => 156,  473 => 154,  469 => 152,  458 => 147,  451 => 145,  445 => 144,  441 => 142,  437 => 140,  432 => 138,  428 => 137,  425 => 136,  419 => 135,  417 => 134,  414 => 133,  412 => 132,  408 => 130,  399 => 128,  392 => 127,  387 => 126,  385 => 125,  379 => 124,  374 => 121,  368 => 120,  358 => 119,  355 => 118,  351 => 117,  342 => 110,  336 => 109,  326 => 104,  321 => 101,  311 => 96,  306 => 93,  303 => 92,  299 => 91,  291 => 86,  288 => 85,  286 => 84,  282 => 83,  275 => 80,  271 => 78,  267 => 76,  265 => 75,  256 => 70,  252 => 68,  248 => 66,  246 => 65,  239 => 60,  233 => 59,  227 => 58,  221 => 57,  213 => 55,  205 => 53,  202 => 52,  197 => 51,  189 => 49,  181 => 47,  178 => 46,  173 => 45,  165 => 43,  157 => 41,  154 => 40,  150 => 39,  146 => 38,  134 => 33,  127 => 29,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  96 => 20,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/search.twig", "");
    }
}
