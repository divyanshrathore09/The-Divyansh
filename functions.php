<?php

if ( ! function_exists( 'the_divyansh_theme_setup' ) ) :
    // Function to add different functionality in theme
    function the_divyansh_theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
    }    
endif; // the_divyansh_theme_setup
add_action( 'after_setup_theme', 'the_divyansh_theme_setup' );


function thedivyansh_enqueue_styles() {
    wp_enqueue_style(
     'style',
      get_template_directory_uri() . '/style.css',
      array(),      
      "1.0",         
      'all' 
    );
}
add_action( 'wp_enqueue_scripts', 'thedivyansh_enqueue_styles' );


function thedivyansh_enqueue_scripts() {
    wp_enqueue_script( 
        'main-js', 
        get_stylesheet_directory_uri() . '/assets/js/main.js', 
        array('jquery'), 
        '1.0.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'thedivyansh_enqueue_scripts' );