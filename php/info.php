<?php 
// Website Name
$webName = "AniKatsu";
// Website URL
$webUrl = "//{$_SERVER['SERVER_NAME']}";  //for example $webUrl = "//{$_SERVER['SERVER_NAME']}:8888";
// Logo
$webLogo = "/files/images/logo.png";

// Socials 
// 1 . Donate 
$donate = "https://r.honeygain.me/DEVEL77939";
// 2 . Telegram
$telegram = "https://t.me/Anikatsu";
// 3 . Discord 
$discord = "https://discord.com/invite/FrWnWRrZmk";
// 4 Redit
$redit = "#";
// Twitter
$twitter = "#";

$banner = $webUrl . "/files/images/banner.png";


// API URL
if (date("d") < "20") {
    $apiLink = "https://anikatsu-api1.herokuapp.com";
  } else {
    $apiLink ="https://anikatsu-api2.herokuapp.com";
  };

?>
