<?php
/**
 * Custom scripts and styles.
 *
 * @package Our Forests
 */
namespace Our_Forests;

/**
 * Enqueue scripts and styles.
 *
 * @author WebDevStudios
 */
function scripts() {
	$asset_file_path = dirname( __DIR__ ) . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = [
			'version'      => '1.0.0',
			'dependencies' => [ 'wp-polyfill' ],
		];
	}

	// Register styles & scripts.
	wp_enqueue_style( 'the-territory-google-fonts', esc_url( 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Sans+Pro&display=swap' ), [], $asset_file['version'] );
	wp_enqueue_style( 'our-forests', get_stylesheet_directory_uri() . '/build/index.css', [], $asset_file['version'] );
	wp_enqueue_script( 'the-territory-scripts', get_stylesheet_directory_uri() . '/build/index.js', $asset_file['dependencies'], $asset_file['version'], true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\scripts' );

/**
 * Load Block Scripts
 *
 * @return void
 */
function editor_assets() {
	$asset_file_path = dirname( __DIR__ ) . '/build/blocks.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = [
			'version'      => '1.0.0',
			'dependencies' => [ 'wp-polyfill' ],
		];
	}

	wp_enqueue_script(
		'our-forests',
		get_template_directory_uri() . '/build/blocks.js',
		$asset_file['dependencies'],
		$asset_file['version'],
		true
	);
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\editor_assets' );

/**
 * Inline Critical CSS.
 *
 * @author Corey Collins
 */
function critical_css() {
	?>
	<style>
		<?php include get_stylesheet_directory() . '/build/critical.css'; ?>
	</style>
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\critical_css', 1 );

/**
 * Preload styles and scripts.
 *
 * @author WebDevStudios
 */
function preload_scripts() {
	$asset_file_path = dirname( __DIR__ ) . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = [
			'version'      => '1.0.0',
			'dependencies' => [ 'wp-polyfill' ],
		];
	}

	?>
	<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/build/index.css?ver=<?php echo esc_html( $asset_file['version'] ); ?>" as="style">
	<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/build/index.js?ver=<?php echo esc_html( $asset_file['version'] ); ?>" as="script">
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\preload_scripts', 1 );

/**
 * Preload assets.
 *
 * @author Corey Collins
 */
function preload_assets() {
	?>
	<?php if ( our_forests_get_custom_logo_url() ) : ?>
		<link rel="preload" href="<?php echo esc_url( our_forests_get_custom_logo_url() ); ?>" as="image">
	<?php endif; ?>
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\preload_assets', 1 );
