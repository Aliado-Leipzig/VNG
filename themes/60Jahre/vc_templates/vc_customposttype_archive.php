<?php

class WPBakeryShortCode_customposttyp_archive extends WPBakeryShortCode
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

		$aposts = get_posts();
		$output = '<div class="news-wrap" id="news-wrap">';
		$output .= '<h2>AKTUELLES</h2>';
		foreach ($aposts as $apost) {
			$url = get_post_meta($apost->ID, 'post_url', true);
			$output .= '<div class="news-wrap-single clearfix">';
			$output .= '<h3>' . $apost->post_title . '</h3>';
			$newsContents = explode("\n", $apost->post_content);
			if (sizeof($newsContents) > 1 && empty($url)) {
				$output .= '<p>' . $newsContents[0] . '</p>';
				$output .= '<div class="news-single-hidden">';
				foreach ($newsContents as $key => $newsContent) {
					if ($key > 0)
						$output .= '<p>' . $newsContent . '</p>';
				}
				$output .= '</div>';
				$output .= '<div class="news-single-show">';
				$output .= '<span class="news-single-show-text">weiterlesen</span><span class="news-single-show-button"><span class="arrow-down"></span></span>';
				$output .= '</div>';
			} else {
				foreach ($newsContents as $key => $newsContent) {
					$output .= '<p>' . $newsContent . '</p>';
				}
			}
			if(!empty($url)){
				$output .= '<div class="news-single-show">';
					$output .= '<a href="'.$url.'" class="news-single-show-text">mehr zum Thema<span class="news-single-show-button"><span class="arrow-right"></span></span></a>';
				$output .= '</div>';
			}
			$output .= '</div>';
		}
		$output .= '</div>';
		return $output;
	}
}

vc_map(array(
	"base" => "customposttyp_archive",
	"name" => __("Aktuelles"),
	"class" => "",
	"content_element" => true,
	"category" => __('VNG'),
	"show_settings_on_create" => false,
	"params" => array()
));

