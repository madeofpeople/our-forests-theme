<?php
/**
 * Register Block Patterns.
 *
 * @package The Territory
 */
namespace The_Territory\Inc\Blocks\Patterns;

/**
 * Title: Testimonial
 * Slug: the-territory/testimonial
 * Description: Testimonial with background image.
 * Categories: text
 * Keywords: quote
 * Block Types: core/cover, core/quote
 */
\register_block_pattern(
	'the-territory/testimonial',
	array(
		'title'       => __( 'Testimonial', 'the-territory' ),
		'description' => _x( 'Testimonial with background image.', 'Block pattern description', 'the-territory' ),
		'categories'  => array( 'text' ),
		'keywords'    => array( 'quote' ),
		'blockTypes'  => array( 'core/cover', 'core/quote' ),
		'content'     => '<!-- wp:group {"className":"testimonial"} --><div class="wp-block-group testimonial"><!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( 'build/images/backgrounds/testimonial.jpg' ) ) . '","id":129,"hasParallax":true,"dimRatio":0,"isDark":false} --><div class="wp-block-cover is-light has-parallax" style="background-image:url(' . esc_url( get_theme_file_uri( 'build/images/backgrounds/testimonial.jpg' ) ) . ')"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:quote {"textColor":"white"} --><blockquote class="wp-block-quote has-white-color has-text-color"><p>' . esc_html( '“Historically, our existence has been marginalized and erased. through this film we\'re changing that.”', 'the-territory' ) . '</p><cite>' . esc_html( 'Bitaté Uru-eu-wau-wau', 'the-territory' ) . '</cite></blockquote><!-- /wp:quote --></div></div><!-- /wp:cover --></div><!-- /wp:group -->',
	)
);