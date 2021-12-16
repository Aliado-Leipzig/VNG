<?php /* Template Name: Sammlungen Template */ get_header(); ?>
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
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
                <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <?php foreach (get_sammlungen() as $sammlung): ?>
                                <div class="vc_row wpb_row vc_row-fluid flex-row">
                                    <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <h5 class="vheadline"><?php echo $sammlung->post_title ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-5 flex-col">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="preview">
                                                    <?php echo get_the_post_thumbnail($sammlung->ID, 'large', array( 'class' => 'img-responsive')); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper"></div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-5 flex-col">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <p class="description">
                                                    <?php echo $sammlung->preview ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-xs-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="button-container">
                                                    <a class="button" href="<?php echo get_post_permalink($sammlung->ID) ?>">mehr</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>