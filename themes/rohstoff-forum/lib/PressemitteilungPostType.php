<?php

class PressemitteilungPostType
{
    const POST_TYPE_NAME = 'pressemitteilung';
    const TAXONOMY_NAME = 'pressetag';
    const PREFIX = 'pm_';

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
            'name' => 'Pressemitteilung',
            'singular_name' => 'Pressemitteilung',
            'add_new' => 'Neue Pressemitteilung hinzufügen',
            'all_items' => 'Alle Pressemitteilungen',
            'add_new_item' => 'Neue Pressemitteilung',
            'edit_item' => 'Pressemitteilung bearbeiten',
            'new_item' => 'Neue Pressemitteilung',
            'search_items' => 'Pressemitteilung suchen',
            'not_found' => 'Keine Pressemitteilung gefunden',
            'not_found_in_trash' => 'Keine Pressemitteilung im PP gefunden',
            'menu_name' => 'Pressemitteilungen'
        );


        $args = array(
            'labels' => $labels,
            'public' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'has_archive' => false,
            'publicaly_queryable' => true,
            'menu_position' => 8,
            'menu_icon' => 'dashicons-text-page'
        );

        register_post_type(self::POST_TYPE_NAME, $args);
    }

    public function registerTaxonomy()
    {

        $labels = array(
            'name' => 'Pressemitteilung-Tags',
            'menu_name' => 'Pressemitteilung-Tags',
            'add_new_item' => 'Neuen Pressemitteilung-Tag hinzufügen',
            'new_item_name' => 'Name des neuen Pressemitteilung-Tags',
            'singular_name' => 'Pressemitteilung-Tag',
            'search_items' => 'Pressemitteilung-Tag suchen',
            'all_items' => 'Alle Pressemitteilung-Tags',
            'parent_item' => 'Übergeordnete Pressemitteilung-Tags',
            'parent_item_colon' => 'Übergeordnete Pressemitteilung-Tags:',
            'edit_item' => 'Pressemitteilung-Tag bearbeiten',
            'update_item' => 'Pressemitteilung-Tag updaten'
        );

        $args = array('labels' => $labels, 'hierarchical' => true);
        register_taxonomy(self::TAXONOMY_NAME, array(self::POST_TYPE_NAME), $args);
    }

    public static function getPressemitteilungByTags($tags, $count)
    {

        $tags = explode(',', $tags);


        $args = array(
            'post_type' => self::POST_TYPE_NAME,
            'posts_per_page' => $count,
            'tax_query' => array(
                array(
                    'taxonomy' => self::TAXONOMY_NAME,
                    'field'    => 'slug',
                    'terms'    => $tags,
                ),
            ),
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) {
            $output = '<div class="pressteasers-sidebar-archive-wrapper js-acc-content">';

            while ($query->have_posts()) {
                $query->the_post();
                $output .= '<a href= ' . get_the_permalink() . ' class="pressteasers-sidebar-archive-link">';
                $output .= get_the_title();
                $output .= '</a>';
            }
            $output .= '</div>';
            return $output;
        }
        return 'didn\'t find posts';
    }

    public static function getTags()
    {
        $tags = [];
        foreach (get_terms(array('taxonomy' => self::TAXONOMY_NAME, 'hide_empty' => false)) as $tag) {
            $tags[$tag->name] = $tag->slug;
        };

        return $tags;
    }
}