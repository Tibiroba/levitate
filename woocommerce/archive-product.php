<?php
// Ensure WooCommerce is active
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="container my-5">
    <h1 class="text-center textPink mb-4 text-uppercase font-xlarge" style="letter-spacing:2px;">Produtos</h1>

    <?php if ( woocommerce_product_loop() ) : ?>
        <div class="row">
            <div class="col-12 p-0">
                <!-- Horizontal Scroll Container -->
                <div class="product-scroll-container d-flex" style="padding:30px 0px; margin:20px 0px; flex-wrap:wrap;">
                    <?php while ( have_posts() ) : ?>
                        <?php the_post(); ?>
                        <div class="product-item card m-2 productItemBox" style="">
                            <?php
                            // Define custom URLs for specific products
                            $product_id = get_the_ID();
                            $custom_url = '';
                            if ( $product_id == 69 ) { // Replace 123 with the ID of your first product
                                $custom_url = site_url( '/agua-micelar-corporal/' ); // Replace with your custom page URL
                            } elseif ( $product_id == 68 ) { // Replace 456 with the ID of your second product
                                $custom_url = site_url( '/lencos-levitate/' ); // Replace with your custom page URL
                            } elseif ( $product_id == 64 ) { // Replace 789 with the ID of your third product
                                $custom_url = site_url( '/neutralizador-textil/' ); // Replace with your custom page URL
                            } else {
                                $custom_url = get_permalink(); // Default WooCommerce product page
                            }
                            ?>
                            <a href="<?php echo esc_url( $custom_url ); ?>" class="text-decoration-none">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" class="card-img-top" style="max-width:200px;" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h4 class="card-title textPink font-large"><?php the_title(); ?></h4>
                                    <p class="card-text greyText font-medium"><?php echo wc_get_product( $product_id )->get_price_html(); ?></p>
                                    <a href="<?php echo esc_url( $custom_url ); ?>" class="btn bgPink text-white mt-3 font-large">Ver Produto</a>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>