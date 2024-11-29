<?php
/**
 * Plugin Name:      PDF Invoices & Packing Slips for WooCommerce - Default Templates
 * Requires Plugins: woocommerce-pdf-invoices-packing-slips
 * Plugin URI:       https://github.com/wpovernight/templates
 * Description:      Default Templates for PDF Invoices & Packing Slips for WooCommerce
 * Version:          1.0.2
 * Author:           WP Overnight
 * Author URI:       http://www.wpovernight.com
 * License:          GPLv3
 * License URI:      http://www.gnu.org/licenses/gpl-3.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'WPO_IPS_Default_Templates' ) ) :
	
	class WPO_IPS_Default_Templates {
		
		/**
		 * Version
		 *
		 * @var string
		 */
		public $version = '1.0.2';
		
		/**
		 * Main instance
		 *
		 * @var WPO_IPS_Default_Templates
		 */
		protected static $_instance = null;
		
		/**
		 * Main instance
		 */
		public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
			}
			return self::$_instance;
		}
		
		/**
		 * Constructor
		 */
		public function __construct() {
			add_filter( 'wpo_wcpdf_template_paths', array( $this, 'add_template_path' ), 10, 1 );
		}

		/**
		 * Add the template path
		 * 
		 * @param array $template_paths
		 * @return array
		 */
		public function add_template_path( array $template_paths ): array {
			$template_paths['extension::v' . $this->version] = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/';
			return $template_paths;
		}
	}

endif;

/**
 * Returns the main instance of WPO_IPS_Default_Templates
 *
 * @return WPO_IPS_Default_Templates
 */
function WPO_IPS_Default_Templates() {
	return WPO_IPS_Default_Templates::instance();
}

WPO_IPS_Default_Templates();



