<?php include 'header.php' ?>

	<div class="booking-pg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<div class="booking">
						<h1 style="font-size:50px; text-align:center; margin-top: -90px;">SignUp</h1>
						<div class="booking-form">
							
							<form>

								<h1 style="font-size:25px; text-align:center;">Sign up to ride</h1>
								<hr class="booking-hr">
								<h3>Personal Details</h3>
								
								<select class="fields">
									<option selected disabled >-- Person --</option>
									<option>Mr</option>
									<option>Mrs</option>
									<option>Ms</option>
								</select>
								<br>
								<input class="fields" type="text" name="" placeholder="Username">
								<br>
								<input class="fields" type="email" name="" placeholder="Email">
								<br>
								<input class="fields" type="password" name="" placeholder="Password">
								<br>
								<input class="fields" type="password" name="" placeholder="Confirm Password">
								<br>

								<h3>Contact Details</h3>

								<br>
								<input class="fields" type="text" name="" placeholder="Phone No">
								<br>
								<input class="fields" type="text" name="" placeholder="City">
								<br>
								<input class="fields" type="text" name="" placeholder="Address">
								<br>
								
								<button class="booking-ride-btn" type="submit" name="">create</button>
								<button class="booking-ride-btn" type="reset" name="">Reset</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-img"></div>
	</div>

<div>
</div>


<?php include 'footer.php' ?>


<!-- <script type="text/javascript"> 
      $(document).ready(function()
      {  
         $("#ap").click(function() {
         $("#sd").slideToggle("slow")
         // $("#su").slideUp("slow")
         });  
       });      
 </script> -->