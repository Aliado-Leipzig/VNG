<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php if (get_post_meta($post->ID, "title", true) != '') echo get_post_meta($post->ID, "title", true) . ' - ' . get_bloginfo('name');
            else echo get_the_title() . ' - ' . get_bloginfo('title'); ?></title>
    <meta name="description" content="<?php if (get_post_meta($post->ID, "description", true) != '') echo get_post_meta($post->ID, "description", true);
                                        else bloginfo('description'); ?>" />
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x316"
        href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/touch.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="preloadedImages"></div>
    <header class="header">
        <div class="header-fix">
            <div class="vc_container">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-xs-4">
                            <div id="logo">
                                <div class="logo">
                                    <a href="<?php echo home_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_retina.png"
                                            alt="Logo" class="img-responsive logo-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-xs-8">
                            <div id="menu">
                                <div class="nav-wrapper">
                                    <a href="#" id="nav-button-main-navigation" class="nav-button nav-button-burger">
                                        <span class="slice1"></span>
                                        <span class="slice2"></span>
                                        <span class="slice3"></span>
                                    </a>
                                    <nav class="nav" role="navigation">
                                        <?php wp_nav_menu(array('theme_location' => 'main', 'depth' => 1)); ?>
                                        <?php if (is_active_sidebar('nav-language-switcher')) : ?>
                                        <?php dynamic_sidebar('nav-language-switcher'); ?>
                                        <?php endif; ?>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu">
            <div class="vc_container">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_row-fluid">

                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <?php if (is_active_sidebar('nav-language-switcher')) : ?>
                            <?php dynamic_sidebar('nav-language-switcher'); ?>
                            <?php endif; ?>
                            <?php wp_nav_menu(array('theme_location' => 'main', 'depth' => 1)); ?>
                            <?php wp_nav_menu(array('theme_location' => 'footer')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <a href="/kontakt" id="kontakt">Kontakt</a>