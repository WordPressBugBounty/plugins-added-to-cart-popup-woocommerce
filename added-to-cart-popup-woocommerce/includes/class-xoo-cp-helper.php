<?php

defined( 'ABSPATH' ) || exit;

class Xoo_CP_Helper extends Xoo_Helper{

	protected static $_instance = null;

	public static function get_instance( $slug, $path ){
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self( $slug, $path );
		}
		return self::$_instance;
	}

	public function __construct(...$args){
		parent::__construct(...$args);
	}


	public function get_general_option( $subkey = '' ){
		return $this->get_option( 'xoo-cp-gl-options', $subkey );
	}

	public function get_style_option( $subkey = '' ){
		return $this->get_option( 'xoo-cp-sy-options', $subkey );
	}


}

function xoo_cp_helper(){
	return Xoo_CP_Helper::get_instance( 'added-to-cart-popup-woocommerce', XOO_CP_PATH, array(
		'pluginFile' => XOO_CP_PLUGIN_FILE,
		'pluginName' => 'Cart Popup For Woocommerce'
	)  );
}
xoo_cp_helper();

?>