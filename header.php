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

	<body <?php body_class(); ?> >

	<div class="ast-site-wrapper">

		<div class="ast-menu-wrap"><?php

			$args = array(
				'theme_location' 	=> 'primary',
				'container' 		=> false,
				'menu_id' 			=> 'menu-main-nav',
				'fallback_cb'		=> 'ast_fallback_menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s ast-menu">%3$s</ul>',
			);
			wp_nav_menu( $args );

		?>
		</div>

		<main class="ast-site-main">

			<header id="ast-header" class="ast-header" itemscope itemtype="http://schema.org/WPHeader">

				<div class="ast-header--inner">

					<a href="#" class="ast-menu-toggle"><i class="dashicons dashicons-menu"></i><span>Menu</span></a>

					<div class="ast-brand-wrap">


						<?php

						$logo = get_theme_mod('ast_custom_logo');

						if ( $logo ) { ?>

							<a itemprop="url" href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('name'); ?>"><img class="ast-site-logo" src="<?php echo $logo;?>" alt="<?php echo bloginfo('title');?>"></a>

						<?php } else { ?>

							<h1 class="ast-site-title"><a itemprop="url" href="<?php echo esc_url( home_url() ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>

							<?php if ( get_bloginfo('description') ) { ?>

								<h2 class="ast-site-description"><?php echo get_bloginfo('description');?></h2>

							<?php }
						}
						?>
					</div>

				</div>

			</header>