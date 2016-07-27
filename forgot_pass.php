<?php 

include ('includes/config.php');

session_start(); 

$email=$_SESSION['email'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>forgotten password</title>


<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Latest compiled Bootstrap JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 

	
</head>
<body>

		<form method="post" style="margin:230px;">
		 <input type="password" class="input-sm" name="paswd" Placeholder="Reagain Password"/> 		
		 <input type="email" class="input-sm" name="emails" Placeholder="Recovery Email"/>
		 <select class="input-sm"  name="type" required>
							<option value="" selected disabled>-- Select Account --</option>
							<option value="Rider">Rider</option>
							<option value="Driver">Driver</option>
						</select> 				
			<input type="submit" class="btn btn-danger btn-sm" name="forgot" value="Submit">
			<div id="area"></div>
		</form>
	<?php
	if(isset($_POST['forgot'])){
	

	 $type=$_POST['type'];	
	 $paswd=$_POST['paswd'];
	 $email=$_SESSION['email'];
	 $emails=$_POST['emails'];

	 if ($type=="Rider") {
	 	
     		$sql="SELECT email FROM signup_user";
     		$obj=new config();
			$res=$obj->select($sql);

			while ($row=$res->fetch_assoc()) {

				if ($email==$row['email'])
				 {	
					$sql="UPDATE signup_user set paswd='$paswd',c_paswd='$paswd'";
		     		$obj=new config();
					$obj->dbconfig($sql);
					mail('emails','Online Drivo','Your Passowrd is '.$paswd.' <br> --Thank You--','FROM:Online_Drivo@gmail.com');
				}

				else {

					echo  '<script> document.getElementById("area").innerHTML="Wrong Email..! Plz Enter Write Eamil" ;</script>';
					
				}
			}	
}


	else if ($type=="Driver") {
	 	
	
     		$sql="SELECT email FROM signup_driver";
     		$obj=new config();
			$res=$obj->select($sql);

			while ($row=$res->fetch_assoc()) {

				if ($email==$row['email'])
				 {	
					$sql="UPDATE signup_driver set password='$paswd'";
		     		$obj=new config();
					$obj->dbconfig($sql);
				}

				else {

					echo  '<script> document.getElementById("area").innerHTML="Wrong Email..! Plz Enter Write Eamil" ;</script>';
					
				}

			}

		}
	
	}



	?>

</body>
</html>
