<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<main class="main">
		<div class="search search-catalog">
			<div class="container">
			<form class="home-search">
				<input type="text" class="home-search__imput" placeholder="Поиск по санатариям и отелям">
				<button class="home-search__btn btn--orange">найти</button>
			</form>
			</div>
      	</div>
	<div class="container">
		<div class="breadcrumbs breadcrumbs-catalog">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
		</div>
		
		