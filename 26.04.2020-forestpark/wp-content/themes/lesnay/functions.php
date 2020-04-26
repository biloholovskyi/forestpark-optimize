<?php
/**
 * LesnaySkazka functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LesnaySkazka
 */
//time
if ( ! function_exists( 'lesnay_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lesnay_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on LesnaySkazka, use a find and replace
		 * to change 'lesnay' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lesnay', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'lesnay' ),
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
		add_theme_support( 'custom-background', apply_filters( 'lesnay_custom_background_args', array(
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
add_action( 'after_setup_theme', 'lesnay_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lesnay_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lesnay_content_width', 640 );
}
add_action( 'after_setup_theme', 'lesnay_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lesnay_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lesnay' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lesnay' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lesnay_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lesnay_scripts() {

	wp_enqueue_style( 'lesnay-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'lesnay-slider', get_template_directory_uri() . '/css/owl.carousel.min.css', true );
	wp_enqueue_style( 'lesnay-media', get_template_directory_uri() . '/css/media.css', true );
    wp_enqueue_style( 'lesnay-slider-2', get_template_directory_uri() . '/css/owl.carousel2.min.css', true );
	wp_enqueue_style( 'lesnay-slider-3', get_template_directory_uri() . '/css/owl.carousel3.min.css', true );
	wp_enqueue_style( 'lesnay-themes-owl-all', get_template_directory_uri() . '/css/owl.theme.default.min.css', true );
    wp_enqueue_style( 'lesnay-themes-animate', get_template_directory_uri() . '/css/animate.min.css', true );
    wp_enqueue_style( 'lesnay-fancy', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array() );
  wp_enqueue_style( 'fix', get_template_directory_uri() . '/css/main.css', true );
	
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', false, null);
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'lesnay-wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), false );
    wp_enqueue_script( 'lesnay-count', get_template_directory_uri() . '/js/count.js',array('jquery'), false );
    wp_enqueue_script( 'lesnay-fancy', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), true);
	wp_enqueue_script( 'lesnay-corusel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), false );
    wp_enqueue_script( 'lesnay-paralaxx', get_template_directory_uri() . '/js/jquery.paroller.js',array('jquery'), null, true );
	wp_enqueue_script( 'fix', get_template_directory_uri() . '/js/index.js',array('jquery'), null, true );
	wp_enqueue_script( 'lesnay-common', get_template_directory_uri() . '/js/common.js',array('jquery'), null, true );

	




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lesnay_scripts' );

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
add_filter('pre_site_transient_update_core',create_function('$a', "return null;"));
wp_clear_scheduled_hook('wp_version_check');
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );


function my_stylesheet_admmin(){
wp_enqueue_style("style-admin",get_bloginfo('stylesheet_directory')."/css/admin-style.css");
}
add_action('admin_head', 'my_stylesheet_admmin');

add_action('wp_ajax_nopriv_mypost', 'some_fun');
add_action('wp_ajax_mypost', 'some_fun');

function some_fun() {
  $id = filter_input( INPUT_POST, 'post_id' );
  $args = array(
    'post__in' => array($id)
    );
  $pt = get_posts( $args );
  wp_send_json($pt); 
  wp_die();
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
	
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	
}
