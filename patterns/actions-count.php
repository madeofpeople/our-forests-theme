<?php
 /**
  * Title: Actions Count
  * Slug: the-territory/action-count
  * Categories: featured, layout
  */
?>

<!-- wp:group {"tagName":"section","className":"section actions-count"} -->
<section class="wp-block-group section actions-count">
    <!-- wp:nk/awb {"type":"image","image":129,"imageTag":"%3Cimg%20src%3D%22<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/parallax.jpg' ) ); ?>%22%20class%3D%22wp-image-129%20jarallax-img%22%20width%3D%224096%22%20height%3D%222160%22%20%2F%3E","backgroundColor":"rgba(128, 173, 107, 0.25)","ghostkitStyles":{},"ghostkitClassname":"nk-awb-262ktJ","ghostkitId":"262ktJ"} -->
    <div class="wp-block-nk-awb nk-awb">
        <div class="nk-awb-wrap" style="background-color:rgba(128, 173, 107, 0.25)" data-awb-type="image" data-awb-image-background-size="cover" data-awb-image-background-position="50% 50%">
            <div class="nk-awb-inner">
                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/parallax.jpg' ) ); ?>" class="wp-image-129 jarallax-img" width="4096" height="2160" />
            </div>
        </div>
    </div>
    <!-- /wp:nk/awb -->

    <!-- wp:heading -->
    <h2><?php esc_html_e( 'Everyone\'s Actions Count', 'the-territory' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p><?php esc_html_e( 'We are working together with many partners globally to protect the Amazon from the range of threats that it faces. Click here to find out what our partners are doing and support their efforts.', 'the-territory' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:gallery {"columns":3,"linkTo":"none","sizeSlug":"full","className":"campaign-grid"} -->
    <figure class="wp-block-gallery has-nested-images columns-3 is-cropped campaign-grid">
        <!-- wp:image {"id":390,"sizeSlug":"full","linkDestination":"custom","className":"logo"} -->
        <figure class="wp-block-image size-full logo">
            <a href="https://www.chooseearth.co" target="_blank" rel="noreferrer noopener">
            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/placeholders/choose-earth.png' ) ); ?>" alt="" class="wp-image-390"/></a>
            <figcaption><?php printf( '<strong>%s</strong><br>%s', esc_html( 'Choose Earth', 'the-territory' ), esc_html( 'Support Indigenous Peoples in Brazil to Reforest the Minds.', 'the-territory' ) ); ?></figcaption>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":392,"sizeSlug":"full","linkDestination":"custom","style":{"color":{}},"className":"logo"} -->
        <figure class="wp-block-image size-full logo">
            <a href="https://alianzaglobal.me/ncbs/" target="_blank" rel="noreferrer noopener"><img src="<?php echo esc_url( get_theme_file_uri( 'build/images/placeholders/guardians-of-forest.png' ) ); ?>" alt="" class="wp-image-392"/></a>
            <figcaption><?php printf( '<strong>%s</strong><br>%s', esc_html( 'Guardians of the Forest', 'the-territory' ), esc_html( 'From Nature-Based solutions to Nature and Community-Based Solutions.', 'the-territory' ) ); ?></figcaption>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":391,"sizeSlug":"full","linkDestination":"custom","className":"logo"} -->
        <figure class="wp-block-image size-full logo">
            <a href="https://apiboficial.org/luta-pela-vida/" target="_blank" rel="noreferrer noopener"><img src="<?php echo esc_url( get_theme_file_uri( 'build/images/placeholders/struggle-for-life.png' ) ); ?>" alt="" class="wp-image-391"/></a>
            <figcaption><?php printf( '<strong>%s</strong><br>%s', esc_html( 'Struggle for Life', 'the-territory' ), esc_html( 'Guarantee Indigenous Land Rights in Brazil.', 'the-territory' ) ); ?></figcaption>
        </figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</section>
<!-- /wp:group -->