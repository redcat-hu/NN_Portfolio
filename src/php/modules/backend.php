<?php
///////////////////// URL
$testServer;
$siteInfo = new stdClass();
scanURL();

///////////////////// COOKIES
$cookieAccepted;
$cookieLevel;
cookieScan();

///////////////////// READ SITE INFO
$siteJSON = loadJSON('src/json/site.json');

///////////////////// LANGUAGE
$siteLang;
$langJSON;
languageDetect();
?>