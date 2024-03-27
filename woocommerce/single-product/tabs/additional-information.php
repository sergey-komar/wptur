<?php


defined( 'ABSPATH' ) || exit;

global $product;

$heading = apply_filters( 'woocommerce_product_additional_information_heading', __( 'Additional information', 'woocommerce' ) );

?>

<?php if ( $heading ) : ?>
	
<?php endif; ?>

<?php do_action( 'woocommerce_product_additional_information', $product ); ?>
