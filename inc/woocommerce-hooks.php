<?php
// ОТКЛЮЧАЕМ ВСЕ СТИЛИ woocommerce
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);



// НАЗВАНИЕ ТОВАРА В КАРТОЧКЕ ТОВАРА на странице магазина
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', function() {
    // https://woocommerce.github.io/code-reference/classes/WC-Product.html
    global $product;
    echo '<div class="recommend-block__content-title">' . $product->get_title() . '</div>';
}, 5);


//СТРАНИЦА МАГАЗИНА
//хлебные крошки
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_filter( 'woocommerce_breadcrumb_defaults', function() {
	return array(
		'delimiter'   => '&nbsp;-&nbsp;',
		'wrap_before' => '<nav class="breadcrumb bg-light mb-30">',
		'wrap_after'  => '</nav>',
		'before'      => '',
		'after'       => '',
		'home'        => __( 'Главная', 'woostudy' ),
	);
} );


/* Переименовать вкладку "Детали" в "Характеристики" */
add_filter( 'woocommerce_product_tabs', 'usota_woo_rename_tab', 98);
function usota_woo_rename_tab($tabs) {

$tabs['additional_information']['title'] = 'Номерной фонд';

return $tabs;
}

