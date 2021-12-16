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
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png" rel="icon" type="image/png"
        sizes="16x16" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" rel="icon" type="image/png"
        sizes="32x32" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/android-chrome-192x192.png" rel="icon"
        type="image/png" sizes="192x192" />
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/android-chrome-384x384.png" rel="icon"
        type="image/png" sizes="384x384" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
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


<body>
    <?php $id = get_the_ID();
    $header_text = get_post_meta($id, '_header_text', true);
    $header_link_id = get_post_meta($id, '_header_link', true);
    $header_link_url = get_page_link($header_link_id);
    $header_link_title = get_the_title($header_link_id);
    ?>
    <?php if (has_post_thumbnail()) : ?>

    <header class="header" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
        <?php else : ?>
        <header class="header header-grey">

            <?php endif ?>
            <div class="container">
                <div class=" header-menu-wrapper">
                    <div class="logo">
                        <?php $home_url = get_home_url(); ?>
                        <a href="<?php echo $home_url ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/vng-stiftung-logo.svg"
                                alt="VNG-Stiftung-Logo">
                        </a>
                    </div>
                    <div class="header-menu">
                        <?php header_nav(); ?>

                        <div class="mobile-control-button color-white">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?php if ($header_text !== '') : ?>
                <div class="header-text">
                    <?= $header_text; ?>
                </div>
                <?php endif ?>

                <?php if ($header_link_id !== 'none') : ?>
                <div class="vc_btn3-container vc_btn3-inline header-button">
                    <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-modern vc_btn3-color-white"
                        href="<?= $header_link_url ?>" title="<?= $header_link_title ?>"><?= $header_link_title ?></a>
                </div>
                <?php endif ?>
            </div>

        </header>