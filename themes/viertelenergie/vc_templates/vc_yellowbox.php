<?php
/**
 * Yellow Box
 */
class WPBakeryShortCode_yellowbox_wrap extends WPBakeryShortCodesContainer {

	public function __construct($settings) {
		parent::__construct($settings);
	}

	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(), $atts));

		$output = '<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid yellow">';
			$output .= do_shortcode($content);
		$output .= '</div>';
		$output .= '<div class="vc_row-full-width vc_clearfix"></div>';

		return $output;
	}
}

vc_map(array(
	"base" => "yellowbox_wrap",
	"name" => __("Gelbe Box"),
	"as_parent" => array('only' => 'yellowbox_content'),
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => false,
	"is_container" => true,
	"params" => array(),
	"js_view" => 'VcColumnView',
));

class WPBakeryShortCode_yellowbox_content extends WPBakeryShortCode {

	public function __construct($settings) {
		parent::__construct($settings);
		$this->addAction('wp_enqueue_scripts', 'jsCssScripts');
	}
	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(
			'title' => false,
			'subtitle' => false,
			'text' => false,
			'link' => false,
		), $atts));
			$output .= '<div class="favorite">';
				$output .= '<h4 class="genre">';
					$output .= $subtitle;
				$output .= '</h4>';
				$output .= '<h3 class="title">';
					$output .= $title;
				$output .= '</h3>';
				$output .= '<p class="text">';
					$output .= $text;
				$output .= '</p>';
			$output .= '</div>';
		return $output;
	}

}

vc_map(array(
	"base" => "yellowbox_content",
	"name" => __("Content"),
	"class" => "",
	"as_child" => array('only' => 'yellowbox_wrap'),
	"content_element" => true,
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => 'div',
			"class" => "",
			"heading" => __("Kategorie"),
			"param_name" => "subtitle",
			"value" => "",
		),
		array(
			"type" => "textfield",
			"holder" => 'div',
			"class" => "",
			"heading" => __("Überschrift"),
			"param_name" => "title",
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
		array(
			'type' => 'vc_link',
			'heading' => __('Link'),
			'param_name' => 'link',
		),
	)
));