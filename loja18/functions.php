<?php

/* Image sizes for a Storefront child theme - WooCommerce 3.3 */
add_filter( 'storefront_woocommerce_args', 'override_storefront_woocommerce_args' );
function override_storefront_woocommerce_args( $args ) {
$args['single_image_width'] = 1200;
$args['thumbnail_image_width'] = 600;
return $args;
}

/**
 * Override theme default specification for product # per row
 */
/*function loop_columns() {
return 3; // 5 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);*/


/* desabilita o zoom com  mouseover */
function remove_image_zoom_support() {
    remove_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'wp', 'remove_image_zoom_support', 100 );

wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.6.1/css/all.css' );

?>
