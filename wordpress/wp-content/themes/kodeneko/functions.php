<?php

add_action( 'wp_enqueue_scripts', 'kodeneko_enqueue_styles' );

function kodeneko_enqueue_styles() {
	wp_enqueue_style( 
		'kodeneko-style', 
		get_stylesheet_uri()
	);
}