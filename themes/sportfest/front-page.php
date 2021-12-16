<?php
/*
 * The Main Template File
 */
?>
<?php get_header(); ?>
<?php $positions = PartPostType::getPositionen(); ?>
<progress value="0">
	<div class="progress-container">
		<span class="progress-bar"></span>
	</div>
</progress>
<section id="section-start">
	<article class="section-inner">
		<div class="container-fluid">
			<?php if (have_posts()): ?>
				<?php while (have_posts()):the_post(); ?>
					<?php $postId = get_the_ID(); ?>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="teaser-image">
									<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'original'); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</article>
</section>
<section class="main-content">
	<article class="section-inner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">
					<div class="section-content">
						<?php
							/**
							 * Display content of front-page subpages
							 */
							$attr = array(
								'post_type'      => 'page',
								'post_parent'    => $post->ID,
								'orderby'        => 'menu_order',
								'sort_order'     => 'asc',
								'posts_per_page' => -1
							);

							$pages = query_posts($attr);

							if ( have_posts() ) {

								// Load posts loop.
								while ( have_posts() ) {
									the_post();
									get_template_part( 'template-parts/content/content' );
								}

								// Previous/next page navigation.
								twentynineteen_the_posts_navigation();

							}

							wp_reset_query();
						?>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>
<?php foreach ($positions as $pos): ?>
	<?php $posId = $pos->ID;?>
	<?php locate_template(include(__DIR__ . '/templates/section-positions.php')); ?>
<?php endforeach; ?>





<?php get_footer(); ?>
