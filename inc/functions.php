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


    $html = '<div class="sponsor-details">
        <h3 class="sponsor-details-title font-bold text-3xl mb-2">'.$post->post_title.'</h3>
        <div class="sponsor-details-content">'.wpautop($post->post_content).'</div>
    </div>';

    echo $html;
    die();
}


//single template for custom post type
function cbem_template_for_speaker_single($template) {
    global $post;

    // Check if the post type is 'speaker'
    if ($post && $post->post_type == 'speaker') {
        // Locate your custom template file within your plugin directory
        $custom_template = plugin_dir_path(__FILE__) . 'templates/single-speaker.php';

        // Check if the custom template file exists
        if (file_exists($custom_template)) {
            return $custom_template;
        }
    }

    // If it's not a 'speaker' post or the custom template doesn't exist, return the default template
    return $template;
}

add_filter('single_template', 'cbem_template_for_speaker_single');
