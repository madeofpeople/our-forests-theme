<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Our Forests
 */

$attributes = $args['attributes'];
?>

<div class="share-actions">
	<ul class="wp-block-outermost-social-sharing is-style-logos-only">
		<?php
		$services = array(
			'twitter',
			'facebook',
			'instagram',
			'download',
		);
		foreach ( $services as $service ) {
			if ( 'instagram' === $service && empty( $attributes['instagram'] ) ) {
				continue;
			}
			?>
			<li class="outermost-social-sharing-link outermost-social-sharing-link-<?php echo \esc_attr( $service ); ?>">
				<a href="<?php echo our_forests_get_url( $service, $attributes ); ?>" data-vars-ga-category="<?php echo esc_attr( 'Share Cards' ); ?>" aria-label="<?php echo esc_attr( our_forests_get_label( $service, $attributes ) ); ?>" rel="noopener nofollow" target="_blank" class="wp-block-outermost-social-sharing-link-anchor"<?php echo ( 'download' === $service ) ? ' download': ''; ?>>
				<?php echo our_forests_get_icon( $service, $attributes ); ?>
				<span class="wp-block-outermost-social-sharing-link-label screen-reader-text"><?php echo esc_html( our_forests_get_label( $service, $attributes ) ); ?></span>
				</a>
			</li>
			<?php
		}
		?>
		
	</ul><!-- .wp-block-outermost-social-sharing -->
</div><!-- .share-actions -->
