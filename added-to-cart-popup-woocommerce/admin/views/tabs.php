<?php

$tabs = array(
	'general' => array(
		'title'			=> 'General',
		'id' 			=> 'general',
		'option_key' 	=> 'xoo-cp-gl-options'
	),

	'style' => array(
		'title'			=> 'Style',
		'id' 			=> 'style',
		'option_key' 	=> 'xoo-cp-sy-options'
	),

	'pro' => array(
		'title'			=> 'PRO',
		'id' 			=> 'pro',
		'option_key' 	=> 'xoo-cp-dummy-pro'
	),
);

return apply_filters( 'xoo_cp_admin_settings_tabs', $tabs );