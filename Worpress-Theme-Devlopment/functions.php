<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// excerpt lnght
function wpt_excerpt_length($length){
    return 16;
}

add_filter( 'excerpt_length','wpt_excerpt_length',999 );

// register menus
function register_theme_menus(){
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu')
        )
            
        
    );
}
// call menu
add_action( 'init', 'register_theme_menus' );

// connnect to css file 
function wtb_theme_styles(){
    wp_enqueue_style('founddation_css', get_template_directory_uri().'/css/foundation.css');
    wp_enqueue_style('google_font','http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
   // wp_enqueue_style('normalize_css', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');

}

add_action( 'wp_enqueue_scripts','wtb_theme_styles' );
// connect to java script file
function wtb_theme_js(){
    
    wp_enqueue_script( 'mordernizer_js', get_template_directory_uri() . '/js/modernizr.js','','',false );
    wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js',array('jquery'),'',true );
    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/js/app.js',array('jquery','foundation_js'),'',true );
    
}

add_action( 'wp_enqueue_scripts','wtb_theme_js')

?>