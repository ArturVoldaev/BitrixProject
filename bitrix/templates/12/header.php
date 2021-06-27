<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <?$APPLICATION->ShowHead();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/styles/main-style.css">-->
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/fonts/Verdana.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/fonts/Tahoma.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/fonts/CG.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/assets/vendor/fonts/book-antiqua.css">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
    <title><?$APPLICATION->ShowTitle();?></title>
  </head>
  <body class="body">
  <div id="panel">
		<?$APPLICATION->ShowPanel();?>
	  </div>
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
          <?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel1_Art1_second", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "sub_menu",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
          </nav>
          <img class="header__logo" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo__company.png" alt="Изображение лого">
          <nav>
          <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel1_Art1_second", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "sub_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top_2",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel1_Art1_second"
	),
	false
);?>
          </nav>
        </div>
      </header>
    </div>
    </div>
    <main class="main">
    <section class="slider">
      <ul class="slider__container">
        <li class="slider__slide slider__showing" id="picture-1"></li>
        <li class="slider__slide" id="picture-2"></li>
        <li class="slider__slide" id="picture-3"></li>
        <li class="slider__slide" id="picture-4"></li>
        <li class="slider__slide" id="picture-5"></li>
        <li class="slider__slide" id="picture-6"></li>
      </ul>
      <div class="slider__buttons">
        <a class="slider__button slider__button_active" href="./personal.html" id="button-1"></a>
        <a class="slider__button" href="./personal.html" id="button-2"></a>
        <a class="slider__button" href="./personal.html" id="button-3"></a>
        <a class="slider__button" href="./personal.html" id="button-4"></a>
        <a class="slider__button" href="./personal.html" id="button-5"></a>
        <a class="slider__button" href="./personal.html" id="button-6"></a>
      </div>
    </section>