<?php
$prefix = NewsletterPostType::PREFIX;
$fields = [
	[
		'fieldtype' => SDHelpers::FIELD_TYPE_INPUT,
		'type' => 'text',
		'name' => NewsletterPostType::META_KEY_AUTHOR,
		'label' => 'Autor',
		'value' => NewsletterPostType::getMeta(NewsletterPostType::META_KEY_AUTHOR),
		'description' => 'Autorinformationen'
	],
	[
		'fieldtype' => SDHelpers::FIELD_TYPE_WYSIWYG,
		'name' => NewsletterPostType::META_KEY_ARCHIVE_EXCERPT,
		'label' => 'Auszug für Archivseite',
		'value' => NewsletterPostType::getMeta(NewsletterPostType::META_KEY_ARCHIVE_EXCERPT),
		'description' => 'Textauszug der auf den Newsletterarchiv-Seiten verwendet wird'
	],
	[
		'fieldtype' => SDHelpers::FIELD_TYPE_TEXTAREA,
		'name' => NewsletterPostType::META_KEY_EXCERPT,
		'label' => 'Auszug für Teaserelement',
		'value' => NewsletterPostType::getMeta(NewsletterPostType::META_KEY_EXCERPT),
		'rows' => 10,
		'description' => 'Textauszug der auf innerhalb des Teaserelements im Seitenbereich verwendet wird'
	],
];
?>
<div class="cpt-meta">
	<?php foreach ($fields as $field) : ?>
		<?php echo SDHelpers::createField($field, false); ?></td>
	<?php endforeach; ?>
</div>