<?php
/**
 * The template used for displaying generic elements in the scaffolding library.
 *
 * @package The Territory
 */

?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading" id="<?php esc_html_e( 'elements', 'the-territory' ); ?>"><?php esc_html_e( 'Generic Elements', 'the-territory' ); ?></h2>

	<?php
	// Right-aligned Image.
	the_territory_display_scaffolding_section(
		[
			'title'       => 'Numeric Pagination',
			'description' => 'Display numeric pagination.',
			'usage'       => 'the_territory_display_numeric_pagination()',
			'output'      => '
				<nav class="pagination-container">
					<a class="prev page-numbers" href="#>&laquo;</a>
					<a class="page-numbers" href="#">1</a>
					<span aria-current="page" class="page-numbers current">2</span>
					<a class="page-numbers" href="#">3</a>
					<a class="next page-numbers" href="#">&raquo;</a>
				</nav>
			',
		]
	);

	?>
</section>
