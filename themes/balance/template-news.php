<?php
/*
Template Name: Aktuelles
*/
get_header(); ?>


<?php
$args = array(
    'post_type' => 'news',
    'posts_per_page' => -1
);
$query = new WP_Query($args);
?>
<div class="spinner-wrapper">
    <div class="spinner"></div>
</div>
<main role="main" class="news-overview">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php if (get_the_post_thumbnail()) : ?>
    <div class="news-overview-header header-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
    </div>
    <?php else : ?>
    <div class="news-overview-header yellow">
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
                        <?php the_content(); ?>

                        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="single-news-thumbnail">
                                <?php the_post_thumbnail('thumbnail'); ?>
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



                            <div class="single-news-title">
                                <a href="<?php the_permalink() ?>">
                                    <strong><?php the_title(); ?></strong>
                                </a>
                            </div>
                            <div class="single-news-teasertext">
                                <?php the_excerpt() ?>
                            </div>
                            <div class="single-news-read-more">
                                <a href="<?php the_permalink() ?>">mehr lesen</a>
                            </div>
                        </article>
                        <?php endwhile; ?>
                        <?php else : ?>
                        <article>
                            <h2>Keine aktuellen News vorhanden</h2>
                        </article>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>