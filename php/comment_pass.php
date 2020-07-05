<?php
	session_start();


	$error = "";
	if(isset($_POST['comment'])){
		$name = $_SESSION['uname'];
		$com = $_POST['mes'];
		
		$con = new mysqli("localhost","root","","geo_locator");

		if($con->connect_error){
		    die("Connection Failed");
		  }
		  
		  $error = "Connection Successful";
		  $query1 = "Insert into user_comments(username, comment) values('$name','$com')";
		  echo "I hate You";

		  if ($con->query($query1) === TRUE) {
		    $error = "New record created successfully";
		} else {
		    $error = "Error: " . $query1 . "<br>" . $con->error;

		}

	}



?>