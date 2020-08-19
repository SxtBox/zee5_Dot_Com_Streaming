<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ zee5.com Stream Extractor By HLS Url            │
 │ Version   │ v1.4-FREE                                       │
 │ Provider  │ https://www.zee5.com                            │
 │ Support   │ Clappr Player Free                              │
 │ Licence   │ MIT                                             │
 │ Author    │ Olsion Bakiaj                                   │
 │ Email     │ TRC4@USA.COM                                    │
 │ Author    │ Endrit Pano                                     │
 │ Email     │ INFO@ALBDROID.AL                                │
 │ Website   │ https://kodi.al                                 │
 │ Facebook  │ /albdroid.official/                             │
 │ Github    │ github.com/SxtBox/                              │
 │ Created   │ 11 August 2020                                  │
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
$PHP_FILE =  "Clappr_Player_Free.php";

// CHANGE ONLY M3U URL FROM HERE
$HLS_URL = "https://z5ams.akamaized.net/andflix/index.m3u8";

$API_CALL = $API_HOST. $API_PATH . $PHP_FILE . "?url=" . $HLS_URL;
?>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Live TV Albdroid Streaming V1.4-DEV</title>
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="icon" href="favicon.ico"/>
</head>

<style type="text/css">
body,td,th {
	color: #0F0;
}
body {
	background-color: #000;
}
</style>

<iframe style='width:100%; height:100%' frameborder=0 src='<?php echo $API_CALL; ?>' title='Albdroid Streaming' allowfullscreen></iframe>