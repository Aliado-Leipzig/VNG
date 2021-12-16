<?php

class WPBakeryShortCode_vng_slider extends WPBakeryShortCode
{

	public function __construct($settings)
	{
		parent::__construct($settings);
	}

	protected function content($atts, $content = null)
	{
		extract(shortcode_atts(array(
			'pictures' => '',
			'headline' => '',
			'subline' => ''
		), $atts));

		return generateVNGSlider($pictures, $headline, $subline);
	}
}

function generateVNGSlider($pictures, $headline = "", $subline = "")
{
	$output = "<div class='slider'>";
	if (!empty($headline) || !empty($subline)) $output .= "<div class='slider-hover'></div><div class='slider-text-wrapper'><p class='slider-text'>" . $headline . "<p class='sub-text'>" . $subline . "</p></p></div>";
	$picIds = explode(',', $pictures);
	$output .= "<ul>";
	foreach ($picIds as $pic) {
		$output .= "<li>";
		$output .= "<img src='" . wp_get_attachment_url($pic, 'large') . "' />";
		$output .= "</li>";
	}
	$output .= "</ul>";
	if (sizeof($picIds) > 1) $output .= "<div class='slider-btn slider-btn-left'></div><div class='slider-btn slider-btn-right'></div>";
	$output .= "</div>";

	return $output;
}

vc_map(array(
	'base' => 'vng_slider',
	'name' => 'VNG Slider',
	'content_element' => true,
	'params' => array(
		array(
			'type' => 'attach_images',
			'holder' => '',
			'heading' => 'Bilder',
			'param_name' => 'pictures'
		),
		array(
			'type' => 'textarea',
			'holder' => '',
			'heading' => 'Überschrift',
			'param_name' => 'headline'
		),
		array(
			'type' => 'textarea',
			'holder' => '',
			'heading' => 'Sub-Überschrift',
			'param_name' => 'subline'
		)
	)
));