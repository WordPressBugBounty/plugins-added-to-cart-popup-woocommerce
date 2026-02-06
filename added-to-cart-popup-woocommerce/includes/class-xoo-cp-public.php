<?php

defined( 'ABSPATH' ) || exit;

class Xoo_CP_Public{

	protected static $instance = null;


	public function __construct(){
		$this->hooks();
	}

	public function hooks(){
		add_action('wp_enqueue_scripts',array($this,'enqueue_scripts'));
		add_action('wp_footer',array($this,'get_popup_markup'));
		add_filter( 'pre_option_woocommerce_cart_redirect_after_add', array($this,'prevent_cart_redirect'),10,1);
	}

	//Get class instance
	public static function get_instance(){
		if(self::$instance === null){
			self::$instance = new self();
		}	
		return self::$instance; 
	}

	//Inline styles from cart popup settings
	public function get_inline_styles(){

		$sySettings = xoo_cp_helper()->get_style_option();
		$glSettings = xoo_cp_helper()->get_general_option();


		$imageWidth 	= $sySettings['tb-img-width'];

		$btnBGColor 	= $sySettings['pop-btn-bgcolor'];
		$btnTxtColor 	= $sySettings['pop-btn-txtcolor'];
		$btnFsize 		= $sySettings['pop-btn-fsize'];
		$btnBorRadius 	= $sySettings['pop-btn-bradius'];

		$tabBorSize		= $sySettings['tb-bdsize'];
		$tabBorColor	= $sySettings['tb-bdcolor'];

		$popupWidth 	= $sySettings['pop-width'];


		$style = '';

		if( $glSettings['m-vcbtne'] !== 'yes' ){
			$style .= 'a.xoo-cp-btn-vc{
				display: none;
			}';
		}

		if( $glSettings['m-ibtne'] !== 'yes' ){
			$style .= 'span.xcp-chng{
				display: none;
			}';
		}

		if( $glSettings['m-chbtne'] !== 'yes' ){
			$style .= 'a.xoo-cp-btn-ch{
				display: none;
			}';
		}

		if( $glSettings['m-ibtne'] === 'yes' && $glSettings['m-qtyen'] === 'yes' ){
			$style .= 'td.xoo-cp-pqty{
			    min-width: 120px;
			}';
		}
		

		if( $glSettings['m-spinen'] !== 'yes'  ){
			$style .= '.xoo-cp-adding,.xoo-cp-added{display:none!important}';
		}

		$style.= "
			.xoo-cp-container{
				max-width: {$popupWidth}px;
			}
			.xcp-btn{
				background-color: {$btnBGColor};
				color: {$btnTxtColor};
				font-size: {$btnFsize}px;
				border-radius: {$btnBorRadius}px;
				border: 1px solid {$btnBGColor};
			}
			.xcp-btn:hover{
				color: {$btnTxtColor};
			}
			td.xoo-cp-pimg{
				width: {$imageWidth}%;
			}
			table.xoo-cp-pdetails , table.xoo-cp-pdetails tr{
				border: 0!important;
			}
			table.xoo-cp-pdetails td{
				border-style: solid;
				border-width: {$tabBorSize}px;
				border-color: {$tabBorColor};
			}";

			return $style;
	}


	//enqueue stylesheets & scripts
	public function enqueue_scripts(){

		wp_enqueue_script('wc-cart-fragments');

		wp_enqueue_style('xoo-cp-style',XOO_CP_URL.'/assets/css/xoo-cp-style.css',null,XOO_CP_VERSION);
		wp_enqueue_script('xoo-cp-js',XOO_CP_URL.'/assets/js/xoo-cp-js.js',array('jquery'),XOO_CP_VERSION,true);

		wp_localize_script('xoo-cp-js','xoo_cp_localize',array(
			'adminurl'     		=> admin_url().'admin-ajax.php',
			'homeurl' 			=> get_bloginfo('url'),
			'wc_ajax_url' 		=> WC_AJAX::get_endpoint( "%%endpoint%%" ),
			'reset_cart'		=> xoo_cp_helper()->get_general_option('m-resetbtn') === "yes"
		));

		wp_add_inline_style('xoo-cp-style',$this->get_inline_styles());

	}


	//Get popup markup
	public function get_popup_markup(){
		if(is_cart() || is_checkout()){return;}
		wc_get_template('xoo-cp-popup-template.php','','',XOO_CP_PATH.'/templates/');
	}

	//Prevent cart redirect
	public function prevent_cart_redirect($value){
		if(!is_admin()){
			return 'no';
		}

		return $value;
	}


}

?>