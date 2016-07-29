<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>


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

<style type="text/css">
th{
	font-family: 'Lato', sans-serif;
	font-weight: 600;
}
</style>

</head>
<body>

	<header>
		<img style="float:left; margin-left:30px;" src="images/logo3.png">
		<h1 style="padding:10px;" class="artical-header-h1">Our Drivers</h1>
	</header>
	
	<div id="main-container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<?php 

			 include_once('includes/config.php');
			 session_start();

			 $email=$_SESSION['email']; 

			if ($email==NULL) {
				 	
				 	header("Location:404");
				 }

				 include 'account-side-bar-admin.php'; ?>
				</div>

				<div class="col-lg-9 col-md-9 col-sm-9">
				 <div class="artical">
				
			<form method="post" enctype="multipart/form-data" class="form-inline" >
		
		<!-- <div class="col-md-9"> -->
			<table class="th1 table-striped table-hover table-condensed" style="margin-top:8px;margin-left: -150px;">
 				<tr style="background-color:#ccc;"><th>Firstname</th><th>Email</th><th>City</th><th>Phone</th><th>Adress</th><th>Status</th><th>B_Time</th><th>A_Time</th><th>Book_Date</th><th><span class="glyphicon glyphicon-check"></span><span class="glyphicon glyphicon-hand-left"></span></th></tr>
	
		<?php 

				$sql="SELECT * FROM signup_driver where Access='Yes'";
				$obj=new config();
				$res=$obj->select($sql);

				while($row=$res->fetch_assoc())
				{ 

 				echo "<tr><td>".$row['firstname']."</td><td>".$row['email']."</td><td>".$row['city']."</td><td>".$row['phone']."</td><td>".$row['adress']."</td><td>".$row['status']."</td><td>".$row['busy_time']."</td><td>".$row['available_time']."</td><td>".$row['book_date']."</td></tr>";
				//<td><button type='submit' id='refresh' onclick='myFunction' class='btn btn-danger btn-xs' name='Access'><a style='color:white;' href='?nos=".$row['id']."'>Allow</a></button></td><td><button type='submit' class='btn btn-danger btn-xs' name='deny'><a style='color:white;' href='?nos1=".$row['id']."'>Deny</a></button></td></tr>";
				
				}?>
				</table>

			<!-- </div> -->
		
				</div><!-- artical end -->


				</div>

			</div>
		</div>
	</div>


	<?php include'footer.php'; ?>

</body>
</html>