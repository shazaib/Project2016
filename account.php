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

<style type="text/css">
	
header{
	width: 100%;
	height: 100px;
	background-color: #ffd405;
	/*margin-bottom: 50px;*/
}

#main-container{
	width: 100%;
	/*height: 800px;*/
	/*background-color: green;*/
}

.side-bar{
	/*width: 100%;*/
	height: 800px;
	border-right: 1px solid #ccc;
	border-left: 1px solid #ccc;
	/*background-color: #ccc;*/
	text-align: -webkit-center;
	text-align: -webkit-center;
	text-align: -moz-center;
	text-align: -ms-center;
	padding-top: 50px;
}


.profile-img{
	width: 130px;
	height: 130px;
	/*background-color: #000;*/
	border-radius: 100px;
	border: 2px solid #ccc;
	/*margin-top: 40px;*/
	overflow: hidden;
}

.profile-img-name{
	font-family: 'Lato', sans-serif;
	font-size: 20px;
	color: #000;
	margin-top: 20px;
	margin-bottom: 60px;
}

.side-bar-btn{
	width: 100%;
	height: 50px;
	background: none;
	outline: none;
	border-top: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	border-left: none;
	border-right: none;
	font-family: 'Lato', sans-serif;
	font-size: 15px;
	font-weight: 600;
	color: #000;
	display: inline-block;
}

.side-bar-btn:hover{
	color: #ffd405;
	background-color: #000;
}

.btn-img-user{
	background: url(images/user.png) no-repeat;
	background-position: left;
}

.btn-img-trip{
	background: url(images/trip.png) no-repeat;
	background-position: left;
}

.btn-img-payment{
	background: url(images/payment.png) no-repeat;
	background-position: left;
}

.btn-img-signout{
	background: url(images/signout.png) no-repeat;
	background-position: left;
}

.artical{
	/*width: 100%;*/
	height: 800px;
	/*background-color: #ccc;*/
	text-align: -webkit-center;
}

.artical-header{
	width: 100%;
	height: 100px;
	background-color: #fff;
	border-bottom: 1px solid #ccc;
}

.artical-header-h1{
	font-family: 'Lato', sans-serif;
	font-size: 25px;
	color: #000;
	padding-top: 40px;
    text-transform: uppercase;
}

table,tr,td{
	border: 1px solid #ccc;
	width: 500px;
}

</style>

</head>

<body>

	<header>
		
	</header>
	
	<div id="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<?php include'account-side-bar.php'; ?>
				</div>

				<div class="col-lg-9 col-md-9 col-sm-9">
					<div class="artical">
						<div class="artical-header">
							<h1 class="artical-header-h1">Profile</h1>
						</div>

							<table >
			
								<th>Pirce</th>
								<th>Pirce</th>
								<th>Pirce</th>

								<tr>
								<td>Driver</td>
								<td>Driver</td>
								<td>Driver</td>
								</tr>	

							</table>


					</div>	
				</div>

			</div>
		</div>
	</div>

	<?php include'footer.php'; ?>


	


</body>
</html>