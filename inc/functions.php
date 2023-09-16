<?php 

//elememtor widget register

function cbem_elementor_widgets($widgets_manager) {

    include_once('elementor/widgets.php');

    $widgets_manager->register(new CBEM_Sponsors());

}

add_action('elementor/widgets/register', 'cbem_elementor_widgets');


//ajax enqueue for sponsor ajax action 

add_action('wp_ajax_cbem_get_sponsor_details', 'cbem_get_sponsor_details');
add_action('WP_ajax_nopriv_cbem_get_sponsor_details', 'cbem_get_sponsor_details');

function cbem_get_sponsor_details() {
    $id = $_POST['id'];
    $post = get_post($id);

    echo json_encode($post);
    die();
}