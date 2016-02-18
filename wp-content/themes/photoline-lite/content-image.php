<?php
/**
 * The template for Image post format
 * @package Photoline
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_single() ) : ?>
<?php
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'photoline-medium' );
?>
		<header class="entry-header"<?php if  ( $thumbnail ) { ?> style="padding: 150px 8px; background: url(<?php echo $thumbnail[0]; ?>) no-repeat; background-position: 50%; background-size: cover<?php } ?>;">

			<div <?php if  ( $thumbnail ) { ?>class="hero"<?php } ?>>

				<!--<div class="post-image-icon"><i class="fa fa-camera"></i></div>-->

				<h1 class="entry-title"><?php the_title(); ?></h1>

					<?php if ( has_excerpt() ) : ?>
				<?php the_excerpt(); ?>
					<?php endif; //has_excerpt() ?>	

			</div>

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); // echo get_post_gallery(); ?>
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

	<?php elseif ( is_tax( 'post_format', 'post-format-image' ) || is_page() ) : ?>


		<div class="entry-content">
<a href="<?php the_permalink(); ?>">

<?php
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'photoline-aside' );
	if  ( $thumbnail ) {
		print '<img src="'.$thumbnail[0].'" class="thumbnail" alt="<?php the_title(); ?>" />';
	} else {
		print '<img src="'.photoline_catch_image().'" alt="<?php the_title(); ?>" />';

}
?>
</a>
		</div><!-- .entry-content -->


	<?php else : ?>
<?php
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'photoline-aside' );
if  ( $thumbnail ) { $thumbnail = $thumbnail[0]; } else { $thumbnail = photoline_catch_image(); }
?> 
<div class="entry-content" style="background:<?php echo get_theme_mod( 'photoline_link_color', '#2d2d2d' ); ?><?php if  ( $thumbnail ) { ?> url(<?php echo $thumbnail; ?>) no-repeat; background-position: 50%; background-size: cover<?php } ?>;">

<a href="<?php the_permalink(); ?>">
<div class="inner-format">
			<i class="fa fa-camera"></i>
			<h1 class="entry-title"><?php the_title(); ?></h1>
</div>
</a>
		</div><!-- .entry-content -->

	<?php endif; ?>

</article><!-- #post-## -->

