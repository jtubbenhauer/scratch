<?php

if ( ! function_exists( 'scratch_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function scratch_setup() {
 
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'scratch', get_template_directory() . '/languages' );
 
    /**
     * Add default posts and comments RSS feed links to &lt;head>.
     */
    add_theme_support( 'automatic-feed-links' );
 
    /**
     * Enable support for post thumbnails and featured images.
     */
    add_theme_support( 'post-thumbnails' );
 
    /**
     * Add support for two custom navigation menus.
     */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'scratch' ),
        'secondary' => __('Secondary Menu', 'scratch' )
    ) );
 
}
endif; // scratch_setup
add_action( 'after_setup_theme', 'scratch_setup' );


function add_theme_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


?>