<?php

/**
 * Plugin Name: Sample Plugin
 */

// scheduled email to admin
register_activation_hook( __FILE__, 'plugin_sample_activation' );
/**
 * On activation, set a time, frequency and name of an action hook to be scheduled.
 */
function plugin_sample_activation() {
}

function some_function(){
	return 4;
}
