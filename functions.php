<?php
/**
 * Functions and definitions
 *
 * @package Pexwave Child
 * @author Pexwave Team
 * @since 0.0.1
 */

declare( strict_types=1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}




function pexwave_child_setup() {
	add_theme_support('disable-custom-colors');

}

add_action("after_setup_theme", 'pexwave_child_setup' );