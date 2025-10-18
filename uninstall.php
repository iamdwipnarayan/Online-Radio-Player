<?php
/**
 * Online Radio Player Uninstall
 *
 * Uninstalling Online Radio Player deletes:
 * - Radio channel posts
 * - Radio channel custom fields
 *
 * @package Online_Radio_Player
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Delete all radio channel posts
$radio_channels = get_posts(array(
    'post_type' => 'radio_channel',
    'numberposts' => -1,
    'post_status' => 'any'
));

foreach ($radio_channels as $channel) {
    wp_delete_post($channel->ID, true);
}

// Delete any plugin options (if any were added)
// delete_option('online_radio_player_option_name');