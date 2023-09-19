<?php
class CBEM_Speakers extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'cbem_speakers';
    }

    public function get_title()
    {
        return esc_html__('CBEM Speakers', 'cbem');
    }

    public function get_icon()
    {
        return 'eicon-person';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['speaker', 'event', 'cbem'];
    }

    protected function render()
    {
        $speakers = new WP_Query(
            array(
                'post_type' => 'speaker',
                'posts_per_page' => -1,
                // 'order'     => 'ASC', 
                // 'orderby'   => 'menu_order'
            )
        );
        ?>

        <div class="flex mx-4 justify-center">

            <?php
            if ($speakers->have_posts()):
                while ($speakers->have_posts()):
                    $speakers->the_post();

                    ?>

                    <div class="px-4 w-1/4">
                        <div data-ajax-url="<?php echo admin_url('admin-ajax.php');?>" class="cbem-sponsor-logo-wrapper" data-id="<?php echo get_the_ID(); ?>">
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