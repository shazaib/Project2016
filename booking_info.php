<!DOCTYPE html>
<html>
<head>
	<title>Admin|Booking_Info</title>


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


	<?php include_once('includes/config.php'); ?>
	<header>
		<img style="float:left; margin-left:30px;" src="images/logo3.png">
		<h1 style="padding:10px;" class="artical-header-h1">Booking Info</h1>
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

						include 'account-side-bar-admin.php'; 
					?>
				</div>

				<div class="col-lg-9 col-md-9 col-sm-9">
				 <div style="margin-left:-80px;" class="artical">
				
			<form method="post" enctype="multipart/form-data" class="form-inline">
			<table class="th1 table-striped table-hover table-condensed" style="margin-top:8px;">
 				<tr style="background-color:#ccc;">
	 				<th>Id</th>
	 				<th>U_Email</th>
	 				<th>Name</th>
	 				<th>City</th>
	 				<th>Phone</th>
	 				<th>Pick</th>
	 				<th>Drop</th>
	 				<th>Date</th>
	 				<th>Time</th>
	 				<th>Amount</th>
	 				<th>Km</th>
	 				<th>D_Email</th>
	 				<th>T_Minutes</th>
	 				<th><span class="glyphicon glyphicon-check"></span></th>
 				</tr>
	
				<?php 

				$sql="SELECT * FROM booknow where fares='No'";
				$obj=new config();
				$res=$obj->select($sql);

				while($row=$res->fetch_assoc())
				{ 

					$busy_time=$row['times'];
					$total_time=$row['total_time'];
					$book_date=$row['dates'];

 				echo "<tr><td>".$row['id']."</td><td>".$row['user_email']."</td><td>".$row['name']."</td><td>".$row['city']."</td><td>".$row['phone']."</td><td>".$row['start_destination']."</td><td>".$row['end_destination']."</td>
 					  <td>".$row['dates']."</td><td>".$row['times']."</td><td>".$row['Amount']."</td><td>".$row['distance']."</td><td>".$row['driver_email']."</td><td>".$row['total_time']."</td>
 					  <td><form method='get'><a href='?driver_email=".$row['driver_email']."'><input type='button' name='Access' class='btn btn-success btn-xs' value='Access'></a><a href='?driver_email_delete=".$row['driver_email']."'><input style='width:52px;margin-top:5px;' type='button' name='Deny' class='btn btn-xs btn-danger' value='Deny'></a></form></td>
 					  </tr>";
 						}

				if (isset($_GET['driver_email'])) {


				   $driver_email=$_GET['driver_email'];
				   $sql="UPDATE signup_driver SET busy_time='$busy_time',available_time='$total_time',book_date='$book_date' where email='$driver_email'";
				   $sql1="UPDATE booknow SET fares='Yes' where driver_email='$driver_email'";
		           $obj=new config();
		           $obj->dbconfig($sql);     
		           $obj->dbconfig($sql1);
		           echo '<script>document.location.href = "booking_info";</script>';


					}


			
				  if (isset($_GET['driver_email_delete'])) {


				   $driver_email_delete=$_GET['driver_email_delete'];
				   $sql="DELETE FROM  booknow where driver_email='$driver_email_delete'";
				   $obj=new config();
				   $obj->dbconfig($sql);
				   header("Location:booking_info"); 

				   	}
	

				 ?>

				</table>

			<!-- </div> -->

				</div><!-- artical end -->

			</div>
		</div>
	</div>

	<?php include'footer.php'; ?>

</body>
</html>