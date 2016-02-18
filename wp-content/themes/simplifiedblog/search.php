<?php get_header(); 
if(get_theme_mod('bloglayout') == 'left'):
  $simpl4_sidebar_style = 'style="padding-left:2%;"';
  $simpl4_content_style = 'style="float:right;"';
elseif(get_theme_mod('bloglayout') == 'full_width'):
  $simpl4_sidebar_style = 'style="display:none;"';
  $simpl4_content_style = 'style="width:100%;"';
else:
  $simpl4_sidebar_style = 'style="float:right;"';
  $simpl4_content_style = 'style="float:left;"';
endif; ?>

<div id="column">
<div id="bloglist" <?php echo $simpl4_content_style; ?>>

<h1 class="archive-title">
<?php
	printf( __( '<i class="fa fa-search"></i> %s', 'simpl4' ), get_search_query() );
?>
</h1>

		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
				
					get_template_part( 'content', get_post_format() );

				endwhile;					
                    
			the_posts_pagination( array(
				'prev_text'          => __( '&lt;&lt;', 'simpl4'),
				'next_text'          => __( '&gt;&gt;', 'simpl4'),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'simpl4' ) . ' </span>',
			) ); 
			           
			else :
				get_template_part( 'content', 'none' );
			endif;
		?>

</div><!--bloglist end-->

<div id="sidewrap" <?php echo $simpl4_sidebar_style; ?>>
<?php get_sidebar(); ?>
</div>
  
</div><!-- column end -->

<div class="sidebar">
<?php if ( ! dynamic_sidebar( 'Footer' )) : ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>