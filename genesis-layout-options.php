<?php
/**
 * Genesis Layout Options
 *
 * @package           Genesis_Layout_Options
 * @author            Brad Potter
 * @license           GPL-2.0+
 * @link              http://www.bradpotter.com/plugins/genesis-layout-options
 * @copyright         Copyright (c) 2014, Brad Potter
 *
 * @wordpress-plugin
 * Plugin Name:       Genesis Layout Options
 * Plugin URI:        http://wordpress.org/plugins/genesis-layout-options
 * Description:       Adds additional layout options to the Genesis Framework.
 * Version:           1.0.0
 * Author:            Brad Potter
 * Author URI:        http://www.bradpotter.com
 * Text Domain:       genesis-layout-options
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/bradpotter/genesis-layout-options
 * GitHub Branch:     master
 */

/**
 * If this file is called directly, abort.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Setting constants
 */
define( 'GLO_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'GLO_URL' , WP_PLUGIN_URL . '/' . str_replace( basename( __FILE__ ), "" , plugin_basename( __FILE__ ) ) );

/**
 * Required files
 */
 require_once plugin_dir_path( __FILE__ ) . 'genesis-layout-options-functions.php';