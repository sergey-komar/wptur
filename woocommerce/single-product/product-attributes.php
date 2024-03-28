<?php

/**
 * ВКЛАДКА ДЕТАЛИ В КАРТОЧКЕ ТОВАРА В ТАБАХ
 */
defined( 'ABSPATH' ) || exit;

if ( ! $product_attributes ) {
	return;
}
?>
<div class="tabs__contentt">
	<?php if(have_rows('kartochka_v_tabah_element')) : while(have_rows('kartochka_v_tabah_element')) : the_row();?>
	<div class="recommend-block__item">
		<img src="<?php the_sub_field('kartochka_v_tabah_element_kartinka');?>" alt="img" class="recommend-block__item-img">
		<div class="recommend-block__content">
			<div class="recommend-block__content-title">
			<?php the_sub_field('kartochka_v_tabah_element_zagolovok');?>
			</div>
			<div class="recommend-block__content__subtitle">
			<?php the_sub_field('kartochka_v_tabah_element_podzagolovok');?>
			</div>
			<div class="recommend-block__content-text">
			<?php the_sub_field('kartochka_v_tabah_element_tekst');?>
			</div>
			<div class="recommend-block__center">
				<?php if(have_rows('kartochka_v_tabah_uslugi')) : while(have_rows('kartochka_v_tabah_uslugi')) : the_row();?>
				<div class="recommend-block__icon">
					<img src="<?php the_sub_field('kartochka_v_tabah_uslugi_kartinka');?>" alt="img" class="recommend-block__icon-img">
					<div class="recommend-block__icon-title">
					<?php the_sub_field('kartochka_v_tabah_uslugi_nazvanie');?>
					</div>
				</div>
				<?php endwhile; endif;?>
			</div>
			<div class="recommend-block__bottom">
				<div class="recommend-block__bottom-price">
				<?php the_sub_field('kartochka_v_tabah_element_kol-vo_chelovek');?>
				</div>
				<button  class="recommend-block__bottom-btn btn-click">забронировать</button>
			</div>
		</div>
	</div>
	<?php endwhile; endif;?>
</div>
