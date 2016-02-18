<?php
/**
 * @package Photoline
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">

	<?php if ( has_excerpt() ) : ?>
		<?php the_excerpt(); ?>
	<?php endif; ?>	

	<?php if ( has_post_thumbnail() && !has_post_format() ) : ?>
			<div class="entry-thumbnail">
				<?php the_post_thumbnail('photoline-medium'); ?>
			</div>
	<?php endif; ?>

</header><!-- .entry-header -->

	<div class="entry-content">

	<h1 class="page-title"><?php the_title(); ?></h1>

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'photoline' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-meta<?php if ( !is_active_sidebar( 'sidebar-1' ) ) { ?> no-sidebar<?php } ?>">

		<div class="posted">
			<?php photoline_posted_on(); ?>
		</div>
		<div class="extrameta">
			<?php photoline_posted_extra(); ?>
		</div>

		<?php edit_post_link( __( 'Edit', 'photoline' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-meta -->

</article><!-- #post-## -->
