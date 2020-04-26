$('.open_modals').click(function () {

  $('.modal').toggle('slide');

});

$('.fix-map-box').on('click', function () {
  console.log('aloha');
  $('.fix-map-modal').fadeIn('slow').css('display', 'flex');
});

$('.fix-map-modal__close').on('click', function () {
  $('.fix-map-modal').fadeOut('slow');
});

$('.owl').addClass('wow fadeIn');

$(window).scroll(function () {
  if ($(window).scrollTop() > 0) {
    $('body').addClass('newwolker');
  } else {
    $('body').removeClass('newwolker');

  }
});

$(document).ready(function () {
  // $('#askform').on('submit', function (e) {
  //   e.preventDefault();
  //   $.ajax({
  //     url: '/wp-content/themes/lesnay/send.php',
  //     type: 'POST',
  //     data: data,
  //     success: function( data ) {
  //       // $('#input-name-modal').val('');
  //       // $('#input-tel-modal').val('');
  //       // $('#input-name-modal').parent('.input-wrapper--input').removeClass('input-wrapper--input');
  //       // $('#input-tel-modal').parent('.input-wrapper--input').removeClass('input-wrapper--input');
  //       // sendAlert();
  //       console.log(data);
  //     }
  //   });
  // });
});


$(function () {
  $(window).paroller();
});


//$('.slide h2').addClass('wow fadeInLeft');

$('.image img').addClass('wow fadeInUp');

$(".tab_item").not(":first").hide();
$(".tab").click(function () {
  $(".tab").removeClass("active").eq($(this).index()).addClass("active");
  $(".tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active");


$('.knop_grid a').click(function () {
  $('.knop_grid a').removeClass('mid')
  $(this).toggleClass('mid');
});

var $inputItem = $(".js-inputWrapper");
$inputItem.length && $inputItem.each(function () {
  var $this = $(this),
    $input = $this.find(".formRow--input"),
    placeholderTxt = $input.attr("placeholder"),
    $placeholder;

  $input.after('<span class="placeholder">' + placeholderTxt + "</span>"),
    $input.attr("placeholder", ""),
    $placeholder = $this.find(".placeholder"),

    $input.val().length ? $this.addClass("active") : $this.removeClass("active"),

    $input.on("focusout", function () {
      $input.val().length ? $this.addClass("active") : $this.removeClass("active");
    }).on("focus", function () {
      $this.addClass("active");
    });
});


var $set = $('.tabs a');
$('.tabs').on('click', 'a', function () {
  var n = $set.index(this);
  $('.interactive path').css('opacity', '0');
  $('.interactive path:eq(' + n + ')').css('opacity', '1');
});

var $set = $('.bordik .checkbox');
$('.bordik').on('click', '.checkbox', function () {
  var n = $set.index(this);
  // $('.block_fon svg path').css('opacity','0');
  $('.block_fon svg path .son3').css('opacity', '0');
  $('.block_fon svg path .son2').css('opacity', '0');
  $('.block_fon svg path:eq(' + n + ')').toggleClass('karopass');
});


// $(document).ready(function () {
//   $('.owl-carousel').owlCarousel({
//     loop: false,
//     center: true,
//     margin: 10,
//     autoWidth: true,
//     // URLhashListener: true,
//     autoplayHoverPause: true,
//     // startPosition: 'URLHash',
//     navText: ["<img class='yow' src='http://сказкалесная.рф/wp-content/themes/lesnay/img/str5.png'>", "<img class='yow2' src='http://сказкалесная.рф/wp-content/themes/lesnay/img/str6.png'>"],/*Менять картинку*/
//     responsive: {
//       0: {
//         dots: false,
//         items: 1,
//         nav: false,
//         URLhashListener: false,
//         left: true,
//       },
//       600: {
//         dots: false,
//         items: 1,
//         nav: false,
//         URLhashListener: false,
//         center: false,
//       },
//
//       1000: {
//         items: 4,
//         nav: true,
//         dots: false  /* ТОЧКИ ВНИЗУ */
//       }
//     }
//   })
// });

$(".tab_item2").not(":first").hide();
$(".tab2").click(function () {
  $(".tab2").removeClass("active").eq($(this).index()).addClass("active");
  $(".tab_item2").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active");


$(function () {
  $('.checkbox').on('change', function () {
    if ($(this).prop('checked')) {
      $(this).removeClass('nonos');
    } else {
      $(this).toggleClass('nonos');
    }
  });
});


$(document).ready(function () {
  $('.owl-carousel2').owlCarousel({

    margin: 10,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    navText: ["<img src='http://сказкалесная.рф/wp-content/themes/lesnay/img/str5.png'>", "<img src='http://сказкалесная.рф/wp-content/themes/lesnay/img/str6.png'>"],/*Менять картинку*/
    responsive: {
      0: {
        dots: false,
        items: 1,
        nav: false,
      },
      600: {
        dots: false,
        items: 1,
        nav: false
      },

      1000: {
        items: 5,
        nav: false,
        loop: true,
        margin: 10,
        dots: false  /* ТОЧКИ ВНИЗУ */
      }
    }
  })
});


$(document).ready(function () {
  $('.owl-carousel3').owlCarousel({

    margin: 10,
    responsiveClass: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    navText: ["<img src='http://сказкалесная.рф/wp-content/themes/lesnay/img/str5.png'>", "<img src='http://сказкалесная.рф/wp-content/themes/lesnay/img/str6.png'>"],/*Менять картинку*/
    responsive: {
      0: {
        dots: false,
        items: 1,
        nav: false,
      },
      600: {
        dots: false,
        items: 1,
        nav: false
      },

      1000: {
        items: 1,
        nav: true,
        loop: true,
        margin: 10,
        dots: false  /* ТОЧКИ ВНИЗУ */
      }
    }
  })
});

$('.roof').click(function () {
  $('.show').addClass('dis_block');
  var glimg = $(this).find('.cat').attr('src');
  var plosh = $(this).find('.pl_all').text();
  console.log(plosh);
  var title = $(this).find('h3').text();
  var oneimg = $(this).find('.myone_img').attr('src');
  var kolvokom = $(this).find('.kol_komnat').text();
  var gal1 = $(this).find('.gal1').attr('src');
  var gal2 = $(this).find('.gal2').attr('src');
  var im_steny = $(this).find('.im_steny').attr('src');
  var im_fund = $(this).find('.im_fund').attr('src');

  $('.bok h3').text(title);
  $('.bok .pl1').text(plosh);
  $('.bok .pl2').text(kolvokom);
  $('.up .cat').attr('src', oneimg);
  $('.bok .pl3').attr('src', im_steny);
  $('.bok .pl4').attr('src', im_fund);
  $('.gold .gal1').attr('src', oneimg);
  $('.gold .gal2').attr('src', gal1);

  setTimeout(function () {
    $('.show').css('opacity', '1');
  }, 500);

});

$('.krest_mod').click(function () {
  $(this).parent().toggle('slide');
});


$('.krest').click(function () {

  $('.show').css('opacity', '0');
  setTimeout(function () {
    $('.show').removeClass('dis_block');
  }, 500);


});


$('.krest2').click(function () {
  $('.hov2').toggle('slider');
  $('.block_fon svg path').removeClass('otkluchka');
  $('.block_fon svg path').removeClass('sotkiactive');
});

$('.krest3').click(function () {
  $('.hov').toggle('slider');
  $('.block_fon svg path').removeClass('otkluchka');
  $('.block_fon svg path').removeClass('sotkiactive');
  $('.tooltop').remove();

})


$('.son2').click(function () {
  $('.block_fon svg path').addClass('otkluchka');
  $(this).addClass('sotkiactive');
  $(this).addClass('clickuchastok');
  var text = $(this).attr('data-name');
  var pl = $(this).attr('data-pl');
  var t = $(this).attr('data-text');
  $('.hov h2').text(text);
  $('.hov .green2 span').text(pl);
  $('.hov .opai').text(t);
  $('.hov').toggle('slider');
  var nomer = $(this).attr('data-name');
  var num = parseInt(nomer.replace(/\D+/g, ""));
  var top = $(this).get(0).getBoundingClientRect().top + pageYOffset + ($(this).get(0).getBoundingClientRect().height / 2) - 8;
  var left = $(this).get(0).getBoundingClientRect().left + ($(this).get(0).getBoundingClientRect().width / 2) - 8;
  $('header').after('<div class="tooltop" style="position:absolute; top:' + top + 'px; left:' + left + 'px;z-index: 9999;">' + num + '</div>');
  var infotext = $('.hov h2').html();
  $('.nominpute').val(infotext);


});


$('.son3').click(function () {
  $(this).addClass('clickuchastok');
  var text = $(this).attr('data-name');
  var pl = $(this).attr('data-pl');
  var t = $(this).attr('data-text');
  $('.hov2 h2').text(text);
  $('.hov2 .green2 span').text(pl);
  $('.hov2 .opai').text(t);
  $('.hov2').toggle('slider');
  if ($(this).hasClass('order_land')) {
    $('.hov2__link').html('этот участок уже забронировали');
  } else {
    $('.hov2__link').html('этот участок уже продан');
  }
})

$('body').on('click', '.fix-img-hover', function () {
  var text = $(this).attr('data-count');
  var pl = $(this).attr('data-pl');
  var t = $(this).attr('data-text');
  $('.hov h2').text('Участок # ' + text);
  $('.hov .green2 span').text(pl);
  $('.hov .opai').text(t);
  $('.hov').toggle('slider');
});

$(function () {
  $('#go').on('change', function () {
    if ($(this).prop('checked')) {
      $('.pass').removeClass('see');
    } else {
      $('.pass').toggleClass('see');
    }
  });
});


$(function () {
  $('#go2').on('change', function () {
    if ($(this).prop('checked')) {
      $('.pass').removeClass('see');
    } else {
      $('.pass2').toggleClass('see');
    }
  });
});

$(function () {
  $('#go3').on('change', function () {
    if ($(this).prop('checked')) {
      $('.pass').removeClass('see');
    } else {
      $('.pass3').toggleClass('see');
    }
  });
});


$(document).ready(function () {
  $('.owl-prev img').mouseover(function () {
    $(this).attr('src', 'http://сказкалесная.рф/wp-content/themes/lesnay/img/strelka.png');
    $(this).addClass('rotate');
    $(this).removeClass('gogogo');
  });
  $('.owl-prev img').mouseout(function () {
    $(this).attr('src', 'http://сказкалесная.рф/wp-content/themes/lesnay/img/str5.png');
    $(this).removeClass('rotate');
    $(this).addClass('gogogo');
  });

});


$(document).ready(function () {
  $('.owl-next img').mouseover(function () {
    $(this).attr('src', 'http://сказкалесная.рф/wp-content/themes/lesnay/img/strelka.png');
    $(this).addClass('rotate2');
    $(this).removeClass('gogogo2');
  });
  $('.owl-next img').mouseout(function () {
    $(this).attr('src', 'http://сказкалесная.рф/wp-content/themes/lesnay/img/str5.png');
    $(this).removeClass('rotate2');
    $(this).addClass('gogogo2');
  });

});


$('.button').hover(function () {
  $(this).find('a').toggleClass('sasa');
});


$('.knopka').hover(function () {
  $(this).find('a').toggleClass('sasa');
});


$('.knop').hover(function () {
  $(this).find('a').toggleClass('sasa');
});


$('.mini').click(function () {
  $('.comp').toggle('slider');
  $('.comp').toggleClass('graf');
  var img = $(this).find('img').attr('src');
  console.log(img);
  $('.nona').attr('src', img);
  var post_id = $(this).attr('data-ajax-param');
  ajaxurl = "/wp-admin/admin-ajax.php"
  var postData = {
    action: 'mypost',
    post_id: post_id,
  }
  $.post(ajaxurl, postData).done(function (result) {
    var title = result[0].post_title;
    var data = result[0].post_date;
    var text = result[0].post_content;
    $('.plusik').find('h3').text(title);
    $('.bob').find('p').text(data);
    $('.hers').html(text);

  });


});


$('.krest_up').click(function () {
  $('.comp').hide();
  $('.comp').removeClass('graf')
});

$('.gold img').click(function () {

  var dom = $(this).attr('src');
  $('.cat').css('opacity', '0');

  setTimeout(function () {

    $('.cat').css('opacity', '1');
    $('.cat').attr('src', dom);

  }, 200);

})


var menutop = $('.block2').offset().top;
$(window).scroll(function () {
  if ($(window).scrollTop() > menutop) {

    $('.timer_myspeed').countTo();

  }
});

$(window).scroll(function () {
  if ($('body').hasClass('page-template-page-home')) {

    if ($(window).scrollTop() > 150) {

      $('body').addClass('newwolker');
      // $('.logo').find('img').attr('src', 'http://forestpark.pro/wp-content/themes/lesnay/img/logo_ru.svg')
      $('.tel_ga').attr('src', 'http://forestpark.pro/wp-content/themes/lesnay/media/icon/tg.svg')
      $('.what_a').attr('src', 'http://forestpark.pro/wp-content/themes/lesnay/media/icon/watsapp.svg')


    } else {

      $('body').removeClass('newwolker');
      // $('.logo').find('img').attr('src', 'http://forestpark.pro/wp-content/uploads/2019/07/logoWhite.svg')
      $('.tel_ga').attr('src', 'http://forestpark.pro/wp-content/themes/lesnay/media/icon/tg-white.svg')
      $('.what_a').attr('src', 'http://forestpark.pro/wp-content/themes/lesnay/media/icon/watsapp-white.svg')

    }


  } else {

    $('body').removeClass('newwolker');

  }


});
