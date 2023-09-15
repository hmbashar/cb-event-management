<?php 

//elememtor widget register

function cbem_elementor_widgets($widgets_manager) {

    include_once('inc/elementor/widgets.php');

    $widgets_manager->register(new CBEM_Sponsors());

}

add_action('elementor/widgets/register', 'cbem_elementor_widgets');