<?php

function simple_theme_setup()
{
    // featured Img Support
    add_theme_support('post-thumbnails');
    // menu
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', 'simple_theme_setup');

// funtion set excerpt
function set_excert_function()
{
    return 25;
}

add_filter('excerpt_length', 'set_excert_function');

function init_widgets($id)
{
    $args = array(
        'name' => 'Sidebar' ,
        'id' => 'sidebar',
        'before_widget' => '<div class="side-widget"></div>',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    );
    register_sidebar($args);
}

add_action('widgets_init', 'init_widgets');
