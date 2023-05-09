<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Our Forests
 */

?>

<?php get_header(); ?>

	<?php
	while ( have_posts() ) :
		the_post();

		if( is_singular( array( 'post' ) ) ) {
			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();
		} else {
			get_template_part( 'template-parts/content', get_post_type() );
		}

	endwhile; // End of the loop.
	?>

	<?php
	if ( is_active_sidebar( 'content-bottom' ) ) : 
		get_sidebar( 'content-bottom' ); 
	endif;
	?>

<?php get_footer(); ?>
