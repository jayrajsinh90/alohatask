<?php 
	global $theme_planbook;  
?>
 <!--Plan-Your-Dream-Vacation-->
 <section class="plan-ur-drm-vac">
		<h1>Plan your dream vacation</h1>
		<div class="container">
			<div class="row">
				<?php 
					$bookCateg = $theme_planbook->planbook_category_list();
					if(!empty($bookCateg))
					{
						foreach ($bookCateg as $key => $booknow) {
							$iconsUrl = get_field("booking_icon", 'plan_book_category_'.$booknow->term_id); 
							$backImage = get_field("background_image", 'plan_book_category_'.$booknow->term_id);
							?>
							<div class="col-md-4 col-bg" style="background-image: url(<?php echo $backImage; ?>);background-repeat: no-repeat;background-size: cover;">
								<div class="vacation-place">
									<img src="<?php echo $iconsUrl; ?>" alt="img">		
									<h4><?=$booknow->name?></h4>
								</div>
								<div class="plan-inner-sec">
									<div class="row">
										<div class="col-sm-12 act-tit-left">
							
										<?php 
										$termId = $booknow->term_id;
										$booklistings = $theme_planbook->planbook_listing_list($termId);
										//var_dump($booklistings);

										if(!empty($booklistings))
										{
											foreach($booklistings as $key => $booklisting)
											{	
												//var_dump($booklisting);
												$postBackImage = get_field("post_image",$booklisting->ID);
												?>
												<div class="activity-title">
													<a href="<?php the_permalink($booklisting->ID);?>">
														<img src="<?php echo $postBackImage; ?>" alt="img">
														<h4><?= $booklisting->post_title ?></h4>
													</a>
												</div>
												<?php
											}
										}
										?>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>
	</section>
	<!--/Plan-Your-Dream-Vacation-->