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
