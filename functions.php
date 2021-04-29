<?php
/**
 * mexe functions and definitions
 *
 * @package mexe
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'mexe_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mexe_setup() {
		/*
			* Make theme available for translation.
			* Translations can be filed in the /languages/ directory.
			* If you're building a theme based on mexe, use a find and replace
			* to change 'mexe' to the name of your theme in all the template files.
			*/
		load_theme_textdomain( 'mexe', get_template_directory() . '/languages' );

		

		/**
		 * Theme Supports
		 */
		require get_template_directory() . '/inc/theme-support.php';

		/**
		 * Widgets Sidebars
		 */
		require get_template_directory() . '/inc/sidebars.php';

		/**
		 * Menus
		 */
		require get_template_directory() . '/inc/menus.php';

	
	}
endif;
add_action( 'after_setup_theme', 'mexe_setup' );


/**
 * Enqueue scripts and styles.
 */
function mexe_scripts() {
	wp_enqueue_style( 'mexe-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'mexe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mexe_scripts' );

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
 * Multiple small snippets
 */
require get_template_directory() .'/inc/snippets.php';

/**
 * SVG Support
 */
require get_template_directory() .'/inc/svg-support.php';

/*
 * Load Cody framework
 */

function codyframe_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );
  
	wp_enqueue_style( 'codyframe', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version );
  }
  
  add_action( 'wp_enqueue_scripts', 'codyframe_register_styles' );
  
  function codyframe_register_scripts() {
  
	$theme_version = wp_get_theme()->get( 'Version' );
  
	wp_enqueue_script( 'codyframe', get_template_directory_uri() . '/assets/js/scripts.js', array(), $theme_version, true );
  }
  
  add_action( 'wp_enqueue_scripts', 'codyframe_register_scripts' );
  
  // no-js support
  function codyframe_js_support() {
	?>
	<script>document.getElementsByTagName("html")[0].className += " js";</script>
	<?php
  }
  
  add_action( 'wp_print_scripts', 'codyframe_js_support');





// Add Analytics do head
function wpb_add_googleanalytics() {
	echo get_theme_mod('analytics-code');
}
add_action('wp_head', 'wpb_add_googleanalytics');

/**
 * Remove default customizer options
 */
add_action( "customize_register", "pec_theme_customize_register" );
function pec_theme_customize_register( $wp_customize ) {
	$wp_customize->remove_control("header_image");
	$wp_customize->remove_setting('header_image');
	$wp_customize->remove_section("colors");
	$wp_customize->remove_section("background_image");
}
