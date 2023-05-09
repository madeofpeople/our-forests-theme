<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Territory
 */

	 $description = get_bloginfo( 'description', 'display' );
?>


<!DOCTYPE html>

<html>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- preload webfonts https://web.dev/codelab-preload-web-fonts/ -->
	<link rel="preload" href="/wp-content/themes/the-territory-theme/build/fonts/acumin-extra-condensed--bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="/wp-content/themes/the-territory-theme/build/fonts/pragmatica--bold.woff2" as="font" type="font/woff2" crossorigin>

	<?php wp_head(); ?>

</head>

<body <?php body_class( 'site-wrapper' ); ?>>

	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'the-territory' ); ?></a>

	<main id="main" class="container site-main">

		<header class="site-header <?php if ( is_active_sidebar( 'header-notice' ) ) : ?>has-notice<?php endif; ?>">

			<?php
			if ( is_active_sidebar( 'header-notice' ) ) :
				dynamic_sidebar( 'header-notice' );
			endif;
			?>

			<div class="nav--primary">

				<div class="site-branding">

					<h1 class="site-title">
						<a href="<?php echo $home_link ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>

					<?php
					if ( $description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo esc_html( $description ); ?></p>
					<?php endif; ?>

				</div><!-- .site-branding -->
			</div><!-- .container -->

			<?php if ( \has_block( 'site-functionality/page-header' ) ) :?>
				<?php the_territory_header(); ?>
			<?php endif; ?>

		</header><!-- .site-header-->


		<?php do_action( 'after_header' ); ?>
