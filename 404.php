<?php get_header();?>

<div class="hero">
    <div class="container">
        <div class="row">
            <h1><?php echo the_title();?></h1>
            <h2 class="fontPink textPink">404...</h2>
        </div>
    </div>
</div>




        <div class="container">
            <div class="row">

            <div class="col-12 text-center">
        <?php if(have_posts()) : while(have_posts())  : the_post();?>
        
    </div> 
  </div>
        </div>

<?php endwhile; else: endif;?>








<?php get_footer();?>