<?php

class PanelPostType {

        const POST_TYPE_NAME = 'panel';

        public function __construct() {
                add_action('init', array($this, 'registerPostType'));
                add_action('add_meta_boxes', array($this, 'add_parent_metaboxes'));
                add_action('save_post', array($this, 'save_details'));
        }

        function registerPostType() {
                $labels = array(
                    'name' => 'panel',
                    'singular_name' => 'Panel',
                    'menu_name' => 'Panels',
                    'parent_item_colon' => 'parent conference item',
                    'all_items' => 'All Panels',
                    'add_new_item' => 'Add new panel',
                    'edit_item' => 'Edit panel',
                    'update_item' => 'Update panel',
                    'search_items' => 'Search panel',
                    'not_found' => 'Panel not found',
                    'not_found_in_trash' => 'Panel not found in trash'
                );
                $args = array(
                    'label' => 'Panels',
                    'description' => 'Panels',
                    'labels' => $labels,
                    'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
                    'hierarchical' => false,
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

        function add_parent_metaboxes() {
                add_meta_box(
                        'parent', 'Parent Conference Item', array($this, 'parent'), 'panel', 'side'
                );
        }

        function parent() {
        global $post;

        $output = '<input type="hidden" name="parent_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';

        $output .= '<select name="post_parent">';

        $query = new WP_Query(array(
            'post_type' => 'conference_item',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        ));
        
        $parent = $post->post_parent;

        while ($query->have_posts()) {
                $query->the_post();
                $post_id = get_the_ID();
                $output .= '<option value="' . $post_id . '"';
                
                if($parent == $post_id){
                        $output .= ' selected="selected"';
                }
                
                $output .= '>' . get_the_title() . '(' . get_the_title($post->post_parent) . ')</option>';
        }

        $output .= '</select>';

        echo $output;
}

function save_details($postId) {
        // verify nonce
        if (isset($_POST['at_nonce']) && !wp_verify_nonce($_POST['parent_nonce'], basename(__FILE__))) {
                return $postId;
        }
        if(isset($_POST['post_parent'])){
                update_post_meta($postId, 'post_parent', $_POST['post_parent']);
        }
}

}
