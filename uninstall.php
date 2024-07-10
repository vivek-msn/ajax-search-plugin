<?php
// If uninstall is not called from WordPress, exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

// Example cleanup tasks:

// 1. Delete plugin options
// delete_option( 'als_plugin_option_name' );

// 2. Remove any custom database tables created by the plugin
// global $wpdb;
// $table_name = $wpdb->prefix . 'custom_table_name';
// $wpdb->query( "DROP TABLE IF EXISTS $table_name" );

// Add any other cleanup tasks here

// No need to call wp_die() or exit, WordPress will handle it
?>
