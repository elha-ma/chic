<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );



//SEO: Désactiver l'appel à Google Fonts du thème parent
function deregister_google_fonts() {  
    wp_deregister_style( 'ashe-playfair-font' );  
    wp_deregister_style( 'ashe-opensans-font' );
    wp_deregister_style( 'ashe-kalam-font' );   
    wp_deregister_style( 'ashe-rokkitt-font' );
}    
add_action( 'wp_enqueue_scripts', 'deregister_google_fonts', 20);
 