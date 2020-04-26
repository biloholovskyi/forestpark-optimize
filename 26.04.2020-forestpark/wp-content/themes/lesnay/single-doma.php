<?php get_header(); ?>
  <div class="fix-house-single-page">
    <div class="fix-house__bread content">
      <a href="http://forestpark.pro/houses/">Дома</a><span> / <?php the_title(); ?></span>
    </div>
    <div class="show">
      <section class="block19">
        <div class="up content">
          <div class="toto">
            <img class="cat" src="<?php the_field('дополнительное_фото_1'); ?>">
            <div class="gold">
              <img src="<?php the_field('дополнительное_фото_1'); ?>">
              <?php
              $photo_2 = get_field('дополнительное_фото_2');
              if($photo_2) {
                ?>
                <img src="<?php echo $photo_2; ?>">
                <?php
              }
              ?>
            </div>
          </div>

          <div class="bok">
            <h3><?php the_title(); ?></h3>
            <div class="finger">
              <div class="four">
                <span><?php the_field('площадь_дома'); ?></span>
                <p>Площадь дома</p>
              </div>

              <div class="four">
                <span><?php the_field('комнат'); ?></span>
                <p>Комнат</p>
              </div>

              <div class="four">
                <img src="<?php the_field('из_чего_дом'); ?>">
                <p>Дом из кирпича</p>
              </div>

              <div class="four">
                <img src="<?php the_field('фундамент'); ?>">
                <p>Монолитная плита</p>
              </div>

            </div>

            <h4>Хотите узнать больше об этом проекте?</h4>
            <form method="post" id="form-doma">
              <div class="inp">
                <fieldset class="formRow field-fix">
                  <div class="formRow--item">
                    <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" name="name" class="formRow--input js-input" id="lastname" placeholder=""><span
                        class="placeholder"></span><span class="placeholder">Ваше имя</span>
                    </label>
                  </div>
                </fieldset>

                <fieldset class="formRow field-fix">
                  <div class="formRow--item">
                    <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                      <input type="text" name="tel" class="formRow--input js-input" id="lastname" placeholder=""><span
                        class="placeholder"></span><span class="placeholder">Ваш номер</span>
                    </label>
                  </div>
                </fieldset>
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
    </div>
  </div>

  <div class="fix-map-modal fix-map-modal--dark">
    <div class="fix-map-modal__map" style="background-image: url(<?php the_field('modal_map', 'option'); ?>);">
      <div class="fix-map-modal__close"></div>
    </div>
  </div>
<?php get_footer(); ?>
<script>
  $(document).ready(function () {
    $("#form-doma").submit(function (e) {
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
  $(document).ready(function () {
    $('.block19 .toto .cat').on('click', function () {
      var src = $(this).attr('src');

      $('.fix-map-modal__map').css('background-image', 'url(' + src + ')');
      $('.fix-map-modal').fadeIn().css('display', 'flex')
    });
  })
</script>
