<?php
/**
 * pivot-pilot functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pivot-pilot
 */

if ( ! function_exists( 'pivot_pilot_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pivot_pilot_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pivot-pilot, use a find and replace
		 * to change 'pivot-pilot' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pivot-pilot', get_template_directory() . '/languages' );

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
        
        add_image_size( 'bright-large', 1920, 562, true );
        add_image_size( 'bright-small', 550, 161, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'pivot-pilot' ),
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
		add_theme_support( 'custom-background', apply_filters( 'pivot_pilot_custom_background_args', array(
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
add_action( 'after_setup_theme', 'pivot_pilot_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pivot_pilot_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pivot_pilot_content_width', 640 );
}
add_action( 'after_setup_theme', 'pivot_pilot_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pivot_pilot_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pivot-pilot' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pivot-pilot' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pivot_pilot_widgets_init' );



/**
 * Enqueue scripts and styles.
 */

function pivot_pilot_scripts() {
	wp_enqueue_style( 'pivot-pilot-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pivot-pilot-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    
    wp_enqueue_script( 'pivot-pilot-delay', get_template_directory_uri() . '/js/delay.js', array( 'jquery' ), '1.12.4', true );
    
    wp_enqueue_style( 'pivot-pilot-googlefont', 'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400' );

	wp_enqueue_script( 'pivot-pilot-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
}
add_action( 'wp_enqueue_scripts', 'pivot_pilot_scripts' );


/**
* Allowing SVGs in WordPress Uploader
 */
function svg_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;}
add_filter( 'upload_mimes', 'svg_mime_types' );

/**Additional menus **/
function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'order-menu' => __( 'Order Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

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

