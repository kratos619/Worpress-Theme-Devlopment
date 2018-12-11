<?php

function simple_theme_setup()
{
    // featured Img Support
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'simple_theme_setup');

// funtion set excerpt 
function set_excert_function()
{
    return 25;
}

add_filter('excerpt_length', 'set_excert_function');