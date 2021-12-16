<?php

/**
 * Map Item
 */
class WPBakeryShortCode_header extends WPBakeryShortCodesContainer {

	public function __construct($settings) {
		parent::__construct($settings);
	}

	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(
			'size' => 'large',
			'textcolor' => 'white'
			
		), $atts));
		$output = '<div class="vc_content-header content-header-wrap content-header-size-'.$size.' content-header-textcolor-'.$textcolor.'">';	
		$output .= do_shortcode($content);
		$output .= '</div>';
		return $output;
	}

}

vc_map(array(
	"base" => "header",
	"name" => __("Header"),
	"class" => "",
	"as_parent" => array('only' => 'vc_row'),
	"content_element" => true,
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => '',
			"class" => "",
			"heading" => __("Size"),
			"param_name" => "size",
			"value" => array(
				'Homepage'   => 'large',
				'Subpage'   => 'small',
			),
		),
		array(
			"type" => "dropdown",
			"holder" => '',
			"class" => "",
			"heading" => __("Textcolor"),
			"param_name" => "textcolor",
			"value" => array(
				'white'   => 'white',
				'black'   => 'black',
			),
		),
	),
	"js_view" => 'VcColumnView',
));