<?php
/**
 * The default template for displaying content
 * Used for both single and index/archive/search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <header class="heading">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>

        
	<?php if ( is_search() ) : ?>
	<div class="postcontent summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="postcontent">
			<?php the_content(__( '<div class="more">Read More &rarr;</div>', 'simpl4' )); ?>
 		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'simpl4' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>           
       
	</div>
	<?php endif; ?>
    
  	<?php if(! get_theme_mod('simpl4_show_meta') == 1): /*the general meta switch*/ ?>    
             
<footer class="postline">
<span class="s_date"><i class="fa fa-calendar-o"></i><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_time('d-m-Y'); ?></a></span>
<span class="s_auth"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></span>
<span class="s_comm"><?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
<i class="fa fa-comment"></i><span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'simpl4' ), __( '1 Comment', 'simpl4' ), __( '% Comments', 'simpl4' ) ); ?></span></span>
<?php endif; edit_post_link( __( 'Edit', 'simpl4' ), '<span class="s_edit"><i class="fa fa-edit"></i><span class="edit-link">', '</span></span>' ); ?>
</footer>
 
 	<?php endif; ?>
                            
</article>