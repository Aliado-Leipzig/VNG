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
                            <h6 class="vheadline-slider">
                                <?php the_title(); ?>
                            </h6>
                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                <div class="preview">
                                    <?php $img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'large', array( 'class' => 'img-responsive')); ?>
                                    <img src=" <?php echo $img ?>" />
                                </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </section>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid margin-top-100">
            <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
            <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
	                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                            <div class="vc_row wpb_row vc_row-fluid flex-row">
                                <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <h5 class="vheadline">Beschreibung</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10 flex-col">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="preview">
                                                <?php wpautop(the_content()); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
        </div>
    </div>
</main>
<?php get_footer(); ?>