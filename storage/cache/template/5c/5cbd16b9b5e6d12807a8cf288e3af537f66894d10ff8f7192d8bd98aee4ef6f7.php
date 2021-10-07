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

/* catalog/articles_form.twig */
class __TwigTemplate_46a05bb89c9c9e49f46e3fa8806bde6758ae3f320d6c6a68820538ac000a1871 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-articles\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-articles\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\" id=\"language\">
\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 30
            echo "\t\t\t<li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 30);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 30);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 30);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 30);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 30);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t  </ul>
\t\t  <div class=\"tab-content\">
\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 35
            echo "\t\t\t<div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 35);
            echo "\">
\t\t\t  <div class=\"form-group required\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 37);
            echo "\">";
            echo ($context["text_title"] ?? null);
            echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <input type=\"text\" name=\"articles[";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39);
            echo "][title]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["articles"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39)] ?? null) : null), "title", [], "any", false, false, false, 39);
            echo "\" placeholder=\"";
            echo ($context["text_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group required\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-short";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 43);
            echo "\">";
            echo ($context["text_short_description"] ?? null);
            echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <textarea name=\"articles[";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "][short_description]\" rows=\"5\" placeholder=\"";
            echo ($context["text_short_description"] ?? null);
            echo "\" id=\"input-short";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "\" class=\"form-control\">";
            echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["articles"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45)] ?? null) : null), "short_description", [], "any", false, false, false, 45);
            echo "</textarea>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "\">";
            echo ($context["text_description"] ?? null);
            echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <textarea name=\"articles[";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "][description]\" placeholder=\"";
            echo ($context["text_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["articles"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51)] ?? null) : null), "description", [], "any", false, false, false, 51);
            echo "</textarea>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-keyword";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "\">";
            echo ($context["text_keyword"] ?? null);
            echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t  <input type=\"text\" name=\"keyword[";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "]\" value=\"";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["keyword"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["text_keyword"] ?? null);
            echo "\" id=\"input-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 64
        echo ($context["text_image"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 66
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["no_image"] ?? null);
        echo "\" /></a>
\t\t\t  <input type=\"hidden\" name=\"image\" value=\"";
        // line 67
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 71
        echo ($context["text_status"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t";
        // line 74
        if (($context["status"] ?? null)) {
            // line 75
            echo "\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"0\">";
            // line 76
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 78
            echo "\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 79
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 81
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<script type=\"text/javascript\">
\$('#language a:first').tab('show');

";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 96
            echo "\$('#input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 96);
            echo "').summernote({height: 300});
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "</script>
";
        // line 99
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/articles_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 99,  305 => 98,  296 => 96,  292 => 95,  276 => 81,  271 => 79,  266 => 78,  261 => 76,  256 => 75,  254 => 74,  248 => 71,  241 => 67,  235 => 66,  230 => 64,  226 => 62,  209 => 57,  202 => 55,  189 => 51,  182 => 49,  169 => 45,  162 => 43,  149 => 39,  142 => 37,  136 => 35,  132 => 34,  128 => 32,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/articles_form.twig", "");
    }
}
