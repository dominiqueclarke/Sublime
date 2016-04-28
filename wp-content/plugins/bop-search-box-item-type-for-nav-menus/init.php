<?php 
/*
Plugin Name: Bop Search Box Item Type For Nav Menus
Description: Adds search box as a choice of item in navigation menus.
Version: 1.5.0
Author: The Bop
Author URI: http://thebop.biz
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: bop-nav-search-box-item
*/


//Reject if accessed directly
defined( 'ABSPATH' ) || die( 'Our survey says: ... X.' );



//NOTE: REMEMBER TO REPLACE PLUGIN_TEMPLATE and plugin-template



//Name any additional tables in the database (take care with multisite)
/*
global $wpdb;
$wpdb->PLUGIN_TEMPLATE_TABLE = $wpdb->prefix . 'PLUGIN_TEMPLATE_TABLE';
*/


/* Activation hook 
 * 
 * Uses the database to determine the version number and checks against
 * the current code version number. It then runs through all outstanding
 * update scripts in order of version number. If this is a fresh
 * install, it will run through all the update scripts (consider the
 * first update script as an install script).
 */
register_activation_hook( __FILE__, function(){
	
	define( 'BOP_PLUGIN_ACTIVATING', true ); // change this
	
	$current_folder = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;
	
	$db_version = get_site_option( 'bop_nav_search_box_item_version', '0.0.0', false );
	$pd = get_plugin_data( __FILE__, false, false );
	
	if( version_compare( $db_version, $pd['Version'], '<' ) ){
		
		if( $handle = opendir( $current_folder . 'updates' ) ){
			
			$updates = array();
			
			while( false !== ( $entry = readdir( $handle ) ) ){
				if( $entry != '.' && $entry != '..' ) {
					if( version_compare( $db_version, $entry, '<' ) ){
						$updates[] = $entry;
					}
					
				}
			}
			
			usort( $updates, 'version_compare' );
			
			foreach( $updates as $update ){
				require_once( $current_folder . 'updates' . DIRECTORY_SEPARATOR . $update . DIRECTORY_SEPARATOR . 'update.php' );
			}
			
			closedir($handle);
			
		}
		
		update_option( 'bop_nav_search_box_item_version', $pd['Version'], false );
	}
} );



/* Deactivation hook
 * 
 * Runs deactivate.php
 * 
 */
register_deactivation_hook( __FILE__, function(){
	
	define( 'BOP_PLUGIN_DEACTIVATING', true );
	
	require_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'deactivate.php' );
} );



/* Set up translations */
add_action( 'plugins_loaded', function(){
    load_plugin_textdomain( 'bop-nav-search-box-item', false, basename( dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR . 'languages' . DIRECTORY_SEPARATOR );
} );



/* Let's get started! */
require_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'plugin.php' );
