<?php 
/**
 * 	Template Name: Home Page
 *
 *	This page template has a sidebar built into it, 
 * 	and can be used as a home page, in which case the title will not show up.
 *
*/
get_header(); // This fxn gets the header.php file and renders it ?>

<main class="home">
  <div class="section-banner" 
    <?php if (get_field('banner_background_image')): ?>
        style="background-image: url('<?php echo get_field ('banner_background_image')['url']; ?>');">
    <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="supreme-title">
            <?php
              $banner_heading = get_field('banner_heading');
                echo $banner_heading;
            ?>
          </h1>
          <p class="supreme-text">
            <?php
              $banner_subheading = get_field('banner_subheading');
                echo $banner_subheading;
            ?>
          </p>
          <img class="thx-logo img-fluid" src="<?php echo get_field('banner_image_thx')['url'] ?>" alt="icon">
          <img class="chroma-logo img-fluid" src="<?php echo get_field('banner_image_chroma')['url'] ?>" alt="icon">
        </div>
        <div class="col-md-5">
           <img class="banner-razer img-fluid" src="<?php echo get_field('banner_image_nari')['url'] ?>" alt="icon">
        </div>
      </div>
    </div>
  </div>
  <div class="section-complemented">
    <div class="container">
      <div class="col-md-12">
        <h2 class="comfort-title">
          <?php
            $comfort_heading = get_field('comfort_heading');
              echo  $comfort_heading;
          ?>
        </h2>  
        <h3 class="comfort-text">
          <?php
            $comfort_subheading = get_field('comfort_subheading');
              echo $comfort_subheading;
          ?>
        </h3>
      </div>
      <div class="flex-container">
        <?php if( have_rows('flex_repeater') ):?>
          <?php while ( have_rows('flex_repeater') ) : the_row(); ?>
            <div class="flex-item">
              <img class="img-flex img-fluid" src="<?php echo get_sub_field('flex_icon')['url'] ?>" alt="icon">
              <div class="flex-title"><?php echo get_sub_field('flex_title'); ?></div>
              <div class="flex-text"><?php echo get_sub_field('flex_description'); ?></div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <hr>
      <div class="col-md-8 offset-md-2">
        <h2 class="product-title"> 
          <?php
            $product_heading = get_field('product_heading');
              echo $product_heading;
          ?>
        </h2>
      </div>
      <div class="swiper-products">
        <div class="swiper-container">
        <?php if( have_rows('swiper_repeater') ): $counter = 1;?>  
            <div class="swiper-wrapper" id="gallery" data-toggle="modal" data-target="#myModal<?php echo $counter;?>">
            <?php while ( have_rows('swiper_repeater') ) : the_row(); ?>
                <div class="swiper-slide">
                  <img class="swiper-image img-fluid" src="<?php echo get_sub_field('swiper_image')['url'] ?>" alt="modal" data-target="myModal<?php echo $counter;?>">
                  <button class="btn-fullscreen"><?php echo get_sub_field('button_text'); ?></button>
                </div>
              <?php $counter++; endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    <div class="section-modal">
      <?php if( have_rows('modal_repeater') ): $counter = 1;?>
        <div class="modal modal-fullscreen fade" id="myModal<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="swiper-fullscreen swiper-no-swiping">
                  <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php while ( have_rows('modal_repeater') ) : the_row(); ?>
                          <div class="swiper-slide">
                            <img class="modal-image img-fluid" src="<?php echo get_sub_field('modal_image')['url'] ?>" alt="image"> 
                          </div>
                        <?php  $counter++; endwhile; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            <div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <div class="section-thx"  
   <?php if (get_field('banner_background_image')): ?>
        style="background: url('<?php echo get_field ('spatial_background_image')['url']; ?>')center no-repeat;">
    <?php endif; ?>
    <div class="container">
      <div class="col-md-6 thx-audio">
        <h2 class="spatial-title">
          <?php
            $spatial_heading = get_field('spatial_heading');
              echo $spatial_heading;
          ?>
        </h2>
        <p class="spatial-text">
          <?php
            $spatial_subheading = get_field('spatial_subheading');
              echo $spatial_subheading;
          ?>
        </p>
        <img class="nari-thx-logo img-fluid" src="<?php echo get_field('spatial_image')['url'] ?>" alt="icon">
      </div>
    </div>
  </div>
  <div class="section-product">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h2 class="product-header">
            <?php $explore_heading = get_field('explore_heading');
              echo $explore_heading;?>
          </h2>
        </div>
        <?php if( have_rows('card_product_repeater') ):
          $counter = 1;
          ?>
          <?php while ( have_rows('card_product_repeater') ) : the_row(); ?>
              <div class="col-md-3 card-product" id="view-product<?php echo $counter; ?>">
                <img class="card-img-top" src="<?php echo get_sub_field('card_image')['url'] ?>" alt="Product image">
                <div class="card-body">
                  <div class="card-product-title"><?php echo get_sub_field('card_title'); ?></div>
                  <div class="card-product-text"><?php echo get_sub_field('card_description'); ?></div>
                  <a class="more-link" href="<?php echo esc_url(get_sub_field('card_link')); ?>"><?php echo get_sub_field('card_text'); ?></a>
                </div>
              </div> 
            <?php $counter += 1; endwhile; ?>
          <?php endif; ?>
        <button class="btn-products" type="button" id="viewall">
            <?php $button_view_text = get_field('button_view_text');
              echo $button_view_text;
            ?>
        </button>
      </div>
    </div>
  </div>
  <div class="section-form">
    <div class="container">
      <div class="row">
        <div class="col-md-6 input-form">
          <h2 class="ask-title" >
            <?php
                $form_ask_question = get_field('form_ask_question');
                  echo $form_ask_question;
              ?>
          </h2>
            <?php echo do_shortcode('[contact-form-7 id="168" title="Contact Form 2"]'); ?>
        </div>
        <div class="col-md-6 info">
          <h2 class="info-header" >
            <?php
                $form_information = get_field('form_information');
                  echo $form_information;
              ?>
          </h2>
          <div class="sub-address">
            <h3 class="info-title">
            <?php
                $address_title = get_field('address_title');
                  echo $address_title;
              ?>
            </h3>
            <h4 class="address">
              <?php
                  $address_text = get_field('address_text');
                    echo $address_text;
                ?>
            </h4>
          </div>
          <div class="sub-phone">
            <h3 class="info-title">
            <?php
                $phone_title = get_field('phone_title');
                  echo $phone_title;
              ?>
            </h3>
            <a href="tel:<?php echo get_field('phone_num_link');?>" class="phone-num">
                <?php
                  $phone_number = get_field('phone_number');
                    echo $phone_number;
                ?>
            </a>
          </div>
          <div class="sub-email">
            <h3 class="info-title">
              <?php
                $email_title = get_field('email_title');
                  echo $email_title;
              ?>
            </h3>
            <a href="mailto:<?php echo get_field('email_link');?>" class="email-address">
                <?php
                  $email_link_text = get_field('email_link_text'); 
                    echo $email_link_text;
                ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>  
</main>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>