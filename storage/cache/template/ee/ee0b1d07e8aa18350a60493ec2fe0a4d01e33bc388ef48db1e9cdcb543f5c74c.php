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

/* default/template/extension/quickcheckout/voucher.twig */
class __TwigTemplate_101bf097f4abaa9d7b8596e97d6490cb5f493abf2260a9d45f8ee8f2f39166f7 extends \Twig\Template
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
        if (($context["coupon_module"] ?? null)) {
            // line 2
            echo "<div id=\"coupon-heading\"><i class=\"fa fa-ticket\"></i> ";
            echo ($context["entry_coupon"] ?? null);
            echo "</div>
<div id=\"coupon-content\">
  <div class=\"input-group\">
\t<input type=\"text\" name=\"coupon\" value=\"\" class=\"form-control\" />
\t<span class=\"input-group-btn\">
\t  <button type=\"button\" id=\"button-coupon\" class=\"btn btn-primary\">";
            // line 7
            echo ($context["text_use_coupon"] ?? null);
            echo "</button>
\t</span>
  </div>
</div>
";
        }
        // line 12
        if (($context["voucher_module"] ?? null)) {
            echo " 
<div id=\"voucher-heading\"><i class=\"fa fa-gift\"></i> ";
            // line 13
            echo ($context["entry_voucher"] ?? null);
            echo "</div>
<div id=\"voucher-content\">
  <div class=\"input-group\">
\t<input type=\"text\" name=\"voucher\" value=\"\" class=\"form-control\" />
\t<span class=\"input-group-btn\">
\t  <button type=\"button\" id=\"button-voucher\" class=\"btn btn-primary\">";
            // line 18
            echo ($context["text_use_voucher"] ?? null);
            echo "</button>
\t</span>
  </div>
</div>
";
        }
        // line 23
        if ((($context["reward_module"] ?? null) && ($context["reward"] ?? null))) {
            echo " 
<div id=\"reward-heading\"><i class=\"fa fa-star\"></i> ";
            // line 24
            echo ($context["entry_reward"] ?? null);
            echo "</div>
<div id=\"reward-content\">
  <div class=\"input-group\">
\t<input type=\"text\" name=\"reward\" value=\"\" class=\"form-control\" />
\t<span class=\"input-group-btn\">
\t  <button type=\"button\" id=\"button-reward\" class=\"btn btn-primary\">";
            // line 29
            echo ($context["text_use_reward"] ?? null);
            echo "</button>
\t</span>
  </div>
</div>
";
        }
        // line 33
        echo " 

<script type=\"text/javascript\"><!--
\$('#coupon-heading').on('click', function() {
    if(\$('#coupon-content').is(':visible')){
      \$('#coupon-content').slideUp('slow');
    } else {
      \$('#coupon-content').slideDown('slow');
    };
});

\$('#voucher-heading').on('click', function() {
    if(\$('#voucher-content').is(':visible')){
      \$('#voucher-content').slideUp('slow');
    } else {
      \$('#voucher-content').slideDown('slow');
    };
});

\$('#reward-heading').on('click', function() {
    if(\$('#reward-content').is(':visible')){
      \$('#reward-content').slideUp('slow');
    } else {
      \$('#reward-content').slideDown('slow');
    };
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  88 => 29,  80 => 24,  76 => 23,  68 => 18,  60 => 13,  56 => 12,  48 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/voucher.twig", "");
    }
}
