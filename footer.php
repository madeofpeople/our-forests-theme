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

			<nav id="site-footer-navigation" class="footer-navigation navigation-menu" aria-label="<?php esc_attr_e( 'Footer Navigation', 'the-territory' ); ?>">
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
				<?php the_territory_display_copyright_text(); ?>
				<?php the_territory_display_social_network_links(); ?>
			</div><!-- .site-info -->

		</footer><!-- .site-footer container-->

	</main><!-- #main -->

	<?php wp_footer(); ?>


<?php $trp_langs = trp_custom_language_switcher();  ?>
<div class="translate_menu" id="translate_menu">
<!-- IMPORTANT! You need to have data-no-translation on the wrapper with the links or TranslatePress will automatically translate them in a secondary language. -->
	<div class="layout_wrapper">
		<a href="#" class="open-lang-menu">
			<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 92.91"><title>language</title><path d="M20.15,83.63,31.63,73.4a2.89,2.89,0,0,1,1.91-.73h27.8a.92.92,0,0,0,.93-.93V65.9H68v5.84a6.71,6.71,0,0,1-6.68,6.68H34.62L19.3,92.07a2.87,2.87,0,0,1-4.9-2V78.42H6.69A6.71,6.71,0,0,1,0,71.74V28.59a6.76,6.76,0,0,1,6.69-6.68H43.35v5.75H6.69a1,1,0,0,0-.94.93V71.74a.91.91,0,0,0,.28.65,1,1,0,0,0,.66.28H17.27a2.88,2.88,0,0,1,2.88,2.88v8.08Zm.21-19.48L29.6,36.24h8.83l9.24,27.91H40.35L38.8,59.07H29.15l-1.51,5.08ZM30.79,53.24h6.37L34,41.81,30.79,53.24ZM76.63,13.35h8.7V11.11a.69.69,0,0,1,.69-.69h4.65a.68.68,0,0,1,.68.69v2.24h9.76a.68.68,0,0,1,.68.69V18.5a.68.68,0,0,1-.68.68H99.56a26.3,26.3,0,0,1-.91,3.88l0,.06a26.07,26.07,0,0,1-1.74,4.15,32.34,32.34,0,0,1-2.14,3.43c-.67,1-1.41,1.9-2.2,2.83a35.78,35.78,0,0,0,3.68,3.83,41.43,41.43,0,0,0,5.09,3.74.68.68,0,0,1,.21.94l-2.39,3.73a.69.69,0,0,1-1,.2,45.88,45.88,0,0,1-5.58-4.08l0,0a41.42,41.42,0,0,1-4-4.1C87.3,38.93,86.15,40,85,41l0,0c-1.36,1.12-2.79,2.2-4.47,3.36a.69.69,0,0,1-1-.17L77,40.53a.69.69,0,0,1,.17-1c1.66-1.14,3-2.19,4.36-3.28,1.16-1,2.28-2,3.49-3.16a44.82,44.82,0,0,1-2.77-4.45A28.84,28.84,0,0,1,80,22.9a.68.68,0,0,1,.47-.84l4.27-1.19a.68.68,0,0,1,.84.47A22.62,22.62,0,0,0,89,28.7L90.27,27a26.33,26.33,0,0,0,1.51-2.47l0,0A19.43,19.43,0,0,0,93,21.62a24,24,0,0,0,.66-2.44h-17a.69.69,0,0,1-.69-.68V14a.69.69,0,0,1,.69-.69Zm27,56.82L88.26,56.51H61.54a6.73,6.73,0,0,1-6.69-6.68V6.69a6.71,6.71,0,0,1,2-4.72l.2-.18A6.67,6.67,0,0,1,61.54,0h54.65a6.69,6.69,0,0,1,4.71,2l.19.2a6.69,6.69,0,0,1,1.79,4.51V49.83a6.73,6.73,0,0,1-6.69,6.68h-7.7V68.13a2.88,2.88,0,0,1-4.91,2ZM91.26,51.49l11.47,10.23V53.64a2.88,2.88,0,0,1,2.88-2.88h10.58a.92.92,0,0,0,.65-.28.91.91,0,0,0,.29-.65V6.69a1,1,0,0,0-.22-.58L116.84,6a1,1,0,0,0-.65-.29H61.54A.94.94,0,0,0,61,6L60.89,6a.92.92,0,0,0-.28.65V49.83a.92.92,0,0,0,.93.93H89.35a2.86,2.86,0,0,1,1.91.73Z"/></svg>
		</a>
		<ul data-no-translation class="translation-list">
			<?php
				foreach ($trp_langs as $name => $item){
					$post_slug = get_post_field( 'post_name', get_post() );
					$item_url = $item['current_page_url'];
					$current_is_tup = strpos($item_url, '/tup/');
					$lang = get_locale();
					if ( $post_slug == "tup" ) {
						$post_slug = "";
					}
					$is_current = ($lang == $item['language_code'] && !$current_is_tup) ;
					$lang_name = $item['language_name'];
					if ($item['language_code'] == "pt_BR") {
						$lang_name = "Português";
						$item_url = "/pt/" . $post_slug;
					}

					if ($current_is_tup) {
						$item_url = str_replace('-tup', '', str_replace('/tup/', '/', $item_url));

			?>
						<li data-item-url="<?php echo $item_url; ?>" data-item-url="<?php echo $item_url; ?>" class="<?php echo $item['language_name']?> <?php if($is_current) echo 'current'; ?>" style="list-style-image: url(<?php echo $item['flag_link'] ?>)">
							<a href="<?php echo $item_url; ?>">
								<span><?php echo $lang_name;?></span>
							</a>
						</li>
			<?php
					} else {
			?>
						<li class="<?php echo $item['language_name']?> <?php if($is_current) echo 'current'; ?>" style="list-style-image: url(<?php echo $item['flag_link'] ?>)">
							<a href="<?php echo $item_url; ?>">
								<span><?php echo $lang_name;?></span>
							</a>
						</li>
			<?php
					};
				}
			?>
			<li class="tup <?php if($current_is_tup) echo 'current'; ?>">
				<?php
					// Here we handle some logic for the Tupi kawahiva link.
					// It changes based on whether we're inside 'tup' or not.
					// Also 'home', is just '/tup'
					$post_slug = get_post_field( 'post_name', get_post() );

					if ($post_slug == 'home') {
						$post_slug = '';
					} else if (
						strpos( $post_slug,'-tup') > -1 &&
						$post_slug != 'tup'
					) {
						$post_slug = $post_slug . '-tup';
					}
				?>
				<a href="<?php echo '/tup/' . $post_slug; ?>">
					<span>Tupí Kawahiva</span>
				</a>
			</li>
		</ul>
	</div>
</div>

</body>

</html>
