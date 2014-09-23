<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title itemprop="name"><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php wp_head(); ?>

	</head>

	<?php do_action('aesop_theme_body_before'); // Aesop Universal Theme Hook ?>

	<body <?php body_class(); ?>>

	<script>
		jQuery(document).ready(function(){
			jQuery('.ast-menu').smartmenus();
		});
	</script>
	<header>
		<?php
			$args = array(
				'theme_location' 	=> 'primary',
				'container' 		=> false,
				'menu_id' 			=> 'menu-main-nav',
				'fallback_cb'		=> 'ast_fallback_menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s ast-menu sm sm-clean">%3$s</ul>',
			);
			wp_nav_menu( $args );
		?>
	</header>