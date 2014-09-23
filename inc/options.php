<?php

class astThemeCustomizer {

	public static function register($wp_customize){

		$wp_customize->add_section( 'ast_appearence', array(
			'title' => __( 'Aesop Story Theme', 'aesop-story-theme' )
		) );

		$wp_customize->add_setting( 'ast_custom_logo', array(
			'type' 		=> 'theme_mod',
			'default'	=> ''
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ast_custom_logo', array(
			'label' 	=> __('Custom Logo', 'aesop-story-theme'),
			'section' 	=> 'ast_appearence',
			'settings' 	=> 'ast_custom_logo',
			'transport' => 'postMessage',
			'description' => __('Height of logo will be restricted to 40px.','aesop-story-theme')
		) ) );

		$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	}

   	public static function live_preview() {
      	wp_enqueue_script('ast-themecustomizer',AST_THEME_URL.'/assets/js/theme-customizer.js', array( 'jquery','customize-preview' ),	NOVELLA_THEME_VERSION, true);
   	}

}
// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'astThemeCustomizer' , 'register' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'astThemeCustomizer' , 'live_preview' ) );
