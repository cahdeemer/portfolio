( function( $ ) {

  $('.slider__small').slick({
  		arrows: true,
  		slidesToShow: 3,
  		responsive: [
	    {
	      breakpoint: 920,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]	
  });


})( jQuery );
				