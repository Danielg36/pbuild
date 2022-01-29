<?php

/**
 * Plugin Name:       My First Plugin
 * Plugin URI:        http://localhost/pbuild
 * Description:       This is my first plugin creation.
 * Version:           1.0.0
 * Author:            Daniel G.
 * Author URI:        http://localhost/pbuild
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        http://localhost/pbuild
 * Text Domain:       my_plugin
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    die();
}

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')){
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path( __FILE__ ));

if (class_exists('Inc\\Init')){
    Inc\Init::register_services();
}