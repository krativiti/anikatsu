<?php 
// Website Name
$webName = "AniKatsu";
// Website URL
$webUrl = "//{$_SERVER['SERVER_NAME']}";
// Logo
$webLogo = $webUrl ."/files/images/logo.png";

// Socials 
// 1 . Donate 
$donate = "https://r.honeygain.me/DEVEL77939";
// 2 . Telegram
$telegram = "https://t.me/Anikatsu";
// 3 . Discord 
$discord = "#";
// 4 Redit
$redit = "#";
// Twitter
$twitter = "#";



// API URL (Don't edit)

$apiLink = "https://anikatsu2.herokuapp.com"; 
if (date("d") > 15){
    $apiLink = "https://anikatsu.herokuapp.com";
}
$banner = $webUrl . "/files/images/banner.png"
?>