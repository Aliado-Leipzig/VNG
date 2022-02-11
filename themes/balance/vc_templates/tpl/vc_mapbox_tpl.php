<div class="mapbox-teaser-overlay">
    <div class="mapbox-teaser-text">
        <h2>
            Karte anzeigen
        </h2>
        <p>Mit dem Aufruf der Standortkarte erklären Sie sich einverstanden,
            dass Ihre Daten an mapbox.com übermittelt werden.
            Weitere Informationen erhalten Sie in unserer
            <a href="/Datenschutz" target="_blank">Datenschutzerklärung</a>
        </p>
        <div class="button load-map-button"><?php echo $mapbox_button_text ?></div>

    </div>
</div>
<div class="map-container">
    <div class="vc_row wpb_row vc_inner vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-push-3 vc_col-sm-9">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div id='map'></div>
                    <div class="map-teaser"
                        style="background-image: url(/wp-content/themes/balance/img/balance/background-map.png); border-radius: 10px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-pull-9 vc_col-sm-3">
            <div class="vc_column-inner">
                <div class="wpb_wrapper map-mega-container">
					<div class="map-button-mobile">Standort Auswählen</div>
                    <div class="location-list-container">
                        <?php echo wpb_js_remove_wpautop($content); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(".button").click(function() {
    jQuery.getScript("/wp-content/themes/balance/vc_templates/tpl/mapbox_init.js");
});
</script>