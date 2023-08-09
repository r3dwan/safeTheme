// Headroom INIT
var headroom = new Headroom(document.querySelector("#header-desktop"), {
offset: 0,
    tolerance: {
        up: 10,
        down: 0,
    },
});
headroom.init();

( function( $ ) {

    if(!document.querySelector('body').classList.contains('home')){
        $('#header-desktop').addClass('make-generic');
    }

    $('.close_search').on('click', function(){
        $(this).removeClass('active');
        $('.search_icon').addClass('active');
        $('.search_holder').removeClass('active');
        $('.overlay').removeClass('active');
    })
    $('.search_icon').on('click', function(){
        $(this).removeClass('active');
        $('.close_search').addClass('active');
        $('.search_holder').addClass('active');
        $('.overlay').addClass('active');
    })

    $('.sub-menu a').append('<svg width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.904459 0L6 5.5L0.904459 11L0 10.0237L4.19108 5.5L0 0.97625L0.904459 0Z" fill="#100D23"/></svg>');
    $('#menu-main-menu .menu-item-has-children > a').append('<svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 0.904459L5.5 6L0 0.904459L0.97625 0L5.5 4.19108L10.0238 0L11 0.904459Z" fill="white"/></svg>');


    $('.ham').on('click', function(){
        $('.ham').toggleClass('active');
        $('.navigation_container').toggleClass('active');
        $('.sticky_mobile_header').toggleClass('hide');
    })

    $('.navigation_container .menu-item-has-children').on('click', function(){
        $(this).toggleClass('active');
    })

    if($(window).width() < 1230){
        $('.menu-item-has-children > a').attr('href', 'javascript:void(0)')
        $('.menu-item-has-children > a').addClass('accordion');
        $('.menu-item-has-children > .sub-menu').addClass('panel');
    }

    $('.close_header').on('click', function(){
        $('.sticky_mobile_header').addClass('hide');
        localStorage.setItem('hide_sticky_header', 'true');
        setTimeout(() => {
            $('.sticky_mobile_header').remove();
        }, 500);
    })

    if(localStorage.getItem('hide_sticky_header') == 'true'){
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

    $('.app_download_btn').on('click', function(){
        if(getMobileOperatingSystem() == 'Android'){
            window.location.href = document.querySelector('#playstore_link').value;
        }
        if(getMobileOperatingSystem() == 'iOS'){
            window.location.href = document.querySelector('#appstore_link').value;
        }
    })

} )( jQuery );