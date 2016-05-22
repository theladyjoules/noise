<?php
define('child_template_directory', dirname( get_bloginfo('stylesheet_url')) );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parentRevslider', get_template_directory_uri() . '/css/revslider.css' );
	wp_enqueue_style( 'parentBootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'parentFontAwesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'parentOwlCarousel', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'parentOwlTheme', get_template_directory_uri() . '/css/owl.theme.css' );
	wp_enqueue_style( 'parentOwlTransitions', get_template_directory_uri() . '/css/owl.transitions.css' );
  wp_enqueue_style( 'parentMainStyle', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'childMainStyle', get_stylesheet_directory_uri() . '/style.css' );
}

?>