<?php

class ProjectPostType
{

    const POST_TYPE_NAME = 'project';

    public function __construct()
    {
        add_action('init', array($this, 'registerPostType'));
    }

    function registerPostType()
    {
        $labels = array(
            'name' => 'project',
            'singular_name' => 'Projekt',
            'menu_name' => 'Projekte',
            'parent_item_colon' => 'Eltern-Projekt',
            'all_items' => 'Alle Projekte',
            'view_item' => 'Zeige Projekte',
            'add_new_item' => 'Neues Projekt hinzufügen',
            'edit_item' => 'Projekt bearbeiten',
            'update_item' => 'Projekt aktualisieren',
            'search_items' => 'Projekt suchen',
            'not_found' => 'Projekt nicht gefunden',
            'not_found_in_trash' => 'Keine Projekte im Papierkorb gefunden'
        );

        $args = array(
            'label' => 'Projekte',
            'description' => 'Projekte',
            'labels' => $labels,
            'supports' => array('title', 'editor', 'revisions'),
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