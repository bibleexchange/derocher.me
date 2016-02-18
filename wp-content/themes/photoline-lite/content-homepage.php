<?php
/**
 * The template used for displaying page content in home page
 * @package Photoline
 */
?>

<?php
	if ( false === get_theme_mod( 'frontpage_header' ) ) {
		get_template_part( 'template-parts/home', 'tagline' );
	}else{
		get_template_part( 'template-parts/home', 'hero' );
} ?>

<?php get_template_part( 'template-parts/section', 'home-content' ); ?>

<section id="home-child-page">
<!-- ChildGrid -->
	<?php
		$child_pages = new WP_Query( array(
			'post_type'      => 'page',
			'orderby'        => 'menu_order',
			'order'          => 'ASC',
			'post_parent'    => $post->ID,
			'posts_per_page' => 9,
			'no_found_rows'  => true,
		) );
	?>

	<?php if ( $child_pages->have_posts() ) : ?>

<div class="grid2 clearfix">
				<?php while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>

					<div class="col">
						<?php get_template_part( 'content', 'childpage' ); ?>
					</div>

				<?php endwhile; ?>
</div>

	<?php
		endif;
		wp_reset_postdata();
	?>
<!-- ChildGrid -->
</section>