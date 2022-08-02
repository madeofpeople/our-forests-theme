<?php
 /**
  * Title: Testimonial
  * Slug: the-territory/testimonial
  * Categories: the-territory, text
  */
?>
<!-- wp:site-functionality/tout {"className":"testimonial"} -->
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/testimonial.jpg' ) ); ?>","dimRatio":0,"isDark":false,"isParallax":true} -->
<div class="wp-block-cover is-light lax">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/testimonial.jpg' ) ); ?>" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- wp:quote {"textColor":"white"} -->
        <blockquote class="wp-block-quote has-white-color has-text-color">
            <p>Historically, Our Existence <br>
            Has Been Marginalized and Erased. <br>
            Through This Film We're Changing That.</p>
            <cite>Bitaté Uru-eu-wau-wau</cite>
        </blockquote>
        <!-- /wp:quote -->
    </div>
</div>
<!-- /wp:cover -->
<!-- /wp:site-functionality/tout -->