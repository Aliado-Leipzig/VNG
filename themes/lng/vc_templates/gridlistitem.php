<?php

/**
 * Portfolio Gallery
 */

vc_map(array(
    "base" => "gridlistitem",
    "name" => __("Grid List Item"),
    "as_child" => array('only' => 'gridlist'),
    "content_element" => true,
    "category" => __('Content'),
    "show_settings_on_create" => true,
    "icon" => "gridlist",
    "params" => array(
        array(
            "type" => "textfield",
            "holder" => 'h3',
            "class" => "",
            "heading" => __("Title"),
            "param_name" => "title",
            "value" => "",
        ),
        array(
            "type" => "attach_image",
            "holder" => 'img',
            "class" => "",
            "heading" => __("Image"),
            "param_name" => "gridlistitem_image",
            "value" => "",
        ),
        array(
            "type" => "attach_image",
            "holder" => '',
            "class" => "",
            "heading" => __("Image on Hover"),
            "param_name" => "gridlistitem_image_hover",
            "value" => "",
        ),
        array(
            "type" => "colorpicker",
            "holder" => 'div',
            "class" => "",
            "heading" => __("Background Color"),
            "param_name" => "bg_color",
            "value" => "",
        ),
        array(
            "type" => "vc_link",
            "holder" => 'a',
            "class" => "",
            "heading" => __("Link"),
            "param_name" => "link",
            "value" => "",
        )
    )
));

if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_gridlistitem extends WPBakeryShortCode
    {

        protected function content($atts, $content = null)
        {
            wp_register_style('gridlistitem', get_stylesheet_directory_uri() . '/vc_templates/gridlistitem.css');
            wp_enqueue_style('gridlistitem'); // Enqueue it!

            extract(shortcode_atts(array(
                'gridlistitem_image' => false,
                'gridlistitem_image_hover' => false,
                "title" => null,
                "link" => null,
                "bg_color" => "transparent"
            ), $atts));

            $item_image = wp_get_attachment_image_src($gridlistitem_image, 'full')[0];
            $item_image_hover = wp_get_attachment_image_src($gridlistitem_image_hover, 'full')[0];
            $href = vc_build_link($link)["url"];

            $output = "<div class='gridlistitem' style='background: $bg_color'>";
            $output .= "<a href=$href>";
            $output .= "<img class='gridlistitem-image' src=$item_image />";
            $output .= "<img class='gridlistitem-image-hover' src=$item_image_hover />";
            $output .= "<div class='gridlistitem-title'><h3>$title</h3></div>";
            $output .= "</a>";
            $output .= '</div>';
            return $output;
        }
    }
}