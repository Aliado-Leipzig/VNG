<?php

/** Template Name: Werke Template **/
get_header();
load_isotope();
load_imagesloaded();
?>
<main role="main">
<<<<<<< HEAD
    <div class="vc_container">
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-xs-12 vc_col-lg-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <h1 class="headline-logo"><b>VNG</b>ART</h1>
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
                                <?php the_title() ?>
                            </h6>
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                        <div class="vc_row wpb_row vc_row-fluid flex-row">
                            <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10 flex-col">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="preview">
                                            <div id="werke-filter" class="button-container-isotop vc_row">
                                                <div class="vc_col-xs-12 vc_col-md-4">
                                                    <div class="button" id="malerei-grafik"
                                                        data-filter=".Malerei-Grafik">
                                                        Grafik und Malerei</div>
                                                </div>
                                                <div class="vc_col-xs-12 vc_col-md-4">
                                                    <div class="button" id="stadt-land-ost"
                                                        data-filter=".Stadt-Land-Ost">
                                                        Stadt Land Ost</div>
                                                </div>
                                                <div class="vc_col-xs-12 vc_col-md-4">
                                                    <div class="button" id="east-zu-protokoll"
                                                        data-filter=".East-for-the-record">
                                                        EAST zu Protokoll
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="werke-sorter">
                                                <div id="jahr" class="sort-button" data-sort-by="jahr">Jahr</div>
                                                <div id="kuenstler" class="sort-button" data-sort-by="kuenstler">
                                                    Künstler
                                                </div>
                                            </div>
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
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div id="werke-overview" class="werke-list">
                                <?php echo outputWerke()['output']; ?>
                            </div>
                        </div>
=======
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
								<?php the_title() ?>
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
						<div class="vc_row wpb_row vc_row-fluid flex-row">
							<div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">
								<div class="vc_column-inner">
									<div class="wpb_wrapper"></div>
								</div>
							</div>
							<div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10 flex-col">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="preview">
											<div id="werke-filter" class="button-container-isotop">
												<div class="button" id="grafik" data-filter=".Grafik">Grafik</div>
												<div class="button" id="malerei" data-filter=".Malerei">Malerei</div>
												<div class="button" id="photographie" data-filter=".Photographie">
													Photographie
												</div>
											</div>
											<div class="werke-sorter">
												<div id="jahr" class="sort-button" data-sort-by="jahr">Jahr</div>
												<div id="kuenstler" class="sort-button" data-sort-by="kuenstler">
													Künstler
												</div>
											</div>
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

						<div class="vc_row wpb_row vc_row-fluid">
							<div id="werke-overview" class="werke-list">
								<?php echo outputWerke()['output']; ?>
							</div>
						</div>
>>>>>>> 46b139dc8345d814304fce5dc4fbf9d0f4ff0271

                        <div class="vc_row wpb_row vc_row-fluid flex-row">
                            <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-1 flex-col">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-md-12 vc_col-lg-10 flex-col">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="button-container button-container-centered">
                                            <a id="load-werke" class="button">mehr</a>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-md-hidden vc_col-lg-1"></div>
    </div>
</main>

<?php get_footer(); ?>