<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ zee5.com Stream Extractor By HLS Url            │
 │ Version   │ v1.5-DEV                                        │
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
 │ Modified  │ 20 August 2020                                  │
 └─────────────────────────────────────────────────────────────┘
*/

/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

$API_HOST = "https://paidcodes.albdroid.al/ZEE5_Dot_Com_Apis/";
$PHP_API =  "Smart_TV_Public.php";
$URL_EQUAL = "?url=";
$Smart_TV_Builder = $API_HOST . $PHP_API . $URL_EQUAL;

// JUST ADD LINKS AND TITLES HERE AND UPLOAD AS DIRECT LINK FROM YOUR SERVER IN SMART TV OR VLC
$Smart_TV_List = [
//            M3U LINK HERE                        TITLES HERE
["https://z5ams.akamaized.net/andflix/index.m3u8", "Andflix"],
["http://z5ams.akamaized.net/9xjalwa/index.m3u8", "Z5 9x Jalwa"],
["https://z5ams.akamaized.net/andflixhd/index.m3u8", "AYSAR And Flix"],
["http://z5ams.akamaized.net/rajmusic/index.m3u8", "Z5 Raj Musix (Cannada)"],
];

header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
echo "#EXTM3U Albdroid TV Streaming #Zee5 Dot Com APIS (1.5-DEV) THIS IS EXAMPLE PLAYLIST"."\n";
foreach($Smart_TV_List as list($Stream_URL, $Stream_Title)) {

	echo "\r#EXTINF:0,". $Stream_Title."\n";
	echo $Smart_TV_Builder.$Stream_URL."\n";
}
?>
