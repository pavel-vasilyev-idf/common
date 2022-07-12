<?php

/*
 * Plugin Name: Advanced Custom Fields: Menu Chooser
 * Plugin URI: https://github.com/reyhoun/acf-menu-chooser
 * Description: List WordPress Menus in a select ACF field.
 * Version: 1.1.0
 * Author: Reyhoun
 * Author URI: http://reyhoun.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/reyhoun/acf-menu-chooser
 * GitHub Branch:     master
*/


// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-menu-chooser', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 


// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_menu_chooser( $version ) {
	include_once('acf-menu-chooser-v5.php');	
}

add_action('acf/include_field_types', 'include_field_types_menu_chooser');
?>