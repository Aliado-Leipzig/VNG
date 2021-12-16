<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <div class="vc_container">
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <h1>Produktübersicht</h1>



                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <div class="product">
                            <h2 class="product-title"><?php the_title(); ?></h2>
                            <div class="product-content">
                                <?php the_content(); ?>
                            </div>


                        </div>

                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /section -->
</main>

<?php get_footer(); ?>
