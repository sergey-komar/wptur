<?php
/**
 * Template Name: Главная
 */
?>
<?php get_header('home');?>
  
    <main class="main">
      <div class="sities">
        <div class="container">
          <div class="sities-block">
            <?php
            $tur_terms = get_terms([
                'taxonomy' => 'product_cat',
                'orderby' => 'id',// здесь по какому полю сортировать
                'hide_empty' => false,// скрывать категории без записей или нет
                'parent' => 0, //
            ])
            ?>
            <?php foreach($tur_terms as $tur_term) : ?>
             <?php $tur_image = get_field('izobrazhenie_kategorii', $tur_term)?> 
            <a href="<?php echo get_term_link($tur_term);?>" class="sities-block__item" style="background-image: url('<?php echo $tur_image;?>');">
             <?php $tur_price = get_field('czena_kategorii', $tur_term)?>
                <div class="sities-block__item-price">
                <span>от</span> <?php echo $tur_price;?>
                </div>
                <?php $tur_predlozhenia = get_field('predlozhenie_kategorii', $tur_term)?>
                <div class="sities-block__item-text">
                <?php echo $tur_predlozhenia;?> <span>предложений</span>
                </div>
                <div class="sities-block__item-title">
                    <?php echo  $tur_term->name;?>
                </div>
            </a>
            <?php endforeach;?>
          </div>
        </div>
      </div>
 
      <div class="search">
        <div class="container">
          <form class="home-search">
            <input type="text" class="home-search__imput" placeholder="Поиск по санатариям и отелям">
            <button class="home-search__btn btn--orange">найти</button>
          </form>
        </div>
      </div>

      <div class="rest">
        <div class="container">
          <div class="rest__title">
            ОТДЫХ С НАМИ
            <span> - гостеприимность и душевность Кавказа.<br>
              А еще это:</span>
          </div>
          <div class="rest-block">
            <div class="rest-block__item">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-icon-1.svg" alt="img" class="rest-block__item-img">
              <div class="rest-block__item-title">Огромный выбор жилья</div>
              <div class="rest-block__item-text">
                Отели на любой вкус для активного отдыха, отдыха с семьёй, детьми или друзьями
              </div>
            </div>
            <div class="rest-block__item">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-icon-2.svg" alt="img" class="rest-block__item-img">
              <div class="rest-block__item-title">Место силы</div>
              <div class="rest-block__item-text">
                Удивительная природа Кавказа чарует своей красотой и поистине наполняет силой и здоровьем
              </div>
            </div>
            <div class="rest-block__item">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-icon-3.svg" alt="img" class="rest-block__item-img">
              <div class="rest-block__item-title"> Вода - источник жизни</div>
              <div class="rest-block__item-text">
               Более 40 термальных источников Кавказа ежегодно щедро делится с гостями уникальными природными свойствами лечебной воды
              </div>
            </div>
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
                    'posts_per_page' => 6
                ])
                ?>
                <?php if($product_home->have_posts()) : while($product_home->have_posts()) : $product_home->the_post();?>
                <a href="<?php the_permalink();?>" class="offers-block__item" style="background-image: url('<?php the_post_thumbnail_url();?>');">
                  <div class="offers-block__item-text">
                    <?php the_field('tovar_predlozhenie_tekst')?>
                  </div>
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
                <form class="offers-block__form">
                  <input type="text" class="offers-block__form-input" placeholder="Ваше имя *">
                  <input type="text" class="offers-block__form-input" placeholder="Ваш телефон *">
                  <button class="offers-block__form-btn btn--orange">подобрать</button>
                </form>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-man.png" alt="img" class="offers-block__right-img">
                <div class="offers-block__right-img">
              </div>
            </div>
           
          </div>
        </div>
      
      </section>


      <section class="reviews">
        <div class="container">
          <h3 class="reviews__title title">Отзывы</h3>
          <div class="reviews__subtitle subtitle">Что говорят наши гости?</div>
          <div class="reviews-block">
            <div class="reviews-block__item">
              <div class="reviews-block__item-title">Отель «Оранжевое солнце»</div>
              <img src="./images/home/reviews-img.png" alt="img" class="reviews-block__item-img">
              <div class="reviews-block__item-text">
                Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. 
              </div>
              <div class="reviews-block__item-name">Виктор, г. Туапсе</div>
            </div>
            <div class="reviews-block__item">
              <div class="reviews-block__item-title">Отель «Оранжевое солнце»</div>
              <img src="./images/home/reviews-img.png" alt="img" class="reviews-block__item-img">
              <div class="reviews-block__item-text">
                Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. 
              </div>
              <div class="reviews-block__item-name">Виктор, г. Туапсе</div>
            </div>
            <div class="reviews-block__item">
              <div class="reviews-block__item-title">Отель «Оранжевое солнце»</div>
              <img src="./images/home/reviews-img.png" alt="img" class="reviews-block__item-img">
              <div class="reviews-block__item-text">
                Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. 
              </div>
              <div class="reviews-block__item-name">Виктор, г. Туапсе</div>
            </div>
          </div>

          <a href="#" class="reviews__btn btn--orange">Все отзывы</a>
        </div>
      </section>


      <section class="recommend">
        <div class="container">
          <h3 class="recommend__title title">Мы рекомендуем</h3>
          <div class="recommend__subtitle subtitle">
            Что мы рекомендуем в этом сезоне. Успейте забронировать.
          </div>
          <div class="search__wrapper">
            <div class="search__sort">
              <button class="search__sort-btn">Сортировать по</button>
              <ul class="search__list">
                  <li><a class="search__list-link--active" href="#">По умолчанию</a></li>
                  <li><a href="#">Сначала новые</a></li>
                  <li><a href="#">Цена по убыванию</a></li>
                  <li><a href="#">Цена по возрастанию</a></li>
              </ul>
            </div>
              <div class="search__wrapper-filter">
                Фильтры
              </div>
          </div>
          <div class="recommend-block">
           
                <?php echo do_shortcode( '[featured_products limit="6"]' ) ?>
           
          
            <div class="recommend-sidebar">
                <div class="recommend-sidebar__inner">
                  <div class="recommend-sidebar__box">
                    <div class="recommend-sidebar__box-title">Город</div>
                    <label class="recommend-sidebar__label">
                      <input type="checkbox" class="recommend-sidebar__checkbox">
                      <span class="recommend-sidebar__custom"></span>
                      <div class="recommend-sidebar__text">Ессентуки</div>
                    </label>
                    <label class="recommend-sidebar__label">
                      <input type="checkbox" class="recommend-sidebar__checkbox">
                      <span class="recommend-sidebar__custom"></span>
                      <div class="recommend-sidebar__text">Пятигорск</div>
                    </label>
                    <label class="recommend-sidebar__label">
                      <input type="checkbox" class="recommend-sidebar__checkbox">
                      <span class="recommend-sidebar__custom"></span>
                      <div class="recommend-sidebar__text"> Кисловодск</div>
                    </label>
                    <label class="recommend-sidebar__label">
                      <input type="checkbox" class="recommend-sidebar__checkbox">
                      <span class="recommend-sidebar__custom"></span>
                      <div class="recommend-sidebar__text">Железноводск</div>
                    </label>
                  </div>
                  
                 
                  <div class="recommend-sidebar__box">
                    <div class="recommend-sidebar__box-title">Тип питания</div>
                    <label class="recommend-sidebar__label">
                      <input type="checkbox" class="recommend-sidebar__checkbox">
                      <span class="recommend-sidebar__custom"></span>
                      <div class="recommend-sidebar__text">Шведский стол</div>
                    </label>
                    <label class="recommend-sidebar__label">
                      <input type="checkbox" class="recommend-sidebar__checkbox">
                      <span class="recommend-sidebar__custom"></span>
                      <div class="recommend-sidebar__text">Меню-заказ</div>
                    </label>
                    <label class="recommend-sidebar__label">
                      <input type="checkbox" class="recommend-sidebar__checkbox">
                      <span class="recommend-sidebar__custom"></span>
                      <div class="recommend-sidebar__text">Завтрак</div>
                    </label>
                    <label class="recommend-sidebar__label">
                      <input type="checkbox" class="recommend-sidebar__checkbox">
                      <span class="recommend-sidebar__custom"></span>
                      <div class="recommend-sidebar__text">Меню-заказ</div>
                    </label>
                  </div>
                  <a href="#" class="recommend-sidebar__btn btn--orange">подобрать</a>
                </div> 
            </div>
          </div>
        </div>
      </section>


      <section class="news">
        <div class="container">
          <h3 class="news__title title">Новости</h3>
          <div class="news__subtitle subtitle">
            Самая актуальная информация их мира путешествий
          </div>
          <div class="news-block">
            <?php global $post;?>
           <?php 
            $home_posts = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 3
            ])
           ?>
            <?php if($home_posts->have_posts()) : while($home_posts->have_posts()) : $home_posts->the_post()?>
            <a href="<?php the_permalink()?>" class="news-block__item">
              <div class="news-block__item-title">
                <?php the_title();?>
              </div>
              <div class="news-block__item-date">
                <?php echo get_the_date();?>
              </div>
              <div class="news-block__item-text">
                <?php the_excerpt();?>
              </div>
              
            </a>
            <?php endwhile; endif?>
            <?php wp_reset_postdata();?>
          </div>

          <a href="http://tur/novosti/" class="news__btn btn--orange">Все новости</a>
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