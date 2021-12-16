<?php

class WPBakeryShortCode_mapbox extends WPBakeryShortCodesContainer
{
    protected function content($atts, $content = null)
    {

        $this->loadMapboxScripts();
        $this->loadMapboxStyles();

        extract(shortcode_atts(
            array(
                'mapbox_button_text' => 'Verstanden',
            ),
            $atts
        ));

        // print_r($content);
        // die;

        $output = locate_template(include __DIR__ . '/tpl/vc_mapbox_tpl.php', false, true);
        return $output;
    }

    protected function loadMapboxScripts()
    {
        wp_register_script('mapbox_js', get_template_directory_uri() . '/js/lib/mapbox-gl.js', 'jquery', '1.0', false);
        wp_enqueue_script('mapbox_js');
        wp_register_script('mapbox_js_animated_popup', get_template_directory_uri() . '/js/lib/mapbox-gl-animated-popup.js', 'jquery', '1.0', false);
        wp_enqueue_script('mapbox_js_animated_popup');
    }

    protected function loadMapboxStyles()
    {
        $hash = sha1_file(get_template_directory() . DIRECTORY_SEPARATOR . 'css/mapbox.css');

        wp_register_style('mapbox', get_template_directory_uri() . '/css/lib/mapbox-gl.css');
        wp_enqueue_style('mapbox'); // Enqueue it!

        wp_enqueue_style(
            'mapbox_custom',
            get_template_directory_uri() . '/css/mapbox.css',
            [],
            ($hash !== false ? substr($hash, -8, -1) : ''),
            'all'
        );
    }
}

vc_map(array(
    'base' => 'mapbox',
    'name' => 'Mapbox',
    'show_settings_on_create' => false,
    "is_container" => true,
    "as_parent" => array('only' => 'marker'),
    "js_view" => 'VcColumnView',
    "params" => array(
        array(
            'type' => 'textfield',
            'value' => 'Verstanden',
            'heading' => 'Button Beschriftung',
            'param_name' => 'mapbox_button_text',
            'holder' => 'div'
        )
    )
));


class WPBakeryShortCode_marker extends WPBakeryShortCode
{
    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'mapmarker_title' => '',
            'mapmarker_longitude' => '',
            'mapmarker_latitude' => '',
            'mapmarker_description' => '',
            'mapmarker_url' => '',
        ), $atts));


        $content = wpb_js_remove_wpautop($content, true);



        $attr = array(
            'title' => $mapmarker_title,
            'description' => str_replace('"', '\'', $content),
            'lng' => $mapmarker_longitude,
            'lat' => $mapmarker_latitude,
            'url' => vc_build_link($mapmarker_url)['url'],
            'url_title' => vc_build_link($mapmarker_url)['title']
        );

        return locate_template(include(__DIR__ . '/tpl/vc_mapbox_marker_tpl.php'), false, true, $attr);
        //$mapmarker = vc_param_group_parse_atts($atts['mapmarker_items']);

        //$output = locate_template(include(__DIR__ . '/tpl/vc_mapbox_tpl.php'), false, true, $mapmarker);
        //return $output;
    }
}

vc_map(array(
    'base' => 'marker',
    'name' => 'Marker',
    'content_element' => true,
    'show_settings_on_create' => true,
    "as_child" => array('only' => 'mapbox'),
    'params' => array(
        array(
            'type' => 'textfield',
            'value' => '',
            'heading' => 'Titel',
            'param_name' => 'mapmarker_title',
            'holder' => 'h1'
        ),
        array(
            'type' => 'textarea_html',
            'value' => '',
            'heading' => 'Beschreibung',
            'param_name' => 'content',
            'holder' => 'div'
        ),
        array(
            'type' => 'textfield',
            'value' => '',
            'heading' => 'Längengrad',
            'description' => '51.3397°N',
            'param_name' => 'mapmarker_longitude',
            'holder' => 'div'
        ),
        array(
            'type' => 'textfield',
            'value' => '',
            'heading' => 'Breitengrad',
            'description' => '12.3731°E',
            'param_name' => 'mapmarker_latitude',
            'holder' => 'div'
        ),
        array(
            'type' => 'vc_link',
            'value' => '',
            'heading' => 'URL/PDF',
            'param_name' => 'mapmarker_url',
            'holder' => 'div'
        )
    )
));