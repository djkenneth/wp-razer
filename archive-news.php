<?php get_header(); // This fxn gets the header.php file and renders it ?>

	<div class="site-content">
  		<div class="container">
 
	<?php
  		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		$args = array(  
		 'post_type' => 'news', 
		 'post_status' => 'publish',
		 'posts_per_page' => 6,
		 'paged' => $paged
		); 

    $the_query = new WP_Query($args);
   ?>
   <?php if ( $the_query->have_posts() ): ?>
     <div class="content-wrapper">
       <?php while ( $the_query->have_posts() ):
         $the_query->the_post(); ?>
         <div class="content-holder">
			  <a href="<?php echo esc_url(get_permalink()); ?>" class="post-link">
				<h1 class="post-title"><?php echo get_the_title(); ?></h1>
			  </a>
			   <?php the_post_thumbnail ( 'full', array ('class' => 'img-fluid')); ?>
          </div> 
    	<?php endwhile; ?>
  	  </div>
	  <div class="pagination">
		<?php 
		  previous_posts_link();
		  next_posts_link(); 
		?>
  	  </div>
	<?php endif; ?>
  <?php wp_reset_postdata(); ?>
 </div>  
</div>   

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>


