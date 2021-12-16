<<<<<<< HEAD
(function ($, root, undefined) {
  $(document).ready(function () {
    "use strict";

    /**
     * debounce so filtering doesn't happen every millisecond
     *
     * @param {type} fn
     * @param {type} threshold
     * @returns {Function}
     */
    function debounce(fn, threshold) {
      var timeout;
      return function debounced() {
        if (timeout) {
          clearTimeout(timeout);
        }

        function delayed() {
          fn();
          timeout = null;
        }

        timeout = setTimeout(delayed, threshold || 100);
      };
    }

    /** Navbar **/

    $("#menu-button").click(function () {
      $(".bar-container").toggleClass("active");
      $(".menu-overlay").toggleClass("active");
      $(".menu-container").toggleClass("open");
    });

    /** VNG Slider **/
    $(".slider").each(function () {
      var slider = $(this);
      var elements = slider.find("ul li");
      var slideCount = elements.length;
      var slideWidth = slider.width();
      var sliderUlWidth = slideCount * slideWidth;

      slider.find("ul").width(sliderUlWidth);
      if (slideCount > 1) slider.find("ul").css({ marginLeft: -slideWidth });

      slider.find("ul li").width(slideWidth);

      if (slideCount <= 1) return;

      slider.find("ul li:last-child").prependTo(slider.find("ul"));

      slider.find(".slider-btn-left").click(function () {
        moveLeft(slider, slideWidth);
      });

      slider.find(".slider-btn-right").click(function () {
        moveRight(slider, slideWidth);
      });

      $(window).on(
        "resize",
        debounce(function () {
          sliderUlWidth = slideCount * slideWidth;
          slideWidth = slider.width();
          if (slideCount > 1)
            slider.find("ul").css({ marginLeft: -slideWidth });
          slider.find("ul").width(sliderUlWidth);
          slider.find("ul li").width(slideWidth);
        })
      );
    });

    function moveLeft(slider, slideWidth) {
      slider
        .find("ul")
        .stop()
        .animate(
          {
            left: +slideWidth,
          },
          500,
          function () {
            slider.find("ul li:last-child").prependTo(slider.find("ul"));
            slider.find("ul").css("left", "");
          }
        );
    }

    function moveRight(slider, slideWidth) {
      slider
        .find("ul")
        .stop()
        .animate(
          {
            left: -slideWidth,
          },
          500,
          function () {
            slider.find("ul li:first-child").appendTo(slider.find("ul"));
            slider.find("ul").css("left", "");
          }
        );
    }

    /** all Werke **/

    $(".grid-item img").animate(
      {
        opacity: 1,
      },
      1000
    );

    /**
     * ISOTOPE
     */

    /**
     * check if isotope is loaded
     */
    var isotopeIsLoaded = function () {
      return $.fn.isotope;
    };

    var getUrlParams = function () {
      var urlParams = new URLSearchParams(window.location.search);
      return urlParams.get("filter");
    };

    if (getUrlParams() !== "") {
      $("#" + getUrlParams()).addClass("button-clicked");
    }

    /**
     *
     * @type {{filter: {value: string, element: (*|jQuery|HTMLElement)}, elementsPerPage: number, grid: (*|jQuery|HTMLElement), options: {layoutMode: string, itemSelector: string, getSortData: {jahr: string, kuenstler: string}}, sort: {sortAsc: boolean, sortBy: string, element: (*|jQuery|HTMLElement)}, numberElements: number}}
     */
    var isotopeSettings = {
      grid: $("#werke-overview"),
      filter: {
        element: $("#werke-filter"),
        value:
          $("#werke-filter").find(".button-clicked").length > 0
            ? $("#werke-filter").find(".button-clicked")[0].dataset.filter
            : "*",
      },
      sort: {
        element: $(".werke-sorter"),
        sortBy: "",
        sortAsc: true,
      },
      numberElements: $(".grid-item").length,
      elementsPerPage: $(".grid-item").length,
      options: {
        itemSelector: ".grid-item",
        layoutMode: "fitRows",
        getSortData: {
          jahr: "[data-jahr]",
          kuenstler: "[data-kuenstler]",
        },
      },
    };

    /**
     *
     * @type {{sortAsc: string, sortActive: string, buttonClicked: string, sortDesc: string}}
     */
    var classes = {
      buttonClicked: "button-clicked",
      sortActive: "sort-active",
      sortAsc: "sort-asc",
      sortDesc: "sort-desc",
    };

    /**
     *
     * @param grid
     * @param filter
     * @param sort
     */
    function initIsotope(grid, filter, sort) {
      if (!isotopeIsLoaded()) return;

      isotopeSettings.grid =
        typeof grid !== "undefined" ? grid : isotopeSettings.grid;
      isotopeSettings.filter.element =
        typeof filter !== "undefined" ? filter : isotopeSettings.filter.element;
      isotopeSettings.sort.element =
        typeof sort !== "undefined" ? sort : isotopeSettings.sort.element;

      isotopeSettings.grid.isotope(isotopeSettings.options);
      isotopeSettings.grid.imagesLoaded().progress(function () {
        isotopeSettings.grid.isotope("layout");
      });
    }

    /**
     *
     */
    function destroyIsotope() {
      if (isotopeSettings.grid.data("isotope")) {
        isotopeSettings.grid.isotope("destroy");
      }
    }

    initIsotope();

    /**
     *
     */
    function filter() {
      setFilterButtonClasses($(this));
      setFilterValue($(this));
      isotopeSettings.grid.isotope({ filter: getFilterValue() });
      // isotopeSettings.grid.isotope('reloadItems');

      reloadHeaders();

      sort();
    }

    /**
     *
     * @param thisObj
     */
    function setFilterValue(thisObj) {
      isotopeSettings.filter.value = thisObj.hasClass(classes.buttonClicked)
        ? thisObj.data("filter")
        : "*";
    }

    /**
     *
     * @returns {string}
     */
    function getFilterValue() {
      return isotopeSettings.filter.value;
    }

    /**
     *
     * @param thisObj
     */
    function setFilterButtonClasses(thisObj) {
      if (thisObj.hasClass(classes.buttonClicked)) {
        thisObj.removeClass(classes.buttonClicked);
      } else {
        $("#werke-filter .button").removeClass(classes.buttonClicked);
        thisObj.addClass(classes.buttonClicked);
      }
    }

    isotopeSettings.filter.element.on("click", ".button", filter);

    /**
     * Grid zum sortieren neu aufbauen
     */
    function sort() {
      if ($(this).length) {
        setSortBy($(this));
        setSortOrder($(this));
        setOrderClasses($(this));
      }

      destroyIsotope();

      initGrid();

      //array aller keys nach denen sortiert werden soll
      var $list = $("#werke-overview .grid-item");
      var orderBy = [];
      $list.each(function () {
        if ($.inArray($(this).data(getSortBy()), orderBy) === -1) {
          orderBy.push($(this).data(getSortBy()));
        }
      });

      //alle grid-items mit gleichen data-attribute (nach dem sortiert werden soll) in divs wrappen
      for (var i = 0; i < orderBy.length; i++) {
        var key = orderBy[i];
        $list
          .filter("[data-" + getSortBy() + '="' + key + '"]')
          .wrapAll(
            '<div class="werke-row" data-' +
              getSortBy() +
              '="' +
              key +
              '">' +
              '<div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10">' +
              '<div class="vc_column-inner">' +
              '<div class="wpb_wrapper">' +
              "</div>" +
              "</div>" +
              "</div>" +
              "</div>"
          );
      }

      // hideRows();

      reloadHeaders();

      //zeilen sortieren
      var $rows = $(".werke-row");
      $rows.sort(function (a, b) {
        //nach zahlen sortieren
        if (Number.isInteger($(a).data(getSortBy()))) {
          return isAscending()
            ? $(a).data(getSortBy()) - $(b).data(getSortBy())
            : $(b).data(getSortBy()) - $(a).data(getSortBy());
        }
        //nach alphabet sortieren
        return isAscending()
          ? String.prototype.localeCompare.call(
              $(a).data(getSortBy()).toLowerCase(),
              $(b).data(getSortBy()).toLowerCase()
            )
          : String.prototype.localeCompare.call(
              $(b).data(getSortBy()).toLowerCase(),
              $(a).data(getSortBy()).toLowerCase()
            );
      });

      //zeilen durch sortierte zeilen ersetzen
      $("#werke-overview").html($rows);

      initIsotope($rows);

      //apply filter on new isotope instance
      isotopeSettings.grid.isotope({ filter: getFilterValue() });
      hideRows();
    }

    function hideRows() {
      $(".werke-row").each(function () {
        $(this).find(getFilterValue()).length ? $(this).show() : $(this).hide();
      });
    }

    /**
     * zeilen mit deren content ersetzen um Duplikate zu vermeiden
     */
    function initGrid() {
      $(".werke-row").each(function () {
        var $content = $(this).contents();
        $(this).replaceWith($content);
      });
    }

    /**
     * Header löschen und neu setzen um Duplikate zu vermeiden
     */
    function reloadHeaders() {
      $(".filtered-werke-header").remove();
      $(".werke-row").each(function () {
        var $header = $(
          '<div class="filtered-werke-header wpb_column vc_column_container vc_col-md-12 vc_col-lg-1">' +
            '<div class="vc_column-inner">' +
            '<div class="wpb_wrapper">' +
            '<h5 class="vheadline small">' +
            $(this).data(getSortBy()) +
            "</h5>" +
            "</div>" +
            "</div>" +
            "</div>"
        );
        $(this).prepend($header);
      });
    }

    /**
     *
     * @param thisObj
     */
    function setSortBy(thisObj) {
      isotopeSettings.sort.sortBy = thisObj.data("sort-by");
    }

    /**
     *
     * @returns {*|jQuery|*|*|*|*}
     */
    function getSortBy() {
      return isotopeSettings.sort.sortBy;
    }

    /**
     *
     * @param thisObj
     */
    function setSortOrder(thisObj) {
      isotopeSettings.sort.sortAsc = !(
        thisObj.hasClass(classes.sortActive) &&
        thisObj.hasClass(classes.sortAsc)
      );
    }

    /**
     *
     * @returns {boolean}
     */
    function isAscending() {
      return getSortOrder();
    }

    /**
     *
     * @returns {boolean}
     */
    function getSortOrder() {
      return isotopeSettings.sort.sortAsc;
    }

    /**
     *
     * @param thisObj
     */
    function setOrderClasses(thisObj) {
      if (thisObj.hasClass(classes.sortActive)) {
        if (thisObj.hasClass(classes.sortAsc)) {
          thisObj.removeClass(classes.sortAsc);
          thisObj.addClass(classes.sortDesc);
        } else {
          thisObj.removeClass(classes.sortDesc);
          thisObj.addClass(classes.sortAsc);
        }
      } else {
        $(".sort-button")
          .removeClass(classes.sortActive)
          .removeClass(classes.sortAsc)
          .removeClass(classes.sortDesc);
        thisObj.addClass(classes.sortActive).addClass(classes.sortAsc);
      }
    }

    isotopeSettings.sort.element.on("click", ".sort-button", sort);

    $("#load-werke").on("click", loadWerke);

    function loadWerke() {
      $(".menu-overlay").toggleClass("active");

      $.ajax({
        type: "POST",
        url: baseUrl + "/lib/load-werke-cat.php",
        dataType: "json",
        data: {
          offset: isotopeSettings.numberElements,
          meta_key: getSortBy(),
        },
        success: function (result) {
          $("#werke-overview").append(result.output);

          $(".wp-post-image").animate(
            {
              opacity: 1,
            },
            300
          );

          isotopeSettings.numberElements =
            isotopeSettings.numberElements + isotopeSettings.elementsPerPage;
        },
        error: function () {
          console.error("couldn't load");
          $(".menu-overlay").toggleClass("active");
        },
        timeout: function () {
          console.error("timeout");
          $(".menu-overlay").toggleClass("active");
        },
        complete: function (result) {
          sort();
          if (isotopeSettings.numberElements >= result.responseJSON.max_posts) {
            $("#load-werke").hide();
          }
          $(".menu-overlay").toggleClass("active");
        },
      });
    }

    $(isotopeSettings.sort.element).find("#jahr").trigger("click");

    /**
     * INIT ISOTOPE FOR SEARCH
     */
    (function () {
      if (!isotopeIsLoaded()) {
        return;
      }
      $(".search-results").isotope({
        itemSelector: ".grid-item",
        masonry: {
          columnWidth: 200,
        },
      });

      //randomize position of items
      $(".search-results .grid-item").each(function () {
        $(this).css("margin-top", getRandomInt(50) + "px");
        $(this).css("margin-left", getRandomInt(50) + "px");
        $(this).css("margin-bottom", getRandomInt(50) + "px");
        $(this).css("margin-right", getRandomInt(50) + "px");
      });
    })();

    function getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
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
      _etracker.enableCookies("https://art.vng.aliado.rocks/");
    });

    $(".decline-button-container").on("click", function () {
      hideCookieBanner();
      setCookie("cookie_consent", "false", 365);
      _etracker.disableCookies("https://art.vng.aliado.rocks/");
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
})(jQuery, this);
=======
(function($, root, undefined) {

    $(document).ready(function() {

        'use strict';

        /**
         * debounce so filtering doesn't happen every millisecond
         *
         * @param {type} fn
         * @param {type} threshold
         * @returns {Function}
         */
        function debounce(fn, threshold) {
            var timeout;
            return function debounced() {
                if (timeout) {
                    clearTimeout(timeout);
                }

                function delayed() {
                    fn();
                    timeout = null;
                }

                timeout = setTimeout(delayed, threshold || 100);
            };
        }

        /** Navbar **/

        $("#menu-button").click(function() {
            $(".bar-container").toggleClass("active");
            $(".menu-overlay").toggleClass("active");
            $(".menu-container").toggleClass("open");
        });

        /** VNG Slider **/
        $(".slider").each(function() {
            var slider = $(this);
            var elements = slider.find("ul li");
            var slideCount = elements.length;
            var slideWidth = slider.width();
            var sliderUlWidth = slideCount * slideWidth;

            slider.find("ul").width(sliderUlWidth);
            if (slideCount > 1) slider.find("ul").css({ marginLeft: -slideWidth });

            slider.find("ul li").width(slideWidth);

            if (slideCount <= 1) return;

            slider.find("ul li:last-child").prependTo(slider.find("ul"));

            slider.find(".slider-btn-left").click(function() {
                moveLeft(slider, slideWidth);
            });

            slider.find(".slider-btn-right").click(function() {
                moveRight(slider, slideWidth);
            });

            $(window).on('resize', debounce(function() {
                console.log('test');
                sliderUlWidth = slideCount * slideWidth;
                slideWidth = slider.width();
                if (slideCount > 1) slider.find("ul").css({ marginLeft: -slideWidth });
                slider.find("ul").width(sliderUlWidth);
                slider.find("ul li").width(slideWidth);
            }));
        });

        function moveLeft(slider, slideWidth) {
            slider.find("ul").stop().animate({
                left: +slideWidth
            }, 500, function() {
                slider.find("ul li:last-child").prependTo(slider.find("ul"));
                slider.find("ul").css('left', '');
            });
        }

        function moveRight(slider, slideWidth) {
            slider.find("ul").stop().animate({
                left: -slideWidth
            }, 500, function() {
                slider.find("ul li:first-child").appendTo(slider.find("ul"));
                slider.find("ul").css('left', '');
            });
        }

        /** all Werke **/

        $('.grid-item img').animate({
            'opacity': 1
        }, 1000);

        /**
         * ISOTOPE
         */

        /**
         * check if isotope is loaded
         */
        var isotopeIsLoaded = function() {
            return $.fn.isotope;
        };

        /**
         *
         * @type {{filter: {value: string, element: (*|jQuery|HTMLElement)}, elementsPerPage: number, grid: (*|jQuery|HTMLElement), options: {layoutMode: string, itemSelector: string, getSortData: {jahr: string, kuenstler: string}}, sort: {sortAsc: boolean, sortBy: string, element: (*|jQuery|HTMLElement)}, numberElements: number}}
         */
        var isotopeSettings = {
            'grid': $('#werke-overview'),
            'filter': {
                'element': $('#werke-filter'),
                'value': '*'
            },
            'sort': {
                'element': $('.werke-sorter'),
                'sortBy': '',
                'sortAsc': true
            },
            'numberElements': $('.grid-item').length,
            'elementsPerPage': $('.grid-item').length,
            'options': {
                'itemSelector': '.grid-item',
                'layoutMode': 'fitRows',
                'getSortData': {
                    'jahr': '[data-jahr]',
                    'kuenstler': '[data-kuenstler]'
                }
            }
        };

        /**
         *
         * @type {{sortAsc: string, sortActive: string, buttonClicked: string, sortDesc: string}}
         */
        var classes = {
            'buttonClicked': 'button-clicked',
            'sortActive': 'sort-active',
            'sortAsc': 'sort-asc',
            'sortDesc': 'sort-desc'
        };

        /**
         *
         * @param grid
         * @param filter
         * @param sort
         */
        function initIsotope(grid, filter, sort) {
            if (!isotopeIsLoaded()) return;

            isotopeSettings.grid = (typeof grid !== 'undefined') ? grid : isotopeSettings.grid;
            isotopeSettings.filter.element = (typeof filter !== 'undefined') ? filter : isotopeSettings.filter.element;
            isotopeSettings.sort.element = (typeof sort !== 'undefined') ? sort : isotopeSettings.sort.element;

            isotopeSettings.grid.isotope(isotopeSettings.options);
            isotopeSettings.grid.imagesLoaded().progress(function() {
                isotopeSettings.grid.isotope('layout');
            });
        }

        /**
         *
         */
        function destroyIsotope() {
            if (isotopeSettings.grid.data('isotope')) {
                isotopeSettings.grid.isotope('destroy');
            }
        }

        initIsotope();


        /**
         *
         */
        function filter() {
            setFilterButtonClasses($(this));
            setFilterValue($(this));
            isotopeSettings.grid.isotope({ filter: getFilterValue() });
            // isotopeSettings.grid.isotope('reloadItems');

            reloadHeaders();

            sort();
        }

        /**
         *
         * @param thisObj
         */
        function setFilterValue(thisObj) {
            isotopeSettings.filter.value = thisObj.hasClass(classes.buttonClicked) ? thisObj.data('filter') : '*';
        }

        /**
         *
         * @returns {string}
         */
        function getFilterValue() {
            return isotopeSettings.filter.value;
        }

        /**
         *
         * @param thisObj
         */
        function setFilterButtonClasses(thisObj) {
            if (thisObj.hasClass(classes.buttonClicked)) {
                thisObj.removeClass(classes.buttonClicked)
            } else {
                thisObj.siblings('.button').removeClass(classes.buttonClicked);
                thisObj.addClass(classes.buttonClicked);
            }
        }

        isotopeSettings.filter.element.on('click', '.button', filter);

        /**
         * Grid zum sortieren neu aufbauen
         */
        function sort() {
            if ($(this).length) {
                setSortBy($(this));
                setSortOrder($(this));
                setOrderClasses($(this));
            }


            destroyIsotope();

            initGrid();

            //array aller keys nach denen sortiert werden soll
            var $list = $('#werke-overview .grid-item');
            var orderBy = [];
            $list.each(function() {
                if ($.inArray($(this).data(getSortBy()), orderBy) === -1) {
                    orderBy.push($(this).data(getSortBy()));
                }
            });

            //alle grid-items mit gleichen data-attribute (nach dem sortiert werden soll) in divs wrappen
            for (var i = 0; i < orderBy.length; i++) {
                var key = orderBy[i];
                $list.filter('[data-' + getSortBy() + '="' + key + '"]').wrapAll(
                    '<div class="werke-row" data-' + getSortBy() + '="' + key + '">' +
                    '<div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10">' +
                    '<div class="vc_column-inner">' +
                    '<div class="wpb_wrapper">' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
                );
            }

            // hideRows();

            reloadHeaders();

            //zeilen sortieren
            var $rows = $('.werke-row');
            $rows.sort(function(a, b) {
                //nach zahlen sortieren
                if (Number.isInteger($(a).data(getSortBy()))) {
                    return isAscending() ?
                        $(a).data(getSortBy()) - $(b).data(getSortBy()) :
                        $(b).data(getSortBy()) - $(a).data(getSortBy());
                }
                //nach alphabet sortieren
                return isAscending() ?
                    String.prototype.localeCompare.call($(a).data(getSortBy()).toLowerCase(), $(b).data(getSortBy()).toLowerCase()) :
                    String.prototype.localeCompare.call($(b).data(getSortBy()).toLowerCase(), $(a).data(getSortBy()).toLowerCase());
            });

            //zeilen durch sortierte zeilen ersetzen
            $('#werke-overview').html($rows);

            initIsotope($rows);

            //apply filter on new isotope instance
            isotopeSettings.grid.isotope({ filter: getFilterValue() });
            hideRows();
        }

        function hideRows() {
            $('.werke-row').each(function() {
                $(this).find(getFilterValue()).length ? $(this).show() : $(this).hide();
            });
        }

        /**
         * zeilen mit deren content ersetzen um Duplikate zu vermeiden
         */
        function initGrid() {
            $('.werke-row').each(function() {
                var $content = $(this).contents();
                $(this).replaceWith($content);
            });
        }

        /**
         * Header löschen und neu setzen um Duplikate zu vermeiden
         */
        function reloadHeaders() {
            $('.filtered-werke-header').remove();
            $('.werke-row').each(function() {
                var $header = $(
                    '<div class="filtered-werke-header wpb_column vc_column_container vc_col-md-12 vc_col-lg-1">' +
                    '<div class="vc_column-inner">' +
                    '<div class="wpb_wrapper">' +
                    '<h5 class="vheadline small">' + $(this).data(getSortBy()) + '</h5>' +
                    '</div>' +
                    '</div>' +
                    '</div>');
                $(this).prepend($header);
            });
        }

        /**
         *
         * @param thisObj
         */
        function setSortBy(thisObj) {
            isotopeSettings.sort.sortBy = thisObj.data('sort-by');
        }

        /**
         *
         * @returns {*|jQuery|*|*|*|*}
         */
        function getSortBy() {
            return isotopeSettings.sort.sortBy;
        }

        /**
         *
         * @param thisObj
         */
        function setSortOrder(thisObj) {
            isotopeSettings.sort.sortAsc = (!(thisObj.hasClass(classes.sortActive) && thisObj.hasClass(classes.sortAsc)));
        }

        /**
         *
         * @returns {boolean}
         */
        function isAscending() {
            return getSortOrder();
        }

        /**
         *
         * @returns {boolean}
         */
        function getSortOrder() {
            return isotopeSettings.sort.sortAsc;
        }

        /**
         *
         * @param thisObj
         */
        function setOrderClasses(thisObj) {
            if (thisObj.hasClass(classes.sortActive)) {
                if (thisObj.hasClass(classes.sortAsc)) {
                    thisObj.removeClass(classes.sortAsc);
                    thisObj.addClass(classes.sortDesc);
                } else {
                    thisObj.removeClass(classes.sortDesc);
                    thisObj.addClass(classes.sortAsc);
                }
            } else {
                $('.sort-button').removeClass(classes.sortActive).removeClass(classes.sortAsc).removeClass(classes.sortDesc);
                thisObj.addClass(classes.sortActive).addClass(classes.sortAsc);
            }
        }

        isotopeSettings.sort.element.on('click', '.sort-button', sort);

        $('#load-werke').on('click', loadWerke);

        function loadWerke() {
            $(".menu-overlay").toggleClass("active");

            $.ajax({
                type: "POST",
                url: baseUrl + '/lib/load-werke-cat.php',
                dataType: 'json',
                data: {
                    offset: isotopeSettings.numberElements,
                    meta_key: getSortBy()
                },
                success: function(result) {
                    console.log(result);
                    $('#werke-overview').append(result.output);

                    $('.wp-post-image').animate({
                        opacity: 1
                    }, 300);

                    isotopeSettings.numberElements = isotopeSettings.numberElements + isotopeSettings.elementsPerPage;
                },
                error: function() {
                    console.error('couldn\'t load');
                    $(".menu-overlay").toggleClass("active");

                },
                timeout: function() {
                    console.error('timeout');
                    $(".menu-overlay").toggleClass("active");
                },
                complete: function(result) {
                    sort();
                    if (isotopeSettings.numberElements >= result.responseJSON.max_posts) {
                        $('#load-werke').hide();
                    }
                    $(".menu-overlay").toggleClass("active");
                }
            });
        }

        $(isotopeSettings.sort.element).find('#jahr').trigger('click');


        /**
         * INIT ISOTOPE FOR SEARCH
         */
        (function() {
            if (!isotopeIsLoaded()) {
                return;
            }
            $('.search-results').isotope({
                itemSelector: '.grid-item',
                masonry: {
                    columnWidth: 200
                }
            });

            //randomize position of items
            $('.search-results .grid-item').each(function() {
                $(this).css('margin-top', getRandomInt(50) + 'px');
                $(this).css('margin-left', getRandomInt(50) + 'px');
                $(this).css('margin-bottom', getRandomInt(50) + 'px');
                $(this).css('margin-right', getRandomInt(50) + 'px');
            });
        })();

        function getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max));
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
            _etracker.enableCookies('https://art.vng.aliado.rocks/');
        });

        $('.decline-button-container').on('click', function() {
            hideCookieBanner();
            setCookie('cookie_consent', 'false', 365);
            _etracker.disableCookies('https://art.vng.aliado.rocks/');
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



})(jQuery, this);
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
