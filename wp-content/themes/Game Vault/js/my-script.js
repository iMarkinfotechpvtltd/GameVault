// JavaScript Document

    jQuery(document).ready(function() {
		

		
   if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
            jQuery('body').on("mousewheel", function () {
                // remove default behavior
                event.preventDefault();

                //scroll without smoothing
                var wheelDelta = event.wheelDelta;
                var currentScrollPosition = window.pageYOffset;
                window.scrollTo(0, currentScrollPosition - wheelDelta);
            });
        }






     
     jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
          }
       }
     });
	 
 jQuery('.gallery-carousel').owlCarousel({
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
          }
       }
     });	 

	 
	jQuery('.selectpicker').selectpicker({
      liveSearch: false,
      maxOptions: 1
    });
	

	
var stickyNavTop = jQuery('body').offset().top;
 
var stickyNav = function(){
var scrollTop = jQuery(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    jQuery('body').addClass('sticky');
} else {
    jQuery('body').removeClass('sticky'); 
}
};
 
stickyNav();
 
jQuery(window).scroll(function() {
    stickyNav();
});

		
		jQuery("input[name='txt_name']").keydown(function(e) {
			if (e.shiftKey || e.ctrlKey || e.altKey) {
			  e.preventDefault();
			} else {
			  var key = e.keyCode;
			  if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
				e.preventDefault();
			  }
			}
		  });
		  
		  jQuery("input[name='prefferd_name']").keydown(function(e) {
			if (e.shiftKey || e.ctrlKey || e.altKey) {
			  e.preventDefault();
			} else {
			  var key = e.keyCode;
			  if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
				e.preventDefault();
			  }
			}
		  });
		  
		  jQuery("input[name='txt_eventname']").keydown(function(e) {
			if (e.shiftKey || e.ctrlKey || e.altKey) {
			  e.preventDefault();
			} else {
			  var key = e.keyCode;
			  if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
				e.preventDefault();
			  }
			}
		  });
		  
	
  var path = window.location.pathname;
  var newClass = path.match(/[^\/]*[^\d\/][^\/]*/);
  jQuery('body').addClass(newClass[0]);

});


