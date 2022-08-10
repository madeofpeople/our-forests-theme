<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The Territory
 */
$base_class = $args['base_class'];
$permalink =  esc_url( get_permalink() );
?>

<article <?php post_class( 'post-container ' . $base_class ); ?>>

	<header class="post-header">
		<?php if ( has_post_thumbnail() ): ?>
			<div class="<?php echo esc_attr( $base_class . '__post-thumbnail' ); ?>">
				<a href="<?php echo esc_url( get_permalink() ); ?>" data-vars-ga-category="Review Links" data-vars-ga-label="<?php echo $permalink; ?>"><?php the_post_thumbnail(); ?></a>
			</div>
		<?php endif; ?>
		<?php the_title( '<h3 class="post-title"><a href="' . $permalink . '" rel="bookmark">', '</a></h3>' ); ?>
	</header><!-- .post-header -->

	<div class="post-content">
		<?php the_content(); ?>
	</div><!-- .post-content -->

	<footer class="post-footer">
		<?php the_territory_source(); ?>
	</footer><!-- .post-footer -->

</article><!-- #post-## -->

