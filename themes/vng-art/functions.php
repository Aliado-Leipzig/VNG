<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

foreach (glob(__DIR__ . '/vc_elements/*.php') as $file) {
	include_once($file);
}
// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
	$content_width = 900;
}

if (function_exists('add_theme_support')) {
	// Add Menu Support
	add_theme_support('menus');

	// Add Thumbnail Theme Support
	add_theme_support('post-thumbnails');
	add_image_size('large', 700, '', true); // Large Thumbnail
	add_image_size('medium', 250, '', true); // Medium Thumbnail
	add_image_size('small', 120, '', true); // Small Thumbnail
	add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

	// Add Support for Custom Backgrounds - Uncomment below if you're going to use
	/*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
	));*/

	// Add Support for Custom Header - Uncomment below if you're going to use
	/*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
	));*/

	// Enables post and comment RSS feed links to head
	add_theme_support('automatic-feed-links');

	// Localisation Support
	load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// navigation
function get_header_menu()
{
	wp_nav_menu(
		array(
			'theme_location' => 'header-menu',
			'menu' => '',
			'container' => 'div',
			'container_class' => 'menu-{menu slug}-container',
			'container_id' => '',
			'menu_class' => 'menu',
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<div class="menu-container"><ul>%3$s</ul></div>',
			'depth' => 0,
			'walker' => ''
		)
	);
}

function get_footer_menu()
{
	wp_nav_menu(
		array(
			'theme_location' => 'footer-menu',
			'menu' => '',
			'container' => 'div',
			'container_class' => 'menu-{menu slug}-container',
			'container_id' => '',
			'menu_class' => 'menu',
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul>%3$s</ul>',
			'depth' => 0,
			'walker' => ''
		)
	);
}


// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

		wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
		wp_enqueue_script('conditionizr'); // Enqueue it!

		wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
		wp_enqueue_script('modernizr'); // Enqueue it!

		wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
		wp_enqueue_script('html5blankscripts'); // Enqueue it!
	}
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
	if (is_page('pagenamehere')) {
		wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
		wp_enqueue_script('scriptname'); // Enqueue it!
	}
}

function load_isotope()
{
	wp_register_script('isotope', get_template_directory_uri() . '/js/lib/isotope.pkgd.min.js', array()); // Isotope
	wp_enqueue_script('isotope'); // Enqueue it!
}

function load_imagesloaded()
{
	wp_register_script('imagesloaded', get_template_directory_uri() . '/js/lib/imagesloaded.pkgd.min.js', array()); // imagesloaded
	wp_enqueue_script('imagesloaded'); // Enqueue it!
}

function load_lazyload()
{
	wp_register_script('lazyload', get_template_directory_uri() . '/js/lib/lazyload.js', array()); // lazyload
	wp_enqueue_script('lazyload'); // Enqueue it!
}

// Load HTML5 Blank styles
function html5blank_styles()
{
	wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
	wp_enqueue_style('normalize'); // Enqueue it!

	wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
	wp_enqueue_style('html5blank'); // Enqueue it!
}


// Disable the emoji's

function disable_emojis()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

	// Remove from TinyMCE
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

add_action('init', 'disable_emojis');


// Filter out the tinymce emoji plugin.

function disable_emojis_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
	register_nav_menus(array( // Using array to specify more menus if needed
		'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
		'footer-menu' => __('Footer Menu', 'html5blank'), // Sidebar Navigation
	));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
	$args['container'] = false;
	return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
	return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
	return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
	global $post;
	if (is_home()) {
		$key = array_search('blog', $classes);
		if ($key > -1) {
			unset($classes[$key]);
		}
	} elseif (is_page()) {
		$classes[] = sanitize_html_class($post->post_name);
	} elseif (is_singular()) {
		$classes[] = sanitize_html_class($post->post_name);
	}

	return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
	// Define Sidebar Widget Area 1
	register_sidebar(array(
		'name' => __('Widget Area 1', 'html5blank'),
		'description' => __('Description for this widget-area...', 'html5blank'),
		'id' => 'widget-area-1',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	// Define Sidebar Widget Area 2
	register_sidebar(array(
		'name' => __('Widget Area 2', 'html5blank'),
		'description' => __('Description for this widget-area...', 'html5blank'),
		'id' => 'widget-area-2',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
	global $wp_widget_factory;
	remove_action('wp_head', array(
		$wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
		'recent_comments_style'
	));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
	global $wp_query;
	$big = 999999999;
	echo paginate_links(array(
		'base' => str_replace($big, '%#%', get_pagenum_link($big)),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages
	));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
	return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
	return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
	global $post;
	if (function_exists($length_callback)) {
		add_filter('excerpt_length', $length_callback);
	}
	if (function_exists($more_callback)) {
		add_filter('excerpt_more', $more_callback);
	}
	$output = get_the_excerpt();
	$output = apply_filters('wptexturize', $output);
	$output = apply_filters('convert_chars', $output);
	$output = '<p>' . $output . '</p>';
	echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
	global $post;
	return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
	return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
	return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html)
{
	$html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
	return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar($avatar_defaults)
{
	$myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
	$avatar_defaults[$myavatar] = "Custom Gravatar";
	return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
	if (!is_admin()) {
		if (is_singular() and comments_open() and (get_option('thread_comments') == 1)) {
			wp_enqueue_script('comment-reply');
		}
	}
}

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_ausstellungen');
add_action('init', 'create_post_type_sammlungen');
add_action('init', 'create_post_type_werke');
add_action('init', 'create_post_type_kuenstler');
add_action('save_post', 'custom_post_type_title');
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
add_action('get_footer', 'prefix_add_footer_styles');

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

function create_post_type_ausstellungen()
{
	register_post_type(
		'ausstellungen',
		array(
			'labels' => array(
				'name' => __('Ausstellungen', 'ausstellungen'),
				'singular_name' => __('Ausstellung', 'ausstellungen'),
				'add_new' => __('Neu', 'ausstellungen'),
				'add_new_item' => __('Neue Ausstellung hinzufügen', 'ausstellungen'),
				'edit' => __('Bearbeiten', 'ausstellungen'),
				'edit_item' => __('Ausstellung bearbeiten', 'ausstellungen'),
				'new_item' => __('Neue Ausstellung', 'ausstellungen'),
				'view' => __('Ausstellung ansehen', 'ausstellungen'),
				'view_item' => __('Ausstellung ansehen', 'ausstellungen'),
				'search_items' => __('Ausstellung suchen', 'ausstellungen'),
				'not_found' => __('Keine Ausstellung gefunden', 'ausstellungen'),
				'not_found_in_trash' => __('Keine Ausstellung im Papierkorb gefunden', 'ausstellungen')
			),
			'public' => true,
			'hierarchical' => false,
			'has_archive' => false,
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			),
			'can_export' => true
		)
	);
}

function create_post_type_sammlungen()
{
	register_post_type(
		'sammlungen',
		array(
			'labels' => array(
				'name' => __('Sammlungen', 'sammlungen'),
				'singular_name' => __('Sammlung', 'sammlungen'),
				'add_new' => __('Neu', 'sammlungen'),
				'add_new_item' => __('Neue Sammlung hinzufügen', 'sammlungen'),
				'edit' => __('Bearbeiten', 'sammlungen'),
				'edit_item' => __('Sammlung bearbeiten', 'sammlungen'),
				'new_item' => __('Neue Sammlung', 'sammlungen'),
				'view' => __('Sammlung ansehen', 'sammlungen'),
				'view_item' => __('Sammlung ansehen', 'sammlungen'),
				'search_items' => __('Sammlung suchen', 'sammlungen'),
				'not_found' => __('Keine Sammlung gefunden', 'sammlungen'),
				'not_found_in_trash' => __('Keine Sammlung im Papierkorb gefunden', 'sammlungen')
			),
			'public' => true,
			'hierarchical' => false,
			'has_archive' => false,
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			),
			'can_export' => true
		)
	);
}

function create_post_type_werke()
{
	register_post_type(
		'werke',
		array(
			'labels' => array(
				'name' => __('Werke', 'werke'),
				'singular_name' => __('Werk', 'werke'),
				'add_new' => __('Neu', 'werke'),
				'add_new_item' => __('Neues Werk hinzufügen', 'werke'),
				'edit' => __('Bearbeiten', 'werke'),
				'edit_item' => __('Werk bearbeiten', 'werke'),
				'new_item' => __('Neues Werk', 'werke'),
				'view' => __('Werke ansehen', 'werke'),
				'view_item' => __('Werk ansehen', 'werke'),
				'search_items' => __('Werk suchen', 'werke'),
				'not_found' => __('Keine Werke gefunden', 'werke'),
				'not_found_in_trash' => __('Keine Werke im Papierkorb gefunden', 'werke')
			),
			'public' => true,
			'hierarchical' => false,
			'has_archive' => false,
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			),
			'can_export' => true,
			'taxonomies' => array(
				'category'
			)
		)
	);
}

function create_post_type_kuenstler()
{
	register_post_type(
		'kuenstler',
		array(
			'labels' => array(
				'name' => __('Künstler', 'kuenstler'),
				'singular_name' => __('Künstler', 'kuenstler'),
				'add_new' => __('Neu', 'kuenstler'),
				'add_new_item' => __('Neuen Künstler hinzufügen', 'kuenstler'),
				'edit' => __('Bearbeiten', 'kuenstler'),
				'edit_item' => __('Künstler bearbeiten', 'kuenstler'),
				'new_item' => __('Neuen Künstler', 'kuenstler'),
				'view' => __('Künstler ansehen', 'kuenstler'),
				'view_item' => __('Künstler ansehen', 'kuenstler'),
				'search_items' => __('Künstler suchen', 'kuenstler'),
				'not_found' => __('Keine Künstler gefunden', 'kuenstler'),
				'not_found_in_trash' => __('Keine Künstler im Papierkorb gefunden', 'kuenstler')
			),
			'public' => true,
			'hierarchical' => false,
			'has_archive' => false,
			'supports' => array(
				'editor',
				'thumbnail'
			),
			'can_export' => true
		)
	);
}

function custom_post_type_title($post_id)
{
	global $wpdb;
	if (get_post_type($post_id) == 'kuenstler') {
		$post = get_post($post_id);
		$title = $post->vorname . ' ' . $post->surname;
		$where = array('ID' => $post_id);
		$wpdb->update($wpdb->posts, array('post_title' => $title), $where);
	}
}

/*------------------------------------*\
	VNG Functions
\*------------------------------------*/

add_filter('posts_where', 'where_like', 10, 2);
function where_like($where, $wp_query)
{
	global $wpdb;
	if ($where_like = $wp_query->get('where_like')) {
		$where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql($wpdb->esc_like($where_like)) . '%\'';
	}
	return $where;
}

function prefix_add_footer_styles()
{
	wp_enqueue_style('js_composer_front', '/wp-content/plugins/js_composer/assets/css/js_composer.min.css');
}


function get_attachment_url_by_slug($slug)
{
	$args = array(
		'post_type' => 'attachment',
		'name' => sanitize_title($slug),
		'posts_per_page' => 1,
		'post_status' => 'inherit',
	);
	$_header = get_posts($args);
	$header = $_header ? array_pop($_header) : null;
	return $header ? wp_get_attachment_url($header->ID) : '';
}

function get_ausstellungen()
{
	return get_posts(array(
		'numberposts' => -1,
		'post_type' => 'ausstellungen'
	));
}

function get_sammlungen()
{
	return get_posts(array(
		'numberposts' => -1,
		'post_type' => 'sammlungen'
	));
}

function get_kuenstler_order_by_name()
{
	return order_by_surname(get_posts(array(
		'numberposts' => -1,
		'post_type' => 'kuenstler',
		'orderby' => 'surname',
		'order' => 'ASC'
	)));
}

function order_by_surname($kuenstler)
{
	usort($kuenstler, "compare_surnames");
	return $kuenstler;
}

function compare_surnames($a, $b)
{
	return strcmp($a->surname, $b->surname);
}

function get_related_werke_by_kunstler($kunstler)
{
	return get_posts(array(
		'post_type' => 'werke',
		'meta_query' => array(
			array(
				'key' => 'rel_kunstler',
				'value' => '"' . $kunstler . '"',
				'compare' => 'LIKE'
			)
		),
		'numberposts' => -1
	));
}

function get_werke_query_by_sammlung($offset, $sammlung_id)
{
	return new WP_Query(array(
		'post_type' => 'werke',
		'posts_per_page' => 1,
		'offset' => $offset,
		'meta_key' => 'rel_sammlung',
		'meta_value' => $sammlung_id
	));
}

function get_werke_query_by_cat($offset, $cat, $excludes = array(), $meta_key = 'entstehungsjahr')
{
	return new WP_Query(array(
		'post_type' => 'werke',
		//		'nopaging'=>true,
		'post__not_in' => $excludes,
		'posts_per_page' => 10,
		'offset' => $offset,
		'category_name' => $cat,
		'meta_key' => $meta_key,
		'orderby' => 'meta_value',
		'order' => 'ASC'
	));
}

/**
 * @param int $offset
 * @param string $cat
 * @param array $excludes
 * @return array
 */
function outputWerke($offset = 0, $cat = '', $excludes = array())
{
	$werke_query = get_werke_query_by_cat($offset, $cat, $excludes);

	$output = "";



	foreach ($werke_query->posts as $werk) {
		$category = get_the_category($werk->ID) ? get_the_category($werk->ID)[0]->name : '';

		$collection = str_replace([' ', '-&amp;-'], '-', get_field('rel_sammlung', $werk->ID)->post_title);
		// $collection = '';
		$caption = substr($werk->beschriftung, 0, 30) . (strlen($werk->beschriftung) > 30 ? "..." : "");
		$caption = $caption !== '' ? $caption : $werk->post_title . ', ' . $werk->entstehungsjahr;
		$output .= '<a class="grid-item ' . $category . ' ' . $collection . ' " data-category="' . $category . '"  id="' . $werk->ID . '" href="' . $werk->guid . '" data-jahr="' . $werk->entstehungsjahr . '" data-kuenstler="' . get_kuenstler_by_post_id($werk->ID) . '" title="' . $werk->post_title . '">';
		$output .= get_the_post_thumbnail($werk->ID);

		$output .= '<figcaption>' . $caption . '</figcaption></a>';
	}


	return ['output' => $output, 'max_posts' => $werke_query->found_posts];
}

function get_werke_query($offset, $sammlung_id)
{
	return new WP_Query(array(
		'post_type' => 'werke',
		'posts_per_page' => 1,
		'offset' => $offset,
		'meta_key' => 'rel_sammlung',
		'meta_value' => $sammlung_id
	));
}

function search_kuenstler_ids($search = '')
{
	$kuenstler = new WP_Query(array(
		'post_type' => 'kuenstler',
		'where_like' => $search
	));
	return join(',', wp_list_pluck($kuenstler->posts, 'ID'));
}

function search_sammlungen_ids($search = '')
{
	$sammlungen = new WP_Query(array(
		'post_type' => 'sammlungen',
		'where_like' => $search
	));
	return join(',', wp_list_pluck($sammlungen->posts, 'ID'));
}

function search_werke($search = '')
{
	$kuenstler_ids = search_kuenstler_ids($search);
	$sammlungen_ids = search_sammlungen_ids($search);

	global $wpdb;

	$query = "SELECT {$wpdb->posts}.ID
		FROM {$wpdb->posts}
		INNER JOIN {$wpdb->postmeta} ON (
			{$wpdb->posts}.ID = {$wpdb->postmeta}.post_id
		)
		WHERE {$wpdb->posts}.post_type = 'werke' AND (
			{$wpdb->posts}.post_status = 'publish' AND (
				{$wpdb->posts}.post_title LIKE '%{$search}%' OR (
					{$wpdb->postmeta}.meta_key = 'entstehungsjahr' AND {$wpdb->postmeta}.meta_value = '{$search}'
				) OR (
					{$wpdb->postmeta}.meta_key = 'technik_material' AND {$wpdb->postmeta}.meta_value LIKE '%{$search}%'
				) OR (
					{$wpdb->postmeta}.meta_key = 'groesse' AND {$wpdb->postmeta}.meta_value LIKE '%{$search}%'
				) OR (
					{$wpdb->postmeta}.meta_key = 'beschriftung' AND {$wpdb->postmeta}.meta_value LIKE '%{$search}%'
				)
		";

	if ($kuenstler_ids) {
		$query .= "OR (
					{$wpdb->postmeta}.meta_key = 'rel_kunstler' AND {$wpdb->postmeta}.meta_value IN ({$kuenstler_ids})
				)";
	}

	if ($sammlungen_ids) {
		$query .= "OR (
					{$wpdb->postmeta}.meta_key = 'rel_sammlung' AND {$wpdb->postmeta}.meta_value IN ({$sammlungen_ids})
				)";
	}

	$query .= "))GROUP BY {$wpdb->posts}.ID";

	$results = $wpdb->get_results($query);

	$posts = [];
	foreach ($results as $result) {
		array_push($posts, get_post($result->ID));
	}
	return $posts;
}

function get_kuenstler_by_post_id($post_id)
{
	$rel_kuenstler_id = get_post_meta($post_id, 'rel_kunstler', true);
	$kuenstler = get_post($rel_kuenstler_id);
	return $kuenstler->post_title;
}

function fill_werke($werke)
{
	foreach ($werke as $werk) {
		$post_thumb_id = get_post_thumbnail_id($werk->ID);
		$kuenstler = is_array($werk->rel_kunstler) && count($werk->rel_kunstler) > 0 ? get_post($werk->rel_kunstler[0]) : null;
		$werk->kuenstler_full = $kuenstler != null ? $kuenstler->post_title : "";
		$werk->kuenstler_surname = $kuenstler != null ? $kuenstler->surname : "";
		$werk->url = get_post_permalink($werk->ID);
		$werk->picture = wp_get_attachment_url($post_thumb_id);
		$werk->caption = wp_get_attachment_caption($post_thumb_id);
		$werk->entstehungsjahr = get_field("entstehungsjahr", $werk->ID);
		$postcat = get_the_category($werk->ID);
		if (!empty($postcat)) {
			$werk->cat = $postcat[0]->name;
		}
	}
	return $werke;
}

function get_relative_permalink($url)
{
	return str_replace(home_url(), "", $url);
<<<<<<< HEAD
}
=======
}

function add_img_title( $attr, $attachment = null ) {

	$img_title = trim( strip_tags( $attachment->post_title ) );

	$attr['title'] = $img_title;
	$attr['alt'] = $img_title;

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes','add_img_title', 10, 2 );
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
