<?php
/**
 * The template for displaying Archive pages.
 * @package Photoline
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>

<?php get_template_part( 'template-parts/posts', 'wrap-start' ); ?>

			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

	</div><!-- .grid -->
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
