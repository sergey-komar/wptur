<?php
// КАРТОЧКА ОДНОГО ТОВАРА ВСЯ ИНФОРМАЦИЯ КОТОРАЯ ТАМ // КОНТЕНТ НА В КАРТОЧКЕ НА СТРАНИЦЕ ОТДЕЛЬНОГО ТОВАРА

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="product__title title">
	<?php echo $product->name;?>
</div>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'product-one', $product ); ?>>
	<div class="product-one__wrapper">
		<div class="product-one__inner">
			
			<div class="product-slide__big-item">
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
			</div>
			<div class="product-one__price">
				<div class="product-one__price-text"> Стоимость от </div>
				<div class="product-one__price-title">
					<?php echo $product->price;?> руб./сутки
				</div>
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
			<?php
			/**
			 * Hook: woocommerce_after_single_product_summary.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
			?>
		</div>
		
	<div class="summary entry-summary product-one__info">
		<div class="product-one__desc">
				<div class="product-one__rating">
					<div class="product-one__rating-title">Рейтинг:</div>
					<div class="product-one__rating-img">
						<?php woocommerce_template_loop_rating();?>
					</div>
				
				</div>
				<button class="product-one__info-btn btn-click">забронировать</button>

				<div class="product-one__rating-map">
					<?php echo $product->short_description;?>
				</div>
				
				<div class="product-one__box">
					<div class="product-one__info-name">Координаты:</div>
					<div class="product-one__info-text">
						<?php the_field('tovar_informacziya_koordinaty');?>
					</div>
				</div>
				<div class="product-one__box">
					<div class="product-one__info-name">Местоположение:</div>
					<div class="product-one__info-text">
					<?php the_field('tovar_informacziya_mestopolozhenie_gorod');?>
					</div>
					<div class="product-one__info-text">
					<?php the_field('tovar_informacziya_mestopolozhenie_adres');?>
					</div>
				</div>
				<div class="product-one__box">
					<div class="product-one__info-name">Телефон:</div>
					<a href="tel:88001234567" class="product-one__info-phone">
					<?php the_field('tovar_informacziya_telefon');?>
					</a>
				</div>
				<div class="product-one__box">
					<div class="product-one__info-name">E-mail:</div>
					<a href="mailto:info@web-systemz.ru" class="product-one__info-email">
					<?php the_field('tovar_informacziya_email');?>
					</a>
				</div>

				
					<div class="product-bottom__form">
						<div class="offers-block__right-title">Нужна помощь?</div>
						<div class="offers-block__right-text">
							Не знаете, как выбрать? 
							Оставьте заявку, мы сделаем подборку предложений, с учетом всех Ваших пожеланий
						</div>
						<div class="offers-block__form">
							<?php echo do_shortcode('[contact-form-7 id="379292c" title="Нужна помощь"]')?>
						</div>
						<img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-man.png" alt="img" class="offers-block__right-img">
					</div>
					
				
        </div>
		
	</div>
</div>
	

</div>

