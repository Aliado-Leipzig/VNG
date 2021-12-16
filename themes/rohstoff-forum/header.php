<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?>
        <?php
        if (wp_title('', false)) {
            echo ' :';
        }
        ?>
        <?php bloginfo('name'); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="icon" type="image/png" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon"
        type="image/png" />
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
<?php if (WPGlobus::Config()->language === 'ru') : ?>

<body <?php body_class('ru'); ?>>
    <?php else : ?>

    <body <?php body_class('de'); ?>>
        <?php endif; ?>

        <header class="header">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Logo-DRRF.jpg" alt="Logo"
                            class="logo-img">
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
            </div>
            <div class="header-separator white-sm-up"></div>
        </header>
        <div class="vc_row wpb_row vc_row-fluid vc_row-no-padding top-image-wrapper vc_hidden-xs">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_left">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="image-headline-wrapper">
                                    <?php if ($post->post_title === 'Startseite' || $post->post_title === 'Konferenzen' || $post->post_title === 'Конференции' || $post->post_type === 'conference') : ?>
                                    <?php if (WPGlobus::Config()->language === 'ru') : ?>
                                    <div class="heading-top">
<<<<<<< HEAD
                                        <?php echo get_option('custom_header_text_top_ru'); ?>
                                    </div>
                                    <div class="heading-bottom">
                                        <?php echo get_option('custom_header_text_bottom_ru'); ?>
=======
                                        с 28 по 30 апреля 2021 года в Лейпциге
                                    </div>
                                    <div class="heading-bottom">
                                        13-я Российско-Германская сырьевая конференция
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
                                    </div>
                                    <!--<div class="vc_btn3-container vc_btn3-inline">
                                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-classic vc_btn3-color-white"
                                            href="/ru/<?php echo get_option('custom_header_link') ?>">
                                            <div class="button-inner">ДАЛЕЕ /</div>
                                        </a>
                                    </div> -->
                                    <?php else : ?>
                                    <div class="heading-top">
<<<<<<< HEAD
                                        <?php echo get_option('custom_header_text_top_de'); ?>
                                    </div>
                                    <div class="heading-bottom">
                                        <?php echo get_option('custom_header_text_bottom_de'); ?>
=======
                     		    	28 bis 30. April 2021 in Leipzig
                                    </div>
                                    <div class="heading-bottom">
                                        13. Deutsch-Russische Rohstoff-Konferenz
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
                                    </div>
                                    <!--<div class="vc_btn3-container vc_btn3-inline">
                                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-classic vc_btn3-color-white"
                                            href="<?php echo get_option('custom_header_link'); ?>">
                                            <div class="button-inner">mehr /</div>
                                        </a>
                                    </div> -->                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="vc_single_image-wrapper">
                                    <?php if (has_post_thumbnail()) : ?>
                                    <div class="top-image"
                                        style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                                    <?php else : ?>
                                    <!--<div class="top-image" style="background-image: url(<?php echo wp_get_attachment_image_src(2104, 'full')[0]; ?>)"></div>-->
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/Banner.jpg" alt="Logo"
                                        class="banner-img">
                                    <?php endif; ?>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="margin-to-header vc_hidden-md vc_hidden-sm vc_hidden-lg"></div>
        <div class="wrapper language-<?php echo WPGlobus::Config()->language; ?>">