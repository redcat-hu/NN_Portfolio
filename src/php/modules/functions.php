<?php
set_include_path( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR );

// Read Cookies
function cookieScan() {
    global $cookieAccepted;
    global $cookieLevel;

    $cookieAccepted = false;
    $cookieLevel = '{"necessary": false, "functionality": false, "tracking": false, "targeting": false}';
    $cookieAccepted = isset($_COOKIE["cookie_consent_accepted"]) ? $_COOKIE["cookie_consent_accepted"] : $cookieAccepted;
    $cookieLevel = isset($_COOKIE["cookie_consent_level"]) ? json_decode($_COOKIE["cookie_consent_level"], JSON_OBJECT_AS_ARRAY) : json_decode($cookieLevel, JSON_OBJECT_AS_ARRAY);
}

// Load JSON
function loadJSON($filePath) {
    $json = file_get_contents($filePath);
    return json_decode($json, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Error decoding JSON: ' . json_last_error_msg());
    }

    return $data;
}

// Scan URL
function scanURL() {
    global $testServer;
    global $siteInfo;

    $url = $_SERVER['REQUEST_URI'];
    $urlParts = explode("?", $url);
    $urlParts = explode("/", $urlParts[0]);
    
    $testServer = (strtolower($urlParts[1]) === "nn_portfolio") ? true : false;
    if ($testServer) {
        $siteInfo -> mainPath = '/nn_portfolio/';
        $siteInfo -> redcatPath = '/redcat_center/';
    } else {
        $siteInfo -> mainPath = '/';
        $siteInfo -> redcatPath = 'https://center.red-cat.hu/';
    }
}

// Language Detection
function languageDetect() {
    global $langJSON;
    global $siteLang;
    $availableLanguages = ["hu", "en"];
    
    $siteLang = "en";
    
    // Check if language cookie is set
    if (isset($_COOKIE['language'])) {
        $cookieLanguage = strtolower($_COOKIE['language']);
        
        if (in_array($cookieLanguage, $availableLanguages)) {
            $siteLang = $cookieLanguage;
        }
    } else {
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $browserLanguages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
            $browserLanguage = strtolower(substr(chop($browserLanguages[0]), 0, 2));
        
            if (in_array($browserLanguage, $availableLanguages)) {
                $siteLang = $browserLanguage;
            }
        }
    }

    // Import lang data from JSON
    $langJSON = loadJSON('src/json/languages/'.$siteLang.'.json');
}












function PrintSocial()
{
    echo
    '<ul class="f0 social">
        <li><a href="#" target="_blank"><i class="bi bi-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="bi bi-github"></i></a></li>
        <li><a href="#" target="_blank"><i class="bi bi-behance"></i></a></li>
    </ul>';
}

?>