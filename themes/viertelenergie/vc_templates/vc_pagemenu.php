<?php
/**
 * Subpagemenu
 */
class WPBakeryShortCode_subpagemenu_wrap extends WPBakeryShortCodesContainer {

	public function __construct($settings) {
		parent::__construct($settings);
	}

	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(), $atts));

		$output = '<ul class="subpagemenu-wrapper">';
			$output .= do_shortcode($content);
		$output .= '</ul>';

		return $output;
	}
}

vc_map(array(
	"base" => "subpagemenu_wrap",
	"name" => __("Submenu Wrap"),
	"as_parent" => array('only' => 'subpagemenu'),
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => false,
	"is_container" => true,
	"params" => array(),
	"js_view" => 'VcColumnView',
));

class WPBakeryShortCode_subpagemenu extends WPBakeryShortCode {

	public function __construct($settings) {
		parent::__construct($settings);
		$this->addAction('wp_enqueue_scripts', 'jsCssScripts');
	}
	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(
			'title' => false,
			'link' => false,
		), $atts));
		$output = '<li class="submenulink-item">';
			$output .= '<a href="' . $link . '"><span>';
				$output .= $title;
			$output .= '</span></a>';
		$output .= '</li>';
		return $output;
	}

}

vc_map(array(
	"base" => "subpagemenu",
	"name" => __("Menupunkt"),
	"class" => "",
	"as_child" => array('only' => 'subpagemenu_wrap'),
	"content_element" => true,
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => 'div',
			"class" => "",
			"heading" => __("Titel"),
			"param_name" => "title",
			"value" => "",
		),
		array(
			"type" => "textfield",
			"holder" => 'div',
			"class" => "",
			"heading" => __("Link"),
			"param_name" => "link",
			"value" => "",
		),
	)
));