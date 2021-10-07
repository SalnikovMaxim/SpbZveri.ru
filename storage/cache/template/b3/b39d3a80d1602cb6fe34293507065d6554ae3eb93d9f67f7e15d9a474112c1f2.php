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

/* catalog/product_form.twig */
class __TwigTemplate_9a23d1e8312951ffeb9e413e27d225f327262be128c6e237f3ae9b82ec61ad30 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
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
            echo "          <li><a href=\"";
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
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
             
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            echo "                  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 45);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 45);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 45);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 45);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
\t\t\t\t\t\t<textarea name=\"product_description[";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "][name]\" rows=\"1\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null), "name_product", [], "any", false, false, false, 53)) : (""));
            echo "</textarea>
                        ";
            // line 54
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) {
                // line 55
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 56
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["product_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["product_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null), "description", [], "any", false, false, false, 61)) : (""));
            echo "</textarea>
                      </div>
                    </div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-mpn\">Состав</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"mpn\" placeholder=\"Введите состав товара\" id=\"input-mpn\" data-toggle=\"summernote\" data-lang=\"";
            // line 68
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo ($context["mpn"] ?? null);
            echo "</textarea>
                      </div>
                    </div>
\t\t\t\t\t
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["product_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["product_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null), "meta_title", [], "any", false, false, false, 75)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "\" class=\"form-control\"/>
                        ";
            // line 76
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_meta_title"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76)] ?? null) : null)) {
                // line 77
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_meta_title"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 78
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["product_description"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["product_description"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83)] ?? null) : null), "meta_description", [], "any", false, false, false, 83)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            echo "\" class=\"form-control\">";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["product_description"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["product_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 89)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "][tag]\" value=\"";
            echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["product_description"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["product_description"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95)] ?? null) : null), "tag", [], "any", false, false, false, 95)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 103
        echo ($context["entry_model"] ?? null);
        echo "</label>
                  
                <div class=\"col-sm-9\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 106
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
\t\t
                  ";
        // line 108
        if (($context["error_model"] ?? null)) {
            // line 109
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                  ";
        }
        // line 110
        echo "</div>
                

 \t\t\t\t<div class=\"col-sm-1 text-right\">
\t\t\t\t\t<a type=\"button\"  title=\"Показать/Скрыть - Дополнительные поля \" class=\"btn btn-info \" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#pcollapse\"><i class=\"fa fa-arrows-v\"></i></a>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t  
              <div class=\"collapse\" id=\"pcollapse\">
\t\t\t  <div class=\"form-group\">
\t\t
\t\t\t   <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 121
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
\t\t
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 124
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 128
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 130
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 134
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 136
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 140
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 142
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 146
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 148
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
 

\t\t\t  </div>
\t\t
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 156
        echo ($context["entry_location"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 158
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 162
        echo ($context["entry_price"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 164
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 168
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 171
        echo ($context["text_none"] ?? null);
        echo "</option>


                    ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 175
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 175) == ($context["tax_class_id"] ?? null))) {
                // line 176
                echo "

                        <option value=\"";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 178);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 178);
                echo "</option>


                      ";
            } else {
                // line 182
                echo "

                        <option value=\"";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 184);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 184);
                echo "</option>


                      ";
            }
            // line 188
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 195
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 197
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 201
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 203
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 207
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    ";
        // line 212
        if (($context["subtract"] ?? null)) {
            // line 213
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 215
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 216
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 220
            echo "

                      <option value=\"1\">";
            // line 222
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 223
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        }
        // line 227
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 233
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 239
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 239) == ($context["stock_status_id"] ?? null))) {
                // line 240
                echo "

                        <option value=\"";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 242);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 242);
                echo "</option>


                      ";
            } else {
                // line 246
                echo "

                        <option value=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 248);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 248);
                echo "</option>


                      ";
            }
            // line 252
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 259
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 261
        if (($context["shipping"] ?? null)) {
            // line 262
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 263
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 265
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 266
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 267
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 268
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 269
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 271
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 272
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 273
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 277
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 280
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 286
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 290
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 293
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 296
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 302
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    ";
        // line 307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 308
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 308) == ($context["length_class_id"] ?? null))) {
                // line 309
                echo "

                        <option value=\"";
                // line 311
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 311);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 311);
                echo "</option>


                      ";
            } else {
                // line 315
                echo "

                        <option value=\"";
                // line 317
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 317);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 317);
                echo "</option>


                      ";
            }
            // line 321
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 328
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 330
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>

\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-volume\">Объем</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"volume\" value=\"";
        // line 337
        echo ($context["volume"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-volume\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 341
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 347
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 347) == ($context["weight_class_id"] ?? null))) {
                // line 348
                echo "

                        <option value=\"";
                // line 350
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 350);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 350);
                echo "</option>


                      ";
            } else {
                // line 354
                echo "

                        <option value=\"";
                // line 356
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 356);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 356);
                echo "</option>


                      ";
            }
            // line 360
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 367
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 372
        if (($context["status"] ?? null)) {
            // line 373
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 375
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 376
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 380
            echo "

                      <option value=\"1\">";
            // line 382
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 383
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        }
        // line 387
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 393
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 395
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 401
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 403
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 407
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 409
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 410
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 411
            echo "                      <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 411);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 411);
            echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 412
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 412);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 418
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 420
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 421
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 422
            echo "                      <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 422);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 422);
            echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 423
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 423);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 429
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 431
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 432
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 433
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 433), ($context["product_store"] ?? null))) {
                // line 434
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 434);
                echo "\" checked=\"checked\"/>
                            ";
                // line 435
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 435);
                echo "
                          ";
            } else {
                // line 437
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 437);
                echo "\"/>
                            ";
                // line 438
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 438);
                echo "
                          ";
            }
            // line 439
            echo " </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 441
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 445
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 447
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 449
            echo "                      <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 449);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 449);
            echo "
                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 450
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 450);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-variant\"><span data-toggle=\"tooltip\" title=\"";
        // line 456
        echo ($context["help_variant"] ?? null);
        echo "\">";
        echo ($context["entry_variant"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"variant\" value=\"\" placeholder=\"";
        // line 458
        echo ($context["entry_variant"] ?? null);
        echo "\" id=\"input-variant\" class=\"form-control\"/>
                  <div id=\"product-variant\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 459
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_variants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_variant"]) {
            // line 460
            echo "                      <div id=\"product-variant";
            echo twig_get_attribute($this->env, $this->source, $context["product_variant"], "product_id", [], "any", false, false, false, 460);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_variant"], "name", [], "any", false, false, false, 460);
            echo "
                        <input type=\"hidden\" name=\"product_variant[]\" value=\"";
            // line 461
            echo twig_get_attribute($this->env, $this->source, $context["product_variant"], "product_id", [], "any", false, false, false, 461);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 463
        echo "</div>
                </div>
              </div>
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 467
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 469
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 471
            echo "                      <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 471);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 471);
            echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 472
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 472);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-attribute_group_id\">";
        // line 481
        echo ($context["entry_attribute_group"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<select name=\"attribute_group_id\" id=\"input-attribute_group_id\" class=\"form-control\" onchange=\"addAttributeByGroupID(\$(this).val());\">
\t\t\t\t<option value=\"\">";
        // line 484
        echo ($context["text_select"] ?? null);
        echo "</option>
\t\t\t\t";
        // line 485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
            // line 486
            echo "\t\t\t <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute_group_id", [], "any", false, false, false, 486);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 486);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "\t\t\t\t</select>
\t\t\t  </div>
\t\t\t</div>

              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 496
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 497
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 503
        $context["attribute_row"] = 0;
        // line 504
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 505
            echo "                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 506
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 506);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 506);
            echo "\"/></td>
                        <td class=\"text-left\">";
            // line 507
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 508
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 508);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 508);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 508);
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 508);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 508)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 508)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 508)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 508)] ?? null) : null), "text", [], "any", false, false, false, 508)) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 510
            echo "</td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 511
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 513
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 514
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 515
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 520
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 530
        $context["option_row"] = 0;
        // line 531
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 532
            echo "                      <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 532);
            echo "</a></li>
                      ";
            // line 533
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 534
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 536
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 541
        $context["option_row"] = 0;
        // line 542
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 543
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 544
            echo "                      <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                        <input type=\"hidden\" name=\"product_option[";
            // line 545
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 545);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 545);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 545);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 545);
            echo "\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 547
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[";
            // line 549
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                              ";
            // line 552
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 552)) {
                // line 553
                echo "

                                <option value=\"1\" selected=\"selected\">";
                // line 555
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\">";
                // line 556
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            } else {
                // line 560
                echo "

                                <option value=\"1\">";
                // line 562
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                // line 563
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            }
            // line 567
            echo "

                            </select>
                          </div>
                        </div>
                        ";
            // line 572
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 572) == "text")) {
                // line 573
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 574
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 576
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 576);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 580
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 580) == "textarea")) {
                // line 581
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 582
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[";
                // line 584
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 584);
                echo "</textarea>
                            </div>
                          </div>
                        ";
            }
            // line 588
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 588) == "file")) {
                // line 589
                echo "                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 590
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 592
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 592);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 596
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 596) == "date")) {
                // line 597
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 598
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[";
                // line 601
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 601);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 607
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 607) == "time")) {
                // line 608
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 609
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[";
                // line 612
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 612);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 618
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 618) == "datetime")) {
                // line 619
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 620
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[";
                // line 623
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 623);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 629
            echo "                        ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 629) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 629) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 629) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 629) == "image"))) {
                // line 630
                echo "                          <div class=\"table-responsive\">
                            <table id=\"option-value";
                // line 631
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t 
                              <thead>
                                <tr>
                                  <td class=\"text-left\">";
                // line 635
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 636
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                  <td class=\"text-left\">";
                // line 637
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 638
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 639
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 640
                echo ($context["entry_weight"] ?? null);
                echo "</td>
\t\t\t\t\t\t\t\t  ";
                // line 641
                if (($context["advancedoption_status"] ?? null)) {
                    // line 642
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((((($context["advancedoption_model"] ?? null) || ($context["advancedoption_sku"] ?? null)) || ($context["advancedoption_upc"] ?? null)) || ($context["advancedoption_ean"] ?? null)) || ($context["advancedoption_jan"] ?? null))) {
                        // line 643
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">Данные</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 645
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 646
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["advancedoption_status"] ?? null) && ($context["advancedoption_customer_group"] ?? null))) {
                    // line 647
                    echo "\t\t\t\t\t\t\t\t\t<td class=\"text-left\">Группа клиентов</td>
\t\t\t\t\t\t\t\t";
                }
                // line 649
                echo "\t\t\t\t\t\t\t\t";
                if (($context["advancedoption_status"] ?? null)) {
                    // line 650
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["advancedoption_default_status"] ?? null) || ($context["advancedoption_image"] ?? null))) {
                        // line 651
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                        if (($context["advancedoption_image"] ?? null)) {
                            echo " Изображение ";
                        }
                        echo "</td>
\t\t\t\t\t\t\t\t";
                    }
                    // line 652
                    echo " ";
                }
                // line 653
                echo "                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>

                                ";
                // line 658
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 658));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 659
                    echo "                                  <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 660
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control\">


                                        ";
                    // line 663
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["option_values"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 663)] ?? null) : null)) {
                        // line 664
                        echo "
                                          ";
                        // line 665
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["option_values"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 665)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 666
                            echo "
                                            ";
                            // line 667
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 667) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 667))) {
                                // line 668
                                echo "

                                              <option value=\"";
                                // line 670
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 670);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 670);
                                echo "</option>


                                            ";
                            } else {
                                // line 674
                                echo "

                                              <option value=\"";
                                // line 676
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 676);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 676);
                                echo "</option>


                                            ";
                            }
                            // line 680
                            echo "                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 681
                        echo "                                        ";
                    }
                    // line 682
                    echo "

                                      </select> <input type=\"hidden\" name=\"product_option[";
                    // line 684
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 684);
                    echo "\"/></td>
                                    <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 685
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 685);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 686
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                        ";
                    // line 689
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 689)) {
                        // line 690
                        echo "

                                          <option value=\"1\" selected=\"selected\">";
                        // line 692
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\">";
                        // line 693
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    } else {
                        // line 697
                        echo "

                                          <option value=\"1\">";
                        // line 699
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                        // line 700
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    }
                    // line 704
                    echo "

                                      </select></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 707
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control\">


                                        ";
                    // line 710
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 710) == "+")) {
                        // line 711
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 717
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 723
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 723) == "-")) {
                        // line 724
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 730
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 736
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 738
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 738);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 739
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control\">


                                        ";
                    // line 742
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 742) == "+")) {
                        // line 743
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 749
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 755
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 755) == "-")) {
                        // line 756
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 762
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 768
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 770
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 770);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 771
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control\">


                                        ";
                    // line 774
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 774) == "+")) {
                        // line 775
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 781
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 787
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 787) == "-")) {
                        // line 788
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 794
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 800
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 802
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 802);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control\"/></td>
\t\t\t\t\t\t\t\t\t  ";
                    // line 803
                    if (($context["advancedoption_status"] ?? null)) {
                        // line 804
                        echo "\t\t\t\t\t\t";
                        if (((((($context["advancedoption_model"] ?? null) || ($context["advancedoption_sku"] ?? null)) || ($context["advancedoption_upc"] ?? null)) || ($context["advancedoption_ean"] ?? null)) || ($context["advancedoption_jan"] ?? null))) {
                            // line 805
                            echo "\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 807
                            if (($context["advancedoption_model"] ?? null)) {
                                // line 808
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><label>Model</label> <br/><input type=\"text\" name=\"product_option[";
                                // line 809
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][model]\" value=\"";
                                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["product_option_value"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["model"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 812
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["advancedoption_sku"] ?? null)) {
                                // line 813
                                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><label>SKU</label> <br/><input type=\"text\" name=\"product_option[";
                                // line 814
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][sku]\" value=\"";
                                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["product_option_value"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["sku"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 817
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["advancedoption_upc"] ?? null)) {
                                // line 818
                                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><label>UPC</label> <br/><input type=\"text\" name=\"product_option[";
                                // line 819
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][upc]\" value=\"";
                                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["product_option_value"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["upc"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 822
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["advancedoption_ean"] ?? null)) {
                                // line 823
                                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><label>EAN</label> <br/><input type=\"text\" name=\"product_option[";
                                // line 824
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][ean]\" value=\"";
                                echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["product_option_value"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["ean"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 827
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["advancedoption_jan"] ?? null)) {
                                // line 828
                                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><label>JAN</label> <br/><input type=\"text\" name=\"product_option[";
                                // line 829
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][jan]\" value=\"";
                                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["product_option_value"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["jan"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 832
                            echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 835
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 836
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["advancedoption_status"] ?? null) && ($context["advancedoption_customer_group"] ?? null))) {
                        // line 837
                        echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 839
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                            // line 840
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_in_filter((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["customer_group"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["customer_group_id"] ?? null) : null), (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["product_option_value"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["customer_group_id"] ?? null) : null))) {
                                // line 841
                                echo "\t\t\t\t\t\t\t\t\t\t\t<label><input checked=\"checked\" type=\"checkbox\" name=\"product_option[";
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][customer_group_id][]\" value=\"";
                                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["customer_group"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["customer_group_id"] ?? null) : null);
                                echo "\"/> ";
                                echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["customer_group"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["name"] ?? null) : null);
                                echo "</label> <br/>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 843
                                echo "\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"product_option[";
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][customer_group_id][]\" value=\"";
                                echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["customer_group"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["customer_group_id"] ?? null) : null);
                                echo "\"/> ";
                                echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["customer_group"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["name"] ?? null) : null);
                                echo "</label> <br/>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 845
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 846
                        echo "\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 849
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["advancedoption_status"] ?? null)) {
                        // line 850
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((($context["advancedoption_default_status"] ?? null) || ($context["advancedoption_image"] ?? null))) {
                            // line 851
                            echo "\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t";
                            // line 852
                            if (($context["advancedoption_default_status"] ?? null)) {
                                // line 853
                                echo "\t\t\t\t\t\t\t\t\t\t<label><input ";
                                echo (((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["product_option_value"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["default_status"] ?? null) : null)) ? ("checked=checked") : (""));
                                echo " type=\"checkbox\" name=\"product_option[";
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][default_status]\" value=\"1\" /> Default Select </label>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 855
                            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                            // line 856
                            if (($context["advancedoption_image"] ?? null)) {
                                // line 857
                                echo "\t\t\t\t\t\t\t\t\t\t<div><a href=\"\" id=\"thumb-image-";
                                echo ($context["option_row"] ?? null);
                                echo ($context["option_value_row"] ?? null);
                                echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                                echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["product_option_value"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["thumb"] ?? null) : null);
                                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                                echo ($context["placeholder"] ?? null);
                                echo "\" /></a><input type=\"hidden\" name=\"product_option[";
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][image]\" value=\"";
                                echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["product_option_value"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["image"] ?? null) : null);
                                echo "\" id=\"input-image";
                                echo ($context["option_row"] ?? null);
                                echo ($context["option_value_row"] ?? null);
                                echo "\" /></div>
\t\t\t\t\t\t\t\t\t ";
                            }
                            // line 859
                            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 861
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 862
                    echo "                                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                  </tr>
                                  ";
                    // line 864
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 865
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 866
                echo "                              </tbody>

                              <tfoot>
                                <tr>
                                  <td colspan=\"6\"></td>
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 871
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values";
                // line 876
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                            ";
                // line 879
                if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["option_values"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 879)] ?? null) : null)) {
                    // line 880
                    echo "                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["option_values"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 880)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 881
                        echo "

                                <option value=\"";
                        // line 883
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 883);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 883);
                        echo "</option>


                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 887
                    echo "                            ";
                }
                // line 888
                echo "

                          </select>
                        ";
            }
            // line 891
            echo " </div>
                      ";
            // line 892
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 893
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 902
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 903
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 909
        $context["recurring_row"] = 0;
        // line 910
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 911
            echo "                      <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 912
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">


                            ";
            // line 915
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 916
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 916) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 916))) {
                    // line 917
                    echo "

                                <option value=\"";
                    // line 919
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 919);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 919);
                    echo "</option>


                              ";
                } else {
                    // line 923
                    echo "

                                <option value=\"";
                    // line 925
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 925);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 925);
                    echo "</option>


                              ";
                }
                // line 929
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 930
            echo "

                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 933
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 936
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 937
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 937) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 937))) {
                    // line 938
                    echo "

                                <option value=\"";
                    // line 940
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 940);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 940);
                    echo "</option>


                              ";
                } else {
                    // line 944
                    echo "

                                <option value=\"";
                    // line 946
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 946);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 946);
                    echo "</option>


                              ";
                }
                // line 950
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 951
            echo "

                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 954
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 956
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 957
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 958
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 963
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 974
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 975
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 976
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 977
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 978
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 979
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 985
        $context["discount_row"] = 0;
        // line 986
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 987
            echo "                      <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 988
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 989
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 990
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 990) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 990))) {
                    // line 991
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 991);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 991);
                    echo "</option>
                              ";
                } else {
                    // line 993
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 993);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 993);
                    echo "</option>
                              ";
                }
                // line 995
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 996
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 997
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 997);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 998
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 998);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 999
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 999);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1002
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1002);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1008
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1008);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 1012
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1014
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1015
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1016
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 1021
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1032
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1033
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1034
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1035
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1036
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1042
        $context["special_row"] = 0;
        // line 1043
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1044
            echo "                      <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 1045
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 1048
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1049
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1049) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1049))) {
                    // line 1050
                    echo "

                                <option value=\"";
                    // line 1052
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1052);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1052);
                    echo "</option>


                              ";
                } else {
                    // line 1056
                    echo "

                                <option value=\"";
                    // line 1058
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1058);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1058);
                    echo "</option>


                              ";
                }
                // line 1062
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1063
            echo "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1066
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1066);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1067
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1067);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1070
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1070);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1076
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1076);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1080
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1082
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1083
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1084
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1089
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1100
        echo ($context["entry_image"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1105
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1114
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1115
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1121
        $context["image_row"] = 0;
        // line 1122
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1123
            echo "                      <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1124
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1124);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1124);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1125
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1125);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1126
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1128
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1129
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1130
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1135
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1143
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1145
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1152
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1153
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1159
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1160
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1160);
            echo "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1161
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1161);
            echo "][points]\" value=\"";
            echo (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["product_reward"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1161)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["product_reward"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1161)] ?? null) : null), "points", [], "any", false, false, false, 1161)) : (""));
            echo "\" class=\"form-control\"/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1164
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1170
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1175
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1176
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1181
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1182
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1182);
            echo "</td>
                        <td class=\"text-left\">";
            // line 1183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1184
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1184);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1184);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1184);
                echo "\"/></span> <input type=\"text\" name=\"product_seo_url[";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1184);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1184);
                echo "]\" value=\"";
                if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["product_seo_url"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1184)] ?? null) : null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1184)] ?? null) : null)) {
                    echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["product_seo_url"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1184)] ?? null) : null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1184)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 1186
                if ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["error_keyword"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1186)] ?? null) : null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1186)] ?? null) : null)) {
                    // line 1187
                    echo "                              <div class=\"text-danger\">";
                    echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["error_keyword"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1187)] ?? null) : null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1187)] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 1189
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1192
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1202
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1203
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1208
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1209
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1209);
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1210
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1210);
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>


                            ";
            // line 1214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1215
                echo "                              ";
                if (((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["product_layout"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1215)] ?? null) : null) && ((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["product_layout"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1215)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1215)))) {
                    // line 1216
                    echo "

                                <option value=\"";
                    // line 1218
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1218);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1218);
                    echo "</option>


                              ";
                } else {
                    // line 1222
                    echo "

                                <option value=\"";
                    // line 1224
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1224);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1224);
                    echo "</option>


                              ";
                }
                // line 1228
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1229
            echo "

                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1234
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1257
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 1262
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1284
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1313
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1342
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Варианты товаров
  \$('input[name=\\'variant\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1371
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'variant\\']').val('');

\t\t  \$('#product-variant' + item['value']).remove();

\t\t  \$('#product-variant').append('<div id=\"product-variant' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_variant[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });
  
  \$('#product-variant').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1401
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });
 
  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var attribute_row = ";
        // line 1427
        echo ($context["attribute_row"] ?? null);
        echo ";
\t
\tfunction addAttributeByGroupID(attribute_group_id) {
\t\t\$.ajax({
\t\turl: 'index.php?route=catalog/product/getattributesbygroup&user_token=";
        // line 1431
        echo ($context["user_token"] ?? null);
        echo "&attribute_group_id=' +  encodeURIComponent(attribute_group_id),
\t\tdataType: 'json',
\t\tbeforeSend: function(){
\t\t\t\$('#input-attribute_group_id').after('<i class=\"fa fa-spinner fa-spin\" id=\"attribute-group-loading\"></i>');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif(json.length > 0){\t
\t\t\t\tfor(var i=0;i<json.length;i++){
\t\t\t\thtml  = '<tr id=\"attribute-row' + attribute_row + '\">';
\t\t\t\thtml += '<td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"'+json[i].name+'\" placeholder=\"";
        // line 1440
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"'+json[i].attribute_id+'\" /></td>';
\t\t\t\thtml += '  <td class=\"text-left\">';
\t\t\t   ";
        // line 1442
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1443
            echo "\t\t\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1443);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1443);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1443);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1443);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1445
        echo "\t\t\t\thtml += '  </td>';
\t\t\t\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1446
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\thtml += '</tr>';
\t\t\t\t\$('#attribute tbody').append(html);
\t\t\t\tattributeautocomplete(attribute_row);
\t\t\t\tattribute_row++;
\t\t\t\t}
\t\t\t}
\t\t\t\$('#attribute-group-loading').remove();
\t\t}
\t\t});
\t\t}

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1460
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 1462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1463
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1463);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1463);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1463);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1463);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1465
        echo "\t  html += '  </td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1466
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);

\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1480
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 1505
        echo ($context["option_row"] ?? null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1510
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1533
        echo ($context["entry_required"] ?? null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 1535
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 1536
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1542
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1543
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1549
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1550
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1556
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1557
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1563
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1564
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1570
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1571
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1577
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1578
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1587
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1588
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1589
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1590
        echo ($context["entry_price"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1591
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1592
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
\t\t\t  ";
        // line 1593
        if (($context["advancedoption_status"] ?? null)) {
            // line 1594
            echo "\t\t\t\t";
            if (((((($context["advancedoption_model"] ?? null) || ($context["advancedoption_sku"] ?? null)) || ($context["advancedoption_upc"] ?? null)) || ($context["advancedoption_ean"] ?? null)) || ($context["advancedoption_jan"] ?? null))) {
                // line 1595
                echo "\t\t\thtml += '        <td class=\"text-right\"></td>';
\t\t\t";
            }
            // line 1597
            echo "\t\t\t";
        }
        // line 1598
        echo "\t\t\t";
        if ((($context["advancedoption_status"] ?? null) && ($context["advancedoption_customer_group"] ?? null))) {
            // line 1599
            echo "\t\t\thtml += '        <td class=\"text-right\">Restrict Customer Group</td>';
\t\t\t";
        }
        // line 1601
        echo "\t\t\t";
        if (($context["advancedoption_status"] ?? null)) {
            // line 1602
            echo "\t\t\t";
            if ((($context["advancedoption_default_status"] ?? null) || ($context["advancedoption_image"] ?? null))) {
                // line 1603
                echo "\t\t\thtml += '        <td class=\"text-right\">";
                if (($context["advancedoption_image"] ?? null)) {
                    echo " Image ";
                }
                echo "</td>';
\t\t\t";
            }
            // line 1604
            echo " ";
        }
        // line 1605
        echo "\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"6\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1613
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 1641
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 1646
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 1651
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 1661
        echo ($context["option_value_row"] ?? null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1668
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 1670
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 1671
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1677
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1682
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1687
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  ";
        // line 1688
        if (($context["advancedoption_status"] ?? null)) {
            // line 1689
            echo "\t\t";
            if (((((($context["advancedoption_model"] ?? null) || ($context["advancedoption_sku"] ?? null)) || ($context["advancedoption_upc"] ?? null)) || ($context["advancedoption_ean"] ?? null)) || ($context["advancedoption_jan"] ?? null))) {
                // line 1690
                echo "\t\thtml += '<td class=\"text-left\">';
\t\thtml += '<table class=\"table table-striped table-bordered table-hover\" >';

\t\t";
                // line 1693
                if (($context["advancedoption_model"] ?? null)) {
                    // line 1694
                    echo "\t\thtml += '<tr>';
\t\thtml += '<td><label>Model</label> <br/><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][model]\" value=\"\" class=\"form-control\" /></td>';
\t\thtml += '</tr>';
\t\t";
                }
                // line 1698
                echo "
\t\t";
                // line 1699
                if (($context["advancedoption_sku"] ?? null)) {
                    // line 1700
                    echo "\t\thtml += '<tr>';
\t\thtml += '<td><label>SKU</label> <br/><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][sku]\" value=\"\" class=\"form-control\" /></td>';
\t\thtml += '</tr>';
\t\t";
                }
                // line 1704
                echo "\t\t";
                if (($context["advancedoption_upc"] ?? null)) {
                    // line 1705
                    echo "\t\thtml += '<tr>';
\t\thtml += '<td><label>UPC</label> <br/><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][upc]\" value=\"\" class=\"form-control\" /></td>';
\t\thtml += '</tr>';
\t\t";
                }
                // line 1709
                echo "\t\t";
                if (($context["advancedoption_ean"] ?? null)) {
                    // line 1710
                    echo "\t\thtml += '<tr>';
\t\thtml += '<td><label>EAN</label> <br/><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][ean]\" value=\"\" class=\"form-control\" /></td>';
\t\thtml += '</tr>';
\t\t";
                }
                // line 1714
                echo "\t\t";
                if (($context["advancedoption_jan"] ?? null)) {
                    // line 1715
                    echo "\t\thtml += '<tr>';
\t\thtml += '<td><label>JAN</label> <br/><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][jan]\" value=\"\" class=\"form-control\" /></td>';
\t\thtml += '</tr>';
\t\t";
                }
                // line 1719
                echo "\t\thtml += '</table>';
\t\thtml += '</td>';
\t\t";
            }
            // line 1722
            echo "\t\t";
        }
        // line 1723
        echo "\t\t";
        if ((($context["advancedoption_status"] ?? null) && ($context["advancedoption_customer_group"] ?? null))) {
            // line 1724
            echo "\t\thtml += '<td>';
\t\thtml += '<div class=\"well well-sm\">';
\t\t";
            // line 1726
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1727
                echo "\t\thtml += '<label><input type=\"checkbox\" name=\"product_option['+ option_row +'][product_option_value]['+ option_value_row +'][customer_group_id][]\" value=\"";
                echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["customer_group"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["customer_group_id"] ?? null) : null);
                echo "\"/> ";
                echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["customer_group"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["name"] ?? null) : null);
                echo "</label> <br/>';
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1729
            echo "\t\thtml +='</div>';
\t\thtml += '</td>';
\t\t";
        }
        // line 1732
        echo "\t\t";
        if (($context["advancedoption_status"] ?? null)) {
            // line 1733
            echo "\t\t";
            if ((($context["advancedoption_default_status"] ?? null) || ($context["advancedoption_image"] ?? null))) {
                // line 1734
                echo "
\t\thtml += '<td class=\"text-center\">';

\t\t";
                // line 1737
                if (($context["advancedoption_default_status"] ?? null)) {
                    // line 1738
                    echo "\t\thtml +='<label><input type=\"checkbox\" name=\"product_option['+ option_row +'][product_option_value]['+ option_value_row +'][default_status]\" value=\"1\" /> Default Select</label> <br/>';
\t\t";
                }
                // line 1740
                echo "\t\t";
                if (($context["advancedoption_image"] ?? null)) {
                    // line 1741
                    echo "\t\thtml +='<div><a href=\"\" id=\"thumb-image' + option_row + option_value_row +'\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][image]\"  id=\"input-image' + option_row +option_value_row+ '\" value=\"\" /></div>';
\t\t";
                }
                // line 1743
                echo "\t\thtml +='</td>';
\t\t";
            }
            // line 1745
            echo "\t\t";
        }
        // line 1746
        echo "\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' > tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 1757
        echo ($context["discount_row"] ?? null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1762
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1763
            echo "\t  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1763);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1763), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1765
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1766
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1767
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1768
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1769
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1770
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1771
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row = ";
        // line 1785
        echo ($context["special_row"] ?? null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1790
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1791
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1791);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1791), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1793
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1794
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1795
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1796
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1797
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1798
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 1804
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row = ";
        // line 1813
        echo ($context["image_row"] ?? null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1817
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1818
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1819
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 1829
        echo ($context["recurring_row"] ?? null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 1835
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1836
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1836);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1836);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1838
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 1842
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1843
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1843);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1843);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1845
        echo "\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1848
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 1860
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 1865
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 1870
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</script>
<!-- OCFilter start -->
<script type=\"text/javascript\"><!--
\tocfilter.php = {
\t\ttext_select: '";
        // line 1883
        echo ($context["text_select"] ?? null);
        echo "',
\t\tocfilter_select_category: '";
        // line 1884
        echo ($context["ocfilter_select_category"] ?? null);
        echo "',
\t\tentry_values: '";
        // line 1885
        echo ($context["entry_values"] ?? null);
        echo "',
\t\ttab_ocfilter: '";
        // line 1886
        echo ($context["tab_ocfilter"] ?? null);
        echo "'
\t};

\tocfilter.php.languages = [];

\t";
        // line 1891
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1892
            echo "\tocfilter.php.languages.push({
\t\t'language_id': ";
            // line 1893
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1893);
            echo ",
\t\t'name': '";
            // line 1894
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1894);
            echo "',
\t\t'image': '";
            // line 1895
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1895);
            echo "'
\t});
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1898
        echo "//--></script>
<!-- OCFilter end -->
</div>
";
        // line 1901
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4285 => 1901,  4280 => 1898,  4271 => 1895,  4267 => 1894,  4263 => 1893,  4260 => 1892,  4256 => 1891,  4248 => 1886,  4244 => 1885,  4240 => 1884,  4236 => 1883,  4220 => 1870,  4212 => 1865,  4204 => 1860,  4189 => 1848,  4184 => 1845,  4173 => 1843,  4169 => 1842,  4163 => 1838,  4152 => 1836,  4148 => 1835,  4139 => 1829,  4126 => 1819,  4122 => 1818,  4116 => 1817,  4109 => 1813,  4097 => 1804,  4088 => 1798,  4084 => 1797,  4080 => 1796,  4076 => 1795,  4072 => 1794,  4069 => 1793,  4058 => 1791,  4054 => 1790,  4046 => 1785,  4029 => 1771,  4025 => 1770,  4021 => 1769,  4017 => 1768,  4013 => 1767,  4009 => 1766,  4006 => 1765,  3995 => 1763,  3991 => 1762,  3983 => 1757,  3968 => 1746,  3965 => 1745,  3961 => 1743,  3953 => 1741,  3950 => 1740,  3946 => 1738,  3944 => 1737,  3939 => 1734,  3936 => 1733,  3933 => 1732,  3928 => 1729,  3917 => 1727,  3913 => 1726,  3909 => 1724,  3906 => 1723,  3903 => 1722,  3898 => 1719,  3892 => 1715,  3889 => 1714,  3883 => 1710,  3880 => 1709,  3874 => 1705,  3871 => 1704,  3865 => 1700,  3863 => 1699,  3860 => 1698,  3854 => 1694,  3852 => 1693,  3847 => 1690,  3844 => 1689,  3842 => 1688,  3838 => 1687,  3830 => 1682,  3822 => 1677,  3813 => 1671,  3809 => 1670,  3804 => 1668,  3794 => 1661,  3781 => 1651,  3773 => 1646,  3765 => 1641,  3734 => 1613,  3724 => 1605,  3721 => 1604,  3713 => 1603,  3710 => 1602,  3707 => 1601,  3703 => 1599,  3700 => 1598,  3697 => 1597,  3693 => 1595,  3690 => 1594,  3688 => 1593,  3684 => 1592,  3680 => 1591,  3676 => 1590,  3672 => 1589,  3668 => 1588,  3664 => 1587,  3652 => 1578,  3648 => 1577,  3639 => 1571,  3635 => 1570,  3626 => 1564,  3622 => 1563,  3613 => 1557,  3609 => 1556,  3600 => 1550,  3596 => 1549,  3587 => 1543,  3583 => 1542,  3574 => 1536,  3570 => 1535,  3565 => 1533,  3539 => 1510,  3531 => 1505,  3503 => 1480,  3486 => 1466,  3483 => 1465,  3466 => 1463,  3462 => 1462,  3457 => 1460,  3440 => 1446,  3437 => 1445,  3420 => 1443,  3416 => 1442,  3411 => 1440,  3399 => 1431,  3392 => 1427,  3363 => 1401,  3330 => 1371,  3298 => 1342,  3266 => 1313,  3234 => 1284,  3209 => 1262,  3201 => 1257,  3176 => 1234,  3166 => 1229,  3160 => 1228,  3151 => 1224,  3147 => 1222,  3138 => 1218,  3134 => 1216,  3131 => 1215,  3127 => 1214,  3120 => 1210,  3116 => 1209,  3113 => 1208,  3109 => 1207,  3102 => 1203,  3098 => 1202,  3086 => 1192,  3073 => 1189,  3067 => 1187,  3065 => 1186,  3045 => 1184,  3041 => 1183,  3037 => 1182,  3034 => 1181,  3030 => 1180,  3023 => 1176,  3019 => 1175,  3011 => 1170,  3003 => 1164,  2992 => 1161,  2988 => 1160,  2985 => 1159,  2981 => 1158,  2973 => 1153,  2969 => 1152,  2957 => 1145,  2950 => 1143,  2939 => 1135,  2932 => 1130,  2926 => 1129,  2924 => 1128,  2917 => 1126,  2909 => 1125,  2895 => 1124,  2890 => 1123,  2885 => 1122,  2883 => 1121,  2874 => 1115,  2870 => 1114,  2854 => 1105,  2846 => 1100,  2832 => 1089,  2825 => 1084,  2819 => 1083,  2817 => 1082,  2810 => 1080,  2799 => 1076,  2786 => 1070,  2776 => 1067,  2768 => 1066,  2763 => 1063,  2757 => 1062,  2748 => 1058,  2744 => 1056,  2735 => 1052,  2731 => 1050,  2728 => 1049,  2724 => 1048,  2718 => 1045,  2713 => 1044,  2708 => 1043,  2706 => 1042,  2697 => 1036,  2693 => 1035,  2689 => 1034,  2685 => 1033,  2681 => 1032,  2667 => 1021,  2660 => 1016,  2654 => 1015,  2652 => 1014,  2645 => 1012,  2634 => 1008,  2621 => 1002,  2611 => 999,  2603 => 998,  2595 => 997,  2592 => 996,  2586 => 995,  2578 => 993,  2570 => 991,  2567 => 990,  2563 => 989,  2559 => 988,  2554 => 987,  2549 => 986,  2547 => 985,  2538 => 979,  2534 => 978,  2530 => 977,  2526 => 976,  2522 => 975,  2518 => 974,  2504 => 963,  2497 => 958,  2491 => 957,  2489 => 956,  2482 => 954,  2477 => 951,  2471 => 950,  2462 => 946,  2458 => 944,  2449 => 940,  2445 => 938,  2442 => 937,  2438 => 936,  2432 => 933,  2427 => 930,  2421 => 929,  2412 => 925,  2408 => 923,  2399 => 919,  2395 => 917,  2392 => 916,  2388 => 915,  2382 => 912,  2377 => 911,  2372 => 910,  2370 => 909,  2361 => 903,  2357 => 902,  2341 => 893,  2339 => 892,  2336 => 891,  2330 => 888,  2327 => 887,  2315 => 883,  2311 => 881,  2306 => 880,  2304 => 879,  2298 => 876,  2288 => 871,  2281 => 866,  2275 => 865,  2273 => 864,  2265 => 862,  2262 => 861,  2258 => 859,  2238 => 857,  2236 => 856,  2233 => 855,  2223 => 853,  2221 => 852,  2218 => 851,  2215 => 850,  2212 => 849,  2207 => 846,  2201 => 845,  2189 => 843,  2177 => 841,  2174 => 840,  2170 => 839,  2166 => 837,  2163 => 836,  2160 => 835,  2155 => 832,  2145 => 829,  2142 => 828,  2139 => 827,  2129 => 824,  2126 => 823,  2123 => 822,  2113 => 819,  2110 => 818,  2107 => 817,  2097 => 814,  2094 => 813,  2091 => 812,  2081 => 809,  2078 => 808,  2076 => 807,  2072 => 805,  2069 => 804,  2067 => 803,  2057 => 802,  2053 => 800,  2045 => 794,  2037 => 788,  2034 => 787,  2026 => 781,  2018 => 775,  2016 => 774,  2008 => 771,  1998 => 770,  1994 => 768,  1986 => 762,  1978 => 756,  1975 => 755,  1967 => 749,  1959 => 743,  1957 => 742,  1949 => 739,  1939 => 738,  1935 => 736,  1927 => 730,  1919 => 724,  1916 => 723,  1908 => 717,  1900 => 711,  1898 => 710,  1890 => 707,  1885 => 704,  1878 => 700,  1874 => 699,  1870 => 697,  1863 => 693,  1859 => 692,  1855 => 690,  1853 => 689,  1845 => 686,  1835 => 685,  1827 => 684,  1823 => 682,  1820 => 681,  1814 => 680,  1805 => 676,  1801 => 674,  1792 => 670,  1788 => 668,  1786 => 667,  1783 => 666,  1779 => 665,  1776 => 664,  1774 => 663,  1766 => 660,  1761 => 659,  1757 => 658,  1750 => 653,  1747 => 652,  1739 => 651,  1736 => 650,  1733 => 649,  1729 => 647,  1726 => 646,  1723 => 645,  1719 => 643,  1716 => 642,  1714 => 641,  1710 => 640,  1706 => 639,  1702 => 638,  1698 => 637,  1694 => 636,  1690 => 635,  1683 => 631,  1680 => 630,  1677 => 629,  1662 => 623,  1654 => 620,  1651 => 619,  1648 => 618,  1633 => 612,  1625 => 609,  1622 => 608,  1619 => 607,  1604 => 601,  1596 => 598,  1593 => 597,  1590 => 596,  1577 => 592,  1570 => 590,  1567 => 589,  1564 => 588,  1551 => 584,  1544 => 582,  1541 => 581,  1538 => 580,  1525 => 576,  1518 => 574,  1515 => 573,  1513 => 572,  1506 => 567,  1499 => 563,  1495 => 562,  1491 => 560,  1484 => 556,  1480 => 555,  1476 => 553,  1474 => 552,  1466 => 549,  1459 => 547,  1440 => 545,  1435 => 544,  1430 => 543,  1427 => 542,  1425 => 541,  1417 => 536,  1414 => 535,  1408 => 534,  1406 => 533,  1395 => 532,  1390 => 531,  1388 => 530,  1375 => 520,  1368 => 515,  1362 => 514,  1360 => 513,  1353 => 511,  1350 => 510,  1328 => 508,  1324 => 507,  1312 => 506,  1307 => 505,  1302 => 504,  1300 => 503,  1291 => 497,  1287 => 496,  1277 => 488,  1266 => 486,  1262 => 485,  1258 => 484,  1252 => 481,  1243 => 474,  1234 => 472,  1227 => 471,  1223 => 470,  1219 => 469,  1212 => 467,  1206 => 463,  1197 => 461,  1190 => 460,  1186 => 459,  1182 => 458,  1175 => 456,  1169 => 452,  1160 => 450,  1153 => 449,  1149 => 448,  1145 => 447,  1138 => 445,  1132 => 441,  1124 => 439,  1119 => 438,  1114 => 437,  1109 => 435,  1104 => 434,  1102 => 433,  1099 => 432,  1095 => 431,  1090 => 429,  1084 => 425,  1075 => 423,  1068 => 422,  1064 => 421,  1060 => 420,  1053 => 418,  1047 => 414,  1038 => 412,  1031 => 411,  1027 => 410,  1023 => 409,  1016 => 407,  1005 => 403,  998 => 401,  987 => 395,  982 => 393,  974 => 387,  967 => 383,  963 => 382,  959 => 380,  952 => 376,  948 => 375,  944 => 373,  942 => 372,  934 => 367,  926 => 361,  920 => 360,  911 => 356,  907 => 354,  898 => 350,  894 => 348,  891 => 347,  887 => 346,  879 => 341,  870 => 337,  858 => 330,  853 => 328,  845 => 322,  839 => 321,  830 => 317,  826 => 315,  817 => 311,  813 => 309,  810 => 308,  806 => 307,  798 => 302,  787 => 296,  779 => 293,  771 => 290,  764 => 286,  753 => 280,  747 => 277,  741 => 273,  736 => 272,  733 => 271,  728 => 269,  725 => 268,  722 => 267,  717 => 266,  714 => 265,  709 => 263,  706 => 262,  704 => 261,  699 => 259,  691 => 253,  685 => 252,  676 => 248,  672 => 246,  663 => 242,  659 => 240,  656 => 239,  652 => 238,  642 => 233,  634 => 227,  627 => 223,  623 => 222,  619 => 220,  612 => 216,  608 => 215,  604 => 213,  602 => 212,  594 => 207,  585 => 203,  578 => 201,  569 => 197,  564 => 195,  556 => 189,  550 => 188,  541 => 184,  537 => 182,  528 => 178,  524 => 176,  521 => 175,  517 => 174,  511 => 171,  505 => 168,  496 => 164,  491 => 162,  482 => 158,  477 => 156,  464 => 148,  457 => 146,  448 => 142,  441 => 140,  432 => 136,  425 => 134,  416 => 130,  409 => 128,  400 => 124,  392 => 121,  379 => 110,  373 => 109,  371 => 108,  364 => 106,  358 => 103,  352 => 99,  335 => 95,  326 => 93,  313 => 89,  306 => 87,  293 => 83,  286 => 81,  281 => 78,  275 => 77,  273 => 76,  263 => 75,  256 => 73,  246 => 68,  228 => 61,  221 => 59,  216 => 56,  210 => 55,  208 => 54,  196 => 53,  189 => 51,  183 => 49,  179 => 48,  176 => 47,  159 => 45,  155 => 44,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  127 => 34,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
