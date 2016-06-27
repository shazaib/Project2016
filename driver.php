<?php include'header.php'; ?>

	<div class="driver">
		
		<div class="container">
			<div class="row">
			<!-- <div class="overlay-opacity"> -->
				<div class="col-md-6 col-sm-6">
					<h1 class="side-h1">TAXI NEEDS PARTNERS LIKE YOU.</h1>
					<p class="side-p">Drive with Taxi and earn great money as an independent contractor. Get paid weekly just for helping our community of riders get rides around town. Be your own boss and get paid in fares for driving on your own schedule.</p>

				</div>
				<div class="col-md-6 col-sm-6" style="padding-top:40px;">
					<div class="form" style="text-align:center;">
						<form method="post">
							<h2>Create An Account</h2>
							<input style="margin-top:25px;" class="form-input" type="text" name="fname" placeholder="First Name"><br>
							<input class="form-input" type="text" name="lname" placeholder="Last Name"><br>
							<input class="form-input" type="text" name="email" placeholder="Email"><br>
							<input class="form-input" type="password" name="pass" placeholder="Password"><br>
							<input class="form-input" type="text" name="city" placeholder="City"><br>
							<input class="form-input" type="text" name="phone" placeholder="Phone"><br>
							<select class="form-input" name="select_driver">
								<option value="none">Where did you hear about us?</option>
								<option value="Friends & Family">Friends & Family</option>
								<option value="Email">Email</option>
								<option value="TV Ad">TV Ad</option>
								<option value="Social networks">Social networks</option>
								<option value="Other">Other</option>
							</select>
							<button  type="submit" name="btn_submit" class="form-btn" data-toggle="modal" data-target="#myModal">Submit</button>
						</form>
						<div class="para-container">
							<p>
							By proceeding, I agree that Uber or its representatives may contact me by email, phone, or SMS (including by automated means) at the email address or number I provide, including for marketing purposes. I have read and understand the Driver Privacy Statement.
							</p>
						</div>
						<h2 style="margin-bottom: 15px;">OR</h2>
						<a class="link-account" href="login.php">Already have an account ?</a>
					</div>
				</div>

				<!-- </div> -->
			</div>

		</div>
		</div>
	</div>



<!--Start Drvier PHP Coding -->




<!--End Drvier PHP Coding -->

<?php include'footer.php'; ?>



