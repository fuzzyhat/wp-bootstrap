<?php

/*
 * Author: Ian Olson
 * URL: https://github.com/fuzzyhat/wp-bootstrap
 * Contributors: Jeremy Freeman
 */

/* THEME SUPPORT 				MODIFIED: 5-29-2014
------------------------------------------------------*/


/* FUNCTIONS 					MODIFIED: 5-29-2014
------------------------------------------------------*/


/* ENQUEUE SCRIPTS 				MODIFIED: 5-29-2014
------------------------------------------------------*/
function wp_theme_scripts() {

	// Deregister WordPress jQuery
	if(!is_admin()) {
		wp_deregister_script('jquery');
	}

	// Modernizr
	wp_enqueue_script( 'modernizr-with-respond', get_template_directory_uri() . '/assets/vendor/modernizr/modernizr-2.6.2-respond-1.1.0.min.js', '', '1.0.0', '');
}

add_action('wp_enqueue_scripts', 'wp_theme_scripts');


/* ENQUEUE STYLES 				MODIFIED: 5-29-2014
------------------------------------------------------*/
function wp_theme_styles() {

	// Bootstrap
	wp_register_style('wp_bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/stylesheets/bootstrap.css', array(), '3.1.1', 'all');
	wp_enqueue_style('wp_bootstrap');

	// Customer Styles
	wp_register_style('wp_custom', get_template_directory_uri() . '/assets/styles/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('wp_custom');
}

add_action('wp_enqueue_scripts', 'wp_theme_styles');


/* REGISTER NAVIGATION			MODIFIED: 5-29-2014
------------------------------------------------------*/