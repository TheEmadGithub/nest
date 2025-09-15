<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );
?>
<?php echo '<!-- Custom Archive Loaded -->'; ?>
<div class="page-header mt-30 mb-50">
    <div class="container">
        <div class="archive-header">
            <div class="row align-items-center">
                <div class="col-xl-3">
                    <h1 class="mb-15"><?php woocommerce_page_title(); ?></h1>
                    <div class="breadcrumb">
                        <?php 
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<div class="yoast-breadcrumb">', '</div>');
                        } else {
                            // Fallback to WooCommerce breadcrumb
                            woocommerce_breadcrumb();
                        }
                        ?>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</div>

<div class="shop-page container mb-30">
    <div class="row flex-row-reverse">
        <div class="col-lg-4-5">
            <div class="shop-product-fillter">
                <div class="totall-product">
                    <p>We found <strong class="text-brand" id="total-items">
                            <?php echo wc_get_loop_prop('total') ? wc_get_loop_prop('total') : 0; ?>
                        </strong> items for you!</p>
                </div>
                <div class="sort-by-product-area">
                    <div class="sort-by-cover mr-10">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps"></i>Show:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap" id="show-dropdown">
                                <span id="selected-show">
                                    <?php 
                                    $per_page = isset($_GET['per_page']) ? intval($_GET['per_page']) : 20;
                                    echo $per_page . ' <i class="fi-rs-angle-small-down"></i>';
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown" id="show-options">
                            <ul>
                                <li><a href="#" data-value="10">10</a></li>
                                <li><a href="#" data-value="20">20</a></li>
                                <li><a href="#" data-value="30">30</a></li>
                                <li><a href="#" data-value="all">All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sort-by-cover">
                        <div class="sort-by-product-wrap">
                            <div class="sort-by">
                                <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                            </div>
                            <div class="sort-by-dropdown-wrap" id="sort-dropdown">
                                <span id="selected-sort">
                                    <?php 
                                    $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'menu_order';
                                    $sort_labels = array(
                                        'menu_order' => 'Featured',
                                        'price' => 'Price: Low to High',
                                        'price-desc' => 'Price: High to Low',
                                        'date' => 'Release Date',
                                        'rating' => 'Avg. Rating'
                                    );
                                    echo ($sort_labels[$orderby] ?? 'Featured') . ' <i class="fi-rs-angle-small-down"></i>';
                                    ?>
                                </span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown" id="sort-options">
                            <ul>
                                <li><a href="#" data-value="featured">Featured</a></li>
                                <li><a href="#" data-value="low-high">Price: Low to High</a></li>
                                <li><a href="#" data-value="high-low">Price: High to Low</a></li>
                                <li><a href="#" data-value="release">Release Date</a></li>
                                <li><a href="#" data-value="rating">Avg. Rating</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>




                 <div class="row product-grid products columns-4">

                
                 <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); global $product; ?>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="default-img"
                                        src="<?php echo wp_get_attachment_image_url( $product->get_image_id(), 'full' ); ?>"
                                        alt="<?php the_title(); ?>" />
                                    <img class="hover-img"
                                        src="<?php echo wp_get_attachment_image_url( $product->get_gallery_image_ids()[0] ?? $product->get_image_id(), 'full' ); ?>"
                                        alt="<?php the_title(); ?>" />
                                </a>
                            </div>
                            <div class="product-action-1">
                                <!-- <a aria-label="Add To Wishlist" class="action-btn" href="#"><i
                                        class="fi-rs-heart"></i></a> -->
                                        <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                                <!-- <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a> -->
                                    <?php echo do_shortcode('[yith_quick_view product_id="' . get_the_ID() . '" label="<i class=\"fi-rs-eye\"></i>"]'); ?>

                            </div>
                            <?php if ( $product->is_on_sale() ) : ?>
                            <div class="product-badges product-badges-position product-badges-mrg">
                                <span class="hot">Sale</span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="product-content-wrap">
                            <div class="product-category">
                                <?php echo wc_get_product_category_list( $product->get_id(), ', ' ); ?>
                            </div>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="product-rate-cover">
                                <div class="product-rate d-inline-block">
                                    <div class="product-rating"
                                        style="width: <?php echo ( ( $product->get_average_rating() / 5 ) * 100 ); ?>%">
                                    </div>
                                </div>
                                <span class="font-small ml-5 text-muted">
                                    (<?php echo $product->get_average_rating(); ?>)</span>
                            </div>
                            <div>
                                <span class="font-small text-muted">By <?php echo get_the_author(); ?></span>
                            </div>
                            <div class="product-card-bottom">
                                <div class="product-price">
                                    <span><?php echo $product->get_price_html(); ?></span>
                                </div>
                                    <div class="add-cart">
                                        <?php if ( $product->is_type( 'variable' ) ) : ?>
                                            <a class="add" href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>">
                                               Read More
                                            </a>
                                        <?php else : ?>
                                            <?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                                sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                                                    esc_url( $product->add_to_cart_url() ),
                                                    esc_attr( 1 ),
                                                    esc_attr( 'button add add_to_cart_button ajax_add_to_cart' ),
                                                    $product->is_purchasable() && $product->is_in_stock() ? '' : 'disabled',
                                                    esc_html( $product->add_to_cart_text() )
                                                ),
                                                $product
                                            ); ?>
                                        <?php endif; ?>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                
                <?php endif; ?>
                   
                </div>
        </div>
        
        <!-- Sidebar -->
        <div class="shop-accordion col-lg-1-5 primary-sidebar sticky-sidebar">            
            <?php get_sidebar(); ?>
        </div>
      
    </div>
</div>


<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );