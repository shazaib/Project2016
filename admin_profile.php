<!DOCTYPE html>
<html>
<head>
	<title>Admin Account</title>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<!-- Latest compiled Bootstrap JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Google font API -->
<link href='https://fonts.googleapis.com/css?family=Lato:900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>

<!-- Reset CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<!-- Style sheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- Font Awesome -->
<script src="https://use.fontawesome.com/4ab730f0d1.js"></script>

<!-- Account -->
<link rel="stylesheet" type="text/css" href="account.css">
   <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<header>
		<img src="images/logo3.png">
	</header>
	
	
	<div id="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<?php 

			 include_once('includes/config.php');
			 session_start();

			 $email=$_SESSION['email']; 

			if ($email==NULL) {
				 	
				 	header("Location:404");
				 }

			include'account-side-bar-admin.php'; ?>
				</div>


				<div class="col-lg-9 col-md-9 col-sm-9">

					<div class="artical">
						<div class="artical-header">
							<h1 class="artical-header-h1">Profile</h1>
						</div>
					</div>
				</div>	

  			</div><!-- row end -->
		</div><!-- container end -->
	</div><!-- main container end -->
</body>
</html>
























































