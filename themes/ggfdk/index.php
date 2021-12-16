<?php
/* 
 * The Main Template File
 */
?>
<?php get_header(); ?>
<div class="container">
	<?php if (have_posts()): ?>
		<?php while (have_posts()):the_post(); ?>
			<div class="row">
				<div class="col-xs-12">

				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
