<?php get_header(); ?>
<main role="main">
        <!-- section -->
        <section>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                
                                                <?php
                                                $children = new WP_Query(array(
                                                    'post_type' => 'conference_item',
                                                    'post_parent' => get_the_ID(),
                                                    'nopaging' => true,
                                                    'orderby' => 'ID',
                                                    'order' => 'asc'
                                                ));

                                                if ($children->have_posts()):
                                                        $cur_lang = '{:' . WPGlobus::Config()->language . '}';
                                                        $hasChildren = false;
                                                        
                                                        while ($children->have_posts()): $children->the_post();
                                                                if($post->post_content !== '' && strpos($post->post_content,$cur_lang) !== false):
                                                                        $hasChildren = true;
                                                                endif;
                                                        endwhile;
                                                        if ($hasChildren): ?>
                                                                <div class="conference-submenu-container">
                                                                        <ul class="conference-submenu">

                                                                                <?php while ($children->have_posts()): $children->the_post();?>
                                                                                        <li class="skewed">
                                                                                                <div class="unskewed">
                                                                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                                                                                <?php the_title(); ?>
                                                                                                        </a>
                                                                                                </div>
                                                                                        </li>
                                                                                <?php endwhile; ?>
                                                                        </ul>
                                                                </div>
                                                        <?php endif;
                                               endif; 
                                               wp_reset_postdata(); ?>

                                        
                                <!-- article -->
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                        <!-- post title -->
                                        <h1>
                                                <?php the_title(); ?>
                                        </h1>
                                        <!-- /post title -->

                                        <?php the_content(); // Dynamic Content         ?>

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
