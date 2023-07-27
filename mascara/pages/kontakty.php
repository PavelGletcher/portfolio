<?php
/* Doctype-fav */
require '/Applications/MAMP/htdocs/portfolio/mascara/templates/doctypefavicon.html';
?>

<meta name="description" content="123">
<title>Контакты — Mascara</title>
<?php
/* Стили */
require '/Applications/MAMP/htdocs/portfolio/mascara/templates/css.html';
?>
<?php
/* Head */
require '/Applications/MAMP/htdocs/portfolio/mascara/templates/head.html';
?>

<body>
<div class="contacts-box container">
    <h2 class="h2-item">Контакты</h2>
    <div class="contacts-box--main">
      <div class="contacts-box--left">
        <div class="contacts-box--map map">
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A458c455a6ec62c32352489a4a90cf809c9b3366652b58b7894a4d7a307bd667b&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
      </div>
      <div class="contacts-box--right">
        <div class="contacts-box--logo">
          <p class="contacts-box--logo--item">MASCARA</p>
        </div>
          <ul class="contacts-box--spidok" >
            <li  class="contacts-box--spidok--item">г. Тюмень, ул. Мельникайте 125Б, 3 этаж </li>
            <li  class="contacts-box--spidok--item">Предварительная запись</li>
            <li  class="contacts-box--spidok--item">+7 (922) 480-20-72</li>
          </ul>
          <div class="contacts-box--btn booking btn">Записаться on-line</div>
          <div class="contacts-box--soc">
            <div class="contacts-box--soc--item">1</div>
            <div class="contacts-box--soc--item">1</div>
            <div class="contacts-box--soc--item">1</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php
/* Footer */
require '/Applications/MAMP/htdocs/portfolio/mascara/templates/footer.html';
?>