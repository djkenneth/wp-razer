<?php 
/**
 * 	Template Name: About Page
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a about page, in which case the title will not show up.
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>

<main class="about">
  <div class="section-banner"
    <?php if (get_field('about_banner_bg_hero')): ?>
        style="background-image: url('<?php echo get_field ('about_banner_bg_hero')['url']; ?>');">
    <?php endif; ?>
    <div class="container">
      <div class="banner-content">
        <h2 class="banner-heading">
          <?php
            $about_heading = get_field('about_heading');
              echo $about_heading;
          ?>
        </h2> 
      </div>
    </div>
  </div>
  <div class="section-main-content">
    <div class="container">
      <div class="main-content">
        <h2 class="heading">
        <?php
            $main_content_heading = get_field('main_content_heading');
              echo $main_content_heading;
          ?>
        </h2>
        <p class="description">
        <?php
            $main_content_description = get_field('main_content_description');
              echo $main_content_description;
          ?>
        </p>
    </div>
    </div>
  </div>
  <div class="section-accolades">
    <div class="container">
      <h2 class="heading">
        <?php
          $accolades_heading = get_field('accolades_heading');
            echo $accolades_heading;
          ?>
      </h2>
          <?php if( have_rows('accolades_items') ):?>
            <div class="content-wrapper">
            <?php while ( have_rows('accolades_items') ) : the_row(); ?>
              <div class="content-holder">
                <div class="image-holder">
                  <img class="img-fluid" src="<?php echo get_sub_field('accolades_images')['url'] ?>" alt="">
                </div>
                  <div class="content">
                  <div class="title"><?php echo get_sub_field('accolades_item_title'); ?></div>
                  <div class="description"><?php echo get_sub_field('accolades_item_description'); ?></div>
                </div>
              </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
  </div>
  <div class="section-history">
    <div class="container">
      <h2 class="heading">
        <?php
            $history_heading = get_field('history_heading');
              echo $history_heading;
          ?>
      </h2>
      <div class="content-wrapper">
        <?php if( have_rows('history_repeater') ):?>
            <?php while ( have_rows('history_repeater') ) : the_row(); ?>
              <div class="content-holder">
                <div class="image-holder">
                  <img class="img-fluid" src="<?php echo get_sub_field('history_image')['url'] ?>" alt=" ">
                </div>
                <div class="content">
                  <div class="title"><?php echo get_sub_field('title'); ?></div>
                  <div class="description"><?php echo get_sub_field('description'); ?></div>
               </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="section-team">
    <div class="container">
      <h2 class="heading">  
        <?php
            $team_heading = get_field('team_heading');
              echo $team_heading;
          ?> 
          </h2>
      <div class="team-wrapper">
      <?php if( have_rows('team_content_repeater') ):?>
       <?php while ( have_rows('team_content_repeater') ) : the_row(); ?>
        <div class="team-holder">
          <img class="img-fluid" src="<?php echo get_sub_field('team_image')['url'] ?>" alt="">
          <h2 class="name"><?php echo get_sub_field('name'); ?></h2>
          <p class="name-title"><?php echo get_sub_field('name_title'); ?></p>
          <p class="description"><?php echo get_sub_field('description'); ?></p>
        </div>
        <?php endwhile; ?>
       <?php endif; ?>
      </div>
    </div>
  </div>
  <?php the_content(); ?>
</main>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>