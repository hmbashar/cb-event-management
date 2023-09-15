<?php 

// Register custom post types
function cbem_register_custom_post_types() {
    // Register 'Sponsor' custom post type
    register_post_type('sponsor', array(
        'labels' => array(
            'name' => __('Sponsors', 'cbem'),
            'singular_name' => __('Sponsor', 'cbem'),
        ),
        'public' => false,
        'has_archive' => true,
        'menu_icon' => 'dashicons-businessman',
        'supports' => array('title', 'thumbnail', 'editor', 'post-attributes'),
        'show_ui' => true, // Show in admin UI
    ));

    // Register 'Speaker' custom post type
    register_post_type('speaker', array(
        'labels' => array(
            'name' => __('Speakers', 'cbem'),
            'singular_name' => __('Speaker', 'cbem'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-microphone',
        'supports' => array('title', 'thumbnail', 'editor', 'post-attributes'),
        'show_ui' => true, // Show in admin UI
    ));

    // Register 'Person' custom post type
    register_post_type('person', array(
        'labels' => array(
            'name' => __('People', 'cbem'),
            'singular_name' => __('Person', 'cbem'),
        ),
        'public' => false,
        'has_archive' => true,
        'menu_icon' => 'dashicons-id-alt',
        'supports' => array('title', 'thumbnail', 'editor', 'post-attributes'),
        'show_ui' => true, // Show in admin UI
    ));

    // Register 'Schedule' custom post type
    register_post_type('schedule', array(
        'labels' => array(
            'name' => __('Schedules', 'cbem'),
            'singular_name' => __('Schedule', 'cbem'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-clock',
        'supports' => array('title', 'editor', 'post-attributes'),
        'show_ui' => true, // Show in admin UI
    ));
}

// Hook the custom post type registration function to the 'init' action
add_action('init', 'cbem_register_custom_post_types');