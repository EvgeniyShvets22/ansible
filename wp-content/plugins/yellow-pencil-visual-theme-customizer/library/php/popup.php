<?php
/**
 * The Editor Loader.
 *
 * @author 		WaspThemes
 * @category 	Core
 * @version     1.0
 */

// Don't run this file directly.
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// don't load page if not demo mode.
// demo mode just for developers.
// default: not defined.
if ( defined('YP_DEMO_MODE') == false ) {
	die( '-1' );
}

// get customize popup
include(WT_PLUGIN_DIR . '/library/php/customize-popup.php');
