<?php 

get_header();

?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->
	
	<!-- News Letter section starts -->
	<div class="newletter-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3>Aloha Newsletter</h3>
				</div>
				<div class="col-md-8">
					<?php echo do_shortcode( '[mc4wp_form id="199"]' ); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- News Letter section ends -->


<?php 

get_footer(); 

?>