(function ($, root, undefined) {
  $(function () {
    //        'use strict';

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

    $(window).resize(function () {
      initIsotope();
    });

    function initIsotope() {
      if ($(".q4-gallery .items").length > 0) {
        console.log("init isotope");
        var $gallery = $(".q4-gallery .items").isotope({
          itemSelector: ".galleryitem",
          layoutMode: "masonry",
        });
      }
      if ($(".q4-news-isotope").length > 0) {
        var $gallery = $(".q4-news-isotope").isotope({
          itemSelector: ".q4-news-item",
          layoutMode: "masonry",
        });
      }
    }

    initIsotope();

    $(".read-more-tag").on("click", function (e) {
      e.preventDefault();
      var button_text = "mehr /";

      if (!$(this).hasClass("active")) {
        button_text = "weniger /";
      }

      if ($("body").hasClass("ru")) {
        button_text = "ДАЛЕЕ /";

        if (!$(this).hasClass("active")) {
          button_text = "меньше /";
        }
      }

      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).prev(".read-more").slideUp();
        $(this).find(".button-inner").text(button_text);
      } else {
        $(this).addClass("active");
        $(this).prev(".read-more").slideDown();
        $(this).find(".button-inner").text(button_text);
      }
    });

    $(".nav ul li").hover(
      function () {
        if (!isMobile()) {
          $(this)
            .addClass("hover")
            .find(".sub-menu-wrapper")
            .stop()
            .slideDown();
        }
      },
      function () {
        if (!isMobile()) {
          $(this)
            .removeClass("hover")
            .find(".sub-menu-wrapper")
            .stop()
            .slideUp();
        }
      }
    );

    $(".nav ul li.main-menu-item a").on("click", function (e) {
      if (isMobile()) {
        if (
          $(this).parent().hasClass("main-menu-item") &&
          $(this).next().hasClass("sub-menu-wrapper")
        ) {
          e.preventDefault();
        }
        if ($(this).parent().hasClass("open")) {
          $(this)
            .parent()
            .removeClass("open")
            .find(".sub-menu-wrapper")
            .stop()
            .slideUp();
        } else {
          if (
            $(this).parent().hasClass("main-menu-item") &&
            !$(this).parent().hasClass("open")
          ) {
            $(".nav ul li").removeClass("open");
            $(".sub-menu-wrapper").stop().slideUp();
            $(this)
              .parent()
              .addClass("open")
              .find(".sub-menu-wrapper")
              .stop()
              .slideDown();
          }
        }
      }
    });

    $("#menu-toggle input").on("click", function () {
      if ($(this).is(":checked")) {
        $(".nav-wrapper").stop().slideDown();
      } else {
        $(".nav-wrapper").stop().slideUp();
      }
    });

    $(window).on("resize", function () {
      if (!isMobile()) {
        $(".nav-wrapper").show();
      } else {
        if ($("#menu-toggle input").is(":checked")) {
          $(".nav-wrapper").show();
        } else {
          $(".nav-wrapper").hide();
        }
      }
      $(".sub-menu-wrapper").height("auto");
    });

    $(".slider.center").slick({
      // centerMode: true,
      // slidesToShow: 3,
      lazyLoad: "ondemand",
      // variableWidth: true,
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
          },
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
          },
        },
      ],
    });

    $(".slider.center").slickLightbox({
      src: "data-fullsize-img",
      itemSelector: ".slick-slide img",
    });

    $(document).on("scroll", function () {
      if (widthBelow(400)) {
        return;
      }
      if ($(document).scrollTop() > 100) {
        $("header").addClass("shrink");
        $(".wrapper-no-top-image").addClass("shrink");
      } else {
        $("header").removeClass("shrink");
        $(".wrapper-no-top-image").removeClass("shrink");
      }
    });

    // create deferred object
    var YTdeferred = $.Deferred();
    window.onYouTubeIframeAPIReady = function () {
      YTdeferred.resolve(window.YT);
    };

    var tag = document.createElement("script");
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    $(document).ready(function () {
      var video_id = $("#video-container").data("video-id");
      var isPlaylist = $("#video-container").data("playlist");
      var player;
      YTdeferred.done(function (YT) {
        if (isPlaylist) {
          player = new YT.Player("player", {
            height: "100%",
            width: "100%",
            playerVars: {
              listType: "playlist",
              list: video_id,
            },
          });
        } else {
          player = new YT.Player("player", {
            height: "100%",
            width: "100%",
            videoId: video_id,
          });
        }
      });

      $(".timecode-content").on("click", function () {
        if (
          isPlaylist &&
          $(this).data("video-id") &&
          $(this).data("video-id") !== ""
        ) {
          player.loadVideoById($(this).data("video-id"));
        }
        var timecode = $(this).data("timecode");
        var seconds = timecodeToSeconds(timecode);
        playerSeekTo(seconds);
      });

      function timecodeToSeconds(timecode) {
        var hms = timecode.split(":");

        var seconds = +hms[0] * 60 * 60 + +hms[1] * 60 + +hms[2];
        return seconds;
      }

      function playerSeekTo(seconds) {
        player.seekTo(seconds);
      }
    });
  });

  /*smoothscroll*/
  var keys = [37, 38, 39, 40];

  function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault) e.preventDefault();
    e.returnValue = false;
  }

  function keydown(e) {
    for (var i = keys.length; i--; ) {
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
      window.addEventListener("DOMMouseScroll", wheel, false);
    }
    window.onmousewheel = document.onmousewheel = wheel;
    document.onkeydown = keydown;
  }

  function enable_scroll() {
    if (window.removeEventListener) {
      window.removeEventListener("DOMMouseScroll", wheel, false);
    }
    window.onmousewheel = document.onmousewheel = document.onkeydown = null;
  }

  jQuery(function ($) {
    $('a[href*="#"]').click(function () {
      if (
        !$(this).parent().hasClass("vc_tta-panel-title") &&
        !$(this).parent().hasClass("vc_tta-tab") &&
        !$(this).hasClass("vc_carousel-control")
      ) {
        if (
          location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
          location.hostname == this.hostname
        ) {
          var target = $(this.hash);
          target = target.length
            ? target
            : $("[name=" + this.hash.slice(1) + "]");
          if (target.length) {
            disable_scroll();
            $("html, body").animate(
              {
                scrollTop: target.offset().top - 50,
              },
              1000,
              function () {
                enable_scroll();
              }
            );
            return false;
          }
        }
      }
    });
  });

  jQuery(function ($) {
    $(".js-acc-trigger").click(function () {
      $(this).toggleClass("active");
      $(this).next(".js-acc-content").slideToggle(300);
      $(this).find(".ctaArrow").toggleClass("ctaArrow-Up");
    });
  });

  /**
   * ZWEIKLICK YOUTUBE VIDEOS
   */
  $(document).ready(function () {
    if ($(".video_wrapper").length > 0) {
      $(".video_wrapper").each(function () {
        _wrapper = $(this);
        _wrapper
          .children(".video_trigger")
          .children(".button-container")
          .click(function () {
            var _trigger = $(this).parents(".video_trigger");
            _trigger.hide();
            _trigger
              .siblings(".video_layer")
              .show()
              .children("iframe")
              .attr(
                "src",
                "https://www.youtube-nocookie.com/embed/" +
                  _trigger.attr("data-source") +
                  "?rel=0&controls=1&showinfo=1&autoplay=1"
              );
          });
      });
    }
  });

  /**
   * COOKIE BANNER
   */
  $(function () {
    if (getCookie("cookie_consent") != "") {
      return;
    }

    $("#sliding-popup").animate({ bottom: 0 }, 800);

    $("footer").addClass("cookie-banner-open");

    $(".agree-button-container").on("click", function () {
      hideCookieBanner();
      setCookie("cookie_consent", "true", 365);
      _etracker.enableCookies("https://rf.vng.aliado.rocks/");
    });

    $(".decline-button-container").on("click", function () {
      hideCookieBanner();
      setCookie("cookie_consent", "false", 365);
      _etracker.disableCookies("https://rf.vng.aliado.rocks/");
    });
  });

  function hideCookieBanner() {
    $("#sliding-popup").animate(
      {
        bottom: "-1000px",
      },
      function () {
        $("#sliding-popup").hide();
        $("footer").removeClass("cookie-banner-open");
      }
    );
  }

  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == " ") {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  $(function () {
    //if pagination for pressreleases doesn't exist, return
    if ($(".pressrelease-overview-pagination-wrapper").length === 0) {
      return;
    }
    //if more than 5 pressreleases exist, hide everything but the first 5...
    if ($(".pressrelease-wrapper").length > 5) {
      $(".pressrelease-wrapper").slice(5).hide();
    } else {
      //...otherwise hide pagination
      $(".pressrelease-overview-pagination-wrapper").hide();
    }
    //hide previous button of pagination
    $(".pagination-prev").hide();
    var sliceStart = 0;
    var currentPage = 1;
    //on button click next page
    $(".pagination-next").on("click", function () {
      sliceStart += 5;
      currentPage++;
      //hide all pressreleases
      $(".pressrelease-wrapper").fadeOut();
      //show current 5 pressreleases
      $(".pressrelease-wrapper")
        .slice(sliceStart, sliceStart + 5)
        .fadeIn();
      //show previous button
      $(".pagination-prev").fadeIn();
      //if last page, hide next button
      if ($(".pressrelease-wrapper").length <= sliceStart + 5) {
        $(".pagination-next").fadeOut();
      }
      //update current page counter
      $(".current-page").html(currentPage);
    });

<<<<<<< HEAD
    //on button click previous page
    $(".pagination-prev").on("click", function () {
      sliceStart -= 5;
      currentPage--;
      //hide all pressreleases
      $(".pressrelease-wrapper").fadeOut();
      //show current 5 pressreleases
      $(".pressrelease-wrapper")
        .slice(sliceStart, sliceStart + 5)
        .fadeIn();
      //if first page, hide previous button
      if (sliceStart === 0) {
        $(".pagination-prev").fadeOut();
      }
      //if next button was invisible (because last page), show next button
      if (!$(".pagination-next").is(":visible")) {
        $(".pagination-next").fadeIn();
      }
      //update current page counter
      $(".current-page").html(currentPage);
    });
  });
})(jQuery, this);
=======
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

    $(function() {
        //if pagination for pressreleases doesn't exist, return
        if ($('.pressrelease-overview-pagination-wrapper').length === 0) {
            return;
        }
        //if more than 5 pressreleases exist, hide everything but the first 5...
        if ($('.pressrelease-wrapper').length > 5) {
            $('.pressrelease-wrapper').slice(5).hide();
        } else {
            //...otherwise hide pagination
            $('.pressrelease-overview-pagination-wrapper').hide();
        }
        //hide previous button of pagination
        $('.pagination-prev').hide();
        var sliceStart = 0;
        var currentPage = 1;
        //on button click next page
        $('.pagination-next').on('click', function() {
            sliceStart += 5;
            currentPage++;
            //hide all pressreleases
            $('.pressrelease-wrapper').fadeOut();
            //show current 5 pressreleases
            $('.pressrelease-wrapper').slice(sliceStart, sliceStart + 5).fadeIn();
            //show previous button
            $('.pagination-prev').fadeIn();
            //if last page, hide next button
            if ($('.pressrelease-wrapper').length <= sliceStart + 5) {
                $('.pagination-next').fadeOut();
            }
            $('.current-page').html(currentPage);
        });

        //on button click previous page
        $('.pagination-prev').on('click', function() {
            sliceStart -= 5;
            currentPage--;
            //hide all pressreleases
            $('.pressrelease-wrapper').fadeOut();
            //show current 5 pressreleases
            $('.pressrelease-wrapper').slice(sliceStart, sliceStart + 5).fadeIn();
            //if first page, hide previous button
            if (sliceStart === 0) {
                $('.pagination-prev').fadeOut();
            }
            //if next button was invisible (because last page), show next button
            if (!$('.pagination-next').is(':visible')) {
                $('.pagination-next').fadeIn();
            }
            $('.current-page').html(currentPage);

        });
    });

})(jQuery, this);
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
