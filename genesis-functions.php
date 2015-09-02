<?php

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 4 );

//* Unregister Unused Layouts & Sidebars
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'content-sidebar-sidebar' );
unregister_sidebar( 'sidebar-alt' );

//* Register home top
genesis_register_sidebar( array(
	'id'            => 'home-top',
	'name'          => __( 'Home Top', 'cg-genesis' ),
	'description'   => __( 'Widget area for homepage top area', 'cg-genesis' ),
) );

//* Register home shortcuts
genesis_register_sidebar( array(
	'id'            => 'home-shortcuts',
	'name'          => __( 'Home Shortcuts', 'cg-genesis' ),
	'description'   => __( 'Widget area for homepage shortcuts', 'cg-genesis' ),
) );

//* Register after post widget area
genesis_register_sidebar( array(
	'id'            => 'after-post',
	'name'          => __( 'After Post', 'cg-genesis' ),
	'description'   => __( 'This is a widget area that can be placed after the post', 'cg-genesis' ),
) );