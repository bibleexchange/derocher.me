<?php
/**
 * Template Name: Home Square Tiles
 *
 * @package Photoline
 */

get_header(); ?>

<?php
	if ( false === get_theme_mod( 'frontpage_header' ) ) {
		get_template_part( 'template-parts/home', 'tagline' );
	}else{
		get_template_part( 'template-parts/home', 'hero' );
} ?>

	<div id="primary" class="site-content">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'home-square' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
