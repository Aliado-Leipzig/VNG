<?php

class NewsletterPostType
{
	const POST_TYPE_NAME = 'newsletter';
	const TAXONOMY_NAME = 'date';
	const PREFIX = 'nl_';

	/**#@+
	 * @const string Meta Keys
	 */
	// const META_KEY_EXCERPT		 		= self::PREFIX . 'excerpt';
	// const META_KEY_ARCHIVE_EXCERPT		= self::PREFIX . 'archive-excerpt';
	// const META_KEY_AUTHOR	= self::PREFIX . 'author';
	/**#@-*/

	// const METAFIELDS = [
	// 	self::META_KEY_EXCERPT,
	// 	self::META_KEY_ARCHIVE_EXCERPT,
	// 	self::META_KEY_AUTHOR,
	// ];

	/**
	 * PostType constructor.
	 */
	public function __construct()
	{
		add_action('init', array($this, 'registerPostType'));
		add_action('init', array($this, 'registerTaxonomy'));
		// add_action('add_meta_boxes', array($this, 'addMetaBox'), 10, 2);
		// add_action('save_post', array($this, 'saveMeta'), 10, 2);
	}

	/**
	 * register post type
	 */
	public function registerPostType()
	{

		$labels = array(
			'name' => 'Newsletter',
			'singular_name' => 'Newsletter',
			'add_new' => 'Neuen Newsletter hinzufügen',
			'all_items' => 'Alle Newsletter',
			'add_new_item' => 'Neuer Newsletter',
			'edit_item' => 'Newsletter bearbeiten',
			'new_item' => 'Neuer Newsletter',
			'search_items' => 'Newsletter suchen',
			'not_found' => 'Keinen Newsletter gefunden',
			'not_found_in_trash' => 'Keinen Newsletter im PP gefunden',
			'menu_name' => 'Newsletter'
		);


		$args = array(
			'labels' => $labels,
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail'),
			'has_archive' => true,
			'publicaly_queryable' => true,
			'menu_position' => 7,
			'menu_icon' => 'dashicons-email-alt'
		);

		register_post_type(self::POST_TYPE_NAME, $args);
	}

	public function registerTaxonomy()
	{

		$labels = array(
			'name' => 'Newsletter Kategorien',
			'menu_name' => 'Newsletter Kategorien',
			'add_new_item' => 'Neue Newsletter Kategorie hinzufügen',
			'new_item_name' => 'Name der neuen Newsletter Kategorie',
			'singular_name' => 'Newsletter Kategorie',
			'search_items' => 'Newsletter Kategorie suchen',
			'all_items' => 'Alle Newsletter Kategorien',
			'parent_item' => 'Übergeordnete Newsletter Kategorien',
			'parent_item_colon' => 'Übergeordnete Newsletter Kategorie:',
			'edit_item' => 'Newsletter Kategorie bearbeiten',
			'update_item' => 'Newsletter Kategorie updaten'
		);

		$args = array('labels' => $labels, 'hierarchical' => true);
		register_taxonomy(self::TAXONOMY_NAME, array(self::POST_TYPE_NAME), $args);
	}

	/**
	 * 
	 */
	public static function getNewsletterByTermID($termId, $excludeID = "")
	{

		$args = [
			'post_type' => self::POST_TYPE_NAME,
			'numberposts' => -1,
			'exclude' => [$excludeID],
			'tax_query' => array(
				array(
					'taxonomy' => self::TAXONOMY_NAME,
					'field' => 'id',
					'terms' => $termId,
				)
			)
		];
		return get_posts($args);
	}

	/**
	 * add meta boxes
	 */
	public function addMetaBox()
	{
		add_meta_box('meta-box', 'Weitere Angaben', array($this, 'metaBox'), self::POST_TYPE_NAME, 'advanced', 'high');
	}

	/**
	 * load metabox template
	 */
	public function metaBox()
	{
		include __DIR__ . '/templates/newsletter-meta.php';
	}

	// /**
	//  * @param null $args
	//  * @return array
	//  * get all team members
	//  */
	// public static function getEmps($args = null)
	// {
	// 	$defaults = array(
	// 		'posts_per_page' => -1,
	// 		'orderby' => 'date',
	// 		'order' => 'ASC',
	// 		'post_status' => 'publish',
	// 		'post_type' => self::POST_TYPE_NAME,
	// 	);
	// 	$args = wp_parse_args($args, $defaults);
	// 	return get_posts($args);
	// }

	/**
	 * @param $metaKey
	 * @param null $postId
	 * @return mixed
	 * get meta fields
	 */
	public static function getMeta($metaKey, $postId = null)
	{
		if (!$postId) {
			$postId = get_the_ID();
		}

		return get_post_meta($postId, $metaKey, true);
	}

	/**
	 * @param null $postId
	 * save meta fields
	 */
	public function saveMeta($postId = null)
	{

		foreach (self::METAFIELDS as $field) {
			if (!isset($_POST[$field]))
				continue;

			update_post_meta($postId, $field, $_POST[$field]);
		}
	}
}
