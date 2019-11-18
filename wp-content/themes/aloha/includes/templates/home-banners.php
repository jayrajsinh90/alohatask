<!-- Home Banner : starts -->
<div class="home-banner" style="background-image: url(<?= THEME_URL ?>assets/images/Aloha-Homepage-banner.png)">
    	<div class="container">
    		<h1>WELCOME TO <span>PARADISE</span></h1>
    		<div class="banner-cta-div">
    			<a href="plan-book.html">PLAN YOUR STAY</a>
    			<img class="img-fluid" src="<?= THEME_URL ?>assets/images/cta.png" alt="icon">
    			<a href="">EXPLORE MAUI</a>
    		</div>
    		<!--Activities-Rental-pakages-->
			<form class="form-activity-choose">
				<ul class="nav nav-tabs">
					<li><a class="active" data-toggle="tab" href="#tab-activities">ACTIVITIES</a></li>
					<li><a data-toggle="tab" href="#tab-rentals" class="">RENTALS</a></li>
					<li><a data-toggle="tab" href="#tab-packages" class="">PACKAGES</a></li>
				</ul>
				<div class="tab-content">
					<div id="tab-activities" class="activity-tab tab-pane in active">
						<div class="row">
							<div class="col-md-6">
								<div class="choose-activity">
									<select name="activity">
										<option value="select1">Activity 1</option>
										<option value="select2">Activity 2</option>
										<option value="select3">Activity 3</option>
										<option value="select4">Activity 4</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="date-ad">
									<img src="<?= THEME_URL ?>assets/images/arrive.png" alt="">
									<label for="date-arrive">ARRIVE</label>
									<input maxlength="10" type='text' class="date-input datepicker" placeholder="00/00/0000">
								</div>
							</div>
							<div class="col-md-3">
								<div class="date-ad">
									<img src="<?= THEME_URL ?>assets/images/arrive.png" alt="">
									<label for="date-depart">DEPART</label>
									<input maxlength="10" type='text' class="date-input datepicker"  placeholder="00/00/0000">
								</div>
							</div>
						</div>
						<div class="adv-opt-sec">
							<div class="row">
								<div class="col-md-3">
									<div class="adv-opt">
										<select name="advanced-options">
											<option value="select1">Option 1</option>
											<option value="select2">Option 2</option>
											<option value="select3">Option 3</option>
											<option value="select4">Option 4</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="adv-opt">
										<select name="more-details">
											<option value="select1">Option 1</option>
											<option value="select2">Option 2</option>
											<option value="select3">Option 3</option>
											<option value="select4">Option 4</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="btn-search">
										<input type="submit" value="SEARCH">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="tab-rentals" class="activity-tab tab-pane fade">
						<div class="row">
							<div class="col-md-6">
								<div class="choose-activity">
									<select name="activity">
										<option value="select1">Rental 1</option>
										<option value="select2">Rental 2</option>
										<option value="select3">Rental 3</option>
										<option value="select4">Rental 4</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="date-ad">
									<img src="<?= THEME_URL ?>assets/images/arrive.png" alt="">
									<label for="date-arrive">ARRIVE</label>
									<input maxlength="10" type='text' class="date-input datepicker" placeholder="00/00/0000">
								</div>
							</div>
							<div class="col-md-3">
								<div class="date-ad">
									<img src="<?= THEME_URL ?>assets/images/arrive.png" alt="">
									<label for="date-depart">DEPART</label>
									<input maxlength="10" type='text' class="date-input datepicker"  placeholder="00/00/0000">
								</div>
							</div>
						</div>
						<div class="adv-opt-sec">
							<div class="row">
								<div class="col-md-3">
									<div class="adv-opt">
										<select name="advanced-options">
											<option value="select1">Option 1</option>
											<option value="select2">Option 2</option>
											<option value="select3">Option 3</option>
											<option value="select4">Option 4</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="adv-opt">
										<select name="more-details">
											<option value="select1">Option 1</option>
											<option value="select2">Option 2</option>
											<option value="select3">Option 3</option>
											<option value="select4">Option 4</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="btn-search">
										<input type="submit" value="SEARCH">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="tab-packages" class="activity-tab tab-pane fade">
						<div class="row">
							<div class="col-md-6">
								<div class="choose-activity">
									<select name="activity">
										<option value="select1">Package 1</option>
										<option value="select2">Package 2</option>
										<option value="select3">Package 3</option>
										<option value="select4">Package 4</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="date-ad">
									<img src="<?= THEME_URL ?>assets/images/arrive.png" alt="">
									<label for="date-arrive">ARRIVE</label>
									<input maxlength="10" type='text' class="date-input datepicker" placeholder="00/00/0000">
								</div>
							</div>
							<div class="col-md-3">
								<div class="date-ad">
									<img src="<?= THEME_URL ?>assets/images/arrive.png" alt="">
									<label for="date-depart">DEPART</label>
									<input maxlength="10" type='text' class="date-input datepicker"  placeholder="00/00/0000">
								</div>
							</div>
						</div>
						<div class="adv-opt-sec">
							<div class="row">
								<div class="col-md-3">
									<div class="adv-opt">
										<select name="advanced-options">
											<option value="select1">Option 1</option>
											<option value="select2">Option 2</option>
											<option value="select3">Option 3</option>
											<option value="select4">Option 4</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="adv-opt">
										<select name="more-details">
											<option value="select1">Option 1</option>
											<option value="select2">Option 2</option>
											<option value="select3">Option 3</option>
											<option value="select4">Option 4</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="btn-search">
										<input type="submit" value="SEARCH">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
    	</div>
    </div>
    <!-- Home Banner : ends -->