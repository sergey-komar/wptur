<?php get_header();?>
<main class="main">
     
      <div class="search search-catalog">
        <div class="container">
          <div class="home-search">
            <?php echo do_shortcode('[aws_search_form]');?>
          </div>
        </div>
      </div>

      <div class="breadcrumbs">
        <div class="container">
        <div class="breadcrumbs__list">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
            </div> 
        </div>
      </div>

      <section class="post">
        <div class="container">
            <div class="post-block">
                <div class="post-block__left">
                    <div class="post-block__inner">
                        <div class="post-block__left-title">Рубрики</div>
                        <div class="post-block__wrapper--right">
                          <?php
                            $category_links = get_terms([
                                'taxonomy' => 'category',
                                'orderby' => 'id',// здесь по какому полю сортировать
                                'hide_empty' => false,// скрывать категории без записей или нет
                                'parent' => 0, //
                            ])
                            ?>
                            <?php foreach($category_links as $category_link) : ?>
                              <a href="<?php echo get_term_link($category_link);?>" class="post-block__left-link"> <?php echo $category_link->name;?></a>
                            <?php endforeach;?>
                          
                        </div>
                        
                    </div>
                </div>

                <div class="post-block__right">
                    <div class="post-block__wrapper">
                        <h1 class="post-block__right-title">
                        <?php the_title();?>
                        </h1>
                        <div class="post-block__right-date">
                        <?php echo get_the_date();?>
                        </div>
                       
                        <?php the_content();?>
                    </div>
                    
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