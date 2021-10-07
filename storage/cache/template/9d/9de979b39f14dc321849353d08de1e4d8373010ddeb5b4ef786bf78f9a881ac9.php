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

/* default/template/common/home.twig */
class __TwigTemplate_416e7478bf4082e334163ecaa785b0d27c2f2fab537d6b1f3290d131c064c309 extends \Twig\Template
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
<div id=\"common-home\">
 ";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 12
        echo ($context["column_right"] ?? null);
        echo " 
</div>

<div class=\"pop-popup\">
\t<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"pop-left\">
\t\t\t<img src=\"/image/magazines.jpg\" alt=\"\">
\t\t</div>
\t\t<div class=\"pop-right\">
\t\t\t<h3>У нас отображен не весь ассортимент товаров</h3>
\t\t\t<p>Если вы не нашли нужный товар в каталоге, Вы всегда можете с нами связаться любым удобным способом и мы поможем вам найти товар для вашего домашнего питомца</p>
\t\t\t
\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"tel:+7 812 981 16 40\"><i class=\"icon icon-phone\"></i> +7 812 981 16 40</a></li>
\t\t\t\t\t<li><a href=\"malito:support@spbzveri.ru\"><i class=\"icon icon-mail-alt\"></i> support@spbzveri.ru</a></li>
\t\t\t\t 
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<button class=\"close-pop-popup\" id=\"close-pop-popup\" type=\"button\">Перейти к товарам</button>
\t\t</div>
\t\t
\t</div>
\t</div>
\t</div>
";
        // line 37
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  74 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
