<?php

/*
 * functions and definitions
 *
 * @package WordPress
 */
show_admin_bar(false);
/* * * Register Menu ** */

function register_menu()
{
	$locations = array(
		'main' => 'Hauptnavigation',
		'submenu' => 'Submenu',
		'footer' => 'Footer Navigation',
	);
	register_nav_menus($locations);
}

add_action('init', 'register_menu');

add_theme_support('post-thumbnails');

/**
 * add Image Sizes
 */
add_image_size('asp', 734, 480, array('center', 'center'));

add_action('wp_enqueue_scripts', function () {
	$hash = sha1_file(get_template_directory() . DIRECTORY_SEPARATOR . 'style.css');

	wp_register_style('lightbox', get_template_directory_uri() . '/js/lib/lightbox/css/lightbox.min.css', array(), '2.9.0', 'all');
	wp_enqueue_style('lightbox'); // Enqueue it!

	wp_enqueue_style(
		'theme-stylesheet',
		get_template_directory_uri() . '/style.css',
		[],
		($hash !== false ? substr($hash, -8, -1) : ''),
		'all'
	);
});

/**
 * enqueue Scripts and Styles
 */
function enqueueStylesAndScripts()
{
	/** Scripts * */
	wp_register_script('jquery', get_template_directory_uri() . '/js/lib/jquery-1.12.4.min.js');
	wp_register_script('isotope', get_template_directory_uri() . '/js/lib/jquery.isotope-3.0.4.min.js', 'jquery');
	wp_register_script('lightbox', get_template_directory_uri() . '/js/lib/lightbox/js/lightbox.min.js', 'jquery');
	wp_register_script('action', get_template_directory_uri() . '/js/scripts.js', 'jquery');

    // wp_register_script('mapbox_action', get_template_directory_uri() . '/js/mapbox_action.js', 'jquery', '1.0', false);
    // wp_enqueue_script('mapbox_action');


    wp_enqueue_script('wpb_composer_front_js');
    wp_enqueue_style('js_composer_front');


    /** Styles * */
    wp_enqueue_style('js_composer_custom_css');
}

add_action('wp_enqueue_scripts', 'enqueueStylesAndScripts');

add_action('get_header', 'my_filter_head');

function my_filter_head()
{
	remove_action('wp_head', '_admin_bar_bump_cb');
}

function my_mce4_options($init)
{

    $custom_colours = '
        "FFC734", "VNG Gelb",
        "737373", "VNG Grau",
    ';

    // build colour grid default+custom colors
    $init['textcolor_map'] = '[' . $custom_colours . ']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;

    return $init;
}

add_filter('tiny_mce_before_init', 'my_mce4_options');

/**
 * VC Templates
 */
if (is_plugin_active('js_composer/js_composer.php')) {
	vc_set_shortcodes_templates_dir(
		get_template_directory()
			. DIRECTORY_SEPARATOR . 'js_composer'
			. DIRECTORY_SEPARATOR . 'templates'
			. DIRECTORY_SEPARATOR . 'shortcodes'
	);
	include_once 'vc_templates/vc_yellowbox.php';
	include_once 'vc_templates/vc_asp.php';
	include_once 'vc_templates/vc_pagemenu.php';
	include_once 'vc_templates/vc_referenz_acc.php';
	include_once 'vc_templates/vc_totop.php';
	include_once 'vc_templates/vc_acc.php';
	include_once 'vc_templates/vc_mapitem.php';
	include_once 'vc_templates/vc_header.php';
	include_once 'vc_templates/vc_gallery.php';
}

/**
 * SVG UPLOAD
 */
function kb_svg($svg_mime)
{
	$svg_mime['svg'] = 'image/svg+xml';
	return $svg_mime;
}

add_filter('upload_mimes', 'kb_svg');

function kb_ignore_upload_ext($checked, $file, $filename, $mimes)
{

    if (!$checked['type']) {
        $wp_filetype = wp_check_filetype($filename, $mimes);
        $ext = $wp_filetype['ext'];
        $type = $wp_filetype['type'];
        $proper_filename = $filename;

        if ($type && 0 === strpos($type, 'image/') && $ext !== 'svg') {
            $ext = $type = false;
        }

        $checked = compact('ext', 'type', 'proper_filename');
    }

    return $checked;
}

add_filter('wp_check_filetype_and_ext', 'kb_ignore_upload_ext', 10, 4);


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
			"value" => "Mit dem Aufruf des Videos erklären Sie sich einverstanden, dass Ihre Daten an YouTube übermittelt werden und das Sie die <a href=\"/datenschutz\" target=\"_blank\">Datenschutzerklärung</a> gelesen haben.",
		),
		array(
			"type" => "attach_image",
			"heading" => "Placeholder Image",
			"param_name" => "dsgvo_img",
			"holder" => "img",
		)
	)
));