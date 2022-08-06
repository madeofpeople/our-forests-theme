<?php
/**
 * Template Name: Base Page
 *
 * This page is for things like 404, Privacy policy, any page that doesnt have the big fancy header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The Territory
 */

get_header(); ?>

	<div class="container site-main">
		<main id="main" class="content-container">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div>

<?php get_footer(); ?>
