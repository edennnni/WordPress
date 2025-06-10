<?php

function load_scripts() {
    wp_enqueue_style('style',
       get_stylesheet_uri(),
       array(),
       filemtime(get_template_directory().'/style.css'), 'all'
    );

      wp_enqueue_script('script',get_template_directory_uri().'/js/script.js',
      array().'/js/script.js'),true

}

add_action('wp_enqueue_scripts', 'load_scripts');

function register_menus() {
    register_nav_menus(
        array(
            'wp-devs_main_menu' => 'Footer Menu'
            'wp-devs_main_menu' => 'Main Menu',
    );
    $args=array(
        'height' => 200,
        'width' => 1920,
    );

    add_theme_support('post_thumbnails');
    add_theme_support('custom-header', $args);
    add_theme_support('custom-logo', array(
        'height' => 200,
        'width' => 110,
        'flex-height' => true,
        'flex-width' => true,
    ));
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5',array ('search-form','comment-form','comment-list','gallery','caption','style','script'));
    );
 
    add_action('after_setup_theme', 'config',0);
 
?>