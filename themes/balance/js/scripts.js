jQuery(document).ready(function($) {
    //Preload

<<<<<<< HEAD
    // $(window).load(function() {
=======

    $(window).load(function() {

>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271

        $(window).resize(function() {
            initIsotope();
        });

        function initIsotope() {
            if ($('.q4-gallery .items').length > 0) {
                var $gallery = $('.q4-gallery .items').isotope({
                    itemSelector: '.galleryitem',
                    layoutMode: 'masonry'
                });
            }
            if ($('.q4-news-isotope').length > 0) {
                var $gallery = $('.q4-news-isotope').isotope({
                    itemSelector: '.q4-news-item',
                    layoutMode: 'masonry'
                });
            }
        }

        initIsotope();

<<<<<<< HEAD
        preloaderFadeOutTime = 3000;
=======
        preloaderFadeOutTime = 2000;
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271

        function hidePreloader() {
            var preloader = $('.spinner-wrapper');
            preloader.fadeOut(preloaderFadeOutTime);
        }
<<<<<<< HEAD

        // setTimeout(hidePreloader, 3000);


=======
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
        hidePreloader();



        //		var cityHeight = $('#city').height();
        //		$('#city').parent().parent().parent().parent().next().next().css('margin-top', cityHeight).css('margin-top', '-=10px');
        //		$(window).resize(function () {
        //			var cityHeight = $('#city').height();
        //			$('#city').parent().parent().parent().parent().next().next().css("margin-top", cityHeight).css('margin-top', '-=10px');
        //		});
<<<<<<< HEAD
    // });
=======
    });
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271

    //Map
    $('.map-item .map-marker').click(function() {
        closeAllMapItems();
        $(this).addClass('inactive');
        $(this).parents('.map-item').toggleClass('active');
        $(this).parents('.map-item').find('.map-item-content-wrap').toggleClass('active');
        $(this).parents('.map-item').find('.map-item-content-wrap h2').toggleClass('active');
        $(this).parents('.map-item').find('.map-item-content-wrap p').toggleClass('active');
        $(this).parents('.map-item').find('.map-item-content-wrap div').toggleClass('active');
        //Netzkarte an
        $('#netztoggler').removeClass('inactive');
        $('#city').removeClass('inactive');
    });
    $('.map-item-close').click(function(e) {
        $(this).parent().prev().removeClass('inactive');
        e.preventDefault();
        closeAllMapItems();
    });

    function closeAllMapItems() {
        $('.map-item').removeClass('active');
        $('.map-item .map-marker.inactive').removeClass('inactive');
        $('.map-item').find('.map-item-content-wrap').removeClass('active');
        $('.map-item').find('.map-item-content-wrap h2').removeClass('active');
        $('.map-item').find('.map-item-content-wrap p').removeClass('active');
        $('.map-item').find('.map-item-content-wrap div').removeClass('active');
        if ($('.map-item').hasClass('active')) {}
    }

    //Netzkarte Toggle
    $('#netztoggler').click(function() {
        $(this).toggleClass('inactive');
        $('#city').toggleClass('inactive');
    });

    //Yellow with Image
    $('.yellow').each(function() {
        console.log('Find class yellow');
        if ($(this).children().children().children().children().hasClass('wpb_single_image')) {
            console.log('Find class single image');
            console.log(this)
            $(this).addClass('hello');
        }
    });

    //Add ClassTo Next ACC Element
    $('div').each(function() {
        if ($(this).hasClass('grey')) {
            $(this).next().next().addClass('greytext');
        }
    });

    //Menu
    $('#nav-button-main-navigation').click(function() {
        $(this).toggleClass('active');
        $('#mobile-menu').slideToggle(500, function() {
            $(this).toggleClass('active');
        });
        return false;
    });

    /*
    $('.mobile-nav-button').click(function () {
    	$(".menu-main-container-mobile").slideToggle("slow", function () {
    	});
    	$("i", this).toggleClass("fa-bars fa-times");
    });
    */

    //Set fixed on scroll
    $(window).scroll(function(event) {
        var st = $(this).scrollTop();
        /*
        if ($(this).scrollTop() > 10) {
        	$('#city').parent().parent().parent().parent().nextAll().addClass('youhavescrolled').css('z-index', '999');
        	$('header').css('z-index', '1000');
        	$('footer').css('z-index', '1001');
        	$('scrolltotop').css('z-index', '1001');
        } else {
        	$('#city').parent().parent().parent().parent().nextAll().removeClass('youhavescrolled').css('z-index', '0');
        	$('header').css('z-index', '9');
        	$('footer').css('z-index', '9');
        	$('scrolltotop').css('z-index', '99');
        }
        */
        if ($(this).scrollTop() > 20) {
            $('.header-fix').addClass('scrolled');
            $('.header-bottom-border').addClass('scrolled');
        } else {
            $('.header-fix').removeClass('scrolled');
            $('.header-bottom-border').removeClass('scrolled');
        }
        if ($(this).scrollTop() > 100) {
            $('.subpagemenu-wrapper').addClass('active');
            $('main').addClass('margin');
            //$('.header-fix.scrolled').addClass('small');
        } else {
            $('.subpagemenu-wrapper').removeClass('active');
            $('main').removeClass('margin');
            //$('.header-fix.scrolled').removeClass('small');
        }

        /*
        if ($(this).scrollTop() > 700) {
        	$('#city').css('z-index', '-1');
        } else {
        	$('#city').css('z-index', '1');
        }
        */
        //TOP
        if ($(this).scrollTop() > 50) {
            $('.scrolltotop').fadeOut('slow');
        } else {
            $('.scrolltotop').fadeIn('slow');
        }
    });
    $('#top').click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    //Submenu
    $('.submenulink-item a').click(function() {
        var value = $(this).attr("href");
        $('html').find('div' + value).addClass("active");
    });

    // Cache selectors
    var lastId,
        subMenu = $(".subpagemenu-wrapper"),
        subMenuHeight = subMenu.outerHeight() + 150,
        // All list items
        menuItems = subMenu.find(".submenulink-item a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function() {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    // Bind to scroll
    $(window).scroll(function() {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + subMenuHeight;
        // Get id of current scroll item
        var cur = scrollItems.map(function() {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";
        if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
                .parent().removeClass("active")
                .end().filter("[href='#" + id + "']").parent().addClass("active");
        }
    });

    //Goto top
    $('#top').click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    //Accordion
    $('.referenz i').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).parent().parent().next('.text').toggleClass('active');
    });
    $('.acc-opener').on('click', function(e) {
        e.preventDefault();
        $(this).find('i').toggleClass('active');
        $(this).parent().next().next().toggleClass('active');
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
<<<<<<< HEAD
});
=======
});
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
