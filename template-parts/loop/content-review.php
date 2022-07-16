<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The Territory
 */

?>

	<article <?php post_class( 'post-container' ); ?>>

		<header class="entry-header">
			<div class="entry-meta">
				<?php the_territory_post_date(); ?>
			</div><!-- .entry-meta -->

			<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>

		</header><!-- .entry-header -->

		<div class="entry-content"></div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php the_territory_source(); ?>
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
