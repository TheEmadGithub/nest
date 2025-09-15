<?php
//Add theme support
function NestTheme_setup(){
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'title-tag' );
}
add_action('after_setup_theme','NestTheme_setup');
add_image_size( 'featured-large', 500, 400, true );
/*
* Enqueu scc and js files
*/
function  NestTheme_enqueue_files($hook){
    // Add CSS files
	wp_enqueue_style( 'animate.min-css', get_template_directory_uri().'/assets/css/plugins/animate.min.css');
	wp_enqueue_style( 'slider-range-css', get_template_directory_uri().'/assets/css/plugins/slider-range.css');
	wp_enqueue_style( 'main-css', get_template_directory_uri().'/assets/css/main.css');
	// wp_enqueue_style( '-css', get_template_directory_uri().'/assets/css/.css');
	wp_enqueue_style( 'style-css', get_template_directory_uri().'/style.css');
	
	
	// if(pll_current_language() == 'ar'){
    //     wp_enqueue_style( 'style-rtl', get_template_directory_uri().'/style-rtl.css');
	// }

	//Add JS files
	wp_enqueue_script('modernizr-3.6.0.min-js', get_template_directory_uri().'/assets/js/vendor/modernizr-3.6.0.min.js', array('jquery'), rand(), true);
	// wp_enqueue_script('jquery-3.6.0.-js', get_template_directory_uri().'/assets/js/vendor/jquery-3.6.0.min.js', array('jquery'), rand(), true);
	// wp_enqueue_script('jquery-migrate-3-js', get_template_directory_uri().'/assets/js/vendor/jquery-migrate-3.3.0.min.js', array('jquery'), rand(), true);
	wp_enqueue_script('bootstrap-bundle-min-js', get_template_directory_uri().'/assets/js/vendor/bootstrap.bundle.min.js', array('jquery'), rand(), true);
	wp_enqueue_script('slick-js', get_template_directory_uri().'/assets/js/plugins/slick.js', array('jquery'), rand(), true);
	wp_enqueue_script('jquery.syotimer.min-js', get_template_directory_uri().'/assets/js/plugins/jquery.syotimer.min.js', array('jquery'), rand(), true);
	wp_enqueue_script('waypoints-js', get_template_directory_uri().'/assets/js/plugins/waypoints.js', array('jquery'), rand(), true);
	wp_enqueue_script('wow-js', get_template_directory_uri().'/assets/js/plugins/wow.js', array('jquery'), rand(), true);
	wp_enqueue_script('slider-range-js', get_template_directory_uri().'/assets/js/plugins/slider-range.js', array('jquery'), rand(), true);
	// wp_enqueue_script('jquery-ui-js', get_template_directory_uri().'/assets/js/plugins/jquery-ui.js', array('jquery'), rand(), true);
	wp_enqueue_script('slider-range-js', get_template_directory_uri().'/assets/js/plugins/slider-range.js', array('jquery'), rand(), true);
	wp_enqueue_script('perfect-scrollbar-js', get_template_directory_uri().'/assets/js/plugins/perfect-scrollbar.js', array('jquery'), rand(), true);
	wp_enqueue_script('magnific-popup-js', get_template_directory_uri().'/assets/js/plugins/magnific-popup.js', array('jquery'), rand(), true);
	wp_enqueue_script('select2.min-js', get_template_directory_uri().'/assets/js/plugins/select2.min.js', array('jquery'), rand(), true);
	wp_enqueue_script('waypoints-js', get_template_directory_uri().'/assets/js/plugins/waypoints.js', array('jquery'), rand(), true);
	wp_enqueue_script('counterup-js', get_template_directory_uri().'/assets/js/plugins/counterup.js', array('jquery'), rand(), true);
	wp_enqueue_script('jquery.countdown.min-js', get_template_directory_uri().'/assets/js/plugins/jquery.countdown.min.js', array('jquery'), rand(), true);
	wp_enqueue_script('images-loaded-js', get_template_directory_uri().'/assets/js/plugins/images-loaded.js', array('jquery'), rand(), true);
	wp_enqueue_script('isotope-js', get_template_directory_uri().'/assets/js/plugins/isotope.js', array('jquery'), rand(), true);
	wp_enqueue_script('scrollup-js', get_template_directory_uri().'/assets/js/plugins/scrollup.js', array('jquery'), rand(), true);
	wp_enqueue_script('jquery.vticker-min-js', get_template_directory_uri().'/assets/js/plugins/jquery.vticker-min.js', array('jquery'), rand(), true);
	wp_enqueue_script('jquery.theia.sticky-js', get_template_directory_uri().'/assets/js/plugins/jquery.theia.sticky.js', array('jquery'), rand(), true);
	wp_enqueue_script('jquery.elevatezoom-js', get_template_directory_uri().'/assets/js/plugins/jquery.elevatezoom.js', array('jquery'), rand(), true);
	wp_enqueue_script('leaflet-js', get_template_directory_uri().'/assets/js/plugins/leaflet.js', array('jquery'), rand(), true);
	wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), rand(), true);
	wp_enqueue_script('shop-js', get_template_directory_uri().'/assets/js/shop.js', array('jquery'), rand(), true);
	wp_enqueue_script('custom-js', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), rand(), true);
	
}

// Add custom JavaScript for cart quantity buttons and clear cart
function add_cart_quantity_script() {
    if (is_cart()) {
        ?>
        <script>
        jQuery(document).ready(function($) {
            // Quantity down button
            $(document).on('click', '.qty-down', function(e) {
                e.preventDefault();
                var input = $(this).siblings('.qty-val');
                var currentVal = parseInt(input.val());
                var minVal = parseInt(input.attr('min')) || 0;
                if (currentVal > minVal) {
                    input.val(currentVal - 1);
                    // Trigger form submission to update cart
                    $('button[name="update_cart"]').click();
                }
            });
            
            // Quantity up button
            $(document).on('click', '.qty-up', function(e) {
                e.preventDefault();
                var input = $(this).siblings('.qty-val');
                var currentVal = parseInt(input.val());
                var maxVal = parseInt(input.attr('max')) || 999;
                if (currentVal < maxVal) {
                    input.val(currentVal + 1);
                    // Trigger form submission to update cart
                    $('button[name="update_cart"]').click();
                }
            });
            
            // Clear cart button
            $(document).on('click', '#clear-cart-btn', function(e) {
                e.preventDefault();
                
                if (confirm('Are you sure you want to clear your cart?')) {
                    var nonce = $(this).data('nonce');
                    var button = $(this);
                    
                    // Disable button and show loading
                    button.prop('disabled', true).html('<i class="fi-rs-spinner mr-5"></i>Clearing...');
                    
                    $.ajax({
                        url: '<?php echo admin_url('admin-ajax.php'); ?>',
                        type: 'POST',
                        data: {
                            action: 'clear_cart',
                            nonce: nonce
                        },
                        success: function(response) {
                            if (response.success) {
                                // Update cart content without reload
                                $('.woocommerce-cart-form__contents tbody').html('<tr><td colspan="7" class="text-center">Your cart is empty.</td></tr>');
                                
                                // Update cart count
                                $('.text-brand').text('0');
                                
                                // Update cart totals section
                                if (response.data.cart_totals) {
                                    $('.cart_totals').html(response.data.cart_totals);
                                }
                                
                                // Update WooCommerce fragments
                                if (response.data.fragments) {
                                    $.each(response.data.fragments, function(key, value) {
                                        $(key).replaceWith(value);
                                    });
                                }
                                
                                // Hide update cart button
                                $('button[name="update_cart"]').hide();
                                
                                // Reset button
                                button.prop('disabled', false).html('<i class="fi-rs-trash mr-5"></i>Clear Cart');
                                
                                // Show success message
                                alert('Cart cleared successfully!');
                            } else {
                                alert('Error clearing cart. Please try again.');
                                button.prop('disabled', false).html('<i class="fi-rs-trash mr-5"></i>Clear Cart');
                            }
                        },
                        error: function() {
                            alert('Error clearing cart. Please try again.');
                            button.prop('disabled', false).html('<i class="fi-rs-trash mr-5"></i>Clear Cart');
                        }
                    });
                }
            });
        });
        </script>
        <?php
    }
}
add_action('wp_footer', 'add_cart_quantity_script');

// Add AJAX cart dropdown functionality
function add_cart_dropdown_ajax_script() {
    ?>
    <script>
    jQuery(document).ready(function($) {
        // AJAX Cart Dropdown Functionality
        var cartDropdownNonce = '<?php echo wp_create_nonce('cart_dropdown_nonce'); ?>';
        
        // Remove item from cart dropdown
        $(document).on('click', '.ajax-remove-cart-item', function(e) {
            e.preventDefault();
            
            var cartItemKey = $(this).data('cart-item-key');
            var $cartItem = $(this).closest('li');
            var $cartDropdown = $(this).closest('.cart-dropdown-wrap');
            
            // Show loading state
            $cartItem.addClass('loading');
            
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'cart_dropdown_update',
                    cart_action: 'remove_item',
                    cart_item_key: cartItemKey,
                    nonce: cartDropdownNonce
                },
                success: function(response) {
                    if (response.success) {
                        // Update cart dropdown content
                        $cartDropdown.html(response.data.cart_content);
                        
        // Update cart count in header
        $('.pro-count').text(response.data.cart_count);
        
        // Update cart total
        $('.cart-total').text(response.data.cart_total);
        
        // Update WooCommerce fragments if available
        if (typeof wc_add_to_cart_params !== 'undefined') {
            $(document.body).trigger('wc_fragment_refresh');
        }
                        
                        // Show success message
                        showCartMessage('Item removed from cart', 'success');
                    } else {
                        showCartMessage('Error removing item', 'error');
                    }
                },
                error: function() {
                    showCartMessage('Error removing item. Please try again.', 'error');
                },
                complete: function() {
                    $cartItem.removeClass('loading');
                }
            });
        });
        
        // Update cart dropdown when cart is updated elsewhere
        $(document.body).on('updated_cart_totals', function() {
            updateCartDropdown();
        });
        
        $(document.body).on('added_to_cart', function() {
            updateCartDropdown();
        });
        
        // Function to update cart dropdown content
        function updateCartDropdown() {
            $('.cart-dropdown-wrap').each(function() {
                var $dropdown = $(this);
                
                // Skip if this is an account dropdown
                if ($dropdown.hasClass('account-dropdown')) {
                    return;
                }
                
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'POST',
                    data: {
                        action: 'cart_dropdown_update',
                        cart_action: 'get_cart_content',
                        nonce: cartDropdownNonce
                    },
                    success: function(response) {
                        if (response.success) {
                            $dropdown.html(response.data.cart_content);
                        }
                    }
                });
            });
        }
        
        // Function to show cart messages
        function showCartMessage(message, type) {
            var messageClass = type === 'success' ? 'cart-success' : 'cart-error';
            var $message = $('<div class="cart-message ' + messageClass + '">' + message + '</div>');
            
            $('body').append($message);
            
            setTimeout(function() {
                $message.fadeOut(function() {
                    $message.remove();
                });
            }, 3000);
        }
        
        // Initialize cart dropdown on page load
        updateCartDropdown();
        
        // Update cart count in header on page load
        updateCartCount();
        
        // Function to update cart count in header
        function updateCartCount() {
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'cart_dropdown_update',
                    cart_action: 'get_cart_content',
                    nonce: cartDropdownNonce
                },
                success: function(response) {
                    if (response.success) {
                        $('.pro-count').text(response.data.cart_count);
                    }
                }
            });
        }
    });
    </script>
    
    <style>
    .cart-message {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 20px;
        border-radius: 5px;
        color: white;
        font-weight: 500;
        z-index: 9999;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
    .cart-success {
        background-color: #28a745;
    }
    .cart-error {
        background-color: #dc3545;
    }
    .loading {
        opacity: 0.6;
        pointer-events: none;
    }
    .loading::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 20px;
        height: 20px;
        margin: -10px 0 0 -10px;
        border: 2px solid #f3f3f3;
        border-top: 2px solid #3498db;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    </style>
    <?php
}
add_action('wp_footer', 'add_cart_dropdown_ajax_script');


// Clean invalid cart items
function clean_invalid_cart_items() {
    if (is_admin() || !WC()->cart) {
        return;
    }
    
    $cart_items = WC()->cart->get_cart();
    $removed_items = false;
    
    foreach ($cart_items as $cart_item_key => $cart_item) {
        $product = $cart_item['data'];
        
        // Remove items with invalid products or zero quantity
        if (!$product || !$product->exists() || $cart_item['quantity'] <= 0) {
            WC()->cart->remove_cart_item($cart_item_key);
            $removed_items = true;
        }
    }
    
    // Recalculate totals if items were removed
    if ($removed_items) {
        WC()->cart->calculate_totals();
    }
}
add_action('wp_loaded', 'clean_invalid_cart_items');



add_action('wp_enqueue_scripts', 'NestTheme_enqueue_files');
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'header_menu' => __( 'header_menu'),
            'footer_menu'  => __( 'footer_menu'),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
add_filter('get_search_form','wpdocs_my_search_form');

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

// Replace WooCommerce breadcrumb with Yoast breadcrumb
function replace_woocommerce_breadcrumb_with_yoast() {
    if (function_exists('yoast_breadcrumb')) {
        // Remove WooCommerce breadcrumb
        remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
        
        // Add Yoast breadcrumb
        add_action('woocommerce_before_main_content', 'display_yoast_breadcrumb', 20);
    }
}
add_action('init', 'replace_woocommerce_breadcrumb_with_yoast');

// Function to display Yoast breadcrumb
function display_yoast_breadcrumb() {
    if (function_exists('yoast_breadcrumb')) {
        echo '<div class="container page-header breadcrumb-wrap">';
        echo '<div class="breadcrumb">';
        yoast_breadcrumb('<div class="yoast-breadcrumb">', '</div>');
        echo '</div>';
        echo '</div>';
    }
}









 
function remove_jquery_migrate( $scripts ) {
    if ( !is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            ['jquery-migrate']
        );
    }
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );



//remove uncategorized category from the loop
function exclude_uncategorized_category($query) {
    if (!is_admin() && $query->is_main_query()) {
        $query->set('category__not_in', array(15)); // Exclude category ID 15
    }
}
add_action('pre_get_posts', 'exclude_uncategorized_category');
function remove_uncategorized_from_lists($terms, $taxonomies, $args) {
    foreach ($terms as $key => $term) {
        if (is_object($term) && isset($term->term_id) && $term->term_id == 15) {
            unset($terms[$key]);
        }
    }
    return $terms;
}

add_filter('get_terms', 'remove_uncategorized_from_lists', 10, 3);
function exclude_uncategorized_woocommerce($args) {
    $args['exclude'] = array(15); // Exclude "Uncategorized" category from WooCommerce lists
    return $args;
}
add_filter('woocommerce_product_categories_widget_args', 'exclude_uncategorized_woocommerce');


/**
 * Ensure WooCommerce displays prices with 2 decimal places
 */
add_filter('woocommerce_price_trim_zeros', '__return_false');

/**
 * Change a currency symbol
 */
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol( $currency_symbol, $currency ) {
    switch( $currency ) {
        case 'JOD': $currency_symbol = 'JOD '; break;
    }
    return $currency_symbol;
}

/**
 * Force WooCommerce to always display 2 decimal places for prices
 */
add_filter('wc_get_price_decimals', function( $decimals ) {
    return 2; // Ensures 2 decimal places
});



// AJAX handler for clearing cart
function clear_cart_ajax_handler() {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'clear_cart_nonce')) {
        wp_die('Security check failed');
    }
    
    // Clear the cart
    WC()->cart->empty_cart();
    
    // Get updated cart fragments
    $fragments = apply_filters('woocommerce_add_to_cart_fragments', array());
    
    // Get cart totals
    ob_start();
    woocommerce_cart_totals();
    $cart_totals = ob_get_clean();
    
    // Return success response with updated content
    wp_send_json_success(array(
        'message' => 'Cart cleared successfully',
        'cart_count' => WC()->cart->get_cart_contents_count(),
        'cart_total' => WC()->cart->get_cart_total(),
        'fragments' => $fragments,
        'cart_totals' => $cart_totals
    ));
}
add_action('wp_ajax_clear_cart', 'clear_cart_ajax_handler');
add_action('wp_ajax_nopriv_clear_cart', 'clear_cart_ajax_handler');

// AJAX handler for cart dropdown updates
function cart_dropdown_ajax_handler() {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'cart_dropdown_nonce')) {
        wp_die('Security check failed');
    }
    
    $action = sanitize_text_field($_POST['cart_action']);
    $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
    
    switch ($action) {
        case 'remove_item':
            if ($cart_item_key) {
                WC()->cart->remove_cart_item($cart_item_key);
            }
            break;
            
        case 'update_quantity':
            $quantity = intval($_POST['quantity']);
            if ($cart_item_key && $quantity > 0) {
                WC()->cart->set_quantity($cart_item_key, $quantity);
            }
            break;
            
        case 'get_cart_content':
            // Just get the current cart content
            break;
    }
    
    // Get updated cart content
    ob_start();
    get_template_part('template-parts/cart-dropdown-content');
    $cart_content = ob_get_clean();
    
    // Get cart count and total
    $cart_count = WC()->cart->get_cart_contents_count();
    $cart_total = WC()->cart->get_cart_total();
    
    // Return success response
    wp_send_json_success(array(
        'cart_content' => $cart_content,
        'cart_count' => $cart_count,
        'cart_total' => $cart_total,
        'message' => 'Cart updated successfully'
    ));
}
add_action('wp_ajax_cart_dropdown_update', 'cart_dropdown_ajax_handler');
add_action('wp_ajax_nopriv_cart_dropdown_update', 'cart_dropdown_ajax_handler');

// Enable Add to Cart for Admin users
function enable_add_to_cart_for_admin() {
    if (current_user_can('administrator')) {
        // Force show add to cart button for admin
        add_filter('woocommerce_is_purchasable', '__return_true', 10, 2);
        add_filter('woocommerce_product_is_in_stock', '__return_true', 10, 2);
    }
}
add_action('init', 'enable_add_to_cart_for_admin');

// Simple fix for checkout page content
function restore_checkout_content() {
    if (is_checkout()) {
        // Force display WooCommerce checkout form
        add_action('wp_head', function() {
            echo '<style>.woocommerce-checkout { display: block !important; }</style>';
        });
    }
}
add_action('wp', 'restore_checkout_content');



// Fix wishlist not showing after AJAX filtering
function fix_wishlist_after_ajax() {
    ?>
    <script>
    jQuery(document).ready(function($) {
        // Re-initialize wishlist after AJAX filtering
        $(document).on('yith-wcan-ajax-filtered', function() {
            // Re-process wishlist shortcodes
            if (typeof yith_wcwl_l10n !== 'undefined') {
                // Re-initialize wishlist functionality
                $('.yith-wcwl-add-to-wishlist').each(function() {
                    var $this = $(this);
                    if (!$this.hasClass('yith-wcwl-initialized')) {
                        $this.addClass('yith-wcwl-initialized');
                        // Trigger wishlist initialization
                        if (typeof yith_wcwl_init !== 'undefined') {
                            yith_wcwl_init();
                        }
                    }
                });
            }
            
            // Alternative: Force reload wishlist scripts
            if (typeof yith_wcwl_frontend !== 'undefined') {
                yith_wcwl_frontend.init();
            }
        });
        
        // Also try to re-initialize on document ready for AJAX content
        $(document).on('DOMNodeInserted', function(e) {
            if ($(e.target).find('.yith-wcwl-add-to-wishlist').length > 0) {
                setTimeout(function() {
                    if (typeof yith_wcwl_init !== 'undefined') {
                        yith_wcwl_init();
                    }
                }, 100);
            }
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'fix_wishlist_after_ajax');

// Handle custom per_page parameter for shop
function custom_shop_per_page($query) {
    if (!is_admin() && $query->is_main_query()) {
        if (is_shop() || is_product_category() || is_product_tag()) {
            if (isset($_GET['per_page']) && !empty($_GET['per_page'])) {
                $per_page = intval($_GET['per_page']);
                if ($per_page > 0) {
                    $query->set('posts_per_page', $per_page);
                }
            }
        }
    }
}
add_action('pre_get_posts', 'custom_shop_per_page');

// Handle custom orderby parameter for shop
function custom_shop_orderby($query) {
    if (!is_admin() && $query->is_main_query()) {
        if (is_shop() || is_product_category() || is_product_tag()) {
            if (isset($_GET['orderby']) && !empty($_GET['orderby'])) {
                $orderby = sanitize_text_field($_GET['orderby']);
                $query->set('orderby', $orderby);
                
                // Set order direction for price sorting
                if ($orderby === 'price') {
                    $query->set('order', 'ASC');
                } elseif ($orderby === 'price-desc') {
                    $query->set('orderby', 'price');
                    $query->set('order', 'DESC');
                }
            }
        }
    }
}
add_action('pre_get_posts', 'custom_shop_orderby');

// anything under this ai

?>
