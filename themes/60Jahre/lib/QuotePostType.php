<?php

class QuotePostType
{
    const POST_TYPE_NAME = 'quote';
    const PREFIX = 'quote_';

    public function __construct()
    {
        add_action('init', array($this, 'registerPostType'));
        add_action('add_meta_boxes', array($this, 'addMetaBox'), 10, 2);
        add_action('save_post', array($this, 'saveMeta'), 10, 2);
    }

    public function registerPostType()
    {

        $labels = array('name' => 'Zitat',
            'singular_name' => 'Zitat',
            'add_new' => 'Neues Zitat hinzufügen',
            'all_items' => 'Alle Zitate',
            'add_new_item' => 'Neues Zitat',
            'edit_item' => 'Zitat bearbeiten',
            'new_item' => 'Neues Zitat',
            'search_items' => 'Zitate suchen',
            'not_found' => 'Kein Zitat gefunden',
            'not_found_in_trash' => 'Kein Zitat im PP gefunden',
            'menu_name' => 'Zitate');


        $args = array('labels' => $labels,
            'public' => true,
            'supports' => array('title', 'editor'),
            'has_archive' => false,
            'publicaly_queryable' => false,
            'query_var' => false,
            'exclude_from_search' => true,
            'menu_position' => 100,
            'menu_icon' => 'dashicons-admin-users');

        register_post_type(self::POST_TYPE_NAME, $args);
    }

    public function addMetaBox()
    {
        add_meta_box('meta-box', 'video-url', array($this, 'metaBox'), self::POST_TYPE_NAME, 'advanced', 'high');
    }


    public function metaBox()
    {
        include get_stylesheet_directory() . '/templates/quote-meta.php';
    }

    public static function getQuote($args = null)
    {
        $defaults = array(
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
            'post_status' => 'publish',
            'post_type' => self::POST_TYPE_NAME,
        );
        $args = wp_parse_args($args, $defaults);
        return get_posts($args);
    }

    public static function getMeta($metaKey, $postId = null)
    {
        if (!$postId) {
            $postId = get_the_ID();
        }

        return get_post_meta($postId, self::PREFIX . $metaKey, true);
    }

    public function saveMeta($postId = null)
    {
        $fields = array(
            self::PREFIX . 'video_url',
            self::PREFIX . 'person',
            self::PREFIX . 'position',
        );

        foreach ($fields as $field) {
            if (!isset($_POST[$field])) {
                continue;
            }
            update_post_meta($postId, $field, $_POST[$field]);
        }
    }
}