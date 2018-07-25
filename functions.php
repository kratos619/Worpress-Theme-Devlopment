<?php
// connnect to css file 
function wtb_theme_styles(){
    wp_enqueue_style('founddation', get_template_directory_uri().'/css/foundation.css');
    wp_enqueue_style('normalize_css','http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');
    wp_enqueue_style('normalize_css', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('maincss', get_template_directory_uri().'/style.css');

}

add_action( 'wp_enqueue_scripts','wtb_theme_styles' );
// connect to java script file
function wtb_theme_js(){
    
    wp_enqueue_script( 'mordernizer_js', get_template_directory_uri() . '/js/modernizr.js','','',false );
    wp_enqueue_script( 'foundationjs', get_template_directory_uri() . '/js/foundation.js',array('jquery'),'',true );
    wp_enqueue_script( 'appjs', get_template_directory_uri() . '/js/app.js',array('jquery','foundationjs'),'',true );
    
}

add_action( 'wp_enqueue_script','wtb_theme_js')

?>