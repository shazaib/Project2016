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

<style type="text/css">
	
table,th,tr,td {
	border: 1px solid #ccc;
}

th{
	font-family: 'Lato', sans-serif;
	font-size: 15px;
	color: #000;
	font-weight: 600;
	margin: 20px 0px 0px 0px;
	background-color: #ccc;
}

td{
	font-family: 'Lato', sans-serif;
	font-size: 14px;
	color: #000;
}

</style>

</head>

<body>

	<header>
		<img style="float:left; margin-left:30px;" src="images/logo3.png">
		<h1 style="padding:10px;" class="artical-header-h1">Our bookings</h1>
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
				 <div class="artical" style="margin-left:-80px;">
					<!-- <div class="artical-header">
						<h1 class="artical-header-h1">Our Bookings</h1>
					</div> -->
					
					<div class="artical-content" style="padding-top:20px; float:left; margin:0px 0px 0px 0px;">
						<div style="overflow-x:auto;">
							<table  style="float:left; width:100%;">
												
								<th>Id</th>	
								<th>Username</th>
								<th>User_email</th>
								<th>User Num</th>
								<th>Start Destination</th>
								<th>End Destination</th>
								<th>Date</th>
								<th>Time</th>
								<th>Distance</th>
								<th>Amount</th>
								<th>Driver_name</th>
								<th>Driver_email</th>
								<th>Driver_num</th>

								<?php 


									$sql="SELECT start_destination,end_destination,dates,times,Amount FROM booknow where user_email='$email' && fares='Yes' ";
								 	$obj=new config();
								 	$res=$obj->select($sql);

								 	while($row=$res->fetch_assoc()) {
								 	
								 									      ?>

								<tr>
									<td><?php echo $row['start_destination']; ?></td>
									<td><?php echo $row['end_destination']; ?></td>
									<td><?php echo $row['dates']; ?></td>
									<td><?php echo $row['times']; ?></td>
									<td><?php echo $row['Amount']; ?></td>
								<?php } ?>
							</table>
						</div>
					</div>

				</div><!-- artical end -->


				</div>

			</div>
		</div>
	</div>


	<?php include'footer.php'; ?>


</body>
</html>