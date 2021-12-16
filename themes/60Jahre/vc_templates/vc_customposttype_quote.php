<?php

class WPBakeryShortCode_customposttyp_quote extends WPBakeryShortCode
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

        $quotes = QuotePostType::getQuote();

        $output = '<div class="quotes-container">';

        foreach ($quotes as $quote) {
            $video = get_post_meta($quote->ID, 'quote_video_url', true);
            $author = get_post_meta($quote->ID, 'quote_person', true);
            $position = get_post_meta($quote->ID, 'quote_position', true);
            $content = wpautop($quote->post_content);

            $output .= '<div class="quote-wrapper">';
                $output .= '<div class="quote-content">' . $content . '</div>';
                $output .= '<div class="quote-author-wrapper"><span class="quote-author">' . $author . '</span>, <span class="quote-position">' . $position . '</span>';
                    $output .= '<div class="video-wrapper">';
                        $output .= '<a href="' . $video . '" class="yt-icon" target="_blank"><span class="video-text-wrapper">Zur Grußbotschaft</span>';
                            $output .= '<span class="play-wrapper">';
                                $output .= '<img src="' . get_stylesheet_directory_uri() . '/img/if_youtube_317714.png" alt="VNG YouTube" title="VNG YouTube" />';
                            $output .= '</span>';
                        $output .= '</a>';
                    $output .= '</div>';
                $output .= '</div>';
            $output .= '</div>';
        }

        $output .= '</div>';

        return $output;
    }
}

vc_map(array(
    "base" => "customposttyp_quote",
    "name" => __("Zitate"),
    "class" => "",
    "content_element" => true,
    "category" => __('VNG'),
    "show_settings_on_create" => false,
    "params" => array()
));

