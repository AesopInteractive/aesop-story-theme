<?php

class aesopStoryTheme{

	function __construct(){

			// Set some constants
		define('AST_VERSION', '1.0');

		define('AST_DIR', get_stylesheet_directory());
		define('AST_URL', get_stylesheet_directory_uri());

		require_once(AST_DIR.'/inc/options.php' );
		require_once(AST_DIR.'/inc/scripts.php' );
		require_once(AST_DIR.'/inc/misc.php' );

		add_action('after_setup_theme', array($this,'setup'));
		add_filter('body_class', 		array($this,'body_class'));
		add_action('init', 				array($this,'editor_styles'));

	}

	function setup(){

		// set theme width
		if ( ! isset( $content_width ) ) {
			$content_width = 900;

		}

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list',
		) );

		// Add extended style support for aesop
		add_theme_support("aesop-component-styles", array("parallax", "image", "quote", "gallery", "content", "video", "audio", "collection", "chapter", "document", "character", "map", "timeline" ) );

		add_theme_support( 'custom-background');

		// i18n
		load_theme_textdomain( 'aesop-story-theme', AST_DIR. '/languages' );

		//image size
		add_image_size('ast-post-cover', 1200, 9999, array('center', 'center') );

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

	public function editor_styles(){

		add_editor_style( 'editor-style.css' );
	}
}
new aesopStoryTheme;