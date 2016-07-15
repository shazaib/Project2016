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
						<form method="post" id="idform">
							<h2>Create An Account</h2>
							<input style="margin-top:25px;" class="form-input" type="text" name="fname"  placeholder="First Name" pattern="[A-Za-z]{1,15}" required ><br>
							<input class="form-input" type="text" name="lname" placeholder="Last Name" pattern="[A-Za-z]{1,15}" required ><br>
							<input class="form-input" type="text" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required ><br>
							<input class="form-input" type="password" name="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  required ><br>
							<input class="form-input" type="text" name="city" placeholder="City" pattern="[A-Za-z]{20}" required ><br>
							<input class="form-input" type="text" name="phone" placeholder="Phone" pattern="03[0-9]{2}-([0-9])(?!\1{6})[0-9]{6}" required ><br>
							<select class="form-input" name="select_driver" required>
								<option value="none">Where did you hear about us?</option>
								<option value="Friends & Family">Friends & Family</option>
								<option value="Email">Email</option>
								<option value="TV Ad">TV Ad</option>
								<option value="Social networks">Social networks</option>
								<option value="Other">Other</option>
							</select>
						<button type="submit" name="btn_submit" class="form-btn">Submit</button>
						</br>
						<button type="button" id="btn" name="btn" data-toggle="modal" data-target="#myModal" visibility="hidden" style="visibility:hidden"></button>
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


<?php  

if (isset($_POST['btn_submit'])) {


	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	$select_driver=$_POST['select_driver'];


	$sql="INSERT into tb_driver VALUES('','$fname','$lname','$email','$pass','$city','$phone','$select_driver')";
	$obj=new config();
	$obj->dbconfig($sql);


						} ?>


<?php /* echo '<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Driver has been added ..!</h4>
        </div>
        <div class="modal-body">
          <p>Thankyou Mr Driver</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div> ';
*/
?>
<!--End Drvier PHP Coding -->

<?php include'footer.php'; ?>
