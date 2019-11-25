<?php
/**
 * Template Name: Interact Page
 */

get_header(); ?>
<div class="home-banner inner-banner" style="background-image: url(<?= THEME_URL ?>assets/images/cutout-2.png)">
        <h1>INTERACT</h1>
        
    </div>
<!--Eat-and-Drink-->
<section class="eat-drink-section sec-interact interact-page-section" id="social-feed-all">
        <div class="container">
            <div class="eat-drink-div">
                <form>
                    <ul class="nav nav-tabs nav-interact">
                        <li><a class="active" data-toggle="tab" href="#tab-lets-talk">LET'S TALK STORY</a></li>
                        <li><a data-toggle="tab" href="#tab-aloha-articles" class="">ALOHA ARTICLES</a></li>
                        <li><a data-toggle="tab"  href="#tab-social-media" class="">SOCIAL MEDIA</a></li>
                    </ul>
					
                    <div class="tab-content">

                    	<span id="loading" style="display:none;">
                            <img height="55px" width="55px" src="<?php echo bloginfo('template_directory').'/assets/images/loader.gif'; ?>">
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
                                <div id="tab-all-stories" class="content-sec tab-pane in active">		
                                    <div class="title-content">
                                        <?php

                                        $data = '<div class="row" id="row-all-stories_4">';
                                        $args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'posts_per_page' => '3',
                                            'paged'=> $paged
                                        );

                                        $arr_posts = new WP_Query( $args );

                                        if ( $arr_posts->have_posts() ) :
                                            $i=0;
                                            $smallSizePost='';
                                            $bigSize = '';
                                            $defaultThumbNail = get_template_directory_uri();
                                            
                                        while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
                                            if($i==0){

            
                                                    $bigSize = $data.'<div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="'.get_permalink().'">'.get_the_post_thumbnail($arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div></div></div>';
                                                                //}
                                                

                                                }
                                                else{ 

                                                    $smallSizePost .='<div class="img-content img-content-left"><a href="'.get_permalink().'"">'.get_the_post_thumbnail( $arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div>'; 
                                                }   
                                            $i++;
                                        endwhile; 


                                        $smallSize = '<div class="col-md-5">'. $smallSizePost.'</div>';
                                                    
                                        endif;
                                        
                                        $big = 999999999;
                                        $pagess = '</div>';

                                        $postsPage = $bigSize.$smallSize.$pagess; 

                                        echo $postsPage; 
                                         ?>
                                    </div>
                    
                                </div>
								
                                <div id="tab-most-popular" class="content-sec tab-pane in">
                                    <div class="title-content">
                                        <?php

                                        $data = '<div class="row" id="row-all-stories_7">';
                                        $args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'cat' => 20,
                                            'posts_per_page' => '3',
                                            'paged'=> $paged
                                        );

                                        $arr_posts = new WP_Query( $args );

                                        if ( $arr_posts->have_posts() ) :
                                            $i=0;
                                            $smallSizePost='';
                                            $bigSize = '';
                                            $defaultThumbNail = get_template_directory_uri();
                                            
                                        while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
                                            if($i==0){

                    
                                                    $bigSize = $data.'<div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="'.get_permalink().'">'.get_the_post_thumbnail($arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div></div></div>';
                                                                

                                                }else{ 

                                                    $smallSizePost .='<div class="img-content img-content-left"><a href="'.get_permalink().'"">'.get_the_post_thumbnail( $arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div>'; 
                                                }   
                                            $i++;
                                        endwhile; 


                                        $smallSize = '<div class="col-md-5">'. $smallSizePost.'</div>';
                                                    
                                        endif;
                                        
                                        $big = 999999999;
                                        $pagess = '</div>';

                                        $postsPage = $bigSize.$smallSize.$pagess; 

                                        echo $postsPage; 
                                         ?>  
									</div>
                                </div>

                                <div id="tab-funny-stories" class="content-sec tab-pane in">
                                    <div class="title-content">
                                        <?php

                                        $data = '<div class="row" id="row-all-stories_8">';
                                        $args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'cat' => 21,
                                            'posts_per_page' => '3',
                                            'paged'=> $paged
                                        );

                                        $arr_posts = new WP_Query( $args );

                                        if ( $arr_posts->have_posts() ) :
                                            $i=0;
                                            $smallSizePost='';
                                            $bigSize = '';
                                            $defaultThumbNail = get_template_directory_uri();
                                            
                                        while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
                                            if($i==0){

                                        
                                                    $bigSize = $data.'<div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="'.get_permalink().'">'.get_the_post_thumbnail($arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div></div></div>';
                                                                

                                                }else{ 

                                                    $smallSizePost .='<div class="img-content img-content-left"><a href="'.get_permalink().'"">'.get_the_post_thumbnail( $arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div>'; 
                                                }   
                                            $i++;
                                        endwhile; 


                                        $smallSize = '<div class="col-md-5">'. $smallSizePost.'</div>';
                                                    
                                        endif;
                                        
                                        $big = 999999999;
                                        $pagess = '</div>';

                                        $postsPage = $bigSize.$smallSize.$pagess; 

                                        echo $postsPage; 

                                         ?>
                                    </div>
                                </div>
                                
                                <div id="tab-cultural-stories" class="content-sec tab-pane in">
                                    <div class="title-content">
                                        <?php

                                        $data = '<div class="row" id="row-all-stories_9">';
                                        $args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'cat' => 18,
                                            'posts_per_page' => '3',
                                            'paged'=> $paged
                                        );

                                        $arr_posts = new WP_Query( $args );

                                        if ( $arr_posts->have_posts() ) :
                                            $i=0;
                                            $smallSizePost='';
                                            $bigSize = '';
                                            $defaultThumbNail = get_template_directory_uri();
                                            
                                        while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
                                            if($i==0){
                                                
                                                    $bigSize = $data.'<div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="'.get_permalink().'">'.get_the_post_thumbnail($arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div></div></div>';
                                                                

                                                }else{ 

                                                    $smallSizePost .='<div class="img-content img-content-left"><a href="'.get_permalink().'"">'.get_the_post_thumbnail( $arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div>'; 
                                                }   
                                            $i++;
                                        endwhile; 


                                        $smallSize = '<div class="col-md-5">'. $smallSizePost.'</div>';
                                                    
                                        endif;
                                        
                                        $big = 999999999;
                                        $pagess = '</div>';

                                        $postsPage = $bigSize.$smallSize.$pagess; 

                                        echo $postsPage; 
                                         ?>
                                    </div>
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
                                        <?php

                                        $data = '<div class="row" id="row-all-stories_5">';
                                        $args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'posts_per_page' => '3',
                                            'paged'=> $paged
                                        );

                                        $arr_posts = new WP_Query( $args );

                                        if ( $arr_posts->have_posts() ) :
                                            $i=0;
                                            $smallSizePost='';
                                            $bigSize = '';
                                            $defaultThumbNail = get_template_directory_uri();
                                            
                                        while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
                                            if($i==0){

                                                    $bigSize = $data.'<div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="'.get_permalink().'">'.get_the_post_thumbnail($arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div></div></div>';
                                                                

                                                }else{ 

                                                    $smallSizePost .='<div class="img-content img-content-left"><a href="'.get_permalink().'"">'.get_the_post_thumbnail( $arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div>'; 
                                                }   
                                            $i++;
                                        endwhile; 


                                        $smallSize = '<div class="col-md-5">'. $smallSizePost.'</div>';
                                                    
                                        endif;
                                        
                                        $big = 999999999;
                                        $pagess = '</div>';

                                        $postsPage = $bigSize.$smallSize.$pagess; 

                                        echo $postsPage; 

                                         ?>
                                    </div>
                                    <!-- <div id="allArticles"></div> -->
                                </div>
                                <div id="tab-popular-articles" class="content-sec tab-pane in">
                                    <div class="title-content">
                                        <?php

                                        $data = '<div class="row" id="row-all-stories_10">';
                                        $args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'cat' => 23,
                                            'posts_per_page' => '3',
                                            'paged'=> $paged
                                        );

                                        $arr_posts = new WP_Query( $args );

                                        if ( $arr_posts->have_posts() ) :
                                            $i=0;
                                            $smallSizePost='';
                                            $bigSize = '';
                                            $defaultThumbNail = get_template_directory_uri();
                                            
                                        while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
                                            if($i==0){

                                               
                                                    $bigSize = $data.'<div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="'.get_permalink().'">'.get_the_post_thumbnail($arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div></div></div>';
                                                                

                                                }else{ 

                                                    $smallSizePost .='<div class="img-content img-content-left"><a href="'.get_permalink().'"">'.get_the_post_thumbnail( $arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div>'; 
                                                }   
                                            $i++;
                                        endwhile; 


                                        $smallSize = '<div class="col-md-5">'. $smallSizePost.'</div>';
                                                    
                                        endif;
                                        
                                        $big = 999999999;
                                        $pagess = '</div>';

                                        $postsPage = $bigSize.$smallSize.$pagess; 

                                        echo $postsPage; 

                                         ?>
                                    </div>
                                    <!-- <div id="popularArticles"></div> -->
                                </div>
                                <div id="tab-news-articles" class="content-sec tab-pane in">
                                    <div class="title-content">
                                        <?php

                                        $data = '<div class="row" id="row-all-stories_11">';
                                        $args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'cat' => 22,
                                            'posts_per_page' => '3',
                                            'paged'=> $paged
                                        );

                                        $arr_posts = new WP_Query( $args );

                                        if ( $arr_posts->have_posts() ) :
                                            $i=0;
                                            $smallSizePost='';
                                            $bigSize = '';
                                            $defaultThumbNail = get_template_directory_uri();
                                            
                                        while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
                                            if($i==0){

                                                
                                                    $bigSize = $data.'<div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="'.get_permalink().'">'.get_the_post_thumbnail($arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div></div></div>';
                                                                //}
                                                

                                                }else{ 

                                                    $smallSizePost .='<div class="img-content img-content-left"><a href="'.get_permalink().'"">'.get_the_post_thumbnail( $arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div>'; 
                                                }   
                                            $i++;
                                        endwhile; 


                                        $smallSize = '<div class="col-md-5">'. $smallSizePost.'</div>';
                                                    
                                        endif;
                                        
                                        $big = 999999999;
                                        $pagess = '</div><div class="loading-icon" id="all-stories-load_11"></div><div class="pagination"><span class="green-btn" id="all-stories-btn_11" onclick="loadmore(11);">Load More</span></div>';

                                        $postsPage = $bigSize.$smallSize.$pagess; 

                                        echo $postsPage; 

                                         ?>
                                    </div>
                                    <!-- <div id="newsArticles"></div> -->
                                </div>
                                <div id="tab-event-articles" class="content-sec tab-pane in">
                                    <div class="title-content">
                                        <?php

                                        $data = '<div class="row" id="row-all-stories_12">';
                                        $args = array(
                                            'post_type' => 'post',
                                            'post_status' => 'publish',
                                            'cat' => 17,
                                            'posts_per_page' => '3',
                                            'paged'=> $paged
                                        );

                                        $arr_posts = new WP_Query( $args );

                                        if ( $arr_posts->have_posts() ) :
                                            $i=0;
                                            $smallSizePost='';
                                            $bigSize = '';
                                            $defaultThumbNail = get_template_directory_uri();
                                            
                                        while ( $arr_posts->have_posts() ) : $arr_posts->the_post();
                                            if($i==0){

                                                
                                                    $bigSize = $data.'<div class="col-md-7"><div class="img-content img-content-right"><div class="indulge-post-descrip"><a href="'.get_permalink().'">'.get_the_post_thumbnail($arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div></div></div>';
                                                                

                                                }else{ 

                                                    $smallSizePost .='<div class="img-content img-content-left"><a href="'.get_permalink().'"">'.get_the_post_thumbnail( $arr_posts->the_ID).'</a><label class="blue-label2">'.get_the_title($arr_posts->the_ID).'</label></div>'; 
                                                }   
                                            $i++;
                                        endwhile; 


                                        $smallSize = '<div class="col-md-5">'. $smallSizePost.'</div>';
                                                    
                                        endif;
                                        
                                        $big = 999999999;
                                        $pagess = '</div>';

                                        $postsPage = $bigSize.$smallSize.$pagess; 

                                        echo $postsPage; 

                                         ?>
                                    </div>
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
												
                                                <?php //do_shortcode('[widget id="wpzoom_instagram_widget-2"]'); ?>
                                                    <script src="https://www.powr.io/powr.js?platform=embed"></script><div class="powr-instagram-feed" id="4f85414f_1567581384"></div>												
                                               		
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
	                                            <div class="interact-post-custom" data-aos="zoom-in">
	                                            	<div id="fb-root"></div>
													<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
		            								<div class="fb-page" data-href="https://www.facebook.com/alohaoutdoorsmaui/" data-tabs="timeline" data-width="700" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/alohaoutdoorsmaui/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/alohaoutdoorsmaui/">Aloha Outdoors</a></blockquote></div>
												</div>
	                                    	</div>
	                                    </div>
	                                </div>
                                </div>
                                <div id="tab-twitter" class="content-sec tab-pane in">
                                    <div class="title-content">
                                        <div class="row">
                                         	<div class="col-md-12">
                                                <a class="twitter-timeline" data-width="650" data-height="550" href="https://twitter.com/Aloha_Outdoors?ref_src=twsrc%5Etfw">Tweets by Aloha_Outdoors</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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

    
<?php
get_footer();
?>
