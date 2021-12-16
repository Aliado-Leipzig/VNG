<?php

class ConferencePostType {

        const POST_TYPE_NAME = 'conference';

        public function __construct() {
                add_action('init', array($this, 'registerPostType'));
        }

        function registerPostType() {
                $labels = array(
                    'name' => 'Conference',
                    'singular_name' => 'Conference',
                    'menu_name' => 'Conferences',
                    'parent_item_colon' => 'Parent conferences',
                    'all_items' => 'All conferences',
                    'view_item' => 'View conference',
                    'add_new_item' => 'Add new conference',
                    'edit_item' => 'Edit conference',
                    'update_item' => 'Update conference',
                    'search_items' => 'Search conference',
                    'not_found' => 'Conference not found',
                    'not_found_in_trash' => 'Conference not found in trash'
                );

                $args = array(
                    'label' => 'Conferences',
                    'description' => 'Past conferences',
                    'labels' => $labels,
                    'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
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
