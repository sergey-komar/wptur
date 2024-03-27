<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<main class="main">
		<div class="search search-catalog">
			<div class="container">
				<div class="home-search">
					<?php echo do_shortcode('[aws_search_form]');?>
				</div>
			</div>
      	</div>
	<div class="container">
		<div class="breadcrumbs breadcrumbs-catalog">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
		</div>
		
		