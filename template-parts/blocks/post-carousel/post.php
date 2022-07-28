<?php
/**
 * The template for displaying all single posts in Post Carousel block
 */

$base_class = $extra_attr['block_name'];
?>

<?php get_template_part( 'template-parts/loop/content', get_post_type(), array( 'base_class' => $base_class ) ); ?>

