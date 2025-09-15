<?php
/**
 * Cart Dropdown Content Template
 * This template is used for AJAX cart dropdown updates
 */

if (!WC()->cart->is_empty()) : ?>
    <ul>
        <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) : 
            $product = $cart_item['data'];
            $product_id = $cart_item['product_id'];
            $quantity = $cart_item['quantity'];
            
            // Skip invalid items
            if (!$product || !$product->exists() || $quantity <= 0) {
                continue;
            }
            
            $price = $product->get_price();
            $total = $price * $quantity;
        ?>
            <li data-cart-item-key="<?php echo esc_attr($cart_item_key); ?>">
                <div class="shopping-cart-img">
                    <a href="<?php echo get_permalink($product_id); ?>">
                        <?php echo $product->get_image('thumbnail'); ?>
                    </a>
                </div>
                <div class="shopping-cart-title">
                    <h4><a href="<?php echo get_permalink($product_id); ?>"><?php echo $product->get_name(); ?></a></h4>
                    <h4><span><?php echo $quantity; ?> × </span><?php echo wc_price($price); ?></h4>
                </div>
                <div class="shopping-cart-delete">
                    <a href="#" class="ajax-remove-cart-item" data-cart-item-key="<?php echo esc_attr($cart_item_key); ?>">
                        <i class="fi-rs-cross-small"></i>
                    </a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="shopping-cart-footer">
        <div class="shopping-cart-total">
            <h4>Total <span><?php echo WC()->cart->get_cart_total(); ?></span></h4>
        </div>
        <div class="shopping-cart-button">
            <a href="<?php echo function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart'); ?>" class="outline">View cart</a>
            <a href="<?php echo function_exists('wc_get_checkout_url') ? wc_get_checkout_url() : home_url('/checkout'); ?>">Checkout</a>
        </div>
    </div>
<?php else : ?>
    <ul>
        <li>
            <div class="shopping-cart-title">
                <h4>Your cart is empty</h4>
            </div>
        </li>
    </ul>
<?php endif; ?>
