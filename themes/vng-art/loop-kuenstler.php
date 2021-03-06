<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>
<?php endif; ?>
