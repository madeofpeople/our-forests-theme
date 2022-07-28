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

		<header class="post-header">
			<?php if ( has_post_thumbnail() ): ?>
				<div class="<?php echo esc_attr( $base_class . '__post-thumbnail' ); ?>">
					<a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail( 'full' ) ?></a>
				</div>
			<?php endif; ?>
			<?php the_title( '<h2 class="post-title">', '</h2>' ); ?>
		</header><!-- .post-header -->

		<div class="post-content">
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

				wp_link_pages(
					[
						'before' => '<div class="page-links">' . esc_attr__( 'Pages:', 'the-territory' ),
						'after'  => '</div>',
					]
				);
				?>
		</div><!-- .post-content -->

		<footer class="post-footer">
			<?php the_territory_entry_footer(); ?>
		</footer><!-- .post-footer -->

	</article><!-- #post-## -->
