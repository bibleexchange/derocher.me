<?php get_header(); 

if(get_theme_mod('postlayout') == 'left'):
  $simpl4_sidebar_style = 'style="padding-left: 2%;"';
  $simpl4_content_style = 'style="float: right;"';
elseif(get_theme_mod('postlayout') == 'full_width'):
  $simpl4_sidebar_style = 'style="display: none;"';
  $simpl4_content_style = 'style="width: 100%;"';
else:
  $simpl4_sidebar_style = 'style="float:right;"';
  $simpl4_content_style = 'style="float:left;"';

endif; ?>

<div id="column">
<div id="bloglist" <?php echo $simpl4_content_style; ?>>

<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					
					//post
					get_template_part( 'content', get_post_format() );
					//comments
					if ( comments_open() || get_comments_number() ) :
						comments_template( '', true );
					endif;	

				endwhile;
				       
			else :

				get_template_part( 'content', 'none' );

			endif;
	
?>

</div><!--bloglist end-->

<div id="sidewrap" <?php echo $simpl4_sidebar_style; ?>>
<?php get_sidebar(); ?>
</div>

</div><!-- column end -->

<?php get_footer(); ?>