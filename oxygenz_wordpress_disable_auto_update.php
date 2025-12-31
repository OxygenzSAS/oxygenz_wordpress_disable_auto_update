<?php
/*
Plugin Name: Oxygenz - Disable all auto-updates
Description: Disable core, plugins & themes auto-updates
Version: 1.1
Author: Oxygenz
*/

if (!defined('ABSPATH')) {
    exit;
}

add_filter('automatic_updater_disabled', '__return_true');

add_filter('allow_major_auto_core_updates', '__return_false');
add_filter('allow_minor_auto_core_updates', '__return_false');
add_filter('allow_dev_auto_core_updates', '__return_false');
add_filter('auto_update_core', '__return_false');

add_filter('auto_update_plugin', '__return_false');
add_filter('plugins_auto_update_enabled', '__return_false');

add_filter('auto_update_theme', '__return_false');
add_filter('themes_auto_update_enabled', '__return_false');

add_filter('auto_update_translation', '__return_false');
