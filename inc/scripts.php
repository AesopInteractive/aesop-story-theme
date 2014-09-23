<?php

class aesopStoryThemeScripts {

	public function __construct(){

		add_action('wp_enqueue_scripts', array($this,'load_scripts'));

	}

	public function load_scripts(){

		wp_enqueue_style('dashicons');
		wp_enqueue_style('ast-style', get_stylesheet_directory_uri().'/assets/css/style.css', AST_VERSION, true);
		wp_enqueue_script('ast-script', get_stylesheet_directory_uri().'/assets/js/ast.min.js', AST_VERSION, true);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		    wp_enqueue_script( 'comment-reply' );
		}
	}
}

new aesopStoryThemeScripts;