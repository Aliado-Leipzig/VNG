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
							<div class="teaser">
								<h1><?php the_title(); ?></h1>
								<?php the_content(); ?>
							</div>
                                                    <div class="scroll-wrapper">
                                                        <a href="#section-intro" class="scroll"></a>
                                                    </div>
							
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</article>
</section>
<section id="section-intro">
	<article class="section-inner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-4 col-lg-offset-2">
					<div class="section-content">
						<?php the_field('more_details', $postId); ?>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-4">
					<div class="section-content">
						<?php the_field('more_details1', $postId); ?>
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
<section id="section-contact">
	<article class="section-inner section-bg-white">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-lg-8 col-lg-offset-2">
					<h2 class="section-title">Weitere Informationen</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-lg-4 col-lg-offset-2">
					<div class="section-content">
						<a data-title="Kontakt" href="mailto:<?php the_field('kontakt',$postId);?>" class="btn btn-contact">Kontakt</a>
					</div>
				</div>
				<div class="col-xs-6 col-lg-4">
					<div class="section-content">
						<?php $file = get_field('pdf',$postId);?>
						<a data-title="Download Flyer" href="<?php echo $file['url'];?>" class="btn btn-download">Download Flyer</a>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>
<?php get_footer(); ?>
