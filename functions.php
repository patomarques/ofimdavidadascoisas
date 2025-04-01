<?php

/****************************
 *
 * Ripley v1.0.2 - A Bravada Child Theme
 * (c) 2024 Cryout Creations
 * www.cryoutcreations.eu
 *
 *****************************/

/**
 * Load additional theme files
 */
require_once(get_stylesheet_directory() . '/includes/admin.php');
require_once(get_stylesheet_directory() . '/includes/options.php');
require_once(get_stylesheet_directory() . '/includes/notices.php');
require_once(get_stylesheet_directory() . "/includes/custom-styles.php");

/**
 * Enqueue parent styling
 */
function ripley_child_styling()
{
	wp_enqueue_style('bravada-main', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('ripley', get_stylesheet_directory_uri() . '/style.css', array('bravada-main'), _CRYOUT_THEME_VERSION);
	wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/node_modules/slick-carousel/slick/slick.css');
	wp_enqueue_style('slick-theme-css', get_stylesheet_directory_uri() . '/node_modules/slick-carousel/slick/slick-theme.css');
	wp_enqueue_style('ripley-custom-css', get_stylesheet_directory_uri() . '/assets/scss/wp_laroye.css');

	wp_enqueue_script('jquery-js', get_stylesheet_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), '1.0.0', true);
	wp_enqueue_script('slick-js', get_stylesheet_directory_uri() . '/node_modules/slick-carousel/slick/slick.min.js', array(), '1.0.0', true);
	wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/assets/js/wp-laroye.js', array(), '1.0.0', true);
	wp_enqueue_script('bootstrap-script', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'ripley_child_styling' );
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ripley_setup()
{

	// Add support for flexible headers
	add_theme_support('custom-header', array(
		'default-image'	=> get_stylesheet_directory_uri() . '/resources/images/headers/ripley.jpg',
	));

	// Default custom headers packaged with the theme.
	register_default_headers(array(
		'ripley' => array(
			'url' => '%2$s/resources/images/headers/ripley.jpg',
			'thumbnail_url' => '%2$s/resources/images/headers/ripley.jpg',
			'description' => __('Ripley', 'ripley')
		),
	));

	// Filters
	add_filter('bravada_custom_styles', 'ripley_custom_styles');
	add_filter('cryout_theme_description', 'ripley_custom_description');
	add_filter('cryout_admin_version', 'ripley_admin_version_output');

	// Initialize first time notice
	new Cryout_Notice(array(
		'slug' => 'ripley',
		'strings' => array(
			// translators: %1 is theme name, %2 is next string
			1 => esc_html__('It appears that you might have already configured %1$s. For best results it is recommended to %2$s upon child theme activation.', 'ripley'),
			2 => esc_html__('reset the theme settings', 'ripley'),
			3 => esc_html__('If you have already reset the options it is safe to dismiss this message.', 'ripley'),
			4 => esc_html__('Do not display again', 'ripley'),
		),
	));
} // ripley_setup()
add_action('after_setup_theme', 'ripley_setup');

function create_post_types_custom()
{
	register_post_type(
		'equipe',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Equipe'),
				'singular_name' => __('Membro')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'equipe'),
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),

		)
	);

	register_post_type(
		'pessoas',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Pessoas'),
				'singular_name' => __('Pessoa')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'pessoas'),
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),

		)
	);

	register_post_type(
		'pessoas',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Pessoas'),
				'singular_name' => __('Pessoa')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'pessoas'),
			'menu_icon' => 'dashicons-universal-access',
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),

		)
	);

	register_post_type(
		'lugares',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Lugares'),
				'singular_name' => __('Lugar')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'lugares'),
			'menu_icon' => 'dashicons-location-alt',
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),

		)
	);

	register_post_type(
		'objetos',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Objetos'),
				'singular_name' => __('Objeto')
			),
			'menu_icon' => 'dashicons-book',
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'objetos'),
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),

		)
	);

	register_post_type(
		'videos',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Videos'),
				'singular_name' => __('Video')
			),
			'menu_icon' => 'dashicons-video-alt3',
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'videos'),
			'show_in_rest' => true,
			'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),

		)
	);
}
add_action('init', 'create_post_types_custom');

function template_part($atts, $content = null)
{
	$tp_atts = shortcode_atts(array(
		'path' =>  null,
	), $atts);
	ob_start();
	get_template_part($tp_atts['path']);
	$ret = ob_get_contents();
	ob_end_clean();
	return $ret;
}
add_shortcode('template_part', 'template_part');
