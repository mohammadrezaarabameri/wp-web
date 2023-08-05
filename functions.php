<?php
//for header menu
function my_header_menu(){
    register_nav_menu('header-menu',__('هدر بالایی'));
}
add_action('init','my_header_menu');

// add slider post type
add_theme_support('post-thumbnails')
function my_slider_post_type(){
    register_post_type('slider',
    array(
        'lables' => array(
            'name' =>'اسلایدرها',
            'singular_name' =>'اسلایدر',
            'add_new' =>'افزودن اسلاید',
            'add_new_item' =>'افزودن اسلاید',
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'link', 'thumbnail'),
    )
    );
}
add_action('init', 'my_slider_post_type')
?>
