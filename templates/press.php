<?php
/**
 * Template Name: Press Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Our Forests
 */

get_header(); ?>

	<!-- <main id="main" class="container site-main"> -->

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_title( '<h1 class="page-title">', '</h1>' );
				?>
				<div class="archive-description">
					<?php our_forests_the_content( array( 'site-functionality/page-header' ) ); ?>
				</div>
			</header><!-- .page-header -->

			<?php
			$args = array(
				'post_type' => 'press'
			);
			$query = new \WP_Query( $args );

			if ( $query->have_posts() ) :
				?>
				<section class="section press">
					<header class="section-header">
						<h2 class="section-title">
							<?php esc_html_e( 'Press Mentions', 'our-forests' ); ?>
						</h2>
					</header>
					<div class="post-list">
					<?php
					while ( $query->have_posts() ) :
						$query->the_post();

						get_template_part( 'template-parts/loop/content', get_post_type() );

					endwhile;
					wp_reset_postdata(); ?>
					</div><!-- .post-list" -->
				</section><!-- .press -->
				<?php
			endif;
			?>

			<?php
			$args = array(
				'post_type' => 'review'
			);
			$query = new \WP_Query( $args );

			if ( $query->have_posts() ) :
				?>
				<section class="section reviews">
					<header class="section-header">
						<h2 class="section-title">
							<?php esc_html_e( 'Film Reviews', 'our-forests' ); ?>
						</h2>
					</header>
					<div class="post-list">
					<?php
					while ( $query->have_posts() ) :
						$query->the_post();

						get_template_part( 'template-parts/loop/content', get_post_type() );

					endwhile;
					wp_reset_postdata(); ?>
					</div><!-- .post-list" -->
				</section><!-- .reviews -->
				<?php
			endif;
			?>

		<?php
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

		<?php
		if ( is_active_sidebar( 'content-bottom' ) ) :
			get_sidebar( 'content-bottom' );
		endif;
		?>

	<!-- </main> -->
	<!-- #main -->

<?php get_footer(); ?>
