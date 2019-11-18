	<!-- Footer starts -->
	<footer style="background-image: url(<?= THEME_URL ?>assets/images/aloha-footer-bgnd.png)">
		<div class="container">
			<div class="row">
				<div class="footer-menu-wrapper">
					<?php 
					wp_nav_menu( array(
						'theme_location' => 'footer_menu',
						'menu_class' => 'footer-menu',
						'container' => 'ul',
						'depth' => 0, //change to 1 for no submenu levels
						'walker' => new WPB_Custom_Walker  // calling in the custom walker menu as in theme inc/custom-walker.php
					) ); 
					?>
				</div>
				<div class="copyright-wrapper">
					<a href="index.html"><img class="img-fluid" src="<?= THEME_URL ?>assets/images/aloha-footer-logo.png" alt="Aloha"></a>
          <p><?php echo do_shortcode('[text]');  ?></p>
				</div>
				<div class="footer-menu-wrapper">
					<ul class="footer-social-menu">
						<li>
							<a href="https://www.facebook.com/alohaoutdoorsmaui/" target="_blank">
								<img class="img-fluid" src="<?= THEME_URL ?>assets/images/fb.png" alt="Facebook">
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/alohaoutdoors_/" target="_blank">
								<img class="img-fluid" src="<?= THEME_URL ?>assets/images/insta.png" alt="Instagram">
							</a>
						</li>
						<li>
							<a href="https://twitter.com/Aloha_Outdoors" target="_blank">
								<img class="img-fluid" src="<?= THEME_URL ?>assets/images/twitter.png" alt="Twitter">
							</a>
						</li>
						<li>
							<a href="https://vimeo.com/alohaoutdoors" target="_blank">
								<img class="img-fluid" src="<?= THEME_URL ?>assets/images/vimeo.png" alt="Vimeo">
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<img class="img-fluid" src="<?= THEME_URL ?>assets/images/in.png" alt="LinkedIn">
							</a>
						</li>
						<li>
							<a href="https://www.pinterest.com/aloha_outdoors/" target="_blank">
								<img class="img-fluid" src="<?= THEME_URL ?>assets/images/pintrest.png" alt="Pinterest">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer starts : Ends -->

	<!-- Register Modal: begin -->
  <div class="modal register-modal custom-modal" id="myModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          
          <!-- Modal body -->
          <div class="modal-body">
            <div class="row no-gutters">
              <div class="col-md-6 modal-left-sec">
                <img class="img-fluid img-bg-left" src="<?php bloginfo('template_directory');?>/assets/images/register-image.png" alt="Image" />
                <a href="<?php echo get_site_url();?>">
                	<img class="img-fluid icon-clb-alh" src="<?php bloginfo('template_directory');?>/assets/images/popup-logo.png" alt="CLUBALOHA" />
<!--                <img class="img-fluid" src="--><?php //bloginfo('template_directory');?><!--/assets/images/register-image.png" alt="Image" />-->
                <a href="<?php echo get_site_url();?>">
                	<img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/popup-logo.png" alt="CLUBALOHA" />
                </a>
              </div>
              <div class="col-md-6 modal-right-sec">
              	<div class="title-sec">
              		<p>Signup</p>
              		<p><a class="login-btn" data-toggle="modal" data-target="#loginModal" href="#">Login<img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/arrow.png" alt="icon" /></a></p>
              	</div>
                <form class="needs-validation login-form" id="register-form" method="post" novalidate>
                  <div class="form-group">
                  	<label for="validationCustom01" >Username</label>
                    <input type="text" class="form-control" placeholder="Enter Valid User Name" id="usernme" name="name" required>
					
                  </div>
				          <div class="form-group">
                  	<label for="name">First Name</label>
                    <input type="text" class="form-control" pattern="^[A-Za-z_-]{3,15}$" placeholder="Enter Your First Name" id="firstname" name="firstname" required>
                  </div>
				          <div class="form-group">
                  	<label for="name">Last Name</label>
                    <input type="text" class="form-control" pattern="^[A-Za-z_-]{3,15}$" placeholder="Enter Your Last Name" id="lastname" name="lastname" required>
                  </div>
                  <div class="form-group">
                  	<label for="email">Email ID</label>
                    <input type="email" id="signup-email" class="form-control" id="emailid" placeholder="Enter Email ID" name="email" required>
                  </div>
				          <div class="form-group">
                  	<label for="pasword">New Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" id="pasword" name="pasword" required>
                  </div>
                  <div class="form-group">
                  	<label for="phone">Phone</label>
                    <input type="text" class="form-control" pattern="^\d{10}$" id="phonenum" placeholder="Enter Phone Number" name="phone" required title="Please add 10 digit valid phone number">
                  </div>
                 
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" id="tnc" name="condition"> Accepting <a href="<?php echo get_site_url()."/privacy-policy";?>">terms & conditions</a> by registering
                    </label>
                  </div>
                  <div class="signup-btn-container">
                    <button type="button" name="signup" id="signup" onclick = "user_custom_signup();" class="green-btn">SIGNUP</button>
                    <div id= "loadingsignup" style="display:none;"><img src="<?php echo bloginfo('template_directory').'/assets/images/loader.gif'; ?>"></div>
                  </div>
                </form>

                <p style="color:green;" id="Siginupmsg"></p>
                <p style="color:red;" id="NoSiginupmsg"></p>
                
              </div>
            </div>
          </div>          
        </div>
      </div>
    </div>
    <!-- Register Modal: end -->



    <!-- Login Modal: begin -->
    <div class="modal custom-modal login-modal" id="loginModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          
          <!-- Modal body -->
          <div class="modal-body">
            <div class="row no-gutters">
              <div class="col-md-6 modal-left-sec">
                <img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/login-image.png" alt="Image" />
                <a href="<?php echo get_site_url();?>">
                	<img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/popup-logo.png" alt="CLUBALOHA" />
                </a>
              </div>
              <div class="col-md-6 modal-right-sec">

              	<div class="title-sec">
              		<p>Login</p>
              		<p><a class="signup-btn" data-toggle="modal" data-target="#myModal" href="#">Signup<img class="img-fluid" src="<?php bloginfo('template_directory');?>/assets/images/arrow.png" alt="icon" /></a></p>
              	</div>
                <form class="needs-validation login-form" id="login-form" method="post" novalidate>
				
                  <div class="form-group">
                  	<label for="user_name">User Name</label>
                    <input type="text" class="form-control" id="user_name" placeholder="Enter Username" name="username" required>
                  </div>
                  <div class="form-group">
                  	<label for="password">Password</label>
                    <input type="password" class="form-control" id="user_password" placeholder="Enter Password" name="password" required>
                  </div>
				  
                  <div class="login-btn-container">
                  	<button type="button" onclick="user_custom_login();" id="userlogin" name="login" class="green-btn">LOGIN</button>
                  	<a href="<?=LOST_PASSWORD?>">Forgot Password?</a>
                    <div id= "loading" style="display:none;"><img src="<?php echo bloginfo('template_directory').'/assets/images/loader.gif'; ?>"></div>
                  </div>

                  <p style="color:red;" id="loginmsg"></p>
                </form>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </div>
    <!-- Login Modal: end -->

	<!-- jQuery, Popper.js, and Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>


  <!-- <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="<?= THEME_URL ?>assets/js/slick.min.js"></script>
    <script type="text/javascript" src="<?= THEME_URL ?>assets/js/app.js"></script>
</body>
</html>