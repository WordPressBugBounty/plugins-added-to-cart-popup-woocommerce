<?php

defined( 'ABSPATH' ) || exit;

class Xoo_CP{

	protected static $instance = null;

	//Get instance
	public static function get_instance(){
		if(self::$instance === null){
			self::$instance = new self();
		}
		return self::$instance;
	}


	public function __construct(){
		$this->includes();
		$this->hooks();
	}

	/**
	 * Hooks
	*/
	public function hooks(){
		$this->on_install();
	}


	/**
	 * What type of request is this?
	 *
	 * @param  string $type admin, ajax, cron or frontend.
	 * @return bool
	 */
	private function is_request( $type ) {
		switch ( $type ) {
			case 'admin':
				return is_admin();
			case 'ajax':
				return defined( 'DOING_AJAX' );
			case 'cron':
				return defined( 'DOING_CRON' );
			case 'frontend':
				return ( ! is_admin() || defined( 'DOING_AJAX' ) ) && ! defined( 'DOING_CRON' );
		}
	}

	public function includes(){

		include_once XOO_CP_PATH.'/includes/xoo-framework/xoo-framework.php';
		include_once XOO_CP_PATH.'/includes/class-xoo-cp-helper.php';

		if( $this->is_request('admin')  ){
			include_once XOO_CP_PATH.'/admin/class-xoo-cp-admin-settings.php';
		}

		if( wp_is_mobile() && xoo_cp_helper()->get_general_option('m-atcem') !== 'yes' ) return;

		//Front end
		include_once XOO_CP_PATH.'/includes/class-xoo-cp-public.php';
		Xoo_CP_Public::get_instance();

		//Core functions
		include_once XOO_CP_PATH.'/includes/class-xoo-cp-core.php';
		Xoo_CP_Core::get_instance();

	}

	public function on_install(){

		if( get_option('xoo-cp-gl-atcem') !== false ){ //updated from 1.7


			$glOptions = array(
				'xoo-cp-gl-atcem' 	=> 'm-atcem',
				'xoo-cp-gl-pden'  	=> 'm-pden',
				'xoo-cp-gl-ibtne' 	=> 'm-ibtne',
				'xoo-cp-gl-qtyen' 	=> 'm-qtyen',
				'xoo-cp-gl-vcbtne' 	=> 'm-vcbtne',
				'xoo-cp-gl-chbtn' 	=> 'm-chbtne',
				'xoo-cp-gl-spinen' 	=> 'm-spinen',
				'xoo-cp-gl-resetbtn' => 'm-resetbtn'
			);

			$syOptions = array(
				'xoo-cp-sy-pw' 		=> 'pop-width',
				'xoo-cp-sy-imgw' 	=> 'tb-img-width',
				'xoo-cp-sy-btnbg' 	=> 'pop-btn-bgcolor',
				'xoo-cp-sy-btnc' 	=> 'pop-btn-txtcolor',
				'xoo-cp-sy-btns' 	=> 'pop-btn-fsize',
				'xoo-cp-sy-btnbr' 	=> 'pop-btn-bradius',
				'xoo-cp-sy-tbs' 	=> 'tb-bdsize',
				'xoo-cp-sy-tbc' 	=> 'tb-bdcolor'
			);

			$options = array(
				'xoo-cp-gl-options' => $glOptions,
				'xoo-cp-sy-options' => $syOptions
			);

			$updated_options = array();

			foreach ( $options as $new_key => $option_data ) {
				foreach ( $option_data as $option_key => $new_subkey ) {
					$optionVal 	= get_option( $option_key );
					$newVal 	= $optionVal == 'true' ? 'yes' : $optionVal;
					$updated_options[ $new_key ][ $new_subkey ] = $newVal;
					delete_option( $option_key );
				}
			}


			foreach ( $updated_options as $key => $value) {
				update_option( $key, $value );
			}

		}
		else{

			$db_version = get_option( 'xoo-cp-version' );

			if( !$db_version ){
				update_option('woocommerce_enable_ajax_add_to_cart', 'yes');
			}

		}

		update_option( 'xoo-cp-version', XOO_CP_VERSION );

	}




}

?>