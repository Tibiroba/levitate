<?php get_header();?>

<div class="content" id="content">
    

<div class="hero">
    <div class="container">
        <div class="row">
            <h1><?php echo the_title();?></h1>
        </div>
    </div>
</div>

index
<div class="content">

        <div class="container-fluid">
            <div class="row">
                    INDEX
            <div class="col-12">
        <?php if(have_posts()) : while(have_posts())  : the_post();?>
        
    </div> 
  </div>
        </div>

<?php endwhile; else: endif;?>

</div>



</div>


<?php get_footer();?>