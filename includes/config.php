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

					die("404 Wrong".$conn-> error);
				}
			}
		}	



}


/**	public function db_select($db,$dbquery,$col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9,$col10){


		include ('conn.php');
		$res=$conn->query($dbquery);

		if ($conn-> connect_error) {
			
			die('Connection Error'.$conn-> connect_error);
		}



		else {

			if ($res->num_rows > 0) {
				
				while ($row=$res->fetch_assoc()) {
				
				return $row[$col1]."".$row[$col1];
					

				}
			}

				else {

					die("404 Wrong".$conn-> error);
				}


			}




		}

	}	

**/


 ?>
