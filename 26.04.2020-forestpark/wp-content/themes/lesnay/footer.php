<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LesnaySkazka
 */

?>

<footer>
  <div class="bord">
    <div class="podval content">
      <div class="logo">
        <a href="/"><img src="<?php echo get_template_directory_uri().'/media/img/logo-white.svg'; ?>"></a>
      </div>

      <div class="bottom_menu">
        <?php
        $params = array(
          'container' => false,
          'echo' => false,
          'items_wrap' => '%3$s',
          'depth' => 0,
          'menu' => 'Нижнее меню',

        );


        print strip_tags(wp_nav_menu($params), '<a>');
        ?>
      </div>
    </div>
  </div>

  <div class="end content">
    <img src="<?php echo get_template_directory_uri().'/media/icon/atoll.svg'; ?>" alt="atoll" class="atoll-logo">
    <p><?php the_field('копирайт', 'option'); ?></p>
  </div>
</footer>


<section class="block9 modal"
         style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/list.png);background-repeat: no-repeat;
           background-position-y: 22px;">

  <div class="krest_mod">
    <img src="<?php echo get_template_directory_uri(); ?>/img/krest.png">
  </div>

  <div class="content">

    <div class="left">

      <h2>Заполните анкету и наши менеджеры свяжутся с нами</h2>


      <form class="forma2 fix-form-2" method="post" id="askform">
        <div class="inp">
          <fieldset class="formRow">
            <div class="formRow--item">
              <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                <input type="name" name="name" class="formRow--input js-input" id="lastname" placeholder=""><span
                  class="placeholder"></span><span class="placeholder">Ваше имя</span>
              </label>
            </div>
          </fieldset>

          <fieldset class="formRow">
            <div class="formRow--item">
              <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                <input type="tel" name="tel" class="formRow--input js-input" id="lastname" placeholder="" autofocus=""
                       required=""><span class="placeholder"></span><span class="placeholder">Ваш номер</span>
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

</section>
<script>
  $(document).ready(function () {
    $("#askform").submit(function () {
      var form_data = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "http://forestpark.pro/mail.php",
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


<?php wp_footer(); ?>

</body>
</html>
