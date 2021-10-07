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

/* default/template/common/header.twig */
class __TwigTemplate_9aae06988e0525745e0e193d248f01516ada974cf10e7e6f48c1b9d61f0c649c extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 13
        if (($context["noindex"] ?? null)) {
            // line 14
            echo "<meta name=\"robots\" content=\"noindex,nofollow\" />
";
        }
        // line 16
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 20
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 23
        echo "<script src=\"catalog/view/theme/default/js/jquery.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css?v=001\" rel=\"stylesheet\" />
<link href=\"catalog/view/theme/default/js/script.js\" type=\"text/javascript\" />

<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap\" rel=\"stylesheet\">

 <script src=\"catalog/view/javascript/membership_nearest.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/theme/default/stylesheet/membership_nearest.css\" rel=\"stylesheet\" type=\"text/css\" />

 ";
        // line 41
        echo " 

 
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 45
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 45);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 45);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 45);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 48
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 52
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 52);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 52);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 55
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</head>
<body>

\t<header>
\t\t<div class=\"container\">
\t\t\t<div class=\"flex-header\">
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t";
        // line 64
        if (($context["logo"] ?? null)) {
            // line 65
            echo "\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t\t<h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"search\">
\t\t\t\t\t";
        // line 71
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t<div class=\"location-header\"><span><i class=\"icon icon-location\"></i></span><span class=\"prmn-cmngr\">";
        // line 72
        echo ($context["prmn_cmngr"] ?? null);
        echo "</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"menu_container\">
\t\t\t\t\t<div class=\"mobile_menu\">меню</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"collback\">
\t\t\t\t\t<p><a href=\"tel:";
        // line 78
        echo ($context["telephone"] ?? null);
        echo "\" title=\"Нажмите, чтобы позвонить нам\">";
        echo ($context["telephone"] ?? null);
        echo "</a></p>
\t\t\t\t\t<p>ежедневно с 10 - 22</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"linksdef\">
\t\t\t\t\t";
        // line 82
        if ( !($context["logged"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t<div class=\"login\">
\t\t\t\t\t\t<a href=\"";
            // line 84
            echo ($context["login"] ?? null);
            echo "\" title=\"Войти в личный кабинет\">Вход</a>
\t\t\t\t\t\t<span class=\"lines\">|</span>
\t\t\t\t\t\t<a href=\"";
            // line 86
            echo ($context["register"] ?? null);
            echo "\" title=\"Зарегистрировать клиентский аккаунт\">Регистрация</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 89
            echo "\t\t\t\t\t<div class=\"login\">
\t\t\t\t\t\t<a href=\"";
            // line 90
            echo ($context["account"] ?? null);
            echo "\" title=\"Войти в личный кабинет\">Кабинет</a>
\t\t\t\t\t\t<span class=\"lines\">|</span>
\t\t\t\t\t\t<a href=\"";
            // line 92
            echo ($context["logout"] ?? null);
            echo "\" title=\"Зарегистрировать клиентский аккаунт\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"cart\">
\t\t\t\t\t<div class=\"compare\">
\t\t\t\t\t\t<a href=\"";
        // line 98
        echo ($context["compare"] ?? null);
        echo "\" title=\"Товары в сравнениях\"><i class=\"icon icon-exchange\"></i>";
        if (($context["count_compare"] ?? null)) {
            echo "<span class=\"cart-wishlist-com\">";
            echo ($context["count_compare"] ?? null);
            echo "</span>";
        }
        echo "</a>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t<a href=\"";
        // line 101
        echo ($context["wishlist"] ?? null);
        echo "\" title=\"Избранные товары\"><i class=\"icon icon-heart-empty\"></i>";
        if (($context["text_wishlist"] ?? null)) {
            echo "<span class=\"cart-wishlist-com\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</span>";
        }
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"cart-button\">
\t\t\t\t\t\t";
        // line 104
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"menu\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 111
        echo ($context["menu"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
\t</header>

\t<main>
\t
\t<div id=\"overlay\"></div>
 
 <!-- Membership -->
";
        // line 121
        if (($context["membership_nearest_discount"] ?? null)) {
            // line 122
            echo "<div id=\"membership-nearest-discount-panel\" style=\"display: none;\">
\t<div id=\"membership-d\"></div>
\t<div id=\"membership-nearest-discount-panel-hidden\">
\t\t<div id=\"membership-c-d-t\"></div>
\t\t<div id=\"membership-n-d-t\"></div>
\t</div>
</div>
";
        }
        // line 130
        if (($context["membership_nearest_gift"] ?? null)) {
            // line 131
            echo "<div id=\"membership-nearest-gift-panel\" style=\"display: none;\">
\t<div id=\"membership-g\"></div>
\t<div id=\"membership-nearest-gift-panel-hidden\">
\t\t<div id=\"membership-c-g-t\"></div>
\t\t<div id=\"membership-n-g-t\"></div>
\t</div>
</div>
";
        }
        // line 138
        echo "    
<!-- Membership -->
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 138,  329 => 131,  327 => 130,  317 => 122,  315 => 121,  302 => 111,  292 => 104,  280 => 101,  268 => 98,  263 => 95,  255 => 92,  250 => 90,  247 => 89,  241 => 86,  236 => 84,  233 => 83,  231 => 82,  222 => 78,  213 => 72,  209 => 71,  205 => 69,  197 => 67,  185 => 65,  183 => 64,  174 => 57,  166 => 55,  162 => 54,  151 => 52,  147 => 51,  144 => 50,  135 => 48,  131 => 47,  118 => 45,  114 => 44,  109 => 41,  96 => 23,  90 => 21,  88 => 20,  82 => 18,  80 => 17,  75 => 16,  71 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
