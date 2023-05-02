<?php
/**
 * Register Block Patterns.
 *
 * @package Our Forests
 */
namespace Our_Forests\Inc\Blocks\Patterns;

function include_files() {
	return array(
		'inc/blocks/patterns/patterns.php', // Patterns
	);
}

foreach ( include_files() as $include ) {
	require \trailingslashit( \get_template_directory() ) . $include;
}
