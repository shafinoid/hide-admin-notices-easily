<?php
/**
 * Plugin Name: Hide Admin Notices Easily
 * Plugin URI: 
 * Description: Simply activate the plugin to hide all admin notices
 * Version: 1.0.0
 * Author: Shafinoid
 * Author URI: https://www.shafinoid.com/
 * Text Domain: hide-admin-notices-easily
 * Domain Path: /languages
 *
 * @package Hide_Admin_Notices
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Main plugin class.
 *
 * @since 1.0.0
 */
final class Hide_Admin_Notices_Easily {

    /**
     * Plugin version.
     *
     * @since 1.0.0
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * Constructor.
     *
     * @since 1.0.0
     */
    public function __construct() {
        $this->define_constants();
        $this->load_dependencies();
        $this->register_hooks();
    }

    /**
     * Define plugin constants.
     *
     * @since 1.0.0
     */
    private function define_constants() {
        define( 'HIDE_ADMIN_NOTICES_VERSION', self::VERSION );
        define( 'HIDE_ADMIN_NOTICES_DIR', plugin_dir_path( __FILE__ ) );
        define( 'HIDE_ADMIN_NOTICES_URL', plugin_dir_url( __FILE__ ) );
    }

    /**
     * Load plugin dependencies.
     *
     * @since 1.0.0
     */
    private function load_dependencies() {
        // No dependencies to load.
    }

    /**
     * Register plugin hooks.
     *
     * @since 1.0.0
     */
    private function register_hooks() {
        add_action( 'admin_init', array( $this, 'hide_admin_notices_easily' ) );
    }

    /**
     * Hide admin notices.
     *
     * @since 1.0.0
     */
    public function hide_admin_notices_easily() {
        remove_all_actions( 'admin_notices' );
    }

}

new Hide_Admin_Notices_Easily();
