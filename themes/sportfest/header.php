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

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/img/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/img/favicon/site.webmanifest">
		<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri() ?>/img/favicon/safari-pinned-tab.svg" color="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="top">
			<div class="logo">
				<span class="logo-line logo-line-1">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_stylesheet_directory_uri() . '/img/vng-logo.png'; ?>" width="192px" height="65px" alt="VNG-Logo" />
					</a>

				</span>
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
			<?php
				wp_nav_menu(array(
					'theme_location' => 'main',
					'menu' => 'Hauptnavigation',
					'container' => false,
					'menu_class' => false
				));
			?>
		</nav>

		<main class="content">

