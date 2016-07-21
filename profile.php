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

.save-btn{
	/*width: 100px;*/
	height: 40px;
	background-color: #000;
	float: left;
	font-family: 'Lato', sans-serif;
	font-size: 14px;
	color: #ffd405;
	border: none;
	outline: none;
}

.save-btn:hover{
	background-color: #ffd405;
	color: #000;
}





</style>

</head>

<?php 

 include ('includes/config.php');
 session_start();

 $email=$_SESSION['email']; 

 if ($email==NULL) {
 	header("Location:404");
 }


 $sql="SELECT username,email, paswd, phone_no, city, adress,image FROM signup_user WHERE email='$email'";
 $obj=new config();
 $res=$obj->select($sql);

 	while ($row=$res->fetch_assoc()) {
 	
 
?>

<body>
	<header>
		<img src="images/logo3.png">
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
					
					<div class="artical-content">
							<form method="post" enctype="multipart/form-data">
						<div class="profile-img" style="margin:-165px 0px 0px 50px; float:left;">	
					<!-- BLOB / LONGBLOB-->	<?php 
						echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="130px" height="130px" />'; ?>
 													
    
						</div>

						<div class="artical-sub-content">
							
					<input type="file" class="change-pic" name="img" id="img"/><button style="margin-right:220px" class="btn btn-default btn-xs" type="submit" name="insertimg"  id="btn"><b>Save Image</b></button>

							 <button onclick="myFunction()" id="refresh" visibility="hidden" style="visibility:hidden"></button>
							
								<?php

								if (isset($_POST['insertimg'])) {

								  $imgdata=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
								  $imgtype=$_FILES["img"]["type"];
									 
									if(substr($imgtype,0,5)=="image")
									 { 	

									 $sql="UPDATE signup_user set image='$imgdata' where email='$email' ";
									 $obj=new config();
									 $obj->dbconfig($sql);
									 echo '<script> document.getElementById("refresh").click(); </script>';

								 	}  } ?>
 							<br>
				
								<div class="container" style="width:400px; margin-top:80px; margin-left:15px;">
								  <table class="table table-hover txt" style="width:400px;">
								    <tbody>

								     

								      <tr><th>UserName :</th><td><input  class="form-control" style="border-color:white; border:0px;" type="text" name="uname" contenteditable  value="<?php echo $row['username'] ?>"/></td></tr>
								      <tr><th>Email :</th><td><input  class="form-control"  style="border-color:white; border:0px;"  type="text"  name="email" contenteditable readonly value="<?php echo $row['email'] ?>"/></td></tr>
								      <tr><th>Password :</th><td><input class="form-control"  style="border-color:white; border:0px;"  type="password" name="paswd"  contenteditable value="<?php echo $row['paswd'] ?>"/></td></tr>
								      <tr><th>Phone No :</th><td><input  class="form-control"  style="border-color:white; border:0px;" type="text" name="phone_no"  contenteditable value="<?php echo $row['phone_no'] ?>"/></td></tr>
								      <tr><th>City :</th><td><input   class="form-control" style="border-color:white; border:0px;" type="text" name="city"  contenteditable value="<?php echo $row['city'] ?>"/></td></tr>	
								      <tr><th>Adress :</th><td><input class="form-control"  style="border-color:white; border:0px;"  type="text" name="adress"  contenteditable value="<?php echo $row['adress'] ?>"/></td></tr>

									</tbody>
								   </table>
								   <button onclick="myFunction()" id="refresh" visibility="hidden" style="visibility:hidden"></button>
								   <button type="submit" class="btn btn-default btn-sm save-btn" name="update_profile">Save Update &nbsp; <span class="glyphicon glyphicon-pencil"></span></button>
								</div>

								<?php

								if (isset($_POST['update_profile'])) {

									$uname=$_POST['uname'];
									$email=$_POST['email'];
									$paswd=$_POST['paswd'];
									$phone_no=$_POST['phone_no'];
									$city=$_POST['city'];
									$adress=$_POST['adress'];

									$sql="UPDATE signup_user set username='$uname',email='$email',paswd='$paswd',phone_no='$phone_no',city='$city',adress='$adress'  where email='$email' ";
								 	$obj=new config();
								 	$obj->dbconfig($sql);
								 	echo '<script> document.getElementById("refresh").click(); </script>';

								 	}   ?>


							<?php } ?>



							
						</div>
						</form>	
					</div>

				</div>


				</div>

			</div>
		</div>
	</div>

<script>
	function myFunction() {
	    location.reload();
	}
</script>

<?php include ('footer.php'); 



?>
</body>
</html>





