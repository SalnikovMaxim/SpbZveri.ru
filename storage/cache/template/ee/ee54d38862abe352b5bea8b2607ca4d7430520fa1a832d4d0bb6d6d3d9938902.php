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

/* extension/module/membership.twig */
class __TwigTemplate_310eaebfe52b6f57202551f6f533eb086c2ab7c4bed648f0ab3475be8f9e55ac extends \Twig\Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
      \t\t<ul class=\"breadcrumb\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "      </ul>
   \t\t</div>
  \t</div>
  \t<div class=\"container-fluid\">
  \t\t";
        // line 13
        if (($context["error_warning"] ?? null)) {
            // line 14
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 18
        echo "\t\t";
        if (($context["success"] ?? null)) {
            // line 19
            echo "\t    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t    \t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t    </div>
\t    ";
        }
        // line 23
        echo "
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">";
        // line 28
        echo ($context["text_toggle_navigation"] ?? null);
        echo "</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                      </button>
                    <a class=\"navbar-brand\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
        // line 34
        echo ($context["heading_title"] ?? null);
        echo "
                    </a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                    ";
        // line 39
        if (($context["license"] ?? null)) {
            // line 40
            echo "\t\t\t\t\t\t<li class=\"dropdown";
            if (($context["license"] ?? null)) {
                echo " active";
            }
            echo "\">
                        \t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-cog\"></i> ";
            // line 41
            echo ($context["text_settings"] ?? null);
            echo "<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li ";
            // line 43
            if (($context["license"] ?? null)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#common-settings\" data-toggle=\"tab\">";
            echo ($context["text_common"] ?? null);
            echo "</a></li>
                                <li><a href=\"#email-notification-settings\" data-toggle=\"tab\">";
            // line 44
            echo ($context["text_email_notifications"] ?? null);
            echo "</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-credit-card\"></i> ";
            // line 48
            echo ($context["text_club_cards"] ?? null);
            echo "<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#cards-list\" id=\"menu-cards-list\" data-loadurl=\"";
            // line 50
            echo ($context["cards_list"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["text_lists"] ?? null);
            echo "</a></li>
                                <li><a href=\"#card-form\" id=\"menu-card-form\" data-loadurl=\"";
            // line 51
            echo ($context["card_add"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["text_add"] ?? null);
            echo "</a></li>
                                <li><a href=\"#cards-generator\" id=\"menu-card-generator\" data-loadurl=\"";
            // line 52
            echo ($context["cards_generator"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["text_generator"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#cards-history\" id=\"menu-cards-history\" data-loadurl=\"";
            // line 53
            echo ($context["cards_history"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["text_general_history"] ?? null);
            echo "</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#card-settings\" data-toggle=\"tab\">";
            // line 55
            echo ($context["text_settings"] ?? null);
            echo "</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#default-card-settings\" data-toggle=\"tab\">";
            // line 57
            echo ($context["text_default_card_settings"] ?? null);
            echo "</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-gift\" aria-hidden=\"true\"></i> ";
            // line 61
            echo ($context["text_gifts"] ?? null);
            echo "<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#gifts-list\" id=\"menu-gifts-list\" data-loadurl=\"";
            // line 63
            echo ($context["gifts_list"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["text_lists"] ?? null);
            echo "</a></li>
                                <li><a href=\"#gift-form\" id=\"menu-gift-form\" data-loadurl=\"";
            // line 64
            echo ($context["gift_add"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["text_add"] ?? null);
            echo "</a></li>
                                <li><a href=\"#gifts-history\" id=\"menu-gifts-history\" data-loadurl=\"";
            // line 65
            echo ($context["gifts_history"] ?? null);
            echo "\" data-toggle=\"tab\">";
            echo ($context["text_general_history"] ?? null);
            echo "</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#gift-settings\" data-toggle=\"tab\">";
            // line 67
            echo ($context["text_settings"] ?? null);
            echo "</a></li>
                            </ul>
                        </li>
\t\t\t\t\t";
        }
        // line 71
        echo " 
                            </ul>
                        </li>
                    </ul>
                    <p class=\"navbar-btn navbar-right btn-group\">
                    \t<button onclick=\"save();\" data-toggle=\"tooltip\" title=\"";
        // line 76
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                        <button type=\"submit\" form=\"form-module_membership\" data-toggle=\"tooltip\" title=\"";
        // line 77
        echo ($context["button_save_and_exit"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-save\"></i></button>
                        <a href=\"";
        // line 78
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\" role=\"button\"><i class=\"fa fa-reply\"></i></a>
            \t    </p>
                </div>
            </div>
        </nav>
   \t \t<div class=\"panel panel-default no-upper-border\">
      \t\t<div class=\"panel-body\">
      \t\t\t<form action=\"";
        // line 85
        echo ($context["save_and_exit"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module_membership\" class=\"form-horizontal\">
\t      \t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 88
        echo "\t      \t\t\t\t<div class=\"tab-pane fade";
        if (($context["license"] ?? null)) {
            echo " in active";
        }
        echo "\" id=\"common-settings\">
\t      \t\t\t\t\t<a href=\"\" id=\"helper-ajax-menu\" style=\"display: none;\"></a>
\t      \t\t\t\t\t<div class=\"form-group\">
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"status-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 91
        echo ($context["help_status"] ?? null);
        echo "\">";
        echo ($context["entry_status"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-4\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t\t\t\t\t\t\t\t\t";
        // line 94
        if ( !($context["module_membership_status"] ?? null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_status\" value=\"0\" id=\"status-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"status-enabled\">";
            // line 96
            echo ($context["text_disabled"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_status\" value=\"1\" id=\"status-enabled\">
                                        <label class=\"col-sm-4\" for=\"status-disabled\">";
            // line 98
            echo ($context["text_enabled"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 99
            echo " 
                                        <input type=\"radio\" name=\"module_membership_status\" value=\"0\" id=\"status-disabled\">
                                        <label class=\"col-sm-4\" for=\"status-enabled\">";
            // line 101
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_status\" value=\"1\" id=\"status-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"status-disabled\">";
            // line 103
            echo ($context["text_enabled"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 105
        echo "\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
\t\t\t\t\t        <div class=\"form-group\">
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"condition\"><span data-toggle=\"tooltip\" title=\"";
        // line 109
        echo ($context["help_condition"] ?? null);
        echo "\">";
        echo ($context["entry_condition"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-10\">
\t      \t\t\t\t\t\t\t<select name=\"module_membership[condition]\" id=\"condition\" class=\"form-control\">
\t      \t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 112
        echo ($context["text_none"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t";
            // line 114
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_membership"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["condition"] ?? null) : null) && ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["information"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["information_id"] ?? null) : null) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["module_membership"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["condition"] ?? null) : null)))) {
                echo " 
\t      \t\t\t\t\t\t\t\t<option value=\"";
                // line 115
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["information"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["information_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["information"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["title"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 116
                echo " 
\t      \t\t\t\t\t\t\t\t<option value=\"";
                // line 117
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["information"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["information_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["information"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["title"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 118
            echo " 
\t      \t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t      \t\t\t\t\t\t\t</select>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
\t      \t\t\t\t\t<div class=\"form-group\">
                  \t\t\t\t<label class=\"col-sm-2 control-label\" for=\"customer_group_id\"><span data-toggle=\"tooltip\" title=\"";
        // line 124
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  \t\t\t\t<div class=\"col-sm-6\">
                    \t\t\t\t<select name=\"module_membership[customer_group_id]\" id=\"customer_group_id\" class=\"form-control\">
                    \t\t\t\t<option value=\"0\">";
        // line 127
        echo ($context["text_none"] ?? null);
        echo "</option>
                      \t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            echo " 
                      \t\t\t\t\t";
            // line 129
            if (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["module_membership"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["customer_group_id"] ?? null) : null) && ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["customer_group"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["customer_group_id"] ?? null) : null) == (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["module_membership"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["customer_group_id"] ?? null) : null)))) {
                echo " 
                      \t\t\t\t\t<option value=\"";
                // line 130
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["customer_group"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["customer_group_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["customer_group"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["name"] ?? null) : null);
                echo "</option>
                      \t\t\t\t\t";
            } else {
                // line 131
                echo " 
                      \t\t\t\t\t<option value=\"";
                // line 132
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["customer_group"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["customer_group_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["customer_group"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["name"] ?? null) : null);
                echo "</option>
                      \t\t\t\t\t";
            }
            // line 133
            echo " 
                      \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo " 
                    \t\t\t\t</select>
                  \t\t\t\t</div>
                  \t\t\t\t<label class=\"col-sm-2 control-label\" for=\"auto_transfer_to_group-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 137
        echo ($context["help_auto_transfer_to_group"] ?? null);
        echo "\">";
        echo ($context["entry_auto_transfer_to_group"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-2\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 140
        if ( !(($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["module_membership"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["auto_transfer_to_group"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership[auto_transfer_to_group]\" value=\"0\" id=\"auto_transfer_to_group-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"auto_transfer_to_group-enabled\">";
            // line 142
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership[auto_transfer_to_group]\" value=\"1\" id=\"auto_transfer_to_group-enabled\">
                                        <label class=\"col-sm-4\" for=\"auto_transfer_to_group-disabled\">";
            // line 144
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 145
            echo " 
                                        <input type=\"radio\" name=\"module_membership[auto_transfer_to_group]\" value=\"0\" id=\"auto_transfer_to_group-disabled\">
                                        <label class=\"col-sm-4\" for=\"auto_transfer_to_group-enabled\">";
            // line 147
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership[auto_transfer_to_group]\" value=\"1\" id=\"auto_transfer_to_group-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"auto_transfer_to_group-disabled\">";
            // line 149
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 150
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
                \t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"email-notification-settings\">
\t\t\t\t\t\t\t<a class=\"btn btn-default pull-right\" role=\"button\" data-toggle=\"collapse\" href=\"#message-macros-collapse\" aria-expanded=\"false\" aria-controls=\"message-macros-collapse\">";
        // line 156
        echo ($context["text_message_template_macros"] ?? null);
        echo " <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t        <div id=\"message-macros-collapse\" class=\"collapse\">
\t\t\t\t\t        \t<div class=\"panel panel-default\">
\t\t\t\t\t        \t\t<div class=\"panel-body\">
\t\t\t\t\t        \t\t\t<div class=\"alert alert-info\" role=\"alert\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t\t\t\t  \t\t<p><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> ";
        // line 163
        echo ($context["text_about_macros"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t        \t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t        \t\t\t";
        // line 166
        echo ($context["text_card_template_macros"] ?? null);
        echo " 
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t        \t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t        \t\t\t";
        // line 169
        echo ($context["text_card_hisory_template"] ?? null);
        echo " 
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t        \t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t        \t\t\t";
        // line 172
        echo ($context["text_gift_template_macros"] ?? null);
        echo " 
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t        \t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t        \t\t\t";
        // line 175
        echo ($context["text_customer_template_macros"] ?? null);
        echo " 
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t</div>
\t\t\t\t\t        </div>
\t\t\t\t\t\t\t<legend>";
        // line 180
        echo ($context["text_club_cards"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"notification_customer_creation-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 182
        echo ($context["help_notification_customer_creation"] ?? null);
        echo "\">";
        echo ($context["entry_notification_customer_creation"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-1\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 185
        if ( !(($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["module_membership_notification"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["customer_creation"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_notification[customer_creation]\" value=\"0\" id=\"notification_customer_creation-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"notification_customer_creation-enabled\">";
            // line 187
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_notification[customer_creation]\" value=\"1\" id=\"notification_customer_creation-enabled\">
                                        <label class=\"col-sm-4\" for=\"notification_customer_creation-disabled\">";
            // line 189
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 190
            echo " 
                                        <input type=\"radio\" name=\"module_membership_notification[customer_creation]\" value=\"0\" id=\"notification_customer_creation-disabled\">
                                        <label class=\"col-sm-4\" for=\"notification_customer_creation-enabled\">";
            // line 192
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_notification[customer_creation]\" value=\"1\" id=\"notification_customer_creation-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"notification_customer_creation-disabled\">";
            // line 194
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 195
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t<label class=\"col-sm-1 control-label\" for=\"notification_customer_creation_template\">";
        // line 198
        echo ($context["entry_message_template"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<li";
            // line 202
            echo (((($context["language_id"] ?? null) == (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["language"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["language_id"] ?? null) : null))) ? (" class=\"active\"") : (""));
            echo "><a href=\"#notification_customer_creation_template_";
            echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["language"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["language_id"] ?? null) : null);
            echo "\" aria-controls=\"notification_customer_creation_template_";
            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["language"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["language_id"] ?? null) : null);
            echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["language_flag"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[(($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["language"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["language"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["language"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["name"] ?? null) : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
            // line 207
            echo (((($context["language_id"] ?? null) == (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["language"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["language_id"] ?? null) : null))) ? (" active") : (""));
            echo "\" id=\"notification_customer_creation_template_";
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["language"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["language_id"] ?? null) : null);
            echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"module_membership_notification[customer_creation_template][";
            // line 208
            echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["language"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["language_id"] ?? null) : null);
            echo "]\" placeholder=\"";
            echo ($context["entry_message_template"] ?? null);
            echo "\" class=\"form-control summernote\">";
            echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["module_membership_notification"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["customer_creation_template"] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 208)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"notification_card_issuance-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 215
        echo ($context["help_notification_card_issuance"] ?? null);
        echo "\">";
        echo ($context["entry_notification_card_issuance"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-1\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 218
        if ( !(($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["module_membership_notification"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["card_issuance"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_notification[card_issuance]\" value=\"0\" id=\"notification_card_issuance-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"notification_card_issuance-enabled\">";
            // line 220
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_notification[card_issuance]\" value=\"1\" id=\"notification_card_issuance-enabled\">
                                        <label class=\"col-sm-4\" for=\"notification_card_issuance-disabled\">";
            // line 222
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 223
            echo " 
                                        <input type=\"radio\" name=\"module_membership_notification[card_issuance]\" value=\"0\" id=\"notification_card_issuance-disabled\">
                                        <label class=\"col-sm-4\" for=\"notification_card_issuance-enabled\">";
            // line 225
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_notification[card_issuance]\" value=\"1\" id=\"notification_card_issuance-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"notification_card_issuance-disabled\">";
            // line 227
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 228
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t<label class=\"col-sm-1 control-label\" for=\"notification_card_issuance_template\">";
        // line 231
        echo ($context["entry_message_template"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<li";
            // line 235
            echo (((($context["language_id"] ?? null) == (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["language"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["language_id"] ?? null) : null))) ? (" class=\"active\"") : (""));
            echo "><a href=\"#notification_card_issuance_template_";
            echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["language"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["language_id"] ?? null) : null);
            echo "\" aria-controls=\"notification_card_issuance_template_";
            echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["language"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["language_id"] ?? null) : null);
            echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
            echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["language_flag"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[(($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["language"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["language"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["language"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["name"] ?? null) : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
            // line 240
            echo (((($context["language_id"] ?? null) == (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["language"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["language_id"] ?? null) : null))) ? (" active") : (""));
            echo "\" id=\"notification_card_issuance_template_";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["language"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["language_id"] ?? null) : null);
            echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"module_membership_notification[card_issuance_template][";
            // line 241
            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["language"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["language_id"] ?? null) : null);
            echo "]\" placeholder=\"";
            echo ($context["entry_message_template"] ?? null);
            echo "\" class=\"form-control summernote\">";
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["module_membership_notification"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["card_issuance_template"] ?? null) : null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 241)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
\t      \t\t\t\t\t<div class=\"form-group\">
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"notification_card_balance_change-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 248
        echo ($context["help_notification_card_balance_change"] ?? null);
        echo "\">";
        echo ($context["entry_notification_card_balance_change"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-1\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 251
        if ( !(($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["module_membership_notification"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["card_balance_change"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_notification[card_balance_change]\" value=\"0\" id=\"notification_card_balance_change-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"notification_card_balance_change-enabled\">";
            // line 253
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_notification[card_balance_change]\" value=\"1\" id=\"notification_card_balance_change-enabled\">
                                        <label class=\"col-sm-4\" for=\"notification_card_balance_change-disabled\">";
            // line 255
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 256
            echo " 
                                        <input type=\"radio\" name=\"module_membership_notification[card_balance_change]\" value=\"0\" id=\"notification_card_balance_change-disabled\">
                                        <label class=\"col-sm-4\" for=\"notification_card_balance_change-enabled\">";
            // line 258
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_notification[card_balance_change]\" value=\"1\" id=\"notification_card_balance_change-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"notification_card_balance_change-disabled\">";
            // line 260
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 261
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t<label class=\"col-sm-1 control-label\" for=\"notification_card_balance_change_template\">";
        // line 264
        echo ($context["entry_message_template"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<li";
            // line 268
            echo (((($context["language_id"] ?? null) == (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["language"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["language_id"] ?? null) : null))) ? (" class=\"active\"") : (""));
            echo "><a href=\"#notification_card_balance_change_template_";
            echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["language"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["language_id"] ?? null) : null);
            echo "\" aria-controls=\"notification_card_balance_change_template_";
            echo (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["language"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["language_id"] ?? null) : null);
            echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
            echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["language_flag"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[(($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["language"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["language"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["language"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["name"] ?? null) : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
            // line 273
            echo (((($context["language_id"] ?? null) == (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["language"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["language_id"] ?? null) : null))) ? (" active") : (""));
            echo "\" id=\"notification_card_balance_change_template_";
            echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["language"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["language_id"] ?? null) : null);
            echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"module_membership_notification[card_balance_change_template][";
            // line 274
            echo (($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["language"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["language_id"] ?? null) : null);
            echo "]\" placeholder=\"";
            echo ($context["entry_message_template"] ?? null);
            echo "\" class=\"form-control summernote\">";
            echo (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = ($context["module_membership_notification"] ?? null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["card_balance_change_template"] ?? null) : null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 274)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
\t\t\t\t\t\t\t<legend>";
        // line 280
        echo ($context["text_gifts"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"notification_gift_confirm-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 282
        echo ($context["help_notification_gift_confirm"] ?? null);
        echo "\">";
        echo ($context["entry_notification_gift_confirm"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-1\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 285
        if ( !(($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["module_membership_notification"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["gift_confirm"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_notification[gift_confirm]\" value=\"0\" id=\"notification_gift_confirm-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"notification_gift_confirm-enabled\">";
            // line 287
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_notification[gift_confirm]\" value=\"1\" id=\"notification_gift_confirm-enabled\">
                                        <label class=\"col-sm-4\" for=\"notification_gift_confirm-disabled\">";
            // line 289
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 290
            echo " 
                                        <input type=\"radio\" name=\"module_membership_notification[gift_confirm]\" value=\"0\" id=\"notification_gift_confirm-disabled\">
                                        <label class=\"col-sm-4\" for=\"notification_gift_confirm-enabled\">";
            // line 292
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_notification[gift_confirm]\" value=\"1\" id=\"notification_gift_confirm-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"notification_gift_confirm-disabled\">";
            // line 294
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 295
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t<label class=\"col-sm-1 control-label\" for=\"notification_gift_confirm_template\">";
        // line 298
        echo ($context["entry_message_template"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<li";
            // line 302
            echo (((($context["language_id"] ?? null) == (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["language"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["language_id"] ?? null) : null))) ? (" class=\"active\"") : (""));
            echo "><a href=\"#notification_gift_confirm_template_";
            echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["language"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["language_id"] ?? null) : null);
            echo "\" aria-controls=\"notification_gift_confirm_template_";
            echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["language"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["language_id"] ?? null) : null);
            echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
            echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = ($context["language_flag"] ?? null)) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574[(($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["language"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["language"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["language"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["name"] ?? null) : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
            // line 307
            echo (((($context["language_id"] ?? null) == (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["language"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["language_id"] ?? null) : null))) ? (" active") : (""));
            echo "\" id=\"notification_gift_confirm_template_";
            echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["language"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["language_id"] ?? null) : null);
            echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"module_membership_notification[gift_confirm_template][";
            // line 308
            echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["language"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["language_id"] ?? null) : null);
            echo "]\" placeholder=\"";
            echo ($context["entry_message_template"] ?? null);
            echo "\" class=\"form-control summernote\">";
            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = ($context["module_membership_notification"] ?? null)) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["gift_confirm_template"] ?? null) : null)) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 308)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"cards-list\"></div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"card-form\"></div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"cards-generator\"></div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"cards-history\"></div>
                        <div class=\"tab-pane fade\" id=\"card-settings\">
                            <div class=\"form-group\">
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"card_status-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 321
        echo ($context["help_status_total"] ?? null);
        echo "\">";
        echo ($context["entry_status_total"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-4\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 324
        if (($context["module_membership_card_status"] ?? null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_card_status\" value=\"0\" id=\"card_status-disabled\">
                                        <label class=\"col-sm-4\" for=\"card_status-enabled\">";
            // line 326
            echo ($context["text_disabled"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_card_status\" value=\"1\" id=\"card_status-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"card_status-disabled\">";
            // line 328
            echo ($context["text_enabled"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 329
            echo " 
                                        <input type=\"radio\" name=\"module_membership_card_status\" value=\"0\" id=\"card_status-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"card_status-enabled\">";
            // line 331
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_card_status\" value=\"1\" id=\"card_status-enabled\">
                                        <label class=\"col-sm-4\" for=\"card_status-disabled\">";
            // line 333
            echo ($context["text_enabled"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 334
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
\t      \t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-offset-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t\t<li ";
            // line 342
            echo (((($context["language_id"] ?? null) == (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["language"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["language_id"] ?? null) : null))) ? (" class=\"active\"") : (""));
            echo "><a href=\"#card_";
            echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["language"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["language_id"] ?? null) : null);
            echo "\" aria-controls=\"card_";
            echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["language"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["language_id"] ?? null) : null);
            echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
            echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["language_flag"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921[(($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["language"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["language"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["language"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["name"] ?? null) : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "\t
\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t";
        // line 347
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
            // line 348
            echo (((($context["language_id"] ?? null) == (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["language"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["language_id"] ?? null) : null))) ? (" active") : (""));
            echo "\" id=\"card_";
            echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["language"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["language_id"] ?? null) : null);
            echo "\">\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"card_name_";
            // line 350
            echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["language"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["language_id"] ?? null) : null);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_name_total"] ?? null);
            echo "\">";
            echo ($context["entry_name_total"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_membership_card[name][";
            // line 352
            echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["language"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["language_id"] ?? null) : null);
            echo "]\" value=\"";
            echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = ($context["module_membership_card"] ?? null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["name"] ?? null) : null)) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c[(($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["language"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_name_total"] ?? null);
            echo "\" id=\"card_name_";
            echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["language"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["language_id"] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"nearest_discount_description_";
            // line 356
            echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["language"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["language_id"] ?? null) : null);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_nearest_discount_description"] ?? null);
            echo "\">";
            echo ($context["entry_nearest_discount_description"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"module_membership_card[nearest_discount_description][";
            // line 358
            echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["language"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["language_id"] ?? null) : null);
            echo "]\" placeholder=\"";
            echo ($context["entry_nearest_discount_description"] ?? null);
            echo "\" class=\"form-control summernote\">";
            echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = ($context["module_membership_card"] ?? null)) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["nearest_discount_description"] ?? null) : null)) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 358)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"nearest_discount-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 366
        echo ($context["help_nearest_discount"] ?? null);
        echo "\">";
        echo ($context["entry_nearest_discount"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-2\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 369
        if ( !(($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = ($context["module_membership_card"] ?? null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["nearest_discount"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_card[nearest_discount]\" value=\"0\" id=\"nearest_discount-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"nearest_discount-enabled\">";
            // line 371
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_card[nearest_discount]\" value=\"1\" id=\"nearest_discount-enabled\">
                                        <label class=\"col-sm-4\" for=\"nearest_discount-disabled\">";
            // line 373
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 374
            echo " 
                                        <input type=\"radio\" name=\"module_membership_card[nearest_discount]\" value=\"0\" id=\"nearest_discount-disabled\">
                                        <label class=\"col-sm-4\" for=\"nearest_discount-enabled\">";
            // line 376
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_card[nearest_discount]\" value=\"1\" id=\"nearest_discount-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"nearest_discount-disabled\">";
            // line 378
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 379
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"code_characters\"><span data-toggle=\"tooltip\" title=\"";
        // line 384
        echo ($context["help_code_characters"] ?? null);
        echo "\">";
        echo ($context["entry_code_characters"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 135px; overflow: auto;\">
\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t";
        // line 388
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["code_characters"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 389
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label>

\t\t\t\t\t\t\t\t\t\t\t";
            // line 392
            if ((((($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = ($context["module_membership_card"] ?? null)) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["code_characters"] ?? null) : null) && twig_test_iterable((($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = ($context["module_membership_card"] ?? null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["code_characters"] ?? null) : null))) && twig_in_filter($context["k"], (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = ($context["module_membership_card"] ?? null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["code_characters"] ?? null) : null)))) {
                // line 393
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_membership_card[code_characters][]\" value=\"";
                echo $context["k"];
                echo "\" checked=\"checked\" /> ";
                echo $context["v"];
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 395
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_membership_card[code_characters][]\" value=\"";
                echo $context["k"];
                echo "\" /> ";
                echo $context["v"];
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 397
            echo "\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                                <label class=\"col-sm-2 control-label\" for=\"code_prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 402
        echo ($context["help_code_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_code_prefix"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t                <input type=\"text\" name=\"module_membership_card[code_prefix]\" value=\"";
        // line 404
        echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["module_membership_card"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["code_prefix"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_code_prefix"] ?? null);
        echo "\" id=\"code_prefix\" class=\"form-control\" />
\t\t\t\t\t            </div>
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"code_length\"><span data-toggle=\"tooltip\" title=\"";
        // line 406
        echo ($context["help_code_length"] ?? null);
        echo "\">";
        echo ($context["entry_code_length"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t                <input type=\"text\" name=\"module_membership_card[code_length]\" value=\"";
        // line 408
        echo (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = ($context["module_membership_card"] ?? null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["code_length"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_code_length"] ?? null);
        echo "\" id=\"code_length\" class=\"form-control\" />
\t\t\t\t\t            </div>
\t\t\t\t\t        </div>
\t\t\t\t\t        <div class=\"form-group\">
\t\t\t\t\t        \t<label class=\"col-sm-2 control-label\" for=\"order_expiry\"><span data-toggle=\"tooltip\" title=\"";
        // line 412
        echo ($context["help_order_expiry"] ?? null);
        echo "\">";
        echo ($context["entry_order_expiry"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t        <div class=\"col-sm-5\">
\t\t\t\t\t\t        \t<select name=\"module_membership_card[order_expiry][type]\" id=\"order_expiry_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 415
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["time"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 416
            echo "\t      \t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_membership_card"] ?? null), "order_expiry", [], "array", false, true, false, 416), ($context["type"] ?? null), [], "array", true, true, false, 416) && ($context["k"] == (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = ($context["module_membership_card"] ?? null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["order_expiry"] ?? null) : null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9[($context["type"] ?? null)] ?? null) : null)))) {
                // line 417
                echo "\t\t\t\t\t\t            \t<option value=\"";
                echo $context["k"];
                echo "\" selected=\"selected\">";
                echo $context["v"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 419
                echo "\t\t\t\t\t\t            \t<option value=\"";
                echo $context["k"];
                echo "\">";
                echo $context["v"];
                echo "</option>
\t\t\t\t\t\t            \t";
            }
            // line 421
            echo "\t\t\t\t\t\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 422
        echo "\t\t\t\t\t\t            </select>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t        <div class=\"col-sm-5\">\t\t
\t\t\t\t\t\t            <input type=\"text\" name=\"module_membership_card[order_expiry][value]\" value=\"";
        // line 425
        echo (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = (($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = ($context["module_membership_card"] ?? null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["order_expiry"] ?? null) : null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416[($context["value"] ?? null)] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_expiry"] ?? null);
        echo "\" id=\"order_expiry\" class=\"form-control\" />
\t\t\t\t\t\t        </div>
\t\t\t\t\t        </div>

                           <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"accounted_orders_balance\"><span data-toggle=\"tooltip\" title=\"";
        // line 430
        echo ($context["help_accounted_orders_balance"] ?? null);
        echo "\">";
        echo ($context["entry_accounted_orders_balance"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-4\">
\t      \t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 135px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 433
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_types_b"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 434
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t\t  ";
            // line 436
            if ((((($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = ($context["module_membership_card"] ?? null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["accounted_orders_balance"] ?? null) : null) && twig_test_iterable((($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = ($context["module_membership_card"] ?? null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["accounted_orders_balance"] ?? null) : null))) && twig_in_filter($context["k"], (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = ($context["module_membership_card"] ?? null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["accounted_orders_balance"] ?? null) : null)))) {
                // line 437
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_membership_card[accounted_orders_balance][]\" value=\"";
                echo $context["k"];
                echo "\" id=\"accounted_orders_balance-";
                echo $context["k"];
                echo "\" checked=\"checked\" /> ";
                echo $context["v"];
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 439
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_membership_card[accounted_orders_balance][]\" value=\"";
                echo $context["k"];
                echo "\" id=\"accounted_orders_balance-";
                echo $context["k"];
                echo "\" /> ";
                echo $context["v"];
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 441
            echo "\t\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
        echo "\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>\t\t
                                <label class=\"col-sm-2 control-label\" for=\"accounted_orders_request\"><span data-toggle=\"tooltip\" title=\"";
        // line 447
        echo ($context["help_accounted_orders_request"] ?? null);
        echo "\">";
        echo ($context["entry_accounted_orders_request"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-4\">
\t      \t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 135px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_types_r"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 451
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
            // line 453
            if ((((($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = ($context["module_membership_card"] ?? null)) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["accounted_orders_request"] ?? null) : null) && twig_test_iterable((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = ($context["module_membership_card"] ?? null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["accounted_orders_request"] ?? null) : null))) && twig_in_filter($context["k"], (($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = ($context["module_membership_card"] ?? null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["accounted_orders_request"] ?? null) : null)))) {
                // line 454
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_membership_card[accounted_orders_request][]\" value=\"";
                echo $context["k"];
                echo "\" checked=\"checked\" /> ";
                echo $context["v"];
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 456
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_membership_card[accounted_orders_request][]\" value=\"";
                echo $context["k"];
                echo "\" /> ";
                echo $context["v"];
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 458
            echo "\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 461
        echo "\t\t\t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
                            <div class=\"form-group\">\t
                                <label class=\"col-sm-2 control-label\" for=\"request_threshold\"><span data-toggle=\"tooltip\" title=\"";
        // line 465
        echo ($context["help_request_threshold"] ?? null);
        echo "\">";
        echo ($context["entry_threshold"] ?? null);
        echo "</span></label>
\t\t\t\t                <div class=\"col-sm-10\">
\t\t\t\t                \t<div class=\"input-group\">
\t\t\t\t                \t\t<input type=\"text\" name=\"module_membership_card[request_threshold]\" value=\"";
        // line 468
        echo (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = ($context["module_membership_card"] ?? null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["request_threshold"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_threshold"] ?? null);
        echo "\" id=\"request_threshold\" class=\"form-control\" />
\t\t\t\t                \t\t<span class=\"input-group-addon\">";
        // line 469
        echo ($context["currency_symbol"] ?? null);
        echo "</span>
\t    \t\t\t\t\t\t\t</div>
\t\t\t\t                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"auto_issuance_card\"><span data-toggle=\"tooltip\" title=\"";
        // line 474
        echo ($context["help_auto_issuance_card"] ?? null);
        echo "\">";
        echo ($context["entry_auto_issuance_card"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t 
\t      \t\t\t\t\t\t\t<select name=\"module_membership_card[auto_issuance_card]\" id=\"auto_issuance_card\" class=\"form-control\">
\t      \t\t\t\t\t\t\t\t";
        // line 478
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["auto_issuance_types"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo " 
\t      \t\t\t\t\t\t\t\t\t";
            // line 479
            if ((twig_get_attribute($this->env, $this->source, ($context["module_membership_card"] ?? null), "auto_issuance_card", [], "array", true, true, false, 479) && ($context["k"] == (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = ($context["module_membership_card"] ?? null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["auto_issuance_card"] ?? null) : null)))) {
                echo " 
\t      \t\t\t\t\t\t\t\t<option value=\"";
                // line 480
                echo $context["k"];
                echo "\" selected=\"selected\">";
                echo $context["v"];
                echo "</option>
\t      \t\t\t\t\t\t\t\t\t";
            } else {
                // line 481
                echo " 
\t      \t\t\t\t\t\t\t\t<option value=\"";
                // line 482
                echo $context["k"];
                echo "\">";
                echo $context["v"];
                echo "</option>
\t      \t\t\t\t\t\t\t\t\t";
            }
            // line 483
            echo " 
\t      \t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 484
        echo " 
\t      \t\t\t\t\t\t\t</select>
 
\t      \t\t\t\t\t\t</div>
                            </div>
                            <div class=\"form-group\">
                            \t<label class=\"col-sm-2 control-label\" for=\"logged_card_request-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 490
        echo ($context["help_logged_card_request"] ?? null);
        echo "\">";
        echo ($context["entry_logged_card_request"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-2\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 493
        if ( !(($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = ($context["module_membership_card"] ?? null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["logged_card_request"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_card[logged_card_request]\" value=\"0\" id=\"logged_card_request-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"logged_card_request-enabled\">";
            // line 495
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_card[logged_card_request]\" value=\"1\" id=\"logged_card_request-enabled\">
                                        <label class=\"col-sm-4\" for=\"logged_card_request-disabled\">";
            // line 497
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 498
            echo " 
                                        <input type=\"radio\" name=\"module_membership_card[logged_card_request]\" value=\"0\" id=\"logged_card_request-disabled\">
                                        <label class=\"col-sm-4\" for=\"logged_card_request-enabled\">";
            // line 500
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_card[logged_card_request]\" value=\"1\" id=\"logged_card_request-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"logged_card_request-disabled\">";
            // line 502
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 503
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>  
                            </div>
                            <div class=\"form-group\">
                            \t<label class=\"col-sm-2 control-label\" for=\"card_request_discount-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 508
        echo ($context["help_card_request_discount"] ?? null);
        echo "\">";
        echo ($context["entry_card_request_discount"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-2\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 511
        if ( !(($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = ($context["module_membership_card"] ?? null)) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["request_discount"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_card[request_discount]\" value=\"0\" id=\"card_request_discount-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"card_request_discount-enabled\">";
            // line 513
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_card[request_discount]\" value=\"1\" id=\"card_request_discount-enabled\">
                                        <label class=\"col-sm-4\" for=\"card_request_discount-disabled\">";
            // line 515
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 516
            echo " 
                                        <input type=\"radio\" name=\"module_membership_card[request_discount]\" value=\"0\" id=\"card_request_discount-disabled\">
                                        <label class=\"col-sm-4\" for=\"card_request_discount-enabled\">";
            // line 518
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_card[request_discount]\" value=\"1\" id=\"card_request_discount-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"card_request_discount-disabled\">";
            // line 520
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 521
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"first_discount_type\"><span data-toggle=\"tooltip\" title=\"";
        // line 524
        echo ($context["help_first_discount_type"] ?? null);
        echo "\">";
        echo ($context["entry_first_discount_type"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-2\">
\t      \t\t\t\t\t\t\t<select name=\"module_membership_card[first_discount_type]\" id=\"first_discount_type\" class=\"form-control\">
\t      \t\t\t\t\t\t\t\t";
        // line 527
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["first_discount_type"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo " 
\t      \t\t\t\t\t\t\t\t\t";
            // line 528
            if (((($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = ($context["module_membership_card"] ?? null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["first_discount_type"] ?? null) : null) && ($context["k"] == (($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = ($context["module_membership_card"] ?? null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["first_discount_type"] ?? null) : null)))) {
                echo " 
\t      \t\t\t\t\t\t\t\t<option value=\"";
                // line 529
                echo $context["k"];
                echo "\" selected=\"selected\">";
                echo $context["v"];
                echo "</option>
\t      \t\t\t\t\t\t\t\t\t";
            } else {
                // line 530
                echo " 
\t      \t\t\t\t\t\t\t\t<option value=\"";
                // line 531
                echo $context["k"];
                echo "\">";
                echo $context["v"];
                echo "</option>
\t      \t\t\t\t\t\t\t\t\t";
            }
            // line 532
            echo " 
\t      \t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        echo " 
\t      \t\t\t\t\t\t\t</select>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"first_discount_value\"><span data-toggle=\"tooltip\" title=\"";
        // line 536
        echo ($context["help_first_discount_value"] ?? null);
        echo "\">";
        echo ($context["entry_first_discount_value"] ?? null);
        echo "</span></label>
\t\t\t\t                <div class=\"col-sm-2\">
\t\t\t\t                \t<input type=\"text\" name=\"module_membership_card[first_discount_value]\" value=\"";
        // line 538
        echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = ($context["module_membership_card"] ?? null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["first_discount_value"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_first_discount_value"] ?? null);
        echo "\" id=\"first_discount_value\" class=\"form-control\" />

\t\t\t\t                </div>     
\t\t\t\t            </div>
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"logged_auto_discount-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 543
        echo ($context["help_logged_auto_discount"] ?? null);
        echo "\">";
        echo ($context["entry_logged_auto_discount"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-2\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 546
        if ( !(($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = ($context["module_membership_card"] ?? null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["logged_auto_discount"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_card[logged_auto_discount]\" value=\"0\" id=\"logged_auto_discount-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"logged_auto_discount-enabled\">";
            // line 548
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_card[logged_auto_discount]\" value=\"1\" id=\"logged_auto_discount-enabled\">
                                        <label class=\"col-sm-4\" for=\"logged_auto_discount-disabled\">";
            // line 550
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 551
            echo " 
                                        <input type=\"radio\" name=\"module_membership_card[logged_auto_discount]\" value=\"0\" id=\"logged_auto_discount-disabled\">
                                        <label class=\"col-sm-4\" for=\"logged_auto_discount-enabled\">";
            // line 553
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_card[logged_auto_discount]\" value=\"1\" id=\"logged_auto_discount-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"logged_auto_discount-disabled\">";
            // line 555
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 556
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div> 
\t\t\t\t\t\t    </div>
                            <div class=\"form-group\">
\t\t\t\t                <label class=\"col-sm-2 control-label\" for=\"minimum_cost_goods\"><span data-toggle=\"tooltip\" title=\"";
        // line 561
        echo ($context["help_minimum_cost_goods"] ?? null);
        echo "\">";
        echo ($context["entry_minimum_cost_goods"] ?? null);
        echo "</span></label>
\t\t\t\t                <div class=\"col-sm-10\">
\t\t\t\t                \t<div class=\"input-group\">
\t\t\t\t                \t\t<input type=\"text\" name=\"module_membership_card[minimum_cost_goods]\" value=\"";
        // line 564
        echo (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = ($context["module_membership_card"] ?? null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["minimum_cost_goods"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum_cost_goods"] ?? null);
        echo "\" id=\"minimum_cost_goods\" class=\"form-control\" />
\t\t\t\t                \t\t<span class=\"input-group-addon\">";
        // line 565
        echo ($context["currency_symbol"] ?? null);
        echo "</span>
\t\t\t\t                \t</div>\t
\t\t\t\t                </div>
                            </div>
                            <div class=\"form-group\">
\t\t\t\t            \t<label class=\"col-sm-2 control-label\" for=\"maximum_card_discount\"><span data-toggle=\"tooltip\" title=\"";
        // line 570
        echo ($context["help_maximum_card_discount"] ?? null);
        echo "\">";
        echo ($context["entry_maximum_discount"] ?? null);
        echo "</span></label>
\t\t\t\t            \t<div class=\"col-sm-10\">
\t\t\t\t\t            \t<div class=\"input-group\">
\t\t\t\t              \t\t\t<input type=\"text\" name=\"module_membership_card[maximum_card_discount]\" value=\"";
        // line 573
        echo (($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = ($context["module_membership_card"] ?? null)) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["maximum_card_discount"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_maximum_discount"] ?? null);
        echo "\" id=\"maximum_card_discount\" class=\"form-control\" />
\t\t\t\t              \t\t\t<span class=\"input-group-addon\">";
        // line 574
        echo ($context["text_pct"] ?? null);
        echo "</span>
\t\t\t\t              \t\t</div>
\t\t\t              \t\t</div>
\t\t\t\t          \t</div>
\t\t\t\t\t\t</div>
                        <div class=\"tab-pane fade\" id=\"default-card-settings\">
\t      \t\t\t\t\t<div class=\"form-group\">
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"default-card-status-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 581
        echo ($context["help_card_status"] ?? null);
        echo "\">";
        echo ($context["entry_card_status"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-4\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 584
        if ( !(($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["status"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_default_card[status]\" value=\"0\" id=\"default-card-status-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"default-card-status-enabled\">";
            // line 586
            echo ($context["text_disabled"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_default_card[status]\" value=\"1\" id=\"default-card-status-enabled\">
                                        <label class=\"col-sm-4\" for=\"default-card-status-disabled\">";
            // line 588
            echo ($context["text_enabled"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 589
            echo " 
                                        <input type=\"radio\" name=\"module_membership_default_card[status]\" value=\"0\" id=\"default-card-status-disabled\">
                                        <label class=\"col-sm-4\" for=\"default-card-status-enabled\">";
            // line 591
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_default_card[status]\" value=\"1\" id=\"default-card-status-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"default-card-status-disabled\">";
            // line 593
            echo ($context["text_enabled"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 594
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
\t\t\t\t            <div class=\"form-group\">
\t\t\t\t            \t<label class=\"col-sm-2 control-label\" for=\"default-card-date_start\"><span data-toggle=\"tooltip\" title=\"";
        // line 599
        echo ($context["help_card_start"] ?? null);
        echo "\">";
        echo ($context["entry_start"] ?? null);
        echo "</span></label>
\t    \t\t\t\t\t\t<div class=\"col-sm-4\">
\t    \t\t\t\t\t\t\t<div class=\"input-group\">
\t    \t\t\t\t\t\t\t\t<span class=\"input-group-btn\" style=\"width: 50%;\">
\t    \t\t\t\t\t\t\t\t\t<select name=\"module_membership_default_card[date_start][type]\" class=\"form-control\">
\t    \t\t\t\t\t\t\t\t\t";
        // line 604
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["time"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo " 
\t    \t\t\t\t\t\t\t\t\t\t";
            // line 605
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_membership_default_card"] ?? null), "date_start", [], "array", false, true, false, 605), "type", [], "array", true, true, false, 605) && ($context["k"] == (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["date_start"] ?? null) : null)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["type"] ?? null) : null)))) {
                echo " 
\t    \t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 606
                echo $context["k"];
                echo "\" selected=\"selected\">";
                echo $context["v"];
                echo "</option>
\t    \t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 607
                echo " 
\t\t\t\t\t\t\t\t                <option value=\"";
                // line 608
                echo $context["k"];
                echo "\">";
                echo $context["v"];
                echo "</option>
\t\t\t\t\t\t\t\t                ";
            }
            // line 609
            echo " 
\t\t\t\t\t\t\t\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 610
        echo " 
\t\t\t\t\t\t\t\t            </select>
\t\t\t\t\t\t\t\t        </span>
\t\t\t\t\t\t\t\t     \t<input type=\"text\" name=\"module_membership_default_card[date_start][value]\" value=\"";
        // line 613
        echo (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["date_start"] ?? null) : null)) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["value"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_start"] ?? null);
        echo "\" id=\"default-card-date_start\" class=\"form-control\" />
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t        <label class=\"col-sm-2 control-label\" for=\"default-card-date_expiry\"><span data-toggle=\"tooltip\" title=\"";
        // line 616
        echo ($context["help_card_expiry"] ?? null);
        echo "\">";
        echo ($context["entry_expiry"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t        <div class=\"col-sm-4\">
\t\t\t\t\t\t        \t<div class=\"input-group\">
\t\t\t\t\t\t        \t\t<span class=\"input-group-btn\" style=\"width: 50%;\">
\t\t\t\t\t\t        \t\t\t<select name=\"module_membership_default_card[date_expiry][type]\" class=\"form-control\">
\t\t\t\t\t\t            \t\t";
        // line 621
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["time"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo " 
\t\t\t\t\t\t            \t\t\t";
            // line 622
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module_membership_default_card"] ?? null), "date_expiry", [], "array", false, true, false, 622), "type", [], "array", true, true, false, 622) && ($context["k"] == (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["date_expiry"] ?? null) : null)) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["type"] ?? null) : null)))) {
                echo " 
\t\t\t\t\t\t            \t\t\t<option value=\"";
                // line 623
                echo $context["k"];
                echo "\" selected=\"selected\">";
                echo $context["v"];
                echo "</option>
\t\t\t\t\t\t            \t\t\t";
            } else {
                // line 624
                echo " 
\t\t\t\t\t\t            \t\t\t<option value=\"";
                // line 625
                echo $context["k"];
                echo "\">";
                echo $context["v"];
                echo "</option>
\t\t\t\t\t\t            \t\t\t";
            }
            // line 626
            echo " 
\t\t\t\t\t\t            \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 627
        echo " 
\t\t\t\t\t\t            \t\t</select>
\t\t\t\t\t\t            \t</span>
\t\t\t\t\t\t            \t<input type=\"text\" name=\"module_membership_default_card[date_expiry][value]\" value=\"";
        // line 630
        echo (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["date_expiry"] ?? null) : null)) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3["value"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_expiry"] ?? null);
        echo "\" id=\"default-card-date_expiry\" class=\"form-control\" />
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t        <div class=\"panel panel-default\">
\t\t\t\t\t        \t<div class=\"panel-heading\">
\t\t\t\t\t            \t<h3 class=\"panel-title\"><i class=\"fa fa-table\"></i> ";
        // line 636
        echo ($context["text_discount_table"] ?? null);
        echo "</h3>
\t\t\t\t\t            </div>
\t\t\t\t\t            <div class=\"panel-body\">
\t\t\t\t\t            \t<div class=\"table-responsive\">
\t\t\t\t\t            \t\t<table class=\"table table-bordered table-hover\" id=\"table-discounts\">
\t\t\t\t\t            \t\t\t<thead>
\t\t\t\t\t            \t\t\t\t<tr>
\t\t\t\t\t            \t\t\t\t\t<td class=\"text-center\"><span data-toggle=\"tooltip\" title=\"";
        // line 643
        echo ($context["help_discount_base"] ?? null);
        echo "\">";
        echo ($context["column_discount_base"] ?? null);
        echo "</span></td>
\t\t\t\t\t            \t\t\t\t\t<td class=\"text-center\"><span data-toggle=\"tooltip\" title=\"";
        // line 644
        echo ($context["help_discount_limit"] ?? null);
        echo "\">";
        echo ($context["column_discount_limit"] ?? null);
        echo "</span></td>
\t\t\t\t\t            \t\t\t\t\t<td class=\"text-center\"><span data-toggle=\"tooltip\" title=\"";
        // line 645
        echo ($context["help_discount_value"] ?? null);
        echo "\">";
        echo ($context["column_discount_value"] ?? null);
        echo "</span></td>
\t\t\t\t\t            \t\t\t\t\t<td class=\"text-center\"><span data-toggle=\"tooltip\" title=\"";
        // line 646
        echo ($context["help_discount_type"] ?? null);
        echo "\">";
        echo ($context["column_discount_type"] ?? null);
        echo "</span></td>
\t\t\t\t\t            \t\t\t\t\t<td class=\"text-center\">";
        // line 647
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t            \t\t\t\t</tr>
\t\t\t\t\t            \t\t\t</thead>
\t\t\t\t\t            \t\t\t<tbody>
\t\t\t\t\t            \t\t\t";
        // line 651
        if ((($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["discount"] ?? null) : null)) {
            echo " ";
            $context["count"] = 0;
            echo " 
\t\t\t\t\t\t\t\t                ";
            // line 652
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["discount"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                echo " 
\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t                \t<td>
\t\t\t\t\t\t\t\t                \t\t<select name=\"module_membership_default_card[discount][";
                // line 655
                echo ($context["count"] ?? null);
                echo "][base]\" class=\"form-control\">
\t\t\t\t\t\t\t\t                \t\t";
                // line 656
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discount_base"] ?? null));
                foreach ($context['_seq'] as $context["v"] => $context["n"]) {
                    echo " 
\t\t\t\t\t\t\t\t                \t\t\t";
                    // line 657
                    if (($context["v"] == (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = $context["discount"]) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa["base"] ?? null) : null))) {
                        echo " 
\t\t\t\t\t\t\t\t                \t\t\t<option value=\"";
                        // line 658
                        echo $context["v"];
                        echo "\" selected=\"selected\">";
                        echo $context["n"];
                        echo "</option>
\t\t\t\t\t\t\t\t                \t\t\t";
                    } else {
                        // line 659
                        echo " 
\t\t\t\t\t\t\t\t                \t\t\t<option value=\"";
                        // line 660
                        echo $context["v"];
                        echo "\">";
                        echo $context["n"];
                        echo "</option>
\t\t\t\t\t\t\t\t                \t\t\t";
                    }
                    // line 661
                    echo " 
\t\t\t\t\t\t\t\t                \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['v'], $context['n'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 662
                echo " 
\t\t\t\t\t\t\t\t                \t\t</select>
\t\t\t\t\t\t\t\t                \t</td>
\t\t\t\t\t\t\t\t                \t<td>
\t\t\t\t\t\t\t\t                \t\t<input type=\"text\" name=\"module_membership_default_card[discount][";
                // line 666
                echo ($context["count"] ?? null);
                echo "][limit]\" value=\"";
                echo (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = $context["discount"]) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["limit"] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["column_discount_limit"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                \t</td>
\t\t\t\t\t\t\t\t                \t<td>
\t\t\t\t\t\t\t\t                \t\t<input type=\"text\" name=\"module_membership_default_card[discount][";
                // line 669
                echo ($context["count"] ?? null);
                echo "][value]\" value=\"";
                echo (($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = $context["discount"]) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c["value"] ?? null) : null);
                echo "\" placeholder=\"";
                echo ($context["column_discount_value"] ?? null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t                \t</td>
\t\t\t\t\t\t\t\t                \t<td>
\t\t\t\t\t\t\t\t                \t\t<select name=\"module_membership_default_card[discount][";
                // line 672
                echo ($context["count"] ?? null);
                echo "][type]\" class=\"form-control\">
\t\t\t\t\t\t\t\t                \t\t";
                // line 673
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discount_type"] ?? null));
                foreach ($context['_seq'] as $context["v"] => $context["n"]) {
                    echo " 
\t\t\t\t\t\t\t\t                \t\t\t";
                    // line 674
                    if (($context["v"] == (($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = $context["discount"]) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a["type"] ?? null) : null))) {
                        echo " 
\t\t\t\t\t\t\t\t                \t\t\t<option value=\"";
                        // line 675
                        echo $context["v"];
                        echo "\" selected=\"selected\">";
                        echo $context["n"];
                        echo "</option>
\t\t\t\t\t\t\t\t                \t\t\t";
                    } else {
                        // line 676
                        echo " 
\t\t\t\t\t\t\t\t                \t\t\t<option value=\"";
                        // line 677
                        echo $context["v"];
                        echo "\">";
                        echo $context["n"];
                        echo "</option>
\t\t\t\t\t\t\t\t                \t\t\t";
                    }
                    // line 678
                    echo " 
\t\t\t\t\t\t\t\t                \t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['v'], $context['n'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 679
                echo " 
\t\t\t\t\t\t\t\t                \t\t</select>
\t\t\t\t\t\t\t\t                \t</td>
\t\t\t\t\t\t\t\t                \t<td class=\"text-center\">
\t\t\t\t\t\t\t\t                \t\t<button type=\"button\" onclick=\"\$(this).parents('tr').remove()\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t\t\t                \t</td>
\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t                ";
                // line 686
                $context["count"] = (($context["count"] ?? null) + 1);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t\t\t\t\t\t\t            ";
        }
        // line 687
        echo " 
\t\t\t\t\t\t\t\t            </tbody>
\t\t\t\t\t\t\t\t            <tfoot>
\t\t\t\t\t\t\t\t                <tr>
\t\t\t\t\t\t\t\t                \t<td colspan=\"4\"></td>
\t\t\t\t\t\t\t\t                \t<td class=\"text-center\">
\t\t\t\t\t\t\t\t                \t\t<button type=\"button\" onclick=\"addDiscount('table-discounts', 'module_membership_default_card[discount]')\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t\t\t\t                \t</td>
\t\t\t\t\t\t\t\t                </tr>
\t\t\t\t\t\t\t\t            </tfoot>
\t\t\t\t\t\t\t\t        </table>
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"default-card-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 702
        echo ($context["help_card_categories"] ?? null);
        echo "\">";
        echo ($context["entry_categories"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t    \t<div class=\"col-sm-10\">
\t\t\t\t\t\t    \t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 704
        echo ($context["entry_categories"] ?? null);
        echo "\" id=\"default-card-category\" class=\"form-control\" />
\t\t\t\t\t\t        \t<div id=\"default-card-categories\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t        \t";
        // line 706
        if ((($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6["categories"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t        \t\t";
            // line 707
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo " 
\t\t\t\t\t\t        \t\t<div id=\"default-card-categories-";
                // line 708
                echo (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = $context["category"]) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b["category_id"] ?? null) : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo (($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = $context["category"]) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526["name"] ?? null) : null);
                echo " 
\t\t\t\t\t\t        \t\t\t<input type=\"hidden\" name=\"module_membership_default_card[categories][]\" value=\"";
                // line 709
                echo (($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = $context["category"]) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f["category_id"] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t        \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 711
            echo " 
\t\t\t\t\t\t        \t";
        }
        // line 712
        echo " 
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
 
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"default-card-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 718
        echo ($context["help_card_products"] ?? null);
        echo "\">";
        echo ($context["entry_products"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t    \t<div class=\"col-sm-10\">
\t\t\t\t\t\t    \t\t<input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 720
        echo ($context["entry_products"] ?? null);
        echo "\" id=\"default-card-product\" class=\"form-control\" />
\t\t\t\t\t\t    \t\t<div id=\"default-card-products\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t";
        // line 722
        if (((($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c["products"] ?? null) : null) && twig_test_iterable((($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74["products"] ?? null) : null)))) {
            // line 723
            echo "\t\t\t\t\t\t    \t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
\t\t\t\t\t\t        \t\t<div id=\"default-card-products-";
                // line 724
                echo (($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = $context["product"]) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff["product_id"] ?? null) : null);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo (($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = $context["product"]) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918["name"] ?? null) : null);
                echo " 
\t\t\t\t\t\t        \t\t\t<input type=\"hidden\" name=\"module_membership_default_card[products][]\" value=\"";
                // line 725
                echo (($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = $context["product"]) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5["product_id"] ?? null) : null);
                echo "\" />
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t        \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 727
            echo " 
\t\t\t\t\t\t        \t";
        }
        // line 728
        echo " 
\t\t\t\t\t\t        \t</div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"default-card-logged-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 733
        echo ($context["help_logged"] ?? null);
        echo "\">";
        echo ($context["entry_logged"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-2\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 736
        if ( !(($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219["logged"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_default_card[logged]\" value=\"0\" id=\"default-card-logged-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"default-card-logged-enabled\">";
            // line 738
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_default_card[logged]\" value=\"1\" id=\"default-card-logged-enabled\">
                                        <label class=\"col-sm-4\" for=\"default-card-logged-disabled\">";
            // line 740
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 741
            echo " 
                                        <input type=\"radio\" name=\"module_membership_default_card[logged]\" value=\"0\" id=\"default-card-logged-disabled\">
                                        <label class=\"col-sm-4\" for=\"default-card-logged-enabled\">";
            // line 743
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_default_card[logged]\" value=\"1\" id=\"default-card-logged-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"default-card-logged-disabled\">";
            // line 745
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 746
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div> 
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t        <label class=\"col-sm-2 control-label\" for=\"default-card-free_shipping-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 751
        echo ($context["help_free_shipping"] ?? null);
        echo "\">";
        echo ($context["entry_free_shipping"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t        <div class=\"col-sm-2\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 754
        if ( !(($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20["free_shipping"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_default_card[free_shipping]\" value=\"0\" id=\"default-card-free_shipping-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"default-card-free_shipping-enabled\">";
            // line 756
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_default_card[free_shipping]\" value=\"1\" id=\"default-card-free_shipping-enabled\">
                                        <label class=\"col-sm-4\" for=\"default-card-free_shipping-disabled\">";
            // line 758
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 759
            echo " 
                                        <input type=\"radio\" name=\"module_membership_default_card[free_shipping]\" value=\"0\" id=\"default-card-free_shipping-disabled\">
                                        <label class=\"col-sm-4\" for=\"default-card-free_shipping-enabled\">";
            // line 761
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_default_card[free_shipping]\" value=\"1\" id=\"default-card-free_shipping-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"default-card-free_shipping-disabled\">";
            // line 763
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 764
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"default-card-minimum_order_amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 769
        echo ($context["help_minimum_order_amount"] ?? null);
        echo "\">";
        echo ($context["entry_minimum_order_amount"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t    \t<div class=\"col-sm-10\">
\t\t\t\t\t\t    \t\t<div class=\"input-group\">
\t\t\t\t\t\t    \t\t\t<input type=\"text\" name=\"module_membership_default_card[minimum_order_amount]\" value=\"";
        // line 772
        echo (($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16["minimum_order_amount"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum_order_amount"] ?? null);
        echo "\" id=\"default-card-minimum_order_amount\" class=\"form-control\" />
\t\t\t\t\t\t    \t\t\t<span class=\"input-group-addon\">";
        // line 773
        echo ($context["currency_symbol"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"default-card-maximum_order_amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 778
        echo ($context["help_maximum_order_amount"] ?? null);
        echo "\">";
        echo ($context["entry_maximum_order_amount"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t    \t<div class=\"col-sm-10\">
\t\t\t\t\t\t    \t\t<div class=\"input-group\">
\t\t\t\t\t\t    \t\t\t<input type=\"text\" name=\"module_membership_default_card[maximum_order_amount]\" value=\"";
        // line 781
        echo (($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0["maximum_order_amount"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_maximum_order_amount"] ?? null);
        echo "\" id=\"default-card-maximum_order_amount\" class=\"form-control\" />
\t\t\t\t\t\t    \t\t\t<span class=\"input-group-addon\">";
        // line 782
        echo ($context["currency_symbol"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"default-card-uses_total\"><span data-toggle=\"tooltip\" title=\"";
        // line 787
        echo ($context["help_uses_total"] ?? null);
        echo "\">";
        echo ($context["entry_uses_total"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t    \t<div class=\"col-sm-10\">
\t\t\t\t\t\t    \t\t<input type=\"text\" name=\"module_membership_default_card[uses_total]\" value=\"";
        // line 789
        echo (($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1["uses_total"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_total"] ?? null);
        echo "\" id=\"default-card-uses_total\" class=\"form-control\" />
\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"default-card-uses_customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 793
        echo ($context["help_uses_customer"] ?? null);
        echo "\">";
        echo ($context["entry_uses_customer"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t        <div class=\"col-sm-10\">
\t\t\t\t\t\t        \t<input type=\"text\" name=\"module_membership_default_card[uses_customer]\" value=\"";
        // line 795
        echo (($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = ($context["module_membership_default_card"] ?? null)) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008["uses_customer"] ?? null) : null);
        echo "\" placeholder=\"";
        echo ($context["entry_uses_customer"] ?? null);
        echo "\" id=\"default-card-uses_customer\" class=\"form-control\" />
\t\t\t\t\t\t        </div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"gifts-list\"></div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"gift-form\"></div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"gifts-history\"></div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"gift-settings\">
                            <div class=\"form-group\">
\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"gift_status-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 804
        echo ($context["help_status_total"] ?? null);
        echo "\">";
        echo ($context["entry_status_total"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-4\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 807
        if ((($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = ($context["module_membership_gift"] ?? null)) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00["status"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_gift[status]\" value=\"0\" id=\"gift_status-disabled\">
                                        <label class=\"col-sm-4\" for=\"gift_status-enabled\">";
            // line 809
            echo ($context["text_disabled"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_gift[status]\" value=\"1\" id=\"gift_status-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"gift_status-disabled\">";
            // line 811
            echo ($context["text_enabled"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 812
            echo " 
                                        <input type=\"radio\" name=\"module_membership_gift[status]\" value=\"0\" id=\"gift_status-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"gift_status-enabled\">";
            // line 814
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_gift[status]\" value=\"1\" id=\"gift_status-enabled\">
                                        <label class=\"col-sm-4\" for=\"gift_status-disabled\">";
            // line 816
            echo ($context["text_enabled"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 817
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div>
\t      \t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-10 col-sm-offset-2\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t";
        // line 824
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t\t<li";
            // line 825
            echo (((($context["language_id"] ?? null) == (($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = $context["language"]) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315["language_id"] ?? null) : null))) ? (" class=\"active\"") : (""));
            echo "><a href=\"#gift_";
            echo (($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = $context["language"]) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb["language_id"] ?? null) : null);
            echo "\" aria-controls=\"gift_";
            echo (($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = $context["language"]) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde["language_id"] ?? null) : null);
            echo "\" role=\"tab\" data-toggle=\"tab\"><img src=\"";
            echo (($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = ($context["language_flag"] ?? null)) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5[(($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = $context["language"]) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" title=\"";
            echo (($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = $context["language"]) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = $context["language"]) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d["name"] ?? null) : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 826
        echo "\t
\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t";
        // line 830
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane";
            // line 831
            echo (((($context["language_id"] ?? null) == (($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = $context["language"]) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d["language_id"] ?? null) : null))) ? (" active") : (""));
            echo "\" id=\"gift_";
            echo (($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = $context["language"]) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2["language_id"] ?? null) : null);
            echo "\">\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"gift_name_";
            // line 833
            echo (($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = $context["language"]) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6["language_id"] ?? null) : null);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_name_total"] ?? null);
            echo "\">";
            echo ($context["entry_name_total"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_membership_gift[name][";
            // line 835
            echo (($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = $context["language"]) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a["language_id"] ?? null) : null);
            echo "]\" value=\"";
            echo (($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = (($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = ($context["module_membership_gift"] ?? null)) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523["name"] ?? null) : null)) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee[(($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = $context["language"]) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc["language_id"] ?? null) : null)] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_name_total"] ?? null);
            echo "\" id=\"gift_name_";
            echo (($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = $context["language"]) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a["language_id"] ?? null) : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t      \t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"nearest_gift_description_";
            // line 839
            echo (($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f = $context["language"]) && is_array($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f) || $__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f instanceof ArrayAccess ? ($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f["language_id"] ?? null) : null);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_nearest_gift_description"] ?? null);
            echo "\">";
            echo ($context["entry_nearest_gift_description"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"module_membership_gift[nearest_gift_description][";
            // line 841
            echo (($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d = $context["language"]) && is_array($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d) || $__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d instanceof ArrayAccess ? ($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d["language_id"] ?? null) : null);
            echo "]\" placeholder=\"";
            echo ($context["entry_nearest_gift_description"] ?? null);
            echo "\" class=\"form-control summernote\">";
            echo (($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e = (($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 = ($context["module_membership_gift"] ?? null)) && is_array($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81) || $__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 instanceof ArrayAccess ? ($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81["nearest_gift_description"] ?? null) : null)) && is_array($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e) || $__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e instanceof ArrayAccess ? ($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 841)] ?? null) : null);
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 845
        echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t    \t<label class=\"col-sm-2 control-label\" for=\"nearest_gift-enabled\"><span data-toggle=\"tooltip\" title=\"";
        // line 849
        echo ($context["help_nearest_gift"] ?? null);
        echo "\">";
        echo ($context["entry_nearest_gift"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-2\">
\t      \t\t\t\t\t\t\t<div class=\"radio-switch\">
\t      \t\t\t\t\t\t\t";
        // line 852
        if ( !(($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d = ($context["module_membership_gift"] ?? null)) && is_array($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d) || $__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d instanceof ArrayAccess ? ($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d["nearest_gift"] ?? null) : null)) {
            echo " 
\t\t\t\t\t\t                <input type=\"radio\" name=\"module_membership_gift[nearest_gift]\" value=\"0\" id=\"nearest_gift-disabled\" checked>
                                        <label class=\"col-sm-4\" for=\"nearest_gift-enabled\">";
            // line 854
            echo ($context["text_no"] ?? null);
            echo "</label>
\t      \t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_membership_gift[nearest_gift]\" value=\"1\" id=\"nearest_gift-enabled\">
                                        <label class=\"col-sm-4\" for=\"nearest_gift-disabled\">";
            // line 856
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t                ";
        } else {
            // line 857
            echo " 
                                        <input type=\"radio\" name=\"module_membership_gift[nearest_gift]\" value=\"0\" id=\"nearest_gift-disabled\">
                                        <label class=\"col-sm-4\" for=\"nearest_gift-enabled\">";
            // line 859
            echo ($context["text_no"] ?? null);
            echo "</label>
                                        <input type=\"radio\" name=\"module_membership_gift[nearest_gift]\" value=\"1\" id=\"nearest_gift-enabled\" checked>
                                        <label class=\"col-sm-4\" for=\"nearest_gift-disabled\">";
            // line 861
            echo ($context["text_yes"] ?? null);
            echo "</label>  
\t\t\t\t\t\t            ";
        }
        // line 862
        echo " 
\t      \t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
\t      \t\t\t\t\t</div> 
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"gift_name_action\"><span data-toggle=\"tooltip\" title=\"";
        // line 867
        echo ($context["help_gift_name_action"] ?? null);
        echo "\">";
        echo ($context["entry_gift_name_action"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-10\">
\t      \t\t\t\t\t\t\t<select name=\"module_membership_gift[name_action]\" id=\"gift_name_action\" class=\"form-control\">
\t      \t\t\t\t\t\t\t\t";
        // line 870
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gift_name_actions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo " 
\t      \t\t\t\t\t\t\t\t\t";
            // line 871
            if ((twig_get_attribute($this->env, $this->source, ($context["module_membership_gift"] ?? null), "name_action", [], "array", true, true, false, 871) && ($context["k"] == (($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 = ($context["module_membership_gift"] ?? null)) && is_array($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786) || $__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786 instanceof ArrayAccess ? ($__internal_3a9dc3313d7b7e5bd188b8c7855821892ed2495b7c38652392e95c46e3ce9786["name_action"] ?? null) : null)))) {
                echo " 
\t\t\t\t\t\t\t\t\t\t 
\t      \t\t\t\t\t\t\t\t<option value=\"";
                // line 873
                echo $context["k"];
                echo "\" selected=\"selected\">";
                echo $context["v"];
                echo "</option>
\t      \t\t\t\t\t\t\t\t\t";
            } else {
                // line 874
                echo " 
\t      \t\t\t\t\t\t\t\t<option value=\"";
                // line 875
                echo $context["k"];
                echo "\">";
                echo $context["v"];
                echo "</option>
\t      \t\t\t\t\t\t\t\t\t";
            }
            // line 876
            echo " 
\t      \t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 877
        echo " 
\t      \t\t\t\t\t\t\t</select>
\t      \t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t    <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"gift_place_of_display\"><span data-toggle=\"tooltip\" title=\"";
        // line 882
        echo ($context["help_gift_place_of_display"] ?? null);
        echo "\">";
        echo ($context["entry_gift_place_of_display"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-10\">
\t      \t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 80px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t";
        // line 885
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["places_of_display"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 886
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
            // line 888
            if ((((($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 = ($context["module_membership_gift"] ?? null)) && is_array($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4) || $__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4 instanceof ArrayAccess ? ($__internal_bc65b855468fc032933ffd32e86ec81770caf9414e1cc18f9eee5d4d0db749b4["place_of_display"] ?? null) : null) && twig_test_iterable((($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 = ($context["module_membership_gift"] ?? null)) && is_array($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1) || $__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1 instanceof ArrayAccess ? ($__internal_7a655eb775f25f1b3b03ef58e648554ab0e45601d2d581ae0732daf6c847cfb1["place_of_display"] ?? null) : null))) && twig_in_filter($context["k"], (($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc = ($context["module_membership_gift"] ?? null)) && is_array($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc) || $__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc instanceof ArrayAccess ? ($__internal_63945d420e9576d39ff82caebc45bb65b343c5aee618f6515ae6b08a084a61cc["place_of_display"] ?? null) : null)))) {
                // line 889
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_membership_gift[place_of_display][]\" value=\"";
                echo $context["k"];
                echo "\" checked=\"checked\" /> ";
                echo $context["v"];
                echo " 
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 890
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_membership_gift[place_of_display][]\" value=\"";
                // line 891
                echo $context["k"];
                echo "\" /> ";
                echo $context["v"];
                echo " 
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 892
            echo " 
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 895
        echo " 
\t\t\t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"gift_giving_mode\"><span data-toggle=\"tooltip\" title=\"";
        // line 900
        echo ($context["help_gift_giving_mode"] ?? null);
        echo "\">";
        echo ($context["entry_gift_giving_mode"] ?? null);
        echo "</span></label>
\t      \t\t\t\t\t\t<div class=\"col-sm-10\">
\t      \t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 135px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t";
        // line 903
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gift_giving_modes"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t";
            // line 906
            if ((((($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 = ($context["module_membership_gift"] ?? null)) && is_array($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6) || $__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6 instanceof ArrayAccess ? ($__internal_4e544dec457aecf1443a68c323cd82366dea8ab2422d0d98936729a61565d1b6["giving_mode"] ?? null) : null) && twig_test_iterable((($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 = ($context["module_membership_gift"] ?? null)) && is_array($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181) || $__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181 instanceof ArrayAccess ? ($__internal_14e21981e7dd3b7329ce23316b7dd9a4a72bcc8fc5fb4bbbe07d78b2f34ad181["giving_mode"] ?? null) : null))) && twig_in_filter($context["k"], (($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 = ($context["module_membership_gift"] ?? null)) && is_array($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9) || $__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9 instanceof ArrayAccess ? ($__internal_6d6262ed1b3576eed98294422f6c92124e958065b890ec1daeda373cca95f0b9["giving_mode"] ?? null) : null)))) {
                // line 907
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_membership_gift[giving_mode][]\" value=\"";
                echo $context["k"];
                echo "\" checked=\"checked\" /> ";
                echo $context["v"];
                echo " 
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 908
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_membership_gift[giving_mode][]\" value=\"";
                // line 909
                echo $context["k"];
                echo "\" /> ";
                echo $context["v"];
                echo " 
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 910
            echo " 
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 913
        echo " 
\t\t\t\t\t\t\t\t\t</div>
\t      \t\t\t\t\t\t</div>
                            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t 
          \t\t\t</div>
          \t\t</form>
      \t\t</div>
    \t</div>
  \t</div>
</div>
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css\" rel=\"stylesheet\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js\"></script>
<script type=\"text/javascript\"><!--
function save() {
\t\$.ajax( {
        url: 'index.php?route=extension/module/membership&user_token=";
        // line 930
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'POST',
        data: \$('#common-settings, #email-notification-settings, #card-settings, #default-card-settings, #gift-settings, #contacts').find('input, select, textarea').serialize(),
\t\tdataType: 'html',
\t\tsuccess: function (data, textStatus, jqXHR) {
\t\t\tvar \$data = \$(data);

\t\t\tif (\$data.find('div.alert-danger').length) {
\t\t\t\t\$('.container-fluid:eq(1)').prepend(\$data.find('div.alert-danger'));
\t\t\t} else if (\$data.find('div.alert-success').length) {
\t\t\t\t\$('.container-fluid:eq(1)').prepend(\$data.find('div.alert-success'));
\t\t\t}
\t\t}
\t} );
}

function formHandler(element) {
\tswitch (element.id) {
        case 'accounted_orders_balance-membership_card_orders_total':
        case 'accounted_orders_balance-membership_card_orders_discount':
        case 'accounted_orders_balance-completed_orders':
            var
\t\t\t\taob_membership_card_orders_total = \$('#accounted_orders_balance-membership_card_orders_total:checked').length,
                aob_membership_card_orders_discount = \$('#accounted_orders_balance-membership_card_orders_discount:checked').length,
                aob_completed_orders = \$('#accounted_orders_balance-completed_orders:checked').length;

            if (aob_membership_card_orders_total || aob_membership_card_orders_discount) {
                \$('#accounted_orders_balance-completed_orders').attr('disabled', true);
            } else {
                \$('#accounted_orders_balance-completed_orders').removeAttr('disabled');
            }

            if (aob_completed_orders) {
                \$('#accounted_orders_balance-membership_card_orders_total, #accounted_orders_balance-membership_card_orders_discount').attr('disabled', true);
            } else {
                \$('#accounted_orders_balance-membership_card_orders_total, #accounted_orders_balance-membership_card_orders_discount').removeAttr('disabled');
            }

            break;

\t\tcase 'card_request_discount-enabled':
\t\tcase 'card_request_discount-disabled':
\t\t\tif (+element.value) {
\t\t\t\t\$(element).parent().parent().nextAll().fadeIn();
\t\t\t} else {
\t\t\t\t\$(element).parent().parent().nextAll().fadeOut();
\t\t\t}

\t\t\tbreak;
\t}
}

function addDiscount(id, name) {
\tvar number = \$('#' + id + ' tbody tr').length;
\tvar row = '<tr>';
\t\t
\trow += '<td><select name=\"' + name + '[' + number + '][base]\" class=\"form-control\">";
        // line 986
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discount_base"] ?? null));
        foreach ($context['_seq'] as $context["v"] => $context["n"]) {
            echo "<option value=\"";
            echo $context["v"];
            echo "\">";
            echo $context["n"];
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['v'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></td>';
\trow += '<td><input type=\"text\" name=\"' + name + '[' + number + '][limit]\" value=\"\" placeholder=\"";
        // line 987
        echo ($context["column_discount_limit"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\trow += '<td><input type=\"text\" name=\"' + name + '[' + number + '][value]\" value=\"\" placeholder=\"";
        // line 988
        echo ($context["column_discount_value"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\trow += '<td><select name=\"' + name + '[' + number + '][type]\" class=\"form-control\">";
        // line 989
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discount_type"] ?? null));
        foreach ($context['_seq'] as $context["v"] => $context["n"]) {
            echo "<option value=\"";
            echo $context["v"];
            echo "\">";
            echo $context["n"];
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['v'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</select></td>';
\trow += '<td class=\"text-center\"><button type=\"button\" onclick=\"\$(this).parents(\\'tr\\').remove()\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\trow += '</tr>';
\t\t
\t\$('#' + id + ' tbody').append(row);
}

function deleteData(self, data_type) {
\tvar post_data;

\tif (self.id.match(/button\\-delete/i)) {
\t\tpost_data = \$('input[name^=\"selected\"]:checked').serialize();
\t} else {
\t\tpost_data = 'selected[]=' + \$(self).parents('tr').find('input[name^=\"selected\"]').attr('value');
\t}

\t\$.ajax( {
\t\turl: 'index.php?route=extension/module/membership/deleteData&data_type=' + data_type + '&user_token=";
        // line 1006
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'POST',
\t\tdata: post_data,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tif (json['success'] && json['deleted'] instanceof Array) {
\t\t\t\tfor(var i in json['deleted']) {
\t\t\t\t\t\$('input[value=\"' + json['deleted'][i] + '\"]').parents('tr').fadeOut('slow');
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$('.container-fluid:eq(1)').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t}
\t} );
}

function changeStatus(self, data_type, change_type) {
\tif (change_type === undefined) {
    \tchange_type = '';
  \t}

\t\$.ajax( {
\t\turl: 'index.php?route=extension/module/membership/changeStatus&data_type=' + data_type + '&user_token=";
        // line 1028
        echo ($context["user_token"] ?? null);
        echo "',
\t\ttype: 'POST',
\t\tdata: 'id=' + parseInt(\$(self).parents('tr').find('input[name^=\"selected\"]').attr('value')) + '&change_type=' + change_type,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\tif (typeof json['new_status_id'] != 'undefined') {
\t\t\t\tswitch (json['new_status_id']) {
\t\t\t\t\tcase 0:
\t\t\t\t\t\t\$(self).parents('tr').find('span').html(json['new_status_text']).removeClass().addClass('label label-danger');
\t\t\t\t\t\t
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 1:
\t\t\t\t\t\t\$(self).parents('tr').find('span').html(json['new_status_text']).removeClass().addClass('label label-success');
\t\t\t\t\t\t
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 2:
\t\t\t\t\t\t\$(self).parents('tr').find('span').html(json['new_status_text']).removeClass().addClass('label label-warning');
\t\t\t\t\t\t
\t\t\t\t\t\tbreak;\t\t
\t\t\t\t}
\t\t\t}
\t\t}
\t} );
}

\$(function() {
\tif (window.location.hash) {
\t\tvar url_parts = window.location.href.replace('#', '&').split('&');

\t\t\$('#helper-ajax-menu').attr('href', url_parts[0] + '/' + url_parts[2] + '&' + url_parts[3] + '&' + url_parts[1]);
\t\t
\t\tsetTimeout(function() { \$('#helper-ajax-menu').trigger('click'); }, 100);
\t}
\t
\t\$('.summernote').summernote();
\t
\t\$.ajaxSetup( {
\t\tbeforeSend: function () {
\t\t\t\$('body').fadeTo('fast', 0.7).prepend('<div class=\"cssload-loader\"><div class=\"cssload-flipper\"><div class=\"cssload-front\"></div><div class=\"cssload-back\"></div></div></div>');
\t\t},
\t\tcomplete: function () {
\t\t\tvar \$alerts = \$('.alert-danger, .alert-success');
\t\t\t
\t\t\tif (\$alerts.length !== 0) {
\t\t\t\tsetTimeout(function() { \$alerts.fadeOut() }, 5000);
\t\t\t}

\t\t\t\$('body').fadeTo('fast', 1)
\t\t\t\$('div.cssload-loader').remove();
\t\t},
\t\terror: function (jqXHR, textStatus, errorThrown) {
\t   \t\tconsole.log(textStatus);
\t    }
\t} );

\t\$('[data-loadurl]').on('click', function (e) {
\t\t\$(e.target.hash).load(e.currentTarget.dataset.loadurl);
\t} );

    \$('input[name*=\"accounted_orders_balance\"]:checked, input[id^=\"card_request_discount\"]:checked').each(function() {
        formHandler(this);
    } );

    \$('input[name*=\"accounted_orders_balance\"], input[id^=\"card_request_discount\"]').on('change', function(e) {
        formHandler(e.currentTarget);
    } );
\t
\t\$('div.tab-pane').on('click', 'a[href^=\"http\"]', function (e) {
\t\te.preventDefault();
\t\t
\t\tvar container_id = \$(e.currentTarget).parents('div.tab-pane').attr('id');

\t\tif (e.currentTarget.href.match(/(addCard|editCard)/i)) {
\t\t\tvar 
\t\t\t\t\$menu_card_form = \$('#menu-card-form'),
\t\t\t\tloadurl = \$menu_card_form.attr('data-loadurl');
\t\t\t\t
\t\t\t\$menu_card_form.attr('data-loadurl', e.currentTarget.href).trigger('click').attr('data-loadurl', loadurl);
\t\t} else if (e.currentTarget.href.match(/(addGift|editGift)/i)) {
\t\t\tvar 
\t\t\t\t\$menu_gift_form = \$('#menu-gift-form'),
\t\t\t\tloadurl = \$menu_gift_form.attr('data-loadurl');
\t\t\t\t
\t\t\t\$menu_gift_form.attr('data-loadurl', e.currentTarget.href).trigger('click').attr('data-loadurl', loadurl);
\t\t} else {
\t\t\t\$('#' + container_id).load(e.currentTarget.href);
\t\t}
\t} );

\t\$('div.tab-pane').on('change', 'input[name^=\"select\"]', function() {
\t\tvar selected = \$('input[name^=\"selected\"]:checked');

\t\tif (selected.length) {
\t\t\t\$('button[id^=\"button-delete\"]').attr('disabled', false);
\t\t} else {
\t\t\t\$('button[id^=\"button-delete\"]').attr('disabled', true);
\t\t}
\t} );

    // Categories
    \$('#default-card-category').autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1131
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
                dataType: 'json',
                beforeSend: function () {},
                complete: function () {},
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            label: item['name'],
                            value: item['category_id']
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            this.value = '';

            \$('#default-card-categories-' + item['value']).remove();

            \$('#default-card-categories').append('<div id=\"default-card-categories-' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"module_membership_default_card[categories][]\" value=\"' + item['value'] + '\" /></div>');
        }
    });

    \$('#default-card-categories').delegate('.fa-minus-circle', 'click', function() {
        \$(this).parent().remove();
    } );

\t// Products
\t\$('#default-card-product').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1162
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',\t
\t\t\t\tbeforeSend: function () {},
\t\t\t\tcomplete: function () {},\t\t
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\tthis.value = '';
\t\t\t
\t\t\t\$('#default-card-products-' + item['value']).remove();
\t\t\t
\t\t\t\$('#default-card-products').append('<div id=\"default-card-products-' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"module_membership_default_card[products][]\" value=\"' + item['value'] + '\" /></div>');\t
\t\t}
\t});

\t\$('#default-card-products').delegate('.fa-minus-circle', 'click', function() {
\t\t\$(this).parent().remove();
\t});
} );
//--></script>
";
        // line 1190
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/membership.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2945 => 1190,  2914 => 1162,  2880 => 1131,  2774 => 1028,  2749 => 1006,  2718 => 989,  2714 => 988,  2710 => 987,  2695 => 986,  2636 => 930,  2617 => 913,  2608 => 910,  2601 => 909,  2598 => 908,  2590 => 907,  2588 => 906,  2580 => 903,  2572 => 900,  2565 => 895,  2556 => 892,  2549 => 891,  2546 => 890,  2538 => 889,  2536 => 888,  2532 => 886,  2528 => 885,  2520 => 882,  2513 => 877,  2506 => 876,  2499 => 875,  2496 => 874,  2489 => 873,  2484 => 871,  2478 => 870,  2470 => 867,  2463 => 862,  2458 => 861,  2453 => 859,  2449 => 857,  2444 => 856,  2439 => 854,  2434 => 852,  2426 => 849,  2420 => 845,  2405 => 841,  2396 => 839,  2383 => 835,  2374 => 833,  2367 => 831,  2361 => 830,  2355 => 826,  2337 => 825,  2331 => 824,  2322 => 817,  2317 => 816,  2312 => 814,  2308 => 812,  2303 => 811,  2298 => 809,  2293 => 807,  2285 => 804,  2271 => 795,  2264 => 793,  2255 => 789,  2248 => 787,  2240 => 782,  2234 => 781,  2226 => 778,  2218 => 773,  2212 => 772,  2204 => 769,  2197 => 764,  2192 => 763,  2187 => 761,  2183 => 759,  2178 => 758,  2173 => 756,  2168 => 754,  2160 => 751,  2153 => 746,  2148 => 745,  2143 => 743,  2139 => 741,  2134 => 740,  2129 => 738,  2124 => 736,  2116 => 733,  2109 => 728,  2105 => 727,  2096 => 725,  2090 => 724,  2083 => 723,  2081 => 722,  2076 => 720,  2069 => 718,  2061 => 712,  2057 => 711,  2048 => 709,  2042 => 708,  2036 => 707,  2032 => 706,  2027 => 704,  2020 => 702,  2003 => 687,  1993 => 686,  1984 => 679,  1977 => 678,  1970 => 677,  1967 => 676,  1960 => 675,  1956 => 674,  1950 => 673,  1946 => 672,  1936 => 669,  1926 => 666,  1920 => 662,  1913 => 661,  1906 => 660,  1903 => 659,  1896 => 658,  1892 => 657,  1886 => 656,  1882 => 655,  1874 => 652,  1868 => 651,  1861 => 647,  1855 => 646,  1849 => 645,  1843 => 644,  1837 => 643,  1827 => 636,  1816 => 630,  1811 => 627,  1804 => 626,  1797 => 625,  1794 => 624,  1787 => 623,  1783 => 622,  1777 => 621,  1767 => 616,  1759 => 613,  1754 => 610,  1747 => 609,  1740 => 608,  1737 => 607,  1730 => 606,  1726 => 605,  1720 => 604,  1710 => 599,  1703 => 594,  1698 => 593,  1693 => 591,  1689 => 589,  1684 => 588,  1679 => 586,  1674 => 584,  1666 => 581,  1656 => 574,  1650 => 573,  1642 => 570,  1634 => 565,  1628 => 564,  1620 => 561,  1613 => 556,  1608 => 555,  1603 => 553,  1599 => 551,  1594 => 550,  1589 => 548,  1584 => 546,  1576 => 543,  1566 => 538,  1559 => 536,  1554 => 533,  1547 => 532,  1540 => 531,  1537 => 530,  1530 => 529,  1526 => 528,  1520 => 527,  1512 => 524,  1507 => 521,  1502 => 520,  1497 => 518,  1493 => 516,  1488 => 515,  1483 => 513,  1478 => 511,  1470 => 508,  1463 => 503,  1458 => 502,  1453 => 500,  1449 => 498,  1444 => 497,  1439 => 495,  1434 => 493,  1426 => 490,  1418 => 484,  1411 => 483,  1404 => 482,  1401 => 481,  1394 => 480,  1390 => 479,  1384 => 478,  1375 => 474,  1367 => 469,  1361 => 468,  1353 => 465,  1347 => 461,  1339 => 458,  1331 => 456,  1323 => 454,  1321 => 453,  1317 => 451,  1313 => 450,  1305 => 447,  1300 => 444,  1292 => 441,  1282 => 439,  1272 => 437,  1270 => 436,  1266 => 434,  1262 => 433,  1254 => 430,  1244 => 425,  1239 => 422,  1233 => 421,  1225 => 419,  1217 => 417,  1214 => 416,  1210 => 415,  1202 => 412,  1193 => 408,  1186 => 406,  1179 => 404,  1172 => 402,  1168 => 400,  1160 => 397,  1152 => 395,  1144 => 393,  1142 => 392,  1137 => 389,  1133 => 388,  1124 => 384,  1117 => 379,  1112 => 378,  1107 => 376,  1103 => 374,  1098 => 373,  1093 => 371,  1088 => 369,  1080 => 366,  1074 => 362,  1059 => 358,  1050 => 356,  1037 => 352,  1028 => 350,  1021 => 348,  1015 => 347,  1009 => 343,  991 => 342,  985 => 341,  976 => 334,  971 => 333,  966 => 331,  962 => 329,  957 => 328,  952 => 326,  947 => 324,  939 => 321,  926 => 310,  913 => 308,  907 => 307,  901 => 306,  896 => 303,  878 => 302,  872 => 301,  866 => 298,  861 => 295,  856 => 294,  851 => 292,  847 => 290,  842 => 289,  837 => 287,  832 => 285,  824 => 282,  819 => 280,  813 => 276,  800 => 274,  794 => 273,  788 => 272,  783 => 269,  765 => 268,  759 => 267,  753 => 264,  748 => 261,  743 => 260,  738 => 258,  734 => 256,  729 => 255,  724 => 253,  719 => 251,  711 => 248,  704 => 243,  691 => 241,  685 => 240,  679 => 239,  674 => 236,  656 => 235,  650 => 234,  644 => 231,  639 => 228,  634 => 227,  629 => 225,  625 => 223,  620 => 222,  615 => 220,  610 => 218,  602 => 215,  595 => 210,  582 => 208,  576 => 207,  570 => 206,  565 => 203,  547 => 202,  541 => 201,  535 => 198,  530 => 195,  525 => 194,  520 => 192,  516 => 190,  511 => 189,  506 => 187,  501 => 185,  493 => 182,  488 => 180,  480 => 175,  474 => 172,  468 => 169,  462 => 166,  456 => 163,  446 => 156,  438 => 150,  433 => 149,  428 => 147,  424 => 145,  419 => 144,  414 => 142,  409 => 140,  401 => 137,  396 => 134,  389 => 133,  382 => 132,  379 => 131,  372 => 130,  368 => 129,  362 => 128,  358 => 127,  350 => 124,  344 => 120,  337 => 118,  330 => 117,  327 => 116,  320 => 115,  316 => 114,  310 => 113,  306 => 112,  298 => 109,  292 => 105,  287 => 103,  282 => 101,  278 => 99,  273 => 98,  268 => 96,  263 => 94,  255 => 91,  246 => 88,  241 => 85,  229 => 78,  225 => 77,  221 => 76,  214 => 71,  207 => 67,  200 => 65,  194 => 64,  188 => 63,  183 => 61,  176 => 57,  171 => 55,  164 => 53,  158 => 52,  152 => 51,  146 => 50,  141 => 48,  134 => 44,  126 => 43,  121 => 41,  114 => 40,  112 => 39,  104 => 34,  95 => 28,  88 => 23,  80 => 19,  77 => 18,  69 => 14,  67 => 13,  61 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/membership.twig", "");
    }
}
