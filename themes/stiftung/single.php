<?php get_header('news'); ?>

<main role="main">
    <!-- section -->
    <section>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article class="news" id="post-<?php the_ID(); ?>">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element">
                                <h1>News</h1>
                            </div>
                        </div>
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element news-header">
                                <?php the_title(); ?>
                            </div>
                            <div class="wpb_text_column wpb_content_element news-date">
                                <?php the_date(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php the_content(); // Dynamic Content
                    ?>

<<<<<<< HEAD
            <?php if (get_post_meta($post->ID, 'pdf', true !== '')) : ?>
            <?php $pdf_url = wp_get_attachment_url(get_post_meta($post->ID, 'pdf', true)); ?>

=======
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper actions">
<<<<<<< HEAD
=======
                            <?php $pdf_url = wp_get_attachment_url(get_post_meta($post->ID, 'pdf', true)); ?>
                            <?php if (get_post_meta($post->ID, 'pdf', true !== '')) : ?>
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
                            <span class="pdf-action">

                                <a class="pdf-download-link" target="_blank" href="<?php echo $pdf_url ?>"
                                    title="PDF-Download">
                                    <img class="download-icon"
                                        src="<?php echo get_template_directory_uri() ?>/img/Download.svg" />
                                    PDF
                                </a>
                            </span>
<<<<<<< HEAD
=======
                            <?php endif; ?>
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            <?php endif; ?>
=======
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271

        </article> <!-- /article -->

        <?php endwhile; ?>

        <?php else : ?>

        <!-- article -->
        <article>

            <h1>News nicht gefunden</h1>

        </article>
        <!-- /article -->

        <?php endif; ?>

    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>