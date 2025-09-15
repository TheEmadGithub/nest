<?php
defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_cart_is_empty' );
?>

<main class="main">
    <div class="container mb-80 mt-50">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="heading-2 mb-20"><?php esc_html_e( 'Your cart is currently empty.', 'woocommerce' ); ?></h1>
                <?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
                    <a class="btn" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">
                        <i class="fi-rs-arrow-left mr-10"></i><?php esc_html_e( 'Return to shop', 'woocommerce' ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
