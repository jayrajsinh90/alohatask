<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>assets/images/favicon.png" />    

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font families cdn -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

    <!-- <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="<?= THEME_URL ?>assets/css/slick.css" >
    <link rel="stylesheet" href="<?= THEME_URL ?>assets/css/slick-theme.css" >
	<link rel="stylesheet" href="<?= THEME_URL ?>assets/css/master.css" >	  
	<script type="text/javascript" src="https://aloha-outdoors-dev.armentum.co/wp-content/themes/alohaoutdoors/assets/js/sweetalert.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>

	<!-- header: begin -->
    <header class="header">
      	<div class="container">
      	<!-- navigation: begin -->
	      	<nav class="navbar navbar-expand-lg navbar-dark">
	        	<a class="navbar-brand" href="<?= SITE_URL; ?>"><img class="img-fluid" src="<?= THEME_URL ?>assets/images/aloha-logo.png" alt="Aloha"></a>
	        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	          		<span class="navbar-toggler-icon"></span>
	        	</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<?php 
					wp_nav_menu( array(
							'theme_location' => 'front_header_menu',
							'menu_class' => 'navbar-nav ml-auto',
							'container' => 'ul',
						'depth' => 0, //change to 1 for no submenu levels
						'walker' => new WPB_Custom_Walker  // calling in the custom walker menu as in theme inc/custom-walker.php
						) ); 
					?>
					<?php 
						if ( is_user_logged_in() ) {
								//return true;		    
						}else{
						?>
						<div class="nav-item">
							<a class="nav-link-signin" data-toggle="modal" data-target="#loginModal" href="#"><img src="<?php bloginfo('template_directory');?>/assets/images/club-aloha.png" alt="CLUBALOHA" width="140px;" /></a>
							
						</div> 
						<?php }?>
				</div>  
	      	</nav>
	    <!-- navigation: end -->
      	</div>
    </header>
    <!-- header: end -->
    
    <!-- Home Banner : starts -->