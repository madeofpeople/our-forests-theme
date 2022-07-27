<?php
/**
 * Register Block Patterns.
 *
 * @package The Territory
 */
namespace The_Territory\Inc\Blocks\Patterns;

$paralax = esc_url( get_theme_file_uri( 'build/images/backgrounds/paralax.jpg' ) );

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

\register_block_pattern(
	'the-territory/logo-grid',
	array(
		'title'       => __( 'Logo Grid', 'the-territory' ),
		'description' => _x( 'Grid of logos.', 'Block pattern description', 'the-territory' ),
		'categories'  => array( 'gallery' ),
		'keywords'    => array( 'image', 'gallery', 'grid' ),
		'blockTypes'  => array( 'core/group', 'core/gallery', 'core/image' ),
		'content'     => '<!-- wp:gallery {"columns":3,"linkTo":"none","sizeSlug":"full","className":"logo-grid"} --><figure class="wp-block-gallery has-nested-images columns-3 is-cropped logo-grid"><!-- wp:image {"url":"' . esc_url( get_theme_file_uri( 'build/images/placeholders/choose-earth.png' ) ) . '","id":390,"sizeSlug":"full","linkDestination":"custom","className":"logo"} --><figure class="wp-block-image size-full logo"><a href="https://www.chooseearth.co" target="_blank" rel="noreferrer noopener"><img src="' . esc_url( get_theme_file_uri( 'build/images/placeholders/choose-earth.png' ) ) . '" alt="" class="wp-image-390"/></a><figcaption>' . esc_html( '<strong>Choose Earth</strong><br>Support Indigenous Peoples in Brazil to Reforest the Minds.', 'the-territory' ) . '</figcaption></figure><!-- /wp:image --><!-- wp:image {"url":"' . esc_url( get_theme_file_uri( 'build/images/placeholders/guardians-of-forest.png' ) ) . '","id":392,"sizeSlug":"full","linkDestination":"custom","style":{"color":{}},"className":"logo"} --><figure class="wp-block-image size-full logo"><a href="https://alianzaglobal.me/ncbs/" target="_blank" rel="noreferrer noopener"><img src="' . esc_url( get_theme_file_uri( 'build/images/placeholders/guardians-of-forest.png' ) ) . '" alt="" class="wp-image-392"/></a><figcaption>' . esc_html( '<strong>Guardians of the Forest</strong><br>From Nature-Based solutions to Nature and Community-Based Solutions', 'the-territory' ) . '</figcaption></figure><!-- /wp:image --><!-- wp:image {"url":"' . esc_url( get_theme_file_uri( 'build/images/placeholders/struggle-for-life.png' ) ) . '","id":391,"sizeSlug":"full","linkDestination":"custom","className":"logo"} --><figure class="wp-block-image size-full logo"><a href="https://apiboficial.org/luta-pela-vida/" target="_blank" rel="noreferrer noopener"><img src="' . esc_url( get_theme_file_uri( 'build/images/placeholders/struggle-for-life.png' ) ) . '" alt="" class="wp-image-391"/></a><figcaption>' . esc_html( '<strong>Struggle for Life </strong><br>Guarantee Indigenous Land Rights in Brazil.', 'the-territory' ) . '</figcaption></figure><!-- /wp:image --></figure><!-- /wp:gallery -->',
	)
);

