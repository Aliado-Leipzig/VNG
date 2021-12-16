<?php
if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_newsteaser extends WPBakeryShortCode
    {
        public function __construct($settings)
        {
            parent::__construct($settings);
        }

        protected function content($atts, $content = null)
        {
            extract(shortcode_atts(array(
                'newsteaser_img' => '',
                'newsteaser_header' => '',
                'newsteaser_date' => '',
                'newsteaser_url' => '',
                'newsteaser_buttonfontcolor' => '#707070',
                'newsteaser_buttonbackgroundcolor' => 'transparent'
            ), $atts));

            $href = vc_build_link($newsteaser_url);

            $output = '<div class="newsteaser-container">';

            if ($newsteaser_img !== '') {
                $output .= '<div class="newsteaser-image-wrapper">';
                $output .= wp_get_attachment_image($newsteaser_img, 'medium');
                $output .= '</div>';
            }

            $output .= '<div class="newsteaser-header">' . $newsteaser_header . '</div>';
            $output .= '<div class="newsteaser-date">' . $newsteaser_date . '</div>';
            $output .= '<div class="newsteaser-body">' . $content . '</div>';
            $output .= '<div class="vc_btn3-container vc_btn3-inline header-button">';
            $output .= '<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-modern" style="color:' . $newsteaser_buttonfontcolor . '!important; background:' . $newsteaser_buttonbackgroundcolor . '!important; border-color: ' . $newsteaser_buttonfontcolor . '" href="' . $href['url'] . '" title="' . $href['title'] . '">mehr</a>';
            $output .= '</div>';
            $output .= '</div>';
            return $output;
        }
    }
}

vc_map(array(
    "base" => "newsteaser",
    "name" => __("Newsteaser"),
    "content_element" => true,
    "category" => __('Content'),
    "show_settings_on_create" => true,
    "icon" => "newsteaser",
    "params" => array(
        array(
            "type" => "attach_image",
            "holder" => 'img',
            "heading" => __("Teaserbild"),
            "param_name" => "newsteaser_img",
        ),
        array(
            "type" => "textfield",
            "holder" => "h1",
            "heading" => "Überschrift",
            "param_name" => "newsteaser_header"
        ),
        array(
            "type" => "textfield",
            "holder" => "div",
            "heading" => "Datum",
            "param_name" => "newsteaser_date"
        ),
        array(
            "type" => "textarea_html",
            "holder" => 'div',
            "heading" => __("Inhalt"),
            "param_name" => "content",
        ),
        array(
            "type" => "vc_link",
            "holder" => "a",
            "heading" => "Link zur Detailseite",
            "param_name" => "newsteaser_url"
        ),
        array(
            "type" => "colorpicker",
            "heading" => "Button Schriftfarbe",
            "param_name" => "newsteaser_buttonfontcolor"
        ),
        array(
            "type" => "colorpicker",
            "heading" => "Button Hintergrundfarbe",
            "param_name" => "newsteaser_buttonbackgroundcolor"
        ),
    )
));


if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_slick_slider extends WPBakeryShortCode
    {
        public function __construct($settings)
        {
            parent::__construct($settings);
        }

        protected function content($atts, $content = null)
        {
            extract(shortcode_atts(array(
                'slick_slider_imgs' => ''
            ), $atts));

            $imgs = explode(',', $slick_slider_imgs);


            $output = '<div class="slick-slider">';
            foreach ($imgs as $img) {
                $output .= '<div class="slick-slider-slide">';
                $output .= wp_get_attachment_image($img, 'full');
                $output .= '</div>';
            }
            $output .= '</div>';
            return $output;
        }
    }
}

vc_map(array(
    "base" => "slick_slider",
    "name" => __("Slick Slider"),
    "content_element" => true,
    "category" => __('Content'),
    "show_settings_on_create" => true,
    "icon" => "slick_slider",
    "params" => array(
        array(
            "type" => "attach_images",
            "heading" => __("Slides"),
            "param_name" => "slick_slider_imgs",
        )
    )
));

if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_vng_button extends WPBakeryShortCode
    {
        public function __construct($settings)
        {
            parent::__construct($settings);
        }

        protected function content($atts, $content = null)
        {
            extract(shortcode_atts(array(
                'button_font_color' => '',
                'button_background_color' => '',
                'button_text' => '',
                'button_url' => ''
            ), $atts));

            $href = vc_build_link($button_url);

            $output = '<div class="vc_btn3-container vc_btn3-inline header-button">';
            $output .= '<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-modern"
            style="color:' . $button_font_color . '!important;
            background:' . $button_background_color . '!important;
            border-color: ' . $button_font_color . '"
            href="' . $button_url . '"
            title="' . $button_text . '">' . $button_text . '</a></div>';

            return $output;
        }
    }
}

vc_map(array(
    "base" => "vng_button",
    "name" => __("VNG Button"),
    "content_element" => true,
    "category" => __('Content'),
    "show_settings_on_create" => true,
    "icon" => "vng_button",
    "params" => array(
        array(
            "type" => "textfield",
            "holder" => "h1",
            "heading" => "Text",
            "param_name" => "button_text"
        ),
        array(
            "type" => "vc_link",
            "holder" => "a",
            "heading" => "URL",
            "param_name" => "button_url"
        ),
        array(
            "type" => "colorpicker",
            "heading" => "Schriftfarbe",
            "param_name" => "button_font_color"
        ),
        array(
            "type" => "colorpicker",
            "heading" => "Hintergrundfarbe",
            "param_name" => "button_background_color"
        ),
    )
));

add_action('vc_after_init', 'add_vc_btn_color');

function add_vc_btn_color()
{
    //Get current values stored in the color param in "Call to Action" element
    $param = WPBMap::getParam('vc_btn', 'color');
    //Append new value to the 'value' array
    $param['value']['Transparent-Grau'] = 'transparent text-grey';
    $param['value']['Transparent-Weiß'] = 'transparent text-white';

    //Finally "mutate" param with new values
    vc_update_shortcode_param('vc_btn', $param);
}