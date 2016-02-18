<?php
/**
 * @package Photoline
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( is_single() ) : ?>

	<div class="entry-content">

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-thumbnail">
				<?php the_post_thumbnail('photoline-medium'); ?>
			</div>
		<?php endif; //has_post_thumbnail() ?>

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

<?php else : ?>

		<div class="entry-content<?php if ( !has_post_thumbnail() ) { ?> no-thumbnail<?php } ?>">

<?php if ( has_post_thumbnail() ) { ?>
	<div class="entry-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('photoline-aside'); ?></a></div>
<?php } ?>

	<span class="entry-meta"><?php photoline_posted_on(); ?></span>

				<h1 class="entry-title<?php if ( !has_post_thumbnail() ) { ?> no-thumb<?php } ?>"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( has_post_thumbnail() ) : ?>

			<?php if ( has_excerpt() ) { ?>
				<?php photoline_excerpt( 20 ); ?>
			<?php } ?>

			<?php if ( ! has_excerpt() ) { ?>
				<?php photoline_excerpt( 30 ); ?>
			<?php } ?>

		<?php else : ?>

			<?php if ( has_excerpt() ) { ?>
				<?php photoline_excerpt( 65 ); ?>
			<?php } ?>

			<?php if ( ! has_excerpt() ) { ?>
				<?php photoline_excerpt( 95 ); ?>
			<?php } ?>

		<?php endif; //has_post_thumbnail() ?>

		</div><!-- .entry-content -->
<?php endif; ?>

</article><!-- #post-## -->