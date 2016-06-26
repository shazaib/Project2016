<?php include 'header.php' ?>

	<div class="booking-pg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<div class="booking">
						<h1 style="font-size:50px; text-align:center; ">Book Your Ride Now</h1>
						<div class="booking-form">
							<hr>

							<form>
								<h3>Personal Details</h3>

								<!-- <label class="booking-form-para">Person :</label><br> -->
								<!-- <input class="fields" type="text" name="" placeholder="Person">  -->
								<select class="fields">
									<option>-- Person --</option>
									<option>Mr</option>
									<option>Mrs</option>
									<option>Ms</option>
								</select>
								<br>
								<!-- <label class="booking-form-para">Name :</label><br>	 -->
								<input class="fields" type="text" name="" placeholder="Full Name">
								<br>
								<!-- <label class="booking-form-para">Email :</label><br> -->
								<input class="fields" type="email" name="" placeholder="Email">
								<br>
								<!-- <label class="booking-form-para">Nationality :</label><br> -->
								<input class="fields" type="text" name="" placeholder="Nationality">
								<br>
								<!-- <label class="booking-form-para">Phone No :</label><br> -->
								<input class="fields" type="tel" name="" placeholder="Phone No">
								<br>

								<h3>Booking Details</h3>

								<br>
								<!-- <label class="booking-form-para">Destination From :</label><br> -->
								<input class="fields" type="text" name="" placeholder="Destination From">
								<br>
								<!-- <label class="booking-form-para">Destination To :</label><br> -->
								<input class="fields" type="text" name="" placeholder="Destination To">
								<br>
								<!-- <label class="booking-form-para">Pick up data :</label><br> -->
								<input class="fields" type="date" name="" placeholder="Pick up date">
								<br>
								<!-- <label class="booking-form-para">Pick up time :</label><br> -->
								<input class="fields" type="time" name="" >
								<br>
								<!-- <label class="booking-form-para">Taxi Type :</label> -->
								<!-- <input class="fields" type="" name=""> -->
								<select class="fields" name="">
									<option value="TaxiType">-- Taxi Type --</option>
									<option value="Town Taxi 2 seater">Town Taxi 2 seater</option>
									<option value="Town Taxi 4 seater">Town Taxi 4 seater</option>
								</select>	

								<br>
								<!-- <label class="booking-form-para">No of Passenger :</label> -->
								<!-- <input class="fields" type="text" name=""> -->
								<select class="fields" name="">
									<option>-- No of Passenger --</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
								<br>

								<button class="booking-ride-btn" type="submit" name="">Book Now</button>
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