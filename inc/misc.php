<?php

/**
*
*	Fallback menu used by wp_nav_menu
*
*/
if ( !function_exists('ast_fallback_menu') ) {

	function ast_fallback_menu(){
		printf('<ul class="ast-menu sm sm-clean sm-vertical">%s</ul>', wp_list_pages( 'title_li=&sort_column=menu_order&echo=0') );
	}
}