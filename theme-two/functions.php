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
// widget locations

function init_widget($id)
{
    $arrayName1 = array(
        'name' => "Sidebar" ,
        'id' => 'sidebar',
        'before_widget' => '<div class="block side-widget" >' ,
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

    );
    $arrayName2 = array(
        'name' => "Showcase" ,
        'id' => 'showcase',
        'before_widget' => '<div class="showcase" >' ,
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

    );
    $arrayName3 = array(
        'name' => "Box1" ,
        'id' => 'box1',
        'before_widget' => '<div class="box1" >' ,
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

    );

    $arrayName4 = array(
        'name' => "Box2" ,
        'id' => 'box2',
        'before_widget' => '<div class="box2" >' ,
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

    );

    $arrayName5 = array(
        'name' => "Box3" ,
        'id' => 'box3',
        'before_widget' => '<div class="box3" >' ,
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',

    );
    register_sidebar($arrayName1);
    register_sidebar($arrayName2);
    register_sidebar($arrayName3);
    register_sidebar($arrayName4);
    register_sidebar($arrayName5);
}
add_action('widgets_init', 'init_widget');
add_action('after_setup_theme', 'adv_theme_support');


    function get_top_parent()
    {
        global $post;
        if ($post->post_parent) {
            $ancestors = get_post_ancestors($post->ID);
            return $ancestors[0];
        }

        return $post->ID;
    }

    function page_is_parent()
    {
        global $post;

        $pages = get_pages('child_of='.$post->ID);
        return count($pages);
    }
