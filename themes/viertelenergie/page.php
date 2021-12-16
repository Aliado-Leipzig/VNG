<?php get_header(); ?>
<div class="spinner-wrapper">
	<div class="spinner"></div>
</div>
<main>
	<div class="vc_container">
		<div class="vc_row-full-width vc_clearfix"></div>
		<div class="vc_row wpb_row vc_row-fluid">
			<div class="wpb_column vc_column_container vc_col-sm-12">
				<div class="vc_column-inner">
					<div class="wpb_wrapper">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php the_content(); ?>
								</article>
							<?php endwhile; ?>
						<?php else: ?>
							<article>
								<h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
							</article>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
