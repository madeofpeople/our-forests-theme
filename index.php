<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Our Forests
 */

 get_header();

	if ( have_posts() ) :
		if ( is_home() && ! is_front_page() ) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>

			<?php
		endif;

		?>
<div class="page-nav">

	<div class="nav-wrapper">

		<a href="#" class="hamburger">
			<span>☰</span>
		</a>

		<div class="wp-block-buttons menu is-layout-flex">

			<div class="wp-block-button menu-item">
				<a class="wp-block-button__link wp-element-button" href="/">
					<svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 18V7.975L0.9 9.575L0 8.375L3 6.1V3.25H4.5V4.95L11 0L22 8.4L21.1 9.575L19 7.975V18H3ZM4.5 16.5H10.25V12.5H11.75V16.5H17.5V6.825L11 1.875L4.5 6.825V16.5Z" fill="white"/>
					</svg>
				</a>
			</div>

			<div class="wp-block-button menu-item">
				<a class="wp-block-button__link wp-element-button active" href="/#amplify-voices">AMPLIFY VOICES</a>
			</div>
			<div class="wp-block-button menu-item">
				<a class="wp-block-button__link wp-element-button" href="/#drive-policy-change">DRIVE</a>
			</div>
			<div class="wp-block-button menu-item">
				<a class="wp-block-button__link wp-element-button" href="/#support">Act and Protect</a>
			</div>
			<div class="wp-block-button menu-item">
				<a class="wp-block-button__link wp-element-button" href="https://our-forests.local/resources/">Resources</a>
			</div>
			<div class="wp-block-button menu-item">
				<a class="wp-block-button__link wp-element-button" href="https://our-forests.local/partners/">Partners</a>
			</div>
		</div>
	</div>
</div>
<?php
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/**
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			if ( 'post' === get_post_type() ) :
				get_template_part( 'template-parts/content', get_post_format() );
			else :
				get_template_part( 'template-parts/content', get_post_type() );
			endif;

		endwhile;

		our_forests_display_numeric_pagination();

	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>

	<?php
	if ( is_active_sidebar( 'content-bottom' ) ) :
		get_sidebar( 'content-bottom' );
	endif;
	?>

<?php get_footer(); ?>
