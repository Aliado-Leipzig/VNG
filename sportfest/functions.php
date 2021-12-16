<?php

/**
 * Enqueue parent styles and scripts
 */
add_action( 'wp_enqueue_scripts', function() {
	$parent_style = 'base-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
});

/**
 * Enqueue styles and scripts
 */
add_action('wp_enqueue_scripts', function() {
	/** Styles */
	wp_register_style('sportfest-styles', get_theme_file_uri( '/css/custom.css' ) );
	wp_enqueue_style('sportfest-styles' );
	wp_enqueue_style('js_composer_front', '/wp-content/plugins/js_composer/assets/css/js_composer.min.css');

	/** Scripts */
	wp_register_script('sportfest', get_stylesheet_directory_uri() . '/js/script.js','jquery');

	wp_enqueue_script('sportfest');
}, 100 );

/**
 * Add shortcode for displaying categories with image
 * @example [categories_with_images]
 */
function categories_with_images( $atts, $content = null ) {
	global $post;

	$output = '';
	$args = array(
		'hide_empty' => false,
	);
	$categories = get_categories($args);

	if ( is_array($categories) ) {
		/** @var WP_Term $category */
		foreach( $categories as $category ) {
			if ( function_exists('z_taxonomy_image') ) {
				$category_output = '<img src="' . z_taxonomy_image_url($category->term_id, 'large') . '" alt="' . $category->name . '" class="categories-list-entry-image" />';
			}
			$category_output .= '<p>' . $category->name . '</p>';
			$category_output = '<a href="' . get_category_link( $category->term_id ) . '" class="categories-list-entry-link">' . $category_output . '</a>';
			$output .= '<li class="categories-list-entry">' . $category_output . '</li>';
		}

		$output = '<ul class="categories-list">' . $output . '</ul>';
	}
	return '<div class="categories">' . $output . '</div>';
}
add_shortcode('categories_with_images', 'categories_with_images');

/**
 * Add shortcode for displaying menus with image
 * @see https://stackoverflow.com/a/26079191
 * @example [menu name="Startseitenmenü"]
 */
function print_menu_shortcode( $atts, $content = null ) {
	// Add filter
	add_filter( 'wp_setup_nav_menu_item', 'filter_menu_items' );

	// Generate menu
	extract( shortcode_atts( array( 'name' => null, ), $atts ) );
	$output = wp_nav_menu( array(
		'menu' => $name,
		'container_class' => 'menu-with-images',
		'echo' => false
	) );

	// Remove filters
	remove_filter( 'wp_setup_nav_menu_item', 'filter_menu_items' );

	return $output;
}
add_shortcode('menu', 'print_menu_shortcode');

// Filter menu
function filter_menu_items($item) {
	if( $item->type == 'taxonomy' ) {
		// For category menu items
		$cat_base = get_option( 'category_base' );
		if( empty($cat_base) ) {
			$cat_base = 'category';
		}

		// Get the path to the category (excluding the home and category base parts of the URL)
		$cat_path = str_replace(home_url() . '/' . $cat_base, '', $item->url );

		// Get category and image ID
		$cat = get_category_by_path( $cat_path, true );
		$thumb_id = get_term_meta( $cat->term_id, '_term_image_id', true );
	} else {
		// Get post and image ID
		$post_id = url_to_postid( $item->url );
		$thumb_id = get_post_thumbnail_id( $post_id );
	}

	if( !empty($thumb_id) ) {
		// Make the title just be the featured image.
		$item->title = wp_get_attachment_image( $thumb_id, 'large')
			. '<p>' . $item->title . '</p>';
	}

	return $item;
}

/**
 * Add shortcode for displaying category posts
 * @see https://wordpress.stackexchange.com/a/220610
 * @example [categorypost cat="pant" posts_per_page="5"]
 */
function cat_post( $atts ) {
	// attributes for shortcode
	if ( isset( $atts['cat'] ) ) {$cats = $atts['cat'];} else {return;}
	if ( isset( $atts['posts_per_page'] ) ) {$posts_per_page = $atts['posts_per_page'];} else {$posts_per_page = -1;}

	// get the category posts
	$category = get_category_by_slug( $cats );
	if ( !is_object( $category ) ) {return;}
	$args = array(
		'cat' => $category->term_id,
		'posts_per_page' => $posts_per_page
	);

	$posts = query_posts( $args );

	if ( have_posts() ) {
		echo '<div class="category-posts">';
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content/content', 'content' );
		}
		echo '</div>';
	}

	wp_reset_query();
}
add_shortcode( 'categorypost', 'cat_post' );

/**
 * Remove archive prefixes
 */
add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	} elseif ( is_tax() ) { // for custom post types
		$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
	} elseif (is_post_type_archive()) {
		$title = post_type_archive_title( '', false );
	}
	return $title;
});

/**
 * Change login logo
 */
add_action( 'login_enqueue_scripts', function() { ?>
	<style type="text/css">
		#login h1 a, .login h1 a {

			width: 192px;
			height: 65px;

			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/vng-logo.png);
			background-size: 192px 65px;
			background-repeat: no-repeat;

			padding-bottom: 10px;

		}
	</style>
<?php });

/**
 * SVG Icons class.
 */
require get_theme_file_path( '/classes/class-twentynineteen-svg-icons.php' );

/**
 * Custom Comment Walker template.
 */
require get_theme_file_path( '/classes/class-twentynineteen-walker-comment.php' );

/**
 * Common theme functions.
 */
require get_theme_file_path( '/inc/helper-functions.php' );

/**
 * SVG Icons related functions.
 */
require get_theme_file_path( '/inc/icon-functions.php' );

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_theme_file_path( '/inc/template-functions.php' );

/**
 * Custom template tags for the theme.
 */
require get_theme_file_path( '/inc/template-tags.php' );

/**
 * Customizer additions.
 */
require get_theme_file_path( '/inc/customizer.php' );