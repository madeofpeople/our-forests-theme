<?php
/**
 * The template used for displaying Buttons in the scaffolding library.
 *
 * @package The Territory
 */

?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading" id="<?php esc_html_e( 'buttons', 'the-territory' ); ?>"><?php esc_html_e( 'Buttons', 'the-territory' ); ?></h2>
	<?php
		// Button.
		the_territory_display_scaffolding_section(
			[
				'title'       => 'Button',
				'description' => 'Display a button.',
				'usage'       => '<button class="button" href="#">Click Me</button>',
				'output'      => '<button class="button">Click Me</button>',
			]
		);
		?>
</section>
