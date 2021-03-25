<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rtds
 * @since rtds 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rtds_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// Set post thumbnail size.
	set_post_thumbnail_size(1200, 9999);

	// Add custom image size used in Cover Template.
	add_image_size('rtds-fullscreen', 1980, 9999);

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if (get_theme_mod('retina_logo', false)) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	load_theme_textdomain('rtds');

	// Add support for full and wide align images.
	add_theme_support('align-wide');

	// Add support for responsive embeds.
	add_theme_support('responsive-embeds');

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
}

add_action( 'after_setup_theme', 'rtds_theme_support' );

/**
 * Register and Enqueue Styles.
 */
function rtds_register_styles() {
	$theme_version = wp_get_theme()->get('Version');
	wp_enqueue_style('rtds-bootstrap', get_template_directory_uri() . '/assets/dist/css/bootstrap.css', array(), $theme_version);
	wp_enqueue_style('rtds-style', get_stylesheet_uri(), array(), $theme_version);
}

add_action('wp_enqueue_scripts', 'rtds_register_styles');

/**
 * Register and Enqueue Scripts.
 */
function rtds_register_scripts() {

	$theme_version = wp_get_theme()->get('Version');

	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), $theme_version, true);

	wp_enqueue_script('rtds-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), $theme_version, true);

	wp_script_add_data('rtds-script', 'async', 'async');
}

add_action('wp_enqueue_scripts', 'rtds_register_scripts');


function rtds_menus() {

	$locations = array(
		'primary'  => __('Desktop Menu', 'rtds'),
		'mobile'   => __('Mobile Menu', 'rtds'),
		'footer'   => __('Footer Menu', 'rtds'),
		'Industries'   => __('Industries Menu', 'rtds'),
		'Integrations'   => __('Integrations Menu', 'rtds'),
		'Company'   => __('Company Menu', 'rtds'),
		'Resources'   => __('Resources Menu', 'rtds'),
		'Legal'   => __('Legal Menu', 'rtds'),
		'right'   => __('Right Menu', 'rtds')
	);

	register_nav_menus($locations);
}

add_action('init', 'rtds_menus');

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rtds_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(

		array_merge(

			$shared_args,

			array(
				'name'        => __( 'Footer #1', 'rtds' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'rtds' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(

		array_merge(

			$shared_args,

			array(
				'name'        => __( 'Footer #2', 'rtds' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'rtds' ),
			)
		)
	);

}

add_action('widgets_init', 'rtds_sidebar_registration');


function rtds_tool_post_type() {

	register_post_type('tool',

		array(
			'labels' => array(
				'name' => __('tools', 'rtds'),
				'singular_name' => __('tool', 'rtds'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'author', 'thumbnail', 'page-attributes')
		)
	);
}

add_action('init', 'rtds_tool_post_type');

function rtds_feature_post_type() {

	register_post_type('feature',

		array(
			'labels' => array(
				'name' => __('features', 'rtds'),
				'singular_name' => __('feature', 'rtds'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'author', 'thumbnail', 'page-attributes')
		)
	);
}

add_action('init', 'rtds_feature_post_type');


function rtds_company_post_type() {

	register_post_type('company',

		array(
			'labels' => array(
				'name' => __('companys', 'rtds'),
				'singular_name' => __('company', 'rtds'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'author', 'thumbnail', 'page-attributes')
		)
	);
}

add_action('init', 'rtds_company_post_type');