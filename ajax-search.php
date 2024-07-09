<?php
/*
Plugin Name: AJAX Search
Description: Enhances the search experience by providing real-time search results.
Version: 1.0.0
Author: Vivek Saini
License: GPL-2.0-or-later
License URI: https://opensource.org/licenses/GPL-2.0
Text Domain: ajax-search
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Define plugin constants
define( 'AJAX_SEARCH_VERSION', '1.0.0' );
define( 'AJAX_SEARCH_DIR', plugin_dir_path( __FILE__ ) );
define( 'AJAX_SEARCH_URL', plugin_dir_url( __FILE__ ) );

// Include necessary files
require 'vendor/autoload.php'; // Composer's autoload file
use AJAX-SEARCH-PLUGIN\includes\AjaxSearch;

// Initialize the plugin
function runajaxSearch() {
    $plugin = new AJAX_Search();
    $plugin->run();
}
runajaxSearch();
