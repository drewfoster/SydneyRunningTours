<?php

// Load the Theme CSS
function theme_styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
// Load the Theme JS
function theme_js() {
	if (is_page('locations')) {
		wp_enqueue_script( 'maps_js', get_template_directory_uri() . '/js/maps.js', array('jquery'), '', true );
	}
	if (wp_is_mobile() == false) {
		wp_register_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true );
		if( is_front_page() ) {
			wp_enqueue_script( 'flexslider' );
		}
		wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_js' );
// Enable custom menus
add_theme_support( 'menus' );

// Create Widgets
function create_widget($name, $id, $description) {
	$args = array(
		'name'          => __( $name ),
		'id'            => $id,
		'description'   => $description,
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>' 
	);

	register_sidebar( $args );
}

create_widget("Facebook Section", "facebookFeed", "Displays a section in the middle of the page");
create_widget("Email Newsletter", "signup", "Displays in a section at the bottom of the page before the footer");
