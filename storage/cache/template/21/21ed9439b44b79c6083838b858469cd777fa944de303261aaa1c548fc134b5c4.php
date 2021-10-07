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
class __TwigTemplate_8b80629e6e33bfbe927c248248dfcda2fb12c00efb6b64accb35b26fdf6f7d66 extends \Twig\Template
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
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 334
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 340
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 340) == ($context["weight_class_id"] ?? null))) {
                // line 341
                echo "

                        <option value=\"";
                // line 343
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 343);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 343);
                echo "</option>


                      ";
            } else {
                // line 347
                echo "

                        <option value=\"";
                // line 349
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 349);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 349);
                echo "</option>


                      ";
            }
            // line 353
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 360
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 365
        if (($context["status"] ?? null)) {
            // line 366
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 368
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 369
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 373
            echo "

                      <option value=\"1\">";
            // line 375
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 376
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        }
        // line 380
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 386
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 388
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
        // line 394
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 396
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
        // line 400
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 402
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 403
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 404
            echo "                      <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 404);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 404);
            echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 405
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 405);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 411
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 413
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 414
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 415
            echo "                      <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 415);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 415);
            echo "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 416
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 416);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 422
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 425
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 426
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 426), ($context["product_store"] ?? null))) {
                // line 427
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 427);
                echo "\" checked=\"checked\"/>
                            ";
                // line 428
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 428);
                echo "
                          ";
            } else {
                // line 430
                echo "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 430);
                echo "\"/>
                            ";
                // line 431
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 431);
                echo "
                          ";
            }
            // line 432
            echo " </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 438
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 440
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 442
            echo "                      <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 442);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 442);
            echo "
                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 443
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 443);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 445
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-variant\"><span data-toggle=\"tooltip\" title=\"";
        // line 449
        echo ($context["help_variant"] ?? null);
        echo "\">";
        echo ($context["entry_variant"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"variant\" value=\"\" placeholder=\"";
        // line 451
        echo ($context["entry_variant"] ?? null);
        echo "\" id=\"input-variant\" class=\"form-control\"/>
                  <div id=\"product-variant\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 452
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_variants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_variant"]) {
            // line 453
            echo "                      <div id=\"product-variant";
            echo twig_get_attribute($this->env, $this->source, $context["product_variant"], "product_id", [], "any", false, false, false, 453);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_variant"], "name", [], "any", false, false, false, 453);
            echo "
                        <input type=\"hidden\" name=\"product_variant[]\" value=\"";
            // line 454
            echo twig_get_attribute($this->env, $this->source, $context["product_variant"], "product_id", [], "any", false, false, false, 454);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 456
        echo "</div>
                </div>
              </div>
\t\t\t  <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 460
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 462
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 463
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 464
            echo "                      <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 464);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 464);
            echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 465
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 465);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 467
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
\t\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-attribute_group_id\">";
        // line 474
        echo ($context["entry_attribute_group"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<select name=\"attribute_group_id\" id=\"input-attribute_group_id\" class=\"form-control\" onchange=\"addAttributeByGroupID(\$(this).val());\">
\t\t\t\t<option value=\"\">";
        // line 477
        echo ($context["text_select"] ?? null);
        echo "</option>
\t\t\t\t";
        // line 478
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
            // line 479
            echo "\t\t\t <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute_group_id", [], "any", false, false, false, 479);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 479);
            echo "</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 481
        echo "\t\t\t\t</select>
\t\t\t  </div>
\t\t\t</div>

              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 489
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 490
        echo ($context["entry_text"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 496
        $context["attribute_row"] = 0;
        // line 497
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 498
            echo "                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 499
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 499);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 499);
            echo "\"/></td>
                        <td class=\"text-left\">";
            // line 500
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 501
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 501);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 501);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 501);
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 501);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 501)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 501)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 501)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 501)] ?? null) : null), "text", [], "any", false, false, false, 501)) : (""));
                echo "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 503
            echo "</td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 504
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 506
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 507
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 513
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
        // line 523
        $context["option_row"] = 0;
        // line 524
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 525
            echo "                      <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 525);
            echo "</a></li>
                      ";
            // line 526
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 527
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 528
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 529
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 534
        $context["option_row"] = 0;
        // line 535
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 536
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 537
            echo "                      <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                        <input type=\"hidden\" name=\"product_option[";
            // line 538
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 538);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 538);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 538);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 538);
            echo "\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 540
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[";
            // line 542
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                              ";
            // line 545
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 545)) {
                // line 546
                echo "

                                <option value=\"1\" selected=\"selected\">";
                // line 548
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\">";
                // line 549
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            } else {
                // line 553
                echo "

                                <option value=\"1\">";
                // line 555
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                // line 556
                echo ($context["text_no"] ?? null);
                echo "</option>


                              ";
            }
            // line 560
            echo "

                            </select>
                          </div>
                        </div>
                        ";
            // line 565
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 565) == "text")) {
                // line 566
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 567
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 569
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 569);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 573
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 573) == "textarea")) {
                // line 574
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 575
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[";
                // line 577
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 577);
                echo "</textarea>
                            </div>
                          </div>
                        ";
            }
            // line 581
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 581) == "file")) {
                // line 582
                echo "                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 583
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 585
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 585);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 589
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 589) == "date")) {
                // line 590
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 591
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[";
                // line 594
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 594);
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
            // line 600
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 600) == "time")) {
                // line 601
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 602
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[";
                // line 605
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 605);
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
            // line 611
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 611) == "datetime")) {
                // line 612
                echo "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 613
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[";
                // line 616
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 616);
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
            // line 622
            echo "                        ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 622) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 622) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 622) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 622) == "image"))) {
                // line 623
                echo "                          <div class=\"table-responsive\">
                            <table id=\"option-value";
                // line 624
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t 
                              <thead>
                                <tr>
                                  <td class=\"text-left\">";
                // line 628
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 629
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                  <td class=\"text-left\">";
                // line 630
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 631
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 632
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                  <td class=\"text-right\">";
                // line 633
                echo ($context["entry_weight"] ?? null);
                echo "</td>
\t\t\t\t\t\t\t\t  ";
                // line 634
                if (($context["advancedoption_status"] ?? null)) {
                    // line 635
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((((($context["advancedoption_model"] ?? null) || ($context["advancedoption_sku"] ?? null)) || ($context["advancedoption_upc"] ?? null)) || ($context["advancedoption_ean"] ?? null)) || ($context["advancedoption_jan"] ?? null))) {
                        // line 636
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">Данные</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 638
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 639
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["advancedoption_status"] ?? null) && ($context["advancedoption_customer_group"] ?? null))) {
                    // line 640
                    echo "\t\t\t\t\t\t\t\t\t<td class=\"text-left\">Группа клиентов</td>
\t\t\t\t\t\t\t\t";
                }
                // line 642
                echo "\t\t\t\t\t\t\t\t";
                if (($context["advancedoption_status"] ?? null)) {
                    // line 643
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["advancedoption_default_status"] ?? null) || ($context["advancedoption_image"] ?? null))) {
                        // line 644
                        echo "\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                        if (($context["advancedoption_image"] ?? null)) {
                            echo " Изображение ";
                        }
                        echo "</td>
\t\t\t\t\t\t\t\t";
                    }
                    // line 645
                    echo " ";
                }
                // line 646
                echo "                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>

                                ";
                // line 651
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 651));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 652
                    echo "                                  <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 653
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control\">


                                        ";
                    // line 656
                    if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["option_values"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 656)] ?? null) : null)) {
                        // line 657
                        echo "
                                          ";
                        // line 658
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["option_values"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 658)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 659
                            echo "
                                            ";
                            // line 660
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 660) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 660))) {
                                // line 661
                                echo "

                                              <option value=\"";
                                // line 663
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 663);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 663);
                                echo "</option>


                                            ";
                            } else {
                                // line 667
                                echo "

                                              <option value=\"";
                                // line 669
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 669);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 669);
                                echo "</option>


                                            ";
                            }
                            // line 673
                            echo "                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 674
                        echo "                                        ";
                    }
                    // line 675
                    echo "

                                      </select> <input type=\"hidden\" name=\"product_option[";
                    // line 677
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 677);
                    echo "\"/></td>
                                    <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 678
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 678);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 679
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                        ";
                    // line 682
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 682)) {
                        // line 683
                        echo "

                                          <option value=\"1\" selected=\"selected\">";
                        // line 685
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\">";
                        // line 686
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    } else {
                        // line 690
                        echo "

                                          <option value=\"1\">";
                        // line 692
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                        // line 693
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                        ";
                    }
                    // line 697
                    echo "

                                      </select></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 700
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control\">


                                        ";
                    // line 703
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 703) == "+")) {
                        // line 704
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 710
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 716
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 716) == "-")) {
                        // line 717
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 723
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 729
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 731
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 731);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 732
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control\">


                                        ";
                    // line 735
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 735) == "+")) {
                        // line 736
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 742
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 748
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 748) == "-")) {
                        // line 749
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 755
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 761
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 763
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 763);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 764
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control\">


                                        ";
                    // line 767
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 767) == "+")) {
                        // line 768
                        echo "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 774
                        echo "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 780
                    echo "                                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 780) == "-")) {
                        // line 781
                        echo "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 787
                        echo "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 793
                    echo "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 795
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 795);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control\"/></td>
\t\t\t\t\t\t\t\t\t  ";
                    // line 796
                    if (($context["advancedoption_status"] ?? null)) {
                        // line 797
                        echo "\t\t\t\t\t\t";
                        if (((((($context["advancedoption_model"] ?? null) || ($context["advancedoption_sku"] ?? null)) || ($context["advancedoption_upc"] ?? null)) || ($context["advancedoption_ean"] ?? null)) || ($context["advancedoption_jan"] ?? null))) {
                            // line 798
                            echo "\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 800
                            if (($context["advancedoption_model"] ?? null)) {
                                // line 801
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td><label>Model</label> <br/><input type=\"text\" name=\"product_option[";
                                // line 802
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][model]\" value=\"";
                                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["product_option_value"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["model"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 805
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["advancedoption_sku"] ?? null)) {
                                // line 806
                                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><label>SKU</label> <br/><input type=\"text\" name=\"product_option[";
                                // line 807
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][sku]\" value=\"";
                                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["product_option_value"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["sku"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 810
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["advancedoption_upc"] ?? null)) {
                                // line 811
                                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><label>UPC</label> <br/><input type=\"text\" name=\"product_option[";
                                // line 812
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][upc]\" value=\"";
                                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["product_option_value"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["upc"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 815
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["advancedoption_ean"] ?? null)) {
                                // line 816
                                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><label>EAN</label> <br/><input type=\"text\" name=\"product_option[";
                                // line 817
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][ean]\" value=\"";
                                echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["product_option_value"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["ean"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 820
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (($context["advancedoption_jan"] ?? null)) {
                                // line 821
                                echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><label>JAN</label> <br/><input type=\"text\" name=\"product_option[";
                                // line 822
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][jan]\" value=\"";
                                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["product_option_value"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["jan"] ?? null) : null);
                                echo "\" class=\"form-control\" /></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 825
                            echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 828
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 829
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["advancedoption_status"] ?? null) && ($context["advancedoption_customer_group"] ?? null))) {
                        // line 830
                        echo "\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 832
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                            // line 833
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_in_filter((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["customer_group"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["customer_group_id"] ?? null) : null), (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["product_option_value"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["customer_group_id"] ?? null) : null))) {
                                // line 834
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
                                // line 836
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
                            // line 838
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 839
                        echo "\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 842
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["advancedoption_status"] ?? null)) {
                        // line 843
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((($context["advancedoption_default_status"] ?? null) || ($context["advancedoption_image"] ?? null))) {
                            // line 844
                            echo "\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t";
                            // line 845
                            if (($context["advancedoption_default_status"] ?? null)) {
                                // line 846
                                echo "\t\t\t\t\t\t\t\t\t\t<label><input ";
                                echo (((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["product_option_value"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["default_status"] ?? null) : null)) ? ("checked=checked") : (""));
                                echo " type=\"checkbox\" name=\"product_option[";
                                echo ($context["option_row"] ?? null);
                                echo "][product_option_value][";
                                echo ($context["option_value_row"] ?? null);
                                echo "][default_status]\" value=\"1\" /> Default Select </label>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 848
                            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                            // line 849
                            if (($context["advancedoption_image"] ?? null)) {
                                // line 850
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
                            // line 852
                            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 854
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 855
                    echo "                                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                  </tr>
                                  ";
                    // line 857
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 858
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 859
                echo "                              </tbody>

                              <tfoot>
                                <tr>
                                  <td colspan=\"6\"></td>
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 864
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values";
                // line 869
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                            ";
                // line 872
                if ((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["option_values"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 872)] ?? null) : null)) {
                    // line 873
                    echo "                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["option_values"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 873)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 874
                        echo "

                                <option value=\"";
                        // line 876
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 876);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 876);
                        echo "</option>


                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 880
                    echo "                            ";
                }
                // line 881
                echo "

                          </select>
                        ";
            }
            // line 884
            echo " </div>
                      ";
            // line 885
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 886
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
        // line 895
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 896
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 902
        $context["recurring_row"] = 0;
        // line 903
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 904
            echo "                      <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 905
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">


                            ";
            // line 908
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 909
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 909) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 909))) {
                    // line 910
                    echo "

                                <option value=\"";
                    // line 912
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 912);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 912);
                    echo "</option>


                              ";
                } else {
                    // line 916
                    echo "

                                <option value=\"";
                    // line 918
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 918);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 918);
                    echo "</option>


                              ";
                }
                // line 922
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 923
            echo "

                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 926
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 929
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 930
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 930) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 930))) {
                    // line 931
                    echo "

                                <option value=\"";
                    // line 933
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 933);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 933);
                    echo "</option>


                              ";
                } else {
                    // line 937
                    echo "

                                <option value=\"";
                    // line 939
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 939);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 939);
                    echo "</option>


                              ";
                }
                // line 943
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 944
            echo "

                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 947
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 949
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 950
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 951
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 956
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
        // line 967
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 968
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 969
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 970
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 971
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 972
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 978
        $context["discount_row"] = 0;
        // line 979
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 980
            echo "                      <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 981
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 982
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 983
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 983) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 983))) {
                    // line 984
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 984);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 984);
                    echo "</option>
                              ";
                } else {
                    // line 986
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 986);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 986);
                    echo "</option>
                              ";
                }
                // line 988
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 989
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 990
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 990);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 991
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 991);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 992
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 992);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 995
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 995);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 1001
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1001);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 1005
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1007
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1008
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1009
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 1014
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
        // line 1025
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1026
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1027
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1028
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1029
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1035
        $context["special_row"] = 0;
        // line 1036
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1037
            echo "                      <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 1038
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 1041
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1042
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1042) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 1042))) {
                    // line 1043
                    echo "

                                <option value=\"";
                    // line 1045
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1045);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1045);
                    echo "</option>


                              ";
                } else {
                    // line 1049
                    echo "

                                <option value=\"";
                    // line 1051
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1051);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1051);
                    echo "</option>


                              ";
                }
                // line 1055
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1056
            echo "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1059
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1059);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1060
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1060);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1063
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1063);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 1069
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1069);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1073
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1075
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1076
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1077
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1082
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
        // line 1093
        echo ($context["entry_image"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1098
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
        // line 1107
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1108
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1114
        $context["image_row"] = 0;
        // line 1115
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1116
            echo "                      <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1117
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1117);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1117);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1118
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1118);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1119
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1121
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1122
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1123
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1128
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
        // line 1136
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1138
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
        // line 1145
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1146
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1152
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1153
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1153);
            echo "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1154
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1154);
            echo "][points]\" value=\"";
            echo (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["product_reward"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1154)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["product_reward"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1154)] ?? null) : null), "points", [], "any", false, false, false, 1154)) : (""));
            echo "\" class=\"form-control\"/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1157
        echo "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1163
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1168
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1169
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1174
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1175
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1175);
            echo "</td>
                        <td class=\"text-left\">";
            // line 1176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1177
                echo "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1177);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1177);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1177);
                echo "\"/></span> <input type=\"text\" name=\"product_seo_url[";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1177);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1177);
                echo "]\" value=\"";
                if ((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["product_seo_url"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1177)] ?? null) : null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1177)] ?? null) : null)) {
                    echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["product_seo_url"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1177)] ?? null) : null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1177)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 1179
                if ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["error_keyword"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1179)] ?? null) : null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1179)] ?? null) : null)) {
                    // line 1180
                    echo "                              <div class=\"text-danger\">";
                    echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["error_keyword"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1180)] ?? null) : null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1180)] ?? null) : null);
                    echo "</div>
                            ";
                }
                // line 1182
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
        // line 1185
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
        // line 1195
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1196
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1201
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 1202
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1202);
            echo "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1203
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1203);
            echo "]\" class=\"form-control\">
                            <option value=\"\"></option>


                            ";
            // line 1207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1208
                echo "                              ";
                if (((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["product_layout"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1208)] ?? null) : null) && ((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["product_layout"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1208)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1208)))) {
                    // line 1209
                    echo "

                                <option value=\"";
                    // line 1211
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1211);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1211);
                    echo "</option>


                              ";
                } else {
                    // line 1215
                    echo "

                                <option value=\"";
                    // line 1217
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1217);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1217);
                    echo "</option>


                              ";
                }
                // line 1221
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1222
            echo "

                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1227
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
        // line 1250
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 1255
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
        // line 1277
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
        // line 1306
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
        // line 1335
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
        // line 1364
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
        // line 1394
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
        // line 1420
        echo ($context["attribute_row"] ?? null);
        echo ";
\t
\tfunction addAttributeByGroupID(attribute_group_id) {
\t\t\$.ajax({
\t\turl: 'index.php?route=catalog/product/getattributesbygroup&user_token=";
        // line 1424
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
        // line 1433
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"'+json[i].attribute_id+'\" /></td>';
\t\t\t\thtml += '  <td class=\"text-left\">';
\t\t\t   ";
        // line 1435
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1436
            echo "\t\t\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1436);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1436);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1436);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1436);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1438
        echo "\t\t\t\thtml += '  </td>';
\t\t\t\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1439
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
        // line 1453
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 1455
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1456
            echo "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1456);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1456);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1456);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1456);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1458
        echo "\t  html += '  </td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1459
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
        // line 1473
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
        // line 1498
        echo ($context["option_row"] ?? null);
        echo ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1503
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
        // line 1526
        echo ($context["entry_required"] ?? null);
        echo "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 1528
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 1529
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1535
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1536
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1542
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1543
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1549
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1550
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1556
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1557
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1563
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1564
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1570
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1571
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
        // line 1580
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1581
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1582
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1583
        echo ($context["entry_price"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1584
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1585
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
\t\t\t  ";
        // line 1586
        if (($context["advancedoption_status"] ?? null)) {
            // line 1587
            echo "\t\t\t\t";
            if (((((($context["advancedoption_model"] ?? null) || ($context["advancedoption_sku"] ?? null)) || ($context["advancedoption_upc"] ?? null)) || ($context["advancedoption_ean"] ?? null)) || ($context["advancedoption_jan"] ?? null))) {
                // line 1588
                echo "\t\t\thtml += '        <td class=\"text-right\"></td>';
\t\t\t";
            }
            // line 1590
            echo "\t\t\t";
        }
        // line 1591
        echo "\t\t\t";
        if ((($context["advancedoption_status"] ?? null) && ($context["advancedoption_customer_group"] ?? null))) {
            // line 1592
            echo "\t\t\thtml += '        <td class=\"text-right\">Restrict Customer Group</td>';
\t\t\t";
        }
        // line 1594
        echo "\t\t\t";
        if (($context["advancedoption_status"] ?? null)) {
            // line 1595
            echo "\t\t\t";
            if ((($context["advancedoption_default_status"] ?? null) || ($context["advancedoption_image"] ?? null))) {
                // line 1596
                echo "\t\t\thtml += '        <td class=\"text-right\">";
                if (($context["advancedoption_image"] ?? null)) {
                    echo " Image ";
                }
                echo "</td>';
\t\t\t";
            }
            // line 1597
            echo " ";
        }
        // line 1598
        echo "\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"6\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1606
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
        // line 1634
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 1639
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 1644
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
        // line 1654
        echo ($context["option_value_row"] ?? null);
        echo ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1661
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 1663
        echo ($context["text_yes"] ?? null);
        echo "</option>';
\t  html += '    <option value=\"0\">";
        // line 1664
        echo ($context["text_no"] ?? null);
        echo "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1670
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1675
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1680
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  ";
        // line 1681
        if (($context["advancedoption_status"] ?? null)) {
            // line 1682
            echo "\t\t";
            if (((((($context["advancedoption_model"] ?? null) || ($context["advancedoption_sku"] ?? null)) || ($context["advancedoption_upc"] ?? null)) || ($context["advancedoption_ean"] ?? null)) || ($context["advancedoption_jan"] ?? null))) {
                // line 1683
                echo "\t\thtml += '<td class=\"text-left\">';
\t\thtml += '<table class=\"table table-striped table-bordered table-hover\" >';

\t\t";
                // line 1686
                if (($context["advancedoption_model"] ?? null)) {
                    // line 1687
                    echo "\t\thtml += '<tr>';
\t\thtml += '<td><label>Model</label> <br/><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][model]\" value=\"\" class=\"form-control\" /></td>';
\t\thtml += '</tr>';
\t\t";
                }
                // line 1691
                echo "
\t\t";
                // line 1692
                if (($context["advancedoption_sku"] ?? null)) {
                    // line 1693
                    echo "\t\thtml += '<tr>';
\t\thtml += '<td><label>SKU</label> <br/><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][sku]\" value=\"\" class=\"form-control\" /></td>';
\t\thtml += '</tr>';
\t\t";
                }
                // line 1697
                echo "\t\t";
                if (($context["advancedoption_upc"] ?? null)) {
                    // line 1698
                    echo "\t\thtml += '<tr>';
\t\thtml += '<td><label>UPC</label> <br/><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][upc]\" value=\"\" class=\"form-control\" /></td>';
\t\thtml += '</tr>';
\t\t";
                }
                // line 1702
                echo "\t\t";
                if (($context["advancedoption_ean"] ?? null)) {
                    // line 1703
                    echo "\t\thtml += '<tr>';
\t\thtml += '<td><label>EAN</label> <br/><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][ean]\" value=\"\" class=\"form-control\" /></td>';
\t\thtml += '</tr>';
\t\t";
                }
                // line 1707
                echo "\t\t";
                if (($context["advancedoption_jan"] ?? null)) {
                    // line 1708
                    echo "\t\thtml += '<tr>';
\t\thtml += '<td><label>JAN</label> <br/><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][jan]\" value=\"\" class=\"form-control\" /></td>';
\t\thtml += '</tr>';
\t\t";
                }
                // line 1712
                echo "\t\thtml += '</table>';
\t\thtml += '</td>';
\t\t";
            }
            // line 1715
            echo "\t\t";
        }
        // line 1716
        echo "\t\t";
        if ((($context["advancedoption_status"] ?? null) && ($context["advancedoption_customer_group"] ?? null))) {
            // line 1717
            echo "\t\thtml += '<td>';
\t\thtml += '<div class=\"well well-sm\">';
\t\t";
            // line 1719
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1720
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
            // line 1722
            echo "\t\thtml +='</div>';
\t\thtml += '</td>';
\t\t";
        }
        // line 1725
        echo "\t\t";
        if (($context["advancedoption_status"] ?? null)) {
            // line 1726
            echo "\t\t";
            if ((($context["advancedoption_default_status"] ?? null) || ($context["advancedoption_image"] ?? null))) {
                // line 1727
                echo "
\t\thtml += '<td class=\"text-center\">';

\t\t";
                // line 1730
                if (($context["advancedoption_default_status"] ?? null)) {
                    // line 1731
                    echo "\t\thtml +='<label><input type=\"checkbox\" name=\"product_option['+ option_row +'][product_option_value]['+ option_value_row +'][default_status]\" value=\"1\" /> Default Select</label> <br/>';
\t\t";
                }
                // line 1733
                echo "\t\t";
                if (($context["advancedoption_image"] ?? null)) {
                    // line 1734
                    echo "\t\thtml +='<div><a href=\"\" id=\"thumb-image' + option_row + option_value_row +'\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo ($context["placeholder"] ?? null);
                    echo "\" /></a><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][image]\"  id=\"input-image' + option_row +option_value_row+ '\" value=\"\" /></div>';
\t\t";
                }
                // line 1736
                echo "\t\thtml +='</td>';
\t\t";
            }
            // line 1738
            echo "\t\t";
        }
        // line 1739
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
        // line 1750
        echo ($context["discount_row"] ?? null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1755
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1756
            echo "\t  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1756);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1756), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1758
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1759
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1760
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1761
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1762
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1763
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1764
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
        // line 1778
        echo ($context["special_row"] ?? null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1783
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1784
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1784);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1784), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1786
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1787
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1788
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1789
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1790
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1791
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 1797
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row = ";
        // line 1806
        echo ($context["image_row"] ?? null);
        echo ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1810
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1811
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1812
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 1822
        echo ($context["recurring_row"] ?? null);
        echo ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 1828
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1829
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1829);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1829);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1831
        echo "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 1835
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1836
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1836);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1836);
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1838
        echo "\t  html += '    <select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1841
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
        // line 1853
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 1858
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 1863
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
        // line 1876
        echo ($context["text_select"] ?? null);
        echo "',
\t\tocfilter_select_category: '";
        // line 1877
        echo ($context["ocfilter_select_category"] ?? null);
        echo "',
\t\tentry_values: '";
        // line 1878
        echo ($context["entry_values"] ?? null);
        echo "',
\t\ttab_ocfilter: '";
        // line 1879
        echo ($context["tab_ocfilter"] ?? null);
        echo "'
\t};

\tocfilter.php.languages = [];

\t";
        // line 1884
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1885
            echo "\tocfilter.php.languages.push({
\t\t'language_id': ";
            // line 1886
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1886);
            echo ",
\t\t'name': '";
            // line 1887
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1887);
            echo "',
\t\t'image': '";
            // line 1888
            echo twig_get_attribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1888);
            echo "'
\t});
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1891
        echo "//--></script>
<!-- OCFilter end -->
</div>
";
        // line 1894
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
        return array (  4273 => 1894,  4268 => 1891,  4259 => 1888,  4255 => 1887,  4251 => 1886,  4248 => 1885,  4244 => 1884,  4236 => 1879,  4232 => 1878,  4228 => 1877,  4224 => 1876,  4208 => 1863,  4200 => 1858,  4192 => 1853,  4177 => 1841,  4172 => 1838,  4161 => 1836,  4157 => 1835,  4151 => 1831,  4140 => 1829,  4136 => 1828,  4127 => 1822,  4114 => 1812,  4110 => 1811,  4104 => 1810,  4097 => 1806,  4085 => 1797,  4076 => 1791,  4072 => 1790,  4068 => 1789,  4064 => 1788,  4060 => 1787,  4057 => 1786,  4046 => 1784,  4042 => 1783,  4034 => 1778,  4017 => 1764,  4013 => 1763,  4009 => 1762,  4005 => 1761,  4001 => 1760,  3997 => 1759,  3994 => 1758,  3983 => 1756,  3979 => 1755,  3971 => 1750,  3956 => 1739,  3953 => 1738,  3949 => 1736,  3941 => 1734,  3938 => 1733,  3934 => 1731,  3932 => 1730,  3927 => 1727,  3924 => 1726,  3921 => 1725,  3916 => 1722,  3905 => 1720,  3901 => 1719,  3897 => 1717,  3894 => 1716,  3891 => 1715,  3886 => 1712,  3880 => 1708,  3877 => 1707,  3871 => 1703,  3868 => 1702,  3862 => 1698,  3859 => 1697,  3853 => 1693,  3851 => 1692,  3848 => 1691,  3842 => 1687,  3840 => 1686,  3835 => 1683,  3832 => 1682,  3830 => 1681,  3826 => 1680,  3818 => 1675,  3810 => 1670,  3801 => 1664,  3797 => 1663,  3792 => 1661,  3782 => 1654,  3769 => 1644,  3761 => 1639,  3753 => 1634,  3722 => 1606,  3712 => 1598,  3709 => 1597,  3701 => 1596,  3698 => 1595,  3695 => 1594,  3691 => 1592,  3688 => 1591,  3685 => 1590,  3681 => 1588,  3678 => 1587,  3676 => 1586,  3672 => 1585,  3668 => 1584,  3664 => 1583,  3660 => 1582,  3656 => 1581,  3652 => 1580,  3640 => 1571,  3636 => 1570,  3627 => 1564,  3623 => 1563,  3614 => 1557,  3610 => 1556,  3601 => 1550,  3597 => 1549,  3588 => 1543,  3584 => 1542,  3575 => 1536,  3571 => 1535,  3562 => 1529,  3558 => 1528,  3553 => 1526,  3527 => 1503,  3519 => 1498,  3491 => 1473,  3474 => 1459,  3471 => 1458,  3454 => 1456,  3450 => 1455,  3445 => 1453,  3428 => 1439,  3425 => 1438,  3408 => 1436,  3404 => 1435,  3399 => 1433,  3387 => 1424,  3380 => 1420,  3351 => 1394,  3318 => 1364,  3286 => 1335,  3254 => 1306,  3222 => 1277,  3197 => 1255,  3189 => 1250,  3164 => 1227,  3154 => 1222,  3148 => 1221,  3139 => 1217,  3135 => 1215,  3126 => 1211,  3122 => 1209,  3119 => 1208,  3115 => 1207,  3108 => 1203,  3104 => 1202,  3101 => 1201,  3097 => 1200,  3090 => 1196,  3086 => 1195,  3074 => 1185,  3061 => 1182,  3055 => 1180,  3053 => 1179,  3033 => 1177,  3029 => 1176,  3025 => 1175,  3022 => 1174,  3018 => 1173,  3011 => 1169,  3007 => 1168,  2999 => 1163,  2991 => 1157,  2980 => 1154,  2976 => 1153,  2973 => 1152,  2969 => 1151,  2961 => 1146,  2957 => 1145,  2945 => 1138,  2938 => 1136,  2927 => 1128,  2920 => 1123,  2914 => 1122,  2912 => 1121,  2905 => 1119,  2897 => 1118,  2883 => 1117,  2878 => 1116,  2873 => 1115,  2871 => 1114,  2862 => 1108,  2858 => 1107,  2842 => 1098,  2834 => 1093,  2820 => 1082,  2813 => 1077,  2807 => 1076,  2805 => 1075,  2798 => 1073,  2787 => 1069,  2774 => 1063,  2764 => 1060,  2756 => 1059,  2751 => 1056,  2745 => 1055,  2736 => 1051,  2732 => 1049,  2723 => 1045,  2719 => 1043,  2716 => 1042,  2712 => 1041,  2706 => 1038,  2701 => 1037,  2696 => 1036,  2694 => 1035,  2685 => 1029,  2681 => 1028,  2677 => 1027,  2673 => 1026,  2669 => 1025,  2655 => 1014,  2648 => 1009,  2642 => 1008,  2640 => 1007,  2633 => 1005,  2622 => 1001,  2609 => 995,  2599 => 992,  2591 => 991,  2583 => 990,  2580 => 989,  2574 => 988,  2566 => 986,  2558 => 984,  2555 => 983,  2551 => 982,  2547 => 981,  2542 => 980,  2537 => 979,  2535 => 978,  2526 => 972,  2522 => 971,  2518 => 970,  2514 => 969,  2510 => 968,  2506 => 967,  2492 => 956,  2485 => 951,  2479 => 950,  2477 => 949,  2470 => 947,  2465 => 944,  2459 => 943,  2450 => 939,  2446 => 937,  2437 => 933,  2433 => 931,  2430 => 930,  2426 => 929,  2420 => 926,  2415 => 923,  2409 => 922,  2400 => 918,  2396 => 916,  2387 => 912,  2383 => 910,  2380 => 909,  2376 => 908,  2370 => 905,  2365 => 904,  2360 => 903,  2358 => 902,  2349 => 896,  2345 => 895,  2329 => 886,  2327 => 885,  2324 => 884,  2318 => 881,  2315 => 880,  2303 => 876,  2299 => 874,  2294 => 873,  2292 => 872,  2286 => 869,  2276 => 864,  2269 => 859,  2263 => 858,  2261 => 857,  2253 => 855,  2250 => 854,  2246 => 852,  2226 => 850,  2224 => 849,  2221 => 848,  2211 => 846,  2209 => 845,  2206 => 844,  2203 => 843,  2200 => 842,  2195 => 839,  2189 => 838,  2177 => 836,  2165 => 834,  2162 => 833,  2158 => 832,  2154 => 830,  2151 => 829,  2148 => 828,  2143 => 825,  2133 => 822,  2130 => 821,  2127 => 820,  2117 => 817,  2114 => 816,  2111 => 815,  2101 => 812,  2098 => 811,  2095 => 810,  2085 => 807,  2082 => 806,  2079 => 805,  2069 => 802,  2066 => 801,  2064 => 800,  2060 => 798,  2057 => 797,  2055 => 796,  2045 => 795,  2041 => 793,  2033 => 787,  2025 => 781,  2022 => 780,  2014 => 774,  2006 => 768,  2004 => 767,  1996 => 764,  1986 => 763,  1982 => 761,  1974 => 755,  1966 => 749,  1963 => 748,  1955 => 742,  1947 => 736,  1945 => 735,  1937 => 732,  1927 => 731,  1923 => 729,  1915 => 723,  1907 => 717,  1904 => 716,  1896 => 710,  1888 => 704,  1886 => 703,  1878 => 700,  1873 => 697,  1866 => 693,  1862 => 692,  1858 => 690,  1851 => 686,  1847 => 685,  1843 => 683,  1841 => 682,  1833 => 679,  1823 => 678,  1815 => 677,  1811 => 675,  1808 => 674,  1802 => 673,  1793 => 669,  1789 => 667,  1780 => 663,  1776 => 661,  1774 => 660,  1771 => 659,  1767 => 658,  1764 => 657,  1762 => 656,  1754 => 653,  1749 => 652,  1745 => 651,  1738 => 646,  1735 => 645,  1727 => 644,  1724 => 643,  1721 => 642,  1717 => 640,  1714 => 639,  1711 => 638,  1707 => 636,  1704 => 635,  1702 => 634,  1698 => 633,  1694 => 632,  1690 => 631,  1686 => 630,  1682 => 629,  1678 => 628,  1671 => 624,  1668 => 623,  1665 => 622,  1650 => 616,  1642 => 613,  1639 => 612,  1636 => 611,  1621 => 605,  1613 => 602,  1610 => 601,  1607 => 600,  1592 => 594,  1584 => 591,  1581 => 590,  1578 => 589,  1565 => 585,  1558 => 583,  1555 => 582,  1552 => 581,  1539 => 577,  1532 => 575,  1529 => 574,  1526 => 573,  1513 => 569,  1506 => 567,  1503 => 566,  1501 => 565,  1494 => 560,  1487 => 556,  1483 => 555,  1479 => 553,  1472 => 549,  1468 => 548,  1464 => 546,  1462 => 545,  1454 => 542,  1447 => 540,  1428 => 538,  1423 => 537,  1418 => 536,  1415 => 535,  1413 => 534,  1405 => 529,  1402 => 528,  1396 => 527,  1394 => 526,  1383 => 525,  1378 => 524,  1376 => 523,  1363 => 513,  1356 => 508,  1350 => 507,  1348 => 506,  1341 => 504,  1338 => 503,  1316 => 501,  1312 => 500,  1300 => 499,  1295 => 498,  1290 => 497,  1288 => 496,  1279 => 490,  1275 => 489,  1265 => 481,  1254 => 479,  1250 => 478,  1246 => 477,  1240 => 474,  1231 => 467,  1222 => 465,  1215 => 464,  1211 => 463,  1207 => 462,  1200 => 460,  1194 => 456,  1185 => 454,  1178 => 453,  1174 => 452,  1170 => 451,  1163 => 449,  1157 => 445,  1148 => 443,  1141 => 442,  1137 => 441,  1133 => 440,  1126 => 438,  1120 => 434,  1112 => 432,  1107 => 431,  1102 => 430,  1097 => 428,  1092 => 427,  1090 => 426,  1087 => 425,  1083 => 424,  1078 => 422,  1072 => 418,  1063 => 416,  1056 => 415,  1052 => 414,  1048 => 413,  1041 => 411,  1035 => 407,  1026 => 405,  1019 => 404,  1015 => 403,  1011 => 402,  1004 => 400,  993 => 396,  986 => 394,  975 => 388,  970 => 386,  962 => 380,  955 => 376,  951 => 375,  947 => 373,  940 => 369,  936 => 368,  932 => 366,  930 => 365,  922 => 360,  914 => 354,  908 => 353,  899 => 349,  895 => 347,  886 => 343,  882 => 341,  879 => 340,  875 => 339,  867 => 334,  858 => 330,  853 => 328,  845 => 322,  839 => 321,  830 => 317,  826 => 315,  817 => 311,  813 => 309,  810 => 308,  806 => 307,  798 => 302,  787 => 296,  779 => 293,  771 => 290,  764 => 286,  753 => 280,  747 => 277,  741 => 273,  736 => 272,  733 => 271,  728 => 269,  725 => 268,  722 => 267,  717 => 266,  714 => 265,  709 => 263,  706 => 262,  704 => 261,  699 => 259,  691 => 253,  685 => 252,  676 => 248,  672 => 246,  663 => 242,  659 => 240,  656 => 239,  652 => 238,  642 => 233,  634 => 227,  627 => 223,  623 => 222,  619 => 220,  612 => 216,  608 => 215,  604 => 213,  602 => 212,  594 => 207,  585 => 203,  578 => 201,  569 => 197,  564 => 195,  556 => 189,  550 => 188,  541 => 184,  537 => 182,  528 => 178,  524 => 176,  521 => 175,  517 => 174,  511 => 171,  505 => 168,  496 => 164,  491 => 162,  482 => 158,  477 => 156,  464 => 148,  457 => 146,  448 => 142,  441 => 140,  432 => 136,  425 => 134,  416 => 130,  409 => 128,  400 => 124,  392 => 121,  379 => 110,  373 => 109,  371 => 108,  364 => 106,  358 => 103,  352 => 99,  335 => 95,  326 => 93,  313 => 89,  306 => 87,  293 => 83,  286 => 81,  281 => 78,  275 => 77,  273 => 76,  263 => 75,  256 => 73,  246 => 68,  228 => 61,  221 => 59,  216 => 56,  210 => 55,  208 => 54,  196 => 53,  189 => 51,  183 => 49,  179 => 48,  176 => 47,  159 => 45,  155 => 44,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  127 => 34,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
