<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The Territory
 */

?>
	<article <?php post_class( 'post-container section' ); ?>>

		<header class="post-header">
			<?php the_title( '<h2 class="post-title page__title">', '</h2>' ); ?>
		</header><!-- .post-header -->

		<div class="post-content">
			<?php
			if ( $message = get_post_meta( get_the_id(), 'message', true ) ) :
				?>
				<?php echo apply_filters( 'the_content', $message ); ?>
				<?php
			endif;
			?>

			<?php
			$images = \get_post_meta( get_the_ID(), 'images', true );
			$size   = 'medium'; // (thumbnail, medium, large, full or custom size)
			if ( ! empty( $images ) ) :
				?>
				<div class="social-image-grid">
					<?php
					foreach ( $images as $image_id ) :
						?>
						<div id="image-<?php echo $image_id; ?>" class="social-image-item">
							<a href="<?php echo esc_url( wp_get_attachment_image_url( $image_id, $size ) ); ?>" target="_blank">
								<?php echo \wp_get_attachment_image( $image_id, $size ); ?>
							</a>
						</div>

						<?php
					endforeach;
					?>
				</div><!-- .social-image-item -->
			<?php endif; ?>

			<?php
			if ( $download = get_post_meta( get_the_ID(), 'download', true ) ) :
				?>
				<a class="wp-block-button__link" href="<?php echo esc_url( wp_get_attachment_url( $download ) ); ?>"><?php esc_html_e( 'Download Assets as a Zip File.', 'the-territory' ); ?></a>
				<?php
			endif;
			?>
		</div><!-- .post-content -->

		<footer class="post-footer">
			<?php the_territory_entry_footer(); ?>
		</footer><!-- .post-footer -->

	</article><!-- #post-## -->
