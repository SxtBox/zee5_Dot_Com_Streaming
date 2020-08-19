<?php

/*
 +-------------------------------------------------------------+
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 +-------------------------------------------------------------+
 +-------------------------------------------------------------+
 ¦ Product   ¦ zee5.com Stream Extractor By HLS Url            ¦
 ¦ Version   ¦ v1.4-DEV                                        ¦
 ¦ Provider  ¦ https://www.zee5.com                            ¦
 ¦ Support   ¦ M3U8/VLC/KODI/SMART TV/XTream Codes/Web Players ¦
 ¦ Licence   ¦ MIT                                             ¦
 ¦ Author    ¦ Olsion Bakiaj                                   ¦
 ¦ Email     ¦ TRC4@USA.COM                                    ¦
 ¦ Author    ¦ Endrit Pano                                     ¦
 ¦ Email     ¦ INFO@ALBDROID.AL                                ¦
 ¦ Website   ¦ https://kodi.al                                 ¦
 ¦ Facebook  ¦ /albdroid.official/                             ¦
 ¦ Github    ¦ github.com/SxtBox/                              ¦
 ¦ Created   ¦ 18 August 2020                                  ¦
 ¦ Modified  ¦ 0000:00:00:ss                                   ¦
 +-------------------------------------------------------------+
*/

// HOSTED VERSION https://paidcodes.albdroid.al/ZEE5_Dot_Com_Apis/

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
$API_PATH =  "";
$KODI_API =  "Kodi_XML_Builder.php";
// CHANGE ONLY M3U URL FROM HERE
$HLS_URL = "https://z5ams.akamaized.net/andflix/index.m3u8";

$API_CALL = $API_HOST. $API_PATH . $KODI_API . "?url=" . $HLS_URL;
//echo $API_CALL 

// DON'T CHANGE HEADERS
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

$Kodi_XML_Builder = file_get_contents($API_CALL);
echo $Kodi_XML_Builder;
?>

