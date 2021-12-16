<?php
/**
 * Mitarbeiter ohne eigene Seite mit Bild
 */
class WPBakeryShortCode_asp_wrap extends WPBakeryShortCodesContainer {

	public function __construct($settings) {
		parent::__construct($settings);
	}

	protected function content($atts, $content = null) {
		extract(shortcode_atts(array(
		), $atts));

		$output = do_shortcode($content);
		return $output;
	}
}

vc_map(array(
	"base" => "asp_wrap",
	"name" => __("Ansprechpartner Wrap"),
	"as_parent" => array('only' => 'asp'),
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => false,
	"is_container" => true,
	"params" => array(
	),
	"js_view" => 'VcColumnView',
));

class WPBakeryShortCode_asp extends WPBakeryShortCode {

	public function __construct($settings) {
		parent::__construct($settings);
		$this->addAction('wp_enqueue_scripts', 'jsCssScripts');
	}
	protected function content($atts, $content = null) {

		extract(shortcode_atts(array(
			'email' => false,
			'post_image' => false,
			'buttontext' => false,
			'layout' => 'vertical',
		), $atts));
		$img = wp_get_attachment_image_src($post_image, 'asp');
		
		
		$output = '<div class="asp-layout-'.$layout.'">';
		$output .= '<div class="asp-wrapper">';
		$output .= '<img src="' . $img[0] . '" class="img-responsive"">';
		$output .= '<div class="asp-content">';
			$output .= ' ' . wpb_js_remove_wpautop($content, true);
			if (!empty($email)) {
				$output .= '<p class="contact-button-wrapper">';
					$output .= '<a class="btn btn-full btn-contact" href="mailto:' . $email . '">'. $buttontext .'</a>';
				$output .= '</p>';
			}
		$output .= '</div>';
		
				if($layout == 'horizontal') {
			$output .= '<div class="vc_clearfix"></div>';
		}
		
		$output .= '</div></div>';
		
		return $output;
	}

}

vc_map(array(
	"base" => "asp",
	"name" => __("Ansprechpartner"),
	"class" => "",
	"content_element" => true,
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => true,
	"params" => array(
		array(
		  'type'        => 'dropdown',
		  'heading'     => __('Layout'),
		  'param_name'  => 'layout',
		  'admin_label' => true,
		  'value'       => array(
		    'horizontal'   => 'horizontal',
		    'vertical'   => 'vertical',
		  ),
		  'std'         => 'vertical'
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
			'type' => 'textfield',
			'heading' => __('E-Mail Adresse'),
			'param_name' => 'email',
		),
		array(
			'type' => 'textfield',
			'heading' => __('Buttontext'),
			'param_name' => 'buttontext',
		),
		array(
			'type' => 'attach_image',
			'heading' => __('Mitarbeiterbild'),
			'holder' => 'img',
			'param_name' => 'post_image',
		),
	)
));