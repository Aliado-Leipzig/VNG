<?php get_header(); ?>

<div class="spinner-wrapper">
    <div class="spinner"></div>
</div>
<main role="main" class="single-news">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php if (!empty($header_image = get_post_meta(get_the_ID(), 'header-image', true))) : ?>
    <div class="single-news-header header-image"
        style="background-image: url(<?php echo wp_get_attachment_url($header_image); ?>)">
    </div>
    <?php else : ?>
    <div class="single-news-header yellow">
        <div class="vc_container">
            <div class="vc_row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h1>Aktuelles</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="vc_container">
        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <div class="single-news-title">
                                <h1><?php the_title(); ?></h1>
                            </div>

                            <div class="single-news-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>

                            <div class="single-news-date">
                                <?php the_date(); ?>
                                <?php if (!empty($pdf = get_post_meta(get_the_ID(), 'pdf-news', true))) : ?>
                                <div class="single-news-pdf">
                                    <a target="_blank" href="<?php echo wp_get_attachment_url($pdf) ?>">
                                        <img src="/wp-content/themes/balance/img/application-pdf.png" />
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="single-news-content">
                                <?php the_content(); ?>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>