<?php
get_header( 'shop' ); ?>

<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action( 'woocommerce_before_main_content' );
?>
<div class="container">
    <div class="row row-products">
        <!-- Product Details -->
        <div class="col-md-8 col-sm-12 text-center">
            <?php
            global $product;

            if ( ! is_a( $product, 'WC_Product' ) ) {
                $product = wc_get_product( get_the_ID() );
            }

            if ( $product ) {
                // Display product title
                echo '<h3 class="product-title textBlue">' . esc_html( $product->get_name() ) . '</h3>';

                // Display product price
                echo '<p class="product-price greyText">' . $product->get_price_html() . '</p>';

                // Display product short description
                echo '<div class="product-short-description blueText fontBold">' . $product->get_short_description() . '</div>';

                // Display add-to-cart button
                
            } else {
                echo '<p>' . esc_html__( 'Product not found.', 'woocommerce' ) . '</p>';
            }
            ?>
        </div>

        <!-- Product Image -->
        <div class="col-lg-4 col-sm-12">
    <div class="product-image">
        <?php 
        // Display the main product image
        echo wp_get_attachment_image( $product->get_image_id(), 'full' ); 
        ?>
    </div>
    <div class="product-details">
		
        <h5 class="textBlue my-3"><?php echo esc_html( $product->get_name() ); ?></h5>
        <div class="fontNormalMinus greyText "><?php echo $product->get_short_description(); ?></div>
        <p class="fontNormal my-2"><?php echo $product->get_price_html(); ?></p>
    
		<?php
global $product;

// Check if the product is purchasable and in stock
if ( $product->is_purchasable() && $product->is_in_stock() ) {
    echo '<form class="cart" method="post" action="' . esc_url( wc_get_cart_url() ) . '" enctype="multipart/form-data">';
    echo '<input type="hidden" name="add-to-cart" value="' . esc_attr( $product->get_id() ) . '">';
    echo '<button type="submit" class="single_add_to_cart_button button alt">';
    echo esc_html__( 'Comprar', 'woocommerce' ); // Replace this text with your custom text
    echo '</button>';
    echo '</form>';
}
?>
        <div class="product-gallery">
            <?php 
            $gallery_images = $product->get_gallery_image_ids();
            foreach ( $gallery_images as $image_id ) {
                echo wp_get_attachment_image( $image_id, 'thumbnail' );
            }
            ?>
        </div>
    </div>
</div>
    </div>
</div>

<?php
/**
 * woocommerce_after_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

get_footer( 'shop' );
?>