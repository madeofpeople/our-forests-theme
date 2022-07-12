<?php
/**
 * Customizer sections.
 *
 * @package The Territory
 */

/**
 * Register the section sections.
 *
 * @author WebDevStudios
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function the_territory_customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'the_territory_additional_scripts_section',
		[
			'title'    => esc_html__( 'Additional Scripts', 'the-territory' ),
			'priority' => 10,
			'panel'    => 'site-options',
		]
	);

	// Register a social links section.
	$wp_customize->add_section(
		'the_territory_social_links_section',
		[
			'title'       => esc_html__( 'Social Media', 'the-territory' ),
			'description' => esc_html__( 'Links here power the display_social_network_links() template tag.', 'the-territory' ),
			'priority'    => 90,
			'panel'       => 'site-options',
		]
	);

	// Register a header section.
	$wp_customize->add_section(
		'the_territory_header_section',
		[
			'title'    => esc_html__( 'Header Customizations', 'the-territory' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);

	// Register a footer section.
	$wp_customize->add_section(
		'the_territory_footer_section',
		[
			'title'    => esc_html__( 'Footer Customizations', 'the-territory' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);
}
add_action( 'customize_register', 'the_territory_customize_sections' );
