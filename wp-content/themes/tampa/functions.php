<?php
define( 'PLS_WPORG_THEME', true );

/* Load the Placester Blueprint Theme Framework. */
require_once( get_template_directory() . '/blueprint/blueprint.php' );
new Placester_Blueprint('2.5');

/**
 * 	Filter the default prefix used in 'pls_do_atomic' and 'pls_apply_atomic'.
 * 	All add_filters that hook into events set by pls_do_atomic will need to catch
 * 	the prefix_event_name for example:
 *
 *	blueprint will mean that you need to hook against blueprint_close_header, or blueprint_open_header
 */

// Introduce yourself to the class...
add_filter( 'pls_prefix', 'tampa_prefix' );
function tampa_prefix() {
        return 'tampa';
}


// All our custom functions included for sanity. 

	// custom caption implementation
    include_once('custom/home-slideshow.php');

    // custom caption implementation
	include_once('custom/options.php');

	// custom featured listings list
	include_once('custom/home-listing-list.php');

    // custom sidebar search widget
    include_once('custom/sidebar-quick-search-widget.php');

    // custom sidebar recent posts widget
    include_once('custom/sidebar-recent-posts-widget.php');

    // custom sidebar agent widget
    include_once('custom/sidebar-agent-widget.php');

    // custom sidebar search form on listings page
    include_once('custom/listings-search-form.php');

    // custom sidebar ajax listings list on listings search
    include_once('custom/listings-search-list.php');

    // custom property details page.
    include_once('custom/property-details.php');

    // custom property details page featured listings.
    include_once('custom/property-details-featured-listings.php');

	// custom property details page featured listings.
	include_once('custom/sidebar-listings-widget.php');

/**
 * Any modifications to its behavior (add/remove support for features, define 
 * constants etc.) must be hooked in 'after_setup_theme' with a priority of 10 if the
 * framework is a parent theme or a priority of 11 if the theme is a child theme. This 
 * allows the class to add or remove theme-supported features at the appropriate time, 
 * which is on the 'after_setup_theme' hook with a priority of 12.
 * 
 */
add_action( 'after_setup_theme', 'tampa_setup', 10 );
function tampa_setup() {
    add_theme_support( 'pls-js', array( 'chosen' => array( 'script' => true, 'style' => true ), 'jquery-ui' => array( 'script' => true, 'style' => true ) ) );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'pls-routing-util-templates' );

    remove_theme_support( 'pls-default-css' );
	remove_theme_support( 'pls-typography-options' );
	remove_theme_support( 'pls-navigation-options' );

    remove_theme_support( 'pls-meta-data');
    remove_theme_support( 'pls-meta-tags');
    remove_theme_support( 'pls-micro-data');
}

// Remove Extra Sidebar
add_action( 'widgets_init', 'tampa_remove_widgets', 11 );
function tampa_remove_widgets() {
	unregister_sidebar( 'footer-widgets' );
	unregister_sidebar( 'listings-search' );
}

add_action( 'wp_enqueue_scripts', 'tampa_scripts_styles' );
function tampa_scripts_styles() {
    $template_uri = get_template_directory_uri();

    if (!is_admin()) {

        wp_enqueue_style('tampa', $template_uri . '/css/style.css');
        wp_enqueue_script('tampa', $template_uri . '/js/script.js', array('jquery'), false, true);

        if (is_singular( array('post', 'page'))) {
            wp_enqueue_script('comment-reply');
        }

    }
}

add_action( 'wp_print_scripts', 'tampa_custom_css', 99);
function tampa_custom_css() {
    $custom_css = pls_get_option('pls-custom-css');
    if ( (pls_get_option('pls-css-options')) && $custom_css ) {
        printf( '<style type="text/css">%s</style>', $custom_css );
    }
}

if (!isset($content_width)) {
	$content_width = 625;
}
