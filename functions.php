<?php 

function cc_theme_support() {
    // sets title from the field at Wordpress.com > admin > Settings > General Site Title
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'cc_theme_support');

function cc_menus() {
    $locations = array(
        'primary' => 'Destop Primary Top',
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action('init', 'cc_menus');


function cc_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('cc-styles', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('cc-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", array(), '6.4.0', 'all');
}

add_action('wp_enqueue_scripts', 'cc_register_styles');

function cc_register_scripts() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('cc-functions', get_template_directory_uri() . "/assets/js/functions.js", array(), $version, false);
}

add_action('wp_enqueue_scripts', 'cc_register_scripts');
?>