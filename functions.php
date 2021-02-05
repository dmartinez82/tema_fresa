<?php

function dmartinez_scripts(){
    
    if ( is_page('contacto') ) {
        wp_enqueue_style( 'estilo-contacto', get_theme_file_uri('/css/page-contacto-styles.css'));
    } else {
        wp_enqueue_style('mi-css', get_stylesheet_uri());
    }
}

add_action( 'wp_enqueue_scripts', 'dmartinez_scripts');

?>