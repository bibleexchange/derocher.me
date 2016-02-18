<?php
/**
 * The default template for displaying quotation
 * Used for both single and index/archive/search. As Quotes are small, no need to show them as excerpts in search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<div class="postcontent">
    <i class="fa fa-3x fa-quote-left"></i>
			<?php the_content(__( '<div class="more">Read More &rarr;</div>', 'simpl4' )); ?>
            <?php the_title( '<p class="quote">&mdash;', '</a></p>' ); ?>
	</div>
                             
</article>