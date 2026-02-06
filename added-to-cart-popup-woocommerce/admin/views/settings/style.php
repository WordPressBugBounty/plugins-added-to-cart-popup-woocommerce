<?php

$settings = array(

	array(
		'callback' 		=> 'number',
		'title' 		=> 'PopUp Width',
		'id' 			=> 'pop-width',
		'section_id' 	=> 'popup',
		'default' 		=> 650,
		'desc' 			=> 'Size in px'
	),


	array(
		'callback' 		=> 'upload',
		'title' 		=> 'Background Image',
		'id' 			=> 'pop-cbimg',
		'section_id' 	=> 'popup',
		'default' 		=> '',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Popup Background Color',
		'id' 			=> 'pop-cbg',
		'section_id' 	=> 'popup',
		'default' 		=> '#ffffff',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Popup text Color',
		'id' 			=> 'pop-ctc',
		'section_id' 	=> 'popup',
		'default' 		=> '#000000',
		'pro' 			=> 'yes'
	),

	array(
		'callback' 		=> 'color',
		'title' 		=> 'Popup Close Color',
		'id' 			=> 'pop-cc',
		'section_id' 	=> 'popup',
		'default' 		=> '#000000',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Button Background Color',
		'id' 			=> 'pop-btn-bgcolor',
		'section_id' 	=> 'popup',
		'default' 		=> '#a46497',
	),

	array(
		'callback' 		=> 'color',
		'title' 		=> 'Button Text Color',
		'id' 			=> 'pop-btn-txtcolor',
		'section_id' 	=> 'popup',
		'default' 		=> '#ffffff',
	),


	array(
		'callback' 		=> 'number',
		'title' 		=> 'Button Font Size',
		'id' 			=> 'pop-btn-fsize',
		'section_id' 	=> 'popup',
		'default' 		=> 14,
	),


	array(
		'callback' 		=> 'number',
		'title' 		=> 'Button Border Radius',
		'id' 			=> 'pop-btn-bradius',
		'section_id' 	=> 'popup',
		'default' 		=> 14,
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Heading Text Color',
		'id' 			=> 'pop-yctc',
		'section_id' 	=> 'popup',
		'default' 		=> '#000000',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Heading Text Background Color',
		'id' 			=> 'pop-ctbg',
		'section_id' 	=> 'popup',
		'default' 		=> '',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'number',
		'title' 		=> 'Heading Text Font Size',
		'id' 			=> 'pop-ctfsize',
		'section_id' 	=> 'popup',
		'default' 		=> 16,
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'number',
		'title' 		=> 'Heading Text Border Size',
		'id' 			=> 'pop-ctbs',
		'section_id' 	=> 'popup',
		'default' 		=> 2,
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Heading Text Border Color',
		'id' 			=> 'pop-ctbc',
		'section_id' 	=> 'popup',
		'default' 		=> '#000000',
		'pro' 			=> 'yes'
	),



	array(
		'callback' 		=> 'color',
		'title' 		=> 'Head Background Color',
		'id' 			=> 'tb-hbg',
		'section_id' 	=> 'table',
		'default' 		=> '#eeeeee',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Head Text Color',
		'id' 			=> 'tb-hc',
		'section_id' 	=> 'table',
		'default' 		=> '#000000',
		'pro' 			=> 'yes'
	),

	array(
		'callback' 		=> 'number',
		'title' 		=> 'Product Title Width',
		'id' 			=> 'tb-ti-width',
		'section_id' 	=> 'table',
		'default' 		=> 40,
		'desc' 			=> 'In percentage',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'select',
		'title' 		=> 'Product Title Align',
		'id' 			=> 'tb-ti-align',
		'section_id' 	=> 'table',
		'args' 			=> array(
			'options' 	=> array(
				'left' 		=> 'Left',
				'center' 	=> 'Center',
				'right' 	=> 'Right',
			),
		),
		'default' 	=> 'full',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'number',
		'title' 		=> 'Product Image Width',
		'id' 			=> 'tb-img-width',
		'section_id' 	=> 'table',
		'default' 		=> 20,
		'desc' 			=> 'In percentage'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Product remove Color',
		'id' 			=> 'tb-rpc',
		'section_id' 	=> 'table',
		'default' 		=> '#ea0a0a',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'number',
		'title' 		=> 'Table Border Size',
		'id' 			=> 'tb-bdsize',
		'section_id' 	=> 'table',
		'default' 		=> 0,
		'desc' 			=> 'Size in px'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Table Border Color',
		'id' 			=> 'tb-bdcolor',
		'section_id' 	=> 'table',
		'default' 		=> '#ebe9eb',
	),


	array(
		'callback' 		=> 'number',
		'title' 		=> 'Padding',
		'id' 			=> 'sp-padding',
		'section_id' 	=> 'suggested_products',
		'default' 		=> 30,
		'desc' 			=> 'Size in px',
		'pro' 			=> 'yes'
	),

	array(
		'callback' 		=> 'number',
		'title' 		=> 'Product Width',
		'id' 			=> 'sp-prod-width',
		'section_id' 	=> 'suggested_products',
		'default' 		=> 150,
		'desc' 			=> 'Maximum product width',
		'pro' 			=> 'yes'
	),



	array(
		'callback' 		=> 'number',
		'title' 		=> 'Font Size',
		'id' 			=> 'sp-fsize',
		'section_id' 	=> 'suggested_products',
		'default' 		=> 13,
		'desc' 			=> 'Size in px',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Show Basket',
		'id' 			=> 'bk-en',
		'section_id' 	=> 'basket',
		'default' 		=> 'yes',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'radio',
		'title' 		=> 'Basket Icon',
		'id' 			=> 'bk-ict',
		'section_id' 	=> 'basket',
		'args' 			=> array(
			'options' 	=> array(
				'xoo-cp-icon-basket1' 		=> 'xoo-cp-icon-basket1',
				'xoo-cp-icon-basket2' 		=> 'xoo-cp-icon-basket2',
				'xoo-cp-icon-basket3'		=> 'xoo-cp-icon-basket3',
				'xoo-cp-icon-basket4' 		=> 'xoo-cp-icon-basket4',
				'xoo-cp-icon-basket5' 		=> 'xoo-cp-icon-basket5',
				'xoo-cp-icon-basket6' 		=> 'xoo-cp-icon-basket6',
			),
			'has_asset' 	=> true,
			'asset_type' 	=> 'icon',
			'upload' 		=> 'no'
		),
		'default' 	=> 'xoo-cp-icon-basket1',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Drag Basket',
		'id' 			=> 'bk-bdr',
		'section_id' 	=> 'basket',
		'default' 		=> 'yes',
		'desc' 			=> 'Drag Basket anywhere on the screen.',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'number',
		'title' 		=> 'Basket Size',
		'id' 			=> 'bk-size',
		'section_id' 	=> 'basket',
		'default' 		=> 30,
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Basket Background Color',
		'id' 			=> 'bk-bgcolor',
		'section_id' 	=> 'basket',
		'default' 		=> '#ffffff',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Basket Color',
		'id' 			=> 'bk-color',
		'section_id' 	=> 'basket',
		'default' 		=> '#000',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Count Background Color',
		'id' 			=> 'bk-icbg',
		'section_id' 	=> 'basket',
		'default' 		=> '#cc0086',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'color',
		'title' 		=> 'Count Color',
		'id' 			=> 'bk-icc',
		'section_id' 	=> 'basket',
		'default' 		=> '#ffffff',
		'pro' 			=> 'yes'
	),


);

return apply_filters( 'xoo_cp_admin_settings', $settings, 'style' );
?>