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

/* extension/module/ocfilter.twig */
class __TwigTemplate_ab37a8fddf995ced1efffa6325d9d38d68825d7f88efe8443e771262bbc0a1cd extends \Twig\Template
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
        echo "\" class=\"btn btn-primary\" onclick=\"\$('#form-ocfilter').attr('action','";
        echo ($context["save"] ?? null);
        echo "');\"><i class=\"fa fa-save\"></i></button>
        <button type=\"submit\" form=\"form-ocfilter\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success\" onclick=\"\$('#form-ocfilter').attr('action','";
        echo ($context["apply"] ?? null);
        echo "');\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 26
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <ul class=\"list-inline pull-right\">
          <li><a href=\"";
        // line 33
        echo ($context["filter_list"] ?? null);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-code-fork\"></i> ";
        echo ($context["text_filter_list"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 34
        echo ($context["filter_page_list"] ?? null);
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-file-text-o\"></i> ";
        echo ($context["text_filter_page_list"] ?? null);
        echo "</a></li>
        </ul>
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 36
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ocfilter\" class=\"form-horizontal\">
          <div role=\"tabs\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
              <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-price-filtering\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_price_filtering"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-other\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_other"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-copy\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_copy"] ?? null);
        echo "</a></li>
            </ul>

          \t<div class=\"tab-content\">
              <div id=\"tab-general\" class=\"tab-pane active\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 52
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 55
        if (($context["status"] ?? null)) {
            // line 56
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 57
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 60
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 63
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 64
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 67
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 70
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 72
        echo ($context["help_status"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 77
        echo ($context["entry_sub_category"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 80
        if (($context["sub_category"] ?? null)) {
            // line 81
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"sub_category\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 82
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"sub_category\" value=\"0\" autocomplete=\"off\" /> ";
            // line 85
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 88
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"sub_category\" value=\"1\" autocomplete=\"off\" /> ";
            // line 89
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"sub_category\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 92
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 95
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 97
        echo ($context["help_sub_category"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-sitemap-status\">";
        // line 102
        echo ($context["entry_sitemap"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 105
        if (($context["sitemap_status"] ?? null)) {
            // line 106
            echo "                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#sitemap-link').collapse('show')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 107
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\" onclick=\"\$('#sitemap-link').collapse('hide')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 110
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 113
            echo "                      <label class=\"btn btn-default\" onclick=\"\$('#sitemap-link').collapse('show')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 114
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#sitemap-link').collapse('hide')\">
                        <input type=\"radio\" name=\"sitemap_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 117
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 120
        echo "                    </div>
                  </div>
                </div>

                <div class=\"collapse\" id=\"sitemap-link\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\">";
        // line 126
        echo ($context["entry_sitemap_link"] ?? null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"sitemap_link\" value=\"";
        // line 128
        echo ($context["sitemap_link"] ?? null);
        echo "\" class=\"form-control\" onclick=\"\$(this).select();\" readonly=\"readonly\" />
                    </div>
                  </div>
                </div>
  \t\t        </div>

  \t\t        <div id=\"tab-option\" class=\"tab-pane\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 136
        echo ($context["entry_search_button"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 139
        if (($context["search_button"] ?? null)) {
            // line 140
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"search_button\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 141
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"search_button\" value=\"0\" autocomplete=\"off\" /> ";
            // line 144
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 147
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"search_button\" value=\"1\" autocomplete=\"off\" /> ";
            // line 148
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"search_button\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 151
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 154
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 156
        echo ($context["help_search_button"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-selected\">";
        // line 161
        echo ($context["entry_show_selected"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 164
        if (($context["show_selected"] ?? null)) {
            // line 165
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_selected\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 166
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_selected\" value=\"0\" autocomplete=\"off\" /> ";
            // line 169
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 172
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_selected\" value=\"1\" autocomplete=\"off\" /> ";
            // line 173
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_selected\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 176
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 179
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 181
        echo ($context["help_show_selected"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-price\">";
        // line 186
        echo ($context["entry_show_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 189
        if (($context["show_price"] ?? null)) {
            // line 190
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_price\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 191
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_price\" value=\"0\" autocomplete=\"off\" /> ";
            // line 194
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 197
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_price\" value=\"1\" autocomplete=\"off\" /> ";
            // line 198
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_price\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 201
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 204
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 206
        echo ($context["help_show_price"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-counter\">";
        // line 211
        echo ($context["entry_show_counter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 214
        if (($context["show_counter"] ?? null)) {
            // line 215
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_counter\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 216
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_counter\" value=\"0\" autocomplete=\"off\" /> ";
            // line 219
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 222
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"show_counter\" value=\"1\" autocomplete=\"off\" /> ";
            // line 223
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"show_counter\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 226
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 229
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 231
        echo ($context["help_show_counter"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-manufacturer\">";
        // line 236
        echo ($context["entry_manufacturer"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 239
        if (($context["manufacturer"] ?? null)) {
            // line 240
            echo "                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#manufacturer-type').collapse('show')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 241
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\" onclick=\"\$('#manufacturer-type').collapse('hide')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"0\" autocomplete=\"off\" /> ";
            // line 244
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 247
            echo "                      <label class=\"btn btn-default\" onclick=\"\$('#manufacturer-type').collapse('show')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"1\" autocomplete=\"off\" /> ";
            // line 248
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#manufacturer-type').collapse('hide')\">
                        <input type=\"radio\" name=\"manufacturer\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 251
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 254
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 256
        echo ($context["help_manufacturer"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"collapse\" id=\"manufacturer-type\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-manufacturer-type\">";
        // line 262
        echo ($context["entry_type"] ?? null);
        echo "</label>
                    <div class=\"col-sm-5\">
                      <select name=\"manufacturer_type\" id=\"input-manufacturer-type\" class=\"form-control\">
                        ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 266
            echo "                        ";
            if (($context["type"] == ($context["manufacturer_type"] ?? null))) {
                // line 267
                echo "                        <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                        ";
            } else {
                // line 269
                echo "                        <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                        ";
            }
            // line 271
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "                      </select>
                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-stock-status\">";
        // line 278
        echo ($context["entry_stock_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 281
        if (($context["stock_status"] ?? null)) {
            // line 282
            echo "                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#stock-status-method').collapse('show')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 283
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\" onclick=\"\$('#stock-status-method').collapse('hide')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 286
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 289
            echo "                      <label class=\"btn btn-default\" onclick=\"\$('#stock-status-method').collapse('show')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 290
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('#stock-status-method').collapse('hide')\">
                        <input type=\"radio\" name=\"stock_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 293
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 296
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 298
        echo ($context["help_stock_status"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"collapse\" id=\"stock-status-method\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-3 control-label\" for=\"input-stock-status-method\">";
        // line 304
        echo ($context["entry_stock_status_method"] ?? null);
        echo "</label>
                    <div class=\"col-sm-9\">
                      <div class=\"btn-group\" data-toggle=\"buttons\">
                        ";
        // line 307
        if ((($context["stock_status_method"] ?? null) == "quantity")) {
            // line 308
            echo "                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-quantity').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"quantity\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 309
            echo ($context["text_stock_by_quantity"] ?? null);
            echo "
                        </label>
                        <label class=\"btn btn-default\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-id').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"stock_status_id\" autocomplete=\"off\" /> ";
            // line 312
            echo ($context["text_stock_by_status_id"] ?? null);
            echo "
                        </label>
                        ";
        } else {
            // line 315
            echo "                        <label class=\"btn btn-default\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-quantity').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"quantity\" autocomplete=\"off\" /> ";
            // line 316
            echo ($context["text_stock_by_quantity"] ?? null);
            echo "
                        </label>
                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('.collapse-group-1').collapse('hide').filter('#stock-status-id').collapse('show')\">
                          <input type=\"radio\" name=\"stock_status_method\" value=\"stock_status_id\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 319
            echo ($context["text_stock_by_status_id"] ?? null);
            echo "
                        </label>
                        ";
        }
        // line 322
        echo "                      </div>
                    </div>
                  </div>

                  <div class=\"collapse collapse-group-1\" id=\"stock-status-id\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\" for=\"input-stocks-tatus-type\">";
        // line 328
        echo ($context["entry_type"] ?? null);
        echo "</label>
                      <div class=\"col-sm-5\">
                        <select name=\"stock_status_type\" id=\"input-stocks-tatus-type\" class=\"form-control\">
                          ";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 332
            echo "                          ";
            if (($context["type"] == ($context["stock_status_type"] ?? null))) {
                // line 333
                echo "                          <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                          ";
            } else {
                // line 335
                echo "                          <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                          ";
            }
            // line 337
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "                        </select>
                      </div>
                    </div>
                  </div>

                  <div class=\"collapse collapse-group-1\" id=\"stock-status-quantity\">
                    <div class=\"form-group\">
                      <label class=\"col-sm-3 control-label\" for=\"input-stock-out-value\">";
        // line 345
        echo ($context["entry_stock_out_value"] ?? null);
        echo "</label>
                      <div class=\"col-sm-9\">
                        <div class=\"btn-group\" data-toggle=\"buttons\">
                          ";
        // line 348
        if (($context["stock_out_value"] ?? null)) {
            // line 349
            echo "                          <label class=\"btn btn-default active\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 350
            echo ($context["text_enabled"] ?? null);
            echo "
                          </label>
                          <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"0\" autocomplete=\"off\" /> ";
            // line 353
            echo ($context["text_disabled"] ?? null);
            echo "
                          </label>
                          ";
        } else {
            // line 356
            echo "                          <label class=\"btn btn-default\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"1\" autocomplete=\"off\" /> ";
            // line 357
            echo ($context["text_enabled"] ?? null);
            echo "
                          </label>
                          <label class=\"btn btn-default active\">
                            <input type=\"radio\" name=\"stock_out_value\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 360
            echo ($context["text_disabled"] ?? null);
            echo "
                          </label>
                          ";
        }
        // line 363
        echo "                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  \t\t        </div>
  \t\t        <div id=\"tab-price-filtering\" class=\"tab-pane\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-manual-price\">";
        // line 371
        echo ($context["entry_manual_price"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 374
        if (($context["manual_price"] ?? null)) {
            // line 375
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"manual_price\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 376
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"manual_price\" value=\"0\" autocomplete=\"off\" /> ";
            // line 379
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 382
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"manual_price\" value=\"1\" autocomplete=\"off\" /> ";
            // line 383
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"manual_price\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 386
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 389
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 391
        echo ($context["help_manual_price"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-consider-discount\">";
        // line 396
        echo ($context["entry_consider_discount"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 399
        if (($context["consider_discount"] ?? null)) {
            // line 400
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 401
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"0\" autocomplete=\"off\" /> ";
            // line 404
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 407
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"1\" autocomplete=\"off\" /> ";
            // line 408
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_discount\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 411
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 414
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 415
        echo ($context["help_consider_discount"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-consider-special\">";
        // line 420
        echo ($context["entry_consider_special"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 423
        if (($context["consider_special"] ?? null)) {
            // line 424
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_special\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 425
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_special\" value=\"0\" autocomplete=\"off\" /> ";
            // line 428
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 431
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_special\" value=\"1\" autocomplete=\"off\" /> ";
            // line 432
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_special\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 435
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 438
        echo "                    </div>

                    <p class=\"help-block\">";
        // line 440
        echo ($context["help_consider_special"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-consider-option\">";
        // line 445
        echo ($context["entry_consider_option"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 448
        if (($context["consider_option"] ?? null)) {
            // line 449
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_option\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 450
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_option\" value=\"0\" autocomplete=\"off\" /> ";
            // line 453
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 456
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"consider_option\" value=\"1\" autocomplete=\"off\" /> ";
            // line 457
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"consider_option\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 460
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 463
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 464
        echo ($context["help_consider_option"] ?? null);
        echo "</p>
                  </div>
                </div>
  \t\t        </div>

  \t\t        <div id=\"tab-other\" class=\"tab-pane\">
                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-options-limit\">";
        // line 471
        echo ($context["entry_show_first_limit"] ?? null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"show_options_limit\" min=\"0\" value=\"";
        // line 474
        echo ($context["show_options_limit"] ?? null);
        echo "\" class=\"form-control\" id=\"input-show-options-limit\" />
                      <span class=\"input-group-addon\">";
        // line 475
        echo ($context["text_options"] ?? null);
        echo "</span>
                    </div><!-- /.input-group -->
                    <p class=\"help-block\">";
        // line 477
        echo ($context["help_show_options_limit"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-show-values-limit\">";
        // line 482
        echo ($context["entry_show_first_limit"] ?? null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"show_values_limit\" min=\"0\" value=\"";
        // line 485
        echo ($context["show_values_limit"] ?? null);
        echo "\" class=\"form-control\" id=\"input-show-values-limit\" />
                      <span class=\"input-group-addon\">";
        // line 486
        echo ($context["text_values"] ?? null);
        echo "</span>
                    </div><!-- /.input-group -->
                    <p class=\"help-block\">";
        // line 488
        echo ($context["help_show_values_limit"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-hide-empty-values\">";
        // line 493
        echo ($context["entry_hide_empty_values"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 496
        if (($context["hide_empty_values"] ?? null)) {
            // line 497
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 498
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"0\" autocomplete=\"off\" /> ";
            // line 501
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 504
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"1\" autocomplete=\"off\" /> ";
            // line 505
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"hide_empty_values\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 508
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 511
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 512
        echo ($context["help_hide_empty_values"] ?? null);
        echo "</p>
                  </div>
                </div>
  \t\t        </div>

  \t\t        <div id=\"tab-copy\" class=\"tab-pane\">
                <h4>";
        // line 518
        echo ($context["nav_copy_filter"] ?? null);
        echo "</h4>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-type\">";
        // line 521
        echo ($context["entry_copy_type"] ?? null);
        echo "</label>
                  <div class=\"col-sm-5\">
                    <select name=\"copy_type\" id=\"input-copy-type\" class=\"form-control\">
                      ";
        // line 524
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 525
            echo "                      ";
            if (($context["type"] == ($context["copy_type"] ?? null))) {
                // line 526
                echo "                      <option value=\"";
                echo $context["type"];
                echo "\" selected=\"selected\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                      ";
            } else {
                // line 528
                echo "                      <option value=\"";
                echo $context["type"];
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["type"]);
                echo "</option>
                      ";
            }
            // line 530
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 531
        echo "                    </select>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-truncate\">";
        // line 536
        echo ($context["entry_copy_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 539
        if ((($context["copy_status"] ?? null) > 0)) {
            // line 540
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 541
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 544
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"-1\" autocomplete=\"off\" /> ";
            // line 547
            echo ($context["text_auto"] ?? null);
            echo "
                      </label>
                      ";
        } elseif ((        // line 549
($context["copy_status"] ?? null) < 0)) {
            // line 550
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 551
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"0\" autocomplete=\"off\" /> ";
            // line 554
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_status\" value=\"-1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 557
            echo ($context["text_auto"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 560
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"1\" autocomplete=\"off\" /> ";
            // line 561
            echo ($context["text_enabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 564
            echo ($context["text_disabled"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_status\" value=\"-1\" autocomplete=\"off\" /> ";
            // line 567
            echo ($context["text_auto"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 570
        echo "                    </div>
                    <p class=\"help-block\">";
        // line 571
        echo ($context["help_copy_status_auto"] ?? null);
        echo "</p>
                  </div>
                </div>

                <h4>";
        // line 575
        echo ($context["nav_copy_source"] ?? null);
        echo "</h4>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-attribute\">";
        // line 578
        echo ($context["entry_copy_attribute"] ?? null);
        echo "</label>
                  <div class=\"col-sm-4\">
                    <div class=\"input-group\">
                      <span class=\"input-group-btn\" data-toggle=\"buttons\">
                        ";
        // line 582
        if (($context["copy_attribute"] ?? null)) {
            // line 583
            echo "                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', false)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 584
            echo ($context["text_yes"] ?? null);
            echo "
                        </label>
                        <label class=\"btn btn-default\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', true)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"0\" autocomplete=\"off\" /> ";
            // line 587
            echo ($context["text_no"] ?? null);
            echo "
                        </label>
                        ";
        } else {
            // line 590
            echo "                        <label class=\"btn btn-default\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', false)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"1\" autocomplete=\"off\" /> ";
            // line 591
            echo ($context["text_yes"] ?? null);
            echo "
                        </label>
                        <label class=\"btn btn-default active\" data-toggle=\"trigger\" onclick=\"\$('[name=\\'attribute_separator\\']').prop('disabled', true)\">
                          <input type=\"radio\" name=\"copy_attribute\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 594
            echo ($context["text_no"] ?? null);
            echo "
                        </label>
                        ";
        }
        // line 597
        echo "                      </span>
                      <input name=\"attribute_separator\" type=\"text\" class=\"form-control\" placeholder=\"";
        // line 598
        echo ($context["entry_copy_attribute_separator"] ?? null);
        echo "\" value=\"";
        echo ($context["copy_attribute_separator"] ?? null);
        echo "\" disabled=\"disabled\" />
                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-filter\">";
        // line 604
        echo ($context["entry_copy_filter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 607
        if (($context["copy_filter"] ?? null)) {
            // line 608
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 609
            echo ($context["text_yes"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"0\" autocomplete=\"off\" /> ";
            // line 612
            echo ($context["text_no"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 615
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"1\" autocomplete=\"off\" /> ";
            // line 616
            echo ($context["text_yes"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_filter\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 619
            echo ($context["text_no"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 622
        echo "                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-copy-option\">";
        // line 627
        echo ($context["entry_copy_option"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      ";
        // line 630
        if (($context["copy_option"] ?? null)) {
            // line 631
            echo "                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_option\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 632
            echo ($context["text_yes"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_option\" value=\"0\" autocomplete=\"off\" /> ";
            // line 635
            echo ($context["text_no"] ?? null);
            echo "
                      </label>
                      ";
        } else {
            // line 638
            echo "                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_option\" value=\"1\" autocomplete=\"off\" /> ";
            // line 639
            echo ($context["text_yes"] ?? null);
            echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_option\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
            // line 642
            echo ($context["text_no"] ?? null);
            echo "
                      </label>
                      ";
        }
        // line 645
        echo "                    </div>
                  </div>
                </div>

                <h4>";
        // line 649
        echo ($context["nav_copy_other"] ?? null);
        echo "</h4>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
        // line 652
        echo ($context["entry_copy_clear_filter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_truncate\" value=\"1\" autocomplete=\"off\" /> ";
        // line 656
        echo ($context["text_yes"] ?? null);
        echo "
                      </label>
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_truncate\" value=\"0\" autocomplete=\"off\" checked=\"checked\" /> ";
        // line 659
        echo ($context["text_no"] ?? null);
        echo "
                      </label>
                    </div>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\">";
        // line 666
        echo ($context["entry_copy_category"] ?? null);
        echo "</label>
                  <div class=\"col-sm-9\">
                    <div class=\"btn-group\" data-toggle=\"buttons\">
                      <label class=\"btn btn-default active\">
                        <input type=\"radio\" name=\"copy_category\" value=\"1\" autocomplete=\"off\" checked=\"checked\" /> ";
        // line 670
        echo ($context["text_yes"] ?? null);
        echo "
                      </label>
                      <label class=\"btn btn-default\">
                        <input type=\"radio\" name=\"copy_category\" value=\"0\" autocomplete=\"off\" /> ";
        // line 673
        echo ($context["text_no"] ?? null);
        echo "
                      </label>
                    </div>
                    <p class=\"help-block\">";
        // line 676
        echo ($context["help_copy_category"] ?? null);
        echo "</p>
                  </div>
                </div>

                <div class=\"form-group\">
                  <div class=\"col-sm-offset-3 col-sm-9\">
                    <button type=\"button\" class=\"btn btn-lg btn-primary\" id=\"button-copy-filter\" data-loading-text=\"";
        // line 682
        echo ($context["text_loading"] ?? null);
        echo "\" data-complete-text=\"";
        echo ($context["text_complete"] ?? null);
        echo "\"><i class=\"fa fa-copy\"></i> ";
        echo ($context["button_copy"] ?? null);
        echo "</button>
                  </div>
                </div>
  \t\t        </div>
            </div>
          </div>
        </form>
\t\t\t</div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$(function() {
  \$('[data-toggle=\"trigger\"][onclick]').trigger('click');

  var timer;

  \$('#button-copy-filter').on('click', function(e) {
    clearTimeout(timer);

    \$('#tab-copy > .alert').remove();

    var \$button = \$(this).button('loading');

    \$.post('index.php?route=extension/module/ocfilter/copyFilters&user_token=";
        // line 705
        echo ($context["user_token"] ?? null);
        echo "', \$('[name^=\"copy_\"], [name=\"attribute_separator\"]').serialize(), function(response) {
      if (response['error']) {
        \$button.button('reset');

        \$('#tab-copy').prepend('<div class=\"alert alert-danger\" role=\"alert\">' + response['error'] + '</div>');
      }

      if (response['success']) {
        \$button.button('complete');

        \$('#tab-copy').prepend('<div class=\"alert alert-success\" role=\"alert\">' + response['success'] + '</div>');

        timer = setTimeout(function() {
          \$button.button('reset');
        }, 10 * 1000);
      }
    }, 'json');
  });
});
//--></script>
</div>
";
        // line 726
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocfilter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1495 => 726,  1471 => 705,  1441 => 682,  1432 => 676,  1426 => 673,  1420 => 670,  1413 => 666,  1403 => 659,  1397 => 656,  1390 => 652,  1384 => 649,  1378 => 645,  1372 => 642,  1366 => 639,  1363 => 638,  1357 => 635,  1351 => 632,  1348 => 631,  1346 => 630,  1340 => 627,  1333 => 622,  1327 => 619,  1321 => 616,  1318 => 615,  1312 => 612,  1306 => 609,  1303 => 608,  1301 => 607,  1295 => 604,  1284 => 598,  1281 => 597,  1275 => 594,  1269 => 591,  1266 => 590,  1260 => 587,  1254 => 584,  1251 => 583,  1249 => 582,  1242 => 578,  1236 => 575,  1229 => 571,  1226 => 570,  1220 => 567,  1214 => 564,  1208 => 561,  1205 => 560,  1199 => 557,  1193 => 554,  1187 => 551,  1184 => 550,  1182 => 549,  1177 => 547,  1171 => 544,  1165 => 541,  1162 => 540,  1160 => 539,  1154 => 536,  1147 => 531,  1141 => 530,  1133 => 528,  1125 => 526,  1122 => 525,  1118 => 524,  1112 => 521,  1106 => 518,  1097 => 512,  1094 => 511,  1088 => 508,  1082 => 505,  1079 => 504,  1073 => 501,  1067 => 498,  1064 => 497,  1062 => 496,  1056 => 493,  1048 => 488,  1043 => 486,  1039 => 485,  1033 => 482,  1025 => 477,  1020 => 475,  1016 => 474,  1010 => 471,  1000 => 464,  997 => 463,  991 => 460,  985 => 457,  982 => 456,  976 => 453,  970 => 450,  967 => 449,  965 => 448,  959 => 445,  951 => 440,  947 => 438,  941 => 435,  935 => 432,  932 => 431,  926 => 428,  920 => 425,  917 => 424,  915 => 423,  909 => 420,  901 => 415,  898 => 414,  892 => 411,  886 => 408,  883 => 407,  877 => 404,  871 => 401,  868 => 400,  866 => 399,  860 => 396,  852 => 391,  848 => 389,  842 => 386,  836 => 383,  833 => 382,  827 => 379,  821 => 376,  818 => 375,  816 => 374,  810 => 371,  800 => 363,  794 => 360,  788 => 357,  785 => 356,  779 => 353,  773 => 350,  770 => 349,  768 => 348,  762 => 345,  753 => 338,  747 => 337,  739 => 335,  731 => 333,  728 => 332,  724 => 331,  718 => 328,  710 => 322,  704 => 319,  698 => 316,  695 => 315,  689 => 312,  683 => 309,  680 => 308,  678 => 307,  672 => 304,  663 => 298,  659 => 296,  653 => 293,  647 => 290,  644 => 289,  638 => 286,  632 => 283,  629 => 282,  627 => 281,  621 => 278,  613 => 272,  607 => 271,  599 => 269,  591 => 267,  588 => 266,  584 => 265,  578 => 262,  569 => 256,  565 => 254,  559 => 251,  553 => 248,  550 => 247,  544 => 244,  538 => 241,  535 => 240,  533 => 239,  527 => 236,  519 => 231,  515 => 229,  509 => 226,  503 => 223,  500 => 222,  494 => 219,  488 => 216,  485 => 215,  483 => 214,  477 => 211,  469 => 206,  465 => 204,  459 => 201,  453 => 198,  450 => 197,  444 => 194,  438 => 191,  435 => 190,  433 => 189,  427 => 186,  419 => 181,  415 => 179,  409 => 176,  403 => 173,  400 => 172,  394 => 169,  388 => 166,  385 => 165,  383 => 164,  377 => 161,  369 => 156,  365 => 154,  359 => 151,  353 => 148,  350 => 147,  344 => 144,  338 => 141,  335 => 140,  333 => 139,  327 => 136,  316 => 128,  311 => 126,  303 => 120,  297 => 117,  291 => 114,  288 => 113,  282 => 110,  276 => 107,  273 => 106,  271 => 105,  265 => 102,  257 => 97,  253 => 95,  247 => 92,  241 => 89,  238 => 88,  232 => 85,  226 => 82,  223 => 81,  221 => 80,  215 => 77,  207 => 72,  203 => 70,  197 => 67,  191 => 64,  188 => 63,  182 => 60,  176 => 57,  173 => 56,  171 => 55,  165 => 52,  156 => 46,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  131 => 36,  124 => 34,  118 => 33,  113 => 30,  105 => 26,  102 => 25,  94 => 21,  92 => 20,  85 => 15,  74 => 13,  70 => 12,  65 => 10,  58 => 8,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocfilter.twig", "");
    }
}
