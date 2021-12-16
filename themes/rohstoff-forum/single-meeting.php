<?php get_header(); ?>
<main role="main">
    <section class="meeting-single">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <!-- /section -->
</main>
<?php get_footer(); ?>