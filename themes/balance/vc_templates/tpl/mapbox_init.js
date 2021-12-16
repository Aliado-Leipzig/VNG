jQuery(document).ready(function ($) {
    $('.mapbox-teaser-overlay').fadeOut(500, 'linear', function () {
        $(this).remove();
    });




    /* mapbox access token */
    mapboxgl.accessToken =
        'pk.eyJ1IjoibWJvcmdlciIsImEiOiJja2hudHBic3UwM3gxMnRtamVudmczMWxwIn0.BVfV5TsPjnqG13IpSYg66Q';

    /* initialize map object */
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mborger/cki6f1enu2bss19o2yeuxblu5', // style URL
        center: [12.3731, 51.3397], // starting position [lng, lat]
        zoom: 7 // starting zoom
    });

    map.on('load', function () {
        $('.map-teaser').fadeOut(500, 'linear', function () {
            $(this).remove();
        });
    });


    /* loop over location divs in sidebar */
    $('.location').each(function() {
        /* initialize animated popup object */
        var popup = new AnimatedPopup({
            openingAnimation: {
                duration: 1000, //opening animation duration in ms
                easing: 'easeOutElastic' //opening animation style
            },
            closingAnimation: {
                duration: 300, //closing animation duration in ms
                easing: 'easeInBack' //closing animation style
            }
        }).setHTML("<h5 class='mapboxgl-popup-headline'>" +
            $(this).data('title') + "</h5><div class='mapboxgl-popup-details'>" +
            $(this).data('description') +
            "</div><div class='mapboxgl-popup-pdf'><a target='_blank' href=" +
            $(this).data('url') + " >" +
            $(this).data('urltitle') + "</a></div>"); //popup content

        /* create marker div */
        var el = document.createElement('div');
        el.className = 'marker'; //add classname
        /* add onclick function that centers map on marker */
        el.onclick = function() {
            map.easeTo({
                center: marker.getLngLat(),
                zoom: 9
            })
        }

        /* initialize marker object */
        var marker = new mapboxgl.Marker(el)
            .setLngLat($(this).data('lnglat')) //set coordinates
            .setPopup(popup) //add popup
            .addTo(map); //add marker to map

        /* add onclick function to location div in sidebar */
        $(this).on('click', function() {
            //remove active class from all location divs in sidebar
            $('.location').removeClass('active');
            //add active class to clicked location div in sidebar
            $(this).addClass('active');
            //center map on clicked location

            var offset = [0.15, -0.1];

            var lnglat = $(this).data('lnglat').map(function(num, idx) {
                return num + offset[idx];
            });

            map.flyTo({
                center: lnglat, //coordinates
                zoom: 9 //zoom factor
            });
            //remove all popups from map
            $('.mapboxgl-popup').remove();
            //show current popup
            marker.getPopup().addTo(map);
        });
    });
});
