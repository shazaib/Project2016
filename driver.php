
<?php include'header.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Driver Account</title>

</head>

<body>


	<div class="driver">
		
		<div class="container">
			<div class="row">
			<!-- <div class="overlay-opacity"> -->
				<div class="col-md-6 col-sm-6">
					<h1 class="side-h1">DRIVO NEEDS PARTNERS LIKE YOU.</h1>
					<p class="side-p">Drive with Taxi and earn great money as an independent contractor. Get paid weekly just for helping our community of riders get rides around town. Be your own boss and get paid in fares for driving on your own schedule.</p>

				</div>
				<div class="col-md-6 col-sm-6" style="padding-top:40px;">
					<div class="form" style="text-align:center;">
						<form method="post" id="idform">
							<h2>Create An Account</h2>
							<input style="margin-top:25px;" class="form-input" type="text" name="fname"  placeholder="First Name" pattern="[A-Za-z\s]{1,15}"  title="Allow 15 letters only" required><br>
							<input class="form-input" type="text" name="lname" placeholder="Last Name" pattern="[A-Za-z\s]{1,15}"  title="Allow 15 letters only" required><br>
							<input class="form-input" type="text" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="eg: online-taxi@gmail.com" required><br>
							<input class="form-input" type="password" name="pass" placeholder="Password" pattern=".{8,}" title="Allow eight or more characters" required><br>
							<input class="form-input" type="text" name="city" placeholder="City" pattern="[A-Za-z]{1,15}" required><br>
							<input class="form-input" type="text" name="phone" placeholder="Phone" pattern="^\d{11}$" title="eg: 0900-1234567" required><br>
							<input class="form-input" type="text" name="adress" placeholder="Adress" pattern=".{5,15}" title="eg: Nazimabad R900" required><br>
						<button type="submit" name="btn_submit" class="form-btn">Submit</button>
						</br>
						<button type="button" id="btn" name="btn" data-toggle="modal" data-target="#myModal" visibility="hidden" style="visibility:hidden"></button>
						</form>

						<div class="para-container">
							<p>
							By proceeding, I agree that Online Taxi or its representatives may contact me by email, phone, or SMS (including by automated means) at the email address or number I provide, including for marketing purposes. I have read and understand the Driver Privacy Statement.
							</p>
						</div>
						<h2 style="margin-bottom: 15px;">OR</h2>
						<a class="link-account" href="signin.php">Already have an account ?</a>
					</div>
				</div>

				<!-- </div> -->
			</div>

		</div>
		</div>
	</div>

<!--Start Drvier PHP Coding -->

<!-- Modal -->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Driver has been registered !</h2>
        </div>
        <div class="modal-body">
          <h5>Hy Mr <?php echo $_POST['fname']; ?>, Welcome to our site , I hope u drive taxi to make money from online-taxi.. </h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Thank You</button>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>

<?php  

	if (isset($_POST['btn_submit'])) {

		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$paswd=$_POST['pass'];
		$city=$_POST['city'];
		$phone=$_POST['phone'];
		$adress=$_POST['adress'];
		$access="No";
		$image="";

		$sql="INSERT into signup_driver VALUES('','$fname','$lname','$email','$paswd','$city','$phone','$adress','$access','$image')";
		$obj=new config();
		$obj->dbconfig($sql);

		echo '<script> document.getElementById("btn").click(); </script>';					}
 ?>
<!--End Drvier PHP Coding -->


<?php include'footer.php'; ?>

