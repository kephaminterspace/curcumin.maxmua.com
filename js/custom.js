$(document).ready(function() {
    "use strict";
    $(window).on('load', function() {
        $(".loader-inner").fadeOut();
        $(".loader").fadeOut("slow");
    });
    $(window).on('scroll', function() {
        var b = $(window).scrollTop();
        if (b > 60) {
            $(".navbar").addClass("top-nav-collapse");
        } else {
            $(".navbar").removeClass("top-nav-collapse");
        }
    });
    $('.nav-2').affix({
        offset: {
            top: $('.top-bar').height()
        }
    });
    $('a.smooth-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 40
        }, 1000);
        event.preventDefault();
    });
    $('.package-toggle').each(function() {
        $(this).change(function() {
            var curr_class = '.' + $(this).attr('id');
            var price = $(this).attr('data-price');
            var price_box = $('.pricing-table li.price span');
            $(curr_class).toggleClass('active');
            if (price) {
                if ($(curr_class).hasClass('active')) {
                    price_box.html(parseInt(price_box.html(), 10) + parseInt(price, 10));
                } else {
                    price_box.html(parseInt(price_box.html(), 10) - parseInt(price, 10));
                }
            }
        });
    });
    var offset = 300,
        offset_opacity = 1200,
        scroll_top_duration = 700,
        $back_to_top = $('.top');
    $(window).on('scroll', function() {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('is-visible'): $back_to_top.removeClass('is-visible fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('fade-out');
        }
    });
    $back_to_top.on('click', function(event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0
        }, scroll_top_duration);
    });
    new WOW().init();
    $('.navbar-nav>li>a').on('click', function() {
        $('#navbar-collapse').removeClass("in").addClass("collapse");
    });
    // $('.video-play').vide("images/video/video", {
    //     posterType: "jpg"
    // });
    // $('.mp-singleimg').magnificPopup({
    //     type: 'image'
    // });
    $('.mp-gallery').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    // $('.mp-iframe').magnificPopup({
    //     type: 'iframe'
    // });
    if ($('.counter').length) {
        var o = $('.counter'),
            cc = 1;
        $(window).on('scroll', function() {
            var elemPos = o.offset().top,
                elemPosBottom = o.offset().top + o.height(),
                winHeight = $(window).height(),
                scrollToElem = elemPos - winHeight,
                winScrollTop = $(this).scrollTop();
            if (winScrollTop > scrollToElem) {
                if (elemPosBottom > winScrollTop) {
                    if (cc < 2) {
                        cc = cc + 2;
                        o.countTo();
                    }
                }
            }
        });
    }
    $('.features-tab .tab-title').on('click', function(e) {
        if (!$(this).hasClass('current')) {
            $('.tab-title').removeClass('out');
            $('.tab-title.current').addClass('out');
            $('.features-tab .tab-title').removeClass('current');
            $(this).addClass('current');
        }
        e.preventDefault();
    });

    if ($('.countdown').length) {
        $(".countdown").jCounter({
            date: "16 december 2016 9:00:00",
            timezone: "Europe/London",
            format: "dd:hh:mm:ss",
            twoDigits: 'on',
            serverDateSource: "php/dateandtime.php",
            fallback: function() {
                console.log("Count finished!")
            }
        });
    }
    if ($('.map-container').length) {
        $('.map-container').on('click', function() {
            $('.map-iframe').css("pointer-events", "auto");
        });
        $(".map-container").on('mouseleave', function() {
            $('.map-iframe').css("pointer-events", "none");
        });
    }

    var $ticketSelected = $('.ticket-selection .item-price');
    $ticketSelected.on('click', function(event) {
        $ticketSelected.removeClass('active');
        $(this).addClass('active');
        $('#ticketForm input[name="ticket"]').val($(this).find('h4').text() + ' Ticket - Cost: ' + $(this).find('.amount').text());
    });
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style');
        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
        document.querySelector('head').appendChild(msViewportStyle);
    }
});