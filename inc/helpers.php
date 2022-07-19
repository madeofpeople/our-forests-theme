<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package The Territory
 */
namespace The_Territory;

/**
 * Get Header Image ID
 *
 * @param array $args
 * @return mixed int $image || false
 */
function get_header_image_id( $args = [] ) {
	$return = false;
	if ( ! \is_singular() ) {
		return $return;
	}
	$post_id = ( array_key_exists( 'post_id', $args ) ) ? (int) $args['post_id'] : \get_the_ID();
	if ( \has_post_thumbnail( $post_id ) ) {
		$return = \get_post_thumbnail_id( $post_id );
	} elseif ( $image = \get_option( 'default_featured_image' ) ) {
		$return = $image;
	}
	return $return;
}

/**
 * Get Specific Block
 *
 * @param string $name
 * @param string $content
 * @return void
 */
function get_block( $name, $content = null ) {
	global $post;
	$return = false;
	if ( ! \is_singular() || ! \has_block( $name, get_the_ID() ) ) {
		return $return;
	}
	if ( $post && ! is_wp_error( $post ) ) {
		$blocks = \parse_blocks( $post->post_content );

		foreach ( $blocks as $block ) {
			if ( $name === $block['blockName'] ) {
				$return = $block;
				break;
			}
		}

	}
	return $return;
}