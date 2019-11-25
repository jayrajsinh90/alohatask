<?php
/**
 * Template Name: Contact Us Page
 */

get_header(); ?>
<div class="inner-banner contact-us-banner" style="background-image: url(https://aloha-outdoors-dev.armentum.co/wp-content/uploads/2019/07/aloha-contact-us-banner.png)">
    <div class="container">
        <h1>CONTACT US</h1>
        <div class="inner-page-btn-wrapper">
            <a href="#contact-section">CONTACT US</a>
        </div>
    </div>
</div>
<!-- contact us section starts -->
<div class="container">
    	<div class="contact-us-section" id="contact-section">
    		<div class="row">
    			<div class="col-sm-6 contact-us-left-sec" style="background-image: url(https://aloha-outdoors-dev.armentum.co/wp-content/themes/alohaoutdoors/assets/images/aloha-contact-left-banner.png)">
    				<img class="img-fluid" src="https://aloha-outdoors-dev.armentum.co/wp-content/themes/alohaoutdoors/assets/images/contact-icon1.png" alt="icon">
    				<div>
    					<p>If you have an important question please call</p>
    					<h3><a href="tel:8084444044">8084444044</a></h3>
    				</div>
    				<div>
    					<h4>ADDRESS</h4>
    					<p>2670 Wai Wai Place Kihei, HI 96753</p>
    				</div>
    				<div>
    					<h4>Business Hours</h4>
    					<p>7AM - 7PM MON - SAT</p>
    					<p>Closed Sundays</p>
    				</div>
    			</div>
    			<div class="col-sm-6 contact-us-right-sec" style="background-image: url(https://aloha-outdoors-dev.armentum.co/wp-content/themes/alohaoutdoors/assets/images/aloha-contact-right-banner.png)">
    				<img class="img-fluid" src="https://aloha-outdoors-dev.armentum.co/wp-content/themes/alohaoutdoors/assets/images/contact-icon2.png" alt="icon">

                    <div class="contact-page-form">
                        <?php echo do_shortcode('[contact-form-7 id="34" title="Contact form 1"]'); ?>
					</div>
    			</div>
    		</div>
    	</div>
    </div>
<!-- contact us section ends -->
	<?php include_once('includes/templates/happy-customers.php'); ?>
	<?php include_once('includes/templates/newsletter.php'); ?>
<?php
get_footer();
?>
