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

/* marketplace/marketplace_list.twig */
class __TwigTemplate_f0dde4b822b795fdeb0bf261f8f0e59421e7e3140301d2f68b4b63d528bbc8bc extends \Twig\Template
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
      <div class=\"pull-right\">";
        // line 5
        if ( !($context["error_signature"] ?? null)) {
            // line 6
            echo "        <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_opencart"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fa fa-cog\"></i></button>
        ";
        } else {
            // line 8
            echo "        <button type=\"button\" id=\"button-opencart\" data-toggle=\"tooltip\" title=\"";
            echo ($context["error_signature"] ?? null);
            echo "\"  data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 9
        echo "</div>
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
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 21
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"input-group\" id=\"extension-filter\">
            <input type=\"text\" name=\"filter_search\" value=\"";
        // line 26
        echo ($context["filter_search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control\" />
            <div class=\"input-group-btn\">";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "value", [], "any", false, false, false, 28) == ($context["filter_category"] ?? null))) {
                // line 29
                echo "              <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">";
                echo ($context["text_category"] ?? null);
                echo " (";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 29);
                echo ") <span class=\"caret\"></span></button>
              ";
            }
            // line 31
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "              <ul class=\"dropdown-menu\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 34);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "              </ul>
              <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 37
        echo ($context["filter_category_id"] ?? null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        // line 38
        echo ($context["filter_download_id"] ?? null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_rating\" value=\"";
        // line 39
        echo ($context["filter_rating"] ?? null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_license\" value=\"";
        // line 40
        echo ($context["filter_license"] ?? null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_partner\" value=\"";
        // line 41
        echo ($context["filter_partner"] ?? null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"sort\" value=\"";
        // line 42
        echo ($context["sort"] ?? null);
        echo "\" class=\"form-control\" />
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-9 col-xs-7\">
            <div class=\"btn-group\">";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["licenses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 50
            echo "              
\t\t\t";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["license"], "value", [], "any", false, false, false, 51) == ($context["filter_license"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 51);
                echo "\" class=\"btn btn-default active\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 51);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 51);
                echo "\" class=\"btn btn-default\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 51);
                echo "</a>";
            }
            // line 52
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t<a href=\"https://shop.opencart-russia.ru/\" target=\"_blank\" class=\"btn btn-default\">Расширения c opencart-russia.ru</a>
\t\t\t</div>
\t\t\t
          </div>
          <div class=\"col-sm-3 col-xs-5\">
            <div class=\"input-group pull-right\">
              <div class=\"input-group-addon\"><i class=\"fa fa-sort-amount-asc\"></i></div>
              <select onchange=\"location = this.value;\" class=\"form-control\">
                
              
            
              
                  ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 66
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 66) == ($context["sort"] ?? null))) {
                // line 67
                echo "                
              
            
              
                <option value=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 71);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 71);
                echo "</option>
                
              
            
              
                  ";
            } else {
                // line 77
                echo "                
              
            
              
                <option value=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 81);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 81);
                echo "</option>
                
              
            
              
                  ";
            }
            // line 87
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "              
            
          
            
              </select>
            </div>
          </div>
        </div>
        <br />
        <div id=\"extension-list\">";
        // line 97
        if (($context["promotions"] ?? null)) {
            // line 98
            echo "          <h3>Featured</h3>
          <div class=\"row\">";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 100
                echo "            ";
                if ($context["extension"]) {
                    // line 101
                    echo "            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <section>
                <div class=\"extension-preview\"><a href=\"";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 103);
                    echo "\">
                  <div class=\"extension-description\"></div>
                  <img src=\"";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 105);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 105);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 105);
                    echo "\" class=\"img-responsive\" /></a></div>
                <div class=\"extension-name\">
                  <h4><a href=\"";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 107);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 107);
                    echo "</a></h4>
                  ";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 108);
                    echo "</div>
                <div class=\"extension-rate\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 112
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 112) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 113
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                    <div class=\"col-xs-6\">
                      <div class=\"text-right\">";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 115);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            ";
                }
                // line 122
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
          <hr />
          ";
        }
        // line 125
        echo "          
          ";
        // line 126
        if (($context["extensions"] ?? null)) {
            // line 127
            echo "          <div class=\"row\"> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 128
                echo "            
            ";
                // line 129
                if ($context["extension"]) {
                    // line 130
                    echo "            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <section>
                <div class=\"extension-preview\"><a href=\"";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 132);
                    echo "\">
                  <div class=\"extension-description\"></div>
                  <img src=\"";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 134);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 134);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 134);
                    echo "\" class=\"img-responsive\" /></a></div>
                <div class=\"extension-name\">
                  <h4><a href=\"";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 136);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 136);
                    echo "</a></h4>
                  ";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 137);
                    echo "</div>
                <div class=\"extension-rate\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">";
                    // line 140
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 141
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 141) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 142
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                    <div class=\"col-xs-6\">
                      <div class=\"text-right\">";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 144);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            ";
                }
                // line 151
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
          ";
        } else {
            // line 153
            echo "          <p class=\"text-center\">";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
          ";
        }
        // line 154
        echo " </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">";
        // line 156
        echo ($context["pagination"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>

<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
\t\$('#modal-opencart').remove();
\t
\t\$.ajax({
\t\turl: 'index.php?route=marketplace/api&user_token=";
        // line 167
        echo ($context["user_token"] ?? null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-opencart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-opencart').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('body').append('<div id=\"modal-opencart\" class=\"modal\">' + html + '</div>');
\t\t\t
\t\t\t\$('#modal-opencart').modal('show');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
\tvar url = 'index.php?route=marketplace/marketplace&user_token=";
        // line 188
        echo ($context["user_token"] ?? null);
        echo "';

\tvar input = \$('#extension-filter :input');

\tfor (i = 0; i < input.length; i++) {
\t\tif (\$(input[i]).val() != '' && \$(input[i]).val() != null) {
\t\t\turl += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
\t\t}
\t}

\tlocation = url;
});

\$('input[name=\"filter_search\"]').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\te.preventDefault();

\t\t\$('#button-filter').trigger('click');
\t}
});
//--></script></div>
";
        // line 209
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 209,  493 => 188,  469 => 167,  455 => 156,  451 => 154,  445 => 153,  436 => 151,  424 => 144,  415 => 142,  408 => 141,  404 => 140,  398 => 137,  392 => 136,  383 => 134,  378 => 132,  374 => 130,  372 => 129,  369 => 128,  364 => 127,  362 => 126,  359 => 125,  349 => 122,  337 => 115,  328 => 113,  321 => 112,  317 => 111,  311 => 108,  305 => 107,  296 => 105,  291 => 103,  287 => 101,  284 => 100,  280 => 99,  277 => 98,  275 => 97,  264 => 88,  258 => 87,  247 => 81,  241 => 77,  230 => 71,  224 => 67,  221 => 66,  217 => 65,  203 => 53,  197 => 52,  183 => 51,  180 => 50,  176 => 49,  166 => 42,  162 => 41,  158 => 40,  154 => 39,  150 => 38,  146 => 37,  143 => 36,  132 => 34,  128 => 33,  125 => 32,  119 => 31,  111 => 29,  108 => 28,  104 => 27,  98 => 26,  90 => 21,  82 => 15,  71 => 13,  67 => 12,  62 => 10,  59 => 9,  53 => 8,  47 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/marketplace_list.twig", "");
    }
}
