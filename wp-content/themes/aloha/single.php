<?php
/**
 * The template for displaying all pages
 */

get_header(); 
?>

<!-- Inner Page Banner starts -->
<div class="inner-banner careers-banner interact-banner" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/alohaoutdoors/assets/images/aloha-careers-banner.png)">
        <div class="container">
            <h1>INTERACT</h1>
            <div class="inner-page-btn-wrapper">
                <a href="<?php echo get_site_url(); ?>/interact">BACK</a>
                <a href="">FOLLOW US</a>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner ends -->


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Info and media section starts -->
    <div class="container">
        <div class="info-media-section careers-detail-page">
            <div class="title-btn-container">
                <h2><?php the_title();?></h2>
                <p><?php the_field('subtitle'); ?></p>
            </div>
            <div class="interact-details-sec">
                <div class="interact-details-div" data-aos="zoom-in">
                    <?php the_field('video'); ?>
                    <!-- <video controls>
                        <source src="./assets/images/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
                    </video> -->
                </div>
                <?php the_content(); ?>
                <div class="btn-div">
                    <a class="green-btn" href="">Book a south maui luau</a>
                    <a class="green-btn" href="">Book a west maui luau</a>
                </div>
            </div>
        </div>
    </div>

<?php endwhile;
endif; ?>


<?php
get_footer();