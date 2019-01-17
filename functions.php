<?php
/**
 * Bad Funk Stripe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bad_Funk_Stripe
 */

if ( ! function_exists( 'bad_funk_stripe_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bad_funk_stripe_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Bad Funk Stripe, use a find and replace
		 * to change 'bad-funk-stripe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bad-funk-stripe', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'bad-funk-stripe' ),
		) );

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
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bad_funk_stripe_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'bad_funk_stripe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bad_funk_stripe_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bad_funk_stripe_content_width', 640 );
}
add_action( 'after_setup_theme', 'bad_funk_stripe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bad_funk_stripe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bad-funk-stripe' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bad-funk-stripe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bad_funk_stripe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bad_funk_stripe_scripts() {
	wp_enqueue_style( 'bad-funk-stripe-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bad-funk-stripe-custom', get_template_directory_uri() . '/css/main.css',false, null,'all');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bad-funk-stripe-navigation', get_template_directory_uri() . '/js/main-min.js', array(), null, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bad_funk_stripe_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * theme options for acf 
*/
 if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contacts',
		'menu_title'	=> 'Contacts',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// add svg compatability 
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
	}
	add_action('upload_mimes', 'add_file_types_to_uploads');

// custom post types
include 'posts/news.php';
include 'posts/events.php';


//populate teams dropdown on fixtures page from teams list in theme options
function acf_load_team_field_choices( $field ) {
    
    // reset choices
    $field['choices'] = array();


    // if has rows
    if( have_rows('list_of_teams', 'option') ) {
        
        // while has rows
        while( have_rows('list_of_teams', 'option') ) {
            
            // instantiate row
            the_row();
            
            
            // vars
			$raw_value = get_sub_field('label');
			$value = strtolower(trim(preg_replace('/\s+/', '', $raw_value)));
            $label = get_sub_field('label');

            
            // append to choices
            $field['choices'][ $value ] = $label;
            
		}
	
        
    }


    // return the field
    return $field;
    
}

add_filter('acf/load_field/name=team_playing', 'acf_load_team_field_choices');
