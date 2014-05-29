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


/* ENQUEUE STYLES 				MODIFIED: 5-29-2014
------------------------------------------------------*/
// Bootstrap
function wp_bs_theme_styles() {
	wp_register_style('wp_bootstrap', get_template_directory_uri() . '/assets/bootstrap/stylesheets/bootstrap.css', array(), '3.1.1', 'all');
	wp_enqueue_style('wp_bootstrap');
}

// Custom Styles
function wp_custom_theme_styles() {
	wp_register_style('wp_custom', get_template_directory_uri() . '/assets/styles/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('wp_custom');
}

/* REGISTER NAVIGATION			MODIFIED: 5-29-2014
------------------------------------------------------*/