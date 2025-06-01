

<?php
/*
Template Name: Custom My Account Template
*/

// Redirect to login page if the user is not logged in
if ( ! is_user_logged_in() ) {
    wp_redirect( wp_login_url() );
    exit;
}

get_header(); ?>

<div class="content" id="content">
    <div class="hero">
        <div class="container">
            <div class="row">
                <h1 class="fontXl w-100 mb-5 textPink text-center"><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                // Display WooCommerce My Account content
                echo do_shortcode( '[woocommerce_my_account]' );
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>