<?php


$settings = array(


	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Enable on mobile',
		'id' 			=> 'm-atcem',
		'section_id' 	=> 'main',
		'default' 		=> 'yes',
	),


	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Show product details',
		'id' 			=> 'm-pden',
		'section_id' 	=> 'main',
		'default' 		=> 'yes',
	),


	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Update Quantity',
		'id' 			=> 'm-qtyen',
		'section_id' 	=> 'main',
		'default' 		=> 'yes',
		'desc' 			=> 'Allow users to update quantity from popup.',
	),


	array(
		'callback' 		=> 'checkbox',
		'title' 		=> '+/- Qty Button',
		'id' 			=> 'm-ibtne',
		'section_id' 	=> 'main',
		'default' 		=> 'yes',
		'desc' 			=> 'Enable Increase/Decrease Quantity buttons',
	),


	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Enable View Cart button',
		'id' 			=> 'm-vcbtne',
		'section_id' 	=> 'main',
		'default' 		=> 'yes',
	),
	


	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Enable Checkout button',
		'id' 			=> 'm-chbtne',
		'section_id' 	=> 'main',
		'default' 		=> 'yes',
	),

	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Show spinner/Check icon on add to cart.',
		'id' 			=> 'm-spinen',
		'section_id' 	=> 'main',
		'default' 		=> 'yes',
	),

	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Reset cart form quantity',
		'id' 			=> 'm-resetbtn',
		'section_id' 	=> 'main',
		'default' 		=> 'no',
	),
	

	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Enable',
		'id' 			=> 'sp-en',
		'section_id' 	=> 'suggested_products',
		'default' 		=> 'yes',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Enable on mobile',
		'id' 			=> 'sp-enm',
		'section_id' 	=> 'suggested_products',
		'default' 		=> 'yes',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'select',
		'title' 		=> 'Type',
		'id' 			=> 'sp-type',
		'section_id' 	=> 'suggested_products',
		'args' 			=> array(
			'options' 	=> array(
				'related' 		=> 'Related Products',
				'cross-sells' 	=> 'Cross-Sells',
				'up-sells' 		=> 'Up-Sells',
			),
		),
		'default' 	=> 'related',
		'pro' 			=> 'yes'
	),

	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Enable add to cart button',
		'id' 			=> 'sp-enatc',
		'section_id' 	=> 'suggested_products',
		'default' 		=> 'yes',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'number',
		'title' 		=> 'Number of suggested products',
		'id' 			=> 'sp-tl',
		'section_id' 	=> 'suggested_products',
		'default' 		=> 4,
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'checkbox',
		'title' 		=> 'Enable random products',
		'id' 			=> 'sp-random',
		'section_id' 	=> 'suggested_products',
		'default' 		=> 'yes',
		'desc' 			=> 'If cross sells/upsells mentioned above are not available, show other random products',
		'pro' 			=> 'yes'

	),

	array(
		'callback' 		=> 'text',
		'title' 		=> 'Sugggested Products Title',
		'id' 			=> 'txt-sp-tl',
		'section_id' 	=> 'texts',
		'default' 		=> 'Products you may like',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'text',
		'title' 		=> 'Your Cart Text',
		'id' 			=> 'txt-ct',
		'section_id' 	=> 'texts',
		'default' 		=> 'Your Cart',
		'pro' 			=> 'yes'
	),


	array(
		'callback' 		=> 'text',
		'title' 		=> 'Shop Link',
		'id' 			=> 'txt-splk',
		'section_id' 	=> 'texts',
		'default' 		=> get_permalink( wc_get_page_id( 'shop' ) ),
		'desc' 			=> 'Shop page link when cart is empty.',
		'pro' 			=> 'yes'
	),




	
);

return apply_filters( 'xoo_cp_admin_settings', $settings, 'general' );

?>
