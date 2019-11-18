<?php
get_header();
?>

<!-- Inner Page Banner starts -->
<div class="inner-banner careers-banner project-details-banner" style="background-image: url(<?php the_post_thumbnail_url();?>)">
    <div class="container">
        <h1><?php the_title();?></h1>
    </div>
</div>
<!-- Inner Page Banner ends -->


<div class="section-wrapper">
    <?php if( have_rows('section') ): ?>
        <?php while( have_rows('section') ): the_row();

            // vars
            $sectionContent = get_sub_field('section_content');

            ?>

            <div class="project-details-page-section">
                <div class="container">
                    <?php echo $sectionContent; ?>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php include_once('includes/templates/happy-customers.php'); ?>
<?php include_once('includes/templates/newsletter.php'); ?>


<?php get_footer(); ?>

