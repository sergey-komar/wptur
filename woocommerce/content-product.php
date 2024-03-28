<?php
//КАРТОЧКА ТОВАРА НА СТРАНИЦЕ МАГАЗИНА


defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="recommend-block__item">
	<?php $post_thumbnail_id = $product->get_image_id(); ?>
	<img src="<?php echo wp_get_attachment_url( $post_thumbnail_id ); ?>" alt="img" class="recommend-block__item-img">
	
	<div class="recommend-block__content">
		<div class="recommend-block__content-title">
			<?php echo $product->name;?>
		</div>
		<div class="recommend-block__content__subtitle">
		<?php the_field('gorod_ulicza');?>

		</div>
		<div class="recommend-block__content-text">
		<?php the_field('tovar_opisanie_tekst');?>
		</div>
		<div class="recommend-block__center">
			<?php if(have_rows('uslugi_element')) : while(have_rows('uslugi_element')) : the_row();?>
			<div class="recommend-block__icon">
				<img src="<?php the_sub_field('uslugi_element_kartinka');?>" alt="img" class="recommend-block__icon-img">
				<div class="recommend-block__icon-title">
				<?php the_sub_field('uslugi_element_nazvanie');?>
				</div>
			</div>
			<?php endwhile; endif;?>
		</div>

		<div class="recommend-block__bottom">
		<div class="recommend-block__bottom-price">
			от
		<?php echo $product->price;?> руб./сутки
		</div>
		<a href="<?php the_permalink()?>" class="recommend-block__bottom-btn">подробнее</a>
		</div>
	</div>
</div>
 





