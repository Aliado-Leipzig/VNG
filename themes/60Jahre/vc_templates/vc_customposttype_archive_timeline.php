<?php

class WPBakeryShortCode_customposttyp_archive_timeline extends WPBakeryShortCode
{

	public function __construct($settings)
	{
		parent::__construct($settings);
		$this->addAction('wp_enqueue_scripts', 'jsCssScripts');
	}

	protected function content($atts, $content = null)
	{

		extract(shortcode_atts(array(
			'selection' => false,
		), $atts));

		$hists = HistoryPostType::getHistory();
		$output = '<div class="timeline-wrap" id="timeline-wrap">';
			$output .= '<svg id="timeline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet">';
				$output .= '<g id="local" transform="scale(1)">';
				$output .= '</g>';
			$output .= '</svg>';

			$output .= '<h2>60 Jahre VNG: Eine kurze Zeitreise</h2>';
			foreach ($hists as $hist) {
				$image =get_the_post_thumbnail_url( $hist->ID,'timeline');
				$image_size = HistoryPostType::getMeta('size_image',$hist->ID);
				$image_x = HistoryPostType::getMeta('x_image',$hist->ID);
				$image_y = HistoryPostType::getMeta('y_image',$hist->ID);
				//$x = (empty(HistoryPostType::getMeta('x',$hist->ID))) ? '-75' : HistoryPostType::getMeta('x',$hist->ID);
				//$y = (empty(HistoryPostType::getMeta('y',$hist->ID))) ? '0' : HistoryPostType::getMeta('y',$hist->ID);
				$year = HistoryPostType::getMeta('year',$hist->ID);
				$imageWidth = ($image_x+$image_size);
				$output .= '<div class="timeline-single clearfix" style="left:'.$image_x.'px; top:'.$image_y.'px;">';
					$output .= '<div class="timeline-single-image-wrap" style="width:'.$image_size.'px; ">';
						$output .= '<div class="timeline-single-image" style="width:'.$image_size.'px;height:'.$image_size.'px;">';
							$output .= '<img width="'.$image_size.'" height="'.$image_size.'" src="'.$image.'" class="img-responsive">';
						$output .= '</div>';
						$output .= '<div class="timeline-single-year">';
							$output .= '<h4>'.$year.'</h4>';
						$output .= '</div>';
					$output .= '</div>';
					$output .= '<div class="timeline-single-text-wrap" style="width:calc(100% - '.$imageWidth.'px);">';
						$output .= '<h3>'.$hist->post_title.'</h3>';
						$output .= wpautop($hist->post_content);
					$output .= '</div>';
				$output .= '</div>';
			}
		$output .= '</div>';
		return $output;
	}
}

vc_map(array(
	"base" => "customposttyp_archive_timeline",
	"name" => __("Zeitstrahl"),
	"class" => "",
	"content_element" => true,
	"category" => __('VNG'),
	"show_settings_on_create" => false,
	"params" => array()
));

