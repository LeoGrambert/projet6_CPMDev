<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'custom_enqueue_script' );
  function custom_enqueue_script() {
    if(is_front_page()){
        wp_enqueue_script( 'script_homepage', get_bloginfo('stylesheet_directory') . '/js/script_homepage.js',
        array('jquery'), '', true );
    } else {
        wp_enqueue_script( 'script_otherpages', get_bloginfo('stylesheet_directory') . '/js/script_otherpages.js',
        array('jquery'), '', true );
    }
  }
