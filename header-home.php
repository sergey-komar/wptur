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
          <ul class="menu__list">
            <li>
              <a href="#">О нас </a>
            </li>
            <li>
              <a href="#">Бронирование</a>
                <ul class="sub-menu">
                  <li>
                    <a href="">кисловодск</a>
                  </li>
                  <li>
                    <a href="">пятигорск</a>
                  </li>
                  <li>
                    <a href="">железноводск</a>
                  </li>
                  <li>
                    <a href="">ессентуки</a>
                  </li>
                </ul>
            </li>
            <li>
              <a href="./catalog.html">Оплата</a>
            </li>
            <li>
              <a href="./news-detail.html">Гарантии</a>
            </li>
            <li>
              <a href="./news.html">Отзывы</a>
            </li>
            <li>
              <a href="./product.html">Акции</a>
            </li>
            <li>
              <a href="#">Вопрос-ответ  </a>
            </li>
            <li>
              <a href="#">Контакты</a>
            </li>
          </ul>
        </nav>                                        
        <div class="header-top__social">
          <a href="#" class="header-top__social-link">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/header/header-tg.svg" alt="img">
          </a>
          <a href="#" class="header-top__social-link">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/header/header-inst.svg" alt="img">
          </a>
        </div>
  
        <div class="header-top__date">c 09:00 до 21:00<br> 
          в будни</div>
  
        <div class="header-top__contact">
          <a href="tel:" class="header-top__contact-phone">+7 789 765 43 21</a>
          <a href="tel:+71234567899" class="header-top__contact-phone header-top__contact-phone-desctop">+7 123 456 78 99</a>
          <button class="header-top__contact-btn btn--green">забронировать</button>
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
          <div class="header-form__item header-form__item--location">
            <select>
              <option>Выберите направление</option>
              <option>кисловодск</option>
              <option>пятигорск</option>
              <option>ессентуки</option>
            </select>
          </div>
          <div class="header-form__item header-form__item--date">
              <input type="text" onfocus="(this.type='date')" class="header-form__item-input" id="date" placeholder="Выберите дату">
          </div>
          <div class="header-form__item header-form__item--man">
             <input type="text" class="header-form__item-input" placeholder="Укажите кол-во гостей">
          </div>
          <div class="header-form__item">
            <button class="header-form__item-btn btn--orange">забронировать</button>
          </div>
        </div>
      </div>
    </div>
   
  </header>