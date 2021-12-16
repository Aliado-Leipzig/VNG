<?php
$prefix = HistoryPostType::PREFIX;
$fields = array(
	array(
		'fieldtype' => 'input',
		'type' => 'text',
		'name' => $prefix.'year',
		'label' => 'Jahr',
		'placeholder' => '1949',
		'value' => HistoryPostType::getMeta('year'),
	),
	array(
		'fieldtype' => 'input',
		'type' => 'text',
		'name' => $prefix.'x',
		'label' => 'X-Position Jahreszahl',
		'placeholder' => '0',
		'value' => HistoryPostType::getMeta('x'),
	),
	array(
		'fieldtype' => 'input',
		'type' => 'text',
		'name' => $prefix.'size_image',
		'label' => 'Bildgröße',
		'placeholder' => '100',
		'value' => HistoryPostType::getMeta('size_image'),
	),
	array(
		'fieldtype' => 'input',
		'type' => 'text',
		'name' => $prefix.'y',
		'placeholder' => '0',
		'label' => 'Y-Position Jahreszahl',
		'value' => HistoryPostType::getMeta('y'),
	),
	array(
		'fieldtype' => 'input',
		'type' => 'text',
		'name' => $prefix.'x_image',
		'label' => 'X-Position Bild',
		'placeholder' => '0',
		'value' => HistoryPostType::getMeta('x_image'),
	),
	array(
		'fieldtype' => 'input',
		'type' => 'text',
		'name' => $prefix.'y_image',
		'label' => 'Y-Position Bild',
		'placeholder' => '0',
		'value' => HistoryPostType::getMeta('y_image'),
	),
);
?>
<div class="cpt-meta">
	<?php foreach ($fields as $field): ?>
		<?php SDHelpers::createField($field);?>
	<?php endforeach; ?>
</div>