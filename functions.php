<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

if ( ! function_exists( 'ageland_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ageland_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _s, use a find and replace
		 * to change 'ageland' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ageland', get_template_directory() . '/languages' );

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
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo');
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'ageland' ),
		) );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style'
		) );
        // Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ageland_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'assets/css/ageland-gutenberg.css' );
    }
endif;
add_action( 'after_setup_theme', 'ageland_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ageland_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ageland_content_width', 640 );
}
add_action( 'after_setup_theme', 'ageland_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ageland_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Right', 'ageland' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ageland' ),
		'before_widget' => '<div id="%1$s" class="widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><div class="line"></div>',
	) );
}
add_action( 'widgets_init', 'ageland_widgets_init' );
/**
 * Register Google fonts.
 *
 * @return string Google fonts URL for the theme.
 */
function ageland_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = '';

    /* translators: If there are characters in your language that are not supported by this font, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== esc_html_x( 'on', 'Work Sans font: on or off', 'ageland' ) ) {
        $fonts[] = 'Work Sans:400,500,600,700,900';
    }

    /* translators: If there are characters in your language that are not supported by this font, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== esc_html_x( 'on', 'Hind font: on or off', 'ageland' ) ) {
        $fonts[] = 'Hind:300,400,500,600,700';
    }

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), 'https://fonts.googleapis.com/css' );
    }

    return $fonts_url;
}
/**
 * Enqueue scripts and styles.
 */
function ageland_scripts() {

	wp_enqueue_style('ageland-fonts',  ageland_fonts_url());
	wp_enqueue_style('ageland-all', get_template_directory_uri() . '/assets/css/all.css');
	wp_enqueue_style('ageland-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('ageland-animation-spin', get_template_directory_uri() . '/assets/css/animation-spin.css');
    wp_enqueue_style('ageland-normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('ageland-ageland', get_template_directory_uri() . '/assets/css/ageland.css');
    wp_enqueue_style('ageland-default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('ageland-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' ); 
	}
	wp_enqueue_script('ageland-bootstrap',get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), ageland_theme_version(), true);
	wp_enqueue_script('ageland-proper',get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), ageland_theme_version(), true);
	wp_enqueue_script('ageland-modernizr',get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), ageland_theme_version(), true);
	wp_enqueue_script('ageland-main',get_template_directory_uri() . '/assets/js/main.js', array('jquery'), ageland_theme_version(), true);
	wp_enqueue_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'ageland_scripts');

function ageland_admin_css() {
    wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/assets/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'ageland_admin_css' );

function ageland_theme_version(){
    $agelandtheme = wp_get_theme();
    $ageland_version = esc_html($agelandtheme->get( 'Version' ));
    return $ageland_version;
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Functions which loaded from plugin.
 */
require get_template_directory() . '/inc/plug-dependent.php';

require get_template_directory() . '/helper/customiser-extra.php';

/**
 * Load plugin recommendation.
 */
 
require_once get_template_directory() . '/inc/plugin-recommendations.php';
