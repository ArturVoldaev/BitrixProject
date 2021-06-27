<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?> 
<head>
  <?$APPLICATION->ShowHead();?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 
  <link rel="stylesheet" href="./pages/index.css">
  <title><?$APPLICATION->ShowTitle();?></title>
</head>
    <body class="body">
	<?$APPLICATION->ShowPanel();?>
      <div class="cover">
      <div class="cover__wrap">
      <header class="header">
        <div class="header__container-contact-button">
          <p class="contact">8 (4872) 31-13-45</p>
          <form class="header__buttons-place">
            <button class="header__button">Оставить заявку</button>
            <button class="header__button">Отправить резюме</button>
          </form>
        </div>
        <div class="header__container-menu">
          <nav>
            <ul class="header__menu">
              <li class="header__warp"><a class="header__menu-link" href="./personal.html">Главная</a></li>
              <li class="header__warp"><a class="header__menu-link" href="./personal.html">Подобрать персонал</a>
                <ul class="header__submenu-personal">
                  <li class="header__warp-down"><a class="header__menu-link-down" href="">О nt,t</a></li>
                  <li class="header__warp-down"><a class="header__menu-link-down" href="">Задать вопрос</a></li>
                  <li class="header__warp-down"><a class="header__menu-link-down" href="">Это интересно</a></li>
                  <li class="header__warp-down"><a class="header__menu-link-down" href="">Отзывы</a></li>
                </ul>
              </li>
              <li class="header__warp"><a class="header__menu-link" href="">Цены</a></li>
            </ul>
          </nav>
          <img class="header__logo" src="<?= SITE_TEMPLATE_PATH ?>/local/assets/images/logo__company.png" alt="Изображение лого">
          <nav>
            <ul class="header__menu">
              <li class="header__warp"><a class="header__menu-link" href="./personal.html">  Оставить   заявку</a></li>
              <li class="header__warp"><a class="header__menu-link" href="./personal.html">Оставить вакансию</a>
                <!--<ul class="header__submenu-personal">
                  <li class="header__warp-down"><a class="header__menu-link-down" href="">О нас</a></li>
                  <li class="header__warp-down"><a class="header__menu-link-down" href="">Задать вопрос</a></li>
                  <li class="header__warp-down"><a class="header__menu-link-down" href="">Это интересно</a></li>
                  <li class="header__warp-down"><a class="header__menu-link-down" href="">Отзывы</a></li>
                </ul>
              </li>-->
              <li class="header__warp"><a class="header__menu-link" href="">Контакты</a></li>
            </ul>
          </nav>
        </div>
      </header>
    </div>
    </div>						