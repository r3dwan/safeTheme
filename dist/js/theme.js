let ajax_url = myAjax.ajaxurl;
var randomstring = Math.random().toString(36).slice(-8);
if (document.querySelector('#account_password')) {
  document.querySelector('#account_password').value = randomstring;
}
// Footer accordion

(function ($) {
  $(document).on('click', '.accordion', function () {
    let panels = document.querySelectorAll('.panel');
    panels.forEach(element => {
      element.style.maxHeight = null;
    });
    setTimeout(() => {
      if (!$(this).hasClass('active')) {
        this.nextElementSibling.style.maxHeight = null;
      }
      $('.accordion').not(this).removeClass('active');
    }, 100);
    this.classList.toggle('active');
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });

  // $(document).ready(function(){
  //   AOS.init({
  //       once: true
  //   })
  // }) 

  var wpcf7Elm = document.querySelector('.wpcf7');
  (function ($) {
    if (wpcf7Elm) {
      $('.wpcf7-submit').on('click', function () {
        if ($('#hear-about').val() == '') {
          $('#hear-about').addClass('wpcf7-not-valid');
        } else {
          $('#hear-about').removeClass('wpcf7-not-valid');
        }
        if ($('#contact-reason').val() == '') {
          $('#contact-reason').addClass('wpcf7-not-valid');
        } else {
          $('#contact-reason').removeClass('wpcf7-not-valid');
        }
        $('.wpcf7-submit').val('Submitting...');
      });
      wpcf7Elm.addEventListener('wpcf7mailfailed', function (event) {
        $('.wpcf7-submit').val('Submit');
      }, false);
      wpcf7Elm.addEventListener('wpcf7invalid', function (event) {
        $('.wpcf7-submit').val('Submit');
      }, false);
      wpcf7Elm.addEventListener('wpcf7mailsent', function (event) {
        $('.wpcf7-submit').val('Submit');
        $('#contact-page-form-container').remove();
        $('.remove-on-sent').remove();
        $('#contact-page-success-container').css('display', 'flex');
        setTimeout(() => {
          $('#contact-page-success-container').css('opacity', '1');
        }, 200);
      }, false);
    }
  })(jQuery);
  $('.custom_dropdown').on('click', function () {
    $(this).toggleClass('active');
    $(this).next().toggleClass('active');
  });
  let all_links = document.querySelectorAll('a');
  if (all_links) {
    all_links.forEach(elem => {
      if (!elem.getAttribute('href').includes('safetrafikskola') && !elem.getAttribute('href').includes('wordpress-957741-3340829.cloudwaysapps.com') && !elem.getAttribute('href').includes('tel:') && !elem.getAttribute('href').includes('mailto:')) {
        elem.setAttribute('target', '_blank');
      }
    });
  }
  $('a').on('click', function (e) {
    var scroll = new SmoothScroll();
    if ($(this).prop('href').includes('#go-to-services')) {
      e.preventDefault();
      let offset_top = $('.product-cards').offset().top;
      scroll.animateScroll(offset_top - 60);
    }
    if ($(this).prop('href').includes('#to-fifty-fifty')) {
      e.preventDefault();
      let offset_top = $('.fifty-fifty').offset().top;
      scroll.animateScroll(offset_top - 60);
    }
  });
  let all_head_links = document.querySelectorAll('header a[href="#"]');
  all_head_links.forEach(elem => {
    elem.setAttribute('href', 'javascript:void(0)');
    elem.setAttribute('target', '');
  });
  if (document.querySelector('.woocommerce-form-login') || document.querySelector('.woocommerce-ResetPassword')) {
    $('.woocommerce').addClass('direction_column');
    $('.woocommerce').addClass('login_page');
  }
})(jQuery);
function generatePassword() {
  var length = 12,
    charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
    retVal = "";
  for (var i = 0, n = charset.length; i < length; ++i) {
    retVal += charset.charAt(Math.floor(Math.random() * n));
  }
  return retVal;
}
if (document.querySelector('#account_password')) {
  document.querySelector('#account_password').value = generatePassword();
}
(function ($) {
  document.addEventListener('wpcf7submit', function (event) {
    if ('727' == event.detail.contactFormId || '668' == event.detail.contactFormId) {
      $('button[type="submit"]').html('Submitting...');
      var number = event.detail.inputs[0].value;
      var formData = {
        action: 'handle_api',
        // AJAX action name
        number: number // Get the phone number from the form
      };

      $.ajax({
        type: 'POST',
        url: myAjax.ajaxurl,
        data: formData,
        success: function (response) {
          console.log(response);
          $('button[type="submit"]').html('Bli uppringd');
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error(textStatus, errorThrown);
          $('button[type="submit"]').html('Bli uppringd');
        }
      });
    }
  }, false);
})(jQuery);
// Headroom INIT
var headroom = new Headroom(document.querySelector("#header-desktop"), {
  offset: 0,
  tolerance: {
    up: 10,
    down: 0
  }
});
headroom.init();
(function ($) {
  if (!document.querySelector('body').classList.contains('home')) {
    $('#header-desktop').addClass('make-generic');
  }
  $('.close_search').on('click', function () {
    $(this).removeClass('active');
    $('.search_icon').addClass('active');
    $('.search_holder').removeClass('active');
    $('.overlay').removeClass('active');
  });
  $('.search_icon').on('click', function () {
    $(this).removeClass('active');
    $('.close_search').addClass('active');
    $('.search_holder').addClass('active');
    $('.overlay').addClass('active');
  });
  $('.sub-menu a').append('<svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.904459 0L6 5.5L0.904459 11L0 10.0237L4.19108 5.5L0 0.97625L0.904459 0Z" fill="#100D23"/></svg>');
  $('#menu-main-menu .menu-item-has-children > a').append('<svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 0.904459L5.5 6L0 0.904459L0.97625 0L5.5 4.19108L10.0238 0L11 0.904459Z" fill="white"/></svg>');
  $('.ham').on('click', function () {
    $('.ham').toggleClass('active');
    $('.navigation_container').toggleClass('active');
    $('.sticky_mobile_header').toggleClass('hide');
  });
  $('.navigation_container .menu-item-has-children').on('click', function () {
    $(this).toggleClass('active');
  });
  if ($(window).width() < 1230) {
    $('.menu-item-has-children > a').attr('href', 'javascript:void(0)');
    $('.menu-item-has-children > a').addClass('accordion');
    $('.menu-item-has-children > .sub-menu').addClass('panel');
  }
  $('.close_header').on('click', function () {
    $('.sticky_mobile_header').addClass('hide');
    localStorage.setItem('hide_sticky_header', 'true');
    setTimeout(() => {
      $('.sticky_mobile_header').remove();
    }, 500);
  });
  if (localStorage.getItem('hide_sticky_header') == 'true') {
    $('.sticky_mobile_header').addClass('hide');
    setTimeout(() => {
      $('.sticky_mobile_header').remove();
    }, 500);
  }
  function getMobileOperatingSystem() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

    // Windows Phone must come first because its UA also contains "Android"
    if (/windows phone/i.test(userAgent)) {
      return "Windows Phone";
    }
    if (/android/i.test(userAgent)) {
      return "Android";
    }

    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
      return "iOS";
    }
    return "unknown";
  }
  $('.app_download_btn').on('click', function () {
    if (getMobileOperatingSystem() == 'Android') {
      window.location.href = document.querySelector('#playstore_link').value;
    }
    if (getMobileOperatingSystem() == 'iOS') {
      window.location.href = document.querySelector('#appstore_link').value;
    }
  });
})(jQuery);
(function ($) {
  $('[data-target-url]').on('click', function () {
    let target_url = $(this).data('target-url');
    $('.video-modal video').attr('src', target_url);
    $('.video-modal').addClass('active');
    $('.video-modal video').get(0).play();
  });
  $('.modal-close').on('click', function () {
    $('.video-modal').removeClass('active');
    var video = $('.video-modal video').get(0);
    video.currentTime = 0;
    video.pause();
  });
  $(document).on('click', function (e) {
    if (e.target.classList.contains('video-modal')) {
      $('.video-modal').removeClass('active');
      var video = $('.video-modal video').get(0);
      video.currentTime = 0;
      video.pause();
    }
  });
})(jQuery);
// Carousels

(function ($) {
  document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.reviews')) {
      const reviews_carousel = new Splide('.reviews .splide', {
        type: 'loop',
        arrows: false,
        pagination: false,
        speed: 800,
        gap: '80px',
        perPage: 4,
        breakpoints: {
          1200: {
            perPage: 3,
            gap: '20px'
          },
          768: {
            perPage: 2
          },
          600: {
            perPage: 1
          }
        }
      });
      reviews_carousel.mount();
    }
  });
})(jQuery);