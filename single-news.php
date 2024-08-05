<?php get_header(); // This fxn gets the header.php file and renders it ?>

<main class="single">
	<div class="site-content">
    	<div class="container">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post();?>
					<div class="post">
            			<div class="featured-image">
                  			<?php the_post_thumbnail ( 'full', array ('class' => 'img-fluid')); ?>
            			</div>
            			<h1 class="post-title"><?php echo get_the_title(); ?></h1>
						<div class="post-date-meta">
						 	<p class="published-date"><span class="dashicons dashicons-calendar"></span><?php the_time( 'j F y, g:i a' ); ?>
							<p class="author"><span class="dashicons   dashicons-admin-users"></span><?php the_author(); ?></p>
						</div>
						<div class="the-content">
							<?php the_content();?>	
              				<?php wp_link_pages(); ?> 
						</div>
						<div class="category">
							<div class="category"><?php echo get_the_category_list();?></div>
						</div>
       			 	</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
  </main>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
