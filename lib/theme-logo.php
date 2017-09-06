<?php
/**
 * Custom Theme Logo
 */

function theme_prefix_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 120,
		'width'       => 240,
		'flex-width' => true
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' ); ?>