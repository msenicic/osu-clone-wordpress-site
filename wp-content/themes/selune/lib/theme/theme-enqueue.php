<?php
/**
 * Enqueue newer jquery on pages (not admin panel and in DEBUG mode)
 */

if ( !is_admin() && WP_DEBUG === true ) add_action( 'wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');
    wp_register_script('jquery', SELUNE_BUILD_LIB_URI . '/js/jquery.js', false, null);
    wp_enqueue_script('jquery');

}, 11 );

/**
 * Enqueue scripts and styles.
 *
 * All scripts should be pulled inside src folder by running command gulp scripts:dep
 *
 * Use globalSite['home'] . '/bower_components...' to get bower components
 * Use themeRoot() . '/...' to get local sources
 */

add_action( 'wp_enqueue_scripts', function () {
    global $wp_query;
    wp_enqueue_style( 'selune-style', get_stylesheet_uri() );

    $asset_config_file = sprintf( '%s/assets.php', SELUNE_BUILD_PATH );
    $asset_config_version = '';

    if (file_exists($asset_config_file))
    {
        $asset_config = require_once $asset_config_file;

        $asset_config_version = $asset_config['js/main.js']['version'];
    }

    $style_url = SELUNE_BUILD_CSS_URI . '/main.css';
    $script_url = SELUNE_BUILD_JS_URI . '/main.js';

    // Theme styles
    wp_enqueue_style('selune-main-style', $style_url, [], $asset_config_version);
    // Theme JS
    wp_register_script( 'selune-script-min', $script_url, ['jquery'], $asset_config_version, true);
    wp_localize_script( 'selune-script-min', 'wp_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
        'posts' => json_encode( $wp_query->query_vars ),
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages,
        'found_posts' => $wp_query->found_posts
    ) );

    wp_enqueue_script( 'selune-script-min' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
} );