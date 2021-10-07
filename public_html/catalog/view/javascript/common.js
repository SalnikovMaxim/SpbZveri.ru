function getURLVar(key) {
	var value = [];

	var query = String(document.location).split('?');

	if (query[1]) {
		var part = query[1].split('&');

		for (i = 0; i < part.length; i++) {
			var data = part[i].split('=');

			if (data[0] && data[1]) {
				value[data[0]] = data[1];
			}
		}

		if (value[key]) {
			return value[key];
		} else {
			return '';
		}
	} else { 			// Изменения для seo_url от Русской сборки OpenCart 3x
		var query = String(document.location.pathname).split('/');
		if (query[query.length - 1] == 'cart') value['route'] = 'checkout/cart';
		if (query[query.length - 1] == 'checkout') value['route'] = 'checkout/checkout';
		
		if (value[key]) {
			return value[key];
		} else {
			return '';
		}
	}
}
$(document).ready(function() {
  (function($){var body=$("body"),win=$(window),t1,t2,t3,span=document.createElement('span'),text_span=$(span),alert=$(document.createElement('div')),position=function(_alert){_alert.width(win.width()).css("top",win.height()*0.2);},remove=function(){alert.hide();text_span.removeClass("simpleAlertIn simpleAlertOut").removeClass("custom");},alertIn=function(text,param){var time=1500;remove();clearTimeout(t1);clearTimeout(t2);clearTimeout(t3);t3=setTimeout(function(){if(param)
{if(param.time)
{time=param.time;}
if(param.class)
{text_span.addClass(param.class);}}
alert.show();text_span.addClass("simpleAlertIn").html(text);t1=setTimeout(function(){text_span.addClass("simpleAlertOut");t2=setTimeout(function(){remove();},600);},time+600);},1);};alert.addClass('simple-alert').append(span);text_span.addClass('simple-alert-span')
position(alert);body.prepend(alert);$.alert=function(text,param){alertIn(text,param);};win.resize(function(){position(alert);});})($);
 
	// Highlight any found errors
	$('.text-danger').each(function() {
		var element = $(this).parent().parent();

		if (element.hasClass('form-group')) {
			element.addClass('has-error');
		}
	});

	// Currency
	$('#form-currency .currency-select').on('click', function(e) {
		e.preventDefault();

		$('#form-currency input[name=\'code\']').val($(this).attr('name'));

		$('#form-currency').submit();
	});

	// Language
	$('#form-language .language-select').on('click', function(e) {
		e.preventDefault();

		$('#form-language input[name=\'code\']').val($(this).attr('name'));

		$('#form-language').submit();
	});

	/* Search */
	$('#search input[name=\'search\']').parent().find('button').on('click', function() {
		var url = $('base').attr('href') + 'index.php?route=product/search';

		var value = $('header #search input[name=\'search\']').val();

		if (value) {
			url += '&search=' + encodeURIComponent(value);
		}

		location = url;
	});

	$('#search input[name=\'search\']').on('keydown', function(e) {
		if (e.keyCode == 13) {
			$('header #search input[name=\'search\']').parent().find('button').trigger('click');
		}
	});

	// Menu
	$('#menu .dropdown-menu').each(function() {
		var menu = $('#menu').offset();
		var dropdown = $(this).parent().offset();

		var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());

		if (i > 0) {
			$(this).css('margin-left', '-' + (i + 10) + 'px');
		}
	});

 
	// Checkout
 
	// Активная / неактивная кнопка при вводе в Input 
	$('#input-payment-order').on('keyup',function(){
		var $this = $(this),
		val = $this.val();
		if(val.length >= 2){
			$('#button-payment-order').attr('disabled',false);
		}else {
			$('#button-payment-order').attr('disabled',true);
		}
	});
	
	$('#input-repeat-order').on('keyup',function(){
		var $this = $(this),
		val = $this.val();
		if(val.length >= 2){
			$('#button-repeat-order').attr('disabled',false);
		}else {
			$('#button-repeat-order').attr('disabled',true);
		}
	});
	
	$('#input-search-product-id').on('keyup',function(){
		var $this = $(this),
		val = $this.val();
		if(val.length >= 2){
			$('#button-search-product-id').attr('disabled',false);
		}else {
			$('#button-search-product-id').attr('disabled',true);
		}
	});
	
	// Повторить заказ
	$('#button-repeat-order').bind('click', function() {
		$.ajax({
			type: 'POST',
			url: 'index.php?route=common/footer/trackorder',
			dataType: 'json',
			data: 'order_id=' + encodeURIComponent($('input[name=\'repeat_order_id\']').val()),
			beforeSend: function() {
		 
			},
			complete: function() {
	 
			},
			success: function(json) {
				if (json.error) {
					$('.errors-repeat').html(json.error);
				}
				
				if (json.success) {
	 
					var i;
					for (i = 1; i < json.success.length; ++i) {
						cart.add(json.success[i]['product_id'], json.success[i]['quantity']);
					}	 
					
					if (json.redirect) {
						location = json.redirect;
					}
				}
			}
		});
	});

	// Поиск товара по ID
	$('#button-search-product-id').bind('click', function() {
		var search_product = $('input[name=\'search_product_id\']').val();
		$.ajax({
			type: 'POST',
			url: 'index.php?route=common/footer/searchidProduct',
			dataType: 'json',
			data: 'product_ids=' + encodeURIComponent(search_product),
			beforeSend: function() {
				$('.success, .warning').remove();
				$('#button-setgfdgfd').attr('disabled', true);
			 
			},
			complete: function() {
				$('#button-setgfdgfd').attr('disabled', false);
				$('.attention').remove();
			},
			success: function(json) {
				if (json.error) {
					$('.errors-search').html(json.error);
				}
			 
				if (json.success) {
				 
					var i;
					for (i = 0; i < json.success.length; ++i) {
						location = json.success[i]['href'];
					}
		 
				}
			}
		});
	});
 
});


$(document).ready(function() {
	$('.cart-popup-button').click( function(event){
		$('#overlay').fadeIn(297,	function(){
			$('#cart').css('display', 'block').animate({opacity: 1}, 198);
		});
	});
	
	$('#overlay, .allcleanercart').click( function() {
		$('#cart').animate({opacity: 0}, 198, function(){
			$(this).css('display', 'none');
			$('#overlay').fadeOut(297);
		});
	});
  


  
	$('#close-pop-popup').click( function() {
		$('.pop-popup').hide();
	});
  
});
 
	
// Cart add remove functions
var cart = {
	'add': function(product_id, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/add',
			type: 'post',
			data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			beforeSend: function() {

			},
			complete: function() {

			},
			success: function(json) {
				$('.alert-dismissible, .text-danger').remove();

				if (json['redirect']) {
					location = json['redirect'];
				}

				if (json['success']) {
					//$('#content').parent().before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

					// Need to set timeout otherwise it wont update the total
					setTimeout(function () {
						$('.cart-popup-button').addClass('active');
						$('.cart-popup-button').html('<i class="icon icon-basket"></i><span id="cart-total" class="cart-total">' + json['total'] + '</span>');
					}, 100);
					
					//$('#overlay').fadeIn(297,	function(){
					//	$('#cart').css('display', 'block').animate({opacity: 1}, 198);
					//});
					 
					$('#cart .cart-block-product-item').load('index.php?route=common/cart/info .cart-block-product-item .items');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'update': function(key, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/edit',
			type: 'post',
			data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			beforeSend: function() {
 
			},
			complete: function() {
	 
			},
			success: function(json) {
 
				setTimeout(function() {
					$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');
				}, 100);

				$('#cart .cart-block-product-item').load('index.php?route=common/cart/info .cart-block-product-item .items');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'change': function(key, {target}) {
		this.updatecart(key, Number(target.value.replace(/[^\d]/g, '')));
	},
	'updatecart': function(key, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/update',
			type: 'post',
			data: 'key=' + key + '&quantity=' + quantity + '&event=update',
			dataType: 'json',
			beforeSend: function(){
 
			},
			success: function(json) {
				setTimeout(function () {
					$('.cart-popup-button').addClass('active');
					$('.cart-popup-button').html('<i class="icon icon-basket"></i><span id="cart-total" class="cart-total">' + json['total'] + '</span>');
				}, 100);
					
				$('#cart .cart-block-product-item').load('index.php?route=common/cart/info .cart-block-product-item .items');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
			beforeSend: function() {
 
			},
			complete: function() {
 
			},
			success: function(json) {
				// Need to set timeout otherwise it wont update the total
				setTimeout(function () {
					$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');
				}, 100);

				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else {
					$('#cart > ul').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'clearcart': function() {
		$.ajax({
			url: 'index.php?route=checkout/cart/clearcart',
			type: 'post',
			data: '',
			dataType: 'json',
			beforeSend: function() {
 
			},
			complete: function() {
 
			},
			success: function(json) {
				$('#cart .cart-block-product-item').load('index.php?route=common/cart/info .cart-block-product-item');
				setTimeout(function () {
					$('.cart-popup-button').removeClass('active');
					$('.cart-popup-button').html('<i class="icon icon-basket"></i><span id="cart-total" class="cart-total">' + json['total'] + '</span>');
				}, 100);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

var voucher = {
	'add': function() {

	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
			beforeSend: function() {
 
			},
			complete: function() {
 
			},
			success: function(json) {
				// Need to set timeout otherwise it wont update the total
				setTimeout(function () {
					$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');
				}, 100);

				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else {
					$('#cart > ul').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

var wishlist = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=account/wishlist/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['redirect']) {
					location = json['redirect'];
				}

				if (json['success']) {
					$.alert(json['success'], {
						time: 5000, // the time in MS that the alert box will stay
						class: "custom" // custom CSS calss
					});	 
				}

				$('#wishlist-total span').html(json['total']);
				$('#wishlist-total').attr('title', json['total']);
 
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function() {

	}
}

var compare = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=product/compare/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['success']) {
 
					$('#compare-total').html(json['total']);
 
					
					$.alert(json['success'], {
						time: 4000, // the time in MS that the alert box will stay
						class: "custom" // custom CSS calss
					});

				 
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function() {

	}
}
 