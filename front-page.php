<?php
/**
 * This file adds the homepage to the ClickGiant Base
 *
 * @author Jon Rivers
 * @package ClickGiant Genesis Base
 * @subpackage Customizations
 */

//* Add widget support for homepage. If no widgets active, display the default loop.
add_action( 'genesis_meta', 'cg_genesis_home_meta' );
function cg_genesis_home_meta() {

	if ( is_active_sidebar( 'home-top' ) || is_active_sidebar( 'home-shortcuts' ) ) {

		//* Force full-width-content layout setting
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

		//* Add home top widgets
		add_action( 'genesis_after_header', 'cg_genesis_home_widgets' );

	}

/**
 * Uncomment to activate mobble features
 *
 *
 *	if (is_mobile() ) { 
 *		remove_action( 'genesis_loop', 'genesis_do_loop' );
 *		add_action ( 'genesis_loop' , 'cg_genesis_mobile_content' );
 *
 *	}
 */

}

function cg_genesis_home_widgets() {
	genesis_widget_area( 'home-top', array(
		'before' => '<section id="home-top" class="home widget-area"><div class="wrap">',
		'after'  => '</div></section>',
	) );

	if (is_mobile() ) { 
	
		return; 

	}

	else {

	genesis_widget_area( 'home-shortcuts', array(
		'before' => '<section id="home-shortcuts" class="home widget-area"><div class="wrap">',
		'after'  => '</div></section>',
	) );

	}
	
}

/**
* Uncomment to activate mobble features
*
* function cg_genesis_mobile_content() {
*	genesis_widget_area( 'mobile-content', array(
*		'before' => '<div class="entry-content">',
*		'after'  => '</div>',
*	) );
*
* }
*/


//* Load Genesis Framework

genesis();