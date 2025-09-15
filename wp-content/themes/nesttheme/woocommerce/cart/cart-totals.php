<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs, the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>

	<div class="border p-md-4 cart-totals ml-30">
		<div class="table-responsive">
			<table class="table no-border">
				<tbody>
					<tr>
						<td class="cart_total_label">
							<h6 class="text-muted"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></h6>
						</td>
						<td class="cart_total_amount">
							<h4 class="text-brand text-end"><?php wc_cart_totals_subtotal_html(); ?></h4>
						</td>
					</tr>

					<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
						<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
							<td class="cart_total_label">
								<h6 class="text-muted"><?php wc_cart_totals_coupon_label( $coupon ); ?></h6>
							</td>
							<td class="cart_total_amount">
								<h4 class="text-brand text-end"><?php wc_cart_totals_coupon_html( $coupon ); ?></h4>
							</td>
						</tr>
					<?php endforeach; ?>

					<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
						<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>
						<?php wc_cart_totals_shipping_html(); ?>
						<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>
					<?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>
						<tr class="shipping">
							<td class="cart_total_label">
								<h6 class="text-muted"><?php esc_html_e( 'Shipping', 'woocommerce' ); ?></h6>
							</td>
							<td class="cart_total_amount">
								<h5 class="text-heading text-end"><?php woocommerce_shipping_calculator(); ?></h5>
							</td>
						</tr>
					<?php else : ?>
						<tr>
							<td class="cart_total_label">
								<h6 class="text-muted"><?php esc_html_e( 'Shipping', 'woocommerce' ); ?></h6>
							</td>
							<td class="cart_total_amount">
								<h5 class="text-heading text-end"><?php esc_html_e( 'Free', 'woocommerce' ); ?></h5>
							</td>
						</tr>
					<?php endif; ?>

					<?php
					$taxable_address = WC()->customer->get_taxable_address();
					if ( ! empty( $taxable_address[0] ) ) :
					?>
						<tr>
							<td class="cart_total_label">
								<h6 class="text-muted"><?php esc_html_e( 'Estimate for', 'woocommerce' ); ?></h6>
							</td>
							<td class="cart_total_amount">
								<h5 class="text-heading text-end"><?php echo WC()->countries->countries[ $taxable_address[0] ]; ?></h5>
							</td>
						</tr>
					<?php endif; ?>

					<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
						<tr class="fee">
							<td class="cart_total_label">
								<h6 class="text-muted"><?php echo esc_html( $fee->name ); ?></h6>
							</td>
							<td class="cart_total_amount">
								<h4 class="text-brand text-end"><?php wc_cart_totals_fee_html( $fee ); ?></h4>
							</td>
						</tr>
					<?php endforeach; ?>

					<?php
					if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
						$estimated_text  = '';

						if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
							/* translators: %s location. */
							$estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
						}

						if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
							foreach ( WC()->cart->get_tax_totals() as $code => $tax ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
								?>
								<tr class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
									<td class="cart_total_label">
										<h6 class="text-muted"><?php echo esc_html( $tax->label ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h6>
									</td>
									<td class="cart_total_amount">
										<h4 class="text-brand text-end"><?php echo wp_kses_post( $tax->formatted_amount ); ?></h4>
									</td>
								</tr>
								<?php
							}
						} else {
							?>
							<tr class="tax-total">
								<td class="cart_total_label">
									<h6 class="text-muted"><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h6>
								</td>
								<td class="cart_total_amount">
									<h4 class="text-brand text-end"><?php wc_cart_totals_taxes_total_html(); ?></h4>
								</td>
							</tr>
							<?php
						}
					}
					?>

					<tr>
						<td scope="col" colspan="2">
							<div class="divider-2 mt-10 mb-10"></div>
						</td>
					</tr>

					<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>

					<tr class="order-total">
						<td class="cart_total_label">
							<h6 class="text-muted"><?php esc_html_e( 'Total', 'woocommerce' ); ?></h6>
						</td>
						<td class="cart_total_amount">
							<h4 class="text-brand text-end"><?php wc_cart_totals_order_total_html(); ?></h4>
						</td>
					</tr>

					<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>
				</tbody>
			</table>
		</div>
		
		<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="btn mb-20 w-100">
			<?php esc_html_e( 'Proceed To CheckOut', 'woocommerce' ); ?>
			<i class="fi-rs-sign-out ml-15"></i>
		</a>
	</div>

	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

</div>