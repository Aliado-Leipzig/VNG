<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>
            <?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?>
        </title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon">
		<link href="<?php echo get_template_directory_uri(); ?>/fonts/OpenSans-Regular.ttf" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/fonts/OpenSans-Light.ttf" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="theme-color" content="#ffc200">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		<script type="text/javascript">
			var baseUrl = '<?= get_bloginfo("template_url"); ?>';
		</script>
	</head>
	<header>
        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-xs-6">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="bar-container" id="menu-button">
                            <div class="bar bar1"></div>
                            <div class="bar bar2"></div>
                            <div class="bar bar3"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-xs-6">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <form id="search-form" action="/suche" method="POST">
                            <input class="search-bar" name="werk" placeholder="Suche nach Werk"/>
                        </form>
                        <div class="search-bar-mobile">
                            <div class="glass"></div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
        <div class="vc_row-full-width vc_clearfix"></div>
        <?php get_header_menu(); ?>
	</header>
	<body <?php body_class(); ?>>
	<div class="menu-overlay"></div>
