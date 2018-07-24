<?php
/**
 * Plugin Name:     (WP-EXT) Event
 * Plugin URI:      https://metastore.pro/
 *
 * Description:     Event post type and more.
 *
 * Author:          Kitsune Solar
 * Author URI:      https://kitsune.solar/
 *
 * Version:         1.0.0
 *
 * Text Domain:     wp-ext-event
 * Domain Path:     /languages
 *
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Loading `WP_EXT_Event`.
 */

function run_wp_ext_event() {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Event.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Event_Post_Type.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Event_Post_Field.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Event_Taxonomy.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Event_User_Role.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Event_Theme.class.php' );
//  require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Event_Template.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Event_ShortCode.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Event_Widget.class.php' );
}

run_wp_ext_event();
