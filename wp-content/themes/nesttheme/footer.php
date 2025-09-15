<footer class="main">
        <?php
            $args = array('post_type' => 'page','p' => 166);
            $loop = new WP_Query($args);
            if($loop->have_posts()) { $loop->the_post();
        ?>
            <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="position-relative newsletter-inner" style="background: url(<?php echo get_field('newsletter_bg_image');?>) no-repeat center;">
                                <div class="newsletter-content">
                                    <h2 class="mb-20">
                                    <?php echo get_field('newsletter_title');?>
                                    </h2>
                                    <div class="mb-45"><?php echo get_field('newsletter_description');?></div>
                                    <?php echo do_shortcode('[newsletter_form form="1"]'); ?>
                                </div>
                                <img src="<?php echo get_field('newsletter_image');?>" alt="newsletter" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="featured section-padding">
                <div class="container">
                    <div class="row">


                    <?php if( have_rows('footer_featured_repeater') ): ?>
                        <?php while( have_rows('footer_featured_repeater') ): the_row(); ?>
                            
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                                    <div class="banner-icon">
                                        <img src="<?php echo get_sub_field('image'); ?>" alt="" />
                                    </div>
                                    <div class="banner-text">
                                        <h3 class="icon-box-title"><?php echo get_sub_field('title'); ?></h3>
                                        <p><?php echo get_sub_field('description'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                        
                        
                    </div>
                </div>
            </section>
            <section class="section-padding footer-mid">
                <div class="container pt-15 pb-20">
                    <div class="row">
                        <div class="col">
                            <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                                <div class="logo mb-30">
                                    <a href="<?php echo site_url(); ?>" class="mb-15"><img src="<?php bloginfo('template_directory');?>/assets/imgs/theme/logo.svg" alt="logo" /></a>
                                    <p class="font-lg text-heading">Awesome grocery store website template</p>
                                </div>
                                <ul class="contact-infor">
                                    <li><img src="<?php bloginfo('template_directory');?>/assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span><?php echo get_field('location');?></span></li>
                                    <li><img src="<?php bloginfo('template_directory');?>/assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span><a href="tel:<?php echo get_field('phone');?>" target="_blank" ><?php echo get_field('phone');?></a></span></li>
                                    <li><img src="<?php bloginfo('template_directory');?>/assets/imgs/theme/icons/icon-email-2.svg" alt="" /><strong>Email:</strong><span><a href="mailto:<?php echo get_field('email');?>" target="_blank" ><?php echo get_field('email');?></a></span></li>
                                    <li><img src="<?php bloginfo('template_directory');?>/assets/imgs/theme/icons/icon-clock.svg" alt="" /><strong>Hours:</strong><span><?php echo get_field('hours');?></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <h4 class=" widget-title">Company</h4>
                            <ul class="">
                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'footer_menu',
                                        'menu_class' => "footer-list mb-sm-5 mb-md-0",
                                        'container' => false
                                    ) );
                                ?>  
                        </div>
                        <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <h4 class="widget-title">Account</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="<?php echo is_user_logged_in() ? wp_logout_url() : wp_login_url(); ?>"><?php echo is_user_logged_in() ? 'Sign Out' : 'Sign In'; ?></a></li>
                                <li><a href="<?php echo wc_get_cart_url(); ?>">View Cart</a></li>
                                <li><a href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>">My Wishlist</a></li>
                                <li><a href="<?php echo wc_get_page_permalink('myaccount'); ?>">My Account</a></li>
                            </ul>
                        </div>
                        <div class="d-none footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <h4 class="widget-title">Corporate</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="#">Become a Vendor</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Farm Business</a></li>
                                <li><a href="#">Farm Careers</a></li>
                                <li><a href="#">Our Suppliers</a></li>
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Promotions</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <h4 class="widget-title">Popular</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <?php
                                // Get top 4 best selling products using get_posts to avoid query conflicts
                                $best_selling_products = get_posts(array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 4,
                                    'meta_key' => 'total_sales',
                                    'orderby' => 'meta_value_num',
                                    'order' => 'DESC'
                                ));
                                
                                if (!empty($best_selling_products)) :
                                    foreach ($best_selling_products as $product_post) :
                                ?>
                                    <li><a href="<?php echo get_permalink($product_post->ID); ?>"><?php echo $product_post->post_title; ?></a></li>
                                <?php 
                                    endforeach;
                                else :
                                    // Fallback to product categories if no products found
                                    $categories = get_terms(array(
                                        'taxonomy' => 'product_cat',
                                        'hide_empty' => false,
                                        'number' => 4
                                    ));
                                    
                                    if (!empty($categories) && !is_wp_error($categories)) {
                                        foreach ($categories as $category) {
                                            echo '<li><a href="' . get_term_link($category) . '">' . esc_html($category->name) . '</a></li>';
                                        }
                                    }
                                endif;
                                ?>
                            </ul>
                        </div>
                        <div class="footer-link-widget widget-install-app col wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <h4 class="widget-title">Install App</h4>
                            <p class="">From App Store or Google Play</p>
                            <div class="download-app">
                                <?php if( have_rows('app_links') ): ?>
                                    <?php while( have_rows('app_links') ): the_row(); ?>
                                        <a href="<?php echo get_sub_field('link'); ?>" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="<?php echo get_sub_field('image'); ?>" alt="" /></a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <p class="mb-20">Secured Payment Gateways</p>
                            <img class="" src="<?php bloginfo('template_directory');?>/assets/imgs/theme/payment-method.png" alt="" />
                        </div>
                    </div>
            </section>
            <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                <div class="row align-items-center">
                    <div class="col-12 mb-30">
                        <div class="footer-bottom"></div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <p class="font-sm mb-0">&copy; <?php echo date('Y'); ?>, <strong class="text-brand"><?php echo get_bloginfo('name'); ?></strong>  All rights reserved</p>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">
                       
                        <div class="hotline d-lg-inline-flex">
                            <img src="<?php bloginfo('template_directory');?>/assets/imgs/theme/icons/phone-call.svg" alt="hotline" />
                            <p><a href="tel:<?php echo get_field('phone');?>"><?php echo get_field('phone');?></a><span>24/7 Support Center</span></p>
                        </div>                            
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                        <div class="mobile-social-icon">
                            <h6>Follow Us</h6>
                            <?php if( have_rows('follow_us') ): ?>
                                <?php while( have_rows('follow_us') ): the_row(); ?>
                                    <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('icon'); ?></a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            
                    </div>
                </div>
            </div>
        <?php } wp_reset_postdata(); wp_reset_query();?>

    </footer>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center ">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="<?php bloginfo('template_directory');?>/assets/imgs/theme/loading.gif"/>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>

</html>


