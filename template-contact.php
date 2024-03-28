<?php
/**
 * Template Name: Контакты
 */
?>
<?php get_header();?>
<main class="main">
    <div class="breadcrumbs">
        <div class="container-contact">
            <div class="breadcrumbs__list">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
            </div> 
            
        </div>
    </div>
    <div class="container-contact">
        <div class="contact">
            <h1 class="contact__title title">
                Контакты
            </h1>
            <div class="contact-block">
            <?php if(have_rows('kontakty_element')) : while(have_rows('kontakty_element')) : the_row();?>
                <div class="contact-block__box">
                    <div class="contact-block__item-title">
                    <?php the_sub_field('kontakty_element_zagolovok');?>
                    </div>
                 
                    <?php if(have_rows('kontakty_element_podzagolovok')) : while(have_rows('kontakty_element_podzagolovok')) : the_row();?>
                    <a class="contact-block__item" href="<?php the_sub_field('kontakty_element_podzagolovok_ssylka');?>">
                        <span><?php the_sub_field('kontakty_element_podzagolovok_nazvanie');?></span>
                        <?php the_sub_field('kontakty_element_podzagolovok_tekst');?>
                    </a>
                    <?php endwhile; endif;?>
                </div>
            <?php endwhile; endif;?>
            </div>

            <div class="contact__subtitle">Обратная связь</div>
            <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="a84cae2" title="Форма страница контакты"]')?>
            </div>
        </div>
    </div>
</main>
<?php get_footer();?>