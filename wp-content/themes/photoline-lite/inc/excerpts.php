<?php
/**
 * Excerpt related functions
 * Based on wp_trim_words
 * Learn more at http://codex.wordpress.org/Function_Reference/wp_trim_words
 */

if ( !function_exists( 'photoline_excerpt' ) ) {
	function photoline_excerpt($length=30, $readmore=false ) {
		global $post;
		$id = $post->ID;
		if ( has_excerpt( $id ) ) {
			// $post->post_excerpt
			$output = '<p class="photoline-excerpt">' . wp_trim_words( strip_shortcodes( get_the_excerpt( $id ) ), 10) . '</p>';
			$output .= '<p>' . wp_trim_words( strip_shortcodes( get_the_content( $id ) ), $length) . '</p>';
		} else {
			$output = '<p>' . wp_trim_words( strip_shortcodes( get_the_content( $id ) ), $length) . '</p>';
			if ( $readmore == true ) {
				$readmore_link = '<span class="photoline-readmore"><a href="'. get_permalink( $id ) .'" title="'. __('reading', 'photoline' ) .'" rel="bookmark">'. __('Read more', 'photoline' ) .'</a></span>';
				$output .= apply_filters( 'photoline_readmore_link', $readmore_link );
			}
		}
		echo $output;
	}
}

/**
 * Change default excerpt read more style
*/
if ( !function_exists( 'photoline_excerpt_more' ) ) {
	function photoline_excerpt_more($more) {
		global $post;
		return '...';
	}
}
add_filter( 'excerpt_more', 'photoline_excerpt_more' );