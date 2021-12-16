<?php $cols = get_field('cols', $posId); ?>
<section id="section-<?php echo $posId; ?>">
	<article class="section-inner section-bg-<?php the_field('bg_color', $posId); ?>">
		<div class="container-fluid" id="section-<?php echo $pos->post_name; ?>">
			<div class="row row-eq-height">
				<?php if ($cols == 'left'): ?>
					<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 col-lg-offset-2">
						<?php echo get_the_post_thumbnail($pos->ID, 'full',array('class'=>'img-responsive section-img'));?>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-8 col-lg-5">
						<h2 class="section-title"><?php echo $pos->post_title; ?></h2>
						<div class="section-content">
							<?php echo $pos->post_content; ?>
							<?php locate_template(include(__DIR__ . '/partials/positions-acc.php')); ?>
						</div>
					</div>
				<?php elseif ($cols == 'right'): ?>
					<div class="col-xs-12 col-sm-push-7 col-sm-5 col-md-4 col-md-push-8 col-lg-3 col-lg-push-5 col-lg-offset-2">
						<?php echo get_the_post_thumbnail($pos->ID, 'full',array('class'=>'img-responsive section-img'));?>
					</div>
					<div class="col-xs-12 col-sm-7 col-sm-pull-5 col-md-8 col-md-pull-4 col-lg-5 col-lg-pull-3">
						<h2 class="section-title"><?php echo $pos->post_title; ?></h2>
						<div class="section-content">
							<?php echo $pos->post_content; ?>
							<?php locate_template(include(__DIR__ . '/partials/positions-acc.php')); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</article>
</section>