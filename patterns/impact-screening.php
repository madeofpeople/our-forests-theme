<?php
 /**
  * Title: Tout - Impact Screening
  * Slug: the-territory/impact-screening
  * Categories: featured, header, tout
  */
?>

<!-- wp:site-functionality/tout {"className":"tout parallax-text-overlay impact-screening"} -->
    <!-- wp:nk/awb {"type":"image","image":189,"imageTag":"%3Cimg%20src%3D%22<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/parallax.jpg' ) ); ?>%22%20class%3D%22wp-image-189%20jarallax-img%22%20width%3D%222560%22%20height%3D%221708%22%20%2F%3E","ghostkitStyles":{},"ghostkitClassname":"nk-awb-GlDtB","ghostkitId":"GlDtB"} -->
    <div class="wp-block-nk-awb nk-awb">
        <div class="nk-awb-wrap" data-awb-type="image" data-awb-image-background-size="cover" data-awb-image-background-position="50% 50%">
            <div class="nk-awb-inner">
                <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/parallax.jpg' ) ); ?>" class="wp-image-189 jarallax-img" width="2560" height="1708" />
            </div>
        </div>
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":3} -->
                <h3><?php esc_html_e( 'Schedule an Impact Screening', 'the-territory' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link" href="#host-screening-form"><?php esc_html_e( 'Enroll to Host a Screening', 'the-territory' ); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

                <!-- wp:list {"placeholder":"Add list items ...","className":"icon-list"} -->
                <ul class="icon-list">
                    <li><a href="#"><?php esc_html_e( 'Download the Checklist', 'the-territory' ); ?></a></li>
                    <li><a href="#"><?php esc_html_e( 'Download the Discussion Guide', 'the-territory' ); ?></a></li>
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:nk/awb -->
<!-- /wp:site-functionality/tout -->