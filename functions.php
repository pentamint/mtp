<?php

/**
 * mtp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mtp
 */

if ( ! function_exists( 'mtp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mtp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mtp, use a find and replace
		 * to change 'mtp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mtp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'mtp' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mtp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mtp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mtp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mtp_content_width', 640 );
}
add_action( 'after_setup_theme', 'mtp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mtp_widgets_init() {
	// Global sidebar area
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mtp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mtp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Top header left tagline area
	register_sidebar( array(
		'name'          => 'Top Header Right Widget', 'mtp',
		'id'            => 'top-header-widget-1',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Mobile header left icon menu
	register_sidebar( array(
		'name'          => 'Mobile Header Widget', 'mtp',
		'id'            => 'mobile-header-widget-1',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Header banner for post & pages
	register_sidebar( array(
		'name'          => 'Fullwidth Header Banner', 'WeMnA',
		'id'            => 'fullwidth-header-banner',
		'description'   => 'Add widgets here.', 'WeMnA',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Top footer widget area
	register_sidebar( array(
		'name'          => 'Top Footer Widget',
		'id'            => 'top-footer-widget-1',
		'description'   => 'Appears in the top footer area',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Footer sidebar area 1/4
	register_sidebar( array(
		'name'          => 'Footer Sidebar 1',
		'id'            => 'footer-sidebar-1',
		'description'   => 'Appears in the footer area',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Footer sidebar area 2/4	
	register_sidebar( array(
		'name'          => 'Footer Sidebar 2',
		'id'            => 'footer-sidebar-2',
		'description'   => 'Appears in the footer area',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Footer sidebar area 3/4
	register_sidebar( array(
		'name'          => 'Footer Sidebar 3',
		'id'            => 'footer-sidebar-3',
		'description'   => 'Appears in the footer area',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Footer sidebar area 4/4
	register_sidebar( array(
		'name'          => 'Footer Sidebar 4',
		'id'            => 'footer-sidebar-4',
		'description'   => 'Appears in the footer area',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 안전놀이터 1
	register_sidebar( array(
		'name'          => '안전놀이터 1', 'mtp',
		'id'            => 'trusted-site-1',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 안전놀이터 2
	register_sidebar( array(
		'name'          => '안전놀이터 2', 'mtp',
		'id'            => 'trusted-site-2',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 안전놀이터 3
	register_sidebar( array(
		'name'          => '안전놀이터 3', 'mtp',
		'id'            => 'trusted-site-3',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 안전놀이터 4
	register_sidebar( array(
		'name'          => '안전놀이터 4', 'mtp',
		'id'            => 'trusted-site-4',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 먹튀사이트 1
	register_sidebar( array(
		'name'          => '먹튀사이트 1', 'mtp',
		'id'            => 'rogue-site-1',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 먹튀사이트 2
	register_sidebar( array(
		'name'          => '먹튀사이트 2', 'mtp',
		'id'            => 'rogue-site-2',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 먹튀사이트 3
	register_sidebar( array(
		'name'          => '먹튀사이트 3', 'mtp',
		'id'            => 'rogue-site-3',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 먹튀사이트 4
	register_sidebar( array(
		'name'          => '먹튀사이트 4', 'mtp',
		'id'            => 'rogue-site-4',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		// 스포츠분석 1
	register_sidebar( array(
		'name'          => '스포츠분석 1', 'mtp',
		'id'            => 'sports-analysis-1',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 스포츠분석 2
	register_sidebar( array(
		'name'          => '스포츠분석 2', 'mtp',
		'id'            => 'sports-analysis-2',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 스포츠분석 3
	register_sidebar( array(
		'name'          => '스포츠분석 3', 'mtp',
		'id'            => 'sports-analysis-3',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// 스포츠분석 4
	register_sidebar( array(
		'name'          => '스포츠분석 4', 'mtp',
		'id'            => 'sports-analysis-4',
		'description'   => 'Add widgets here.', 'mtp',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mtp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mtp_scripts() {
	//wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );

	$parent_style = 'pm-style';
	wp_enqueue_style( $parent_style, get_stylesheet_directory_uri() . '/pm-style.css', array() , time(), false );
	wp_enqueue_style( 'mtp-style', get_stylesheet_uri(), array( $parent_style ) , time(), false );
	
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css' );

	/** Scripts **/

	wp_enqueue_script( 'mtp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), null, true );
	wp_enqueue_script( 'mtp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), null, true );

	wp_enqueue_script('jquery');

	// Bootstrap Support
	wp_enqueue_script( 'popper.js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );

	wp_enqueue_script( 'ofi-min-js', get_template_directory_uri() . '/js/ofi.min.js', array(), null, true );	
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'),  time(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'mtp_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// ----- Register Custom Menu ----- //

// Register Secondary Nav Menu
register_nav_menus( array(
	'secondary' => esc_html__( 'Secondary Menu', 'mtp' ),
) );

// Register Footer Nav Menu
register_nav_menus( array(
	'top-footer' => esc_html__( 'Top Footer Menu', 'mtp' ),
) );

// Changing excerpt length
function new_excerpt_length($length) {
	return 20;
	}
add_filter('excerpt_length', 'new_excerpt_length');


/* ---------------------------------------------------------------------------
 * 커스텀 fix ( 지우지 마세요 )
** --------------------------------------------------------------------------- */
require_once get_template_directory() . '/inc/rk-custom-fix.php';