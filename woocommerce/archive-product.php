<?php
get_header( 'shop' ); ?>

<div class="custom-shop-banner ssssssssssss">
    <h1>Welcome to Our Custom Shop!</h1>
    <p>Browse our amazing products below.</p>
</div>

<?php
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

get_footer( 'shop' );