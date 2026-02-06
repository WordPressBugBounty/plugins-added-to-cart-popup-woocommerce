<?php

defined( 'ABSPATH' ) || exit;

class Xoo_CP_Admin_Settings{

	protected static $_instance = null;

	public static function get_instance(){
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function __construct(){
		$this->hooks();
	}

	public function hooks(){
		if( current_user_can( 'manage_options' ) ){
			add_action( 'init', array( $this, 'generate_settings' ), 0 );
			add_action( 'admin_menu', array( $this, 'add_menu_pages' ) );
		}
		add_action( 'xoo_as_enqueue_scripts', array( $this, 'enqueue_custom_scripts' ) );
		add_filter( 'plugin_action_links_' . XOO_CP_PLUGIN_BASENAME, array( $this, 'plugin_action_links' ) );

		add_action( 'xoo_tab_page_end', array( $this, 'tab_html' ), 10, 2 );
		
	}


	public function tab_html( $tab_id, $tab_data ){

		if( !xoo_cp_helper()->admin->is_settings_page() ) return;
		
		if( $tab_id === 'pro' ){
			xoo_cp_helper()->get_template( 'xoo-cp-fvsp-template.php', array(), XOO_CP_PATH.'/admin/' );
		}

		
		
	}



	public function enqueue_custom_scripts( $slug ){

		if( $slug !== 'added-to-cart-popup-woocommerce' ) return;

		wp_enqueue_style( 'xoo-cp-admin-css', XOO_CP_URL . '/admin/assets/css/xoo-cp-admin-css.css', array(), XOO_CP_VERSION );
		wp_enqueue_script( 'xoo-cp-admin-js', XOO_CP_URL . '/admin/assets/js/xoo-cp-admin-js.js', array( 'jquery' ), XOO_CP_VERSION, true );

		wp_localize_script( 'xoo-cp-admin-js', 'xoo_cp_admin_params', array(
			'adminurl'  => admin_url().'admin-ajax.php',
			'nonce' 	=> wp_create_nonce('xoo-cp-nonce'),
		) );
	}


	/**
	 * Show action links on the plugin screen.
	 *
	 * @param	mixed $links Plugin Action links
	 * @return	array
	 */
	public function plugin_action_links( $links ) {
		$action_links = array(
			'settings' 	=> '<a href="' . admin_url( 'admin.php?page=added-to-cart-popup-woocommerce-settings' ) . '">Settings</a>',
			'support' 	=> '<a href="https://xootix.com/support" target="__blank">Support</a>',
		);

		return array_merge( $action_links, $links );
	}



	public function generate_settings(){
		xoo_cp_helper()->admin->auto_generate_settings();
	}


	public function add_menu_pages(){

		$args = array(
			'menu_title' 	=> 'Cart Popup',
			'icon' 			=> 'dashicons-cart',
		);


		xoo_cp_helper()->admin->register_menu_page( $args );

	}

}

function xoo_cp_admin_settings(){
	return Xoo_CP_Admin_Settings::get_instance();
}
xoo_cp_admin_settings();