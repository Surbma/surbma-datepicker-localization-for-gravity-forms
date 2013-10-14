<?php

/*
Plugin Name: Surbma - Datepicker fordítás Gravity Forms űrlapokhoz
Plugin URI: http://premiumwp.hu/
GitHub Plugin URI: Surbma/surbma-datepicker-localization
Description: Ezzel a bővítménnyel a datepicker dátum mező a weboldal beállításaiban megadott nyelven jelenik meg a Gravity Forms űrlapoknál.
Version: 1.1.1
Author: Surbma
Author URI: http://surbma.hu/
License: GPL2
*/

function surbma_enqueue_datepicker_script( $form, $is_ajax ) {
	wp_enqueue_script( 'surbma-datepicker-local', plugins_url( '', __FILE__ ) . '/languages/jquery.ui.datepicker-' . get_bloginfo('language') . '.js' );
}
add_action( 'gform_enqueue_scripts', 'surbma_enqueue_datepicker_script', 10, 2 );

