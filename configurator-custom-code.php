<?php
/**
 * Plugin Name:       Configurator - Custom code bootstrap
 * Plugin URI:        http://wc-product-configurator.com/
 * Description:       Use this plugin to start adding custom code to the configurator
 * Version:           1.0.1
 * Author:            marcusig
 * Author URI:        https://mklacroix.com
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

add_action( 'mkl_pc_scripts_product_page_after', 'mkl_custom_add_scripts' );

function mkl_custom_add_scripts() {
	// List of dependencies
	$dependencies = [
		'jquery',
		'wp-util',
		'wp-hooks',
		'mkl_pc/js/views/configurator'
	];
	// Enqueue a script
	wp_enqueue_script( 
		'mkl_pc/Custom/js', 
		trailingslashit( plugin_dir_url( __FILE__ ) ) . 'assets/js/custom.js', 
		$dependencies, 
		filemtime( trailingslashit( plugin_dir_path ( __FILE__ ) ) . 'assets/js/custom.js' ), 
		true
	);

	// Enqueue a CSS file
	wp_enqueue_style(
		'mkl_pc/Custom/css', 
		trailingslashit( plugin_dir_url( __FILE__ ) ) . 'assets/css/custom.css', 
		[],
		filemtime( trailingslashit( plugin_dir_path ( __FILE__ ) ) . 'assets/css/custom.css' ) 
	);
}

/**
 * Force loading the configurator assets on the frontpage

 add_filter( 'load_configurator_on_page', function( $load ) {
	if ( is_front_page() ) return true;
	return $load;
} );

// Force loading the configurator assets on every page
// add_filter( 'load_configurator_on_page', '__return_true' );
*/

