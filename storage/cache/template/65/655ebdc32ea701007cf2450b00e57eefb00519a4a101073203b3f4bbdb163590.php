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

/* extension/module/admin_quick_edit.twig */
class __TwigTemplate_7786a5b284d2afeb912dcd16be803480a6e6ac19ccf715f776b0884da4d3fbe7 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo ($context["header"] ?? null);
        echo "
<div class=\"modal fade\" id=\"legal_text\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"legal_text_label\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\" id=\"legal_text_label\">";
        // line 19
        echo ($context["text_terms"] ?? null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default cancel\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 24
        echo ($context["button_close"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 29
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t";
        // line 34
        if (($context["update_pending"] ?? null)) {
            echo "<button type=\"button\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
            echo ($context["button_upgrade"] ?? null);
            echo "\" class=\"btn btn-info\" id=\"btn-upgrade\" data-url=\"";
            echo ($context["upgrade"] ?? null);
            echo "\" data-form=\"#sForm\" data-context=\"#content\" data-overlay=\"#page-overlay\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i> <span class='visible-lg-inline'>";
            echo ($context["text_upgrading"] ?? null);
            echo "</span>\"><i class=\"fa fa-arrow-circle-up\"></i> <span class=\"visible-lg-inline\">";
            echo ($context["button_upgrade"] ?? null);
            echo "</span></button>";
        }
        // line 35
        echo "\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success\" id=\"btn-apply\" data-url=\"";
        echo ($context["save"] ?? null);
        echo "\" data-form=\"#sForm\" data-context=\"#content\" data-vm=\"ExtVM\" data-overlay=\"#page-overlay\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\"";
        if (($context["update_pending"] ?? null)) {
            echo " disabled";
        }
        echo "><i class=\"fa fa-check\"></i></button>
\t\t\t\t<button type=\"submit\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 36
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\" id=\"btn-save\" data-url=\"";
        echo ($context["save"] ?? null);
        echo "\" data-form=\"#sForm\" data-context=\"#content\" data-overlay=\"#page-overlay\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\"";
        if (($context["update_pending"] ?? null)) {
            echo " disabled";
        }
        echo "><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 37
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\" id=\"btn-cancel\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1><i class=\"fa fa-pencil fa-fw ext-icon\"></i> ";
        // line 39
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 42
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 42);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 42);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"alerts\">
\t\t<div class=\"container-fluid\" id=\"alerts\">
\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["_alerts"]) {
            // line 51
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["_alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 52
                echo "\t\t\t\t\t";
                if ($context["alert"]) {
                    // line 53
                    echo "\t\t\t<div class=\"alert alert-";
                    if (($context["type"] == "error")) {
                        echo "danger";
                    } else {
                        echo $context["type"];
                    }
                    echo " fade in\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<i class=\"fa ";
                    // line 55
                    echo twig_call_macro($macros["_self"], "macro_alert_icon", [$context["type"]], 55, $context, $this->getSourceContext());
                    echo "\"></i>";
                    echo $context["alert"];
                    echo "
\t\t\t</div>
\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['_alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t</div>
\t</div>

\t<div class=\"container-fluid bull5i-content bull5i-container\">
\t\t<div id=\"page-overlay\" class=\"bull5i-overlay fade in\">
\t\t\t<div class=\"page-overlay-progress\"><i class=\"fa fa-refresh fa-spin fa-5x text-muted\"></i></div>
\t\t</div>

\t\t<ul class=\"nav nav-tabs bull5i-nav-tabs\">
\t\t\t<li class=\"active\"><a href=\"#settings\" data-toggle=\"tab\"><!-- ko if: settings_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !settings_errors()}\"></i> <!-- /ko -->";
        // line 69
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
\t\t</ul>

\t\t<form action=\"";
        // line 72
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"sForm\" class=\"form-horizontal\" role=\"form\">
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" id=\"settings\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#settings-navbar-collapse\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
        // line 79
        echo ($context["text_toggle_navigation"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-cog fa-fw\"></i> ";
        // line 83
        echo ($context["tab_settings"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"settings-navbar-collapse\">
\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#general-settings\" data-toggle=\"tab\"><!-- ko if: general_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !general_errors()}\"></i> <!-- /ko -->";
        // line 87
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#catalog-settings\" data-toggle=\"tab\"><!-- ko if: catalog_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !catalog_errors()}\"></i> <!-- /ko -->";
        // line 88
        echo ($context["tab_catalog"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#design-settings\" data-toggle=\"tab\"><!-- ko if: design_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !design_errors()}\"></i> <!-- /ko -->";
        // line 89
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#sale-settings\" data-toggle=\"tab\"><!-- ko if: sale_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !sale_errors()}\"></i> <!-- /ko -->";
        // line 90
        echo ($context["tab_sale"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#customer-settings\" data-toggle=\"tab\"><!-- ko if: customer_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !customer_errors()}\"></i> <!-- /ko -->";
        // line 91
        echo ($context["tab_customer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#marketing-settings\" data-toggle=\"tab\"><!-- ko if: marketing_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !marketing_errors()}\"></i> <!-- /ko -->";
        // line 92
        echo ($context["tab_marketing"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"general-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_status\">";
        // line 103
        echo ($context["entry_extension_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_status\" id=\"module_admin_quick_edit_status\" data-bind=\"value: status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 106
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 107
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_admin_quick_edit_installed\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_admin_quick_edit_installed_version\" value=\"";
        // line 110
        echo ($context["installed_version"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_override_menu_entry0\">";
        // line 114
        echo ($context["entry_override_menu_entry"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_override_menu_entry\" id=\"module_admin_quick_edit_override_menu_entry1\" value=\"1\" data-bind=\"checked: override_menu_entry\"> ";
        // line 117
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_override_menu_entry\" id=\"module_admin_quick_edit_override_menu_entry0\" value=\"0\" data-bind=\"checked: override_menu_entry\"> ";
        // line 120
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 124
        echo ($context["help_override_menu_entry"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_match_anywhere0\">";
        // line 128
        echo ($context["entry_match_anywhere"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_match_anywhere\" id=\"module_admin_quick_edit_match_anywhere1\" value=\"1\" data-bind=\"checked: match_anywhere\"> ";
        // line 131
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_match_anywhere\" id=\"module_admin_quick_edit_match_anywhere0\" value=\"0\" data-bind=\"checked: match_anywhere\"> ";
        // line 134
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 138
        echo ($context["help_match_anywhere"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_alternate_row_colour0\">";
        // line 142
        echo ($context["entry_alternate_row_colour"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_alternate_row_colour\" id=\"module_admin_quick_edit_alternate_row_colour1\" value=\"1\" data-bind=\"checked: alternate_row_colour\"> ";
        // line 145
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_alternate_row_colour\" id=\"module_admin_quick_edit_alternate_row_colour0\" value=\"0\" data-bind=\"checked: alternate_row_colour\"> ";
        // line 148
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 152
        echo ($context["help_alternate_row_colour"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_row_hover_highlighting0\">";
        // line 156
        echo ($context["entry_row_hover_highlighting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_row_hover_highlighting\" id=\"module_admin_quick_edit_row_hover_highlighting1\" value=\"1\" data-bind=\"checked: row_hover_highlighting\"> ";
        // line 159
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_row_hover_highlighting\" id=\"module_admin_quick_edit_row_hover_highlighting0\" value=\"0\" data-bind=\"checked: row_hover_highlighting\"> ";
        // line 162
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 166
        echo ($context["help_row_hover_highlighting"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_highlight_status0\">";
        // line 170
        echo ($context["entry_highlight_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_status\" id=\"module_admin_quick_edit_highlight_status1\" value=\"1\" data-bind=\"checked: highlight_status\"> ";
        // line 173
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_status\" id=\"module_admin_quick_edit_highlight_status0\" value=\"0\" data-bind=\"checked: highlight_status\"> ";
        // line 176
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 180
        echo ($context["help_highlight_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_highlight_yes_no0\">";
        // line 184
        echo ($context["entry_highlight_yes_no"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_yes_no\" id=\"module_admin_quick_edit_highlight_yes_no1\" value=\"1\" data-bind=\"checked: highlight_yes_no\"> ";
        // line 187
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_yes_no\" id=\"module_admin_quick_edit_highlight_yes_no0\" value=\"0\" data-bind=\"checked: highlight_yes_no\"> ";
        // line 190
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 194
        echo ($context["help_highlight_yes_no"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_highlight_actions0\">";
        // line 198
        echo ($context["entry_highlight_actions"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_actions\" id=\"module_admin_quick_edit_highlight_actions1\" value=\"1\" data-bind=\"checked: highlight_actions\"> ";
        // line 201
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_actions\" id=\"module_admin_quick_edit_highlight_actions0\" value=\"0\" data-bind=\"checked: highlight_actions\"> ";
        // line 204
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 208
        echo ($context["help_highlight_actions"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_interval_filter0\">";
        // line 212
        echo ($context["entry_interval_filter"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_interval_filter\" id=\"module_admin_quick_edit_interval_filter1\" value=\"1\" data-bind=\"checked: interval_filter\"> ";
        // line 215
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_interval_filter\" id=\"module_admin_quick_edit_interval_filter0\" value=\"0\" data-bind=\"checked: interval_filter\"> ";
        // line 218
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 222
        echo ($context["help_interval_filter"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_batch_edit0\">";
        // line 226
        echo ($context["entry_batch_edit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_batch_edit\" id=\"module_admin_quick_edit_batch_edit1\" value=\"1\" data-bind=\"checked: batch_edit\"> ";
        // line 229
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_batch_edit\" id=\"module_admin_quick_edit_batch_edit0\" value=\"0\" data-bind=\"checked: batch_edit\"> ";
        // line 232
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 236
        echo ($context["help_batch_edit"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_quick_edit_on\">";
        // line 240
        echo ($context["entry_quick_edit_on"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_quick_edit_on\" id=\"module_admin_quick_edit_quick_edit_on\" data-bind=\"value: quick_edit_on\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"click\">";
        // line 243
        echo ($context["text_single_click"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"dblclick\">";
        // line 244
        echo ($context["text_double_click"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_price_relative_to\">";
        // line 249
        echo ($context["entry_price_relative_to"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_price_relative_to\" id=\"module_admin_quick_edit_price_relative_to\" data-bind=\"value: module_admin_quick_edit_price_relative_to\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"previous\">";
        // line 252
        echo ($context["text_previous_value"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"product\">";
        // line 253
        echo ($context["text_product_price"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 257
        echo ($context["help_price_relative_to"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_single_language_editing0\">";
        // line 261
        echo ($context["entry_single_language_editing"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_single_language_editing\" id=\"module_admin_quick_edit_single_language_editing1\" value=\"1\" data-bind=\"checked: single_language_editing\"> ";
        // line 264
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_single_language_editing\" id=\"module_admin_quick_edit_single_language_editing0\" value=\"0\" data-bind=\"checked: single_language_editing\"> ";
        // line 267
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_list_view_image_width\" data-bind=\"css: {'has-error': list_view_image_width.hasError || list_view_image_height.hasError}\">";
        // line 272
        echo ($context["entry_list_view_image_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-3 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control text-right\" name=\"module_admin_quick_edit_list_view_image_width\" id=\"module_admin_quick_edit_list_view_image_width\" data-bind=\"value: list_view_image_width, css: {'has-error': list_view_image_width.hasError}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"module_admin_quick_edit_list_view_image_height\" id=\"module_admin_quick_edit_list_view_image_height\" data-bind=\"value: list_view_image_height, css: {'has-error': list_view_image_height.hasError}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 error-container has-error\" data-bind=\"visible: list_view_image_width.hasError && list_view_image_width.errorMsg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block error-text\" data-bind=\"text: list_view_image_width.errorMsg\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 error-container has-error\" data-bind=\"visible: list_view_image_height.hasError && list_view_image_height.errorMsg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block error-text\" data-bind=\"text: list_view_image_height.errorMsg\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"catalog-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-catalog-categories\" role=\"tab\" data-toggle=\"tab\">";
        // line 295
        echo ($context["tab_categories"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-products\" role=\"tab\" data-toggle=\"tab\">";
        // line 296
        echo ($context["tab_products"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-recurrings\" role=\"tab\" data-toggle=\"tab\">";
        // line 297
        echo ($context["tab_recurrings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-filters\" role=\"tab\" data-toggle=\"tab\">";
        // line 298
        echo ($context["tab_filters"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-attributes\" role=\"tab\" data-toggle=\"tab\">";
        // line 299
        echo ($context["tab_attributes"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-attribute-groups\" role=\"tab\" data-toggle=\"tab\">";
        // line 300
        echo ($context["tab_attribute_groups"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-options\" role=\"tab\" data-toggle=\"tab\">";
        // line 301
        echo ($context["tab_options"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-manufacturers\" role=\"tab\" data-toggle=\"tab\">";
        // line 302
        echo ($context["tab_manufacturers"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-downloads\" role=\"tab\" data-toggle=\"tab\">";
        // line 303
        echo ($context["tab_downloads"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-reviews\" role=\"tab\" data-toggle=\"tab\">";
        // line 304
        echo ($context["tab_reviews"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-information\" role=\"tab\" data-toggle=\"tab\">";
        // line 305
        echo ($context["tab_information"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"tab-catalog-categories\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_categories_status\">";
        // line 311
        echo ($context["entry_catalog_categories_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_categories_status\" id=\"module_admin_quick_edit_catalog_categories_status\" data-bind=\"value: catalog_categories_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 314
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 315
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_categories_default_sort\">";
        // line 320
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_categories_default_sort\" id=\"module_admin_quick_edit_catalog_categories_default_sort\" data-bind=\"value: catalog_categories_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 323
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_categories", [], "any", false, false, false, 323));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 324
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 324);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 324);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_categories_default_order\" id=\"module_admin_quick_edit_catalog_categories_default_order\" data-bind=\"value: catalog_categories_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 330
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 331
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 336
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 342
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 343
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 344
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_categories -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_categories][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_categories][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_categories][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-products\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_products_status\">";
        // line 365
        echo ($context["entry_catalog_products_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_products_status\" id=\"module_admin_quick_edit_catalog_products_status\" data-bind=\"value: catalog_products_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 368
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 369
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_products_default_sort\">";
        // line 374
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_products_default_sort\" id=\"module_admin_quick_edit_catalog_products_default_sort\" data-bind=\"value: catalog_products_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_products", [], "any", false, false, false, 377));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 378
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 378);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 378);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_products_default_order\" id=\"module_admin_quick_edit_catalog_products_default_order\" data-bind=\"value: catalog_products_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 384
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 385
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 390
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 396
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 397
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 398
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_products -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_products][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_products][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_products][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 415
        echo ($context["help_actions"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_actions"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 421
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 422
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_products_actions -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_products_actions][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_products_actions][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_products_filter_sub_category0\">";
        // line 438
        echo ($context["entry_catalog_products_filter_sub_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_catalog_products_filter_sub_category\" id=\"module_admin_quick_edit_catalog_products_filter_sub_category1\" value=\"1\" data-bind=\"checked: catalog_products_filter_sub_category\"> ";
        // line 441
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_catalog_products_filter_sub_category\" id=\"module_admin_quick_edit_catalog_products_filter_sub_category0\" value=\"0\" data-bind=\"checked: catalog_products_filter_sub_category\"> ";
        // line 444
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 448
        echo ($context["help_filter_sub_category"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-recurrings\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_recurrings_status\">";
        // line 456
        echo ($context["entry_catalog_recurrings_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_recurrings_status\" id=\"module_admin_quick_edit_catalog_recurrings_status\" data-bind=\"value: catalog_recurrings_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 459
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 460
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_recurrings_default_sort\">";
        // line 465
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_recurrings_default_sort\" id=\"module_admin_quick_edit_catalog_recurrings_default_sort\" data-bind=\"value: catalog_recurrings_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 468
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_recurrings", [], "any", false, false, false, 468));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 469
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 469);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 469);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 471
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_recurrings_default_order\" id=\"module_admin_quick_edit_catalog_recurrings_default_order\" data-bind=\"value: catalog_recurrings_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 475
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 476
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 481
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 487
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 488
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 489
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_recurrings -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_recurrings][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_recurrings][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_recurrings][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-filters\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_filters_status\">";
        // line 510
        echo ($context["entry_catalog_filters_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_filters_status\" id=\"module_admin_quick_edit_catalog_filters_status\" data-bind=\"value: catalog_filters_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 513
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 514
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_filters_default_sort\">";
        // line 519
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_filters_default_sort\" id=\"module_admin_quick_edit_catalog_filters_default_sort\" data-bind=\"value: catalog_filters_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 522
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_filters", [], "any", false, false, false, 522));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 523
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 523);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 523);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 525
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_filters_default_order\" id=\"module_admin_quick_edit_catalog_filters_default_order\" data-bind=\"value: catalog_filters_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 529
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 530
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 535
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 541
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 542
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 543
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_filters -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_filters][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_filters][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_filters][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-attributes\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_attributes_status\">";
        // line 564
        echo ($context["entry_catalog_attributes_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attributes_status\" id=\"module_admin_quick_edit_catalog_attributes_status\" data-bind=\"value: catalog_attributes_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 567
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 568
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_attributes_default_sort\">";
        // line 573
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attributes_default_sort\" id=\"module_admin_quick_edit_catalog_attributes_default_sort\" data-bind=\"value: catalog_attributes_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 576
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_attributes", [], "any", false, false, false, 576));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 577
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 577);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 577);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 579
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attributes_default_order\" id=\"module_admin_quick_edit_catalog_attributes_default_order\" data-bind=\"value: catalog_attributes_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 583
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 584
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 589
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 595
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 596
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 597
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_attributes -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_attributes][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_attributes][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_attributes][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-attribute-groups\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_attribute_groups_status\">";
        // line 618
        echo ($context["entry_catalog_attribute_groups_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attribute_groups_status\" id=\"module_admin_quick_edit_catalog_attribute_groups_status\" data-bind=\"value: catalog_attribute_groups_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 621
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 622
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_attribute_groups_default_sort\">";
        // line 627
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attribute_groups_default_sort\" id=\"module_admin_quick_edit_catalog_attribute_groups_default_sort\" data-bind=\"value: catalog_attribute_groups_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 630
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_attribute_groups", [], "any", false, false, false, 630));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 631
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 631);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 631);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 633
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attribute_groups_default_order\" id=\"module_admin_quick_edit_catalog_attribute_groups_default_order\" data-bind=\"value: catalog_attribute_groups_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 637
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 638
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 643
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 649
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 650
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 651
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_attribute_groups -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_attribute_groups][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_attribute_groups][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_attribute_groups][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-options\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_options_status\">";
        // line 672
        echo ($context["entry_catalog_options_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_options_status\" id=\"module_admin_quick_edit_catalog_options_status\" data-bind=\"value: catalog_options_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 675
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 676
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_options_default_sort\">";
        // line 681
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_options_default_sort\" id=\"module_admin_quick_edit_catalog_options_default_sort\" data-bind=\"value: catalog_options_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 684
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_options", [], "any", false, false, false, 684));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 685
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 685);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 685);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 687
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_options_default_order\" id=\"module_admin_quick_edit_catalog_options_default_order\" data-bind=\"value: catalog_options_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 691
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 692
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 697
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 703
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 704
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 705
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_options -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_options][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_options][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_options][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-manufacturers\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_manufacturers_status\">";
        // line 726
        echo ($context["entry_catalog_manufacturers_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_manufacturers_status\" id=\"module_admin_quick_edit_catalog_manufacturers_status\" data-bind=\"value: catalog_manufacturers_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 729
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 730
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_manufacturers_default_sort\">";
        // line 735
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_manufacturers_default_sort\" id=\"module_admin_quick_edit_catalog_manufacturers_default_sort\" data-bind=\"value: catalog_manufacturers_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 738
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_manufacturers", [], "any", false, false, false, 738));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 739
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 739);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 739);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 741
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_manufacturers_default_order\" id=\"module_admin_quick_edit_catalog_manufacturers_default_order\" data-bind=\"value: catalog_manufacturers_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 745
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 746
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 751
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 757
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 758
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 759
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_manufacturers -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_manufacturers][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_manufacturers][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_manufacturers][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-downloads\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_downloads_status\">";
        // line 780
        echo ($context["entry_catalog_downloads_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_downloads_status\" id=\"module_admin_quick_edit_catalog_downloads_status\" data-bind=\"value: catalog_downloads_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 783
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 784
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_downloads_default_sort\">";
        // line 789
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_downloads_default_sort\" id=\"module_admin_quick_edit_catalog_downloads_default_sort\" data-bind=\"value: catalog_downloads_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 792
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_downloads", [], "any", false, false, false, 792));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 793
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 793);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 793);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 795
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_downloads_default_order\" id=\"module_admin_quick_edit_catalog_downloads_default_order\" data-bind=\"value: catalog_downloads_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 799
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 800
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 805
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 811
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 812
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 813
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_downloads -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_downloads][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_downloads][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_downloads][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-reviews\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_reviews_status\">";
        // line 834
        echo ($context["entry_catalog_reviews_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_reviews_status\" id=\"module_admin_quick_edit_catalog_reviews_status\" data-bind=\"value: catalog_reviews_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 837
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 838
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_reviews_default_sort\">";
        // line 843
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_reviews_default_sort\" id=\"module_admin_quick_edit_catalog_reviews_default_sort\" data-bind=\"value: catalog_reviews_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 846
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_reviews", [], "any", false, false, false, 846));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 847
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 847);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 847);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 849
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_reviews_default_order\" id=\"module_admin_quick_edit_catalog_reviews_default_order\" data-bind=\"value: catalog_reviews_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 853
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 854
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 859
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 865
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 866
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 867
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_reviews -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_reviews][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_reviews][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_reviews][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-information\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_information_status\">";
        // line 888
        echo ($context["entry_catalog_information_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_information_status\" id=\"module_admin_quick_edit_catalog_information_status\" data-bind=\"value: catalog_information_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 891
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 892
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_information_default_sort\">";
        // line 897
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_information_default_sort\" id=\"module_admin_quick_edit_catalog_information_default_sort\" data-bind=\"value: catalog_information_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 900
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_information", [], "any", false, false, false, 900));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 901
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 901);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 901);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 903
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_information_default_order\" id=\"module_admin_quick_edit_catalog_information_default_order\" data-bind=\"value: catalog_information_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 907
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 908
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 913
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 919
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 920
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 921
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_information -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_information][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_information][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_information][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"design-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-design-seo-urls\" role=\"tab\" data-toggle=\"tab\">";
        // line 947
        echo ($context["tab_seo_urls"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"tab-design-seo-urls\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_design_seo_urls_status\">";
        // line 953
        echo ($context["entry_design_seo_urls_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_design_seo_urls_status\" id=\"module_admin_quick_edit_design_seo_urls_status\" data-bind=\"value: design_seo_urls_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 956
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 957
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_design_seo_urls_default_sort\">";
        // line 962
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_design_seo_urls_default_sort\" id=\"module_admin_quick_edit_design_seo_urls_default_sort\" data-bind=\"value: design_seo_urls_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 965
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_design_seo_urls", [], "any", false, false, false, 965));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 966
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 966);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 966);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 968
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_design_seo_urls_default_order\" id=\"module_admin_quick_edit_design_seo_urls_default_order\" data-bind=\"value: design_seo_urls_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 972
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 973
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 978
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 984
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 985
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 986
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: design_seo_urls -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_design_seo_urls][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_design_seo_urls][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_design_seo_urls][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"customer-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-customer-customers\" role=\"tab\" data-toggle=\"tab\">";
        // line 1012
        echo ($context["tab_customers"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"tab-customer-customers\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_customer_customers_status\">";
        // line 1018
        echo ($context["entry_customer_customers_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_customer_customers_status\" id=\"module_admin_quick_edit_customer_customers_status\" data-bind=\"value: customer_customers_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1021
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1022
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_customer_customers_default_sort\">";
        // line 1027
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_customer_customers_default_sort\" id=\"module_admin_quick_edit_customer_customers_default_sort\" data-bind=\"value: customer_customers_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1030
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_customer_customers", [], "any", false, false, false, 1030));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1031
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1031);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1031);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1033
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_customer_customers_default_order\" id=\"module_admin_quick_edit_customer_customers_default_order\" data-bind=\"value: customer_customers_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1037
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1038
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1043
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1049
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1050
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1051
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: customer_customers -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_customer_customers][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_customer_customers][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_customer_customers][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"sale-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-sale-orders\" role=\"tab\" data-toggle=\"tab\">";
        // line 1077
        echo ($context["tab_orders"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-sale-returns\" role=\"tab\" data-toggle=\"tab\">";
        // line 1078
        echo ($context["tab_returns"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-sale-vouchers\" role=\"tab\" data-toggle=\"tab\">";
        // line 1079
        echo ($context["tab_vouchers"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-sale-voucher-themes\" role=\"tab\" data-toggle=\"tab\">";
        // line 1080
        echo ($context["tab_voucher_themes"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"tab-sale-orders\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_orders_status\">";
        // line 1086
        echo ($context["entry_sale_orders_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_orders_status\" id=\"module_admin_quick_edit_sale_orders_status\" data-bind=\"value: sale_orders_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1089
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1090
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1095
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1101
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1102
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: sale_orders -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_sale_orders][' + column +']'}\" type=\"hidden\" class=\"column-index\" /><input data-bind=\"value: 1, attr: {name:'display[module_admin_quick_edit_sale_orders][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_sale_orders][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_orders_notify_customer0\">";
        // line 1118
        echo ($context["entry_notify_customer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_sale_orders_notify_customer\" id=\"module_admin_quick_edit_sale_orders_notify_customer1\" value=\"1\" data-bind=\"checked: sale_orders_notify_customer\"> ";
        // line 1121
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_sale_orders_notify_customer\" id=\"module_admin_quick_edit_sale_orders_notify_customer0\" value=\"0\" data-bind=\"checked: sale_orders_notify_customer\"> ";
        // line 1124
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-sale-returns\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_returns_status\">";
        // line 1133
        echo ($context["entry_sale_returns_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_returns_status\" id=\"module_admin_quick_edit_sale_returns_status\" data-bind=\"value: sale_returns_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1136
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1137
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_returns_default_sort\">";
        // line 1142
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_returns_default_sort\" id=\"module_admin_quick_edit_sale_returns_default_sort\" data-bind=\"value: sale_returns_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_sale_returns", [], "any", false, false, false, 1145));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1146
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1146);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1146);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1148
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_returns_default_order\" id=\"module_admin_quick_edit_sale_returns_default_order\" data-bind=\"value: sale_returns_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1152
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1153
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1158
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1164
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1165
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1166
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: sale_returns -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_sale_returns][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_sale_returns][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_sale_returns][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_returns_notify_customer0\">";
        // line 1183
        echo ($context["entry_notify_customer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_sale_returns_notify_customer\" id=\"module_admin_quick_edit_sale_returns_notify_customer1\" value=\"1\" data-bind=\"checked: sale_returns_notify_customer\"> ";
        // line 1186
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_sale_returns_notify_customer\" id=\"module_admin_quick_edit_sale_returns_notify_customer0\" value=\"0\" data-bind=\"checked: sale_returns_notify_customer\"> ";
        // line 1189
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-sale-vouchers\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_vouchers_status\">";
        // line 1198
        echo ($context["entry_sale_vouchers_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_vouchers_status\" id=\"module_admin_quick_edit_sale_vouchers_status\" data-bind=\"value: sale_vouchers_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1201
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1202
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_vouchers_default_sort\">";
        // line 1207
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_vouchers_default_sort\" id=\"module_admin_quick_edit_sale_vouchers_default_sort\" data-bind=\"value: sale_vouchers_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_sale_vouchers", [], "any", false, false, false, 1210));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1211
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1211);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1211);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1213
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_vouchers_default_order\" id=\"module_admin_quick_edit_sale_vouchers_default_order\" data-bind=\"value: sale_vouchers_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1217
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1218
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1223
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1229
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1230
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1231
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: sale_vouchers -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_sale_vouchers][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_sale_vouchers][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_sale_vouchers][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-sale-voucher-themes\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_voucher_themes_status\">";
        // line 1252
        echo ($context["entry_sale_voucher_themes_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_voucher_themes_status\" id=\"module_admin_quick_edit_sale_voucher_themes_status\" data-bind=\"value: sale_voucher_themes_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1255
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1256
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_voucher_themes_default_sort\">";
        // line 1261
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_voucher_themes_default_sort\" id=\"module_admin_quick_edit_sale_voucher_themes_default_sort\" data-bind=\"value: sale_voucher_themes_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_sale_voucher_themes", [], "any", false, false, false, 1264));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1265
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1265);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1265);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1267
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_voucher_themes_default_order\" id=\"module_admin_quick_edit_sale_voucher_themes_default_order\" data-bind=\"value: sale_voucher_themes_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1271
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1272
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1277
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1283
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1284
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1285
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: sale_voucher_themes -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_sale_voucher_themes][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_sale_voucher_themes][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_sale_voucher_themes][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"marketing-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-marketing-marketing\" role=\"tab\" data-toggle=\"tab\">";
        // line 1311
        echo ($context["tab_marketing"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-marketing-coupons\" role=\"tab\" data-toggle=\"tab\">";
        // line 1312
        echo ($context["tab_coupons"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"tab-marketing-marketing\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_marketing_marketing_status\">";
        // line 1318
        echo ($context["entry_marketing_marketing_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_marketing_status\" id=\"module_admin_quick_edit_marketing_marketing_status\" data-bind=\"value: marketing_marketing_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1321
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1322
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_marketing_marketing_default_sort\">";
        // line 1327
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_marketing_default_sort\" id=\"module_admin_quick_edit_marketing_marketing_default_sort\" data-bind=\"value: marketing_marketing_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1330
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_marketing_marketing", [], "any", false, false, false, 1330));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1331
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1331);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1331);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1333
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_marketing_default_order\" id=\"module_admin_quick_edit_marketing_marketing_default_order\" data-bind=\"value: marketing_marketing_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1337
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1338
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1343
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1349
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1350
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1351
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: marketing_marketing -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_marketing_marketing][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_marketing_marketing][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_marketing_marketing][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-marketing-coupons\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_marketing_coupons_status\">";
        // line 1372
        echo ($context["entry_marketing_coupons_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_coupons_status\" id=\"module_admin_quick_edit_marketing_coupons_status\" data-bind=\"value: marketing_coupons_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1375
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1376
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_marketing_coupons_default_sort\">";
        // line 1381
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_coupons_default_sort\" id=\"module_admin_quick_edit_marketing_coupons_default_sort\" data-bind=\"value: marketing_coupons_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1384
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_marketing_coupons", [], "any", false, false, false, 1384));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1385
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1385);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1385);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1387
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_coupons_default_order\" id=\"module_admin_quick_edit_marketing_coupons_default_order\" data-bind=\"value: marketing_coupons_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1391
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1392
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1397
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1403
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1404
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1405
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: marketing_coupons -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_marketing_coupons][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_marketing_coupons][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_marketing_coupons][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t 
\t\t</form>
\t</div>
</div>
<script type=\"text/javascript\"><!--
!function(e,t,a){var o;e.texts=t.extend({},e.texts,{error_ajax_request:\"";
        // line 1436
        echo ($context["error_ajax_request"] ?? null);
        echo "\",error_image_width:\"";
        echo ($context["error_image_width"] ?? null);
        echo "\",error_image_height:\"";
        echo ($context["error_image_height"] ?? null);
        echo "\"}),t(\".sortable\").sortable({containerSelector:\"table\",itemPath:\"> tbody\",itemSelector:\"tr\",placeholder:'<tr class=\"placeholder\"/>',distance:5,onDragStart:function(e,a,o,s){e.children().each(function(){t(this).width(t(this).width())}),e.addClass(\"dragged\"),t(\"body\").addClass(\"dragging\")},onDrag:function(e,t,a,o){t.left=0,e.css(t)},onDrop:function(e,a,o,s){e.children().each(function(){t(this).removeAttr(\"style\")}),e.removeClass(\"dragged\").removeAttr(\"style\"),t(\"body\").removeClass(\"dragging\"),t(\"tbody tr\",t(a.el[0])).each(function(e){ko.dataFor(this).index(e)})}}),e.load_service_list=function(e){e=void 0!==e?1*e:0;var a=t.Deferred();return o.service_list_loaded()&&!e||o.service_list_loading()?a.reject():(o.service_list_loading(!0),t.when(t.ajax({url:\"";
        echo ($context["services"] ?? null);
        echo "\",data:{force:e},dataType:\"json\"})).then(function(e){o.service_list_loaded(!0),o.service_list_loading(!1),o.clearServices(),e.services&&t.each(e.services,function(e,t){var a=t.code,s=t.name,r=t.description||\"\",_=t.currency,i=t.price,n=t.turnaround;o.addService(a,s,r,_,i,n)}),e.rate&&t(\"#hourly_rate\").html(e.rate),a.resolve()},function(e,t,s){o.service_list_loaded(!0),o.service_list_loading(!1),a.reject(),window.console&&window.console.log&&window.console.log(\"Failed to load services list: \"+s)})),a.promise()};var s=function(e){isNaN(parseInt(e))||parseInt(e)<0?(this.target.hasError(!0),this.target.errorMsg(this.message)):(this.target.hasError(!1),this.target.errorMsg(\"\"))},r=function(e,t,a,o,s,r){this.code=e,this.name=t,this.description=a,this.currency=o,this.price=s,this.turnaround=r},_=function(e,t,a,o,s,r){this.column=e,this.index=ko.observable(t),this.name=a,this.editable=ko.observable(o),this.visible=ko.observable(s),this.quick_editable=r},i=function(){var a=this;this.status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_status"] ?? null);
        echo "\"),this.override_menu_entry=ko.observable(\"";
        echo ($context["module_admin_quick_edit_override_menu_entry"] ?? null);
        echo "\"),this.match_anywhere=ko.observable(\"";
        echo ($context["module_admin_quick_edit_match_anywhere"] ?? null);
        echo "\"),this.alternate_row_colour=ko.observable(\"";
        echo ($context["module_admin_quick_edit_alternate_row_colour"] ?? null);
        echo "\"),this.row_hover_highlighting=ko.observable(\"";
        echo ($context["module_admin_quick_edit_row_hover_highlighting"] ?? null);
        echo "\"),this.highlight_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_highlight_status"] ?? null);
        echo "\"),this.highlight_yes_no=ko.observable(\"";
        echo ($context["module_admin_quick_edit_highlight_yes_no"] ?? null);
        echo "\"),this.highlight_actions=ko.observable(\"";
        echo ($context["module_admin_quick_edit_highlight_actions"] ?? null);
        echo "\"),this.interval_filter=ko.observable(\"";
        echo ($context["module_admin_quick_edit_interval_filter"] ?? null);
        echo "\"),this.batch_edit=ko.observable(\"";
        echo ($context["module_admin_quick_edit_batch_edit"] ?? null);
        echo "\"),this.quick_edit_on=ko.observable(\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\"),this.price_relative_to=ko.observable(\"";
        echo ($context["module_admin_quick_edit_price_relative_to"] ?? null);
        echo "\"),this.list_view_image_width=ko.observable(\"";
        echo (($context["module_admin_quick_edit_list_view_image_width"] ?? null) * 1);
        echo "\").extend({numeric:{precision:0,context:a},validate:{message:e.texts.error_image_width,context:a,method:s}}),this.list_view_image_height=ko.observable(\"";
        echo (($context["module_admin_quick_edit_list_view_image_height"] ?? null) * 1);
        echo "\").extend({numeric:{precision:0,context:a},validate:{message:e.texts.error_image_height,context:a,method:s}}),this.single_language_editing=ko.observable(\"";
        echo ($context["module_admin_quick_edit_single_language_editing"] ?? null);
        echo "\"),this.general_errors=ko.computed(function(){return a.list_view_image_width.hasError()||a.list_view_image_height.hasError()}),this.catalog_categories_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_categories_status"] ?? null);
        echo "\"),this.catalog_categories_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_categories_default_sort"] ?? null);
        echo "\"),this.catalog_categories_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_categories_default_order"] ?? null);
        echo "\"),this.catalog_categories=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_categories"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_products_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_products_status"] ?? null);
        echo "\"),this.catalog_products_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_products_default_sort"] ?? null);
        echo "\"),this.catalog_products_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_products_default_order"] ?? null);
        echo "\"),this.catalog_products=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_products"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_products_actions=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_products_actions"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_products_filter_sub_category=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_products_filter_sub_category"] ?? null);
        echo "\"),this.catalog_recurrings_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_recurrings_status"] ?? null);
        echo "\"),this.catalog_recurrings_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_recurrings_default_sort"] ?? null);
        echo "\"),this.catalog_recurrings_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_recurrings_default_order"] ?? null);
        echo "\"),this.catalog_recurrings=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_recurrings"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_filters_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_filters_status"] ?? null);
        echo "\"),this.catalog_filters_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_filters_default_sort"] ?? null);
        echo "\"),this.catalog_filters_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_filters_default_order"] ?? null);
        echo "\"),this.catalog_filters=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_filters"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_attributes_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attributes_status"] ?? null);
        echo "\"),this.catalog_attributes_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attributes_default_sort"] ?? null);
        echo "\"),this.catalog_attributes_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attributes_default_order"] ?? null);
        echo "\"),this.catalog_attributes=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_attributes"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_attribute_groups_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attribute_groups_status"] ?? null);
        echo "\"),this.catalog_attribute_groups_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attribute_groups_default_sort"] ?? null);
        echo "\"),this.catalog_attribute_groups_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attribute_groups_default_order"] ?? null);
        echo "\"),this.catalog_attribute_groups=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_attribute_groups"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_options_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_options_status"] ?? null);
        echo "\"),this.catalog_options_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_options_default_sort"] ?? null);
        echo "\"),this.catalog_options_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_options_default_order"] ?? null);
        echo "\"),this.catalog_options=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_options"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_manufacturers_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_manufacturers_status"] ?? null);
        echo "\"),this.catalog_manufacturers_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_manufacturers_default_sort"] ?? null);
        echo "\"),this.catalog_manufacturers_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_manufacturers_default_order"] ?? null);
        echo "\"),this.catalog_manufacturers=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_manufacturers"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_downloads_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_downloads_status"] ?? null);
        echo "\"),this.catalog_downloads_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_downloads_default_sort"] ?? null);
        echo "\"),this.catalog_downloads_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_downloads_default_order"] ?? null);
        echo "\"),this.catalog_downloads=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_downloads"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_reviews_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_reviews_status"] ?? null);
        echo "\"),this.catalog_reviews_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_reviews_default_sort"] ?? null);
        echo "\"),this.catalog_reviews_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_reviews_default_order"] ?? null);
        echo "\"),this.catalog_reviews=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_reviews"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_information_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_information_status"] ?? null);
        echo "\"),this.catalog_information_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_information_default_sort"] ?? null);
        echo "\"),this.catalog_information_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_information_default_order"] ?? null);
        echo "\"),this.catalog_information=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_information"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_errors=ko.computed(function(){return!1},a),this.design_seo_urls_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_design_seo_urls_status"] ?? null);
        echo "\"),this.design_seo_urls_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_design_seo_urls_default_sort"] ?? null);
        echo "\"),this.design_seo_urls_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_design_seo_urls_default_order"] ?? null);
        echo "\"),this.design_seo_urls=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_design_seo_urls"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.design_errors=ko.computed(function(){return!1},a),this.customer_customers_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_customer_customers_status"] ?? null);
        echo "\"),this.customer_customers_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_customer_customers_default_sort"] ?? null);
        echo "\"),this.customer_customers_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_customer_customers_default_order"] ?? null);
        echo "\"),this.customer_customers=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_customer_customers"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.customer_errors=ko.computed(function(){return!1},a),this.sale_orders_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_orders_status"] ?? null);
        echo "\"),this.sale_orders=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_sale_orders"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.sale_orders_notify_customer=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_orders_notify_customer"] ?? null);
        echo "\"),this.sale_returns_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_returns_status"] ?? null);
        echo "\"),this.sale_returns_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_returns_default_sort"] ?? null);
        echo "\"),this.sale_returns_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_returns_default_order"] ?? null);
        echo "\"),this.sale_returns=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_sale_returns"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.sale_returns_notify_customer=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_returns_notify_customer"] ?? null);
        echo "\"),this.sale_vouchers_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_vouchers_status"] ?? null);
        echo "\"),this.sale_vouchers_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_vouchers_default_sort"] ?? null);
        echo "\"),this.sale_vouchers_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_vouchers_default_order"] ?? null);
        echo "\"),this.sale_vouchers=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_sale_vouchers"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.sale_voucher_themes_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_voucher_themes_status"] ?? null);
        echo "\"),this.sale_voucher_themes_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_voucher_themes_default_sort"] ?? null);
        echo "\"),this.sale_voucher_themes_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_voucher_themes_default_order"] ?? null);
        echo "\"),this.sale_voucher_themes=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_sale_voucher_themes"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.sale_errors=ko.computed(function(){return!1},a),this.marketing_marketing_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_marketing_status"] ?? null);
        echo "\"),this.marketing_marketing_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_marketing_default_sort"] ?? null);
        echo "\"),this.marketing_marketing_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_marketing_default_order"] ?? null);
        echo "\"),this.marketing_marketing=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_marketing_marketing"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.marketing_coupons_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_coupons_status"] ?? null);
        echo "\"),this.marketing_coupons_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_coupons_default_sort"] ?? null);
        echo "\"),this.marketing_coupons_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_coupons_default_order"] ?? null);
        echo "\"),this.marketing_coupons=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_marketing_coupons"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.marketing_errors=ko.computed(function(){return!1},a),this.settings_errors=ko.computed(function(){var e=!1;for(var t in this)ko.isObservable(a[t])&&\"function\"==typeof a[t].hasError&&(e|=a[t].hasError());return e},a),a.service_list_loaded=ko.observable(!1),a.service_list_loading=ko.observable(!1),a.services=ko.observableArray([]),a.addService=function(e,t,o,s,_,i){a.services.push(new r(e,t,o,s,_,i))},a.clearServices=function(){a.services.removeAll()}};i.prototype=new e.observable_object_methods,t(function(){var a=window.location.hash.split(\"?\")[0];o=e.view_model=new i,e.view_models=t.extend({},e.view_models,{ExtVM:e.view_model}),o.applyErrors(\"";
        echo json_encode(($context["errors"] ?? null));
        echo "\"),ko.applyBindings(o,t(\"#content\")[0]),t(\"#legal_text .modal-body\").load(\"view/template/extension/module/static/bull5i_aqe_pro_extension_terms.htm?v=";
        echo ($context["installed_version"] ?? null);
        echo "\"),t(\"body\").on(\"shown.bs.tab\",\"a[data-toggle='tab'][href='#ext-support'],a[data-toggle='tab'][href='#services']\",function(t){e.load_service_list()}),e.onComplete(t(\"#page-overlay\"),t(\"#content\")),e.loading=!0,e.activateTab(a),e.loading=!1})}(window.bull5i=window.bull5i||{},jQuery);
//--></script>
";
        // line 1438
        echo ($context["footer"] ?? null);
        echo "
";
    }

    // line 1
    public function macro_alert_icon($__type__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            ob_start(function () { return ''; });
            // line 2
            echo "\t\t";
            if ((($context["type"] ?? null) == "error")) {
                // line 3
                echo "\t\t\tfa-times-circle
\t\t";
            } elseif ((            // line 4
($context["type"] ?? null) == "warning")) {
                // line 5
                echo "\t\t\tfa-exclamation-triangle
\t\t";
            } elseif ((            // line 6
($context["type"] ?? null) == "success")) {
                // line 7
                echo "\t\t\tfa-check-circle
\t\t";
            } elseif ((            // line 8
($context["type"] ?? null) == "info")) {
                // line 9
                echo "\t\t\tfa-info-circle
\t\t";
            } else {
                // line 11
                echo "\t\t";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "extension/module/admin_quick_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2931 => 11,  2927 => 9,  2925 => 8,  2922 => 7,  2920 => 6,  2917 => 5,  2915 => 4,  2912 => 3,  2909 => 2,  2895 => 1,  2889 => 1438,  2688 => 1436,  2654 => 1405,  2650 => 1404,  2646 => 1403,  2635 => 1397,  2627 => 1392,  2623 => 1391,  2617 => 1387,  2606 => 1385,  2602 => 1384,  2596 => 1381,  2588 => 1376,  2584 => 1375,  2578 => 1372,  2554 => 1351,  2550 => 1350,  2546 => 1349,  2535 => 1343,  2527 => 1338,  2523 => 1337,  2517 => 1333,  2506 => 1331,  2502 => 1330,  2496 => 1327,  2488 => 1322,  2484 => 1321,  2478 => 1318,  2469 => 1312,  2465 => 1311,  2436 => 1285,  2432 => 1284,  2428 => 1283,  2417 => 1277,  2409 => 1272,  2405 => 1271,  2399 => 1267,  2388 => 1265,  2384 => 1264,  2378 => 1261,  2370 => 1256,  2366 => 1255,  2360 => 1252,  2336 => 1231,  2332 => 1230,  2328 => 1229,  2317 => 1223,  2309 => 1218,  2305 => 1217,  2299 => 1213,  2288 => 1211,  2284 => 1210,  2278 => 1207,  2270 => 1202,  2266 => 1201,  2260 => 1198,  2248 => 1189,  2242 => 1186,  2236 => 1183,  2216 => 1166,  2212 => 1165,  2208 => 1164,  2197 => 1158,  2189 => 1153,  2185 => 1152,  2179 => 1148,  2168 => 1146,  2164 => 1145,  2158 => 1142,  2150 => 1137,  2146 => 1136,  2140 => 1133,  2128 => 1124,  2122 => 1121,  2116 => 1118,  2097 => 1102,  2093 => 1101,  2082 => 1095,  2074 => 1090,  2070 => 1089,  2064 => 1086,  2055 => 1080,  2051 => 1079,  2047 => 1078,  2043 => 1077,  2014 => 1051,  2010 => 1050,  2006 => 1049,  1995 => 1043,  1987 => 1038,  1983 => 1037,  1977 => 1033,  1966 => 1031,  1962 => 1030,  1956 => 1027,  1948 => 1022,  1944 => 1021,  1938 => 1018,  1929 => 1012,  1900 => 986,  1896 => 985,  1892 => 984,  1881 => 978,  1873 => 973,  1869 => 972,  1863 => 968,  1852 => 966,  1848 => 965,  1842 => 962,  1834 => 957,  1830 => 956,  1824 => 953,  1815 => 947,  1786 => 921,  1782 => 920,  1778 => 919,  1767 => 913,  1759 => 908,  1755 => 907,  1749 => 903,  1738 => 901,  1734 => 900,  1728 => 897,  1720 => 892,  1716 => 891,  1710 => 888,  1686 => 867,  1682 => 866,  1678 => 865,  1667 => 859,  1659 => 854,  1655 => 853,  1649 => 849,  1638 => 847,  1634 => 846,  1628 => 843,  1620 => 838,  1616 => 837,  1610 => 834,  1586 => 813,  1582 => 812,  1578 => 811,  1567 => 805,  1559 => 800,  1555 => 799,  1549 => 795,  1538 => 793,  1534 => 792,  1528 => 789,  1520 => 784,  1516 => 783,  1510 => 780,  1486 => 759,  1482 => 758,  1478 => 757,  1467 => 751,  1459 => 746,  1455 => 745,  1449 => 741,  1438 => 739,  1434 => 738,  1428 => 735,  1420 => 730,  1416 => 729,  1410 => 726,  1386 => 705,  1382 => 704,  1378 => 703,  1367 => 697,  1359 => 692,  1355 => 691,  1349 => 687,  1338 => 685,  1334 => 684,  1328 => 681,  1320 => 676,  1316 => 675,  1310 => 672,  1286 => 651,  1282 => 650,  1278 => 649,  1267 => 643,  1259 => 638,  1255 => 637,  1249 => 633,  1238 => 631,  1234 => 630,  1228 => 627,  1220 => 622,  1216 => 621,  1210 => 618,  1186 => 597,  1182 => 596,  1178 => 595,  1167 => 589,  1159 => 584,  1155 => 583,  1149 => 579,  1138 => 577,  1134 => 576,  1128 => 573,  1120 => 568,  1116 => 567,  1110 => 564,  1086 => 543,  1082 => 542,  1078 => 541,  1067 => 535,  1059 => 530,  1055 => 529,  1049 => 525,  1038 => 523,  1034 => 522,  1028 => 519,  1020 => 514,  1016 => 513,  1010 => 510,  986 => 489,  982 => 488,  978 => 487,  967 => 481,  959 => 476,  955 => 475,  949 => 471,  938 => 469,  934 => 468,  928 => 465,  920 => 460,  916 => 459,  910 => 456,  899 => 448,  892 => 444,  886 => 441,  880 => 438,  861 => 422,  857 => 421,  846 => 415,  826 => 398,  822 => 397,  818 => 396,  807 => 390,  799 => 385,  795 => 384,  789 => 380,  778 => 378,  774 => 377,  768 => 374,  760 => 369,  756 => 368,  750 => 365,  726 => 344,  722 => 343,  718 => 342,  707 => 336,  699 => 331,  695 => 330,  689 => 326,  678 => 324,  674 => 323,  668 => 320,  660 => 315,  656 => 314,  650 => 311,  641 => 305,  637 => 304,  633 => 303,  629 => 302,  625 => 301,  621 => 300,  617 => 299,  613 => 298,  609 => 297,  605 => 296,  601 => 295,  575 => 272,  567 => 267,  561 => 264,  555 => 261,  548 => 257,  541 => 253,  537 => 252,  531 => 249,  523 => 244,  519 => 243,  513 => 240,  506 => 236,  499 => 232,  493 => 229,  487 => 226,  480 => 222,  473 => 218,  467 => 215,  461 => 212,  454 => 208,  447 => 204,  441 => 201,  435 => 198,  428 => 194,  421 => 190,  415 => 187,  409 => 184,  402 => 180,  395 => 176,  389 => 173,  383 => 170,  376 => 166,  369 => 162,  363 => 159,  357 => 156,  350 => 152,  343 => 148,  337 => 145,  331 => 142,  324 => 138,  317 => 134,  311 => 131,  305 => 128,  298 => 124,  291 => 120,  285 => 117,  279 => 114,  272 => 110,  266 => 107,  262 => 106,  256 => 103,  242 => 92,  238 => 91,  234 => 90,  230 => 89,  226 => 88,  222 => 87,  215 => 83,  208 => 79,  198 => 72,  192 => 69,  181 => 60,  175 => 59,  169 => 58,  161 => 55,  151 => 53,  148 => 52,  143 => 51,  139 => 50,  131 => 44,  120 => 42,  116 => 41,  111 => 39,  104 => 37,  94 => 36,  83 => 35,  71 => 34,  63 => 29,  55 => 24,  47 => 19,  38 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/admin_quick_edit.twig", "");
    }
}
