<?php
/**
 * The template used for Home page
 * @package Photoline
 */
?>


<section id="mosaicPosts">
 <!-- MosaicPost-->
<div id="mosaicTiles" class="clearfix">

    <?php
        global $post;

        $numberposts = esc_attr( get_theme_mod( 'number_homeposts', '6' ) );

        $args = array(
            'post_status'    => 'publish',
			'post__not_in'   => get_option( 'sticky_posts' ),
			'tax_query'      => array(
				array(
					'taxonomy' => 'post_format',
					'terms'    => array( 'post-format-image' ),
					'field'    => 'slug',
					'operator' => 'IN',
				),
			),
            'numberposts' => $numberposts
        );
        $home_posts = get_posts($args);
    ?>
<?php if( $home_posts ) { ?>

<?php
	$num = 0;
	foreach( $home_posts as $post ) : setup_postdata( $post );
?>

<?php  if ( $num > 6 ){ $num = 0; } else { $num++; } ?>

<?php  if ( $num == 2 ){ $class = 'vertical'; } ?>
<?php  if ( $num == 3 || $num == 4 ){ $class = 'rectangle'; } ?>
<?php  if ( $num == 1 || $num == 5 ){ $class = 'big-square'; } ?>
<?php  if ( $num == 6 ){ $class = 'big-rectangle'; } ?>

	<div class="box <?php echo $class; ?>">

		<?php get_template_part( 'content', 'tile' ); ?>

	</div>

        <?php
	endforeach;
	wp_reset_postdata();
	?>

<?php } // if( $home_posts ) ?>

</div><!-- #mosaicTiles -->
</section>

<?php get_template_part( 'template-parts/section', 'home-page' ); ?>