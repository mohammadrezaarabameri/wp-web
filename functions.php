<?php
//for header menu
function my_header_menu(){
    register_nav_menu('header-menu',__('هدر بالایی'));
}
add_action('init','my_header_menu');

// add slider post type
add_theme_support('post-thumbnails');
function my_slider_post_type(){
    register_post_type('slider',
    array(
        'labels' => array(
            'name' => __('اسلایدرها'),
            'singular_name' => __('اسلایدر'),
            'add_new' => __('افزودن اسلاید'),
            'add_new_item' => __('افزودن اسلاید'),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'link', 'thumbnail'),
    )
    );
}
add_action('init', 'my_slider_post_type');

// add brand post type
function myBrandPostType(){
    register_post_type('brands',
    array(
        'labels' => array(
            'name' => __('برندها'),
            'singular_name' => __('برند'),
            'add_new' => __('افزودن برند'),
            'add_new_item' => __('افزودن برند'),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-screenoptions',
        'supports' => array('title', 'editor', 'link', 'thumbnail'),
    )
    );
}
add_action('init', 'myBrandPostType');

?>
