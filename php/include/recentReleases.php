                    <section class="block_area block_area_category">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Recent Releases</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid film_list-wfeature">
                                <div class="film_list-wrap">
                                <?php 
                                $json = file_get_contents("$consumetAPI/anime/gogoanime/recent-episodes");
                                $json = json_decode($json, true);
                                foreach($json['results'] as $recentRelease) { ?>
                                    <div class="flw-item ">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-sub  tick-eps amp-algn">Sub</div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Episode <?=$recentRelease['episodeNumber']?>
                                                </div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$recentRelease['image']?>"
                                                src="<?=$recentRelease['image']?>"
                                                alt="<?=$recentRelease['title']?>">
                                            <a class="film-poster-ahref"
                                                href="<?=$webUrl?>/watch/<?=$recentRelease['episodeId']?>"
                                                title="<?=$recentRelease['title']?>"
                                                data-jname="<?=$recentRelease['title']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a
                                                    href="<?=$webUrl?>/watch/<?=$recentRelease['episodeId']?>"
                                                    title="<?=$recentRelease['title']?>"
                                                    data-jname="<?=$recentRelease['title']?>"><?=$recentRelease['title']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item">Sub</span>
                                                <span class="dot"></span>
                                                <span class="fdi-item">Latest</span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                <?php } ?>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>