<?php 

function cc_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('cc-styles', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('cc-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", array(), '6.4.0', 'all');
}

add_action('wp_enqueue_scripts', 'cc_register_styles');

function cc_register_scripts() {
    wp_enqueue_script('cc-functions', get_template_directory_uri() . "/assets/js/functions.js", array(), '1.0');
}

add_action('wp_enqueue_scripts', 'cc_register_scripts');
?>