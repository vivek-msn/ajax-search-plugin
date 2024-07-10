<?php
/**
 * Plugin Name: AJAX Live Search
 * Description: A plugin for AJAX-based live search with keyboard navigation.
 * Version: 1.0
 * Author: Vivek
 * License: GPL2
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants
define( 'ALS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'ALS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Activation hook
function als_activate() {
    // Code to execute on activation, if needed
}
register_activation_hook( __FILE__, 'als_activate' );

// Deactivation hook
function als_deactivate() {
    // Code to execute on deactivation, if needed
}
register_deactivation_hook( __FILE__, 'als_deactivate' );

// Initialize the plugin
function als_init() {
    // Register shortcode
    add_shortcode( 'ajax_live_search', 'als_shortcode' );

    // Enqueue scripts and styles
    function als_enqueue_scripts() {
        wp_enqueue_script( 'ajax-live-search', ALS_PLUGIN_URL . 'ajax-live-search.js', array( 'jquery' ), null, true );
        wp_enqueue_style( 'ajax-live-search-style', ALS_PLUGIN_URL . 'ajax-live-search.css' );
        wp_localize_script( 'ajax-live-search', 'ajax_vars', array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
        ));
    }
    add_action( 'wp_enqueue_scripts', 'als_enqueue_scripts' );

    // Register AJAX handler
    function als_live_search() {
        $query = isset( $_POST['query'] ) ? sanitize_text_field( $_POST['query'] ) : '';

        if ( ! empty( $query ) ) {
            $args = array(
                'post_type' => 'product',
                's'         => $query,
                'posts_per_page' => 10,
            );

            $search_query = new WP_Query( $args );

            if ( $search_query->have_posts() ) {
                echo '<ul>';
                while ( $search_query->have_posts() ) {
                    $search_query->the_post();
                    echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
                }
                echo '</ul>';
            } else {
                echo '<p>No results found</p>';
            }

            wp_reset_postdata();
        }

        wp_die();
    }
    add_action( 'wp_ajax_live_search', 'als_live_search' );
    add_action( 'wp_ajax_nopriv_live_search', 'als_live_search' );
}
add_action( 'plugins_loaded', 'als_init' );

