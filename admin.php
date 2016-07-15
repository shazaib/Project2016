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
 				<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Password</th><th>City</th><th>Phone</th><th>Through</th><th>Access <span class="glyphicon glyphicon-check"></span><span class="glyphicon glyphicon-hand-left"></span></th></tr>
	
		<?php 

				$sql="SELECT * FROM tb_driver ORDER BY id desc";
				$obj=new config();
				$res=$obj->select($sql);

				while($row=$res->fetch_assoc())
				{ 
 					
 				echo "<tr><td>".$row['id']."</a></td><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['password']."</td><td>".$row['city']."</td><td>".$row['phone']."</td><td>".$row['select_driver']."</td>
				<td><button type='submit' class='btn btn-danger btn-xs' name='Access'><a style='color:white;' href='?nos=".$row['id']."'>Allow</a></button> <button type='submit' class='btn btn-danger btn-xs' name='deny'><a style='color:white;' href='?nos1=".$row['id']."'>Deny</a></button></td></tr>";
				}?>
				</table>

			</div>

	<?php }?>


	<?php 

	if (isset($_GET['nos'])) {

					$num=$_GET['nos'];
					$sql="INSERT INTO signup_driver  SELECT * FROM tb_driver WHERE id='$num'";
					$sqls="DELETE FROM tb_driver WHERE id='$num'";
					$obj=new config();
					$obj->dbconfig($sql);
					$obj->dbconfig($sqls);
			
			}


	 if (isset($_GET['nos1'])) {

					$num=$_GET['nos1'];
					$sql="DELETE FROM tb_driver WHERE id='$num'";
					$obj=new config();
					$obj->dbconfig($sql);		
			} ?>		

<!--END products image upload select delete and insert code -->	






<!--START SLider images upload select delete and insert code -->

<?php 

	if (isset($_GET['pro1'])) 
	
	{?>

	<div>
			<form method="post" enctype="multipart/form-data" class="form-inline" >
		<div class"col-md-6">
				<table class="table table-striped table-hover table-condensed">
					
				<tbody>
				<tr><td><input  class="form-control input-sm"  type="text" name="img_name" placeholder="Image Name"/></td></tr>
				<tr><td><input  class="form-control input-sm" type="file" name="img" placeholder="Image"/></td></tr>
				<tr><td align="right"><button  type="submit" class="btn btn-sm btn-primary" name="btn_slider_img">Insert image</button></td></tr>
				</tbody>
			</table>
		</div>

		
		<div class="col-md-12">
			<table class="th1 table-striped table-hover table-condensed">
 				<tr><th>Id</th><th>Image Name</th><th>Image Url</th><th><span class="glyphicon glyphicon-arrow-down"></span><span class="glyphicon glyphicon-trash"></span></th></tr>
			
	

			<?php 


				$sql="SELECT * FROM slider";
				$obj=new config();
				$res=$obj->select($sql);

				while($row=$res->fetch_assoc())
				{ 
 					
 				echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['image_url']."</td>
				<td><button type='submit' class='btn btn-danger btn-xs' name='delete'><a href='?no=".$row['id']." & ?d=delete '>Delete</a></button></td></tr>";

				} ?>
				</table>



			</div>
			</form>
		
	</div>

			<?php 

			if (isset($_POST['btn_slider_img'])) {



				$img_name=$_POST['img_name'];
				$img_file='images/'.$_FILES['img']['name'];


				$sql="INSERT INTO slider VALUES ('','$img_name','$img_file')";
				$obj=new config();
				$obj->dbconfig($sql);
					
				}	
          ?>

<?php } ?>


		<?php if (isset($_GET['no'])) {

						$num=$_GET['no'];
						$sql="DELETE FROM slider WHERE id='$num' ";
						$obj=new config();
						$obj->dbconfig($sql);

						}
		 ?>



<!--END SLider images upload select delete and insert code -->





  </div>
</div>
</body>
</html>
























































