<?php

class MeetingPostType
{
    const POST_TYPE_NAME = 'meeting';
    const TAXONOMY_NAME = 'ag';
    const PREFIX = 'm_';

    /**
     * PostType constructor.
     */
    public function __construct()
    {
        add_action('init', array($this, 'registerPostType'));
        add_action('init', array($this, 'registerTaxonomy'));
    }

    /**
     * register post type
     */
    public function registerPostType()
    {

        $labels = array(
            'name' => 'Meeting',
            'singular_name' => 'Meeting',
            'add_new' => 'Neues Meeting hinzufügen',
            'all_items' => 'Alle Meetings',
            'add_new_item' => 'Neues Meeting',
            'edit_item' => 'Meeting bearbeiten',
            'new_item' => 'Neues Meeting',
            'search_items' => 'Meeting suchen',
            'not_found' => 'Kein Meeting gefunden',
            'not_found_in_trash' => 'Kein Meeting im PP gefunden',
            'menu_name' => 'Meetings'
        );


        $args = array(
            'labels' => $labels,
            'public' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'has_archive' => false,
            'publicaly_queryable' => true,
            'menu_position' => 8,
            'menu_icon' => 'dashicons-groups'
        );

        register_post_type(self::POST_TYPE_NAME, $args);
    }

    public function registerTaxonomy()
    {

        $labels = array(
            'name' => 'AG',
            'menu_name' => 'AGs',
            'add_new_item' => 'Neue AG hinzufügen',
            'new_item_name' => 'Name der neuen AG',
            'singular_name' => 'AG',
            'search_items' => 'AG suchen',
            'all_items' => 'Alle AGs',
            'parent_item' => 'Übergeordnete AGs',
            'parent_item_colon' => 'Übergeordnete AG:',
            'edit_item' => 'AG bearbeiten',
            'update_item' => 'AG updaten'
        );

        $args = array('labels' => $labels, 'hierarchical' => true);
        register_taxonomy(self::TAXONOMY_NAME, array(self::POST_TYPE_NAME), $args);
    }
}