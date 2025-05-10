<?php
/*
Template Name: Custom Cart Template
*/

get_header(); ?>

<div class="content" id="content">
    <div class="hero">
        <div class="container">
            <div class="row">
                <h1><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Your Cart</h2>
                <?php echo do_shortcode('[woocommerce_cart]'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>