<?php
/**
 * The search template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The Territory
 */

get_header(); ?>

	<main id="main" class="container site-main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_territory_display_numeric_pagination();

		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

	</main><!-- #main -->

<?php get_footer(); ?>
