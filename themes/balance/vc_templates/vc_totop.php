<?php
/**
 * Subpagemenu
 */
class WPBakeryShortCode_totop extends WPBakeryShortCode {

	public function __construct($settings) {
		parent::__construct($settings);
		$this->addAction('wp_enqueue_scripts', 'jsCssScripts');
	}
	protected function content($atts, $content = null) {
		extract(shortcode_atts(array(
		), $atts));
		$output = '<div id="top" class="to-top">';
			$output .= '<svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28.4 28.4">';
				$output .= '<defs>';
					$output .= '<style>.cls-1,.cls-3{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{stroke:#707070;}.cls-4{fill:#707070;}</style>';
					$output .= '<clipPath id="clip-path" transform="translate(-10.8 -10.8)">';
						$output .= '<rect class="cls-1" x="10.8" y="10.8" width="28.4" height="28.4"/>';
					$output .= '</clipPath>';
				$output .= '</defs>';
				$output .= '<title>Nach oben</title>';
				$output .= '<g class="cls-2">';
					$output .= '<circle class="cls-3" cx="14.2" cy="14.2" r="13.7"/>';
					$output .= '<path class="cls-4" d="M31.08,25.53a.2.2,0,0,0,.11,0,.29.29,0,0,0,.09-.11.67.67,0,0,0,.06-.2,2.19,2.19,0,0,0,0-.62.69.69,0,0,0-.06-.2.29.29,0,0,0-.09-.11.2.2,0,0,0-.11,0H19.94L22.3,22q1.2-1.16,2.43-2.39a.36.36,0,0,0,.09-.13.25.25,0,0,0,0-.15.58.58,0,0,0-.1-.2,2.57,2.57,0,0,0-.23-.26,1.75,1.75,0,0,0-.25-.21.49.49,0,0,0-.19-.09.28.28,0,0,0-.14,0,.31.31,0,0,0-.11.07l-5.72,5.71a1,1,0,0,0-.18.26.64.64,0,0,0-.05.27.58.58,0,0,0,.06.3,1.43,1.43,0,0,0,.17.22l5.72,5.72a.3.3,0,0,0,.11.07.29.29,0,0,0,.14,0,.5.5,0,0,0,.19-.09,1.74,1.74,0,0,0,.25-.21,2.56,2.56,0,0,0,.23-.26.57.57,0,0,0,.1-.2.26.26,0,0,0,0-.16.36.36,0,0,0-.09-.13q-1.23-1.22-2.43-2.38l-2.36-2.25Z" transform="translate(-10.8 -10.8)"/>';
				$output .= '</g>';
			$output .= '</svg>';
		$output .= '</div>';
		return $output;
	}
}

vc_map(array(
	"base" => "totop",
	"name" => __("To Top Element"),
	"class" => "",
	"content_element" => true,
	"category" => __('ViertelEnergie'),
	"show_settings_on_create" => true,
	"params" => array(
		
	)
));