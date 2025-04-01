<?php
/**
 * Master generated style function
 *
 * @package Ripley
 */

/**
 * Add body classes to identify the child theme
 */
function ripley_body_classes( $classes ) {
	$classes[] = strtolower( wp_get_theme() ) . '-child';
	return $classes;
}
add_filter( 'body_class', 'ripley_body_classes', 15 );

/**
 * Dynamic styles for the frontend
 */
function ripley_custom_styling() {
    $options = cryout_get_option();
    extract($options);

    ob_start(); ?>

    /* Ripley custom style */

	a.staticslider-button:first-child:hover, .seriousslider-theme .seriousslider-caption-buttons a.seriousslider-button:first-child:hover {
		background-color: <?php echo esc_html( $theme_accent2 ) ?>;
	}

	a.staticslider-button:hover, .seriousslider-theme .seriousslider-caption-buttons a.seriousslider-button:hover {
		border-color: <?php echo esc_html( $theme_accent2 ) ?>;
	}

	a.lp-box-readmore > span::before,
	a.lp-box-readmore > span::after,
	a.continue-reading-link::before,
	a.continue-reading-link::after {
	    background-color: <?php echo esc_html( $theme_accent1 ) ?>;
	}

	a.lp-box-readmore:hover,
	a.continue-reading-link:hover {
		color: <?php echo esc_html( $theme_accent1 ) ?>;
	}

	.animated-title span.cry-single.animated-letter,
	.animated-title span.cry-double.animated-letter {
		color: <?php echo esc_html(  $theme_overlaytext ) ?>;
	}

	.commentlist .comment-area, .commentlist .pingback {
		border-color: <?php echo esc_html( cryout_hexdiff( $theme_contentbackground, 22) ) ?>;
	}

	.single .author-info {
		background-color: <?php echo esc_html( cryout_hexdiff( $theme_contentbackground, 12) ) ?>;
	}

	#site-title span a::before {
		width: calc(100% + <?php echo floatval($theme_titleaccent) ?>em);
	}

 	.ripple-path {
		fill: <?php echo esc_html( $theme_contentbackground ) ?>;
	}

	.lp-slider .ripple-path {
		fill: <?php echo esc_html( $theme_lpbannerbg ) ?>;
	}

	.meta-arrow > i::before {
		color: <?php echo esc_html(  $theme_overlaytext ) ?>;
	}

	.socials a::before, .socials a:hover::before,
	.socials a::after, .socials a:hover::after {
		color: <?php echo esc_html(  $theme_overlaytext ) ?>;
	}

	#content-masonry article.hentry,
	.pagination span,
	.pagination a {
		border-color: <?php echo esc_html( cryout_hexdiff( $theme_contentbackground, 20) ) ?>;
	}

	#cryout_ajax_more_trigger:hover,
	.lp-port-readmore:hover {
		color: <?php echo esc_html( $theme_accent1 ) ?>;
	}

	#access ul.sub-menu li a:hover,
	#access ul.children li a:hover {
		color: <?php echo esc_html( $theme_submenutext ) ?>;
	}

	#mobile-menu::before {
		background-color: <?php echo esc_html( $theme_submenubackground ) ?>;
	}

	nav#mobile-menu.burgermenu-active {
		background-color: <?php echo esc_html( $theme_contentbackground ) ?>;
	}

	#mobile-menu .menu-main-search .searchform {
		color: <?php echo esc_html( $theme_submenubackground ) ?>;
		background-color: <?php echo esc_html( $theme_contentbackground ) ?>;
	}

	.lp-boxes .lp-boxes-inside::before {
		background-color: <?php echo esc_html( $theme_accent2) ?>;
	}

	.lp-boxes ~ .lp-boxes .lp-boxes-inside::before {
		background-color: <?php echo esc_html( $theme_accent1 ) ?>;
	}

	.lp-boxes.lp-boxes-static .lp-box {
		background-color:  rgba(<?php echo  esc_html( cryout_hex2rgb( $theme_contentbackground ) ) ?>,0.35);
	}

	.lp-boxes-static .box-overlay {
		background-color: <?php echo esc_html( $theme_contentbackground ) ?>;
	}

	.lp-block i[class^="blicon"]::after {
		background-color: <?php echo esc_html( $theme_accent2 ) ?>;
	}

	.lp-block i[class^="blicon"] + i[class^="blicon"]::after {
		background-color: <?php echo esc_html( $theme_accent1 ) ?>;
	}

	#lp-blocks1 .lp-block i[class^="blicon"] + i[class^="blicon"]::before {
		color: <?php echo esc_html( $theme_accent1 ) ?>;
	}

	.comment .reply a {
		background-color: <?php echo esc_html( $theme_accent2 ) ?>;
	}

	.comment .reply a:hover {
		background-color: <?php echo esc_html( $theme_accent1 ) ?>;
	}

    /* end Ripley custom style */
    <?php
    return preg_replace( '/((background-)?color:\s*?)[;}]/i', '', ob_get_clean() );

} // ripley_custom_styling()


/**
 * Load custom styles
 */
function ripley_custom_styles( $style = '' ) {

	return $style . ripley_custom_styling();

} // ripley_custom_styles()
// this filer is applied in ripley_setup()

/**
 * Add extra HTML to header image for ripple effect
 */
function ripley_effect() {?>
	<div class="ripple">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28"  preserveAspectRatio="none" shape-rendering="auto">
			<path class="ripple-path" d="M-112 44c30 0 58-4 88-4s 58 4 88 4 58-4 88-4 58 4 88 4 v44h-352z" fill=""></path>
		</svg>
	</div>
<?php }
add_action( 'cryout_headerimage_hook', 'ripley_effect' );
add_action( 'cryout_preslider_hook', 'ripley_effect' ); // landing page only, slider cases 1, 2 & 4

/* FIN */