( function( $ ) {

  $('.slider__small').slick({
  		arrows: true,
  		slidesToShow: 3,
  		responsive: [
	    {
	      breakpoint: 920,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        arrows: false,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrows: false,
	        dots: true
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]	
  });

  $('.slider__large').slick({
  		arrows: true,
  		slidesToShow: 1,
  		responsive: [
	    {
	      breakpoint: 920,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrows: false,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrows: false,
	        dots: true
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]	
  });




})( jQuery );
				