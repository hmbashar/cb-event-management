<?php
class CBEM_Sponsors extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'cbem_sponsors';
    }

    public function get_title()
    {
        return esc_html__('CBEM Sponsors', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-code';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['hello', 'world'];
    }

    protected function render()
    {
        $sponsors = new WP_Query(
            array(
                'post_type' => 'sponsor',
                'posts_per_page' => -1,
                // 'order'     => 'ASC', 
                // 'orderby'   => 'menu_order'
            )
        );
        ?>

        <script>
            jQuery(document).ready(function($) {
                $('.cbem-sponsor-logo-wrapper').on('click', function() {
                    //ajax call
                    $.ajax({
                        url:"<?php echo admin_url('admin-ajax.php'); ?>",
                        type: "POST",
                        data: {
                            action: "cbem_get_sponsor_details",
                            id:$(this).data("id")
                        },
                        success: function(response) {
                            console.log(response);
                        }
                    });
                });
            });
        </script>


        <div class="flex mx-4 justify-center">

            <?php
            if ($sponsors->have_posts()):
                while ($sponsors->have_posts()):
                    $sponsors->the_post();

                    ?>

                    <div class="px-4 w-1/4">
                        <div class="cbem-sponsor-logo-wrapper" data-id="<?php echo get_the_ID(); ?>">
                            <div class="cbem-sponsor-logo">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        </div>
                    </div>

                    <?php

                endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
    <?php
    }
}