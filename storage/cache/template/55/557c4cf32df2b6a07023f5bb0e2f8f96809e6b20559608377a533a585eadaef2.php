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

/* default/template/account/login.twig */
class __TwigTemplate_092703d00464eeaf476272b905f6a3790380a10b59fb001563399b78bafc6220 extends \Twig\Template
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
<div id=\"account-login\" class=\"container\">
\t<div itemscope=\"\" itemtype=\"http://schema.org/BreadcrumbList\" class=\"breadcrumb hidden\">
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
\t";
        // line 20
        if (($context["success"] ?? null)) {
            // line 21
            echo "\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t";
        }
        // line 23
        echo "\t";
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t";
        }
        // line 26
        echo "\t<h1 class=\"page-title hidden\">";
        echo ($context["text_new_customer"] ?? null);
        echo "</h1>
\t<div class=\"account-login-page\">
\t\t<form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t<h2>";
        // line 29
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</h2>
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 31
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"input2\" />
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 34
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"input2\" />
\t\t\t</div>
\t\t\t<a href=\"";
        // line 36
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
\t\t\t<div class=\"form-group-submit\">
\t\t\t\t<input type=\"submit\" value=\"";
        // line 38
        echo ($context["button_login"] ?? null);
        echo "\" />
\t\t\t</div>
\t\t\t";
        // line 40
        if (($context["redirect"] ?? null)) {
            // line 41
            echo "\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t\t";
        }
        // line 43
        echo "\t\t\t<div class=\"register-link\"><a href=\"";
        echo ($context["register"] ?? null);
        echo "\">Еще не зарегистрированы?</a></div>
\t\t</form>
\t</div>
\t";
        // line 46
        echo ($context["column_left"] ?? null);
        echo "
\t";
        // line 47
        echo ($context["column_right"] ?? null);
        echo "
\t";
        // line 48
        echo ($context["content_top"] ?? null);
        echo "
\t";
        // line 49
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 51
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 51,  182 => 49,  178 => 48,  174 => 47,  170 => 46,  163 => 43,  157 => 41,  155 => 40,  150 => 38,  143 => 36,  136 => 34,  128 => 31,  123 => 29,  119 => 28,  113 => 26,  107 => 24,  104 => 23,  98 => 21,  96 => 20,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}
