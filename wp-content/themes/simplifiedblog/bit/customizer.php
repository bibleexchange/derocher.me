<?php
/**
 * Contains methods for customizing the theme customization screen.
 * @link http://codex.wordpress.org/Theme_Customization_API
 */
class simpl4_Customize {
   /**
    * This hooks into 'customize_register' and allows
    * you to add new sections and controls to the Theme Customize screen.
    */
   public static function simpl4_register ( $wp_customize ) {

        /**
        * Panels
        */
        global $wp_version;
        if ( $wp_version >= 4.0 ) {


        // Layout
        $wp_customize->add_section( 'simpl4_layout', array(
        'priority'       => 40,
        'title'          => __('Layout Options', 'simpl4'),
        ));

        }

        /*
        * Sections
        */
 		 
        // Container Width
        $wp_customize->add_section( 'simpl4_container_width' , array(
        'title'      => __( 'Width of the site', 'simpl4' ),
        'priority'   => 30,
        ));
		
        // -----------------------------------------------------------------------------
  
        // Font Options
        $wp_customize->add_section( 'simpl4_fonts' , array(
        'title'      => __( 'Font Options', 'simpl4' ),
        'priority'   => 50,
        ));
        // -----------------------------------------------------------------------------

        // Meta Options
        $wp_customize->add_section( 'simpl4_meta' , array(
        'title'      => __( 'Meta Options', 'simpl4' ),
        'priority'   => 60,
        ));

        // -----------------------------------------------------------------------------

        // simpl4 Logo
        $wp_customize->add_section( 'simpl4_logo' , array(
        'title'      => __( 'Logo', 'simpl4' ),
        'priority'   => 70,        ));
        // -----------------------------------------------------------------------------


        /**
        * Show/Hide meta in general
        */
        $wp_customize->add_setting( 'simpl4_show_meta', array(
            'sanitize_callback' => 'simpl4_sanitize_checkbox',
        ));

        $wp_customize->add_control(
          'simpl4_show_meta',
          array(
            'description' => __( 'If checked - nothing is displayed.', 'simpl4' ),
            'type' => 'checkbox',
            'label' => __( 'HIDE ALL META INFO', 'simpl4' ),
            'section' => 'simpl4_meta',
            'std' => '0',
        ));
        // -----------------------------------------------------------------------------
		
        /**
        * Show/Hide categories on posts
        */
        $wp_customize->add_setting( 'simpl4_show_cat', array(
            'sanitize_callback' => 'simpl4_sanitize_checkbox',
        ));

        $wp_customize->add_control(
          'simpl4_show_cat',
          array(
            'description' => __( 'Hide categories in post meta?', 'simpl4' ),
            'type' => 'checkbox',
            'label' => __( 'Hide categories', 'simpl4' ),
            'section' => 'simpl4_meta',
            'std' => '1',
        ));
        // -----------------------------------------------------------------------------

        /**
        * Show/Hide date on posts
        */
        $wp_customize->add_setting( 'simpl4_show_date', array(
            'sanitize_callback' => 'simpl4_sanitize_checkbox',
        ));

        $wp_customize->add_control(
          'simpl4_show_date',
          array(
            'description' => __( 'Hide date in post meta?', 'simpl4' ),
            'type' => 'checkbox',
            'label' => __( 'Hide date', 'simpl4' ),
            'section' => 'simpl4_meta',
        ));
        // -----------------------------------------------------------------------------
       
	    /**
        * Show/Hide tags on posts
        */
        $wp_customize->add_setting( 'simpl4_show_tags', array(
            'sanitize_callback' => 'simpl4_sanitize_checkbox',
        ));

        $wp_customize->add_control(
          'simpl4_show_tags',
          array(
            'description' =>  __( 'Hide tags in post meta?', 'simpl4' ),
            'type' => 'checkbox',
            'label' => __( 'Hide tags', 'simpl4' ),
            'section' => 'simpl4_meta',
        ));
        // -----------------------------------------------------------------------------
	    
		/**
        * Show/Hide comment count on posts
        */
        $wp_customize->add_setting( 'simpl4_show_comm', array(
            'sanitize_callback' => 'simpl4_sanitize_checkbox',
        ));

        $wp_customize->add_control(
          'simpl4_show_comm',
          array(
            'description' => __( 'Hide the comment count in post meta?', 'simpl4' ),
            'type' => 'checkbox',
            'label' => __( 'Hide comment link', 'simpl4' ),
            'section' => 'simpl4_meta',
        ));
        // -----------------------------------------------------------------------------
		
		/**
        * Show/Hide author on posts
        */
        $wp_customize->add_setting( 'simpl4_autho', array(
            'sanitize_callback' => 'simpl4_sanitize_checkbox',
        ));

        $wp_customize->add_control(
          'simpl4_autho',
          array(
            'description' => __( 'Hide the author in post meta?', 'simpl4' ),
            'type' => 'checkbox',
            'label' => __( 'Hide author', 'simpl4' ),
            'section' => 'simpl4_meta',
        ));
        // -----------------------------------------------------------------------------
        
		/**
        * Link hover color
        */
        $wp_customize->add_setting( 'sheet_color' , array(
            'default'     => '#FFF',
            'transport'   => 'postMessage',
            'sanitize_callback' => 'sanitize_hex_color',
            ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'simpl4_sheet_color', array(
            'label'        => __( 'Blogging area Color', 'simpl4' ),
            'section'    => 'colors',
            'settings'   => 'sheet_color',
        )));      
		// -----------------------------------------------------------------------------	
        
		/**
        * Primary color
        */
        $wp_customize->add_setting( 'primary_color' , array(
            'default'     => '#000000',
            'transport'   => 'postMessage',
            'sanitize_callback' => 'sanitize_hex_color',
            ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'simpl4_primary_color', array(
            'label'        => __( 'Text Color', 'simpl4' ),
            'section'    => 'colors',
            'settings'   => 'primary_color',
        )));
        // -----------------------------------------------------------------------------
		
        /*
        * Heading Link Color
        */ 
        $wp_customize->add_setting( 'heading_linkcolor', 
            array(
                'default' => '#333', 
                'type' => 'theme_mod', 
                'capability' => 'edit_theme_options', 
                'transport' => 'postMessage', 
                'sanitize_callback' => 'sanitize_hex_color',
            ) 
        );      
            
        $wp_customize->add_control( new WP_Customize_Color_Control( 
            $wp_customize, 
            'simpl4_heading_linkcolor',
            array(
                'label' => __( 'Headings Color', 'simpl4' ), 
                'section' => 'colors', 
                'settings' => 'heading_linkcolor', 
                'priority' => 10,
            ) 
        ));
        // -----------------------------------------------------------------------------
        
		/*
        * Link Color
        */ 
        $wp_customize->add_setting( 'link_textcolor', 
            array(
            'default' => '#9b0000',
            'type' => 'theme_mod', 
            'capability' => 'edit_theme_options', 
            'transport' => 'postMessage', 
            'sanitize_callback' => 'sanitize_hex_color',
        ));           

        $wp_customize->add_control( new WP_Customize_Color_Control( 
            $wp_customize, 
            'simpl4_link_textcolor', 
            array(
            'label' => __( 'Links Color', 'simpl4' ), 
            'section' => 'colors', 
            'settings' => 'link_textcolor', 
            'priority' => 10, 
            ) 
        ));     
	    // -----------------------------------------------------------------------------
      
	    /**
        * Link hover color
        */
        $wp_customize->add_setting( 'hover_color' , array(
            'default'     => '#F00',
            'transport'   => 'postMessage',
            'sanitize_callback' => 'sanitize_hex_color',
            ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'simpl4_hover_color', array(
            'label'        => __( 'Hover Color', 'simpl4' ),
            'section'    => 'colors',
			'description' => __( 'Does not show here, but updates', 'simpl4' ),
            'settings'   => 'hover_color',
        )));
        // -----------------------------------------------------------------------------		
	    
		/**
        * Tagline color
        */
        $wp_customize->add_setting( 'tagline_color' , array(
            'default'     => '#888',
            'transport'   => 'postMessage',
            'sanitize_callback' => 'sanitize_hex_color',
            ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'simpl4_tagline_color', array(
            'label'        => __( 'Misc Color', 'simpl4' ),
            'section'    => 'colors',
			'description' => __( 'Post meta, menu items and some other interface elements use it.', 'simpl4' ),
            'settings'   => 'tagline_color',
        )));
        // -----------------------------------------------------------------------------
        
		/*
        * Blog Layout
        */
        $wp_customize->add_setting('bloglayout', array(
            'default'        => 'right',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'simpl4_sanitize_layout',
        ));

        $wp_customize->add_control('simpl4_option_bloglayout', array(
            'label'      => __('Blog layout', 'simpl4'),
            'section'    => 'simpl4_layout',
            'settings'   => 'bloglayout',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
                'left' => __('Left Sidebar', 'simpl4'),
                'full_width' => __('Full Width / No sidebar', 'simpl4'),
                'right'   => __('Right Sidebar', 'simpl4')
                ),
        ));
        // -----------------------------------------------------------------------------
        
		/*
        * Post Layout
        */
        $wp_customize->add_setting('postlayout', array(
            'default'        => 'right',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'simpl4_sanitize_layout',
        ));

        $wp_customize->add_control('simpl4_option_postlayout', array(
            'label'      => __('Single post layout', 'simpl4'),
            'section'    => 'simpl4_layout',
            'settings'   => 'postlayout',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
                'left' => __('Left Sidebar', 'simpl4'),
                'full_width' => __('Full Width / No sidebar', 'simpl4'),
                'right'   => __('Right Sidebar', 'simpl4')
                ),
        ));
        // -----------------------------------------------------------------------------
       
	    /*
        * Page Layout
        */
        $wp_customize->add_setting('pagelayout', array(
            'default'        => 'right',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'simpl4_sanitize_layout',
        ));

        $wp_customize->add_control('simpl4_option_pagelayout', array(
            'label'      => __('Single page layout', 'simpl4'),
            'section'    => 'simpl4_layout',
            'settings'   => 'pagelayout',
            'description' => '',
            'type'       => 'radio',
            'choices'    => array(
                'left' => __('Left Sidebar', 'simpl4'),
                'full_width' => __('Full Width / No sidebar', 'simpl4'),
                'right'   => __('Right Sidebar', 'simpl4')
                ),
        ));
        // -----------------------------------------------------------------------------
        
		/**
        * Site width
        */
        $wp_customize->add_setting('container_width', array(
            'default'        => '980px',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'simpl4_sanitize_width',
            ));

        $wp_customize->add_control('simpl4_option_container_width', array(
            'label'      => __('Width', 'simpl4'),
            'section'    => 'simpl4_container_width',
            'settings'   => 'container_width',
            'description' => __('Choose site width. It changes how the site looks on wider screens. Fluid gives more real estate for your media.', 'simpl4'),
            'type'       => 'radio',
            'choices'    => array(
                '980px' => __('Fixed 980px', 'simpl4'),
                '1400px' => __('Fluid 980-1400px', 'simpl4'),
                '1600px' => __('Fluid 980-1600px', 'simpl4')
                ),
        ));
        // -----------------------------------------------------------------------------
       
	    /**
        * Headings
        */
        $wp_customize->add_setting('headings_font', array(
            'default'        => 'Merriweather Sans',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'transport' => 'postMessage', 
            'sanitize_callback' => 'simpl4_sanitize_fontfamily',
            ));

        $wp_customize->add_control('simpl4_headings_font', array(
            'label'      => __('Heading Font', 'simpl4'),
            'section'    => 'simpl4_fonts',
            'settings'   => 'headings_font',
            'description' =>  __('Pick a font for all headings (some fonts are loaded through Google Fonts - not immediately visible - press F5 to see them', 'simpl4'),
            'type'       => 'select',
            'choices'    => array(
                'Open Sans' => 'Open Sans',
                'Arial' => 'Arial',
                'Noto Serif' => 'Noto Serif',
                'Noto Sans' => 'Noto Sans',
                'Merriweather Sans' => 'Merriweather Sans',
                'Neucha' => 'Neucha',
                'Lobster' => 'Lobster',
                'Verdana' => 'Verdana',
                'Times New Roman' => 'Times New Roman',
                'Monospace' => 'Monospace'
				),
        ));
        // -----------------------------------------------------------------------------	
      
	    /**
        * Body Font
        */
        $wp_customize->add_setting('body_font', array(
            'default'        => 'Open Sans',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
            'sanitize_callback' => 'simpl4_sanitize_fontfamily',
            ));

        $wp_customize->add_control('simpl4_body_font', array(
            'label'      => __('Body Font', 'simpl4'),
            'section'    => 'simpl4_fonts',
            'settings'   => 'body_font',
            'description' => __('Pick a font for body text (some fonts are loaded through Google Fonts - not immediately visible - press F5 to see them', 'simpl4'),
            'type'       => 'select',
            'choices'    => array(
                'Open Sans' => 'Open Sans',
                'Arial' => 'Arial',
                'Noto Serif' => 'Noto Serif',
                'Noto Sans' => 'Noto Sans',
                'Merriweather Sans' => 'Merriweather Sans',
                'Neucha' => 'Neucha',
                'Lobster' => 'Lobster',
                'Verdana' => 'Verdana',
                'Times New Roman' => 'Times New Roman',
                'Monospace' => 'Monospace'
				),
            ));	
        // -----------------------------------------------------------------------------	
       
	    /**
        * Headings
        */
        $wp_customize->add_setting('headings_weight', array(
            'default'        => '400',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'transport' => 'postMessage', 
            'sanitize_callback' => 'simpl4_sanitize_weight',
            ));

        $wp_customize->add_control('simpl4_headings_weight', array(
            'label'      => __('Heading weight', 'simpl4'),
            'section'    => 'simpl4_fonts',
            'settings'   => 'headings_weight',
            'description' => __('Bold or normal headings?', 'simpl4'),
            'type'       => 'select',
            'choices'    => array(
                '400' => __('Normal', 'simpl4'),
                '800' => __('Bold', 'simpl4'),
                ),
            ));	
        // -----------------------------------------------------------------------------
        
		/**
        logo
        */
        $wp_customize->add_setting( 'simpl4_logo', array(
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'simpl4_logo_option', array(
        'label'    => __( 'Logo', 'simpl4' ),
        'section'  => 'simpl4_logo',
        'settings' => 'simpl4_logo',
        )));
       	// -----------------------------------------------------------------------------
       
	    /**
        logo (or title) alignment
        */
        $wp_customize->add_setting('logo_alignment', array(
            'default'        => 'center',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'sanitize_callback' => 'simpl4_sanitize_align',
            ));

        $wp_customize->add_control('simpl4_logo_alignment', array(
            'label'      => __('Logo alignment', 'simpl4'),
            'section'    => 'simpl4_logo',
            'settings'   => 'logo_alignment',
            'description' => __( 'Where will the logo be?', 'simpl4' ),
            'type'       => 'radio',
            'choices'    => array(
                'left' => __( 'Left', 'simpl4' ),
                'center' => __( 'Center', 'simpl4' ),
                'right' => __( 'Right', 'simpl4' ),
                ),
            ));	
        // -----------------------------------------------------------------------------
       
	    /**
        footer copyright text
        */
        $wp_customize->add_setting('footer_copyright', array(
            'default'        => '',
            'capability'     => 'edit_theme_options',
            'type'           => 'theme_mod',
            'transport'      => 'refresh',
            'sanitize_callback' => 'simpl4_sanitize_footer',
            ));

        $wp_customize->add_control('simpl4_footer_copyright', array(
            'label'      => __('Footer Copyright', 'simpl4'),
            'section'    => 'title_tagline',
            'settings'   => 'footer_copyright'
        ));
        // -----------------------------------------------------------------------------           
        
		// Stuff that uses live preview JS
        $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
        $wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';
        $wp_customize->get_setting( 'heading_linkcolor' )->transport = 'postMessage';
        $wp_customize->get_setting( 'primary_color' )->transport = 'postMessage';
        $wp_customize->get_setting( 'tagline_color' )->transport = 'postMessage';
        $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
        $wp_customize->get_setting( 'headings_weight' )->transport = 'postMessage';
        $wp_customize->get_setting( 'headings_font' )->transport = 'postMessage';
        $wp_customize->get_setting( 'body_font' )->transport = 'postMessage';
   }

   /**
    * This will output the custom WordPress settings to the live theme's WP head.
    * Used by hook: 'wp_head'
    */
   public static function simpl4_header_output() {
      ?>
      <!--Customizer CSS--> 
      <style type="text/css">
 
            <?php 			
			if (get_theme_mod('simpl4_show_date') == '1'){ ?>
                .s_date {
                    display: none;
                }
            <?php } ?>
            <?php 			
			if (get_theme_mod('simpl4_show_tags') == '1'){ ?>
                .s_tags {
                    display: none;
                }
            <?php } ?>
            <?php 			
			if (get_theme_mod('simpl4_show_cat') == '1'){ ?>
                .s_category {
                    display: none;
                }
            <?php } ?>
            <?php 			
			if (get_theme_mod('simpl4_show_comm') == '1'){ ?>
                .s_comm {
                    display: none;
                }
            <?php } ?>
            <?php 			
			if (get_theme_mod('simpl4_autho') == '1'){ ?>
                .s_auth {
                    display: none;
                }
            <?php } ?>				

<?php
self::simpl4_generate_css('#logo', 'text-align', 'logo_alignment');  
self::simpl4_generate_css('.tlo', 'max-width', 'container_width');
self::simpl4_generate_css('body, input, textarea, .site-description', 'font-family', 'body_font');
self::simpl4_generate_css('h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6', 'font-family', 'headings_font');
self::simpl4_generate_css('h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, .site-description', 'font-weight', 'headings_weight');
self::simpl4_generate_css('input:hover, textarea:hover, input:focus, textarea:focus, .sticky', 'border-color', 'link_textcolor');
self::simpl4_generate_css('h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a', 'color', 'heading_linkcolor');
self::simpl4_generate_css('body, input, textarea', 'color', 'primary_color'); 
self::simpl4_generate_css('input, textarea, #menuline ul.sub-menu, #menuline nav ul, .menu-item-has-children', 'border-color', 'tagline_color');
self::simpl4_generate_css('.postline, footer.postline a, .archive-title, .format-status .postcontent, .format-quote .postcontent .quote, .fa-quote-left, .reply, .reply a, 
.comment-meta a', 'color', 'tagline_color');
self::simpl4_generate_css('a', 'color', 'link_textcolor');
self::simpl4_generate_css('.tlo, input, textarea, #menuline ul.sub-menu', 'background-color', 'sheet_color');
self::simpl4_generate_css('a:active, a:focus, a:hover, footer.postline a:hover', 'color', 'hover_color');
?>
 	
      </style> 
      <!--/Customizer CSS-->
      <?php
   }
   
   /**
   Outputs the javascript needed to automate the live settings preview.
    */
   public static function simpl4_live_preview() {
      wp_enqueue_script( 'theme-customizer', get_template_directory_uri() . '/bit/theme-customizer.js', array(  'jquery', 'customize-preview' ), '', true);
   }

    /**
	Generate a line of CSS for use in header output. If the setting ($mod_name) has no defined value, the CSS will not be output.
     */
   public static function simpl4_generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
	$return = '';
	$mod = esc_attr( get_theme_mod($mod_name) );
      if ( ! empty( $mod ) ) {
         $return = sprintf('%s { %s:%s; }',
            $selector,
            $style,
            $prefix.$mod.$postfix
         );
         if ( $echo ) {
            echo $return;
         }
      }
      return $return;
    }
}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'simpl4_Customize' , 'simpl4_register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'simpl4_Customize' , 'simpl4_header_output' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'simpl4_Customize' , 'simpl4_live_preview' ) );
?>