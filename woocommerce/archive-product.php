<?php
// Ensure WooCommerce is active
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="container my-5">
    <h2 class="text-center textPink mb-4">Produtos</h2>

    <?php if ( woocommerce_product_loop() ) : ?>
        <div class="row">
            <div class="col-12 p-0">
                <!-- Horizontal Scroll Container -->
                <div class="product-scroll-container d-flex" style="overflow-x:scroll; padding:60px 0px; margin:20px 0px;">
                    <?php while ( have_posts() ) : ?>
                        <?php the_post(); ?>
                        <div class="product-item card mx-2 productItemBox" style="min-width: 300px; height:auto;">
                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" class="card-img-top" style="max-width:200px;" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h6 class="card-title textPink"><?php the_title(); ?></h6>
                                    <p class="card-text greyText"><?php echo wc_get_product( get_the_ID() )->get_price_html(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn bgPink text-white mt-3">Ver Produto</a>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php else : ?>
        <p class="text-center">No products found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>