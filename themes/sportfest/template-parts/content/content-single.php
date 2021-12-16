<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>
<section id="section-start">
	<article class="section-inner" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container-fluid">
			<div class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">
				<h1><?php the_title(); ?></h1>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="teaser-image">
						<?php echo wp_get_attachment_image( get_post_thumbnail_id(), 'large'); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</article>
</section>
<section class="main-content">
	<article class="section-inner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">
					<div class="entry-content section-content">
						<?php
						the_content(
							sprintf(
								wp_kses(
								/* translators: %s: Post title. Only visible to screen readers. */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
								'after'  => '</div>',
							)
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>
