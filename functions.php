<?php
// functions.php

// Enqueue de estilos y scripts
function enqueue_custom_styles_and_scripts() {
    // Estilos
    wp_enqueue_style('custom-style', get_stylesheet_uri());

    // Scripts
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles_and_scripts');

// Soporte de características de theme
function custom_theme_setup() {
    // Soporte para títulos SEO
    add_theme_support('title-tag');

    // Soporte para miniaturas
    add_theme_support('post-thumbnails');

    // Otros soportes y configuraciones personalizadas según tus necesidades
}

add_action('after_setup_theme', 'custom_theme_setup');
