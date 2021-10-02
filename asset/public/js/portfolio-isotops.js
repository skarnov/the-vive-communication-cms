// JavaScript Document
  (function(jQuery) {
	  
  "use strict";		
	/* Masonary Script starts from here */	
	var viewport_width = viewport();	
	var column_width = 300;	
		//var column_width = viewport_width.width - 20;
		//console.log(viewport_width.width);
	
	/* Running Masanory 1st time */
	if(viewport_width.width >= 1200 ){
		//console.log(column_width= 300);
		//console.log(jQuery('.container').width());
		if(jQuery('.container').width() < 1170){
			
			column_width= 240;
		}
	}else if(viewport_width.width >=980 && viewport_width.width <= 1199 ){
		column_width= 240;
	}else if(viewport_width.width >=768 && viewport_width.width <= 979 ){
		column_width= 186;
	}

    /* Gallery Isotope Masonary */
    jQuery('#container').isotope({
      itemSelector : '.isotope-item',
      masonry: {
        columnWidth: column_width
      },   
      animationEngine : 'jquery'
    });
    
    /**Running masonary everytime window resizes */
    jQuery(window).resize(function(){	
      viewport_width = viewport();
      //console.log("viewport_width = "+viewport_width.width);
      if(viewport_width.width >= 1200 ){
        column_width= 300;
        if(jQuery('.container').width() < 1170){
          column_width= 240;
        }
      }else if(viewport_width.width >=980 && viewport_width.width <= 1199 ){
        column_width= 240;
      }else if(viewport_width.width >=768 && viewport_width.width <= 979 ){
        column_width= 186;
      }
      //console.log("column_width = " + column_width);
      
      /* Gallery Isotope Masonary */
      jQuery('#container').isotope({
        itemSelector : '.isotope-item',
        masonry: {
          columnWidth: column_width
        }
      });
    });
	
		// filter items when filter link is clicked Masonary isotope
		jQuery('#filters a').click(function(){
			var selector = jQuery(this).attr('data-filter');
			jQuery('#container').isotope({ filter: selector });
			return false;
		});
		/* Portfolio Nav javascript */
		jQuery('.portfolio_nav li a').click(function(){
			jQuery(this).parent('li').siblings().removeClass('current');
			jQuery(this).parent('li').addClass('current');
		});

})(jQuery);