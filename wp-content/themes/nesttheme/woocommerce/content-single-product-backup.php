<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product ) {
    return;
}
?>
 <div class="container mb-30 single-product-page">
            <div class="row">
                <div class="col-xl-11 col-lg-12 m-auto">
                    <div class="row flex-row-reverse">
						<div class="col-xl-9">
							<div class="product-detail accordion-detail">
								<div class="row mb-50 mt-30">
									<!-- Product Images -->
									<div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                    <?php 
                                        $attachment_ids = $product->get_gallery_image_ids();
                                        ?>

                                        <div class="detail-gallery">
                                            <span class="zoom-icon"><i class="fi-rs-search"></i></span>

                                            <!-- MAIN SLIDES -->
                                            <div class="product-image-slider">
                                                <?php if (!empty($attachment_ids)) : ?>
                                                    <?php foreach ($attachment_ids as $attachment_id) : ?>
                                                        <figure class="border-radius-10">
                                                            <img src="<?php echo wp_get_attachment_url($attachment_id); ?>" alt="product image" />
                                                        </figure>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <figure class="border-radius-10">
                                                        <img src="<?php echo get_the_post_thumbnail_url($product->get_id(), 'full'); ?>" alt="product image" />
                                                    </figure>
                                                <?php endif; ?>
                                            </div>

                                            <!-- THUMBNAILS -->
                                            <div class="slider-nav-thumbnails">
                                                <?php if (!empty($attachment_ids)) : ?>
                                                    <?php foreach ($attachment_ids as $attachment_id) : ?>
                                                        <div>
                                                            <img src="<?php echo wp_get_attachment_image_url($attachment_id, 'thumbnail'); ?>" alt="product image" />
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <div>
                                                        <img src="<?php echo get_the_post_thumbnail_url($product->get_id(), 'thumbnail'); ?>" alt="product image" />
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

									</div>

									<!-- Product Info -->
									<div class="col-md-6 col-sm-12 col-xs-12">
										<div class="detail-info pr-30 pl-30">
											<?php if ( $product->is_on_sale() ) : ?>
												<span class="stock-status out-stock"> Sale Off </span>
											<?php endif; ?>

											<h2 class="title-detail"><?php the_title(); ?></h2>

											<div class="product-detail-rating">
												<div class="product-rate-cover text-end">
													<div class="product-rate d-inline-block">
														<div class="product-rating" style="width: <?php echo ( $product->get_average_rating() / 5 ) * 100; ?>%"></div>
													</div>
													<span class="font-small ml-5 text-muted"> (<?php echo esc_html( $product->get_review_count() ); ?> reviews)</span>
												</div>
											</div>
											<div class="clearfix product-price-cover">
												<div class="product-price primary-color float-left">
													<span class="current-price text-brand"><?php echo $product->get_price_html(); ?></span>
												</div>
											</div>

											<div class="short-desc mb-30">
												<p class="font-lg"><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
											</div>

											<div class="detail-extralink mb-50">
												<!-- <div class="detail-qty border radius">
													<a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
													<span class="qty-val">1</span>
													<a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
												</div> -->
												<div class="product-extra-link2">
													<?php woocommerce_template_single_add_to_cart(); ?>
													
												</div>
											</div>

											<div class="font-xs">
												<ul class="mr-50 float-start">
													<?php if($product->get_sku()){ ?><li class="mb-5">SKU: <span class="text-brand"><?php echo esc_html( $product->get_sku() ); ?></span></li><?php }?>
													<li class="mb-5">Stock:<span class="in-stock text-brand ml-5"><?php echo esc_html( $product->get_stock_quantity() ) . ' Items In Stock'; ?></span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Tabs: Description, Reviews -->
								<div class="product-info">
									<div class="tab-style3">
										<ul class="nav nav-tabs text-uppercase">
											<li class="nav-item">
												<a class="nav-link active" id="Description-tab" data-bs-toggle="tab" href="#Description">Description</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="Reviews-tab" data-bs-toggle="tab" href="#Reviews">Reviews (<?php echo esc_html( $product->get_review_count() ); ?>)</a>
											</li>
										</ul>
										<div class="tab-content shop_info_tab entry-main-content">
											<div class="tab-pane fade show active" id="Description">
												<p><?php echo apply_filters( 'the_content', $product->get_description() ); ?></p>
											</div>
											<div class="tab-pane fade" id="Reviews">
												<?php comments_template(); ?>
											</div>
										</div>
									</div>
								</div>

								<!-- Related Products -->
								<div class="row mt-60">
									<div class="col-12">
										<h2 class="section-title style-1 mb-30">Related products</h2>
									</div>
									<div class="col-12">
										<div class="row related-products">
											<?php
											$related_products = wc_get_related_products( $product->get_id(), 4 );

											foreach ( $related_products as $related_id ) :
												$related_product = wc_get_product( $related_id );
												$image_url = wp_get_attachment_url( $related_product->get_image_id() );
												?>
												<div class="col-lg-3 col-md-4 col-12 col-sm-6">
													<div class="product-cart-wrap hover-up">
														<div class="product-img-action-wrap">
															<div class="product-img product-img-zoom">
																<a href="<?php echo get_permalink( $related_id ); ?>">
																	<img class="default-img" src="<?php echo esc_url( $image_url ); ?>" alt="" />
																</a>
															</div>
														</div>
														<div class="product-content-wrap">
															<h2><a href="<?php echo get_permalink( $related_id ); ?>"><?php echo esc_html( $related_product->get_name() ); ?></a></h2>
															<div class="product-price">
																<span><?php echo $related_product->get_price_html(); ?></span>
															</div>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 primary-sidebar sticky-sidebar mt-30">
                            <?php get_sidebar(); ?>
                            <!-- Fillter By Price -->
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        