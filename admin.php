<html>
<head>
	<title></title>
	<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<?php include_once('includes/config.php'); ?>
<div class="container container-fluid">
	<div class="row">

		<div class="col-md-4">
			<div class="button"> 
				<a href="?pro"><button class="btn btn-sm btn-primary">Driver Settings</button></a>
				<a href="?pro1"><button class="btn btn-sm btn-primary">Slider Image Upload</button></a>
				<button class="btn btn-sm btn-primary">Under Construction</button>
				<button class="btn btn-sm btn-primary">Under Construction</button>
				<button class="btn btn-sm btn-primary">Under Construction</button>
				<button class="btn btn-sm btn-primary">Under Construction</button>
			</div>
		</div>

	<!--products image upload select/delete and insert code -->
<?php 

	if (isset($_GET['pro']))

	{?>

	<div>
			<form method="post" enctype="multipart/form-data" class="form-inline" >
		
		<div class="col-md-12">
			<table class="th1 table-striped table-hover table-condensed">
 				<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Password</th><th>City</th><th>Phone</th><th>Adress</th><th>Access <span class="glyphicon glyphicon-check"></span><span class="glyphicon glyphicon-hand-left"></span></th></tr>
	
		<?php 

				$sql="SELECT * FROM signup_driver where Access='No' ORDER BY id desc";
				$obj=new config();
				$res=$obj->select($sql);

				while($row=$res->fetch_assoc())
				{ 
 					
 				echo "<tr><td>".$row['id']."</a></td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['password']."</td><td>".$row['city']."</td><td>".$row['phone']."</td><td>".$row['adress']."</td>
				<td><button type='submit' class='btn btn-danger btn-xs' name='Access'><a style='color:white;' href='?nos=".$row['id']."'>Allow</a></button> <button type='submit' class='btn btn-danger btn-xs' name='deny'><a style='color:white;' href='?nos1=".$row['id']."'>Deny</a></button></td></tr>";
				}?>
				</table>

			</div>

	<?php }?>


	<?php 

	if (isset($_GET['nos'])) {

					$num=$_GET['nos'];
					$title="Yes";
					$sql="UPDATE signup_driver SET Access='$title' WHERE id='$num'";
					$obj=new config();
					$obj->dbconfig($sql);	
			} 

	if (isset($_GET['nos1'])) {

					$num=$_GET['nos1'];
					$sql="DELETE FROM signup_driver WHERE id='$num'";
					$obj=new config();
					$obj->dbconfig($sql);	
			} ?>					

<!--END products image upload select delete and insert code -->	


  </div>
</div>
</body>
</html>
























































