<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The Territory
 */
$video_formats   = array(
	'mp4',
	'webm',
	'm4v'
);
?>
	<article <?php post_class( 'post-container section' ); ?>>

		<header class="post-header">
			<?php the_title( '<h2 class="post-title page__title">', '</h2>' ); ?>
		</header><!-- .post-header -->

		<div class="post-content">
			<?php the_content(); ?>

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
							<?php
							if ( The_Territory\is_video( $image_id, $video_formats ) ) :
								$data_type = The_Territory\get_data_type( $image_id );
								?>
								<a href="<?php echo \esc_url( \wp_get_attachment_url( $image_id ) ); ?>" target="_blank">
									<video poster="<?php echo \get_the_post_thumbnail_url( $image_id, $size ); ?>" height="300" width="300">
										<source src="<?php echo \wp_get_attachment_url( $image_id ); ?>" type="video/<?php echo \esc_attr( $data_type ); ?>">
										<?php \esc_html_e( 'Video is not supported', 'the-territory' ); ?>
									</video>
								</a>
								<?php
							else :
								?>
								<a href="<?php echo \esc_url( \wp_get_attachment_image_url( $image_id, $size ) ); ?>" target="_blank">
									<?php echo \wp_get_attachment_image( $image_id, $size ); ?>
								</a>
								<?php
							endif;
							?>
						</div><!-- .social-image-item -->

						<?php
					endforeach;
					?>
				</div><!-- .social-image-grid -->
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
