<?php get_header(); ?>
<?php
if ("de" == WPGlobus::Config()->language) {
	$authorLabel = "Autor:";
} else {
	$authorLabel = "автор:";
}
?>
<main role="main">
	<section class="newsletter-tax-archive newsletter-archive">
		<div class="vc_row wpb_row vc_row-fluid">
			<div class="wpb_column vc_column_container vc_col-sm-12">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<h1 class="newsletter-archivepage-title"><?php echo single_term_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="vc_row wpb_row vc_row-fluid">
			<div class="wpb_column vc_column_container vc_col-sm-8">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="wpb_content_element ">
										<div class="wpb_wrapper newsletter-archive-post">
											<a href="<?php the_permalink(); ?>" class="newsletter-archive-title">
												<h1><?php the_title(); ?></h1>
											</a>
											<div class="newsletter-archive-meta">
												<span class="newsletter-archive-meta-tax">
													<?php echo single_term_title(); ?>
												</span>
												<?php $author = get_field('author', $post->ID); ?>
												<?php if (!empty($author)) : ?>
													<span class="newsletter-archive-meta-author">
														/ <?php echo $authorLabel; ?> <?php echo $author; ?>
													</span>
												<?php endif; ?>
											</div>
											<div>
												<?php echo  wpautop(get_field('excerpt_archive', $post->ID)); ?>
											</div>
											<?php locate_template(include(__DIR__ . '/templates/cta-button-newsletter.php')); ?>
										</div>
									</div>
								</article>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="wpb_column vc_column_container vc_col-sm-4">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<?php locate_template(include(__DIR__ . '/templates/newsletter-sidebar-cta.php')); ?>
						<?php locate_template(include(__DIR__ . '/templates/newsletter-sidebar-archive.php')); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /section -->
</main>
<?php get_footer(); ?>