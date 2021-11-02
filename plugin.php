<?php
/**
 * Plugin Name: Theme.json builder
 * Description: Build theme.json file for your theme.
 * Version: 0.0.1
 * Author: Ryan Welcher, Daisy Olsen
 * Author URI: https://www.wordpress.org
 * Text Domain: theme-json-builder
 *
 * @package ThemeJsonBuilder
 */

namespace ThemeJsonBuilder;

use ThemeJsonBuilder\Admin;

/**
 * Helpful constants
 */
define( 'THEM_JSON_BUILDER_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'THEM_JSON_BUILDER_INC_PATH', THEM_JSON_BUILDER_DIR_PATH . '/includes/' );


// Require the files.
require_once THEM_JSON_BUILDER_INC_PATH . 'admin-page.php';


/**
 * Entry point for the plugin.
 */
Admin\init();
