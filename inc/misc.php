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

/**
*
*	Pagination
*
*
*
*/
if (!function_exists('ast_get_pagination')){
	function ast_get_pagination(){

		global $wp_query, $numpages;

		if ($wp_query->max_num_pages > 1) {

			?><div class="ast-pagination ast-width"><?php

				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' 		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' 	=> '?paged=%#%',
					'current' 	=> max( 1, get_query_var('paged') ),
					'total' 	=> $wp_query->max_num_pages
				) );

			?></div><?php
		}
	}
}
