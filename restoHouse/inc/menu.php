<?php
function rest_register_menus() {
    register_nav_menu( 'main-menu','Main-menu');
    register_nav_menu( 'header-menu','Header-menu');
    register_nav_menu( 'footer-menu','Footer-menu');

};

add_action( 'after_setup_theme', 'rest_register_menus' ); 
