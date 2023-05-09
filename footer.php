<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Our Forests
 */
?>

		<?php do_action( 'before_footer' ); ?>

		<footer class="site-footer">

			<?php
			if ( is_active_sidebar( 'footer' ) ) :
				?>
				<div class="footer-widgets widget-area">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div><!-- .footer-widgets-->
				<?php
			endif;
			?>

			<nav id="site-footer-navigation" class="footer-navigation navigation-menu" aria-label="<?php esc_attr_e( 'Footer Navigation', 'our-forests' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'fallback_cb'    => false,
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
						'menu_class'     => 'menu container',
						'container'      => false,
						'depth'          => 1,
					)
				);
				?>
			</nav><!-- #site-navigation-->

			<div class="container site-info">
				<?php our_forests_display_copyright_text(); ?>
				<?php our_forests_display_social_network_links(); ?>
			</div><!-- .site-info -->

		</footer><!-- .site-footer container-->

	</main><!-- #main -->

	<?php wp_footer(); ?>

	<?php get_template_part( 'template-parts/language-switcher' ); ?>

</body>

</html>
