<?php

//Add your Scripts below.

function yt_subme_scripts() {

	//Add Main CSS below
	wp_enqueue_style( 'yt-subme-css', plugin_url(). '/YouTube-Subme/css/style.css' );


	//Add Main JavaScript below
	wp_enqueue_script( 'yt-subme-js', plugin_url(). '/YouTube-Subme/js/style.js' );

}

add_action( 'wp_enqueue_script', 'yt_subme_scripts' )