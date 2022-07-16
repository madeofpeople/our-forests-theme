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
			<?php
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			?>

			<div class="entry-meta">
				<?php the_territory_post_date(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. */
							esc_html__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'the-territory' ),
							[
								'span' => [
									'class' => [],
								],
							]
						),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					)
				);
				?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php the_territory_source(); ?>
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
