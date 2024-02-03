<div class="header-wrapper style-14">
	<header class="type-4">

		<div class="header-top">


			<div class="header-top-entry">
				<div class="title"><img src="img/india.jpg" alt="" />India</div>
			</div>
			<div class="header-top-entry hidden-xs">
				<div class="title"><i class="fa fa-phone"></i>Any question? Call Us <a href="tel:+911234567890"><b>+91 1234567890</b></a></div>
			</div>

			<div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
			<div class="clear"></div>

			<div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
			<div class="clear"></div>
		</div>

		<div class="header-middle">
			<div class="logo-wrapper">
				<a id="logo" href="#"><img style="width: 120px;" src="img/main_logo.png" alt="" /></a>
			</div>

			<?php
											  if(isset($_SESSION['user_email']))
											  {
												  ?>
				<div class="right-entries_new">

					<div class="title"><?php echo $_SESSION['user_email'];  ?><i class="fa fa-caret-down"></i></div>
					<div class="list">
						<a href="profile.php" class="list-entry">Profile</a>
						<a href="viewcomp.php" class="list-entry">View Complaints</a>
						<a href="viewapprovedcomp.php" class="list-entry">View Approve Complaints</a>
						<a href="logout.php" class="list-entry">Logout</a>
					</div>

				</div>



				<?php		  										  
						 					}
						else
						{
							?>
					<div class="right-entries">

						<a href="login.php" class="header-functionality-entry"><i class="fa fa-user"></i><span>Login</span></a>


						<a href="signup.php" class="header-functionality-entry"><i class="fa fa-user-plus"></i><span>Sign up</span></a>

					</div>
					<?php
						
						}
?>
		</div>

		<div class="close-header-layer"></div>
		<div class="navigation">
			<div class="navigation-header responsive-menu-toggle-class">
				<div class="title">Ahmedabad Live</div>
				<div class="close-menu"></div>
			</div>
			<div class="header-simple-search hidden-xs hidden-sm hidden-md">
				<div class="row">
					<div class="col-md-3 col-md-push-9">

					</div>
				</div>
			</div>
			<div class="nav-overflow">
				<nav>
					<ul>
						<li class="full-width">
							<a href="index.php" class="active">Home</a>

						</li>
						<li class="full-width-columns">
							<a href="complaint.php">Complain</a>
						</li>
						<li class="simple-list">
							<a href="aboutus.php">About us</a>

						</li>
						<li class="column-1">
							<a href="contactus.php">Contact us</a>

						</li>
						<li class="column-1">
							<a href="feedback.php">Feedback</a>

						</li>

						<li class="fixed-header-visible">

							<?php
											  if(isset($_SESSION['user_email']))
											  {
												  ?>
								<div class="right-entries">

									<div class="title"><?php echo $_SESSION['user_email'];  ?><i class="fa fa-caret-down"></i></div>
					<div class="list">
						<a href="profile.php" class="list-entry">Profile</a>
						<a href="viewcomp.php" class="list-entry">View Complaine</a>
						<a href="viewapprovedcomp.php" class="list-entry">View Aprove Complaine</a>
						<a href="logout.php" class="list-entry">Logout</a>
					</div>

								</div>

								<?php
											  }
												else
												{
													?>

									<a href="login.php" class="fixed-header-square-button open-cart-popup" style="margin-right: 25px;"><i class="fa fa-user" style="padding-right:8px;"></i>Login</a>


									<a href="signup.php" class="fixed-header-square-button open-search-popup"><i class="fa fa-user-plus" style="padding-right:8px;"></i>  <a href="signup.php" style="text-decoration: none;">Sign up</a></a>
									<?php
												}
										
										?>



						</li>
					</ul>
					<div class="clear"></div>

					<a class="fixed-header-visible additional-header-logo"><img style="width: 120px;" src="img/main_logo.png" alt="" /></a>
				</nav>
				<div class="navigation-footer responsive-menu-toggle-class">

				</div>
			</div>

		</div>
	</header>
	<div class="clear"></div>
</div>
