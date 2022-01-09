<?php

add_action( 'wp_enqueue_scripts', 'basel_child_enqueue_styles', 1000 );

function basel_child_enqueue_styles() {
	$version = basel_get_theme_info( 'Version' );
	
	if( basel_get_opt( 'minified_css' ) ) {
		wp_enqueue_style( 'basel-style', get_template_directory_uri() . '/style.min.css', array('bootstrap'), $version );
	} else {
		wp_enqueue_style( 'basel-style', get_template_directory_uri() . '/style.css', array('bootstrap'), $version );
	}
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('bootstrap'), $version );
}


add_action( 'wp_enqueue_scripts', 'additional_stylesheets', 1000);

function additional_stylesheets() {
	$version = basel_get_theme_info( 'Version' );
    wp_enqueue_style( 'custom_style', get_stylesheet_directory_uri().'/custom_style.css', array('bootstrap'), $version);
	wp_enqueue_style( 'media_query', get_stylesheet_directory_uri().'/media_query.css', array('bootstrap'), $version);
	wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri().'/custom_js.js', $version);
	

}



// woocomerce hook

/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */

        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 10 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
       