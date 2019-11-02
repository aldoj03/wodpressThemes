<?php
function rest_load_scripts(){

    wp_enqueue_style( 'rest-style', get_stylesheet_uri() );
    
    };
    
    add_action( 'wp_enqueue_scripts', 'rest_load_scripts' );
    

