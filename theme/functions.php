<?php
/**
 * gorilabs_tw functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gorilabs_tw
 */

if ( ! defined( 'GORILABSTW_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'GORILABSTW_VERSION', '0.1.0' );
}

if ( ! defined( 'GORILABSTW_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `gorilabstw_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'GORILABSTW_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'gorilabstw_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gorilabstw_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gorilabs_tw, use a find and replace
		 * to change 'gorilabstw' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gorilabstw', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'gorilabstw' ),
				'menu-2' => __( 'Footer Menu', 'gorilabstw' ),
			)
		);

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
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'gorilabstw_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gorilabstw_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'gorilabstw' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'gorilabstw' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gorilabstw_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gorilabstw_scripts() {
	wp_enqueue_style( 'gorilabstw-style', get_stylesheet_uri(), array(), GORILABSTW_VERSION );
	wp_enqueue_script( 'gorilabstw-script', get_template_directory_uri() . '/js/script.min.js', array(), GORILABSTW_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gorilabstw_scripts' );

/**
 * Enqueue the block editor script.
 */
function gorilabstw_enqueue_block_editor_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'gorilabstw-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			GORILABSTW_VERSION,
			true
		);
		wp_add_inline_script( 'gorilabstw-editor', "tailwindTypographyClasses = '" . esc_attr( GORILABSTW_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'gorilabstw_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function gorilabstw_tinymce_add_class( $settings ) {
	$settings['body_class'] = GORILABSTW_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'gorilabstw_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';




/**
 * Enable SVG upload support
 */
function gorilabstw_enable_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'gorilabstw_enable_svg_upload');

/**
 * Ensure proper SVG preview in Media Library
 */
function gorilabstw_fix_svg_media_display($response, $attachment, $meta) {
    if ($response['mime'] === 'image/svg+xml') {
        $response['sizes'] = array(
            'full' => array(
                'url' => $response['url'],
                'width' => $response['width'],
                'height' => $response['height'],
                'orientation' => $response['orientation']
            )
        );
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'gorilabstw_fix_svg_media_display', 10, 3);



/**
 * Disable Gutenberg editor and restore classic editor
 */
function gorilabstw_disable_gutenberg() {
    // Disable Gutenberg editor for posts and pages
    add_filter('use_block_editor_for_post', '__return_false', 10);
    add_filter('use_block_editor_for_post_type', '__return_false', 10);
    
    // Disable Gutenberg for widgets
    add_filter('use_widgets_block_editor', '__return_false');
    
    // Remove Gutenberg block library CSS from loading on the frontend
    add_action('wp_enqueue_scripts', function() {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS if using WooCommerce
    }, 100);
}
add_action('init', 'gorilabstw_disable_gutenberg');


// En functions.php o donde enqueues tus scripts
function enqueue_splide_scripts() {
    wp_enqueue_style('splide-css', get_stylesheet_directory_uri() . '/inc/splide/dist/css/splide.min.css');
    wp_enqueue_script('splide-js', get_stylesheet_directory_uri() . '/inc/splide/dist/js/splide.min.js', array(), null, true);
    wp_enqueue_script('splide-grid-js', get_stylesheet_directory_uri() . '/inc/splide/dist/js/splide-extension-grid.min.js', array('splide-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_splide_scripts');