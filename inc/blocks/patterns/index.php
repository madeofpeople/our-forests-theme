<?php
/**
 * Register Block Patterns.
 *
 * @package The Territory
 */
namespace The_Territory\Inc\Blocks\Patterns;

function include_files() {
	return array(
		'inc/blocks/patterns/patterns.php', // Patterns
	);
}

foreach ( include_files() as $include ) {
	require \trailingslashit( \get_template_directory() ) . $include;
}
