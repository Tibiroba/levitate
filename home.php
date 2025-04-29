<?php get_header();?>
<div class="container">

  <div class="col-12">
  <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} // end if
?>
  </div>
  </div>


  </section>
</div>






<?php get_footer();?>