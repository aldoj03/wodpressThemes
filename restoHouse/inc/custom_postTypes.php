<?php

function rest_create_food() {

    $labels = array(
        'name'                => _x( 'Foods', 'Post General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Food', 'Post Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Foods', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Food', 'twentythirteen' ),
        'all_items'           => __( 'All Foods', 'twentythirteen' ),
        'view_item'           => __( 'View Food', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Food', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Food', 'twentythirteen' ),
        'update_item'         => __( 'Update Food', 'twentythirteen' ),
        'search_items'        => __( 'Search Food', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen') 
    );
    
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Descripción.', 'text-domain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'taxonomies'            => array( 'food-tag', 'food-type' ),
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'show_in_nav_menus'  => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'          => 'dashicons-carrot'
    );
    register_post_type( 'food', $args );
    }
    
    add_action( 'init', 'rest_create_food' );
    


    function rest_create_tag() {
        
	$labels = array(
        'name'                => _x( 'Food tags', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Food tag', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Food tag', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Food', 'twentythirteen' ),
        'all_items'           => __( 'All Food tags', 'twentythirteen' ),
        'view_item'           => __( 'View Food tag', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Food tag', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Food tag', 'twentythirteen' ),
        'update_item'         => __( 'Update Food tag', 'twentythirteen' ),
        'search_items'        => __( 'Search Food tag', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen') 
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'has_archive'                 => true,        
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'food-tag', array( 'food' ), $args );
    }
    add_action('init', 'rest_create_tag'); 
    

    function rest_create_category(){

      
	$labels = array(
        'name'                => _x( 'Food Types', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Food Type', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Food Types', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Food', 'twentythirteen' ),
        'all_items'           => __( 'All Food Types', 'twentythirteen' ),
        'view_item'           => __( 'View Food', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Food', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Food', 'twentythirteen' ),
        'update_item'         => __( 'Update Food', 'twentythirteen' ),
        'search_items'        => __( 'Search Food', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen') 
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
        'show_ui'                    => true,
        'has_archive'                => true,        
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'food-type', array( 'food' ), $args );
    
    }
    
    add_action( 'init', 'rest_create_category' );
    
      