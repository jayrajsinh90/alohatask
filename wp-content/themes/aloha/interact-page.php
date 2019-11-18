<?php
/**
 * Template Name: Interact Page
 */

get_header(); ?>
<div class="home-banner inner-banner" style="background-image: url(<?= THEME_URL ?>assets/images/cutout-2.png)">
        <h1>INTERACT</h1>
        <div class="inner-page-btn-wrapper">
            <a href="#">FOLLOW US</a>
        </div>
    </div>
<!--Eat-and-Drink-->
<section class="eat-drink-section sec-interact interact-page-section" id="social-feed-all">
    <div class="container">
        <div class="eat-drink-div">
            <form>
                <ul class="nav nav-tabs nav-interact">
                    <li><a class="active" data-toggle="tab" href="#tab-lets-talk">LET'S TALK STORY</a></li>
                    <li><a data-toggle="tab" href="#tab-aloha-articles" class="">ALOHA ARTICLES</a></li>
                    <li><a data-toggle="tab" href="#tab-social-media" class="">SOCIAL MEDIA</a></li>
                </ul>
                
                <div class="tab-content">

                    <span id="loading" style="display:none;">
                        <img height="55px" width="55px" src="https://aloha-outdoors-dev.armentum.co/wp-content/themes/alohaoutdoors/assets/images/loader.gif">
                    </span>
                    <div id="tab-lets-talk" class="content-sec tab-pane in active">
                        <ul class="nav nav-tabs nav-lets-talk">
                            <li><a class="active" data-toggle="tab" href="#tab-all-stories">ALL STORIES</a>
                            </li>
                            <li><a data-toggle="tab" href="#tab-most-popular" class="">MOST POPULAR STORIES</a></li>
                            <li><a data-toggle="tab" href="#tab-funny-stories" class="">FUNNY STORIES</a></li>
                            <li><a data-toggle="tab" href="#tab-cultural-stories" class="">CULTURAL STORIES</a></li>
                        </ul>
                        <div class="tab-content">
                            <span id="url" style="display:none;">https://aloha-outdoors-dev.armentum.co/wp-admin/admin-ajax.php</span>

                            <div id="tab-all-stories" class="content-sec tab-pane in active">		
                                <div class="title-content">
                                    <div class="row" id="row-all-stories_4"><div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="https://aloha-outdoors-dev.armentum.co/what-is-nature/"><img width="1200" height="800" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/10/whatisnature.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="nature muai hawaii" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/10/whatisnature.jpg 1200w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/10/whatisnature-300x200.jpg 300w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/10/whatisnature-768x512.jpg 768w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/10/whatisnature-1024x683.jpg 1024w" sizes="(max-width: 1200px) 100vw, 1200px"></a><label class="blue-label2">What is Nature?</label></div></div></div><div class="col-md-5"><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/a-day-trip-to-another-world/" "=""><img width="600" height="315" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/MOTA013.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/MOTA013.jpg 600w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/MOTA013-300x158.jpg 300w" sizes="(max-width: 600px) 100vw, 600px"></a><label class="blue-label2">A Day trip to another world</label></div><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/kohola/" "=""><img width="400" height="250" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Koholā.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Koholā" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Koholā.jpg 400w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Koholā-300x188.jpg 300w" sizes="(max-width: 400px) 100vw, 400px"></a><label class="blue-label2">Koholā</label></div></div></div><div class="loading-icon" id="all-stories-load_4"></div><div class="pagination"><span class="green-btn" id="all-stories-btn_4" onclick="loadmore(4);">Load More</span></div>                                    </div>
                            </div>
                            
                            <div id="tab-most-popular" class="content-sec tab-pane in">
                                <div class="title-content">
                                    <div class="row" id="row-all-stories_7"><div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="https://aloha-outdoors-dev.armentum.co/what-is-nature/"><img width="1200" height="800" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/10/whatisnature.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="nature muai hawaii" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/10/whatisnature.jpg 1200w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/10/whatisnature-300x200.jpg 300w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/10/whatisnature-768x512.jpg 768w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/10/whatisnature-1024x683.jpg 1024w" sizes="(max-width: 1200px) 100vw, 1200px"></a><label class="blue-label2">What is Nature?</label></div></div></div><div class="col-md-5"><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/a-day-trip-to-another-world/" "=""><img width="600" height="315" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/MOTA013.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/MOTA013.jpg 600w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/MOTA013-300x158.jpg 300w" sizes="(max-width: 600px) 100vw, 600px"></a><label class="blue-label2">A Day trip to another world</label></div><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/discover-more-of-maui/" "=""><img width="1440" height="960" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Culture.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Culture.jpg 1440w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Culture-300x200.jpg 300w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Culture-768x512.jpg 768w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Culture-1024x683.jpg 1024w" sizes="(max-width: 1440px) 100vw, 1440px"></a><label class="blue-label2">Discover More of Maui</label></div></div></div><div class="loading-icon" id="all-stories-load_7"></div><div class="pagination"><span class="green-btn" id="all-stories-btn_7" onclick="loadmore(7);">Load More</span></div>  
                                </div>
                            </div>

                            <div id="tab-funny-stories" class="content-sec tab-pane in">
                                <div class="title-content">
                                    <div class="row" id="row-all-stories_8"><div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="https://aloha-outdoors-dev.armentum.co/big-kahuna-adventures-surf-school/"><img width="960" height="645" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/bigkahuna.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/bigkahuna.jpg 960w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/bigkahuna-300x202.jpg 300w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/bigkahuna-768x516.jpg 768w" sizes="(max-width: 960px) 100vw, 960px"></a><label class="blue-label2">Big Kahuna Adventures Surf School</label></div></div></div><div class="col-md-5"></div></div><div class="loading-icon" id="all-stories-load_8"></div><div class="pagination"><span class="green-btn" id="all-stories-btn_8" onclick="loadmore(8);">Load More</span></div>                                    </div>
                            </div>
                            
                            <div id="tab-cultural-stories" class="content-sec tab-pane in">
                                <div class="title-content">
                                    <div class="row" id="row-all-stories_9"><div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="https://aloha-outdoors-dev.armentum.co/kohola/"><img width="400" height="250" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Koholā.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Koholā" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Koholā.jpg 400w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Koholā-300x188.jpg 300w" sizes="(max-width: 400px) 100vw, 400px"></a><label class="blue-label2">Koholā</label></div></div></div><div class="col-md-5"><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/calisto-palos/" "=""><img width="400" height="250" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Calosto.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Calosto" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Calosto.jpg 400w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Calosto-300x188.jpg 300w" sizes="(max-width: 400px) 100vw, 400px"></a><label class="blue-label2">Calisto Palos</label></div><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/explore-hosmer-grove/" "=""><img width="400" height="250" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/HosmerGrove_AO_Ricca5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="HosmerGrove_AO_Ricca5" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/HosmerGrove_AO_Ricca5.jpg 400w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/HosmerGrove_AO_Ricca5-300x188.jpg 300w" sizes="(max-width: 400px) 100vw, 400px"></a><label class="blue-label2">Explore Hosmer Grove</label></div></div></div><div class="loading-icon" id="all-stories-load_9"></div><div class="pagination"><span class="green-btn" id="all-stories-btn_9" onclick="loadmore(9);">Load More</span></div>                                    </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-aloha-articles" class="content-sec tab-pane fade">
                        <ul class="nav nav-tabs nav-lets-talk">
                            <li><a class="active" data-toggle="tab" href="#tab-all-articles">ALL ARTICLES</a>
                            </li>
                            <li><a data-toggle="tab" href="#tab-popular-articles" class="">MOST POPULAR ARTICLES</a>
                            </li>
                            <li><a data-toggle="tab" href="#tab-news-articles" class="">NEWS ARTICLES</a></li>
                            <li><a data-toggle="tab" href="#tab-event-articles" class="">EVENT ARTICLES</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-all-articles" class="content-sec tab-pane in active">
                                <div class="title-content">
                                    <div class="row" id="row-all-stories_5"><div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="https://aloha-outdoors-dev.armentum.co/navigating-the-higher-self/"><img width="640" height="480" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/2017-20-08-Jungle-ZipLine5-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Zipline Aloha Muai" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/2017-20-08-Jungle-ZipLine5-1.jpg 640w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/2017-20-08-Jungle-ZipLine5-1-300x225.jpg 300w" sizes="(max-width: 640px) 100vw, 640px"></a><label class="blue-label2">Navigating the ‘Higher’ Self</label></div></div></div><div class="col-md-5"><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/first-whale-of-2017/" "=""><img width="400" height="250" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/humpback-whale.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="humpback-whale" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/humpback-whale.jpg 400w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/humpback-whale-300x188.jpg 300w" sizes="(max-width: 400px) 100vw, 400px"></a><label class="blue-label2">First Whale of 2017</label></div><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/robi-campbells-interview/" "=""><img width="1080" height="675" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Robi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Robi" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Robi.jpg 1080w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Robi-300x188.jpg 300w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Robi-768x480.jpg 768w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Robi-1024x640.jpg 1024w" sizes="(max-width: 1080px) 100vw, 1080px"></a><label class="blue-label2">Robi Campbell’s Interview</label></div></div></div><div class="loading-icon" id="all-stories-load_5"></div><div class="pagination"><span class="green-btn" id="all-stories-btn_5" onclick="loadmore(5);">Load More</span></div>                                    </div>
                                <!-- <div id="allArticles"></div> -->
                            </div>
                            <div id="tab-popular-articles" class="content-sec tab-pane in">
                                <div class="title-content">
                                    <div class="row" id="row-all-stories_10"><div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="https://aloha-outdoors-dev.armentum.co/navigating-the-higher-self/"><img width="640" height="480" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/2017-20-08-Jungle-ZipLine5-1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Zipline Aloha Muai" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/2017-20-08-Jungle-ZipLine5-1.jpg 640w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/2017-20-08-Jungle-ZipLine5-1-300x225.jpg 300w" sizes="(max-width: 640px) 100vw, 640px"></a><label class="blue-label2">Navigating the ‘Higher’ Self</label></div></div></div><div class="col-md-5"><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/top-25-things-to-do-on-maui/" "=""><img width="400" height="250" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/top25thingstodo.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/top25thingstodo.jpg 400w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/top25thingstodo-300x188.jpg 300w" sizes="(max-width: 400px) 100vw, 400px"></a><label class="blue-label2">Top 25 Things to Do on Maui</label></div></div></div><div class="loading-icon" id="all-stories-load_10"></div><div class="pagination"><span class="green-btn" id="all-stories-btn_10" onclick="loadmore(10);">Load More</span></div>                                    </div>
                                <!-- <div id="popularArticles"></div> -->
                            </div>
                            <div id="tab-news-articles" class="content-sec tab-pane in">
                                <div class="title-content">
                                    <div class="row" id="row-all-stories_11"><div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="https://aloha-outdoors-dev.armentum.co/first-whale-of-2017/"><img width="400" height="250" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/humpback-whale.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="humpback-whale" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/humpback-whale.jpg 400w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/humpback-whale-300x188.jpg 300w" sizes="(max-width: 400px) 100vw, 400px"></a><label class="blue-label2">First Whale of 2017</label></div></div></div><div class="col-md-5"><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/robi-campbells-interview/" "=""><img width="1080" height="675" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Robi.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Robi" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Robi.jpg 1080w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Robi-300x188.jpg 300w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Robi-768x480.jpg 768w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/Robi-1024x640.jpg 1024w" sizes="(max-width: 1080px) 100vw, 1080px"></a><label class="blue-label2">Robi Campbell’s Interview</label></div><div class="img-content img-content-left"><a href="https://aloha-outdoors-dev.armentum.co/the-racing-canoe-carver/" "=""></a><label class="blue-label2">The Racing Canoe Carver</label></div></div></div><div class="loading-icon" id="all-stories-load_11"></div><div class="pagination"><span class="green-btn" id="all-stories-btn_11" onclick="loadmore(11);">Load More</span></div>                                    </div>
                                <!-- <div id="newsArticles"></div> -->
                            </div>
                            <div id="tab-event-articles" class="content-sec tab-pane in">
                                <div class="title-content">
                                    <div class="row" id="row-all-stories_12"><div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="https://aloha-outdoors-dev.armentum.co/hawaiian-outrigger-canoe-voyaging-society/"><img width="1200" height="674" src="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/hawai.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="hawai" srcset="https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/hawai.jpg 1200w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/hawai-300x169.jpg 300w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/hawai-768x431.jpg 768w, https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/09/hawai-1024x575.jpg 1024w" sizes="(max-width: 1200px) 100vw, 1200px"></a><label class="blue-label2">Hawaiian Outrigger Canoe Voyaging Society</label></div></div></div><div class="col-md-5"></div></div><div class="loading-icon" id="all-stories-load_12"></div><div class="pagination"><span class="green-btn" id="all-stories-btn_12" onclick="loadmore(12);">Load More</span></div>                                    </div>
                                <!-- <div id="eventArticles"></div> -->
                            </div>
                        </div>
                    </div>
                    <div id="tab-social-media" class="content-sec tab-pane fade">
                        <ul class="nav nav-tabs nav-lets-talk">
                            <li><a class="active" data-toggle="tab" href="#tab-insta">INSTAGRAM</a>
                            </li>
                            <li><a data-toggle="tab" href="#tab-fb" class="">FACEBOOK</a>
                            </li>
                            <li><a data-toggle="tab" href="#tab-twitter" class="">TWITTER</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-insta" class="content-sec tab-pane in active">
                                <div class="title-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="img-content img-content-right">
                                            
                                                                                                <script src="https://www.powr.io/powr.js?platform=embed"></script><div class="powr-instagram-feed powrLoaded" id="4f85414f_1567581384"><iframe src="https://www.powr.io/instagram-feed/u/4f85414f_1567581384#platform=embed" powrindex="0" width="100%" height="4px" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" style="transition: height 0.3s ease 0s; height: 4px; display: inline; visibility: visible;"></iframe></div>												
                                                
                                                <!-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                                                <div class="elfsight-app-dc1e367a-7bd3-469f-a694-c06441019ec4"></div> -->
                                            </div>
                                        </div>
                                    
                                        
                                    </div> 
                                </div>
                                
                            </div>
                            <div id="tab-fb" class="content-sec tab-pane in">
                                <div class="title-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="interact-post-custom aos-init aos-animate" data-aos="zoom-in">
                                                <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div><iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f564ef286e203c&amp;origin=https%3A%2F%2Faloha-outdoors-dev.armentum.co" style="border: none;"></iframe></div><div></div></div></div>
                                                <script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&amp;version=v4.0"></script>
                                                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/alohaoutdoorsmaui/" data-tabs="timeline" data-width="700" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=1142252592625052&amp;container_width=0&amp;height=500&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Falohaoutdoorsmaui%2F&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=700"><span style="vertical-align: bottom; width: 500px; height: 0px;"><iframe name="f1b80812b00d1cc" width="700px" height="500px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.10/plugins/page.php?adapt_container_width=true&amp;app_id=1142252592625052&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df1f78267ce37ec%26domain%3Daloha-outdoors-dev.armentum.co%26origin%3Dhttps%253A%252F%252Faloha-outdoors-dev.armentum.co%252Ff564ef286e203c%26relation%3Dparent.parent&amp;container_width=0&amp;height=500&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Falohaoutdoorsmaui%2F&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=700" class="" style="border: none; visibility: visible; width: 500px; height: 0px;"></iframe></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-twitter" class="content-sec tab-pane in">
                                <div class="title-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-timeline twitter-timeline-rendered" data-widget-id="profile:Aloha_Outdoors" title="Twitter Timeline" style="position: static; visibility: visible; display: inline-block; width: 650px; height: 550px; padding: 0px; border: none; max-width: 100%; min-width: 180px; margin-top: 0px; margin-bottom: 0px; min-height: 200px;"></iframe> <script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--/Eat-and-Drink-->
	<?php include_once('includes/templates/happy-customers.php'); ?>
	<?php include_once('includes/templates/newsletter.php'); ?>
<?php
get_footer();
?>
