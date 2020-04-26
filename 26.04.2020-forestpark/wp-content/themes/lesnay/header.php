<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LesnaySkazka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>
<script>
  new WOW().init();
</script>
<body <?php body_class(); ?>>

<header>
  <div class="shapka content">
    <div class="menu">
      <?php
      $params = array(
        'container' => false,
        'echo' => false,
        'items_wrap' => '%3$s',
        'depth' => 0,
        'menu' => 'Верхнее меню',

      );


      print strip_tags(wp_nav_menu($params), '<a>');
      ?>
    </div>


    <div class="mobmenu">
      <input type="checkbox" id="hmt" class="hidden-menu-ticker">
      <label class="btn-menu" for="hmt">
        <span class="first"></span>
        <span class="second"></span>
        <span class="third"></span>
      </label>
      <ul class="hidden-menu">
        <div class="menumob">

          <?php
          $params = array(
            'container' => false,
            'echo' => false,
            'items_wrap' => '%3$s',
            'depth' => 0,
            'menu' => 'Верхнее меню',

          );


          print strip_tags(wp_nav_menu($params), '<a>');
          ?>

        </div>
        <div class="sety hidden-sety">
          <div class="tell">


            <?php
            if (is_front_page() || is_page(98)) { ?>

              <a href="<?php the_field('telegram', 'option'); ?>"><img class="tel_ga"
                                                                       src="<?php echo get_template_directory_uri().'/media/icon/tg-white.svg'; ?>"></a>
              <a href="<?php the_field('whatsapp', 'option'); ?>"><img class="what_a"
                                                                       src="<?php echo get_template_directory_uri().'/media/icon/watsapp-white.svg'; ?>"></a>

              <?php
            } else { ?>

              <a href="<?php the_field('telegram', 'option'); ?>"><img
                  src="<?php echo get_template_directory_uri().'/media/icon/tg.svg'; ?>"></a>
              <a href="<?php the_field('whatsapp', 'option'); ?>"><img
                  src="<?php echo get_template_directory_uri().'/media/icon/watsapp.svg'; ?>"></a>

              <?php
            }
            ?>
          </div>
          <div class="button nona">
            <a class="open_modals">Связаться с нами</a>
          </div>
        </div>
      </ul>
    </div>


    <div class="logo">
      <?php
      if (is_front_page() || is_page(98)) { ?>
        <a href="/" class="white-logo"><img src="<?php echo get_template_directory_uri().'/media/img/logo-white.svg'; ?>"></a>
        <a href="/" class="color-logo"><img src="<?php echo get_template_directory_uri().'/media/img/logo.svg'; ?>"></a>

        <?php
      } else { ?>

<!--        <a href="/"><img src="--><?php //echo get_template_directory_uri().'/media/img/logo-white.svg'; ?><!--"></a>-->
        <a href="/"><img src="<?php echo get_template_directory_uri().'/media/img/logo.svg'; ?>"></a>

        <?php
      }
      ?>
    </div>

    <div class="button nona dekstop">
      <a class="open_modals">Связаться с нами</a>
    </div>
    <div class="sety">
      <div class="tell">


        <?php
        if (is_front_page() || is_page(98)) { ?>

          <a href="<?php the_field('telegram', 'option'); ?>"><img class="tel_ga"
                                                                   src="http://forestpark.pro/wp-content/uploads/2019/07/tg.png"></a>
          <a href="<?php the_field('whatsapp', 'option'); ?>"><img class="what_a"
                                                                   src="http://forestpark.pro/wp-content/uploads/2019/07/watsapp.png"></a>

          <?php
        } else { ?>

          <a href="<?php the_field('telegram', 'option'); ?>"><img
              src="<?php echo get_template_directory_uri(); ?>/img/set.png"></a>
          <a href="<?php the_field('whatsapp', 'option'); ?>"><img
              src="<?php echo get_template_directory_uri(); ?>/img/set2.png"></a>

          <?php
        }
        ?>


        <div class="button nona">
          <a class="open_modals">Связаться с нами</a>
        </div>
      </div>
    </div>
  </div>

</header>
