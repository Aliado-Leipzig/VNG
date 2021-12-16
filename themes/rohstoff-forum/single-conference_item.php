<?php get_header(); ?>

<main role="main">
        <!-- section -->
        <section>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                <div class="conference-submenu-container">
                                        <ul class="conference-submenu">
                                                <?php
                                                $siblings = new WP_Query(array(
                                                    'post_type' => 'conference_item',
                                                    'post_parent' => $post->post_parent,
                                                    'nopaging' => true,
                                                    'orderby' => 'ID',
                                                    'order' => 'asc'
                                                ));

                                                if ($siblings->have_posts()) {
                                                        while ($siblings->have_posts()) {
                                                                $siblings->the_post();
                                                                ?>
                                                                <li class="skewed">
                                                                        <div class="unskewed">
                                                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                                                        <?php the_title(); ?>
                                                                                </a>
                                                                        </div>
                                                                </li>
                                                                <?php
                                                        }
                                                }
                                                wp_reset_postdata();
                                                ?>
                                        </ul>
                                </div>
                                <!-- article -->
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                        <!-- post title -->
                                        <h1>
                                                <?php the_title(); ?>
                                        </h1>
                                        <!-- /post title -->

                                        <?php the_content(); // Dynamic Content        ?>

                                </article>
                                <!-- /article -->

                        <?php endwhile; ?>

                <?php else: ?>

                        <!-- article -->
                        <article>

                                <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

                        </article>
                        <!-- /article -->

                <?php endif; ?>

        </section>
        <!-- /section -->
</main>

<?php get_footer(); ?>
