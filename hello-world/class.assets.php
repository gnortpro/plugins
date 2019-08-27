<?php 	
function mfpd_create_menu() {
	// add_menu_page('Hello World', 'MFPD Settings', 'administrator', __FILE__, 'mfpd_settings_page',plugins_url('/images/app.ico', __FILE__), 1);
	add_menu_page(
		'Hello World Plugin By Trọng', 
		'Hello World', 
		'administrator', 
		'hello-world', 
		'mfpd_settings_page',
		'dashicons-media-code', 
		2
	);
	add_action( 'admin_init', 'register_mysettings' );
}
add_action('admin_menu', 'mfpd_create_menu'); 


add_action( 'wp_enqueue_scripts', 'wbc_enqueue_styles', 101 );
function wbc_enqueue_styles() {
	wp_register_style('maincss', plugins_url('/css/style.css',__FILE__ )); /*	Add CSS */
	wp_enqueue_style('maincss');
	wp_register_script('mainjs', plugins_url( '/js/script.js', __FILE__ ));
	wp_enqueue_script('mainjs');
}

// add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '' )

function books_register_ref_page() {
    add_submenu_page(
        'hello-world',
        __( 'Add something'),
        __( 'Shortcode Reference'),
        'manage_options',
        'add-something',
        'books_ref_page_callback'
    );
}
add_action('admin_menu', 'books_register_ref_page');
/**
 * Display callback for the submenu page.
 */
function books_ref_page_callback() { 
    ?>
    <div class="wrap">
        <h1><?php _e( 'Books Shortcode Reference', 'textdomain' ); ?></h1>
        <p><?php _e( 'Helpful stuff here', 'textdomain' ); ?></p>
    </div>
    <?php
}
 ?>