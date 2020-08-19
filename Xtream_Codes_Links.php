<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ zee5.com Stream Extractor By HLS Url            │
 │ Version   │ v1.4-DEV                                        │
 │ Provider  │ https://www.zee5.com                            │
 │ Support   │ M3U8/VLC/KODI/SMART TV/XTream Codes/Web Players │
 │ Licence   │ MIT                                             │
 │ Author    │ Olsion Bakiaj                                   │
 │ Email     │ TRC4@USA.COM                                    │
 │ Author    │ Endrit Pano                                     │
 │ Email     │ INFO@ALBDROID.AL                                │
 │ Website   │ https://kodi.al                                 │
 │ Facebook  │ /albdroid.official/                             │
 │ Github    │ github.com/SxtBox/                              │
 │ Created   │ 22 June 2020                                    │
 │ Modified  │ 18 August 2020                                  │
 └─────────────────────────────────────────────────────────────┘
*/

// HOSTED VERSION APIS https://paidcodes.albdroid.al/ZEE5_Dot_Com_Apis/

error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

$API_HOST = "https://paidcodes.albdroid.al/ZEE5_Dot_Com_Apis/";
$API_PATH =  "";
$PHP_FILE =  "Xtream_Codes_Links.php";

$API_CALL = $API_HOST. $API_PATH . $PHP_FILE;

$DATA = file_get_contents($API_CALL);
$GET_URL = file_get_contents($API_CALL.$_SERVER['QUERY_STRING']);

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

echo $DATA;
?>