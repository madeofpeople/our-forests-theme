<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Territory
 */

if ( is_active_sidebar( 'content-bottom' ) ) {
	?>
	<aside class="content-bottom widget-area">
		<?php dynamic_sidebar( 'content-bottom' ); ?>
	</aside><!-- .content-bottom -->
	<?php
}
