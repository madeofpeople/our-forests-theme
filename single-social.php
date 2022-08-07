<?php
/**
 * Template Name: Social Post Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The Territory
 */


get_header(); ?>

	<section class="section">

		<h2 class="page__title"><?php the_title(); ?></h2>

		<p><?php the_field('field_social_message'); ?></p>

		<?php
		$images = get_field('images');
		$size = 'medium'; // (thumbnail, medium, large, full or custom size)
		if( $images ): ?>
			<div class="social-image-grid">
				<?php foreach( $images as $image_id ): ?>
					<div>
						<a href="<? echo wp_get_attachment_image_url( $image_id, 'large');?>" target="_blank">
							<?php echo wp_get_attachment_image( $image_id, $size ); ?>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php
			$file = get_field('field_social_file', false, true);
			if( $file ):
		?>
			<?php $url = wp_get_attachment_url(  $file );?>
			<a class="wp-block-button__link" href="<?php echo $url; ?>">Download Assets as a Zip File.</a>
		<?php endif; ?>

	</section>
<?php get_footer(); ?>
