<?php 
    get_header(); 
?>
<section class="cbem-speaker-wrapper container mx-auto">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="cbem-speaker-single-page-content">
            <div class="cbem-speaker-single-page-title">
                <h2>
                    <?php the_title(); ?>
                </h2>
            </div>

            <div class="cbem-speaker-content">
                <?php the_content(); ?>
            </div>

            <div class="cbem-speaker-single-comments">
                <h2 class="cbem-speaker-comment-heading font-semibold text-2xl my-3">
                    <?php _e('Comments', 'cbem'); ?>
                </h2>
                <?php comments_template(); ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>