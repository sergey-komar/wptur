<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
 <div class="recommend-block__left">
	<?php if(is_product_category()) :?>
		<div class="recommend-catalog__title">
			<?php single_cat_title() ?>
		</div>
	<?php endif;?>

