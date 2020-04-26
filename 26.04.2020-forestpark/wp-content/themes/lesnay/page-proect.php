<?php

/**
 * Template Name: О проекте
 *
 */

get_header();
?>
  <section class="block10" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/fon.png);
    ">

    <div class="fun content">
      <div class="green">
        <p><?php the_field('заголовок_о2', 30); ?></p>
      </div>

      <h1><?php the_field('заголовок_o2_1', 30); ?></h1>
      <p><?php the_field('текстовое_содержание_o2_2', 30); ?></p>

    </div>
    <div class="town">

      <div class="number content">
        <div class="num">
          <span>27</span>
          <p>Километров до города</p>
        </div>

        <div class="num">
          <span>25</span>
          <p>Минут до центра</p>
        </div>

        <div class="num pad_14">
          <img src="<?php echo get_template_directory_uri().'/media/icon/water.svg'; ?>" class="fix-icon-numbers">
          <p>Уже есть все комуникации</p>
        </div>
      </div>

    </div>
  </section>

  <section class="block11" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/group.png);">

    <div class="group content">
      <h2><?php the_field('текст_слева_о3', 30); ?></h2>

      <?php the_field('текст_справа_о4', 30); ?>


    </div>

  </section>

  <section class="block12 content">
    <h2><?php the_field('карта_развития', 30); ?></h2>

    <div class="round">

      <?php

      if (have_rows('пункты_карты', 30)):

        while (have_rows('пункты_карты', 30)) : the_row(); ?>


          <div class="owl">
            <div class="run">
              <p><?php the_sub_field('месяц', 30); ?></p>
              <span><?php the_sub_field('год', 30); ?></span>
            </div>
            <h4><?php the_sub_field('что_сделано', 30); ?></h4>
          </div>

        <?php
        endwhile;
      else :
      endif;
      ?>

      <img class="l8" src="<?php echo get_template_directory_uri(); ?>/img/9.png" data-paroller-factor="-0.2"
           data-paroller-type="foreground">

      <img class="l9" src="<?php echo get_template_directory_uri(); ?>/img/8.png" data-paroller-factor="-0.2"
           data-paroller-type="foreground">

      <img class="l10" src="<?php echo get_template_directory_uri(); ?>/img/10.png" data-paroller-factor="-0.2"
           data-paroller-type="foreground">

      <img class="l11" src="<?php echo get_template_directory_uri(); ?>/img/11.png" data-paroller-factor="-0.2"
           data-paroller-type="foreground">


    </div>


  </section>

  <section class="block13">
    <div class="grey"></div>
    <div class="content">
      <div class="about-slider__title">
        <h2>Фотографии поселка</h2>
        <div class="about-slider__nav">
          <div class="prev disabled"></div>
          <div class="next"></div>
        </div>
      </div>
    </div>

    <div class="slider slider--fix">
      <div class="about-slider-box content" data-count="1">

        <?php
        $images = get_field('фотографии_поселка', 30);
        if ($images): ?>
          <?php foreach ($images as $image): ?>
            <div class="item">
              <a data-fancybox="gallery_foto_2" href="<?php echo $image['url']; ?>"><img
                  src="<?php echo $image['url']; ?>"></a>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>


  <section class="block9 top"
           style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/list.png);background-repeat: no-repeat;
             background-size: cover;">
    <div class="half content">

      <div class="left left-fix">

        <form class="forma2 fix-form" id="form-about" method="post">
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
                  <input type="text" name="tel" class="formRow--input js-input" id="lastname" placeholder="Ваш номер">
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
<!--          <input checked type="checkbox" name="checkme" class="checkbox">-->
          <label>Нажимая кнопку я даю свое согласие на хранение и обработку персональных данных и соглашаюсь с пользовательским
            соглашением и политикой конфиденциальности</label>
        </div>
      </div>

      <div class="right">
        <span>Остались вопросы?</span>
        <h2>Обратитесь <br>в управляющую компанию</h2>

      </div>
    </div>

    <div class="light">
      <div class="sis content">
        <p><?php the_field('текст_слева_подвал', 28); ?></p>
        <a href="tel:<?php the_field('номер_справа', 28); ?>"><?php the_field('номер_справа', 28); ?></a>
      </div>
    </div>
  </section>

<?php
get_footer();
?>

<script>
  $('.about-slider__nav .prev').on('click', newSliderPrev);
  $('.about-slider__nav .next').on('click', newSliderNext);

  function newSliderNext() {
    var withBox = $('.about-slider-box .item').css('width').split('px')[0];
    var count = $('.about-slider-box .item').length;
    if(count > +$('.about-slider-box').attr('data-count')) {
      var traslate = +$('.about-slider-box').attr('data-count') * (+withBox + 10);
      $('.about-slider-box .item').css('transform', 'translateX(-' + traslate + 'px)');
      $('.about-slider-box').attr('data-count', +$('.about-slider-box').attr('data-count') + 1);
      $('.about-slider__nav .prev').removeClass('disabled');
    }
    if(count === +$('.about-slider-box').attr('data-count')) {
      $('.about-slider__nav .next').addClass('disabled');
    }
  }

  function newSliderPrev() {
    var withBox = $('.about-slider-box .item').css('width').split('px')[0];
    var count = $('.about-slider-box .item').length - 1;
    if(+$('.about-slider-box').attr('data-count') > 1) {
      $('.about-slider-box').attr('data-count', +$('.about-slider-box').attr('data-count') - 1);
      var traslate = (+$('.about-slider-box').attr('data-count') - 1) * (+withBox + 10);
      $('.about-slider-box .item').css('transform', 'translateX(-' + traslate + 'px)');
      $('.about-slider__nav .next').removeClass('disabled');
    }

    if(+$('.about-slider-box').attr('data-count') == 1) {
      $('.about-slider__nav .prev').addClass('disabled');
    }

    $(document).ready(function () {
      $("#form-about").submit(function (e) {
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
  }
</script>
