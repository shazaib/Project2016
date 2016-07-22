<!DOCTYPE html>
<html>
<head>
	<title>Driver Account</title>


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

<?php 

include ('includes/config.php');
session_start();

	$email=$_SESSION['email']; 

	if ($email==NULL) {
 	header("Location:404");
 }
 
 	$sql="SELECT firstname,email,password,phone,city,adress,image FROM signup_driver WHERE email='$email'";
	$obj=new config();
	$res=$obj->select($sql);
   
	while($row=$res->fetch_assoc()) {

?>



	<header>
		<img src="images/logo3.png">
	</header>
	
	<div id="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<?php include'account-side-bar-driver.php'; ?>
				</div>

				<div class="col-lg-9 col-md-9 col-sm-9">

				 <div class="artical">
					<div class="artical-header">
						<h1 class="artical-header-h1">Monthly Status</h1>
					</div>
					
					<div class="artical-content" style="padding-top:20px; float:left; margin:0px 0px 0px 0px;">
						<div style="overflow-x:auto;">
							<table  style="float:left; width:100%;">
								<th>Start Destination</th>
								<th>End Destination</th>
								<th>Date</th>
								<th>Time</th>
								<th>Payment</th>

								<tr>
									<td>BufferZone</td>
									<td>Gulshan</td>
									<td>18-5-2016</td>
									<td>5:00</td>
									<td>500</td>
								</tr>
							</table>
						</div>
					</div>

				</div><!-- artical end -->

				<?php  } ?>

				</div>

			</div>
		</div>
	</div>

	<?php include'footer.php'; ?>


</body>
</html>