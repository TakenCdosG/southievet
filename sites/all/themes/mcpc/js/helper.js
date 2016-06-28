jQuery().ready(function(){
	resize();
	menu();
	mobile_menu();
	testimonials();
	home_slider();
	service();
	testimonial();
});

jQuery(window).load(function(){
	main_content();
	
	var full_height = jQuery(window).height();
	var body = jQuery('body').height()+65;

	var dife = full_height - body;

	if(dife>0){
		full = 151+dife-33;
		jQuery('#footer_wrapper').css('height',full+'px');
	} 
});

// This function execute on windows resize
function resize(){
	jQuery(window).resize(function(){
		var window_width = jQuery(window).width();
		// Call functions
		main_content();
		hide_menu();
		// Make changes according with the document width
		if(window_width>480){
			// Reset testimonials circle
			if(jQuery('#home_testi_wrapper').hasClass('show_testi')){
				jQuery('#home_testi_wrapper').removeClass('show_testi');
				jQuery('#home_testi_wrapper').data('flag', 0);
			}
		}
	});
}

// This function show/hide the hidden menu.
function menu(){
	var hidden_menu = jQuery('#hidden_menu');
	
	jQuery('#hidden_menu_button').click(function(){
		if(hidden_menu.is(':visible')) hidden_menu.slideUp(500);
			else hidden_menu.slideDown(500);
	});
}

// This function show/hide mobile second level items
function mobile_menu(){
	jQuery('#hidden_menu ul li span').click(function(){
		if(jQuery(this).hasClass('open')){
			jQuery(this).removeClass('open');
			jQuery(this).prev().hide();
		}else{
			jQuery(this).addClass('open');
			jQuery(this).prev().show();
		}
	});
}

// This function hide the menu on the resize event
function hide_menu(){
	var window_width = jQuery(window).width();
	var hidden_menu = jQuery('#hidden_menu');
	
	if(jQuery.browser.msie || jQuery.browser.mozilla){
		if(window_width>=807){
			if(hidden_menu.is(':visible')) hidden_menu.hide();
		}		
	}else{
		if(window_width>=823){
			if(hidden_menu.is(':visible')) hidden_menu.hide();
		}
	}
}

// This function show/hide the testimonial circle on mobile view
function testimonials(){
	jQuery('#testimonial_title_1').add('#testimonial_title_2').click(function(){
		var window_width = jQuery(window).width();
		var circle = jQuery('#home_testi_wrapper');
		var flag = circle.data('flag');
		
		if(window_width<=480){
			if(flag==0){
				circle.addClass('show_testi');
					circle.data('flag', 1);
			}else{
				circle.removeClass('show_testi');
					circle.data('flag', 0);
			}
		}
	});
}

// This function set the padding bottom on the main content
function main_content(){
	var header_height = jQuery('#header').outerHeight();
	
	jQuery('#main_content').css('margin-top', header_height+'px');
}

// This function control the home slider
function home_slider(){
	if(jQuery('body.front').length>0){
		jQuery('.rslides').responsiveSlides({
			timeout: 6000,
			pager: true,
		});
	}
}

// This function show/hide the services
function service(){
	jQuery('.service_button', jQuery('#services_wrapper')).click(function(){
		var button = jQuery(this);
		var content = button.parent().prev().find('.service_content');

		if(content.is(':visible')){
			content.slideUp();
			button.text('+');
		}else{
			content.slideDown();
			button.text('-');
		}
	});
}

// This function control the testimonial slideshow
function testimonial(){
	jQuery('.test_control', jQuery('#testimonial_wrapper')).click(function(){
		var type = jQuery(this).attr('data-type');
		var current = jQuery('.testimonial_content > div:visible', jQuery('#testimonial_wrapper'));

		switch(type){
			case 'prev':
				if(current.prev().length>0){
					current.fadeOut('normal', function(){
						current.prev().fadeIn('normal');
					});
				}else{
					current.fadeOut('normal', function(){
						jQuery('.testimonial_content .last', jQuery('#testimonial_wrapper')).fadeIn('normal');
					});
				}
			break;
			case 'next':
				if(current.next().length>0){
					current.fadeOut('normal', function(){
						current.next().fadeIn('normal');
					});
				}else{
					current.fadeOut('normal', function(){
						jQuery('.testimonial_content div:first-child', jQuery('#testimonial_wrapper')).fadeIn('normal');
					});
				}
			break;
		}
	});
}