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
		'footer' => 'Footer Navigation',
	);
	register_nav_menus($locations);
}

add_action('init', 'register_menu');

add_theme_support('post-thumbnails');

/**
 * add Image Sizes
 */
//add_image_size('shortcut', 767, 570, array( 'center', 'center' ) );

/**
 * enqueue Scripts and Styles
 */
function enqueueStylesAndScripts()
{
	/** Scripts * */
	wp_register_script('jquery', get_template_directory_uri() . '/js/lib/jquery-1.12.4.min.js');
	wp_register_script('action', get_template_directory_uri() . '/js/_action.js', 'jquery');

	wp_enqueue_script('jquery');
	wp_enqueue_script('action');

	/** Styles * */
	wp_register_style('styles', get_template_directory_uri() . '/css/custom.css?cb=2');
	wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'enqueueStylesAndScripts');

add_action('get_header', 'my_filter_head');

function my_filter_head()
{
	remove_action('wp_head', '_admin_bar_bump_cb');
}

include_once 'lib/PartPostType.php';
new PartPostType;

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