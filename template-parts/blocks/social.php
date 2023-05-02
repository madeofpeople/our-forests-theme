<?php
/**
 * Template for social posts block items
 *
 * @package site-functionality
 */
$post            = $data->post;
$post_id         = $post->ID;
$share_services  = array(
	'twitter',
	'facebook',
);
$services        = array(
	'instagram',
	'download',
);
$images          = \get_post_meta( $post_id, 'images', true );
$extra_classname = $images && count( $images ) > 1 ? ' has-multiple-images' : '';
$video_formats   = array(
	'mp4',
	'webm',
	'm4v'
);

if ( ! empty( $images ) ) :
	$link    = \get_post_meta( $post_id, 'link', true );
	$message = \get_post_meta( $post_id, 'message', true );
	if ( Our_Forests\has_video( $images ) ) {
		$extra_classname .= ' has-video';
	}
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	?>
	<article id="post-<?php echo $post_id; ?>" class="social-post<?php echo esc_attr( $extra_classname ); ?>">

	<!-- theme override -->

		<ul class="image-group">
			<?php
			foreach ( $images as $image_id ) :
				?>
				<li id="image-<?php echo $image_id; ?>">
				<?php
				if ( Our_Forests\is_video( $image_id, $video_formats ) ) :
					$data_type = Our_Forests\get_data_type( $image_id );
					?>
					<a href="<?php echo \esc_url( \wp_get_attachment_url( $image_id ) ); ?>" target="_blank">
						<video poster="<?php echo \get_the_post_thumbnail_url( $image_id, $size ); ?>" height="450" width="450">
							<source src="<?php echo \wp_get_attachment_url( $image_id ); ?>" type="video/<?php echo \esc_attr( $data_type ); ?>">
							<?php \esc_html_e( 'Video is not supported', 'our-forests' ); ?>
						</video>
					</a>
					<?php
				else :
					?>
					<?php echo \wp_get_attachment_image( $image_id, $size ); ?>
					<?php
				endif;
				?>
				</li>
				<?php
			endforeach;
			?>
		</ul><!-- .image-group -->

		<div class="share-actions">
			<ul class="wp-block-outermost-social-sharing is-style-logos-only">
				<?php
				if ( \get_post_meta( $post_id, 'link', true ) || \get_post_meta( $post_id, 'message', true ) ) :
					foreach ( $share_services as $service ) :
						?>
						<?php echo Site_Functionality\Blocks\SocialCards\render_block_social_sharing_link( $service, $post_id ); ?>
						<?php
					endforeach;
				endif;

				foreach ( $services as $service ) :
					if ( \get_post_meta( $post_id, $service, true ) ) :
						?>
						<?php echo Site_Functionality\Blocks\SocialCards\render_block_social_sharing_link( $service, $post_id ); ?>
						<?php
					endif;
				endforeach;
				?>
			</ul><!-- .wp-block-outermost-social-sharing -->
		</div><!-- .share-actions -->

	</article><!-- .social-post -->

	<?php
endif;
