<?php
/**
 * real-taste functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package real-taste
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'real_taste_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function real_taste_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on real-taste, use a find and replace
		 * to change 'real-taste' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'real-taste', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'real-taste' ),
			)
		);

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
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'real_taste_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'real_taste_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function real_taste_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'real_taste_content_width', 640 );
}
add_action( 'after_setup_theme', 'real_taste_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function real_taste_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'real-taste' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'real-taste' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'real_taste_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function real_taste_scripts() {
	// wp_enqueue_style( 'real-taste-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'real-taste-style', 'rtl', 'replace' );
	wp_enqueue_script( 'realtaste-jquery','https://code.jquery.com/jquery-3.5.1.min.js');
	wp_enqueue_script( 'real-taste-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'realtaste-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'realtaste-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'realtaste-script-js', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'realtaste-cloudflare','https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js');


	wp_enqueue_style( 'realtaste-bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css',array(), time());
	wp_enqueue_style( 'realtaste-style-css', get_template_directory_uri().'/assets/css/style.css',array(), time());
	wp_enqueue_style( 'realtaste-stylesheet-css', get_template_directory_uri().'/assets/fonts/stylesheet.css',array(), time());
	wp_enqueue_style( 'realtaste-responsive-css', get_template_directory_uri().'/assets/css/responsive.css',array(), time());
	wp_enqueue_style( 'realtaste-carousel-css', get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(), time());
	wp_enqueue_style( 'realtaste-bootstrapcdn-css','https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'realtaste-michalsnik-css','https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'real_taste_scripts' );

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

//add class to the anchore tag in primary menu
add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-link";
        return $atts;
}, 100, 1 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}