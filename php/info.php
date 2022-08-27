<?php 
// Website Name
$webName = "AniKatsu";
// Website URL
$webUrl = "//{$_SERVER['SERVER_NAME']}";
// API URL 

$apiLink = "https://anikatsu2.herokuapp.com"; // NO MONEY TO BUY PREMIUM 😢
if (date("d") > 15){
    $apiLink = "https://anikatsu.herokuapp.com";
}

$banner = $webUrl . "/files/images/banner.png"
?>