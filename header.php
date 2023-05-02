<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Our Forests
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> >

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'our-forests' ); ?></a>

	<main id="main" class="container site-main">

		<header class="site-header<?php echo ( is_active_sidebar( 'header-notice' ) ) ? ' has-notice' : ''; ?>">

			<?php
			if ( is_active_sidebar( 'header-notice' ) ) :
				dynamic_sidebar( 'header-notice' );
			endif;
			?>

			<div class="nav--primary">

				<div class="site-branding">

					<h1 class="site-title">
						<?php
						if( dynamic_sidebar( 'header-logo' ) ) :
							?>

							<?php dynamic_sidebar( 'header-logo' ); ?>

							<?php
						endif;
						?>
					
					</h1>

					<?php

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo esc_html( $description ); ?></p>
					<?php endif; ?>

				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'mobile' ) ) : ?>
					<button type="button" class="menu__toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open Menu', 'wd_s' ); ?>"></button>
				<?php endif; ?>

				<nav id="site-navigation" class="main-navigation navigation-menu" aria-label="<?php esc_attr_e( 'Main Navigation', 'our-forests' ); ?>">
					<button type="button" class="menu__inner-toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open Menu', 'wd_s' ); ?>"></button>
					<?php
					$current_url = home_url( add_query_arg( array(), $wp->request ) );
					$current_is_urz = strpos($current_url, '/urz') > -1;
					if ($current_is_urz) {
						wp_nav_menu(
							array(
								'fallback_cb'    => false,
								'theme_location' => 'kawahiva',
								'menu_id'        => 'kawahiva-menu',
								'menu_class'     => 'menu dropdown container',
								'container'      => false,
							)
						);
					} else {
						wp_nav_menu(
							array(
								'fallback_cb'    => false,
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'menu dropdown container',
								'container'      => false,
							)
						);
					}
					?>
				</nav><!-- #site-navigation-->


				<div class="menu__underlay"></div>

			</div><!-- .container -->

			<?php
			if ( \has_block( 'site-functionality/page-header' ) ) :
				?>
				<?php our_forests_header(); ?>
				<?php
			endif;
			?>

		</header><!-- .site-header-->


		<?php do_action( 'after_header' ); ?>
