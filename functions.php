<?php

/**
 * Gumble theme functions.php
 */

add_action( 'wp_enqueue_scripts', function() {

	// Enqueue Google font
	wp_enqueue_style(
		'gumble-font-style',
		'https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300;500&display=swap'
	);


	// Enqueue theme stylesheet.
	wp_enqueue_style(
		'gumble-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

} );

