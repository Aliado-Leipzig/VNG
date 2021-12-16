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
                                <?php $artist_id = get_the_ID(); ?>
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
                        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                            <div class="vc_row wpb_row vc_row-fluid flex-row">
                                <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <h5 class="vheadline">Vita</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10 flex-col">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="preview">
                                                <?php the_field('vita') ?>
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
        <?php
        $args = array(
            'post_type' => 'werke',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'suppress_filters' => false,
            'meta_query' => array(
                array(
                    'key' => 'rel_kunstler',
                    'value' => $artist_id,
                    'compare' => '='
                )
            )
        );
        $posts = get_posts( $args );

        if( is_array($posts) && count($posts) > 0 ):
            ?>
            <div class="artwork-wrapper vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
                <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_row-fluid flex-row">
                                <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <h5 class="vheadline">Werke</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10 flex-col">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="preview">
                                                <ul class="artworks">
                                                    <?php
                                                    foreach( $posts as $post ):
                                                        $meta = get_post_meta($post->ID);
                                                        ?>
                                                        <li>
                                                            <a href="<?php echo get_permalink($post->ID); ?>">
                                                                <figure>
                                                                    <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
                                                                    <figcaption>
                                                                        <?php echo $post->post_title; ?>
                                                                    </figcaption>
                                                                </figure>
                                                            </a>
                                                        </li>
                                                    <?php
                                                    endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
