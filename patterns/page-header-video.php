<?php
 /**
  * Title: Page Header - Video
  * Slug: the-territory/page-header-video
  * Categories: header
  */
?>

<!-- wp:site-functionality/page-header -->
<!-- wp:getwid/section {"skipLayout":true,"minHeight":"538px","gapSize":"none","backgroundVideoUrl":{"alt":"","id":333,"url":"<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/territory-timelapse.webm' ) ); ?>"},"backgroundVideoControlsPosition":"bottom-left","paddingTop":"none","paddingBottom":"none","paddingLeft":"none","paddingRight":"none","marginTop":"none","marginBottom":"none","marginLeft":"none","marginRight":"none"} -->
<div class="wp-block-getwid-section has-inner-blocks-gap-none getwid-margin-top-none getwid-margin-bottom-none">
    <div class="wp-block-getwid-section__wrapper getwid-padding-top-none getwid-padding-bottom-none getwid-padding-left-none getwid-padding-right-none getwid-margin-left-none getwid-margin-right-none" style="min-height:538px">
        <div class="getwid-background-video-controls is-position-bottom-left">
            <button class="getwid-background-video-play"><i class="getwid-icon getwid-icon-pause"></i></button>
            <button class="getwid-background-video-mute"><i class="getwid-icon getwid-icon-mute"></i></button>
        </div>
        <div class="wp-block-getwid-section__inner-wrapper">
            <div class="wp-block-getwid-section__background-holder">
                <div class="wp-block-getwid-section__background">
                    <div class="wp-block-getwid-section__background-video-wrapper">
                        <video class="wp-block-getwid-section__background-video source-media-library" playsinline muted loop poster="<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/poster.png' ) ); ?>">
                        <source src="<?php echo esc_url( get_theme_file_uri( 'build/images/backgrounds/territory-timelapse.webm' ) ); ?>" type="video/mp4"/></video>
                    </div>
                </div>
                <div class="wp-block-getwid-section__foreground"></div>
            </div>
            <div class="wp-block-getwid-section__content">
                <div class="wp-block-getwid-section__inner-content"> </div>
            </div>
        </div>
    </div>
</div>
<!-- /wp:getwid/section -->
<!-- /wp:site-functionality/page-header -->