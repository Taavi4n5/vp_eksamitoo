<?php
// stiili lisamiseks
  function my_style_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/styles.css' );
  }
  add_action('wp_enqueue_scripts', 'my_style_enqueue_styles');

// postituste piltide lisamiseks
  add_theme_support( 'post-thumbnails' );
