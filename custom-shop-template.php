<?php
/*
Template Name: Custom Shop Template
*/

get_header(); ?>

<div class="content" id="content">
    <div class="hero">
        <div class="container">
            <div class="row">
                <h1><?php echo the_title(); ?></h1>
                <p>Welcome to our shopssss! Browse our amazing products below.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                // Display WooCommerce products
                if ( woocommerce_product_loop() ) {
                    woocommerce_product_loop_start();

                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();

                            do_action( 'woocommerce_shop_loop' );

                            wc_get_template_part( 'content', 'product' );
                        }
                    }

                    woocommerce_product_loop_end();
                } else {
                    do_action( 'woocommerce_no_products_found' );
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>