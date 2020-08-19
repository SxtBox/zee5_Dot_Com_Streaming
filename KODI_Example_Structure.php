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
 │ Created   │ 11 August 2020                                  │
 │ Modified  │ 19 August 2020                                  │
 └─────────────────────────────────────────────────────────────┘
*/

// HOSTED VERSION APIS https://paidcodes.albdroid.al/ZEE5_Dot_Com_Apis/

/*
 NOTE: TO PLAY THE STRUCTURE REQUIRED LIVESTRAMSPRO ADDON
 DOWNLOAD FROM REPO AND NOT FROM LOCAL DISK
 ADDON HOST: https://addons.kodi.al/
 FILENAME: LiveStreamsPro.zip
*/

error_reporting(0);
date_default_timezone_set("Europe/Tirane");

define('sxt',TRUE);

$API_HOST = "https://paidcodes.albdroid.al/ZEE5_Dot_Com_Apis/";
$API_PATH =  "APIS/";
$Kodi_API =  "Kodi_API.php";
// CHANGE ONLY M3U URL FROM HERE
$HLS_URL = "https://z5ams.akamaized.net/andflix/index.m3u8";

$KODI_GET_M3U = $API_HOST. $API_PATH . $Kodi_API . "?url=" . $HLS_URL;
?>
<?php
// DON'T CHANGE HEADERS
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
?>
<item>
<title>ENTER CHANNEL NAME HERE</title>
<link>$doregex[play_stream]|User-Agent=Albdroid</link>
<regex>
<name>play_stream</name>
<expres>([^']+)</expres>
<page><?php echo $KODI_GET_M3U; ?></page>
</regex>
</item>
