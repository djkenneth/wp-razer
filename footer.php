<footer>
  <div class="section-footer">
    <div class= "container">
      <div class="row">
        <div class="col-md-3">
          <a class="navbar-brand" href="<?php echo esc_url(get_field('footer_link')); ?>">
            <?php 
              $footer_logo = get_field ('footer_logo','option');
                if ($footer_logo): ?>
              <img class="footer-logo" src="<?php echo get_field('footer_logo','option')['url']; ?>" alt="Razer Logo">
            <?php endif; ?>
            </a>
        </div>
        <div class="col-md-7 list-footer">
          <?php
            wp_nav_menu ( 
              array ( 
              'theme_location' => 'razer-footer', 
              'menu' => '',
              'menu_class' => 'footernav',
              ) 
            ); 
          ?>
        </div>
        <div class="col-md-2 social-logo">
            <a target="_blank" href="<?php echo esc_url(get_field('twitter_link','option')); ?>">
            <?php 
              $twitter_icon = get_field ('twitter_icon','option');
                if ($twitter_icon): ?>
              <img class="twitter-logo  img-fluid" src="<?php echo get_field('twitter_icon','option')['url']; ?>" alt="Twitter Icon">
            <?php endif; ?>
            </a>
            <a target="_blank" href="<?php echo esc_url(get_field('facebook_link','option')); ?>">
              <?php 
                $facebook_icon = get_field ('facebook_icon','option');
                if ($facebook_icon):
               ?>
              <img class="fb-logo img-fluid" src="<?php echo get_field('facebook_icon','option')['url']; ?>" alt="Fb Icon">
            <?php endif; ?>
            </a>
            <a target="_blank" href="<?php echo esc_url(get_field('google_link','option')); ?>">
              <?php 
                $google_icon = get_field ('google_icon','option');
                  if ($google_icon): ?>
                <img class="google-logo img-fluid" src="<?php echo get_field('google_icon','option')['url']; ?>" alt="Google Icon">
              <?php endif; ?>
            </a>
        </div>
        <hr class="footer-divider">
        <div class="col-md-12 copyright">
          <h2>
              <?php
              $copyright_text = get_field('copyright_text','option');
                echo $copyright_text;
            ?>       
          </h2>
        </div>
      </div>
     </div>
  </div>
</footer>