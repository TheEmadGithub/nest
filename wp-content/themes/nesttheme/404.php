<?php get_header();
// template name: 404
?>
<main class="main page-404">
    <div class="page-content pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto text-center">
                    <p class="mb-20"><img src="<?php bloginfo('template_directory');?>/assets/imgs/page/page-404.png" alt="" class="hover-up" /></p>
                    <h1 class="display-2 mb-30">Page Not Found</h1>
                    <p class="font-lg text-grey-700 mb-30">
                        The link you clicked may be broken or the page may have been removed.<br />
                        visit the <a href="<?php echo home_url(); ?>"> <span> Homepage</span></a> or <a href="<?php echo home_url('/contact-us/'); ?>"><span>Contact us</span></a> about the problem
                    </p>
                    <div class="search-form">
                        <?php echo do_shortcode('[ivory-search id="303" title="AJAX Search Form for WooCommerce"]'); ?>
                    </div>
                    <a class="btn btn-default submit-auto-width font-xs hover-up mt-30" href="<?php echo home_url(); ?>"><i class="fi-rs-home mr-5"></i> Back To Home Page</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>