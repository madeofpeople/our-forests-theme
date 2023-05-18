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
			/**
			 * Start: Do Not Modify
			 */
			if ( $attachment_url = \wp_get_attachment_image_url( $post->ID, 'full' ) ) :
				$attachment_id = \attachment_url_to_postid( $attachment_url );
				$image_size = 'large';
				if( $media_category = wp_get_post_terms( $attachment_id, 'media_category' ) ) {
					$media_category_slugs = wp_list_pluck( $media_category, 'slug' );
					$image_size = sanitize_title_with_dashes( $media_category_slugs[0] . ' ' . $image_size );
				}
				/**
				 * End: Do Not Modify
				 */
				?>
				<figure class="post-image">
					<?php echo \wp_get_attachment_image( $attachment_id, $image_size ); ?>
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
			// echo apply_filters( 'the_content', get_the_content() );
			the_content();
			// echo \wp_kses_post( \wpautop( \get_the_content() ) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php our_forests_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
