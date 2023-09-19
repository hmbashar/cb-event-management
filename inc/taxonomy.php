<?php 

// Register custom taxonomy for 'Sponsor' custom post type
function cbem_register_sponsor_taxonomy() {
    $labels = array(
        'name' => __('Sponsor Categories', 'cbem'),
        'singular_name' => __('Sponsor Category', 'cbem'),
        'menu_name' => __('Sponsor Categories', 'cbem'),
        'all_items' => __('All Sponsor Categories', 'cbem'),
        'edit_item' => __('Edit Sponsor Category', 'cbem'),
        'view_item' => __('View Sponsor Category', 'cbem'),
        'update_item' => __('Update Sponsor Category', 'cbem'),
        'add_new_item' => __('Add New Sponsor Category', 'cbem'),
        'new_item_name' => __('New Sponsor Category Name', 'cbem'),
        'search_items' => __('Search Sponsor Categories', 'cbem'),
        'popular_items' => __('Popular Sponsor Categories', 'cbem'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'sponsor-category'), // You can change the slug as needed
    );

    register_taxonomy('sponsor_cat', 'sponsor', $args);
}

// Hook the taxonomy registration function to the 'init' action
add_action('init', 'cbem_register_sponsor_taxonomy');


// Register custom taxonomy for 'Speaker' custom post type
function cbem_register_speaker_taxonomy() {
    $labels = array(
        'name' => __('Speaker Categories', 'cbem'),
        'singular_name' => __('Speaker Category', 'cbem'),
        'menu_name' => __('Speaker Categories', 'cbem'),
        'all_items' => __('All Speaker Categories', 'cbem'),
        'edit_item' => __('Edit Speaker Category', 'cbem'),
        'view_item' => __('View Speaker Category', 'cbem'),
        'update_item' => __('Update Speaker Category', 'cbem'),
        'add_new_item' => __('Add New Speaker Category', 'cbem'),
        'new_item_name' => __('New Speaker Category Name', 'cbem'),
        'search_items' => __('Search Speaker Categories', 'cbem'),
        'popular_items' => __('Popular Speaker Categories', 'cbem'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'speaker-category'), // You can change the slug as needed
    );

    register_taxonomy('speaker_cat', 'speaker', $args);
}

// Hook the taxonomy registration function to the 'init' action
add_action('init', 'cbem_register_speaker_taxonomy');
