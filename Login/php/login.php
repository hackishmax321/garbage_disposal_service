<?php 
	
	
	//creating variables and assign them to text field values
	try{
		session_start();

		try{
			$usnam = $_POST['username'];
			$pass = $_POST['password'];
			
		}
		catch(Exception $t){

		}
		

		//to start with submit button
		if(isset($_POST['lobb'])) {
			//to avoid sql injections if it's necessary
			/*
			$usnam = mysql_real_escape_string('uname');
			$pass = mysql_real_escape_string('pass');
			*/

			//connecting db
			mysql_connect("localhost","root","");
			mysql_select_db("geo_locator");

			if (($usnam!=null)||($pass!=null)){


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
				$level = 0;
				$_SESSION['uname'] = $usnam;
				$_SESSION['level'] = $level;
				$_SESSION['timeEla'] = time();
				if(preg_match('/ADM*/', $usnam)){
					$_SESSION['level'] = 4;
				} else if(preg_match('/GCA*/', $usnam)){
					$_SESSION['level'] = 3;
				} else if(preg_match('/GCO*/', $usnam)){
					$_SESSION['level'] = 1;
				} else $_SESSION['level'] = 1;
				
				
				?><script type="text/javascript">
					//confirm redirection
					if(confirm("Login successful. Need to get to the Home Page ? "))
					{
						//redirect home page
						window.location.href = "http://localhost:82/Assignment-WEB/Phase%2004/Phase%2002/";
					} else {
						window.location.href="blank.php";
						
						
					}


				</script> <?php
			} else {
				//echo "login failed";
				?><script type="text/javascript">
					//Incorrect login message
					window.location.href="http://localhost:82/Assignment-WEB/Phase%2004/Phase%2002/";
					alert("Username or Password Incorrect.");
				</script><?php
			}


		} else {
			?><script type="text/javascript">
					//Incorrect login message
					window.location.href="http://localhost:82/Assignment-WEB/Phase%2004/Phase%2002/Login/login.php";
					alert("You can't leave username or password without entering values!");
				</script><?php
		}
		}

	}
	catch(Exception $ex){
		$msgh = $ex;
	}
	


?>
