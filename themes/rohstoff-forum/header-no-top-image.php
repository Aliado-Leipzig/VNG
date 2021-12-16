<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
        <head>
                <meta charset="<?php bloginfo('charset'); ?>">
                <title><?php wp_title(''); ?><?php
                        if (wp_title('', false)) {
                                echo ' :';
                        }
                        ?> <?php bloginfo('name'); ?></title>
                <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
                <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="<?php bloginfo('description'); ?>">

                <?php wp_head(); ?>
                <script>
                        conditionizr.config({
                            assets: '<?php echo get_template_directory_uri(); ?>',
                            tests: {}
                        });
                </script>
        </head>
        <body <?php body_class(); ?>>
                <header class="header">
                        <div class="logo">
                                <a href="<?php echo home_url(); ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
                                </a>
                        </div>
                        <div class="header-right">
                                <div id="menu-toggle">
                                        <input type="checkbox" />
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                </div>

                                <div class="searchbar-wrapper">
                                        <input type="text" />
                                </div>
                                <div class="nav-wrapper">
                                        <nav class="nav">
                                                <?php header_nav(); ?>
                                        </nav>

                                        <?php if (is_active_sidebar('nav-language-switcher')) : ?>
                                                <?php dynamic_sidebar('nav-language-switcher'); ?>
                                        <?php endif; ?>
                                        <div class="clearfix"></div>
                                </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="header-separator"></div>
                </header>
                <div class="wrapper wrapper-no-top-image">
