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
									<option selected disabled >-- Person --</option>
									<option>Mr</option>
									<option>Mrs</option>
									<option>Ms</option>
								</select>
								<br>
								<input class="fields" type="text" name="usname" placeholder="Username">
								<br>
								<input class="fields" type="email" name="email" placeholder="Email">
								<br>
								<input class="fields" type="password" name="pass" placeholder="Password">
								<br>
								<input class="fields" type="password" name="cn_pass" placeholder="Confirm Password">
								<br>

								<h3>Contact Details</h3>

								<br>
								<input class="fields" type="text" name="num" placeholder="Phone No">
								<br>
								<input class="fields" type="text" name="city" placeholder="City">
								<br>
								<input class="fields" type="text" name="add" placeholder="Address">
								<br>
								
								<button class="booking-ride-btn" type="submit" name="btn_submit">create</button>
								<button class="booking-ride-btn" type="reset" name="reset">Reset</button>
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


<?php  

if (isset($_POST['btn_submit'])) {


	$usname=$_POST['usname'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$cn_pass=$_POST['cn_pass'];
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	$address=$_POST['add'];


	$sql="INSERT into tb_driver VALUES('','$fname','$lname','$email','$pass','$city','$phone','$select_driver')";
	$obj=new config();
	$obj->dbconfig($sql);


						} ?>


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