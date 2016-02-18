<?php

/**
 * Sanitize Checkbox
 */
function simpl4_sanitize_checkbox( $input ) {
    if ( $input ) {
    $output = '1';
    } else {
    $output = false;
    }
    return $output;
}
// -----------------------------------------------------------------------------

/**
* Sanitize layout options
*/
function simpl4_sanitize_layout( $layout ) {
    if ( ! in_array( $layout, array( 'left', 'full_width', 'right' ) ) ) {
        $layout = 'right';
    }
    return $layout;
}
// -----------------------------------------------------------------------------

/**
* Sanitize logo alignment options
*/
function simpl4_sanitize_align( $align ) {
    if ( ! in_array( $align, array( 'left', 'center', 'right' ) ) ) {
        $align = 'center';
    }
    return $align;
}
// -----------------------------------------------------------------------------

/**
* Sanitize site width
*/
function simpl4_sanitize_width( $width ) {
    if ( ! in_array( $width, array( '980px', '1400px', '1600px' ) ) ) {
        $width = '980px';
    }
    return $width;
}
// -----------------------------------------------------------------------------

/**
* Sanitize site font
*/
function simpl4_sanitize_fontfamily( $font ) {
    if ( ! in_array( $font, array( 'Open Sans','Arial','Noto Serif','Noto Sans', 'Neucha', 'Lobster','Merriweather Sans','Verdana','Times New Roman','Monospace' ) ) ) {
        $font = 'Open Sans';
    }
    return $font;
}
// -----------------------------------------------------------------------------

/**
* Sanitize blog content
*/
function simpl4_sanitize_content( $content ) {
    if ( ! in_array( $content, array( 'content', 'excerpt' ) ) ) {
        $content = 'excerpt';
    }
    return $content;
}
// -----------------------------------------------------------------------------

/**
* Sanitize footer
*/
function simpl4_sanitize_footer( $footer ) {
    if ( empty($footer) ) {
        $footer = '';
    }
	else {
		$footer = esc_attr($footer);
	}
    return $footer;
}
// -----------------------------------------------------------------------------

/**
* Sanitize font weight
*/
function simpl4_sanitize_weight( $weight ) {
    if ( ! in_array( $weight, array( '400', '800' ) ) ) {
        $weight = '400';
    }
    return $weight;
}
// -----------------------------------------------------------------------------