<?php
/*
 * @package Quadra
 */

load_child_theme_textdomain( 'quadra', get_stylesheet_directory() . '/languages' );

/*
 * Override custom background defaults
 */
function quadra_custom_background_args() {
	$args = array(
		'default-color'    => 'f7f7f7',
		'default-image'    => '',
		'wp-head-callback' => 'hexa_custom_background_cb'
	);
	return $args;
}
add_filter( 'hexa_custom_background_args', 'quadra_custom_background_args' );

/**
 * Register Google Font
 */
function quadra_google_fonts() {
	/*	translators: If there are characters in your language that are not supported
		by PT Serif, translate this to 'off'. Do not translate into your own language. */

	if ( 'off' !== _x( 'on', 'PT Serif font: on or off', 'quadra' ) ) {

		wp_register_style( 'quadra-pt-serif', "https://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic&subset=latin,latin-ext" );

	}

}
add_action( 'init', 'quadra_google_fonts' );

/**
 * Enqueue Google Fonts for custom headers
 */
function quadra_admin_scripts( $hook_suffix ) {

	if ( 'appearance_page_custom-header' != $hook_suffix )
		return;

	wp_enqueue_style( 'quadra-pt-serif' );
	wp_dequeue_style( 'hexa-source-sans-pro' );

}
add_action( 'admin_enqueue_scripts', 'quadra_admin_scripts' );

/**
 * Enqueue scripts and styles.
 */
function quadra_scripts() {

	wp_enqueue_style( 'quadra-pt-serif' );
	wp_dequeue_style( 'hexa-source-sans-pro' );

}
add_action( 'wp_enqueue_scripts', 'quadra_scripts' );

/*
 * Override parent theme's header setup and styling
 */

function quadra_header_args( $args ) {
	$args = array(
		'default-image'          => '',
		'default-text-color'     => 'd05b1c',
		'width'                  => 2000,
		'height'                 => 200,
		'flex-height'            => true,
		'flex-width'             => true,
		'wp-head-callback'       => 'hexa_header_style',
		'admin-head-callback'    => 'quadra_admin_header_style',
		'admin-preview-callback' => 'hexa_admin_header_image',
	);
	return $args;
}
add_filter( 'hexa_custom_header_args', 'quadra_header_args' );

function quadra_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			background: #f7f7f7;
			border: 0
		}
		#headimg h1,
		#desc {
		}
		#headimg h1 {
			font-family: "PT Serif", Georgia, Times, serif;
			font-size: 26px;
			line-height: 1;
			margin: 0;
		}
		#headimg h1 a {
			text-decoration: none;
		}
		#desc {
			font-family: "PT Serif", Georgia, Times, serif;
			color: #ababab;
			font-size: 14px;
			font-weight: bold;
			letter-spacing: 1px;
			margin: 7.2px 0;
			text-transform: uppercase;
		}
		#headimg img {
			display: block;
			margin: 0 auto;
			max-width: 100%;
		}
		.site-branding {
			border-left: 8px solid #d05b1c;
			box-sizing: border-box;
			max-width: 448px;
			padding: 57.6px 0 28.8px 57.6px;
		}
	</style>
<?php
}

/**
 * Adds additional stylesheets to the TinyMCE editor if needed.
 *
 * @param string $mce_css CSS path to load in TinyMCE.
 * @return string
 */
function quadra_mce_css( $mce_css ) {
	$font = "https://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic&subset=latin,latin-ext";

	if ( empty( $font ) )
		return $mce_css;

	if ( ! empty( $mce_css ) )
		$mce_css .= ',';

	$font = str_replace( ',', '%2C', $font );
	$font = esc_url_raw( str_replace( '|', '%7C', $font ) );

	return $mce_css . $font;
}
add_filter( 'mce_css', 'quadra_mce_css' );
