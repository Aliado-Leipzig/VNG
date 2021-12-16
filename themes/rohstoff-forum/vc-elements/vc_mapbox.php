<div id='map' style='width: 400px; height: 300px;'></div>
<div class="location-list">
    <span class="location" data-lnglat="[12.37, 51.34]">Leipzig</span>
</div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibWJvcmdlciIsImEiOiJja2hjMnNyOWIwMWFvMnNvMmpwa2hxaGwxIn0.kw87Mg_gCJSi93LisbcvpQ';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [12.37, 51.34],
    zoom: 7
});

var el = document.createElement('div');
el.className = 'marker';

var marker = new mapboxgl.Marker(el)
    .setLngLat([12.37, 51.34])
    .addTo(map)
    .setPopup(new mapboxgl.Popup().setHTML("<h1>This is Leipzig!</h1>"));

(function($, root, undefined) {
    console.log('jQuery');
    $('.location').on('click', function() {
        console.log('jump to')
        console.log($(this).data('lnglat'));
        map.easeTo({
            center: $(this).data('lnglat')
        });

        marker.togglePopup();
    });
})(jQuery, this);
</script>

<style>
.marker {
    background-color: black;
    background-size: cover;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
}
</style>