jQuery(window).load(function($) {
    jQuery('.logo, .teaser, .scroll, .section-start-img').addClass('active');
});

jQuery(function($) {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.scroll').removeClass('active');
            $('.back-to-top').addClass('active');
        } else {
            $('.back-to-top').removeClass('active');
        }
    });
    /**
     * COOKIE BANNER
     */
    $(function() {
        if (getCookie('cookie_consent') != "") {
            return;
        }

        $('#sliding-popup').animate({ 'bottom': 0 }, 800);

        $('footer').addClass('cookie-banner-open');

        $('.agree-button-container').on('click', function() {
            hideCookieBanner();
            setCookie('cookie_consent', 'true', 365);
            _etracker.enableCookies('https://rf.vng.aliado.rocks/');
        });

        $('.decline-button-container').on('click', function() {
            hideCookieBanner();
            setCookie('cookie_consent', 'false', 365);
            _etracker.disableCookies('https://rf.vng.aliado.rocks/');
        });
    })

    function hideCookieBanner() {
        $('#sliding-popup').animate({
            bottom: '-1000px'
        }, function() {
            $('#sliding-popup').hide();
            $('footer').removeClass('cookie-banner-open');
        });
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
});

/**
 * ZWEIKLICK YOUTUBE VIDEOS
 */
$(document).ready(function() {
    if ($('.video_wrapper').length > 0) {
        $('.video_wrapper').each(function() {
            _wrapper = $(this);
            _wrapper.children('.video_trigger').children('.button-container').click(function() {
                var _trigger = $(this).parents('.video_trigger');
                _trigger.hide();
                _trigger.siblings('.video_layer').show().children('iframe').attr('src', 'https://www.youtube-nocookie.com/embed/' + _trigger.attr('data-source') + '?rel=0&controls=1&showinfo=1&autoplay=1');
            });
        });
    }
});

jQuery(function($) {

    $('.btn-contact').click(function() {
        ga('send', 'event', 'Interaktion', 'Kontaktbutton geklickt');
    });
    $('.btn-download').click(function() {
        ga('send', 'event', 'Interaktion', 'Infoflyer angezeigt');
    });
    $('.acc-trigger').click(function() {
        var clickedAcc = $(this).parents('.acc-wrap');
        var openAccs = $(this).parents('section').find('.acc-open');
        $(this).parents('.acc-wrap').toggleClass('acc-open');
        $(this).next('.acc-content').stop().slideToggle();

        /*$.each(openAccs, function (index, value) {
        	if (clickedAcc !== $(this)) {
        		$(this).removeClass('acc-open');
        		$(this).find('.acc-content').slideUp();
        	}
        });*/

    });
});

jQuery(document).on('ready', function($) {
    var winHeight = jQuery(window).height(),
        docHeight = jQuery(document).height(),
        progressBar = jQuery('progress'),
        max, value;

    max = docHeight - winHeight;
    progressBar.attr('max', max);

    jQuery(document).on('scroll', function() {
        value = jQuery(window).scrollTop();

        progressBar.attr('value', value);
    });
});

jQuery(window).on('resize', function() {
    progressBar = jQuery('progress');
    winHeight = jQuery(window).height(),
        docHeight = jQuery(document).height();

    max = docHeight - winHeight;
    progressBar.attr('max', max);

    value = jQuery(window).scrollTop();
    progressBar.attr('value', value);
});

/*smoothscroll*/
var keys = [37, 38, 39, 40];

function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
        e.preventDefault();
    e.returnValue = false;
}

function keydown(e) {
    for (var i = keys.length; i--;) {
        if (e.keyCode === keys[i]) {
            preventDefault(e);
            return;
        }
    }
}

function wheel(e) {
    preventDefault(e);
}

function disable_scroll() {
    if (window.addEventListener) {
        window.addEventListener('DOMMouseScroll', wheel, false);
    }
    window.onmousewheel = document.onmousewheel = wheel;
    document.onkeydown = keydown;
}

function enable_scroll() {
    if (window.removeEventListener) {
        window.removeEventListener('DOMMouseScroll', wheel, false);
    }
    window.onmousewheel = document.onmousewheel = document.onkeydown = null;
}

jQuery(function($) {
    $('a[href*="#"]').not('a[data-vc-container]').not('#closemodal').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                disable_scroll();
                $('html, body').animate({
                    scrollTop: target.offset().top - 50
                }, 1000, function() {
                    enable_scroll();
                });
                return false;
            }
        }
    });
});

jQuery(function($) {
    $('.nav-button').click(function() {
        $('.main-navigation').toggleClass('active');
        $(this).toggleClass('active');
        $(this).find('.stripe').delay(300).toggleClass('inactive');
        $(this).find('.stripe').delay(300).toggleClass('active');
        if ($(window).width() < 768 - getScrollbarWidth()) {
            $('body').toggleClass('overflow-hidden');
        }
    });
    $('.nav-link').click(function() {
        console.log(1)
        if ($(window).width() < 768 - getScrollbarWidth()) {
            $('.main-navigation').removeClass('active');
            $('body').removeClass('overflow-hidden');
            $('.nav-button').removeClass('active');
            $('.nav-button').find('.stripe').delay(300).removeClass('active');
            $('.nav-button').find('.stripe').delay(300).addClass('inactive');
        }
    });
});


function getScrollbarWidth() {
    var outer = document.createElement("div");
    outer.style.visibility = "hidden";
    outer.style.width = "100px";
    document.body.appendChild(outer);

    var widthNoScroll = outer.offsetWidth;
    // force scrollbars
    outer.style.overflow = "scroll";

    // add innerdiv
    var inner = document.createElement("div");
    inner.style.width = "100%";
    outer.appendChild(inner);

    var widthWithScroll = inner.offsetWidth;

    // remove divs
    outer.parentNode.removeChild(outer);

    return widthNoScroll - widthWithScroll;
}