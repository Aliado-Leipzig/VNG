<?php /* Template Name: News Template */ get_header('news-overview'); ?>
<main class="container news-overview">
    <section>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
        </article>
        <?php endwhile; ?>
        <div class="vc_btn3-container vc_btn3-inline load-more-news-button">
            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-modern">weitere
                News laden</a>
        </div>
        <?php else : ?>
        <article>
            <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
        </article>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>