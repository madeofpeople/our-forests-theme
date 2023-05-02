<?php
/**
 * Theme setup.
 *
 * @package Our Forests
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @author WebDevStudios
 */
function our_forests_setup() {
	/**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on The Territory, use a find and replace
	 * to change 'our-forests' to the name of your theme in all the template files.
	 * You will also need to update the Gulpfile with the new text domain
	 * and matching destination POT file.
	 */
	load_theme_textdomain( 'our-forests', get_template_directory() . '/build/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'full-width', 1920, 1080, false );

	// Register navigation menus.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'our-forests' ),
			'footer'  => esc_html__( 'Footer Menu', 'our-forests' ),
			'mobile'  => esc_html__( 'Mobile Menu', 'our-forests' ),
			'kawahiva' => esc_html__( 'Kawahiva Menu', 'our-forests' ),
		)
	);

	/**
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
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Gutenberg support settings moved to `theme.json`
	 */

	// Gutenberg editor styles support.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'build/editor.css' );

	// Gutenberg responsive embed support.
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'our_forests_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @author WebDevStudios
 */
function our_forests_widgets_init() {

	// Define sidebars.
	$sidebars = array(
		'header-notice'  => esc_html__( 'Header Notice', 'our-forests' ),
		'content-bottom' => esc_html__( 'Content Bottom', 'our-forests' ),
		'footer'         => esc_html__( 'Footer', 'our-forests' ),
	);

	// Loop through each sidebar and register.
	foreach ( $sidebars as $sidebar_id => $sidebar_name ) {
		register_sidebar(
			array(
				'name'          => $sidebar_name,
				'id'            => $sidebar_id,
				'description'   => /* translators: the sidebar name */ sprintf( esc_html__( 'Widget area for %s', 'our-forests' ), $sidebar_name ),
				'before_widget' => 'header-notice' === $sidebar_id ? '<div class="header-notice %2$s">' : '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}

}
add_action( 'widgets_init', 'our_forests_widgets_init' );
