<?php
 /**
  * Title: Donate Tout
  * Slug: the-territory/component-donate-tout
  * Categories: the-territory, button, tout
  */
?>

<!-- wp:group {"className":"donate-tout"} -->
<div class="wp-block-group donate-tout">
    <!-- wp:site-functionality/link-group {"url":"#","linkTarget":"_blank","rel":"","attributesForBlocks":{"title":"","data-vars-ga-label":"","data-vars-ga-category":""}} -->
        <!-- wp:group {"className":"title__wrapper"} -->
        <div class="wp-block-group title__wrapper">
            <!-- wp:heading {"level":4,"placeholder":"Add Heading...","className":"tout__title"} -->
            <h4 class="tout__title"><?php esc_html_e( 'Title', 'our-forests' ); ?></h4>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:image {"id":119,"sizeSlug":"full","linkDestination":"none","className":"link-group__image"} -->
        <figure class="wp-block-image size-full link-group__image">
            <img src="<?php echo esc_url( get_theme_file_uri( 'build/images/placeholders/avatar-2.jpg' ) ); ?>" alt="" class="wp-image-119"/>
        </figure>
        <!-- /wp:image -->
    <!-- /wp:site-functionality/link-group -->
</div>
<!-- /wp:group -->