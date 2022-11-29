<?php

add_theme_support( 'menus' );
function custom_styles() {
     wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/styles.css' );
     
     wp_register_style( 'font-awesome', ' https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' );
     wp_enqueue_style('font-awesome');

     wp_register_style( 'font', 'https://use.typekit.net/fiv2nza.css' );
     wp_enqueue_style('font');

     wp_register_style( 'aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.css' );
     wp_enqueue_style('aos');

     /* wp_register_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
     wp_enqueue_style('owl-carousel');

     wp_register_style( 'owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
     wp_enqueue_style('owl-theme'); */
     
     wp_register_script( 'aos-script', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js');
     wp_enqueue_script('aos-script');
     
     wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', null, null, true );
     wp_enqueue_script('jquery');
     
     wp_register_script( 'jquery-slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', null, null, true );
     wp_enqueue_script('jquery-slim');

     wp_register_script( 'owl-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js' );
     wp_enqueue_script('owl-scripts');

     wp_enqueue_script( 'scriptsFAQ', get_template_directory_uri() .'/js/faq.js' );
     wp_enqueue_script( 'scripts', get_template_directory_uri() .'/js/scripts.js' );
     
}

add_action( 'wp_enqueue_scripts', 'custom_styles' );

add_theme_support('post-thumbnails', array('samarbejdspartnere'));

function undersider() {


     register_post_type( 'samarbejdspartnere', array(
          'labels' =>array( 'name' => 'Samarbejdspartnere', 'singular_name' => _x('samarbejdspartnere', 'post type singular name'), 'add_new' => _x('Ny samarbejdspartnere, HUSK at vælg billede', 'samarbejdspartnere'), 'edit_item' => __('Rediger samarbejdspartnere'), 'new_item' => __('Ny samarbejdspartner, HUSK at vælg billede'), 'all_items' => __('Alle samarbejdspartnere'), 'view_item' => __('Vis samarbejdspartnere'), 'search_items' => __('Søg samarbejdspartnere'), 'not_found' => __('Ingen samarbejdspartnere fundet'), 'not_found_in_trash' => __('Ingen samarbejdspartnere i papirskurven'), 'parent_item_colon' => '', 'menu_name' => __('Partnere') ), 'menu_icon' => 'dashicons-buddicons-buddypress-logo', 'public' => true, 'publicly_queryable' => true, 'show_ui' => true, 'show_in_menu' => true, 'query_var' => true, 'rewrite' => true, 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false, 'menu_position' => null, 'supports' => array( 'title', 'editor', 'template', 'author', 'thumbnail', 'excerpt', 'comments' ), 'categories', 'Template' => true, ) , ); }; add_action( 'init', 'undersider' ) ?>