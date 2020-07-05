<?php
header('Location:http://localhost:82/Assignment-WEB/Phase%2004/Phase%2002/map-users.php');
$error = "Crack";
	if(isset($_POST['submit2'])){
		$loc = $_POST['txtLoc'];
		$lat = $_POST['txtLati'];
		$lng = $_POST['txtLngi'];
		$des = $_POST['txtme'];
		
		$con = new mysqli("localhost","root","", "geo_locator");

		//if($loc == )

		if($con->connect_error){
		    die("Connection Failed");
		  }
		  $error = "Connection Successful";
		  $query1 = "Insert into user_passedGeo(name, latitude, longitude, description) values('$loc','$lat','$lng','$des')";


		  if ($con->query($query1) === TRUE) {
		    $error = "New record created successfully";

		} else {
		    $error = "Error: " . $query1 . "<br>" . $con->error;

		}

	}





?>