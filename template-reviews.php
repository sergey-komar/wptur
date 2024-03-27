<?php
/**
 * Template Name: Отзывы
 */
?>
<?php get_header();?>
<main class="main">
    <div class="page-reviews">
        <div class="container">
            <div class="reviews__title title">
                <?php the_title();?>
            </div>
            
                <?php echo do_shortcode('[twb_wc_reviews]')?>
        </div>
    </div>
</main>
<?php get_footer();?>