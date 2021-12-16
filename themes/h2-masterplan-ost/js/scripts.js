jQuery(document).ready(function ($) {
  //Preload

  // $(window).load(function() {

  preloaderFadeOutTime = 3000;

  function hidePreloader() {
    var preloader = $(".spinner-wrapper");
    preloader.fadeOut(preloaderFadeOutTime);
  }

  // setTimeout(hidePreloader, 3000);

  hidePreloader();

  //		var cityHeight = $('#city').height();
  //		$('#city').parent().parent().parent().parent().next().next().css('margin-top', cityHeight).css('margin-top', '-=10px');
  //		$(window).resize(function () {
  //			var cityHeight = $('#city').height();
  //			$('#city').parent().parent().parent().parent().next().next().css("margin-top", cityHeight).css('margin-top', '-=10px');
  //		});
  // });

  //Menu
  $("#nav-button-main-navigation").click(function () {
    $(this).toggleClass("active");
    $("#mobile-menu").slideToggle(500, function () {
      $(this).toggleClass("active");
    });
    return false;
  });

  //Set fixed on scroll
  $(window).scroll(function (event) {
    var st = $(this).scrollTop();
    if ($(this).scrollTop() > 20) {
      $(".header-fix").addClass("scrolled");
      $(".header-bottom-border").addClass("scrolled");
    } else {
      $(".header-fix").removeClass("scrolled");
      $(".header-bottom-border").removeClass("scrolled");
    }

    //TOP
    if ($(this).scrollTop() > 50) {
      $(".scrolltotop").fadeOut("slow");
    } else {
      $(".scrolltotop").fadeIn("slow");
    }
  });
  $("#top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  //Submenu
  $(".submenulink-item a").click(function () {
    var value = $(this).attr("href");
    $("html")
      .find("div" + value)
      .addClass("active");
  });

  // Cache selectors
  var lastId,
    subMenu = $(".subpagemenu-wrapper"),
    subMenuHeight = subMenu.outerHeight() + 150,
    // All list items
    menuItems = subMenu.find(".submenulink-item a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function () {
      var item = $($(this).attr("href"));
      if (item.length) {
        return item;
      }
    });

  // Bind to scroll
  $(window).scroll(function () {
    // Get container scroll position
    var fromTop = $(this).scrollTop() + subMenuHeight;
    // Get id of current scroll item
    var cur = scrollItems.map(function () {
      if ($(this).offset().top < fromTop) return this;
    });
    // Get the id of the current element
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";
    if (lastId !== id) {
      lastId = id;
      // Set/remove active class
      menuItems
        .parent()
        .removeClass("active")
        .end()
        .filter("[href='#" + id + "']")
        .parent()
        .addClass("active");
    }
  });

  //Goto top
  $("#top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
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
});
