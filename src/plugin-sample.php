<?php

/**
 * Plugin Name: Sample Plugin
 */

// Check if get_plugins() function exists. This is required on the front end of the
// site, since it is in a file that is normally only loaded in the admin.
if ( ! function_exists( 'get_plugins' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

// scheduled email to admin
register_activation_hook( __FILE__, 'plugin_sample_activation' );
/**
 * On activation, set a time, frequency and name of an action hook to be scheduled.
 */
function plugin_sample_activation() {
}

function some_function(){
	return count(get_plugins());
}
