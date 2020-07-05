<?php
header('Location:http://localhost:82/Assignment-WEB/Phase%2004/Phase%2002/map-admin.php');
$error = "";
	if(isset($_POST['submit'])){
		$loc = $_POST['txtL'];
		$lat = $_POST['txtLat'];
		$lng = $_POST['txtLng'];
		$des = $_POST['txtm'];
		$img = $_FILES['imageL']['name'];

		$con = new mysqli("localhost","root","", "geo_locator");

		//if($loc == )

		if($con->connect_error){
		    die("Connection Failed");
		  }
		  $error = "Connection Successful";
		  $query1 = "Insert into user_passedGeo(name, latitude, longitude, description, imgName) values('$loc','$lat','$lng','$des','$img')";


		  if ($con->query($query1) === TRUE) {
		  	move_uploaded_file($_FILES['imageL']['tmp_name'], "Locations/$img");
		    $error = "New record created successfully";

		} else {
		    $error = "Error: " . $query1 . "<br>" . $con->error;

		}

	}





?>