<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/* ------------------------------------*\
  External Modules/Files
  \*------------------------------------ */

// Load any external files you have here

/* ------------------------------------*\
  Theme Support
  \*------------------------------------ */

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('gallery-image', 9999999999, 269, true);
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /* add_theme_support('custom-background', array(
      'default-color' => 'FFF',
      'default-image' => get_template_directory_uri() . '/img/bg.jpg'
      )); */

    // Add Support for Custom Header - Uncomment below if you're going to use
    /* add_theme_support('custom-header', array(
      'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
      'header-text'			=> false,
      'default-text-color'		=> '000',
      'width'				=> 1000,
      'height'			=> 198,
      'random-default'		=> false,
      'wp-head-callback'		=> $wphead_cb,
      'admin-head-callback'		=> $adminhead_cb,
      'admin-preview-callback'	=> $adminpreview_cb
      )); */

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/* ------------------------------------*\
  Functions
  \*------------------------------------ */

// HTML5 Blank navigation
function header_nav()
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
            'items_wrap' => '<ul>%3$s</ul>',
            'depth' => 0,
            'walker' => new WPDocs_Walker_Nav_Menu()
        )
    );
}

/**
 * Custom walker class.
 */
class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu
{

    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of menu item. Used for padding.
     * @param array $args An array of arguments. @see wp_nav_menu()
     */
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        // Depth-dependent classes.
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent
        $classes = array(
            'sub-menu',
        );
        $class_names = implode(' ', $classes);

        // Build HTML for output.
        $output .= "\n" . $indent . '<div class="skewed sub-menu-wrapper"><ul class="' . $class_names . '">' . "\n";
    }

    /**
     * Ends the list of after the elements are added.
     *
     * @since 3.0.0
     *
     * @see Walker::end_lvl()
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of menu item. Used for padding.
     * @param stdClass $args An object of wp_nav_menu() arguments.
     */
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);
        $output .= "$indent</ul></div>{$n}";
    }

    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param array $args An array of arguments. @see wp_nav_menu()
     * @param int $id Current item ID.
     */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent
        // Depth-dependent classes.
        $depth_classes = array(
            ($depth == 0 ? 'main-menu-item' : 'sub-menu-item'),
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));

        // Passed classes.
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

        // Build HTML.
        $output .= $indent . '<li  class="' . $depth_class_names . ' ' . $class_names . '">';

        // Link attributes.
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s', $args->before, $attributes, $args->link_before, apply_filters('the_title', $item->title, $item->ID), $args->link_after, $args->after);
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

// HTML5 Blank navigation
function footer_nav()
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

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/_action.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
        //wp_register_script('conditionizr', get_template_directory_uri() . '/jss/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        //wp_enqueue_script('conditionizr'); // Enqueue it!
        wp_register_script('gmaps', 'https://bit.ly/2dsO0oZ', array(), '4.6.1');
        wp_enqueue_script('gmaps');

        wp_register_script('slick_slider', get_template_directory_uri() . '/js/lib/slick.min.js', array('jquery'), '1.0.0');
        wp_enqueue_script('slick_slider');

        wp_register_script('slick_lightbox', get_template_directory_uri() . '/js/lib/slick-lightbox.min.js', array('jquery'), '1.0.0');
        wp_enqueue_script('slick_lightbox');

        wp_register_script('isotope', get_template_directory_uri() . '/js/lib/jquery.isotope-3.0.4.min.js', array('jquery'), '1.0.0');
        wp_enqueue_script('isotope');

        wp_register_script('lightbox', get_template_directory_uri() . '/js/lib/lightbox/js/lightbox.min.js', 'jquery');
        wp_enqueue_script('lightbox');
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

// Load HTML5 Blank styles
function html5blank_styles()
{
    // add theme style.css with hash param
    $style_hash = sha1_file(get_template_directory() . DIRECTORY_SEPARATOR . 'style.css');
    $custom_hash = sha1_file(get_template_directory() . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'custom.css');


    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), ($style_hash !== false ? substr($style_hash, -8, -1) : ''), 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!

    /** Styles * */
    wp_register_style('styles', get_template_directory_uri() . '/css/custom.css', array(), ($custom_hash !== false ? substr($custom_hash, -8, -1) : ''));
    wp_enqueue_style('styles');

    wp_register_style('slick_slider', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('slick_slider');

    wp_register_style('slick_slider_theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('slick_slider_theme');

    wp_register_style('slick_lightbox', get_template_directory_uri() . '/css/slick-lightbox.css');
    wp_enqueue_style('slick_lightbox');

    wp_enqueue_script('wpb_composer_front_js');
    wp_enqueue_style('js_composer_front');
    wp_enqueue_style('js_composer_custom_css');

    wp_register_style('lightbox', get_template_directory_uri() . '/js/lib/lightbox/css/lightbox.min.css', array(), '2.9.0', 'all');
    wp_enqueue_style('lightbox'); // Enqueue it!
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
        'name' => __('Language-Switcher', 'html5blank'),
        'description' => __('Language-Switcher', 'html5blank'),
        'id' => 'nav-language-switcher',
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
function html5wp_index($length)
{ // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
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

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ('div' == $args['style']) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
<!-- heads up: starting < for the html tag (li or div) in the next line: -->
<<?php echo $tag ?><?php comment_class(empty($args['has_children']) ? '' : 'parent') ?>
    id="comment-<?php comment_ID() ?>">
    <?php if ('div' != $args['style']) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php endif; ?>
        <div class="comment-author vcard">
            <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['180']); ?>
            <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
        <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
        <br />
        <?php endif; ?>

        <div class="comment-meta commentmetadata"><a
                href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>">
                <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'), '  ', '');
                                                                                                    ?>
        </div>

        <?php comment_text() ?>

        <div class="reply">
            <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
        <?php if ('div' != $args['style']) : ?>
    </div>
    <?php endif; ?>
    <?php
}

/* ------------------------------------*\
  Actions + Filters + ShortCodes
  \*------------------------------------ */

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
//add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
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

/* ------------------------------------*\
  Custom Post Types
  \*------------------------------------ */

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type(
        'html5-blank', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
                'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
                'add_new' => __('Add New', 'html5blank'),
                'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
                'edit' => __('Edit', 'html5blank'),
                'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
                'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
                'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
                'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
                'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
                'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
                'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
            ),
            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ), // Go to Dashboard Custom HTML5 Blank post for supports
            'can_export' => true, // Allows export in Tools > Export
            'taxonomies' => array(
                'post_tag',
                'category'
            ) // Add Category and Post Tags support
        )
    );
}

/* ------------------------------------*\
  Disablew Emojis
  \*------------------------------------ */

function disable_wp_emojicons()
{

    // all actions related to emojis
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
}

add_action('init', 'disable_wp_emojicons');

/* ------------------------------------*\
  ShortCode Functions
  \*------------------------------------ */

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null)
{ // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
    return '<h2>' . $content . '</h2>';
}

// Before VC Init
add_action('vc_before_init', 'vc_before_init_actions');

function vc_before_init_actions()
{

    // Link your VC elements's folder
    if (function_exists('vc_set_shortcodes_templates_dir')) {

        vc_set_shortcodes_templates_dir(get_template_directory() . '/vc-elements');
    }
}

// After VC Init
add_action('vc_after_init', 'vc_after_init_actions');

function vc_after_init_actions()
{

    // Add Params
    $vc_single_image_new_params = array(
        array(
            'type' => 'checkbox',
            'holder' => 'h3',
            'class' => 'show_description',
            'heading' => __('Show Description?', 'text-domain'),
            'param_name' => 'single_image_show_description',
            'admin_label' => true,
            'dependency' => '',
            'weight' => 0,
        ),
    );

    vc_add_params('vc_single_image', $vc_single_image_new_params);
}

class WPBakeryShortCode_im_map extends WPBakeryShortCodesContainer
{

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'im_map_id' => false,
            'im_map_width' => 'auto',
            'im_map_height' => 'auto',
            'im_map_style' => false,
            'im_map_center' => '52.5200070,13.4049540',
            'im_map_zoom' => 10,
            'im_map_options_mousewheel' => 'false',
            'im_map_options_dragging' => 'false',
            'im_map_options_streetview' => 'false',
            'im_map_options_zoomcontrol' => 'false',
            'im_map_options_scalecontrol' => 'false',
            'im_map_options_rotatecontrol' => 'false',
            'im_map_options_pancontrol' => 'false',
            'im_map_options_maptypecontrol' => 'false',
        ), $atts));

        if (!$im_map_id) {
            $im_map_id = 'im_map_' . rand();
        }
        if (!$im_map_width) {
            $im_map_width = '100%';
        }
        if (!$im_map_height) {
            $im_map_height = '500px';
        }
        if (!$im_map_style) {
            $im_map_style = '[]';
        } else {
            $im_map_style = file_get_contents($im_map_style, FILE_USE_INCLUDE_PATH);
            //$s = array('<br />','&lt;','&gt;');
            //$r = array('','[',']');
            //$im_map_style = str_replace($s, $r, $im_map_style);
        }

        $output = '
			<script>

				var map;
				var marker = Array();
				var infowindows = Array();
				var myLatLngCenter;
				var places = [' . wpb_js_remove_wpautop($content) . '];
				var styles = ' . $im_map_style . ';

				function initGmap() {
				    var opts = {
				    	scrollwheel			: ' . ($im_map_options_mousewheel == 'true' ? ' true' : ' false') . ',
				    	draggable			: ' . ($im_map_options_dragging == 'true' ? ' true' : ' false') . ',
				        streetViewControl	: ' . ($im_map_options_streetview == 'true' ? ' true' : ' false') . ',
				        zoomControl			: ' . ($im_map_options_zoomcontrol == 'true' ? ' true' : ' false') . ',
				        scaleControl		: ' . ($im_map_options_scalecontrol == 'true' ? ' true' : ' false') . ',
				        rotateControl		: ' . ($im_map_options_rotatecontrol == 'true' ? ' true' : ' false') . ',
				        panControl			: ' . ($im_map_options_pancontrol == 'true' ? ' true' : ' false') . ',
				        mapTypeControl		: ' . ($im_map_options_maptypecontrol == 'true' ? ' true' : ' false') . ',
				        center				: new google.maps.LatLng(' . $im_map_center . '),
				        zoom: ' . $im_map_zoom . '
					}
					map = new google.maps.Map(document.getElementById("im_map_' . $im_map_id . '"), opts);
					map.setOptions({styles: styles});

					for (var i = 0; i < places.length; i++) {
						var place = places[i];
						var llCenterString = place[1].split(",");
						myLatLngCenter = new google.maps.LatLng(parseFloat(llCenterString[0]), parseFloat(llCenterString[1]));
						if(place[2].length > 0) {
							if(place[3].length > 0) {
								var iconSize = place[3].split(",");
								iconWidth = parseFloat(iconSize[0]);
								iconHeight = parseFloat(iconSize[1]);
							} else {
								iconWidth = 32;
								iconHeight = 32;
							}
							var myIcon = new google.maps.MarkerImage(place[2], null, null, null, new google.maps.Size(iconWidth,iconHeight));
							marker[i] = new google.maps.Marker({
							    position: myLatLngCenter,
							    map: map,
							    icon: myIcon,
							    title: place[0],
							    id: i
							});
						} else {
							marker[i] = new google.maps.Marker({
							    position: myLatLngCenter,
							    map: map,
							    title: place[0],
							    id: i
							});
						}
						if(place[4] == "infowindow") {
							infowindows[i] = new google.maps.InfoWindow({
							  content: place[5]
							});
							google.maps.event.addListener(marker[i], "click", function() {
								infowindows[this.id].open(map,marker[this.id]);
							});
						} else if(place[4] == "hyperlink") {
							google.maps.event.addListener(marker[i], "click", function() {
								window.open(places[this.id][6],"_blank");
							});
						}
					}
				}

				(function ($, root, undefined) {
					$(function () {
						"use strict";
						initGmap();
					});
					$(window).resize(function() {
						map.setCenter(myLatLngCenter);
					});
				})(jQuery, this);
			</script>
			<div class="im_map gmap" id="im_map_' . $im_map_id . '" style="' . ($im_map_height != 'auto' ? ' height: ' . $im_map_height . ';' : '') . ' ' . ($im_map_width != 'auto' ? ' width: ' . $im_map_width . ';' : '') . '"></div>';
        return $output;
    }
}

vc_map(array(
    "base" => "im_map",
    "name" => "Google Map",
    "class" => "",
    "icon" => "im_map",
    "as_parent" => array('only' => 'im_mapmarker'),
    "category" => 'stucture',
    "content_element" => true,
    "show_settings_on_create" => false,
    "js_view" => 'VcColumnView',
    "params" => array(
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("ID"),
            "param_name" => "im_map_id",
            "value" => __(""),
            "description" => __("A unique identifier for the map-object.")
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Width"),
            "param_name" => "im_map_width",
            "value" => __(""),
            "description" => __("The width of the Google-Map e.g. 500px or 100%.")
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Height"),
            "param_name" => "im_map_height",
            "value" => __(""),
            "description" => __("The height of the Google-Map e.g. 500px.")
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Center"),
            "param_name" => "im_map_center",
            "value" => __(""),
            "description" => __("The center of the map separated with a comma e.g. 52.5200070,13.4049540.")
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Zoom-Level"),
            "param_name" => "im_map_zoom",
            "value" => 10,
            "description" => __("The Zoom-Level from 0 to 21.")
        ),
        array(
            "type" => "textfield",
            "group" => "Map Options",
            "class" => "",
            "heading" => __("Style"),
            "param_name" => "im_map_style",
            "value" => __(""),
            "description" => __("Relative link to the JSON-File e.g. ./wp-content/themes/themename/style.txt for styling the Map. Have a look to http://gmaps-samples-v3.googlecode.com/svn/trunk/styledmaps/wizard/index.html")
        ),
        array(
            "type" => "dropdown",
            "group" => "Map Options",
            "class" => "",
            "heading" => __("Enable Mousewheel"),
            "param_name" => "im_map_options_mousewheel",
            "value" => array("false", "true"),
            "description" => __("Enable Mousewheel for zooming into the map.")
        ),
        array(
            "type" => "dropdown",
            "group" => "Map Options",
            "class" => "",
            "heading" => __("Enable Dragging"),
            "param_name" => "im_map_options_dragging",
            "value" => array("false", "true"),
            "description" => __("Enable panning while dragging the map.")
        ),
        array(
            "type" => "dropdown",
            "group" => "Map Options",
            "class" => "",
            "heading" => __("Enable Google Streetview"),
            "param_name" => "im_map_options_streetview",
            "value" => array("false", "true"),
            "description" => __("Enable Google Streetview in the map.")
        ),
        array(
            "type" => "dropdown",
            "group" => "Map Options",
            "class" => "",
            "heading" => __("Enable ZoomControl"),
            "param_name" => "im_map_options_zoomcontrol",
            "value" => array("false", "true"),
            "description" => __("Enable the Zoom Control Panel in the map.")
        ),
        array(
            "type" => "dropdown",
            "group" => "Map Options",
            "class" => "",
            "heading" => __("Enable ScaleControl"),
            "param_name" => "im_map_options_scalecontrol",
            "value" => array("false", "true"),
            "description" => __("Enables the Scale Control Panel in the map.")
        ),
        array(
            "type" => "dropdown",
            "group" => "Map Options",
            "class" => "",
            "heading" => __("Enable RotateControl"),
            "param_name" => "im_map_options_rotatecontrol",
            "value" => array("false", "true"),
            "description" => __("Enables the Rotate Control Panel in the map.")
        ),
        array(
            "type" => "dropdown",
            "group" => "Map Options",
            "class" => "",
            "heading" => __("Enable PanControl"),
            "param_name" => "im_map_options_pancontrol",
            "value" => array("false", "true"),
            "description" => __("Enables the Pan Control Panel in the map.")
        ),
        array(
            "type" => "dropdown",
            "group" => "Map Options",
            "class" => "",
            "heading" => __("Enable MapTypeControl"),
            "param_name" => "im_map_options_maptypecontrol",
            "value" => array("false", "true"),
            "description" => __("Enables the Maptype Control Panel in the map.")
        )
    )
));

class WPBakeryShortCode_im_mapmarker extends WPBakeryShortCode
{

    protected function content($atts, $content = null)
    {
        extract(shortcode_atts(array(
            'im_mapmarker_title' => 'Insert a title',
            'im_mapmarker_latlong' => false,
            'im_mapmarker_iconurl' => '',
            'im_mapmarker_iconsize' => '',
            'im_mapmarker_markerlink' => '',
            'im_mapmarker_click' => 'false',
            'im_mapmarker_infowindow_content' => ''
        ), $atts));

        if (count($im_mapmarker_infowindow_content) > 0) {
            $im_mapmarker_infowindow_content = preg_replace("/\r|\n/", "", $im_mapmarker_infowindow_content);
        }

        if (!$im_mapmarker_latlong) {
            $output = '';
        } else {
            $output = '["' . $im_mapmarker_title . '","' . $im_mapmarker_latlong . '","' . $im_mapmarker_iconurl . '","' . $im_mapmarker_iconsize . '","' . $im_mapmarker_click . '","' . $im_mapmarker_infowindow_content . '","' . $im_mapmarker_markerlink . '"],';
        }
        return $output;
    }
}

vc_map(array(
    "base" => "im_mapmarker",
    "name" => "Google Maps Marker",
    "content_element" => true,
    "icon" => "im_mapmarker",
    "as_child" => array('only' => 'im_map'),
    "params" => array(
        array(
            "type" => "textfield",
            "class" => "",
            "holder" => "h4",
            "heading" => __("Title"),
            "param_name" => "im_mapmarker_title",
            "value" => __("")
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __("Geolocation"),
            "param_name" => "im_mapmarker_latlong",
            "value" => __(""),
            "description" => __("The latitude and longitude of the marker separated with a comma e.g. 52.5200070,13.4049540.")
        ),
        array(
            "type" => "textfield",
            "group" => "Icon",
            "class" => "",
            "heading" => __("Icon URL"),
            "param_name" => "im_mapmarker_iconurl",
            "value" => '',
            "description" => __("The URL to the Marker Icon.")
        ),
        array(
            "type" => "textfield",
            "group" => "Icon",
            "class" => "",
            "heading" => __("Icon-Size"),
            "param_name" => "im_mapmarker_iconsize",
            "value" => __(""),
            "description" => __("The latitude and longitude of the marker in pixel separated with a comma e.g. 32,32")
        ),
        array(
            "type" => "dropdown",
            "group" => "Info Window",
            "class" => "",
            "heading" => __("Marker action"),
            "param_name" => "im_mapmarker_click",
            "value" => array("false", "infowindow", "hyperlink"),
            "description" => __("What happend by clicking the Marker?")
        ),
        array(
            "type" => "textarea_html",
            "group" => "Info Window",
            "class" => "",
            "heading" => __("Info Window Content"),
            "param_name" => "im_mapmarker_infowindow_content",
            "description" => __("The content of the Info Window")
        ),
        array(
            "type" => "textfield",
            "group" => "Info Window",
            "class" => "",
            "heading" => __("Marker Link"),
            "param_name" => "im_mapmarker_markerlink",
            "value" => __(""),
            "description" => __("Optional: Hyperlink for the Marker.")
        ),
    )
));

/**
 * Add russian description field to media uploader
 *
 * @param $form_fields array, fields to include in attachment form
 * @param $post object, attachment record in database
 * @return $form_fields, modified form fields
 */
function be_attachment_field_description_ru($form_fields, $post)
{
    $form_fields['description_ru'] = array(
        'label' => 'Beschriftung (ru)',
        'input' => 'textarea',
        'value' => get_post_meta($post->ID, 'description_ru', true),
        'helps' => 'Beschriftung auf russisch',
    );
    $form_fields['content_ru'] = array(
        'label' => 'Beschreibung (ru)',
        'input' => 'textarea',
        'value' => get_post_meta($post->ID, 'content_ru', true),
        'helps' => 'Beschreibung auf russisch',
    );

    return $form_fields;
}

add_filter('attachment_fields_to_edit', 'be_attachment_field_description_ru', 10, 2);

function add_read_more_to_inner_row()
{
    // Add Params
    $vc_new_params = array(
        array(
            'type' => 'checkbox',
            'holder' => 'h3',
            'class' => 'read_more',
            'heading' => __('Readmore?', 'text-domain'),
            'description' => 'Abschnitt verbergen und mit Klick auf Link sichtbar machen',
            'param_name' => 'read_more',
            'admin_label' => true,
            'dependency' => '',
            'weight' => 0,
        ),
    );

    vc_add_params('vc_row_inner', $vc_new_params);
}

add_action('vc_after_init', 'add_read_more_to_inner_row');

/**
 * Save value of description_ru in media uploader
 *
 * @param $post array, the post data for database
 * @param $attachment array, attachment fields from $_POST form
 * @return $post array, modified post data
 */
function be_attachment_field_description_ru_save($post, $attachment)
{
    if (isset($attachment['description_ru']))
        update_post_meta($post['ID'], 'description_ru', $attachment['description_ru']);

    if (isset($attachment['content_ru']))
        update_post_meta($post['ID'], 'content_ru', $attachment['content_ru']);

    return $post;
}

add_filter('attachment_fields_to_save', 'be_attachment_field_description_ru_save', 10, 2);

include_once 'functions.vc.php';
include_once 'lib/ConferencePostType.php';
include_once 'lib/ConferenceItemPostType.php';
include_once 'lib/PanelPostType.php';
include_once 'lib/NewsletterPostType.php';
include_once 'lib/MeetingPostType.php';
include_once 'lib/PressemitteilungPostType.php';

new ConferencePostType;
new ConferenceItemPostType();
new PanelPostType();
new NewsletterPostType;
new MeetingPostType;
new PressemitteilungPostType;

add_filter('pre_get_posts', 'conference_item_query');

function add_taxonomies_to_pages()
{
    register_taxonomy_for_object_type(MeetingPostType::TAXONOMY_NAME, 'page');
}
add_action('init', 'add_taxonomies_to_pages');

function conference_item_query($query)
{
    if (array_key_exists('post_type', $query->query_vars)) {
        // run this code only when we are on the public archive
        if ('conference_item' != $query->query_vars['post_type'] || !$query->is_main_query() || is_admin()) {
            return;
        }
        // fix query for hierarchical conference_item permalinks
        if (isset($query->query_vars['name']) && isset($query->query_vars['conference_item'])) {
            if ($post = get_page_by_path(dirname(untrailingslashit($query->query_vars['name'])), OBJECT, ConferencePostType::POST_TYPE_NAME)) {
                $id = $post->ID;
            } else {
                echo 'conference item not found';
                die;
            }
            $query->set('post_parent', $id);
            // remove the parent name
            $query->set('name', basename(untrailingslashit($query->query_vars['name'])));
            // unset this
            $query->set('conference_item', null);
        }
    }
}

add_action('admin_init', 'add_header_link');
function add_header_link()
{
    register_setting('general', 'custom_header_link');

    add_settings_field(
        'custom_header_link',
        'Header Link',
        'set_header_link',
        'general',
        'default',
        array('label_for' => 'add_header_link')
    );
}

function set_header_link($args)
{
    $value = get_option('custom_header_link');

    echo '<input
    type="text"
    name="custom_header_link"
    id="add_header_link"
    placeholder="Header Link"
<<<<<<< HEAD
    value="' . $value . '"/>';
}

add_action('admin_init', 'add_header_text');
function add_header_text()
{
    register_setting('general', 'custom_header_text_top_de');
    register_setting('general', 'custom_header_text_bottom_de');
    register_setting('general', 'custom_header_text_top_ru');
    register_setting('general', 'custom_header_text_bottom_ru');

    add_settings_field(
        'custom_header_text_top_de',
        'Header Text Zeile 1 (deutsch)',
        'set_header_text_top_de',
        'general',
        'default',
        array('label_for' => 'add_header_text_top_de')
    );

    add_settings_field(
        'custom_header_text_bottom_de',
        'Header Text Zeile 2 (deutsch)',
        'set_header_text_bottom_de',
        'general',
        'default',
        array('label_for' => 'add_header_text_bottom_de')
    );

    add_settings_field(
        'custom_header_text_top_ru',
        'Header Text Zeile 1 (russisch)',
        'set_header_text_top_ru',
        'general',
        'default',
        array('label_for' => 'add_header_text_top_ru')
    );

    add_settings_field(
        'custom_header_text_bottom_ru',
        'Header Text Zeile 2 (russisch)',
        'set_header_text_bottom_ru',
        'general',
        'default',
        array('label_for' => 'add_header_text_bottom_ru')
    );
}

function set_header_text_top_de($args)
{
    $value = get_option('custom_header_text_top_de');

    echo '<input
    type="text"
    name="custom_header_text_top_de"
    id="add_header_text_top_de"
    placeholder="Header Text Top Deutsch"
    value="' . $value . '"/>';
}

function set_header_text_bottom_de($args)
{
    $value = get_option('custom_header_text_bottom_de');

    echo '<input
    type="text"
    name="custom_header_text_bottom_de"
    id="add_header_text_bottom_de"
    placeholder="Header Text bottom Deutsch"
    value="' . $value . '"/>';
}

function set_header_text_top_ru($args)
{
    $value = get_option('custom_header_text_top_ru');

    echo '<input
    type="text"
    name="custom_header_text_top_ru"
    id="add_header_text_top_ru"
    placeholder="Header Text Top Russisch"
    value="' . $value . '"/>';
}

function set_header_text_bottom_ru($args)
{
    $value = get_option('custom_header_text_bottom_ru');

    echo '<input
    type="text"
    name="custom_header_text_bottom_ru"
    id="add_header_text_bottom_ru"
    placeholder="Header Text Bottom Russisch"
=======
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
    value="' . $value . '"/>';
}