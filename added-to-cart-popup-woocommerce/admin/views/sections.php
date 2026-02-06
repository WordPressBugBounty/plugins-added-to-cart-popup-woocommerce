<?php

$sections = array(

	/* General TAB Sections */
	array(
		'title' => 'Main',
		'id' 	=> 'main',
		'tab' 	=> 'general',
	),


	array(
		'title' => 'Suggested Products',
		'id' 	=> 'suggested_products',
		'tab' 	=> 'general',
		'pro' 	=> 'yes'
	),


	array(
		'title' => 'Texts',
		'id' 	=> 'texts',
		'tab' 	=> 'general',
		'pro' 	=> 'yes'
	),

	array(
		'title' => 'Popup',
		'id' 	=> 'popup',
		'tab' 	=> 'style',
	),


	array(
		'title' => 'Table Items',
		'id' 	=> 'table',
		'tab' 	=> 'style',
	),


	array(
		'title' => 'Cart Basket',
		'id' 	=> 'basket',
		'tab' 	=> 'style',
		'pro' 	=> 'yes'
	),


	array(
		'title' => 'Suggested Products',
		'id' 	=> 'suggested_products',
		'tab' 	=> 'style',
		'pro' 	=> 'yes'
	),


);

return apply_filters( 'xoo_wsc_admin_settings_sections', $sections );