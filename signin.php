
<!DOCTYPE html>
<html>
<head>
	<title>SignIn</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Latest compiled Bootstrap JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Style sheet -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Google font API -->
	<link href='https://fonts.googleapis.com/css?family=Lato:900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>

	<!-- Reset CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/4ab730f0d1.js"></script>

	<!--Smooth page Scroll-->
    <script src="smoothPageScroll.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>


	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
	<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>




</head>

<body>
<form method="post">
	<div class="container" style="text-align:-webkit-center; text-align:-moz-center; text-align:-ms-center;">
		<div class="row">

			<div class="col-md-4 col-sm-4 col-xs-4">
				<img class="side-feature-img img-responsive" src="images/feature_img2.png" style="position:relative; top:500px; left:36px;">			
			</div>


			<div class="col-md-4 col-sm-12 col-xs-12">
			<img src="images/logo3.png" style="margin-top:100px;">
				<div class="login">
					<div class="login-form">
						
						<h1 class="login-h1">SignIn</h1>
						<hr class="login-hr">
						
						<div class="login-fields-error" id="validation">Invalid Email or Password <br> Check account type </div>
						<div class="login-fields-error" id="validations"></div>
						<input class="login-fields" type="email" name="email" placeholder="Email" required><br>
						<input class="login-fields" type="password" name="paswd" placeholder="Password" required>
						<br>
						
						<select class="login-fields" name="type" required>
							<option value="" selected disabled>-- Select Account --</option>
							<option value="Rider">Rider</option>
							<option value="Driver">Driver</option>
						</select> 
						<br> 
					   

					   <button class="login-btn" type="submit" name="signin" >SignIn</button>

				
						<hr class="login-hr" style="margin-top:20px;">
						<a href="forgot_pass.php" ><p class="login-para">Forgot your password</p></a><br>
						<!-- <p style="text-decoration:none;" class="login-para">Don't have an account &nbsp <a href="#">SignUp</a></p> -->
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-4">
			<img class="side-feature-img img-responsive" src="images/feature_img.png" style="top:250px; left:-33px; position:relative;">
			</div>


		</div>
			

			

	</div>

</form>
</body>
</html>


<?php 

include ('includes/config.php');

session_start(); ?>

<?php 
	
	if (isset($_POST['signin'])) {

		$email=$_POST['email'];
		$paswd=$_POST['paswd'];
		$type=$_POST['type'];

		$_SESSION['email']=$email;
		$_SESSION['paswd']=$paswd;

		if ($type=="Rider") {

			$sql="SELECT * FROM signup_user where email='$email' ";	
			$obj=new config();
			$res=$obj->select($sql);

			while ($row=$res->fetch_assoc()){

			if ($_SESSION['email']==$row['email'] && $_SESSION['paswd']==$row['paswd']) {
					
					header("Location:profile.php");
				}

			else
				{
					echo '<script>document.getElementById("validation").style.display="block";</script>';
				}

				}

			}


		else {

			echo '<script>document.getElementById("validation").style.display="block";</script>';

		}

			

		 

		 if ($type=="Driver")
		 {

			$sql="SELECT id,access,email,password FROM signup_driver where email='$email' and Access='Yes'";
			$obj=new config();
			$res=$obj->select($sql);

			while ($row=$res->fetch_assoc())
			{
		
				if ($_SESSION['email']==$row['email'] && $_SESSION['paswd']==$row['password']) {

					header("Location:driver-profile");
				}

				else
				{
					echo '<script>document.getElementById("validation").style.display="block";</script>';
				}
			}

		 }

	else{
			echo '<script>document.getElementById("validation").style.display="block";</script>';
		}



}	


 ?>


