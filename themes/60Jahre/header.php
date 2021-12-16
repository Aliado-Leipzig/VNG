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
			<progress value="0">
				<div class="progress-container">
					<span class="progress-bar"></span>
				</div>
			</progress>
                <div class="employee-area-container">
                    <?php if ($post->post_title === 'Startseite'):?>
                        <a href="/vng-verbindet-uns">teamVNG</a>
                    <?php else: ?>
                        <a href="/">Startseite</a>
                    <?php endif; ?>
                </div>
            <?php if ($post->post_title === 'Startseite'):?>
			<div class="header-bg header-frontpage">
				<div class="logo">
					<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/img/vng_60logo.png" class="img-responsive">
				</div>
                
                
                <div class="header-bg-schleifen"></div>
                <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2425_VNG_Sportfest_gr_MS.jpg" />-->
				<div class="header-intro">
					<?php /*<h1><?php echo bloginfo('description');?></h1>*/?>
				</div>
			</div>
            
            <?php else: ?>
                <?php if (is_active_sidebar('nav-language-switcher')) : ?>
                    <?php dynamic_sidebar('nav-language-switcher'); ?>
                <?php endif; ?>
            <div class="header-bg header-employee-area">
				<div class="logo">
					<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/img/vng_60logo.png" class="img-responsive">
				</div>
                <div class="header-bg-img">
                                <h1 class="slogan">
                                    VNG verbindet uns
                                </h1>
                        </div>
            </div>
            
            <?php endif;?>
<!--                <div class="header-img-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2425_VNG_Sportfest_gr.jpg" class="header-img" />
                    <h1>VNG verbindet uns</h1>
                </div>-->
			<div class="scroll-wrapper">
				<a href="#section-intro" class="scroll"></a>
			</div>

		<div class="nav-button">
			<div class="stripe stripe-1 inactive"></div>
			<div class="stripe stripe-2 inactive"></div>
			<div class="stripe stripe-3 inactive"></div>
			<div class="stripe stripe-4 inactive"></div>
		</div>
		<nav class="main-navigation">
			<?php wp_nav_menu(array('theme_location' => 'main')); ?>
		</nav>
		</header>
		<nav class="social-navigation">
			<?php locate_template(include(__DIR__ . '/templates/partials/social-navigation.php'));?>
		</nav>

		<main class="content">

