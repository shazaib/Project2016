<?php include 'header.php' ?>

	<div class="booking-pg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<div class="booking">
						<h1 style="font-size:50px; text-align:center; margin-top: -90px;">SignUp</h1>
						<div class="booking-form">

							<form method="post" id="form">

								<h1 style="font-size:25px; text-align:center;">Sign up to ride</h1>
								<hr class="booking-hr">
								<h3>Personal Details</h3>
								
								<select name="person" class="fields" required>
									<option value="" selected disabled>-- Person --</option>
									<option value="Mr">Mr</option>
									<option value="Mrs">Mrs</option>
									<option value="Ms">Ms</option>
								</select>
								<br>
								<input class="fields" type="text" name="uname" placeholder="Username" pattern="[A-Za-z\s]{3,15}"  title="Maximum 3 & Allow 15 letters only" required>
								<br>
								<input class="fields" type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="eg:online-taxi@gmail.com" required>
								<br>
								<input class="fields" type="password" name="paswd" placeholder="Password" pattern=".{8,}" title="Allow eight or more characters" required>
								<br>
								<input class="fields" type="password" name="c_paswd" placeholder="Confirm Password" pattern=".{8,}" title="Password not match" required>

								<br>

								<h3>Contact Details</h3>

								<br>

								<input class="fields" type="text" name="num" placeholder="Phone No" pattern="^\d{11}$" title="eg:0000-000-0000" required>
								<br>
								<input class="fields" type="text" name="city" placeholder="City" pattern="[A-Za-z]{3,15}" title="Maximum 3 & Allow 15 letters only" required>
								<br>
								<input class="fields" type="text" name="adress" placeholder="Address" pattern=".{3,20}" title="Maximum 3 & Allow 15 letters only" required>
								<br>
								
								<button class="booking-ride-btn" type="submit" name="create">create</button>
								<button class="booking-ride-btn" type="reset" name="reset">Reset</button>
								</br>

								<button type="button" id="btn" name="btn" data-toggle="modal" data-target="#myModal" visibility="hidden" style="visibility:hidden;" ></button>

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




<!--Start Driver PHP Coding -->






<?php  

	if (isset($_POST['create'])) {

		$person=$_POST['person'];
		$uname=$_POST['uname'];
		$email=$_POST['email'];
		$paswd=$_POST['paswd'];
		$c_paswd=$_POST['c_paswd'];
		$num=$_POST['num'];
		$city=$_POST['city'];
		$adress=$_POST['adress'];
		


		$sql="INSERT into signup_user VALUES('','$person','$uname','$email','$paswd','$c_paswd','$num','$city','$adress')";
		$obj=new config();

		if ($paswd==$c_paswd) {
	
		$obj->dbconfig($sql);
		echo '<script> document.getElementById("btn").click(); </script>';

		}

		else {

		}

			}
?>

<!--End Drvier PHP Coding -->

<?php include 'footer.php' ?>



