<?php

/**
 * Template Name: Главная
 *
 */

get_header();
?>
  <section class="block1" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bgImage.png);">
    <div class="fon_video">
      <div class="black"></div>
      <video src="<?php echo get_template_directory_uri(); ?>/img/Lesnaya_Skazka_30_sek.mp4" muted="muted"
             autoplay="autoplay" loop="loop"></video>

    </div>
    <div class="middle content">
      <h1>Forest Park</h1>
      <p>коттеджный поселок</p>

      <div class="double">
        <div class="button">
          <a class="open_modals">Забронировать участок</a>
        </div>

        <div class="button">
          <a href="http://forestpark.pro/uchastki/">Выбрать участок</a>
        </div>
      </div>
    </div>
  </section>

  <section class="block2 content">
    <div class="green">
      <p><?php the_field('маленький_заголовок_бл1', 25); ?></p>
    </div>

    <h2 class="width"><?php the_field('заголовок_бл1', 25); ?></h2>

    <?php the_field('текстовое_содержание_бл1', 25); ?>
    <div class="number">
      <div class="num">
        <span class="timer_myspeed" data-from="1" data-to="27" data-refresh-interval="1"></span>
        <p>Километров до города</p>
      </div>

      <div class="num">
        <span class="timer_myspeed" data-from="1" data-to="25" data-refresh-interval="1"></span>
        <p>Минут до центра</p>
      </div>

      <div class="num pad_14">
        <img src="<?php echo get_template_directory_uri().'/media/icon/water.svg'; ?>" class="fix-icon-numbers">
        <p>Уже есть все комуникации</p>
      </div>
    </div>

  </section>

  <section class="block3" style="background-image: url(<?php the_field('изображение_бл2', 25); ?>);">
    <div class="green">
      <p><?php the_field('маленький_заголовок_бл2', 25); ?></p>
    </div>

    <h2 class="width wow fadeInUp"><?php the_field('заголовок_бл2', 25); ?></h2>
    <p class="ppp ww wow fadeInUp"><?php the_field('текстовое_содержание_бл2', 25); ?></p>

  </section>

  <section class="block4">

    <h2 class="width wow fadeInUp"><?php the_field('заголовок_бл3', 25); ?></h2>

    <div class="slider">

      <div class="slide" data-paroller-factor="0.2"
           style="background-image: url(<?php the_field('фон_слайда_сл1', 25); ?>);">
        <div class="inside wow fadeInUp">
          <h2><?php the_field('заголовок_сл1', 25); ?></h2>
          <p><?php the_field('текст_сл1', 25); ?></p>
        </div>

      </div>

      <div class="slide" data-paroller-factor="0.2"
           style="background-image: url(<?php the_field('фон_слайда_сл2', 25); ?>);background-color: rgba(0, 0, 0, 0.48);
             background-blend-mode: soft-light;">
        <div class="inside wow fadeInUp">
          <h2><?php the_field('заголовок_сл2', 25); ?></h2>
          <p><?php the_field('текстовое_содержание_сл2', 25); ?></p>
        </div>
        <div class="image">
          <img src="<?php the_field('первая_картинка_сл2', 25); ?>">
          <img src="<?php the_field('вторая_картинка_сл2', 25); ?>">
        </div>
      </div>

      <div class="slide" data-paroller-factor="0.2"
           style="background-image: url(<?php the_field('фон_слайда_сл3', 25); ?>);">
        <div class="inside wow fadeInUp">
          <h2><?php the_field('заголовок_сл3', 25); ?></h2>
          <p><?php the_field('текстовое_содержание_сл3', 25); ?></p>
        </div>
        <div class="image2">
          <img src="<?php the_field('первая_картинка_сл3', 25); ?>">
          <img src="<?php the_field('вторая_картинка_сл3', 25); ?>">
        </div>
      </div>

      <div class="slide" data-paroller-factor="0.2"
           style="background-image: url(<?php the_field('фон_слайда_сл4', 25); ?>);">
        <div class="inside wow fadeInUp">
          <h2><?php the_field('заголовок_сл4', 25); ?></h2>
          <p><?php the_field('тестовое_содержание', 25); ?></p>
        </div>
      </div>

      <div class="slide" data-paroller-factor="0.2"
           style="background-image: url(<?php the_field('фон_сайта_сл5', 25); ?>);">
        <div class="inside wow fadeInUp">
          <h2><?php the_field('заголовок_сл5', 25); ?></h2>
          <p><?php the_field('текстовое_содержание', 25); ?></p>
        </div>
      </div>

      <div class="slide" data-paroller-factor="0.2"
           style="background-image: url(<?php the_field('фон_слайдера_сл6', 25); ?>);">
        <div class="inside wow fadeInUp">
          <h2><?php the_field('заголовок_сл6', 25); ?></h2>
          <p> <?php the_field('текстовое_содержание_сл6', 25); ?></p>
        </div>
        <div class="image">
          <img src="<?php the_field('первая_картинка_сл6', 25); ?>">
          <img src="<?php the_field('вторая_картинка_сл6', 25); ?>">
        </div>
      </div>

      <div class="slide" data-paroller-factor="0.2"
           style="background-image: url(<?php the_field('фон_слайда_сл7', 25); ?>);">
        <div class="inside wow fadeInUp">
          <h2><?php the_field('заголовок_сл7', 25); ?></h2>
          <p><?php the_field('текстовое_содержание_сл7', 25); ?></p>
        </div>
        <div class="image">
          <img src="<?php the_field('первая_картинка_сл7', 25); ?>">
          <img src="<?php the_field('вторая_картинка_сл7', 25); ?>">
        </div>
      </div>

    </div>

  </section>


  <section class="block5">
    <div class="text">
      <h2 class="wow fadeInUp">Мы строим дома<br> для вас!</h2>
      <p class="pip wow fadeInUp">Мы предлагаем 4 варианта домов для вашего участка. Дома отличаются общей площадью. Во
        всех домах есть:</p>

      <div class="room">
        <div class="door">
          <a>ПЛОЩАДЬ ДОМА:</a>
          <p>от 110-120м2</p>
        </div>

        <div class="door">
          <a>5 КОМНАТ:</a>
          <p>3 спальни, зал, кухня - столовая</p>
        </div>

        <div class="door">
          <a>НАДЕЖНЫЙ ФУНДАМЕНТ:</a>
          <p>Заливается плита, способная выдержать 5-этажный дом</p>
        </div>

        <div class="door">
          <a>Много света:</a>
          <p>В каждом проекте продумана солнечная сторона. Ваш дом всегда будет залит светом</p>
        </div>
      </div>

      <div class="knopka">
        <a href="http://forestpark.pro/doma/">Перейти к домам</a>
      </div>
    </div>
    <div class="house">
      <img src="<?php echo get_template_directory_uri(); ?>/img/fon2.png">
    </div>

  </section>


  <section class="block6">
    <div class="house2">
      <div class="interactive">
        <img class="newimgblbl" id="id7" src="<?php the_field('фотоучасткаграниц', 25); ?>">
        <img class="newimgblbl" id="id10" src="<?php the_field('фотоучастка_границ_10', 25); ?>" style="display: none;">
        <img class="newimgblbl" id="id18" src="<?php the_field('фотоучастка_границ_18', 25); ?>" style="display: none;">
      </div>

    </div>

    <div class="text2">
      <h2>Выберите участок</h2>


      <div class="answer">

        <div class="tabs">
          <a class="tab active" data-domimg="id7">7 соток</a>
          <a class="tab" data-domimg="id10">10 соток</a>
          <a class="tab" data-domimg="id18">18 соток</a>
        </div>

        <div class="tab_content">

          <div class="tab_item">
            <a>НА УЧАСТКЕ МОЖНО РАЗМЕСТИТЬ:</a>
            <div class="hi">

              <?php
              if (have_rows('на_участке_можно_разместить_7', 25)):
                while (have_rows('на_участке_можно_разместить_7', 25)) : the_row(); ?>

                  <div class="dom">
                    <img src="<?php the_sub_field('иконка', 25); ?>">
                    <p><?php the_sub_field('текст', 25); ?></p>
                  </div>
                <?php
                endwhile;
              else :
              endif;

              ?>


            </div>

            <div class="hi">


              <?php
              if (have_rows('дополнительно_7', 25)): ?>
                <a>Дополнительно</a>
                <?php
                while (have_rows('дополнительно_7', 25)) : the_row(); ?>

                  <div class="dom">
                    <img src="<?php the_sub_field('иконка', 25); ?>">
                    <p><?php the_sub_field('текст', 25); ?></p>
                  </div>
                <?php
                endwhile;
              else :
              endif;

              ?>

            </div>


            <div class="knopka">
              <a class="open_modals">Забронировать</a>
            </div>
          </div>


          <div class="tab_item">

            <a>НА УЧАСТКЕ МОЖНО РАЗМЕСТИТЬ:</a>
            <div class="hi">

              <?php
              if (have_rows('на_участке_можно_разместить_10', 25)):
                while (have_rows('на_участке_можно_разместить_10', 25)) : the_row(); ?>

                  <div class="dom">
                    <img src="<?php the_sub_field('иконка', 25); ?>">
                    <p><?php the_sub_field('текст', 25); ?></p>
                  </div>
                <?php
                endwhile;
              else :
              endif;

              ?>


            </div>

            <div class="hi">


              <?php
              if (have_rows('дополнительно_10', 25)): ?>
                <a>Дополнительно</a>
                <?php
                while (have_rows('дополнительно_10', 25)) : the_row(); ?>

                  <div class="dom">
                    <img src="<?php the_sub_field('иконка', 25); ?>">
                    <p><?php the_sub_field('текст', 25); ?></p>
                  </div>
                <?php
                endwhile;
              else :
              endif;

              ?>

            </div>


            <div class="knopka">
              <a class="open_modals">Забронировать</a>
            </div>


          </div>


          <div class="tab_item">
            <a>НА УЧАСТКЕ МОЖНО РАЗМЕСТИТЬ:</a>
            <div class="hi">

              <?php
              if (have_rows('на_участке_можно_разместить_18', 25)):
                while (have_rows('на_участке_можно_разместить_18', 25)) : the_row(); ?>

                  <div class="dom">
                    <img src="<?php the_sub_field('иконка', 25); ?>">
                    <p><?php the_sub_field('текст', 25); ?></p>
                  </div>
                <?php
                endwhile;
              else :
              endif;

              ?>


            </div>

            <div class="hi">


              <?php
              if (have_rows('дополнительно_18', 25)): ?>
                <a>Дополнительно</a>
                <?php
                while (have_rows('дополнительно_18', 25)) : the_row(); ?>

                  <div class="dom">
                    <img src="<?php the_sub_field('иконка', 25); ?>">
                    <p><?php the_sub_field('текст', 25); ?></p>
                  </div>
                <?php
                endwhile;
              else :
              endif;

              ?>

            </div>


            <div class="knopka">
              <a class="open_modals">Забронировать</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>

  <section class="block7">
    <div class="list content">
      <!--		<img class="l1 l_a" src="-->
      <?php //echo get_template_directory_uri(); ?><!--/img/1.png"  data-paroller-type="foreground" data-paroller-direction="vertical" >-->
      <!--		<img class="l4 l_a" src="-->
      <?php //echo get_template_directory_uri(); ?><!--/img/4.png"  data-paroller-type="foreground" data-paroller-direction="vertical" >-->
      <!--		<img class="l3 l_a" src="-->
      <?php //echo get_template_directory_uri(); ?><!--/img/3.png"  data-paroller-type="foreground" data-paroller-direction="vertical" >-->
      <!--		<img class="l2 l_a" src="-->
      <?php //echo get_template_directory_uri(); ?><!--/img/2.png"  data-paroller-type="foreground" data-paroller-direction="vertical" >-->
      <div class="best">
        <h2>Лучше один раз увидеть</h2>
        <p> Мы проводим индивидуальные и групповые показы участков для заинтересованных гостей.</p>
        <p> Если Вы хотите посетить поселок самостоятельно, то нажмите "как добравться" в верхнем меню сайта и проложите
          дорогу в навигаторе</p>
      </div>
      <form class="forma fix-form" method="post" id="askform_2">
        <div class="next">
          <div class="forma" style="width: 100%; min-width: auto;">
            <div class="inp">
              <fieldset class="formRow">
                <div class="formRow--item">
                  <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                    <input type="text" name="name" class="formRow--input js-input" id="lastname" placeholder="Ваше имя">
                  </label>
                </div>
              </fieldset>

              <fieldset class="formRow">
                <div class="formRow--item">
                  <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                    <input type="tel" name="tel" class="formRow--input js-input" id="lastname" placeholder="Ваш номер">
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
              <input class="otpravit2" type="submit" value="Записаться на экскурсию">

            </div>
            <div class="agree">
<!--              <input checked="" type="checkbox" name="checkme" class="checkbox">-->
              <label>Нажимая кнопку я даю свое согласие на хранение и обработку персональных данных и соглашаюсь с пользовательским
                соглашением и политикой конфиденциальности</label>
            </div>
      </form>

    </div>
    </div>


    <script>
      $(document).ready(function () {
        $("#askform_2").submit(function () {
          var form_data = $(this).serialize();
          $.ajax({
            type: "POST",
            url: "http://forestpark.pro/mail_ex.php",
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


      $('.knop_grid a').click(function () {

        var val = $(this).text();
        $('.vidasvyaz').val(val);

      });

    </script>

    <img class="l7 l_a" src="<?php echo get_template_directory_uri(); ?>/img/7.png" data-paroller-factor="-0.1"
         data-paroller-type="foreground" data-paroller-direction="vertical">
    <img class="l6 l_a" src="<?php echo get_template_directory_uri(); ?>/img/6.png" data-paroller-factor="0.1"
         data-paroller-type="foreground" data-paroller-direction="vertical">
    <img class="l5 l_a" src="<?php echo get_template_directory_uri(); ?>/img/5.png" data-paroller-factor="-0.1"
         data-paroller-type="foreground" data-paroller-direction="vertical">

    </div>


  </section>

<section class="video_about">
      <div class="content video_container"> 
        <div class="video_text">
          <h2>Посмотрите видео о Forest Park</h2>
        </div>
        <div class="video_content"> 
          <div class="play_icon">
          <img id="video_btn" src="<?php echo get_template_directory_uri(); ?>/media/icon/play.png">
          </div>
          <div class="video_wrap">
          <video src="<?php the_field( 'video_about' ); ?>" muted="muted"
             autoplay="autoplay" loop="loop" playsinline></video>
          </div> 
        </div>
      </div>
</section>

<div class="modal-wrapper-video">
    <div class="modal-video">
      <div class="modal-video__close"></div>
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php the_field( 'video-btn4' ); ?>"
              frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen id="video-modal"></iframe>
    </div>
  </div>

  <section class="block8 content">
    <h2>Последние публикации</h2>
    <section class="instagram-post">
      <div class="content">
        <div class="instagram-post__wrapper">

        </div>
        <div class="instagram-post__more-wrapper">
          <div class="instagram-post__more">Загрузить еще </div>
        </div>
      </div>
    </section>
  </section>

  <section class="block9">
    <div class="half content">

      <div class="left left-fix">
        <div class="foto">
          <img src="<?php echo get_template_directory_uri(); ?>/img/foto.png">
        </div>
        <form class="forma fix-form" method="post" id="askform_3">
          <div class="forma2">
            <div class="inp">
              <fieldset class="formRow">
                <div class="formRow--item">
                  <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                    <input type="text" name="name" class="formRow--input js-input" id="lastname" placeholder="Ваше имя">
                  </label>
                </div>
              </fieldset>

              <fieldset class="formRow">
                <div class="formRow--item">
                  <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                    <input type="tel" name="tel" class="formRow--input js-input" id="lastname" placeholder="Ваш номер">
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
              <input class="otpravit2" type="submit" value="Свяжитесь со мной">


            </div>
          </div>
        </form>


        <script>
          $(document).ready(function () {

            $('#video_btn').on('click', function () {
             $('.modal-wrapper-video').fadeIn('slow').css('display', 'flex');
              });

              $('.modal-video__close').on('click', function () {
                $('.modal-wrapper-video').fadeOut('slow');
               });


            $("#askform_3").submit(function () {
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

          $(document).on('click', function (e) {
              let modal = $('.modal-video');
              let about_btn = $('#video_btn'); 
            

              if (!about_btn.is(e.target) && about_btn.has(e.target).length === 0) {
                if (!modal.is(e.target) && modal.has(e.target).length === 0) {
                  $('.modal-wrapper-video').fadeOut('slow');
                }
              }
            });


          $('.knop_grid a').click(function () {

            var val = $(this).text();
            $('.vidasvyaz').val(val);

          });

        </script>


        <div class="agree">
<!--          <input checked type="checkbox" name="checkme" class="checkbox">-->
          <label>Нажимая кнопку я даю свое согласие на хранение и обработку персональных данных и соглашаюсь с пользовательским
            соглашением и политикой конфиденциальности</label>
        </div>
      </div>

      <div class="right">
        <span>Остались вопросы?</span>
        <h2>Обратитесь напрямую к нашему специалисту!</h2>
        <p>Приветствую Вас!<br> Меня зовут Дарья! я буду рада помочь Вам подобрать подходящий участок. При встрече я
          расскажу дополнительную информацию по каждому участку</p>
        <p> Я учту все детали и пожелания и предложу несколько подходящих вариантов, а также дам дополнительную
          информацию и покажу участки в поселке</p>
        <p> Оставьте Ваши контакты и я свяжусь с Вами в течение 15 минут</p>
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
    $('.tab').click(function () {
      var ac = $(this).attr('data-domimg');
// console.log(ac);
// $('.newimgblbl').css('opacity','0.8');
      $('.newimgblbl').css('display', 'none');
      $('#' + ac).css('display', 'block');
// setTimeout(function(){
//  $('.newimgblbl').css('opacity','1');
//  $('.newimgblbl').attr('src',ac);
//  $('.newimgblbl').css('margin-left','0');
// }, 500);


    });
  </script>

<?php
get_footer();
?>
