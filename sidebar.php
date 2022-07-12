<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Territory
 */

if ( is_active_sidebar( 'sidebar-1' ) ) {
	?>
	<aside class="sidebar widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .secondary -->
	<?php
}
