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
                    <h1 class="mb-15">Snack</h1>
                    <div class="breadcrumb">
                        <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                        <span></span> Shop <span></span> Snack
                    </div>
                </div>
                <div class="col-xl-9 text-end d-none d-xl-block-">
                    <ul class="tags-list">
                        <li class="hover-up">
                            <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Cabbage</a>
                        </li>
                        <li class="hover-up active">
                            <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Broccoli</a>
                        </li>
                        <li class="hover-up">
                            <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Artichoke</a>
                        </li>
                        <li class="hover-up">
                            <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Celery</a>
                        </li>
                        <li class="hover-up mr-0">
                            <a href="blog-category-grid.html"><i class="fi-rs-cross mr-10"></i>Spinach</a>
                        </li>
                    </ul>
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
                                <span id="selected-show">50 <i class="fi-rs-angle-small-down"></i></span>
                            </div>
                        </div>
                        <div class="sort-by-dropdown" id="show-options">
                            <ul>
                                <li><a href="#" data-value="50">50</a></li>
                                <li><a href="#" data-value="100">100</a></li>
                                <li><a href="#" data-value="150">150</a></li>
                                <li><a href="#" data-value="200">200</a></li>
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
                                <span id="selected-sort">Featured <i class="fi-rs-angle-small-down"></i></span>
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
                                <a aria-label="Add To Wishlist" class="action-btn" href="#"><i
                                        class="fi-rs-heart"></i></a>
                                <a aria-label="Compare" class="action-btn" href="#"><i class="fi-rs-shuffle"></i></a>
                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                    data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
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
                                            <a class="add" href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" 
                                            data-quantity="1" 
                                            class="button add_to_cart_button ajax_add_to_cart">
                                                Add to Cart
                                            </a>
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
        <div class="shop-accordion col-lg-1-5 primary-sidebar sticky-sidebar">
            <div class="sidebar-widget widget-category-2 mb-30">
                <h5 class="section-title style-1 mb-30">Category</h5>
                <ul class="accordion">
                    <?php
                        $args = array(
                            'taxonomy'   => 'product_cat',
                            'orderby'    => 'name',
                            'order'      => 'ASC',
                            'hide_empty' => false,
                            'parent'     => 0 // Get only top-level categories (Men, Women)
                        );

                        $parent_categories = get_terms($args);

                        if (!empty($parent_categories) && !is_wp_error($parent_categories)) {
                            foreach ($parent_categories as $category) {
                                $category_link = get_term_link($category);
                                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                                $category_image = wp_get_attachment_url($thumbnail_id) ?: get_template_directory_uri() . '/assets/imgs/theme/icons/default-category.svg';
                                
                                // Get subcategories
                                $subcategories = get_terms(array(
                                    'taxonomy'   => 'product_cat',
                                    'hide_empty' => false,
                                    'parent'     => $category->term_id // Get only child categories
                                ));
                                ?>
                    <li class="accordion-item">
                        <div class="accordion-header">
                            <a href="<?php echo esc_url($category_link); ?>" class="category-link">
                                <img src="<?php echo esc_url($category_image); ?>"
                                    alt="<?php echo esc_attr($category->name); ?>" />
                                <?php echo esc_html($category->name); ?>
                            </a>
                            <?php if (!empty($subcategories)) : ?>
                            <button class="accordion-toggle">&#9662;</button>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($subcategories)) : ?>
                        <div class="accordion-content">
                            <ul class="subcategories">
                                <?php foreach ($subcategories as $subcategory) : ?>
                                <li class="subcategory-item">
                                    <a href="<?php echo get_term_link($subcategory); ?>" class="subcategory-link">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/imgs/theme/icons/default-category.svg'); ?>"
                                            alt="<?php echo esc_attr($subcategory->name); ?>" />
                                        <?php echo esc_html($subcategory->name); ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </li>
                    <?php
                            }
                        } else {
                            echo '<li>No categories found.</li>';
                        }
                    ?>
                </ul>



            </div>
            <!-- Fillter By Price -->
            <div class="sidebar-widget price_range range mb-30">
                <h5 class="section-title style-1 mb-30">Fill by price</h5>
                <div class="price-filter">
                    <div class="price-filter-inner">
                        <div id="slider-range" class="mb-20"></div>
                        <div class="d-flex justify-content-between">
                            <div class="caption">From: <strong id="slider-range-value1" class="text-brand"></strong>
                            </div>
                            <div class="caption">To: <strong id="slider-range-value2" class="text-brand"></strong></div>
                        </div>
                    </div>
                </div>
                <div class="list-group">
                    <div class="list-group-item mb-10 mt-10">
                        <label class="fw-900">Color</label>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1"
                                value="" />
                            <label class="form-check-label" for="exampleCheckbox1"><span>Red (56)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2"
                                value="" />
                            <label class="form-check-label" for="exampleCheckbox2"><span>Green (78)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3"
                                value="" />
                            <label class="form-check-label" for="exampleCheckbox3"><span>Blue (54)</span></label>
                        </div>
                        <label class="fw-900 mt-15">Item Condition</label>
                        <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11"
                                value="" />
                            <label class="form-check-label" for="exampleCheckbox11"><span>New (1506)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox21"
                                value="" />
                            <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished
                                    (27)</span></label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox31"
                                value="" />
                            <label class="form-check-label" for="exampleCheckbox31"><span>Used (45)</span></label>
                        </div>
                    </div>
                </div>
                <a href="shop-grid-right.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i>
                    Fillter</a>
            </div>
            <!-- Product sidebar Widget -->
            <div class="sidebar-widget product-sidebar mb-30 p-30 bg-grey border-radius-10">
                <h5 class="section-title style-1 mb-30">New products</h5>

                <?php
                                    $args = array(
                                        'post_type'      => 'product',
                                        'posts_per_page' => 3,
                                        'orderby'        => 'date',
                                        'order'          => 'DESC',
                                    );

                                    $loop = new WP_Query($args);

                                    if ($loop->have_posts()) :
                                        while ($loop->have_posts()) : $loop->the_post();
                                            global $product;
                                ?>


                <div class="single-post clearfix">
                    <div class="image">
                        <img src="<?php echo get_the_post_thumbnail($product->get_id(), 'medium'); ?>" />
                    </div>
                    <div class="content pt-10">
                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                        <p class="price mb-0 mt-5"><?php echo $product->get_price_html(); ?></p>
                        <div class="product-rate">
                            <div class="product-rating"
                                style="width: <?php echo ($product->get_average_rating() / 5) * 100; ?>%"></div>
                        </div>
                    </div>
                </div>
                <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                ?>


            </div>
            <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block d-none">
                <img src="<?php bloginfo('template_directory');?>/assets/imgs/banner/banner-11.png" alt="" />
                <div class="banner-text">
                    <span>Oganic</span>
                    <h4>
                        Save 17% <br />
                        on <span class="text-brand">Oganic</span><br />
                        Juice
                    </h4>
                </div>
            </div>
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