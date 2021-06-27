<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</main>
    <div class="cover">
    <div class="cover__wrap">
    <footer class="footer">

      <nav>
      <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_horizont_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "sub_menu",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
       <!--!<div class="footer__menu">
          <a class="footer__link" href="./personal.html">Главная</a>
          <a class="footer__link" href="./personal.html">Подобрать персонал</a>
          <a class="footer__link" href="./personal.html">Цены</a>
          <a class="footer__link" href="./personal.html">Главная</a>
          <a class="footer__link" href="./personal.html">Подобрать персонал</a>
          <a class="footer__link" href="./personal.html">Цены</a>
        </div>-->
        <div class="footer__add">
          <p class="footer__contact">8 (4872) 31-13-45</p>
          <p class="footer__contact-studio">Разработка и продвижение сайта компанией «Юни Веб» - <img class="logo" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo-UW.png" alt="Логотип студии"></p>
        </div>
    </nav>
    </footer>
    </div>
    </div>
  <script src="<?= SITE_TEMPLATE_PATH ?>/assets/scripts/script.js"></script>
</body>
</html>