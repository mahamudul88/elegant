<?php
// support-sec
function elegant_theme_support(){

    load_theme_textdomain('elegant');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "wp-block-styles" );
    add_theme_support( "responsive-embeds" );
    add_theme_support( "align-wide" );
    add_theme_support('post-formats', array('quote', 'link', 'gallery', 'audio', 'video', 'image'));

    add_image_size('extra-larze', 900, 400, true);
    add_image_size('thumbnail-size', 350, 200, true);

    register_nav_menus(array(
        'primarymenu' => 'primary menu',
        'footermenu'  => 'footer menu',
    ));

}
add_action('after_setup_theme', 'elegant_theme_support');

// custom-slider
function elegant_custom_slider(){
    register_post_type('portfolio', array(
        'label'     => 'portfolio',
        'public'    => true,
        'show_ui'   => true,
        'menu_icon' => 'dashicons-media-default',
        'supports'  => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'elegant_custom_slider');

// acf-add-options-page
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}

// register-social-menu
function elegant_sidebar(){

    register_sidebar(array(
        'name'        => 'Footer Widget 1',
        'id'          => 'footerwidget-1',
        'description' => 'you can add here footer items',
    ));
    register_sidebar(array(
        'name'        => 'Footer Widget 2',
        'id'          => 'footerwidget-2',
        'description' => 'you can add here footer items',
    ));
    register_sidebar(array(
        'name'        => 'Footer Widget 3',
        'id'          => 'footerwidget-3',
        'description' => 'you can add here footer items',
    ));
    register_sidebar(array(
        'name'        => 'Footer Widget 4',
        'id'          => 'footerwidget-4',
        'description' => 'you can add here footer items',
    ));
}
add_action('widgets_init', 'elegant_sidebar');

// call-sec
function elegant_scripts(){
    wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'));
    wp_enqueue_style('owlcarousel', get_theme_file_uri('/assets/css/owl.carousel.min.css'));
    wp_enqueue_style('fontawesome', get_theme_file_uri('/assets/css/all.min.css'));
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'));
    wp_enqueue_style('dashicons');
    wp_enqueue_style('elegantwp', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), null, time());

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_theme_file_uri('/assets/js/bootstrap.min.js'));
    wp_enqueue_script('slickjs', get_theme_file_uri('/assets/js/slick.min.js'));
    wp_enqueue_script('owlcarouseljs', get_theme_file_uri('/assets/js/owl.carousel.min.js'));
    wp_enqueue_script('fitvibs', get_theme_file_uri('/assets/js/jquery.fitvids.js'));
    wp_enqueue_script('scripts', get_theme_file_uri('assets/js/scripts.js'));
}
add_action('wp_enqueue_scripts', 'elegant_scripts');
