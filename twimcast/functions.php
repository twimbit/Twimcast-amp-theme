<?php


function twimcast_theme_support()
{

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	// Set content-width.
	global $content_width;
	if (!isset($content_width)) {
		$content_width = 580;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// Set post thumbnail size.
	set_post_thumbnail_size(1200, 9999);

	// Add custom image size used in Cover Template.
	add_image_size('twentytwenty-fullscreen', 1980, 9999);

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if (get_theme_mod('retina_logo', false)) {
		$logo_width  = floor($logo_width * 2);
		$logo_height = floor($logo_height * 2);
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

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'twentytwenty' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('twentytwenty');

	// Add support for full and wide align images.
	add_theme_support('align-wide');


	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
}

add_action('after_setup_theme', 'twimcast_theme_support');



/**
 * Register and Enqueue Styles.
 */
function twentytwenty_register_styles()
{

	$theme_version = wp_get_theme()->get('Version');

	wp_enqueue_style('twentytwenty-style', get_stylesheet_uri(), array(), $theme_version);
	wp_style_add_data('twentytwenty-style', 'rtl', 'replace');

	// Add output of Customizer settings as inline style.
	//wp_add_inline_style('twentytwenty-style', twentytwenty_get_customizer_css('front-end'));

}

add_action('wp_enqueue_scripts', 'twentytwenty_register_styles');

/**
 * Register and Enqueue Scripts.
 */
function twentytwenty_register_scripts()
{

	$theme_version = wp_get_theme()->get('Version');
}

add_action('wp_enqueue_scripts', 'twentytwenty_register_scripts');

/**
 * Enqueues scripts for customizer controls & settings.
 *
 * @since 1.0.0
 *
 * @return void
 */
function twentytwenty_customize_controls_enqueue_scripts()
{
	$theme_version = wp_get_theme()->get('Version');

	// Add main customizer js file.

}

add_action('customize_controls_enqueue_scripts', 'twentytwenty_customize_controls_enqueue_scripts');


/* Twimcast custom menus */
function wpb_custom_new_menu()
{
	register_nav_menus(array(
		'sidebar-category-menu' => __('Sidebar category menu'),
		'sidebar-bottom-menu' => __('Sidebar bottom menu')
	));
}
add_action('init', 'wpb_custom_new_menu');

/* Adding acf options page */
function register_acf_options_pages()
{
	if (function_exists('acf_add_options_page')) {

		$home_page_widgets = acf_add_options_page(array(
			'page_title'      => __('Home Page Widgets'),
			'menu_title'      => __('Home Page Widgets'),
			'menu_slug' 	=> 'home-page-widgets',
			'capability'	=> 'edit_posts',
			'show_in_graphql' => true,

		));
	}
}
add_action('acf/init', 'register_acf_options_pages');



/* getting reading time of post given on post id */
function get_reading_time($post_id)
{
	//$reading_time = do_shortcode('[get_reading_time label=”Reading Time:” postfix=”minutes” post_id=' . $post_id . ']');
	$reading_time =	get_post_meta($post_id)['reading_time'][0];
	return $reading_time;
}


/* getting audio length which is attached to a post $post_id integer value */
function getAudioLength($post_id)
{
	require_once(ABSPATH . 'wp-admin/includes/media.php');
	$audio_file_path = get_attached_file(get_fields(get_post($post_id))['audio_upload']['ID']);
	$length = wp_read_audio_metadata($audio_file_path)['length_formatted'];
	return $length;
}

add_action('save_post', 'cal_post_time');


function cal_post_time($post_id)
{
	$fields_array = get_fields(get_post($post_id));
	if ($fields_array['intent_type'] == 'podcast') {
		$podcast_length =  getAudioLength($post_id);
		update_field('length', $podcast_length, $post_id);
	} else if ($fields_array['intent_type'] == 'read') {
		$getReadingTime = get_reading_time($post_id);
		update_field('length', $getReadingTime, $post_id);
	}
}
