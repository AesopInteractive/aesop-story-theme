(function($) {

	var menutoggle = $('.ast-menu-toggle'),
		body 	   = $('body');

	menutoggle.on('click', function(e){
		e.preventDefault();

		$(body).toggleClass('ast-menu-open');
	})

	$('.ast-article').on('click',function(){
		$('body').removeClass('ast-menu-open');
	})

})( jQuery );