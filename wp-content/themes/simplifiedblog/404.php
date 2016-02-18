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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <header class="heading">
				<h1 class="page-title"><?php _e( 'Not Found', 'simpl4' ); ?></h1>
		</header>
        
		<div class="postcontent">
				<p><?php _e( 'It looks like nothing was found over here. Maybe try searching?', 'simpl4' ); ?></p>
				<?php get_search_form(); ?>
        </div>

</article>


</div><!--bloglist end-->

<div id="sidewrap" <?php echo $simpl4_sidebar_style; ?>>
<?php get_sidebar(); ?>
</div>

</div><!-- column end -->

<?php get_footer(); ?>