<?php 
require('../php/info.php');

$id = $_GET['id']; 
$json = file_get_contents("$apiLink/vidcdn/$id");
$video = json_decode($json, true);
foreach($video as $video)
?>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<link rel="stylesheet" href="https://unpkg.com/plyr@3.7.2/dist/plyr.css">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'> </script>
<script src="https://unpkg.com/plyr@3"></script>
<div id='video'
  class='player iframe video-js vjs-default-skin vjs-skin-flat-grey vjs-big-play-centered vjs-16-9 vidstreaming_iframe'>
  <script src='https://cdn.jsdelivr.net/hls.js/latest/hls.js'></script> <video preload='none' id='player' autoplay
    controls crossorigin></video>
  <script>var video = document.querySelector('#player'); if (Hls.isSupported()) { var hls = new Hls(); hls.loadSource('<?=$video['file']?>'); hls.attachMedia(video); hls.on(Hls.Events.MANIFEST_PARSED, function () { video.play(); }); }
    hls.on(Hls.Events.ERROR, function (event, data) { console.log(data); });
    hls.on(Hls.Events.MANIFEST_PARSED, () => {
      player = loadPlayer();
    });
    function updateQuality(newQuality) {
      hls.levels.forEach((level, levelIndex) => {
        if (level.height === newQuality) {
          console.log("Found quality match with " + newQuality);
          hls.currentLevel = levelIndex;
        }
      });
    }
    function loadPlayer() {
      const defaultOptions = {};
      const availableQualities = hls.levels.map((l) => l.height)
      defaultOptions.quality = {
        default: availableQualities[1],
        options: availableQualities,
        forced: true,
        onChange: (e) => updateQuality(e),
      }
      const player = new Plyr('#player', defaultOptions); player.on('enterfullscreen', event => { screen.orientation.lock('landscape'); }); player.on('exitfullscreen', event => { screen.orientation.lock('portrait'); });
      return player;
    }
  </script>
</div>