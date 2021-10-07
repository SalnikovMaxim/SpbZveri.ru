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

/* default/template/information/contact.twig */
class __TwigTemplate_813fbcbb4da46583e9d702710aba59c93d92f7ea43e88bd0f887be0227364ba9 extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">
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
\t\t  <div class=\"contact-left\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 33
        if (($context["image"] ?? null)) {
            // line 34
            echo "\t\t\t\t<div class=\"col-sm-3\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<div class=\"namestore\"><address>";
        // line 37
        if (($context["geocode"] ?? null)) {
            echo "<a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"icon icon-\"></i> ";
            echo ($context["address"] ?? null);
            echo "</a>";
        } else {
            echo ($context["address"] ?? null);
        }
        echo "</address></div> 
\t\t\t\t\t<div class=\"namestore\">";
        // line 38
        echo ($context["comment"] ?? null);
        echo "</div> 
\t\t\t\t\t<div class=\"namestore\"><i class=\"icon icon-\"></i> ";
        // line 39
        echo ($context["text_telephone"] ?? null);
        echo ": <a href=\"tel:";
        echo ($context["telephone"] ?? null);
        echo "\">";
        echo ($context["telephone"] ?? null);
        echo "</a></div> 
\t\t\t\t\t<div class=\"namestore\"><i class=\"icon icon-\"></i> Почта: <a href=\"malito:";
        // line 40
        echo ($context["mail"] ?? null);
        echo "\">";
        echo ($context["mail"] ?? null);
        echo "</a></div> 
\t\t\t\t\t<div class=\"namestore\"><i class=\"icon icon-\"></i> <strong>";
        // line 41
        echo ($context["text_open"] ?? null);
        echo "</strong><br />";
        echo ($context["open"] ?? null);
        echo "</div> 
\t\t\t\t</div>
\t\t\t\t 
\t\t\t</div>
\t\t  </div>
\t\t  ";
        // line 46
        if (($context["locations"] ?? null)) {
            // line 47
            echo "\t\t  <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
\t\t  <div class=\"panel-group\" id=\"accordion\">
\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 50
                echo "\t\t\t<div class=\"panel panel-default\">
\t\t\t  <div class=\"panel-heading\">
\t\t\t\t<h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 52);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 52);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
\t\t\t  </div>
\t\t\t  <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 54);
                echo "\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t  <div class=\"row\">
\t\t\t\t\t";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "\t\t\t\t\t<div class=\"col-sm-3\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 58);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 58);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 58);
                    echo "\" class=\"img-thumbnail\" /></div>
\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t<div class=\"col-sm-3\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 60);
                echo "</strong><br />
\t\t\t\t\t  <address>
\t\t\t\t\t  ";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 62);
                echo "
\t\t\t\t\t  </address>
\t\t\t\t\t  ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 64)) {
                    // line 65
                    echo "\t\t\t\t\t  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 65));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
\t\t\t\t\t  ";
                }
                // line 67
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\"> <strong>";
                // line 68
                echo ($context["text_telephone"] ?? null);
                echo "</strong><br>
\t\t\t\t\t  ";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 69);
                echo "<br />
\t\t\t\t\t  <br />
\t\t\t\t\t  ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "\t\t\t\t\t  <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong><br>
\t\t\t\t\t  ";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 73);
                    echo "
\t\t\t\t\t  ";
                }
                // line 75
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t  ";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "\t\t\t\t\t  <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong><br />
\t\t\t\t\t  ";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 79);
                    echo "<br />
\t\t\t\t\t  <br />
\t\t\t\t\t  ";
                }
                // line 82
                echo "\t\t\t\t\t  ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "\t\t\t\t\t  <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong><br />
\t\t\t\t\t  ";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 84);
                    echo "
\t\t\t\t\t  ";
                }
                // line 86
                echo "\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t  </div>
\t\t  ";
        }
        // line 94
        echo "\t\t  <div class=\"contact-right\">\t
\t\t\t\t<h2>Обратная связь</h2>
\t\t\t  <form action=\"";
        // line 96
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-contact\">
\t\t\t\t  <div class=\"form-group required\">
\t\t\t\t\t  <input type=\"text\" name=\"name\" value=\"";
        // line 98
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 99
        if (($context["error_name"] ?? null)) {
            // line 100
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 102
        echo "\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group required\">
\t\t\t\t\t  <input type=\"text\" name=\"email\" value=\"";
        // line 104
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t  ";
        // line 105
        if (($context["error_email"] ?? null)) {
            // line 106
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 108
        echo "\t\t\t\t  </div>
\t\t\t\t  <div class=\"form-group required\">
\t\t\t\t\t  <textarea name=\"enquiry\" rows=\"4\" placeholder=\"";
        // line 110
        echo ($context["entry_enquiry"] ?? null);
        echo "\" id=\"input-enquiry\">";
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
\t\t\t\t\t  ";
        // line 111
        if (($context["error_enquiry"] ?? null)) {
            // line 112
            echo "\t\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
\t\t\t\t\t  ";
        }
        // line 114
        echo "\t\t\t\t  </div>
\t\t\t\t  ";
        // line 115
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 117
        echo ($context["button_submit"] ?? null);
        echo "\" />
\t\t\t\t</div>
\t\t\t  </form>
\t\t\t</div>
\t\t</div>
      ";
        // line 122
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 123
        echo ($context["column_right"] ?? null);
        echo "
</div>
";
        // line 125
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 125,  403 => 123,  399 => 122,  391 => 117,  386 => 115,  383 => 114,  377 => 112,  375 => 111,  369 => 110,  365 => 108,  359 => 106,  357 => 105,  351 => 104,  347 => 102,  341 => 100,  339 => 99,  333 => 98,  328 => 96,  324 => 94,  320 => 92,  309 => 86,  304 => 84,  299 => 83,  296 => 82,  290 => 79,  285 => 78,  283 => 77,  279 => 75,  274 => 73,  269 => 72,  267 => 71,  262 => 69,  258 => 68,  255 => 67,  245 => 65,  243 => 64,  238 => 62,  232 => 60,  222 => 58,  220 => 57,  214 => 54,  207 => 52,  203 => 50,  199 => 49,  193 => 47,  191 => 46,  181 => 41,  175 => 40,  167 => 39,  163 => 38,  149 => 37,  146 => 36,  136 => 34,  134 => 33,  127 => 29,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  96 => 20,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
