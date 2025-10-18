<?php
/**
 * Plugin Name: Online Radio Player
 * Plugin URI: https://github.com/iamdwipnarayan/online-radio-player
 * Description: A beautiful, responsive radio player for WordPress with admin dashboard to manage channels. Supports all major stream types including HLS, MP3, AAC, OGG, and more with automatic format switching.
 * Version: 1.0.0
 * Author: Dwip Narayan Chakraborty
 * Author URI: https://github.com/iamdwipnarayan
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: online-radio-player
 * Domain Path: /languages
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('ONLINE_RADIO_PLAYER_VERSION', '1.0.0');
define('ONLINE_RADIO_PLAYER_PATH', plugin_dir_path(__FILE__));
define('ONLINE_RADIO_PLAYER_URL', plugin_dir_url(__FILE__));

// Include required files
require_once ONLINE_RADIO_PLAYER_PATH . 'includes/class-online-radio-player.php';
require_once ONLINE_RADIO_PLAYER_PATH . 'includes/class-online-radio-player-admin.php';
require_once ONLINE_RADIO_PLAYER_PATH . 'includes/class-online-radio-player-shortcode.php';

// Initialize the plugin
function run_online_radio_player() {
    $plugin = new Online_Radio_Player();
    $plugin->run();
    
    // Initialize shortcode
    new Online_Radio_Player_Shortcode();
}
run_online_radio_player();