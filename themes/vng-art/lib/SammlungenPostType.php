<?php

class IssuePostType{
    const POST_TYPE_NAME = 'sammlungen';
    const TAXONOMY_NAME_TYPE = 'bereich';
    const PREFIX = 'issue_';

    public function __construct()
    {
        add_action('init', array($this, 'registerPostType'));
        add_action('init', array($this, 'registerTaxonomy'));
        add_action('add_meta_boxes', array($this, 'addMetaBox'), 10, 2);
        add_action('save_post', array($this, 'saveMeta'), 10, 2);
    }

    public function registerPostType()
    {

        $labels = array('name' => 'Titel',
            'singular_name' => 'Titel',
            'add_new' => 'Neuen Titel hinzufügen',
            'all_items' => 'Alle Titel',
            'add_new_item' => 'Neuer Titel',
            'edit_item' => 'Titel bearbeiten',
            'new_item' => 'Neuer Titel',
            'search_items' => 'Titel suchen',
            'not_found' => 'Keinen Titel gefunden',
            'not_found_in_trash' => 'Keinen Titel im PP gefunden',
            'menu_name' => 'Titel');


        $args = array('labels' => $labels,
            'public' => true,
            'supports' => array('title', 'editor','thumbnail'),
            'has_archive' => false,
            'publicaly_queryable' => false,
            'query_var' => false,
            'exclude_from_search' => true,
            'menu_position' => 100,
            'menu_icon' => 'dashicons-book');

        register_post_type(self::POST_TYPE_NAME, $args);
    }

    public function registerTaxonomy() {

        $labels = array('name' => 'Thema',
            'menu_name' => 'Thema',
            'add_new_item' => 'Neues Thema hinzufügen',
            'new_item_name' => 'Name des neuen Themas',
            'singular_name' => 'Thema',
            'search_items' => 'Thema suchen',
            'all_items' => 'Alle Themen',
            'parent_item' => 'Übergeordnetes Thema',
            'parent_item_colon' => 'Übergeordnetes Thema',
            'edit_item' => 'Thema bearbeiten',
            'update_item' => 'Thema updaten'
        );

        $args = array('labels' => $labels, 'hierarchical' => true);
        register_taxonomy(self::TAXONOMY_NAME_TYPE, array(self::POST_TYPE_NAME), $args);
    }

    public function addMetaBox()
    {
        add_meta_box(self::PREFIX.'-meta-box', 'weitere Informationen', array($this, 'metaBox'), self::POST_TYPE_NAME, 'advanced', 'high');
        add_meta_box(self::PREFIX.'-meta-box-author', 'Autor', array($this, 'metaBoxAuthor'), self::POST_TYPE_NAME, 'side', 'high');
    }


    public function metaBox()
    {
        include __DIR__ . '/templates/issue-meta.php';
    }
    public function metaBoxAuthor()
    {
        include __DIR__ . '/templates/issue-meta-author.php';
    }

    public static function getIssues($args = null)
    {
        $defaults = array(
            'posts_per_page' => -1,
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

    public function saveMeta($postId=null)
    {
        $fields = array(
            self::PREFIX.'biblio',
            self::PREFIX.'leseprobe',
            self::PREFIX.'shoplink',
            self::PREFIX.AuthorPostType::POST_TYPE_NAME,
        );

        foreach ($fields as $field) {
            if (!isset($_POST[$field])) {
                continue;
            }
            update_post_meta($postId, $field, $_POST[$field]);
        }
    }
}