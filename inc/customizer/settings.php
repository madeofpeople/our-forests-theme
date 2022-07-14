<?php
/**
 * Customizer settings.
 *
 * @package The Territory
 */

/**
 * Register additional scripts.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function the_territory_customize_additional_scripts( $wp_customize ) {
	// Register a setting.
	// $wp_customize->add_setting(
	// 'the_territory_header_scripts',
	// [
	// 'default'           => '',
	// 'sanitize_callback' => 'force_balance_tags',
	// ]
	// );

	// Create the setting field.
	// $wp_customize->add_control(
	// 'the_territory_header_scripts',
	// [
	// 'label'       => esc_attr__( 'Header Scripts', 'the-territory' ),
	// 'description' => esc_attr__( 'Additional scripts to add to the header. Basic HTML tags are allowed.', 'the-territory' ),
	// 'section'     => 'the_territory_additional_scripts_section',
	// 'type'        => 'textarea',
	// ]
	// );

	// Register a setting.
	// $wp_customize->add_setting(
	// 'the_territory_footer_scripts',
	// [
	// 'default'           => '',
	// 'sanitize_callback' => 'force_balance_tags',
	// ]
	// );

	// Create the setting field.
	// $wp_customize->add_control(
	// 'the_territory_footer_scripts',
	// [
	// 'label'       => esc_attr__( 'Footer Scripts', 'the-territory' ),
	// 'description' => esc_attr__( 'Additional scripts to add to the footer. Basic HTML tags are allowed.', 'the-territory' ),
	// 'section'     => 'the_territory_additional_scripts_section',
	// 'type'        => 'textarea',
	// ]
	// );

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
add_action( 'customize_register', 'the_territory_customize_additional_scripts' );

/**
 * Register a social icons setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function the_territory_customize_social_icons( $wp_customize ) {
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
			'the_territory_' . $network . '_link',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url',
			)
		);

		// Create the setting field.
		$wp_customize->add_control(
			'the_territory_' . $network . '_link',
			array(
				'label'   => /* translators: the social network name. */ sprintf( esc_attr__( '%s URL', 'the-territory' ), ucwords( $network ) ),
				'section' => 'the_territory_social_links_section',
				'type'    => 'text',
			)
		);
	}
}

add_action( 'customize_register', 'the_territory_customize_social_icons' );

/**
 * Register copyright text setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function the_territory_customize_copyright_text( $wp_customize ) {
	// Register a setting.
	$wp_customize->add_setting(
		'the_territory_copyright_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		new Text_Editor_Custom_Control(
			$wp_customize,
			'the_territory_copyright_text',
			array(
				'label'       => esc_attr__( 'Copyright Text', 'the-territory' ),
				'description' => esc_attr__( 'The copyright text will be displayed in the footer. Basic HTML tags allowed.', 'the-territory' ),
				'section'     => 'the_territory_footer_section',
				'type'        => 'textarea',
			)
		)
	);
}

add_action( 'customize_register', 'the_territory_customize_copyright_text' );
