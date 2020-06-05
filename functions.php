<?php
/**
 * Business Starter Theme functions and definitions
 *
 * @package WordPress
 * @subpackage businessthemestarter
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function businessthemestarter_theme_support() {
	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => '#ffffff',
		)
	);

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 1020;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// // Set post thumbnail size.
	// set_post_thumbnail_size( 1200, 9999 );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on InYellow Starter, use a find and replace
	 * to change 'businessthemestarter' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'businessthemestarter' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}

add_action( 'after_setup_theme', 'businessthemestarter_theme_support' );

/**
 * REQUIRED FILES
 * Include required files.
 */

// WP-Bootstrap-NavWalker File.
require_once get_template_directory() . '/classes/wp-bootstrap-navwalker.php';
// Customizer File.
require_once get_template_directory() . '/inc/customizer.php';


/**
 * Register and enqueue styles
 */
function businessthemestarter_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'businessthemestarter-bootstrap',
		get_stylesheet_directory_uri() . '/css/bootstrap.min.css',
		array(),
		$theme_version
	);

	// Font Awesome .
	wp_enqueue_style(
		'businessthemestarter-fontawesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css',
		array(),
		$theme_version
	);

	wp_enqueue_style(
		'businessthemestarter-style',
		get_stylesheet_uri(),
		array(),
		$theme_version
	);
}

add_action( 'wp_enqueue_scripts', 'businessthemestarter_register_styles' );


/**
 * Register and enqueue scripts.
 */
function businessthemestarter_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'businessthemestarter-js',
		get_template_directory_uri() . '/js/bootstrap.min.js',
		array( 'jquery' ),
		$theme_version,
		true
	);
}

add_action( 'wp_enqueue_scripts', 'businessthemestarter_register_scripts' );


/**
 * Register navigation menu.
 */
function businessthemestarter_menus() {

	$locations = array(
		'primary' => __( 'Primary Menu', 'businessthemestarter' ),
	);

	register_nav_menus( $locations );
}

add_action( 'after_setup_theme', 'businessthemestarter_menus' );

/**
 * Widget Areas
 *
 * @param [type] $id The widget ID.
 */
function businessthemestarter_init_widgets( $id ) {
	// Content Region 1.
	register_sidebar(
		array(
			'name'          => 'Content Region 1',
			'id'            => 'content-region-1',
			'before_widget' => '<section class="row content-region-1 pt50 pb40"><div class="container"><div class="col-md-12">',
			'after_widget'  => '</div></div></section>',
			'before_title'  => '<h1>',
			'after_title'   => '</h1>',
		)
	);

	// Content Region 2 Left.
	register_sidebar(
		array(
			'name'          => 'Content Region 2 Left',
			'id'            => 'content-region-2-left',
			'before_widget' => '<div class="col-md-5">',
			'after_widget'  => '</div>',
			// 'before_title'  => '<h1>',
			// 'after_title'   => '</h1>',
		)
	);

	// Content Region 2 Right.
	register_sidebar(
		array(
			'name'          => 'Content Region 2 Right',
			'id'            => 'content-region-2-right',
			'before_widget' => '<div class="col-md-7">',
			'after_widget'  => '</div>',
		)
	);

	// Footer Widget area 1.
	register_sidebar(
		array(
			'name'          => 'Footer Area 1',
			'id'            => 'footer-area-1',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);

	// Footer Widget area 2.
	register_sidebar(
		array(
			'name'          => 'Footer Area 2',
			'id'            => 'footer-area-2',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);
	// Footer Widget area 3.
	register_sidebar(
		array(
			'name'          => 'Footer Area 3',
			'id'            => 'footer-area-3',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);

	// Sidebar.
	register_sidebar(
		array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar',
			'before_widget' => '<div class="panel panel-default sidebar-widget">',
			'after_widget'  => '</div></div>
			',
			'before_title'  => '<div class="panel-heading"><h3 class="panel-title">',
			'after_title'   => '</h3></div><div class="panel-body">',
		)
	);
}

add_action( 'widgets_init', 'businessthemestarter_init_widgets' );
