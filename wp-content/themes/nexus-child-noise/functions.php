<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/revslider.css' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/revslider.css' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/owl.theme.css' );
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/owl.transitions.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/css/revslider.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

?>