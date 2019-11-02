<?php

function rest_setup_theme(){


    $supports = [
        'seach-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ];
    add_theme_support('html5', $supports);

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats' );

  
    $background_settings = [
		'default-color' => '#fefefe',
	];
	add_theme_support( 'custom-background', $background_settings );

    $header_settings = [
		'width' => 1500,
		'height' => 480,
		'flex-height' => false,
        'flex-width' => false,
        'header-text' => false,
	];
	add_theme_support( 'custom-header', $header_settings );

    add_image_size( 'image-card', 230, 180, true );
	add_image_size( 'image-post', 600, 350, true );
   
    add_theme_support( 'automatic-feed-links' );
}

add_action( 'after_setup_theme', 'rest_setup_theme' );

function rest_set_title($title){

    if(is_archive()){
        if(strpos($title, "Food Type:") !== false){

            $new_title_category =  str_replace("Food Type:", "Our", $title );
            return $new_title_category . 's' ;
        }
        else{
            $new_title_tag =  str_replace("Food tag:", "Our", $title );
            return  $new_title_tag . ' food' ;
        }
    }
    
   
    return $title;
}

add_filter('get_the_archive_title', 'rest_set_title');


require 'inc/scripts.php';
require 'inc/customizer.php';
require 'inc/menu.php';
require 'inc/custom_postTypes.php';


