<?php


/*function my_function() {
 if ( is_category() && $query->is_main_query() ) {
 $query->set( 'orderby', 'title');
 $query->set( 'order', 'ASC' );
 return $query;
 }
}*/
//add_action( 'pre_get_posts', 'my_function');




/* mais hooks em businessbloomer.com/woocommerce-visual-hook-guide-single-product-page */
/*add_action('woocommerce_product_meta_start','social_share_buttons');

function social_share_buttons(){
  echo do_shortcode("[social_share_button]");
}*/

/*
add_image_size( 'medium_large', '768', '0', false );
add_image_size( 'woocommerce_single', '416', '0', false );
add_image_size( 'shop_single', '768', '0', false );
add_image_size( 'medium_large', '768', '0', false );
add_image_size( 'woocommerce_thumbnail', '324', '324', true );
add_image_size( 'woocommerce_gallery_thumbnail', '100', '100', true );
add_image_size( 'shop_catalog', '324', '324', true );
add_image_size( 'shop_thumbnail', '100', '100', true );
*/

// Declare WooCommerce support.
/*add_theme_support( 'woocommerce', apply_filters( 'storefront_woocommerce_args', array(
	'single_image_width'    => 768,
	'thumbnail_image_width' => 324,
	'product_grid'          => array(
		'default_columns' => 3,
		'default_rows'    => 4,
		'min_columns'     => 1,
		'max_columns'     => 6,
		'min_rows'        => 1
	)
) ) );*/


/* Image sizes for a Storefront child theme - WooCommerce 3.3 */
add_filter( 'storefront_woocommerce_args', 'override_storefront_woocommerce_args' );
function override_storefront_woocommerce_args( $args ) {
	$args['single_image_width'] = 1200;
	$args['thumbnail_image_width'] = 600;
	return $args;
}

/*    add_theme_support( 'woocommerce', array(
    'single_image_width' => 768,
    ) );*/

?>
