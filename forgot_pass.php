<?php 

include ('includes/config.php');

session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>forgotten password</title>
</head>
<body>

		<form method="post">
			YOUR EMAIL : <br /> <input type="text" name="email" size="30" /> <br/>
			<input type="submit" name="submit" value="Submit">
		</form>
	<?php
	if(isset($_POST['submit']))
	{
     $email =$_POST['email'];
     $submit = $_POST['submit'];

     if ($submit) 
     	{ 
           $email_check = mysql_query("SELECT * FROM signup_user where email='".$email."' ");
           $count = mysql_num_rows($email_check);

        if ($count != 0)
        	{
			$random = rand(72891 , 92729);
			$new_password = $random;
			
			$email_password = $new_password;

			$new_password =md5($new_password);

			mysql_query("UPDATE signup_user SET paswd='".$new_password."'   AND  c_paswd='".$new_password."' WHERE email='".$email."' " );

			$subject = "Login Information";
			$message = "Your password has been changed to $email_password";
			$from = "from: example@example.com";
			mail($email, $subject, $message, $from);
			echo "Your new password has been emailed to you";

        	}   

     	}
}
	?>

</body>
</html>
