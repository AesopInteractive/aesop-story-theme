<?php

class aesopStoryTheme{

	function __construct(){

			// Set some constants
		define('AST_VERSION', '0.1');

		define('AST_DIR', get_stylesheet_directory());
		define('AST_URL', get_stylesheet_directory_uri());

		require_once(AST_DIR.'/inc/scripts.php' );

		add_action('after_setup_theme', array($this,'setup'));
		add_filter('body_class', 		array($this,'body_class'));

	}

	function setup(){

		// set theme width
		if ( ! isset( $content_width ) ) {
			$content_width = 700;

		}

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list',
		) );

		// i18n
		load_theme_textdomain( 'aesop-story-theme', AST_DIR. '/languages' );

		if ( function_exists( 'register_nav_menus' ) ){
			register_nav_menus(
				array(
				  'primary' => __('Primary','aesop-story-theme')
				)
			);
		}

	}

	function body_class($classes){

		$classes[] = 'aesop-story-theme';
		return $classes;
	}
}
new aesopStoryTheme;