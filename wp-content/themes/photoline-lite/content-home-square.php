<?php
/**
 * The template used for Home page
 * @package Photoline
 */
?>


<section id="squarePosts">
 <!-- SquarePost-->
<div id="squareTiles" class="clearfix">

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
	foreach( $home_posts as $post ) : setup_postdata( $post );
?>

	<div class="box">

		<?php get_template_part( 'content', 'tile' ); ?>

	</div>

        <?php
	endforeach;
	wp_reset_postdata();
	?>

<?php } // if( $home_posts ) ?>

</div><!-- #squareTiles -->
</section>

<?php get_template_part( 'template-parts/section', 'home-page' ); ?>