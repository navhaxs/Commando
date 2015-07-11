<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package commando
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function commando_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'commando_jetpack_setup' );
