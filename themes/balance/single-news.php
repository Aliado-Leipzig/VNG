<?php get_header();?>

<div class="spinner-wrapper">
    <div class="spinner"></div>
</div>
<main role="main" class="single-news">
    <!-- <?php if ( have_posts() ): while ( have_posts() ): the_post();?>

	<?php if ( ! empty( $header_image = get_post_meta( get_the_ID(), 'header-image', true ) ) ): ?>
	<div class="single-news-header header-image"
		style="background-image: url(<?php echo wp_get_attachment_url( $header_image ); ?>)">
	</div>
	<?php else: ?> -->
	<!-- <?php endif;?> -->
	<div class="single-news-header-mobile">
		<div class="vc_container">
			<div class="vc_row">
				<div class="wpb_column vc_column_container vc_col-sm-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<div class="wpb_text_column wpb_content_element ">
								<div class="wpb_wrapper">
									<h1>News</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="vc_container">
        <div class="vc_row-full-width vc_clearfix"></div>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <article id="post-<?php the_ID();?>" <?php post_class();?>>
							<div class="single-news-wrapper">
								<div class="single-news-details">
									<div class="single-news-date">
										<i class="fas fa-circle"></i>
										<?php the_date(); ?>
									</div>
									<div class="single-news-category">
										<?php the_category( ', ' ); ?>
									</div>
								</div>

								<div class="single-news-title">
									<h1><?php the_title();?></h1>
								</div>

								<div class="single-news-thumbnail">
									<?php the_post_thumbnail( 'full' );?>
								</div>
								<div class="single-news-content">
									<?php the_content();?>
								</div>
								<?php if ( ! empty( $pdf = get_post_meta( get_the_ID(), 'pdf-news', true ) ) ): ?>
								<div class="single-news-download balance-download vc_btn3-container vc_btn3-left">
									<a class="bal_download-button bal_download-artikel vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom" target="_blank" href="<?php echo wp_get_attachment_url( $pdf ) ?>">
									DOWNLOAD ARTIKEL<?php //echo strtoupper( get_the_title( $pdf ) ); ?></a>
									<a class="bal_download-button bal_download-pressebild vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-round vc_btn3-style-custom" target="_blank" href="<?php echo wp_get_attachment_url( $img ) ?>">
									DOWNLOAD PRESSEBILD<?php //echo strtoupper( get_the_title( $pdf ) ); ?></a>
								</div>
								<?php endif; ?>
							</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile;?>
    <?php endif;?>
</main>

<?php get_footer();?>
<link rel="stylesheet" id="vc_font_awesome_5_shims-css" href="https://bal.vng.aliado.rocks/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/v4-shims.min.css?ver=6.2.0" type="text/css" media="all">
<link rel="stylesheet" id="vc_font_awesome_5-css" href="https://bal.vng.aliado.rocks/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/all.min.css?ver=6.2.0" type="text/css" media="all">
