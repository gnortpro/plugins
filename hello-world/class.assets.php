<?php 	
add_action( 'wp_enqueue_scripts', 'wbc_enqueue_styles', 101 );
function wbc_enqueue_styles() {
	wp_register_style('maincss', plugins_url('/css/style.css',__FILE__ )); /*	Add CSS */
	wp_enqueue_style('maincss');
	wp_register_script('mainjs', plugins_url( '/js/script.js', __FILE__ ));
	wp_enqueue_script('mainjs');
}

 ?>