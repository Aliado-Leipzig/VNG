<?php

class HistoryPostType{
	const POST_TYPE_NAME = 'history';
	const PREFIX = 'history_';

	public function __construct()
	{
		add_action('init', array($this, 'registerPostType'));
		add_action('add_meta_boxes', array($this, 'addMetaBox'), 10, 2);
		add_action('save_post', array($this, 'saveMeta'), 10, 2);
	}

	public function registerPostType()
	{

		$labels = array('name' => 'Eintrag',
			'singular_name' => 'Eintrag',
			'add_new' => 'Neuen Eintrag hinzufügen',
			'all_items' => 'Alle Einträge',
			'add_new_item' => 'Neuer Eintrag',
			'edit_item' => 'EintragEintrag bearbeiten',
			'new_item' => 'Neuer Beitrag',
			'search_items' => 'Einträge suchen',
			'not_found' => 'Keine Einträge gefunden',
			'not_found_in_trash' => 'Keine Einträge im PP gefunden',
			'menu_name' => 'Zeitstrahl');


		$args = array('labels' => $labels,
			'public' => true,
			'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
			'has_archive' => false,
			'publicaly_queryable' => false,
			'query_var' => false,
			'exclude_from_search' => true,
			'menu_position' => 100,
			'menu_icon' => 'dashicons-admin-users');

		register_post_type(self::POST_TYPE_NAME, $args);
	}

	public function addMetaBox()
	{
		add_meta_box('meta-box', 'Infos', array($this, 'metaBox'), self::POST_TYPE_NAME, 'advanced', 'high');
	}


	public function metaBox()
	{
		include __DIR__ . '/templates/history-meta.php';
	}

	public static function getHistory($args = null)
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
			self::PREFIX.'year',
			self::PREFIX.'x',
			self::PREFIX.'y',
			self::PREFIX.'x_image',
			self::PREFIX.'y_image',
			self::PREFIX.'size_image',
		);

		foreach ($fields as $field) {
			if (!isset($_POST[$field])) {
				continue;
			}
			update_post_meta($postId, $field, $_POST[$field]);
		}
	}
}