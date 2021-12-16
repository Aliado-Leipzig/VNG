<?php

class WPBakeryShortCode_vng_werke extends WPBakeryShortCode
{

	public function __construct($settings)
	{
		parent::__construct($settings);
	}

	protected function content($atts, $content = null)
	{
		extract(shortcode_atts(array(
			'sammlung_id' => '',
		), $atts));

		$werke_query = get_werke_query_by_sammlung(0, $sammlung_id);
		return generateVNGWerke($werke_query->posts, $werke_query->max_num_pages);
	}
}

function generateVNGWerke($posts, $max_num_pages = 1)
{
	wp_register_script('isotope', get_template_directory_uri() . '/js/lib/isotope.pkgd.min.js', array()); // Isotope
	wp_enqueue_script('isotope'); // Enqueue it!

	$output = '<div id="sammlung-werke" class="werke-list">';

	foreach (fill_werke($posts) as $werk) {
		$output .= '<a class="grid-item" href="' . $werk->url . '"><img src="' . $werk->picture . '"/><figcaption style="padding-top: 5px !important;">' . $werk->post_title . '</figcaption><figcaption style="padding-top: 0px !important; font-family: Open Sans, Light, sans-serif">' . $werk->kuenstler_full . '</figcaption></a>';
	}

	$output .= '</div>';

	if ($max_num_pages > 1) {
		$output .= '<div class="button-container button-container-centered"><a id="load-werke" sammlung="' . $sammlung_id . '" class="button">mehr</a></div>';
	}

	return $output;
}

$sammlungen_ids = array();
foreach (get_sammlungen() as $sammlung) {
	$sammlungen_ids[$sammlung->post_title] = $sammlung->ID;
}

vc_map(array(
	'base' => 'vng_werke',
	'name' => 'VNG Sammlung > Werke',
	'content_element' => true,
	'params' => array(
		array(
			'type' => 'dropdown',
			'param_name' => 'sammlung_id',
			'value' => $sammlungen_ids, // here I'm stuck
			'description' => 'anzuzeigende Sammlung'
		)
	)
));