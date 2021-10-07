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

/* default/template/common/footer.twig */
class __TwigTemplate_91d068573239fe648d9b5a590d43b829340d949e3012be2db1b7edc048b55eaa extends \Twig\Template
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
        if (($context["subscribers"] ?? null)) {
            // line 2
            echo "
<div class=\"container\">
  <div class=\"box-subscribers\">
\t <form action=\"\" method=\"post\" class=\"form-inline\" class=\"subscribers\">
\t\t<div class=\"subscribers\">
\t\t   <div class=\"subscribers-col-one\">
\t\t\t  <span>%</span>
\t\t   </div>
\t\t   <div class=\"subscribers-col-two\">
\t\t\t  <p>";
            // line 11
            echo ($context["subscribers_title"] ?? null);
            echo "</p>
\t\t   </div>
\t\t   <span class=\"blockfdg\"></span>
\t\t   <div class=\"subscribers-col-tre\">
\t\t\t\t<input type=\"email\" name=\"txtemail\" id=\"txtemail\" value=\"\" placeholder=\"E-mail\" class=\"form-control input-lg\" /> 
\t\t\t\t<button type=\"submit\" id=\"subscribe\" class=\"btn btn-subscribers\" onclick=\"return Subscribe();\" disabled=\"disabled\">Хочу!</button>
\t\t   </div>
\t\t</div>
\t </form>
  </div>
</div>

 
<div class=\"subscribers-success-pupup subscribers-tahf-pupup\">
\t<div class=\"subscribers-success\">
\t\t<div class=\"subscribers-success-bodys\">
\t\t\t<span class=\"exit\" id=\"exit-popup\"><i class=\"icon icon-cancel\"></i></span>
\t\t\t<div class=\"sheader\">
\t\t\t\tВы успешно подписались на рассылку новостей!
\t\t\t</div>
\t\t\t<div class=\"sbody\">
\t\t\t\t<div class=\"sbody-body\">
\t\t\t\t\t<div class=\"sbody-body-item\">
\t\t\t\t\t\t<i class=\"icon icon-ok-1\"></i>
\t\t\t\t\t\t<span>Создан Ваш личный кабинет</span>
\t\t\t\t\t\t<div class=\"account-login\">Логин и пароль: <span id=\"account-login\"></span></div>
\t\t\t\t\t\t<div class=\"preim\"><a href=\"\">Преимущества личного кабинета</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sbody-body-item\">
\t\t\t\t\t\t<i class=\"icon icon-ok-1\"></i><span>Скидка на первый заказ</span>
\t\t\t\t\t\t<ul class=\"sbody-body-ul\">
\t\t\t\t\t\t\t<li class=\"\"><strong>- 100 руб</strong><span>при сумме заказа до 2 999 руб.</span></li>
\t\t\t\t\t\t\t<li class=\"\"><strong>- 200 руб</strong><span>при сумме заказа от 3 000 руб.</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"preim\"><a href=\"\">Подробнее о скидках</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sfooter\">
\t\t\t\t<button type=\"button\" class=\"btn btn-auting\" onclick=\"location.href = '";
            // line 50
            echo ($context["login"] ?? null);
            echo "'\">Авторизоваться и активировать скидку</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<div class=\"subscribers-success-pupup subscribers-made-pupup\">
\t<div class=\"subscribers-success\">
\t\t<div class=\"subscribers-success-bodys\">
\t\t\t<span class=\"exit exit-popup\"><i class=\"icon icon-cancel\"></i></span>
\t\t\t<div class=\"sheader\">
\t\t\t\tВы уже подписаны на рассылку!
\t\t\t</div>
\t\t\t<div class=\"sbody\">
\t\t\t\t<div class=\"sbody-body\">
\t\t\t\t\t<div class=\"sbody-body-item\">
\t\t\t\t\t\t<i class=\"icon icon-ok-1\"></i><span>У вас есть личный кабинет</span>
\t\t\t\t\t\t<div class=\"account-login\">Ваш логин: <span id=\"account-login-made\"></span></div>
\t\t\t\t\t\t<div class=\"preim\">Коротко о преимуществах в личном кабинете:</div>
\t\t\t\t\t\t<ul class=\"sbody-body-ul\">
\t\t\t\t\t\t\t<li class=\"\">- вы участник <strong>накопительной</strong> бонусной программы лояльности</li>
\t\t\t\t\t\t\t<li class=\"\">- вы получаете персональные <strong>скидки</strong></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"preim\"><a href=\"\">Подробнее о преимуществах личного кабинета</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sfooter\">
\t\t\t\t<button type=\"button\" class=\"btn btn-auting\" onclick=\"location.href = '";
            // line 79
            echo ($context["login"] ?? null);
            echo "'\">Авторизоваться в личном кабинете</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div id=\"overflow-popup\"></div>
 
<script>
    function Subscribe() {
        var emailpattern = /^\\w+@[a-zA-Z_]+?\\.[a-zA-Z]{2,3}(.[a-zA-Z]{2})?\$/;
        var email = \$('#txtemail').val();     

        if(email != \"\") {
            if(emailpattern.test(email)){
                \$.ajax({
                    type: 'POST',
                    url: 'index.php?route=common/footer/newSubscribe',
                    dataType: 'json',
                    data: {email: \$('#txtemail').val()},
                    success: function(json){
\t\t\t\t\t\tif(json.message == 'Уже подписаны!') {
\t\t\t\t\t\t\t\$('#overflow-popup').fadeIn(297, function(){
\t\t\t\t\t\t\t\t\$('.subscribers-made-pupup').css('display', 'block').animate({opacity: 1}, 198);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#account-login-made').html(email);
\t\t\t\t\t\t} else if(json.message == 'Подписка успешно оформлена!') {
\t\t\t\t\t\t\t\$('#overflow-popup').fadeIn(297, function(){
\t\t\t\t\t\t\t\t\$('.subscribers-tahf-pupup').css('display', 'block').animate({opacity: 1}, 198);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('#account-login').html(email);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\talert('Что-то пошло не так. Попробуйте еще раз!');
\t\t\t\t\t\t}
\t\t\t\t\t}
                });
                \$('#txtemail').val('');
                return false;
            }else{
                alert(\"";
            // line 119
            echo ($context["text_invalid_email"] ?? null);
            echo "\");
                return false;
            }
        } else {
            alert(\"";
            // line 123
            echo ($context["text_email_require"] ?? null);
            echo "\");
            \$(email).focus();
            return false;
        }
    }

\t\$(\"#txtemail\").keyup(function () {
\t\tif (\$(this).val()) {
\t\t\t\$('#subscribe').removeAttr('disabled');
\t\t}
\t\telse {
\t\t\t\$('#subscribe').attr('disabled', 'disabled'); 
\t\t}
\t});
 
 

  \$('.exit').click( function(){
    \$('#overflow-popup').fadeOut(297)
      \$('.subscribers-success-pupup').fadeOut(297);
  });
 
</script>
";
        }
        // line 147
        echo "</main>
 
 

 


<footer>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-contact\">
\t\t\t\t<h4>Контакты</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 160
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"icon icon-right-dir\"></i> ";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t\t\t\t";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informationstop"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 162
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 162);
            echo "\"><i class=\"icon icon-paw\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 162);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "\t\t\t\t\t<li><a href=\"tel:";
        echo ($context["telephone"] ?? null);
        echo "\"><i class=\"icon icon-phone\"></i> ";
        echo ($context["telephone"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"malito:";
        // line 165
        echo ($context["email"] ?? null);
        echo "\"><i class=\"icon icon-mail-alt\"></i> ";
        echo ($context["email"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"icon icon-location-1\"></i> ";
        // line 166
        echo ($context["address"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li>";
        // line 167
        echo ($context["comment"] ?? null);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-information\">
\t\t\t\t<h4>Информация</h4>
\t\t\t\t<ul>
\t\t\t\t\t<li><i class=\"icon icon-right-dir\"></i> <a href=\"";
        // line 174
        echo ($context["login"] ?? null);
        echo "\">Вход</a> | <a href=\"";
        echo ($context["register"] ?? null);
        echo "\">Регистрация</a></li>
\t\t\t\t\t";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informationsbottom"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 176
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 176);
            echo "\"><i class=\"icon icon-right-dir\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 176);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "\t\t\t\t\t<li><a href=\"";
        echo ($context["articles"] ?? null);
        echo "\"><i class=\"icon icon-right-dir\"></i> ";
        echo ($context["text_articles"] ?? null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 179
        echo ($context["special"] ?? null);
        echo "\"><i class=\"icon icon-right-dir\"></i> Акции</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-about\">
\t\t\t\t<h4>";
        // line 184
        echo ($context["names"] ?? null);
        echo "</h4>
\t\t\t\t 
\t\t\t\t<div class=\"abouts\">
\t\t\t\t\t<p class=\"abouts-left\">";
        // line 187
        echo ($context["abouts"] ?? null);
        echo "</p>
\t\t\t\t\t";
        // line 189
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t
\t\t</div>
\t\t<div class=\"row justify-contentspas\">
\t\t
\t\t\t<div class=\"search-product-id\">
\t\t\t\t<h4>Оплата онлайн</h4>
\t\t\t\t<div class=\"errors\"></div>
\t\t\t\t<div class=\"search-product-body\">
\t\t\t\t<input type=\"text\" name=\"payment_order_id\" value=\"\" placeholder=\"Номер заказа\" id=\"input-payment-order\" class=\"input2\" />
\t\t\t\t <button type=\"button\" id=\"button-payment-order\" disabled=\"disabled\">Оплатить</button>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"search-product-id\">
\t\t\t\t<h4>Повторить заказ</h4>
\t\t\t\t<div class=\"errors errors-repeat\"></div>
\t\t\t\t<div class=\"search-product-body\">
\t\t\t\t<input type=\"text\" name=\"repeat_order_id\" value=\"\" placeholder=\"Номер заказа\" id=\"input-repeat-order\" class=\"input2\" />
\t\t\t\t <button type=\"button\" id=\"button-repeat-order\" disabled=\"disabled\">Повторить</button>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t 
\t\t\t <div class=\"search-product-id\">
\t\t\t\t<h4>Поиск товара по ID</h4>
\t\t\t\t<div class=\"errors errors-search\"></div>
\t\t\t\t<div class=\"search-product-body\">
\t\t\t\t<input type=\"text\" name=\"search_product_id\" value=\"\" placeholder=\"ID товара\" id=\"input-search-product-id\" class=\"input2\" />
\t\t\t\t <button type=\"button\" id=\"button-search-product-id\" disabled=\"disabled\">Поиск</button>
\t\t\t\t</div>
\t\t\t  </div>
\t\t</div>
\t</div>
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t
\t<div class=\"pop-popup\">
\t<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"pop-left\">
\t\t\t<img src=\"/image/magazines.jpg\" alt=\"\">
\t\t</div>
\t\t<div class=\"pop-right\">
\t\t\t<h3>У нас отображен не весь ассортимент товаров</h3>
\t\t\t<p>Если вы не нашли нужный товар в каталоге, Вы всегда можете с нами связаться любым удобным способом и мы поможем вам найти товар для вашего домашнего питомца</p>
\t\t\t
\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"https://spbzveri.ru/about\"><i class=\"icon icon-paw\"></i> О нас</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"tel:+7 812 981 16 40\"><i class=\"icon icon-phone\"></i> +7 812 981 16 40</a></li>
\t\t\t\t\t<li><a href=\"malito:support@spbzveri.ru\"><i class=\"icon icon-mail-alt\"></i> support@spbzveri.ru</a></li>
\t\t\t\t 
\t\t\t\t</ul>
\t\t\t\t
\t\t</div>
\t\t
\t</div>
\t</div>
\t</div>
</footer>
";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 269
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 269);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 269);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 269);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 272
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo " 
";
        // line 275
        echo ($context["prmn_cmngr_cities"] ?? null);
        echo "
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 275,  421 => 274,  412 => 272,  408 => 271,  395 => 269,  391 => 268,  310 => 189,  306 => 187,  300 => 184,  292 => 179,  285 => 178,  274 => 176,  270 => 175,  264 => 174,  254 => 167,  250 => 166,  244 => 165,  237 => 164,  226 => 162,  222 => 161,  216 => 160,  201 => 147,  174 => 123,  167 => 119,  124 => 79,  92 => 50,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
