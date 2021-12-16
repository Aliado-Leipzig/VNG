<?php

class WPBakeryShortCode_vng_button extends WPBakeryShortCode
{

	public function __construct($settings)
	{
		parent::__construct($settings);
	}

	protected function content($atts, $content = null)
	{
		extract(shortcode_atts(array(
			'link_wrapper_url' => '',
		), $atts));
		if ($link_wrapper_url !== '') {
			$href = vc_build_link($link_wrapper_url);
		}
		$output = '<div class="button-container">';
		if ($link_wrapper_url !== '') {
			$output .= '<a class="button" href="' . $href['url'] . '"';

			if ($href['target'] !== '') {
				$output .= ' target="' . $href['target'] . '"';
			}

			$output .= '>' . $content . '</a>';
		}
		$output .= '</div>';

		return $output;
	}
}

vc_map(array(
	'base' => 'vng_button',
	'name' => 'VNG Button',
	'content_element' => true,
	'params' => array(
		array(
			'type' => 'vc_link',
			'holder' => '',
			'heading' => 'URL',
			'param_name' => 'link_wrapper_url',
		),
		array(
			'type' => 'textarea',
			'holder' => '',
			'heading' => 'Content',
			'param_name' => 'content'
		)
	)
));