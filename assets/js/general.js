(function($) {

	var menutoggle = $('.ast-menu-toggle'),
		menu       = $('.ast-menu-wrap'),
		body 	   = $('body');

	$(menutoggle).on('click', function(e){
		e.preventDefault();

		$(body).toggleClass('ast-menu-open');
	})



})( jQuery );