<?php get_header(); ?>
	<main role="main page">
        <div class="vc_container">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-xs-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <a href="<?php echo get_home_url(); ?>">
                                <h1 class="headline-logo"><b>VNG</b>ART</h1>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <section>
                                <h6 class="vheadline-slider">
                                    <?php the_title(); ?>
                                </h6>
                                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                        <?php wpautop(the_content()); ?>
                                    </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</main>
<?php get_footer(); ?>