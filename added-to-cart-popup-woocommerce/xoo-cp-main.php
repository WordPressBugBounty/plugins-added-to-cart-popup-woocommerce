<?php
/**
* Plugin Name: Cart Popup for WooCommerce
* Plugin URI: http://xootix.com
* Author: XootiX
* Version: 1.8.2
* Text Domain: added-to-cart-popup-woocommerce
* Domain Path: /languages
* Author URI: http://xootix.com
* Description: Cart Popup for WooCommerce displays popup when item is added to cart without refreshing page.
* Requires Plugins: woocommerce
* Requires at least: 4.0
* License:      GPL2
* License URI:  https://www.gnu.org/licenses/gpl-2.0.html
**/

//Exit if accessed directly
if(!defined('ABSPATH')){
	return; 	
}


define( 'XOO_CP_PLUGIN_FILE', __FILE__ );
define("XOO_CP_PATH", plugin_dir_path(__FILE__));
define("XOO_CP_URL", plugins_url('',__FILE__));
define( "XOO_CP_PLUGIN_BASENAME", plugin_basename( XOO_CP_PLUGIN_FILE ) );
define("XOO_CP_VERSION","1.8.2");



//Init plugin
function xoo_cp_rock_the_world(){
	if( !class_exists('woocommerce') ) return;
	require_once XOO_CP_PATH.'/includes/class-xoo-cp.php';
	//Start the plugin
	Xoo_CP::get_instance();
}
add_action('plugins_loaded','xoo_cp_rock_the_world', 15);


add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_script( 'wc-cart-fragments' );
} );


add_action( 'wp_head', function(){
	if( !is_cart() || !class_exists('Xoo_CP_Public') ) return;
	remove_action( 'wp_enqueue_scripts' ,array( Xoo_CP_Public::get_instance(), 'enqueue_scripts') );
} );