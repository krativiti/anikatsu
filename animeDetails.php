<?php 
require_once('./php/info.php');
$parts=parse_url($_SERVER['REQUEST_URI']); 
$page_url=explode('/', $parts['path']);
$url = $page_url[count($page_url)-1];
//$url = "naruto";

$getAnime = file_get_contents("$apiLink/getAnime/$url");
$getAnime = json_decode($getAnime, true);
$episodelist = $getAnime['episode_id'];
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Watch <?=$getAnime['name']?> - AniKatsu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title" content="Watch <?=$getAnime['name']?> - AniKatsu" />
    <meta name="description" content="<?=substr($getAnime['synopsis'],0, 90)?>.... Read More On AniKatsu" />
    <meta name="keywords" content="AniKatsu, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, AniKatsu, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title" content="Watch <?=$getAnime['name']?> - AniKatsu">
    <meta property="og:description" content="W<?=substr($getAnime['synopsis'],0, 90)?>.... Read More On AniKatsu.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AniKatsu">
    <meta property="og:url" content="<?=$webUrl?>/anime/<?=$url?>">
    <meta itemprop="image" content="<?=$getAnime['imageUrl']?>">
    <meta property="og:image" content="<?=$getAnime['imageUrl']?>">
    <meta property="og:image:secure_url" content="<?=$getAnime['imageUrl']?>">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta property="twitter:title" content="Watch <?=$getAnime['name']?> - AniKatsu">
    <meta property="twitter:description" ontent="W<?=substr($getAnime['synopsis'],0, 90)?>.... Read More On AniKatsu.">
    <meta property="twitter:url" content="<?=$webUrl?>/anime/<?=$url?>">
    <meta property="twitter:card" content="summary">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="shortcut icon" href="<?=$webUrl?>/files/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=$webUrl?>/files/css/style.css">
    <link rel="stylesheet" href="<?=$webUrl?>/files/css/min.css">
    <script type="text/javascript">
        setTimeout(function () {
            var wpse326013 = document.createElement('link');
            wpse326013.rel = 'stylesheet';
            wpse326013.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css';
            wpse326013.type = 'text/css';
            var godefer = document.getElementsByTagName('link')[0];
            godefer.parentNode.insertBefore(wpse326013, godefer);
            var wpse326013_2 = document.createElement('link');
            wpse326013_2.rel = 'stylesheet';
            wpse326013_2.href = 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css';
            wpse326013_2.type = 'text/css';
            var godefer2 = document.getElementsByTagName('link')[0];
            godefer2.parentNode.insertBefore(wpse326013_2, godefer2);
        }, 500);
    </script>
    <noscript>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    </noscript>
    <script></script>
</head>

<body data-page="movie_info">
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper" data-page="page_home">
        <?php include('./php/include/header.html'); ?>
        <div class="clearfix"></div>
        <div id="main-wrapper" date-page="movie_info" data-id="<?=$url?>">
            <div id="ani_detail">
                <div class="ani_detail-stage">
                    <div class="container">
                        <div class="anis-cover-wrap">
                            <div class="anis-cover"
                                style="background-image: url('<?=$getAnime['imageUrl']?>')"></div>
                        </div>
                        <div class="anis-content">
                            <div class="anisc-poster">
                                <div class="film-poster">
                                    <img src="<?=$webUrl?>/files/images/no_poster.jpg"
                                        data-src="<?=$getAnime['imageUrl']?>"
                                        class="lazyload film-poster-img">
                                </div>
                            </div>
                            <div class="anisc-detail">
                                <div class="prebreadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li itemprop="itemListElement" itemscope=""
                                                itemtype="http://schema.org/ListItem" class="breadcrumb-item">
                                                <a itemprop="item" href="/"><span itemprop="name">Home</span></a>
                                                <meta itemprop="position" content="1">
                                            </li>
                                            <li itemprop="itemListElement" itemscope=""
                                                itemtype="http://schema.org/ListItem" class="breadcrumb-item">
                                                <a itemprop="item" href="/anime"><span itemprop="name">Anime</span></a>
                                                <meta itemprop="position" content="2">
                                            </li>
                                            <li itemprop="itemListElement" itemscope=""
                                                itemtype="http://schema.org/ListItem"
                                                class="breadcrumb-item dynamic-name" data-jname="<?=$getAnime['name']?>"
                                                aria-current="page">
                                                <a itemprop="item" href="/anime/<?=$url?>"><span itemprop="name"><?=$getAnime['name']?></span></a>
                                                <meta itemprop="position" content="3">
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                                <h2 class="film-name dynamic-name" data-jname="<?=$getAnime['name']?>"><?=$getAnime['name']?></h2>
                                <div class="film-stats">
                                    <div class="tac tick-item tick-quality">HD</div>
                                    <div class="tac tick-item tick-dub">
                                    <?php $str = $getAnime['name'];
                                          $last_word_start = strrpos ( $str , " ") + 1;
                                          $last_word_end = strlen($str) - 1;
                                          $last_word = substr($str, $last_word_start, $last_word_end);
                                          if ($last_word == "(Dub)"){echo "Dubbed";} else {echo "Subbed";}
                                    ?>
                                    </div>
                                    <span class="dot"></span>
                                    <span class="item"><?=$getAnime['type']?></span>
                                    <div class="clearfix"></div>
                                </div>
                                <?php if(count($getAnime['episode_id']) == 0) {
                                    echo "";
                                } else { ?>
                                <div class="film-buttons">
                                    <a href="/watch/<?php foreach(array_slice($episodelist, 0, 1) as $episode1) {?><?=$episode1['episodeId']?><?php } ?>" class="btn btn-radius btn-primary btn-play"><i
                                            class="fas fa-play mr-2"></i>Watch now</a>
                                    <div class="dr-fav" id="watch-list-content">
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="film-description m-hide">
                                    <div class="text"><?=$getAnime['synopsis']?></div>
                                </div>
                                <div class="film-text m-hide">AniKatsu is a site to watch online anime like <strong><?=$getAnime['name']?></strong> online, or you can even watch <strong><?=$getAnime['name']?></strong> in HD quality</div>
                            </div>
                            <div class="anisc-info-wrap">
                                <div class="anisc-info">
                                    <div class="item item-title w-hide">
                                        <span class="item-head">Overview:</span>
                                        <div class="text"><?=$getAnime['synopsis']?></div>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Other names:</span> <span class="name"><?=$getAnime['othername']?></span>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Language:</span> 
                                        <span class="name">
                                            <?php $str = $getAnime['name'];
                                                $last_word_start = strrpos ( $str , " ") + 1;
                                                $last_word_end = strlen($str) - 1;
                                                $last_word = substr($str, $last_word_start, $last_word_end);
                                                if ($last_word == "(Dub)"){echo "Dubbed";} else {echo "Subbed";}
                                            ?>
                                        </span>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Episodes:</span> <span class="name"><?php echo count($getAnime['episode_id'])?></span>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Release Year:</span> <span class="name"><?=$getAnime['released']?></span>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Type:</span> <span class="name"><?=$getAnime['type']?></span>
                                    </div>
                                    <div class="item item-title">
                                        <span class="item-head">Status:</span> <a href="<?php if ($getAnime['status'] == "Completed") {echo "/status/completed";} else {echo "/status/ongoing";}?>"><?=$getAnime['status']?></a>
                                    </div>
                                    <div class="item item-list">
                                        <span class="item-head">Genres:</span> <?php foreach($getAnime['genres'] as $genre) { ?><a><?=$genre?></a><?php } ?>
                                    </div>
                                    <div class="film-text w-hide">AniKatsu is a site to watch online anime like <strong><?=$getAnime['name']?></strong> online, or you can even watch <strong><?=$getAnime['name']?></strong> in HD quality</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="main-content">
                    <section class="block_area block_area-comment">
                        <div class="block_area-header block_area-header-tabs">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Comments</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="show-comments">
                                <div id="disqus_thread"></div>
                                      <script>
                                          (function() { // DON'T EDIT BELOW THIS LINE
                                          var d = document, s = d.createElement('script');
                                          s.src = 'https://anikatsu-1.disqus.com/embed.js';
                                          s.setAttribute('data-timestamp', +new Date());
                                          (d.head || d.body).appendChild(s);
                                          })();
                                      </script>
                                      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                      <script id="dsq-count-scr" src="//anikatsu-1.disqus.com/count.js" async></script>  
                            </div>
                        </div>
                    </section>

                    <?php include('./php/include/recentReleases.php'); ?>
                    <div class="clearfix"></div>
                </div>
                <?php include('./php/include/main-sidenav.php'); ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php include('./php/include/footer.html'); ?>
        <div id="mask-overlay"></div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://anikatsu.ga/files/js/video.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
        <script type="text/javascript" src="<?=$webUrl?>/files/js/app.js"></script>
        <script type="text/javascript" src="<?=$webUrl?>/files/js/comman.js"></script>
        <script type="text/javascript" src="<?=$webUrl?>/files/js/movie.js"></script>
        <link rel="stylesheet" href="<?=$webUrl?>/files/css/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="/files/js/function.js"></script>
        <script>
            $(document).ready(function ($) {
                $(".button").click(function (e) {
                    e.preventDefault();
                    const user_id = $(this).attr('data-user'); // Get the parameter user_id from the button
                    const name = $(this).attr('data-post'); // Get the parameter name from the button
                    const method = $(this).attr('method'); // Get the parameter method from the button
                    if (method === "Add") {
                        $(this).attr('method', 'Remove'); // Change the div method attribute to Remove
                        $(this).html('<a class="button"> &nbsp;<i class="fas fa-minus mr-2"></i>&nbsp;Remove from List&nbsp;</a>').toggleClass('button mybtn'); // Replace the image with the liked button
                    } else {
                        $(this).attr('method', 'Add');
                        $(this).html('<a class="button"> &nbsp;<i class="fas fa-plus mr-2"></i>&nbsp;Add to List&nbsp;</a>').toggleClass('mybtn button');
                    }
                    $.ajax({
                        url: '/theme/6anime/pages/ajax.watchlist.php', // Call favs.php to update the database
                        type: 'GET',
                        data: { user_id: user_id, name: name, method: method },
                        cache: false,
                        success: function (data) {
                        }
                    });
                });
            });
        </script>

        <div style="display:none;">
        </div>
    </div>
</body>

</html>