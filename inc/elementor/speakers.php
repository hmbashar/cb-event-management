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
        

        $speaker_categories = get_terms(
            array(
                'taxonomy' => 'speaker_cat',
                'hide_empty' => true,
            )
        );

        ?>


        <div class="flex">
            <?php foreach ($speaker_categories as $speaker_category) : ?>
                <div class="px-4 w-1/4">
                    <button  data-ajax-url="<?php echo admin_url('admin-ajax.php');?>" class="cbem-speaker-category-btn font-bold text-xl" data-id="<?php echo $speaker_category->term_id; ?>"><?php echo $speaker_category->name; ?></button>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="flex mx-4 justify-center" id="speakers">

            <?php
            if ($speakers->have_posts()):
                while ($speakers->have_posts()):
                    $speakers->the_post();

                    ?>

                    <div class="px-4 w-1/4">
                        <div class="cbem-speaker-logo-wrapper">
                            <div class="cbem-speaker-img">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        </div>
                        <h2><?php the_title(); ?></h2>
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