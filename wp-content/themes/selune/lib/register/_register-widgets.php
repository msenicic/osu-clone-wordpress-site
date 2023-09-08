<?php
/**
 * Register widget area.
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
add_action( 'widgets_init', function () {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'selune' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'selune' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    // register_sidebar( array(
    // 	'name' => esc_html__( 'Footer - Left', 'selune' ),
    // 	'id' => 'footer-1',
    // 	'before_widget' => '',
    // 	'after_widget'  => '',
    // 	'before_title' => '<h3 class="footer-title">',
    // 	'after_title' => '</h3>',
    // ) );

    // register_sidebar( array(
    // 	'name' => esc_html__( 'Footer - Mid', 'selune' ),
    // 	'id' => 'footer-2',
    // 	'before_widget' => '',
    // 	'after_widget'  => '',
    // 	'before_title' => '<h3 class="footer-title">',
    // 	'after_title' => '</h3>',
    // ) );

    // register_sidebar( array(
    // 	'name' => esc_html__( 'Footer - Right', 'selune' ),
    // 	'id' => 'footer-3',
    // 	'before_widget' => '',
    // 	'after_widget'  => '',
    // 	'before_title' => '<h3 class="footer-title">',
    // 	'after_title' => '</h3>',
    // ) );
} );