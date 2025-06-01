<?php
/* Template Name: Custom Cart Template */

defined('ABSPATH') || exit;

get_header(); ?>

<div class="content" id="content">
    <div class="container">
        <div class="row">
            <!-- Cart Section -->
            <div class="col-12">
                <div class="boxCart">
                    <h2 class="textPink">Carrinho</h2>
                    <?php if (WC()->cart->is_empty()) : ?>
                        <div class="">
                            <p>Seu carrinho está vazio.</p>
                            <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>" class="btn btnPink ">
                                Voltar à loja
                            </a>
                        </div>
                </div>
            </div>
        </div>


    <?php else : ?>
        <div class="row">


            <div class="col-md-8 col-sm-12">


                <p class="custom-message text-start fontNormal textBlue">Confira os itens no seu carrinho antes de finalizar a compra.</p>
                <div class="cart-items">
                    <?php
                        // Debugging: Check the cart contents
                        
                        // print_r(WC()->cart->get_cart());
                       
                    //     echo '<pre>';
                    // print_r(WC()->cart->get_cart());
                    //  echo '</pre>';
                        // Loop through cart items
                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                            $product = $cart_item['data'];
                            $product_name = $product->get_name();
                            $product_price = wc_price($product->get_price());
                            $product_quantity = $cart_item['quantity'];
                            $product_subtotal = wc_price($cart_item['line_total']);
                            $product_permalink = $product->is_visible() ? $product->get_permalink() : '';
                            $product_thumbnail = $product->get_image('thumbnail');
                            $remove_url = wc_get_cart_remove_url($cart_item_key);
                    ?>

                        <div class="cart-item d-flex align-items-center mb-3">
                            <div class="product-thumbnail">
                                <?php echo $product_thumbnail; ?>
                            </div>
                            <div class="product-details flex-grow-1 ms-3">
                                <ul class="cartListDetails">
                                    <li>
                                        <p class="product-name "><a class="textBlue fontNormal" href="<?php echo esc_url($product_permalink); ?>"><?php echo esc_html($product_name); ?></a></p>
                                    </li>
                                    <li>
                                        <p class="product-price textBlue">Preço: <span class="greyText"><?php echo $product_price; ?></span></p>
                                    </li>
                                    <li>
                                        <div class="product-quantity textBlue">
                                            Quantidade:
                                            <form action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post" class="update-quantity-form d-inline">
                                                <input type="number" name="cart[<?php echo $cart_item_key; ?>][qty]" value="<?php echo esc_attr($product_quantity); ?>" min="1" class="input-text qty text" style="width: 50px; text-align: center;" />
                                                <button type="submit" class="btn btn-sm bgPink text-white" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>">
                                                    Atualizar
                                                </button>
                                                <a href="<?php echo esc_url($remove_url); ?>" class="btn btn-sm btn-outline-danger" title="<?php esc_attr_e('Remover', 'woocommerce'); ?>">
                <?php esc_html_e('Remove', 'woocommerce'); ?>
            </a>
                                                <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
                                            </form>
                                        </div>
                                    </li>

                                    <li>
                                        <p class="product-subtotal  textBlue">Subtotal: <span class="greyText"><?php echo $product_subtotal; ?></span></p>
                                    </li>
                                </ul>




                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">

                <h2 class="textPink">Resumo do Pedido</h2>

                <div class="checkout-data p-4 bg-light rounded">
                    <p class="cart-subtotal">
                        Subtotal: <?php echo wc_price(WC()->cart->get_subtotal()); ?>
                    </p>
                    <p class="cart-total">
                        Total: <?php echo wc_price(WC()->cart->get_total('edit')); ?>
                    </p>
                </div>

                <div class="checkout-button mt-4 text-center">
                    <a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="btn bgPink text-white btn-lg btn-block">
                        Finalizar Compra
                    </a>
                </div>
            </div>
        </div>
    <?php endif; ?>
    </div>


</div>
</div>
</div>

<style>
    /* Custom styles for the cart template */
    .cart-item {
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .product-thumbnail img {
        max-width: 80px;
        height: auto;
    }

    .product-details {
        font-size: 0.9rem;
    }

    .empty-cart {
        text-align: center;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
    }

    .empty-cart-section {
        text-align: center;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
    }
</style>

<?php get_footer(); ?>