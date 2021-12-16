<?php
/**
 * Akkordeon
 */
class WPBakeryShortCode_acc_content extends WPBakeryShortCode {

	public function __construct($settings) {
		parent::__construct($settings);
		$this->addAction('wp_enqueue_scripts', 'jsCssScripts');
	}
	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(
			'title' => false,
			'text' => false,
			'headerclass' => false,
			'bodyclass' => false,
		), $atts));
		$output = '<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid ' . $headerclass . ' header">';
			$output .= '<div class="acc-opener">';
				$output .= '<div class="wpb_column vc_column_container vc_col-sm-10">';
					$output .= '<div class="vc_column-inner">';
						$output .= '<div class="wpb_wrapper">';
							$output .= '<div class="wpb_text_column wpb_content_element">';
								$output .= '<div class="wpb_wrapper">';
									$output .= '<h4>';
										$output .= $title;
									$output .= '</h4>';
								$output .= '</div>';
							$output .= '</div>';
						$output .= '</div>';
					$output .= '</div>';
				$output .= '</div>';
				$output .= '<div class="wpb_column vc_column_container vc_col-sm-2">';
					$output .= '<div class="vc_column-inner">';
						$output .= '<div class="wpb_wrapper">';
							$output .= '<div class="wpb_text_column wpb_content_element">';
								$output .= '<div class="wpb_wrapper">';
									$output .= '<div class="icon control-button-wrapper">s';
										$output .= '<i class="vc_tta-controls-icon vc_tta-controls-icon-plus">Q</i>';
									$output .= '</div>';
								$output .= '</div>';
							$output .= '</div>';
						$output .= '</div>';
					$output .= '</div>';
				$output .= '</div>';
			$output .= '</div>';
		$output .= '</div>';
		$output .= '<div class="vc_row-full-width vc_clearfix"></div>';
		
		$output .= '<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid toggle-text ' . $bodyclass . ' body">';
			$output .= '<div class="wpb_column vc_column_container vc_col-sm-12">';
				$output .= '<div class="vc_column-inner">';
					$output .= '<div class="wpb_wrapper">';
						$output .= '<div class="wpb_text_column wpb_content_element">';
							$output .= '<div class="wpb_wrapper">';
								$output .= '<div class="hidden-text">';
									$output .= '<p>';
										$output .= ' ' . wpb_js_remove_wpautop($content, true);
									$output .= '</p>';
								$output .= '</div>';
							$output .= '</div>';
						$output .= '</div>';
					$output .= '</div>';
				$output .= '</div>';
			$output .= '</div>';
		$output .= '</div>';
		$output .= '<div class="vc_row-full-width vc_clearfix"></div>';
		return $output;
	}
}

vc_map(array(
	"base" => "acc_content",
	"name" => __("Akkordeon"),
	"class" => "",
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
			"type" => "textarea_html",
			"holder" => 'div',
			"class" => "",
			"heading" => __("Lange Beschreibung"),
			"param_name" => "content",
			"value" => "",
		),
		array(
			"type" => "textfield",
			"holder" => 'div',
			"class" => "",
			"heading" => __("CSS Header Klasse"),
			"param_name" => "headerclass",
			"value" => "",
		),
		array(
			"type" => "textfield",
			"holder" => 'div',
			"class" => "",
			"heading" => __("CSS Body Klasse"),
			"param_name" => "bodyclass",
			"value" => "",
		),
	)
));