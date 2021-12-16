<?php
$fields = array(
	array(
		'fieldtype' => 'input',
		'type' => 'url',
		'name' => 'post_url',
		'label' => 'externe URL',
		'placeholder' => 'URL',
		'value' => get_post_meta(get_the_ID(), 'post_url',true),
	),
);
?>
<div class="cpt-meta">
	<?php foreach ($fields as $field): ?>
		<?php SDHelpers::createField($field);?>
	<?php endforeach; ?>
</div>