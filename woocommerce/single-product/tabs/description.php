<?php


defined( 'ABSPATH' ) || exit;

global $post;

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Description', 'woocommerce' ) );

?>

<?php if ( $heading ) : ?>
	
<?php endif; ?>
<div class="tabs__content">
<?php the_content(); ?>
</div>

