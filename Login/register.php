<?php 
	/*
	session_start();
	$con = new mysqli('localhost','root','','newdb');
	if(isset($_POST['rebb'])){

		

		$useN = $con->real_escape_string($_POST['uname']);
		$pass = $con->real_escape_string($_POST['pass']);
		$cpass = $con->real_escape_string($_POST['Cpass']);
		$email = $con->real_escape_string($_POST['email']);

		if($pass!=$cpass){
			echo "Entered Password doesn't match with Confirm Password. Try Again!"; 
		} else {
			$con->mysql_query("INSERT INTO users(username,password,email) VALUES('$useN','$pass','$email')");

		}

	}else echo "Activity Failed";
	*/

	session_start();
	$msg = "";
	//datbase conection string 
	$db = new mysqli("localhost", "root", "", "newdb");
	//submission the registration
	if(isset($_POST['rebb'])){
		//assigning values to php variables while preventing sql injection attacks
		$uname = mysql_real_escape_string($_POST['uname']);
		$pass = mysql_real_escape_string($_POST['pass']);
		$cpass = mysql_real_escape_string($_POST['Cpass']);
		$email = mysql_real_escape_string($_POST['email']);

		
		//confirming password = Confirm Password 
		if($cpass==$pass){
			//creating query string
			$sqlC = "INSERT INTO users(username,password,email) VALUES('$uname','$pass','$email')";
			//executing sql command through database connection
			if($db->query($sqlC))
				{
					?> <script type="text/javascript">
						alert("Registration Complete");
					</script><?php
					$msg ="Registration Complete";
				} else {
					$msg ="Connection Incomplete";
					?> <script type="text/javascript">
						popup("Registration Incomplete. Try Again!");
					</script> <?php

				}

		} else{
			$msg = "Your password dosent Match";

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

