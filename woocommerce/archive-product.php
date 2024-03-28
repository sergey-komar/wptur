<?php


defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
?>


<?php
  
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
  <div class="search__wrapper">
    <div class="search__sort">
    
     
        <?php woocommerce_catalog_ordering()?>
     
    </div>
      <div class="search__wrapper-filter">
        Фильтры
      </div>
  </div>
 
  
  
 
<div class="recommend-block recommend-block__shop">
	<div class="recommend-sidebar">
		<div class="recommend-sidebar__inner">
		<?php
		/**
		 * Hook: woocommerce_sidebar.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
		?>
		</div>
	</div>
<?php

if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );


?>
</div>
<div class="pagination-shop">
  <div class="container">
    <div class="pagination__list">
      <?php
      /**
         * Hook: woocommerce_after_shop_loop.
         *
         * @hooked woocommerce_pagination - 10
         */
        do_action( 'woocommerce_after_shop_loop' );
      } else {
        /**
         * Hook: woocommerce_no_products_found.
         *
         * @hooked wc_no_products_found - 10
         */
        do_action( 'woocommerce_no_products_found' );
      }

      ?>
    </div>
  </div>
</div>

  <section class="offers">
      <div class="container">
        <h3 class="offers__title title">
          ТОП предложений
        </h3>
        <div class="offers__subtitle subtitle">
          Что выбирают наши гости в этом сезоне
        </div>
        <div class="offers-block">
          <div class="offers-block__left--wrapper">
            <div class="offers-block__left">
              <?php
              $product_home = new WP_Query([
                  'post_type' => 'product',
                  'posts_per_page' => 6,
                  'meta_query' => [
                    'relation' => 'OR',
                    [
                      'key' => 'tovar_na_glavnoj',
                      'value' => 'да'
                    ],
                    
                  ]
                   
              ])
              ?>
              <?php if($product_home->have_posts()) : while($product_home->have_posts()) : $product_home->the_post();?>
              <a href="<?php the_permalink();?>" class="offers-block__item" style="background-image: url('<?php the_post_thumbnail_url();?>');">
              <?php if(!empty(get_field('tovar_predlozhenie_tekst'))) :?>
                <div class="offers-block__item-text">
                  <?php the_field('tovar_predlozhenie_tekst')?>
                </div>
              <?php endif;?> 
                
                <div class="offers-block__item-title">
                  <?php the_title();?>
                </div>
              </a>
              <?php endwhile; endif;?>
              <?php wp_reset_postdata();?>
            </div>
          </div>
          
          <div class="offers-block__right--wrapper">
            <div class="offers-block__right">
              <div class="offers-block__right-title">Нужна помощь?</div>
              <div class="offers-block__right-text">
                Не знаете, как выбрать? 
                Оставьте заявку, мы сделаем подборку предложений, с учетом всех Ваших пожеланий
              </div>
              <div class="offers-block__form">
                <?php echo do_shortcode('[contact-form-7 id="379292c" title="Нужна помощь"]')?>
              </div>
              <img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-man.png" alt="img" class="offers-block__right-img">
              <div class="offers-block__right-img">
            </div>
          </div>
          
        </div>
      </div>    
  </section>

	  <div class="price">
        <div class="container">
            <h3 class="price__title title">Цены на отдых в Пятигорске</h3>
            <div class="price__inner">
                <div class="price__text">
                    С другой стороны укрепление и развитие структуры способствует подготовки и реализации существенных финансовых и административных условий. Задача организации, в особенности же консультация с широким активом обеспечивает широкому кругу (специалистов) участие в формировании новых предложений. Таким образом постоянный количественный рост и сфера нашей активности требуют определения и уточнения системы обучения кадров, соответствует насущным потребностям. Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития. Таким образом рамки и место обучения кадров в значительной степени обуславливает создание форм развития.
                </div>
                <div class="price__text">
                    Не следует, однако забывать, что начало повседневной работы по формированию позиции требуют определения и уточнения соответствующий условий активизации. Задача организации, в особенности же постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации модели развития. С другой стороны постоянное информационно-пропагандистское обеспечение нашей деятельности требуют от нас анализа направлений прогрессивного развития. Повседневная практика показывает, что постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации систем массового участия.
                </div>
            </div>
            
        </div>
      </div>

	  <div class="sity-category">
        <div class="container">
          <?php
            $category_terms = get_terms([
                'taxonomy' => 'product_cat',
                'orderby' => 'id',// здесь по какому полю сортировать
                'hide_empty' => false,// скрывать категории без записей или нет
                'parent' => 0, //
            ])
            ?>
          <div class="sity-category__box">
            <?php foreach($category_terms as $category_term) : ?>
            <a href="<?php echo get_term_link($category_term);?>" class="sity-category__link">
              <?php echo $category_term->name;?>
            </a>
            <?php endforeach;?>
          </div>
          
        </div>
      </div>
<?php
get_footer( 'shop' );



