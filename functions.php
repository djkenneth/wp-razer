<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'NAKED_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'naked' ), // Register the Primary menu
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);

register_nav_menus( 
	array(
		'razer-header'	=>	__( 'Razer Primary Header', 'naked' ), // Register the Razer Primary Header
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);

register_nav_menus( 
	array(
		'razer-footer'	=>	__( 'Razer Primary Footer', 'naked' ), // Register the Razer Primary Footer
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function naked_scripts()  { 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	// add fitvid
	wp_enqueue_script( 'naked-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), NAKED_VERSION, true );
	
	// add theme scripts
	wp_enqueue_script( 'naked', get_template_directory_uri() . '/js/theme.min.js', array(), NAKED_VERSION, true );
  
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/main.min.css');

  wp_enqueue_style('home', get_stylesheet_directory_uri() . '/assets/css/home.css');
	  
  wp_enqueue_style('product.css', get_stylesheet_directory_uri() . '/assets/css/product.css');
  
  wp_enqueue_style('about.css', get_stylesheet_directory_uri() . '/assets/css/about.css');

  wp_enqueue_style('archive-news.css', get_stylesheet_directory_uri() . '/assets/css/archive-news.css');
    
  wp_enqueue_style('community.css', get_stylesheet_directory_uri() . '/assets/css/community.css');

  wp_enqueue_style('header', get_stylesheet_directory_uri() . '/assets/css/header.css');

  wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/assets/css/footer.css');
  
  wp_enqueue_style('font-awesome-icons', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');

  wp_enqueue_script('main.min.js', get_template_directory_uri() . '/assets/js/main.min.js', array(), true );

  wp_enqueue_script('about.min.js', get_template_directory_uri() . '/assets/js/about.min.js', array(), true ); 

  wp_enqueue_script('custom.js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), true ); 

}
add_action( 'wp_enqueue_scripts', 'naked_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
    'position'   => false,
		'redirect'		=> false,
    'icon_url'    => false,
	));
	
  acf_add_options_sub_page (array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'menu_slug' 	=> 'header_theme_options',
		'capability'	=> 'edit_posts',
    'parent_slug' => 'theme-options',
    'position'   => false,
    'icon_url'    => false,
  ));

  acf_add_options_sub_page (array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'footer_theme_options',
		'capability'	=> 'edit_posts',
    'parent_slug' => 'theme-options',
    'position'   => false,
    'icon_url'    => false,
  ));
}

/**
 * Register Custom Navigation Walker
 */

 Function register_navwalker(){
   require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
 }
 add_action('after_setup_theme', 'register_navwalker');

