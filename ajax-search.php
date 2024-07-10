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
?>

<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Define plugin constants
define( 'AJAX_SEARCH_VERSION', '1.0.0' );
define( 'AJAX_SEARCH_DIR', plugin_dir_path( __FILE__ ) );
define( 'AJAX_SEARCH_URL', plugin_dir_url( __FILE__ ) );

// Include necessary files
include_once AJAX_LIVE_SEARCH_PLUGIN_DIR . 'includes/class-ajax-search.php';

// Initialize the plugin
function ajaxsearchinit() {
    $ajaxsearch = new AJAX_Live_Search();
}
add_action( 'plugins_loaded', 'ajax_live_search_init' );
