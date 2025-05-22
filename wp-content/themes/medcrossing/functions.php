<?php
function medcrossing_theme_setup() {
    // Add support for title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'medcrossing_theme_setup');

function medcrossing_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'medcrossing_enqueue_styles');

//include Bootstrap
function enqueue_bootstrap() {
	wp_enqueue_script('jquery');
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '5.3.0', 'all');
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '5.3.0', true);
    
	

}

// Hook the function to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');