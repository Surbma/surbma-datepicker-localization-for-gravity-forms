<?php

/*
Plugin Name: Surbma - Datepicker localization for Gravity Forms
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Localize the Datepicker field with this plugin's automatic localization.

Version: 1.3.0

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-datepicker-localization-for-gravity-forms
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
	die( 'Good try! :)' );
}

// Localization
function surbma_datepicker_localization_for_gravity_forms_init() {
	load_plugin_textdomain( 'surbma-datepicker-localization-for-gravity-forms', false, dirname( plugin_basename( __FILE__ ) . '/languages/' ) );
}
add_action( 'init', 'surbma_datepicker_localization_for_gravity_forms_init' );

// Loading the actual js file
// All datepicker js files can be found here: https://github.com/jquery/jquery-ui/tree/master/ui/i18n
function surbma_datepicker_localization_for_gravity_forms_enqueue_script( $form, $is_ajax ) {
	wp_enqueue_script( 'surbma-datepicker-localization-for-gravity-forms', plugins_url( '', __FILE__ ) . '/js/datepicker-' . substr( get_locale(), 0, 2 ) . '.js', array( 'gform_datepicker_init' ) );
}
add_action( 'gform_enqueue_scripts', 'surbma_datepicker_localization_for_gravity_forms_enqueue_script', 10, 2 );