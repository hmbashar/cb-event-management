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