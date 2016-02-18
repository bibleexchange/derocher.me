<?php
/**
 * @package Photoline
 */
?>

<?php
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'photoline-aside' );
if  ( $thumbnail ) { $thumbnail = $thumbnail[0]; } else { $thumbnail = photoline_catch_image(); }
?>

<div class="innerBox" <?php if  ( $thumbnail ) { ?>style="background: url(<?php echo $thumbnail; ?>) no-repeat; background-position: 50%; background-size: cover;"<?php } ?>>

<div class="titleBox">
	<article id="post-<?php the_ID(); ?>">
		<a href="<?php the_permalink(); ?>" rel="bookmark"><h3><?php the_title(); ?></h3></a>
	</article><!-- #post-## -->
</div>

</div><!-- .innerBox -->