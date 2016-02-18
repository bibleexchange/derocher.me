<?php
/**
 * Theme Contextual Help
 * @package Photoline
 */
add_filter( 'contextual_help', 'photoline_admin_contextual_help', 10 );

function photoline_admin_contextual_help() {

	$screen = get_current_screen();

if ( $screen->id == 'themes' ) {

  $screen->add_help_tab( array(
      'id' => 'photoline_wellcom_tab',
      'title' => __( 'Photoline Lite Theme', 'photoline' ),
      'content' => '<p><strong>' . __( 'Thank you for choosing this Theme!', 'photoline' ) . '</strong></p><p>' . __( 'The Theme has a contextual help for almost all admin screens. More information, help and support you will find on the website DinevThemes.com.', 'photoline' ) . '</p><p><strong>' . __( 'Quick Start', 'photoline' ) . '</strong></p><p>' . __( 'Using Customizer set your color, upload a logo (avatar - for personal) image, upload a background image (or select any color), upload the image (or select any color) header and other settings.', 'photoline' ) . '</p><p>' . __( 'The theme has page templates for the Home Page. Home Mosaic Tiles and Home Square Tiles Templates show 4 (or more) posts image format. Into Home Tagline section can be used plugins shortcode.', 'photoline' ) . '</p><p><strong>' . __( 'Note', 'photoline' ) . '</strong></p><p>' . __( 'If you want to display the posts without the sidebar just leave blank Sidebar posts.', 'photoline' ) . '</p>',
  ) );

}

if ( $screen->id == 'post' ) {

	$screen->add_help_tab( array(
		'id'      => 'photoline-post-fimg',
		'title'   => __( 'Theme Features', 'photoline' ),
		'content' => '<p><strong>' . __( 'Theme Features', 'photoline' ) . '</strong></p><p><strong>' . __( 'Use Featured image', 'photoline' ) . '</strong></p><p>' . __( 'Featured image used for the cover of the post formats, quote, audio, video. Upload the image that will be displayed header on single post formats standard and image.', 'photoline' ) . '</p><p><strong>' . __( 'Use Excerpt', 'photoline' ) . '</strong></p><p>' . __( 'Enter text in field Excerpt to display announcement of the post.', 'photoline' ) . '</p><p><strong>' . __( 'Format', 'photoline' ) . '</strong></p><p>' . __( '<b>Quote.</b> As title, type the author quotes. Quote place in the main text box without using tag blockquote (b-quote). Featured image and Excerpt are not used.<br /><b>Link.</b> As title, type the name Link. URL place in the main text box without using http (http://). Featured image and Excerpt are not used.', 'photoline' ) . '</p><p><strong>' . __( 'Button', 'photoline' ) . '</strong></p><p>' . __( 'To show the button, use the link class, , for example <code>class="btn blue"</code>. Color options: green, blue, red.', 'photoline' ) . '</p><p><strong>' . __( 'Gallery shortcode', 'photoline' ) . '</strong></p><p>' . __( 'For a slideshow gallery use the built-in parameter shortcode Themes <code>type="slider"</code>, sample: <code>[gallery ids="..." type="slider"]</code>', 'photoline' ) . '</p>',
  ) );

}

if ( $screen->id == 'page' ) {

  $screen->add_help_tab( array(
      'id' => 'photoline_page_tab',
      'title' => __( 'Theme Features', 'photoline' ),
	'content' =>  '<p><strong>' . __( 'Theme Features', 'photoline' ) . '</strong></p><p><strong>' . __( 'Use Featured image', 'photoline' ) . '</strong></p><p>' . __( 'Upload the image that will be displayed header on page.', 'photoline' ) . '</p><p><strong>' . __( 'Use Excerpt', 'photoline' ) . '</strong></p><p>' . __( 'Enter text in field Excerpt to display announcement of the post.', 'photoline' ) . '</p><p><strong>' . __( 'Templates', 'photoline' ) . '</strong></p><p>' . __( 'The theme has several page templates. Use metabox Page Attributes > dropdown Template.', 'photoline' ) . '</p><p><strong>' . __( 'Button', 'photoline' ) . '</strong></p><p>' . __( 'To show the button, use the link class, , for example <code>class="btn blue"</code>. Color options: green, blue, red.', 'photoline' ) . '</p><p><strong>' . __( 'Gallery shortcode', 'photoline' ) . '</strong></p><p>' . __( 'For a slideshow gallery use the built-in parameter shortcode Themes <code>type="slider"</code>, sample: <code>[gallery ids="..." type="slider"]</code>', 'photoline' ) . '</p>',
  ) );

}

if ( $screen->id == 'plugins' ) {

  $screen->add_help_tab( array(
      'id' => 'photoline_wellcom_tab',
      'title' => __( 'Recommend', 'photoline' ),
      'content' =>  '<p><strong>' . __( 'Recommended plugins for Photoline Theme', 'photoline' ) . '</strong></p><ul><li>' . __( 'Jetpack By WordPress.com', 'photoline' ) . '</li><li>' . __( 'Contact Form 7 By Takayuki Miyoshi', 'photoline' ) . '</li><li>' . __( 'Shortcodes Ultimate By Vladimir Anokhin.', 'photoline' ) . '</li></ul>',
	) );

}

if ( $screen->id == 'nav-menus' ) {

	$screen->add_help_tab( array(
		'id'      => 'photoline-social-menus',
		'title'   => __( 'Social Menu', 'photoline' ),
		'content' =>  '<p><strong>' . __( 'Custom widgets', 'photoline' ) . '</strong></p><p>' . __( 'Menu icons social media is displayed in the footer. Included all popular icons of social media, and Feedburner. To create a menu item, use the tab Links (Edit Menus). And select Social Menu as Theme locations.', 'photoline' ) . '</p><p>' . __( 'Example:<br />tab <strong>Links</strong><br /><em>URL</em> http://twitter.com/your<br /><em>Navigation Label</em> Twitter', 'photoline' ) . '</p>',
	) );
	$screen->add_help_tab( array(
		'id'      => 'photoline-top-menus',
		'title'   => __( 'Top Menu', 'photoline' ),
		'content' => __('<p><strong>Top Menu</strong></p><p>The theme has an additional top menu bar.</p><p>If you create a menu item using Links tab (Edit Menus) and links will be http://tel: OR http://mailto: OR https://goo.gl (short link google map) it will be displayed icons Font Awesome.</p><p>Example:<br />tab <strong>Links</strong><br /><em>URL</em> http://tel:+1916000000<br /><em>Navigation Label</em> +1 916 00.00.00</p>', 'photoline' ),
	) );
}

/**
*else
*/
      return;
}
?>