<?php
/**
 * Customizer settings.
 *
 * @package Our Forests
 */

/**
 * Register additional scripts.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function our_forests_customize_additional_scripts( $wp_customize ) {
	$wp_customize->add_setting(
		'default_featured_image',
		array(
			'default'   => '',
			'transport' => 'refresh',
			'type'      => 'option',
		)
	);

	$wp_customize->add_control(
		new \WP_Customize_Image_Control(
			$wp_customize,
			'default_featured_image',
			array(
				'label'       => esc_html__( 'Add a default post image', 'debtcollective' ),
				'description' => esc_html__( 'Page header image to display if a featured image isn\'t supplied.', 'debtcollective' ),
				'section'     => 'media_defaults',
				'settings'    => 'default_featured_image',
			)
		)
	);

}
add_action( 'customize_register', 'our_forests_customize_additional_scripts' );

/**
 * Register a social icons setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function our_forests_customize_social_icons( $wp_customize ) {
	// Create an array of our social links for ease of setup.
	$social_networks = array(
		'facebook',
		'instagram',
		'twitter',
		'linkedin',
		'reddit',
	);

	// Loop through our networks to setup our fields.
	foreach ( $social_networks as $network ) {

		// Register a setting.
		$wp_customize->add_setting(
			'our_forests_' . $network . '_link',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url',
			)
		);

		// Create the setting field.
		$wp_customize->add_control(
			'our_forests_' . $network . '_link',
			array(
				'label'   => /* translators: the social network name. */ sprintf( esc_attr__( '%s URL', 'our-forests' ), ucwords( $network ) ),
				'section' => 'our_forests_social_links_section',
				'type'    => 'text',
			)
		);
	}
}
add_action( 'customize_register', 'our_forests_customize_social_icons' );

/**
 * Register copyright text setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function our_forests_customize_copyright_text( $wp_customize ) {
	// Register a setting.
	$wp_customize->add_setting(
		'our_forests_copyright_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		new Text_Editor_Custom_Control(
			$wp_customize,
			'our_forests_copyright_text',
			array(
				'label'       => esc_attr__( 'Copyright Text', 'our-forests' ),
				'description' => esc_attr__( 'The copyright text will be displayed in the footer. Basic HTML tags allowed.', 'our-forests' ),
				'section'     => 'our_forests_footer_section',
				'type'        => 'textarea',
			)
		)
	);
}
add_action( 'customize_register', 'our_forests_customize_copyright_text' );
