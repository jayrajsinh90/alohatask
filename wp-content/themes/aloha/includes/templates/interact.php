<!-- Home Interact Section : starts -->
<div class="home-indulge-sec home-interact-sec">
		<div class="container">
			<h2>Interact</h2>
			<ul class="nav nav-tabs indulge-tabs">
	          <li><a class="active" data-toggle="tab" href="#story">LET'S TALK STORY</a></li>
	          <li><a data-toggle="tab" href="#articles">ALOHA ARTICLES</a></li>
	          <li><a data-toggle="tab" href="#socialMedia">SOCIAL MEDIA</a></li>
	        </ul>

	        <div class="tab-content">
	            <div id="story" class="tab-pane in active">
	            	<div class="row">
					
					
					<?php 
							$args = array(
									'post_type' => 'post',
									'post_status' => 'publish',
									'cat' => '19',
									'posts_per_page' => 3,
								);
								$arr_posts = new WP_Query( $args );
								//var_dump($arr_posts);
								 
								if ( $arr_posts->have_posts() ) :
						
									while ( $arr_posts->have_posts() ) :
										$arr_posts->the_post();
										?>

										<div class="col-md-4">
											<div class="indulge-post" data-aos="zoom-in">


                                                <?php
											if ( has_post_thumbnail() ) :
												the_post_thumbnail();
											endif;
											?>

												<div class="indulge-post-descrip">
													<p> <a style="color:white;" href='<?php the_permalink(); ?>'><?php the_title(); ?></a></p>
												</div>

										</div>
										</div>

										<?php
									endwhile;
								endif;
					
					
					?>
	            	</div>
				</div>
				<div id="articles" class="tab-pane fade">
	            	<div class="row">
					<?php 
							$args = array(
									'post_type' => 'post',
									'post_status' => 'publish',
									'category' => '16',
									'posts_per_page' => 3,
								);
								$arr_posts = new WP_Query( $args );
								 
								if ( $arr_posts->have_posts() ) :
						
									while ( $arr_posts->have_posts() ) :
										$arr_posts->the_post();
										?>
										
										<div class="col-md-4">
											<div class="indulge-post" data-aos="zoom-in">
											<?php
											if ( has_post_thumbnail() ) :
												the_post_thumbnail();
											endif;
											?>
											
												<div class="indulge-post-descrip">
													<p> <a style="color:white;" href='<?php the_permalink(); ?>'><?php the_title(); ?></a></p>
												</div>	
										</div>
										</div>
										<?php
									endwhile;
								endif;
					
					
					?>
	            	</div>
	            </div>
				<div id="socialMedia" class="tab-pane fade">
	            	<div class="row">
	            		<div class="col-md-4 interact-post-wrapper">
	            			<div class="interact-post" data-aos="zoom-in">
	            				<video controls>
									<source src="<?= THEME_URL ?>assets/images/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
								</video>
	            			</div>
	            		</div>
	            		<div class="col-md-4 interact-post-wrapper">
	            			<div class="interact-post" data-aos="zoom-in">
	            				<video controls>
									<source src="<?= THEME_URL ?>assets/images/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
								</video>
	            			</div>
	            			<div class="interact-post" data-aos="zoom-in">
	            				<video controls>
									<source src="<?= THEME_URL ?>assets/images/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
								</video>
	            			</div>
	            		</div>
	            		<div class="col-md-4 interact-post-wrapper">
	            			<div class="interact-post" data-aos="zoom-in">
	            				<video controls>
									<source src="<?= THEME_URL ?>assets/images/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
								</video>
	            			</div>
	            		</div>
	            	</div>
				</div>
	        </div>

	        <div class="btn-wrapper">
				<a class="green-btn" href="<?php echo get_site_url(); ?>/interact">VIEW MORE</a>
			</div>
		</div>
	</div>
	<!-- Home Interact Section : Ends -->
