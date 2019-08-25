<?php
/**
 * Plugin Name: Hello World 
 * Plugin URI: https://trongggg.com 
 * Description: Đây là plugin viết bằng mô hôi, cơm, và có cả những giọt máu.
 * Version: 1.0 
 * Author: Nguyễn Viết Trọng 
 * Author URI: https://trongggg.com 
 * License: GPLv2 or later 
 */
?>


<?php 
// if ( !function_exists( 'add_action' ) ) {
// 	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
// 	exit;
// }

// define( 'AKISMET_VERSION', '4.1.2' );
// define( 'AKISMET__MINIMUM_WP_VERSION', '4.0' );
define( 'TRONG__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
// define( 'AKISMET_DELETE_LIMIT', 100000 );

// register_activation_hook( __FILE__, array( 'Akismet', 'plugin_activation' ) );
// register_deactivation_hook( __FILE__, array( 'Akismet', 'plugin_deactivation' ) );

require_once( TRONG__PLUGIN_DIR . 'class.init.php' );
require_once( TRONG__PLUGIN_DIR . 'class.assets.php' );

// add_action( 'init', array( 'Akismet', 'init' ) );

// add_action( 'rest_api_init', array( 'Akismet_REST_API', 'init' ) );

// if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
// 	require_once( TRONG__PLUGIN_DIR . 'class.akismet-admin.php' );
// 	add_action( 'init', array( 'Akismet_Admin', 'init' ) );
// }

//add wrapper class around deprecated akismet functions that are referenced elsewhere
// require_once( TRONG__PLUGIN_DIR . 'wrapper.php' );

// if ( defined( 'WP_CLI' ) && WP_CLI ) {
// 	require_once( TRONG__PLUGIN_DIR . 'class.akismet-cli.php' );
// }

 ?>