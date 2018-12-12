<?php

// theme support
function adv_theme_support()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));

    // featired Image
    add_theme_support('post-thumbnails');

    //Post Format Support
    add_theme_support('post-formats', array('aside','gallery','link'));
}

add_action('after_setup_theme', 'adv_theme_support');
