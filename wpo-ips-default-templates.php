<?php
/**
 * Plugin Name:      PDF Invoices & Packing Slips for WooCommerce - Default Templates
 * Requires Plugins: woocommerce-pdf-invoices-packing-slips
 * Plugin URI:       https://wpovernight.com/downloads/woocommerce-pdf-invoices-packing-slips-bundle/
 * Description:      Default Templates for PDF Invoices & Packing Slips for WooCommerce
 * Version:          1.0.0
 * Author:           WP Overnight
 * Author URI:       http://www.wpovernight.com
 * License:          GPLv3
 * License URI:      License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

const WPO_IPS_DEFAULT_TEMPLATES_VERSION = '1.0.0';

function wpo_ips_default_templates_extension_path( $template_paths ) {
	$template_paths['extension::v' . WPO_IPS_DEFAULT_TEMPLATES_VERSION] = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/';
	return $template_paths;
}
add_filter( 'wpo_wcpdf_template_paths', 'wpo_ips_default_templates_extension_path', 10, 1 );
