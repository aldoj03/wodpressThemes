<?php

function rest_set_header_image() {
    if ( ! has_custom_header() ) {
        return;
    }
  
    $header = get_custom_header();
    $css    = '
    header {
                background:url(' . esc_url( $header->url ) . ') no-repeat center center;
                background-size: cover;
            }
        ';

    wp_add_inline_style( 'rest-style', $css );
}
add_action( 'wp_enqueue_scripts', 'rest_set_header_image' );




function rest_set_font() {

    $css    = '
    @font-face{
        font-family: aladin;  
        src: url('. get_template_directory_uri() . '/fonts/Aladin-Regular.ttf) }
        
    @font-face{
        font-family: coming;  
        src: url('. get_template_directory_uri() . '/fonts/ComingSoon-Regular.ttf) }
        
    @font-face{
        font-family: allura;  
        src: url('. get_template_directory_uri() . '/fonts/Allura-Regular.ttf) } ';

    wp_add_inline_style( 'rest-style', $css );
}
add_action( 'wp_enqueue_scripts', 'rest_set_font' );
