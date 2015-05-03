(function($) {

	var menutoggle = $('.ast-menu-toggle')
	,	article    = $('.ast-article')
		body 	   = $('body');

	menutoggle.on('click', function(e){
		e.preventDefault();

		body.toggleClass('ast-menu-open');
	})

	article.on('click',function(){
		body.removeClass('ast-menu-open');
	})

})( jQuery );