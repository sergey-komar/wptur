<?php
/**
 * Template Name: Записи
 */
?>
<?php get_header();?>
    <main class="main">
     
      <div class="search search-catalog">
        <div class="container">
          <form class="home-search">
            <input type="text" class="home-search__imput" placeholder="Поиск по санатариям и отелям">
            <button class="home-search__btn btn--orange">найти</button>
          </form>
        </div>
      </div>

      <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__list">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
            </div> 
            
        </div>
      </div>

      <section class="news">
        <div class="container">
            <div class="news-block__inner">
                <div class="news-sidebar">
                    <div class="news-sidebar__inner">
                        <div class="news-sidebar__title">Рубрики</div>
                        <div class="news-sidebar__wrapper">
                            <?php
                            $category_links = get_terms([
                                'taxonomy' => 'category',
                                'orderby' => 'id',// здесь по какому полю сортировать
                                'hide_empty' => false,// скрывать категории без записей или нет
                                'parent' => 0, //
                            ])
                            ?>
                            <?php foreach($category_links as $category_link) : ?>
                                <a href="<?php echo get_term_link($category_link);?>" class="news-sidebar__link">
                                <?php echo $category_link->name;?>
                                </a>
                            <?php endforeach;?>
                        </div>
                       
                    </div>
                    
                </div>
                
                <div class="news-content">
                    <h3 class="news-content__title">Новости</h3>

                    <?php global $post;?>
                    <?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
                    <?php 
                        $home_posts = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'paged' => $paged,
                        ])
                    ?>
                        <?php if($home_posts->have_posts()) : while($home_posts->have_posts()) : $home_posts->the_post()?>
                    <a href="<?php the_permalink();?>" class="news-content__item">
                        <img src="<?php the_post_thumbnail_url();?>" alt="img" class="news-content__item-img">
                        <div class="news-content__box">
                            <div class="news-content__box-title">
                                <?php the_title();?>
                            </div>
                            <div class="news-content__box-date">
                            <?php echo get_the_date();?>
                            </div>
                            <div class="news-content__box-text">
                            <?php the_excerpt();?>
                            </div>
                        </div>
                    </a>
                    <?php endwhile; endif?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>

            <div class="pagination">
               
                <div class="pagination__list">
                    <?php
                    $big = 999999999; // need an unlikely integer

                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $home_posts->max_num_pages,
                        'prev_text'    => __('Назад'),
                        'next_text'    => __('Вперёд'),
                    ) );
                    ?>
                   
                </div>
               
            </div>
        </div>
      </section>

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
    </main>
<?php get_footer();?>