<?php

function register_menu_child()
{
        $locations = array(
                'social' => 'Social',
        );
        register_nav_menus($locations);
}

add_action('init', 'register_menu_child');

add_image_size('timeline', 500, 500, array('center', 'center'));

function my_theme_enqueue_styles()
{

        $parent_style = 'styles';

        wp_enqueue_style($parent_style, get_template_directory_uri() . '/css/custom.css');
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), '1.0');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function enqueue_scripts()
{
        wp_dequeue_script('action');
        wp_enqueue_script('child-action', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'enqueue_scripts', 100);

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
        include_once 'vc_templates/vc_customposttype_archive.php';
        include_once 'vc_templates/vc_customposttype_archive_timeline.php';
        include_once 'vc_templates/vc_customposttype_quote.php';
}

// Before VC Init
add_action('vc_before_init', 'vc_before_init_actions');

function vc_before_init_actions()
{

        // Link your VC elements's folder
        if (function_exists('vc_set_shortcodes_templates_dir')) {

                vc_set_shortcodes_templates_dir(get_stylesheet_directory() . '/vc_templates');
        }
}

function addMetaBox()
{
        add_meta_box('post-meta-box', 'Infos', 'postMetaBox', 'post', 'advanced', 'high', null);
}

add_action('add_meta_boxes', 'addMetaBox', 10, 2);

function postMetaBox()
{
        include __DIR__ . '/templates/post-meta.php';
}

function savePostMeta()
{
        $postId = get_the_ID();
        $value = $_POST['post_url'];
        update_post_meta($postId, 'post_url', $value);
}

add_action('save_post', 'savePostMeta');

include_once 'lib/HistoryPostType.php';
new HistoryPostType;

include_once 'lib/QuotePostType.php';
new QuotePostType;

function fb_the_password_form()
{
        global $post;

        $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
        $output = '<div class="password-form-wrapper"><form action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post">
    <p>Diese Seite ist passwortgeschützt. Bitte geben Sie das Passwort ein:</p>
    <p><label for="' . $label . '">' . __("Password") . ' <input name="post_password" id="' . $label . '" type="password" size="20" /></label></p><p> <input type="submit" class="btn btn-submit" name="Submit" value="' . esc_attr__("Submit") . '" /></p>
    </form></div>';

        return $output;
}

add_filter('the_password_form', 'fb_the_password_form');

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
                        "value" => "Mit dem Aufruf des Videos erklären Sie sich einverstanden, dass Ihre Daten an YouTube übermittelt werden und das Sie die <a href=\"https://vng.de/de/datenschutz\" target=\"_blank\">Datenschutzerklärung</a> gelesen haben.",
                ),
                array(
                        "type" => "attach_image",
                        "heading" => "Placeholder Image",
                        "param_name" => "dsgvo_img",
                        "holder" => "img",
                )
        )
));