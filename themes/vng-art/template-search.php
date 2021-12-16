<?php /* Template Name: Suche Template */ get_header(); ?>
<?php $search = isset($_POST['werk']) ? $_POST['werk'] : "";  ?>
<main role="main">
    <div class="vc_container">
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-xs-12 vc_col-lg-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
<<<<<<< HEAD
                        <h1 class="headline-logo"><b>VNG</b>ART</h1>
=======
                        <a href="<?php echo get_home_url(); ?>">
                            <h1 class="headline-logo"><b>VNG</b>ART</h1>
                        </a>
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
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
                                Ergebnisse zu <?php echo $search ?>
                            </h6>
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
                        <div class="vc_row wpb_row vc_row-fluid flex-row">
                            <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">

                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10 flex-col">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="preview">
                                            <?php
											$results = search_werke($search);
											if ($results) {
												load_isotope();
												load_imagesloaded();
												load_lazyload();
												echo '<div id="werke-overview" class="werke-list search-results">';
												$i = 0;
												foreach ($results as $result) {
													echo '<a data-order="' . $i . '" class="grid-item" href="' . $result->guid . '">' .
														'<img src="' . get_the_post_thumbnail_url($result->ID) . '" />' .
														'<figcaption class="post-title">' . $result->post_title . '</figcaption>' .
<<<<<<< HEAD
														'<figcaption class="kuenstler-name">' . get_kuenstler_by_post_id($result->ID) . '</figcaption>' .
=======
														'<figcaption class="kuenstler-name">' . get_kuenstler_by_post_id($result->ID) . ' (' . get_field("entstehungsjahr", $result->ID) .')</figcaption>' .
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271
														'</a>';
													$i++;
												}
												echo '</div>';
											} else {
												echo '<div class="error-no-posts">Es wurden keine Ergebnisse für Ihre Suchanfrage gefunden</div>';
											}
											?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
        </div>
    </div>
</main>
<?php get_footer(); ?>