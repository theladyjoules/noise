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

function theme_prefix_setup() {
  add_theme_support( 'custom-logo', array(
    'height'      => 145,
    'width'       => 888,
    'flex-width' => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ) );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function nexusnoisechild_the_custom_logo() {
  if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
  }
}

function curl($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
  curl_setopt($ch, CURLOPT_AUTOREFERER, true); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_VERBOSE, 1);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

?>