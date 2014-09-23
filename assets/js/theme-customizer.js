(function($){

	wp.customize('ast_custom_logo', function( value ) {
		value.bind( function( newval ) {
			var img = $('.ast-site-logo').attr('src');
			$(img).attr('src', newval);
		});
	});

})( jQuery );