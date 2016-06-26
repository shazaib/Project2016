<?php 

	$sql="insert into config values('localhost','ahmad','shahid','karachi')";
	require ('includes/config.php');
	$obj=new config();
	$obj->dbconfig($sql);
	echo "Inserted";


	



 ?>