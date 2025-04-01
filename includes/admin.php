<?php

/**
 * Replace parent theme admin page with child theme page to use appropriate theme labelling
 */
function ripley_replace_admin_page() {
	remove_action( 'admin_menu', 'bravada_add_page_fn' );
} // ripley_replace_admin_page()
add_action( 'init', 'ripley_replace_admin_page', 11 );

function ripley_add_page_fn() {
	global $bravada_page;
	$bravada_page = add_theme_page( __( 'Ripley Theme', 'ripley' ), __( 'Ripley Theme', 'ripley' ), 'edit_theme_options', 'about-ripley-theme', 'bravada_page_fn' );
	add_action( 'admin_enqueue_scripts', 'bravada_admin_scripts' );
} // ripley_add_page_fn()
add_action( 'admin_menu', 'ripley_add_page_fn' );

/**
 * Add child theme version to admin page
 */
function ripley_admin_version_output( $parent ) {
	$theme = wp_get_theme();
	$name = $theme->get( 'Name' );
	$version = $theme->get( 'Version' );

	// translators: %1$s is the child theme name; %2$s is the child theme version; %3$s is the parent theme name
	return sprintf( __( '<em>%1$s v%2$s</em> &ndash; a child theme of %3$s', 'ripley' ), $theme, $version, $parent );
} // ripley_admin_version_output()
// this filter is applied in ripley_setup()

/**
 * Extend description to reference the use of the child theme
 */
function ripley_custom_description( $description ) {
	// Child theme
	$theme = wp_get_theme();
	$template = esc_html( $theme->get( 'Template' ) );
	$name = esc_html( $theme->get( 'Name' ) );

	// Parent theme
	$template_theme = wp_get_theme( $template );
	$template_desc = $template_theme->get( 'Description');

	// translators: %1$s is the name of the child theme; %2$s is the name of the parent theme
	$output = '<h3>' . sprintf( esc_html__( '%1$s is a child theme of %2$s', 'ripley' ), $name,  ucfirst( $template ) ) . '</h3>';

	return  $output . $description . '<br><br><hr><br><em>' . $template_desc . '</em>';
} // ripley_custom_description()
// this filter is added in ripley_setup()


// FIN
