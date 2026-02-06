<?php  if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<div class="xoo-prem">
	<div class="xoo-hero-btns">
		<a class="buy-prem button button-primary button-hero" 
		   href="<?php echo esc_url( 'http://demo.xootix.com/cart-pop-up-for-woocommerce/' ); ?>">
		   LIVE DEMO
		</a>

		<a class="live-demo button button-primary button-hero" 
		   href="<?php echo esc_url( 'http://xootix.com/plugins/cart-pop-up-for-woocommerce/' ); ?>">
		   BUY PREMIUM - 14$
		</a>
	</div>

	<!-- Free V/s Premium -->
	<div class="xoo-fvsp">
		<span class="xoo-fvsp-head">Free V/s Premium</span>

		<?php
		$table_content = array(
			array( 'Add to cart without refresh on product page', 'yes', 'yes' ),
			array( 'Update quantity in a pop up', 'yes', 'yes' ),
			array( 'See all added items in a cart', 'no', 'yes', 'alert' ),
			array( 'Easily access cart from anywhere using basket icon', 'no', 'yes', 'alert' ),
			array( 'Show related/up-sell/cross-sell products', 'no', 'yes', 'alert' ),
			array( 'Header menu SHORTCODE (Use anywhere)', 'no', 'yes', 'alert' ),
			array( 'Fly to cart animation', 'no', 'yes' ),
			array( 'Fully customizable basket with different icons to choose from', 'no', 'yes' ),
			array( 'Style your popup easily', 'no', 'yes' ),
		);
		?>

		<table class="xoo-fvsp-table">
			<thead>
				<tr>
					<th></th>
					<th>Free</th>
					<th>Premium<br><span>(No time limit)</span></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ( $table_content as $table_row ) : 
					$alert_class = isset( $table_row[3] ) ? ' class="xfp-alert"' : '';
				?>
					<tr>
						<td<?php echo esc_html( $alert_class ); ?>>
							<?php echo esc_html( $table_row[0] ); ?>
						</td>

						<td class="xfp-<?php echo esc_attr( $table_row[1] ); ?>">
							<span class="dashicons dashicons-<?php echo esc_attr( $table_row[1] ); ?>"></span>
						</td>

						<td class="xfp-<?php echo esc_attr( $table_row[2] ); ?>">
							<span class="dashicons dashicons-<?php echo esc_attr( $table_row[2] ); ?>"></span>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>

	
</div>
