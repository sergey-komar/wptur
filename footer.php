<footer class="footer">
      <div class="container">
        <div class="footer-block">
          <a href="/" class="footer-block__logo">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/header/logo.svg" alt="img">
          </a>
          <div class="footer-block__inner">
            <div class="footer-block__item">
              <div class="footer-block__item-title">
                направления
              </div>
              <?php
                wp_nav_menu([
                  'theme_location' => 'menu-footer',
                  'menu_class' => 'footer-block__list',
                  'container' => ''
                ]);
              ?>
             
            </div>
            <div class="footer-block__item">
              <div class="footer-block__item-title">
                о компании
              </div>
              <?php
                wp_nav_menu([
                  'theme_location' => 'menu-footer-1',
                  'menu_class' => 'footer-block__list',
                  'container' => ''
                ]);
              ?>
            </div>
            <div class="footer-block__item">
              <div class="footer-block__item-title">
                информация
              </div>
              <?php
                wp_nav_menu([
                  'theme_location' => 'menu-footer-2',
                  'menu_class' => 'footer-block__list',
                  'container' => ''
                ]);
              ?>
            </div>
  
            <div class="header-top__social">
              <a href="<?php the_field('telegram', 'options');?>" class="header-top__social-link">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/header/header-tg.svg" alt="img">
              </a>
              <a href="<?php the_field('instagram', 'options');?>" class="header-top__social-link">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/header/header-inst.svg" alt="img">
              </a>
            </div>
      
            <div class="header-top__date"><?php the_field('vremya', 'options');?><br> 
              в будни</div>
      
            <div class="header-top__contact">
              <a href="tel:" class="header-top__contact-phone">
              <?php the_field('telefon-1', 'options');?>
              </a>
              <a href="tel:+71234567899" class="header-top__contact-phone">
              <?php the_field('telefon-2', 'options');?>
              </a>
              <button class="header-top__contact-btn btn--green btn-click">забронировать</button>
            </div>
           
          </div>
         
        </div>

        <div class="footer-bottom">
          
          <a href="#" class="footer-bottom__link">
            Политика конфиденциальности в отношении 
          </a>
          <a href="#" class="footer-bottom__link">Разработка сайта - crash-design.ru</a>
        </div>
      </div>
    </footer>
  
  <div class="btnUp btn--mobile">&uarr;</div> 
  <div class="btnUp btnUp--desctop">
    <img src="<?php echo get_template_directory_uri()?>/assets/images/btn-arrows.png" alt="img">
  </div> 

  <div class="modal">
        <div class="modal__inner">
            <div class="modal__inner-block">
                <div  class="modal-form">
                    <?php echo do_shortcode('[contact-form-7 id="d04afaf" title="Модалка"]')?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/imask"></script>
  <?php wp_footer();?>
  
</body>

</html>