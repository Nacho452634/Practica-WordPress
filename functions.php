<?php


function nrb_add_theme_scripts(){
    wp_enqueue_style ( 'style', get_stylesheet_uri(). '?v=1.0.00');
    wp_enqueue_style( 'boostrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'script', 'assets/script.js' );
    wp_enqueue_script( 'boostrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js' );
    wp_enqueue_script( 'popper_js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js' );
    wp_enqueue_script( 'imatges', 'img/' );
}

add_action('wp_enqueue_scripts', 'nrb_add_theme_scripts' );

add_theme_support( 'post-thumbnails' );

function nrb_register_my_menu(){
    register_nav_menu( 'primary', __('Menú de la capçelera') );
}

add_action( 'init', 'nrb_register_my_menu' );