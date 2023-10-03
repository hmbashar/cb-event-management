<?php
//register shortcode for speaker popup
add_shortcode('cbem-speaker-popup', 'cbem_speaker_popup');

function cbem_speaker_popup()
{

    ?>

    <div style="display:none" class="cbem-popup-wrapper h-screen w-screen fixed z-10 left-0 top-0 flex justify-center items-center">
        <div class="fixed w-full h-full bg-black opacity-80 z-0 cbem-popup-hide"></div>
        <div class="container mx-auto relative z-10 bg-white rounded p-5">
            <div class="cbem-popup-close absolute -right-3 -top-5 text-white cursor-pointer">
                <i class="eicon-close-circle"></i>
            </div>


            <div id="cbem-popup-content"></div>
        </div>
    </div>

    <?php
}

// shortcode for schedule
add_shortcode('cbem-schedule', 'cbem_schedule');

function cbem_schedule() {
    $schedul = new WP_Query(array(
        'post_type' => 'schedule',
        'posts_per_page' => -1
    ));

    $schedul_array = [];
    if ($schedul->have_posts()) {
        while ($schedul->have_posts()) {
            $schedul->the_post();

            $date = get_post_meta(get_the_ID(), 'date', true);
            $start_time = get_post_meta(get_the_ID(), 'start_time', true);

            $unix_time = strtotime($date.' '.$start_time);

            $schedul_array[$unix_time] = get_the_ID();
        }
    }

    wp_reset_postdata();

    ksort($schedul_array);

    $query_ids = [];
    foreach ($schedul_array as $item) {
        $query_ids[] = $item;
    }


    $q = new WP_Query(array(
        'post_type' => 'schedule',
        'post__in' => $query_ids,
        'posts_per_page' => -1
    ));

    return '<pre>' . print_r($schedul_array, true) . '</pre>';
}


// shortcode for checkin
function cbem_checkin_shortcode() {

    $html = '';

    // checked order id is available
    if(array_key_exists('order_id', $_GET)) {
        $order_id = $_GET['order_id'];

        // get order
        //$order = new WC_Order($order_id);
        $order = wc_get_order($order_id);

        $checked_in = get_post_meta($order_id, 'cbem_checked_in', true);

        if($checked_in != 'yes') {
            

            // Get the order creation date
            $order_date = $order->get_date_created();

            // Define the desired time zone offset (+06)
            $time_zone_offset = '+06:00';
            // Format the date with the desired time zone offset
            $formatted_order_date = date_i18n('Y-m-d H:i:s', strtotime($order_date->date('Y-m-d H:i:s') . $time_zone_offset));

            $html .= '<ul>

            <li>Name: ' . $order->get_billing_first_name() . ' ' . $order->get_billing_last_name() . '</li>
            <li>Phone: ' . $order->get_billing_phone() . '</li>
            <li>Email: ' . $order->get_billing_email() . '</li>
            <li>Address: ' . $order->get_billing_address_1() . '</li> 
            <li>Purchase Date: ' . $formatted_order_date . '</li>           
            </ul>';

            $html .= '<button class="cbem-checkin-btn" data-order-id="' . $order_id . '">Check In</button>';
        }else {
            $html .= 'Already Checked In';
        }


    }else {
        $order_id = '';
    }

    

    return $html;
}
add_shortcode('cbem-checkin', 'cbem_checkin_shortcode');