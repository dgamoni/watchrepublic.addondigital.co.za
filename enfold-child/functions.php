<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

add_action('wp_footer', 'add_custom_css');
function add_custom_css() { ?>
	<script>
		jQuery(document).ready(function($) {

		});
	</script>
	<style>
/*	.product.sale {
		display: none;
	}
	.products {
		display: flex;
	    flex-wrap: wrap;
	    justify-content: center;
	}*/
	</style>
	<?php
}


// add_action( 'woocommerce_product_query', 'so_20990199_product_query' );

// function so_20990199_product_query( $q ){

//     $product_ids_on_sale = wc_get_product_ids_on_sale();

//     $q->set( 'post__in', $product_ids_on_sale );

// }

// add_action( 'woocommerce_product_query', 'so_20990199_product_query' );

// function so_20990199_product_query( $q ){

//     $product_ids_on_sale = wc_get_product_ids_on_sale();

//     $q->set( 'post__in', (array) $product_ids_on_sale );

// }

add_filter('avia_load_shortcodes', 'avia_include_shortcode_template', 15, 1);
function avia_include_shortcode_template($paths) {
	$template_url = get_stylesheet_directory();
	array_unshift($paths, $template_url.'/shortcodes/');

return $paths;
}
