<?php 
	//creating variables and assign them to text field values
	$usnam = $_POST['uname'];
	$pass = $_POST['pass'];

	//to start with submit button
	if(isset($_POST['lobb'])) {
		//to avoid sql injections if it's necessary
		/*
		$usnam = mysql_real_escape_string('uname');
		$pass = mysql_real_escape_string('pass');
		*/

		//connecting db
		mysql_connect("localhost","root","");
		mysql_select_db("newdb");

		//creating variable to query command
		$com = "SELECT * FROM users where username = '$usnam' AND password='$pass'";

		//execute command and assign it to a variable
		$sqlR = mysql_query($com) or die("Error has Occured...");

		//
		$sqlF = mysql_fetch_assoc($sqlR);

		//verifying the values that entered with values in DB
		if($sqlF['username']==$usnam AND $sqlF['password']==$pass)
		{
			echo "login successful";
			?><script type="text/javascript">
				//confirm redirection
				if(confirm("Login successful. Need to get to phpmyadmin ? "))
				{
					//redirect home page
					window.location.href = "http://localhost:82/phpmyadmin/sql.php?server=1&db=geo_locator&table=users&pos=0";
				} else {
					window.location.href="page.lo.php";
					
					
				}


			</script> <?php
		} else {
			echo "login failed";
			?><script type="text/javascript">
				//Incorrect login message
				window.location.href="page_lo.php";
				alert("Username or Password Incorrect.");
			</script><?php
		}



	}


?>
