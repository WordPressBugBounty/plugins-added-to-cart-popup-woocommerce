<?php 

//Exit if accessed directly
if(!defined('ABSPATH')){
	return; 	
}

$cart = WC()->cart->get_cart();

$cart_item = $cart[$cart_item_key];


$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );

$thumbnail 		= apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

$product_name 	=  apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
					
$product_price 	= apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );

$product_subtotal = apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );

// Meta data
$attributes = '';

//Variation
$attributes .= $_product->is_type('variable') || $_product->is_type('variation')  ? wc_get_formatted_variation($_product) : '';
// Meta data
if(version_compare( WC()->version , '3.3.0' , "<" )){
	$attributes .=  WC()->cart->get_item_data( $cart_item );
}
else{
	$attributes .=  wc_get_formatted_cart_item_data( $cart_item );
}


//Quantity input
$max_value = apply_filters( 'woocommerce_quantity_input_max', $_product->get_max_purchase_quantity(), $_product );
$min_value = apply_filters( 'woocommerce_quantity_input_min', $_product->get_min_purchase_quantity(), $_product );
$step      = apply_filters( 'woocommerce_quantity_input_step', 1, $_product );
$pattern   = apply_filters( 'woocommerce_quantity_input_pattern', has_filter( 'woocommerce_stock_amount', 'intval' ) ? '[0-9]*' : '' );

?>



<table class="xoo-cp-pdetails clearfix">
	<tr data-xoo_cp_key="<?php echo esc_attr( $cart_item_key ); ?>">
		<td class="xoo-cp-remove"><span class="xoo-cp-icon-cross xoo-cp-remove-pd"></span></td>
		<td class="xoo-cp-pimg"><a href="<?php echo esc_url( $product_permalink ); ?>"><?php echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></a></td>
		<td class="xoo-cp-ptitle"><a href="<?php echo  esc_url( $product_permalink ); ?>"><?php echo wp_kses_post( $product_name ); ?></a>

		<?php if($attributes): ?>
			<div class="xoo-cp-variations"><?php echo $attributes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped  ?></div>
		<?php endif; ?>

		<td class="xoo-cp-pprice"><?php echo  $product_price; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></td>


		<td class="xoo-cp-pqty">
			<?php if ( $_product->is_sold_individually() ||  xoo_cp_helper()->get_general_option('m-qtyen') !== 'yes' ): ?>
				<span><?php echo $cart_item['quantity'];// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>				
			<?php else: ?>
				<div class="xoo-cp-qtybox">
				<span class="xcp-minus xcp-chng">-</span>
				<input type="number" class="xoo-cp-qty" max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>" min="<?php echo esc_attr($min_value); ?>" step="<?php echo esc_attr($step); ?>" value="<?php echo $cart_item['quantity']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" pattern="<?php echo esc_attr( $pattern ); ?>">
				<span class="xcp-plus xcp-chng">+</span></div>
			<?php endif; ?>
		</td>
	</tr>
</table>
<div class="xoo-cp-ptotal"><span class="xcp-totxt"><?php esc_html_e( 'Total', 'added-to-cart-popup-woocommerce' );?> : </span><span class="xcp-ptotal"><?php echo $product_subtotal; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div>

