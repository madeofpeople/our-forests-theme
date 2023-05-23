<?php
 /**
  * Title: Actions Count Section
  * Slug: the-territory/section-action-count
  * Categories: the-territory, layout
  */
?>

<!-- wp:group {"tagName":"section","className":"section actions-count"} -->
<section class="wp-block-group section actions-count">
    <!-- wp:cover {"url":"<?php echo esc_url('https://images.unsplash.com/photo-1520991323542-c159d7282b9f' ); ?>","dimRatio":0,"isDark":false,"isParallax":true} -->
    <div class="wp-block-cover is-light lax">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url('https://images.unsplash.com/photo-1520991323542-c159d7282b9f' ); ?>" data-object-fit="cover"/>
        <div class="wp-block-cover__inner-container">
            <!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
            <p class="has-text-align-center"></p>
            <!-- /wp:paragraph -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:heading -->
    <h2><?php esc_html_e( 'Everyone\'s Actions Count', 'our-forests' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p><?php esc_html_e( 'We are working together with many partners globally to protect the Amazon from the range of threats that it faces. Click here to find out what our partners are doing and support their efforts', 'our-forests' ); ?>.</p>
    <!-- /wp:paragraph -->

    <!-- wp:gallery {"columns":3,"linkTo":"none","sizeSlug":"full","className":"campaign-grid"} -->
    <figure class="wp-block-gallery has-nested-images columns-3 is-cropped campaign-grid">
        <!-- wp:image {"id":390,"sizeSlug":"full","linkDestination":"custom","className":"campaign"} -->
        <figure class="wp-block-image size-full campaign">
            <a href="https://www.chooseearth.co" target="_blank" rel="noreferrer noopener">
                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/placeholders/choose-earth.png' ) ); ?>" alt="" class="wp-image-390"/>
            </a>
            <figcaption><strong><?php esc_html_e( 'Choose Earth', 'our-forests' ); ?></strong><br><?php esc_html_e( 'Support Indigenous Peoples in Brazil to Reforest the Minds.', 'our-forests' ); ?></figcaption>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":392,"sizeSlug":"full","linkDestination":"custom","style":{"color":{}},"className":"campaign"} -->
        <figure class="wp-block-image size-full campaign">
            <a href="https://alianzaglobal.me/ncbs/" target="_blank" rel="noreferrer noopener">
                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/placeholders/cph-dox.png' ) ); ?>" alt="" class="wp-image-392"/>
            </a>
            <figcaption><strong><?php esc_html_e( 'Guardians of the Forest', 'our-forests' ); ?></strong><br><?php esc_html_e( 'From Nature-Based solutions to Nature and Community-Based Solutions.', 'our-forests' ); ?></figcaption>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":391,"sizeSlug":"full","linkDestination":"custom","className":"campaign"} -->
        <figure class="wp-block-image size-full campaign">
            <a href="https://apiboficial.org/luta-pela-vida/" target="_blank" rel="noreferrer noopener">
                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/placeholders/struggle-for-life.png' ) ); ?>" alt="" class="wp-image-391"/></a>
            <figcaption><strong><?php esc_html_e( 'Struggle for Life', 'our-forests' ); ?> </strong><br><?php esc_html_e( 'Guarantee Indigenous Land Rights in Brazil.', 'our-forests' ); ?></figcaption>
        </figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</section>
<!-- /wp:group -->