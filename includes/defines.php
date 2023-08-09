<?php
// Defines for tables.
// BLP 2023-08-08 - Remove TRACKER_SCRIPT which is now the same as TRACKER_START (see tracker.js
// and tracker.php as well as SiteClass::getPageHead().

define("DEFINES_VERSION", "1.1.0defines"); // BLP 2023-08-08 - 

// Bots and bots2 Tables.
// These are all done via SiteClass trackbots() which does both the bots and bots2 tables.
define("BOTS_ROBOTS", 1); // the first time 
define("BOTS_SITEMAP", 2);
define("BOTS_SITECLASS", 4);
define("BOTS_CRON_ZERO", 0x100);

// Tracker defines. These happen in different places all via tracker.php exceipt the ones marked as
// SiteClass. The one marked 'via javascript' are instigated by the tracker.js program which does
// AJAX calls to tracker.php or beacon.php.
// BLP 2023-08-08 - all of the TRACKER_* items change now that TRACKER_SCRIPT is gone. I can move
// everything down one. Also, The TRACKER_ values at 0x100-0x800 are no longer needed as banner.php
// is always called.

define("TRACKER_START", 1); // via javascript but not on an event it is just the first thing java does.
define("TRACKER_LOAD", 2); // via javascript
define("TRACKER_NORMAL", 4); // header image2 
define("TRACKER_NOSCRIPT", 8); // header image3
define("TRACKER_TIMER", 0x100); // via javascript. Recurring every interval via setTimer(). Increses by 10 seconds for 50 intervals, about 8 min at end.
define("TRACKER_BOT", 0x200); // This happens in SiteClass if isBot is true
define("TRACKER_CSS", 0x400); // This is triggered by .htaccess ReWriteRule.
define("TRACKER_ME", 0x800); // This happens in SiteClass, isMe() is true.
define("TRACKER_ZERO", 0); // This happens in SiteClass, isMe() is false and isBot is false. 
define("TRACKER_GOTO", 0x1000); // see bartonphillips.com/goto.php, also webtats.php and webstats.js
define("TRACKER_GOAWAY", 0x2000); // tracker called with no info so GoAway

// Beacon is part of isJavaScript in the tracker table.
// BLP 2023-08-08 - BEACON_VISIBILITYCHANGE moves to 0x10 from 0x40000

define("BEACON_VISIBILITYCHANGE", 0x10); // via javascript. Just ran out of bits.
define("BEACON_PAGEHIDE", 0x20); // via javascript
define("BEACON_UNLOAD", 0x40); // via javascript
define("BEACON_BEFOREUNLOAD", 0x80); // via javascript

define("BEACON_MASK", BEACON_VISIBILITYCHANGE | BEACON_PAGEHIDE | BEACON_UNLOAD | BEACON_BEFOREUNLOAD);

// foundBotAs. This is the value in the tracker table as botAs.
define("BOTAS_MATCH", "match");
define("BOTAS_TABLE", "table");
define("BOTAS_NOT", null);
define("BOTAS_ROBOT", "robot");
define("BOTAS_SITEMAP", "sitemap");
define("BOTAS_ZERO", "zero");
define("BOTAS_COUNTED", "counted");
// Define the DigitalOcean Server
define("DO_SERVER", "157.245.129.4");
