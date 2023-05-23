<?php
/**
 * Customizer sections.
 *
 * @package Our Forests
 */

/**
 * Register the section sections.
 *
 * @author WebDevStudios
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function our_forests_customize_sections( $wp_customize ) {
	// Register a social links section.
	$wp_customize->add_section(
		'our_forests_social_links_section',
		[
			'title'       => esc_html__( 'Social Media', 'our-forests' ),
			'description' => esc_html__( 'Links here power the display_social_network_links() template tag.', 'our-forests' ),
			'priority'    => 90,
			'panel'       => 'site-options',
		]
	);

	// Register a header section.
	$wp_customize->add_section(
		'our_forests_header_section',
		[
			'title'    => esc_html__( 'Header Customizations', 'our-forests' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);

	// Register a default images
	$wp_customize->add_section(
		'media_defaults',
		[
			'title'    => esc_html__( 'Default Media Settings', 'debtcollective' ),
			'priority' => 10,
			'panel'    => 'site-options',
		]
	);

	// Register a footer section.
	$wp_customize->add_section(
		'our_forests_footer_section',
		[
			'title'    => esc_html__( 'Footer Customizations', 'our-forests' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);
}
add_action( 'customize_register', 'our_forests_customize_sections' );
