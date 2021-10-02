// JavaScript Document
  (function(jQuery) {
  "use strict";
  //jQuery(document).ready(function(){

	
	/* toggle_section_button Start */
	jQuery('.toggle_section_button').click(function(e){
		e.preventDefault();
		var $toggle_element = jQuery(this).attr('href');
		jQuery($toggle_element).toggle('blind', {direction:'up'}, 1000);
		e.stopPropagation();

	});
	/* toggle_section_button End */
	
	/* header_toggle_menu Start */
	jQuery('.header_toggle_menu .toggle_top_menu_btn').click(function(e){
		var $nav_to = jQuery(this).parent().parent().siblings('.main-nav');
		jQuery(this).css('opacity', 0).css('z-index', 9);
		jQuery(this).siblings().css('opacity', 1).css('z-index', 10);
		jQuery(this).css('opacity', 0).css('z-index', 9);
		jQuery(this).siblings('.open_menu').css('opacity', 1).css('z-index', 10);
		$nav_to.toggle('slide', {direction:'right'}, 1000);
		e.stopPropagation();

	});
		/* header_toggle_menu End */
	
	/* Small Navigation */
	// Responsive Navigation Working
	jQuery('.toggle_main_menu_btn').click(function(e){
		if(viewport().width < 768){
			//console.log('View Port Widt = '+viewport().width);
			jQuery(this).css('opacity', 0).css('z-index', 9);
			jQuery(this).siblings().css('opacity', 1).css('z-index', 10);
			jQuery('#top-nav').slideToggle();
			e.stopPropagation();
		}
	});
	
	jQuery('#top-nav li').click(function(){
		if(viewport().width < 768){
//			alert('children ul length '+ jQuery(this).children('ul').length);
			if(jQuery(this).children('ul').length === 0){
				jQuery('#top-nav').slideToggle();
				jQuery('.toggle_main_menu_btn.close_menu').css('opacity', 0).css('z-index', 9);
				jQuery('.toggle_main_menu_btn.open_menu').css('opacity', 1).css('z-index', 10);
			}
		}
	});
	
	// When Resizing Window will show/hide the List of .top-menu
	jQuery(window).resize(function(){
			if(viewport().width >= 768){
				jQuery('.top-nav').css('display', 'block');
			}
			if(viewport().width <= 767){
				jQuery('.top-nav').css('display', 'none');
			}
		});
	
		
	// Back to top
	jQuery('.back_to_top').click(function(){
    	jQuery("html, body").animate({ scrollTop: 0 }, 750);

	});

	// Scroll to next and previous options
	jQuery('.scroll_next_section').click(function(){
		var next_section;
		next_section = jQuery(this).parents('section').nextAll(".section_container").first();
		//alert(next_section.nextAll(".section_container").first().prepend("<h1>hi aa</h1>"));
		jQuery('html,body').stop().animate({scrollTop: (next_section.offset().top)+'px'},500,'easeOutExpo');
	});
	jQuery('.scroll_prev_section').click(function(){
		var prev_section;
		prev_section = jQuery(this).parents('section').prevAll(".section_container").first();
		//alert(next_section.nextAll(".section_container").first().prepend("<h1>hi aa</h1>"));
		jQuery('html,body').stop().animate({scrollTop: (prev_section.offset().top)+'px'},500,'easeOutExpo');
	});
				
	/* Window resize HTML 5 Video resize For Blog Posts */
	jQuery(window).resize(function(){
			var $video_html5=jQuery('.blog_post .featured_image').children('.video-js');
			var $video_html5_port=jQuery('.project .featured_image').children('.video-js');
			var $video_html5_full_width = jQuery('.full_width_blog .blog_post .featured_image').children('.video-js');
				if(viewport().width >= 1200){
					$video_html5.css('height', '377px');
					$video_html5_port.css('height', '440px');
					$video_html5_full_width.css('height', '490px');
				}
				if(viewport().width >= 980 && viewport().width <= 1199){
					$video_html5.css('height', '304px');
					$video_html5_port.css('height', '365px');
					$video_html5_full_width.css('height', '394px');
				}
				if(viewport().width >= 481 && viewport().width <=979){
					$video_html5.css('height', '233px');
					$video_html5_port.css('height', '281px');
					$video_html5_full_width.css('height', '303px');
				}
				if(viewport().width >= 481 && viewport().width <=767){
					$video_html5_full_width.css('height', '233px');
				}
				if(viewport().width <= 480){
					$video_html5.css('height', '160px');
					$video_html5_port.css('height', '190px');
					
				}

		});


  //});
  
  })(jQuery);

/* 
*
*
* viewport width 
*
*
*/
function viewport(){
	var e = window, a = 'inner';
	if ( !( 'innerWidth' in window ) )
	{
	a = 'client';
	e = document.documentElement || document.body;
	}
	return { width : e[ a+'Width' ] , height : e[ a+'Height' ] };
}