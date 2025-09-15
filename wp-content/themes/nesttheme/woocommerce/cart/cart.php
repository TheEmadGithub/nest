<?php
defined( 'ABSPATH' ) || exit;
do_action( 'woocommerce_before_cart' );
?>

<main class="main">
  

    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-8 mb-40">
                <h1 class="heading-2 mb-10"><?php esc_html_e( 'Your Cart', 'woocommerce' ); ?></h1>
                <div class="d-flex justify-content-between">
                    <h6 class="text-body"><?php printf( esc_html__( 'There are %s products in your cart', 'woocommerce' ), '<span class="text-brand">' . WC()->cart->get_cart_contents_count() . '</span>' ); ?></h6>
                    <h6 class="text-body">
                        <a href="#" id="clear-cart-btn" class="text-muted" data-nonce="<?php echo wp_create_nonce('clear_cart_nonce'); ?>">
                            <i class="fi-rs-trash mr-5"></i><?php esc_html_e( 'Clear Cart', 'woocommerce' ); ?>
                        </a>
                    </h6>
                </div>
            </div>
        </div>

        <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive shopping-summery">
                        <table class="table table-wishlist shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                            <thead>
                                <tr class="main-heading">
                                    <th class="custome-checkbox start pl-30">&nbsp;</th>
                                    <th colspan="2"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
                                    <th><?php esc_html_e( 'Unit Price', 'woocommerce' ); ?></th>
                                    <th><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
                                    <th><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
                                    <th class="end"><?php esc_html_e( 'Remove', 'woocommerce' ); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                                    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                                    $product_id = $cart_item['product_id'];
                                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) :
                                        $product_permalink = $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '';
                                ?>
                                <tr class="woocommerce-cart-form__cart-item cart_item pt-30">
                                    <td class="custome-checkbox pl-30">&nbsp;</td>
                                    <td class="image product-thumbnail pt-40">
                                        <?php
                                        $thumbnail = $_product->get_image( 'woocommerce_thumbnail' );
                                        if ( ! $product_permalink ) {
                                            echo $thumbnail;
                                        } else {
                                            echo '<a href="' . esc_url( $product_permalink ) . '">' . $thumbnail . '</a>';
                                        }
                                        ?>
                                    </td>
                                    <td class="product-des product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                                        <h6 class="mb-5">
                                            <?php
                                            if ( ! $product_permalink ) {
                                                echo wp_kses_post( $_product->get_name() );
                                            } else {
                                                echo '<a class="product-name mb-10 text-heading" href="' . esc_url( $product_permalink ) . '">' . wp_kses_post( $_product->get_name() ) . '</a>';
                                            }
                                            ?>
                                        </h6>
                                        <?php do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key ); ?>
                                    </td>
                                    <td class="price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                                        <h4 class="text-body"><?php echo WC()->cart->get_product_price( $_product ); ?></h4>
                                    </td>
									<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
						<?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '0',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						</td>
                                    <td class="price" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
                                        <h4 class="text-brand"><?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ); ?></h4>
                                    </td>
                                    <td class="action text-center" data-title="<?php esc_attr_e( 'Remove', 'woocommerce' ); ?>">
                                        <?php
                                        echo apply_filters(
                                            'woocommerce_cart_item_remove_link',
                                            sprintf(
                                                '<a href="%s" class="text-body remove" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"><i class="fi-rs-trash"></i></a>',
                                                esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                                esc_html__( 'Remove this item', 'woocommerce' ),
                                                esc_attr( $product_id ),
                                                esc_attr( $cart_item_key ),
                                                esc_attr( $_product->get_sku() )
                                            ),
                                            $cart_item_key
                                        );
                                        ?>
                                    </td>
                                </tr>
                                <?php endif; endforeach; ?>
                                <?php do_action( 'woocommerce_cart_contents' ); ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="divider-2 mb-30"></div>
                    <div class="cart-action d-flex justify-content-between">
                        <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="btn">
                            <i class="fi-rs-arrow-left mr-10"></i><?php esc_html_e( 'Continue Shopping', 'woocommerce' ); ?>
                        </a>
                        <button type="submit" class="btn mr-10 mb-sm-15" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>">
                            <i class="fi-rs-refresh mr-10"></i><?php esc_html_e( 'Update Cart', 'woocommerce' ); ?>
                        </button>
                        <?php do_action( 'woocommerce_cart_actions' ); ?>
                        <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                    </div>
                </div>

                <div class="col-lg-4">
                    <?php do_action( 'woocommerce_cart_collaterals' ); ?>
                </div>
            </div>
        </form>

        <?php do_action( 'woocommerce_after_cart' ); ?>
    </div>
</main>
