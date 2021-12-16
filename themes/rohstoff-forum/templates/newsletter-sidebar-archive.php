<?php
$terms = get_terms([
	'taxonomy' => NewsletterPostType::TAXONOMY_NAME,
	'hide_empty' => true
]);
?>
<div class="newsletter-sidebar-archive-wrap">
	<h5 class="newsletter-sidebar-archive-title active js-acc-trigger">
		Newsletter Übersicht
		<div href="#intro" class="ctaArrow ctaArrow-acc">
			<div class="ctaArrow--part ctaArrow-left"></div>
			<div class="ctaArrow--part ctaArrow-right"></div>
		</div>
	</h5>
	<div class="newsletter-sidebar-archive-inner js-acc-content">
		<?php foreach ($terms as $term) : ?>
			<a href="<?php echo get_term_link($term->term_id); ?>" class="newsletter-sidebar-archive-link">
				<?php echo $term->name; ?>
			</a>
		<?php endforeach; ?>
	</div>
</div>