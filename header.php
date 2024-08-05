<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="format-detection" content="telephone=no">
  <title><?php bloginfo('name'); ?></title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="icon" href="./assets/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="./styles/main.min.css">
  <!--[if lte IE 9]>
    <link href="stylesheets/non-responsive.css" rel="stylesheet" />
  <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <!--[if lt IE 9]>
    <div id="browser-notification" class="alert alert-danger">
      <div class="container">
        We are sorry but it looks like your <a href="http://www.whatbrowser.org/intl/en_us/" target=_blank>browser</a> doesn't support our website features. In order to get the full experience please download a new version of <a title="Download Chrome" href="http://www.google.com/chrome/" target=_blank>Chrome</a>, <a title="Download Safari" href="http://www.apple.com/safari/download/" target=_blank>Safari</a>, <a title="Download Firefox" href="http://www.mozilla.com/firefox/" target=_blank>Firefox</a>, or <a title="Download Internet Explorer" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target=_blank>Internet Explorer</a>.
      </div>
    </div>
  <![endif]-->
<header>
  <div class ="section-header">
    <div class="container">
        <nav class="navbar navbar-expand-md">
          <a class="navbar-brand" href="<?php echo esc_url(get_field('logo_link','option')); ?>">
              <?php 
                $header_logo = get_field ('header_logo','option');
                  if ($header_logo): ?>
                <img class="brand-logo" src="<?php echo get_field('header_logo','option')['url']; ?>" alt="Razer Logo">
              <?php endif; ?>
              </a>
               <div class="toggle" >
                    <span class="bars"></span>
                    <span class="bars"></span>
                    <span class="bars"></span>
                </div>
                <div class= "collapse navbar-collapse">
                  <?php
                    wp_nav_menu( array(
                      'theme_location'       => 'razer-header',
                      'container'            => 'div',
                      'menu'                 => '',
                      'depth'                => '3',
                      'menu_class'           => 'navbar-nav mr-auto',
                      'fallback_cb'	         => 'wp_bootstrap_navwalker::fallback',
                      'walker'			         => new WP_Bootstrap_Navwalker()
                  ) );
                  ?>
                <a href="<?php echo esc_url(get_field('button_link')); ?>" type="button" class="btn-head">
                  <?php
                    $button_text= get_field('button_text','option');
                      echo  $button_text;
                  ?>
              </a>
             </div>
          </nav>
       </div>
    </div>
</header>
