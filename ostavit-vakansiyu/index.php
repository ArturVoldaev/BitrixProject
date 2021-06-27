<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Оставить вакансию");
$APPLICATION->SetTitle("Оставить вакансию");
?>
<section class="input">
      <h2 class="input__title">Подобрать персонал</h2>
      <div class="search">
        <div class="search__option-place">
          <p class="search__option-title">Показать только</p>
          <select class="search__option-select-style">
            <option value="Лимон">Няня</option>
            <option value="Банан">Няня</option>
            <option value="Яблоко">Няня</option>
          </select>
        </div>
        <article class="search__case">
          <p class="search__property">Стаж</p>
          <p class="search__property">от</p>
          <input size="1" placeholder="1" class="search__imput">
          <p class="search__property">до</p>
          <input size="1" placeholder="30" class="search__imput">
          <p class="search__property">лет</p>
          <p class="search__property">Возраст</p>
          <p class="search__property">от</p>
          <input size="1" placeholder="25" class="search__imput">
          <p class="search__property">до</p>
          <input size="1" placeholder="65" class="search__imput">
          <p class="search__property">лет</p>
        </article>
        <button class="search__button">Подобрать</button>
      </div>
    </section>
    <section class="table-place">
      <table class="table" >
      <tr class="table__heading">
          <td class="table__name">фио</td>
          <td class="table__job">должность</td>
          <td class="table__age">возраст</td>
          <td class="table__experience">стаж работы</td>
      </tr>
      <tr class="table__content table__content_white table__content_border">
        <td class="table__name table__name_border-non table__name_bold-name">Лопухова Надежда Александровна</td>
        <td class="table__job table__job_border-non">Гувернантка</td>
        <td class="table__age table__age_border-non">45</td>
        <td class="table__experience table__experience_border-non">15 лет</td>
      </tr>
      <tr class="table__content">
          <td class="table__name">Лопухова Надежда Александровна</td>
          <td class="table__job">Гувернантка</td>
          <td class="table__age">45</td>
          <td class="table__experience">15 лет</td>
      </tr>
      <tr class="table__content table__content_white table__content_border">
        <td class="table__name table__name_border-non table__name_bold-name">Лопухова Надежда Александровна</td>
        <td class="table__job table__job_border-non">Гувернантка</td>
        <td class="table__age table__age_border-non">45</td>
        <td class="table__experience table__experience_border-non">15 лет</td>
      </tr>
      <tr class="table__content">
          <td class="table__name table__name_bold-name">Лопухова Надежда Александровна</td>
          <td class="table__job">Гувернантка</td>
          <td class="table__age">45</td>
          <td class="table__experience">15 лет</td>
      </tr>
      <tr class="table__content table__content_white table__content_border">
        <td class="table__name table__name_border-non">Лопухова Надежда Александровна</td>
        <td class="table__job table__job_border-non">Гувернантка</td>
        <td class="table__age table__age_border-non">45</td>
        <td class="table__experience table__experience_border-non">15 лет</td>
      </tr>
      <tr class="table__content">
          <td class="table__name table__name_bold-name">Лопухова Надежда Александровна</td>
          <td class="table__job">Гувернантка</td>
          <td class="table__age">45</td>
          <td class="table__experience">15 лет</td>
      </tr>
      <tr class="table__content table__content_white table__content_border">
        <td class="table__name table__name_border-non table__name_bold-name">Лопухова Надежда Александровна</td>
        <td class="table__job table__job_border-non">Гувернантка</td>
        <td class="table__age table__age_border-non">45</td>
        <td class="table__experience table__experience_border-non">15 лет</td>
      </tr>
      <tr class="table__content">
          <td class="table__name table__name_bold-name">Лопухова Надежда Александровна</td>
          <td class="table__job">Гувернантка</td>
          <td class="table__age">45</td>
          <td class="table__experience">15 лет</td>
      </tr>
      <tr class="table__content table__content_white table__content_border">
        <td class="table__name table__name_border-non table__name_bold-name">Лопухова Надежда Александровна</td>
        <td class="table__job table__job_border-non">Гувернантка</td>
        <td class="table__age table__age_border-non">45</td>
        <td class="table__experience table__experience_border-non">15 лет</td>
      </tr>
      </table>
    </section>
    <section class="info">
      <h2 class="info__title">Заголовок</h2>
      <p class="info__sub-title">Наличие в доме обслуживающего  персонала - водителя, няни,
        гувернантки, горничной, домработницы - это вовсе не дань моде
        и не причуды избалованных неждано свалившимся богатством нуворишней.
        Напротив, услугами сиделки или няни пользуются сегодня те,
        кто отлично знает цену деньгам и своему времени.
        Наличие в доме обслуживающего  персонала - водителя, няни,
        гувернантки, горничной, домработницы - это вовсе не дань моде
        и не причуды избалованных неждано свалившимся богатством нуворишней.
        Напротив, услугами сиделки или няни пользуются сегодня те,
        кто отлично знает цену деньгам и своему времени.
      </p>
      <p class="info__sub-title">Наличие в доме обслуживающего  персонала - водителя, няни,
        гувернантки, горничной, домработницы - это вовсе не дань моде
        и не причуды избалованных неждано свалившимся богатством нуворишней.
        Напротив, услугами сиделки или няни пользуются сегодня те,
        кто отлично знает цену деньгам и своему времени. Люди, для которых важно не только вырастить ребенка,
        но и создать основу будущего благосостояния, построив свою карьеру - вот основная категория заказчиков,
        которые ежедненно пользуются услугами нашей кампании по подбору домашнего персонала.
        Заказ няни, сиделки или домработницы является благом не только для женщины, которая имеет возможность
        строить свою карьеру или получить, наконец передышку от выполнения бесконечных домашних обязанностей,
        но и для всех остальных членов семьи, которые могут провести вместе свободный вечер или выходные.
        А доступные цены, которые устанавливает на свои услуги наша компания, и предлогаемый нами широкий выбор различных
        категорий домашнего персонала делают исключительно удобным и, главное безопасным процесс поиска няни для малыша,
        сиделки для пожилых членов семьи или домработницы для квартиры или загородного особняка.
      </p>
      <p class="info__sub-title">Наличие в доме обслуживающего  персонала - водителя, няни,
        гувернантки, горничной, домработницы - это вовсе не дань моде
        и не причуды избалованных неждано свалившимся богатством нуворишней.
        Напротив, услугами сиделки или няни пользуются сегодня те,
        кто отлично знает цену деньгам и своему времени. Люди для которых важно не только вырастить ребенка, но и создать основу.
      </p>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>