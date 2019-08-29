<?php
/* adds stylesheet file to the end of the queue */
add_theme_support( 'post-thumbnails' );
function bdtheme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'boostrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
  wp_enqueue_style( 'customcss', get_template_directory_uri() . '/css/main.css', array(), '1.1', 'all');
  wp_enqueue_style( 'customjqueryjs', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.1', true);
  wp_enqueue_style( 'custombostrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.1', true);
    wp_enqueue_style( 'customjqueryjs', get_template_directory_uri() . '/js/main.js', array(), '1.1', true);
}

add_action( 'wp_enqueue_scripts', 'bdtheme_scripts' );
function bdtheme_setup() {
  add_theme_support( 'menus' );
  // register_nav_menu( 'primary', 'Primary navigation');
}
add_action( 'init', 'bdtheme_setup');
add_shortcode( 'template_dir', function( $atts ){
    return get_template_directory_uri() . '/img/' . $atts['image'];
});
