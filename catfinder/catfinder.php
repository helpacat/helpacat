<?php
/*
Plugin Name: Cat Finder
Plugin URI: https://github.com/helpacat/helpacat
Description: Plugin for searching for free cats
Version: 0.0.1
Author: Mikhail Solovyev
Author URI: mailto:mixailo@mixailo.org
License: CC-BY-SA

*/
define("WP_CATFINDER_VERSION", "0.0.1");


function catfinder_install() {
	global $wpdb;
	// create db structure

	add_option("catfinder_db_version", WP_CATFINDER_VERSION);
}

register_activation_hook(__FILE__, 'catfinder_install');
