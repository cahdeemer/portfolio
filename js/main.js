( function( $ ) {

  $(document).on('scroll', function() {
        if ($(document).scrollTop() >= 75) {
            $('header').addClass('scrolling');
            //$('.site-branding').addClass('hidden')
        } else {
            $('header').removeClass('scrolling');
            //$('.site-branding').removeClass('hidden');
        }
    });


})( jQuery );
				