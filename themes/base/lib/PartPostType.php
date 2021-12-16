<?php

/**
 * Created by PhpStorm.
 * User: paul
 * Date: 19.09.17
 * Time: 10:58
 */
class PartPostType
{
	const POST_TYPE_NAME = 'parts';
	//const TAXONOMY_NAME_TYPE = 'bereich';

	public function __construct()
	{
		add_action('init', array($this, 'registerPostType'));
	//	add_action('init', array($this, 'registerTaxonomyType'));
		add_action('add_meta_boxes', array($this, 'addMetaBox'), 10, 2);
		add_action('save_post', array($this, 'saveMeta'), 10, 2);
	}

	public function registerPostType()
	{

		$labels = array('name' => 'Positionen',
			'singular_name' => 'Position',
			'add_new' => 'Neue Position hinzufügen',
			'all_items' => 'Alle Positionen',
			'add_new_item' => 'Neue Position',
			'edit_item' => 'Position bearbeiten',
			'new_item' => 'Neue Position',
			'search_items' => 'Position suchen',
			'not_found' => 'Keine Position gefunden',
			'not_found_in_trash' => 'Keine Position im PP gefunden',
			'menu_name' => 'Position');


		$args = array('labels' => $labels,
			'public' => true,
			'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
			'has_archive' => true,
			'menu_position' => 6,
			'menu_icon' => 'dashicons-editor-ul');

		register_post_type(self::POST_TYPE_NAME, $args);
	}

//	public function registerTaxonomyType()
//	{
//
//		$labels = array('name' => 'Bereich',
//			'menu_name' => 'Bereich',
//			'add_new_item' => 'Neuen Bereich hinzufügen',
//			'new_item_name' => 'Name des neuen Bereichs',
//			'singular_name' => 'Bereich',
//			'search_items' => 'Bereich suchen',
//			'all_items' => 'Alle Bereiche',
//			'parent_item' => 'Übergeordneter Bereich',
//			'parent_item_colon' => 'Übergeordneter Bereich:',
//			'edit_item' => 'Bereich bearbeiten',
//			'update_item' => 'Bereich updaten'
//		);
//
//		$args = array('labels' => $labels, 'hierarchical' => true);
//		register_taxonomy(self::TAXONOMY_NAME_TYPE, array(self::POST_TYPE_NAME), $args);
//	}


	public function addMetaBox()
	{
		add_meta_box('projects-meta-box', 'Infos', array($this, 'projectsMetaBox'), self::POST_TYPE_NAME, 'advanced', 'high');
	}


	public function projectsMetaBox()
	{
		include __DIR__ . '/templates/project-meta.php';
	}

	/**
	 *
	 * @param type $postId
	 * @return type
	 */
	public static function getPositionen($args = null)
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

//	public static function getJobTitle($postId = null) {
//		return self::getMeta('title', $postId);
//	}
//
	public static function getProjectCustomer($postId = null)
	{
		return self::getMeta('customer', $postId);
	}

	public static function getProjectDesign($postId = null)
	{
		return self::getMeta('design', $postId);
	}

	public static function getProjectLink($postId = null)
	{
		return self::getMeta('link', $postId);
	}

	public static function getProjectActivities($postId = null)
	{
		return self::getMeta('activities', $postId);
	}


	public static function getMeta($metaKey, $postId = null)
	{
		if (!$postId) {
			$postId = get_the_ID();
		}

		$prefix = 'project_';

		return get_post_meta($postId, $prefix . $metaKey, true);
	}

	public function saveMeta($postId)
	{
		if (wp_is_post_revision($postId) || get_post_type($postId) !== self::POST_TYPE_NAME) {
			return;
		}

		$fields = array(
			'project_customer',
			'project_design',
			'project_link',
			'project_activities',
		);


		foreach ($fields as $field) {
			if (!isset($_POST[$field])) {
				continue;
			}
		}
		update_post_meta($postId, $field, $_POST[$field]);
	}
}