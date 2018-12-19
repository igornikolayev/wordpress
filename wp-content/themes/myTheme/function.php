<?php 
	add_action( 'wp_enqueue_scripts', 'theme_name_styles');  
	function theme_name_styles() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	}