$(function() {
	var 
		$discount_panel 	 = $('#membership-nearest-discount-panel'),
		$discount_panel_hide = $discount_panel.find('div[id$="hidden"]'),
		$gift_panel 		 = $('#membership-nearest-gift-panel'),
		$gift_panel_hide 	 = $gift_panel.find('div[id$="hidden"]');

	if ($discount_panel.length) {
		$.ajax( {
			url: 'index.php?route=extension/total/membership_card/nearestDiscount',
			dataType: 'json',	
			beforeSend: function() {},
			complete: function() {},		
			success: function(json) {
				if (typeof json['current_discount_text'] != 'undefined' || typeof json['nearest_discount_text'] != 'undefined') {
					if (typeof json['current_discount_text'] != 'undefined') {
						$discount_panel_hide.find('#membership-c-d-t').html(json['current_discount_text']);
					}
					
					if (typeof json['nearest_discount_text'] != 'undefined') {
						$discount_panel_hide.find('#membership-n-d-t').html(json['nearest_discount_text']);
					}
					
					$discount_panel.fadeIn('slow').find('#membership-d').html(json['current_discount'] + ' <i class="icon icon-cc-diners-club"></i>').css({'transform': 'scale(1,1)'});
				}
			}
		} );
		
		$(document).ajaxSuccess(function(event, XMLHttpRequest, ajaxOptions) {
			if (ajaxOptions.url.match(/checkout\/cart/i)) {
				$.ajax( {
					url: 'index.php?route=extension/total/membership_card/nearestDiscount',
					dataType: 'json',	
					beforeSend: function() {
						$discount_panel.find('#membership-d').html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>');
					},
					complete: function() {
						$discount_panel.find('#membership-d i').replaceWith(' <i class="icon icon-cc-diners-club"></i>');
					},		
					success: function(json) {
						if (typeof json['current_discount_text'] != 'undefined' || typeof json['nearest_discount_text'] != 'undefined') {
							$discount_panel_hide.find('#membership-c-d-t, #membership-n-d-t').html('');
							
							if (typeof json['current_discount_text'] != 'undefined') {
								$discount_panel_hide.find('#membership-c-d-t').html(json['current_discount_text']);
							}
							
							if (typeof json['nearest_discount_text'] != 'undefined') {
								$discount_panel_hide.find('#membership-n-d-t').html(json['nearest_discount_text']);
							}
							
							$discount_panel.find('#membership-d').prepend(json['current_discount']);

							$discount_panel.fadeIn('slow', function() { 
								$discount_panel.animate({'right': '250px'}, 700);
								$discount_panel_hide.animate({'right': '0'}, 700);
							} );

							setTimeout(function() { 
								$discount_panel.animate({'right': '0'}, 700, function() { 
									$discount_panel.removeAttr('style');
								} );
								$discount_panel_hide.animate({'right': '-250px'}, 700, function() { 
									$discount_panel_hide.removeAttr('style');
								} );
							},
							7000);
						} else {
							$discount_panel.fadeOut('slow');
						}
					}
				} );
			}
		} );
	}
	
	if ($gift_panel.length) {
		$.ajax( {
			url: 'index.php?route=extension/total/membership_gift/nearestGift',
			dataType: 'json',	
			beforeSend: function() {},
			complete: function() {},		
			success: function(json) {
				if (typeof json['current_gift_text'] != 'undefined' || typeof json['nearest_gift_text'] != 'undefined') {
					if (typeof json['current_gift_text'] != 'undefined') {
						$gift_panel_hide.find('#membership-c-g-t').html(json['current_gift_text']);
					}
						
					if (typeof json['nearest_gift_text'] != 'undefined') {
						$gift_panel_hide.find('#membership-n-g-t').html(json['nearest_gift_text']);
					}
				
					$gift_panel.fadeIn('slow').find('#membership-g').html('<i class="icon icon-cc-diners-club"></i>').css({'transform': 'rotate(0deg)'});		
				}	
			}
		} );
		
		$(document).ajaxSuccess(function(event, XMLHttpRequest, ajaxOptions) {
			if (ajaxOptions.url.match(/checkout\/cart/i)) {
				$.ajax( {
					url: 'index.php?route=extension/total/membership_gift/nearestGift',
					dataType: 'json',	
					beforeSend: function() {
						$gift_panel.find('#membership-g').html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>');
					},
					complete: function() {
						$gift_panel.find('#membership-g i').replaceWith('<i class="icon icon-cc-diners-club" aria-hidden="true"></i>');
					},		
					success: function(json) {
						if (typeof json['current_gift_text'] != 'undefined' || typeof json['nearest_gift_text'] != 'undefined') {
							$gift_panel_hide.find('#membership-c-g-t, #membership-n-g-t').html('');
							
							if (json['current_gift_text']) {
								$gift_panel_hide.find('#membership-c-g-t').html(json['current_gift_text']);
							}
							
							if (json['nearest_gift_text']) {
								$gift_panel_hide.find('#membership-n-g-t').html(json['nearest_gift_text']);
							}
							
							$gift_panel.fadeIn('slow', function() { 
								$gift_panel.animate({'right': '250px'}, 700);
								$gift_panel_hide.animate({'right': '0'}, 700);
							} );

							setTimeout(function() { 
								$gift_panel.animate({'right': '0'}, 700, function() { 
									$gift_panel.removeAttr('style');
								} );
								$gift_panel_hide.animate({'right': '-250px'}, 700, function() { 
									$gift_panel_hide.removeAttr('style');
								} );
							},
							7000);
						} else {
							$gift_panel.fadeOut('slow');
						}
					}
				} );
			}
		} );
	}
} );