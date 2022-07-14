<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The Territory
 */

get_header(); ?>

	<main id="main" class="container site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

		endwhile; // End of the loop.
		?>

		<?php
		if ( is_active_sidebar( 'content-bottom' ) ) : 
			get_sidebar( 'content-bottom' ); 
		endif;
		?>

	</main><!-- #main -->

<?php get_footer(); ?>
