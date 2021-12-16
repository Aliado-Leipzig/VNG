<?php

class WPBakeryShortCode_vng_preview extends WPBakeryShortCode
{

    public function __construct($settings)
    {
        parent::__construct($settings);
    }

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'picture' => '',
            'headline' => '',
            'btn_text' => '',
            'btn_url' => ''
        ), $atts));

        return generateVNGPreview($picture, $headline, $content, $btn_text, $btn_url);
    }
}

function generateVNGPreview($picture, $headline, $content, $btn_text, $btn_url, $build_url = true)
{
    $alt_text = get_post_meta($picture, '_wp_attachment_image_alt', true);

    $output = '<div class="vc_row wpb_row vc_row-fluid flex-row">';
    $output .= '<div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">';
    $output .= '<div class="vc_column-inner">';
    $output .= '<div class="wpb_wrapper">';
    $output .= '<h5 class="vheadline">' . $headline . '</h5>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-5 flex-col">';
    $output .= '<div class="vc_column-inner">';
    $output .= '<div class="wpb_wrapper">';
    $output .= '<div class="preview ' . $alt_text . '">';
    $output .= '<img title="' . $alt_text . '" alt="' . $alt_text . '" src=' . wp_get_attachment_url($picture, 'medium', array('class' => 'img-responsive')) . ' />';
    $output .= "</div>";
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">';
    $output .= '<div class="vc_column-inner">';
    $output .= '<div class="wpb_wrapper">';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '<div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-5 flex-col">';
    $output .= '<div class="vc_column-inner">';
    $output .= '<div class="wpb_wrapper">';
    $output .= '<p class="description">';
    $output .= $content;
    $output .= '</p>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';

    $output .= '<div class="vc_row wpb_row vc_row-fluid">';
    $output .= '<div class="wpb_column vc_column_container vc_col-xs-12">';
    $output .= '<div class="vc_column-inner">';
    $output .= '<div class="wpb_wrapper">';
    $output .= '<div class="button-container">';
    $output .= '<a class="button" href="' . ($build_url ? vc_build_link($btn_url)['url'] : $btn_url) . '">';
    $output .= $btn_text;
    $output .= '</a>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    return $output;
}

vc_map(array(
    'base' => 'vng_preview',
    'name' => 'VNG Preview',
    'content_element' => true,
    'params' => array(
        array(
            'type' => 'attach_image',
            'holder' => '',
            'heading' => 'Bild',
            'param_name' => 'picture'
        ),
        array(
            'type' => 'textarea',
            'holder' => '',
            'heading' => 'Überschrift',
            'param_name' => 'headline'
        ),
        array(
            'type' => 'textarea_html',
            'holder' => '',
            'heading' => 'Content',
            'param_name' => 'content'
        ),
        array(
            'type' => 'textarea',
            'holder' => '',
            'heading' => 'Button Text',
            'param_name' => 'btn_text'
        ),
        array(
            'type' => 'vc_link',
            'holder' => '',
            'heading' => 'URL',
            'param_name' => 'btn_url',
        )
    )
));