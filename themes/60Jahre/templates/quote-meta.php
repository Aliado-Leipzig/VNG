<?php
$fields = array(
	array(
		'fieldtype' => 'input',
		'type' => 'text',
		'name' => 'quote_video_url',
		'label' => 'Video URL',
		'placeholder' => 'URL',
		'value' => get_post_meta(get_the_ID(), 'quote_video_url',true),
	),array(
		'fieldtype' => 'input',
		'type' => 'text',
		'name' => 'quote_person',
		'label' => 'Urheber',
		'placeholder' => 'Urheber',
		'value' => get_post_meta(get_the_ID(),'quote_person', true),
	),array(
		'fieldtype' => 'input',
		'type' => 'text',
		'name' => 'quote_position',
		'label' => 'Position des Urhebers',
		'placeholder' => 'Position',
		'value' => get_post_meta(get_the_ID(),'quote_position', true),
	),
);
?>
<div class="cpt-meta">
	<?php foreach ($fields as $field): ?>
    <div>
        <?php SDHelpers::createField($field);?>
    </div>
	<?php endforeach; ?>
</div>