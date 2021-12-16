<?php get_header('project'); ?>

<main role="main">
    <!-- section -->
    <section>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article class="project" id="post-<?php the_ID(); ?>">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element">
                                <h1>Projekte</h1>
                            </div>
                        </div>
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element project-header">
                                <h2><?php the_title(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php the_content(); // Dynamic Content
                    ?>

            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper actions">
                            <?php if (get_post_meta($post->ID, 'pdf', true) !== '') : ?>

                            <?php $pdf_url = wp_get_attachment_url(get_post_meta($post->ID, 'pdf', true)); ?>
                            <span class="pdf-action">

                                <a class="pdf-download-link" target="_blank" href="<?php echo $pdf_url ?>"
                                    title="PDF-Download">
                                    <img class="download-icon"
                                        src="<?php echo get_template_directory_uri() ?>/img/Download.svg" />
                                    PDF
                                </a>
                            </span>
                            <?php endif; ?>

                        </div>
                        <div class="wpb_wrapper next-project">
                            <?php
                                    $project_id = $post->ID; //current project id
                                    //query all projects
                                    $query = new WP_Query(array(
                                        'post_type' => 'project',
                                        'post_status' => 'publish',
                                        'posts_per_page' => -1,
                                        'orderby' => 'ID',
                                        'order'   => 'ASC',
                                    ));

                                    //cycle through projects
                                    $next = false;
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        $post_id = get_the_ID(); //project id

                                        if ($next) {
                                            $url = get_the_permalink();
                                            $title = get_the_title();
                                            $next = false;
                                            break;  //end while loop if next project was found
                                        }

                                        //if current project id matches project id in loop
                                        //set next=true to get next project through while loop
                                        if ($project_id === $post_id) {
                                            $next = true;
                                        }
                                    }
                                    ?>
                            <?php if ($project_id === $post_id) {
                                        $query = new WP_Query(array(
                                            'post_type' => 'project',
                                            'post_status' => 'publish',
                                            'posts_per_page' => 1,
                                            'orderby' => 'ID',
                                            'order'   => 'ASC',
                                        ));

                                        while ($query->have_posts()) {
                                            $query->the_post();
                                            $url = get_the_permalink();
                                            $title = get_the_title();
                                        }
                                    }
                                    ?>
                            <div class="vc_btn3-container vc_btn3-inline next-project-button">
                                <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-modern"
                                    href="<?= $url ?>" title="<?= $title ?>">nächstes Projekt</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </article> <!-- /article -->

        <?php endwhile; ?>

        <?php else : ?>

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