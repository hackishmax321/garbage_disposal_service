<?php 
	

	session_start();
	$msg = "";
	//datbase conection string 
	$db = new mysqli("localhost", "root", "", "geo_locator");
	//submission the registration
	if(isset($_POST['rebb'])){
		//assigning values to php variables while preventing sql injection attacks
		$uname = mysql_real_escape_string($_POST['username']);
		$pass = mysql_real_escape_string($_POST['passwordl']);
		$cpass = mysql_real_escape_string($_POST['cpassword']);
		$email = mysql_real_escape_string($_POST['email']);

		if(($uname!=null)||($pass!=null)){
			//confirming password = Confirm Password 
			if($cpass==$pass){
				//creating query string
				$sqlC = "INSERT INTO users(username,password,email) VALUES('$uname','$pass','$email')";
				//executing sql command through database connection
				if($db->query($sqlC))
					{
						?> <script type="text/javascript">
							alert("Registration Complete");
							window.location.href = "http://localhost:82/Assignment-WEB/Phase%2004/Phase%2002/Login/login.php";
						</script><?php
						$msg ="Registration Complete";
					} else {
						$msg ="Connection Incomplete";
						?> <script type="text/javascript">
							alert("Registration Incomplete. Try Again!");
						</script> <?php

					}

			} else{
				$msg = "Your password dosent Match";
				?> <script type="text/javascript">
							alert("Password and Confirm password doesn't match. Try Again!");
							window.location.href = "http://localhost:82/Assignment-WEB/Phase%2004/Phase%2002/registation.php";
						</script> <?php

			}


		} else {
			?> <script type="text/javascript">
							alert("You can't put Username or Password fields as Empty!");
							window.location.href = "http://localhost:82/Assignment-WEB/Phase%2004/Phase%2002/Login/registation.php";
						</script> <?php

		}

		

		
		/*
		if(is_null($pass)){
			echo "Don't keep Empty Password Field ";
		} else {
			if($cpass==$pass)
			{
				$sqlV = "SELECT * FROM users WHERE username = '$uname'";
				if($db->query($sqlV)) 
				{
					echo "Entered Username is in use. Enter another";
				} else {
					$sqlC = "INSERT INTO users(username,password,email) VALUES('$uname','$pass','$email')";
					if($db->query($sqlC))
					{
						echo "Registration Complete";
					} else {
						echo "Connection Incomplete";

					}

				}
			}


		}
		*/

	}

/* --------------------<Backup>>-------------------------------------------------

	session_start();
	$msg = "";
	$db = new mysqli("localhost", "root", "", "newdb");
	if(isset($_POST['rebb'])){
		
		$uname = mysql_real_escape_string($_POST['uname']);
		$pass = mysql_real_escape_string($_POST['pass']);
		$cpass = mysql_real_escape_string($_POST['Cpass']);
		$email = mysql_real_escape_string($_POST['email']);

		

		if($cpass==$pass){
			
			$sqlC = "INSERT INTO users(username,password,email) VALUES('$uname','$pass','$email')";
			if($db->query($sqlC))
				{
					$msg ="Registration Complete";
				} else {
					$msg ="Connection Incomplete";

				}

		} else{
			$msg = "Your password dosent Match";

		}



*/


?>

