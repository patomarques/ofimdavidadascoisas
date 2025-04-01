<?php

/**
 * Defaults
 */
function ripley_defaults( $defaults = array() ) {

	$ripley_defaults = array(

		"theme_sitelayout"			=> '1c',
		"theme_sitewidth"  			=> 1140,
		"theme_magazinelayout"		=> 3,

		"theme_menustyle"			=> 1,

		"theme_headerfullscreen"	=> 0, // disabled
		"theme_headerheight"		=> 700,
		"theme_titleaccent"			=> 1,
		"theme_lpsliderimage"		=> esc_url( get_stylesheet_directory_uri() ) . '/resources/images/slider/ripley.jpg',

		"theme_sitebackground" 		=> "#FFFFFF",
		"theme_sitetext" 			=> "#2d3142",
		"theme_titletext"			=> "#2d3142",
		"theme_headingstext"		=> "#2d3142",
		"theme_contentbackground"	=> "#FFFFFF",
		"theme_accent1" 			=> "#227c9d",
		"theme_accent2" 			=> "#fe6d73",

		"theme_menubackground"		=> "#FFFFFF",
		"theme_menutext" 			=> "#444444",
		"theme_submenutext" 		=> "#FFFFFF",
		"theme_submenubackground"	=> "#fe6d73",
		"theme_activeitemtext"		=> "#dddddd",

		"theme_overlaytext"					=> "#FFFFFF",
		"theme_overlaybackground1"			=> "#05c1af",
		"theme_overlaybackgroundposition1"	=> 0,
		"theme_overlaybackground2"			=> "#ffb847",
		"theme_overlaybackgroundposition2"	=> 100,
		"theme_overlayangle"  				=> 280,
		"theme_overlayopacity"  			=> 60,

		"theme_footerbackground"	=> "#000000",
		"theme_footertext"			=> "#969696",
		"theme_lpblocksbg"			=> "#ffffff",
		"theme_lppostsbg"			=> "#fff8f4",

		//"theme_fgeneral" 			=> 'Mulish/gfont',
		"theme_fgeneralgoogle"	=> 'Mulish',
		"theme_fgeneralsize" 		=> '18',
		"theme_fgeneralweight" 		=> '400',

		//"theme_fsitetitle"			=> '',
		"theme_fsitetitlegoogle"	=> 'Outfit',
		"theme_fsitetitlesize" 		=> 1.6,
		"theme_fsitetitleweight"	=> '200',
		"theme_fsitetitlevariant" 	=> 'none',

		//"theme_fmenu" 		=> '',
		"theme_fmenugoogle"		=> 'Outfit',
		"theme_fmenusize" 		=> 2,
		"theme_fmenuweight"		=> '200',
		"theme_fmenuvariant" 	=> 'none',

		//"theme_ftitles" 		=> '',
		"theme_ftitlesgoogle"	=> 'Outfit',
		"theme_ftitlessize" 	=> 2.5,
		"theme_ftitlesweight"	=> '200',

		"theme_meta" 				=> 'inherit',
		//"theme_metatitlesgoogle"	=> '',
		"theme_metatitlessize" 		=> 0.9,
		"theme_metatitlesweight"		=> '300',
		"theme_metatitlesvariant"	=> 'none',

		//"theme_singletitle" 		=> '',
		"theme_singletitlegoogle"	=> 'Outfit',
		"theme_singletitlesize" 	=> 7.0,
		"theme_singletitleweight"	=> '100',
		"theme_singletitlevariant"	=> 'none',
		"theme_singletitlelineheight" => 1.2,

		"theme_singlemeta" 			=> 'inherit',
		//"theme_singlemetagoogle"	=> '',
		"theme_singlemetasize" 		=> 0.9,
		"theme_singlemetaweight"	=> '300',
		"theme_singlemetavariant"	=> '',

		//"theme_fheadings" 			=> 'inherit',
		"theme_fheadingsgoogle"	=> 'Outfit',
		"theme_fheadingssize" 		=> 110,
		"theme_fheadingsweight"		=> '200',
		"theme_fheadingsvariant"	=> 'none',
		"theme_fheadingslineheight" => 1.2,
		"theme_fheadingsspace" => 0.5,

		"theme_fwtitle" 			=> 'inherit',
		//"theme_fwtitlegoogle"		=> '',
		"theme_fwtitlesize" 		=> 1.1,
		"theme_fwtitleweight"		=> '700',
		"theme_fwtitlevariant"		=> 'none',
		"theme_fwtitlelineheight" 	=> 2,

		"theme_fwcontent" 			=> 'inherit',
		//"theme_fwcontentgoogle"	=> '',
		"theme_fwcontentsize" 		=> 1,
		"theme_fwcontentweight"		=> '400',
		"theme_fwcontentlineheight" => 1.8,

		"theme_fheight"		=> 350,
		"theme_meta_blog_author" => 0,

		"theme_excerptlength"	=> 20,
		"theme_excerptcont"		=> 'Read more'

	); // ripley_defaults array

	$result = array_merge( $defaults, $ripley_defaults );

	return $result;

} // ripley_defaults()
add_filter( 'bravada_option_defaults_array', 'ripley_defaults' );

// needed? for the .org preview
function ripley_filter_defaults(){
	add_filter( 'bravada_option_defaults_array', 'ripley_defaults' );
} // ripley_filter_defaults()
add_action( 'customize_register', 'ripley_filter_defaults' );


/**
 * Handle theme labels in customize panels
 */
function ripley_about_theme_name( $initial ) {
	return __( 'About Ripley', 'ripley' );
} // ripley_about_theme_name()
add_filter( 'cryout_about_theme_name', 'ripley_about_theme_name' );

function ripley_about_theme_plus_desc( $initial ) {
	$theme = wp_get_theme();
	// translators: %1$s is the name of the child theme, %2$s is the name of the parent theme
	return '<h3>' . sprintf( esc_html__( '%1$s is a child theme of %2$s', 'ripley' ), esc_html( $theme->get( 'Name' ) ), ucwords( esc_html( $theme->get( 'Template' ) ) ) ) . '</h3>' . $initial;
} // ripley_about_theme_plus_desc()
add_filter( 'cryout_about_theme_plus_desc', 'ripley_about_theme_plus_desc' );

function ripley_about_theme_slug_swap( $initial ){
	return str_replace( array( 'bravada', 'Bravada' ), array( 'ripley', 'Ripley' ), $initial );
} // ripley_about_theme_slug_swap()
add_filter( 'cryout_about_theme_review_link', 'ripley_about_theme_slug_swap' );
add_filter( 'cryout_about_theme_manage_link', 'ripley_about_theme_slug_swap' );

// FIN
