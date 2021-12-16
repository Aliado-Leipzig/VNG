<?php

/**
 * Portfolio Gallery
 */

vc_map(array(
    "base" => "gridlist",
    "name" => __("Grid List"),
    "icon" => "gridlist",
    "as_parent" => array('only' => 'gridlistitem'),
    "category" => __('Content'),
    "show_settings_on_create" => false,
    "is_container" => true,
    "js_view" => 'VcColumnView'
));


if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_gridlist extends WPBakeryShortCodesContainer
    {

        protected function content($atts, $content = null)
        {
            wp_register_style('gridlist', get_stylesheet_directory_uri() . '/vc_templates/gridlist.css');
            wp_enqueue_style('gridlist'); // Enqueue it!

            extract(shortcode_atts(array(), $atts));
            $output = '<div class="gridlist">';
            $output .= wpb_js_remove_wpautop($content);
            $output .= '</div>';

            return $output;
        }
    }
}