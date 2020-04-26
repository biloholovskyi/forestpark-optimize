<?php

/**
 * Template Name: Дома
 *
 */

get_header();
?>

  <section class="fix-house">
    <div class="content">
      <?php
      $args = array(
        'numberposts' => -1,
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'doma',
        'suppress_filters' => true,
      );

      $posts = get_posts( $args );
      foreach($posts as $post){ setup_postdata($post);
        ?>
        <a href="<?php the_permalink(); ?>" class="fix-house__item">
          <div class="fix-item__left">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="forest">
            <div class="fix-item__info">
              <div class="fix-item__name"><?php the_title(); ?></div>
              <div class="fix-item__size"><?php the_field('площадь_дома'); ?> М<sup>2</sup></div>
            </div>
          </div>
          <div class="fix-item__right">Подробнее</div>
        </a>
        <?php
      }
      wp_reset_postdata(); // сброс
      ?>
    </div>
  </section>


  <div class="show">

    <div class="krest">
      <img src="<?php echo get_template_directory_uri(); ?>/img/krest.png">
    </div>


    <section class="block19">
      <div class="up content">
        <div class="toto">
          <img class="cat" src="<?php echo get_template_directory_uri(); ?>/img/roof.png">
          <div class="gold">
            <img src="<?php echo get_template_directory_uri(); ?>/img/roof.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slider2.png">
          </div>
        </div>

        <div class="bok">
          <h3>Название проекта 1</h3>
          <div class="finger">
            <div class="four">
              <span>150 м2</span>
              <p>Площадь дома</p>
            </div>

            <div class="four">
              <span>6</span>
              <p>Комнат</p>
            </div>

            <div class="four">
              <img src="<?php echo get_template_directory_uri(); ?>/img/brick-wall.png">
              <p>Дом из кирпича</p>
            </div>

            <div class="four">
              <img src="<?php echo get_template_directory_uri(); ?>/img/subtract.png">
              <p>Ленточный фундамент</p>
            </div>

          </div>

          <h4>Хотите узнать больше об этом проекте?</h4>

          <div class="inp">
            <fieldset class="formRow">
              <div class="formRow--item">
                <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                  <input type="text" class="formRow--input js-input" id="lastname" placeholder=""><span
                    class="placeholder"></span><span class="placeholder">Ваше имя</span>
                </label>
              </div>
            </fieldset>

            <fieldset class="formRow">
              <div class="formRow--item">
                <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                  <input type="text" class="formRow--input js-input" id="lastname" placeholder=""><span
                    class="placeholder"></span><span class="placeholder">Ваш номер</span>
                </label>
              </div>
            </fieldset>
          </div>

          <div class="knopka">
            <a href="">Оставить заявку</a>
          </div>

          <div class="agree">
            <!--			<input checked="" type="checkbox" name="checkme" class="checkbox"> -->
            <label>Нажимая кнопку я даю свое согласие на хранение и обработку персональных данных и соглашаюсь с
              пользовательским соглашением и политикой конфиденциальности</label>
          </div>

        </div>
      </div>


      <img class="list" src="<?php echo get_template_directory_uri(); ?>/img/16.png" data-paroller-factor="-0.2"
           data-paroller-type="foreground">

      <img class="list2" src="<?php echo get_template_directory_uri(); ?>/img/17.png" data-paroller-factor="-0.2"
           data-paroller-type="foreground">

      <img class="list3" src="<?php echo get_template_directory_uri(); ?>/img/18.png" data-paroller-factor="-0.2"
           data-paroller-type="foreground">


      <section class="block13">

        <h2 class="content">Эти дома мы уже построили</h2>

        <div class="slider">
          <div class="owl-carousel owl-theme">

            <?php

            $images = get_field('галлерея', 211);

            if ($images): ?>
              <?php foreach ($images as $image): ?>

                <div class="item">
                  <img src="<?php echo $image['url']; ?>">
                </div>
              <?php endforeach; ?>
            <?php endif; ?>


          </div>
        </div>
      </section>
    </section>

  </div>


  <section class="block9"
           style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/list.png);background-repeat: no-repeat;
             background-position-y: 22px;">
    <div class="content">

      <div class="left">

        <h2 class="width" style="color: #fff; text-align: center;">Остались вопросы? Напишите нам!</h2>


        <div class="forma2 fix-form">
          <div class="inp">
            <fieldset class="formRow">
              <div class="formRow--item">
                <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                  <input type="text" class="formRow--input js-input" id="lastname" placeholder=""><span
                    class="placeholder">Ваше имя</span>
                </label>
              </div>
            </fieldset>

            <fieldset class="formRow">
              <div class="formRow--item">
                <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
                  <input type="text" class="formRow--input js-input" id="lastname" placeholder=""><span
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

          <div class="knopka">
            <a href="">Свяжитесь со мной</a>
          </div>
        </div>
        <div class="agree">
          <!--			<input checked="" type="checkbox" name="checkme" class="checkbox"> -->
          <label>Нажимая кнопку я даю свое согласие на хранение и обработку персональных данных и соглашаюсь с
            пользовательским соглашением и политикой конфиденциальности</label>
        </div>
      </div>


    </div>

    <div class="light">
      <div class="sis content">
        <p>А если Вы смелый, то можете позвонить нам сами ;)</p>
        <a href="">+7 843 225 66 77</a>
      </div>
    </div>
  </section>
<?php
get_footer();
