(function($, root, undefined) {

    $(function() {

        //'use strict';

        function widthBelow(width) {
            if (window.innerWidth < width) {
                return true;
            } else {
                return false;
            }
        }


        function isMobile() {
            return widthBelow(992);
        }



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




    })(jQuery, this);
})

jQuery(document).ready(function($) {
    $('.mobile-control-button').on('click', function() {
        $('.header-menu').toggleClass('open');
        $('.header-menu ul').stop().slideToggle();
    });

    /**
     * LOAD MORE PROJECTS
     */
    var n = 5;
    $('.accordion-load-more-button').on('click', function() {
        $('.vc_tta-panel').slice(n, n + 5).slideDown();
        n += 5;
    });

    /**
     * LOAD MORE NEWS
     */
    var news_count = 3;
    $('.load-more-news-button').on('click', function() {
        $('.news-overview .newsteaser-container:nth-child(' + news_count + ')').slideDown();
        news_count++;
    });

    /**
     * INIT SLICK SLIDER
     */
    $('.slick-slider').slick({
        slidesToShow: 3,
    });

    $('.vc_tta-title-text').on('click', function() {
        if ($(this).parents('.vc_tta-panel').find('.slick-slider').length !== 0) {
            if ($(this).parents('.vc_tta-panel').find('.slick-slider').height() === 0) {
                $('.slick-slider').slick('refresh');
            }
        }
    });

    /**
     * SHARE ACTIONS CONTAINER
     */
    $('.share-action-control').on('click', function() {
        $(this).parent('.share-actions-container').toggleClass('closed');
    });

    /**
     * HIDE MOBILE MENU BUTTON IF NO MENU ENTRIES
     */
    if ($('.header-menu').find('ul').length === 0) {
        $('.header-menu').remove();
    }

    /**
     * BACK TO TOP BUTTON
     */
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('.back-to-top').addClass('active');
        } else {
            $('.back-to-top').removeClass('active');
        }
    });
<<<<<<< HEAD
});
=======
});
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
