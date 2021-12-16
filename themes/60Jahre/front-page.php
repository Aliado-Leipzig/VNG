<?php
/*
 * The Main Template File
 */
?>
<?php get_header(); ?>
	<?php if (have_posts()): ?>
		<?php while (have_posts()):the_post(); ?>
			<div class="vc_container">
				<section class="section-white">
					<article class="section-inner">
						<?php the_content(); ?>
					</article>
				</section>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
