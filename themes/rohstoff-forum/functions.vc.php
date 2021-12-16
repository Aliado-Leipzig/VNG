<?php

class WPBakeryShortCode_link_wrapper extends WPBakeryShortCode
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
        $output = '<div class="link-wrapper">';
        if ($link_wrapper_url !== '') {
            $output .= '<a href="' . $href['url'] . '"';

            if ($href['target'] !== '') {
                $output .= ' target="' . $href['target'] . '"';
            }

            $output .= '>';
        }
        $output .= '<div class="link-wrapper-content">' . wpb_js_remove_wpautop($content, true) . '</div>';
        if ($link_wrapper_url !== '') {
            $output .= '</a>';
        }
        $output .= '</div>';

        return $output;
    }
}

vc_map(array(
    'base' => 'link_wrapper',
    'name' => 'Link Wrapper',
    'content_element' => true,
    'icon' => 'link_wrapper',
    'params' => array(
        array(
            'type' => 'vc_link',
            'holder' => '',
            'heading' => 'URL',
            'param_name' => 'link_wrapper_url',
        ),
        array(
            'type' => 'textarea_html',
            'holder' => 'div',
            'heading' => 'Content',
            'param_name' => 'content'
        )
    )
));

class WPBakeryShortCode_slick_slider extends WPBakeryShortCode
{

    public function __construct($settings)
    {
        parent::__construct($settings);
    }

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'slick_slider_slides' => '',
            'downloadable' => '',
        ), $atts));

        $slides = vc_param_group_parse_atts($atts['slick_slider_slides']);

        $output = '<div class="slider center">';
        foreach ($slides as $slide) :
            $output .= '<div class="slick-slide">';
            if (array_key_exists('slick_slider_slide_image', $slide)) {
                $output .= '<div class="vc_col-xs-6 slide-image-wrapper">';
                $output .= '<div class="slide-image" style="background-image: url(' . wp_get_attachment_image_src($slide['slick_slider_slide_image'], 'medium')[0] . ');" ></div>';
                $output .= '</div>';
            }
            if (array_key_exists('slick_slider_slide_line_1', $slide)) {
                $output .= '<div class="slick-slide-text vc_col-xs-6">';
                $output .= '<div class="slick-slide-text-line-1">' . $slide['slick_slider_slide_line_1'] . '</div>';
                $output .= '<div class="slick-slide-text-line-2">' . $slide['slick_slider_slide_line_2'] . '</div>';
                $output .= '<div class="slick-slide-text-line-3">' . $slide['slick_slider_slide_line_3'] . '</div>';
                $output .= '<div class="slick-slide-text-line-4">' . $slide['slick_slider_slide_line_4'] . '</div>';
            }
            if ($slide['slick_slider_slide_requested']) {
                $output .= '<div class="requested">(*angefragt)</div>';
            }
            if (array_key_exists('downloadable', $slide)) {
                $output .= '<div class="image-downloadable">';
                $output .= '<a href="' . wp_get_attachment_image_src($slide['slick_slider_slide_image'], 'full')[0] . '"  download="' . wp_get_attachment_image_src($slide['slick_slider_slide_image'], 'full')[0] . '">Download</a>';
                $output .= '</div>';
            }
            $output .= '</div>';

            //var_dump($downloadable);

            $output .= '</div>';
        endforeach;


        $output .= '</div>';
        return $output;
    }
}

vc_map(array(
    'base' => 'slick_slider',
    'name' => 'Slick Slider',
    'content_element' => true,
    'icon' => 'slick_slider',
    'params' => array(
        array(
            'type' => 'param_group',
            'heading' => 'Slide',
            'param_name' => 'slick_slider_slides',
            'params' => [
                [
                    'type' => 'attach_image',
                    'holder' => 'img',
                    'heading' => 'Slide image',
                    'param_name' => 'slick_slider_slide_image'
                ],
                [
                    'type' => 'textarea',
                    'holder' => 'div',
                    'heading' => 'Zeile 1',
                    'param_name' => 'slick_slider_slide_line_1'
                ],
                [
                    'type' => 'textarea',
                    'holder' => 'div',
                    'heading' => 'Zeile 2',
                    'param_name' => 'slick_slider_slide_line_2'
                ],
                [
                    'type' => 'textarea',
                    'holder' => 'div',
                    'heading' => 'Zeile 3',
                    'param_name' => 'slick_slider_slide_line_3'
                ],
                [
                    'type' => 'textarea',
                    'holder' => 'div',
                    'heading' => 'Zeile 4',
                    'param_name' => 'slick_slider_slide_line_4'
                ],
                [
                    'type' => 'checkbox',
                    'holder' => 'div',
                    'heading' => 'angefragt',
                    'param_name' => 'slick_slider_slide_requested'
                ],
                [
                    'type' => 'checkbox',
                    'heading' => 'Für den Download?',
                    'param_name' => 'downloadable',
                    'value' => [__('Yes') => 'yes'],
                    'description' => 'Dieses Bild ist zum Download bestimmt.'
                ]
            ]
        ),
    )
));

class WPBakeryShortCode_yt_video extends WPBakeryShortCodesContainer
{

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'yt_video_id' => '',
            'yt_playlist' => false
        ), $atts));

        preg_match_all('~\[timecode.*\[/timecode]~sU', $content, $matches);

        $timecodes = array();

        foreach ($matches[0] as $match) {
            preg_match('~timecode_timecode="(.*)"~sU', $match, $timecode);
            preg_match('~timecode_video_id="(.*)"~sU', $match, $timecode_video_id);
            preg_match('~"](.*)\[/timecode]~sU', $match, $timecode_content);

            $timecode = isset($timecode[1]) ? $timecode[1] : '00:00:00';

            if ($yt_playlist && isset($timecode_video_id[1])) {
                $timecode = [
                    'timecode' => $timecode,
                    'video_id' => $timecode_video_id[1],
                    'content' => wpb_js_remove_wpautop($timecode_content[1], true),
                ];
            } else {
                $timecode = [
                    'timecode' => $timecode,
                    'content' => wpb_js_remove_wpautop($timecode_content[1], true),
                ];
            }
            $timecodes[] = $timecode;
        }

        $output = '<div id="video-container" class="video-wrapper" data-video-id="' . $yt_video_id . '"';
        if ($yt_playlist) {
            $output .= ' data-playlist="true"';
        }
        $output .= '>';
        $output .= '<div class="video"><div id="player"></div></div>';
        $output .= '</div>';

        $output .= '<div class="timecodes-container">';
        foreach ($timecodes as $timecode) {
            $output .= '<div class="timecode-wrapper">';
            if (isset($timecode['video_id'])) {
                $output .= '<div class="timecode-content" data-timecode="' . $timecode['timecode'] . '" data-video-id="' . $timecode['video_id'] . '">';
            } else {
                $output .= '<div class="timecode-content" data-timecode="' . $timecode['timecode'] . '">';
            }
            $output .= $timecode['content'] . '</div>';
            $output .= '</div>';
        }
        $output .= '</div>';

        return $output;
    }
}

vc_map(array(
    'base' => 'yt_video',
    'name' => 'Youtube Video',
    'content_element' => true,
    'icon' => 'yt_video',
    'as_parent' => array('only' => 'timecode'),
    'is_container' => true,
    "js_view" => 'VcColumnView',
    'params' => array(
        array(
            'type' => 'textfield',
            'holder' => 'h1',
            'heading' => 'Video-ID',
            'description' => 'ID des Youtube Videos, z.B. Ren1ffPo7DM',
            'param_name' => 'yt_video_id'
        ),
        array(
            'type' => 'checkbox',
            'holder' => 'div',
            'heading' => 'Playlist?',
            'description' => 'Diese Option setzen, wenn die ID zu einer Playlist gehört',
            'param_name' => 'yt_playlist'
        )
    )
));

class WPBakeryShortCode_timecode extends WPBakeryShortCode
{

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'timecode_timecode' => '00:00:00',
            'timecode_video_id' => false
        ), $atts));

        $output = '<div class="timecode-content" data-timecode="' . $timecode_timecode . '">' . wpb_js_remove_wpautop($content, true) . '</div>';

        $output .= '</div>';

        return $output;
    }
}

vc_map(array(
    'base' => 'timecode',
    'name' => 'Sprungmarke',
    'content_element' => true,
    'icon' => 'timecode',
    'as_child' => array('only' => 'yt_video'),
    'params' => array(
        array(
            'type' => 'textfield',
            'holder' => 'h1',
            'heading' => 'Timecode',
            'description' => 'Zeitpunkt zu dem gesprungen werden soll, z.B. 01:23:45',
            'param_name' => 'timecode_timecode'
        ),
        array(
            'type' => 'textfield',
            'holder' => 'h1',
            'heading' => 'Video-ID',
            'description' => 'Wenn eine Playlist eingebettet wurde, wird hier die ID des einzelnen Videos eingetragen',
            'param_name' => 'timecode_video_id'
        ),
        array(
            'type' => 'textarea_html',
            'holder' => 'div',
            'heading' => 'Content',
            'description' => 'Content der Sprungmarke',
            'param_name' => 'content'
        )
    )
));

class WPBakeryShortCode_additional_newsletter_posts extends WPBakeryShortCode
{

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'timecode_timecode' => '00:00:00',
        ), $atts));

        $currentID = get_the_ID();
        $terms = wp_get_post_terms($currentID, NewsletterPostType::TAXONOMY_NAME);
        $termId =  $terms[0]->term_id;
        $posts = NewsletterPostType::getNewsletterByTermID($termId, $currentID);

        $output = '<div class="newsletter-teaser-wrap">';
        foreach ($posts as $post) {
            $output .= '<div class="newsletter-teaser">';
            $output .= '<a href="' . get_the_permalink($post->ID) . '"><h3>' . get_the_title($post->ID) . '</h3></a>';
            $output .= '<p class="newsletter-teaser-excerpt">' . get_field('excerpt_sidebar_archive', $post->ID) . '</p>';
            $output .= '<a href="' . get_the_permalink($post->ID) . '" class="newsletter-teaser-button newsletter-archive-button">';
            $output .= 'mehr dazu';
            $output .= '<div class="ctaArrow ctaArrow-button ctaArrow-buttonRight">';
            $output .= '<div class="ctaArrow--part ctaArrow-left"></div>';
            $output .= '<div class="ctaArrow--part ctaArrow-right"></div>';
            $output .= '</div>';
            $output .= '</a>';
            $output .= '</div>';
        }
        $output .= '</div>';

        return $output;
    }
}

vc_map(array(
    'base' => 'additional_newsletter_posts',
    'name' => 'weitere Newsletter Beiträge',
    'content_element' => true,
    "show_settings_on_create" => false,
    'params' => array()
));


class WPBakeryShortCode_newsletter_sidebar_archive extends WPBakeryShortCode
{

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'timecode_timecode' => '00:00:00',
        ), $atts));

        $terms = get_terms([
            'taxonomy' => NewsletterPostType::TAXONOMY_NAME,
            'hide_empty' => true
        ]);

        $output = '<div class="newsletter-sidebar-archive-wrap">';
        $output .= '<h5 class="newsletter-sidebar-archive-title active js-acc-trigger">';
        $output .= 'Newsletter Übersicht';
        $output .= '<div class="ctaArrow ctaArrow-acc">';
        $output .= '<div class="ctaArrow--part ctaArrow-left ctaArrow-left-vc" ></div>';
        $output .= '<div class="ctaArrow--part ctaArrow-right"></div>';
        $output .= '</div>';
        $output .= '</h5>';
        $output .= '<div class="newsletter-sidebar-archive-inner js-acc-content">';
        foreach ($terms as $term) {
            $output .= '<a href="' . get_term_link($term->term_id) . '" class="newsletter-sidebar-archive-link">';
            $output .= $term->name;
            $output .= '</a>';
        }
        $output .= '</div>';
        $output .= '</div>';

        return $output;
    }
}

vc_map(array(
    'base' => 'newsletter_sidebar_archive',
    'name' => 'Newsletter Sidebar Archiv',
    'content_element' => true,
    "show_settings_on_create" => false,
    'params' => array()
));

class WPBakeryShortCode_newsletter_editorial extends WPBakeryShortCode
{

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'timecode_timecode' => '00:00:00',
        ), $atts));

        $terms = get_terms([
            'taxonomy' => NewsletterPostType::TAXONOMY_NAME,
            'hide_empty' => true
        ]);

        $output = '<div class="newsletter-editorial">';
        $output .= $content;
        $output .= '</div>';

        return $output;
    }
}

vc_map(array(
    'base' => 'newsletter_editorial',
    'name' => 'Newsletter Editorial',
    'content_element' => true,
    "show_settings_on_create" => true,
    'params' => array(
        array(
            'type' => 'textarea_html',
            'holder' => 'div',
            'heading' => 'Content',
            'description' => 'Content der Sprungmarke',
            'param_name' => 'content'
        )
    )
));

class WPBakeryShortCode_newsletter_sidebar_cta extends WPBakeryShortCode
{

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'title' => '',
            'text' => '',
            'link' => ''
        ), $atts));

        $link = vc_build_link($link);

        $output = '<div class="newsletter-sidebar-cta-wrap clear">';
        $output .= '<h3 class="newsletter-sidebar-cta-title">' . $title . '</h3>';
        $output .= '<p class="newsletter-sidebar-cta-text">' . $text . '</p>';
        $output .= '<a class="newsletter-sidebar-cta-link" href="' . $link['url'] . '">' . $link['title'] . '</a>';
        $output .= '</div>';

        return $output;
    }
}

vc_map(array(
    'base' => 'newsletter_sidebar_cta',
    'name' => 'Newsletter Sidebar CTA',
    'content_element' => true,
    "show_settings_on_create" => false,
    'params' => array(
        array(
            'type' => 'textfield',
            'description' => 'Überschrift',
            'param_name' => 'title'
        ),
        array(
            'type' => 'textarea',
            'description' => 'Text',
            'param_name' => 'text'
        ),
        array(
            'type' => 'vc_link',
            'description' => 'Verlinkung',
            'param_name' => 'link'
        )
    )
));


if (class_exists('WPBakeryShortCodesContainer')) {
    class WPBakeryShortCode_gallerywrap extends WPBakeryShortCodesContainer
    {

        protected function content($atts, $content = null)
        {
            extract(shortcode_atts(array(), $atts));
            $output = '<div class="q4-gallery"><div class="items">';
            $output .= wpb_js_remove_wpautop($content);
            $output .= '</div></div>';

            return $output;
        }
    }
}

vc_map(array(
    "base" => "gallerywrap",
    "name" => __("Gallery Container"),
    "icon" => "q4_galleryContainer",
    "as_parent" => array('only' => 'galleryitem'),
    "category" => __('Content'),
    "show_settings_on_create" => false,
    "is_container" => true,
    "js_view" => 'VcColumnView'
));

if (class_exists('WPBakeryShortCode')) {
    class WPBakeryShortCode_galleryitem extends WPBakeryShortCode
    {

        protected function content($atts, $content = null)
        {
            extract(shortcode_atts(array(
                'galleryitem_image' => false,
                'galleryitem_size' => '3x3',
            ), $atts));

            $item_image = wp_get_attachment_image_src($galleryitem_image, 'full');
            $item_image_thumb = wp_get_attachment_image_src($galleryitem_image, 'large');

            $output = '<div class="galleryitem galleryitemsize_' . $galleryitem_size . '">';
            $output .= '<a href="' . $item_image[0] . '" data-lightbox="projectlightbox" class="lightboxlink" data-title="' . get_the_excerpt($galleryitem_image) . '"><div class="img" style="background-image: url(' . $item_image_thumb[0] . ')"></div></a>';
            $output .= '</div>';
            return $output;
        }
    }
}

vc_map(array(
    "base" => "galleryitem",
    "name" => __("Gallery Item"),
    "as_child" => array('only' => 'gallerywrap'),
    "content_element" => true,
    "category" => __('Content'),
    "show_settings_on_create" => true,
    "icon" => "q4_galleryItem",
    "params" => array(
        array(
            "type" => "dropdown",
            "holder" => 'p',
            "class" => "",
            "heading" => __("Image-Size"),
            "param_name" => "galleryitem_size",
            'value'       => array(
                '3x3'   => '3x3',
                '3x2'   => '3x2',
                '3x1'    => '3x1',
                '2x3'   => '2x3',
                '2x2'   => '2x2',
                '2x1'    => '2x1',
                '1x3'    => '1x3',
                '1x2'   => '1x2',
                '1x1' => '1x1',
            ),
        ),
        array(
            "type" => "attach_image",
            "holder" => 'img',
            "class" => "",
            "heading" => __("Image"),
            "param_name" => "galleryitem_image",
            "value" => "",
        ),
    )
));

class WPBakeryShortCode_zweiklick_youtube_video extends WPBakeryShortCode
{

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'video_url' => '',
            'container_height' => '400',
            'dsgvo_img' => '4673',
        ), $atts));

        parse_str(parse_url($video_url, PHP_URL_QUERY), $my_array_of_vars);
        $video_id = $my_array_of_vars['v'];

        $output = '<div class="video_wrapper" style="height:' . $container_height . 'px; background-image: url(' . wp_get_attachment_image_src($dsgvo_img, 'full')[0] . ');">';
        $output .= '<div class="video_trigger" data-source="' . $video_id . '">';
        $output .= '<p class="text-center">';
        $output .= wpb_js_remove_wpautop($content, true);
        $output .= '</p>';
        $output .= '<div class="button-container">';
        $output .= '<input type="button" class="button-inner" value="Akzeptieren" />';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '<div class="video_layer"><iframe src="" border="0"></iframe></div>';
        $output .= '</div>';


        return $output;
    }
}

vc_map(array(
    'base' => 'zweiklick_youtube_video',
    'name' => 'Zwei-Klick Youtube Video',
    'content_element' => true,
    'icon' => 'zweiklick_youtube_video',
    "show_settings_on_create" => true,
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => "Video URL",
            "param_name" => "video_url",
            "holder" => "h1",
        ),
        array(
            "type" => "textfield",
            "heading" => "Höhe",
            "param_name" => "container_height",
            "holder" => "div",
        ),
        array(
            "type" => "textarea_html",
            "heading" => "Hinweistext",
            "param_name" => "content",
            "holder" => "div",
            "value" => "Mit dem Aufruf des Videos erklären Sie sich einverstanden, dass Ihre Daten an YouTube übermittelt werden und das Sie die <a href=\"/datenschutz/\" target=\"_blank\">Datenschutzerklärung</a> gelesen haben.",
        ),
        array(
            "type" => "attach_image",
            "heading" => "Placeholder Image",
            "param_name" => "dsgvo_img",
            "holder" => "img",
        )
    )
));

class WPBakeryShortCode_meetings_archive extends WPBakeryShortCode
{
    protected function content($atts, $content = null)
    {
        $args = array(
            'post_type' => 'meeting',
            'tax_query' => array(
                array(
                    'taxonomy' => 'ag',
                    'field'    => 'slug',
                    'terms'    => get_the_terms($post->ID, 'ag')[0]->slug,
                ),
            ),
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) {

            $output = '<div class="meetings-archive-wrap">';
            $output .= '<h2 class="meetings-archive-title">';
            $output .= 'Meetings';
            $output .= '</h2>';
            $output .= '<div class="meetings-archive-list">';

            while ($query->have_posts()) {
                $query->the_post();
                $output .= '<div class="meetings-archive-item">';
                $output .= '<h3><a href="' . get_the_permalink() . '" class="meetings-archive-link">';
                $output .= get_the_title();
                $output .= '</a></h3>';
                $output .= '<div class="meetings-archive-date">';
                $output .= get_the_date();
                $output .= '</div>';
                $output .= '<div class="meetings-archive-excerpt"><p>';
                $output .= get_the_excerpt();
                $output .= '</p></div>';
                $output .= '<div class="meetings-archive-more">';
                $output .= '<a class="meetings-archive-more-link" href="' . get_the_permalink() . '">mehr dazu';
                $output .= '<div class="ctaArrow ctaArrow-button ctaArrow-buttonRight ">
		                    <div class="ctaArrow--part ctaArrow-left"></div>
		                    <div class="ctaArrow--part ctaArrow-right"></div>
	                        </div>';
                $output .= '</a>';
                $output .= '</div>';
                $output .= '</div>';
            }

            wp_reset_postdata();

            $output .= '</div>';
            $output .= '</div>';

            return $output;
        }
    }
}

vc_map(array(
    'base' => 'meetings_archive',
    'name' => 'Meetings Archiv',
    'content_element' => true,
    "show_settings_on_create" => false,
    'params' => array()
));

class WPBakeryShortCode_pressteasers extends WPBakeryShortCode
{
    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'tags' => '',
            'count' => '-1',
        ), $atts));

        $releases = PressemitteilungPostType::getPressemitteilungByTags($tags, $count);

        $output = '<div class="pressteasers-sidebar-archive-container">';
        $output .= '<h5 class="pressteasers-sidebar-archive-headline js-acc-trigger active">';
        $output .= 'Pressemitteilungen';
        $output .= '<div class="ctaArrow ctaArrow-acc">';
        $output .= '<div class="ctaArrow--part ctaArrow-left ctaArrow-left-vc"></div>';
        $output .= '<div class="ctaArrow--part ctaArrow-right"></div>';
        $output .= '</div>';
        $output .= '</h5>';
        $output .= $releases;

        $output .= '</div>';



        return $output;
    }
}

// Create multi dropdown param type
vc_add_shortcode_param('dropdown_multi', 'dropdown_multi_settings_field');
function dropdown_multi_settings_field($param, $value)
{
    $param_line = '';
    $param_line .= '<select multiple name="' . esc_attr($param['param_name']) . '" class="wpb_vc_param_value wpb-input wpb-select ' . esc_attr($param['param_name']) . ' ' . esc_attr($param['type']) . '">';
    foreach ($param['value'] as $text_val => $val) {
        if (is_numeric($text_val) && (is_string($val) || is_numeric($val))) {
            $text_val = $val;
        }
        $text_val = __($text_val, "js_composer");
        $selected = '';

        if (!is_array($value)) {
            $param_value_arr = explode(',', $value);
        } else {
            $param_value_arr = $value;
        }

        if ($value !== '' && in_array($val, $param_value_arr)) {
            $selected = ' selected="selected"';
        }
        $param_line .= '<option class="' . $val . '" value="' . $val . '"' . $selected . '>' . $text_val . '</option>';
    }
    $param_line .= '</select>';

    return  $param_line;
}

add_action('vc_before_init', 'pressteaser_vc_map');

function pressteaser_vc_map()
{
    vc_map(array(
        'base' => 'pressteasers',
        'name' => 'Pressemitteilung Teaser',
        'content_element' => true,
        "show_settings_on_create" => true,
        'params' => array(
            array(
                "type" => "dropdown_multi",
                "heading" => "Tags",
                "param_name" => "tags",
                "holder" => "h1",
                "value" => PressemitteilungPostType::getTags(),
                'description' => 'STRG+Klick um mehrere Tags auszuwählen'
            ),
            array(
                "type" => "textfield",
                "heading" => "Anzahl",
                "param_name" => "count",
                "holder" => "div",
                'description' => 'Anzahl der anzuzeigenden Posts. -1 für alle'
            )
        )
    ));
}

class WPBakeryShortCode_Pressrelease extends WPBakeryShortCode
{
    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'pressrelease_post_title' => '',
        ), $atts));
        // $post = get_post($pressrelease_post_id);

        $post = get_page_by_title($pressrelease_post_title, OBJECT, PressemitteilungPostType::POST_TYPE_NAME);

        // print_r($pressrelease_post_title);
        // print_r($post);
        // die;




        $output = '<div class="pressrelease-wrapper">';
        $output .= '<a href=' . get_permalink($post->ID) . '>';
        $output .= '<h1>' . $post->post_title . '</h1>';
        $output .= '</a>';
        $output .= '<div class="pressrelease-meta">';
        $output .= date_format(date_create($post->post_date), 'd.m.Y');
        $output .= '</div>';
        $output .= '<div class="pressrelease-body">';
        $output .= '<p>' . $post->post_excerpt . '</p>';
        $output .= '</div>';
        $output .= '<a href=' . get_permalink($post->ID) . ' class="pressrelease-read-more-button">';
        $output .= 'mehr dazu';
        $output .= '<div class="ctaArrow ctaArrow-button ctaArrow-buttonRight ">';
        $output .= '<div class="ctaArrow--part ctaArrow-left"></div>';
        $output .= '<div class="ctaArrow--part ctaArrow-right"></div>';
        $output .= '</div>';
        $output .= '</a>';
        $output .= '</div>';

        return $output;
    }
}

add_action('vc_before_init', 'pressrelease_vc_map');

function pressrelease_vc_map()
{
    $args = array(
        'numberposts'        => -1, // -1 is for all
        'post_type'        => PressemitteilungPostType::POST_TYPE_NAME, // or 'post', 'page'
    );

    // Get the posts
    $posts = get_posts($args);

    $dropdown_values = [];
    $dropdown_values[] = ['---Post auswählen---'];

    foreach ($posts as $post) {
        $dropdown_values[] = $post->post_title;
    }

    vc_map(array(
        'base' => 'pressrelease',
        'name' => 'Pressebericht',
        'content_element' => true,
        "show_settings_on_create" => true,
        'params' => array(
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => "Pressebericht",
                "param_name" => "pressrelease_post_title",
                "value" => $dropdown_values,
                "description" => "",
                "holder" => 'div'
            )
        )
    ));
}

class WPBakeryShortCode_Pagination extends WPBakeryShortCode
{
    protected function content($atts, $content = null)
    {
        $output = '<div class="pressrelease-overview-pagination-wrapper">';
        $output .= '<span class="pagination-prev">';
        $output .= '<';
        $output .= '</span>';
        $output .= '<span class="pagination-current-wrapper">';
        $output .= '<span class="current-page">1</span>';
        $output .= '</span>';
        $output .= '<span class="pagination-next">';
        $output .= '>';
        $output .= '</span>';
        $output .= '</div>';

        return $output;
    }
}

vc_map(array(
    'base' => 'pagination',
    'name' => 'Pagination für Presseüberischt',
    'content_element' => true,
    "show_settings_on_create" => false,
    'params' => array()
<<<<<<< HEAD
=======
));

class WPBakeryShortCode_mapbox extends WPBakeryShortCode
{
    protected function content($atts, $content = null)
    {
        $output = locate_template(include(__DIR__ . '/vc-elements/vc_mapbox.php'));
        return $output;
    }
}

vc_map(array(
    'base' => 'mapbox',
    'name' => 'Mapbox',
    'content_element' => true,
    'show_settings_on_create' => false,
    'params' => array()
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
));