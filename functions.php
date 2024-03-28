<?php
function tur_script() {
    
    wp_enqueue_style('tur-style', get_template_directory_uri() . '/assets/css/style.min.css', [], '2024', 'all');
    wp_enqueue_style('tur-custom', get_template_directory_uri() . '/assets/css/custom.css', [], '2024', 'all');

   
    wp_enqueue_script('tur-js', get_template_directory_uri() . '/assets/js/main.min.js', [], '2024', true);
}

add_action('wp_enqueue_scripts', 'tur_script');


function tur() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox');
    add_theme_support( 'wc-product-gallery-slider' );


    register_nav_menus([
        'menu-header' => 'меню в шапке',
        'menu-footer' => 'меню в подвале',
        'menu-footer-1' => 'меню в подвале1',
        'menu-footer-2' => 'меню в подвале2',
        
    ]);
}
add_action('after_setup_theme', 'tur');

if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
        'page_title' 	=> 'Основные настройки',
        'menu_title'	=> 'Настройки шапки и подвала',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    )); 
}

function tur_widgets_init() {
	register_sidebar(
		array(
			'name' => esc_html__( 'Sidebar', 'tur' ),
			'id' => 'sidebar-1',
			'description' => esc_html__( 'Add widgets here.', 'tur' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
		)
	);
}
add_action( 'widgets_init', 'tur_widgets_init' );




//УБИРАЕМ span и br в contact form 7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
    return $content;
});
//УБИРАЕМ span и br в contact form 7

//УБИРАЕМ ТЕГ Р в contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');


require_once get_template_directory() . '/inc/woocommerce-hooks.php';
require_once get_template_directory() . '/inc/breadcrumbs.php';
require_once get_template_directory() . '/inc/text.php';



function debug( $data ) {
	echo '<pre>' . print_r( $data, 1 ) . '</pre>';
}

