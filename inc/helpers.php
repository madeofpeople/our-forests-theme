<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Our Forests
 */
namespace Our_Forests;

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
	global $post;
	$post_id = ( array_key_exists( 'post_id', $args ) ) ? (int) $args['post_id'] : $post->ID;
	if ( \has_post_thumbnail( $post_id ) ) {
		$return = \get_post_thumbnail_id( $post_id );
	} elseif ( $image = \get_option( 'default_featured_image' ) ) {
		$image_id = \attachment_url_to_postid( $image );
		$return = $image_id;
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

/**
 * Check if contains video
 * 
 * @link https://developer.wordpress.org/reference/functions/wp_get_attachment_url/
 *
 * @param array $media
 * @param array $formats
 * @return boolean
 */
function has_video( array $media, $formats = array( 'mp4', 'webm', 'm4v' ) ) {
	$has_video = false;
	foreach( $media as $media_id ) {
		if( $has_video = is_video( $media_id, $formats ) ) {
			break;
		}
	}
	return $has_video;
}

/**
 * Check if is video
 *
 * @param integer $media_id
 * @param array $formats
 * @return boolean
 */
function is_video( int $media_id, $formats = array( 'mp4', 'webm', 'm4v' ) ) {
	$data_type = get_data_type( $media_id );
	if( in_array( $data_type, $formats ) ) {
		return true;
	}
	return false;
}


/**
 * Get data type
 * 
 * @link https://developer.wordpress.org/reference/functions/wp_get_attachment_url/
 *
 * @param integer $media_id
 * @return string 
 */
function get_data_type( int $media_id ) {
	$media_attributes = \wp_get_attachment_url( $media_id );
	$data_type = 'm4v' === pathinfo( $media_attributes, PATHINFO_EXTENSION ) ? 'mp4' : pathinfo( $media_attributes, PATHINFO_EXTENSION );
	return $data_type;
}

/**
 * Get the media item associated with attachment post
 *
 * @link https://developer.wordpress.org/reference/functions/attachment_url_to_postid/
 * 
 * @param int $post_id
 * @return mixed int $attachment_id || bool false
 */
function get_attachment_media_id( $post_id = null ) {
	global $post;
	$post_id = $post_id ? (int) $post_id : get_the_ID();
	if( $attachment_url = \wp_get_attachment_image_url( $post_id, 'full' ) ) {
		return \attachment_url_to_postid( $attachment_url );
	}
	return false;
}

/**
 * Modify kses rules for SVG
 *
 * @return array allowed_html
 */
function get_kses_svg_ruleset() {
	$kses_defaults = \wp_kses_allowed_html( 'post' );

	$svg_args = array(
		'svg'   => array(
			'class'           => true,
			'aria-hidden'     => true,
			'aria-labelledby' => true,
			'role'            => true,
			'xmlns'           => true,
			'width'           => true,
			'height'          => true,
			'viewbox'         => true, // <= Must be lower case!
			'color'           => true,
			'stroke-width'    => true,
			'focusable'       => true,
			'style'           => true,
			'fill'            => true,
		),
		'g'     => array( 'color' => true ),
		'title' => array(
			'title' => true,
			'id'    => true,
		),
		'path'  => array(
			'd'     => true,
			'color' => true,
		),
		'use'   => array(
			'xlink:href' => true,
		),
	);

	return array_merge( $kses_defaults, $svg_args );
}

/**
 * Show Intro
 * Determine if media `intro_text` should be display on attachment template
 *
 * @param int $post_id
 * @return bool
 */
function show_intro( $post_id = null ) {
	global $post;
	$post_id          = $post_id ? (int) $post_id : get_the_ID();
	$show_categories  = get_option( 'options_categories' );
	$media_categories = wp_get_post_terms( $post_id, 'media_category', array( 'fields' => 'ids' ) );
	$matches          = ( ! empty( $show_categories ) ) ? array_intersect( $show_categories, $media_categories ) : array();
	return empty( $show_categories ) || ( $show_categories && $matches );
}