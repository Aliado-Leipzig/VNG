<?php

class NewsPostType
{

    const POST_TYPE_NAME = 'news';

    public function __construct()
    {
        add_action('init', array($this, 'registerPostType'));
    }

    function registerPostType()
    {
        $labels = array(
            'name' => 'news',
            'singular_name' => 'News',
            'menu_name' => 'Aktuelles',
            'parent_item_colon' => 'Eltern-News',
            'all_items' => 'Alle News',
            'view_item' => 'Zeige News',
            'add_new_item' => 'Neue News hinzufügen',
            'edit_item' => 'News bearbeiten',
            'update_item' => 'News aktualisieren',
            'search_items' => 'News suchen',
            'not_found' => 'News nicht gefunden',
            'not_found_in_trash' => 'Keine News im Papierkorb gefunden'
        );

        $args = array(
            'label' => 'News',
            'description' => 'Aktuelles',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'revisions', 'thumbnail', 'excerpt'),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_ui_menu' => true,
            'show_ui_nav_menus' => true,
            'menu_position' => 5,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page'

        );

        register_post_type(self::POST_TYPE_NAME, $args);
    }
}