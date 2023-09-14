<?php
/*
Plugin Name: CB Event Management
Description: Your plugin description goes here.
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