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

function catfinder_bootstrap() {
    global $wpdb;

    define("WP_CATFINDER_VERSION", "0.0.1");
    define('WP_CATFINDER_FOLDER', dirname(plugin_basename(__FILE__)));

    // add database pointers
    $wpdb->cf_pets = $wpdb->prefix . 'cf_pets';
    $wpdb->cf_images = $wpdb->prefix . 'cf_images';

    // Load includes
    require_once (dirname(__FILE__) . "/catfinder_install.php");
    require_once (dirname(__FILE__) . "/catfinder_functions.php");

}

catfinder_bootstrap();
register_activation_hook(__FILE__, 'catfinder_install');
