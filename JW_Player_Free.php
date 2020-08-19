<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ zee5.com Stream Extractor By HLS Url            │
 │ Version   │ v1.4-FREE                                       │
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
 │ Created   │ 19 August 2020                                  │
 │ Modified  │ 0000:00:00:ss                                   │
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
$PHP_FILE =  "JW_Player_Free.php";
// CHANGE ONLY M3U URL FROM HERE
$HLS_URL = "https://z5ams.akamaized.net/andflix/index.m3u8";

$API_CALL = $API_HOST. $API_PATH . $PHP_FILE . "?url=" . $HLS_URL;

$DATA = file_get_contents($API_CALL);
$GET_URL = file_get_contents($API_CALL.$_SERVER['QUERY_STRING']);
echo $DATA;
?>