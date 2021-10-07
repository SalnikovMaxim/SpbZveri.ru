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

/* default/template/product/compare.twig */
class __TwigTemplate_e0a29625a47fffbb79ae780226f7bd24fe94e9b429a321232ac3fbca2af68b24 extends \Twig\Template
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
<div id=\"product-compare\" class=\"container\">
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
        if (($context["success"] ?? null)) {
            // line 21
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 25
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 26
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 28
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 30
            echo "    ";
        } else {
            // line 31
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 32
            echo "    ";
        }
        // line 33
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
       <h1 class=\"page-title\">";
        // line 34
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 35
        if (($context["products"] ?? null)) {
            // line 36
            echo "      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"";
            // line 39
            echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
            echo "\"><strong>";
            echo ($context["text_product"] ?? null);
            echo "</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style=\"min-width: 160px;\">";
            // line 44
            echo ($context["text_name"] ?? null);
            echo "</td>
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 46
                echo "            <td><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 46);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 46);
                echo "</strong></a></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo " </tr>
          <tr>
            <td>";
            // line 49
            echo ($context["text_image"] ?? null);
            echo "</td>
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 51
                echo "            <td class=\"text-center\">";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 51)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 51);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51);
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo " </tr>
          <tr>
            <td>";
            // line 54
            echo ($context["text_price"] ?? null);
            echo "</td>
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 56
                echo "            <td>";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "              ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 57)) {
                        // line 58
                        echo "              ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 58);
                        echo "
              ";
                    } else {
                        // line 59
                        echo " <strike>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59);
                        echo "</strike> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59);
                        echo "
              ";
                    }
                    // line 61
                    echo "              ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo " </tr>
          <tr>
            <td>";
            // line 64
            echo ($context["text_model"] ?? null);
            echo "</td>
            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 66
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 66);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo " </tr>
          <tr>
            <td>";
            // line 69
            echo ($context["text_manufacturer"] ?? null);
            echo "</td>
            ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 71
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 71);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo " </tr>
          <tr>
            <td>";
            // line 74
            echo ($context["text_availability"] ?? null);
            echo "</td>
            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 76
                echo "            <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 76);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo " </tr>
        ";
            // line 78
            if (($context["review_status"] ?? null)) {
                // line 79
                echo "        <tr>
          <td>";
                // line 80
                echo ($context["text_rating"] ?? null);
                echo "</td>
          ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 82
                    echo "          <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 83
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 83) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"icon icon-\"></i></span> ";
                        } else {
                            echo " <span><i class=\"icon icon-\"></i></span> ";
                        }
                        // line 84
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br />
            ";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 85);
                    echo "</td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo " </tr>
        ";
            }
            // line 88
            echo "        <tr>
          <td>";
            // line 89
            echo ($context["text_summary"] ?? null);
            echo "</td>
          ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 91
                echo "          <td class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 91);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo " </tr>
        <tr>
          <td>";
            // line 94
            echo ($context["text_weight"] ?? null);
            echo "</td>
          ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 96
                echo "          <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 96);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo " </tr>
        <tr>
          <td>";
            // line 99
            echo ($context["text_dimension"] ?? null);
            echo "</td>
          ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 101
                echo "          <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 101);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 101);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 101);
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo " </tr>
          </tbody>
        
        ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 106
                echo "        <thead>
          <tr>
            <td colspan=\"";
                // line 108
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 108);
                echo "</strong></td>
          </tr>
        </thead>
        ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 112
                    echo "        <tbody>
          <tr>
            <td>";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 114);
                    echo "</td>
            ";
                    // line 115
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 116
                        echo "            ";
                        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 116)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null)) {
                            // line 117
                            echo "            <td> ";
                            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 117)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["key"]] ?? null) : null);
                            echo "</td>
            ";
                        } else {
                            // line 119
                            echo "            <td></td>
            ";
                        }
                        // line 121
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "        <tr>
          <td></td>
          ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 129
                echo "          <td><input type=\"button\" value=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary btn-block\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 129);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 129);
                echo "');\" />
            <a href=\"";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 130);
                echo "\" class=\"btn btn-danger btn-block\">  ";
                echo ($context["button_remove"] ?? null);
                echo "</a></td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo " </tr>
      </table>
      ";
        } else {
            // line 134
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 136
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 139
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 140
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 142
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 142,  546 => 140,  541 => 139,  533 => 136,  527 => 134,  522 => 131,  512 => 130,  503 => 129,  499 => 128,  495 => 126,  489 => 125,  481 => 122,  475 => 121,  471 => 119,  465 => 117,  462 => 116,  458 => 115,  454 => 114,  450 => 112,  446 => 111,  438 => 108,  434 => 106,  430 => 105,  425 => 102,  412 => 101,  408 => 100,  404 => 99,  400 => 97,  391 => 96,  387 => 95,  383 => 94,  379 => 92,  370 => 91,  366 => 90,  362 => 89,  359 => 88,  355 => 86,  347 => 85,  339 => 84,  332 => 83,  327 => 82,  323 => 81,  319 => 80,  316 => 79,  314 => 78,  311 => 77,  302 => 76,  298 => 75,  294 => 74,  290 => 72,  281 => 71,  277 => 70,  273 => 69,  269 => 67,  260 => 66,  256 => 65,  252 => 64,  248 => 62,  239 => 61,  231 => 59,  225 => 58,  222 => 57,  219 => 56,  215 => 55,  211 => 54,  207 => 52,  190 => 51,  186 => 50,  182 => 49,  178 => 47,  167 => 46,  163 => 45,  159 => 44,  149 => 39,  144 => 36,  142 => 35,  138 => 34,  131 => 33,  128 => 32,  125 => 31,  122 => 30,  119 => 29,  116 => 28,  113 => 27,  111 => 26,  106 => 25,  98 => 21,  96 => 20,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/compare.twig", "");
    }
}
