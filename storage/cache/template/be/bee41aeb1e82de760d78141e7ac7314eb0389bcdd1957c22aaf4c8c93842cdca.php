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

/* default/template/extension/quickcheckout/login.twig */
class __TwigTemplate_5de04050ff478c7c947051732600b0e6dc7004b82f5c699eb3627865ebccace8 extends \Twig\Template
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
        echo "<div id=\"login\">
  <div class=\"col-sm-6 text-left\">
\t<label class=\"col-sm-3\" for=\"input-login-email\">";
        // line 3
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t<div class=\"col-sm-9\">
\t  <input type=\"text\" name=\"email\" value=\"\" class=\"form-control\" id=\"input-login-email\" />
\t</div>
  </div>
  <div class=\"col-sm-6 text-left\">
\t<label class=\"col-sm-3\" for=\"input-login-password\">";
        // line 9
        echo ($context["entry_password"] ?? null);
        echo " <a href=\"";
        echo ($context["forgotten"] ?? null);
        echo "\" title=\"";
        echo ($context["text_forgotten"] ?? null);
        echo "\" data-toggle=\"tooltip\"><i class=\"fa fa-question-circle\"></i></a></label>
\t<div class=\"col-sm-9\">
\t  <div class=\"input-group\">
\t\t<input type=\"password\" name=\"password\" value=\"\" class=\"form-control\" />
\t\t<span class=\"input-group-btn\">
\t\t  <button type=\"button\" id=\"button-login\" data-loading-text=\"";
        // line 14
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t</span>
\t  </div>
\t</div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#login input').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-login').click();
\t}
});
//--></script>   ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/quickcheckout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  50 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/quickcheckout/login.twig", "");
    }
}
