<?php
/**
 * The template for displaying a "No posts found" message
 */
?>

<article id="post-none">
        
	<header class="heading">
		<h2><?php _e( 'Nothing Found', 'simpl4' ); ?></h2>
	</header>
        
	<div class="postcontent">
        
		<?php if ( is_search() ) : ?>
        
        <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'simpl4' ); ?></p>
        <?php get_search_form(); ?>
        
        <?php else : ?>
    
        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'simpl4' ); ?></p>
        <?php get_search_form(); ?>	

        <?php endif; ?>   
        
    </div>
                     
</article>