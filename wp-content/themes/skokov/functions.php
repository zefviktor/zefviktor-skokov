<?php
/**
 * skokov functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package skokov
 */

if ( ! function_exists( 'skokov_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function skokov_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on skokov, use a find and replace
         * to change 'skokov' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'skokov', get_template_directory() . '/languages' );

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
            'menu-1' => esc_html__( 'Primary', 'skokov' ),
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
        add_theme_support( 'custom-background', apply_filters( 'skokov_custom_background_args', array(
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
add_action( 'after_setup_theme', 'skokov_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function skokov_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'skokov_content_width', 640 );
}
add_action( 'after_setup_theme', 'skokov_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function skokov_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'skokov' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'skokov' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'skokov_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


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


// *** Add function ***

// *** Add show admin bar ***
add_filter('show_admin_bar', '__return_false');


// *** Add style & script ***

define('Q_THEME_ROOT', get_template_directory_uri());
define('Q_CSS_DIR', Q_THEME_ROOT . '/css');
define('Q_JS_DIR', Q_THEME_ROOT . '/js');
define('Q_IMG_DIR', Q_THEME_ROOT . '/img');

add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array('reset'));
    wp_enqueue_style( 'awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', array('reset'));
    wp_enqueue_style( 'skokov-style', get_stylesheet_uri(), array('reset'));
    wp_enqueue_style( 'reset', Q_CSS_DIR . '/reset.css');
    wp_enqueue_style( 'index', Q_CSS_DIR . '/index.css', array('reset'));

    wp_enqueue_script( 'skokov-customizer', Q_JS_DIR . '/customizer.js', array('jquery'));
    wp_enqueue_script( 'skokov-navigation', Q_JS_DIR . '/navigation.js', array('jquery'));
    wp_enqueue_script( 'skokov-skip-link-focus-fix', Q_JS_DIR . '/skip-link-focus-fix.js', array('jquery'));
    wp_enqueue_script( 'skokov-functions', Q_JS_DIR . '/functions.js', array('jquery'));


    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', Q_JS_DIR . '/jquery-3.1.1.min.js', array(), NULL, 'in_footer');
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'), NULL, 'in_footer');
    wp_enqueue_script( 'masonry-js', 'https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js', array('jquery'), NULL, 'in_footer');
    wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js',array('jquery'), NULL, 'in_footer');


    //        wp_enqueue_style( 'theme', get_stylesheet_uri() );
    //        wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
});




// *** Add menus ***

add_theme_support('menus');

// *** Add create_post_type ***

function create_post_type() {


    register_post_type( 'acme_product',
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );


}


add_action( 'init', function(){
    add_theme_support('post-thumbnails');

    //posts type - "we-are-in-social"

    register_post_type('we-are-in-social', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'we-are-in-social',
            'singular_name'      => 'we-are-in-social',
            'add_new'            => 'Add new We are in social',
            'add_new_item'       => 'Add new We are in social',
            'edit_item'          => 'Edit item We are in social',
            'new_item'           => 'New We are in social',
            'view_item'          => 'View We are in social',
            'search_items'       => 'Search We are in social',
            'not_found'          => 'Not found We are in social',
            'not_found_in_trash' => 'Not found in trash We are in social',
            'menu_name'          => 'We are in social',
        ),
        'public'              => false,
        'show_ui'             => true, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'menu_icon'           => 'dashicons-cloud',
        'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ) );


    //posts type - "Item Services"

    register_post_type('services', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'services',
            'singular_name'      => 'services',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new services',
            'edit_item'          => 'Edit item services',
            'new_item'           => 'New services',
            'view_item'          => 'View services',
            'search_items'       => 'Search services',
            'not_found'          => 'Not found services',
            'not_found_in_trash' => 'Not found in trash services',
            'menu_name'          => 'Item Services',
        ),
        'public'              => false,
        'show_ui'             => true, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'menu_icon'           => 'dashicons-thumbs-up',
        'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ) );


    //posts type - "Item Persons"

    register_post_type('persons', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'persons',
            'singular_name'      => 'persons',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new persons',
            'edit_item'          => 'Edit item persons',
            'new_item'           => 'New persons',
            'view_item'          => 'View persons',
            'search_items'       => 'Search persons',
            'not_found'          => 'Not found persons',
            'not_found_in_trash' => 'Not found in trash persons',
            'menu_name'          => 'Persons',
        ),
        'public'              => false,
        'show_ui'             => true, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'menu_icon'           => 'dashicons-thumbs-up',
        'supports'            => array('title', 'thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ) );

});






//posts type - "we-are-in-social"
    function getWeAreInSocial(){
        $args = array(
            'numberposts' => 8,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'we-are-in-social',
        );

        $weAreInSocials = [];

        foreach(get_posts($args) as $post){
            $weAreInSocial = get_fields($post->ID);
            $weAreInSocial['name'] = $post->post_title;
            $weAreInSocial['category'] = $post->post_category;
            $weAreInSocial['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $weAreInSocials[] = $weAreInSocial;
        }
        return $weAreInSocials;
    }


//posts type - "services"
    function getServices(){
        $args = array(
            'numberposts' => 8,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'services',
        );

        $servicesS = [];

        foreach(get_posts($args) as $post){
            $services = get_fields($post->ID);
            $services['name'] = $post->post_title;
            $services['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $servicesS[] = $services;
        }
        return $servicesS;
    }

//posts type - "persons"
    function getPersons(){
        $args = array(
            'numberposts' => 12,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'persons',
        );

        $personsS = [];

        foreach(get_posts($args) as $post){
            $persons = get_fields($post->ID);
            $persons['name'] = $post->post_title;
            $persons['img'] =get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
            $personsS[] = $persons;
        }
        return $personsS;
    }

