# SiteClass Verion 3.4.4, Database Version 2.0.0, dbMysqli Version 2.0.0

**SiteClass** version 3.4.4 is a PHP mini framework for simple, small websites. It can be esaly combined with other frameworks or templeting engines if needed. 
For small websites I feel that frameworks like Laravel or Meteor etc. are just too much.

Updated BLP 2022-09-26 - Moved other pages (like aboutwebsite.php etc) from bartonphillips.net to bartonlp.com/otherpages/.  
Removed the symlinks from bartonphillips.net (see BLP 2022-08-14). Instead I have added RewriteRules to *.htaccess* to goto https://bartonlp/otherpages 
(see *.htaccess*)  
Updated BLP 2022-08-14 - Change had coded references to <del>bartonphillips.net</del> <ins>bartonlp.com/otherpages</ins> to $h, $b, $this (from mysitemap.json)  
Also moved tracker.php, tracker.js and beacon.php to the SiteClass *includes/* directory. They are now symlinked to <del>https://bartonphillips.net.</del> 
<ins>https://bartonlp.com/otherpages/</ins>.    
Updated BLP 2022-07-31 - Moved functins from SiteClass to Database. Added versions to all classes. dbSqlite.class.php No longer supported
Updated BLP 2022-04-30 - Work on daycounts, tracker and checkIfBot. I may remove some error_log() messages later.  
Updated BLP 2022-04-24 - added defines.php with the tracker, bots and beacon constants.

This project has several parts that can function standalone or combined.

* SiteClass.class.php (version 3.4.4): tools for making creating a site a little easier. The class provides methods to help with headers, banners, footers and more.
* Database.class.php (version 2.0.1database): provides a wrapper to the PHP *mysqli* engine.
* dbMysqli.class.php (version 2.1.1mysqli) : (rigorously tested) This is the latest PHP version of the MySql database engine.
* dbTables.class.php (version 1.0.0dbTables): uses the functionality of Database.class.php to make creating tables easy.
* ErrorClass.class.php (version 2.0.0error): Error and Exception classes
* SqlException.class.php (version 2.0.1exception): Sql exception class.
* defines.php (version 1.0.0defines): constants for tracker(), tracker.php, beacon.php, robots.php, sitemap.php and checktracker2.php. This has all of the constants 
like TRACKER_BOT, BOTS_ROBOTS etc.
* beacon.php (version 3.0.2beacon)
* tracker.php (version 3.0.2tracker)
* tracker.js (version 3.0.2trackerjs)
* siteload.ph (version 1.1.11siteload)

## SiteClass Documentation 

[SiteClass Documentation](https://bartonlp.github.io/site-class)

## Contact Me

Barton Phillips : [bartonphillips@gmail.com](mailto://bartonphillips@gmail.com)  
[My Website](http://www.bartonphillips.com)  
Copyright &copy; 2023 Barton Phillips
