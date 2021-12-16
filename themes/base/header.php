<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title>
			<?php
				if (is_front_page()) {
					bloginfo('name');
				}else{
					wp_title(); ?> | <?php echo bloginfo('name');
				}
			?>
		</title>

		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0" name="viewport">
		<link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript">
			var baseUrl = '<?= get_bloginfo("template_url"); ?>';
		</script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="top">
			<div class="logo">
				<div class="logo-divider logo-divider-top"></div>
				<span class="logo-line logo-line-1">ERDGAS</span>
				<span class="logo-line logo-line-2">KANN MEHR</span>
				<span class="logo-line logo-line-3">WIR AUCH</span>
				<div class="logo-divider logo-divider-bottom"></div>
				<div class="logo-triangle"></div>
			</div>
		</header>
		<div class="nav-button">
			<div class="stripe stripe-1 inactive"></div>
			<div class="stripe stripe-2 inactive"></div>
			<div class="stripe stripe-3 inactive"></div>
			<div class="stripe stripe-4 inactive"></div>
		</div>
		<nav class="main-navigation">
			<?php $positions = PartPostType::getPositionen(); ?>
			<?php foreach ($positions as $pos): ?>
				<a class="nav-link" href="#section-<?php echo $pos->post_name;?>"><?php echo $pos->post_title;?></a>
			<?php endforeach; ?>
				<a class="nav-link" href="#section-contact">Weitere Informationen</a>
		</nav>

		<main class="content">

