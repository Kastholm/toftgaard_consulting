<?php

add_theme_support( 'menus' );
function custom_styles() {
     wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/styles.css' );
     
     wp_register_style( 'font-awesome', ' https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
     wp_enqueue_style('font-awesome');

     wp_register_style( 'font', 'https://use.typekit.net/xzu6rpw.css' );
     wp_enqueue_style('font');

     wp_enqueue_script( 'scripts', get_template_directory_uri() .'/dist/scripts.js' );
     
}

add_action( 'wp_enqueue_scripts', 'custom_styles' );