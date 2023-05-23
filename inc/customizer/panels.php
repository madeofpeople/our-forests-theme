<?php
/**
 * Customizer panels.
 *
 * @package Our Forests
 */

/**
 * Add a custom panels to attach sections too.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Class.
 */
function our_forests_customize_panels( $wp_customize ) {
	// Register a new panel.
	$wp_customize->add_panel(
		'site-options',
		[
			'priority'       => 10,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => esc_html__( 'Site Options', 'our-forests' ),
			'description'    => esc_html__( 'Other theme options.', 'our-forests' ),
		]
	);
}
add_action( 'customize_register', 'our_forests_customize_panels' );
