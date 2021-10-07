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

/* extension/module/ap_product_update.twig */
class __TwigTemplate_02a74754460d5ddf71e8e15ac24f1897a88f17a1e1b04c882fb61f6dc9ad63a1 extends \Twig\Template
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
        echo "
\t";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">
\t
\t<div class=\"page-header\">
    \t<div class=\"container-fluid\">
      \t\t<div class=\"pull-right\">
        \t\t<a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
        \t</div>
      \t\t\t
      \t\t <ul class=\"breadcrumb\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t\t  </ul>
    \t</div> <!-- container-fluid -->
  \t</div> <!-- page-header -->

  \t<div class=\"container-fluid\">
 
\t\t\t";
        // line 22
        if (($context["success"] ?? null)) {
            // line 23
            echo "\t\t\t<div class=\"alert alert-success\">
\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
            // line 24
            echo ($context["success"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t\t";
        }
        // line 28
        echo "
\t\t\t";
        // line 29
        if (($context["error_warning"] ?? null)) {
            // line 30
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t\t";
        }
        // line 34
        echo "
\t\t<div class=\"panel panel-default settings-wrap\">
\t\t\t<div class=\"panel-body\">

\t\t\t\t<h3>";
        // line 38
        echo ($context["text_pr_settings"] ?? null);
        echo "</h3>
\t\t\t\t\t
\t\t\t\t<form action=\"";
        // line 40
        echo ($context["action_settings"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-settings\" class=\"form-horizontal\">
\t\t\t\t\t\t\t
\t\t\t\t\t<h4>";
        // line 42
        echo ($context["text_pars_col"] ?? null);
        echo "</h4>
\t\t\t\t\t
\t\t\t\t\t";
        // line 44
        if (($context["error_upc_sku"] ?? null)) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo ($context["error_upc_sku"] ?? null);
            echo "</div>";
        }
        // line 45
        echo "\t\t\t\t\t";
        if (($context["error_quantity_price"] ?? null)) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo ($context["error_quantity_price"] ?? null);
            echo "</div>";
        }
        // line 46
        echo "\t\t\t\t\t";
        if (($context["error_sku"] ?? null)) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo ($context["error_sku"] ?? null);
            echo "</div>";
        }
        // line 47
        echo "\t\t\t\t 
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"sku\">";
        // line 49
        echo ($context["text_sku_col"] ?? null);
        echo "</span>
\t\t\t\t\t\t<input value=\"";
        // line 50
        echo ($context["sku"] ?? null);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"sku\" aria-describedby=\"sku\" name=\"module_ap_product_update[sku]\">
\t\t\t\t\t</div>

\t\t\t\t\t<br>
 
\t\t\t\t\t";
        // line 55
        if (($context["error_upc"] ?? null)) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo ($context["error_upc"] ?? null);
            echo "</div>";
        }
        // line 56
        echo "
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"upc\">";
        // line 58
        echo ($context["text_upc_col"] ?? null);
        echo "</span>
\t\t\t\t\t\t<input value=\"";
        // line 59
        echo ($context["upc"] ?? null);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"upc\" aria-describedby=\"upc\" name=\"module_ap_product_update[upc]\">
\t\t\t\t\t</div>

\t\t\t\t\t<br>
  
\t\t\t\t\t";
        // line 64
        if (($context["error_price"] ?? null)) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo ($context["error_price"] ?? null);
            echo "</div>";
        }
        // line 65
        echo "
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"price\">";
        // line 67
        echo ($context["text_price_col"] ?? null);
        echo "</span>
\t\t\t\t\t\t<input value=\"";
        // line 68
        echo ($context["price"] ?? null);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"price\" aria-describedby=\"price\" name=\"module_ap_product_update[price]\">
\t\t\t\t\t</div>

\t\t\t\t\t<br>
   
\t\t\t\t\t";
        // line 73
        if (($context["error_quantity"] ?? null)) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo ($context["error_quantity"] ?? null);
            echo "</div>";
        }
        // line 74
        echo "
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"quantity\">";
        // line 76
        echo ($context["text_quant_col"] ?? null);
        echo "</span>
\t\t\t\t\t\t<input value=\"";
        // line 77
        echo ($context["quantity"] ?? null);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"quantity\" aria-describedby=\"quantity\" name=\"module_ap_product_update[quantity]\">
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t<br>

\t\t\t\t\t<h4>";
        // line 82
        echo ($context["text_z_pars"] ?? null);
        echo "</h4>
 
\t\t\t\t\t";
        // line 84
        if (($context["error_start_column"] ?? null)) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo ($context["error_start_column"] ?? null);
            echo "</div>";
        }
        // line 85
        echo "
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"start_column\">";
        // line 87
        echo ($context["text_z_start"] ?? null);
        echo "</span>
\t\t\t\t\t\t<input value=\"";
        // line 88
        echo ($context["start_column"] ?? null);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"start column\" aria-describedby=\"start_column\" name=\"module_ap_product_update[start_column]\">
\t\t\t\t\t</div>\t

\t\t\t\t\t<br>
 
\t\t\t\t\t";
        // line 93
        if (($context["error_stop_column"] ?? null)) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo ($context["error_stop_column"] ?? null);
            echo "</div>";
        }
        // line 94
        echo "
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"stop_column\">";
        // line 96
        echo ($context["text_z_stop"] ?? null);
        echo "</span>
\t\t\t\t\t\t<input value=\"";
        // line 97
        echo ($context["stop_column"] ?? null);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"stop column\" aria-describedby=\"stop_column\" name=\"module_ap_product_update[stop_column]\">
\t\t\t\t\t</div>

\t\t\t\t\t<br>

\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" form=\"form-settings\"><i class=\"fa fa-floppy-o\" aria-hidden=\"true\"></i> Сохранить настройки</button>

\t\t\t\t</form>

\t\t\t</div> <!-- panel-body -->
\t\t</div> <!-- panel -->

\t\t<div class=\"panel panel-default update-wrap\">
\t\t\t<div class=\"panel-body\">

\t\t\t\t<h4>";
        // line 112
        echo ($context["text_upl"] ?? null);
        echo "</h4>

\t\t\t\t<form action=\"";
        // line 114
        echo ($context["action_upload"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-upldate\" class=\"form-horizontal\">
\t\t\t\t\t<label class=\"btn btn-primary\" for=\"file\">
\t\t\t\t\t\t<input style=\"display:none\" type=\"file\" name=\"file\" id=\"file\">
\t\t\t\t\t\t<i class=\"fa fa-cloud-upload\" aria-hidden=\"true\"></i>
\t\t\t\t\t</label>

\t\t\t\t\t<button type=\"button\" onClick=\"tool.download(); return false;\" class=\"btn btn-primary\">";
        // line 120
        echo ($context["text_upl_start"] ?? null);
        echo "</button>
\t\t\t\t</form>

\t\t\t\t<div class=\"progres-wraper\">

\t\t\t\t\t<div class=\"upl-wrap fade\">\t
\t\t\t\t\t\t<h5>";
        // line 126
        echo ($context["text_upd"] ?? null);
        echo "</h5>
\t\t\t\t\t\t<div id=\"progressbar-upl\" class=\"progress\">
\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"upd-wrap fade\">\t
\t\t\t\t\t\t<h5>";
        // line 133
        echo ($context["text_upd_statr"] ?? null);
        echo "</h5>
\t\t\t\t\t\t<div id=\"progressbar-upd\" class=\"progress\">
\t\t\t\t\t\t\t<div style=\"width:.5%\" class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t\t\t\t

\t\t\t\t</div> <!-- status -->
\t\t\t\t
\t\t\t\t<div class=\"report fade\">
\t\t\t\t\t<table class=\"table table-condensed\">
\t\t\t\t\t\t<tr class=\"top\">
\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t<th>";
        // line 145
        echo ($context["column_sku"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 146
        echo ($context["column_upc"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 147
        echo ($context["column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 148
        echo ($context["column_quantity"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 149
        echo ($context["column_price"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 150
        echo ($context["column_status"] ?? null);
        echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</div> <!-- report -->
\t\t\t</div> <!-- panel-body -->
\t\t</div> <!-- panel -->
\t\t\t
\t\t<div class=\"panel panel-default download-wrap\">
\t\t\t<div class=\"panel-body\">\t\t\t
\t\t\t\t
\t\t\t\t<h3>";
        // line 160
        echo ($context["text_dwl"] ?? null);
        echo "</h3>

\t\t\t\t<form action=\"";
        // line 162
        echo ($context["action_download"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-download\" class=\"form-horizontal\">
\t\t\t\t\t<h4>";
        // line 163
        echo ($context["text_dwl_param"] ?? null);
        echo "</h4>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"quantity\">";
        // line 166
        echo ($context["text_manuf"] ?? null);
        echo " </span>
\t\t\t\t\t\t<select class=\"form-control\" name=\"manufacturer_id\">
\t\t\t\t\t\t\t<option value=\"all\">";
        // line 168
        echo ($context["text_all"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacture"]) {
            // line 170
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["manufacture"], "manufacturer_id", [], "any", false, false, false, 170);
            echo "\" >";
            echo twig_get_attribute($this->env, $this->source, $context["manufacture"], "name", [], "any", false, false, false, 170);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<br>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"quantity\">";
        // line 178
        echo ($context["text_categ"] ?? null);
        echo " </span>
\t\t\t\t\t\t<select class=\"form-control\" name=\"category_id\">
\t\t\t\t\t\t\t<option value=\"all\">";
        // line 180
        echo ($context["text_all"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 182
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 182);
            echo "\" >";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 182);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t<br>

\t\t\t\t\t<h4>";
        // line 189
        echo ($context["text_sort"] ?? null);
        echo "</h4>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"quantity\">";
        // line 192
        echo ($context["text_s_item"] ?? null);
        echo "</span>
\t\t\t\t\t\t<select class=\"form-control\" name=\"sort\">
\t\t\t\t\t\t\t<option value=\"pd.name\">";
        // line 194
        echo ($context["text_s_name"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"p.model\">";
        // line 195
        echo ($context["text_s_model"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"p.quantity\">";
        // line 196
        echo ($context["text_s_q"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"p.price\">";
        // line 197
        echo ($context["text_s_pr"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t<option value=\"p.sku\">SKU (Артикул)</option>
\t\t\t\t\t\t\t<option value=\"p.upc\">UPC</option>
\t\t\t\t\t\t\t<option value=\"p.manufacturer_id\">";
        // line 200
        echo ($context["text_manuf"] ?? null);
        echo "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t
\t\t\t\t\t<br>

\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<span class=\"input-group-addon\" id=\"quantity\">";
        // line 207
        echo ($context["text_order"] ?? null);
        echo " </span>
\t\t\t\t\t\t<select class=\"form-control\" name=\"order\">
\t\t\t\t\t\t\t<option value=\"ASC\"> ";
        // line 209
        echo ($context["text_asc"] ?? null);
        echo " </option>
\t\t\t\t\t\t\t<option value=\"DESC\"> ";
        // line 210
        echo ($context["text_desc"] ?? null);
        echo " </option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>

\t\t\t\t\t<br>

\t\t\t\t\t<button class=\"btn btn-primary\"><i class=\"fa fa-cloud-download\" aria-hidden=\"true\"></i> Выгрузить товары</button>\t
\t\t\t\t</form>

\t\t\t</div> <!-- panel-body -->
\t\t</div> <!-- panel -->
\t\t\t

\t</div> <!-- container-fluid -->

</div><!-- content -->\t

<style>
\t.file-name {margin: 15px 0;}
\t.upl-wrap, .upd-wrap {margin-top: 15px;}
\t.fade:not(.in) {visibility: hidden; height: 0; margin: 0; overflow: hidden;}\t
\t.report {max-height: 500px; overflow:auto; border:3px solid #F0F0F0; border-radius:2px; margin: 15px 0;}
\t.panel-default { border: 1px solid #eee; border-radius: 2px; }
\t.table { margin-bottom: 0; }
\t.table > tbody > tr > th { border-top: none; }
\t.input-group { width: 100%; }
\t.input-group-addon { width: 220px; text-align: left; }
\t.not-found {background: #FF9A9A;}
\t.not-found td {border-top: 1px solid #FF8282 !important; color: #555;}
\t.duble {background: #86B2CA;}
\t.duble td {border-top: 1px solid #78ADCA !important; color: #f9f9f9;}
\t.not-found-sku-upc {background: #eee;}
</style>

<script>

\t\$('#file').on('change', function () {
\t\tvar file_name = \$(this).val().replace( \"C:\\\\fakepath\\\\\", '' );
\t\tvar html;

\t\t\$('.file-name').remove();

\t\thtml = \"<div class='file-name alert alert-info' role='alert'>\"+ file_name +\" <a class='pull-right\t' href='javascript:void(0);' onClick='\$(\\\"#file\\\").val(\\\"\\\"); \$(\\\".file-name\\\").remove();  return false;'> <i class='fa fa-trash'></i> </a> </div>\";

\t\t\$('#form-upldate').append(html);

\t});

\tvar tool = {
\t\t'download' : function () 
\t\t{
\t\t\tvar form = \$('#form-upldate');
\t\t\t\$('.upl-wrap').addClass('in');
\t\t\t\$('.report tr:not(.top)').remove();
\t\t\t\$('.alert-danger').remove();
\t\t\t\$('.report').removeClass('in');

\t\t\t\$.ajax({
\t\t\t\tdata: new FormData(form.get(0)),
\t\t\t\tdataType: 'json',
\t\t\t\tmethod:'POST',
\t\t\t\turl: form.attr('action'),
\t\t\t\tcontentType: false, 
\t\t\t\tprocessData: false,

\t\t\t\tsuccess: function (json, textStatus) 
\t\t\t\t{
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\tvar html = '<div class=\"alert alert-danger\" role=\"alert\">'+ json['error'] +'</div>';
\t\t\t\t\t\tform.before(html); 
\t\t\t\t\t}

\t\t\t\t\tif (json['file_status']){
\t\t\t\t\t\ttool.addPacket();
\t\t\t\t\t\t
\t\t\t\t\t\t\$('.upd-wrap').addClass('in');
\t\t\t\t\t}
\t\t\t\t},

\t\t\t\txhr: function()
\t\t\t\t{
        \t\t\t
        \t\t\tvar xhr = \$.ajaxSettings.xhr(); // получаем объект XMLHttpRequest
        \t\t\t
        \t\t\txhr.upload.addEventListener('progress', function(evt){ // добавляем обработчик события progress (onprogress)
          \t\t\t
          \t\t\t\tif (evt.lengthComputable) { 
            \t\t\t\tvar percentComplete = Math.ceil((evt.loaded * 100) / evt.total);

            \t\t\t\t\$('#progressbar-upl').children().css('width', percentComplete + '%');

            \t\t\t\tif (percentComplete >= 100) {
            \t\t\t\t\tsetTimeout(function () {
            \t\t\t\t\t\t\$('.upl-wrap').removeClass('in');
            \t\t\t\t\t\t\$('#progressbar-upl').children().removeAttr('style');
            \t\t\t\t\t}, 1500);
            \t\t\t\t}
       \t\t\t\t \t}
    \t\t\t\t}, false);
        \t\t\t
        \t\t\treturn xhr;
    \t\t\t},

\t\t\t\tcomplete: function (xhr, textStatus) 
\t\t\t\t{
\t\t\t\t\t//console.log(textStatus);
\t\t\t\t},

\t\t\t\terror: function(xhr, ajaxOptions, thrownError) 
\t\t\t\t{
\t\t\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}

\t\t\t});

\t\t\treturn false;
\t\t},

\t\t'addPacket' : function () 
\t\t{
\t\t\t

\t\t\t\$.ajax({
\t\t\t\tdataType: 'json',
\t\t\t\tmethod:'POST',
\t\t\t\turl:'";
        // line 335
        echo ($context["action_update"] ?? null);
        echo "',
\t\t\t\ttimeout: 50000,
\t\t\t\tsuccess: function (json, textStatus) 
\t\t\t\t{

\t\t\t\t\tvar html = '';

\t\t\t\t\tif (!json['error']) {

\t\t\t\t\t\tvar percentComplete = Math.ceil( (json['next_step'] * 100) / json['total_rows'] );
\t            \t\t\$('#progressbar-upd').children().css('width', percentComplete + '%');

\t            \t\tif (percentComplete >= 100) {
\t            \t\t\tsetTimeout(function () {
\t            \t\t\t\t\$('.upd-wrap').removeClass('in');
\t            \t\t\t\t\$('#progressbar-upd').children().removeAttr('style');
\t            \t\t\t}, 1500);
\t            \t\t}            \t\t

\t\t\t\t\t\tif (!json['status']) {
\t            \t\t\ttool.addPacket(); \t
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$('#file').val('');
\t\t\t\t\t\t\t\$('.file-name').remove();
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['report']) {
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tfor (var key in json['report']) {
\t\t\t\t\t\t\t\t
\t            \t\t\t\thtml += '<tr class=\"'+ json['report'][key]['class'] +'\">';
\t            \t\t\t\thtml += \t'<td> #'+ json['report'][key]['row']      +'</td>';
\t            \t\t\t\thtml += \t'<td>'  + json['report'][key]['sku']      +'</td>';
\t            \t\t\t\thtml += \t'<td>'  + json['report'][key]['upc']      +'</td>';
\t            \t\t\t\thtml += \t'<td>'  + json['report'][key]['name']     +'</td>';
\t            \t\t\t\thtml += \t'<td>'  + json['report'][key]['quantity'] +'</td>';
\t            \t\t\t\thtml += \t'<td>'  + json['report'][key]['price']    +'</td>';
\t            \t\t\t\thtml += \t'<td>'  + json['report'][key]['status']   +'</td>';
\t            \t\t\t\thtml += '<tr>'; 
\t            \t\t\t}

\t            \t\t\t\$('.report').addClass('in');
\t\t\t\t\t\t\t\$('.report table').append(html);
\t\t\t\t\t\t}

\t\t\t\t\t} else {
\t\t\t\t\t\t\$('.upd-wrap').removeClass('in');
 
\t\t\t\t\t\tif (json['error']['upc_sku'])
\t\t\t\t\t\t\thtml += '<div class=\"alert alert-danger\" role=\"alert\">'+ json['error']['upc_sku'] +'</div>';
\t\t\t\t\t\tif (json['error']['quantity_price'])
\t\t\t\t\t\t\thtml += '<div class=\"alert alert-danger\" role=\"alert\">'+ json['error']['quantity_price'] +'</div>';
\t\t\t\t\t\tif (json['error']['name'])
\t\t\t\t\t\t\thtml += '<div class=\"alert alert-danger\" role=\"alert\">'+ json['error']['name'] +'</div>';
\t\t\t\t\t\tif (json['error']['sku'])
\t\t\t\t\t\t\thtml += '<div class=\"alert alert-danger\" role=\"alert\">'+ json['error']['sku'] +'</div>';
\t\t\t\t\t\tif (json['error']['upc'])
\t\t\t\t\t\t\thtml += '<div class=\"alert alert-danger\" role=\"alert\">'+ json['error']['upc'] +'</div>';
\t\t\t\t\t\tif (json['error']['price'])
\t\t\t\t\t\t\thtml += '<div class=\"alert alert-danger\" role=\"alert\">'+ json['error']['price'] +'</div>';
\t\t\t\t\t\tif (json['error']['quantity'])
\t\t\t\t\t\t\thtml += '<div class=\"alert alert-danger\" role=\"alert\">'+ json['error']['quantity'] +'</div>';
\t\t\t\t\t\tif (json['error']['start_column'])
\t\t\t\t\t\t\thtml += '<div class=\"alert alert-danger\" role=\"alert\">'+ json['error']['start_column'] +'</div>';
\t\t\t\t\t\tif (json['error']['stop_column'])
\t\t\t\t\t\t\thtml += '<div class=\"alert alert-danger\" role=\"alert\">'+ json['error']['stop_column'] +'</div>';
 
\t\t\t\t\t\t\$('#form-upldate').append(html);
\t\t\t\t\t}

\t\t\t\t},

\t\t\t\t/*complete: function (xhr, textStatus) 
\t\t\t\t{
\t\t\t\t\tonsole.log('success' +\"\\n\\r\"+ textStatus);
\t\t\t\t},*/

\t\t\t\terror: function(xhr, ajaxOptions, thrownError) 
\t\t\t\t{
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}

\t\t\t});
\t\t}
\t};

</script>
";
        // line 422
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ap_product_update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  715 => 422,  625 => 335,  497 => 210,  493 => 209,  488 => 207,  478 => 200,  472 => 197,  468 => 196,  464 => 195,  460 => 194,  455 => 192,  449 => 189,  442 => 184,  431 => 182,  427 => 181,  423 => 180,  418 => 178,  410 => 172,  399 => 170,  395 => 169,  391 => 168,  386 => 166,  380 => 163,  376 => 162,  371 => 160,  358 => 150,  354 => 149,  350 => 148,  346 => 147,  342 => 146,  338 => 145,  323 => 133,  313 => 126,  304 => 120,  295 => 114,  290 => 112,  272 => 97,  268 => 96,  264 => 94,  258 => 93,  250 => 88,  246 => 87,  242 => 85,  236 => 84,  231 => 82,  223 => 77,  219 => 76,  215 => 74,  209 => 73,  201 => 68,  197 => 67,  193 => 65,  187 => 64,  179 => 59,  175 => 58,  171 => 56,  165 => 55,  157 => 50,  153 => 49,  149 => 47,  142 => 46,  135 => 45,  129 => 44,  124 => 42,  119 => 40,  114 => 38,  108 => 34,  100 => 30,  98 => 29,  95 => 28,  88 => 24,  85 => 23,  83 => 22,  75 => 16,  64 => 14,  60 => 13,  51 => 9,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ap_product_update.twig", "");
    }
}
