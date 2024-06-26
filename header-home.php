<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body <?php body_class()?>>
<?php wp_body_open();?>
  <header class="header">
    <div class="container-header">
      <div class="header-top">
        <a href="/" class="logo">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/header/logo.svg" alt="img">
        </a>
        <nav class="menu">
            <?php
              wp_nav_menu([
                'theme_location' => 'menu-header',
                'menu_class' => 'menu__list',
                'container' => ''
              ]);
            ?>
        </nav>                                        
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
          <?php the_field('telefon-2', 'options');?>
          </a>
          <a href="tel:+71234567899" class="header-top__contact-phone header-top__contact-phone-desctop">
          <?php the_field('telefon-1', 'options');?>
          </a>
          <button class="header-top__contact-btn btn--green btn-click">забронировать</button>
        </div>
  
        <div class="nav-icon">
          <div class="nav-icon__middle"></div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="header-center">
        <h1 class="header-center__title">
          Кавказские Минеральные Воды
        </h1>
        <p class="header-center__text">отдых, который близок каждому  </p>

        <div class="header-form">
          <?php echo do_shortcode('[contact-form-7 id="dcc48e2" title="Напарвление"]')?>
        </div>
      </div>
    </div>
   
  </header>