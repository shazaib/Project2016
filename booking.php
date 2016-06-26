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
								
								<!-- <input class="fields" type="text" name="" placeholder="Person">  -->
								<select class="fields">
									<option>-- Person --</option>
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
								<input class="fields" type="tel" name="" placeholder="Phone No">
								<br>

								<h3>Payment Details</h3>

								<br>
								<input class="fields" type="text" name="" placeholder="Destination From">
								<br>
								<input class="fields" type="text" name="" placeholder="Destination To">
								<br>
								<input class="fields" type="date" name="" placeholder="Pick up date">
								<br>
								<input class="fields" type="time" name="" >
								<br>
								<!-- <input class="fields" type="" name=""> -->
								<select class="fields" name="">
									<option value="TaxiType">-- Taxi Type --</option>
									<option value="Town Taxi 2 seater">Town Taxi 2 seater</option>
									<option value="Town Taxi 4 seater">Town Taxi 4 seater</option>
								</select>	

								<br>
								<!-- <input class="fields" type="text" name=""> -->
								<select class="fields" name="">
									<option>-- No of Passenger --</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
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