<?php

// Add Bootstrap Scripts and CSS
function wpbootstrap() {
wp_enqueue_style( 'bootstrap_style', get_template_directory_uri() . "/css/main.css", false, NULL, "all");
wp_enqueue_script( 'bootstrap_script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'wpbootstrap');

// Add Favicon
function add_favicon() {
    echo '<link rel="icon" type="image/x-icon" href="https://freeiconshop.com/wp-content/uploads/edd/wrench-solid.png"/>';
}
add_action('wp_head', 'add_favicon');

// Add jQuery & Ionicons
function jQueryCDNIonicons() {
wp_enqueue_script( 'jQueryCDN', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'ionSc1', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js', array(), '1.0.0', true );
wp_enqueue_script( 'ionSc2', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js', array(), '1.0.0', true );
wp_enqueue_script( 'customJS', get_template_directory_uri() . "/js/app.js", false, NULL, "all");
}
add_action('wp_enqueue_scripts', 'jQueryCDNIonicons');

// Add Google Font (Ibarra Real Nova)
function wpb_add_google_fonts() {
wp_enqueue_style( 'wpb-google-fonts-headers', 'https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@400;500;700&display=swap', false );
wp_enqueue_style( 'wpb-google-fonts-body', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// Add Support for Thumbnails
add_theme_support( 'post-thumbnails' );

// Display Antiques in Category Pages
function my_query_post_type($query) {
    if ( is_category() || is_home() && false == $query->query_vars['suppress_filters'] )
        $query->set( 'post_type', array('antique'));
    return $query;
}
add_filter('pre_get_posts', 'my_query_post_type');