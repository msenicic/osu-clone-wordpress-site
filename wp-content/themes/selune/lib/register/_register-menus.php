<?php
/**
* Register nav menus
* This function is attached to 'init' action hook. @see selune_setup()
* @uses register_nav_menu() 	Add support for navigation menus.
* @link http://codex.wordpress.org/Function_Reference/register_nav_menu
*/
function selune_menus() {
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'selune' ),
    ) );
}