<?php

class ConferenceItemPostType {

        const POST_TYPE_NAME = 'conference_item';

        public function __construct() {
                add_action('init', array($this, 'registerPostType'));
                add_filter('page_attributes_dropdown_pages_args', array($this, 'conference_item_attributes_dropdown_pages_args'));
        }

        public function conference_item_attributes_dropdown_pages_args($dropdown_args) {
                $dropdown_args['post_type'] = 'conference';
                return $dropdown_args;
        }

        function registerPostType() {
                $labels = array(
                    'name' => 'ConferenceItem',
                    'singular_name' => 'ConferenceItem',
                    'menu_name' => 'Conference items',
                    'parent_item_colon' => 'parent conference items',
                    'all_items' => 'All Conference items',
                    'add_new_item' => 'Add new conference item',
                    'edit_item' => 'Edit conference item',
                    'update_item' => 'Update conference item',
                    'search_items' => 'Search conference item',
                    'not_found' => 'Conference item not found',
                    'not_found_in_trash' => 'Conference item not found in trash'
                );
                $args = array(
                    'label' => 'Conference items',
                    'description' => 'Past conference items',
                    'labels' => $labels,
                    'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
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
                    'capability_type' => 'page',
                );
                register_post_type(self::POST_TYPE_NAME, $args);
        }

}
