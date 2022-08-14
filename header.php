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

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

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

					<?php /* the_custom_logo(); */ ?>

					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<svg width="180" height="56" viewBox="0 0 180 56" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M96.7621 11.1202C96.2875 12.5337 95.6706 13.6116 95.2156 13.6116C94.8792 13.6116 94.9183 13.2985 95.0537 12.5659L95.9511 8.11152C96.2303 6.32196 95.6608 5.33907 94.1771 5.32928C91.3047 5.31111 90.2509 8.79518 90.2509 8.79518L91.7876 0.756104L88.2592 1.4132L88.2424 1.61592C89.3185 1.77391 89.3367 2.36393 89.285 2.68689L86.7992 14.7301L89.1888 14.7022C89.5028 12.9294 89.7917 10.8252 90.2467 9.79481C91.1163 7.85424 91.9272 6.80289 92.9363 6.80289C93.4109 6.80289 93.937 7.02099 93.8379 7.6753L92.9824 12.4358C92.6362 14.1737 93.0256 14.8965 94.1534 14.8895C96.3 14.8755 97.0258 11.6501 96.9198 11.1076L96.7621 11.1202Z" fill="white"/>
								<path d="M106.211 11.1631C105.049 12.6023 104.239 13.5095 102.968 13.51C101.698 13.5105 100.729 12.7285 100.837 10.4499C102.678 10.2751 107.03 9.82608 107.166 7.45114C107.238 6.18183 106.65 5.51353 104.936 5.35519C103.079 5.18368 101.365 5.87203 100.203 7.0843C99.0443 8.27506 98.6698 9.33017 98.4296 10.8502C98.0438 13.3053 99.4996 14.7681 101.14 14.8746C103.138 15.0039 105.786 14.297 106.364 11.1932L106.211 11.1631ZM101.036 10.0259C101.074 7.52995 102.468 5.92593 104.191 5.79991C104.771 5.75752 105.245 6.06468 105.246 6.8838C105.245 8.13786 103.272 9.68838 101.036 10.0259Z" fill="white"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M75.6984 1.71471L86.7988 1.72871L85.9976 7.30851L85.5915 7.31971C85.5915 7.31971 85.8957 2.19428 84.179 2.19428L82.2277 2.18169L79.9862 13.2588C79.9862 13.2588 79.6428 14.3172 81.3414 14.3172L81.3387 14.6276H76.0739V14.327H76.8178C76.8178 14.327 77.792 14.2766 78.0628 12.6255C78.3336 10.9743 80.0992 2.18169 80.0992 2.18169H78.1117C78.1117 2.18169 76.4438 2.47809 74.7144 7.3253L74.2804 7.34346L75.6984 1.71471Z" fill="white"/>
								<path d="M4.88231 29.3038H0V25.0508H14.4334V29.3038H9.55106V54.8191H4.88231V29.3038Z" fill="white"/>
								<path d="M22.4148 25.0508H35.1509V29.3038H27.0849V37.1709H33.4942V41.4239H27.0849V50.5661H34.7322L34.0343 54.8191H22.4148V25.0508Z" fill="white"/>
								<path d="M43.5551 25.0508H50.4752C52.8814 25.0508 54.6359 25.6114 55.7399 26.7313C56.844 27.8512 57.3953 29.5736 57.3953 31.8973V33.726C57.3953 36.8172 56.3764 38.7731 54.3386 39.5952V39.6805C55.4705 40.0202 56.0777 40.4998 56.5439 41.5483C57.0114 42.5969 57.1538 44.181 57.1538 45.9384V49.4085C57.1538 50.2054 57.0505 54.4402 57.4287 54.8191H53.0001C52.9903 54.8093 52.5799 54.443 52.5799 49.916C52.5799 49.2211 52.5185 45.2156 52.5185 44.5207C52.5185 42.2544 51.515 41.6882 50.0802 41.6882L48.503 41.6994L48.4444 54.8191H43.5551V25.0508ZM49.9238 37.8084C50.8576 37.8084 51.5583 37.568 52.0244 37.0856C52.492 36.6033 52.7251 35.7966 52.7251 34.6613V32.3656C52.7251 31.2877 52.5339 30.509 52.1529 30.0266C51.7704 29.5443 51.1688 29.3038 50.3481 29.3038H48.5044V37.8084H49.9238Z" fill="white"/>
								<path d="M66.2846 25.0508H73.2047C75.611 25.0508 77.3654 25.6114 78.4695 26.7313C79.5735 27.8512 80.1248 29.5736 80.1248 31.8973V33.726C80.1248 36.8172 79.1059 38.7731 77.0681 39.5952V39.6805C78.2001 40.0202 78.8073 40.4998 79.2734 41.5484C79.741 42.5969 79.8834 44.181 79.8834 45.9384V49.4085C79.8834 50.2054 79.7801 54.4402 80.1583 54.8191H75.7296C75.7199 54.8093 75.3095 54.4431 75.3095 49.916C75.3095 49.2212 75.2481 45.2156 75.2481 44.5207C75.2481 42.2544 74.2446 41.6882 72.8097 41.6882L71.2325 41.6994L71.1739 54.8191H66.2846V25.0508ZM72.6534 37.8084C73.5871 37.8084 74.2878 37.568 74.754 37.0856C75.2216 36.6033 75.4547 35.7966 75.4547 34.6613V32.3657C75.4547 31.2877 75.2635 30.509 74.8824 30.0266C74.5 29.5443 73.8984 29.3038 73.0777 29.3038H71.2339V37.8084H72.6534Z" fill="white"/>
								<path d="M143.75 25.0508H150.671C153.077 25.0508 154.831 25.6114 155.935 26.7313C157.039 27.8512 157.591 29.5736 157.591 31.8973V33.726C157.591 36.8172 156.572 38.7731 154.534 39.5952V39.6805C155.666 40.0202 156.273 40.4998 156.739 41.5484C157.207 42.5969 157.349 44.181 157.349 45.9384V49.4085C157.349 50.2054 157.246 54.4402 157.624 54.8191H153.195C153.186 54.8093 152.775 54.4431 152.775 49.916C152.775 49.2212 152.714 45.2156 152.714 44.5207C152.714 42.2544 151.71 41.6882 150.276 41.6882L148.698 41.6994L148.64 54.8191H143.75V25.0508ZM150.119 37.8084C151.053 37.8084 151.754 37.568 152.22 37.0856C152.687 36.6033 152.921 35.7966 152.921 34.6613V32.3657C152.921 31.2877 152.729 30.509 152.348 30.0266C151.966 29.5443 151.364 29.3038 150.544 29.3038H148.7V37.8084H150.119Z" fill="white"/>
								<path d="M93.8322 25.0508H89.162V54.8187H93.8322V25.0508Z" fill="white"/>
								<path d="M105.781 29.3038H100.898V25.0508H115.333V29.3038H110.451V54.8191H105.781V29.3038Z" fill="white"/>
								<path d="M128.432 55.2442C126.139 55.2442 124.384 54.5926 123.167 53.2882C121.95 51.9838 121.342 50.1411 121.342 47.7601V32.1098C121.342 29.7288 121.95 27.8861 123.167 26.5817C124.384 25.2773 126.139 24.6258 128.432 24.6258C130.724 24.6258 132.48 25.2773 133.697 26.5817C134.912 27.8861 135.521 29.7288 135.521 32.1098V47.7601C135.521 50.1411 134.912 51.9838 133.697 53.2882C132.48 54.5926 130.724 55.2442 128.432 55.2442ZM128.432 50.9911C130.046 50.9911 130.852 50.0139 130.852 48.0579V31.8134C130.852 29.8561 130.046 28.8788 128.432 28.8788C126.819 28.8788 126.012 29.8561 126.012 31.8134V48.0579C126.012 50.0139 126.819 50.9911 128.432 50.9911Z" fill="white"/>
								<path d="M169.684 43.6846L164.065 25.0508H169.284L172.18 38.1524L175.179 25.0508H180L174.42 43.749L174.354 54.8191H169.684V43.6846Z" fill="white"/>
							</svg>
							<span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
						</a>
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

				<nav id="site-navigation" class="main-navigation navigation-menu" aria-label="<?php esc_attr_e( 'Main Navigation', 'the-territory' ); ?>">
					<button type="button" class="menu__inner-toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open Menu', 'wd_s' ); ?>"></button>
					<?php
					wp_nav_menu(
						array(
							'fallback_cb'    => false,
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'menu dropdown container',
							'container'      => false,
						)
					);
					?>
				</nav><!-- #site-navigation-->


				<div class="menu__underlay"></div>

			</div><!-- .container -->

			<?php
			if ( \has_block( 'site-functionality/page-header' ) ) :
				?>
				<?php the_territory_header(); ?>
				<?php
			endif;
			?>

		</header><!-- .site-header-->

		<?php do_action( 'after_header' ); ?>
