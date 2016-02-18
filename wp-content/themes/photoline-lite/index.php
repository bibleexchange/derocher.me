<?php
/**
 * The main template file.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Photoline
 */
get_header(); ?>

<?php get_template_part( 'template-parts/posts', 'wrap-start' ); ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>

	<?php endwhile;?>

<?php else : ?>
		<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif;  // have_posts() ?>

			</div><!--.grid -->
		</main><!-- #main -->

<div class="clearfix"></div>

<?php
if( true === get_theme_mod( 'numbered_pagination' ) ) {
        photoline_paging_nav(); // numbers pagination
}

if( false === get_theme_mod( 'numbered_pagination' ) ) {
        photoline_content_nav( 'nav-below' );
}
?>

	</div><!-- #primary -->
<?php if ( is_active_sidebar( 'sidebar-1' ) ) { get_sidebar(); } ?>
<?php get_footer(); ?>