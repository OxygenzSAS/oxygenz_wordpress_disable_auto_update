<?php
/*
Plugin Name: Oxygenz - Disable all auto-updates
Description: Disable core, plugins & themes auto-updates
Version: 1.0
Author: Oxygenz
*/

add_filter('auto_update_core'		,'__return_false');
add_filter('auto_update_plugin'		,'__return_false');
add_filter('auto_update_theme'		,'__return_false');
add_filter('auto_update_translation','__return_false');