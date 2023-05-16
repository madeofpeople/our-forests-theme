<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Our Forests
 */
?>
	<article <?php \post_class( 'post-container' ); ?>>

		<header class="entry-header">
			<?php \the_title( '<h1 class="post-title page__title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			
			if ( $attachment_url = \wp_get_attachment_image_url( $post->ID, 'full' ) ) :
				$attachment_id = \attachment_url_to_postid( $attachment_url );
				?>
				<figure class="post-image">
					<?php echo \wp_get_attachment_image( $attachment_id, 'large' ); ?>
					<?php
					if( $attachment_caption = \wp_get_attachment_caption( $attachment_id ) ) :
						?>
						<figcaption>
							<?php echo \wp_kses_post( $attachment_caption ); ?>
						</figcaption>
						<?php
					endif;
					?>
				</figure>
				<?php
			endif;
			?>
			<?php
			echo \wp_kses_post( \wpautop( \get_the_content() ) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php our_forests_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
