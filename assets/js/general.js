(function($) {

	var menutoggle = $('.ast-menu-toggle'),
		menu       = $('.ast-menu-wrap'),
		adminbar   = $('#wpadminbar'),
		main 	   = $('main'),
		body 	   = $('body');

	$(menutoggle).on('click', function(e){
		e.preventDefault();

		$(body).toggleClass('ast-menu-open');
	})

	$(main).click(function(){
		$(body).removeClass('ast-menu-open');
	})

})( jQuery );