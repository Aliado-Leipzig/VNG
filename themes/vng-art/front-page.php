<?php get_header(); ?>
    <main role="main">
        <div class="vc_container">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-xs-12 vc_col-lg-3">
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
                <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
                <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <section>
                                <h6 class="vheadline-slider"><?php the_title(); ?></h6>
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
                <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>