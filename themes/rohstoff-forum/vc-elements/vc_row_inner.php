<?php
if (!defined('ABSPATH')) {
    die('-1');
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $css
 * @var $el_id
 * @var $equal_height
 * @var $content_placement
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row_Inner
 */
$el_class = $equal_height = $content_placement = $css = $el_id = '';
$disable_element = '';
$output = $after_output = '';
$atts = vc_map_get_attributes($this->getShortcode(), $atts);
extract($atts);

$el_class = $this->getExtraClass($el_class);
$css_classes = array(
    'vc_row',
    'wpb_row',
    //deprecated
    'vc_inner',
    'vc_row-fluid',
    $el_class,
    vc_shortcode_custom_css_class($css),
);
if ('yes' === $disable_element) {
    if (vc_is_page_editable()) {
        $css_classes[] = 'vc_hidden-lg vc_hidden-xs vc_hidden-sm vc_hidden-md';
    } else {
        return '';
    }
}

if (vc_shortcode_custom_css_has_property($css, array(
    'border',
    'background',
))) {
    $css_classes[] = 'vc_row-has-fill';
}

if (!empty($atts['gap'])) {
    $css_classes[] = 'vc_column-gap-' . $atts['gap'];
}

if (!empty($equal_height)) {
    $flex_row = true;
    $css_classes[] = 'vc_row-o-equal-height';
}

if (!empty($content_placement)) {
    $flex_row = true;
    $css_classes[] = 'vc_row-o-content-' . $content_placement;
}

if (!empty($flex_row)) {
    $css_classes[] = 'vc_row-flex';
}

if (!empty($read_more)) {
    $css_classes[] = 'read-more';
}


$wrapper_attributes = array();
// build attributes for wrapper
if (!empty($el_id)) {
    $wrapper_attributes[] = 'id="' . esc_attr($el_id) . '"';
}

$css_class = preg_replace('/\s+/', ' ', apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode(' ', array_filter(array_unique($css_classes))), $this->settings['base'], $atts));
$wrapper_attributes[] = 'class="' . esc_attr(trim($css_class)) . '"';

$output .= '<div ' . implode(' ', $wrapper_attributes) . '>';
$output .= wpb_js_remove_wpautop($content);
$output .= '</div>';
if (!empty($read_more)) {
    if (WPGlobus::Config()->language === 'ru'){
        $output .= '<div class="vc_btn3-container vc_btn3-inline read-more-tag"><a href="#" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-modern vc_btn3-color-grey"><div class="button-inner">ДАЛЕЕ /</div></a></div>';
    } else {
        $output .= '<div class="vc_btn3-container vc_btn3-inline read-more-tag"><a href="#" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-modern vc_btn3-color-grey"><div class="button-inner">mehr /</div></a></div>';

    }
}
$output .= $after_output;

echo $output;
