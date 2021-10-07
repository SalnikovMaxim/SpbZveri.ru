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

/* default/template/common/search.twig */
class __TwigTemplate_cfcf58e0bf961fe099aa617534f97ddc12672b03c22f76343480b3d1a5cd357c extends \Twig\Template
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
        echo "<div id=\"search\" class=\"search-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"Искать среди 10 000 + зоотоваров\" />
   <button type=\"button\" class=\"btn-search\"><i class=\"icon icon-search\"></i></button>
</div>

 
<script type=\"text/javascript\">
    \$.fn.livesearch = function(option) {
        return this.each(function() {
            this.timer = null;
            this.items = new Array();
            this.minLength = 2;

            \$.extend(this, option);
    
            \$(this).attr('autocomplete', 'off');
            
            // Focus
            \$(this).on('focus', function() {
                //this.request();
            });
            
            // Blur
            \$(this).on('blur', function() {
                setTimeout(function(object) {
                    object.hide();
                }, 200, this);              
            });
            
            // Keydown
            \$(this).on('input', function(event) {
                if (event.keyCode == 27) {
                    this.hide();
                } else if (this.value.length <= this.minLength) {
                    this.hide();
                } else {
                    this.request();
                }
            });
            
            // Show
            this.show = function() {
                var pos = \$(this).position();
    
                \$(this).siblings('div.search-ajax-block').css({
                    top: pos.top + \$(this).outerHeight(),
                    left: pos.left
                });
    
                \$(this).siblings('div.search-ajax-block').show();
            }
            
            // Hide
            this.hide = function() {
                \$(this).siblings('div.search-ajax-block').hide();
            }       
            
            // Request
            this.request = function() {
                clearTimeout(this.timer);
        
                this.timer = setTimeout(function(object) {
                    object.source(\$(object).val(), \$.proxy(object.response, object));
                }, 200, this);
            }
            
            // Response
            this.response = function(json) {
                html = '';
    
                if (json.length) {
                    for (i = 0; i < json.length; i++) {
                        this.items[json[i]['value']] = json[i];
                    }
    
                    for (i = 0; i < json.length; i++) {
                        if (!json[i]['category']) {
\t\t\t\t\t\t\thtml += '<div class=\"search-ajax-block-item\" data-value=\"' + json[i]['value'] + '\">';
\t\t\t\t\t\t\thtml += '<div class=\"search-thumb\"><a href=\"' + json[i]['href'] + '\"><img src=\"' + json[i]['image'] + '\" alt=\"\"></a></div>';
\t\t\t\t\t\t\thtml += '<div><p class=\"search-name\"><a href=\"' + json[i]['href'] + '\">' + json[i]['label'] + '</a></p><p class=\"search-price\">' + json[i]['price'] + '</p></div>';
\t\t\t\t\t\t\thtml += '<button type=\"button\" onclick=\"cart.add(' + json[i]['value'] + ');\" class=\"product-button search-button\"><i class=\"icon icon-basket\"></i></button>';
\t\t\t\t\t\t\thtml += '</div>';
                        }
                    }
                }
    
                if (html) {
                    this.show();
                } else {
                    this.hide();
                }
    
                \$(this).siblings('div.search-ajax-block').html(html);
            }
            
            \$(this).after('<div class=\"search-ajax-block\"></div>');
            \$(this).siblings('div.search-ajax-block').delegate('a', 'click', \$.proxy(this.click, this)); 
            
        });
    };
    
    \$('input[name=\\'search\\']').livesearch({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=common/search/livesearch&filter_name=' +  encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            label: item.name,
                            value: item.product_id,
                            image: item.image,
                            price: item.price,
                            href: item.href,
                        }
                    }));
                }
            });
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/search.twig", "");
    }
}
