<?php
global $theme_customers; 
?>
<!-- Customers slider section starts -->
<section class="testimonial-section" style="background-image: url(<?= THEME_URL ?>assets/images/aloha-happy-customers-bgnd-img.png)">
	<div class="container">
		<h2>Happy Customers</h2>
		<div class="customers-testimonial">
			<?php
			$customerslist = $theme_customers->customer_listing_list();
			//var_dump($customerslist);

			if(!empty($customerslist))
			{
				foreach ($customerslist as $key => $customer) {
					$imageUrl = get_field('testimonial_image',$customer->ID);
					$description = get_field('testimonial_description', $customer->ID);
					?>
					<div class="row no-gutters">
						<div class="col-sm-6 left-media-div">
							<img class="img-fluid" src="<?php echo $imageUrl; ?>" alt="placeholder">
							<p class="customer-name"><?=$customer->post_title?></p>
						</div>
						<div class="col-sm-6 right-content-div">
							<p><?php echo $description; ?></p>
						</div>
					</div>
					<?php 
				}
			}
			?>

		</div>
	</div>
</section>
<!-- Customers slider section ends -->