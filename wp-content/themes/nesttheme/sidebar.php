
            <div class="theiaStickySidebar">
            <?php if (!is_product()) : ?>
            <div class="sidebar-widget widget-category-2 mb-30">
                <h5 class="section-title style-1 mb-30">Category</h5>
                
<?php echo do_shortcode('[yith_wcan_filters slug="default-preset"]'); ?>


            </div>
            <?php endif; ?>

                <!-- Fillter By Price -->
                <?php if (!is_product()) : ?>
                <div class="sidebar-widget price_range range mb-30">
                    <h5 class="section-title style-1 mb-30">Fill by price</h5>
                    <div class="price-filter">
                        <?php echo do_shortcode('[yith_wcan_filters slug="price"]'); ?>
                    </div>
                </div>
                <?php endif; ?>

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

                <div class="banner-img wow fadeIn mb-lg-0 animated d-lg-block">
                <?php
                    $args = array('post_type' => 'page','p' => 325);
                    $loop = new wp_query($args);
                    if($loop->have_posts()) { $loop->the_post();
                ?>
                    <img src="<?php echo get_field('shop_ad_image'); ?>" alt="" />
                    <div class="banner-text">
                        <h4>
                            <?php echo get_field('shop_ad_title'); ?>
                        </h4>
                    </div>
                <?php } wp_reset_query();?>
                   
                </div>
            </div>
