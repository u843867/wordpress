<?php

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentysixteen-style' for the Twenty Sixteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    
// Fonts: Libre Franklin, https://www.google.com/fonts
    wp_enqueue_style( 'ragnar-google-fonts', '//fonts.googleapis.com/css?family=Libre+Franklin' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );




?>