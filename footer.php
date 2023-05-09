<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Territory
 */
 do_action( 'before_footer' ); ?>

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

		</footer><!-- .site-footer container-->

	</main><!-- #main -->
	<?php wp_footer(); ?>
</body>

</html>
