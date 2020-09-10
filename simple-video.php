<?php
/**
 * Plugin Name: BB Simple Video
 * Plugin URI: https://codeforcrack-kalai.github.io/
 * Description: An simple video plugin for beaver builder.
 * Version: 1.0
 * Author: https://codeforcrack-kalai.github.io/
 * Author URI: https://codeforcrack-kalai.github.io/
 */
define( 'FL_MODULE_SIMPLE_VIDEO_DIR', plugin_dir_path( __FILE__ ) );
define( 'FL_MODULE_SIMPLE_VIDEO_URL', plugins_url( '/', __FILE__ ) );

require_once FL_MODULE_SIMPLE_VIDEO_DIR . 'classes/class-simple-video-loader.php';
