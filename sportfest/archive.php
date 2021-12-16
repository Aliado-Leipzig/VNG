<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<section id="section-start">
	<article class="section-inner">
		<div class="container-fluid">
			<div class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">
				<div class="teaser">
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

					<div class="archive-image" style="background-image: url('<?php if ( function_exists('z_taxonomy_image_url') ) { echo z_taxonomy_image_url(get_queried_object_id(), 'large'); } ?>');">
						<?php if ( function_exists('z_taxonomy_image') ) { z_taxonomy_image(get_queried_object_id(), 'large'); } ?>
					</div>

				</div>

			</div>
		</div>
	</article>
</section>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-lg-8 col-lg-offset-2">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

				<?php if ( have_posts() ) : ?>

					<?php
					// Start the Loop.
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that
						 * will be used instead.
						 */
						get_template_part( 'template-parts/content/content', 'content' );

						// End the loop.
					endwhile;

					// Previous/next page navigation.
					twentynineteen_the_posts_navigation();

					// If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content/content', 'none' );

				endif;
				?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php
get_footer();
