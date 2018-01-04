<?php

function wpWebDev_setup(){
    load_theme_textdomain('webdev');
    
    add_theme_support('title-tag');
    
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size();
    
}

add_action('after_setup_theme', 'wpWebDev_setup');

function include_my_style(){
     wp_enqueue_style('my-style', get_stylesheet_uri());
    wp_enqueue_style('icon-fonts', get_template_directory_uri().'/css/style-icon-fonts.css');
   wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css');
    
   
    wp_enqueue_script('my_script',get_template_directory_uri().'/js/main.js', array('jquery','wow'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js', array(), null, true);
    
}
add_action('wp_enqueue_scripts', 'include_my_style');





?>