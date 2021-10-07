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

/* extension/module/ocfilter_form.twig */
class __TwigTemplate_f20f0a26eaf23885805b60b76e096f2da59c2a000faf2416d9a56267fe29a001 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-ocfilter\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger\">
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
\t      <form id=\"form-ocfilter\" action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-other\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_other"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-values\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_values"] ?? null);
        echo "</a></li>
          </ul>

          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
\t\t          <table class=\"form\">
\t\t            <tr>
\t\t              <td>";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</td>
\t\t              <td>
\t\t                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 40
            echo "\t\t                <input type=\"text\" name=\"ocfilter_option_description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["name"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["name"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40)] ?? null) : null), "name", [], "any", false, false, false, 40)) : (""));
            echo "\" size=\"50\" />&nbsp;<img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 40);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 40);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 40);
            echo "\" /><br />
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t              </td>
\t\t            </tr>
\t\t            <tr>
\t\t              <td>";
        // line 45
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
\t\t              <td>
\t\t                <input type=\"text\" name=\"keyword\" value=\"";
        // line 47
        echo ($context["keyword"] ?? null);
        echo "\" size=\"50\" />
\t\t              </td>
\t\t            </tr>
\t\t            <tr>
\t\t              <td>";
        // line 51
        echo ($context["entry_category"] ?? null);
        echo "</td>
\t\t              <td>
                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 53
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                    <div id=\"option-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["option_categories"] ?? null));
        foreach ($context['_seq'] as $context["category_id"] => $context["_name"]) {
            // line 56
            echo "                      <div id=\"option-category";
            echo $context["category_id"];
            echo "\">
                        <i class=\"fa fa-minus-circle\"></i> ";
            // line 57
            echo $context["_name"];
            echo "
                        <input type=\"hidden\" name=\"category_id[";
            // line 58
            echo $context["category_id"];
            echo "]\" value=\"";
            echo $context["_name"];
            echo "\" />
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category_id'], $context['_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </div>
\t\t              </td>
\t\t            </tr>
\t\t            <tr>
\t\t              <td>";
        // line 65
        echo ($context["entry_type"] ?? null);
        echo "</td>
\t\t              <td>
\t\t                <select name=\"type\" class=\"with-subfield\" data-subfield=\"type\">
\t\t                  ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 69
            echo "\t\t                  ";
            if ((($context["type"] ?? null) == $context["key"])) {
                // line 70
                echo "\t\t                  <option value=\"";
                echo $context["key"];
                echo "\" selected=\"selected\">";
                echo $context["value"];
                echo "</option>
                      ";
            } else {
                // line 72
                echo "  \t\t                <option value=\"";
                echo $context["key"];
                echo "\">";
                echo $context["value"];
                echo "</option>
                      ";
            }
            // line 74
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t                </select>
\t\t\t\t\t\t<div class=\"subfield hidden type sf-checkbox sf-radio";
        // line 76
        echo ((((($context["type"] ?? null) == "checkbox") || (($context["type"] ?? null) == "radio"))) ? (" visible") : (""));
        echo "\">
\t\t                \t<label><span>";
        // line 77
        echo ($context["entry_selectbox"] ?? null);
        echo "</span> <input type=\"checkbox\" name=\"selectbox\" value=\"1\"";
        echo ((($context["selectbox"] ?? null)) ? (" checked=\"checked\"") : (""));
        echo " /></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"subfield hidden type sf-checkbox sf-radio";
        // line 79
        echo ((((($context["type"] ?? null) == "checkbox") || (($context["type"] ?? null) == "radio"))) ? (" visible") : (""));
        echo "\">
\t\t                \t<label><span>";
        // line 80
        echo ($context["entry_is_color"] ?? null);
        echo "</span> <input type=\"checkbox\" name=\"color\" value=\"1\"";
        echo ((($context["color"] ?? null)) ? (" checked=\"checked\"") : (""));
        echo " /></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"subfield hidden type sf-checkbox sf-radio";
        // line 82
        echo ((((($context["type"] ?? null) == "checkbox") || (($context["type"] ?? null) == "radio"))) ? (" visible") : (""));
        echo "\">
\t\t                \t<label><span>";
        // line 83
        echo ($context["entry_is_image"] ?? null);
        echo "</span> <input type=\"checkbox\" name=\"image\" value=\"1\"";
        echo ((($context["image"] ?? null)) ? (" checked=\"checked\"") : (""));
        echo " /></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t              </td>
\t\t            </tr>
\t\t            <tr>
\t\t              <td>";
        // line 88
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
\t\t              <td><input type=\"text\" name=\"sort_order\" value=\"";
        // line 89
        echo ($context["sort_order"] ?? null);
        echo "\" size=\"2\" /></td>
\t\t            </tr>
\t\t            <tr>
\t\t              <td>";
        // line 92
        echo ($context["entry_status"] ?? null);
        echo "</td>
\t\t              <td>
\t\t                ";
        // line 94
        if (($context["status"] ?? null)) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"status\" checked=\"checked\" value=\"1\" />
                    ";
        } else {
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"status\" value=\"1\" />
                    ";
        }
        // line 99
        echo "\t\t              </td>
\t\t            </tr>
\t\t          </table>
\t\t        </div>
\t\t        <div id=\"tab-other\" class=\"tab-pane\">
\t\t          <table class=\"form\">
\t\t            <tr>
\t\t              <td>";
        // line 106
        echo ($context["entry_postfix"] ?? null);
        echo "</td>
\t\t              <td>
\t\t                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 109
            echo "\t\t                <input type=\"text\" name=\"ocfilter_option_description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109);
            echo "][postfix]\" value=\"";
            echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109)] ?? null) : null), "postfix", [], "any", false, false, false, 109)) : (""));
            echo "\" size=\"10\" />&nbsp;<img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 109);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 109);
            echo ".png\" title=\"";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["language"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
            echo "\" /><br />
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t              </td>
\t\t            </tr>
\t\t            <tr>
\t\t              <td>";
        // line 114
        echo ($context["entry_description"] ?? null);
        echo "</td>
\t\t              <td>
\t\t                ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 117
            echo "\t\t                <textarea name=\"ocfilter_option_description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117);
            echo "][description]\" rows=\"3\" cols=\"50\" style=\"resize: none;\">";
            echo (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["name"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["name"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 117)] ?? null) : null), "description", [], "any", false, false, false, 117)) : (""));
            echo "</textarea>&nbsp;<img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 117);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 117);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 117);
            echo "\" /><br />
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t              </td>
\t\t            </tr>
\t\t            <tr>
\t\t              <td>";
        // line 122
        echo ($context["entry_store"] ?? null);
        echo "</td>
\t\t              <td>
\t\t                <div class=\"scrollbox\">
\t\t                  ";
        // line 125
        $context["class"] = "even";
        // line 126
        echo "\t\t                  <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t                    ";
        // line 127
        if (twig_in_filter(0, ($context["option_store"] ?? null))) {
            // line 128
            echo "\t\t                    <input type=\"checkbox\" name=\"option_store[]\" value=\"0\" checked=\"checked\" /> ";
            echo ($context["text_default"] ?? null);
            echo "
                        ";
        } else {
            // line 130
            echo "\t\t                    <input type=\"checkbox\" name=\"option_store[]\" value=\"0\" /> ";
            echo ($context["text_default"] ?? null);
            echo "
                        ";
        }
        // line 132
        echo "\t\t                  </div>
\t\t                  ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 134
            echo "\t\t                  ";
            $context["class"] = (((($context["class"] ?? null) == "even")) ? ("odd") : ("even"));
            // line 135
            echo "\t\t                  <div class=\"";
            echo ($context["class"] ?? null);
            echo "\">
\t\t                    ";
            // line 136
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 136), ($context["option_store"] ?? null))) {
                // line 137
                echo "\t\t                    <input type=\"checkbox\" name=\"option_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 137);
                echo "\" checked=\"checked\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 137);
                echo "
                        ";
            } else {
                // line 139
                echo "\t\t                    <input type=\"checkbox\" name=\"option_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 139);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 139);
                echo "
                        ";
            }
            // line 141
            echo "\t\t                  </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "\t\t                </div>
\t\t              </td>
\t\t            </tr>
\t\t          </table>
\t\t        </div>
\t\t        <div id=\"tab-values\" class=\"tab-pane\">
\t\t          <div class=\"header\"><a onclick=\"ocfilter.form.addValue();\" class=\"btn btn-primary\">";
        // line 149
        echo ($context["text_add_value"] ?? null);
        echo "</a></div>
\t\t          <ul id=\"sortable\">
\t\t            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ocfilter_option_values"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 152
            echo "\t\t            <li>
\t\t              <a class=\"delete\" onclick=\"ocfilter.form.deleteValue(\$(this));\">Delete</a>
\t\t              <div class=\"fields\">
\t\t              \t<input type=\"hidden\" name=\"ocfilter_option_value[update][";
            // line 155
            echo twig_get_attribute($this->env, $this->source, $context["value"], "value_id", [], "any", false, false, false, 155);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 155);
            echo "\" id=\"value-image-";
            echo $context["key"];
            echo "\" />
\t\t                <input type=\"hidden\" name=\"ocfilter_option_value[update][";
            // line 156
            echo twig_get_attribute($this->env, $this->source, $context["value"], "value_id", [], "any", false, false, false, 156);
            echo "][color]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["value"], "color", [], "any", false, false, false, 156);
            echo "\" />
\t\t              \t<input type=\"number\" name=\"ocfilter_option_value[update][";
            // line 157
            echo twig_get_attribute($this->env, $this->source, $context["value"], "value_id", [], "any", false, false, false, 157);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["value"], "sort_order", [], "any", false, false, false, 157);
            echo "\" />
\t\t                ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 159
                echo "\t\t                <label><input type=\"text\" class=\"value-name\" name=\"ocfilter_option_value[update][";
                echo twig_get_attribute($this->env, $this->source, $context["value"], "value_id", [], "any", false, false, false, 159);
                echo "][language][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159);
                echo "][name]\" value=\"";
                echo (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["value"], "language", [], "any", false, false, false, 159)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["value"], "language", [], "any", false, false, false, 159)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 159)] ?? null) : null), "name", [], "any", false, false, false, 159)) : (""));
                echo "\" size=\"80\" />&nbsp;<img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 159);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 159);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 159);
                echo "\" /></label>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "\t\t              </div>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"color-handler";
            // line 162
            echo ((($context["color"] ?? null)) ? (" visible") : (""));
            echo "\" title=\"";
            echo ($context["text_select_color"] ?? null);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["value"], "color", [], "any", false, false, false, 162)) ? (((" style=\"background: #" . twig_get_attribute($this->env, $this->source, $context["value"], "color", [], "any", false, false, false, 162)) . ";\"")) : (""));
            echo "></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"image-handler";
            // line 163
            echo ((($context["image"] ?? null)) ? (" visible") : (""));
            echo ((twig_get_attribute($this->env, $this->source, $context["value"], "image", [], "any", false, false, false, 163)) ? (" inserted") : (""));
            echo "\" title=\"";
            echo ($context["text_browse_image"] ?? null);
            echo "\" id=\"value-image-thumb-";
            echo $context["key"];
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["value"], "thumb", [], "any", false, false, false, 163);
            echo "\" alt=\"\" /><i class=\"fa fa-fw fa-picture-o\"></i></a>
\t\t            </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t          </ul>
\t\t          <div class=\"bottom\"><a onclick=\"ocfilter.form.addValue();\" class=\"btn btn-primary\">";
        // line 167
        echo ($context["text_add_value"] ?? null);
        echo "</a></div>
\t\t\t\t\t\t</div>
\t        </div>
      \t</form>
\t\t\t</div>
    </div>
  </div>

<script type=\"text/javascript\"><!--

\$(function() {
  \$('.with-subfield').trigger('change');

  // Category
  \$('input[name=\\'category\\']').autocomplete({
  \t'source': function(request, response) {
  \t\t\$.ajax({
  \t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 184
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
  \t\t\tdataType: 'json',
  \t\t\tsuccess: function(json) {
  \t\t\t\tresponse(\$.map(json, function(item) {
  \t\t\t\t\treturn {
  \t\t\t\t\t\tlabel: item['name'],
  \t\t\t\t\t\tvalue: item['category_id']
  \t\t\t\t\t}
  \t\t\t\t}));
  \t\t\t}
  \t\t});
  \t},
  \t'select': function(item) {
  \t\t\$('#option-category' + item['value']).remove();

  \t\t\$('#option-category').append('<div id=\"option-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category_id[' + item['value'] + ']\" value=\"' + item['label'] + '\" /></div>');

  \t\t\$('input[name=\\'category\\']').val('');
  \t}
  });

  \$('#option-category').delegate('.fa-minus-circle', 'click', function() {
  \t\$(this).parent().remove();
  });
});

ocfilter.php.color = ";
        // line 210
        echo ($context["color"] ?? null);
        echo ";
ocfilter.php.image = ";
        // line 211
        echo ($context["image"] ?? null);
        echo ";
ocfilter.php.no_image = '";
        // line 212
        echo ($context["no_image"] ?? null);
        echo "';

ocfilter.php.text_image_manager = '";
        // line 214
        echo ($context["text_image_manager"] ?? null);
        echo "';
ocfilter.php.text_select_color = '";
        // line 215
        echo ($context["text_select_color"] ?? null);
        echo "';
ocfilter.php.text_browse_image = '";
        // line 216
        echo ($context["text_browse_image"] ?? null);
        echo "';

ocfilter.php.languages = [];

";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 221
            echo "ocfilter.php.languages.push({
\t'language_id': ";
            // line 222
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 222);
            echo ",
\t'name': '";
            // line 223
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 223);
            echo "',
  'code': '";
            // line 224
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 224);
            echo "'
});
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "//--></script>
</div>
";
        // line 229
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocfilter_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 229,  638 => 227,  629 => 224,  625 => 223,  621 => 222,  618 => 221,  614 => 220,  607 => 216,  603 => 215,  599 => 214,  594 => 212,  590 => 211,  586 => 210,  557 => 184,  537 => 167,  534 => 166,  518 => 163,  510 => 162,  507 => 161,  488 => 159,  484 => 158,  478 => 157,  472 => 156,  464 => 155,  459 => 152,  455 => 151,  450 => 149,  442 => 143,  435 => 141,  427 => 139,  419 => 137,  417 => 136,  412 => 135,  409 => 134,  405 => 133,  402 => 132,  396 => 130,  390 => 128,  388 => 127,  383 => 126,  381 => 125,  375 => 122,  370 => 119,  353 => 117,  349 => 116,  344 => 114,  339 => 111,  322 => 109,  318 => 108,  313 => 106,  304 => 99,  300 => 97,  296 => 95,  294 => 94,  289 => 92,  283 => 89,  279 => 88,  269 => 83,  265 => 82,  258 => 80,  254 => 79,  247 => 77,  243 => 76,  240 => 75,  234 => 74,  226 => 72,  218 => 70,  215 => 69,  211 => 68,  205 => 65,  199 => 61,  188 => 58,  184 => 57,  179 => 56,  175 => 55,  170 => 53,  165 => 51,  158 => 47,  153 => 45,  148 => 42,  131 => 40,  127 => 39,  122 => 37,  112 => 30,  108 => 29,  104 => 28,  99 => 26,  95 => 24,  88 => 20,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter_form.twig", "");
    }
}
