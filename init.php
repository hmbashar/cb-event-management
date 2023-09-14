<?php
/*
Plugin Name: CB Event Management
Description: CB Event Management is a versatile WordPress plugin designed to streamline event organization and engagement. Seamlessly manage event-related comments, registrations, and interactions while enhancing user experiences. Take control of your events with CB Event Management.
Version: 1.0
Author: Md Abul Bashar
Author URI: https://facebook.com/hmbashar
Plugin URI: https://facebook.com/hmbashar
Donate link: https://buymeacoffees.com/hmbashar
Text Domain: cbem
Prefix: cbem_
*/

// Enqueue your styles and scripts
function cbem_enqueue_styles_and_scripts() {
    // Enqueue your stylesheet
    wp_enqueue_style('cbem-stylesheet', plugins_url('css/style.css', __FILE__));
    
    // Enqueue your JavaScript file
    //wp_enqueue_script('cbem-script', plugins_url('js/script.js', __FILE__), array('jquery'), '1.0', true);
}

// Hook the enqueue function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'cbem_enqueue_styles_and_scripts');


// Hook the enqueue function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'cbem_enqueue_styles_and_scripts');

// Add theme support for post-thumbnails and title-tag
function cbem_theme_support() {
    add_theme_support('post-thumbnails'); // Enable featured images (post thumbnails)
    add_theme_support('title-tag'); // Enable title-tag support
}

// Hook the theme support function to the 'after_setup_theme' action
add_action('after_setup_theme', 'cbem_theme_support');

// Register a navigation menu with the ID 'cbem-main-menu'
function cbem_register_main_menu() {
    register_nav_menu('cbem-main-menu', __('CBEM Main Menu', 'cbem'));
}

// Hook the menu registration function to the 'init' action
add_action('init', 'cbem_register_main_menu');



// Include the file with custom post type registration
require_once(plugin_dir_path(__FILE__) . 'inc/cpt.php'); 

// Include the file with custom taxonomy registration
require_once(plugin_dir_path(__FILE__) . 'inc/taxonomy.php'); 