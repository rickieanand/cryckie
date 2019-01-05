<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
//    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
  }
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

function register_my_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

?>