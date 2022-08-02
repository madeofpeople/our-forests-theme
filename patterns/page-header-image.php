<?php
 /**
  * Title: Page Header - Background Image
  * Slug: the-territory/page-header-image
  * Categories: the-territory, header
  */
?>

<!-- wp:site-functionality/page-header -->
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/cover.jpg' ) ); ?>","id":114,"useFeaturedImage":true,"dimRatio":0,"className":"header-banner"} -->
<div class="wp-block-cover header-banner">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background wp-image-114" alt="" src="<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/cover.jpg' ) ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
	<!-- wp:site-functionality/page-nav -->
	<!-- wp:buttons {"className":"menu"} -->
	<div class="wp-block-buttons menu">
		<!-- wp:button {"placeholder":"Add Nav Item...","className":"menu-item"} -->
		<div class="wp-block-button menu-item"><a class="wp-block-button__link" href="#direct-support"><?php esc_html_e( 'Direct Support', 'the-territory' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"menu-item"} -->
		<div class="wp-block-button menu-item"><a class="wp-block-button__link" href="#engage-amplify"><?php esc_html_e( 'Engage &amp; Amplify', 'the-territory' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"menu-item"} -->
		<div class="wp-block-button menu-item"><a class="wp-block-button__link" href="#demand-change"<?php esc_html_e( 'Demand Change', 'the-territory' ); ?>></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
	<!-- /wp:site-functionality/page-nav -->
	</div>
</div>
<!-- /wp:cover -->
<!-- /wp:site-functionality/page-header -->