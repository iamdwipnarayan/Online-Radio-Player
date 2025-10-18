=== Online Radio Player ===
Contributors: dwipnarayanchakraborty
Tags: radio, audio, player, streaming, music, hls, m3u8, mp3, live, podcast
Requires at least: 5.0
Tested up to: 6.5
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A beautiful, responsive radio player for WordPress with admin dashboard to manage channels. Supports all major stream types including HLS, MP3, AAC, OGG, and more with automatic format switching.

== Description ==

Online Radio Player is a comprehensive WordPress plugin that allows you to easily add radio stations to your website. With a clean admin interface, you can manage multiple radio channels, each with their own title, stream URL, and logo.

**Key Features:**

*   Beautiful, responsive player design with 3 distinct skins
*   Admin dashboard for managing radio channels
*   Support for all major stream formats:
    *   HTTP/HTTPS direct streams (MP3, AAC, OGG, WAV, FLAC)
    *   M3U / M3U8 playlists
    *   PLS playlists
    *   XSPF playlists
    *   RTSP / RTP streams
    *   Shoutcast/Icecast endpoints
    *   HLS adaptive streaming
    *   WebRTC / WebSocket streams
*   Automatic format switching when one format fails
*   Play/Pause controls with animated LIVE badge
*   Volume control with mute functionality
*   Customizable logos for each channel
*   Individual shortcodes for each channel
*   Cross-browser compatibility
*   Mobile-responsive design
*   Browser player fallback for unsupported formats

**Advanced Features:**

*   Animated "LIVE" badge with broadcasting effect
*   Automatic cache-busting for stream URLs
*   Cross-origin support for special streams
*   HLS streaming with hls.js library and native fallback
*   Detailed error handling and recovery
*   Volume slider with visual feedback
*   Loading indicators during stream connection
*   Comprehensive event handling for all player states

== Installation ==

1. Download the plugin zip file
2. Upload the plugin files to the `/wp-content/plugins/online-radio-player` directory, or install the plugin through the WordPress plugins screen directly
3. Activate the plugin through the 'Plugins' screen in WordPress
4. Use the Radio Player menu in the WordPress admin to add and manage your radio channels
5. Use the individual shortcode for each channel to display the player on any page or post

**Manual Installation:**

1. Download the plugin files
2. Upload the entire `Online Radio Player` folder to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' screen in WordPress
4. Configure your radio channels through the new 'Radio Player' menu in the admin area

== Frequently Asked Questions ==

= What stream formats are supported? =

The plugin supports all major stream formats including:
*   HTTP/HTTPS direct streams (MP3, AAC, OGG, WAV, FLAC)
*   M3U / M3U8 playlists
*   PLS playlists
*   XSPF playlists
*   RTSP / RTP streams
*   Shoutcast/Icecast endpoints
*   HLS adaptive streaming
*   WebRTC / WebSocket streams

= How do I add a radio channel? =

Navigate to the Radio Player section in your WordPress admin dashboard, then click "Add New" to create a new radio channel. Enter the channel title, stream URL, and optionally upload a logo.

= Can I customize the player appearance? =

Yes, the player comes with three distinct skins:
*   Default - Clean and professional design
*   Modern - Gradient background with glass-morphism effects
*   Classic - Dark theme with blue accents

You can specify the skin using the shortcode parameter: `[online_radio_player channel="123" skin="modern"]`

= What happens if a stream doesn't play? =

The player includes intelligent fallback mechanisms:
1. Automatic format switching - tries alternative formats if one fails
2. Browser player fallback - opens stream in browser's default player
3. Detailed error messages - helps identify and resolve issues

= How do I use the shortcodes? =

Each radio channel has its own individual shortcode in the format:
`[online_radio_player channel="ID"]`

Replace "ID" with the actual channel ID. You can also specify a skin:
`[online_radio_player channel="123" skin="modern"]`

== Screenshots ==

1. Admin interface for managing radio channels
2. The radio player in action on the frontend with default skin
3. Modern skin player interface
4. Classic skin player interface
5. Admin channel management screen
6. Shortcode display in the admin area

== Changelog ==

= 1.0.0 =
* Initial release
* Support for all major stream formats
* Three distinct player skins
* Admin dashboard for channel management
* Individual shortcodes for each channel
* Animated LIVE badge
* Volume control with visual feedback
* Automatic format switching
* Browser player fallback
* Comprehensive error handling

== Upgrade Notice ==

= 1.0.0 =
Initial release of the Online Radio Player plugin with full support for all major streaming formats and three beautiful player skins.

== Developer Information ==

**Developer:** Dwip Narayan Chakraborty
**Plugin Website:** [Your Website URL]
**Support:** [Your Support Email or Website]

This plugin is released under the GPLv2 license or later. It is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation.