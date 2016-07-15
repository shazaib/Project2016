<?php 

	class config {

		public function dbconfig($sql) {

			include ('conn.php');

			if ($conn-> connect_error) {
			
				die("Database Error".$conn-> connect_error);

			}

			else {

				if ($conn->query($sql)===TRUE) {

				}

				else {

					die("404 Wrong ".$conn-> error);
				}
			}
		}



		function select($sql){

			include ("conn.php");

			if ($conn-> connect_error) {
				
				die("Database Error".$conn-> connect_error);
			}

			else {

				$res=$conn->query($sql);
				return $res;

			}

		}
}



 ?>
