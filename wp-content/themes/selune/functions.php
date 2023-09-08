<?php
/**
 * selune functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package selune
 */

if ( ! defined( 'SELUNE_DIR_PATH' ) ) {
    define( 'SELUNE_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'SELUNE_DIR_URI' ) ) {
    define( 'SELUNE_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'SELUNE_BUILD_URI' ) ) {
    define( 'SELUNE_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'SELUNE_BUILD_PATH' ) ) {
    define( 'SELUNE_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'SELUNE_BUILD_JS_URI' ) ) {
    define( 'SELUNE_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'SELUNE_BUILD_JS_DIR_PATH' ) ) {
    define( 'SELUNE_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'SELUNE_BUILD_IMG_URI' ) ) {
    define( 'SELUNE_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'SELUNE_BUILD_CSS_URI' ) ) {
    define( 'SELUNE_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'SELUNE_BUILD_CSS_DIR_PATH' ) ) {
    define( 'SELUNE_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'SELUNE_BUILD_LIB_URI' ) ) {
    define( 'SELUNE_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

if( !class_exists('acf') ) {

    add_action( 'admin_notices', function() {
        echo '<div class="error"><p>Advanced Custom Fields plugin is not activated. Make sure you activate plugin at <a href="' . esc_url( admin_url( 'plugins.php' ) ) . '">' . esc_url( admin_url( 'plugins.php') ) . '</a></p></div>';
    } );
}

/**
 * Include after_theme setup functions
 * This is main file for including functions and all other theme related files
 */
include ( get_template_directory() . '/lib/theme/theme-setup.php');

/**
 * Include selune register functions
 * @link ./lib/register/index.php
 */
include( get_template_directory() . '/lib/register/index.php' );

/**
 * Include acf setup functions
 * Note: this should be only setup for backend, any functions for template usage
 * should be created inside selune/inc/_partials
 * @link ./lib/acf/index.php
 */
include( get_template_directory() . '/lib/acf/index.php' );