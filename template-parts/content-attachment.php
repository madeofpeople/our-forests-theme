<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Our Forests
 */
if( ! $attachment_id = Our_Forests\get_attachment_media_id( $post->ID ) ) {
	return;
}
$attributes = array(
	'id'      => $attachment_id,
	'url'     => wp_get_attachment_image_src( $attachment_id, 'full' ),
	'message' => get_the_content( null, false, $post_id ),
	'title'   => get_the_title( $post_id ),
	'link'    => get_the_permalink( $post_id ),
);
?>
	<article <?php \post_class( 'social-card__page' ); ?>>

		<header class="entry-header">
			<a class="backlink" href="/">Return to homepage</a>
			<?php \the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<p class="introp">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<?php
			$image_size = 'large';
			if( $media_category = wp_get_post_terms( $attachment_id, 'media_category' ) ) {
				$media_category_slugs = wp_list_pluck( $media_category, 'slug' );
				$image_size = sanitize_title_with_dashes( $media_category_slugs[0] . ' ' . $image_size );
			}
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
			<div class="content">
				<?php the_content();?>
			</div>
			<div class="share-block">
				<h3>Share</h3>
				<?php get_template_part( 'template-parts/components/share', 'links', array( 'attributes' => $attributes ) ); ?>
			</div>
		</div><!-- .entry-content -->

		<a class="backlink" href="/">Return to homepage</a>

		<footer class="entry-footer">
			<?php our_forests_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
