/**
 * PARENT THEME SCRIPTS------------------------
 */
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

//edit smoothscroll to only work on menu links
jQuery(function($) {
    $('body:not(.home)').find('a[href*="#"]').not('a[data-vc-container]').not('#closemodal').click(function() {
        if ($(this).attr('href').includes('tombola-popup')) {
            return;
        }
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

/**
 * PARENT THEME SCRIPTS END------------------------
 */


jQuery(function($) {
    $('.news-single-show').click(function() {
        $(this).prev('.news-single-hidden').slideToggle('fast');
    });
    $('.timeline-single-image-wrap').click(function() {
        $('.timeline-single-text-wrap').removeClass('active');
        $(this).next('.timeline-single-text-wrap').addClass('active');
    });
});

/**
 * This is where the SVG-Magic happens
 */
jQuery(function($) {

    $(window).on("load", function() {
        drawTimelines();
    });


    var entries = $('.timeline-single');

    $.each(entries, function(index, value) {
        if ($(this).next('.timeline-single').length > 0) {
            var x1 = $(this).position().left + ($(this).find('img').width() / 2);
            var y1 = $(this).position().top + ($(this).find('img').height() / 2 - 10);
            var x2 = $(this).next('.timeline-single').position().left + ($(this).next('.timeline-single').find('img').width() / 2);
            var y2 = $(this).next('.timeline-single').position().top + ($(this).next('.timeline-single').find('img').height() / 2 - 10);
            drawTimeline(x1, y1, x2, y2);
        }
    });

    $(window).resize(function() {
        drawTimelines();
    });

    function drawTimelines() {
        $('#timeline').empty();
        $.each(entries, function(index, value) {
            if ($(this).next('.timeline-single').length > 0) {
                var x1 = $(this).position().left + ($(this).find('img').width() / 2);
                var y1 = $(this).position().top + ($(this).find('img').height() / 2 - 10);
                var x2 = $(this).next('.timeline-single').position().left + ($(this).next('.timeline-single').find('img').width() / 2);
                var y2 = $(this).next('.timeline-single').position().top + ($(this).next('.timeline-single').find('img').height() / 2 - 10);
                drawTimeline(x1, y1, x2, y2);
            }
        });
    }
});

var drawTimeline = function(x1, y1, x2, y2) {
    var svg = document.getElementById('timeline'),
        NS = svg.getAttribute('xmlns');

    var pt = svg.createSVGPoint(),
        svgP, circle;
    svgP = pt.matrixTransform(svg.getScreenCTM().inverse());

    line = document.createElementNS(NS, 'line');
    line.setAttributeNS(null, 'x1', x1);
    line.setAttributeNS(null, 'y1', y1);
    line.setAttributeNS(null, 'x2', x2);
    line.setAttributeNS(null, 'y2', y2);
    line.setAttributeNS(null, 'style', 'stroke:rgba(255,255,255,.7);stroke-width:2');
    svg.appendChild(line);

};

/**
 * CUSTOMIZE VC TABS
 */
jQuery(function($) {
    //hide all pages greater than 3
    var $tabs = $('.vc_tta-container').find('.vc_tta-tab');
    $('.vc_tta-tab:gt(2)').hide();

    //if more than 3 pages -> add next button
    if ($tabs.length > 3) {
        var $next = '<li class="vc_tta-tab next-page"><a><div class="arrow-right"></div></a></li>';
        $('.vc_tta-tabs-list').append($next);
        $('.vc_tta-tabs-list').attr('data-page', 1);
    }

    //next 3 pages
    $('.vc_tta-container').on('click', '.next-page', function() {
        var cur_page = parseInt($('.vc_tta-tabs-list').attr('data-page')); //current page
        var next_page = cur_page + 1; //next page

        var show_gt;
        var show_lt;

        //set next pages to show
        if (cur_page === 1) {
            show_gt = (next_page * 3) - 4;
            show_lt = next_page * 3;
        } else {
            show_gt = (next_page * 3) - 3;
            show_lt = next_page * 3 + 1;
        }

        //hide all pages, except nav-arrows
        $('.vc_tta-tab:not(".next-page"):not(".prev-page")').hide();
        //show relevant pages
        $('.vc_tta-tab:lt(' + show_lt + '):gt(' + show_gt + ')').show();
        //update page
        $('.vc_tta-tabs-list').attr('data-page', next_page);

        //if last pages, remove nav-arrow
        if (show_lt >= $tabs.length) {
            $('.next-page').remove();
        }

        //append "previous" nav-arrow
        var $prev = '<li class="vc_tta-tab prev-page"><a><div class="arrow-left"></div></a></li>';
        if ($('.vc_tta-tabs-list').find('.prev-page').length === 0) {
            $('.vc_tta-tabs-list').prepend($prev);
        }
    });

    //previous 3 pages
    $('.vc_tta-container').on('click', '.prev-page', function() {
        var cur_page = parseInt($('.vc_tta-tabs-list').attr('data-page')); //current page
        var prev_page = cur_page - 1; //previous page

        var show_gt;
        var show_lt;

        //set previous 3 pages to show
        if (cur_page === 1) {
            show_gt = (prev_page * 3) - 4;
            show_lt = prev_page * 3;
        } else {
            show_gt = (prev_page * 3) - 3;
            show_lt = prev_page * 3 + 1;
        }

        //update current page
        $('.vc_tta-tabs-list').attr('data-page', prev_page);

        //hide all pages, except nav-arrows
        $('.vc_tta-tab:not(".next-page"):not(".prev-page")').hide();
        //show relevant pages
        $('.vc_tta-tab:lt(' + show_lt + '):gt(' + show_gt + ')').show();

        //if first 3 pages -> remove "previous" nav-arrow
        if (show_gt <= 0) {
            $('.prev-page').remove();
        }
        //append "next" nav-arrow if necessary
        if ($('.vc_tta-tabs-list').find('.next-page').length === 0) {
            $('.vc_tta-tabs-list').append($next);
        }
    });

    //navigation links inside tab-module
    $('.vc_tta-container .wpb_wrapper a').on('click', function(e) {
        //get href
        var href = $(this).attr('href');
        //if href contains anchor -> find corresponding page and switch to it
        if (href.indexOf('#') >= 0) {
            e.preventDefault();
            href = trimChar(href, '/');
            $('.vc_tta-tabs-list').find('a[href="' + href + '"]').trigger('click');
        }
    });
});

/**
 *
 * @param string string
 * @param string charToRemove
 * @returns string
 */
function trimChar(string, charToRemove) {
    while (string.charAt(0) == charToRemove) {
        string = string.substring(1);
    }

    while (string.charAt(string.length - 1) == charToRemove) {
        string = string.substring(0, string.length - 1);
    }

    return string;
}

jQuery(function($) {
    $('a[href*="#"]').on('click', function() {
        if ($(this).attr('href').includes('popup')) {
            var popup_id = $(this).attr('href');
            var $popup = $(popup_id);
            $popup.show();
            $popup.animate({
                opacity: 1
            });
            if ($popup.find('.popup-close-button').length === 0) {
                var close_div = $('<div class="popup-close-button"><div class="bar bar-1"></div><div class="bar bar-2"></div></div>');
                $popup.children('.wpb_column').prepend(close_div);
            }
            $('body').css('overflow-y', 'hidden');
            $popup.addClass('active');
        }
    });

    $(document).mouseup(function(e) {
        if ($('.tombola-popup').hasClass('active')) {
            var container = $(".tombola-popup").children('.wpb_column');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                closePopup();
            }
        }

    });

    $('.wpb_column').on('click', '.popup-close-button', function() {
        closePopup();
    });

    function closePopup() {
        $('.tombola-popup').fadeOut('medium', function() {
            $(this).hide();
            $(this).removeClass('active');
        });
        $('body').css('overflow-y', 'scroll');
    }

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
});