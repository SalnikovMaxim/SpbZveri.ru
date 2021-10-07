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

/* default/template/account/account.twig */
class __TwigTemplate_d46ecb7eaf137d8b62a7fee018e5abb664662f7e8c60a8b2c1987c27d92ee8a4 extends \Twig\Template
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
<div id=\"account-account\" class=\"container\">
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
            echo "</div>
  ";
        }
        // line 23
        echo " 
\t<h1 class=\"page-title\">";
        // line 24
        echo ($context["text_my_account"] ?? null);
        echo "</h1>
\t<div class=\"account\">
\t\t<div class=\"row\">
\t\t\t<div class=\"account-item\">
\t\t\t\t<div class=\"account-item-icon\"><i class=\"icon icon-heart-empty\"></i></div>
\t\t\t\t<div class=\"account-item-title\">Избранные товары</div>
\t\t\t\t<div class=\"account-item-button\"><span><strong>";
        // line 30
        echo ($context["text_wishlist"] ?? null);
        echo "</strong> товара</span><a href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\">Посмотреть</a></div>
\t\t\t</div>
\t\t\t<div class=\"account-item\">
\t\t\t\t<div class=\"account-item-icon\"><i class=\"icon icon-exchange\"></i></div>
\t\t\t\t<div class=\"account-item-title\">Товары в сравнении</div>
\t\t\t\t<div class=\"account-item-button\"><span><strong>";
        // line 35
        echo ($context["count_compare"] ?? null);
        echo "</strong> товара</span><a href=\"";
        echo ($context["compare"] ?? null);
        echo "\">Посмотреть</a></div>
\t\t\t</div>
\t\t\t<div class=\"account-item\">
\t\t\t\t<div class=\"account-item-icon\"><i class=\"icon icon-basket\"></i></div>
\t\t\t\t<div class=\"account-item-title\">Ваша корзина</div>
\t\t\t\t<div class=\"account-item-button\"><span><strong>";
        // line 40
        echo ($context["text_items"] ?? null);
        echo "</strong> товара</span><a href=\"";
        echo ($context["checkout"] ?? null);
        echo "\">Оформить</a></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"account\">
\t\t<div class=\"account-h2\">Контактная информация и пароли</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"account-item\">
\t\t\t\t<div class=\"account-item-icon\"><i class=\"icon icon-user\"></i></div>
\t\t\t\t<div class=\"account-item-title\">Контактные данные</div>
\t\t\t\t<div class=\"account-item-button\"><a href=\"";
        // line 51
        echo ($context["edit"] ?? null);
        echo "\" style=\"margin-left: auto;\">Изменить</a></div>
\t\t\t</div>
\t\t\t<div class=\"account-item\">
\t\t\t\t<div class=\"account-item-icon\"><i class=\"icon icon-key\"></i></div>
\t\t\t\t<div class=\"account-item-title\">Мои пароли</div>
\t\t\t\t<div class=\"account-item-button\"><a href=\"";
        // line 56
        echo ($context["password"] ?? null);
        echo "\" style=\"margin-left: auto;\">Изменить</a></div>
\t\t\t</div>
\t\t\t<div class=\"account-item\">
\t\t\t\t<div class=\"account-item-icon\"><i class=\"icon icon-location-1\"></i></div>
\t\t\t\t<div class=\"account-item-title\">Мои адреса</div>
\t\t\t\t<div class=\"account-item-button\"><a href=\"";
        // line 61
        echo ($context["address"] ?? null);
        echo "\" style=\"margin-left: auto;\">Изменить</a></div>
\t\t\t</div>
\t\t\t<div class=\"account-item\">
\t\t\t\t<div class=\"account-item-icon\"><i class=\"icon icon-history\"></i></div>
\t\t\t\t<div class=\"account-item-title\">История заказов</div>
\t\t\t\t<div class=\"account-item-button\"><a href=\"";
        // line 66
        echo ($context["order"] ?? null);
        echo "\" style=\"margin-left: auto;\">Посмотреть</a></div>
\t\t\t</div>
\t\t\t";
        // line 75
        echo "\t\t</div>
\t</div>
\t
\t<div class=\"account\">
\t\t<div class=\"account-h2\">Скидка и подписка на новости</div>
\t\t<div class=\"row\">
\t\t\t";
        // line 81
        if (($context["membership"] ?? null)) {
            // line 82
            echo "\t\t\t<div class=\"account-item account-itemact\">
\t\t\t\t<div class=\"account-item-icon\"><i class=\"icon icon-cc-diners-club\"></i></div>
\t\t\t\t<div class=\"account-item-title\">";
            // line 84
            echo ($context["text_membership"] ?? null);
            echo "</div>
\t\t\t\t<div class=\"account-item-button\"><span>Скидка - <strong>";
            // line 85
            echo ($context["card_discount"] ?? null);
            echo "</strong></span><a href=\"";
            echo ($context["membership"] ?? null);
            echo "\">Посмотреть</a></div>
\t\t\t</div>
\t\t\t";
        }
        // line 88
        echo "\t\t\t<div class=\"account-item\">
\t\t\t\t<div class=\"account-item-icon\"><i class=\"icon icon-mail-alt\"></i></div>
\t\t\t\t<div class=\"account-item-title\">Подписка на рассылку</div>
\t\t\t\t<div class=\"account-item-button\"><a href=\"";
        // line 91
        echo ($context["newsletter"] ?? null);
        echo "\" style=\"margin-left: auto;\">Изменить</a></div>
\t\t\t</div>
\t\t</div>
\t</div>
 
";
        // line 153
        echo "</div>
";
        // line 154
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 154,  220 => 153,  212 => 91,  207 => 88,  199 => 85,  195 => 84,  191 => 82,  189 => 81,  181 => 75,  176 => 66,  168 => 61,  160 => 56,  152 => 51,  136 => 40,  126 => 35,  116 => 30,  107 => 24,  104 => 23,  98 => 21,  96 => 20,  93 => 19,  86 => 17,  80 => 14,  76 => 13,  69 => 12,  63 => 9,  59 => 8,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/account.twig", "");
    }
}
