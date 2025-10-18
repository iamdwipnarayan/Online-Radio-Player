# Online Radio Player Changelog

## 1.0.0 - October 17, 2025
### Initial Release
* Added support for all major stream types:
  * HTTP/HTTPS direct streams (MP3, AAC, OGG, WAV, FLAC)
  * M3U / M3U8 playlists
  * PLS playlists
  * XSPF playlists
  * RTSP / RTP streams
  * Shoutcast/Icecast endpoints
  * HLS adaptive streaming
  * WebRTC / WebSocket streams
* Implemented three distinct player skins (default, modern, classic)
* Created admin dashboard for managing radio channels
* Added individual shortcodes for each channel
* Implemented animated "LIVE" badge with broadcasting effect
* Added volume control with visual feedback
* Implemented automatic format switching when one format fails
* Added browser player fallback for unsupported formats
* Added comprehensive error handling and recovery
* Implemented loading indicators during stream connection
* Added cross-origin support for special streams
* Added HLS streaming with hls.js library and native fallback
* Made player fully responsive for mobile devices
* Added detailed event handling for all player states
* Implemented cache-busting for stream URLs
* Added localization support with .pot file
* Created comprehensive documentation in readme.txt