<?php
/**
 * Referenz Akkordeon
 */
class WPBakeryShortCode_refacc_wrap extends WPBakeryShortCodesContainer {

	public function __construct($settings) {
		parent::__construct($settings);
	}

	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(), $atts));

		$output = '<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid">';
			$output .= do_shortcode($content);
		$output .= '</div>';
		$output .= '<div class="vc_row-full-width vc_clearfix"></div>';

		return $output;
	}
}

vc_map(array(
	"base" => "refacc_wrap",
	"name" => __("Referenz Akkordeon"),
	"as_parent" => array('only' => 'refacc_content'),
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => false,
	"is_container" => true,
	"params" => array(),
	"js_view" => 'VcColumnView',
));

class WPBakeryShortCode_refacc_content extends WPBakeryShortCode {

	public function __construct($settings) {
		parent::__construct($settings);
		$this->addAction('wp_enqueue_scripts', 'jsCssScripts');
	}
	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(
			'title' => false,
			'subtitle' => false,
			'text' => false,
		), $atts));
			$output = '<div class="referenz">';
				$output .= '<h1 class="genre">';
					$output .= $title;
				$output .= '</h1>';
				$output .= '<h2 class="title">';
					$output .= $subtitle;
				$output .= '</h2>';
				$output .= '<div class="icon-wrapper">';
					$output .= '<div class="icon control-button-wrapper">s';
						$output .= '<i class="vc_tta-controls-icon vc_tta-controls-icon-plus">Q</i>';
					$output .= '</div>';
				$output .= '</div>';
				$output .= '<p class="text">';
					$output .= $text;
				$output .= '</p>';
			$output .= '</div>';
		return $output;
	}
}

vc_map(array(
	"base" => "refacc_content",
	"name" => __("Content"),
	"class" => "",
	"as_child" => array('only' => 'refacc_wrap'),
	"content_element" => true,
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => 'div',
			"class" => "",
			"heading" => __("Überschrift"),
			"param_name" => "title",
			"value" => "",
		),
		array(
			"type" => "textfield",
			"holder" => 'div',
			"class" => "",
			"heading" => __("Claim"),
			"param_name" => "subtitle",
			"value" => "",
		),
		array(
			"type" => "textarea",
			"holder" => 'div',
			"class" => "",
			"heading" => __("Text"),
			"param_name" => "text",
			"value" => "",
		),
	)
));