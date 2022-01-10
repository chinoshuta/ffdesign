<?php
function twpp_enqueue_styles() {
	wp_enqueue_style('main-style', './style.css' );
}

add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
?>