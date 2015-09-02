<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'ClickGiant Genesis Base' );
define( 'CHILD_THEME_URL', 'http://clickgiant.com/' );
define( 'CHILD_THEME_VERSION', '2.1.2' );

//* LOAD GENESIS FRAMEWORK
require_once( CHILD_DIR . '/genesis-functions.php' );

//* ENABLE SOIL PERFORMANCE TWEAKS
add_theme_support('soil-jquery-cdn');
add_theme_support('soil-clean-up');
add_theme_support('soil-nav-walker');
add_theme_support('soil-relative-urls');
add_theme_support('soil-js-to-footer');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-disable-asset-versioning');

//* DEFINE GOOGLE ANALYTICS
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');

//* REPRIORITIZE CRITICAL STYLES
add_action( 'init', 'cg_genesis_base_style_sheet', 1 );
function cg_genesis_base_style_sheet() {

	if ( !is_admin() ) {
		wp_enqueue_style( 'base-css', get_stylesheet_directory_uri() . '/base_dev.css', PARENT_THEME_VERSION );
	}
}

//* ENQUEUE FONTS
add_action( 'wp_enqueue_scripts', 'cg_genesis_child_styles' );
function cg_genesis_child_styles() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
      
}

//* ENQUEUE MINIFIED JS & LOAD AFTER JQUERY
add_action( 'wp_enqueue_scripts', 'cg_genesis_responsive_menu' );
function cg_genesis_responsive_menu() {

	wp_enqueue_script( 'responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_style( 'dashicons' );

}