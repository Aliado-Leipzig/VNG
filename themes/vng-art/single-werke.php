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
<<<<<<< HEAD
                            <h6 class="vheadline-slider">
                                <?php the_title(); ?>
                            </h6>
=======
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php echo get_the_post_thumbnail() . '<figcaption>' . $post->beschriftung . '</figcaption>'; ?>
                                <table class="details-table margin-top-50">
                                    <?php
                                            echo "<tr><td>Titel</td><td>" . $post->post_title . "</td></tr>";
                                            echo "<tr><td>Künstler*in</td><td><a href='" . get_post_permalink($post->rel_kunstler) . "'>" . get_post($post->rel_kunstler)->post_title . "</a></td></tr>";
                                            $sammlung = get_post($post->rel_sammlung);
                                            echo "<tr><td>Sammlung</td><td>" . $sammlung->post_title . "</td></tr>";
                                            if (!empty($post->entstehungsjahr)) echo "<tr><td>Entstehungszeit</td><td>" . $post->entstehungsjahr . "</td></tr>";
                                            if (!empty($post->technik_material)) echo "<tr><td>Technik & Material</td><td>" . $post->technik_material . "</td></tr>";
                                            if (!empty($post->beschriftung)) echo "<tr><td>Beschreibung</td><td>" . $post->beschriftung . "</td></tr>";
                                            if (!empty($post->groesse)) echo "<tr><td>Größe</td><td>" . $post->groesse . "</td></tr>";
                                            ?>
                                </table>
                                <?php
                                        $content = get_the_content();
                                        if (!empty($content)) { ?>
                                <div class="margin-top-100 single-werk-content"><?php the_content() ?></div>
                                <?php } ?>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </section>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
        </div>
</main>
<?php get_footer(); ?>