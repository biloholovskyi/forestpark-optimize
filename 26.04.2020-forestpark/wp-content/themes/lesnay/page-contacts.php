<?php

/**
 * Template Name: Контакты
 *
 */

get_header();
?>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=<ваш API-ключ>&lang=ru_RU" type="text/javascript"></script>
  <section class="block17 content">
    <div class="max">
      <div class="text_max">
        <h2>Отдел продаж</h2>

        <div class="cons">

          <div class="phone">
            <span>Телефон</span>
            <a href="tel:<?php the_field('телефон_отп', 28); ?>"><?php the_field('телефон_отп', 28); ?></a>
          </div>

          <div class="phone">
            <span>Почта</span>
            <a href="mailto:<?php the_field('e-mail_opt', 28); ?>"><?php the_field('e-mail_opt', 28); ?></a>
          </div>
        </div>

        <h2>Управляющая компания</h2>

        <div class="cons">

          <div class="phone">
            <span>Телефон</span>
            <a href="tel:<?php the_field('телефон_упр', 28); ?>"><?php the_field('телефон_упр', 28); ?></a>
          </div>

          <div class="phone">
            <span>Почта</span>
            <a href="mailto:<?php the_field('e-mail_upr', 28); ?>"><?php the_field('e-mail_upr', 28); ?></a>
          </div>
        </div>

      </div>

      <div class="map" id="map">

        <div class="down">
          <div class="click">
            <a target="_blank" id="map-link" href="https://yandex.ru/maps/?rtext=55.638876,49.536035~55.796289,49.108795">Продолжить маршрут в
              навигаторе</a>
            <img src="<?php echo get_template_directory_uri(); ?>/img/up.png">
          </div>
        </div>
      </div>

    </div>
  </section>

  <script>
    ymaps.ready(init);

    function init() {

      var myMap = new ymaps.Map("map", {
          center: [55.638865, 49.306681],
          zoom: 9,
          controls: []
        },
        {
          suppressMapOpenBlock: true
        });

      myMap.behaviors.disable(['drag', 'scrollZoom', 'dblClickZoom']);

      myMap.controls
        .remove('trafficControl')
        .remove('fullscreenControl')
        .remove('rulerControl')
        .remove('typeSelector')
        .remove('searchControl')
        .remove('zoomControl')
        .remove('geolocationControl');

      var myPin = new ymaps.Placemark([55.638876, 49.536035],
        {},
        {
          iconLayout: 'default#image',
          iconImageHref: '../wp-content/themes/lesnay/media/icon/pin.svg',
          iconImageSize: [78.6, 103.3],
          iconImageOffset: [-40, -80]
        });

      var myPin2 = new ymaps.Placemark([55.796289, 49.108795],
        {},
        {
          iconLayout: 'default#image',
          iconImageHref: '../wp-content/themes/lesnay/media/icon/pin-2.svg',
          iconImageSize: [78.6, 103.3],
          iconImageOffset: [-40, -100]
        });

      myMap.geoObjects.add(myPin);
      myMap.geoObjects.add(myPin2);
    }
  </script>

  <section class="block9"
           style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/list.png);background-repeat: no-repeat;
             background-position-y: 22px;">
    <div class="content">

      <div class="left">

        <h2>Заполните анкету и наши менеджеры свяжутся с нами</h2>

        <form class="forma2 fix-form-2" method="post" id="fix-form-asc">
          <div class="inp">
            <fieldset class="formRow">
              <div class="formRow--item">
                <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                  <input type="text" name="name" class="formRow--input js-input" id="lastname" placeholder=""><span
                    class="placeholder">Ваше имя</span>
                </label>
              </div>
            </fieldset>

            <fieldset class="formRow">
              <div class="formRow--item">
                <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                  <input type="text" name="tel" class="formRow--input js-input" id="lastname" placeholder=""><span
                    class="placeholder">Ваш номер</span>
                </label>
              </div>
            </fieldset>
          </div>
          <h3>Удобный способ связи:</h3>

          <div class="knop_grid">
            <a>Звонок</a>
            <a>Telegram</a>
            <a>Whatsapp</a>
          </div>
          <input type="hidden" class="vidasvyaz" name="vid" value="">
          <div class="knopka">
            <input class="otpravit" type="submit" value="Свяжитесь со мной">
          </div>
        </form>
        <div class="agree">
          <!--			<input checked="" type="checkbox" name="checkme" class="checkbox"> -->
          <label>Нажимая кнопку я даю свое согласие на хранение и обработку персональных данных и соглашаюсь с
            пользовательским соглашением и политикой конфиденциальности</label>
        </div>
      </div>


    </div>

    <div class="light">
      <div class="sis content">
        <p><?php the_field('текст_слева_подвал', 28); ?></p>
        <a href="tel:<?php the_field('номер_справа', 28); ?>"><?php the_field('номер_справа', 28); ?></a>
      </div>
    </div>
  </section>
  <script>
    var userDeviceArray = [
      {device: 'Android', platform: /Android/},
      {device: 'iPhone', platform: /iPhone/},
      {device: 'iPad', platform: /iPad/},
      {device: 'Symbian', platform: /Symbian/},
      {device: 'Windows Phone', platform: /Windows Phone/},
      {device: 'Tablet OS', platform: /Tablet OS/},
      {device: 'Linux', platform: /Linux/},
      {device: 'Windows', platform: /Windows NT/},
      {device: 'Macintosh', platform: /Macintosh/}
    ];

    var platform = navigator.userAgent;

    function getPlatform() {
      for (var i in userDeviceArray) {
        if (userDeviceArray[i].platform.test(platform)) {
          return userDeviceArray[i].device;
        }
      }
      return 'Неизвестная платформа!' + platform;
    }
    var mapLink = $('#map-link');
    console.log(mapLink);
    switch (getPlatform()) {
      case 'Android':
        mapLink.attr('href', 'yandexnavi://build_route_on_map?lat_to=55.638876&lon_to=49.536035');
        break;
      case 'iPhone':
        mapLink.attr('href', 'yandexnavi://build_route_on_map?lat_to=55.638876&lon_to=49.536035');
        break;
      case 'iPad':
        mapLink.attr('href', 'yandexnavi://build_route_on_map?lat_to=55.638876&lon_to=49.536035');
        break;
      case 'Windows Phone':
        mapLink.attr('href', 'yandexnavi://build_route_on_map?lat_to=55.638876&lon_to=49.536035');
        break;
    }

    $(document).ready(function () {
      $("#fix-form-asc").submit(function (e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
          type: "POST",
          url: "http://forestpark.pro/mail_mn.php",
          data: form_data,
          success: function () {
            window.open("http://forestpark.pro/cpasibo/", "_self")
          },
          error: function () {
            alert('возникла ошибка');
          }
        });
        return false;
      });
    });

  </script>

<?php
get_footer();

